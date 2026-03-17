
<!doctype html>

<?php
$globalTitle 	= 'U.S. Energy Information Administration (EIA)'; 
$pageTitle 		= "Manufacturing Energy Consumption Survey (MECS)";
$locale 		= 'data';
$L2Title 		= "Manufacturing Energy Consumption Survey (MECS)";
$locale 		= 'overview';
$linkPage 		= 'link00page';
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
include('consumption/manufacturing/includes/sub-navigation.inc');
include ('./includes/report-header.inc')
?>
	<div class="l-row l-two-col-right-narrow">
		<div class="l-col">
			<?php include('./includes/mecs_survey_manager_contact_info.inc'); ?>
		</div>
		<div class="l-col">
			<?php include('../includes/side-nav-manufacturing.inc'); ?>
		</div>
	</div>
	<?php include('global/footer/includes/footer.inc'); ?>
</body>

</html>