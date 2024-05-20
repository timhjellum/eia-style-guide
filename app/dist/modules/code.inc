<!doctype html><html><head><meta charset="utf-8"/><meta name="viewport" content="width=device-width"/><title>Code</title><script defer="defer" src=".././assets/js/app.c4fc8d2f02aeb21c9af7.js"></script><link href=".././assets/css/styles.c4fc8d2f02aeb21c9af7.css" rel="stylesheet"></head><body><header id="header"><nav class="uk-navbar-container"><div class="uk-container"><div uk-navbar><div class="uk-navbar-left"><ul class="uk-navbar-nav"><li><a href="/index.html">Home</a></li><li><a href="/base/home.html">Base</a><div class="uk-navbar-dropdown"><ul class="uk-nav uk-navbar-dropdown-nav"><li><a href="/base/home.html">base</a></li><li><a href="/base/color-palette.html">color-palette</a></li><li><a href="/base/logos.html">logos</a></li><li><a href="/base/margin.html">margin</a></li><li><a href="/base/padding.html">padding</a></li><li><a href="/base/typography.html">typography</a></li></ul></div></li><li><a href="/layouts/page-layouts.html">Layouts</a><div class="uk-navbar-dropdown"><ul class="uk-nav uk-navbar-dropdown-nav"></ul></div></li><li><a href="/layouts/">Modules</a><div class="uk-navbar-dropdown"><ul class="uk-nav uk-navbar-dropdown-nav"></ul></div></li><li><a href="/layouts/">Themes</a><div class="uk-navbar-dropdown"><ul class="uk-nav uk-navbar-dropdown-nav"></ul></div></li><li><a href="/states/">States</a><div class="uk-navbar-dropdown"><ul class="uk-nav uk-navbar-dropdown-nav"><li><a href="/states/build-anchor.html">build-anchor</a></li><li><a href="/states/calculated-numbered-lists.html">calculated-numbered-lists</a></li><li><a href="/states/empty-list-items.html">empty-list-items</a></li><li><a href="/states/header-shrink-expand.html">header-shrink-expand</a></li><li><a href="/states/includes/build-anchor-description.inc">build-anchor-description.inc</a></li><li><a href="/states/includes/build-anchor-example.inc">build-anchor-example.inc</a></li><li><a href="/states/includes/primary-alt-example.inc">primary-alt-example.inc</a></li><li><a href="/states/includes/primary-example.inc">primary-example.inc</a></li><li><a href="/states/includes/secondary-alt-example.inc">secondary-alt-example.inc</a></li><li><a href="/states/includes/secondary-example.inc">secondary-example.inc</a></li><li><a href="/states/includes/sub-nav.inc">sub-nav.inc</a></li><li><a href="/states/index.html">index</a></li><li><a href="/states/link-lists.html">link-lists</a></li><li><a href="/states/sticky-table-headers.html">sticky-table-headers</a></li><li><a href="/states/toggle.html">toggle</a></li><li><a href="/states/videos.html">videos</a></li></ul></div></li></ul></div><div class="uk-navbar-right"><ul class="uk-navbar-nav"><li><a href="#">Templates</a><div class="uk-navbar-dropdown"><ul class="uk-nav uk-navbar-dropdown-nav"><li><a href="/templates/index.html">Home</a></li><li><a href="/templates/faqs.html">FAQs</a></li><li><a href="/templates/report-header.html">Report Header</a></li><li><a href="/templates/outlooks.html">Outlooks</a></li></ul></div></li></ul></div></div></div></nav></header><div id="tm-main" class="tm-main uk-section uk-section-default"><div id="secondaryNavigation"><ul class="uk-nav uk-nav-default" uk-scrollspy-nav="closest: li; scroll: true"><li><a href="#codeIntroduction">Introduction</a></li><li><a href="#opendataDashboard">Opendata Dashboard</a></li><li><a href="#codeBlockWrap">Code Block Wrap</a></li><li><a href="#codeBlock">Code Block</a></li><li><a href="#standAloneCodeBlock">Stand Alone Code Block</a></li></ul></div><section id="codeIntroduction"><div class="eia-container"><h1 class="uk-h1 tm-heading-fragment">Code</h1><p class="uk-text-lead"></p></div></section><section id="opendataDashboard"><div class="eia-container"><h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Opendata Dashboard</h2><h3 class="uk-h3 uk-heading-small">Live Examples</h3></div><div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div><div class="eia-card"><div class="l-row l-two-col-left-narrow code-container"><div class="l-col"><h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">API URL:</h2></div><div class="l-col"><pre><code class="language-html">http://apidev.eia.gov/v2/electricity/state-electricity-profiles/source-disposition/data/</code></pre></div></div><br/><br/><div class="l-row l-two-col-left-narrow code-container"><div class="l-col"><h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Method:</h2></div><div class="l-col"><pre><code class="language-json">Get</code></pre></div></div><div class="l-row l-two-col-left-narrow code-container"><div class="l-col"><h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Series description:</h2></div><div class="l-col"><pre><code class="language-json">State Specific Data</code></pre></div></div><br/><br/><div class="l-row l-two-col-left-narrow code-container"><div class="l-col"><h3 class="api-body">Header:</h3></div><div class="l-col"><pre><code class="language-json">X-Params: {
	"frequency": "annual",
	"data": [
	"combined-heat-and-pwr-elect"
	],
	"facets": {},
	"start": null,
	"end": null,
	"sort": [
	{
		"column": "period",
		"direction": "desc"
	}
	],
	"offset": 0,
	"length": 5,
	"api-version": "2.0.1"
}</code></pre></div></div><div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div><pre><code class="language-html" id="OpendataDashboard">&lt;div class="l-row l-two-col-left-narrow code-container"&gt;
	&lt;div class="l-col"&gt;
	&lt;h3&gt;API URL:&lt;/h3&gt;
	&lt;/div&gt;
	&lt;div class="l-col"&gt;
	&lt;pre&gt;&lt;code&gt;http://apidev.eia.gov/v2/electricity/state-electricity-profiles/source-disposition/data/&lt;/code&gt;&lt;/pre&gt;
	&lt;/div&gt;
	&lt;/div&gt;
	&lt;br /&gt;
	&lt;br /&gt;
	&lt;div class="l-row l-two-col-left-narrow code-container"&gt;
	&lt;div class="l-col"&gt;
	&lt;h3&gt;Method:&lt;/h3&gt;
	&lt;/div&gt;
	&lt;div class="l-col"&gt;
	&lt;pre&gt;&lt;code&gt;Get&lt;/code&gt;&lt;/pre&gt;
	&lt;/div&gt;
	&lt;/div&gt;
	&lt;!-- notice no space --&gt;
	&lt;div class="l-row l-two-col-left-narrow code-container"&gt;
	&lt;div class="l-col"&gt;
	&lt;h3&gt;Series description:&lt;/h3&gt;
	&lt;/div&gt;
	&lt;div class="l-col"&gt;
	&lt;pre&gt;&lt;code&gt;State Specific Data&lt;/code&gt;&lt;/pre&gt;
	&lt;/div&gt;
	&lt;/div&gt;
	&lt;br /&gt;
	&lt;br /&gt;
	&lt;div class="l-row l-two-col-left-narrow code-container"&gt;
	&lt;div class="l-col"&gt;
	&lt;h3 class="api-body"&gt;Header:&lt;/h3&gt;
	&lt;/div&gt;
	&lt;div class="l-col"&gt;
		&lt;pre&gt;&lt;code&gt;X-Params: {
	"frequency": "annual",
	"data": [
	"combined-heat-and-pwr-elect"
	],
	"facets": {},
	"start": null,
	"end": null,
	"sort": [
	{
	"column": "period",
	"direction": "desc"
	}
	],
	"offset": 0,
	"length": 5,
	"api-version": "2.0.1"
	}&lt;/code&gt;&lt;/pre&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre></div><p><button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#OpendataDashboard"><span uk-icon="copy"></span>Copy to clipboard</button></p></section></div><section id="codeBlockWrap"><div class="eia-container"><h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Code Block Wrap</h2><p>Add <code>class="wrap"</code> to the <code>pre</code> HTML tag, like <code>&lt;pre class="wrap"&gt;</code>.</p><h3 class="uk-h3 uk-heading-small">Live Examples</h3></div><div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div><div class="eia-card"><div class="code-container"><pre class="wrap"><code class="json hljs language-json"><span class="hljs-punctuation">{</span>
  id<span class="hljs-punctuation">:</span> <span class="hljs-string">"electricity"</span><span class="hljs-punctuation">,</span>
  name<span class="hljs-punctuation">:</span> <span class="hljs-string">"Electricity"</span><span class="hljs-punctuation">,</span>
  description<span class="hljs-punctuation">:</span> <span class="hljs-string">"EIA electricity survey data"</span><span class="hljs-punctuation">,</span>
  routes<span class="hljs-punctuation">:</span> <span class="hljs-punctuation">[</span>
    <span class="hljs-punctuation">{</span>
      id<span class="hljs-punctuation">:</span> <span class="hljs-string">"retail-sales"</span><span class="hljs-punctuation">,</span>
      name<span class="hljs-punctuation">:</span> <span class="hljs-string">"Retail Sales"</span><span class="hljs-punctuation">,</span>
      description<span class="hljs-punctuation">:</span> <span class="hljs-string">"Electricity retail sales by state and sector, includes number of customers, average price, revenue, and sales. Sources: EIA forms EIA-826, EIA-923, EIA-860, EIA-861 Reports: Electric Power Monthly, Electric Power Annual, Electricity data browser."</span>
    <span class="hljs-punctuation">}</span><span class="hljs-punctuation">,</span>
    <span class="hljs-punctuation">{</span>
      id<span class="hljs-punctuation">:</span> <span class="hljs-string">"generation"</span><span class="hljs-punctuation">,</span>
      name<span class="hljs-punctuation">:</span> <span class="hljs-string">"Generation"</span><span class="hljs-punctuation">,</span>
      description<span class="hljs-punctuation">:</span> <span class="hljs-string">"Electricity generation by fueltype, location, prime mover, plant, and sector. Sources: EIA forms EIA-826, EIA-923, EIA-860, EIA-861 Reports: Electric Power Monthly, Electric Power Annual, Electricity data browser."</span>
    <span class="hljs-punctuation">}</span><span class="hljs-punctuation">,</span>
    <span class="hljs-punctuation">{</span>
      id<span class="hljs-punctuation">:</span> <span class="hljs-string">"rto"</span><span class="hljs-punctuation">,</span>
      <span class="hljs-etc">…</span>
    <span class="hljs-punctuation">}</span><span class="hljs-punctuation">,</span>
    <span class="hljs-punctuation">{</span> 
      id<span class="hljs-punctuation">:</span> <span class="hljs-string">"sep"</span><span class="hljs-punctuation">,</span>
      <span class="hljs-etc">…</span>
    <span class="hljs-punctuation">}</span><span class="hljs-punctuation">,</span>
    <span class="hljs-punctuation">{</span>
      id<span class="hljs-punctuation">:</span> <span class="hljs-string">"generator-level-capacity"</span><span class="hljs-punctuation">,</span>
      <span class="hljs-etc">…</span>
    <span class="hljs-punctuation">}</span><span class="hljs-punctuation"></span>
  <span class="hljs-punctuation">]</span><span class="hljs-punctuation"></span>
