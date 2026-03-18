<!doctype html>
<?php
$globalTitle 	= 'U.S. Energy Information Administration (EIA)';
$pageTitle 		= 'Consumption & Efficiency';
$L2T 			= 'Consumption & Efficiency';
$locale 		= 'overview';
$l2page 		= 'page_con';
$l2id 			= 4;
?>

<html>

<head>
	<title><?=$pageTitle?> - <?=$globalTitle?></title>
	<meta property="og:title" content="<?=$pageTitle?> - <?=$globalTitle?>">
	<meta property="og:url" content="https://www.eia.gov<?=$_SERVER['PHP_SELF']?>">
	<meta name="url" content="https://www.eia.gov<?=$_SERVER['PHP_SELF']?>">
	<?php include('adaptive/global/head/includes/head.inc'); ?>
</head>

<body>
	<?php include('adaptive/global/header/includes/header.inc'); ?>
	<?php include('./includes/sub-navigation.inc'); ?>
	<?php include('global/sliders/multi-card-slider.inc'); ?>
	<div class="l-row l-two-col-even">
		<div class="l-col">
			<?php include('./includes/recent-data.inc'); ?>
			<?php include('./includes/updated-data-series.inc'); ?>
			<?php include('./includes/survey-forms-changes-announcements.inc'); ?>
		</div>
		<div class="l-col">
			<?php include('global/analysis-projections/analysis-projections.inc'); ?>
			<?php include('./includes/presentations.inc'); ?>
			<?php include('./includes/upcoming-releases.inc'); ?>
		</div>
	</div>
	<?php include('./includes/consumption-survey.inc'); ?>
	<?php include('./includes/visualizations.inc'); ?>
	<?php include('./includes/energy-education.inc'); ?>
	<?php include('adaptive/global/footer/includes/footer.inc'); ?>
</body>

</html>