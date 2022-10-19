/**
 * technikum29.de | javascripts: links to headings
 *
 * Um auf Ueberschriften direkt verweisen zu können, erzeugt diese Funktion
 * fuer jede Ueberschrift einen Anker, der dann per CSS formatiert wird.
 * Ankernamen koennen etwa mit
 *  <h2 id="Ankername">...
 *  <h3 title="Ankername">...
 * erzwungen werden. Ansonsten wird wie in Wikipedia die Ueberschrift selbst
 * verwendet:
 *  <h2>Foo Bar</h2>  =>  #Foo_Bar
 **/

if(!t29) window.t29 = {}; // the t29 namespace

t29.heading_links = {};
t29.heading_links.setup = function() {
	$("#content").find("h2,h3").not("h2:first").each(function(){
		anchor = ($(this).attr("title") || $(this).attr("id") || $(this).text())
			.replace(/\s+/g, '_').replace(/[?!"']/g, '').replace(/^_+|_+$/g, '');
		$("<a class='anchor'> \u00B6</a>").attr({
			href: "#"+anchor,
			name: anchor,
			title: t29._('js-heading-links')
		}).appendTo(this);
		// the heading shall be the link target, for having a padding
		// to the browser top edge.
		$(this).attr('id', anchor);
	});
	
	// Opera und Internet Explorer machen mit, Firefox nicht, also:
	if((hash=location.hash.substr(1)).length && (link=$("a[name="+hash+"]")).length)
		//$('html, body').animate({scrollTop: link.offset().top}, 1000);  // smooth scrolling
		$('html, body').scrollTop(link.parent().offset().top); // springen
}