﻿<!doctype html>
<html>
<?php
$globalTitle 		= 'U.S. Energy Information Administration (EIA)';
$pageTitle          = 'Style Guide';
?>

<head>
	<title>
		<!-- title here --> -
		<?=$globalTitle?>
	</title>
	<meta property="og:title" content="<!-- title here --> - <?=$globalTitle?>">

	<link href="style-guide/styles/style-guide.css" type="text/css" media="screen, projection" rel="stylesheet">
	<link href="../global/styles/global.css" type="text/css" media="screen, projection" rel="stylesheet">
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/jquery/jquery.migrate.min.js"></script>
	<script src="vendor/jquery-ui/jquery-ui.min.js"></script>
	<script src="vendor/jquery-ui/jquery.ui.touch-punch.min.js"></script>
	<link href="../includes/favicon.ico" rel="shortcut icon">
	<link href="../includes/favicon.ico" rel="icon" type="image/x-icon">
	<link href="../includes/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">

</head>

<body>
	<!-- includes/header.inc') ?>
	<div class="l-row l-two-col-right">
		<div class="l-col">
			<span class="states">
				<h1 class="uk-h1 tm-heading-fragment">Sticky Table Headers</h1>
<p class="uk-text-lead"></p>

				<!-- Legend -->
				<span class="_container-inside">
					<div>
						<div class="l-row l-two-col-right-narrow">
							<div class="l-col">
								<div class="basic-table">
									<table class="sticky basic-table full-width highlight-col-3 highlight-col-4">
										<colgroup>
											<col width="20">
											</col>
											<col width="auto">
											</col>
											<col width="80">
											</col>
											<col width="80">
											</col>
											<col width="80">
											</col>
										</colgroup>

										<thead>
											<tr>
												<th colSpan="2" rowSpan="2"></th>
												<th colSpan="3">Released after</th>
											</tr>
											<tr>
												<th colSpan="2">10:30 a.m.</th>
												<th colSpan="1">1:00 p.m.</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td colSpan="99">
													<strong>Highlights</strong>
												</td>
											</tr>
											<tr>
												<td></td>
												<td>Weekly Petroleum Status Report Highlights</td>
												<td></td>
												<td>
													<a href="https://ir.eia.gov/wpsr/wpsrsummary.pdf" class="eia ico pdf">
														<span>PDF</span>
													</a>
												</td>
												<td>
													<a class="eia ico pdf">
														<span>PDF</span>
													</a>
												</td>
											</tr>
											<tr>
												<td></td>
												<td>Data Overview (Combined Table 1 and Table 9)</td>
												<td></td>
												<td>
													<a href="https://ir.eia.gov/wpsr/overview.pdf" class="eia ico pdf">
														<span>PDF</span>
													</a>
												</td>
												<td></td>
											</tr>
											<tr>
												<td colSpan="99">
													<strong>Tables</strong>
												</td>
											</tr>
											<tr>
												<td>
													<strong>1</strong>
												</td>
												<td>U.S. Petroleum Balance Sheet</td>
												<td>
													<a href="https://ir.eia.gov/wpsr/table1.csv" class="eia ico csv">
														<span>CSV</span>
													</a>
												</td>
												<td>
													<a href="https://ir.eia.gov/wpsr/psw01.xls" target="_blank" class="eia ico xls">
														<span>XLS</span>
													</a>
												</td>
												<td>
													<a class="eia ico pdf">
														<span>PDF</span>
													</a>
												</td>
											</tr>
											<tr>
												<td>
													<strong>2</strong>
												</td>
												<td>
													U.S. Inputs and Production by PAD District by <a>Data series</a>
												</td>
												<td>
													<a href="https://ir.eia.gov/wpsr/table2.csv" class="eia ico csv">
														<span>CSV</span>
													</a>
												</td>
												<td>
													<a href="download.php?table=2&amp;table_key=PET_SUM_SNDW_DCUS_NUS_W&amp;period=W&amp;history=false&amp;type=xlsx" class="eia ico xls">
														<span>XLS</span>
													</a>
												</td>
												<td>
													<a class="eia ico pdf">
														<span>PDF</span>
													</a>
												</td>
											</tr>
											<tr>
												<td>
													<strong>3</strong>
												</td>
												<td>
													<a href="./table.php?show_by=3_refiner&amp;period=W&amp;table_key=PET_PNP_WPRODR_S1_W">Refiner</a> and <a>Blender</a> Net Production
												</td>
												<td>
													<a href="https://ir.eia.gov/wpsr/table3.csv" class="eia ico csv">
														<span>CSV</span>
													</a>
												</td>
												<td>
													<a href="https://ir.eia.gov/wpsr/psw03.xls" target="_blank" class="eia ico xls">
														<span>XLS</span>
													</a>
												</td>
												<td>
													<a class="eia ico pdf">
														<span>PDF</span>
													</a>
												</td>
											</tr>
											<tr>
												<td>
													<strong>4</strong>
												</td>
												<td>
													<a href="./table.php?show_by=4_series&amp;period=W&amp;table_key=PET_STOC_WSTK_DCU_NUS_W">Stocks of Crude Oil by PAD District, and Stocks of Petroleum Products, U.S. Totals</a>
												</td>
												<td>
													<a href="https://ir.eia.gov/wpsr/table4.csv" class="eia ico csv">
														<span>CSV</span>
													</a>
												</td>
												<td>
													<a href="https://ir.eia.gov/wpsr/psw04.xls" target="_blank" class="eia ico xls">
														<span>XLS</span>
													</a>
												</td>
												<td>
													<a class="eia ico pdf">
														<span>PDF</span>
													</a>
												</td>
											</tr>

											<tr>
												<td>
													<strong>5</strong>
												</td>
												<td>
													<a href="./table.php?show_by=5_series&amp;period=W&amp;table_key=PET_STOC_WSTK_DCU_NUS_W">Stocks of Total Motor Gasoline and Fuel Ethanol by PAD District</a>
												</td>
												<td>
													<a href="https://ir.eia.gov/wpsr/table5.csv" class="eia ico csv">
														<span>CSV</span>
													</a>
												</td>
												<td>
													<a href="https://ir.eia.gov/wpsr/psw05.xls" target="_blank" class="eia ico xls">
														<span>XLS</span>
													</a>
												</td>
												<td>
													<a class="eia ico pdf">
														<span>PDF</span>
													</a>
												</td>
											</tr>
											<tr>
												<td>
													<strong>5A</strong>
												</td>
												<td>Stocks of Total Motor Gasoline and Fuel Ethanol by PAD District with Total Gasoline by Sub-PADD</td>
												<td>
													<a href="https://ir.eia.gov/wpsr/table5a.csv" class="eia ico csv">
														<span>CSV</span>
													</a>
												</td>
												<td>
													<a href="https://ir.eia.gov/wpsr/psw05a.xls" target="_blank" class="eia ico xls">
														<span>XLS</span>
													</a>
												</td>
												<td></td>
											</tr>

											<tr>
												<td>
													<strong>6</strong>
												</td>
												<td>
													<a href="./table.php?show_by=6_series&amp;period=W&amp;table_key=PET_STOC_WSTK_DCU_NUS_W">Stocks of Distillate, Kerosene-Type Jet Fuel, Residual Fuel Oil, and Propane/Propylene by PAD District</a>
												</td>
												<td>
													<a href="https://ir.eia.gov/wpsr/table6.csv" class="eia ico csv">
														<span>CSV</span>
													</a>
												</td>
												<td>
													<a href="https://ir.eia.gov/wpsr/psw06.xls" target="_blank" class="eia ico xls">
														<span>XLS</span>
													</a>
												</td>
												<td>
													<a class="eia ico pdf">
														<span>PDF</span>
													</a>
												</td>
											</tr>

											<tr>
												<td>
													<strong>7</strong>
												</td>
												<td>
													<a href="./table.php?show_by=7_series&amp;period=W&amp;table_key=PET_MOVE_WKLY_DC_NUS-Z00_MBBLPD_W">Imports of Crude Oil and Total Products by PAD District</a>
												</td>
												<td>
													<a href="https://ir.eia.gov/wpsr/table7.csv" class="eia ico csv">
														<span>CSV</span>
													</a>
												</td>
												<td>
													<a href="https://ir.eia.gov/wpsr/psw07.xls" target="_blank" class="eia ico xls">
														<span>XLS</span>
													</a>
												</td>
												<td>
													<a class="eia ico pdf">
														<span>PDF</span>
													</a>
												</td>
											</tr>

											<tr>
												<td>
													<strong>8</strong>
												</td>
												<td>
													<a href="./table.php?show_by=8_series&amp;period=W&amp;table_key=PET_MOVE_WIMPC_S1_W">Preliminary Crude Imports by Country of Origin</a>
												</td>
												<td>
													<a href="https://ir.eia.gov/wpsr/table8.csv" class="eia ico csv">
														<span>CSV</span>
													</a>
												</td>
												<td>
													<a href="https://ir.eia.gov/wpsr/psw08.xls" class="eia ico xls">
														<span>XLS</span>
													</a>
												</td>
												<td>
													<a class="eia ico pdf">
														<span>PDF</span>
													</a>
												</td>
											</tr>
											<tr>
												<td>
													<strong>9</strong>
												</td>
												<td>
													<a href="./table.php?show_by=9_series&amp;period=W&amp;table_key=PET_SUM_SNDW_DCUS_NUS_W">U.S. and PAD District Weekly Estimates</a>
												</td>
												<td>
													<a href="https://ir.eia.gov/wpsr/table9.csv" class="eia ico csv">
														<span>CSV</span>
													</a>
												</td>
												<td>
													<a href="https://ir.eia.gov/wpsr/psw09.xls" target="_blank" class="eia ico xls">
														<span>XLS</span>
													</a>
												</td>
												<td>
													<a class="eia ico pdf">
														<span>PDF</span>
													</a>
												</td>
											</tr>
											<tr>
												<td>
													<strong>10</strong>
												</td>
												<td>
													<a href="#">
														<span>U.S. World Crude Oil Prices</span>
														<font color="#C0C0C0"> - Discontinued</font>
													</a>
												</td>
												<td>
													<a href="https://ir.eia.gov/wpsr/table10.csv" class="eia ico csv">
														<span>CSV</span>
													</a>
												</td>
												<td>
													<a href="https://ir.eia.gov/wpsr/psw10.xls" class="eia ico xls">
														<span>XLS</span>
													</a>
												</td>
												<td>
													<a class="eia ico pdf">
														<span>PDF</span>
													</a>
												</td>
											</tr>
											<tr>
												<td>
													<strong>11</strong>
												</td>
												<td>
													<a href="./table.php?show_by=11_series&amp;period=D&amp;table_key=PET_PRI_SPT_S1_D">Spot Prices of Crude Oil, Motor Gasoline, and Heating Oil</a>
												</td>
												<td>
													<a href="https://ir.eia.gov/wpsr/table11.csv" class="eia ico csv">
														<span>CSV</span>
													</a>
												</td>
												<td>
													<a href="https://ir.eia.gov/wpsr/psw11.xls" target="_blank" class="eia ico xls">
														<span>XLS</span>
													</a>
												</td>
												<td>
													<a class="eia ico pdf">
														<span>PDF</span>
													</a>
												</td>
											</tr>
											<tr>
												<td>
													<strong>12</strong>
												</td>
												<td>
													<a href="./table.php?show_by=12_series&amp;period=D&amp;table_key=PET_PRI_SPT_S1_D">Spot Prices of Ultra-Low Sulfur Diesel Fuel, Kerosene-Type Jet Fuel, and Propane</a>
												</td>
												<td>
													<a href="https://ir.eia.gov/wpsr/table12.csv" class="eia ico csv">
														<span>CSV</span>
													</a>
												</td>
												<td>
													<a href="https://ir.eia.gov/wpsr/psw12.xls" target="_blank" class="eia ico xls">
														<span>XLS</span>
													</a>
												</td>
												<td>
													<a class="eia ico pdf">
														<span>PDF</span>
													</a>
												</td>
											</tr>
											<tr>
												<td>
													<strong>13</strong>
												</td>
												<td>
													<a href="./table.php?show_by=13_series&amp;period=D&amp;table_key=PET_PRI_FUT_S1_D">NYMEX Futures Prices of Crude Oil, Motor Gasoline, and No. 2 Heating Oil</a>
												</td>
												<td>
													<a href="https://ir.eia.gov/wpsr/table13.csv" class="eia ico csv">
														<span>CSV</span>
													</a>
												</td>
												<td>
													<a href="https://ir.eia.gov/wpsr/psw13.xls" target="_blank" class="eia ico xls">
														<span>XLS</span>
													</a>
												</td>
												<td>
													<a class="eia ico pdf">
														<span>PDF</span>
													</a>
												</td>
											</tr>
											<tr>
												<td>
													<strong>14</strong>
												</td>
												<td>
													<a href="./table.php?show_by=14_series&amp;period=W&amp;table_key=PET_PRI_GND_DCUS_NUS_W">U.S. Retail Motor Gasoline and On-Highway Diesel Fuel Prices</a>
												</td>
												<td>
													<a href="https://ir.eia.gov/wpsr/table14.csv" class="eia ico csv">
														<span>CSV</span>
													</a>
												</td>
												<td>
													<a href="https://ir.eia.gov/wpsr/psw14.xls" target="_blank" class="eia ico xls">
														<span>XLS</span>
													</a>
												</td>
												<td>
													<a class="eia ico pdf">
														<span>PDF</span>
													</a>
												</td>
											</tr>
											<tr>
												<th colSpan="99">
													<strong>Figures</strong>
												</th>
											</tr>
											<tr>
												<td>
													<strong>1</strong>
												</td>
												<td>Stocks of Crude Oil by PAD District</td>
												<td></td>
												<td></td>
												<td>
													<a class="eia ico pdf">
														<span>PDF</span>
													</a>
												</td>
											</tr>
											<tr>
												<td>
													<strong>2</strong>
												</td>
												<td>Stocks of Total Motor Gasoline by PAD District</td>
												<td></td>
												<td></td>
												<td>
													<a class="eia ico pdf">
														<span>PDF</span>
													</a>
												</td>
											</tr>
											<tr>
												<td>
													<strong>3</strong>
												</td>
												<td>Stocks of Distillate Fuel Oil by PAD District</td>
												<td></td>
												<td></td>
												<td>
													<a class="eia ico pdf">
														<span>PDF</span>
													</a>
												</td>
											</tr>
											<tr>
												<td>
													<strong>4</strong>
												</td>
												<td>Stocks of Kerosene-Type Jet Fuel by PAD District</td>
												<td></td>
												<td></td>
												<td>
													<a class="eia ico pdf">
														<span>PDF</span>
													</a>
												</td>
											</tr>
											<tr>
												<td>
													<strong>5</strong>
												</td>
												<td>Stocks of Residual Fuel Oil by PAD District</td>
												<td></td>
												<td></td>
												<td>
													<a class="eia ico pdf">
														<span>PDF</span>
													</a>
												</td>
											</tr>
											<tr>
												<td>
													<strong>6</strong>
												</td>
												<td>Stocks of Propane/Propylene by PAD District</td>
												<td></td>
												<td></td>
												<td>
													<a class="eia ico pdf">
														<span>PDF</span>
													</a>
												</td>
											</tr>
											<tr>
												<td>
													<strong>7</strong>
												</td>
												<td>Daily Crude Oil and Petroleum Product Spot Prices</td>
												<td></td>
												<td></td>
												<td>
													<a class="eia ico pdf">
														<span>PDF</span>
													</a>
												</td>
											</tr>
											<tr>
												<td>
													<strong>8</strong>
												</td>
												<td>
													<span>Daily Trans-Atlantic Spot Product Price Differentials: New York Harbor less Rotterdam (ARA)</span>
												</td>
												<td></td>
												<td></td>
												<td>
													<a class="eia ico pdf">
														<span>PDF</span>
													</a>
												</td>
											</tr>
											<tr>
												<td>
													<strong>9</strong>
												</td>
												<td>Daily Futures Price Differentials: First Delivery Month Less Second Delivery Month</td>
												<td></td>
												<td></td>
												<td>
													<a class="eia ico pdf">
														<span>PDF</span>
													</a>
												</td>
											</tr>
											<tr>
												<td>
													<strong>10</strong>
												</td>
												<td>U.S. Average Retail Regular Motor Gasoline and On-Highway Diesel Fuel Prices</td>
												<td></td>
												<td></td>
												<td>
													<a class="eia ico pdf">
														<span>PDF</span>
													</a>
												</td>
											</tr>
											<tr>
												<td colSpan="99">Appendices</td>
											</tr>
											<tr>
												<td>
													<strong>A</strong>
												</td>
												<td>Petroleum Supply Summary</td>
												<td></td>
												<td></td>
												<td>
													<a class="eia ico pdf">
														<span>PDF</span>
													</a>
												</td>
											</tr>
											<tr>
												<td>
													<strong>B</strong>
												</td>
												<td>
													Explanatory Notes &nbsp;&nbsp;(
													<a href="stockranges.xls">Stock Ranges</a>)
												</td>
												<td></td>
												<td></td>
												<td>
													<a class="eia ico pdf">
														<span>PDF</span>
													</a>
												</td>
											</tr>
											<tr>
												<td>
													<strong>C</strong>
												</td>
												<td>
													<a href="nehor.cfm">Northeast Reserves</a>
												</td>
												<td></td>
												<td></td>
												<td>
													<a class="eia ico pdf">
														<span>PDF</span>
													</a>
												</td>
											</tr>
											<tr>
												<td>
													<strong>D</strong>
												</td>
												<td>Statistical Methodology of Estimating Petroleum Exports Using Data from U.S. Customs and Border Protection</td>
												<td></td>
												<td></td>
												<td>
													<a class="eia ico pdf">
														<span>PDF</span>
													</a>
												</td>
											</tr>
											<tr>
												<td>
													<strong></strong>
												</td>
												<td colSpan="4">
													<a>Heating Oil and Propane Update</a>
													(October - March)
												</td>
											</tr>
											<tr>
												<th colSpan="5">Sources and Glossary</th>
											</tr>
											<tr>
												<td></td>
												<td>Weekly Petroleum Status Report Sources</td>
												<td></td>
												<td></td>
												<td>
													<a class="eia ico pdf">
														<span>PDF</span>
													</a>
												</td>
											</tr>
											<tr>
												<td></td>
												<td>Weekly Petroleum Status Report Glossary</td>
												<td></td>
												<td></td>
												<td>
													<a class="eia ico pdf">
														<span>PDF</span>
													</a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="l-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
						</div>
					</div>
				</span>

				<!-- Placeholder -->
				<?php include('./includes/top.inc') ?>
			</span>
		</div>


		<div class="l-col states sticky">
			<?php include('./includes/sub-nav.inc') ?>
		</div>
	</div>
	<!-- includes/footer.inc') ?>
</body>


</html>