<?php
$locale = 'crudeoil';
$linkPage		= 'link01page';
$globalTitle 	= 'U.S. Energy Information Administration (EIA)';
$pageTitle 		= 'What drives crude oil prices: Spot Prices';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
	$(function() {
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
				<p>Crude oil is traded in a global market. Prices of the many crude oil streams produced globally tend to move
					closely together, although there are persistent differentials between light-weight, low-sulfur (light-sweet)
					grades and heavier, higher-sulfur (heavy-sour) crudes that are lower in quality.</p>
				<p>
				<div class="chart_r">
					<img src="<?php echo $rootPath; ?>/crudeoil/png/prices_crude.png">
					<div class="clear"></div>
					<div style="color:grey;font-size:10px;margin-left: 44px;">
						<?php 
							$chart = 'prices1';
							$updateDate = null;
							include(__DIR__ . '/data.php');
						?>
						Updated: Monthly | Last Updated: <?php echo $updateDate[0]['update_date']; ?>
					</div>
					</p>
					<div class="chart_desc">Many types of crude oil are produced around the world. Variations in quality and location
						result in price differentials, but because oil markets are integrated globally, prices tend to move together.
					</div>
				</div>
				<div class="clear"></div>
				<p>
				<div class="chart_r">
					<div class="chart_h">Crude oil prices are the primary driver of petroleum product prices</div>
					<?php include("includes/charts/prices_gasoline_crude.inc"); ?>
					<div class="clear"></div>
					<div class="chart_desc">Gasoline and crude oil prices tend to move together, with some episodes where gasoline
						breaks away, typically due to refinery outages or other downstream events.
					</div>
				</div>
				</p>
				<p>Both crude oil and petroleum product prices can be affected by events that have the potential to disrupt the flow
					of oil and products to market, including geopolitical and weather-related developments. These types of events may
					lead to actual disruptions or create uncertainty about future supply or demand, which can lead to higher
					volatility in prices. The volatility of oil prices is inherently tied to the low responsiveness or "inelasticity"
					of both supply and demand to price changes in the short run. Both oil production capacity and the equipment that
					use petroleum products as their main source of energy are relatively fixed in the near-term. It takes years to
					develop new supply sources or vary production, and it is very hard for consumers to switch to other fuels or
					increase fuel efficiency in the near- term when prices rise. Under such conditions, a large price change can be
					necessary to re-balance physical supply and demand following a shock to the system. </p>

				<p>Much of the world's crude oil is located in regions that have been prone historically to political upheaval, or
					have had their oil production disrupted due to political events. Several major oil price shocks have occurred at
					the same time as supply disruptions triggered by political events, most notably the Arab Oil Embargo in 1973-74,
					the Iranian revolution and Iran-Iraq war in the late 1970s and early 1980s, and Persian Gulf War in 1990. More
					recently, disruptions to supply (or curbs on potential development of resources) from political events have been
					seen in Nigeria, Venezuela, Iraq, Iran, and Libya.</p>

				<p>
				<div class="chart_r">
					<div class="chart_h">Crude oil prices react to a variety of geopolitical and economic events</div>
					<?php include("includes/charts/risk_factors.inc"); ?>
					<div class="clear"></div>
					<div class="chart_desc">Oil prices have responded to geopolitical and other events over the past 40 years. Events
						that disrupt supply or increase uncertainty about future oil supplies tend to drive up prices.
					</div>
				</div>
				</p>
				<p>Given the past history of oil supply disruptions emanating from political events, market participants are always
					assessing the possibility of future disruptions and their potential impacts. In addition to the size and duration
					of a potential disruption, they also consider the availability of crude stocks and the ability of other producers
					to offset a potential supply loss. For example, if the market has ample spare production capacity to offset a
					possible disruption, its likely impact on prices would be smaller than if spare production capacity was much
					lower. When there are significant concerns about the potential for a disruption at a time when spare capacity and
					inventories are not seen as sufficient to substantially offset the associated loss in supply, prices may be above
					the level that might be expected if only current demand and supply were considered, as forward-looking behavior
					adds a &quot;risk premium.&quot;</p>

				<p>Weather can also play a significant role in oil supply. Hurricanes in 2005, for example, shut down oil and
					natural gas production as well as refineries. As a result, petroleum product prices increased sharply as supplies
					to the market dropped. Severely cold weather can strain product markets as producers attempt to supply enough of
					the product, such as heating oil, to consumers in a short amount of time, resulting in higher prices. Other events
					such as refinery outages or pipeline problems can restrict the flow of oil and products, driving up prices.</p>

				<p>However, the influence of these types of factors on oil prices tends to be relatively short lived. Once the
					problem subsides and oil and product flows return to normal, prices usually return to previous levels.</p>
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