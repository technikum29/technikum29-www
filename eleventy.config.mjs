/**
 * t29v8: Configuration for 11ty (eleventy) Static Site Generator (SSG).
 * This is an ESM file
 **/

import { collectRedirects } from "#data/make_redirects";
import yaml from "js-yaml";
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
	
	// for the time being, ignore almost everything except de/
	["en","blog","robotik","lib"].forEach(p => eleventyConfig.ignores.add(p+"/**"));
	
	// add global default layout, https://github.com/11ty/eleventy/issues/380
	eleventyConfig.addGlobalData("layout", "default-layout.jsx");
	
	eleventyConfig.addPlugin(eleventyNavigationPlugin);
	eleventyConfig.addPlugin(eleventyHastJsxPlugin.plugin, {
		/* htmlOptions: */
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
