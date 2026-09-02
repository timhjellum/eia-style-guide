<?php /*
require_once '../includes/variables.inc';
$globalTitle 	= 'U.S. Energy Information Administration (EIA)';
$section		= 'Layouts';
$subSection		= 'Home';
*/ ?>






<a id="scrollTop" href>
<div></div>
</a>
<aside>
<nav>
<ul>
</ul>
</nav>
</aside>




<h1 class="eia-h1"><?=$section*/ ?></h1>
<!-- start intro module -->
<section class="introduction">
<div class="eia-container">
<h2 class="eia-h2">Architecture</h2>
<p class="eia-para">We leverage a custom <a href="https://www.w3schools.com/css/css_grid.asp">CSS Grid</a> system for the page layouts. The page layouts allow for the pages and elements on the page to be responsive based on the users' media device (e.g. print, mobile, laptop, desktop). To accomplish this, we use break points based off of the width of the users' media device. The breakpoints are as follows:</p>
<div class="eia-card">
<div class="basic-table">
<table class="basic-table full-width" id="layout-resolution" style="background-color: #fff;">
<caption>Screen Resolution</caption>
<thead>
<tr>
<th>Break Name</th>
<th>Minimum Width (px)</th>
<th>Maximum Width (px)</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td>mobile</td>
<td>1</td>
<td>479</td>
<td>Smartphones, portrait iPhone, portrait 480x320 phones (Android)</td>
</tr>
<tr>
<td>mobile-landscape</td>
<td>480</td>
<td>599</td>
<td>Smartphones, Android phones, landscape iPhone</td>
</tr>
<tr>
<td>tablet</td>
<td>600</td>
<td>800</td>
<td>Mobile panorama</td>
</tr>
<tr>
<td>tablet-landscape</td>
<td>801</td>
<td>955</td>
<td>Tablet, landscape iPad, lo-resolution laptops and desktops</td>
</tr>
<tr>
<td>laptop</td>
<td>956</td>
<td>1355</td>
<td>big landscape tablets, laptops, and desktops</td>
</tr>
<tr>
<td>desktop</td>
<td>1366</td>
<td>2299</td>
<td>Big landscape tablets, hi-resolution laptops, and desktops</td>
</tr>
<tr>
<td>desktop-lg</td>
<td>2300</td>
<td>∞</td>
<td>Desktop and television</td>
</tr>
<tr>
<td>mobile-only</td>
<td>1</td>
<td>599px</td>
<td>Smartphones, portrait iPhone, portrait 480x320 phones (Android)</td>
</tr>
</tbody>
</table>
</div>
</div>
<h2 class="eia-h2">Naming Conventions</h2>
<div class="eia-card">
<ul class="eia-ul">
<li class="eia-li">All style naming conventions use classes and not ID selectors.</li>
<li class="eia-li">All class names are lowercase and hyphenated.</li>
<li class="eia-li">
							Layout class names begin with a <code>l-</code>.
