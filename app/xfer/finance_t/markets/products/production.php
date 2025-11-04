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
			<h1>What drives petroleum product prices: Production </h1>
			<p>Refineries produce a wide range of petroleum products when processing crude oil. More complex refineries can
				upgrade some of the volume of heavier or lower-quality streams into more valuable products such as gasoline or
				distillate. Some refineries also have a degree of flexibility with respect to the volume of gasoline versus
				distillate produced. Price signals can influence short-term production decisions as well as long-term
				investments that may influence the type of petroleum product produced. Total production of refinery products
				increased starting in 2013 as U.S. refineries process more crude oil, invest in additional processing units to
				upgrade products, and expand into international markets. The net increase in production has been driven by large
				increases in motor gasoline and distillate, despite decreases in products such as residual fuel oil.
			<div class="chart_r">
				<div class="chart_h">Gasoline typically makes up about half of U.S. refinery production</div>
				<div class="chart_h"></div>
				<?php include("includes/charts/gasoline_refinery_output.inc"); ?>
				<div class="clear"></div>
			</div>
			</p>
			<p>
			<div class="chart_r">
				<div class="chart_h">Distillate is the second largest product produced by U.S. refiners</div>
				<div class="chart_h"></div>
				<?php include("includes/charts/distillate_refinery_output.inc"); ?>
				<div class="clear"></div>

			</div>
			</p>
			<p>
			<div class="chart_r">
				<div class="chart_h">Some refineries can modify the volume of gasoline and distillate produced</div>
				<?php include("includes/charts/refinery_output.inc"); ?>
				<div class="clear"></div>
				<!-- <div class="chart_desc"></div>-->
			</div>
			</p>
			<p>
			<div class="chart_r">
				<div class="chart_h">Price changes can influence refinery production decisions</div>

				<img src="<?php echo $rootPath; ?>/products/png/production_futures_prices.png">
				<div class="clear"></div>
				<div style="color:grey;font-size:10px;margin-left: 44px;">
					Updated: Annual | Last Updated: <?php 
					$chart = "production_futures_prices";
					include("data.php");
					echo $updateDate[0]['update_date'];  ?>
				</div>
				<div class="chart_desc">The distillate and gasoline futures price spread was calculated using an average of the
					1st, 2nd, and 3rd contract month future spreads during each year
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
