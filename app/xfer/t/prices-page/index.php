<!doctype html>
<?php
$globalTitle 		= '';
$pageTitle          = 'Electricity Retail Prices';
?>
<html>

<head>
	<title><?=$pageTitle?> - <?=$globalTitle?></title>
	<meta property="og:title" content="<?=$pageTitle?> - <?=$globalTitle?>">
	<meta property="og:url" content="https://www.eia.gov<?=$_SERVER['PHP_SELF']?>">
	<meta name="url" content="https://www.eia.gov<?=$_SERVER['PHP_SELF']?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="Content-Language" content="en-us">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="robots" content="all">
	<link rel="shortcut icon" href="//www.eia.gov/favicon.ico">
	<link rel="icon" href="//www.eia.gov/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="//www.eia.gov/favicon.ico">
	<script src="/global/scripts/vendor/jquery/jquery.min.js"></script>
	<script src="/global/scripts/vendor/jquery-migrate/jquery.migrate.min.js"></script>
	<script src="/global/scripts/vendor/jquery-ui/jquery.ui.min.js"></script>
	<script src="/global/scripts/vendor/jquery-ui/jquery.ui.touch-punch.min.js"></script>
	<script type="text/javascript" src="/global/scripts/jquery/highcharts/3.0.10/js/highcharts.js"></script>
	<script type="text/javascript" src="/global/scripts/jquery/highcharts/3.0.10/js/highcharts-more.js"></script>
	<script type="text/javascript" src="/global/scripts/jquery/highcharts/3.0.10/js/modules/exporting.js"></script>
	<script type="text/javascript" src="/global/scripts/jquery/highcharts/3.0.10/js/modules/no-data-to-display.js"></script>
	<link rel="stylesheet" href="css/styles.css" media="screen">
	<link href="js/jquery-jvectormap-2.0.3.css" media="screen" rel="stylesheet" type="text/css">
</head>

<body>
	<?php
include('./includes/header.inc');
include('./includes/map.inc');
include('./includes/placeholder.inc');
include('./includes/faq.inc');
include('./includes/tables.inc');
include('./includes/footer.inc');
?>
	<script type=" text/javascript">
	var averageMapData = <?= json_encode($averageMapData)?>;
	var retailMapData = <?= json_encode($retailMapData)?>;
	var netMapData = <?= json_encode($netMapData)?>;
	</script>
	<script src="js/javascript.js"></script>
	<script src="js/map.js"></script>
	<script src="js/jquery-jvectormap-2.0.3.min.js"></script>
	<script src="js/jquery-jvectormap-us-aea-en.js" type="text/javascript"></script>
</body>

</html>