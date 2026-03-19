<!doctype html>

<?php
$globalTitle 	= 'U.S. Energy Information Administration (EIA)'; 
$pageTitle 		= "Manufacturing Energy Consumption Survey (MECS)";
$L2T 			= 'Consumption & Efficiency';
$l2id 			= 4;
$sect = 'Consumption';
$L2Title = "Manufacturing Energy Consumption Survey (MECS)";

require_once 'global/includes/utils/utils.inc';
require_once 'global/includes/utils/Neic.inc';
$neic      = new NEIC();
$locale = 'overview';
?>
<html>

<head>
	<title><?=$pageTitle?> - <?=$globalTitle?></title>
	<meta property="og:title" content="<?=$pageTitle?> - <?=$globalTitle?>">
	<meta property="og:url" content="https://www.eia.gov<?=$_SERVER['SCRIPT_NAME']?>">
	<meta name="url" content="https://www.eia.gov<?=$_SERVER['SCRIPT_NAME']?>">
	<?php include('global/head/includes/head.inc'); ?>

</head>

<body onLoad="clearForms()" onUnload="clearForms()">
	<?php
include('global/header/includes/header.inc');
include('consumption/manufacturing/includes/sub-navigation.inc');
include ('./includes/report-header.inc');
?>

	<?php $url['t'] = '90'; ?>
	<?php /* Classifies this reports page as commercial (id88) */ ?>
	<?php include('global/includes/bookshelf_single.inc'); ?>
	<div class="l-row l-two-col-left-narrow">
		<div class="l-col">
			<?php include('global/includes/bookshelf_side_search.inc'); ?>
      </div>
		<div class="l-col article">
				<?php include('global/includes/bookshelf_results_sub.inc'); ?>
      </div>
    </div>
	<?php include('global/footer/includes/footer.inc'); ?>
</body>
</html>