<span class="hljs-punctuation">}</span><span class="hljs-punctuation">,</span>
<span class="hljs-etc">…</span></code></pre></div><div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div><pre><code class="language-html" id="CodeBlockWrap">&lt;div class="code-container"&gt;
  &lt;pre class="wrap"&gt;
    &lt;code&gt;{
  id: "electricity",
  name: "Electricity",
  description: "EIA electricity survey data",
  routes: [
    {
      id: "retail-sales",
      name: "Retail Sales",
      description: "Electricity retail sales by state and sector, includes number of customers, average price, revenue, and sales. Sources: EIA forms EIA-826, EIA-923, EIA-860, EIA-861 Reports: Electric Power Monthly, Electric Power Annual, Electricity data browser."
    },
    {
      id: "generation",
      name: "Generation",
      description: "Electricity generation by fueltype, location, prime mover, plant, and sector. Sources: EIA forms EIA-826, EIA-923, EIA-860, EIA-861 Reports: Electric Power Monthly, Electric Power Annual, Electricity data browser."
    },
    {
      id: "rto",
      …
    },
    {
      id: "sep",
      …
    },
    {
      id: "generator-level-capacity",
      …
    }
  ]
},
…&lt;/code&gt;
  &lt;/pre&gt;
&lt;/div&gt;</code></pre></div><p><button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#CodeBlockWrap"><span uk-icon="copy"></span>Copy to clipboard</button></p></section><section id="codeBlock"><div class="eia-container"><h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Code Block</h2><h3 class="uk-h3 uk-heading-small">Live Examples</h3></div><div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div><div class="eia-card"><div class="code-container"><pre><code class="json hljs language-json"><span class="hljs-punctuation">{</span>
  id<span class="hljs-punctuation">:</span> <span class="hljs-string">"electricity"</span><span class="hljs-punctuation">,</span>
  name<span class="hljs-punctuation">:</span> <span class="hljs-string">"Electricity"</span><span class="hljs-punctuation">,</span>
  description<span class="hljs-punctuation">:</span> <span class="hljs-string">"EIA electricity survey data"</span><span class="hljs-punctuation">,</span>
  routes<span class="hljs-punctuation">:</span> <span class="hljs-punctuation">[</span>
    <span class="hljs-punctuation">{</span>
      id<span class="hljs-punctuation">:</span> <span class="hljs-string">"retail-sales"</span><span class="hljs-punctuation">,</span>
      name<span class="hljs-punctuation">:</span> <span class="hljs-string">"Retail Sales"</span><span class="hljs-punctuation">,</span>
      description<span class="hljs-punctuation">:</span> <span class="hljs-string">"Electricity retail sales by state and sector, includes number of customers, average price, revenue, and sales. Sources: EIA forms EIA-826, EIA-923, EIA-860, EIA-861 Reports: Electric Power Monthly, Electric Power Annual, Electricity data browser."</span>
    <span class="hljs-punctuation">}</span><span class="hljs-punctuation">,</span>
    <span class="hljs-punctuation">{</span>
      id<span class="hljs-punctuation">:</span> <span class="hljs-string">"generation"</span><span class="hljs-punctuation">,</span>
      name<span class="hljs-punctuation">:</span> <span class="hljs-string">"Generation"</span><span class="hljs-punctuation">,</span>
      description<span class="hljs-punctuation">:</span> <span class="hljs-string">"Electricity generation by fueltype, location, prime mover, plant, and sector. Sources: EIA forms EIA-826, EIA-923, EIA-860, EIA-861 Reports: Electric Power Monthly, Electric Power Annual, Electricity data browser."</span>
    <span class="hljs-punctuation">}</span><span class="hljs-punctuation">,</span>
    <span class="hljs-punctuation">{</span>
      id<span class="hljs-punctuation">:</span> <span class="hljs-string">"rto"</span><span class="hljs-punctuation">,</span>
      <span class="hljs-etc">…</span>
    <span class="hljs-punctuation">}</span><span class="hljs-punctuation">,</span>
    <span class="hljs-punctuation">{</span> 
      id<span class="hljs-punctuation">:</span> <span class="hljs-string">"sep"</span><span class="hljs-punctuation">,</span>
      <span class="hljs-etc">…</span>
    <span class="hljs-punctuation">}</span><span class="hljs-punctuation">,</span>
    <span class="hljs-punctuation">{</span>
      id<span class="hljs-punctuation">:</span> <span class="hljs-string">"generator-level-capacity"</span><span class="hljs-punctuation">,</span>
      <span class="hljs-etc">…</span>
    <span class="hljs-punctuation">}</span><span class="hljs-punctuation"></span>
  <span class="hljs-punctuation">]</span><span class="hljs-punctuation"></span>
