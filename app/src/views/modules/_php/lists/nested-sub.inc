<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Sub-list</h2>
<h3 class="uk-h3 uk-heading-small">Live Examples</h2>
	<dl class="uk-description-list uk-description-list-divider">
		<dd></dd>
		<dd></dd>
	</dl>
	<!-- Example -->
	<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
	<div class="eia-card">
		<script>
			function nestedSubListArticle() {
				var nestedSubList = document.getElementById("nestedSubListStyleSwitcher")
				nestedSubList.setAttribute('class', 'article')
			}

			function nestedSubListPrimary() {
				var nestedSubList = document.getElementById("nestedSubListStyleSwitcher")
				nestedSubList.setAttribute('class', 'primary')
			}

			function nestedSubListPrimaryAlt() {
				var nestedSubList = document.getElementById("nestedSubListStyleSwitcher")
				nestedSubList.setAttribute('class', 'primary-alt')
			}

			function nestedSubListSecondary() {
				var nestedSubList = document.getElementById("nestedSubListStyleSwitcher")
				nestedSubList.setAttribute('class', 'secondary')
			}

			function nestedSubListSecondaryAlt() {
				var nestedSubList = document.getElementById("nestedSubListStyleSwitcher")
				nestedSubList.setAttribute('class', 'secondary-alt')
			}
		</script>
		<div class="style-switcher">
			<button onclick="nestedSubListArticle()">Article</button>
			<button onclick="nestedSubListPrimary()">Primary</button>
			<button onclick="nestedSubListPrimaryAlt()">Primary-alt</button>
			<button onclick="nestedSubListSecondary()">Secondary</button>
			<button onclick="nestedSubListSecondaryAlt()">Secondary-alt</button>
		</div>
		<div class="article" id="nestedSubListStyleSwitcher">
			<!-- includes/placeholders/nested-sub-list -->
		</div>
		<div class="clipboard">
			<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>

			<pre><code class="language-html" id="nestedSubList">&lt;ul&gt;
&lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
&lt;li class="sub-list"&gt;
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
			<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#nestedSubList">
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