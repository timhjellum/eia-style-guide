<!doctype html>
<?php
$linkPage 		= 'products';
$globalTitle 	= 'U.S. Energy Information Administration (EIA)';
$pageTitle 		= 'Energy & Financial Markets: What drives petroleum product prices - Energy Information Administration';
$L2T 			= 'Markets & Finance';
$locale 		= 'petprod';
$l2page 		= 'page_fin';
$l2id 			= 10;
?>
<html>

<head>
	<title><?=$pageTitle?> - <?=$globalTitle?></title>
	<meta property="og:title" content="<?=$pageTitle?> - <?=$globalTitle?>">
	<meta property="og:url" content="https://www.eia.gov<?=$_SERVER['SCRIPT_NAME']?>">
	<meta name="url" content="https://www.eia.gov<?=$_SERVER['SCRIPT_NAME']?>">
	<?php
	$doNotIncludeHighcharts = true;
	include('global/head/includes/head.inc');
	include('../includes/header_efmi.inc');
	include('../includes/highcharts.inc');
	?>
	<link rel="stylesheet" href="includes/efmi.css" type="text/css">
	<link rel="stylesheet" href="includes/efmi.css" type="text/css">
</head>

<body>
	<?php
include('global/header/includes/header.inc');
include('./includes/report-header.inc');
include('./includes/sub-navigation.inc');
include('./includes/dashboard.inc');
include('./includes/tertiary-navigation.inc');
?>
	<div class="l-row l-two-col-right">
		<div class="l-col">
			<?php
$schemaName = "neic";
require_once 'global/includes/utils/Neic.inc';
$neic = new NEIC();

$neic->sql = <<<SQL
SELECT CHART_ID, FREQUENCY, UPDATE_DATE
FROM $schemaName.V2_EFMI_UPDATE_DATE
SQL;

$query = $neic->get();
$dataArray = array();

for ($i = 0; $i < sizeof($query); $i++) {
	$chartId = $query[$i]['chart_id'];
	$dataArray[$chartId] = array();
	$dataArray[$chartId]["frequency"] = $query[$i]['frequency'];
	$dataArray[$chartId]["update_date"] = $query[$i]['update_date'];
}
?>
			<?php include('./includes/index-content.inc'); ?>
		</div>
		<div class="l-col">
			<?php include('./includes/index-side-content.inc'); ?>
		</div>
	</div>

	<?php include('global/footer/includes/footer.inc'); ?>
</body>

</html>