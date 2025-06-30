import { translator } from "#data/messages";
import { existsSync } from 'fs';
const pass_if_exists = fn => existsSync(fn) ? fn : null;

import eleventyNavigationPlugin from "@11ty/eleventy-navigation";
// ESM workaround to get names similar to template filters, cf https://github.com/11ty/eleventy-navigation/blob/main/.eleventy.js#L12
const eleventyNavigation = eleventyNavigationPlugin.navigation.find;
const eleventyNavigationBreadcrumb = eleventyNavigationPlugin.navigation.findBreadcrumbs;

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
  
  // note, these are navigation trees, i.e. nested structures and not collection structures.
  // For instance, collections will include all page data including content.
  // Navigation list/dicts only contain keys
  nav_main: data => eleventyNavigation(data.collections.all, "tour"),
  nav_horizontal: data => eleventyNavigation(data.collections.nav_horizontal),
  nav_breadcrumbs: data => eleventyNavigationBreadcrumb(data.collections.all, data.page_id, {"allowMissing":true, "includeSelf": true}),
    
  // whether this page is part of nav.horizontal, nav.side or none
  seite_in_nav: (data) => {
    const in_nav_horizontal = data.collections.nav_horizontal.some(item => item.page_id == data.page_id); // note, accessing collections not nav tree here
    const in_nav_side = data.nav_breadcrumbs.some?.(item => item.page_id == "tour");
    return in_nav_horizontal ? "nav_horizontal" : (in_nav_side ? "nav_side" : false);
  },
  
  eleventyNavigation: (data) => ({
    // map standard front matter keywords to the ones wanted by the nav plugin.
    key: data.page_id,
    
    // here, we should also provide a lookup whether "parent" exists,
    // and if not, provide help for resolving or so.
    parent: data.parent,
    
    title: data.nav_title || data.title,
    order: data.nav_order,
  }),
}
