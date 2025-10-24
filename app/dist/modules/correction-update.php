<?php
require_once '../includes/variables.inc';
$globalTitle 	= 'U.S. Energy Information Administration (EIA)';
$section		= 'Layouts';
$subSection		= 'Home';
?>
<!doctype html>
<html>

<head>
	<?php include('../includes/head.inc'); ?>
</head>

<body>
	<?php include('../includes/header.inc'); ?>
	<main>
		<section id="top">
			<!-- start master layout-->
			<div class="grid-wrapper">
				<div class="grid-left">
					<!-- start left navigation-->
					<div></div>
					<!-- end master layout-->
				</div>
				<div class="grid-main">
					<!-- start main template area -->
					<!-- content here -->
			<div class="eia-container">
				<h1 class="uk-h1 tm-heading-fragment"><?=$section?></h1>
				<p class="uk-text-lead"></p>
</div>
<!-- end top template -->
<!-- content here -->





		

<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$ Correction Update $$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section id="correctionUpdate">
	<div class="eia-container">

		<h1 class="uk-h1 tm-heading-fragment">Correction Update</h1>
		<p class="uk-text-lead"></p>
		<!-- Example -->
		<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
		<div class="eia-card">
			<a href="#correctionUpdate" class="enlarge-content">Correction Update</a>
			<div id="correctionUpdate" style="display: none">
				<span class="date">Month xx, 20xx</span>
				<h2 class="eia">H2 Lorem Ipsum Dolor</h2>
				<p class="eia">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
			</div>
		</div>
		<!-- HTML -->
		<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
		<pre><code class="language-html" id="CorrectionUpdate">&lt;a href="#correctionUpdate" class="enlarge-content"&gt;Correction Update&lt;/a&gt;
&lt;div id="correctionUpdate" style="display: none"&gt;
  &lt;span class="date"&gt;Month xx, 20xx&lt;/span&gt;
  &lt;h2&gt;H2 Lorem Ipsum Dolor&lt;/h2&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet.&lt;/p&gt;
&lt;/div&gt;</code></pre>
		<!-- Copy Button -->
		<p>
			<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#CorrectionUpdate">
				<span uk-icon="copy"></span>Copy to clipboard
			</button>
		</p>
	</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$ Revision Notice $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section id="revisionNotice">
	<div class="eia-container">

		<h1 class="uk-h1 tm-heading-fragment">Revision Notice</h1>
		<p class="uk-text-lead"></p>
		<!-- Example -->
		<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
		<div class="eia-card">
			<a href="#revisionNotice" class="enlarge-content">Revision Notice</a>
			<div id="revisionNotice" style="display: none">
				<span class="date">Month xx, 20xx</span>
				<h2 class="eia">H2 Lorem Ipsum Dolor</h2>
				<p class="eia">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
			</div>
		</div>
		<!-- HTML -->
		<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
		<pre><code class="language-html" id="RevisionNotice">&lt;a href="#revisionNotice" class="enlarge-content"&gt;Revision Notice&lt;/a&gt;
&lt;div id="revisionNotice" style="display: none"&gt;
  &lt;span class="date"&gt;Month xx, 20xx&lt;/span&gt;
  &lt;h2&gt;H2 Lorem Ipsum Dolor&lt;/h2&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet.&lt;/p&gt;
&lt;/div&gt;</code></pre>
		<!-- Copy Button -->
		<p>
			<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#RevisionNotice">
				<span uk-icon="copy"></span>Copy to clipboard
			</button>
		</p>
	</div>
</section>
<!-- end content -->
				<!-- start bottom template -->
				</div>
		</div>
		<div class="grid-right"></div>
		<?php include('../includes/footer.inc'); ?>
	</div>
</body>

</html>