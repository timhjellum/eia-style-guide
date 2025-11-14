<?php
require_once(__DIR__ . '/../../../includes/helper_functions.inc');
$chart = 'ulsd_futures_crack_spread';
$forPPT = isset($forPPT) ? $forPPT : false;
$forImage = isset($forImage) ? $forImage : false;
$forImageGeneration = $forPPT || $forImage;
$query = null;
$updateDate = null;
ob_start();
include(__DIR__ . '/../../data.php');
ob_end_clean();
date_default_timezone_set('UTC');
ob_start();
?>
{
					"chart": {
						<?php if($forPPT) { ?>
						"backgroundColor": null,
						"logo" : 0,
						<?php } ?>
						"renderTo": "ulsd_futures_crack_spread",
						"zoomType": "x",
						"marginTop": 85,
						"marginBottom": 125,
						"height": "490",
						"marginRight": 40
					},
					"credits": {
						<?php if(!$forPPT) { ?>
						"text": "Data source: U.S. Energy Information Administration, Bloomberg L.P.",
						"href": ""
						<?php } else { ?>
						"enabled": false
						<?php } ?>
					},

					<?php if(!$forPPT) { ?>
					"title": {
						"text": "Distillate futures price and crack spread",
						"style": {
							"color": "black",
							"fontWeight": "bold",
							"fontSize": "16px",
							"fontFamily": "Arial"
						}
					},
					<?php } else { ?>
					"title": {
						"text": ""
					},
					<?php } ?>
					"xAxis": {
						"type": "datetime",
						"tickInterval": <?php echo 365 * 24 * 3600 * 1000 * 2; ?>,
						"showLastLabel": true,
						"endOnTick": false,
						"lineColor": "#a8a9a9",
						"min": <?php echo mktime(0, 0, 0, 1, 1, 2000) * 1000; ?>,
						"labels": {
							"y": 20,
							"style": {
								"color": "black",
								"fontFamily": "Arial"
							}
						}
					},
					<?php if(!$forPPT) { ?>
					"caption": {
						"x" : 10,
						"y" : -15,
						"text": "Note: ULSD is ultra-low sulfur diesel",
						"style": {
							"color": "gray",
							"fontSize": "10px",
							"fontFamily": "Arial"
						}
					},
					<?php } ?>
					"legend": {
						<?php if(!$forPPT) { ?>"backgroundColor" : "#F1F1F1",<?php } ?>
						"enabled": true,
						"layout": "horizontal",
						"align": "center",
						"verticalAlign": "bottom",
						"x": 0,
						"y":  -15,
						"borderWidth": 0,
						"symbolPadding": 5,
						"itemStyle": {
							"fontFamily": "Arial",
							"color": "#189bd7",
							"textDecoration": "none"
						},
						"itemHoverStyle": {
							"fontFamily": "Arial",
							"color": "#189bd7",
							"textDecoration": "underline"
						}
					},
					<?php if(!$forImageGeneration) { ?>
					"tooltip": {
						"style": {
							"padding": 5,
							"fontFamily": "Arial"
						},
						"formatter": function () {
							return "<b>" + this.series.name + "</b><br>" + Highcharts.dateFormat("%B %Y", this.x)
									+ "<br/>" + "$" + Highcharts.numberFormat(this.y, 3) + (this.series.name == "U.S. retail price of regular gasoline" ? " per gallon" : " per barrel");
						}
					},
					<?php } else { ?>
					"tooltip": {
						"enabled": false
					},
					<?php } ?>
					"yAxis": [{
						"title": {
							"text": "futures price (dollars per gallon, nominal)",
							"style": {
								"color": "#0096d7",
								"fontWeight" : "normal",
								"whiteSpace" : "nowrap"
							}
						},
						"tickPositions" : [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10],

						"labels": {
                            "format":"{value:.0f}",
							"style": {
								"color": "#0096d7",
								"fontFamily": "Arial"
							}
						}
					}, {
						"title": {
							"text": "crack spread (dollars per gallon, nominal)",
							"style": {
								"color": "#bd732a",
								"fontWeight" : "normal",
								"whiteSpace" : "nowrap"
							}
						},
						"opposite": true,
						"tickPositions" : [0, 0.2, 0.4, 0.6, 0.8, 1, 1.2, 1.4, 1.6, 1.8, 2],
						"labels": {
							"format" : "{value:.1f}",
							"style": {
								"color": "#bd732a",
								"fontFamily": "Arial"
							}
						}
					}],
					"plotOptions": {
						"series": {
							<?php if($forPPT) { ?>
							"enableMouseTracking": false,
							<?php } ?>
							"marker": {
								"enabled": false
							}
						},
						"line": {
							"shadow": false,
							"lineWidth": 2,
							"marker": {
								"enabled": false,
								"states": {
									"hover": {
										"enabled": true,
										"radius": 4
									}
								}
							},
							"states": {
								"hover": {
									"lineWidth": 2,
									"marker": {
										"radius": 1
									}
								}
							}
						}
					},
					<?php if(!$forImageGeneration) { ?>
					"exporting": {
						"buttons": {
							"contextButton": {
								"menuItems": [
									{
										text: 'Print Chart',
										onclick: function () {
											this.print();
										}
									},
									{
										separator: true
									},
									{
										"text": 'Download Image',
										"onclick": function () {
											var options =
											{
												url: '/global/scripts/jquery/highcharts/exporting-server/index.php',
												width: 870
											}
											this.exportChart({filename: 'ulsd_futures_crack_spread'}, options)
										}
									},
									{
										"text": 'Download PDF',
										"onclick": function () {
											var options =
											{
												url: '/global/scripts/jquery/highcharts/exporting-server/index.php',
												type: 'application/pdf',
												width: 1270
											}
											this.exportChart(options)
										}
									},
									{
										"text": "Download Data in CSV",
										"onclick": function () {
											window.open('./csv/ulsd_futures_crack_spread.csv');
										}
									},
									null,
									null
								]
							}
						}
					},
					<?php } ?>
					<?php if(!$forPPT) { ?>
					"navigation": {
						"buttonOptions": {
							"y": 0
						}
					},
					<?php } ?>
					"colors": [
						"#0096d7",
						"#bd732a",
						"#5D9732",
						"#ffc702",
						"#a33340",
						"#003953",
						"#103203"
					],
					"series": [
						{
							"data": [
								<?php
								for ($i = 0; $i < sizeof($query); $i++) {
									if (array_key_exists('ulsd_front_month_price', $query[$i])) {
										echo '[' . (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) * 1000) . ', ' . number_format($query[$i]['ulsd_front_month_price'], 2, '.', '') . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
									}
								}
								?>

							],
							"type": "line",
							"name": "Distillate front month price"
						},
						{
							"data": [
								<?php
								for ($i = 0; $i < sizeof($query); $i++) {
									if (array_key_exists('heating_oil_brent_crack_spread', $query[$i])) {
										echo '[' . (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) * 1000) . ', ' . number_format($query[$i]['heating_oil_brent_crack_spread'], 2, '.', '') . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
									}
								}
								?>

							],
							"type": "line",
							"name": "Distillate-Brent crack spread",
							"yAxis": 1
						}
					]
}
<?php $chartOptions = ob_get_clean();?>
<script type="text/javascript">
    var chart,
            opts_ulsd_futures_crack_spread = <?php echo $chartOptions;?>;

		$(document).ready(function () {
			var chart = new Highcharts.Chart(opts_ulsd_futures_crack_spread);
		});
	</script>

	<div id="ulsd_futures_crack_spread"></div>
<?php if (!$forPPT) { ?>
	<div id="update_date">
		<div class="update">
			Updated: Monthly | Last Updated: <?php echo $updateDate[0]['update_date']; ?>
		</div>
	</div>
<?php } ?>