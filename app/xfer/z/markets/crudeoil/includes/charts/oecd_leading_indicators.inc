<?php
require_once(__DIR__ . '/../../../includes/helper_functions.inc');
$chart = 'leading_indicators';
$forPPT = isset($forPPT) ? $forPPT : false;
$query = null;
$updateDate = null;
ob_start();
// include(__DIR__ . '/../../data.php');
ob_end_clean();
date_default_timezone_set('UTC');
?>
<script type="text/javascript">
	var chart,
			opts_oecd_leading_indicators =
			{
				"chart": {
					<?php if($forPPT) { ?>"backgroundColor": null,<?php } ?>
					"renderTo": "leading_indicators",
					"zoomType": "x",
					"marginTop": 75,
					"marginLeft": 30,
					"marginBottom": 105,
					"height": "510"
					, "marginRight": <?php if ($forPPT) {
					echo '30';
				} else {
					echo '40';
				} ?>

				},

				"credits": {
					<?php if(!$forPPT) { ?>
					"text": "Data source: U.S. Energy Information Administration, Refinitiv An LSEG Business.",
					"href": "",
					"position": {
						"align": "left",
						"verticalAlign": "bottom",
						"x": 50,
						"y": -10,
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
					"text": "OECD Leading Crude Oil Indicators",
					"align": "left",
					"x": 5,
					"y": 20,
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
					"tickInterval": <?php echo json_encode(floatval(365 * 24 * 3600 * 1000)); ?>,
					"startOnTick": false,
					"showLastLabel": false,
					"endOnTick": true,
					"minPadding": 0,
					"lineColor": "#a8a9a9",
					"labels": {
						"y": 20,
						"style": {
							"color": "black",
							"fontFamily": "Arial"
						}
					},
					"plotLines": [{
						"color": "#7f7f7f",
						"dashStyle": "shortdash",
						<?php
						$date = "null";
						for ($i = 0; $i < sizeof($query); $i++) {
							if (mktime(0, 0, 0, $query[$i]['qtr'] * 3, 1, $query[$i]['year']) <= time()) {
								$date = (mktime(0, 0, 0, $query[$i]['qtr'] * 3 - 2, 1, $query[$i]['year']) * 1000) + (365 * 24 * 3600 * 1000 / 8);
							}
						}
						?>
						"value": <?php echo $date; ?>,
						"width": 0.5,
						"label": {
							"text": "forecast",
							"verticalAlign": "top",
							"rotation": 0,
							"y": 14
						}

					}]
				},
				<?php if($forPPT) { ?>
				"labels": {
					"items": [{
						// "html": "% change (year-on-year)",
						"style": {
							"left": -15,
							"top": -25,
							"color": "black",
							"fontFamily": "Arial"
						}
					}, {
						// "html": "$/b (real 2010 dollars)",
						"style": {
							"left": "370px",
							"top": -25,
							"color": "#0096d7",
							"fontFamily": "Arial"
						}
					}]
				},
				<?php } ?>
				"legend": {
					"enabled": true,
					"layout": "horizontal",
					"align": "center",
					"verticalAlign": "bottom",
					"x": 0,

					"y": <?php if ($forPPT) {
					echo '-20';
				} else {
					echo '10';
				} ?>,
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
								quarter = Math.ceil(( d.getMonth() / 3)) + 1 < 5 ? Math.ceil(( d.getMonth() / 3)) + 1 : 1,
								year = Math.ceil(( d.getMonth() / 3)) + 1 < 5 ? d.getFullYear() : d.getFullYear() + 1,
								val = {
									"world liquid fuels consumption": this.y.toFixed(1) + "% change",
									"world GDP": this.y.toFixed(1) + "% change",
									"WTI crude oil price": "$" + this.y.toFixed(2) + " per barrel",
								}[this.series.name];

						//quarter = {1:"1st",2:"2nd",3:"3rd",4:"4th"}[quarter];

						return "<strong>" + this.series.name + "</strong><br/>" + year + ", quarter " + quarter + "<br/>" + val;
					}
				},
				<?php } else { ?>
				"tooltip": {
					"enabled": false
				},
				<?php } ?>
				"yAxis": [{
					<?php if(!$forPPT) { ?>
					"title": {
						"text": "Placeholder",
						"rotation": 0,
						"style": {
							"color": "black",
							"fontWeight": "normal",
							"fontSize": "12px",
							"fontFamily": "Arial"
						}
					},
					<?php } else { ?>
					"title": {"text" : ""},
					<?php } ?>
					"min": -5,
					"max": 8,
					"tickInterval": 2,
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
				}, {
					<?php if(!$forPPT) { ?>
					"title": {
						"text": "Placeholder",
						"rotation": 0,
						"style": {
							"color": "black",
							"fontWeight": "normal",
							"fontSize": "12px",
							"fontFamily": "Arial"
						}
					},
					<?php } else { ?>
					"title": {"text" : ""},
					<?php } ?>
					"opposite": true,
					"max": 90,
					"min": -150,
					"labels": {
						"style": {
							"color": "#0096d7",
							"fontFamily": "Arial"
						}
					}
				}],
				"plotOptions": {
					"column": {
						"shadow": 0,
						"borderWidth": 0
					},
					"line": {
						"shadow": 0,
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
					},
					"series": {
						<?php if($forPPT) { ?>
						"enableMouseTracking": false,
						"marker": {
							"enabled": false
						}
						<?php } ?>
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
										this.exportChart({filename: 'oecd_leading_indicators'}, options)
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
										window.open('./csv/oecd_leading_indicators.csv');
									}
								},
								null,
								null
							]
						}
					}
				},
				"navigation": {
					"buttonOptions": {
						"y": 0,
						theme: {
							style: {
								fontSize: '12px',
								textTransform: 'uppercase',
								color: "#00000"
							}
						}
					}
				},
				<?php } ?>
				"colors": [
					"#0096d7",
					"#bd732a"
				],

				"series": [{
					"data": [
						[74.54, 76.80],
						[74.79, 77.30],
						[75.06, 77.40],
						[75.37, 77.37],
						[75.66, 77.45],
						[75.95, 77.42],
						[76.27, 77.29],
						[76.66, 77.27],
						[77.00, 77.38],
						[77.53, 77.48],
						[77.96, 77.62],
						[78.48, 77.01],
						[78.93, 76.78],
						[79.36, 77.30],
						[79.87, 77.44],
						[80.25, 77.59],
						[80.58, 77.78],
						[80.91, 78.25],
						[81.14, 78.81],
						[81.32, 79.22],
						[81.55, 79.60],
						[81.65, 79.92],
						[81.75, 79.72],
						[81.74, 79.54],
						[81.80, 79.58],
						[81.84, 78.69],
						[81.74, 78.16],
						[81.67, 78.51],
						[81.65, 78.97],
						[81.52, 79.38],
						[81.40, 79.84],
						[81.36, 80.48],
						[81.19, 80.73],
						[80.91, 80.68],
						[80.69, 80.61],
						[80.57, 81.45],
						[80.51, 81.48]
						// <?php
						// for($i = 0; $i < sizeof($query); $i++) {
						//     echo '[' . (mktime(0, 0, 0, $query[$i]['qtr'] * 3 - 2, 1, $query[$i]['year'])*1000) . ', ' . floattostr($query[$i]['consumption_change']) . ']' . ($i < sizeof($query)-1 ? ', ' : '');
						// }
						// ?>

					],
					"type": "line",
					"color": "#a33340",
					"name": "world liquid fuels consumption",
					"yAxis": 0
				}, {
					"data": [
						// <?php
						// for($i = 0; $i < sizeof($query); $i++) {
						//     echo '[' . (mktime(0, 0, 0, $query[$i]['qtr'] * 3 - 2, 1, $query[$i]['year'])*1000) . ', ' . floattostr($query[$i]['world_gdp_change']) . ']' . ($i < sizeof($query)-1 ? ', ' : '');
						// }
						// ?>

					],
					"type": "column",
					"color": "#0096d7",
					"name": "world GDP",
					"yAxis": 0
				}, {
					"data": [
						// <?php
						// for($i = 0; $i < sizeof($query); $i++) {
						//     echo '[' . (mktime(0, 0, 0, $query[$i]['qtr'] * 3 - 2, 1, $query[$i]['year'])*1000) . ', ' . floattostr($query[$i]['wti_real']) . ']' . ($i < sizeof($query)-1 ? ', ' : '');
						// }
						// ?>

					],
					"type": "line",
					"color": "#bd732a",
					"name": "WTI crude oil price",
					"yAxis": 1
				}]
			}
			;


	$(document).ready(function () {
		var chart = new Highcharts.Chart(opts_nonoecd_demand_world);
		<?php if(!$forPPT) { ?>
		chart.yAxis[0].update({title: {"x": 15}});
		<?php } ?>
	});
</script>
<div id="leading_indicators"></div>
<?php if (!$forPPT) { ?>
	<div id="update_date">
		<div class="update">
			Updated: Monthly | Last Updated: <?php echo $updateDate[0]['update_date']; ?>
		</div>
	</div>
<?php } ?>
