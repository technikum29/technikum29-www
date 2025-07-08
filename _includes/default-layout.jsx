/**
 * t29v8: The main page eleventy template.
 * 
 * This is a JSX file, i.e. a special Javascript dialect with some kind of
 * "embedded XML/XHTML". It renders the major layout of the technikum29 website.
 * The layout is basically a function of the (page and global) data.
 *
 * For the upstream docs, see https://www.11ty.dev/docs/languages/jsx/ as
 * well as https://github.com/j-f1/eleventy-hast-jsx
 **/

import jsx from "eleventy-hast-jsx";
const { Raw, DOCTYPE, Comment } = jsx;

// CSS class helper, usage like className={classes(foo)}, will omit attribute if list is empty
const classes = (classes) => classes.join(" ") || undefined

// this does not work
import {format} from 'hast-util-format'
const doFormat = true;
const postprocess = (tree) => { if(doFormat) format(tree); return tree; }

const log = (data, severity, msg) => {
	// severity one of "emerg", "alert", "crit", "err", "warn", "notice", "info", "debug"
	if(!data.log) data.log = []
	data.log.push([severity,msg])
}

const Navigation = ({ data, tree_name, baseClass="u1" }) => {
  //if(data.lang == "en") debugger;
  const navPages = data[tree_name];
  const currentUrl = data.permalink || data.page.url;
      
  const renderNavListItem = (entry, level) => {
	const isCurrent = entry.url === currentUrl;
    const isActive = data.nav_breadcrumbs.some?.(item => item.url == entry.url);
    const hasChildren = entry.children && entry.children.length > 0;
    const liClasses = entry?.data?.nav_class || [];
    if(isActive) {
		liClasses.push("current");
		liClasses.push("active");
	}
	const ariaCurrent = isCurrent ? "page" : undefined;
    var aTitle = entry?.data?.title;
    if(aTitle == entry.title) aTitle = undefined;
	
	//if(currentUrl == "/en/computer/electro-mechanical/") debugger;

    return (
      <li key={entry.key} className={classes(liClasses)}>
        <a
          href={entry.url}
          data-id={entry.data?.page_id}
          data-key={entry.key}
          title={aTitle}
          aria-current={ariaCurrent}
        >
          {entry.title}
        </a>
        {hasChildren && (
          <ul className={`u${level}`}>
            {entry.children.map(child => renderNavListItem(child, level + 1))}
          </ul>
        )}
      </li>
    );
  };

  return (
    <ul className={baseClass}>
      {navPages.map(entry => renderNavListItem(entry, 2))}
    </ul>
  );
};

const RelationalLink = ({ dir, target, msg, headerlink }) => {
	const text = target.data?.nav_title || target.data?.title || target.title;
	const title = msg("head-rel-"+dir, text);
	const href = target.url;
	return headerlink
		? <link rel={dir} href={href} title={title} />
		: <li class={dir}><a href={href} title={title}>{msg("nav-rel-"+dir)} <strong>{text}</strong></a></li>;
}

const InterlangLink = ({data, lang, link_data, msg}) => {
	const is_current_lang = lang == data.lang;
	const lang_textual = msg("topnav-interlang-language-"+lang);
	if(!link_data) {
		// no translation exists
		// TODO FIXME URL composing like
		/* htmlentities(http_build_query(array(
									'backurl' => $_SERVER['REQUEST_URI'],
									'backtitle' => $backtitle ? $backtitle : null,
								     ))), */
		return <li class="nonexistent"><a href="#TODO_FIXME" title={msg("topnav-interlang-nonexistent", lang)}>{lang_textual}</a></li>;
	} else if(is_current_lang) {
		return <li class="active"><a href={link_data.page.url} title={msg("topnav-interlang-active", link_data.title)}>{lang_textual}</a></li>
	} else {
		return <li><a href={link_data.page.url} title={msg("topnav-interlang-title", link_data.title)}>{lang_textual}</a></li>
	}
}