</li>
</ul>
</div>
<div class="eia-card">
<div class="layout-thumbs-wrapper">
<div>
<a href="#l-full-width-col" class="layout-thumb-link l-full-width-col">
<div class="layout-thumb">
<div class="layout-thumb-column-container w100">
<div class="layout-thumb-column"></div>
</div>
</div>
</a>
<a href="#l-two-col-left-narrow" class="layout-thumb-link l-two-col-left-narrow">
<div class="layout-thumb">
<div class="layout-thumb-column-container w25">
<div class="layout-thumb-column layout-thumb-secondary"></div>
</div>
<div class="layout-thumb-column-container w75">
<div class="layout-thumb-column"></div>
</div>
</div>
</a>
<a href="#l-two-col-left" class="layout-thumb-link l-two-col-left">
<div class="layout-thumb">
<div class="layout-thumb-column-container w33">
<div class="layout-thumb-column layout-thumb-secondary"></div>
</div>
<div class="layout-thumb-column-container w66">
<div class="layout-thumb-column"></div>
</div>
</div>
</a>
</div>
<div>
<h3></h3>
<a href="#l-two-col-right-wide" class="layout-thumb-link l-two-col-right-wide">
<div class="layout-thumb">
<div class="layout-thumb-column-container w42">
<div class="layout-thumb-column layout-thumb-secondary"></div>
</div>
<div class="layout-thumb-column-container w58">
<div class="layout-thumb-column"></div>
</div>
</div>
</a>
<a href="#l-two-col-even" class="layout-thumb-link l-two-col-even">
<div class="layout-thumb">
<div class="layout-thumb-column-container w50">
<div class="layout-thumb-column"></div>
</div>
<div class="layout-thumb-column-container w50">
<div class="layout-thumb-column"></div>
</div>
</div>
</a>
<a href="#l-two-col-left-wide" class="layout-thumb-link l-two-col-left-wide">
<div class="layout-thumb">
<div class="layout-thumb-column-container w58">
<div class="layout-thumb-column"></div>
</div>
<div class="layout-thumb-column-container w42">
<div class="layout-thumb-column layout-thumb-secondary"></div>
</div>
</div>
<!-- Two Columns (58% 42%)<br /><code>l-row l-two-col-left-wide</code> -->
</a>
</div>
<div>
<h3></h3>
<a href="#l-two-col-right" class="layout-thumb-link l-two-col-right">
<div class="layout-thumb">
<div class="layout-thumb-column-container w66">
<div class="layout-thumb-column"></div>
</div>
<div class="layout-thumb-column-container w33">
<div class="layout-thumb-column layout-thumb-secondary"></div>
</div>
</div>
</a>
<a href="#l-two-col-right-narrow" class="layout-thumb-link l-two-col-right-narrow">
<div class="layout-thumb">
<div class="layout-thumb-column-container w75">
<div class="layout-thumb-column"></div>
</div>
<div class="layout-thumb-column-container w25">
<div class="layout-thumb-column layout-thumb-secondary"></div>
</div>
</div>
</a>
<a href="#l-three-col" class="layout-thumb-link l-three-col">
<div class="layout-thumb">
<div class="layout-thumb-column-container w25">
<div class="layout-thumb-column layout-thumb-secondary"></div>
</div>
<div class="layout-thumb-column-container w50">
<div class="layout-thumb-column"></div>
</div>
<div class="layout-thumb-column-container w25">
<div class="layout-thumb-column layout-thumb-secondary"></div>
</div>
</div>
</a>
</div>
<div>
<h3></h3>
<a href="#l-three-col-even" class="layout-thumb-link l-three-col-even">
<div class="layout-thumb">
<div class="layout-thumb-column-container w33">
<div class="layout-thumb-column"></div>
</div>
<div class="layout-thumb-column-container w33">
<div class="layout-thumb-column"></div>
</div>
<div class="layout-thumb-column-container w33">
<div class="layout-thumb-column"></div>
</div>
</div>
</a>
<a href="#l-four-col-even" class="layout-thumb-link l-four-col-even">
<div class="layout-thumb">
<div class="layout-thumb-column-container w25">
<div class="layout-thumb-column"></div>
</div>
<div class="layout-thumb-column-container w25">
<div class="layout-thumb-column"></div>
</div>
<div class="layout-thumb-column-container w25">
<div class="layout-thumb-column"></div>
</div>
<div class="layout-thumb-column-container w25">
<div class="layout-thumb-column"></div>
</div>
</div>
</a>

