/**
 * The idea of this file is to create a map at SSG runtime of redirects,
 * as json. Many SSGs create dummy html pages with meta refresh=... redirects
 * instead. The power of using a JSON map instead is that we can capture
 * redirects with regexps.
 * 
 * The fundamental idea is "cool URIs don't change" -- the technikum29 website
 * is really old, dating back 20 years, and we try to keep URLs working.
 * 
 * This was translated from t29v6 /lib/404.php. Note that this js file only
 * makes up the JSON while it needs some processing 404.php or so which
 * consumes it at server runtime.
 * 
 * Note we could also emit .htaccess Redirect lines if neccessary.
 * 
 * This can also be abused as a short URL service. * 
 **/

import { writeFileSync } from "fs";

const outputFile = "_site/redirects.json";

export let redirects = {
  // strip deprecated file suffixes such as php, shtml, etc and replace them
  // with the subdirectory idiom, for instance
  //  foo/bar/baz.php => foo/bar/baz/
  //  foo/bar/baz.htm => foo/bar/baz/ (note, this may turn out to produce false positives)
  "^(.+).(php|s?html?)$": "$1",

  // Geraete/Extraseiten
  '/de/geraete/anita': '/de/rechnertechnik/elektronenroehren',
  '/en/devices/anita': '/en/computer/electron-tubes',
  '/de/geraete/combitron': '/de/rechnertechnik/programmierbare',
  '/en/devices/combitron': '/en/computer/programmable',
  '/de/geraete/ibm_77': '/de/rechnertechnik/lochkarten-edv#ibm77',
  '/de/geraete/kernspeicher': '/de/rechnertechnik/speichermedien#kernspeicher',
  '/de/geraete/laufzeitspeicher': '/de/rechnertechnik/speichermedien#laufzeitspeicher',
  '/de/geraete/pdp_8I': '/de/rechnertechnik/wissenschaftliche-rechner#pdp8i',
  '/de/geraete/univac9400': '/de/rechnertechnik/univac9400',
  '/de/geraete/univac9400/univac_9300': '/de/rechnertechnik/univac9200',
  '/en/devices/univac9400/univac_9300': '/en/computer/univac9200',
  '/de/geraete/bull-bs-pr': '/de/rechnertechnik/tabelliermaschine',
  '/de/kommunikationstechnik/fernsehen': '/de/archiv/fernsehen',
  '/de/kommunikationstechnik/rundfunk': '/de/archiv/rundfunk',
  '/de/kommunikationstechnik/tontechnik': '/de/archiv/tontechnik',
  '/de/rechnertechnik/fruehe-computer': '/de/rechnertechnik/wissenschaftliche-rechner',
  '/en/computer/early-computers': '/en/computer/scientific-computers',

  // Inserat 2020-09-03, example for short-url kind of links
  '^/lagersuche': '/blog/2020-09-03-Lagersuche'
};

// enrich the redirects array with data from all pages
// (front matter data key "redirect_from").
export function addCollection(eleventyConfig) {
  eleventyConfig.addCollection("redirectMap", function(collectionApi) {
    for (const item of collectionApi.getAll()) {
      const data = item.data;
      const pageUrl = item.url;

      if (Array.isArray(data.redirect_from)) {
        for (const fromUrl of data.redirect_from) {
          redirects[fromUrl] = pageUrl;
        }
      }
    }
    return redirects;
  })
}

// Make sure this runs after _site output directory has been created.
export function writeFile() {
  writeFileSync(outputFile, JSON.stringify(redirects, null, 2));
  console.log(`Redirect map written to: ${outputFile}`);
}
