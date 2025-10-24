<section id="top">
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

					<div class="eia-container">
						<h1 class="uk-h1 tm-heading-fragment"><?=$section?></h1>
						<p class="uk-text-lead"></p>
					</div>
					<!-- end top template -->
					<!-- content here -->
					<div class="eia-container">
						<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Opendata Dashboard</h2>
						<h3 class="uk-h3 uk-heading-small">Live Examples</h2>
							<!-- dl class="uk-description-list uk-description-list-divider">
				<dd><a href="https://www.eia.gov/opendata/">https://www.eia.gov/opendata/</a></li>
					</ul -->
					</div>
					<!-- Example -->
					<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
					<div class="eia-card">

						<div class="l-row l-two-col-left-narrow code-container">
							<div class="l-col">
								<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">API URL:</h2>
							</div>
							<div class="l-col">
								<pre><code class="language-html">http://apidev.eia.gov/v2/electricity/state-electricity-profiles/source-disposition/data/</code></pre>
							</div>
						</div>
						<br />
						<br />
						<div class="l-row l-two-col-left-narrow code-container">
							<div class="l-col">
								<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Method:</h2>
							</div>
							<div class="l-col">
								<pre><code class="language-json">Get</code></pre>
							</div>
						</div>
						<!-- notice no space -->
						<div class="l-row l-two-col-left-narrow code-container">
							<div class="l-col">
								<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Series description:</h2>
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
						<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
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
						<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#OpendataDashboard">
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
