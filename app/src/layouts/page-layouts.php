<div id="secondaryNavigation">
	<ul class="uk-nav uk-nav-default" uk-scrollspy-nav="closest: li; scroll: true">
		<li><a href="#layoutsIntroduction">Introduction</a></li>
		<li><a href="#layoutsArchitecture">Introduction</a></li>
		<li><a href="#layoutsNamingConventions">Naming Convention</a></li>
		<li><a href="#fullWidthColumn">full Width Column</a></li>
		<li><a href="#twoColEven">two Columns Even</a></li>
		<li><a href="#twoColLeftWide">two Columns Left Wide</a></li>
		<li><a href="#twoColLeftNarrow">two Columns Left Narrow</a></li>
		<li><a href="#twoColLeft">two Columns Left</a></li>
		<li><a href="#twoColRightNarrow">two Columns Right Narrow</a></li>
		<li><a href="#twoColRight">two Columns Right</a></li>
		<li><a href="#twoColRightWide">two Columns Right Wide</a></li>
		<li><a href="#threeColumns">three Columns</a></li>
		<li><a href="#threeColumnsEven">three Columns Even</a></li>
		<li><a href="#fourColumnsEven">four Columns Even</a></li>
		<li><a href="#fiveColumnsEven">five Columns Even</a></li>
		<li><a href="#sixColumnsEven">six Columns Even</a></li>
	</ul>
