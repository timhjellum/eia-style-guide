<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">List Spacer with Nested List</h2>
<h3 class="uk-h3 uk-heading-small">Live Examples</h2>
	<dl class="uk-description-list uk-description-list-divider">
		<dd></dd>
		<dd></dd>
	</dl>
	<!-- Example -->
	<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
	<div class="eia-card">
		<script>
			function nestedListSpacerArticle() {
				var nestedListSpacer = document.getElementById("nestedListSpacerStyleSwitcher")
				nestedListSpacer.setAttribute('class', 'article')
			}

			function nestedListSpacerPrimary() {
				var nestedListSpacer = document.getElementById("nestedListSpacerStyleSwitcher")
				nestedListSpacer.setAttribute('class', 'primary')
			}

			function nestedListSpacerPrimaryAlt() {
				var nestedListSpacer = document.getElementById("nestedListSpacerStyleSwitcher")
				nestedListSpacer.setAttribute('class', 'primary-alt')
			}

			function nestedListSpacerSecondary() {
				var nestedListSpacer = document.getElementById("nestedListSpacerStyleSwitcher")
				nestedListSpacer.setAttribute('class', 'secondary')
			}

			function nestedListSpacerSecondaryAlt() {
				var nestedListSpacer = document.getElementById("nestedListSpacerStyleSwitcher")
				nestedListSpacer.setAttribute('class', 'secondary-alt')
			}
		</script>
		<div class="style-switcher">
			<button onclick="nestedListSpacerArticle()">Article</button>
			<button onclick="nestedListSpacerPrimary()">Primary</button>
			<button onclick="nestedListSpacerPrimaryAlt()">Primary-alt</button>
			<button onclick="nestedListSpacerSecondary()">Secondary</button>
			<button onclick="nestedListSpacerSecondaryAlt()">Secondary-alt</button>
		</div>
		<div class="article" id="nestedListSpacerStyleSwitcher">
			<!-- includes/placeholders/nested-list-spacer -->
		</div>
		<!-- HTML -->
		<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
		<div class="uk-margin-medium">


			<pre><code class="language-html" id="nestedListSpacer">&lt;li class="list-spacer"&gt;
&lt;ul class="bullet"&gt;
&lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
&lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
&lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
&lt;/ul&gt;
&lt;/li&gt;</code></pre>
		</div>
		<!-- Copy Button -->
		<p>
			<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#nestedListSpacer">
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