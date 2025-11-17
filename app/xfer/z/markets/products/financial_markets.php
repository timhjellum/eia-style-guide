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
			<h1>What drives petroleum product prices: Financial Markets</h1>
			<p class="para">
				Gasoline and distillate both have futures contracts for delivery in New York Harbor on the New York Mercantile
				Exchange (Nymex). Since 2007, open interest (the number of contracts in a trading session that have not been
				settled or closed) and trading volume in these contracts increased for both products.

				<div class="chart_r">
					<div class="chart_h">Open interest in gasoline and distillate futures contracts increased as more participants
						entered the market
					</div>
					<img src="<?php echo $rootPath; ?>/products/png/avg_interest.png" alt="Open interest in gasoline and distillate futures contracts increased as more participants entered the market ">
					<div class="clear"></div>
					<div style="color:grey;font-size:10px;margin-left: 44px;">
						<?php 
							$chart = 'avg_interest';
							$updateDate = null;
							include(__DIR__ . '/data.php');
						?>
						Updated: Quarterly | Last Updated: <?php echo $updateDate[0]['update_date']; ?>
					</div>
			<p class="para">
		</div>
		<div class="chart_r">
			<div class="chart_h">Trading volumes of gasoline and distillate futures contracts grew substantially over the past
				decade
			</div>
			<img src="<?php echo $rootPath; ?>/products/png/avg_volume.png" alt="Trading volumes of gasoline and distillate futures contracts grew substantially over the past decade ">
			<div class="clear"></div>
			<div style="color:grey;font-size:10px;margin-left: 44px;">
				<?php 
					$chart = 'avg_volume';
					$updateDate = null;
					include(__DIR__ . '/data.php');
				?>
				Updated: Quarterly | Last Updated: <?php echo $updateDate[0]['update_date']; ?>
			</div>
			<p class="para">
		</div>
		</p>
		<p class="para">
			The Commodity Futures Trading Commission publishes a weekly activity report, the Commitment of Traders Report, on
			oil and petroleum product open interest on exchanges (e.g., Nymex). In this report, the activities of multiple
			trading categories are detailed, including physical participants (producers, merchants, processors, and end
			users), money managers (usually hedge funds or other sophisticated traders), and swap dealers (traditionally
			investment banks or commodity broker/dealers). Money managers generally tend to be net long&mdash;more futures
			contracts are bought rather than sold&mdash;on RBOB and ULSD futures, though significant changes in market
			expectations of demand and supply for these products can push overall positions to be net short.
		</p>
		<p class="para">
		<div class="chart_r">
			<div class="chart_h">Money managers' net positions in RBOB and ULSD futures trading</div>
			<?php include("includes/charts/exchange_traded_futures.inc"); ?>
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