</div>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$ Page Layouts Architecture $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section id="layoutsArchitecture">
	<div class="eia-container">
		<h1></h1>
		<p class="uk-text-lead"></p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$ Page Layouts Architecture $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section id="layoutsArchitecture">
	<div class="eia-container">

		<h3 class="eia-sub-heading">Architecture</h3>
		<p>We leverage a custom <a href="https://www.w3schools.com/css/css_grid.asp">CSS Grid</a> system for the page layouts. The page layouts allow for the pages and elements on the page to be responsive based on the users' media device (e.g. print, mobile, laptop, desktop). To accomplish this, we use break points based off of the width of the users' media device. The breakpoints are as follows:</p>
		<table class="uk-table uk-table-striped" id="layout-resolution">
			<caption>Screen Resolution</caption>
			<thead>
				<tr>
					<th>Break Name</th>
					<th>Minimum Width (px)</th>
					<th>Maximum Width (px)</th>
					<th>Description</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>mobile</td>
					<td>1</td>
					<td>479</td>
					<td>Smartphones, portrait iPhone, portrait 480x320 phones (Android)</td>
				</tr>
				<tr>
					<td>mobile-landscape</td>
					<td>480</td>
					<td>599</td>
					<td>Smartphones, Android phones, landscape iPhone</td>
				</tr>
				<tr>
					<td>tablet</td>
					<td>600</td>
					<td>800</td>
					<td>Mobile panorama</td>
				</tr>
				<tr>
					<td>tablet-landscape</td>
					<td>801</td>
					<td>955</td>
					<td>Tablet, landscape iPad, lo-resolution laptops and desktops</td>
				</tr>
				<tr>
					<td>laptop</td>
					<td>956</td>
					<td>1355</td>
					<td>big landscape tablets, laptops, and desktops</td>
				</tr>
				<tr>
					<td>desktop</td>
					<td>1366</td>
					<td>2299</td>
					<td>Big landscape tablets, hi-resolution laptops, and desktops</td>
				</tr>
				<tr>
					<td>desktop-lg</td>
					<td>2300</td>
					<td>∞</td>
					<td>Desktop and television</td>
				</tr>
				<tr>
					<td>mobile-only</td>
					<td>1</td>
					<td>599px</td>
					<td>Smartphones, portrait iPhone, portrait 480x320 phones (Android)</td>
				</tr>
			</tbody>
		</table>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$ Naming Conventions $$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section id="layoutsNamingConventions">
	<div class="eia-container">

		<h3 class="eia-sub-heading">Naming Conventions</h3>
		<ul class="ul">
			<li class="li">All style naming conventions use classes and not ID selectors.</li>
			<li class="li">All class names are lowercase and hyphenated.</li>
			<li class="li">
				Layout class names begin with a <code>l-</code>.
			</li>
		</ul>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$ Full Width Column $$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section>
	<div class="eia-container">
		<h2 class="eia-sub-heading uk-text-center">Single Column</h2>
		<ul class="uk-grid-small uk-child-width-1-2 uk-flex-center uk-child-width-1-4@s" uk-sortable="handle: .uk-card" uk-grid>
			<li>
				<div class="uk-card uk-card-default uk-card-body prototype-thumb">
					<div class="prototype-thumb-inside">
						<div class="prototype-column-container w100">
							<div class="prototype-column prototype-secondary"></div>
						</div>
					</div>
				</div>
			</li>
			<!--li>
				<div class="uk-card uk-card-default uk-card-body uk-text-center">Item 2</div>
			</li>
			<li>
				<div class="uk-card uk-card-default uk-card-body uk-text-center">Item 3</div>
			</li>
			<li>
				<div class="uk-card uk-card-default uk-card-body uk-text-center">Item 4</div>
			</li>
			<li>
				<div class="uk-card uk-card-default uk-card-body uk-text-center">Item 5</div>
			</li>
			<li>
				<div class="uk-card uk-card-default uk-card-body uk-text-center">Item 6</div>
			</li>
			<li>
				<div class="uk-card uk-card-default uk-card-body uk-text-center">Item 7</div>
			</li>
			<li>
				<div class="uk-card uk-card-default uk-card-body uk-text-center">Item 8</div>
			</li-->
		</ul>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$ Full Width Column $$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section id="fullWidthColumn">
	<div class="eia-container">
		<h3 class="uk-h3 tm-heading-fragment">Full Width Column</h3>
		<p>The fullpage row is similar to the <code>l-row l-header</code> but can be applied to the entire section. An example might include a 'dashboard' page with multiple rows and columns.</p>
		<!-- Live Examples --
	<div class="uk-text-default uk-text-normal uk-text-uppercase">Live Examples</div>
	<dl class="uk-description-list uk-description-list-divider">
		<dd><a [routerLink]="['/layouts/']" [fragment]="'placeholder'">placeholder</a></dd>
	</dl>
	-->
		<!-- Example -->
		<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
		<div class="eia-card">
			<div class="module-outer">
				<div class="module-inner">
					<div class="l-row l-full-width-col">
						<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
		<pre><code class="language-html" id="FullWidthColumn">&lt;div class="l-row l-full-width-col"&gt;
	  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
	&lt;/div&gt;</code></pre>
		<p>
			<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#FullWidthColumn">
				<span uk-icon="copy"></span>Copy to clipboard
			</button>
		</p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$     Two Column    $$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section>
	<div class="eia-container">
		<h2 class="eia-sub-heading">Two Columns</h2>
		<ul class="uk-grid-small uk-child-width-1-2 uk-child-width-1-4@s" uk-sortable="handle: .uk-card" uk-grid>
			<li>
				<div class="uk-card uk-card-default uk-card-body uk-text-center prototype-thumb" uk-tooltip="2 Column Left Narrow (25/75)">
					<div class="prototype-thumb-inside">
						<div class="prototype-column-container w25">
							<div class="prototype-column prototype-secondary"></div>
						</div>
						<div class="prototype-column-container w75">
							<div class="prototype-column"></div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="uk-card uk-card-default uk-card-body uk-text-center prototype-thumb" uk-tooltip="2 Column Left (33/66)">
					<div class="prototype-thumb-inside">
						<div class="prototype-column-container w33">
							<div class="prototype-column prototype-secondary"></div>
						</div>
						<div class="prototype-column-container w66">
							<div class="prototype-column"></div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="uk-card uk-card-default uk-card-body uk-text-center prototype-thumb" uk-tooltip="2 Column Left Wide (42/58)">
					<div class="prototype-thumb-inside">
						<div class="prototype-column-container w42">
							<div class="prototype-column"></div>
						</div>
						<div class="prototype-column-container w58">
							<div class="prototype-column prototype-secondary"></div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="uk-card uk-card-default uk-card-body uk-text-center prototype-thumb" uk-tooltip="2 Column Even (50/50)">
					<div class="prototype-thumb-inside">
						<div class="prototype-column-container w50">
							<div class="prototype-column"></div>
						</div>
						<div class="prototype-column-container w50">
							<div class="prototype-column"></div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="uk-card uk-card-default uk-card-body uk-text-center prototype-thumb" uk-tooltip="2 Column Right (58/42)">
					<div class="prototype-thumb-inside">
						<div class="prototype-column-container w58">
							<div class="prototype-column"></div>
						</div>
						<div class="prototype-column-container w42">
							<div class="prototype-column prototype-secondary"></div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="uk-card uk-card-default uk-card-body uk-text-center prototype-thumb" uk-tooltip="2 Column Right (66/33)">
					<div class="prototype-thumb-inside">
						<div class="prototype-column-container w66">
							<div class="prototype-column"></div>
						</div>
						<div class="prototype-column-container w33">
							<div class="prototype-column prototype-secondary"></div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="uk-card uk-card-default uk-card-body uk-text-center prototype-thumb" uk-tooltip="2 Column Right Narrow (75/25)">
					<div class="prototype-thumb-inside">
						<div class="prototype-column-container w75">
							<div class="prototype-column"></div>
						</div>
						<div class="prototype-column-container w25">
							<div class="prototype-column prototype-secondary"></div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$  Two Columns Even   $$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section id="twoColEven">
	<div class="eia-container">
		<!-- script src="../../partials/l-two-col-even.js"></script -->
		<h3 class="uk-h3 tm-heading-fragment">Two Columns Even (50%<div class="pipe">/</div>50%)</h3>
		<div class="uk-text-default uk-text-normal uk-text-uppercase">Live Examples</div>
		<dl class="uk-description-list uk-description-list-divider">
			<dd></dd>
			<dd></dd>
		</dl>
		<!-- Example -->
		<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
		<div class="eia-card">
			<div class="module-outer">
				<div class="module-inner">
					<div class="l-row l-two-col-even">
						<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
						</div>
						<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
		<pre><code class="language-html" id="TwoColEven">&lt;div class="l-row l-two-col-even"&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
