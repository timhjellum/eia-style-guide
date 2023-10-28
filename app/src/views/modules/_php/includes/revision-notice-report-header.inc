<?php
$seeAll        = '<a href="//reports.php">See all Reports</a>';
$dataSeries         = '<!--<span class="responsive-container"></span>-->';
$reportTitle        = 'Annual Report';
$releaseDate        = 'Month xx, 20xx';
$nextReleaseDate    = 'Month xx, 20xx';
$fullReport         = '<a>full report<span class="eia ico pdf"><span>PDF</span></span></a>';
$selectOptions       = '<li class="eia ico pdf"><a href="./archive/05842017.pdf">2017</a></li>
<li class="eia ico pdf"><a>20xx</a></li>
<li class="eia ico pdf"><a href="./archive/">see all</a></li>';
?>
<h4>HTML Example</h4>
<span class="example">
	<div class="l-row l-report-header">
		<div class="l-col">
			<div class="see-all">
				<?php echo "$seeAll"?>
			</div>
			<h1>
				<?php echo "$pageTitle"?>
			</h1>
			<p class="uk-text-lead"></p>
			<div class="release-dates">
				<span class="responsive-container">
					<?php echo "$dataSeries"?>
				</span>
				<span class="responsive-container">
					<span class="label">Release Date:</span> <span class="date">
						<?php echo "$releaseDate"?>
					</span>
				</span>
				<span class="responsive-container">
					<span class="label">Next Release Date:</span> <span class="date">
						<?php echo "$nextReleaseDate"?>
					</span>
				</span>
				<span class="responsive-container">
					<span class="label">Re-released:</span> <span class="date">Month xx, 20xx</span> (<a href="#revisionNotice1" class="enlarge-content">Revision</a>)
					<div id="revisionNotice1" class="revision-notice" style="display: none;">
						<h2>H2 Lorem Ipsum Dolor</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</p>
					</div>
				</span>
				<span class="responsive-container">
					<?php echo "$fullReport"?>
				</span>
			</div>
		</div>
		<div class="l-col">
			<span class="go-back"><a><span class="eia ico close"><span>Go Back</span></span></a></span>
			<div class="form-container do-not-print">
				<fieldset>
					<legend>Previous reports</legend>
					<div class="dropdown-container no-js">
						<div class="dropdown-button">
							<span class="text">Select Year</span>
							<span class="eia ico d-arrow">
								<span>dropdown arrow</span>
							</span>
						</div>
						<div class="dropdown-menu">
							<ul>
								<?php echo "$select"?>
							</ul>
						</div>
					</div>
				</fieldset>
			</div>
		</div>
	</div>
</span><!-- HTML -->
<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
<pre><code class="language-html" id="revisionNoticeReportHeaderCodeSnippit">&lt;span class="responsive-container"&gt;
  &lt;span class="label"&gt;Re-released:&lt;/span&gt; &lt;span class="date"&gt;Month xx, 20xx&lt;/span&gt; (&lt;a href="#revisionNotice1" class="enlarge-content"&gt;Revision&lt;/a&gt;)
  &lt;div id="revisionNotice1" class="revision-notice" style="display: none;"&gt;
    &lt;span class="date"&gt;Month xx, 20xx&lt;/span&gt;
    &lt;h2&gt;H2 Lorem Ipsum Dolor&lt;/h2&gt;
    &lt;p&gt;Lorem ipsum dolor sit amet.&lt;/p&gt;
  &lt;/div&gt;
&lt;/span&gt;</code></pre>
<!-- Copy Button -->
<p>
	<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#revisionNoticeReportHeaderCodeSnippit">
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