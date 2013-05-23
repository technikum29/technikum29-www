/**
 * Ein bisschen Dynamik-Funktionalitaet fuer die Startseite
 *
 **/

$(function() {
	// Archiv-Button
	$("a.archiv-btn").toggle(function(){
		$('#termine .archiv').slideDown();
		//$(this).slideUp();
		$(this).text("Vergangene Termine ausblenden");
	}, function() {
		$('#termine .archiv').slideUp();
		$(this).text("Vergangene Termine einblenden");
	});
	
	// Anmelde-Button
	anmeldung_zeigen = function() {
		$anmeldebox = $('<div class="anmelde-maske dynamisch"><h2>Anmelden</h2><p>Hier können Sie sich für eine Veranstaltung anmelden</p></div>');
		$.get('/de/anmeldung.php?ajax', function(data) {
			form = $(data).find(".anmelde-maske").html();
			$anmeldebox.append(form);
			
			// Termine aus Startseite extrahieren
			veranstaltungen = $("#termine .box.termin").not(".archiv .termin");
			
			if(veranstaltungen.length > 1) {
				// Input-Box durch Chooser ersetzen
				$anmeldebox.find("input[name='veranstaltung']").replaceWith('<select name="veranstaltung"></select>');
				$ver_select = $anmeldebox.find("select[name='veranstaltung']");
				
				$.each(veranstaltungen, function() {
					name = $(this).find('h4').text();
					datum = $(this).find('dd.termin').text();
					
					$('<option/>').text(name).data({
						'ver_element': this,
						'ver_datum': datum
					}).appendTo($ver_select);
				});
				
				$terminbox = $anmeldebox.find("dd.termin");
				$terminbox.find("input").replaceWith('<input type="hidden" name="termin">');
				$terminbox.append("<span>leer</span>");
				
				$ver_select.change(function() {
					if(d = $(this).find(':selected').data('ver_datum')) {
						$terminbox.find("input").val(d);
						$terminbox.find('span').text(d);
					}
				}).change();
			} else if(veranstaltungen.length == 1) {
				// nur ein Termin angeboten:
				// statt chooser einfach fixe Vorgabe machen (keine Auswahlmoeglichkeit)
				$anmeldebox.find("input[name='veranstaltung']").val(veranstaltungen.find('h4').text());
				$anmeldebox.find("input[name='termin']").val(veranstaltungen.find('dd.termin').text());
			}
			
			// Abbrechen-Button mit Funktion befüllen
			anmeldung_abbrechen = function(){
				a = confirm("Soll die Anmeldung verworfen werden?");
				if(a) {
					$anmeldebox.slideUp(function(){
						$anmeldebox.remove();
					});
					$("a.anmeldung-btn").text("Zu Führung anmelden").off().click(anmeldung_zeigen);
					return false; // ist eh egal da formular geloescht wird
				} else return false
			};
			
			$("a.anmeldung-btn").text("Anmeldung abbrechen").off().click(anmeldung_abbrechen);
			$anmeldebox.find("input[type=reset]").click(anmeldung_abbrechen);
			
			// Submit-Button mit lightweight form checking client side befaehigen
			$anmeldebox.find("form").submit(function(){
				i = ['veranstaltung', 'termin', 'anmelder_name', 'email_adresse'];
				$.each(i, function(){
					ie = $anmeldebox.find("input[name='"+this+"']");
					if(/^\s*$/.test(ie.val())) {
						alert("Bitte füllen Sie die Anmeldung vollständig aus");
						ie.focus();
						return false;
					}
				});
			});
			
			$anmeldebox.hide().insertBefore('.archiv').slideDown();
			
			// Bugfix: Recaptcha kann nicht per JavaScript inserted werden, muss also
			// per AJAX nachgeladen werden
			t29_recaptcha_insert_id = "t29-recaptcha-insert";
			$captcha_box = $anmeldebox.find(".t29-recaptcha").attr("id", t29_recaptcha_insert_id);
			publickey = $anmeldebox.find(".t29-recaptcha").data("publickey");
			if($captcha_box.length) // only load if captchas enabled 
			    t29.load.js("http://www.google.com/recaptcha/api/js/recaptcha_ajax.js", function() {
				 Recaptcha.create(publickey, t29_recaptcha_insert_id, {
					theme: "clean",
					callback: Recaptcha.focus_response_field
				 });
			});
		});
		
		// + load css
		t29.load.pagestyle("anmeldung");
		
		return false;
	};
	$("a.anmeldung-btn").click(anmeldung_zeigen);
});