<?php
/**
 * technikum29v6 Page Template, ajax version
 * Initially written 09.05.2013, Sven Koeppel
 *
 **/

class t29AJAXTemplate {
	public $conf;

	function __construct($conf_array) {
		$this->conf = $conf_array;
		
		// ask t29Host for configuration fillup
		$this->conf['host']->fillup_template_conf($this->conf);
		
		// setup html title
		$this->conf['html_title'] = '';
		if(isset($this->conf['titel']) && !empty($this->conf['titel']))
			$this->conf['html_title'] = $this->conf['titel'] . ' - ';
	}

	function print_page() {
		register_shutdown_function(function() {
			?>
			<!-- crafted ajaxified t29 template version -->
			</div><!-- content -->
			</body></html>
			<?php
		});
?>
<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <title><?php echo $this->conf['html_title']; ?></title>
  <meta name="author" content="technikum29-Team">
  <meta name="generator" content="<?php print $this->conf['host']; ?>">
  <meta name="t29.cache" content="no">
  <meta name="t29.ajax" content="true">
</head>
<body class="ajax">
<div class="content ajax">
<?php

	} // end of print_page().
} // end of class