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
			<h1>What drives petroleum product prices: Trade</h1>
			<p>With <a href="http://www.eia.gov/todayinenergy/detail.php?id=20572">significant increases in U.S. crude oil
					production</a> and higher refinery runs, increased production of petroleum products reduced the reliance on
				oil imports to meet domestic demand. In the fourth quarter of 2012, the United States became a net exporter of
				gasoline after historically being a net importer. Since then, the United States has often been a net exporter of
				gasoline during the winter months. <a href="http://www.eia.gov/todayinenergy/detail.php?id=4890">PADD</a> 3 has
				consistently been a net exporter of gasoline since the third quarter of 2009. However, PADD 1 remains a net
				importer because of transportation constraints in moving petroleum products from the U.S. Gulf Coast to the U.S
				East Coast.
			<div class="chart_r">
				<div class="chart_h">The United States imported a significant amount of gasoline prior to 2012</div>
				<?php include("includes/charts/gasoline_net_imports.inc"); ?>
			</div>
			</p>
			<p>
			<div class="chart_r">
				<div class="chart_h">Most of the gasoline exports from the United States originate from PADD 3</div>
				<?php include("includes/charts/gasoline_net_imports_by_padd.inc"); ?>
			</div>
			</p>
			<p>The United States became a net exporter of distillate in the fourth quarter of 2007, five years before the
				first time the United States was a net gasoline exporter. Diesel, a type of distillate, is the primary
				transportation fuel source in much of the world, unlike in the United States, providing U.S. refiners with
				international consumers year-round. PADD 3 has been a net exporter of distillate since the third quarter of
				2001. PADD 1 is typically a net importer of distillate, while PADD 5 has usually been a net exporter of
				distillate since 2007.
			<div class="chart_r">
				<div class="chart_h">The United States became a net exporter of distillate at the end of 2007</div>
				<?php include("includes/charts/distillate_fuel_net_imports.inc"); ?>
			</div>
			</p>
			<p>
			<div class="chart_r">
				<div class="chart_h">Most of the distillate exports from the United States originate from PADD 3</div>
				<?php include("includes/charts/distillate_oil_net_imports.inc"); ?>
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