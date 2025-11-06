<?php
require_once(__DIR__ . '/../../../includes/helper_functions.inc');
$chart = 'distillate_inventories';
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
						"renderTo": "distillate_inventories",
						"zoomType": "x",
						"marginTop": 85,
						"marginBottom": 125,
						"height": "490"
						<?php if($forPPT) { ?>
						, "marginRight": 40
						<?php } else { ?>
						, "marginRight": 40
						<?php } ?>
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
						"text": "Distillate Inventories and distillate 3rd minus 1st month futures contract",
						"align": "left",
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
						"min": <?php echo mktime(0, 0, 0, 1, 1, 2001) * 1000; ?>,
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
						"x" : 10,
						"y" : -40,
						"text": "Note: Since the spring of 2013, the underlying commodity for the distillate futures contract has been ultra-low sulfur diesel (ULSD).",
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
						"y" : <?php if(!$forPPT) { echo 15; } else { echo -30; }?>,
						"verticalAlign": "bottom",
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
							var d = new Date(this.x),
									quarter = Math.ceil(( d.getMonth() / 3)) + 1 < 5 ? Math.ceil(( d.getMonth() / 3)) + 1 : 1;
							year = Math.ceil(( d.getMonth() / 3)) + 1 < 5 ? d.getFullYear() : d.getFullYear() + 1;
							return '<b>' + this.series.name + '</b>' + '<br/>' + year + ', quarter ' + quarter + '<br/>' + Highcharts.numberFormat(this.y, 3) + (this.series.name == "Total gasoline net imports" ? " million barrels per day" : " per barrel");
						}
					},
					<?php } else { ?>
					"tooltip": {
						"enabled": false
					},
					<?php } ?>
					"yAxis": [{
						"title": {
							"text": "million barrels change (year over year)",
							"style" : {
								"color" : "#0096d7",
								"fontWeight" : "normal",
								"whiteSpace" : "nowrap"
							}
						},
						"tickPositions" : [-80, -70, -60, -50, -40, -30, -20, -10, 0, 10, 20, 30, 40, 50, 60, 70, 80],
						"labels": {
							"style": {
								"color": "#0096d7",
								"fontFamily": "Arial"
							}
						}
					}, {
						"title": {
							"text": "cents per gallon, nominal (year over year)",
							"style" : {
								"color" : "#bd732a",
								"fontWeight" : "normal",
								"whiteSpace" : "nowrap"
							}
						},
						"opposite": true,
						"tickPositions": [-40, -35, -30, -25, -20, -15, -10, -5, 0, 5, 10, 15, 20, 25, 30, 35, 40],
						"labels": {
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
											this.exportChart({filename: 'distillate_inventories'}, options)
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
											window.open('./csv/distillate_inventories.csv');
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
									if (array_key_exists('distillate_inventories', $query[$i])) {
										echo '[' . (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) * 1000) . ', ' . number_format($query[$i]['distillate_inventories'], 2, '.', '') . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
									}
								}
								?>

							],
							"type": "column",
							"color": "#0096d7",
							"name": "U.S. distillate inventories"
						},
						{
							"data": [
								<?php
								for ($i = 0; $i < sizeof($query); $i++) {
									if (array_key_exists('ulsd', $query[$i])) {
										echo '[' . (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) * 1000) . ', ' . number_format($query[$i]['ulsd'], 2, '.', '') . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
									}
								}
								?>

							],
							"type": "line",
							"color": "#bd732a",
							"name": "Distillate 3rd - 1st month",
							"yAxis": 1
						}

					]
}
<?php $chartOptions = ob_get_clean();?>
<script type="text/javascript">
    var chart,
            opts_distillate_inventories = <?php echo mb_convert_encoding($chartOptions, 'UTF-8', 'ISO-8859-1');?>;


		$(document).ready(function () {
			var chart = new Highcharts.Chart(opts_distillate_inventories);
		});
	</script>

	<div id="distillate_inventories"></div>
<?php if (!$forPPT) { ?>
	<div id="update_date">
		<div class="update">
			Updated: Monthly | Last Updated: <?php echo $updateDate[0]['update_date']; ?>
		</div>
	</div>
<?php } ?>