<a href="#l-five-col-even" class="layout-thumb-link l-five-col-even">
<div class="layout-thumb">
<div class="layout-thumb-column-container w20">
<div class="layout-thumb-column"></div>
</div>
<div class="layout-thumb-column-container w20">
<div class="layout-thumb-column"></div>
</div>
<div class="layout-thumb-column-container w20">
<div class="layout-thumb-column"></div>
</div>
<div class="layout-thumb-column-container w20">
<div class="layout-thumb-column"></div>
</div>
<div class="layout-thumb-column-container w20">
<div class="layout-thumb-column"></div>
</div>
</div>
</a>
</div>
<div>
<h3></h3>
<a href="#l-six-col-even" class="layout-thumb-link l-six-col-even">
<div class="layout-thumb">
<div class="layout-thumb-column-container w16">
<div class="layout-thumb-column"></div>
</div>
<div class="layout-thumb-column-container w16">
<div class="layout-thumb-column"></div>
</div>
<div class="layout-thumb-column-container w16">
<div class="layout-thumb-column"></div>
</div>
<div class="layout-thumb-column-container w16">
<div class="layout-thumb-column"></div>
</div>
<div class="layout-thumb-column-container w16">
<div class="layout-thumb-column"></div>
</div>
<div class="layout-thumb-column-container w16">
<div class="layout-thumb-column"></div>
</div>
</div>
</a>
</div>
<!--div>
            <h3></h3>
            <ul class="ul-reset">
              <li><a href='#'>Layouts Home</a></li>
              <li><a href='#'>Layouts Rows</a></li>
              <li><a href='#'>Layouts Columns</a></li>
              <li><a href='#'>Nested Layouts</a></li>
              <li><a href='#'>Full-width</a></li>
              <li><a href='#'>Grid</a></li>
              <li><a href='#'>Flex</a></li>
            </ul>
          </div-->
</div>
</div>
</div>
</section>

<section>
<div class="eia-container">
<h2 class="eia-h2">Single Column</h2>
<p class="eia-para">Full Width Column</p>
<p class="eia-para">The fullpage row is similar to the <code>l-row l-header</code> but can be applied to the entire section. An example might include a 'dashboard' page with multiple rows and columns.</p>
<h3 class="eia-h3">Example</h3>
<div class="eia-card eia-break-point">
<div class="module-outer">
<div class="module-inner">
<div class="l-row l-full-width-col">
<div class="l-col hide-overflow">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
<div class="fade"></div>
</div>
</div>
</div>
</div>
<dl class="eia-legend">
<dt>
<div></div>
</dt>
<dt>
<div></div>
</dt>
</div>

<h3 class="eia-h3">HTML</h3>
<div class="eia-card">
<pre><code class="hljs">&lt;div class="l-row l-full-width-col"&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
&lt;/div&gt;</code></pre>
<button class="copy" data-copy-button>Copy to Clipboard</button>
</div>
</div>
</section>

<section>
<div class="eia-container">
<h2 class="eia-h2">Two Columns Even</h2>
<p class="eia-para">50%<span class="pipe">/</span>50%</p>
<h3 class="eia-h3">Example</h3>
<div class="eia-card eia-break-point">
<div class="module-outer">
<div class="module-inner">
<div class="l-row l-two-col-even">
<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
</div>
<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
</div>
</div>
</div>
</div>
<dl class="eia-legend">
<dt>
<div></div>
</dt>
<dt>
<div></div>
</dt>
</div>

<h3 class="eia-h3">HTML</h3>
<div class="eia-card">
<pre><code class="hljs">&lt;div class="l-row l-two-col-even"&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
&lt;/div&gt;</code></pre>
<button class="copy" data-copy-button>Copy to Clipboard</button>
</div>
</div>
</section>

<section id="twoColLeftWide">
<div class="eia-container">
<h2 class="eia-h2">Two Columns Left Wide</h2>
<p class="eia-para">66%<span class="pipe">/</span>33%</p>
<h3 class="eia-h3">Example</h3>
<div class="eia-card eia-break-point">
<div class="module-outer">
<div class="module-inner">
<div class="l-row l-two-col-left-wide">
<div class="l-col hide-overflow">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
<div class="fade"></div>
</div>
<div class="l-col hide-overflow">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
<div class="fade"></div>
</div>
</div>
</div>
</div>
<dl class="eia-legend">
<dt>
<div></div>
</dt>
<dt>
<div></div>
</dt>
</div>
<h3 class="eia-h3">HTML</h3>
<div class="eia-card">
<pre><code class="hljs">&lt;div class="l-row l-two-col-left-wide"&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
&lt;/div&gt;</code></pre>
<button class="copy" data-copy-button>Copy to Clipboard</button>
</div>
</div>
</section>

