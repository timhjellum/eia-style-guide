<!-- code

<div class="tabs">
<ul>
<li><a href="#tabOne">Tab One</a></li>
<li><a href="#tabTwo">Tab Two</a></li>
</ul>
<div id="tabOne">
<div class="tab-content">\n
-- tab one content here --
</div>
</div>
<div id="tabTwo">
	<div class="tab-content">
-- tab one content here --
	</div>
</div>
</div>


-->

<a name="TabsExample"></a>
<h3>Default Tabs</h3>


<script>
	function tabsArticle() {
		var tabs = document.getElementById("tabsStyleSwitcher")
		tabs.setAttribute('class', 'article')
	}

	function tabsPrimary() {
		var tabs = document.getElementById("tabsStyleSwitcher")
		tabs.setAttribute('class', 'primary')
	}

	function tabsPrimaryAlt() {
		var tabs = document.getElementById("tabsStyleSwitcher")
		tabs.setAttribute('class', 'primary-alt')
	}

	function tabsSecondary() {
		var tabs = document.getElementById("tabsStyleSwitcher")
		tabs.setAttribute('class', 'secondary')
	}

	function tabsSecondaryAlt() {
		var tabs = document.getElementById("tabsStyleSwitcher")
		tabs.setAttribute('class', 'secondary-alt')
	}
</script>
<div class="style-switcher">
	<button onclick="tabsArticle()">Article</button>
	<button onclick="tabsPrimary()">Primary</button>
	<button onclick="tabsPrimaryAlt()">Primary-alt</button>
	<button onclick="tabsSecondary()">Secondary</button>
	<button onclick="tabsSecondaryAlt()">Secondary-alt</button>
</div>
</div>
<div class="article" id="tabsStyleSwitcher">
	<div class="tabs ui-tabs ui-corner-all ui-widget ui-widget-content">
		<ul role="tablist" class="ui-tabs-nav ui-corner-all ui-helper-reset ui-helper-clearfix ui-widget-header">
			<li role="tab" tabIndex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab" aria-controls="tabOne" aria-labelledby="tab-one" aria-selected="false" aria-expanded="false">
				<a class="ui-tabs-anchor">
					Tab One
				</a>
			</li>
			<li role="tab" tabIndex="0" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab ui-tabs-active ui-state-active" aria-controls="tabTwo" aria-labelledby="tab-two" aria-selected="true" aria-expanded="true">
				<a class="ui-tabs-anchor">
					Tab Two
				</a>
			</li>
		</ul>
		<div id="tabOne" aria-labelledby="tab-one" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" aria-hidden="true" style="display: none"></div>
		<div id="tabTwo" aria-labelledby="tab-two" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" aria-hidden="false" style="display: block">
			<div class="tab-content"></div>
		</div>
	</div>
</div>
</div>


<div class="clipboard-container">
	<h4><span>&lt;/&gt;</span> Source</h4>

	<pre><code class="language-html" id="Dilly">Code sample not ready yet.</code></pre>

	<!-- Copy Button -->
	<p>
		<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#Dilly">
			<span uk-icon="copy"></span>Copy to clipboard
		</button>
</div>
</div>