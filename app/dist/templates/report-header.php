<?php
require_once '../includes/variables.inc';
$globalTitle 	= 'U.S. Energy Information Administration (EIA)';
$section		= 'Themes';
$subSection		= 'Report Header';

$seeAll        = '<a href="//reports.php">See all Reports</a>';
$dataSeries         = '<!--<span class="responsive-container"></span>-->';
$reportTitle        = 'Annual Coal Report';
$releaseDate        = 'October 3, 2019';
$nextReleaseDate    = 'November 2, 2020';
$fullReport         = '<a href="./pdf/acr.pdf">full report<span class="eia ico pdf"><span>PDF</span></span></a>';
$selectOptions       = '<li class="eia ico pdf"><a href="./archive/05842017.pdf">2017</a></li>
<li class="eia ico pdf"><a href="./archive/05842016.pdf">2016</a></li>
<li class="eia ico pdf"><a href="./archive/05842015.pdf">2015</a></li>
<li class="eia ico pdf"><a href="./archive/05842014.pdf">2014</a></li>
<li class="eia ico pdf"><a href="./archive/05842013.pdf">2013</a></li>
<li class="eia ico pdf"><a href="./archive/05842012.pdf">2012</a></li>
<li class="eia ico pdf"><a href="./archive/05842011.pdf">2011</a></li>
<li class="eia ico pdf"><a href="./archive/05842010.pdf">2010</a></li>
<li class="eia ico pdf"><a href="./archive/05842009.pdf">2009</a></li>
<li class="eia ico pdf"><a href="./archive/05842008.pdf">2008</a></li>
<li class="eia ico pdf"><a href="./archive/05842007.pdf">2007</a></li>
<li class="eia ico pdf"><a href="./archive/05842006.pdf">2006</a></li>
<li class="eia ico pdf"><a href="./archive/05842005.pdf">2005</a></li>
<li class="eia ico pdf"><a href="./archive/05842004.pdf">2004</a></li>
<li class="eia ico pdf"><a href="./archive/05842003.pdf">2003</a></li>
<li class="eia ico pdf"><a href="./archive/05842002.pdf">2002</a></li>
<li class="eia ico pdf"><a href="./archive/">see all</a></li>';

?>
<!doctype html>
<html>

<head>
	<?php include('../includes/head.inc'); ?>
</head>

<body>
	<?php include('../includes/header.inc'); ?>
	<main>
		<section class="report-header">
			<!-- start master layout-->
			<div class="grid-wrapper">
				<div class="grid-left">
					<!-- start left navigation-->
					<div></div>
					<!-- end master layout-->
				</div>
				<div class="grid-main">
					<!-- start main template area -->

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
									<span class="label">Re-released:</span> <span class="date">November 26, 2018 <a href="revision_notice.php">Correction</a></span>
								</span>
								<span class="responsive-container">
									<?php echo "$fullReport"?>
								</span>
								<span class="responsive-container">
									<span class="label">Re-released:</span> <span class="date">November 26, 2018 <a href="revision_notice.php">Correction</a></span>
								</span>
							</div>
						</div>
						<div class="l-col">
							<span class="go-back"><a href="/uranium/marketing/"><span class="eia ico close"><span>Go Back</span></span></a></span>
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
					<!-- end main template area -->
				</div>
				<div class="grid-right"></div>
			</div>
			<!-- end master layout-->
		</section>
		<?php include('../includes/footer.inc'); ?>
	</main>
</body>

</html>