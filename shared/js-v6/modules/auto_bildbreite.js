/**
 * technikum29.de | javscripts: auto-bildbreite
 *
 * Zur Ergaenzung des Bildbox-Konzepts wurde Januar 2010 die automatische
 * Erkennung der Breiten der Bilder hinzugefuegt. Funktionsweise:
 *
 * <div class="box center auto-bildbreite">
 *   <img ... />
 *   <p class="bildtext"> bla bla bla </p>
 * </div>
 * 
 * Im Januar wurde ein 60-zeiliges JavaScript geschrieben, was nun in einen
 * jQuery-oneliner (!) migriert wurde
 **/

if(!t29) window.t29 = {}; // the t29 namespace

t29.auto_bildbreite = {};
t29.auto_bildbreite.setup = function() {
	$("div.auto-bildbreite, div.desc-right, div.desc-left")
		.each(function(){ $(this).css("width", $("img", this).width()); });
}
