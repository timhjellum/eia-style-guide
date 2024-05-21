<div id="secondaryNavigation">
	<ul class="uk-nav uk-nav-default" uk-scrollspy-nav="closest: li; scroll: true">
		<li><a href="#accordions">Introduction</a></li>
		<li><a href="#allClosed">All Closed</a></li>
		<li><a href="#firstOpen">FirstOpen</a></li>
		<li><a href="#allOpen">All Open</a></li>
	</ul>
</div>

<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$  Introduction $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section id="accordions">
	<div class="eia-container">
		<h1 class="uk-h1 tm-heading-fragment" id="accordions">Accordions</h1>
		<p class="uk-text-lead"></p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$   All Closed  $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section id="allClosed">
	<div class="eia-container">
		<h2 class="uk-h3 tm-heading-fragment">All Closed</h2>
		<p>Add <code>all-closed</code> to the accordion <code class="html">&lt;div class=&#34;accordion all-closed&#34;&gt;</code></p>
		<!-- Live Examples --
<div class="uk-text-default uk-text-normal uk-text-uppercase">Live Examples</div>
<dl class="uk-description-list uk-description-list-divider">
	<dd><a [routerLink]="['/modules/']" [fragment]="'placeholder'">placeholder</a></dd>
</dl>
-->
		<!-- Example -->
		<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
		<div class="eia-card">
			<div class="module-outer">
				<div class="module-inner">
					<div class="l-row l-two-col-left-wide">
						<div class="l-col primary">
							<span class="expand-collapse-container">
								<span class="eia ico expand">
									<span>Expand all</span>
								</span>
							</span>
							<div class="accordion all-closed">
								<h3>
									<span class="ui-accordion-header-icon ui-icon ico expand" style="display: block"></span>
									Introduction
								</h3>
								<div class="eia accordion-content">
									<ul style="display: none"></ul>
								</div>
								<h3>
									<span class="ui-accordion-header-icon ui-icon ico expand" style="display: block"></span>
									Current
								</h3>
								<div class="eia accordion-content">
									<ul style="display: none"></ul>
								</div>
								<h3>
									<span class="ui-accordion-header-icon ui-icon ico expand" style="display: block"></span>
									Discontinued
								</h3>
								<div class="eia accordion-content">
									<ul style="display: none"></ul>
								</div>
							</div>
						</div>
						<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
		<pre><code id="accordionAllClosed">&lt;div class="primary"&gt;
  &lt;span class="expand-collapse-container"&gt;
    &lt;span class="ico expand"&gt;
	  &lt;span&gt;Expand all&lt;/span&gt;
	&lt;/span&gt;
	&lt;span class="ico collapse"&gt;
	  &lt;span&gt;Collapse all&lt;/span&gt;
	&lt;/span&gt;
  &lt;/span&gt;
  &lt;div class="accordion all-closed"&gt;
	&lt;h3&gt;Lorem ipsum dolor sit amet&lt;/h3&gt;
	&lt;ul class="accordion-content"&gt;
	  &lt;ul&gt;
        &lt;li class="head"&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
	    &lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
	  &lt;/ul&gt;
	&lt;/div&gt;
	&lt;h3&gt;Lorem ipsum dolor sit amet&lt;/h3&gt;
	&lt;ul class="accordion-content"&gt;
	  &lt;ul&gt;
	    &lt;li class="head"&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
	    &lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
	  &lt;/ul&gt;
	&lt;/div&gt;
	&lt;h3&gt;Lorem ipsum dolor sit amet&lt;/h3&gt;
	&lt;ul class="accordion-content"&gt;
	  &lt;ul&gt;
	    &lt;li class="head"&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
	    &lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
	  &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
		<p>
			<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#accordionAllClosed">
				<span uk-icon="copy"></span>Copy to clipboard
			</button>
		</p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$      All Open      $$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section id="allOpen">
	<div class="eia-container">




		<h2 class="uk-h3 tm-heading-fragment">All Open</h2>
		<p>Add <code>all-open</code> to the accordion <code class="html">&lt;div class=&#34;accordion all-open&#34;&gt;</code></p>
		<!-- Live Examples --
<div class="uk-text-default uk-text-normal uk-text-uppercase">Live Examples</div>
<dl class="uk-description-list uk-description-list-divider">
	<dd><a [routerLink]="['/modules/']" [fragment]="'placeholder'">placeholder</a></dd>
