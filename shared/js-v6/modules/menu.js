/**
 * t29v6 Menu
 *
 * Features:
 *  - Collapsable (can be expanded by button)
 *  - Scrollable (can be maked position:fixed by button)
 *  - Guide beam (footer clone of navigation in a fancy beam like way)
 *
 * Language-specific strings are taken from t29.msg.
 *
 * (c) 2012 Sven Koeppel <sven@tech..29.de>
 * Licensed under GPL
 **/

if(!t29) window.t29 = {}; // the t29 namespace
 
t29.menu = { collapsed:{}, scroll:{}, guide:{} }; // mit Unterklassen
t29.menu.setup = function() {
	t29.menu.side = $("nav.side");   // Hauptseitennavigation
	t29.menu.beam = $("nav.guide");  // Strahlnavigation/Guide (Kopie von side)
	t29.menu.rel = $("nav.rel");     // relative navigation im footer (vor/zurück)
	t29.menu.collapsed.setup();
	t29.menu.scroll.setup();
	t29.menu.guide.setup();
};

//////////////////////////// Menu Collapsed System.
/**
 * Menu ein- oder ausklappen.
 * @param target_state  true: Eingeklappt, false: ausgeklappt
 * @param quick  true=keine Animation, false/undefined=Animation
 **/
t29.menu.collapsed.set = function(collapse, quick) {
	if(collapse==undefined) collapse = !t29.menu.collapsed.is();
	log("Collapse zu "+(collapse?"KLEIN":"GROß")+" quick="+quick);
	if(quick) collapse ? t29.menu.collapsed.lists.hide() : t29.menu.collapsed.lists.show();
	else      collapse ? t29.menu.collapsed.lists.slideUp() : t29.menu.collapsed.lists.slideDown();
	t29.menu.collapsed.but.text(t29._(collapse ? "js-menu-collapse-out" : "js-menu-collapse-in"));
	collapse ? $("html").addClass("collapsed-menu") : $("html").removeClass("collapsed-menu");
}
// returns whether menu is collapsed (boolean).
t29.menu.collapsed.is = function() { return $("html").hasClass("collapsed-menu"); };
t29.menu.collapsed.setup = function() {
	t29.menu.collapsed.but = $('<span class="button collapse-menu"></span>').appendTo("nav.side");
	t29.menu.collapsed.lists = $("nav.side .u3").not("nav.side li.active > .u3"); // ein/auszuklappende Listen
	t29.menu.collapsed.set(true, true); // initial state
	t29.menu.collapsed.but.click(function(){ t29.menu.collapsed.set(); });
};

//////////////////////////// Menu Scroll System
// enums, die CSS-Klassen im <html> entsprechen:
t29.menu.scroll.States = Object.freeze({STATIC:"static-menu",FIX:"fixed-menu",STICK_TOP:"stick-top-menu",STICK_BOTTOM:"stick-bottom-menu"});
/**
 * Menuezustand beim Scrollen umschalten.
 * @param target_state Zustand aus scroll.States-Enum
 * @param 
 *
 **/
