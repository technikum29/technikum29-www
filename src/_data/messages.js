/**
 * Class representing message handling for technikum29.
 * Behaves similarly to gettext-style translations, with static message definitions.
 * 
 * Adopted from original /lib/messages.php
 */

/**
* The order of array elements in `msg`. This maps language short strings
* to array index positions.
*/
export const order = { de: 0, en: 1 };

/**
* The Messages array maps a message ID (string) to the message text
* (string or array). If the message value is an array, it's interpreted
* as a multi-language string, with mapping via `order`.
*/
export const messages = {
    'html-title': 'technikum29',
    'head-h1-title': ['Zur technikum29 Startseite', 'Go to technikum29 homepage'],
    'head-h1': 'technikum29',
    'homepage-pagename': 'startseite',

    'sidebar-h2-tour': ['Museumstour', 'Museum Tour'],
    'sidebar-h2-mainnav': ['Hauptnavigation', 'Main Navigation'],
    'sidebar-h2-lang': ['Sprachauswahl', 'Language'],

    'topnav-interlang-title': ['Die Seite "%s" auf Deutsch lesen', 'Read the page "%s" in English'],
    'topnav-interlang-active': ['Sie betrachten gerade die Seite "%s" auf Deutsch', 'You currently read the page "%s" in English'],
    'topnav-interlang-nonexistent': ['Diese Seite steht auf Deutsch nicht zur Verfügung', 'This page is not available in English'],
    'topnav-interlang-nonexistent-page': '/en/no-translation.php',
    'topnav-interlang-language-de': 'Deutsch',
    'topnav-interlang-language-en': 'English',
    'topnav-search-label': ['Suchen', 'Search'],
    'topnav-search-page': ['/suche', '/search'],
    'opensearch-desc': ['technikum29 (de)', 'technikum29 (en)'],

    'js-menu-collapse-out': ['Mehr Details', 'Expand menu'],
    'js-menu-collapse-in': ['Weniger Details', 'Fold menu'],
    'js-menu-scroll-show': ['Menü einblenden', 'Show menu'],
    'js-menu-scroll-hide': ['Menü ausblenden', 'Hide menu'],

    'footer-copyright-tag': '&copy; 2003-%s technikum29.',
    'footer-legal-link': ['Impressum und Kontakt', 'Legal notices'],
    'footer-legal-file': ['/impressum', '/contact'],
    'footer-legacy-text': [
        '&copy; 2003-%s technikum29. Alle Bilder und Fotografien sind kopierrechtlich geschützt, siehe <a href="/de/impressum" class="go">Impressum</a>',
        '&copy; 2003-%s technikum29. You must not use contents and photographies without the permission of the owner. <a href="/en/contact" class="go">Legal Information</a>.'
    ],
    'footer-sitemap-text': 'Sitemap',
    'footer-sitemap-link': ['/de/sitemap', '/en/sitemap'],
    'footer-privacy-text': 'Datenschutz',
    'footer-privacy-link': ['/de/datenschutz', '/en/privacy'],
    'footer-haus-text': [
        'Das technikum29 ist ein <u>interaktives Museum</u> im <u>Rhein-Main-Gebiet</u> (nahe Frankfurt). Informationen zu <u>Führungen</u> und <u>Öffnungszeiten</u> erfahren Sie auf der <u>Startseite</u>',
        'The technikum29 is a <u>living computer museum</u> located in <u>Germany, near Frankfurt</u>. We regularly offer <u>guided tours</u>.'
    ],
    'footer-haus-link': ['/de/', '/en/'],
    'footer-image-copyright-text': [
        'Viele Bilder können unter einer <u>CreativeCommons-Lizenz</u> verwendet werden. <u>Erkundigen Sie sich</u>.',
        'Except where other noted, pictures on this site are licensed under a <u>Creative Commons License</u>.'
    ],

    'nav-hierarchy-current': ['Aktuelle Seite', 'Current page'],
    'nav-hierarchy-ancestor': ['Übergeordnete Kategorie der aktuellen Seite', 'Parental category of current page'],
    'nav-rel-prev': ['vorherige Seite', 'previous page'],
    'nav-rel-next': ['nächste Seite', 'next page'],
    'nav-rel-start': ['Starte Führrung', 'Start guided tour'],

    'head-rel-first': ['Deutscher Start', 'English start'],
    'head-rel-prev': ['Zur vorherigen Seite (%s)', 'Previous Page (%s)'],
    'head-rel-next': ['Zur folgenden Seite (%s)', 'Next Page (%s)'],
    
    // Paths to bundles, used in SSG template
    'bundle-js-path':  'shared/js-v6/generated/bundle.js',
    'bundle-css-path': 'shared/css-v6/generated/bundle.css',
    'bundle-js-glob':  'shared/js-v6/modules/*.js',
    'bundle-css-glob': 'shared/css-v6/modules/*.css',

    // used in /shared/js/modules/heading_links.js
    'js-heading-links': ['Direktlink zu diesem Abschnitt', 'Link to this section'],
    // used in /shared/js/modules/img_license.js
    'js-img-license': [
        '&copy; technikum29. <a href="/de/impressum#image-copyright">Lizenzbestimmungen</a>',
        '&copy; technikum29. <a href="/en/contact#image-copyright">Licensing terms</a>'
    ],

    // piwik logging settings
    'js-piwik-noscript-imgsrc': '/logs/piwik/piwik.php?idsite=1',
    'js-piwik-url-prefix': '/logs/piwik/',
    'js-piwik-siteid': '1',

    // interlang.js
    'js-interlang-notify-heading': ['This page is also avaliable in English', 'Diese Website gibt es auch auf Deutsch'],
    'js-interlang-notify-text': ['Do you want to switch to the English version <i>%s</i>?', 'Möchtest du die deutschsprachige Seite <i>%s</i> lesen?'],

    // RSS-feed, used in /lib/news.php
    'rss-title': ['technikum29 Computer Museum - Was gibt es Neues?', "technikum29 Computer Museum - What's new?"],
    'rss-description': ['Neuste Geräte und Erweiterungen im technikum29-Computermuseum', 'The latest devices and news from the technikum29 computer museum'],
    'rss-copyright': ['Heribert Müller und das technikum29-Team', 'Heribert Müller and the technikum29 team'],
    
    'open-graph-default-description': [
        'Das technikum29 ist ein interaktives Computermuseum mit funktionsfähigen Lochkartengeräten, Rechenzentren der 1970ern und vielem mehr in Frankfurt/Main.',
        'technikum29 is an interactive Computer museum with operating exhibits of the 1900s such as punch card devices, calculators and many more in Frankfurt, Germany.'
    ]
};

// msg("de") creates a translator function ("shorthandReturner")
export const translator = (lang = "de") => (strId, ...args) => {
    const msgEntry = messages?.[strId] || `&lt;${strId}&gt;`; // error; MediaWiki style
    const tmpl = Array.isArray(msgEntry) ? msgEntry[order[lang]] : msgEntry;
    //if(args.length>1) debugger;
    return (tmpl || '').replace(/%s/g, () => args.shift() ?? '');
};


/**
* Returns the `msg` array and the order mapping encoded as JSON.
* A given RegExp will be run on the message keys to filter entries.
* Example: `/^js-/` would filter only JavaScript-related entries.
* Note: Local overrides (`localMsg`) are not included.
* 
* @param {RegExp} [filterRegexp]
* @returns {string} JSON string
*/
export function createJSON(filterRegexp = null) {
    const filteredMsg = filterRegexp
        ? Object.fromEntries(
            Object.entries(messages).filter(([key]) =>
            filterRegexp.test(key)
            )
        )
        : messages;

    return JSON.stringify({
        order: order,
        msg: filteredMsg
    });
}

