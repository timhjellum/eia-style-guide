<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Highlighted List:</h2>
<h3 class="uk-h3 uk-heading-small">Live Examples</h2>
	<dl class="uk-description-list uk-description-list-divider">
		<dd></dd>
		<dd></dd>
	</dl>
	<!-- Example -->
	<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
	<div class="eia-card">
		<script>
			function highlightListArticle() {
				var highlightList = document.getElementById("highlightListStyleSwitcher")
				highlightList.setAttribute('class', 'article')
			}

			function highlightListPrimary() {
				var highlightList = document.getElementById("highlightListStyleSwitcher")
				highlightList.setAttribute('class', 'primary')
			}

			function highlightListPrimaryAlt() {
				var highlightList = document.getElementById("highlightListStyleSwitcher")
				highlightList.setAttribute('class', 'primary-alt')
			}

			function highlightListSecondary() {
				var highlightList = document.getElementById("highlightListStyleSwitcher")
				highlightList.setAttribute('class', 'secondary')
			}

			function highlightListSecondaryAlt() {
				var highlightList = document.getElementById("highlightListStyleSwitcher")
				highlightList.setAttribute('class', 'secondary-alt')
			}
		</script>
		<div class="style-switcher">
			<button onclick="highlightListArticle()">Article</button>
			<button onclick="highlightListPrimary()">Primary</button>
			<button onclick="highlightListPrimaryAlt()">Primary-alt</button>
			<button onclick="highlightListSecondary()">Secondary</button>
			<button onclick="highlightListSecondaryAlt()">Secondary-alt</button>
		</div>
		<div class="article" id="highlightListStyleSwitcher">

		</div>
		<!-- HTML -->
		<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
		<div class="uk-margin-medium">


			<pre><code class="language-html" id="highlightList">&lt;ul class="highlight"&gt;
&lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
&lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
&lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
&lt;/ul&gt;</code></pre>
		</div>
		<!-- Copy Button -->
		<p>
			<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#highlightList">
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