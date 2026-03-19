<!doctype html>

<?php
$globalTitle 	= 'U.S. Energy Information Administration (EIA)'; 
$pageTitle		= 'MECS Industry Analysis Briefs';
$L2Title		= 'MECS Industry Analysis Briefs';
$locale 		= 'overview';
//$linkPage 		= 'link00page';
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
include ('consumption/includes/report-header.inc')
?>
	<div class="l-row l-two-col-right-narrow">
		<div class="l-col">
<h1>MECS Industry Analysis Briefs</h1>
<h2><a href="steel/">Steel Industry Analysis</a></h2>
<p>The steel industry is critical to the U.S. economy. Steel is the material of choice for many elements of construction, transportation, manufacturing, and a variety of consumer products. It is the backbone of bridges, skyscrapers, railroads, automobiles, and appliances. Most grades of steel used today - particularly high-strength steels that are lighter and more versatile - were not available a decade ago.</p>
<hr />
<h2><a href="chemical/">Chemical Industry Analysis</a></h2>
<p>The chemical industries are a cornerstone of the U.S. economy, converting raw materials such as oil, natural gas, air, water, metals, and minerals into thousands of various products. Chemicals are key materials for producing an extensive assortment of consumer goods. They are also crucial materials in creating many resources that are essential inputs to the numerous industries and sectors of the U.S. economy.</p>
		</div>
		<div class="l-col">
			<?php include('consumption/manufacturing/includes/side-nav-manufacturing.inc'); ?>
		</div>
	</div>
	<?php include('global/footer/includes/footer.inc'); ?>
</body>

    
</html>