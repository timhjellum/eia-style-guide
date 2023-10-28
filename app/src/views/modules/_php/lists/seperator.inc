<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">List Seperator</h2>
<h3 class="uk-h3 uk-heading-small">Live Examples</h2>
	<dl class="uk-description-list uk-description-list-divider">
		<dd></dd>
		<dd></dd>
	</dl>
	<!-- Example -->
	<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
	<div class="eia-card">
		<script>
			function listSeperatorArticle() {
				var listSeperator = document.getElementById("listSeperatorStyleSwitcher")
				listSeperator.setAttribute('class', 'article')
			}

			function listSeperatorPrimary() {
				var listSeperator = document.getElementById("listSeperatorStyleSwitcher")
				listSeperator.setAttribute('class', 'primary')
			}

			function listSeperatorPrimaryAlt() {
				var listSeperator = document.getElementById("listSeperatorStyleSwitcher")
				listSeperator.setAttribute('class', 'primary-alt')
			}

			function listSeperatorSecondary() {
				var listSeperator = document.getElementById("listSeperatorStyleSwitcher")
				listSeperator.setAttribute('class', 'secondary')
			}

			function listSeperatorSecondaryAlt() {
				var listSeperator = document.getElementById("listSeperatorStyleSwitcher")
				listSeperator.setAttribute('class', 'secondary-alt')
			}
		</script>
		<div class="style-switcher">
			<button onclick="listSeperatorArticle()">Article</button>
			<button onclick="listSeperatorPrimary()">Primary</button>
			<button onclick="listSeperatorPrimaryAlt()">Primary-alt</button>
			<button onclick="listSeperatorSecondary()">Secondary</button>
			<button onclick="listSeperatorSecondaryAlt()">Secondary-alt</button>
		</div>
		<div class="article" id="listSeperatorStyleSwitcher">

		</div>
		<!--  end list item  -->
		<!-- HTML -->
		<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
		<div class="uk-margin-medium">


			<pre><code class="language-html" id="listSeperator">&lt;ul&gt;
&lt;li&gt;List item number one.&lt;/li&gt;
&lt;li&gt;List item number two.&lt;/li&gt;
&lt;li class="list-seperator"&gt;&lt;/li&gt;
&lt;li&gt;List item number three.&lt;/li&gt;
&lt;li&gt;List item number four.&lt;/li&gt;
&lt;/ul&gt;</code></pre>
		</div>
		<!-- Copy Button -->
		<p>
			<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#listSeperator">
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