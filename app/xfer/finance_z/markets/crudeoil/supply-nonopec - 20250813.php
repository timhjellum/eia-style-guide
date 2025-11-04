<?php
$locale			= 'crudeoil';
$linkPage 	= 'link02page';
$globalTitle 	= 'U.S. Energy Information Administration (EIA)';
$pageTitle 		= 'What drives crude oil prices: Supply Non-OPEC';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<?php
	$doNotIncludeHighcharts = true;
	include("global/includes/eia_head_info.inc");
	include('../includes/header_efmi.inc');
	include('../includes/highcharts.inc');
	?>
	<link rel="stylesheet" href="includes/efmi.css" type="text/css">

	<script type="text/javascript" src="../includes/efmi.js"></script>
	<script>
		$(function () {
			$('#efmi_ui').show();
		});
	</script>
	<?php if (!isset($no_titling)) include "global/includes/titling.inc"; ?>
</head>
<body>
<?php /*  BEGIN Outer Wrapper  */ ?>
<div id="outerX">
	<?php
	include('global/includes/eia_header.inc');
	include("includes/dashboard.inc");
	?>
	<div class="blue_top"><a class="right <?php /* show_menu */ ?>" style="cursor:pointer;">&nbsp;</a></div>
	<div class="clear"></div>
	<?php /*  BEGIN Page/Body Content  */ ?>
	<div class="pagecontent mr_temp4">
		<?php /*  BEGIN Main Column  */ ?>
		<div class="main_col" style="margin-top:-20px;">
<h1><?=$pageTitle?></h1>

			<p>Oil production from countries outside the <a href="/tools/glossary/index.php?id=O#opec">Organization of the
					Petroleum Exporting Countries (OPEC)</a> currently represents about 60 percent of world oil production. Key
				centers of non-OPEC production include North America, regions of the former Soviet Union, and the North Sea.
			<div class="chart_r">
				<div class="chart_h">Changes in non-OPEC production can affect oil prices</div>
				<?php include("includes/charts/non_opec_production.inc"); ?>
				<div class="clear"></div>

				<div class="chart_desc">This chart shows that net increases in non-OPEC production were very small from 2005 to
					2008. This lack of additional supplies from non-OPEC countries contributed to tighter markets in this period.
				</div>
			</div>
			</p>

			<p>In contrast to OPEC oil production, which is subject to central coordination, non-OPEC producers make
				independent decisions about oil production. Also, in contrast to OPEC, where oil production is mostly in the
				hands of national oil companies (NOCs), international or investor-owned oil companies (IOCs) perform most of the
				production activities in non-OPEC countries. IOCs seek primarily to increase shareholder value and make
				investment decisions based on economic factors. While some NOCs operate in a similar manner as IOCs, many have
				additional objectives such as providing employment, infrastructure, or revenue that impact their country in a
				broader sense. As a result, non-OPEC investment, and thus future supply capability, tends to respond more
				readily to changes strictly in market conditions.</p>
			<p>Producers in non-OPEC countries are generally regarded as price takers, that is, they respond to market prices
				rather than attempt to influence prices by managing production. As a result, non-OPEC producers tend to produce
				at or near full capacity and so have little spare capacity. Other things being equal, lower levels of non-OPEC
				supply tend to put upward pressure on prices by decreasing total global supply and increasing the &quot;call on
				OPEC.&quot; The greater the call on OPEC, the greater is its likely ability to influence prices.</p>
			<div class="chart_r">
				<div class="chart_h">The years 2003-2008 experienced periods of very strong economic and oil demand growth, slow
					supply growth and tight spare capacity
				</div>
				<?php include("includes/charts/world_capacity.inc"); ?>
				<div class="clear"></div>

				<div class="chart_desc">In this chart, WTI price levels are graphed with world GDP growth rates (as an indicator
					of global oil demand growth) and quarterly changes in world capacity, defined as OPEC capacity plus non-OPEC
					production (as an indicator of global oil supply growth). From 2005 to 2008, economic growth remained strong
					while oil production capacity grew slowly and even declined in some quarters. The tight market conditions put
					upward pressure on oil prices.
				</div>
			</div>
			</p>
			<p>Non-OPEC production occurs largely in areas that have relatively high finding and production costs, as most of
				the lower cost conventional oil resources are in OPEC member countries. Non-OPEC producers have therefore led
				the way into frontier areas such as the deepwater offshore, and pursued unconventional sources such as oil
				sands. As a result, non-OPEC production usually has a cost disadvantage compared to OPEC production.</p>
			<p>Non-OPEC producers have often led in developing new production technology. While this has sometimes resulted in
				the development of higher-cost supplies, costs often fall as technology advances, which can ultimately put
				downward pressure on prices.</p>
			<p>In addition to non-OPEC crude oil production, natural gas production provides additional supplies of liquids,
				called natural gas liquids (NGLs). Rising natural gas production in recent years has resulted in substantial
				increases in NGLs. This has contributed to total world liquids supply and helped to mitigate price
				increases.</p>
			<p>While increases in non-OPEC supply contribute to lower oil prices, disruptions of non-OPEC production reduce
				global oil supply and can lead to higher oil prices. These unplanned outages can persist for long periods of
				time. The uncertainty about when the production will return to markets further adds to price volatility.</p>
			<div class="chart_r">
				<div class="chart_h">Unplanned supply disruptions tighten world oil markets and push prices higher</div>
				<?php include("includes/charts/non_opec_supply_expectation.inc"); ?>
				<div class="clear"></div>

				<div class="chart_desc">This chart shows EIA's monthly estimates of unplanned, global supply outages. Estimated
					unplanned disruptions reflect the level of volumes shut-in, accounting for effective production capacity.
				</div>
			</div>

			<p>Oil prices are not only affected by actual non-OPEC production, but also by changes in expectations about
				future non-OPEC supply. From 2005 through 2008, final production reports for non-OPEC production were
				consistently lower than forecast expectations. This reduction in anticipated production forced the world to
				unexpectedly rely more heavily on OPEC crude, drawing down their levels of spare capacity. The downward
				revisions in expectations of non-OPEC production contributed to upward pressure on oil prices.</p>
			<div class="chart_r">
				<div class="chart_h">Non-OPEC supply expectations indicate changes in market sentiment concerning oil supply
				</div>
				<?php include("includes/charts/expectations.inc"); ?>
				<div class="clear"></div>

				<div class="chart_desc">Projections of non-OPEC production were adjusted downward throughout 2008 as reports of
					actual production were less than expected. The opposite occurred in 2009 and 2010. Other things equal, if
					supply is less than expected, or if demand is greater than expected, prices tend to increase. The net impact
					of changing supply and demand expectations on prices ultimately depends on the relative balance of the
					changes.
				</div>
			</div>

			</p>
		</div>
		<div class="clear"></div>
		<?php /*  END Main Column  */ ?>
	</div>
	<?php /*  END Page/Body Content  */ ?>
	<?php include("global/includes/eia_footer.inc"); ?>
</div>
<?php /* END Outer Wrapper  */ ?>
</body>
</html>