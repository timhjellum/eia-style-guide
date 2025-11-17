<?php
require_once(__DIR__ . '/../../../includes/helper_functions.inc');
$chart = 'prices1';
$forPPT = isset($forPPT) ? $forPPT : false;
$forThumbnail = isset($forThumbnail) ? $forThumbnail : false;
$query = null;
$updateDate = null;
ob_start();
include(__DIR__ . '/../../data.php');
ob_end_clean();
date_default_timezone_set('UTC');
?>
<script type="text/javascript">
	var opts_prices_crude =
			{
				chart: {
					renderTo: 'prices_crude',
					zoomType: 'x',
					marginTop: 55,
					marginBottom: 85,
					marginRight: 415,
					marginTop: 200
				},
				credits: {
					enabled: false
				},
				title: {
					text: 'World crude oil prices',
					align: 'left',
					x: 0,
					y: 10,
					style: {
						color: 'black',
						fontWeight: 'bold',
						fontSize: '16px',
						fontFamily: 'Arial'
					}
				},
				xAxis: {
					type: 'datetime',
					tickInterval: 365 * 24 * 3600 * 1000 * 2,
					lineColor: '#000000',
					labels: {
						y: 20,
						style: {
							color: 'black',
							fontSize: '9px',
							fontFamily: 'Arial'
						}
					}
				},
				navigation: {
					buttonOptions: {
						y: 0
					}
				},
				labels: {
					items: [{
						html: '$/b (real 2010 dollars, monthly average)', // Y Axis label
						style: {
							left: '-22px',
							top: '-20px',
							color: 'black',
							fontSize: '9px',
							fontFamily: 'Arial'
						}
					},
						{
							html: 'Data sources: <a href="http://www.Bloomberg.com/">Bloomberg L.P.</a>, <a href="http://thomsonreuters.com/">Refinitiv An LSEG Business</a>.',
							style: {
								left: '-20px',
								top: '150px',
								color: 'gray',
								fontSize: '8px',
								fontFamily: 'Arial'
							}
						},
						{
							html: 'Published by: <a href="http://www.eia.gov/">U.S. Energy Information Administration</a>.',
							style: {
								left: '-20px',
								top: '160px',
								color: 'gray',
								fontSize: '8px',
								fontFamily: 'Arial'
							}
						},
						{
							"html": "Updated: Monthly | Last Updated: <?php echo $updateDate[0]['update_date']; ?>",
							style: {
								left: '-20px',
								top: '325px',
								color: 'gray',
								fontSize: '10px',
								fontFamily: 'Arial'
							}
						}
					]
				},
				legend: {
					enabled: true,
					layout: 'horizontal',
					align: 'center',
					verticalAlign: 'bottom',
					y: -40,
					x: -185,
					borderWidth: 0,
					symbolPadding: 3,
					itemStyle: {
						fontFamily: 'Arial',
						color: '#189bd7',
						fontSize: '9px',
						textDecoration: 'none'
					},
					itemHoverStyle: {
						fontFamily: 'Arial',
						color: '#189bd7',
						fontSize: '8px',
						textDecoration: 'underline'
					}
				},

				tooltip: {
					style: {
						padding: 5,
						fontFamily: 'Arial'
					},
					formatter: function () {
						return '<strong>' + this.series.name + '<br/>' + '</strong>' + Highcharts.dateFormat('%B %Y', this.x) + '<br/>' + '$' + this.y.toFixed(2) + ' dollars per barrel';
					}
				},


				yAxis: [{ // Primary yAxis
					title: '',
					tickInterval: 20,
					//min: 1,
					labels: {
						style: {
							color: 'black',
							fontSize: '9px',
							fontFamily: 'Arial'
						}
					}
				}],

				plotOptions: {
					series: {
						marker: {
							enabled: false
						}
					},
					line: {
						shadow: 0,
						lineWidth: 2,
						marker: {
							enabled: false,
							states: {
								hover: {
									enabled: true,
									radius: 4
								}
							}
						},
						states: {
							hover: {
								lineWidth: 2,
								marker: {
									radius: 1
								}
							}
						}
					}
				},
				exporting: {
					buttons: {
						printButton: {
							enabled: false
						}
					}
				},
				navigation: {
					buttonOptions: {
						y: 0
					}
				},
				colors: [
					'#5D9732',
					'#0096d7',
					'#003953',
					'#a33340',
					'#bd732a',
					'#103203',
					'#ffc702'
				],
				"series": [{
					"data": [
						<?php
						for ($i = 0; $i < sizeof($query); $i++) {
							echo '[' . (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) * 1000) . ', ' . $query[$i]['wti_price'] . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
						}
						?>

					],
					"type": "line",
					"name": "WTI"
				}, {
					"data": [
						<?php
						for ($i = 0; $i < sizeof($query); $i++) {
							echo '[' . (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) * 1000) . ', ' . $query[$i]['brent_price'] . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
						}
						?>

					],
					"type": "line",
					"name": "Brent"
				}, {
					"data": [
						<?php
						for ($i = 0; $i < sizeof($query); $i++) {
							echo '[' . (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) * 1000) . ', ' . $query[$i]['mars_price'] . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
						}
						?>

					],
					"type": "line",
					"name": "Mars"
				}, {
					"data": [
						<?php
						for ($i = 0; $i < sizeof($query); $i++) {
							echo '[' . (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) * 1000) . ', ' . $query[$i]['tapis_price'] . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
						}
						?>

					],
					"type": "line",
					"name": "Tapis"
				}, {
					"data": [
						<?php
						for ($i = 0; $i < sizeof($query); $i++) {
							echo '[' . (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) * 1000) . ', ' . $query[$i]['dubai_price'] . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
						}
						?>

					],
					"type": "line",
					"name": "Dubai"
				}]
			}
			;


	$(document).ready(function () {
		var chart = new Highcharts.Chart(opts_prices_crude);
	});
</script>

<div id="prices_crude"></div>