&lt;/div&gt;</code></pre>
		<p>
			<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#TwoColEven">
				<span uk-icon="copy"></span>Copy to clipboard
			</button>
		</p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$ TwoColLeftWide $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section id="twoColLeftWide">
	<div class="eia-container">
		<!-- %- include('./partials/l-two-col-left-wide') % -->
		<h3 class="uk-h3 tm-heading-fragment">Two Columns Left Wide (xx%<div class="pipe">/</div>xx%)</h3>
		<div class="uk-text-default uk-text-normal uk-text-uppercase">Live Examples</div>
		<dl class="uk-description-list uk-description-list-divider">
			<dd><a to="https://www.eia.gov/uranium/production/annual/index.php">www.eia.gov/uranium/production/annual/index.php</a></dd>
			<dd><a to="https://www.eia.gov/uranium/production/quarterly/index.php">www.eia.gov/uranium/production/quarterly/index.php</a></dd>
		</dl>
		<!-- Example -->
		<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
		<div class="eia-card">
			<div class="module-outer">
				<div class="module-inner">
					<div class="l-row l-two-col-left-wide">
						<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
						</div>
						<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
		<pre><code class="language-html" id="TwoColLeftWide">&lt;div class="l-row l-two-col-left-wide"&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
&lt;/div&gt;</code></pre>
		<p>
			<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#TwoColLeftWide">
				<span uk-icon="copy"></span>Copy to clipboard
			</button>
		</p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$     dilly     $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section id="twoColLeftNarrow">
	<div class="eia-container">
		<!-- %- include('./partials/l-two-col-left-narrow') % -->
		<h3 class="uk-h3 tm-heading-fragment">Two Columns Left Narrow (25%<div class="pipe">/</div>75%)</h3>
		<div class="uk-text-default uk-text-normal uk-text-uppercase">Live Examples</div>
		<dl class="uk-description-list uk-description-list-divider">
			<dd></dd>
			<dd></dd>
		</dl>
		<!-- Example -->
		<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
		<div class="eia-card">
			<div class="module-outer">
				<div class="module-inner">
					<div class="l-row l-two-col-left-narrow">
						<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
						</div>
						<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
		<pre><code class="language-html" id="TwoColLeftNarrow">&lt;div class="l-row l-two-col-left-narrow"&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