<section id="twoColLeftNarrow">
<div class="eia-container">
<h2 class="eia-h2">Two Columns</h2>
<p class="eia-para">Two Columns Left Narrow</h2>
<p class="eia-para">25%<span class="pipe">/</span>75%</p>
<h3 class="eia-h3">Example</h3>
<div class="eia-card eia-break-point">
<div class="module-outer">
<div class="module-inner">
<div class="l-row l-two-col-left-narrow">
<div class="l-col hide-overflow">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
<div class="fade"></div>
</div>
<div class="l-col hide-overflow">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
<div class="fade"></div>
</div>
</div>
</div>
</div>
<dl class="eia-legend">
<dt>
<div></div>
</dt>
<dt>
<div></div>
</dt>
</div>
<h3 class="eia-h3">HTML</h3>
<div class="eia-card">
<pre><code class="hljs">&lt;div class="l-row l-two-col-left-narrow"&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
&lt;/div&gt;</code></pre>
<button class="copy" data-copy-button>Copy to Clipboard</button>
</div>
</div>
</section>

<section id="twoColLeft">
<div class="eia-container">
<h2 class="eia-h2">Two Columns Left</h2>
<p class="eia-para">33%<span class="pipe">/</span>66%</p>
<!-- p class="eia-para">Actual: 41.666% | 58.333%</p -->
<h3 class="eia-h3">Example</h3>
<div class="eia-card eia-break-point">
<div class="module-outer">
<div class="module-inner">
<div class="l-row l-two-col-left">
<div class="l-col hide-overflow">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
<div class="fade"></div>
</div>
<div class="l-col hide-overflow">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
<div class="fade"></div>
</div>
</div>
</div>
</div>
<dl class="eia-legend">
<dt>
<div></div>
</dt>
<dt>
<div></div>
</dt>
</div>
<h3 class="eia-h3">HTML</h3>
<div class="eia-card">
<pre><code class="hljs">&lt;div class="l-row l-two-col-left"&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
&lt;/div&gt;</code></pre>
<button class="copy" data-copy-button>Copy to Clipboard</button>
</div>
</div>
</section>

<section id="twoColRightNarrow">
<div class="eia-container">
<h2 class="eia-h2">Two Columns</h2>
<p class="eia-para">Two Columns Right Narrow</h2>
<p class="eia-para">75%<span class="pipe">/</span>25%</p>
<h3 class="eia-h3">Example</h3>
<div class="eia-card eia-break-point">
<div class="module-outer">
<div class="module-inner">
<div class="l-row l-two-col-right-narrow">
<div class="l-col hide-overflow">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
<div class="fade"></div>
</div>
<div class="l-col hide-overflow">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
<div class="fade"></div>
</div>
</div>
</div>
</div>
<dl class="eia-legend">
<dt>
<div></div>
</dt>
<dt>
<div></div>
</dt>
</div>
<h3 class="eia-h3">HTML</h3>
<div class="eia-card">
<pre><code class="hljs">&lt;div class="l-row l-two-col-right-narrow"&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
&lt;/div&gt;</code></pre>
<button class="copy" data-copy-button>Copy to Clipboard</button>
</div>
</div>
</section>

<section id="twoColRight">
<div class="eia-container">
<h2 class="eia-h2">Two Columns</h2>
<p class="eia-para">Two Columns Right</h2>
<p class="eia-para">66.666%<span class="pipe">/</span>33.333%</p>
<h3 class="eia-h3">Example</h3>
<div class="eia-card eia-break-point">
<div class="module-outer">
<div class="module-inner">
<div class="l-row l-two-col-right">
<div class="l-col hide-overflow">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
<div class="fade"></div>
</div>
<div class="l-col hide-overflow">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
<div class="fade"></div>
</div>
</div>
</div>
</div>
<dl class="eia-legend">
<dt>
<div></div>
</dt>
<dt>
<div></div>
</dt>
</div>
<h3 class="eia-h3">HTML</h3>
<div class="eia-card">
<pre><code class="hljs">&lt;div class="l-row l-two-col-right"&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
&lt;/div&gt;</code></pre>
<button class="copy" data-copy-button>Copy to Clipboard</button>
</div>
</div>
</section>

