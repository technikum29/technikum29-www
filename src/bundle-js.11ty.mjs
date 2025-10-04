// This approach of generating a JS/CSS bundle file is ad-hoc but ugly.
// No minification or others taking place. This is just a placeholder for
// a proper solution.

import { messages, order } from "#data/messages";
import { glob } from 'tinyglobby';
import { readFile } from 'fs/promises';

const pattern = data => "src/" + messages["bundle-js-glob"]
const permalink = data => "/" + messages["bundle-js-path"]

export default class TestBundle {
    async data() {
        return {
            permalink,
            eleventyExcludeFromCollections: true,
            layout: null // disabling the global default layout
        }
    }
    
    async render(data) {
        const files = await glob(pattern(data));
        const contents = await Promise.all(files.map(file => readFile(file, 'utf8')));
        
        // inject a virtual msg.js file
        const filterObjByKey = (obj,regex) => Object.fromEntries(Object.entries(obj).filter(([key]) => regex.test(key)));
        const msg = filterObjByKey(messages, /^js-/);
        const json_string = JSON.stringify({ order, msg });
        contents.push(`t29.msg.data=${json_string};`);
        
        const combined = contents.join('\n');
        return combined;
    }
}
