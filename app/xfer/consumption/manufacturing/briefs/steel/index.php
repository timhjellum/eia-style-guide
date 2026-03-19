<!doctype html>
<?php $globalTitle = 'U.S. Energy Information Administration (EIA)';
$pageTitle = 'Manufacturing Energy Consumption Survey (MECS)';
$L2Title = 'Manufacturing Energy Consumption Survey (MECS)';
$locale = 'ap';
$briefTopic = 'Steel';
$page['year'] = '';
$hct = 'y';
$L2Title = "";
?>
<html>

<head>
	<title><?=$pageTitle?> - <?=$globalTitle?></title>
	<meta property="og:title" content="<?=$pageTitle?> - <?=$globalTitle?>">
	<meta property="og:url" content="https://www.eia.gov<?=$_SERVER['SCRIPT_NAME']?>">
	<meta name="url" content="https://www.eia.gov<?=$_SERVER['SCRIPT_NAME']?>">
	<?php include('global/head/includes/head.inc'); ?>
	<style>
	.tab_highchart {
		width: 616px;
	}

	.chartCaptionsContainer {
		margin-bottom: 20px;
	}

	.strike {
		text-decoration: line-through;
		color: red;
		float: none !important;
	}
	</style>
</head>

<body>
	<?php
	include('global/header/includes/header.inc');
	include('consumption/manufacturing/includes/sub-navigation.inc');
	include ('consumption/includes/report-header.inc');
	?>
	<div class="l-row l-two-col-right-narrow">
		<div class="l-col primary">
			<span class="expand-collapse-container">
				<i class="ico expand"><span>Expand all</span></i>
				<i class="ico collapse"><span>Collapse all</span></i>
			</span>
			<div class="accordion">
				<h3 id="introduction">Residential Energy Consumption Survey data</h3>
				<div class="accordion-content">
					<h2 id="introduction">Introduction</h2>
					<p><a name="fn1ref" id="fn1ref"></a>The steel industry is critical to the U.S. economy. Steel is the material of choice for many elements of construction, transportation, manufacturing, and a variety of consumer products. It is the backbone of bridges, skyscrapers, railroads, automobiles, and appliances. Most grades of steel used today - particularly high-strength steels that are lighter and more versatile - were not available a decade ago.<sup><a href="#fn1text" class="footnote">1</a></sup></p>
					<p>The U.S. steel industry (including iron production) relies significantly on natural gas and coal coke and breeze for fuel, and is one of the largest energy consumers in the manufacturing sector. The industry accounts for roughly six percent of the total energy consumed in manufacturing (<a href="#fig1chart">Figure 1</a>). Including fuel and feedstock use, this industry is responsible for approximately 60 percent of the total energy consumed in the primary metals sub-sector.</p>
					<a name="fig1chart" id="fig1chart"></a>
					<div class="fig1 tab_highchart"></div>
					<p>Energy use in the steel industry has been declining. A ten year historical trend (1991-<?php /*span class="strike"*/ ?>2002<?php /*/span>2006*/ ?>) of the steel industry indicates that there has been a 38 percent decline in the total energy consumption used in the industry (<a href="#fig2chart">Figure 2</a>). The largest portion, 34 percent of the decline in the total energy consumption occurred between 1998 and 2006.</p>
					<a name="fig2chart" id="fig2chart"></a>
					<div class="fig2 tab_highchart"></div>
					<p>As will be seen later, the drop in total energy consumption coincides with both a decrease in producer price and production indices according to the Federal Reserve Board (FRB) and the U.S. Bureau of Economic Analysis (BEA). Also, the decline in consumption corresponds with a decrease in energy intensity in the industry.</p>
				</div>
				<h3 id="energy-consumption">Energy Consumption</h3>
				<div class="accordion-content">
					<h2>Energy Consumption</h2>
					<p><a name="fn2ref" id="fn2ref"></a>There are two types of energy use in the manufacturing sector; energy consumed for fuel and energy consumed for feedstock. Energy consumed as a fuel includes all energy used for heat, power, and electricity generation, regardless of where the energy was produced. Net electricity is included in the energy consumed as a fuel. However, net electricity does not include electricity from onsite generation or combustible fuel sources.<sup><a href="#fn2text" class="footnote">2</a></sup></p>
					<p><a name="fn3ref" id="fn3ref"></a>Energy used as a feedstock, sometimes referred to as nonfuel, is the energy used as a raw material for purposes other than for heat, power, and electricity generation. For instance, in the steel industry coal is used as a raw material to produce coal coke.<sup><a href="#fn3text" class="footnote">2</a></sup></p>
					<p><strong>Energy Consumed as a Fuel</strong> - The steel industry used over 1.1 quadrillion Btu (quads) of energy as fuel in 2006. Nearly all of the industry's fuel consumption came from one of four energy sources: coke and breeze, natural gas, "other", and electricity (<a href="#fig3chart">Figure 3</a>). The "other" fuel constitutes two major byproduct fuels - coke oven and blast furnace gases. These two byproduct fuels account for about 99 percent of the "other" fuel used in the industry. They are recovered and used to generate steam, preheat blast furnace air, or supply heat to other plant processes.</p>
					<a name="fig3chart" id="fig3chart"></a>
					<div class="fig3 tab_highchart"></div>
					<p>Three of the four major energy sources consumed as a fuel in the steel industry – natural gas, byproduct fuel, and coke and breeze – show a similar declining historical trend, for the same time period, as the total energy consumed for this industry. However, the consumption of electricity increased during this fifteen year cycle. Particularly, the byproduct fuel consumption decreased from 1994 to 2006, whereas the coke and breeze consumption decreased from 2002 to 2006 (<a href="#fig4chart">Figure 4</a>).</p>
					<a name="fig4chart" id="fig4chart"></a>
					<div class="fig4 tab_highchart"></div>
					<p><strong><em>End Use of Fuel Consumption</em></strong> - The Manufacturing Energy Consumption Survey (MECS) collects fuel consumption by end use for six major energy sources – electricity, natural gas, coal, LPG, diesel/distillate, and residual fuel oil. Coke, an energy source used for fuel in a blast furnace, is not included as one of the six major energy sources when collecting for end use in the MECS. A blast furnace is used to turn iron ore into pig iron, an intermediate material used in the production of iron and steel.</p>
					<p><a href="#fig5chart">Figure 5</a> illustrates that this industry uses approximately 30 percent of its fuel consumption for process heating, although that percentage does not include the coke that is used to fuel the blast furnace. Though the MECS does not collect end uses for coke, the bulk of what is shown as "not reported/not asked" in Figure 5 is the coke used to fuel the blast furnace. The use of the blast furnace by this industry accounts for the vast majority of the process heating.</p>
					<p>There has been little change to the various end uses reported in the manufacturing sector between 1998 and 2006. Figure 5 illustrates a similar pattern in the steel industry during the same time period. </p>
					<a name="fig5chart" id="fig5chart"></a>
					<div class="fig5 tab_highchart"></div>
					<p>Energy Used as a Feedstock - The steel industry used slightly under half a quad (431 trillion Btu) for feedstock use in 2006. This accounts for approximately six percent of the energy used as a feedstock in the manufacturing sector (<a href="#fig6chart">Figure 6</a>).</p>
					<a name="fig6chart" id="fig6chart"></a>
					<div class="fig6 tab_highchart"></div>
					<p><a name="fn4ref" id="fn4ref"></a>The major energy source that is used as a feedstock in the steel industry is coal, and accounts for 80 percent of the total feedstock used in this industry. Coal is baked in a heated oven to produce coke and breeze. This process allows for the impurities of the coal to be burned off while not allowing the carbon content of the coal to burn.<sup><a href="#fn4text" class="footnote">4</a></sup> Coke and breeze are used for two purposes: to fuel the blast furnace, and to deoxygenate the iron ore and turn it into wrought iron. It's the addition of limestone to the blast furnace along with the heat from the coke and breeze that turns the wrought iron into pig iron.</p>
					<p>Coal used as a feedstock in this industry accounts for 83 percent of the coal feedstock used in the manufacturing sector (<a href="#fig7chart">Figure 7</a>), and 98 percent of the coal feedstock used in the primary metals sub-sector.</p>
					<a name="fig7chart" id="fig7chart"></a>
					<div class="fig7 tab_highchart"></div>
				</div>
				<h3 id="energy-expenditures">Energy Expenditures</h3>
				<div class="accordion-content">
					<h2>Energy Expenditures</h2>
					<p>The total energy expenditures in the steel industry were over six billion dollars in 2002, 97 percent coming from electricity, natural gas, coke and breeze, and coal (<a href="#fig8chart">Figure 8</a>). Electricity is the largest expenditure and accounts for approximately 32 percent of the total energy expenditures in this industry.</p>
					<a name="fig8chart" id="fig8chart"></a>
					<div class="fig8 tab_highchart"></div>
					<p>The electricity expenditures increased by 70 million dollars between 1998 and 2002 in this industry. At least partially, electricity accounts for such a large share of expenditures because electric-arc furnaces, more efficient in producing iron and steel, have become more common in the industry. <a href="#table1">Table 1</a> illustrates the evolution of iron and steel mills transitioning away from using blast furnaces to electric-arc furnaces between 1997 and 2002.</p>
					<a name="table1" id="table1"></a>
					<div class="basic-table">
						<table class="basic-table full-width">
							<caption> Table 1: Plight of the Blast Furnace in Iron and Steel Mills, 1997 and 2002 </caption>
							<thead>
								<tr>
									<th>&nbsp;</th>
									<th>1997</th>
									<th>2002</th>
									<th>1997 Percent of Total</th>
									<th>2002 Percent of Total</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Number of Establishments with Blast Furnaces</td>
									<td>21</td>
									<td>9</td>
									<td>7.5%</td>
									<td>2.4%</td>
								</tr>
								<tr>
									<td>Number of Establishments <strong>without</strong> Blast Furnaces</td>
									<td>258</td>
									<td>364</td>
									<td>92.5%</td>
									<td>97.6%</td>
								</tr>
								<tr>
									<td>Value of Shipments with Blast Furnaces (Million U.S. Dollars)</td>
									<td>29,086</td>
									<td>12,451</td>
									<td>51.0%</td>
									<td>26.4%</td>
								</tr>
								<tr>
									<td>Value of Shipments <strong>without</strong> Blast Furnaces (Million U.S. Dollars)</td>
									<td>27,983</td>
									<td>34,720</td>
									<td>49.0%</td>
									<td>73.6%</td>
								</tr>
								<tr>
									<td>Purchased Electricity with Blast Furnaces (Trillion Btu)</td>
									<td>52.8 (sic)</td>
									<td>26.2 (sic)</td>
									<td>34.6%</td>
									<td>14.1%</td>
								</tr>
								<tr>
									<td>Purchased Electricity <strong>without</strong> Blast Furnaces (Trillion Btu)</td>
									<td>100.0</td>
									<td>158.9</td>
									<td>65.4</td>
									<td>85.9</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<td colspan="99"><strong>Sources:</strong>
										<a href="http://www.census.gov/prod/ec97/97m3311a.pdf" class="ico_pdf" target="_blank" title="U.S. Census Bureau, Economic Census - Manufacturing Industry Series, Iron and Steel Mills - Table 3: Detailed Statistics by Industry, 1997 and 2002">U.S. Census Bureau, Economic Census - Manufacturing Industry Series, Iron and Steel Mills - Table 3: Detailed Statistics by Industry, 1997 and 2002</a>
									</td>
								</tr>
							</tfoot>
						</table>
					</div>
					<p>Figure 9 shows the historical energy expenditures per the total establishment costs in the steel industry. The percentages do not deviate much between 1991 and 1998; however, there was a sharp increase in the percentage between 1998 and 2002.</p>
					<div class="fig9 tab_highchart" id="fig9chart"></div>
					<p>The average prices for purchased energy in the steel industry did not deviate much except for natural gas. <a href="#table2">Table 2</a> illustrates that the average natural gas price increased from $2.54 per million Btu in 1994 to $3.89 per million Btu in 2002. In contrast, the average price for coal and coke increased by only $0.15 and $0.27 per million Btu respectively, and electricity decreased by $0.57 per million Btu during the same time period. The increased price for natural gas could partially explain why there was a reduction in the energy consumption in the steel industry.</p>
					<div class="basic-table" id="table2">
						<table class="basic-table full-width">
							<caption> Table 2: Steel Energy Prices 1994-2002 (Dollars per Million Btu) </caption>
							<thead>
								<tr>
									<th>Year</th>
									<th>Total</th>
									<th>Electricity</th>
									<th>Natural Gas</th>
									<th>Coal</th>
									<th>Coke</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>2002</td>
									<td>4.18</td>
									<td>10.40</td>
									<td>3.89</td>
									<td>1.93</td>
									<td>4.49</td>
								</tr>
								<tr>
									<td>1998</td>
									<td>3.29</td>
									<td>10.34</td>
									<td>2.78</td>
									<td>1.40</td>
									<td>4.71</td>
								</tr>
								<tr>
									<td>1994</td>
									<td>2.93</td>
									<td>10.97</td>
									<td>2.54</td>
									<td>1.78</td>
									<td>4.22</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<td colspan="99">Source: Energy Information Administration, Manufacturing Energy Consumption Survey - Table 7.2: Average Prices for Purchased Energy Sources, 1994, 1998, and 2002</td>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
				<h3 id="producer-prices-production">Producer Prices and Production</h3>
				<div class="accordion-content">
					<h2>Producer Prices and Production</h2>
					<p><a href="#table3">Table 3</a> shows the producer price indices for the steel industry according to the U.S. Bureau of Economic Analysis (BEA). Producer prices are the prices that the industry received for their goods. As is shown in Table 3, the indices have declined between 1998 and 2002.</p>
					<p>Additionally, <a href="#table4">Table 4</a> below illustrates the production indices for the steel industry according to the Federal Reserve Board (FRB) and the BEA. Similar to the producer price indices shown in Table 3, the production indices in Table 4 have also decreased between 1998 and 2002.</p>
					<p>The data in Table 3 shows that in 2002 the industry received relatively lower prices for their steel products. In turn, lower prices would tend to lessen their output, as evidenced by the data in Table 4. A decrease in the production of steel products means that there often will be a reduction in the industry's energy consumption and is supported by the data in Figure 2. As discussed in the next section, energy intensity can also be an explanation for the drop in the industry's energy consumption.</p>
					<a name="table3" id="table3"></a>
					<div class="basic-table">
						<table class="basic-table full-width">
							<caption> Table 3: Steel Industry Received Relatively Lower Prices for their Products </caption>
							<thead>
								<tr>
									<th>Producer Price Indices</th>
									<th>1998</th>
									<th>1999</th>
									<th>2000</th>
									<th>2001</th>
									<th>2002</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>BEA </td>
									<td>107.028</td>
									<td>97.691</td>
									<td>100</td>
									<td>93.825</td>
									<td>97.832</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<td colspan="99">Source: <a href="http://bea.gov/industry/gdpbyind_data.htm" target="_blank">U.S. Bureau of Economic Analysis, Gross-Domestic-Product-(GDP)-by Industry Data</a></td>
								</tr>
							</tfoot>
						</table>
					</div>
					<a name="table4" id="table4"></a>
					<div class="basic-table">
						<table class="basic-table full-width">
							<caption> Table 4: Steel Industry Reduced Shipments </caption>
							<thead>
								<tr>
									<th>Production Indices</th>
									<th>1998</th>
									<th>1999</th>
									<th>2000</th>
									<th>2001</th>
									<th>2002</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>FRB</td>
									<td>100.280</td>
									<td>101.003</td>
									<td>100</td>
									<td>90.455</td>
									<td>90.181</td>
								</tr>
								<tr>
									<td>BEA </td>
									<td>99.796</td>
									<td>102.69</td>
									<td>100</td>
									<td>90.259</td>
									<td>92.603</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<td colspan="99"><strong>Sources:</strong>
										<a href="http://www.federalreserve.gov/releases/g17/" target="_blank">Federal Reserve Board, G.17: Industrial Production and Capacity Utilization</a>; <a href="http://bea.gov/industry/gdpbyind_data.htm" target="_blank">U.S. Bureau of Economic Analysis, Gross-Domestic-Product-(GDP)-by Industry Data</a>
									</td>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
				<h3 id="energy-intensity">Energy Intensity</h3>
				<div class="accordion-content">
					<h2>Energy Intensity</h2>
					<p><a name="fn5ref" id="fn5ref"></a>Typically in dealing with energy statistics, energy intensities are measured as a ratio of energy consumption per an economic measure. One such economic measure often used is the dollar value of shipments. This is the dollar value received for the complete output at the company's net billing price, including charges for cooperative advertising and warranties. This does not include excise taxes, freight or transportation charges, or installation charges.<sup><a href="#fn5text" class="footnote">5</a></sup></p>
					<p><a name="fn6ref" id="fn6ref"></a>Another economic measure that is commonly used when analyzing energy intensities is the dollar of value added. This is a measure of manufacturing activity that is derived by subtracting the cost of materials (which covers materials, supplies, containers, fuel, purchased electricity, and contract work) from the value of shipments. This difference is then adjusted by the net change in finished goods and work-in-progress between the beginning- and end-of-year inventories.<sup><a href="#fn6text" class="footnote">6</a></sup></p>
					<p>By either means, the energy intensity has declined over the past ten years. The energy consumption per dollar value of shipments has steadily decreased for this industry (<a href="#fig10chart">Figure 10</a>) as has the energy consumption per dollar of value added (<a href="#fig11chart">Figure 11</a>). Decreases in these energy intensities can be an indication that the energy efficiency in the industry has improved.</p>
					<a name="fig10chart" id="fig10chart"></a>
					<div class="fig10 tab_highchart"></div>
					<a name="fig11chart" id="fig11chart"></a>
					<div class="fig11 tab_highchart"></div>
				</div>
				<h3 id="energy-management-activities">Energy Management Activities</h3>
				<div class="accordion-content">
					<h2>Energy-Management Activities</h2>
					<p>Over the past several years manufacturers in general have increasingly recognized the correlation between rising energy costs and their ever shrinking profit margins. Through this understanding, manufacturers have greatly improved their energy-management practices. Although <a href="#table5">Table 5</a> suggests that the steel industry has not followed this trend the majority of the data represented in the table is not statistically significant. </p>
					<p>Special rate schedules are natural gas and electricity contracts that utility companies sell to their industrial customers at a reduced rate because of the sheer volume of energy usage. Although this industry started using more electric-arc furnaces to produce steel, their participation percent for special rate schedules decreased from 1998 to 2002. This decrease occurred during a time when the deregulation of both the natural gas and electricity markets were becoming more prevalent, and industrial customers started purchasing their energy from third party suppliers. The industry also stopped using as many full-time energy managers; however, this reduction may be a result of the employees having more than just energy-management responsibilities.</p>
					<a name="table5" id="table5"></a>
					<div class="basic-table">
						<table class="basic-table full-width">
							<caption> Table 5: Steel Industry Participated in Energy-Management Activities, 1998 and 2002 </caption>
							<thead>
								<tr>
									<th>Energy-Management Activity</th>
									<th>Percent Participation in 1998</th>
									<th>Percent Participation in 2002</th>
									<th>Percent Participation in 2002</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Energy Audits</td>
									<td>26</td>
									<td>37</td>
									<td>-11</td>
								</tr>
								<tr>
									<td>Direct Electricity Load Control</td>
									<td>41</td>
									<td>28</td>
									<td>13</td>
								</tr>
								<tr>
									<td>Special Rate Schedule</td>
									<td>57</td>
									<td>15</td>
									<td>41*</td>
								</tr>
								<tr>
									<td>Standby Generation Program</td>
									<td>14</td>
									<td>7</td>
									<td>6*</td>
								</tr>
								<tr>
									<td>Equipment Rebates</td>
									<td>4</td>
									<td>4</td>
									<td>0</td>
								</tr>
								<tr>
									<td>Power Factor Correction or Improvement</td>
									<td>31</td>
									<td>28</td>
									<td>3</td>
								</tr>
								<tr>
									<td>U.S. Environmental Protection Agency's Green Lights Program</td>
									<td>4</td>
									<td>2</td>
									<td>2*</td>
								</tr>
								<tr>
									<td colspan="99">Equipment Installation or Retrofit for the <u>Primary Purpose of Improving Energy Efficiency</u> Affecting:</td>
								</tr>
								<tr>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;Steam Production/System</td>
									<td>14</td>
									<td>22</td>
									<td>-8</td>
								</tr>
								<tr>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;Compressed Air Systems </td>
									<td>23</td>
									<td>14</td>
									<td>9</td>
								</tr>
								<tr>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;Direct/Indirect Process Heating</td>
									<td>19</td>
									<td>17</td>
									<td>2</td>
								</tr>
								<tr>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;Direct Process Cooling, Refrigeration</td>
									<td>7</td>
									<td>6</td>
									<td>1</td>
								</tr>
								<tr>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;Direct Machine Drive</td>
									<td>29</td>
									<td>26</td>
									<td>3</td>
								</tr>
								<tr>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;Facility HVAC </td>
									<td>19</td>
									<td>19</td>
									<td>0</td>
								</tr>
								<tr>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;Facility Lighting</td>
									<td>17</td>
									<td>19</td>
									<td>-2</td>
								</tr>
								<tr>
									<td>Equipment Installation or Retrofit for the <u>Primary Purpose of Using a Different Energy Source</u></td>
									<td>11</td>
									<td>6</td>
									<td>5</td>
								</tr>
								<tr>
									<td>Full-Time Energy Manager </td>
									<td>17</td>
									<td>2</td>
									<td>15*</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<td colspan="99">
										<p><a name="significance"></a>* Significance testing was performed on the percentages in Table 5 to account for relative standard errors during data collection and determine those differences that are truly significant.</p>
										<p>Sources: Energy Information Administration, Manufacturing Energy Consumption Survey - Table 8.1: Number of Establishments by Participation in Energy-Management Activity, 1998, and 2002</p>
									</td>
								</tr>
							</tfoot>
						</table>
					</div>
					<div id="footnotes">
						<h3>Footnotes</h3>
						<p><sup><a href="#fn1ref" class="footnote">1</a></sup><a name="fn1text" id="fn1text"></a> U.S. Department of Energy, Energy Efficiency and Renewable Energy, Industrial Technologies Program, <a href="http://www1.eere.energy.gov/industry/steel/profile.html" target="_blank">Steel Industry of the Future</a>.</p>
						<p><sup><a href="#fn2ref" class="footnote">2</a></sup><a name="fn2text" id="fn2text"></a> Energy Information Administration, Manufacturing Energy Consumption Survey, MECS Definition of Fuel Use, http://www.eia.doe.gov/emeu/mecs/mecs98/datatables/fueldef.html</p>
						<p><sup><a href="#fn3ref" class="footnote">3</a></sup><a name="fn3text" id="fn3text"></a> Energy Information Administration, Manufacturing Energy Consumption Survey, MECS Definition of NonFuel (Feedstock), http://www.eia.doe.gov/emeu/mecs/mecs98/datatables/nonfueldef.html</p>
						<p><sup><a href="#fn4ref" class="footnote">4</a></sup><a name="fn4text" id="fn4text"></a> American Iron and Steel Institute, <em><a href="http://www.steel.org/steel-technology/how-its-made/processes/processes-info/coke-production-for-blast-furnace-ironmaking.aspx?siteLocation=88e232e1-d52b-4048-9b8a-f687fbd5cdcb" target="_blank">Coke Production for Blast Furnace Ironmaking</a></em></p>
						<p><sup><a href="#fn5ref" class="footnote">5</a></sup><a name="fn5text" id="fn5text"></a> Energy Information Administration Glossary, "<a href="/tools/glossary/?id=Value%20(of%20shipments)">Value (of shipments)</a>"</p>
						<p><sup><a href="#fn6ref" class="footnote">6</a></sup><a name="fn6text" id="fn6text"></a> Energy Information Administration Glossary, "<a href="/tools/glossary/index.cfm?id=Value%20added%20by%20manufacture">Value added by manufacture</a>"</p>
					</div>
				</div>
			</div>
		</div>
		<div class="l-col">
			<?php include('consumption/manufacturing/includes/side-nav-manufacturing.inc'); ?>
		</div>
	</div>
	<?php include('global/footer/includes/footer.inc'); ?>
</body>
<script src="js/steel-highcharts.js"></script>

</html>