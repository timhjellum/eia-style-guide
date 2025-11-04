<div class="l-row l-full-width-col">
	<div class="l-col article">
		<h1>
			<?=$pageTitle?>
		</h1>
        <p>Refineries produce a wide range of petroleum products when processing crude oil. More complex refineries can upgrade some of the volume of heavier or lower-quality streams into more valuable products such as gasoline or distillate. Some refineries also have a degree of flexibility with respect to the volume of gasoline versus distillate produced. Price signals can influence short-term production decisions as well as long-term investments that may influence the type of petroleum product produced. Total production of refinery products increased starting in 2013 as U.S. refineries process more crude oil, invest in additional processing units to upgrade products, and expand into international markets. The net increase in production has been driven by large increases in motor gasoline and distillate, despite decreases in products such as residual fuel oil.
		<div class="chart_r">
			<div class="chart_h">Gasoline typically makes up about half of U.S. refinery production</div>
			<div class="chart_h"></div>
			<?php include("includes/charts/gasoline_refinery_output.inc"); ?>
		</div>
		<div class="chart_r">
			<div class="chart_h">Distillate is the second largest product produced by U.S. refiners</div>
			<div class="chart_h"></div>
			<?php include("includes/charts/distillate_refinery_output.inc"); ?>
		</div>
		<div class="chart_r">
			<div class="chart_h">Some refineries can modify the volume of gasoline and distillate produced</div>
			<?php include("includes/charts/refinery_output.inc"); ?>
		</div>
		<div class="chart_r">
            <div class="chart_h">Price changes can influence refinery production decisions</div> <img src="<?php echo $rootPath; ?>/products/png/production_futures_prices.png">
            <div> Updated: Annual | Last Updated:
                <?php $chart = "production_futures_prices"; include("data.php"); echo $updateDate[0]['update_date']; ?>
			</div>
            <div class="chart_desc">The distillate and gasoline futures price spread was calculated using an average of the 1st, 2nd, and 3rd contract month future spreads during each year </div>
		</div>
	</div>
</div>