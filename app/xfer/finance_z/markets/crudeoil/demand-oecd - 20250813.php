<?php
$locale 		= 'crudeoil';
$linkPage 	= 'link07page';
$globalTitle 	= 'U.S. Energy Information Administration (EIA)';
$pageTitle 		= 'What drives crude oil prices: Demand OECD';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<?php
	$doNotIncludeHighcharts = true;
	include("global/includes/eia_head_info.inc");
	include('../includes/header_efmi.inc');
	include('../includes/highcharts.inc');
	?>

	<link rel="stylesheet" href="includes/efmi.css" type="text/css">
	<!--[if IE 7]>
	<style type="text/css">
		#bubble2 li {
			display: inline;
		}
	</style>
	<![endif]-->
	<script type="text/javascript" src="../includes/efmi.js"></script>
	<script>
		$(function () {
			$('#efmi_ui').show();
		});
	</script>
	<?php if (!isset($no_titling)) include "global/includes/titling.inc"; ?>
</head>

<body>
<?php /* BEGIN Outer Wrapper */ ?>
<div id="outerX">
	<?php
	include('global/includes/eia_header.inc');
	include("includes/dashboard.inc");
	?>
	<div class="blue_top"><a class="right <?php /*show_menu*/ ?>" style="cursor:pointer;">&nbsp;</a></div>
	<div class="clear"></div>
	<?php /* BEGIN Page/Body Content */ ?>
	<div class="pagecontent mr_temp4">
		<?php /* BEGIN Main Column */ ?>
		<div class="main_col" style="margin-top:-20px;">
			<h1><?=$pageTitle?></h1>
			<p>The <a href="/tools/glossary/index.php?id=O#org_econ_cd">Organization of Economic Cooperation and Development
					(OECD)</a> consists of the United States, much of Europe, and other industrialized countries. At 46 percent of world 
				oil consumption in 2021, these large economies consume less oil than the non-OECD countries, and have low or declining 
				oil consumption growth. Oil consumption in the OECD countries peaked in 2005, whereas non-OECD consumption rose more 
				than 50 percent since then.
			<div class="chart_r">
				<div class="chart_h">In OECD countries, price increases have coincided with lower <br/>consumption</div>
				<?php include("includes/charts/oecd_demand.inc"); ?>
				<div class="clear"></div>

				<div class="chart_desc">In contrast to non-OECD countries, oil consumption in OECD countries fell from 2006-2009
					after prices rose, and declined significantly during the economic downturn. Due in part to their relatively
					slower economic growth and more mature transportation sectors, the impact of prices on OECD consumption has
					been more evident than for non-OECD countries.
				</div>
			</div>
			</p>
			<p>Structural conditions in each country's economy influence the relationships among oil prices, economic growth,
				and oil consumption. Developed countries tend to have higher vehicle ownership per capita. Because of this, oil
				use within the OECD transportation sector usually accounts for a larger share of total oil consumption than in
				non-OECD countries; it is also more mature and slower-growing. Economic conditions and policies that affect the
				transport of goods and people thus have a significant impact on total oil consumption in OECD countries. Many
				OECD countries have higher fuel taxes and policies to improve the fuel economy of new vehicles and increase the
				use of biofuels. This tends to slow the growth in oil consumption even in times of strong economic growth.
				Furthermore, the economies in OECD countries tend to have larger service sectors relative to manufacturing. As a
				result, strong economic growth in these countries may not have the same impact on oil consumption as it would in
				non-OECD countries.</p>
			<p>OECD countries tend to have fewer subsidies on end-use prices, so changes in market oil prices are often
				quickly reflected in prices faced by consumers. However, it takes time for people to adjust their transportation
				routines and for the vehicle stock to turn over and become more energy-efficient in response to price
				changes.</p>
			<p>Changes in expected future oil prices also affect consumers' decisions concerning modes of transportation and
				vehicle purchases. If prices are expected to remain high or increase in the future, more consumers may decide to
				purchase more fuel efficient vehicles or use public transportation. Decisions like these help to reduce future
				oil demand and would tend to moderate expected price increases.</p>
			<div class="chart_r">
				<div class="chart_h">Rising oil prices held down global oil consumption growth from 2005-2008 despite high
					economic growth
				</div>
				<?php include("includes/charts/nonoecd_demand_world.inc"); ?>
				<div class="clear"></div>

				<div class="chart_desc">In this chart, WTI price levels are graphed with changes in world GDP growth rates (as
					an indicator of underlying oil demand growth) and world oil consumption. Rising oil prices held down global
					oil consumption growth from 2005 to 2008, despite high economic growth.
				</div>
			</div>
			</p>
		</div>
		<div class="clear"></div>
		<?php /* END Main Column */ ?>
	</div>
	<?php /* END Page/Body Content */ ?>
	<?php include("global/includes/eia_footer.inc"); ?>
</div>
<?php /*END Outer Wrapper */ ?>
</body>
</html>