<section id="twoColRightWide">
<div class="eia-container">
<h2 class="eia-h2">Two Columns Right Wide</h2>
<p class="eia-para">41.111%<span class="pipe">/</span>58.888%</p>
<h3 class="eia-h3">Example</h3>
<div class="eia-card eia-break-point">
<div class="module-outer">
<div class="module-inner">
<div class="l-row l-two-col-right-wide">
<div class="l-col hide-overflow">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
<div class="fade"></div>
</div>
<div class="l-col hide-overflow">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
<div class="fade"></div>
</div>
</div>
</div>
</div>
<dl class="eia-legend">
<dt>
<div></div>
</dt>
<dt>
<div></div>
</dt>
</div>
<h3 class="eia-h3">HTML</h3>
<div class="eia-card">
<pre><code class="hljs">&lt;div class="l-row l-two-col-right-wide"&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
&lt;/div&gt;</code></pre>
<button class="copy" data-copy-button>Copy to Clipboard</button>
</div>
</div>
</section>

<section>
<div class="eia-container">
<h2 class="eia-h2">Three Columns</h2>
<p class="eia-para">25% <span class="pipe">/</span>50%<span class="pipe">/</span>25%</p>
<h3 class="eia-h3">Example</h3>
<div class="eia-card eia-break-point">
<div class="module-outer">
<div class="module-inner">
<div class="l-row l-three-col">
<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
</div>
<div class="l-col hide-overflow">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
<div class="fade"></div>
</div>
<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
</div>
</div>
</div>
</div>
<dl class="eia-legend">
<dt>
<div></div>
</dt>
<dt>
<div></div>
</dt>
</div>
<h3 class="eia-h3">HTML</h3>
<div class="eia-card">
<pre><code class="hljs">&lt;div class="l-row l-three-col-even"&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
&lt;/div&gt;</code></pre>
<button class="copy" data-copy-button>Copy to Clipboard</button>
</div>
</div>
</section>

