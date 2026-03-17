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
	<title>
		<?=$pageTitle?> -
		<?=$globalTitle?>
	</title>
	<meta property="og:title" content="<?=$pageTitle?> - <?=$globalTitle?>">
	<meta property="og:url" content="https://www.eia.gov<?=$_SERVER['SCRIPT_NAME']?>">
	<meta name="url" content="https://www.eia.gov<?=$_SERVER['SCRIPT_NAME']?>">
	<?php
    include('global/head/includes/head.inc');
	include('reports/includes/head.inc');
	?>
</head>

<body>
	<?php include('global/header/includes/header.inc'); ?>
	<?php include('./includes/sub-navigation.inc'); ?>
	<?php include('reports/includes/results.inc'); ?>
	<?php include('global/footer/includes/footer.inc'); ?>
</body>

</html>