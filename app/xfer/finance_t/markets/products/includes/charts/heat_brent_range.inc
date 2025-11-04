<?php
require_once(__DIR__ . '/../../../includes/helper_functions.inc');
$chart = 'heat_brent_range';
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
						"renderTo": "heat_brent_range",
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
						"text": "Distillate - Brent Crack Spread Ranges",
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
						"tickInterval": <?php echo (365 * 24 * 3600 * 1000) / 12; ?>,
						"showLastLabel": true,
						"startOnTick": false,
						"endOnTick": false,
						"lineColor": "#a8a9a9",
                        "min" : <?php echo mktime(0, 0, 0, 1, 1, $query[0]['prior_year'])*1000; ?>,
                        "max" : <?php echo mktime(0, 0, 0, 12, 1, $query[0]['prior_year'])*1000; ?>,

						"labels": {
							"format": "{value: %b}",
							"y": 20,
							"style": {
								"color": "black",
								"fontFamily": "Arial"
							}
						}
					},
					<?php if(!$forPPT) { ?>
					"caption": {
						"x" : 15,
						"y" : -20,
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
						"verticalAlign": "bottom",
						"x": 0,
						"y": <?php if(!$forPPT) { echo -25; } else { echo -40; }?>,
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
							console.log(this.y);
							return "<b>" + this.series.name + "</b><br>" + Highcharts.dateFormat("%B %Y", this.x) + "<br/>" + "$" + Highcharts.numberFormat(this.y, 3) + (this.series.name == "U.S. retail price of regular gasoline" ? " per gallon" : " per barrel");
						}
					},

					<?php } ?>
					"yAxis": [{
						"title": {
							"text": "dollars per gallon, nominal",
							"style" : {
								"fontWeight" : "normal",
								"color" : "black"
							}
						},
						"min": 0,
						"max": 1.8,
						"tickInterval": 0.1,
						"plotLines": [{
							"color": "black",
							"width": 2,
							"value": 0
						}],
						"labels": {
							"format" : "{value:.1f}",
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
											this.exportChart({filename: 'heat_brent_range'}, options)
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
											window.open('./csv/heat_brent_range.csv');
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
									echo '[' . (mktime(0, 0, 0, $query[$i]['mm'], 1, $query[$i]['prior_year']) * 1000) . ', ' . number_format($query[$i]['min'], 4, '.', '') . ', ' . number_format($query[$i]['max'], 4, '.', '') . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
								}
								?>

							],
							"type": "arearange",
							"xType": 5,
							"lineWidth": 0,
							"fillOpacity": 0.3,
							"zIndex": 0,
							"yAxis": 0,
							"name": "Range (<?php echo $query[0]['year_range']; ?>)",
							"color": "#666666"
						},
						{
							"data": [
								<?php
								for ($i = 0; $i < sizeof($query); $i++) {
									echo '[' . (mktime(0, 0, 0, $query[$i]['mm'], 1, $query[$i]['prior_year']) * 1000) . ', ' . number_format($query[$i]['avg'], 4, '.', '') . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
								}
								?>

							],
							"type": "line",
							"name": "Average (<?php echo $query[0]['year_range']; ?>)"
						},
						{
							"data": [
								<?php
								for ($i = 0; $i < sizeof($query); $i++) {
									echo '[' . (mktime(0, 0, 0, $query[$i]['mm'], 1, $query[$i]['prior_year'] ) * 1000) . ', ' . number_format($query[$i]['prior'], 4, '.', '') . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
								}
								?>

							],
							"type": "line",
							"name": "<?php echo $query[0]['prior_year']; ?>"
						},
						{
							"data": [
								<?php
								$outputComma = false;
								for ($i = 0; $i < sizeof($query); $i++) {
									if (array_key_exists('current', $query[$i])) {
										echo ($outputComma ? ',' : '' ) . '[' . (mktime(0, 0, 0, $query[$i]['mm'], 1, $query[$i]['prior_year']) * 1000) . ', ' .  number_format($query[$i]['current'], 4, '.', '') . ']';
										$outputComma = true;
									}
								}
								?>

							],
							"lineWidth": 0,
							"marker": {
								"enabled": true,
								"radius": 4,
								"symbol":"square"
							},
							"name": "<?php echo $query[0]['current_year']; ?>"
						}
					]
}
<?php $chartOptions = ob_get_clean();?>
<script type="text/javascript">
    var chart,
            opts_heat_brent_range = <?php echo $chartOptions;?>;


		$(document).ready(function () {
			var chart = new Highcharts.Chart(opts_heat_brent_range);
		});
	</script>

	<div id="heat_brent_range"></div>
<?php if (!$forPPT) { ?>
	<div id="update_date">
		<div class="update">
			Updated: Monthly | Last Updated: <?php echo $updateDate[0]['update_date']; ?>
		</div>
	</div>
<?php } ?>