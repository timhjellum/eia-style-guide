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

			<h1>What drives petroleum product prices: Consumption</h1>
			<p class="para">
				Countries outside of the Organization for Economic Cooperation and Development (OECD) drove increases in global
				demand for petroleum products in recent years. In aggregate, non-OECD countries consumed more petroleum products
				than OECD countries for the first time in 2014. Global distillate consumption tends to rise as developing
				countries show robust economic growth because their economies tend to be driven by industry and manufacturing
				rather than services. Distillate consumption can slow if economic growth expectations decline or as more
				countries move towards a more services-oriented economy. As many non-OECD countries continue to develop, their
				economies tend to be driven by industry rather than services. This trend has led to an increase in global
				distillate demand, and worldwide consumption of distillate is now the highest of any of the petroleum products.
			</p>
			<div class="chart_r">
				<div class="chart_h">Distillate consumption has mostly outpaced gasoline demand globally since 2000</div>
				<?php include("includes/charts/product_demand.inc"); ?>
			</div>
			</p>
			<p class="para">
				Gasoline is the most consumed petroleum product in the United States and is used primarily as a transportation
				fuel. Gasoline consumption is affected by a variety of factors including gasoline prices, disposable income,
				employment, weather, <a href="http://www.eia.gov/forecasts/aeo/MT_transportation.php#miles_traveled">vehicle
					miles traveled</a>, as well as <a href="http://www.eia.gov/todayinenergy/detail.php?id=13351">regulations on
					fuel economy</a>.
			</p>
			</p>
			<div class="chart_r">
				<div class="chart_h">Gasoline is the most consumed petroleum product in the United States</div>
				<?php include("includes/charts/consumption_gas_retail.inc"); ?>
			</div>
			</p>

			<p class="para">Distillate is the second-most consumed petroleum product in the United States. In addition to its use as a
				transportation fuel, distillate is also consumed for heating and power generation purposes. Distillate's use as
				a heating fuel drives the seasonal pattern of higher consumption during the winter months. Distillate
				consumption is affected by economic growth and weather conditions as well as vehicle efficiency and miles
				traveled of heavy-duty vehicles.</p>
			<div class="chart_r">
				<div class="chart_h">Distillate is used for heating, power generation, and as a transportation fuel</div>
				<?php include("includes/charts/consumption_distillate_retail.inc"); ?>
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