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

/**
 * Our "improved" version of eleventyNavigation(nodes, key) which allows pages
 * to inject sub-nodes via their data list "add_sub_navigation"
 **/
function enrichNavigation(nodes, key) {
  const tree = eleventyNavigation(nodes, key);
  
  function addToTree(data, key, newChildren, do_prepend = false /* false = append */) {
      //debugger;
      function findAndInsert(node) {
          if (node.key === key) {
              if (!Array.isArray(node.children)) {
                  node.children = [];
              }
              if (do_prepend) {
                  node.children.unshift(...newChildren);
              } else {
                  node.children.push(...newChildren);
              }
              return true;
          }
          if (Array.isArray(node.children)) {
              for (let child of node.children) {
                  if (findAndInsert(child)) {
                      return true;
                  }
              }
          }
          return false;
      }

      for (let node of data) {
          if (findAndInsert(node)) {
              return;
          }
      }
  }
  
  for(let entry of nodes) {
    const data = entry?.data || {};
    const data_key = data?.eleventyNavigation?.key;
    
    if(data_key && data?.add_sub_navigation) {
      if(!Array.isArray(data.add_sub_navigation)) {
        console.error(`Expecting array at page ${data.eleventyNavigation.key}. Found this instead: ${data.add_sub_navigation}`);
        continue;
      }
      addToTree(tree, data_key, 
        data.add_sub_navigation.map((subentry,i) => {
          const key = subentry.key || `${data_key}_sub${i}`;
          const parentKey = data_key;
          const title = subentry.text || subentry.title || subentry.titel || "Missing title in subentry";
          const pluginType = "eleventy-navigation-enriched-by-t29";

          const base_url = data?.page?.url || data.permalink;
          let url = `${base_url}#${key}`; // default placeholder          
          url = subentry.link || subentry.url || subentry.permalink || url;
          if(url.startsWith("#")) url = data?.page?.url + url; // prepend page anchors
          //debugger;
          // Todo, also resolve realtive links as relative to parent url, for instance
          // base_url = "/de/bla/bar.htm, url = foo.htm" => "/de/bla/foot.htm"

          return { key, parentKey, url, title, pluginType };          
        }),
        true /* always prepend, never append */
      );
    }
    
    // NOTE: We have access to data.rawInput and data.templateSyntax, so this could
    //       be the right place to parse HTML and add nodes by headings. Thinking of, for
    //       instance,
    //          <h1 id="refName" data-navbar-label="Bla">Bla and Bla</h1>
    //          <h2 data-navbar-add>Blo</h2>
    //       For simplicity, we can neglect h1/h2/h3 levels.
    //       We could also require the presence of an #id, because the auto-generation
    //       currently takes place only client side (something one could also change).
  }
  return tree
}

export default {
  title: (data) => data.title || data.titel,
  
  // TODO: Should use data.url or this.page.url instead of data.permalink
  // TODO: Use collections and tags instead
  lang: (data) => data.lang || (data?.permalink?.includes?.("en/") ? "en" : "de"),
  
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
  nav_main: data => enrichNavigation(data.collections.all, "tour"),
  nav_horizontal: data => eleventyNavigation(data.collections.nav_horizontal),
  nav_breadcrumbs: data => eleventyNavigationBreadcrumb(data.collections.all, data.page_id, {"allowMissing":true, "includeSelf": true}),
  
  //nav_test_prev: function(data) { try { return this.getNextCollectionItem(data.collections.all); } catch(e) { return false; } },
    
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
    
    title: data.nav_title || data.nav_titel || data.title,
    order: data.nav_order,
  }),

}
