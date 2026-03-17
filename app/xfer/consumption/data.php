<!doctype html>
<?php
$globalTitle 	= 'U.S. Energy Information Administration (EIA)';
$pageTitle 		= 'Consumption & Efficiency Data';
$L2T 			= 'Consumption & Efficiency Data';
$locale 		= 'data';
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
<?php include('global/header/includes/header.inc'); ?>
<?php include('./includes/sub-navigation.inc'); ?>
        <div class="l-row l-two-col-right-narrow">
            <div class="l-col">
<?php include('./includes/data.inc'); ?>
            </div>
            <div class="l-col">
<?php include('./includes/data-side-content.inc'); ?>
            </div>
        </div>
<?php include('global/footer/includes/footer.inc'); ?>
    </body>

    </html>