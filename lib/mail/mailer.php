<?php

/**
 * New generic formmailer for technikum29 infrastructure
 **/

$maillib = dirname(__FILE__);
require "$maillib/recaptchalib.php";

$key_file = "$maillib/recaptcha_keys.php";
$recaptcha_keys_loaded = null;
if(file_exists($key_file)) {
	include $key_file;
	// now in global scope:
	// $publickey, recaptcha_get_answer, recaptcha_get_html etc.
	$recaptcha_keys_loaded = true;
} else
	$recaptcha_keys_loaded = false;
 
// This script can be used as standalone or libary.
if(realpath($_SERVER['SCRIPT_FILENAME']) == __FILE__) {
	$mailer = new t29Mailer($_REQUEST);
	$mailer->run();
}

class t29Mailer {
	function print_usage() {
		// problem: vars kriegt man nicht global, require include raum auch nicht global.
		// bad design.
		/*global $seiten_id, $version, $titel, $dynamischer_inhalt, $lib;
		$seiten_id = 'mailer';
		$version = '$Id$';
		$titel = "t29v6 form mailer usage";
		$dynamischer_inhalt = true;

		$lib = "./";
		require "$lib/technikum29.php";*/
?>
<html>
<h2>Usage</h2>

<p>This small mail system is capable of:

<ul>
	<li>Mail to upstream and acknowledgement mail back to sender
	<li>Template based or individual output page with arguments
</ul>


<h3>Get or Post variables</h3>
<table>
<tr><th>name <th>default value <th>interpretation
<tr><th>to   <td>sven          <td>one e-mail prefix, will be used with <tt>@technikum29.de</tt>,
                                   so mail goes to e.g. <tt>thevalue@technikum29.de</tt>.
<tr><th>subject	<td>           <td>Subject of the mail. Can contain template variables like {foo}, where foo is some other
                                   variable.
<tr><th>body<td>		<td>Body of the mail. Can contain template variables.
                                   

<tr><th>ack   <td>false/no	<td>Give true/yes for sending an ack mail.
<tr><th>ack_to	<td>		<td>Target adress to send acknowledgement mail to. Can contain template variables like {data_sender_mail}.
<tr><th>ack_subject  <td>	<td>Like subject, but for ack mail.
<tr><th>ack_body	<td>	<td>Like body.


</table>

	<?php } // end of method print_usage()
	
	// the small data holding architecture
	public $_values;
	// Security: Captcha checking not on $_values basis since that is regularily provided by
	// POST or REQUEST data which are directly given by user => spambots could disable captcha check
	public $enable_captcha_check = true;
	
	function __construct(Array $data=array()) {
		// default values
		$default_values = array(
			"to" => "sven",
			"subject" => "technikum29 form mailer",
			"body" => null,
			"ack" => false,
			
			'header' => null, // has to be array
			
			"output_success_page" => '<html><h2>Mail successfully sent</h2><p>Thank you for your mail.</p>',
			"output_error_page" => function($mailer, $error) {
				?><html>
				<h1>Errors in mail</h1>
				<form method="POST">
					<p>Please fill out this captcha to send the mail. We don't like spam:</p>
					<?php $mailer->print_serialized_hidden_form(); ?>
					<?php echo $error; ?>
					<input type="submit" value="Yes I am human">
				</form><?php
			},
			
			"mail_info_append_text" => function($mailer) {
				$time = date('r');
				$ret = <<<EOT

Diese Mail wurde mit einem der technikum29 Web-Form-Mailer geschickt,
und zwar dem t29v6-NG Formmailer. Ein Besucher hat also auf einer Webseite
im technikum29.de-Angebot ein Formular ausgefüllt und daraufhin wurde
diese Mail verschickt.

Adresse wo Benutzer herkam: $_SERVER[HTTP_REFERER]
Zeit, zu der der Besucher die Mail verschickte: $time
Browser des Benutzers (User-Agent): $_SERVER[HTTP_USER_AGENT]
IP-Adresse des Besuchers: $_SERVER[REMOTE_ADDR]

EOT;

				if($mailer->ack) $ret .= <<<EOT1

Der Besucher bekam dafür eine Bestätigungsmail an die Adresse
{$mailer->ack_to}  .

EOT1;
				return $ret; },
			
			"recaptcha_challenge_field" => false,
			"recaptcha_response_field" => false
		); // end of default values
		
		// merge given values
		$this->_values = array_merge($default_values, $data);
	} // end of constructor
	
	
	public function __set($property, $value){
		return $this->_values[$property] = $value;
	}

	public function __get($property){
		return array_key_exists($property, $this->_values)
			? $this->_values[$property]
			#: #(array_key_exists($property, $this->default_values)
			#	? $this->default_values[$property]
				: null;
	}
	public function __isset($property) {
		return isset($this->$property) || isset($this->_values[$property]); # || isset($this->default_values[$property]);
	}
	