&lt;/div&gt;</code></pre>
		<p>
			<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#TwoColLeftNarrow">
				<span uk-icon="copy"></span>Copy to clipboard
			</button>
		</p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$     TwoColLeft     $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section id="twoColLeft">
	<div class="eia-container">
		<!-- %- include('./partials/l-two-col-left') % -->
		<h3 class="uk-h3 tm-heading-fragment">Two Columns Left (33%<div class="pipe">/</div>66%)</h3>
		<p>Actual: 41.666% | 58.333%</p>
		<div class="uk-text-default uk-text-normal uk-text-uppercase">Live Examples</div>
		<dl class="uk-description-list uk-description-list-divider">
			<dd></dd>
			<dd></dd>
		</dl>
		<!-- Example -->
		<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
		<div class="eia-card">
			<div class="module-outer">
				<div class="module-inner">
					<div class="l-row l-two-col-left">
						<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
						</div>
						<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
		<pre><code class="language-html" id="TwoColLeft">&lt;div class="l-row l-two-col-left"&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
&lt;/div&gt;</code></pre>
		<p>
			<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#TwoColLeft">
				<span uk-icon="copy"></span>Copy to clipboard
			</button>
		</p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$     TwoColRightNarrow     $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section id="twoColRightNarrow">
	<div class="eia-container">
		<!-- %- include('./partials/l-two-col-right-narrow') % -->
		<h3 class="uk-h3 tm-heading-fragment">Two Columns Right Narrow (75%<div class="pipe">/</div>25%)</h3>
		<div class="uk-text-default uk-text-normal uk-text-uppercase">Live Examples</div>
		<dl class="uk-description-list uk-description-list-divider">
			<dd><a href="https://www.eia.gov/petroleum/data.php">https://www.eia.gov/petroleum/data.php</a></dd>
		</dl>
		<!-- Example -->
		<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
		<div class="eia-card">
			<div class="module-outer">
				<div class="module-inner">
					<div class="l-row l-two-col-right-narrow">
						<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
						</div>
						<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
		<pre><code class="language-html" id="TwoColRightNarrow">&lt;div class="l-row l-two-col-right-narrow"&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
&lt;/div&gt;</code></pre>
		<p>
			<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#TwoColRightNarrow">
				<span uk-icon="copy"></span>Copy to clipboard
			</button>
		</p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$     TwoColRight     $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section id="twoColRight">
	<div class="eia-container">
		<!-- %- include('./partials/l-two-col-right') % -->
		<h3 class="uk-h3 tm-heading-fragment">Two Columns Right (66%<div class="pipe">/</div>33%)</h3>
		<p>66.666% | 33.333%</p>
		<div class="uk-text-default uk-text-normal uk-text-uppercase">Live Examples</div>
		<dl class="uk-description-list uk-description-list-divider">
			<dd>The sub-navigation on<a to="https://www.eia.gov/petroleum/">https://www.eia.gov/petroleum/</a>.</dd>
			<dd>This layout has not been used on any converted pages yet.</dd>
		</dl>
		<!-- Example -->
		<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
		<div class="eia-card">
			<div class="module-outer">
				<div class="module-inner">
					<div class="l-row l-two-col-right">
						<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
						</div>
						<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
		<pre><code class="language-html" id="woColRight">&lt;div class="l-row l-two-col-right"&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
&lt;/div&gt;</code></pre>
		<p>
			<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#woColRight">
				<span uk-icon="copy"></span>Copy to clipboard
			</button>
		</p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$ TwoColRightWide $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section id="twoColRightWide">
	<div class="eia-container">
		<!-- %- include('./partials/l-two-col-right-wide') % -->
		<h3 class="uk-h3 tm-heading-fragment">Two Columns Right Wide (xx%<div class="pipe">/</div>xx%)</h3>
		<p>Actual: 41.666% | 58.333%</p>
		<div class="uk-text-default uk-text-normal uk-text-uppercase">Live Examples</div>
		<dl class="uk-description-list uk-description-list-divider">
			<dd></dd>
			<dd></dd>
		</dl>
		<!-- Example -->
		<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
		<div class="eia-card">
			<div class="module-outer">
				<div class="module-inner">
					<div class="l-row l-two-col-right-wide">
						<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
						</div>
						<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
		<pre><code class="language-html" id="TwoColRightWide">&lt;div class="l-row l-two-col-right-wide"&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
