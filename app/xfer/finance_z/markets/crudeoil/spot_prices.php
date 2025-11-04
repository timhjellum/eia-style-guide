<?php
$locale 		= 'crudeoil';
$linkPage		= 'link01page';
$globalTitle 	= 'U.S. Energy Information Administration (EIA)';
$pageTitle 		= 'What drives crude oil prices: Spot Prices';
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
</head>

<body>
	<?php
include('global/header/includes/header.inc');
include('./includes/report-header.inc');
include('./includes/sub-navigation.inc');
include('./includes/dashboard.inc');
include('./includes/tertiary-navigation.inc');
include('./includes/spot_prices.inc');
 include('global/footer/includes/footer.inc'); ?>
</body>

</html>