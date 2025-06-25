export default {
  title: (data) => data.title || data.titel,
    
  // basically <title>
  html_title: (data) => `${data.title} - technikum29`,
  
  html_time: () => new Date(),
  
  page_id: (data) => data.seiten_id || data.permalink,
  
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