&lt;/div&gt;</code></pre>
		<p>
			<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#TwoColRightWide">
				<span uk-icon="copy"></span>Copy to clipboard
			</button>
		</p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$ ThreeColumns $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section>
	<div class="eia-container">
		<h2 class="eia-sub-heading">Three Columns</h2>
		<ul class="uk-grid-small uk-child-width-1-2 uk-child-width-1-4@s" uk-sortable="handle: .uk-card" uk-grid>
			<li>
				<div class="uk-card uk-card-default uk-card-body uk-text-center prototype-thumb" uk-tooltip="3 Column (25/50/25)">
					<div class="prototype-thumb-inside">
						<div class="prototype-column-container w25">
							<div class="prototype-column prototype-secondary"></div>
						</div>
						<div class="prototype-column-container w50">
							<div class="prototype-column"></div>
						</div>
						<div class="prototype-column-container w25">
							<div class="prototype-column prototype-secondary"></div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="uk-card uk-card-default uk-card-body uk-text-center prototype-thumb" uk-tooltip="3 Column Even (33/33/33)">
					<div class="prototype-thumb-inside">
						<div class="prototype-column-container w33">
							<div class="prototype-column"></div>
						</div>
						<div class="prototype-column-container w33">
							<div class="prototype-column"></div>
						</div>
						<div class="prototype-column-container w33">
							<div class="prototype-column"></div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$ ThreeColumns $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section id="threeColumns">
	<div class="eia-container">
		<h3 class="uk-h3 tm-heading-fragment">Three Columns (25%<div class="pipe">/</div>50%<div class="pipe">/</div>25%)</h3>
		<div class="uk-text-default uk-text-normal uk-text-uppercase">Live Examples</div>
		<dl class="uk-description-list uk-description-list-divider">
			<dd></dd>
			<dd></dd>
		</dl>
		<!-- Example -->
		<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
		<div class="eia-card">
			<div class="module-outer">
				<div class="module-inner">
					<div class="l-row l-three-col">
						<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
						</div>
						<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
						</div>
						<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
		<pre><code class="language-html" id="ThreeColumns">&lt;div class="l-row l-three-col-even"&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
&lt;/div&gt;</code></pre>
		<p>
			<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#ThreeColumns">
				<span uk-icon="copy"></span>Copy to clipboard
			</button>
		</p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$ ThreeColumnsEven $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section id="threeColumnsEven">
	<div class="eia-container">
		<h3 class="uk-h3 tm-heading-fragment">Three Columns Even (33%<div class="pipe">/</div>33%<div class="pipe">/</div>33%)</h3>
		<div class="uk-text-default uk-text-normal uk-text-uppercase">Live Examples</div>
		<dl class="uk-description-list uk-description-list-divider">
			<dd></dd>
			<dd></dd>
		</dl>
		<!-- Example -->
		<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
		<div class="eia-card">
			<div class="module-outer">
				<div class="module-inner">
					<div class="l-row l-three-col-even">
						<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
						</div>
						<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
						</div>
						<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
		<pre><code class="language-html" id="ThreeColumnsEven">&lt;div class="l-row l-three-col-even"&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
&lt;/div&gt;</code></pre>
		<p>
			<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#ThreeColumnsEven">
				<span uk-icon="copy"></span>Copy to clipboard
			</button>
		</p>
	</div>
</section>
<section>
	<div class="eia-container">
		<h2 class="eia-sub-heading">Four Columns</h2>
		<ul class="uk-grid-small uk-child-width-1-2 uk-child-width-1-4@s" uk-sortable="handle: .uk-card" uk-grid>
			<li>
				<div class="uk-card uk-card-default uk-card-body uk-text-center prototype-thumb" uk-tooltip="2 Column Right (58/42)">
					<div class="prototype-thumb-inside">
						<div class="prototype-column-container w25">
							<div class="prototype-column"></div>
						</div>
						<div class="prototype-column-container w25">
							<div class="prototype-column"></div>
						</div>
						<div class="prototype-column-container w25">
							<div class="prototype-column"></div>
						</div>
						<div class="prototype-column-container w25">
							<div class="prototype-column"></div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</section>
<section id="fourColumnsEven">
	<div class="eia-container">
		<h3 class="uk-h3 tm-heading-fragment">Four Columns Even</h3>
		<!-- Live Examples --
	<div class="uk-text-default uk-text-normal uk-text-uppercase">Live Examples</div>
	<dl class="uk-description-list uk-description-list-divider">
		<dd><a [routerLink]="['/layouts/']" [fragment]="'placeholder'">placeholder</a></dd>
	</dl>
	-->
		<!-- Example -->
		<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
		<div class="eia-card">
			<div class="module-outer">
				<div class="module-inner">
					<div class="l-row l-four-col-even">
						<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
						</div>
						<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
						</div>
						<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
						</div>
						<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
		<pre><code class="language-html" id="FourColumnsEven">&lt;div class="l-row l-four-col-even"&gt;
	&lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
	&lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
	&lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
	&lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