<span class="hljs-punctuation">}</span><span class="hljs-punctuation">,</span>
<span class="hljs-etc">…</span></code></pre></div><div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div><pre><code class="language-html" id="CodeBlock">&lt;div class="code-container"&gt;
  &lt;pre&gt;
    &lt;code&gt;{
  id: "electricity",
  name: "Electricity",
  description: "EIA electricity survey data",
  routes: [
    {
      id: "retail-sales",
      name: "Retail Sales",
      description: "Electricity retail sales by state and sector, includes number of customers, average price, revenue, and sales. Sources: EIA forms EIA-826, EIA-923, EIA-860, EIA-861 Reports: Electric Power Monthly, Electric Power Annual, Electricity data browser."
    },
    {
      id: "generation",
      name: "Generation",
      description: "Electricity generation by fueltype, location, prime mover, plant, and sector. Sources: EIA forms EIA-826, EIA-923, EIA-860, EIA-861 Reports: Electric Power Monthly, Electric Power Annual, Electricity data browser."
    },
    {
      id: "rto",
      …
    },
    {
      id: "sep",
      …
    },
    {
      id: "generator-level-capacity",
      …
    }
  ]
},
…&lt;/code&gt;
  &lt;/pre&gt;
&lt;/div&gt;</code></pre></div><p><button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#CodeBlock"><span uk-icon="copy"></span>Copy to clipboard</button></p></section><section id="standAloneCodeBlock"><div class="eia-container"><h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Code Block</h2></div><div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div><div class="eia-card"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc: <code>https://api.eia.gov/v2/electricity/retail-sales?api_key=your_api_key</code>. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p><div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div><pre><code class="language-html" id="StandAloneCodeBlock">&lt;p&gt;Lorem ipsum dolor nunc: &lt;code&gt;https://api.eia.gov/v2/electricity/retail-sales?api_key=your_api_key&lt;/code&gt;. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.&lt;/p&gt;</code></pre></div><p><button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#StandAloneCodeBlock"><span uk-icon="copy"></span>Copy to clipboard</button></p></section><div id="rightColumn"></div></body></html>