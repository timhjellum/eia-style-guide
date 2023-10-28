<h2>Accessible Links in Lists</h2>

<h3 class="h3 base">Basic List</h3>
<p class="eia">Basic List (Basic List has universal spacing and padding)</p>
<script>
	function listLinkArticle() {
		var listLink = document.getElementById('listLinkStyleSwitcher')
		//listLink.classList.remove('article', 'primary', 'primary-alt', 'secondary', 'secondary-alt');
		listLink.setAttribute('article');
	}

	function listLinkPrimary() {
		var listLink = document.getElementById('listLinkStyleSwitcher')
		//listLink.classList.remove('article', 'primary', 'primary-alt', 'secondary', 'secondary-alt');
		listLink.setAttribute('primary');
	}

	function listLinkPrimaryAlt() {
		var listLink = document.getElementById('listLinkStyleSwitcher')
		//listLink.classList.remove('article', 'primary', 'primary-alt', 'secondary', 'secondary-alt');
		listLink.setAttribute('primary-alt');
	}

	function listLinkSecondary() {
		var listLink = document.getElementById('listLinkStyleSwitcher')
		//listLink.classList.remove('article', 'primary', 'primary-alt', 'secondary', 'secondary-alt');
		listLink.setAttribute('secondary');
	}

	function listLinkSecondaryAlt() {
		var listLink = document.getElementById('listLinkStyleSwitcher')
		//listLink.classList.remove('article', 'primary', 'primary-alt', 'secondary', 'secondary-alt');
		listLink.setAttribute('secondary-alt');
	}
</script>
<div class="style-switcher">
	<button onclick='listLinkArticle()'>Article</button>
	<button onclick='listLinkPrimary()'>Primary</button>
	<button onclick='listLinkPrimaryAlt()'>Primary-alt</button>
	<button onclick='listLinkSecondary()'>Secondary</button>
	<button onclick='listLinkSecondaryAlt()'>Secondary-alt</button>
</div>
</div>
<div class="article" id="listLinkStyleSwitcher">
	<ul class="basic">
		<li>
			<p>Lorem ipsum dolor sit amet <a>consectetur adipiscing</a> elit.</p>
		</li>
		<li>
			<p>Lorem ipsum dolor sit amet <a>consectetur adipiscing</a> elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
		</li>
	</ul>
</div>
<!--  end list item  -->
<div class="clipboard-container">
	<h4><span>&lt;/&gt;</span> Source</h4>

	<pre><code class="language-html" id="listLink">&lt;ul class="basic"&gt;
	&lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
	&lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
	&lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
&lt;/ul&gt;</code></pre>

	<!-- Copy Button -->
	<p>
		<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#listLink">
			<span uk-icon="copy"></span>Copy to clipboard
		</button>
</div>
</div>