<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">List Spacer</h2>
<h3 class="uk-h3 uk-heading-small">Live Examples</h2>
	<dl class="uk-description-list uk-description-list-divider">
		<dd></dd>
		<dd></dd>
	</dl>
	<!-- Example -->
	<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
	<div class="eia-card">
		<script>
			function listSpacerArticle() {
				var listSpacer = document.getElementById("listSpacerStyleSwitcher")
				listSpacer.setAttribute('class', 'article')
			}

			function listSpacerPrimary() {
				var listSpacer = document.getElementById("listSpacerStyleSwitcher")
				listSpacer.setAttribute('class', 'primary')
			}

			function listSpacerPrimaryAlt() {
				var listSpacer = document.getElementById("listSpacerStyleSwitcher")
				listSpacer.setAttribute('class', 'primary-alt')
			}

			function listSpacerSecondary() {
				var listSpacer = document.getElementById("listSpacerStyleSwitcher")
				listSpacer.setAttribute('class', 'secondary')
			}

			function listSpacerSecondaryAlt() {
				var listSpacer = document.getElementById("listSpacerStyleSwitcher")
				listSpacer.setAttribute('class', 'secondary-alt')
			}
		</script>
		<div class="style-switcher">
			<button onclick="listSpacerArticle()">Article</button>
			<button onclick="listSpacerPrimary()">Primary</button>
			<button onclick="listSpacerPrimaryAlt()">Primary-alt</button>
			<button onclick="listSpacerSecondary()">Secondary</button>
			<button onclick="listSpacerSecondaryAlt()">Secondary-alt</button>
		</div>
		<div class="article" id="listSpacerStyleSwitcher">

		</div>
		<!-- HTML -->
		<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
		<div class="uk-margin-medium">


			<pre><code class="language-html" id="listSpacer">&lt;ul&gt;
  &lt;li&gt;List item number one.&lt;/li&gt;
  &lt;li&gt;List item number two.&lt;/li&gt;
  &lt;li class="list-spacer"&gt;&lt;/li&gt;
  &lt;li&gt;List item number three.&lt;/li&gt;
  &lt;li&gt;List item number four.&lt;/li&gt;
&lt;/ul&gt;</code></pre>
		</div>
		<!-- Copy Button -->
		<p>
			<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#listSpacer">
				<span uk-icon="copy"></span>Copy to clipboard
			</button>
		</p>
		</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$      dilly      $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section id="dilly">
<div class="eia-container">