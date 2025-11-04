<?php $locale = 'petprod'; ?>
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


	<script type="text/javascript" src="../includes/efmi.js"></script>
	<script>
		$(function () {
			$('.hide_menu').removeClass("hide_menu").addClass("show_menu");
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
			<h1>What drives petroleum product prices: Prices and Crack Spreads</h1>
			<p>Gasoline is the most widely used petroleum product in the United States. Although gasoline is traded globally
				and priced at various locations around the world, all these prices tend to move together in the long run because
				gasoline can be transported between markets, thereby linking their supply and prices. Differences in absolute
				price levels as well as short-term price changes across the world reflect varying gasoline specifications,
				refinery maintenance schedules, unplanned refinery outages, transportation constraints, peak consumption
				seasons, as well as regional inventory levels.</p>

			<p>
			<div class="chart_r">
				<div class="chart_h">Gasoline spot prices in different regions of the world generally move together</div>

				<img src="<?php echo $rootPath; ?>/products/png/spotprices_gas.png" alt="Gasoline spot prices">
				<div class="clear"></div>
				<div style="color:grey;font-size:10px;margin-left: 44px;">
						<?php 
							$chart = 'spotprices_gas';
							$updateDate = null;
							include(__DIR__ . '/data.php');
						?>
						Updated: Monthly | Last Updated: <?php echo $updateDate[0]['update_date']; ?>
				</div>
			</div>
			</p>
			<p>Distillate is also traded globally and priced in various regions around the world. Like the disparity in
				gasoline prices, the disparity in distillate prices primarily reflects differences in quality, primary uses,
				seasonal consumption, and local market factors.
			</p>
			<p>
			<div class="chart_r">
				<div class="chart_h">Distillate spot prices in different regions of the world generally move together</div>

				<img src="<?php echo $rootPath; ?>/products/png/spotprices_diesel.png" alt="Distillate spot prices">
				<div class="clear"></div>
				<div style="color:grey;font-size:10px;margin-left: 44px;">
						<?php 
							$chart = 'spotprices_diesel';
							$updateDate = null;
							include(__DIR__ . '/data.php');
						?>
						Updated: Monthly | Last Updated: <?php echo $updateDate[0]['update_date']; ?>
				</div>
			</div>
			</p>
			<p>In addition to trading physical quantities of petroleum products, market participants can also use futures
				contracts to buy or sell gasoline and distillate for future delivery, or to hedge or speculate on future price
				movements. Since 2006, the underlying commodity for the gasoline futures contract has been reformulated
				blendstock for oxygenate blending (RBOB), the petroleum component of gasoline in many areas of the country prior
				to the addition of ethanol to produce finished gasoline. </p>
			<p>Since the spring of 2013, the underlying commodity for the distillate futures contract has been ultra-low
				sulfur diesel (ULSD), a distillate with sulfur content of less than 15 parts per million (ppm). Prior to this
				change, the underlying commodity for the distillate futures contract was allowed to have sulfur content up to
				2,000 ppm, reflecting the type of distillate commonly used for home heating purposes.
			</p>
			<p>
			<div class="chart_r">
				<div class="chart_h">Gasoline contracts traded in futures markets use RBOB as the underlying commodity</div>

				<img src="<?php echo $rootPath; ?>/products/png/rbob_futures_crack_spread.png" alt="RBOB prices">
				<div class="clear"></div>
				<div style="color:grey;font-size:10px;margin-left: 44px;">
						<?php 
							$chart = 'rbob_futures_crack_spread';
							$updateDate = null;
							include(__DIR__ . '/data.php');
						?>
						Updated: Monthly | Last Updated: <?php echo $updateDate[0]['update_date']; ?>
				</div>
			</div>
		</div>
		</p>
		<p><a href="http://www.eia.gov/todayinenergy/detail.php?id=1630">Crack spreads</a>, which represent the price
			difference between products and crude oil, can be used to determine the relative value of various petroleum
			products for refineries to produce. Crack spreads vary by product and can rise or fall depending on the time of
			year and on market conditions. </p>
		<p>
		<div class="chart_r">
			<div class="chart_h">Since 2013, distillate contracts traded in futures markets use ULSD as the underlying
				commodity
			</div>

			<img src="<?php echo $rootPath; ?>/products/png/ulsd_futures_crack_spread.png" alt="Distillate ptices and crack spread">
			<div class="clear"></div>
			<div style="color:grey;font-size:10px;margin-left: 44px;">
						<?php 
							$chart = 'ulsd_futures_crack_spread';
							$updateDate = null;
							include(__DIR__ . '/data.php');
						?>
						Updated: Monthly | Last Updated: <?php echo $updateDate[0]['update_date']; ?>
			</div>
		</div>

		</p>
		<h1> Seasonality </h1>
		<p> Petroleum product crack spreads often exhibit seasonality. During the summer months, the underlying commodity of
			the RBOB front month contract is required to be gasoline with a lower <a
					href="http://www.eia.gov/todayinenergy/detail.php?id=11031">Reid vapor pressure</a> (RVP) specification, a
			more expensive type of gasoline to refine. Starting March 1, RBOB futures prices tend to increase several cents
			from February averages to reflect the higher valued commodity. This, in turn, is reflected in a higher crack
			spread. The crack spread continues to remain fairly high through the late spring and into the summer months as the
			U.S. driving season picks up, resulting in higher domestic demand for the product. On September 1, the underlying
			commodity of the RBOB front month contract reverts back to a higher RVP specification, representing a lower-cost
			gasoline. The gasoline crack spread declines to reflect the lower price of gasoline. </p>
		<p>
		<div class="chart_r">
			<div class="chart_h">The value of gasoline exhibits seasonality due to increased consumption and changes in
				specifications during the summer
			</div>

			<img src="<?php echo $rootPath; ?>/products/png/rbob_brent_range.png" alt="RBOB - Brent crack spread">
			<div class="clear"></div>
			<div style="color:grey;font-size:10px;margin-left: 44px;">
						<?php 
							$chart = 'rbob_brent_range';
							$updateDate = null;
							include(__DIR__ . '/data.php');
						?>
						Updated: Monthly | Last Updated: <?php echo $updateDate[0]['update_date']; ?>
			</div>
		</div>
		</p>
		<p> As domestic gasoline consumption declines during the winter months, distillate consumption historically rises as
			consumers in the United States, particularly in the U.S. northeast, use distillate for heating purposes. With the
			increased demand, distillate crack spreads are usually highest from October to February. </p>
		<p>
		<div class="chart_r">
			<div class="chart_h">The value of distillate exhibits seasonality due to increased domestic consumption in the
				winter months
			</div>

			<img src="<?php echo $rootPath; ?>/products/png/heat_brent_range.png" alt="distillte - Brent crack spread ranges">
			<div class="clear"></div>
			<div style="color:grey;font-size:10px;margin-left: 44px;">
						<?php 
							$chart = 'heat_brent_range';
							$updateDate = null;
							include(__DIR__ . '/data.php');
						?>
						Updated: Monthly | Last Updated: <?php echo $updateDate[0]['update_date']; ?>
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
