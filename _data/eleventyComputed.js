import { translator } from "#data/messages";
import { existsSync } from 'fs';
const pass_if_exists = fn => existsSync(fn) ? fn : null;

//import { access } from 'fs/promises';
//const pass_if_exists = async fn => await access(fn).then(() => fn).catch(() => null);

const absif = path => path ? "/"+path : path; // prepend if it is a path

export default {
  title: (data) => data.title || data.titel,
  
  lang: (data) => data.permalink?.includes?.("en/") ? "en" : "de",
  
  msg: (data) => translator(data.lang),
    
  // basically <title>
  html_title: (data) => `${data.title} - technikum29`,
  
  html_time: () => new Date(),
  
  page_id: (data) => data.seiten_id || data.permalink,
  
  page_js_file:  (data) => pass_if_exists(`shared/js-v6/pagescripts/${data.seiten_id}.js`),
  page_css_file: (data) => pass_if_exists(`shared/css-v6/pagestyles/${data.seiten_id}.css`),
  
  eleventyNavigation: {
    // map standard front matter keywords to the ones wanted by the nav plugin.
    key: (data) => data.page_id,
    
    // here, we should also provide a lookup whether "parent" exists,
    // and if not, provide help for resolving or so.
    parent: (data) => data.parent,
    
    title: (data) => data.nav_title || data.title,
    order: (data) => data.nav_order,
  },
}
