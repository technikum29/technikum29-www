/**
 * Ein bisschen Dynamik-Funktionalitaet fuer die Startseite
 *
 **/

$(function() {
	// Archiv-Button
	$("a.archiv-btn").click(function(){
		$('#termine .archiv').slideDown();
		$(this).slideUp();
	});
	
	// Anmelde-Button
	$("a.anmeldung-btn").click(function() {
		$anmeldebox = $('<div class="anmelde-maske dynamisch"><h2>Anmelden</h2><p>Hier können Sie sich für eine Veranstaltung anmelden</p></div>');
		$.get('/de/anmeldung.php?ajax', function(data) {
			form = $(data).find(".anmelde-maske").html();
			$anmeldebox.append(form);
			
			// Termine aus Startseite extrahieren
			veranstaltungen = $("#termine .box.termin");
			
			if(veranstaltungen.length) {
				// Input-Box durch Chooser ersetzen
				$anmeldebox.find("input[name='text_veranstaltung']").replaceWith('<select name="text_veranstaltung"></select>');
				$ver_select = $anmeldebox.find("select[name='text_veranstaltung']");
				
				$.each(veranstaltungen, function() {
					name = $(this).find('h4').text();
					datum = $(this).find('dd.termin').text();
					
					$('<option/>').text(name).data({
						'ver_element': this,
						'ver_datum': datum
					}).appendTo($ver_select);
				});
				
				$terminbox = $anmeldebox.find("dd.termin");
				$terminbox.html("leer");
				
				$ver_select.change(function() {
					if(d = $(this).find(':selected').data('ver_datum'))
						$terminbox.text(d);
				}).change();
			}
			
			// Abbrechen-Button mit Funktion befüllen
			$anmeldebox.find("input[type=reset]").click(function(){
				a = confirm("Soll die Anmeldung verworfen werden?");
				if(a) {
					$anmeldebox.slideUp(function(){
						$anmeldebox.remove();
					});
					$("a.anmeldung-btn").show();
				} else return false
			});
			
			$anmeldebox.hide().insertBefore('.archiv').slideDown();
			$("a.anmeldung-btn").slideUp();
		});
		
		// + load css
		t29.load.pagestyle("anmeldung");
		
		return false;
	});
	
});