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
			<p class="para">Crude oil demand in countries outside  the <a href="https://www.eia.gov/tools/glossary/index.php?id=O#org_econ_cd">Organization of Economic Cooperation  and Development (OECD)</a>&nbsp;plays a significant and growing role in driving global crude  prices. Developing non-OECD countries, particularly those in Asia, have  experienced rapid economic growth in recent decades. This growth has fueled a  surge in demand for crude oil and petroleum products to power the burgeoning  transportation, industrial, and manufacturing sectors.</p>             
		<p class="para"><img src="images/Demand_non-OECD_chart-01.svg" alt="Rapid economic growth in non-OECD countries has driven the rise in global crude oil demand"/></p>
		  <p style="font-size: 80%;">Data source: U.S. Energy Information Administration, <a href="https://www.eia.gov/outlooks/steo/data/browser/"><em>Short-Term Energy Outlook</em></a></p>
		  <p class="para">Oil consumption in OECD countries fell  from 2000 to 2024. In contrast, oil consumption in non-OECD countries doubled during  that period. The jump in non-OECD oil consumption reflects the rapid economic  growth in these countries. Transportation, in particular, requires large  amounts of oil and is directly tied to economic activity. Many manufacturing  processes consume crude oil as fuel or use it as feedstock, and in some  non-OECD countries, oil remains an important fuel for power generation. Consequently,  oil prices tend to rise when economic activity, and in turn oil demand, is  growing strongly. Many non-OECD countries are also experiencing rapid growth in  population, which is an additional factor supporting strong oil consumption  growth.</p>
          <p class="para">Structural conditions in each  country's economy further influence the relationship between oil prices and  economic growth. Developing countries tend to have a greater proportion of  their economies in manufacturing, which is more energy intensive than service-based  industries. Although transport-related oil use is usually a smaller share of  total oil consumption in non-OECD countries, this use tends to increase rapidly  as expanding economies increase the need to move goods and people. Vehicle  ownership per capita is also highly correlated with rising incomes and has much  room to grow in non-OECD countries. For these reasons, non-OECD economic growth  rates tend to be an important factor affecting oil prices. </p>
          <p class="para">Energy policies also significantly  affect the relationship between oil consumption and economic activity. Some developing  countries, for example, control or subsidize end-use prices, dampening consumer  responsiveness to price fluctuations. This reduced demand response to price  changes further contributes to the importance of economic growth as a key  driver of non-OECD demand and in turn global oil prices.</p>
          <p class="para">Although current oil consumption is  primarily related to current economic activity, changes in the outlook for  future economic conditions can also have an immediate impact on oil prices. For  example, an improvement in the economic outlook would tend to increase the  chance that oil markets will tighten in the future, resulting in higher  expected future oil prices. This change in expectations would be reflected in  higher oil futures prices. This rise in futures prices increases the incentive  to hold inventories, which in turn decreases the available current supply and  tends to raise current prices.</p>

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