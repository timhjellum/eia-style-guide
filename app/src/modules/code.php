<a id="scrollTop" href>
  <div></div>
</a>
<aside>
  <nav>
    <ul>
    </ul>
  </nav>
</aside>
<main>
  <h1 class="eia-h1">Code</h1>
  <section>
    <div class="eia-container">
      <h2 class="eia-h2">Opendata Dashboard</h2>
      <!-- p class="eia-para"></p -->
      <h3 class="eia-h3">Example</h3>
      <div class="eia-card">
        <div class="l-margin-bottom eia-container-resizer">


		<div class="l-row l-two-col-left-narrow code-container">
			<div class="l-col">
				<h2 id="" class="eia-h2 eia-margin-xlarge-top">API URL:</h2>
			</div>
			<div class="l-col">
				<pre><code class="language-html">http://apidev.eia.gov/v2/electricity/state-electricity-profiles/source-disposition/data/</code></pre>
			</div>
		</div>
		<br />
		<br />
		<div class="l-row l-two-col-left-narrow code-container">
			<div class="l-col">
				<h2 id="" class="eia-h2 eia-margin-xlarge-top">Method:</h2>
			</div>
			<div class="l-col">
				<pre><code class="language-json">Get</code></pre>
			</div>
		</div>
		<!-- notice no space -->
		<div class="l-row l-two-col-left-narrow code-container">
			<div class="l-col">
				<h2 id="" class="eia-h2 eia-margin-xlarge-top">Series description:</h2>
			</div>
			<div class="l-col">
				<pre><code class="language-json">State Specific Data</code></pre>
			</div>
		</div>
		<br />
		<br />
		<div class="l-row l-two-col-left-narrow code-container">
			<div class="l-col">
				<h3 class="api-body">Header:</h2>
			</div>
			<div class="l-col">
				<pre><code class="language-json">X-Params: {
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
}</code></pre>
			</div>
		</div>
		<h3 class="eia-h3">HTML</h3>
		<pre><code class="language-html" id="OpendataDashboard">&lt;div class="l-row l-two-col-left-narrow code-container"&gt;
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
&lt;/div&gt;</code></pre>
	</div>
	<!-- Copy Button -->
	<p>
		<button class="copy-element eia-button eia-button-primary" data-clipboard-action="copy" data-clipboard-target="#OpendataDashboard">
			<span></span>Copy to clipboard
		</button>
	</p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$     Code Block Wrap      $$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="codeBlockWrap">
	<div class="eia-container">
		<h2 id="" class="eia-h2 eia-margin-xlarge-top">Code Block Wrap</h2>
		<p>Add <code>class="wrap"</code> to the <code>pre</code> HTML tag, like <code>&lt;pre class="wrap"&gt;</code>.</p>
		<h3 class="eia-h3">Live Examples</h2>
			<!-- dl class="">
				<dd><a href="https://www.eia.gov/opendata/">https://www.eia.gov/opendata/</a></li>
					</ul-->
	</div>
	<!-- Example -->
	<h3 class="eia-h3">Example</h3>
	<div class="eia-card">

		<div class="code-container">
			<pre class="wrap"><code class="json hljs language-json"><span class="hljs-punctuation">{</span>
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
<span class="hljs-etc">…</span></code></pre>
		</div>
		<h3 class="eia-h3">HTML</h3>
		<pre><code class="language-html" id="CodeBlockWrap">&lt;div class="code-container"&gt;
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
&lt;/div&gt;</code></pre>
	</div>
	<!-- Copy Button -->
	<p>
		<button class="copy-element eia-button eia-button-primary" data-clipboard-action="copy" data-clipboard-target="#CodeBlockWrap">
			<span></span>Copy to clipboard
		</button>
	</p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$    Code Block    $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="codeBlock">
	<div class="eia-container">
		<h2 id="" class="eia-h2 eia-margin-xlarge-top">Code Block</h2>
		<h3 class="eia-h3">Live Examples</h2>
			<!-- dl class="">
				<dd><a href="https://www.eia.gov/opendata/">https://www.eia.gov/opendata/</a></li>
					</ul -->
	</div>
	<!-- Example -->
	<h3 class="eia-h3">Example</h3>
	<div class="eia-card">

		<div class="code-container">
			<pre><code class="json hljs language-json"><span class="hljs-punctuation">{</span>
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
<span class="hljs-etc">…</span></code></pre>
		</div>





		<h3 class="eia-h3">HTML</h3>
		<pre><code class="language-html" id="CodeBlock">&lt;div class="code-container"&gt;
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
&lt;/div&gt;</code></pre>
	</div>
	<!-- Copy Button -->
	<p>
		<button class="copy-element eia-button eia-button-primary" data-clipboard-action="copy" data-clipboard-target="#CodeBlock">
			<span></span>Copy to clipboard
		</button>
	</p>
	</div>
</section>

<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$    StandAloneCodeBlock    $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="standAloneCodeBlock">
	<div class="eia-container">
		<h2 id="" class="eia-h2 eia-margin-xlarge-top">Code Block</h2>
		<!-- h3 class="uk-heading-small">Live Examples</h2>
			<dl class="">
				<dd><a href="https://www.eia.gov/opendata/">https://www.eia.gov/opendata/</a></li>
					</ul -->
	</div>
	<!-- Example -->
	<h3 class="eia-h3">Example</h3>
	<div class="eia-card">

		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc: <code>https://api.eia.gov/v2/electricity/retail-sales?api_key=your_api_key</code>. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>

		<h3 class="eia-h3">HTML</h3>
		<pre><code class="language-html" id="StandAloneCodeBlock">&lt;p&gt;Lorem ipsum dolor nunc: &lt;code&gt;https://api.eia.gov/v2/electricity/retail-sales?api_key=your_api_key&lt;/code&gt;. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.&lt;/p&gt;</code></pre>
	</div>
	<!-- Copy Button -->
	<p>
		<button class="copy-element eia-button eia-button-primary" data-clipboard-action="copy" data-clipboard-target="#StandAloneCodeBlock">
			<span></span>Copy to clipboard
		</button>
	</p>
</div>
	</section>
</main>
<footer>
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
</footer>
<link href="https://www.eia.gov/global/styles/global.min.css" type="text/css" media="screen, projection" rel="stylesheet">