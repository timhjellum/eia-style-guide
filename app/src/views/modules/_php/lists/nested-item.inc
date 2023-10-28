<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Nested Single-Bullet List Item</h2>
<p>.list-item</p>
<h3 class="uk-h3 uk-heading-small">Live Examples</h2>
	<dl class="uk-description-list uk-description-list-divider">
		<dd></dd>
		<dd></dd>
	</dl>
	<!-- Example -->
	<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
	<div class="eia-card">

		<script>
			function nestedListItemArticle() {
				var nestedListItem = document.getElementById("nestedListItemStyleSwitcher")
				nestedListItem.setAttribute('class', 'article')
			}

			function nestedListItemPrimary() {
				var nestedListItem = document.getElementById("nestedListItemStyleSwitcher")
				nestedListItem.setAttribute('class', 'primary')
			}

			function nestedListItemPrimaryAlt() {
				var nestedListItem = document.getElementById("nestedListItemStyleSwitcher")
				nestedListItem.setAttribute('class', 'primary-alt')
			}

			function nestedListItemSecondary() {
				var nestedListItem = document.getElementById("nestedListItemStyleSwitcher")
				nestedListItem.setAttribute('class', 'secondary')
			}

			function nestedListItemSecondaryAlt() {
				var nestedListItem = document.getElementById("nestedListItemStyleSwitcher")
				nestedListItem.setAttribute('class', 'secondary-alt')
			}
		</script>
		<div class="style-switcher">
			<button onclick="nestedListItemArticle()">Article</button>
			<button onclick="nestedListItemPrimary()">Primary</button>
			<button onclick="nestedListItemPrimaryAlt()">Primary-alt</button>
			<button onclick="nestedListItemSecondary()">Secondary</button>
			<button onclick="nestedListItemSecondaryAlt()">Secondary-alt</button>
		</div>
		<div class="article" id="nestedListItemStyleSwitcher">
			<!-- includes/placeholders/nested-list-item -->
		</div>
		<!-- HTML -->
		<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
		<div class="uk-margin-medium">


			<pre><code class="language-html" id="nestedListItem">&lt;ul&gt;
  &lt;li class="list-item"&gt;
    &lt;ul&gt;
      &lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
      &lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
  &lt;li class="list-item"&gt;
    &lt;ul&gt;
      &lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
      &lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
  &lt;!-- option two --&gt;
  &lt;li class="list-item"&gt;
    &lt;ul&gt;
      &lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
      &lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;
    &lt;/ul&gt;
    &lt;ul&gt;
      &lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
      &lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
  &lt;li&gt;List item number one.&lt;/li&gt;
&lt;/ul&gt;</code></pre>
		</div>
		<!-- Copy Button -->
		<p>
			<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#nestedListItem">
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