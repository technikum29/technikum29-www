/**
 * Ein bisschen Dynamik-Funktionalitaet fuer die Startseite
 *
 * --> war mal startseite.js, ist jetzt zu termine.js geworden
 **/

$(function() {
	// Archiv-Button
	$("div.termine").hide();
	$("a.archiv-toggle").toggle(function(){
		$('div.termine').slideDown();
		//$(this).slideUp();
		$(this).text("Vergangene Termine ausblenden");
	}, function() {
		$('div.termine').slideUp();
		$(this).text("Vergangene Termine einblenden");
	});
	
	// Anmelde-Button
	anmeldung_zeigen = function() {
		// rausfinden, ob Funktion durch Button in einem konkreten Termin aufgerufen wurde
		$termin = $(this).closest(".termin");
		called_with_termin = $termin.length;
		
		$anmeldebox = $('<div class="anmelde-maske dynamisch"><h2>Anmelden</h2><p>Hier können Sie sich für eine Veranstaltung anmelden</p></div>');
		$.get('/de/anmeldung.php?ajax', function(data) {
			form = $(data).find(".anmelde-maske").html();
			$anmeldebox.append(form);
			
			// Termine aus Startseite extrahieren
			veranstaltungen = $("#termine .box.termin").not(".archiv .termin");
			
			if(veranstaltungen.length > 1 && !called_with_termin) {
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
			} else if(veranstaltungen.length == 1 || called_with_termin) {
				// nur ein Termin angeboten:
				// statt chooser einfach fixe Vorgabe machen (keine Auswahlmoeglichkeit)
				$anmeldebox.find("input[name='veranstaltung']").val(
					(called_with_termin ? $termin : veranstaltungen).find('h4').text());
				$anmeldebox.find("input[name='termin']").val(
					(called_with_termin ? $termin : veranstaltungen).find('dd.termin').text());
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
			
			//$anmeldebox.hide().append($termin); ///.insertBefore('.archiv');
			$anmeldebox.hide().appendTo($termin).slideDown();
			
			/*
			if(called_with_termin) {
				// $anmeldebox einsliden und hinscrollen, weil man sich ja weiter oben befindet
				
				$anmeldebox.show();
				$("html,body").animate({
					scrollTop: $anmeldebox.offset().top
				}, 1200);
				
			} else {
				// $anmeldebox sofort einsliden, weil Button in Buttonbox genau da ist wo Anmeldemaske.
				$anmeldebox.slideDown();
			}
			*/
			
			js_show_captcha = false;
			if(js_show_captcha) {
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
			}
		});
		
		// + load css
		t29.load.pagestyle("anmeldung");
		
		// Don't follow link
		return false;
	};
	//$("a.anmeldung-btn, a.anmeldung").click(anmeldung_zeigen);
	$("dd.anmelden button").click(anmeldung_zeigen);
});
