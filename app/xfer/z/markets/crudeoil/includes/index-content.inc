<h1><?=$pageTitle?></h1>
<p>We assess the various factors that may influence crude oil prices &#8212; physical market factors as well as those related to trading and financial markets. We describe the seven key factors that could influence oil markets and explore possible links between each factor and crude oil prices. We include regularly updated graphs that depict aspects of those relationships. </p>
<p>Several graphs include projections from our <a href="/forecasts/steo/">Short-Term Energy Outlook</a>. Graphs are updated with new data on a monthly, quarterly, and annual basis according to the schedule below. Analytical text will be updated as needed. </p>

<strong><a href="./reports_presentations/crude.pdf" class="ico pdf"><span>PDF</span> All graphs</a></strong><br />
<div class="basic-table">
	<table class="basic-table full-width">
		<thead class="sticky">
			<tr>
				<th scope="col">Graph update schedule by section</th>
				<th scope="col">Update frequency</th>
				<th scope="col">Last update</th>
			</tr>
		</thead>
		<tbody>
			<tr class="section" scope="row">
				<th><a href="supply-nonopec.php">Supply: Non-OPEC</a></th>
			</tr>
			<tr>
				<td>Production &amp; WTI crude prices</td>
				<td><?php echo $dataArray["NONOPEC_1"]["frequency"]; ?></td>
				<td><?php echo $dataArray["NONOPEC_1"]["update_date"]; ?></td>
			</tr>
			<tr>
				<td>Changes in production capacity &amp; GDP, price of WTI crude</td>
				<td><?php echo $dataArray["NONOPEC_2"]["frequency"]; ?></td>
				<td><?php echo $dataArray["NONOPEC_2"]["update_date"]; ?></td>
			</tr>
			<tr>
				<td>Projected supply, annual average</td>
				<td><?php echo $dataArray["NONOPEC_3"]["frequency"]; ?></td>
				<td><?php echo $dataArray["NONOPEC_3"]["update_date"]; ?></td>
			</tr>
			<tr>
				<td>OPEC and Non-opec Supply disruption</td>
				<td><?php echo $dataArray["NONOPEC_4"]["frequency"]; ?></td>
				<td><?php echo $dataArray["NONOPEC_4"]["update_date"]; ?></td>
			</tr>
			<tr class="section" scope="row">
				<th colspan="99"><a href="supply-opec.php">Supply: OPEC</a></th>
			</tr>
			<tr>
				<td>Changes in Saudi Production &amp; WTI crude prices</td>
				<td><?php echo $dataArray["OPEC_1"]["frequency"]; ?></td>
				<td><?php echo $dataArray["OPEC_1"]["update_date"]; ?></td>
			</tr>
			<tr>
				<td>Spare production capacity &amp; WTI crude prices</td>
				<td><?php echo $dataArray["OPEC_2"]["frequency"]; ?></td>
				<td><?php echo $dataArray["OPEC_2"]["update_date"]; ?></td>
			</tr>
			<tr>
				<td>Changes in production capacity &amp; GDP, price of WTI crude</td>
				<td><?php echo $dataArray["OPEC_3"]["frequency"]; ?></td>
				<td><?php echo $dataArray["OPEC_3"]["update_date"]; ?></td>
			</tr>
			<tr>
				<td>OPEC and Non-opec Supply disruption</td>
				<td><?php echo $dataArray["OPEC_4"]["frequency"]; ?></td>
				<td><?php echo $dataArray["OPEC_4"]["update_date"]; ?></td>
			</tr>
			<tr class="section" scope="row">
				<th colspan="99"><a href="balance.php">Balance</a></th>
			</tr>
			<tr>
				<td>OECD inventories &amp; WTI futures spread</td>
				<td><?php echo $dataArray["BALANCE_1"]["frequency"]; ?></td>
				<td><?php echo $dataArray["BALANCE_1"]["update_date"]; ?></td>
			</tr>
			<tr class="section" scope="row">
				<th colspan="99"><a href="spot_prices.php">Spot Prices</a></th>
			</tr>
			<tr>
				<td>World crude oil prices</td>
				<td><?php echo $dataArray["SPOT_1"]["frequency"]; ?></td>
				<td><?php echo $dataArray["SPOT_1"]["update_date"]; ?></td>
			<tr>
				<td>U.S. retail gasoline price, refiner acquisition cost of crude oil</td>
				<td><?php echo $dataArray["SPOT_2"]["frequency"]; ?></td>
				<td><?php echo $dataArray["SPOT_2"]["update_date"]; ?></td>
			</tr>
			<tr>
				<td>Crude price reaction to events</td>
				<td><?php echo $dataArray["SPOT_3"]["frequency"]; ?></td>
				<td><?php echo $dataArray["SPOT_3"]["update_date"]; ?></td>
			</tr>
			<tr class="section" scope="row">
				<th colspan="99"><a href="financial_markets.php">Financial Markets</a></th>
			</tr>
			<tr>
				<td>Average daily open interest in crude oil futures</td>
				<td><?php echo $dataArray["FIN_1"]["frequency"]; ?></td>
				<td><?php echo $dataArray["FIN_1"]["update_date"]; ?></td>
			</tr>
			<tr>
				<td>Futures positions by producers, merchants, processors, &amp; end users</td>
				<td><?php echo $dataArray["FIN_2"]["frequency"]; ?></td>
				<td><?php echo $dataArray["FIN_2"]["update_date"]; ?></td>
			</tr>
			<tr>
				<td>Futures positions by money managers</td>
				<td><?php echo $dataArray["FIN_3"]["frequency"]; ?></td>
				<td><?php echo $dataArray["FIN_3"]["update_date"]; ?></td>
			</tr>
			<tr>
				<td>Correlations between daily prices changes of crude &amp; other commodities</td>
				<td><?php echo $dataArray["FIN_4"]["frequency"]; ?></td>
				<td><?php echo $dataArray["FIN_4"]["update_date"]; ?></td>
			</tr>
			<tr>
				<td>
					<p>Commodity index assets under management &amp; Dow Jones UBS price index</p>
				</td>
				<td><?php echo $dataArray["FIN_5"]["frequency"]; ?></td>
				<td><?php echo $dataArray["FIN_5"]["update_date"]; ?></td>
			</tr>
			<tr>
				<td>Composition of the Dow Jones UBS commodity index</td>
				<td><?php echo $dataArray["FIN_6"]["frequency"]; ?></td>
				<td><?php echo $dataArray["FIN_6"]["update_date"]; ?></td>
			</tr>
			<tr>
				<td>Correlations between daily returns on crude oil &amp; financial investments</td>
				<td><?php echo $dataArray["FIN_7"]["frequency"]; ?></td>
				<td><?php echo $dataArray["FIN_7"]["update_date"]; ?></td>
			</tr>
			<tr class="section" scope="row">
				<th colspan="99"><a href="demand-nonoecd.php">Demand: Non-OECD</a></th>
			</tr>
			<tr>
				<td>Consumption &amp; GDP</td>
				<td><?php echo $dataArray["NONOECD_1"]["frequency"]; ?></td>
				<td><?php echo $dataArray["NONOECD_1"]["update_date"]; ?></td>
			</tr>
			<tr>
				<td>World oil consumption, world GDP &amp; WTI crude oil prices</td>
				<td><?php echo $dataArray["NONOECD_2"]["frequency"]; ?></td>
				<td><?php echo $dataArray["NONOECD_2"]["update_date"]; ?></td>
			</tr>
			<tr>
				<td>Projected non-OECD production, annual average</td>
				<td><?php echo $dataArray["NONOECD_3"]["frequency"]; ?></td>
				<td><?php echo $dataArray["NONOECD_3"]["update_date"]; ?></td>
			</tr>
			<tr class="section" scope="row">
				<th colspan="99"><a href="demand-oecd.php">Demand: OECD</a></th>
			</tr>
			<tr>
				<td>Crude oil consumption &amp; WTI crude oil price</td>
				<td><?php echo $dataArray["OECD_1"]["frequency"]; ?></td>
				<td><?php echo $dataArray["OECD_1"]["update_date"]; ?></td>
			</tr>
			<tr>
				<td>World oil consumption, world GDP &amp; WTI crude oil prices</td>
				<td><?php echo $dataArray["OECD_2"]["frequency"]; ?></td>
				<td><?php echo $dataArray["OECD_2"]["update_date"]; ?></td>
			</tr>
		</tbody>
	</table>
</div>