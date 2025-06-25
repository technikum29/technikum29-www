/**
 * t29v8: Configuration for 11ty (eleventy) Static Site Generator (SSG).
 * This is an ESM file
 **/

import eleventyNavigationPlugin from "@11ty/eleventy-navigation";


export const config = {
/*  dir: {
	input: "de", // for the time being, for testing.
	includes: "../_includes",
  },
  templateFormats: ["htm","html","md","njk"],
*/
};



export default async function(eleventyConfig) {
	// treat HTML input files independently of file suffix
	eleventyConfig.addTemplateFormats("htm");
	eleventyConfig.addExtension("htm", { key: "html" });
	
	// for the time being, ignore almost everything except de/
	["en","blog","robotik","lib"].forEach(p => eleventyConfig.ignores.add(p+"/**"));
	
	// add global default layout, https://github.com/11ty/eleventy/issues/380
	eleventyConfig.addGlobalData("layout", "default-layout.njk");
	
	eleventyConfig.addPlugin(eleventyNavigationPlugin);
	
	// return toplevel config if needed { ... }
};