t29.menu.scroll.set = function(target_state) {
	old_state = t29.menu.scroll.state;
	t29.menu.scroll.state = target_state;
	$("html").removeClass("static-menu fixed-menu stick-top-menu stick-bottom-menu").addClass(t29.menu.scroll.state);
	
	// Aufraeumen nach altem Status:
	switch(old_state) {
		case t29.menu.scroll.States.STICK_BOTTOM:
			t29.menu.side.attr("style",""); // reset css "top" value for positioning
			break;
	}
	
	// Einrichten des neuen Status:
	log("Gehe in Scroll-Zustand "+target_state);
	switch(target_state) {
		case t29.menu.scroll.States.STICK_TOP:
			// Menue schlaegt obene an. Prinzipiell Gleicher Zustand wie STATIC. Weiter.
		case t29.menu.scroll.States.STATIC:
			// die CSS-Klassen regeln eigentlich alles.
			t29.menu.collapsed.but.show();
			t29.menu.scroll.but.text(t29._("js-menu-scroll-show"));
			t29.menu.side.show();
			break;
		case t29.menu.scroll.States.FIX:
			// checken ob fixing ueberhaupt geht
			/*
			if( !t29.menu.collapsed.is() && t29.menu.side.height() > $(window).height()) {
				// Navi ist gerade ausgeklappt und zu groß fuer Bildschirm. Probiere Einklappen:
				t29.menu.collapsed.set(true, true);
				if(t29.menu.side.height() > $(window).height()) {
					// Navi ist auch eingeklappt noch zu groß!
					log("Navi ist auch eingeklappt zu groß zum fixen!");
					// eingeklappt lassen. Weitermachen.
					// hier noch was ueberlegen: Bei zu kleinem Bildschirm
					// sollte der Button gar nicht erst angezeigt werden.
					// dazu braucht man einen resize-Listener, der aber im
					// ausgeklappten zustand jedesmal checken müsste, ob das
					// eingeklappte menue reinpasst. (werte muss man cachen)
					// Ziemlich doofe Aufgabe.
				}
			}*/

			t29.menu.collapsed.set(true, true); // Sicherstellen, dass Navi eingeklappt.
			t29.menu.collapsed.but.hide(); // Ausgeklappte Navi passt auf keinen Bildschirm.
			t29.menu.scroll.but.text(t29._("js-menu-scroll-hide"));
			break;
		case t29.menu.scroll.States.STICK_BOTTOM:
			// Position absolute; Top-Position manuell setzen.
			t29.menu.side.css({top: t29.menu.scroll.stick_bottom });
			break;
		default:
			log("Schlechter Zustand: "+target_state);
	}
}

t29.menu.scroll.setup = function() {
	t29.menu.scroll.but = $('<span class="button get-menu"></span>').appendTo("section.sidebar");
	t29.menu.scroll.set(t29.menu.scroll.States.STATIC); // initial state
	
	t29.menu.scroll.but.click(function(){
		switch(t29.menu.scroll.state) {
			case t29.menu.scroll.States.STATIC:
				// zu Fix uebergehen, mit Animation.
				t29.menu.side.hide();
				t29.menu.scroll.set(t29.menu.scroll.States.FIX);
				t29.menu.side.fadeIn();
				break;
			case t29.menu.scroll.States.FIX:
			case t29.menu.scroll.States.STICK_BOTTOM:
				// zu Static uebergehen, mit Animation.
				t29.menu.side.fadeOut(function(){
					t29.menu.scroll.set(t29.menu.scroll.States.STATIC); });
				break;
			case t29.menu.scroll.States.STICK_TOP:
			default:
				// diese Faelle sollten nicht vorkommen.
				log("Get-Menu Scroll-Button gedrückt obwohl unmöglich; state="+t29.menu.scroll.state);
		}
	}); // end event t29.menu.scroll.but.click.
	
	// nun ein paar Y-Koordinaten. berechnet mit dem Ausgangs-menu.side (STATIC).
	t29.menu.scroll.origin_top = t29.menu.side.offset().top;
	t29.menu.scroll.max_bottom = $("footer").offset().top - t29.menu.side.height();
	t29.menu.scroll.stick_bottom = $("footer").offset().top - t29.menu.side.height() - $("#background-color-container").offset().top;
	t29.menu.scroll.button_max_bottom = $("footer").offset().top;
	//t29.menu.scroll.max_bottom - $("#background-color-container").offset().top;

	$(window).scroll(function(){
		var y = $(this).scrollTop();

		switch(t29.menu.scroll.state) {
			case t29.menu.scroll.States.STATIC: break; // System inaktiv.
			case t29.menu.scroll.States.FIX: 
				if(y < t29.menu.scroll.origin_top)
					t29.menu.scroll.set(t29.menu.scroll.States.STICK_TOP);
				else if(y > t29.menu.scroll.max_bottom)
					t29.menu.scroll.set(t29.menu.scroll.States.STICK_BOTTOM);
				break;
			case t29.menu.scroll.States.STICK_TOP:
				if(y > t29.menu.scroll.origin_top) {
					// wir sind wieder weiter runter gescrollt.
					if(t29.menu.collapsed.is())
						// und der Benutzer hat zwischenzeitlich nicht das Menue ausgeklappt
						t29.menu.scroll.set(t29.menu.scroll.States.FIX);
					else
						// der Benutzer hat zwischenzeitlich ausgeklappt. Schalte fixing aus.
						t29.menu.scroll.set(t29.menu.scroll.States.STATIC);
				}
				break;
			case t29.menu.scroll.States.STICK_BOTTOM:
				if(y < t29.menu.scroll.max_bottom) {
					// wir sind wieder weiter hoch gescrollt. Entcollapsen bieten wir ganz
					// unten nicht an. Ergo: Fixing wieder einschalten.
					t29.menu.scroll.set(t29.menu.scroll.States.FIX);
				}
				break;
		}

		// Sichtbarkeit des Fixed-Buttons am unteren Seitenrand
		// festlegen:
		if(y + $(window).height() > t29.menu.scroll.button_max_bottom) {
			$("html").addClass('button-stick-bottom');
		} else if($("html").hasClass('button-stick-bottom')) {
			$("html").removeClass('button-stick-bottom');
		}
	}); // end event window.scroll.
}; // end t29.menu.scroll.setup.


