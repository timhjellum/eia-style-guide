<!doctype html>
<?php
$globalTitle 	= 'U.S. Energy Information Administration (EIA)';
$pageTitle 		= 'Consumption & Efficiency Reports';
$L2T 			= 'Consumption & Efficiency';
$l2id 			= 4;
$l2page 		= 'ap';
$locale 		= 'ap';
	?>
<html>

<head>
	<title><?=$pageTitle?> - <?=$globalTitle?></title>
	<meta property="og:title" content="<?=$pageTitle?> - <?=$globalTitle?>">
	<meta property="og:url" content="https://www.eia.gov<?=$_SERVER['PHP_SELF']?>">
	<meta name="url" content="https://www.eia.gov<?=$_SERVER['PHP_SELF']?>">
	<?php
    include('adaptive/global/head/includes/head.inc');
	include('adaptive/reports/includes/head.inc');
	?>
</head>

<body>
	<?php include('adaptive/global/header/includes/header.inc'); ?>
	<?php include('./includes/sub-navigation.inc'); ?>
	<?php include('adaptive/reports/includes/results.inc'); ?>
	<?php include('adaptive/global/footer/includes/footer.inc'); ?>
</body>

</html>