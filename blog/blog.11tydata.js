/**
 * This is a 11ty javascript directory data file which is used as template data file
 * for injecting variables into blog posts. This cannot be done in the _includes/blog
 * template.
 **/


export default {
    tags: ["blog"],

    
    eleventyComputed: {
        author_profile: (data) => {
            const author_id = (data.author || data.autor || "").toLowerCase();
            return data.team.find(member => member.identifier == author_id)
        },
        title: (data) => data.title || data.titel,
        nav_prev: function(data) { return this.getCollectionItemWorking(data.collections.blog, data.page, -1); },
        nav_next: function(data) { return this.getCollectionItemWorking(data.collections.blog, data.page, +1); },
    },
    
    layout: "blog.njk",
    seiten_id: "blog",
}