<section id="threeColumnsEven">
<div class="eia-container">
<h2 class="eia-h2">Three Columns Even</h2>
<p class="eia-para">33% <span class="pipe">/</span>33%<span class="pipe">/</span>33%</p>
<h3 class="eia-h3">Example</h3>
<div class="eia-card eia-break-point">
<div class="module-outer">
<div class="module-inner">
<div class="l-row l-three-col-even">
<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
</div>
<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
</div>
<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
</div>
</div>
</div>
</div>
<dl class="eia-legend">
<dt>
<div></div>
</dt>
<dt>
<div></div>
</dt>
</div>
<h3 class="eia-h3">HTML</h3>
<div class="eia-card">
<pre><code class="hljs">&lt;div class="l-row l-three-col-even"&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
&lt;/div&gt;</code></pre>
<button class="copy" data-copy-button>Copy to Clipboard</button>
</div>
</div>
</section>
<section>
<div class="eia-container">
<h2 class="eia-h2">Four Columns</h2>
<p class="eia-para">25%<span class="pipe">/</span>25%<span class="pipe">/</span>25%<span class="pipe">/</span>25%</p>
<h3 class="eia-h3">Example</h3>
<div class="eia-card eia-break-point">
<div class="module-outer">
<div class="module-inner">
<div class="l-row l-four-col-even">
<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
</div>
<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
</div>
<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
</div>
<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
</div>
</div>
</div>
</div>
<dl class="eia-legend">
<dt>
<div></div>
</dt>
<dt>
<div></div>
</dt>
</div>
<h3 class="eia-h3">HTML</h3>
<div class="eia-card">
<pre><code class="hljs">&lt;div class="l-row l-four-col-even"&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
&lt;/div&gt;</code></pre>
<button class="copy" data-copy-button>Copy to Clipboard</button>
</div>
</div>
</section>
<section>
<div class="eia-container">
<h2 class="eia-h2">Five Columns Even</h2>
<p class="eia-para">20%<span class="pipe">/</span>20%<span class="pipe">/</span>20%<span class="pipe">/</span>20%<span class="pipe">/</span>20%</p>
<h3 class="eia-h3">Example</h3>
<div class="eia-card eia-break-point">
<div class="module-outer">
<div class="module-inner">
<div class="l-row l-five-col-even">
<div class="l-col hide-overflow">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
<div class="fade"></div>
</div>
<div class="l-col hide-overflow">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
<div class="fade"></div>
</div>
<div class="l-col hide-overflow">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
<div class="fade"></div>
</div>
<div class="l-col hide-overflow">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
<div class="fade"></div>
</div>
<div class="l-col hide-overflow">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
<div class="fade"></div>
</div>
</div>
</div>
</div>
<dl class="eia-legend">
<dt>
<div></div>
</dt>
<dt>
<div></div>
</dt>
</div>
<h3 class="eia-h3">HTML</h3>
<div class="eia-card">
<pre><code class="hljs">&lt;div class="l-row l-full-width-col"&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
&lt;/div&gt;</code></pre>
<button class="copy" data-copy-button>Copy to Clipboard</button>
</div>
</div>
</section>
<section>
<div class="eia-container">
<h2 class="eia-h2">Six Columnss</h2>
<p class="eia-para">16.666%<span class="pipe">/</span>16.666<span class="pipe">/</span>16.666<span class="pipe">/</span>16.666<span class="pipe">/</span>16.666<span class="pipe">/</span>16.666</p>
<h3 class="eia-h3">Example</h3>
<div class="eia-card eia-break-point">
<div class="module-outer">
<div class="module-inner">
<div class="l-row l-six-col-even">
<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
</div>
<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
</div>
<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
</div>
<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
</div>
<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
</div>
<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
</div>
</div>
</div>
</div>
<dl class="eia-legend">
<dt>
<div></div>
</dt>
<dt>
<div></div>
</dt>
</div>
<h3 class="eia-h3">HTML</h3>
<div class="eia-card">
<pre><code class="hljs">&lt;div class="l-row l-six-col-even"&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
  &lt;div class="l-col"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/div&gt;
&lt;/div&gt;</code></pre>
<button class="copy" data-copy-button>Copy to Clipboard</button>
</div>
</div>
</section>
<!-- end intro module -->
<!-- section>
    <div class="eia-container">
      <div class="eia-card">
        <div class="eia-grid l-full-width-col">
          <div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
          </div>
        </div>
        <div class="eia-grid l-two-col-right-narrow">
          <div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
          </div>
          <div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
          </div>
        </div>
        <div class="eia-grid l-two-col-left">
          <div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
          </div>
          <div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
          </div>
        </div>
        <div class="eia-grid l-two-col-left-wide">
          <div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
          </div>
          <div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
          </div>
        </div>
        <div class="eia-grid l-two-col-even">
          <div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
          </div>
          <div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
          </div>
        </div>
        <div class="eia-grid l-two-col-right-wide">
          <div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
          </div>
          <div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
          </div>
        </div>
        <div class="eia-grid l-two-col-right">
          <div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
          </div>
          <div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
          </div>
        </div>
        <div class="eia-grid l-two-col-left-narrow">
          <div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
          </div>
          <div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div></div>
        </div>
        <div class="eia-grid l-three-col-even">
          <div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
          </div>
          <div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
          </div>
          <div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
          </div>
        </div>
        <div class="eia-grid l-three-col">
          <div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
          </div>
          <div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
          </div>
          <div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
          </div>
        </div>
        <div class="eia-grid l-four-col-even">
          <div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
          </div>
          <div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
          </div>
          <div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
          </div>
          <div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
          </div>
        </div>
        <div class="eia-grid l-six-col-even">
          <div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
          </div>
          <div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
          </div>
          <div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
          </div>
          <div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
          </div>
          <div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
          </div>
          <div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
          </div>
        </div>
      </div>
    </div>
  </section -->
</main>

</body>

</html>