//////////////////////////// Footer Guided Tour System (auch Menu)
t29.menu.guide.setup = function() {
	// Zentraler Hauptschritt: Das Menue ab oberster Ebene klonen und im Footer dranhaengen,
	// ausserdem ein paar Ummodellierungen.
	g = t29.menu.beam;
	t29.menu.side.find(".u1").clone().appendTo(g);
	g.find("ul").show(); // durch t29.menu.collapse.setup wurden die .u3er auf hide gesetzt. Revert!
	g.find(".geraete").remove(); // geraete-Links nicht anzeigen
	

	// Texte ersetzen durch laengere verstaendlichere Beschreibungen im title
	g.find("a[title]").each(function(){
		$(this).text( $(this).attr('title') );
	});

	// Abkuerzungen und Wrappings
	a = g.find("a"); li = g.find("li");
	a.wrapInner("<span class='text'/>").append("<span class='bullet'/>");

	// Punkte aequidistant verteilen
	count = a.length;
	bwidth = $(".bullet",g).outerWidth();
	each_width = (g.width() + bwidth*2) / count;
	a.width(Math.floor(each_width));
	// text-Label zentriert darstellen um den Punkt
	$(".text", a).css("left", function(){return(bwidth - $(this).width())/2; });
	
	default_visibles = g.find(".start, .end, .current");
	default_visibles.addClass("visible"); //.find("a").css("z-index",0);
	default_visibles = default_visibles.find("a:first-child"); // von li auf a
	
	// Overlappings finden
	// left,right: Funktionen geben links/rechts-Offset des Objekts wieder
	left = function($o) { return $o.offset().left; }
	right = function($o) { return $o.offset().left + $o.width(); }
	edges = default_visibles.map(function(){
		t = $(".text", this);
		return {'left': left(t), 'right': right(t) };
	});
	min_left = Math.min.apply(null, edges.map(function(){ return this.left }));
	max_right = Math.max.apply(null, edges.map(function(){ return this.right; }));
	a.not(default_visibles).each(function(){
		t = $(".text", this); this_a = $(this);
		l = left(t); r = right(t);
		edges.each(function(i){
			if((l < this.right && l > this.left) || // rechte kante drin
			   (r > this.left && r < this.right) || // linke kante drin
			   (l < this.right && l < min_left)  ||
			   (r > this.left && r > max_right)) {
					this_a.addClass("higher-text");
			}
		});
	});
	
	// Split position for relative navigation
	// 20px von nav.side margin left; 40px = 4*10px padding left von nav.rel a
	///// 22.04.2012: Deaktiviert, weil anderes Design vor Augen.
	/*
	split = $(".current a",g).offset().left - g.offset().left + bwidth/2;
	rest = $("#content").outerWidth() - split - 40;
	t29.menu.rel.find(".prev a").width(split);
	t29.menu.rel.find(".next a").width(rest);
	*/
};

$(t29.menu.setup);