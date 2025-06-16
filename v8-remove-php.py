#!/usr/bin/env python

# The idea of this script is to replace a t29v6 PHP front matter with a modern
# SSG front matter, i.e. change something like
"""
<?php
	$seiten_id = 'startseite';
	$version = '$Id$';
	$titel = 'technikum29 Computer-Museum, historische Computerwelten: Lebendige Zeitreise';
	
	require "../lib/technikum29.php";
?>
"""
# to something like
"""
--- 
seiten_id: 'startseite'
titel: 'technikum29 Computer-Museum, historische Computerwelten: Lebendige Zeitreise';
---
"""

import argparse, pathlib, re, yaml, collections, sys

warn = lambda *msg: print(f"WARNING: {msg[0]}", *msg[1:], file=sys.stderr)

p = argparse.ArgumentParser(description="Transform t29v6 PHP files to SSG front matters")
p.add_argument("files", nargs="+", help="PHP files")
args = p.parse_args()

php_simple_assignment = re.compile(r"\$([A-Za-z1-9_]\w*)\s*=\s*(.*?)\s*;")

for fname in args.files:
    src_name = pathlib.Path(fname)
    dst_name = src_name.with_suffix(".html")
    fname_data = collections.OrderedDict() #{}
    
    with src_name.open(encoding="utf-8") as src:
        first_line = next(src)
        if first_line.strip() != "<?php":
            warn(f"{src_name}: No PHP Header found ({first_line=})")
            continue

        for src_line in src:
            src_line = src_line.strip()
            if not src_line: # empty line
                continue
            if src_line == "?>":
                break
            if "../lib/technikum29.php" in src_line: # PHP include/require line
                continue

            m = php_simple_assignment.match(src_line)
            if m:
                fname_data[m.group(1)] = m.group(2)
            else:
                warn(f"{src_name}: Don't understand line {src_line}")
        
        # remove Subversion artefact
        if "version" in fname_data and "$Id" in fname_data["version"]:
            del fname_data["version"]
        
        # consider switching from single to double quoting, i.e. 'bla' => "bla"
        # using 'bla' was PHP optimization for string interpolation but reads badly.
        for k,v in fname_data.items():
            if v.count("'") == 2 and '"' not in v and v[0] == "'" and v[-1] == "'":
                fname_data[k] = f'"{v[1:-1]}"'
        
        if len(fname_data):
            with dst_name.open("w", encoding="utf-8") as dst:
                dst.write("---\n")
                # to avoid properly parsing quotes, we just dump the PHP-quoted data directly
                #yaml.safe_dump(dict(fname_data), dst, allow_unicode=True, sort_keys=False)
                for k,v in fname_data.items():
                    dst.write(f"{k}: {v}\n")
                dst.write("---\n")
                for src_line in src: # write all remaining
                    dst.write(src_line)
