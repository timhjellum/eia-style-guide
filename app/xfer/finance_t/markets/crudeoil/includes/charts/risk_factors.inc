<?php
require_once(__DIR__ . '/../../../includes/helper_functions.inc');
$chart = 'risk_factors';
$forPPT = isset($forPPT) ? $forPPT : false;
$forImage = isset($forImage) ? $forImage : false;
$forImageGeneration = $forPPT || $forImage;
$query = null;
$updateDate = null;
ob_start();
include(__DIR__ . '/../../data.php');
ob_end_clean();
date_default_timezone_set('UTC');
$handle = fopen(__DIR__ . "/../../../data/geopolitical_events.csv", "r");
if ($handle == false) {
	$lastError = error_get_last();
	echo 'File open failed. reason: ' . $lastError['message'];
	throw new Exception('File open failed. reason: ' . $lastError['message']);
} else {
	$events = array();
	while (($data = fgetcsv($handle)) !== false) {
		$month = explode('/', $data[0])[0];
		$day = explode('/', $data[0])[1];
		$year = explode('/', $data[0])[2];
		$dateX = mktime(0, 0, 0, $month, $day, $year) * 1000;
		
		$events[strval($dateX)] = $data[1];
	}
}
$dataArr = array(
		"wti_real" => array(),
		"importer_real_partial" => array()
);
for ($i = 0; $i < sizeof($query); $i++) {
	$date = mktime(0, 0, 0, $query[$i]['qtr'] * 3 - 2, 1, $query[$i]['year']) * 1000;

	if (array_key_exists('wti_real', $query[$i]) && $query[$i]['wti_real'] != '') {
		array_push($dataArr['wti_real'], array(
				"date" => $date,
				"value" => $query[$i]['wti_real']
		));
	}

	if (array_key_exists('importer_real_partial', $query[$i]) && $query[$i]['importer_real_partial'] != '') {
		array_push($dataArr['importer_real_partial'], array(
				"date" => $date,
				"value" => $query[$i]['importer_real_partial']
		));
	}
}
ob_start();
?>

	{
	"chart": {
<?php if($forPPT) { ?>
	"backgroundColor": null,
	"logo" : 0,
<?php } ?>
	"renderTo": "opts_risk_factors",
	"zoomType": "x",
	"marginTop": 75,
	"marginBottom": 105,
	"height": "520"
	},

	"credits": {
<?php if(!$forPPT) { ?>
	"text": "Data source: U.S. Energy Information Administration, Refinitiv An LSEG Business",
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
	"text": "Crude oil prices and key geopolitical and economic events",
	"align": "left",
	"x": 0,
	"y": 15,
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
	"tickInterval": <?php echo 5 * 365 * 24 * 3600 * 1000; ?>,
	"lineColor": "#000000",
	"labels": {
	"y": 20,
	"style": {
	"color": "black",
	"fontFamily": "Arial",
	"textOverflow": "none"
	}
	}
	},
	"legend": {
	"enabled": true,
	"layout": "horizontal",
	"align": "center",
	"verticalAlign": "bottom",
	"x": 0,
	"y": -20,
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
	formatter: function () {
	var d = new Date(this.x),
	quarter = Math.ceil(( d.getMonth() / 3)) + 1 < 5 ? Math.ceil(( d.getMonth() / 3)) + 1 : 1,
	year = Math.ceil(( d.getMonth() / 3)) + 1 < 5 ? d.getFullYear() : d.getFullYear() + 1,
	ret = '<b>' + this.series.name + '</b><br/>' + year + ', quarter ' + quarter + '<br/>$' + this.y.toFixed(2) + ' per barrel';

	if (typeof(this.point.name) != 'undefined')
	ret += '<br><b>' + this.point.name + '</b>';

	if (this.series.name == 'Events')
	return '<b>' + this.point.name + '</b>';
	else
	return ret;
	}
	},
<?php } else { ?>
	"tooltip": {
	"enabled": false
	},
<?php } ?>
	"yAxis": [{
	"title": {
	"text": "$/b (real 2022 dollars)",
	"rotation": -90,
	"style": {
	"color": "black",
	"fontWeight": "normal",
	"fontSize": "12px",
	"fontFamily": "Arial"
	}
	},
	"max": 175,
	"min": 0,
	"tickInterval": 25,
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
	"marker": {
	"enabled": false
	}
<?php } else { ?>
	"marker": {
	"enabled": true,
	"radius": 0
	}
<?php } ?>
<?php if(!$forPPT) { ?>,
	"dataLabels": {
	"enabled": true,
	"color": "#ffffff",
	"formatter":
	function () {
	if (typeof(this.point.eventId) != 'undefined') {
		return this.point.eventId;
	}
	},
	"y": 10
	}<?php } ?>

	},
	"line": {
	"shadow": 0,
	"lineWidth": 2,
	"marker": {
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
	this.exportChart({filename: 'Prices_events'}, options)
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
	window.open('./csv/Prices_events.csv');
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
	"#5D9732",
	"#0096d7",
	"#a33340",
	"#003953",
	"#bd732a",
	"#103203",
	"#ffc702"
	],
	"series": [{
	"data": [
<?php
$eventCount = 1;
for ($i = 0; $i < sizeof($dataArr["importer_real_partial"]); $i++) {
	if (array_key_exists(strval($dataArr["importer_real_partial"][$i]["date"]), $events)) {
		?>
		{
			"x" : <?php echo $dataArr["importer_real_partial"][$i]["date"]?>,
			"y" : <?php echo $dataArr["importer_real_partial"][$i]["value"]?>,
			"name" : "<?php echo $events[$dataArr["importer_real_partial"][$i]["date"]]?>",
			"eventId" : <?php echo $eventCount?>,
			"marker" : {
				"symbol" : "circle",
				"radius" : 8, 
				"fillColor" : "#000000"
			}
		}<?php
		if($i < sizeof($dataArr["importer_real_partial"]) - 1) {
			echo "," . PHP_EOL;
		}
		$eventCount++;
	} else {
		?>
		{ 
			"x": <?php echo $dataArr["importer_real_partial"][$i]["date"]?>,
			"y" : <?php echo $dataArr["importer_real_partial"][$i]["value"]?>
		}<?php
		if($i < sizeof($dataArr["importer_real_partial"]) - 1) {
			echo "," . PHP_EOL;
		}
	}
}
?>
	],
	"type": "line",
	"color": "#0096d7",
	"name": "imported refiner acquisition cost of crude oil"
	}, {
	"data": [
<?php
for ($i = 0; $i < sizeof($dataArr["wti_real"]); $i++) {
	if (array_key_exists(strval($dataArr["wti_real"][$i]["date"]), $events)) {
		?>
		{
			"x" : <?php echo $dataArr["wti_real"][$i]["date"]?>,
			"y" : <?php echo $dataArr["wti_real"][$i]["value"]?>,
			"name" : "<?php echo $events[$dataArr["wti_real"][$i]["date"]]?>",
			"eventId" : <?php echo $eventCount?>,
			"marker" : {
				"symbol" : "circle",
				"radius" : 8, 
				"fillColor" : "#000000"
			}
		}<?php
		if($i < sizeof($dataArr["wti_real"]) - 1) {
			echo "," . PHP_EOL;
		}
		$eventCount++;
	} else {
		?>
		{ 
			"x": <?php echo $dataArr["wti_real"][$i]["date"]?>,
			"y" : <?php echo $dataArr["wti_real"][$i]["value"]?>
		}<?php
		if($i < sizeof($dataArr["wti_real"]) - 1) {
			echo "," . PHP_EOL;
		}
	}
}
?>
	],
	"type": "line",
	"color": "#bd732a",
	"name": "WTI crude oil price"
	}]
	}
<?php $chartOptions = ob_get_clean(); ?>
	<script type="text/javascript">
		var chart,
				opts_risk_factors = <?php echo $chartOptions; ?>;

		$(document).ready(function () {
			var chart = new Highcharts.Chart(opts_risk_factors);
		});
	</script>
	<style>
		#footnotes {
			margin: auto;
			position: relative;
			width: 75%;
		}

		.col1,
		.col2 {
			display: inline-block;
		}

		.col2 {
			position: absolute;
			right: 0;
			top: 0;
		}
	</style>

	<div id="opts_risk_factors"></div>
<?php if (!$forPPT) { ?>
	<div id="update_date">
		<div class="update">
			Updated: Quarterly | Last Updated: <?php echo $updateDate[0]['update_date']; ?>
		</div>
	</div>
	<div id="footnotes">
		<?php $dateArr = array_keys($events);
		asort($dateArr); ?>
		<span class="col1">
                <?php
								for ($i = 0; $i <= ceil(sizeof($dateArr) / 2) - 1; $i++) {
									echo '<div>' . ($i + 1) . ': ' . $events[$dateArr[$i]] . '</div>';
								}
								?>
            </span>
            <span class="col2">
                <?php
								for ($i = ceil(sizeof($dateArr) / 2); $i < sizeof($dateArr); $i++) {
									echo '<div>' . ($i + 1) . ': ' . $events[$dateArr[$i]] . '</div>';
								}
								?>
            </span>
	</div>
<?php } ?>