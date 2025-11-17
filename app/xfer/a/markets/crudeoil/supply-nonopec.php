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

			<p class="para">In 2024, countries outside of the&nbsp;<a href="https://www.eia.gov/tools/glossary/index.php?id=O#opec">Organization of the Petroleum  Exporting Countries (OPEC)</a>&nbsp;accounted  for 65% of global crude oil production, with the Americas, Russia,  and the North Sea as key production centers.</p> 
			<p class="para">Non-OPEC crude supply has a direct impact on crude oil prices. When non-OPEC countries increase production, it generally lowers prices by increasing the total global supply. The opposite happens when they decrease production. However, the magnitude of this impact varies based on factors such as the scale of non-OPEC supply changes, global oil demand strength, OPEC’s response, and the cost of non-OPEC production. </p>
			<p class="para">Unlike OPEC, where crude oil production is centrally coordinated, non-OPEC producers operate independently, making their own decisions about output. Also, while OPEC production is mainly controlled by national oil companies, international or investor-owned oil companies (IOCs) dominate production in non-OPEC countries. </p>
			<p class="para">Driven primarily by the goal of increasing shareholder value, these IOCs base their investment decisions on economic factors and market conditions. Although some national oil companies may operate similarly, many have additional objectives tied to national interests, such as job creation, infrastructure development, or government revenue generation. As a result, investment in non-OPEC production, and therefore its potential to supply oil in the future, tends to be more responsive to shifts in market dynamics.</p>
			<p class="para">Non-OPEC producers usually operate as price takers, reacting to market prices rather than attempting to influence prices by managing their production. This often leads them to produce at or near full capacity, resulting in limited spare capacity. Other things being equal, lower non-OPEC supply tends to push prices up by reducing total global supply of crude and increasing the "call on OPEC”, meaning how much crude the world needs OPEC to supply. The greater the call on OPEC, the more influence it has on prices. </p>
			<p class="para"><img src="images/Supply_nonOPEC_01.svg" alt="Tight market conditions –strong global oil demand growth coupled with low or falling oil production capacity– from 2003 to 2008 put upward pressure on oil prices"/></p>
			<p style="font-size: 80%;">Data source: U.S. Energy Information Administration, Refinitiv An LSEG Business, Oxford Economics<br>
			Note: Global liquid fuels production capacity defined as OPEC capacity plus non-OPEC production  
			</p>
			<p class="para">Non-OPEC production occurs largely in areas with relatively high costs for finding and producing oil, since most of the cheaper conventional oil is in OPEC countries. Because of this, non-OPEC producers have been pioneers in exploring challenging areas like deepwater offshore and unconventional sources like oil sands and shale oil. As a result, non-OPEC production usually has a cost disadvantage compared to OPEC production.</p>
		<p class="para">Non-OPEC producers have frequently led the way in developing new production technologies. While this has sometimes resulted in the development of higher-cost supplies, costs often fall as technology advances, which can ultimately put downward pressure on prices. Technological advancements, particularly in areas like oil extraction from shale formations (fracking) in countries like the United States, have significantly boosted non-OPEC production in recent years. These advancements have made it economically viable to extract oil from previously inaccessible sources, further increasing non-OPEC supply and impacting global oil prices. </p>
		<p class="para">In addition to crude oil, non-OPEC countries also produce natural gas, which yields <a href="https://www.eia.gov/tools/glossary/index.php?id=Natural%20Gas%20Liquids">natural gas liquids</a> (NGLs) as a byproduct. Increased natural gas production has resulted in substantial increases in NGL supply. This has contributed to total world liquids supply and helped to moderate price increases.</p>
		<p class="para">While increased non-OPEC supply contributes to lower oil prices, disruptions to non-OPEC production can reduce global oil supply and lead to higher prices. These unplanned outages can last for extended periods, and the uncertainty about when production will return to the market adds to price volatility.</p>
		<p class="para"><img src="images/Supply_nonOPEC_02.svg" alt="Unplanned supply disruptions tighten global oil markets, pushing oil prices higher
"/></p>
		<p style="font-size: 80%;">Data source: U.S.  Energy Information Administration, <a href="https://www.eia.gov/outlooks/steo/data/browser/"><em>Short-Term Energy Outlook</em></a><br>
			Note: Chart  data shows EIA&rsquo;s monthly estimates of unplanned, global supply outages.  Unplanned disruptions reflect the level of volumes shut-in, accounting for  effective production capacity. </p>
		<p class="para">Oil prices are affected not only by current non-OPEC production but also by expectations about future non-OPEC supply. If traders and investors anticipate a significant increase in non-OPEC production, they may adjust their positions, leading to downward pressure on prices even before the increased supply materializes. </p>	
			
			


</div>
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