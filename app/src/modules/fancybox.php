<div id="secondaryNavigation">
	<ul class="uk-nav uk-nav-default" uk-scrollspy-nav="closest: li; scroll: true">
		<li><a href="#introduction">Introduction</a></li>
		<li><a href="#Enlarge Image">Enlarge Image</a></li>
		<li><a href="#Enlarge Image With Caption">Enlarge Image With Caption</a></li>
		<li><a href="#clickToEnlargeImage">Click to Enlarge Button</a></li>
		<li><a href="#openIFrameInModal">Open iFrame in Modal</a></li>
		<li><a href="#"></a></li>
		<li><a href="#"></a></li>
		<li><a href="#"></a></li>
		<li><a href="#"></a></li>
		<li><a href="#"></a></li>
	</ul>
</div>

<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$  Introduction $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section id="introduction">
	<div class="eia-container">
		<h1 class="uk-h1 tm-heading-fragment" id=" FancyApps (Modals)">FancyApps (Modals)</h1>
		<p class="uk-text-lead"></p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$  Enlarge Image $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section id="Enlarge Image">
	<div class="eia-container">
		<h3>Enlarge Image</h3>
		<div class="uk-text-default uk-text-normal uk-text-uppercase">Live Example</div>
		<dl class="uk-description-list uk-description-list-divider">
			<dd></dd>
		</dl>
		<!-- Example -->
		<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
		<div class="uk-card uk-card-default uk-padding">
			<div uk-alert>
				<a class="uk-alert-close" uk-close></a>
				<h3>Notice</h3>
				<p>This is not a working demo.</p>
			</div>
			<a href="https://www.eia.gov/global/images/kids_promos/kids-standard.png" class="enlarge-image">
				<img src="https://www.eia.gov/global/images/kids_promos/kids-standard.png" alt="" />
			</a>
		</div>
		<!-- HTML -->
		<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
		<div class="uk-margin-medium">

			<pre><code class="language-html" id="EnlargeImage">&lt;!-- &lt;div class="image-container"&gt; --&gt;
&lt;a href="https://www.eia.gov/global/images/kids_promos/kids-standard.png" class="enlarge-image"&gt;
  &lt;img src="https://www.eia.gov/global/images/kids_promos/kids-standard.png" alt="" /&gt;
&lt;/a&gt;
&lt;!-- &lt;/div&gt; --&gt;</code></pre>
			<!-- Copy Button -->
			<p>
				<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#EnlargeImage">
					<span uk-icon="copy"></span>Copy to clipboard
				</button>
			</p>
		</div>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$    Enlarge Image With Caption    $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section id="enlargeImageCaption">
	<div class="eia-container">
		<h3>Enlarge Image With Caption</h3>
		<div class="uk-text-default uk-text-normal uk-text-uppercase">Live Example</div>
		<dl class="uk-description-list uk-description-list-divider">
			<dd></dd>
		</dl>
		<!-- Example -->
		<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
		<div class="uk-card uk-card-default uk-padding">
			<div uk-alert>
				<a class="uk-alert-close" uk-close></a>
				<h3>Notice</h3>
				<p>This is not a working demo.</p>
			</div>
			<div class="primary">
				<a href="https://www.eia.gov/homepage/images/energy-kids/kids-tablet-halloween.png" title="Image caption" class="enlarge-image">
					<img src="https://www.eia.gov/homepage/images/energy-kids/kids-tablet-halloween.png" alt="" />
				</a>
			</div>
		</div>
		<!-- HTML -->
		<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
		<div class="uk-margin-medium">

			<pre><code class="language-html" id="EnlargeImageCaption">&lt;a href="path/to/image/large" class="enlarge-image" title="Image caption"&gt;
  &lt;img src="path/to/image/small" alt="" &gt;
