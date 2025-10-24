<section id="module-thr">
  <!-- start master layout-->
  <div class="grid-wrapper">
    <div class="grid-left">
      <!-- start left navigation-->
      <div></div>
      <!-- end master layout-->
    </div>
    <div class="grid-main">
      <!-- start main template area -->

<div class="eia-container">
						<h1 class="uk-h1 tm-heading-fragment"><?=$section?></h1>
						<p class="uk-text-lead"></p>
					</div>
					<!-- end top template -->
					<!-- content here -->
					<div class="eia-container">
						<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Code Block</h2>
						<h3 class="uk-h3 uk-heading-small">Live Examples</h2>
							<!-- dl class="uk-description-list uk-description-list-divider">
				<dd><a href="https://www.eia.gov/opendata/">https://www.eia.gov/opendata/</a></li>
					</ul -->
					</div>
					<!-- Example -->
					<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
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





						<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
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
						<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#CodeBlock">
							<span uk-icon="copy"></span>Copy to clipboard
						</button>
					</p>
				</div>

      <!-- end main template area -->
    </div>
    <div class="grid-right"></div>
  </div>
  <!-- end master layout-->
</section>
