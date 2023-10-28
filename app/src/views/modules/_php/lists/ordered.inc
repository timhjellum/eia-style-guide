<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Ordered (Numbered) List</h2>
<h3 class="uk-h3 uk-heading-small">Live Examples</h2>
	<dl class="uk-description-list uk-description-list-divider">
		<dd></dd>
		<dd></dd>
	</dl>
	<!-- Example -->
	<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
	<div class="eia-card">
		<script>
			function orderedListArticle() {
				var orderedList = document.getElementById("orderedListStyleSwitcher")
				orderedList.setAttribute('class', 'article')
			}

			function orderedListPrimary() {
				var orderedList = document.getElementById("orderedListStyleSwitcher")
				orderedList.setAttribute('class', 'primary')
			}

			function orderedListPrimaryAlt() {
				var orderedList = document.getElementById("orderedListStyleSwitcher")
				orderedList.setAttribute('class', 'primary-alt')
			}

			function orderedListSecondary() {
				var orderedList = document.getElementById("orderedListStyleSwitcher")
				orderedList.setAttribute('class', 'secondary')
			}

			function orderedListSecondaryAlt() {
				var orderedList = document.getElementById("orderedListStyleSwitcher")
				orderedList.setAttribute('class', 'secondary-alt')
			}
		</script>
		<div class="style-switcher">
			<button onclick="orderedListArticle()">Article</button>
			<button onclick="orderedListPrimary()">Primary</button>
			<button onclick="orderedListPrimaryAlt()">Primary-alt</button>
			<button onclick="orderedListSecondary()">Secondary</button>
			<button onclick="orderedListSecondaryAlt()">Secondary-alt</button>
		</div>
		<div class="article" id="orderedListStyleSwitcher">
			<!-- includes/placeholders/ordered-list -->
		</div>
		<div class="clipboard">
			<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>

			<pre><code class="language-html" id="orderedList">&lt;ol&gt;
  &lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;
  &lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;
  &lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;
  &lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;
  &lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;
  &lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;
&lt;/ol&gt;</code></pre>
		</div>
		<!-- Copy Button -->
		<p>
			<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#orderedList">
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