</dl>
-->
		<!-- Example -->
		<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
		<div class="eia-card">
			<div class="module-outer">
				<div class="module-inner">
					<div class="l-row l-two-col-left-wide">
						<div class="l-col primary">
							<div class="accordion all-open">
								<h3>Introduction</h3>
								<div class="eia accordion-content">
									<ul style="display: block">
										<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.li
									</ul>
								</div>
								<h3>Current</h3>
								<div class="eia accordion-content">
									<ul style="display: block">
										<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.li
									</ul>
								</div>
								<h3>Discontinued</h3>
								<div class="eia accordion-content">
									<ul style="display: block">
										<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.li
									</ul>
								</div>
							</div>
						</div>
						<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
		<pre><code class="language-html" id="AllOpen">&lt;div class="primary"&gt;
  &lt;div class="accordion all-open"&gt;
	&lt;h3&gt;Lorem ipsum dolor sit amet&lt;/h3&gt;
	&lt;ul class="accordion-content"&gt;
	  &lt;ul&gt;
		&lt;li class="head"&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
		&lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
	  &lt;/ul&gt;
	&lt;/div&gt;
	&lt;h3&gt;Lorem ipsum dolor sit amet&lt;/h3&gt;
	&lt;ul class="accordion-content"&gt;
	  &lt;ul&gt;
		&lt;li class="head"&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
		&lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
	  &lt;/ul&gt;
	&lt;/div&gt;
	&lt;h3&gt;Lorem ipsum dolor sit amet&lt;/h3&gt;
	&lt;ul class="accordion-content"&gt;
	  &lt;ul&gt;
		&lt;li class="head"&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
		&lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
	  &lt;/ul&gt;
	&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
		<p>
			<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#AllOpen">
				<span uk-icon="copy"></span>Copy to clipboard
			</button>
		</p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$    First Open    $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section id="firstOpen">
	<div class="eia-container">
		<h2 class="uk-h3 tm-heading-fragment">first-open</h2>
		<p>Add <code>first-open</code> to the accordion <code class="html">&lt;div class=&#34;accordion first-open&#34;&gt;</code></p>
		<!-- Live Examples --
<div class="uk-text-default uk-text-normal uk-text-uppercase">Live Examples</div>
<dl class="uk-description-list uk-description-list-divider">
	<dd><a [routerLink]="['/modules/']" [fragment]="'placeholder'">placeholder</a></dd>
</dl>
-->
		<!-- Example -->
		<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
		<div class="eia-card">
			<div class="module-outer">
				<div class="module-inner">
					<div class="l-row l-two-col-left-wide">
						<div class="l-col primary">
							<span class="expand-collapse-container">
								<span class="eia ico expand">
									<span>Expand all</span>
								</span>
							</span>
							<div class="accordion first-open">
								<h3 class="ui-accordion-header" tabIndex="-1">
									<span class="ui-accordion-header-icon ui-icon ico collapse" style="display: block"></span>
									Introduction
								</h3>
								<div class="eia accordion-content">
									<ul style="display: block">
										<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</li>
									</ul>
								</div>
								<h3>
									<span class="ui-accordion-header-icon ui-icon ico expand" style="display: block"></span>
									Current
								</h3>
								<div class="eia accordion-content">
									<ul style="display: none"></ul>
								</div>
								<h3>
									<span class="ui-accordion-header-icon ui-icon ico expand" style="display: block"></span>
									Discontinued
								</h3>
								<div class="eia accordion-content">
									<ul style="display: none"></ul>
								</div>
							</div>
						</div>
						<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
		<pre><code class="language-html" id="FirstOpen">&lt;div class="primary"&gt;
  &lt;span class="expand-collapse-container"&gt;
	&lt;span class="ico expand"&gt;
      &lt;span&gt;Expand all&lt;/span&gt;
	&lt;/span&gt;
	&lt;span class="ico collapse"&gt;
	  &lt;span&gt;Collapse all&lt;/span&gt;
	&lt;/span&gt;
  &lt;/span&gt;
  &lt;div class="accordion first-open"&gt;
	&lt;h3&gt;Lorem ipsum dolor sit amet&lt;/h3&gt;
	&lt;ul class="accordion-content"&gt;
	  &lt;ul&gt;
		&lt;li class="head"&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
		&lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
	  &lt;/ul&gt;
	&lt;/div&gt;
	&lt;h3&gt;Lorem ipsum dolor sit amet&lt;/h3&gt;
	&lt;ul class="accordion-content"&gt;
	  &lt;ul&gt;
		&lt;li class="head"&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
		&lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
	  &lt;/ul&gt;
	&lt;/div&gt;
	&lt;h3&gt;Lorem ipsum dolor sit amet&lt;/h3&gt;
	&lt;ul class="accordion-content"&gt;
	  &lt;ul&gt;
		&lt;li class="head"&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
		&lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
	  &lt;/ul&gt;
	&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
		<p>
			<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#FirstOpen">
				<span uk-icon="copy"></span>Copy to clipboard
			</button>
		</p>
	</div>
</section>