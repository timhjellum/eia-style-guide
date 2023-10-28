<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Custom Numbered List</h2>
<h3 class="uk-h3 uk-heading-small">Live Examples</h2>
	<dl class="uk-description-list uk-description-list-divider">
		<dd></dd>
		<dd></dd>
	</dl>
	<!-- Example -->
	<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
	<div class="eia-card">
		<script>
			function customNumberedListArticle() {
				var customNumberedList = document.getElementById("customNumberedListStyleSwitcher")
				customNumberedList.setAttribute('class', 'article')
			}

			function customNumberedListPrimary() {
				var customNumberedList = document.getElementById("customNumberedListStyleSwitcher")
				customNumberedList.setAttribute('class', 'primary')
			}

			function customNumberedListPrimaryAlt() {
				var customNumberedList = document.getElementById("customNumberedListStyleSwitcher")
				customNumberedList.setAttribute('class', 'primary-alt')
			}

			function customNumberedListSecondary() {
				var customNumberedList = document.getElementById("customNumberedListStyleSwitcher")
				customNumberedList.setAttribute('class', 'secondary')
			}

			function customNumberedListSecondaryAlt() {
				var customNumberedList = document.getElementById("customNumberedListStyleSwitcher")
				customNumberedList.setAttribute('class', 'secondary-alt')
			}
		</script>
		<div class="style-switcher">
			<button onclick="customNumberedListArticle()">Article</button>
			<button onclick="customNumberedListPrimary()">Primary</button>
			<button onclick="customNumberedListPrimaryAlt()">Primary-alt</button>
			<button onclick="customNumberedListSecondary()">Secondary</button>
			<button onclick="customNumberedListSecondaryAlt()">Secondary-alt</button>
		</div>
		<div class="article" id="customNumberedListStyleSwitcher">
			Coming soon
		</div>
		<!-- HTML -->
		<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
		<div class="uk-margin-medium">


			<pre><code class="language-html" id="customNumberedList">&lt;ul class="numbered"&gt;
    &lt;li&gt;&lt;span class="number"&gt;001&lt;/span&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
    &lt;li&gt;&lt;span class="number"&gt;002&lt;/span&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
    &lt;li&gt;&lt;span class="number"&gt;003&lt;/span&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
  &lt;/ul&gt;
  &lt;ul class="numbered"&gt;
    &lt;li&gt;&lt;span class="number"&gt;004&lt;/span&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
    &lt;li&gt;&lt;span class="number"&gt;&lt;/span&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
    &lt;li&gt;&lt;span class="number"&gt;&lt;/span&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
  &lt;/ul&gt;
  &lt;ul class="numbered"&gt;
    &lt;li&gt;&lt;span class="number"&gt;005&lt;/span&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
    &lt;li&gt;&lt;span class="number"&gt;&lt;/span&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
    &lt;li&gt;&lt;span class="number"&gt;&lt;/span&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
&lt;/ul&gt;</code></pre>
		</div>
		<!-- Copy Button -->
		<p>
			<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#customNumberedList">
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