&lt;/div&gt;</code></pre>
		<p>
			<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#FourColumnsEven">
				<span uk-icon="copy"></span>Copy to clipboard
			</button>
		</p>
	</div>
</section>
<section>
	<div class="eia-container">
		<h2 class="eia-sub-heading">Five Columns Even</h2>
		<ul class="uk-grid-small uk-child-width-1-2 uk-child-width-1-4@s" uk-sortable="handle: .uk-card" uk-grid>
			<li>
				<div class="uk-card uk-card-default uk-card-body uk-text-center prototype-thumb" uk-tooltip="2 Column Right (58/42)">
					<div class="prototype-thumb-inside">
						<div class="prototype-column-container w20">
							<div class="prototype-column"></div>
						</div>
						<div class="prototype-column-container w20">
							<div class="prototype-column"></div>
						</div>
						<div class="prototype-column-container w20">
							<div class="prototype-column"></div>
						</div>
						<div class="prototype-column-container w20">
							<div class="prototype-column"></div>
						</div>
						<div class="prototype-column-container w20">
							<div class="prototype-column"></div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</section>
<section id="fiveColumnsEven">
	<div class="eia-container">
		<h3 class="uk-h3 tm-heading-fragment">Five Columns Even</h3>
		<!-- Live Examples --
	<div class="uk-text-default uk-text-normal uk-text-uppercase">Live Examples</div>
	<dl class="uk-description-list uk-description-list-divider">
		<dd><a [routerLink]="['/layouts/']" [fragment]="'placeholder'">placeholder</a></dd>
	</dl>
	-->
		<!-- Example -->
		<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
		<div class="eia-card">
			<div class="module-outer">
				<div class="module-inner">
					<div class="l-row l-full-width-col">
						<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
		<pre><code class="language-html" id="FiveColumnsEven">&lt;div class="l-row l-full-width-col"&gt;
	  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
	&lt;/div&gt;</code></pre>
		<p>
			<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#FiveColumnsEven">
				<span uk-icon="copy"></span>Copy to clipboard
			</button>
		</p>
	</div>
</section>
<section>
	<div class="eia-container">
		<h2 class="eia-sub-heading">Six Columns Even</h2>
		<ul class="uk-grid-small uk-child-width-1-2 uk-child-width-1-4@s" uk-sortable="handle: .uk-card" uk-grid>
			<li>
				<div class="uk-card uk-card-default uk-card-body uk-text-center prototype-thumb" uk-tooltip="6 Column Even (16/16/16/16/16/16)">
					<div class="prototype-thumb-inside">
						<div class="prototype-column-container w16">
							<div class="prototype-column"></div>
						</div>
						<div class="prototype-column-container w16">
							<div class="prototype-column"></div>
						</div>
						<div class="prototype-column-container w16">
							<div class="prototype-column"></div>
						</div>
						<div class="prototype-column-container w16">
							<div class="prototype-column"></div>
						</div>
						<div class="prototype-column-container w16">
							<div class="prototype-column"></div>
						</div>
						<div class="prototype-column-container w16">
							<div class="prototype-column"></div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</section>
<section id="sixColumnsEven">
	<div class="eia-container">

		<h3 class="uk-h3 tm-heading-fragment">Six Columns Even</h3>
		<!-- Live Examples --
	<div class="uk-text-default uk-text-normal uk-text-uppercase">Live Examples</div>
	<dl class="uk-description-list uk-description-list-divider">
		<dd><a [routerLink]="['/layouts/']" [fragment]="'placeholder'">placeholder</a></dd>
	</dl>
	-->
		<!-- Example -->
		<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
		<div class="eia-card">
			<div class="module-outer">
				<div class="module-inner">
					<div class="l-row l-six-col-even">
						<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
						</div>
						<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
						</div>
						<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
						</div>
						<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
						</div>
						<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
						</div>
						<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
		<pre><code class="language-html" id="SixColumnsEven">&lt;div class="l-row l-six-col-even"&gt;
	&lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
	&lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
	&lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
	&lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
	&lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
	&lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
&lt;/div&gt;</code></pre>
		<p>
			<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#SixColumnsEven">
				<span uk-icon="copy"></span>Copy to clipboard
			</button>
		</p>
	</div>
</section>