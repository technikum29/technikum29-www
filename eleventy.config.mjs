/**
 * t29v8: Configuration for 11ty (eleventy) Static Site Generator (SSG).
 * This is an ESM file
 **/

import { collectRedirects } from "#data/make_redirects";
import yaml from "js-yaml";
import { DateTime } from "luxon";
import eleventyNavigationPlugin from "@11ty/eleventy-navigation";
import eleventyHastJsxPlugin from "eleventy-hast-jsx";

export const config = {
/*  dir: {
	input: "de", // for the time being, for testing.
	includes: "../_includes",
  },
  templateFormats: ["htm","html","md","njk"],
*/
};


export default async function(eleventyConfig) {

	eleventyConfig.addPassthroughCopy("shared"); // shared folder

	// treat HTML input files independently of file suffix
	eleventyConfig.addTemplateFormats("htm");
	eleventyConfig.addExtension("htm", { key: "html" });
	
	eleventyConfig.addDataExtension("yml,yaml", (contents) => yaml.load(contents));
	
	// this could also be a /blog/blog.json file or so.
	eleventyConfig.addCollection("blog", function(collectionApi) {
		const blog_items = collectionApi.getAll().
			filter(item => item.inputPath.startsWith("./blog/"))
			 .sort((a, b) => b.date - a.date);  // explicitely sort blog posts
		//blog_items.forEach(item => item.data.layout = "blog.njk");
		return blog_items;
	});

	
	// for the time being, ignore almost everything except de/
	["en","robotik","lib"].forEach(p => eleventyConfig.ignores.add(p+"/**"));
	
	// add global default layout, https://github.com/11ty/eleventy/issues/380
	eleventyConfig.addGlobalData("layout", "default-layout.jsx");
	
	eleventyConfig.addPlugin(eleventyNavigationPlugin);
	eleventyConfig.addPlugin(eleventyHastJsxPlugin.plugin, {
		/* htmlOptions: */
	});
	
	eleventyConfig.addFilter("formatDay", dateObj => {
		return DateTime.fromJSDate(dateObj, { zone: 'utc' }).toFormat("yyyy-LL-dd");
	});
	
	// JSX templates and typescript support at same time:
	eleventyConfig.addExtension(["11ty.jsx", "11ty.ts", "11ty.tsx"], {
		key: "11ty.js",
		compile: function () {
			return async function (data) {
				let content = await this.defaultRenderer(data);
				return renderToStaticMarkup(content);
			};
		},
	});
	eleventyConfig.addTemplateFormats("11ty.jsx,11ty.tsx");
	
	collectRedirects(eleventyConfig);
	
	// return toplevel config if needed { ... }
};
