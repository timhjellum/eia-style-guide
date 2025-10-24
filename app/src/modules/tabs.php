<a id="scrollTop" href>
  <div></div>
</a>
<aside>
  <nav>
    <ul>
    </ul>
  </nav>
</aside>
<main>
  <h1 class="eia-h1">Tabs</h1>
  <section>
    <div class="eia-container">
      <!-- h2 class="eia-h2">Default</h2 -->
      <!-- p class="eia-para"></p -->
      <h3 class="eia-h3">Example</h3>
      <div class="eia-card">
        <div class="l-margin-bottom eia-container-resizer">


<p>Tabs are generally used to break content into multiple sections that can be swapped to save space, much like an accordion.</p>
<p>Tabs have a particular set of markup that must be used in order for them to work properly:</p>
<ul>
	<li>The tabs themselves must be in either an ordered (<code>&lt;ol&gt;</code>) or unordered (<code>&lt;ul&gt;</code>) list</li>
	<li>Each tab "title" must be inside of a list item (<code>&lt;li&gt;</code>) and wrapped by an anchor (<code>&lt;a&gt;</code>) with an <code>href</code> attribute</li>
	<li>Each tab panel may be any valid element but it must have an id which corresponds to the hash in the anchor of the associated tab.</li>
</ul>


<div class="longdesc" id="entry-longdesc">

	<h4>Keyboard interaction</h4>

	<p>When focus is on a tab, the following key commands are available:</p>
	<ul>
		<li>
			<code>UP</code>/<code>LEFT</code>: Move focus to the previous tab. If on first tab, moves focus to last tab. Activate focused tab after a short delay.
		</li>
		<li>
			<code>DOWN</code>/<code>RIGHT</code>: Move focus to the next tab. If on last tab, moves focus to first tab. Activate focused tab after a short delay.
		</li>
		<li>
			<code>CTRL</code> + <code>UP</code>/<code>LEFT</code>: Move focus to the previous tab. If on first tab, moves focus to last tab. The focused tab must be manually activated.
		</li>
		<li>
			<code>CTRL</code> + <code>DOWN</code>/<code>RIGHT</code>: Move focus to the next tab. If on last tab, moves focus to first tab. The focused tab must be manually activated.
		</li>
		<li>
			<code>HOME</code>: Move focus to the first tab. Activate focused tab after a short delay.
		</li>
		<li>
			<code>END</code>: Move focus to the last tab. Activate focused tab after a short delay.
		</li>
		<li>
			<code>CTRL</code> + <code>HOME</code>: Move focus to the first tab. The focused tab must be manually activated.
		</li>
		<li>
			<code>CTRL</code> + <code>END</code>: Move focus to the last tab. The focused tab must be manually activated.
		</li>
		<li>
			<code>SPACE</code>: Activate panel associated with focused tab.
		</li>
		<li>
			<code>ENTER</code>: Activate or toggle panel associated with focused tab.
		</li>
		<li>
			<code>ALT</code>/<code>OPTION</code> + <code>PAGE UP</code>: Move focus to the previous tab and immediately activate.
		</li>
		<li>
			<code>ALT</code>/<code>OPTION</code> + <code>PAGE DOWN</code>: Move focus to the next tab and immediately activate.
		</li>
	</ul>

	<p>When focus is in a panel, the following key commands are available:</p>
	<ul>
		<li>
			<code>CTRL</code> + <code>UP</code>: Move focus to associated tab.
		</li>
		<li>
			<code>ALT</code>/<code>OPTION</code> + <code>PAGE UP</code>: Move focus to the previous tab and immediately activate.
		</li>
		<li>
			<code>ALT</code>/<code>OPTION</code> + <code>PAGE DOWN</code>: Move focus to the next tab and immediately activate.
		</li>
	</ul>

	<!-- HTML -->
	<h3 class="eia-h3">HTML</h3>
	<div class="eia-margin-medium">
		<div class="tabs">
			<ul>
				<li data-section="tabOne">Tab One</a></li>
				<li data-section="tabTwo">Tab Two</a></li>
			</ul>
			<div id="tabOne">
				<div class="tab-content">
					<!-- tab one content here -->
				</div>
			</div>
			<div id="tabTwo">
				<div class="tab-content">
					<!-- tab one content here -->
				</div>
			</div>
		</div>
	</div>
	<!-- HTML -->
	<h3 class="eia-h3">HTML</h3>
	<div class="eia-margin-medium">
		<pre><code class="language-html" id="tabs">&lt;div class="tabs"&gt;
  &lt;ul&gt;
	&lt;li&gt;&lt;a href="#tabOne"&gt;Tab One&lt;/a&gt;&lt;/li&gt;
	&lt;li&gt;&lt;a href="#tabTwo"&gt;Tab Two&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
  &lt;div id="tabOne"&gt;
	&lt;div class="tab-content"&gt;
	&lt;!-- tab one content here --&gt;
	&lt;/div&gt;
  &lt;/div&gt;
  &lt;div id="tabTwo"&gt;
	&lt;div class="tab-content"&gt;
	&lt;!-- tab one content here --&gt;
	&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
	</div>
	<!-- Copy Button -->
	<p>
		<button class="copy-element eia-button eia-button-primary" data-clipboard-action="copy" data-clipboard-target="#tabs">
			<span></span>Copy to clipboard
		</button>
	</p>