export default function({msg, ...data}) {
	
	if(data.seiten_id == "startseite") {
	 //debugger;
	}

// TODO: Should define a proper set of variables to be transfered to client
	
const bodyClasses = [
    "lang-" + data.lang,
    "page-" + data.page_id,
    // still missing:
    // in-nav => seite_in_nav
    // in- => seite_in_ul
    
    "design-2017-06-26" // legacy
]

const client_js_transfer = Object.fromEntries(["lang", "seiten_id", "seite_in_nav", "seite_in_ul"].map(key => [key, data[key]]));

//if(data.nav_cur) debugger;

const print_footer_menu = Boolean(data.nav_prev || data.nav_next || data.force_footer_menu);

const bigfooter = <div class="bigfooter">
		<ul class="clearfix">
		<li class="haus"><a class="block" href={msg('footer-haus-link')}>
			<img src="/shared/img-v6/logo-haus.footer.png" alt="Museum Haus" title="The Museum building" />
			<span class="p"><Raw html={msg('footer-haus-text')} /></span>
		</a></li>
		<li class="copy"><a class="block clearfix" href={msg('footer-legal-file')+"#image-copyright"}>
			<i>CC</i>
			<span class="p"><Raw html={msg('footer-image-copyright-text')} /></span>
		</a></li>
		<li class="logo"><span class="block clearfix">
			<i title="technikum29 Logo">Logo</i>
			<span class="p"><Raw html={msg('footer-copyright-tag', new Date().getFullYear())} />
			<br/><a class="u" href={msg('footer-legal-file')}>{msg('footer-legal-link')}</a>
			<br/><a class="u" href={msg('footer-sitemap-link')}>{msg('footer-sitemap-text')}</a>
			<br/><a class="u" href={msg('footer-privacy-link')}>{msg('footer-privacy-text')}</a>
			</span>
		</span></li>
		</ul>
	</div>

const urlprefix = "/";
const urlprefix_lang = urlprefix + data.lang;

if(data.redirect_to) {
	log(data, "info", `Please see <a href="${data.redirect_to}">this page on ${data.title}</a>`);
}

return postprocess(<>
<DOCTYPE />
<Comment>
 Achtung, diese Datei ist automatisch GENERIERT.
 Alle Änderungen an dieser Datei werden ÜBERSCHRIEBEN!
 Attention, this file is automatically GENERATED.
 Any edits to this file will be OVERWRITTEN.
</Comment>
<html class="no-js" lang={data.lang}>
<head>
	<meta charset="utf-8" />
	<title>{data.html_title}</title>
	<meta name="author" content="technikum29-Team" />
	<meta name="generator" content={`t29v8/${data.eleventy.generator}`} />
	<meta name="t29.cachedate" content={data.html_time} />
	<meta name="t29.page_id" content={data.page_id} />
	
	{data.redirect_to && <meta http-equiv="refresh" content={"0;url="+data.redirect_to} /> }
	
	{data.header_prepend?.map(header => <Raw html={header} />)}

	<Comment> t29v6 template.php has a ton of other stuff here, amongst others:
		logic for passing data to client side JS, apple logos,
		links for RSS, interlanguage, JS, CSS.
		
		Ausserdem wichtiges neues TODO: OG-Links!
	</Comment>
	
	
	<link rel="first" href={urlprefix_lang} title={msg("head-rel-first")} />
	{ data.nav_prev && <RelationalLink dir="prev" target={data.nav_prev} msg={msg} headerlink /> }
	{ data.nav_next && <RelationalLink dir="next" target={data.nav_next} msg={msg} headerlink /> }

	<link rel="copyright" href={urlprefix_lang+msg('footer-legal-file')} title={msg('footer-legal-link')} />
	<link rel="alternate" type="application/rss+xml" href={urlprefix_lang+"/news.rss"} title={msg('rss-title')} />
	<link rel="apple-touch-icon" type="image/x-icon" href="/shared/img-v6/touch-icon.png" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	
	<link rel="stylesheet" type="text/css" data-foo="bar" href={urlprefix+msg('bundle-css-path')} />
	{/* todo, resolve this promise */}
	{ data.page_css_file && <link rel="stylesheet" type="text/css" href={urlprefix+data.page_css_file} /> }

	<script src="/shared/js-v6/libs/modernizr-2.0.6.min.js"></script>{/* probably no more neccessary */}
</head>
<body className={classes(bodyClasses)}>
	<div id="container">
		<h1 role="banner"><a href="/" title={msg('head-h1-title')}>{msg('head-h1')}</a></h1>
		<div id="background-color-container">
			<section class="main content" role="main" id="content">
				<ul className={"messages panel nolist " + (data.log?.length ? "" : "empty") }>
					{ data.log?.map(msg => Array.isArray(msg) ? <li className={msg[0]}><Raw html={msg[1]}/></li> : <li><Raw html={msg} /></li>) }
				</ul>

				<Comment> *** Start of content *** </Comment>

				<Raw html={data.content} />
				
				<Comment> *** End of content *** </Comment>
			</section>
			<hr/>
			<section class="sidebar top">
					{/* Platz fuer eigentlich per "Extension" eingepflegtem Inhalt */}
					<Comment>
					<a class="button alertbox termine" href="/de/#termine">
						<strong>Aktuelle Termine</strong>
					</a>
					</Comment>
					
						<p>Breadcrumbs:
						<Navigation data={data} tree_name="nav_breadcrumbs" />
						</p>
						
						<p>Tags:
						{data.tags?.join(", ")}</p>
					
					
					<h2 class="visuallyhidden" id="tour-navigation">{msg("sidebar-h2-tour")}</h2>
					{data.sidebar_content ?
						<nav class="side contains-custom">{data.sidebar_content}</nav>
					:
						<nav class="side contains-menu">
							<Navigation data={data} tree_name="nav_main" />
						</nav>
					}
					<Comment>menu changing buttons are made with javascript</Comment>
			</section>
			<section class="sidebar bottom">
				<Comment>inhalte die unten ueber dem header sind</Comment>
			</section>
		</div>{/* #background-color-container */}
		<hr/>
		<header class="banner">
			<h2 class="visuallyhidden">{msg("sidebar-h2-mainnav")}</h2>
				<nav class="horizontal">
					{/* Pages with tag: nav_horizontal will get part of this navigation */}
					{
						data.mainnav_content
						?	data.mainnav_content
						:	<Navigation data={data} tree_name="nav_horizontal" />
					}
				</nav>
				<nav class="top">
					<h3 class="visuallyhidden">{msg("sidebar-h2-lang")}</h3>
					<ul>
						{Object.entries(data.interlang_links).map(([lang,link_data]) =>
								<InterlangLink lang={lang} data={data} link_data={link_data} msg={msg} />)}
					</ul>
					<form method="get" action={msg('topnav-search-page')}> {/* TODO: $href make relative Links! */}
						<span class="no-js">{msg('topnav-search-label')}:</span>
						<input type="text" value="" data-defaultvalue={msg('topnav-search-label')} name="q" class="text" />
						<input type="submit" value={msg('topnav-search-label')} class="button" />
					</form>
				</nav>
		</header>
		<hr/>
		<footer class={"in-sheet " + (print_footer_menu || "empty-footer)")}>
			<nav class="guide">
				<Comment>hier wird nav.side die Liste per JS reinkopiert</Comment>
			</nav>
			<nav class={"rel clearfix "+(print_footer_menu || "empty")}>
			<ul>
				{print_footer_menu && data.nav_prev && <RelationalLink dir="prev" target={data.nav_prev} msg={msg} /> }
				{print_footer_menu && data.nav_next && <RelationalLink dir="next" target={data.nav_next} msg={msg} /> }
			</ul>
			</nav>
			{/* packe Bigfooter bei leerem Footer-Menue in footer.in-sheet */}
			{ print_footer_menu || bigfooter }
			<div class="right">
				<Comment>text der rechts unten steht</Comment>
			</div>
		</footer>
	</div><Comment> end of #container -- Note: #container geht for footer.attached zu.</Comment>
	<footer class="attached">
		<Comment><div class="legacy">{msg('footer-legacy-text')}</div></Comment>
		{/* packe Bigfooter bei gefuelltem footer.in-sheet nach footer.attached. */}
		{ print_footer_menu &&  bigfooter }
		{/*
			// pending log messages
			if(!$this->log->is_empty()) {
				echo '<ul class="messages footer nolist">';
				$this->log->print_all();
				echo '</ul>';
			}
		*/}
	</footer>
	
	<script src="/shared/js-v6/libs/jquery-1.7.2.min.js"></script>
	<Raw html={`<script>window.t29={'conf': ${JSON.stringify(client_js_transfer)}};</script>`} />
	<script src={urlprefix+msg("bundle-js-path")}></script>
	{ data.page_js_file && <script src={urlprefix+data.page_js_file} /> }
    {/* Piwik Noscript, Script selbst wird asynchron im JS-Bereich aufgerufen */}
    <noscript><img src={msg("js-piwik-noscript-imgsrc")} alt="" /></noscript>
    <Raw html={data.body_append} />
</body>
</html>

{/* So long and thanks for all the */} </>);} /* fish! */
