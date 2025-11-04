	<div class="l-row l-full-width-col">
		<div class="l-col article">
			<h1><?=$pageTitle?></h1>
			<p>Crude oil production by the <a href="/tools/glossary/index.php?id=O#opec">Organization of the Petroleum Exporting Countries (OPEC)</a> is an important factor that affects oil prices. This organization seeks to actively manage oil production in its member countries by setting production targets. Historically, crude oil prices have seen increases in times when OPEC production targets are reduced.</p>
			<p>OPEC member countries produce about 40 percent of the world's crude oil. Equally important to global prices, OPEC's oil exports represent about 60 percent of the total petroleum traded internationally. Because of this market share, OPEC's actions can, and do, influence international oil prices.In particular, indications of changes in crude oil production from Saudi Arabia, OPEC's largest producer, frequently affect oil prices.
			<div class="chart_r">
				<div class="chart_h">Changes in Saudi Arabia crude oil production can affect oil prices</div>
				<?php /*  Once a year update: Change the SQL statement for the growth_asia query located in the finance/markets/crudeoil/data.php file  */ ?>
				<?php include("includes/charts/saudi_demand.inc"); ?> <div class="chart_desc">Oil markets often respond to changing expectations of future supply and demand. This chart shows how projections of changes in Saudi Arabia crude oil production results in changes in WTI crude oil prices.
				</div>
			</div>
			<p>The extent to which OPEC member countries utilize their available production capacity is often used as an indicator of the tightness of global oil markets, as well as an indicator of the extent to which OPEC is exerting upward influence on prices. EIA defines spare capacity as the volume of production that can be brought on within 30 days and sustained for at least 90 days. Saudi Arabia, the largest oil producer within OPEC and the world's largest oil exporter, historically has had the greatest spare capacity. Saudi Arabia has usually kept more than 1.5 - 2 million barrels per day of spare capacity on hand for market management.</p>
			<p>OPEC spare capacity provides an indicator of the world oil market's ability to respond to potential crises that reduce oil supplies. As a result, oil prices tend to incorporate a rising risk premium when OPEC spare capacity reaches low levels. From 2003 through 2008, OPEC's total spare capacity remained near or below 2 million barrels per day (or less than 3 percent of global supply), which provided very little cushion for fluctuations in supply in a context of rapidly rising demand. Markets are influenced by geopolitical events within and between OPEC countries because they have, historically, resulted in reductions in oil production. Given OPEC's market significance, events that entail an actual or future potential loss of oil supplies can produce strong reactions in oil prices.</p>
			<div class="chart_r">
				<div class="chart_h">During 2003-2008, OPEC's spare production levels were low, limiting its ability to respond to demand and price increases </div>
				<?php include("includes/charts/opec_spare_capacity.inc"); ?> <div class="chart_desc">Oil prices increased during 2003-2008 when OPEC's spare capacity levels were relatively low. Low spare capacity limits OPEC's ability to respond to demand and price increases, while high spare capacity indicates a withholding of production presumably for price management purposes.
				</div>
			</div>
			<p>Despite OPEC's efforts to manage production and maintain targeted price levels, member countries do not always comply with the production targets adopted by the organization. Oil prices can be affected by member countries' unwillingness to maintain production targets. In addition, unexpected outages can reduce OPEC production. The amount of the disruption, how quickly it occurs, and the uncertainty of restoring the output have considerable influence on oil prices.</p>
			<div class="chart_r">
				<div class="chart_h">Unplanned supply disruptions tighten world oil markets and push prices higher</div>
				<?php include("includes/charts/non_opec_supply_expectation.inc"); ?> <div class="chart_desc">This chart shows EIA's monthly estimates of unplanned, global supply outages. Estimated unplanned disruptions reflect the level of volumes shut-in, accounting for effective production capacity.
				</div>
			</div>
			<p>Natural gas liquids (NGLs) are not included in OPEC production allocations and can provide substantial additional volumes to world liquids supply.</p>
			<p>The behavior of oil prices depends not only on current supply and demand, but also on projected future supply and demand. OPEC adjusts member countries' production targets based on current and expectations of future supply and demand. Estimating future supply and demand, however, is especially challenging when market conditions are uncertain and are changing rapidly. There can also be significant lags in OPEC production target adjustments in response to market conditions, which also can impact prices.</p>
			<div class="chart_r">
				<div class="chart_h">The years 2003-2008 experienced periods of very strong economic and oil demand growth, slow supply growth and tight spare capacity </div>
				<?php include("includes/charts/world_capacity.inc"); ?> <div class="chart_desc">In this chart, WTI price levels are graphed with world GDP growth rates (as an indicator of global oil demand growth) and quarterly changes in world capacity, defined as OPEC capacity plus non-OPEC production (as an indicator of global oil supply growth). From 2005 to 2008, economic growth remained strong while oil production capacity grew slowly and even declined in some quarters. The tight market conditions put upward pressure on oil prices.
				</div>
			</div>
		</div>
	</div>