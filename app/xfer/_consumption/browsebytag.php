<!doctype html>
<?php
$globalTitle 	= 'U.S. Energy Information Administration (EIA)';
$pageTitle 		= 'Browse by Tag';
$L2T 			= 'Browse by Tag';
$locale 		= 'reports';
$l2id 			= 4;
?>
<html>

<head>
	<title><?=$pageTitle?> - <?=$globalTitle?></title>
	<meta property="og:title" content="<?=$pageTitle?> - <?=$globalTitle?>">
	<meta property="og:url" content="https://www.eia.gov<?=$_SERVER['SCRIPT_NAME']?>">
	<meta name="url" content="https://www.eia.gov<?=$_SERVER['SCRIPT_NAME']?>">
	<?php include('global/head/includes/head.inc'); ?>
</head>

<body>
	<?php
include('global/header/includes/header.inc');
include('./includes/sub-navigation.inc');
include('reports/includes/browse-by-tag.inc');
include('global/footer/includes/footer.inc');
?>
</body>

</html>