</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$      dilly      $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="dilly">
	<div class="eia-container">





		<div class="article" id="fakeTabsResponsiveStyleSwitcher">
			<div class="fake-tabs">
				<ul class="responsive">
					<li class="tab-nav-active">
						<a>Consumption</a>
					</li>
					<li class="tab-nav">
						<a>Electricity</a>
					</li>
					<li class="tab-nav">
						<a>Production</a>
					</li>
				</ul>
				<div class="tab-content">
					<!-- tab one content here -->
				</div>
				<div class="tab-content">
					<!-- tab two content here -->
				</div>
				<div class="tab-content">
					<!-- tab two content here -->
				</div>
			</div>
		</div>

		<h4 class="_h4">HTML Code Example</h4>
		<pre><code class="language-html" id="fakeTabsResponsive">&lt;div class="fake-tabs"&gt;
  &lt;ul class="responsive"&gt;\n
    &lt;li&gt;&lt;a href="#tabOne"&gt;Tab One&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#tabTwo"&gt;Tab Two&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
  &lt;div class="tab-content"&gt;\n
      &lt;!-- tab one content here --&gt;
    &lt;/div&gt;
    &lt;div class="tab-content"&gt;
      &lt;!-- tab two content here --&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
	</div>
	<!-- Copy Button -->
	<p>
		<button class="copy-element eia-button eia-button-primary" data-clipboard-action="copy" data-clipboard-target="#fakeTabsResponsive">
			<span></span>Copy to clipboard
		</button>
	</p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$      dilly      $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section class="dilly">
	<div class="eia-container">





		<div class="style-switcher">
			<button onclick='subTabNavigationArticle()'>Article</button>
			<button onclick='subTabNavigationPrimary()'>Primary</button>
			<button onclick='subTabNavigationPrimaryAlt()'>Primary-alt</button>
			<button onclick='subTabNavigationSecondary()'>Secondary</button>
			<button onclick='subTabNavigationSecondaryAlt()'>Secondary-alt</button>
		</div>
		<div class="article" id="subTabNavigationStyleSwitcher">
			<div class="sub-tabs">
				<ul>
					<li class="sub-tab-nav-active"><a>Key takeaways from the Reference case and side cases</a></li>
					<li class="sub-tab-nav"><a>The <em>Annual Energy Outlook 2022</em> explores long-term energy trends in the United States</a></li>
					<li class="sub-tab-nav"><a>What is the AEO2022 Reference case?</a></li>
					<li class="sub-tab-nav"><a>What are the side cases?</a></li>
				</ul>
			</div>
		</div>

		<h4 class="_h4">HTML Code Example</h4>
		<pre><code class="language-html" id="subTabNavigation">&lt;div class="sub-tabs"&gt;
  &lt;ul&gt;
    &lt;li class="class="sub-tab-nav-active"&gt;&lt;a href="#tabOne"&gt;Tab One&lt;/a&gt;&lt;/li&gt;
    &lt;li class="class="sub-tab-nav"&gt;&gt;&lt;a href="#tabTwo"&gt;Tab Two&lt;/a&gt;&lt;/li&gt;
	&lt;li class="class="sub-tab-nav"&gt;&gt;&lt;a href="#tabTwo"&gt;Tab Thr&lt;/a&gt;&lt;/li&gt;
	&lt;li class="class="sub-tab-nav"&gt;&gt;&lt;a href="#tabTwo"&gt;Tab Fou&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;</code></pre>
		<!-- Copy Button -->
		<p>
			<button class="copy-element eia-button eia-button-primary" data-clipboard-action="copy" data-clipboard-target="#subTabNavigation">
				<span></span>Copy to clipboard
			</button>
		</p>
</div>
	</section>
</main>
<footer>
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
</footer>
<link href="https://www.eia.gov/global/styles/global.min.css" type="text/css" media="screen, projection" rel="stylesheet">