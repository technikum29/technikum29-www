/*
 TOGGLEINFO

 Blendet content_name ein/aus und gibt
 dafür alternativen inhalt alternate_name
 an

 möglicher switch in datei: special_toggleinfo_on
 standardeinstellung hier: standard
*/

if (window.addEventListener) window.addEventListener("load",specialbox_init,false);
else if (window.attachEvent) window.attachEvent("onload",specialbox_init);

var standard = 1; // Standartstatus: 1 = inhalt anzeigen, 0 = inhalt verbergen

var box_name = 'specialBox'; // Name der ID der togglebox
var alternate_name = 'specialAlternate'; // Name der ID des alternativen text (wenn inhalt nicht angezeigt werden soll)
var content_name = 'specialContent'; /// Name der ID des inhalts (muss in einer <div> stecken)
var toggle_name = 'specialToggle'; // Name der ID des toggle-links (<a>)

var state = 1; // Status: 1 = inhalt angezeigt, 0 = inhalt verborgen

function specialbox_init()
{
    // loading der seite
    // in datei benutzbarer switch => wenn gesetzt, togglezeugs einblenden
    give = (typeof(special_toggleinfo_on) != "undefined") ? 0 : 1;

    // checken, ob es ein toggle-teil in seite gibt
    if(document.getElementById(box_name))
       specialbox_toogle(give);
}

function specialbox_toogle(action)
{
    if(typeof(action) != 'undefined') // if(action) geht nicht, da wenn action=0...
        state = action; // action: eigene aktionsangabe

    oBox = document.getElementById(box_name);
    oAlternate = document.getElementById(alternate_name);
    oContent = document.getElementById(content_name);
    oToggle = document.getElementById(toggle_name);

    if(state == 1)
    {
        // inhalt verbergen, alternate anzeigen, linktext auf "anzeigen"
        oContent.style.display = 'none';
        oAlternate.style.display = 'block';
        oToggle.firstChild.nodeValue = 'anzeigen';
        state = 0;
    }
    else
    {
         // alternate verbergen, inhalt anzeigen, linktext auf "verbergen"
         oContent.style.display = 'block';
         oAlternate.style.display = 'none';
         oToggle.firstChild.nodeValue = 'verbergen';
         state = 1;
    }
}