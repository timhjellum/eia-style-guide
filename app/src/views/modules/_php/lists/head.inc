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
			function listHeadArticle() {
				var listHead = document.getElementById("listHeadStyleSwitcher")
				listHead.setAttribute('class', 'article')
			}

			function listHeadPrimary() {
				var listHead = document.getElementById("listHeadStyleSwitcher")
				listHead.setAttribute('class', 'primary')
			}

			function listHeadPrimaryAlt() {
				var listHead = document.getElementById("listHeadStyleSwitcher")
				listHead.setAttribute('class', 'primary-alt')
			}

			function listHeadSecondary() {
				var listHead = document.getElementById("listHeadStyleSwitcher")
				listHead.setAttribute('class', 'secondary')
			}

			function listHeadSecondaryAlt() {
				var listHead = document.getElementById("listHeadStyleSwitcher")
				listHead.setAttribute('class', 'secondary-alt')
			}
		</script>
		<div class="style-switcher">
			<button onclick="listHeadArticle()">Article</button>
			<button onclick="listHeadPrimary()">Primary</button>
			<button onclick="listHeadPrimaryAlt()">Primary-alt</button>
			<button onclick="listHeadSecondary()">Secondary</button>
			<button onclick="listHeadSecondaryAlt()">Secondary-alt</button>
		</div>
		<div class="article" id="listHeadStyleSwitcher">

		</div>
		<!-- HTML -->
		<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
		<div class="uk-margin-medium">


			<pre><code class="language-html" id="listHead">&lt;ul&gt;
  &lt;li class="head"&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
    &lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;
    &lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;
    &lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;
    &lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;
  &lt;/ul&gt;\n
  &lt;!-- option two --&gt;
  &lt;ul&gt;
  &lt;li class="head"&gt;
    &lt;h4&gt;H4 Lorem Ipsum Dolor&lt;/h4&gt;
  &lt;/li&gt;
  &lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;
  &lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;
  &lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;
  &lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/li&gt;
&lt;/ul&gt;</code></pre>
		</div>
		<!-- Copy Button -->
		<p>
			<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#listHead">
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