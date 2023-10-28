<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Unordered List</h2>
<h3 class="uk-h3 uk-heading-small">Live Examples</h2>
	<dl class="uk-description-list uk-description-list-divider">
		<dd></dd>
	</dl>
	<!-- Example -->
	<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
	<div class="eia-card">
		<script>
			function unorderedListArticle() {
				var unorderedList = document.getElementById("unorderedListStyleSwitcher")
				unorderedList.setAttribute('class', 'article')
			}

			function unorderedListPrimary() {
				var unorderedList = document.getElementById("unorderedListStyleSwitcher")
				unorderedList.setAttribute('class', 'primary')
			}

			function unorderedListPrimaryAlt() {
				var unorderedList = document.getElementById("unorderedListStyleSwitcher")
				unorderedList.setAttribute('class', 'primary-alt')
			}

			function unorderedListSecondary() {
				var unorderedList = document.getElementById("unorderedListStyleSwitcher")
				unorderedList.setAttribute('class', 'secondary')
			}

			function unorderedListSecondaryAlt() {
				var unorderedList = document.getElementById("unorderedListStyleSwitcher")
				unorderedList.setAttribute('class', 'secondary-alt')
			}
		</script>
		<div class="style-switcher">
			<button onclick="unorderedListArticle()">Article</button>
			<button onclick="unorderedListPrimary()">Primary</button>
			<button onclick="unorderedListPrimaryAlt()">Primary-alt</button>
			<button onclick="unorderedListSecondary()">Secondary</button>
			<button onclick="unorderedListSecondaryAlt()">Secondary-alt</button>
		</div>
		<div class="article" id="unorderedListStyleSwitcher">
			<!-- includes/placeholders/unordered-list -->
		</div>
		<!-- HTML -->
		<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
		<div class="uk-margin-medium">


			<pre><code class="language-html" id="unorderedList">&lt;ul&gt;
  &lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
  &lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
  &lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
&lt;/ul&gt;</code></pre>
		</div>
		<!-- Copy Button -->
		<p>
			<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#unorderedList">
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