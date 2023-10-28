<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">List Head</h2>
<h3 class="uk-h3 uk-heading-small">Live Examples</h2>
	<dl class="uk-description-list uk-description-list-divider">
		<dd></dd>
		<dd></dd>
	</dl>
	<!-- Example -->
	<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
	<div class="eia-card">
		<script>
			function listCorrectNestingArticle() {
				var listCorrectNesting = document.getElementById("listCorrectNestingStyleSwitcher")
				listCorrectNesting.setAttribute('class', 'article')
			}

			function listCorrectNestingPrimary() {
				var listCorrectNesting = document.getElementById("listCorrectNestingStyleSwitcher")
				listCorrectNesting.setAttribute('class', 'primary')
			}

			function listCorrectNestingPrimaryAlt() {
				var listCorrectNesting = document.getElementById("listCorrectNestingStyleSwitcher")
				listCorrectNesting.setAttribute('class', 'primary-alt')
			}

			function listCorrectNestingSecondary() {
				var listCorrectNesting = document.getElementById("listCorrectNestingStyleSwitcher")
				listCorrectNesting.setAttribute('class', 'secondary')
			}

			function listCorrectNestingSecondaryAlt() {
				var listCorrectNesting = document.getElementById("listCorrectNestingStyleSwitcher")
				listCorrectNesting.setAttribute('class', 'secondary-alt')
			}
		</script>
		<div class="style-switcher">
			<button onclick="listCorrectNestingArticle()">Article</button>
			<button onclick="listCorrectNestingPrimary()">Primary</button>
			<button onclick="listCorrectNestingPrimaryAlt()">Primary-alt</button>
			<button onclick="listCorrectNestingSecondary()">Secondary</button>
			<button onclick="listCorrectNestingSecondaryAlt()">Secondary-alt</button>
		</div>

		<!-- HTML -->
		<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
		<div class="uk-margin-medium">


			<pre><code class="language-html" id="listCorrectNesting">&lt;ul&gt;
  &lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
  &lt;li&gt;
    &lt;ul&gt;
      &lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
      &lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
      &lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
  &lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
&lt;/ul&gt;</code></pre>
		</div>
		<!-- Copy Button -->
		<p>
			<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#listCorrectNesting">
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