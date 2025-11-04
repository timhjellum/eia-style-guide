<?php
$locale 		= 'crudeoil';
$linkPage 	= 'link06page';
$globalTitle 	= 'U.S. Energy Information Administration (EIA)';
$pageTitle 		= 'What drives crude oil prices: Demand Non-OECD';
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
	<div class="blue_top"><a class="right <?php /* show_menu */ ?>" style="cursor:pointer;">&nbsp;</a></div>
	<div class="clear"></div>
	<?php /* BEGIN Page/Body Content */ ?>
	<div class="pagecontent mr_temp4">
		<?php /* BEGIN Main Column */ ?>
		<div class="main_col" style="margin-top:-20px;">
<h1><?=$pageTitle?></h1>
			<p>Oil consumption in developing countries that are not part of the <a
						href="/tools/glossary/index.php?id=O#org_econ_cd">Organization of Economic Cooperation and Development
					(OECD)</a> has risen sharply in recent years. While oil consumption in the OECD countries declined between
				2000 and 2010, non-OECD oil consumption increased more than 40 percent. China, India, and Saudi Arabia had the
				largest growth in oil consumption among the countries in the non-OECD during this period.
			<div class="chart_r">
				<div class="chart_h">Economic growth has a strong impact on oil consumption</div>
				<?php include("includes/charts/non_oecd_demand.inc"); ?>
				<div class="clear"></div>
				<div class="chart_desc">In this chart there is a strong relationship between GDP growth rates and growth in oil
					consumption in non-OECD countries. Since 2001, oil consumption in non-OECD countries declined only three times. Increased demand pressure due to economic growth
					overwhelmed any downward pressure on oil consumption due to higher prices.
				</div>
			</div>
			</p>
			<p>Rising oil consumption reflects rapid economic growth in these countries. Current and expected levels of
				economic growth heavily influence global oil demand and oil prices. Commercial and personal transportation
				activities, in particular, require large amounts of oil and are directly tied to economic conditions. Many
				manufacturing processes consume oil as fuel or use it as feedstock, and in some non-OECD countries, oil remains
				an important fuel for power generation. Because of these uses, oil prices tend to rise when economic activity
				and in turn oil demand is growing strongly. Many non-OECD countries are also experiencing rapid growth in
				population, which is an additional factor supporting strong oil consumption growth.
			<div class="chart_r">
				<div class="chart_h">Rising oil prices held down global oil consumption growth from 2005-2008 despite high
					economic growth
				</div>
				<?php include("includes/charts/nonoecd_demand_world.inc"); ?>

				<div class="chart_desc">In this chart, WTI price levels are graphed with changes in world GDP growth rates (as
					an indicator of underlying oil demand growth) and world oil consumption. Rising oil prices held down global
					oil consumption growth from 2005 to 2008, despite high economic growth.
				</div>
			</div>
			</p>
			<p>Structural conditions in each country's economy further influence the relationship between oil prices and
				economic growth. Developing countries tend to have a greater proportion of their economies in manufacturing
				industries, which are more energy intensive than service industries. Although transportation oil use is usually
				a smaller share of total oil consumption in non-OECD countries, this use tends to increase rapidly as expanding
				economies increase the need to move goods and people. Vehicle ownership per capita is also highly correlated
				with rising incomes and has much room to grow in non-OECD countries. For these reasons, non-OECD economic growth
				rates tend to be an important factor affecting oil prices. China's strong economic growth has recently resulted
				in that country becoming the largest energy consumer and second largest oil consumer in the world. In addition,
				China's rising oil consumption has been a major contributor to incremental growth in worldwide oil consumption.
				EIA projects that virtually all the net increase in oil consumption in the next 25 years will come from non-OECD
				countries.</p>
			<p>Although oil use is clearly tied to economic activity, energy policies also significantly affect that
				relationship. Many developing countries, for example, control or subsidize end-use prices, which inhibits
				consumer response to market price changes. This reduced demand response to price changes further contributes to
				the importance of economic growth as a key driver of non-OECD demand and in turn global oil prices.</p>
			<p>While current oil consumption is primarily related to current economic activity, changes in the outlook for
				future economic conditions can also have an immediate impact on oil prices. For example, an improvement in the
				economic outlook would tend to increase the chance that oil markets will tighten in the future, resulting in
				higher expected future oil prices. This change in expectations would be reflected in higher oil futures prices.
				This rise in futures prices increases the incentive to hold inventories, which in turn decreases available
				current supply and tends to raise current prices.</p>
			<div class="chart_r">
				<div class="chart_h">Changes in expectations of economic growth can affect oil prices</div>
				<?php /* Once a year update: Change the SQL statement for the growth_asia query located in the finance/markets/crudeoil/data.php file */ ?>
				<?php include("includes/charts/non_oecd_expectation.inc"); ?>

				<div class="chart_desc">Oil markets often respond to changing expectations of future supply and demand. This
					chart shows how projections of economic growth in Non-OECD changed over time for various forecast years.
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
<?php /* END Outer Wrapper */ ?>
</body>
</html>