&lt;/a&gt;</code></pre>
			<!-- Copy Button -->
			<p>
				<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#EnlargeImageCaption">
					<span uk-icon="copy"></span>Copy to clipboard
				</button>
			</p>
		</div>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$    clickToEnlargeImage    $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section id="clickToEnlargeImage">
	<div class="eia-container">
		<h3>Enlarge Image With Caption and "Click to enlarge" instruction</h3>
		<div class="uk-text-default uk-text-normal uk-text-uppercase">Live Example</div>
		<dl class="uk-description-list uk-description-list-divider">
			<dd></dd>
		</dl>
		<!-- Example -->
		<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
		<div class="uk-card uk-card-default uk-padding">
			<div uk-alert>
				<a class="uk-alert-close" uk-close></a>
				<h3>Notice</h3>
				<p>This is not a working demo.</p>
			</div>
			<div class="image-container">
				<a href="/global/images/energy-kids/kids-laptop-halloween.png" title="Image caption" class="enlarge-image">
					<img src="/global/images/energy-kids/kids-laptop-halloween.png" alt="" class="responsive frame" />
					<span class="eia ico enlarge-image">
						<span>Click to enlarge</span>
					</span>
				</a>
			</div>
		</div>
		<br />
		<!-- HTML -->
		<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
		<div class="uk-margin-medium">

			<pre><code class="language-html" id="ClickToEnlargeImage">&lt;div class="image-container"&gt;
  &lt;a href="/global/images/energy-kids/kids-laptop-halloween.png" title="Image caption" class="enlarge-image"&gt;
    &lt;img src="/global/images/energy-kids/kids-laptop-halloween.png" alt="" class="responsive frame" /&gt;
    &lt;span class="eia ico enlarge-image"&gt;
      &lt;span&gt;Click to enlarge&lt;/span&gt;
    &lt;/span&gt;
  &lt;/a&gt;
&lt;/div&gt;</code></pre>
			<!-- Copy Button -->
			<p>
				<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#ClickToEnlargeImage">
					<span uk-icon="copy"></span>Copy to clipboard
				</button>
			</p>
		</div>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$    Open iFrame in Modal    $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section id="openIFrameInModal">
	<div class="eia-container">
		<h3>Open iFrame in Modal</h3>
		<div class="uk-text-default uk-text-normal uk-text-uppercase">Live Example</div>
		<dl class="uk-description-list uk-description-list-divider">
			<dd><a href="/opendata/">Opendata</a></dd>
		</dl>
		<!-- Example -->
		<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
		<div class="uk-card uk-card-default uk-padding">
			<div uk-alert>
				<a class="uk-alert-close" uk-close></a>
				<h3>Notice</h3>
				<p>This is not a working demo.</p>
			</div>

			<div class="secondary-alt">
				<ul class="basic">
					<li class="head api-icon">
						<span class="eia ico api"><span>API Icon</span></span>
						<h2>Application Programming Interface (API)</h2>
					</li>
					<li class="align-center">
						<h4>Access EIA data how you need it</h4>
					</li>
					<li><a href="iframe.php" class="api-button iframe" data-fancybox>Register</a></li>
					<li><a>
							<!--  href="forgot-key.php" class="iframe" -->Forgot API Key
						</a></li>
					<li>Registration and compliance with the <a>
							<!--  href="terms-of-service.php" class="iframe" -->API Terms of Service Agreement
						</a> help EIA monitor usage and ensure service availability. EIA data is provided free of charge and should be used in compliance with our <a href="/about/copyrights_reuse.php">Copyrights and Reuse Policy</a>.</li>
				</ul>
			</div>

		</div>
		<!-- HTML -->
		<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
		<div class="uk-margin-medium">

			<pre><code class="language-html" id="OpenIFrameInModal">
        &lt;a href="iframe.php" class="lframe"&gt;Register&lt;/a&gt;</code></pre>
			<!-- Copy Button -->
			<p>
				<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#OpenIFrameInModal">
					<span uk-icon="copy"></span>Copy to clipboard
				</button>
			</p>
		</div>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$    First Open    $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->