<!doctype html>
<?php $globalTitle = 'U.S. Energy Information Administration (EIA)'; $pageTitle = "Manufacturing Energy Consumption Survey (MECS)"; $locale = 'overview'; //$page['year'] = '2022'; //$url['view'] = isset($_REQUEST['view']) ? $_REQUEST['view'] : ''; $L2Title = "Manufacturing Energy Consumption Survey (MECS)"; ?>
<html>

<head>
	<title><?=$pageTitle?> - <?=$globalTitle?></title>
	<meta property="og:title" content="<?=$pageTitle?> - <?=$globalTitle?>">
	<meta property="og:url" content="https://www.eia.gov<?=$_SERVER['SCRIPT_NAME']?>">
	<meta name="url" content="https://www.eia.gov<?=$_SERVER['SCRIPT_NAME']?>">
	<?php include('global/head/includes/head.inc'); ?>
	<link href="/global/styles/global.mecs.min.css" type="text/css" media="screen, projection" rel="stylesheet">
	<style>
	.next:after {
		display: none !important;
	}
	</style>
</head>

<body>
	<?php
	include('global/header/includes/header.inc');
include('consumption/manufacturing/includes/sub-navigation.inc');
	include('./includes/report-header.inc');
	include('./includes/carousel.inc');
	?>
	<div class="l-row l-two-col-right-narrow">
		<div class="l-col article">
			<h2>Industry Analysis Briefs </h2>
			<h5><a href="/consumption/manufacturing/briefs/steel/index.php">Steel Industry Analysis</a></h5>
			<p>The steel industry is critical to the U.S. economy. Steel is the material of choice for many elements of construction, transportation, manufacturing, and a variety of consumer products. It is the backbone of bridges, skyscrapers, railroads, automobiles, and appliances. Most grades of steel used today - particularly high-strength steels that are lighter and more versatile - were not available a decade ago.</p>
			<h5><a href="/consumption/manufacturing/briefs/chemical/index.php">Chemical Industry Analysis</a></h5>
			<p>The chemical industries are a cornerstone of the U.S. economy, converting raw materials such as oil, natural gas, air, water, metals, and minerals into thousands of various products. Chemicals are key materials for producing an extensive assortment of consumer goods.</p>
			<h2>Features</h2>
			<h3><a href="/consumption/manufacturing/reports/2014/fuel_switching/"><img src="/consumption/manufacturing/reports/2014/fuel_switching/images/fig1.png" alt="bar chart" />The Capability of U.S. Manufacturing to Switch Fuels</a></h3>
			<p><span class="release-dates">Release Date:</span> September 6, 2018</p>
			<p>Preliminary estimates show that the total U.S. manufacturing energy consumption increased about 3.7% between 2010 and 2014. This is the first measured 4-year increase in manufacturing energy consumption since 2002 (Figure 1). Energy source shares have changed modestly since 2002, with natural gas rising from 29% to 33% of all manufacturing energy consumption. Conversely, during this same period, the share of delivered energy to manufacturing from coal, coke and breeze declined from 10% to 8%, while the share of fuel oils and naphtha together decreased from 7% to 5%.</p>
			<h3><a href="/consumption/manufacturing/reports/2014/enduse_intensity/"><img src="/consumption/manufacturing/reports/2014/enduse_intensity/images/fig1.png" alt="bar chart" />Energy Use and Energy Intensity of U.S. Manufacturing—Data from the 2014 Manufacturing Energy Consumption Survey (MECS) </a></h3>
			<p><span class="release-dates">Release Date:</span> October 18, 2017</p> Energy intensity in manufacturing in the United States decreased from 2010 to 2014.U.S. manufacturing overall fuel intensity decreased by 4.4% from 3.016 thousand British thermal units (Btu) per dollar of output in 2010 to 2.882 thousand Btu in 2014. U.S. manufacturing fuel consumption rose 4.7% from 2010 to 2014, although real gross output increased more rapidly at 9.6%. <h3><a href="/consumption/manufacturing/reports/2014/pre_estimates/"><img src="/consumption/manufacturing/reports/2014/pre_estimates/images/figure_1.png" alt="bar chart" />Preliminary estimates show that U.S. manufacturing energy consumption increased between 2010 and 2014 </a></h3>
			<p><span class="release-dates">Release Date:</span> October 13, 2016</p>
			<p>Preliminary estimates show that the total U.S. manufacturing energy consumption increased about 3.7% between 2010 and 2014. This is the first measured 4-year increase in manufacturing energy consumption since 2002 (Figure 1). Energy source shares have changed modestly since 2002, with natural gas rising from 29% to 33% of all manufacturing energy consumption. Conversely, during this same period, the share of delivered energy to manufacturing from coal, coke and breeze declined from 10% to 8%, while the share of fuel oils and naphtha together decreased from 7% to 5%.</p>
			<h3><a href="/consumption/manufacturing/reports/2010/ng_cost/"><img src="/consumption/manufacturing/reports/2010/ng_cost/fig1.png" alt="bar chart" />Cost of Natural Gas Used in Manufacturing Sector Has Fallen</a></h3>
			<p><span class="release-dates">Release Date:</span> September 6, 2013</p>
			<p>Natural gas has been an important exception to the trend of rising prices for energy sources used by manufacturers. Production of natural gas in the United States increased rapidly beginning in 2007 as a result of resources found in shale formations. That increase in supply has in turn lowered the price of natural gas to manufacturers as well as other consumers.</p>
			<h3><a href="/consumption/manufacturing/reports/2010/decrease_use.php"><img src="/consumption/manufacturing/reports/2010/images/fig1-lg.png" alt="bar chart" />Manufacturing energy consumption data show large reductions in both manufacturing energy use and the energy intensity of manufacturing activity between 2002 and 2010</a></h3>
			<p><span class="release-dates">Release Date:</span> March 19, 2013</p>
			<p>Total energy consumption in the manufacturing sector decreased by 17 percent from 2002 to 2010 (Figure 1), according to new 2010 MECS data.</p>
			<h3><a href="/consumption/manufacturing/reports/2010/early_estimates.php"><img src="/consumption/manufacturing/reports/2010/images/acbfig1-lg.jpg" alt="bar chart" />Early-release estimates from the 2010 MECS show that energy consumption in the manufacturing sector decreased between 2006 and 2010</a></h3>
			<p><span class="release-dates">Release Date:</span> March 28, 2012</p>
			<p>Energy consumption in the U.S. manufacturing sector fell from 21,098 trillion Btu (tBtu) in 2006 to 19,062 tBtu in 2010, a decline of almost 10 percent, based on preliminary estimates released from the 2010 Manufacturing Energy Consumption Survey (MECS). This decline continues the downward trend in manufacturing energy use since the 1998 MECS report.</p>
		</div>
		<div class="l-col">
			<?php include('../includes/side-nav-manufacturing.inc'); ?>
		</div>
	</div>
	<?php include('global/footer/includes/footer.inc'); ?>
	<script src="/global/scripts/global.mecs.min.js"></script>
</body>

</html>