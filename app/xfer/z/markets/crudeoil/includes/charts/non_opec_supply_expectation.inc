<?php
require_once(__DIR__ . '/../../../includes/helper_functions.inc');
$chart = 'nonOpecSupplyExpectation';
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
<?php if ($forPPT) { ?>
	"backgroundColor": null,
	"logo" : 0,
<?php } ?>
	"renderTo": "non_opec_supply_expectation",
	"zoomType": "x",
	"marginTop": 75,
	"marginBottom": 105,
	"height": "490"
	},

	"credits": {
<?php if (!$forPPT) { ?>
	"text": "Data source: U.S. Energy Information Administration",
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
<?php if (!$forPPT) { ?>
	"title": {
	"text": "OPEC and non-OPEC supply disruptions",
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
	"tickPixelInterval": 60,
	"maxZoom": <?php echo 365 * 24 * 3600 * 1000; ?>,
	"startOnTick": false,
	"endOnTick": false,
	"tickColor": "black",
	"showLastLabel": true,
	"min": <?php echo mktime(0, 0, 0, 1, 1, 2011) * 1000; ?>,
	"labels": {
	"y": 20,
	"x": -6,
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
<?php if (!$forPPT) { ?>
	"tooltip": {
	"style": {
	"padding": 5,
	"fontFamily": "Arial"
	},
	"crosshairs": false <?php if (!$forPPT) { ?>,

		"formatter": function () {

		return "<strong>" + this.series.name + "</strong><br/>" + Highcharts.dateFormat("%B %Y", this.x) + "<br/>" + Highcharts.numberFormat(this.y, 3) + " million barrels per day" + "<br>";
		}<?php } ?>

	},
<?php } else { ?>
	"tooltip": {
	"enabled": false
	},
<?php } ?>
	"yAxis": [{
	"title": {
		"text": "million barrels per day",
		"rotation": 0,
		"style": {
			"color": "black",
			"fontWeight": "normal",
			"fontSize": "12px",
			"fontFamily": "Arial",
			"whiteSpace" : "nowrap"
		}
	},
	"stackLabels": {
	"enabled": false,
	"style": {}
	},
	"tickInterval": 1,
	"plotLines": [{
	"color": "#000000",
	"width": 2,
	"value": 0,
	"dashStyle": "solid"
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
	"stacking": "normal",
	"groupPadding": 0.3
	},
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
	}
	},
<?php if (!$forPPT) { ?>
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
	this.exportChart({filename: 'nonOpecSupplyExpectation'}, options)
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
	window.open('./csv/opecNonOpecSupplyDisruption.csv');
	}
	},
	null,
	null
	]
	}
	}
	},
<?php } ?>
<?php if (!$forPPT) { ?>
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
for ($i = 0; $i < sizeof($query); $i++) {
	echo '[' . (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) * 1000) . ', ' . floattostr($query[$i]['opec']) . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
}
?>

	],
	"type": "column",
	"color": "#003953",
	"name": "OPEC supply disruptions"
	}, {
	"data": [
<?php
for ($i = 0; $i < sizeof($query); $i++) {
	echo '[' . (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) * 1000) . ', ' . floattostr($query[$i]['nonopec']) . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
}
?>

	],
	"type": "column",
	"color": "#0096d7",
	"name": "non-OPEC supply disruptions"
	}]
	}
<?php
$chartOptions = ob_get_clean();
?>
	<script type="text/javascript">
		var chart,
				opts_non_opec_supply_expectation = <?php echo $chartOptions; ?>;


		$(document).ready(function () {
			var chart = new Highcharts.Chart(opts_non_opec_supply_expectation);
		});
	</script>

	<div id="non_opec_supply_expectation"></div>
<?php if (!$forPPT) { ?>
	<div id="update_date">
		<div class="update">
			Updated: Monthly | Last Updated: <?php echo $updateDate[0]['update_date']; ?>
		</div>
	</div>
<?php } ?>