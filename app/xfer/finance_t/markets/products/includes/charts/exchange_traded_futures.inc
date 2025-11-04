<?php
require_once(__DIR__ . '/../../../includes/helper_functions.inc');
$chart = 'exchange_traded_futures';
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
					"renderTo": "exchange_traded_futures",
					"zoomType": "x",
					"marginTop": 75,
					"marginBottom": 125,
					"height": "510"
					<?php if($forPPT) { ?>
					, "marginRight": 20
					<?php } else { ?>
					, "marginRight": 10
					<?php } ?>
				},
				"credits": {
					<?php if(!$forPPT) { ?>
					"text": "Data source: CFTC Commitment of Traders.",
					"href": "",
					"position": {
						"align": "left",
						"verticalAlign": "bottom",
						"x": 50,
						"y": -5,
					},
					"style": {
						"color": "black",
						"fontSize": "10px",
						"fontFamily": "Arial"
					}
					<?php } else { ?>
					"enabled": false
					<?php } ?>
				},

				<?php if(!$forPPT) { ?>
				"title": {
					"text": "U.S. exchange-traded futures positions by money managers",
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
					"tickInterval": <?php echo 365 * 24 * 3600 * 1000; ?>,
					"showLastLabel": true,
					"endOnTick": false,
					"lineColor": "#a8a9a9",
					"min": <?php echo mktime(0, 0, 0, 1, 1, 2007) * 1000; ?>,
					"labels": {
						"y": 20,
						"style": {
							"color": "black",
							"fontFamily": "Arial"
						}
					}
				},
				<?php if(!$forPPT) { ?>
				"navigation": {
					"buttonOptions": {
						"y": 0
					}
				},
				<?php } ?>
				<?php if(!$forPPT) { ?>
				"caption": {
					"x" : 0,
					"y" : -15,
					"text": "Note: Since the spring of 2013, the underlying commodity for the distillate futures contract has been ultra-low sulfur diesel (ULSD).",
					"style": {
						"color": "gray",
						"fontSize": "10px",
						"fontFamily": "Arial"
					}
				},
				<?php } ?>
				"legend": {
					"enabled": true,
					"layout": "horizontal",
					"align": "center",
					"verticalAlign": "bottom",
					"x": 0,
					"y": -14,
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
				<?php if(!$forPPT) { ?>
				"tooltip": {
					"style": {
						"padding": 5,
						"fontFamily": "Arial"
					},
					"formatter": function () {
						var d = new Date(this.x),
								quarter = Math.ceil(( d.getMonth() / 3)) + 1 < 5 ? Math.ceil(( d.getMonth() / 3)) + 1 : 1;
						year = Math.ceil(( d.getMonth() / 3)) + 1 < 5 ? d.getFullYear() : d.getFullYear() + 1;
						return '<b>' + this.series.name + '</b>' + '<br/>' + year + ', quarter ' + quarter + '<br/>' + Highcharts.numberFormat(this.y, 3) + " thousands of contracts";
					}
				},
				<?php } else { ?>
				"tooltip": {
					"enabled": false
				},
				<?php } ?>
				"yAxis": [{
					"title": {
						"text": "thousands of contracts",
						"style": {
							"color": "black",
							"fontWeight": "normal",
							"fontSize": "12px",
							"fontFamily": "Arial"
						}
					},
					"min": -40,
					"max": 120,
					"tickInterval": 20,
					"plotLines": [{
						"color": "black",
						"width": 2,
						"value": 0
					}],
					"labels": {
						"style": {
							"color": "black",
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
				<?php if(!$forPPT) { ?>
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
										this.exportChart({filename: 'exchange_traded_futures'}, options)
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
										window.open('./csv/exchange_traded_futures.csv');
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
					"#5D9732",
					"#0096d7",
					"#003953",
					"#a33340",
					"#bd732a",
					"#103203",
					"#ffc702"
				],
				"series": [
					{
						"data": [
							<?php
							for ($i = 0; $i < sizeof($query); $i++) {
								echo '[' . (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) * 1000) . ', ' . number_format($query[$i]['rbob'], 2, '.', '') . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
							}
							?>

						],
						"type": "column",
						"name": "Net Money Manger open interest in all RBOB futures",
						"color": "#0096d7"

					},
					{
						"data": [
							<?php
							for ($i = 0; $i < sizeof($query); $i++) {
								echo '[' . (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) * 1000) . ', ' . number_format($query[$i]['ulsd'], 2, '.', '') . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
							}
							?>

						],
						"type": "column",
						"name": "Net Money Manger open interest in all distillate futures",
						"color": "#a33340"
					}
				]
}
<?php $chartOptions = ob_get_clean();?>
<script type="text/javascript">
    var chart,
            opts_exchange_traded_futures = <?php echo $chartOptions;?>;


	$(document).ready(function () {
		var chart = new Highcharts.Chart(opts_exchange_traded_futures);
		chart.renderer.image('images/net_long.png', 500, 50, 90, 90).add();
		chart.renderer.image('images/net_short.png', 500, 290, 90, 90).add();
	});
</script>

<div id="exchange_traded_futures"></div>
<?php if (!$forPPT) { ?>
	<div id="update_date">
		<div class="update">
			Updated: Quarterly | Last Updated: <?php echo $updateDate[0]['update_date']; ?>
		</div>
	</div>
<?php } ?>
