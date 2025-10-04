/**
 * t29v8: Configuration for 11ty (eleventy) Static Site Generator (SSG).
 * This is an ESM file
 **/

import * as Redirects from "#data/make_redirects";
import yaml from "js-yaml";
import { DateTime } from "luxon";
import eleventyNavigationPlugin from "@11ty/eleventy-navigation";
import eleventyHastJsxPlugin from "eleventy-hast-jsx";

import fs from 'fs';
import path from 'path';

// see return statement of exported default function, i.e. end of file, instead!
export const config = {
/*  dir: {
	input: "de", // for the time being, for testing.
	includes: "../_includes",
  },
  templateFormats: ["htm","html","md","njk"],
*/
};

export default async function(eleventyConfig) {
	
	// use environment variable SKIP_HEAVY_ASSETS to speed up build process
	if(!process.env.SKIP_HEAVY_ASSETS) {
		eleventyConfig.addPassthroughCopy({
			"src/shared": "shared", // shared folder
		
			// This directory is supposed to move somewhere else in the future!
			"src/de/geraete": "de/geraete", 
			"src/robotik": "robotik", // Old superseded stuff which we keep anyway
		})
	}
	
	// Parts where we rely offer PHP solutions, but which also have a fallback client-side
	// JS-only variant with .htm suffix, which is however only meant for local development
	// in 11ty only and not for production.
	// These files are: index.{php,htm} = Server-side Language negotiation
	// next to 404.{php,htm} = system for redirecting old URLs content gracefully
	// Note, by default,this env flag is NOT given and thus PHP files are NOT built.
	if(process.env.BUILD_PHP) {
		eleventyConfig.addPassthroughCopy("src/*.php")
		eleventyConfig.ignores.add("src/index.htm") // ensure only one index file exists.
	} else {
		// ignore php files, which happens by default
	}
	
	// emulate passthrought copy during --serve usage, to make development faster
	eleventyConfig.setServerPassthroughCopyBehavior("passthrough");

	// treat HTML input files independently of file suffix
	eleventyConfig.addTemplateFormats("htm");
	eleventyConfig.addExtension("htm", { key: "html" });
	
	eleventyConfig.addDataExtension("yml,yaml", (contents) => yaml.load(contents));
	
	// for the time being, ignore almost everything except de/
	// ["robotik","lib"].forEach(p => eleventyConfig.ignores.add(p+"/**"));
	
	// add global default layout, https://github.com/11ty/eleventy/issues/380
	eleventyConfig.addGlobalData("layout", "default-layout.jsx");
	
	eleventyConfig.addPlugin(eleventyNavigationPlugin);
	eleventyConfig.addPlugin(eleventyHastJsxPlugin.plugin);
	
	eleventyConfig.addFilter("formatDay", dateObj => {
		return DateTime.fromJSDate(dateObj, { zone: 'utc' }).toFormat("yyyy-LL-dd");
	});
	
	// copied from eleventy/src/Filters/GetCollectionItem.js as our workaround,
	// because getCollectionItem is not working for me due to locale bug.
	eleventyConfig.addFilter("getCollectionItemWorking", function(collection, page, modifier = 0) {
		let j = 0;
		let index;
		for (let item of collection) {
			if (
				item.inputPath === page.inputPath &&
				(item.outputPath === page.outputPath || item.url === page.url)
			) {
				index = j;
				break;
			}
			j++;
		}

		if (index !== undefined && collection?.length) {
			if (index + modifier >= 0 && index + modifier < collection.length) {
				return collection[index + modifier];
			}
		}
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
	
	Redirects.addCollection(eleventyConfig)
	eleventyConfig.on("eleventy.after", () => Redirects.writeFile())
	
	eleventyConfig.on("eleventy.after", async ({ directories, results, runMode }) => {
		let fileStats = {}; // e.g. { ".html": { count: 3, size: 1234 }, ... }
		
		function collectStats(dir) {
		for (const entry of fs.readdirSync(dir, { withFileTypes: true })) {
			const fullPath = path.join(dir, entry.name);
			if (entry.isDirectory()) {
			collectStats(fullPath);
			} else {
				const ext = path.extname(entry.name) || "[no ext]";
				const size = fs.statSync(fullPath).size;
				if (!fileStats[ext]) fileStats[ext] = { count: 0, size: 0 };
					fileStats[ext].count++;
					fileStats[ext].size += size;
				}
			}
		}
		
		collectStats(directories.output);
		const sortedStats = Object.entries(fileStats).sort((a, b) => b[1].size - a[1].size);
		debugger;
		
		const fileStatsHtml = `
			<table><tr><th>Extension</th><th>Count</th><th>Total Size (KB)</th></tr>
			${sortedStats.map(([ext, data]) =>
				`<tr><td>${ext}</td><td>${data.count}</td><td>${(data.size / 1024).toFixed(1)}</td></tr>`
			).join("\n")}</table>`;
			
		const stats = {
			number_of_templates: results.length,
			git_commit: "to be done",
			build_time: new Date().toISOString(),
		}
		
		const statsHtml = `<table>${Object.entries(stats).map(([k,v]) => `<tr><td>${k}<td>${v}</tr>`).join("\n")}</table>`;
		
		["_site/de/sitemap/index.html", "_site/en/sitemap/index.html"].forEach(tpl => {
			let tplContent = fs.readFileSync(tpl, "utf-8");
			Object.entries({"%SSG_STATS%": statsHtml, "%SSG_FILE_STATS%": fileStatsHtml}).forEach(([k,v]) => tplContent= tplContent.replace(k,v));
			fs.writeFileSync(tpl, tplContent);
			console.log("Stats written to "+tpl);
		});
	});
	
	return {
		dir: {
            input: 'src'
        }
	}
};