	// the system
	public function run() {
		global $recaptcha_keys_loaded;
	
		if(empty($this->_values)) {
			$this->print_usage();
			return;
		}
		
		// check captcha and check presence of important field
		if(!$this->to || !$this->body) {
			// bubu
		}
		
		// show captcha validation, if neccessary
		if($recaptcha_keys_loaded && $this->enable_captcha_check && !$this->check_captcha()) {
			return false;
		}
		
		// send the ACK mail, if appropriate
		if($this->ack) {
			$this->ack_to = $this->call_or_return_callback('ack_to');
			$this->ack_subject = $this->call_or_return_callback('ack_subject');
			$this->ack_body = $this->call_or_return_callback('ack_body');
			$this->send_mail($this->ack_to, $this->ack_subject, $this->ack_body);
		}
		
		// send the mail to t29
		$this->to .= '@technikum29.de';
		$this->body = $this->call_or_return_callback('body');
		$this->body .= $this->call_or_return_callback('mail_info_append_text');
		$this->subject = $this->call_or_return_callback('subject');
		$this->send_mail($this->to, $this->subject, $this->body);
		
		// show output page
		$this->show_output_page('success');
		
		return true;
	}
	
	public function send_mail($to, $subject, $message_body)  {
		// compose the header
		$header = is_array($this->header) ? $this->header : array();
		$testset = function($k, $v) use(&$header) { if(!isset($header[$k])) $header[$k] = $v; };

		$testset('Content-Type', 'text/plain; charset=UTF-8'); // all t29v6 is utf-8 based!
		$testset('From', 'technikum29 Computer Musem Webmailer <www@technikum29.de>');
		
		$additional_headers = join("\r\n", array_map(function($k) use(&$header) { return "$k: ".$header[$k]; }, array_keys($header)));
	
		// debug output
		$debug_mail = function($t, $s, $m, $a) {
			print "<div class='hidden'>";
			print "<h2>Debug Mail Output</h2>";
			print "<dl><dt>To<dd>$t <dt>Subject <dd>$s <dt>Message <dd><pre>$m</pre> <dt>Add. Headers <dd><pre>$a</pre></dl>";
			print "</div>";
		};
		
		$debug_mail($to, $subject, $message_body, $additional_headers);
		mail($to, $subject, $message_body, $additional_headers);
	}
	

	public static function recaptcha_get_publickey() {
		global $publickey;
		return $publickey;
	}
	public static function recaptcha_get_html() {
		global $publickey;
		return recaptcha_get_html($publickey);
	}
	
	public function print_serialized_hidden_form() {
		// serialize obect to hidden form elements
		foreach($this->_values as $k => $v) {
			if(!is_string($v)) continue;
			printf("\t<input type='hidden' name='%s' value='%s'>\n", $k, htmlentities($v, ENT_QUOTES | ENT_HTML401));
		}
	}
	
	public function call_or_return_callback($property, $additional_argument=null) {
		if(!isset($this->_values[$property]))
			return null;
		if(is_callable($this->_values[$property])) {
			return call_user_func($this->_values[$property], $this, $additional_argument);
		}
		elseif(is_string($this->_values[$property])) {
			// make string replacements
			$mailer = $this; // PHP 5.3 convenience
			return preg_replace_callback("/\{([^}]+)\}/", function($match) use ($mailer) {
				$identifier = $match[1];
				return isset($mailer->_values[$identifier])
					? $mailer->_values[$identifier]
					: "{?$identifier?}";
			}, $this->_values[$property]);
		}
		
	}
	
	public function call_or_print_callback($property, $additional_argument=null) {
		$ret = $this->call_or_return_callback($property, $additional_argument);
		if($ret != null) print $ret;
		return true;
	}
	
	public function show_output_page($type, $additional_argument=null) {
		$id = "output_${type}_page";
		$this->call_or_print_callback($id, $additional_argument);
	}
	

	/**
	 * Check the Recaptcha challenge status and display an error page if
	 * neccessary
	 **/
	public function check_captcha() {
		global $publickey;
		$resp = $this->check_captcha_answer();
		
		if($resp === null) {
			$page = recaptcha_get_html($publickey);
			$this->show_output_page('error', $page);
			return false;
		} else if(!$resp->is_valid) {
			// display page
			$page = recaptcha_get_html($publickey, $resp->error);
			$this->show_output_page('error', $page);
			return false;
		} else {
			// valid answer
			return true;
		}
	}
	
	/**
	 * Check the Captcha challenge field.
	 * Return value is a Response object which basically allows to
	 * differ three states:
	 *   $ret == null => no challenge answer present
	 *   $ret->is_valid == true => captcha answered valid (human detected)
	 *   $ret->is_valud == false => captcha answered false (no human detected)
	 *
	 * You can use $ret->error for a further call of
	 *   recaptcha_get_html($publickey, $ret->error);
	 *
	 * @returns librecaptcha Result object
	 **/
	public function check_captcha_answer() {
		global $publickey, $privatekey;
		
		# the response from reCAPTCHA
		$resp = null;
		# the error code from reCAPTCHA, if any
		$error = null;
		# display captcha? default: yes!
		$display_captcha = true;

		if(!$this->recaptcha_challenge_field || !$this->recaptcha_response_field)
			return null;
	
		$resp = recaptcha_check_answer ($privatekey,
			$_SERVER["REMOTE_ADDR"],
			$this->recaptcha_challenge_field,
			$this->recaptcha_response_field);
		return $resp;
	}
} // end of class t29Mailer
