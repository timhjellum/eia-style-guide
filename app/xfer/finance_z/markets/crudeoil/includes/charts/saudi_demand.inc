<?php
require_once(__DIR__ . '/../../../includes/helper_functions.inc');
$chart = 'saudi';
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
	"renderTo": "saudi_demand",
	"zoomType": "x",
	"marginTop": 75,
	"marginBottom": 105,
	"height": "490"
	},

	"credits": {
<?php if (!$forPPT) { ?>
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
<?php if (!$forPPT) { ?>
	"title": {
	"text": "Changes in Saudi Arabia crude oil production and WTI crude oil prices",
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
	"lineColor": "#a8a9a9",
	"labels": {
	"y": 20,
	"style": {
	"color": "black",
	"fontFamily": "Arial"
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
	formatter: function () {
	var val = {
	"WTI percent change": Math.abs(this.y.toFixed(0)) + " percent",
	"Saudi Arabia crude oil production": Math.abs(this.y.toFixed(2)) + "  million barrels per day"
	}[this.series.name],

	d = new Date(this.x),
	quarter = Math.ceil(( d.getMonth() / 3)) + 1 < 5 ? Math.ceil(( d.getMonth() / 3)) + 1 : 1;
	year = Math.ceil(( d.getMonth() / 3)) + 1 < 5 ? d.getFullYear() : d.getFullYear() + 1;

	if (this.y < 0) val = "-" + val;

	return "<b>" + this.series.name + "</b><br/>" + year + ", quarter " + quarter + "<br/>" + val;
	}
	},
<?php } else { ?>
	"tooltip": {
	"enabled": false
	},
<?php } ?>
	"yAxis": [{
	"title": {
	"text": "million barrels per day (year-on-year)",
    "rotation": -90,
	"style": {
	"color": "#0096d7",
	"fontWeight": "normal",
	"fontSize": "12px",
	"fontFamily": "Arial"
	}
	},
	"tickPositions" : [-2.0, -1.5, -1.0, -0.5, 0, 0.5, 1, 1.5, 2.0, 2.5, 3.0, 3.5],
	"plotLines": [{
	"color": "black",
	"width": 2,
	"value": 0
	}],
	"labels": {
	"style": {
	"color": "#0096d7",
	"fontFamily": "Arial"
	},
	"format" : "{value:.1f}"
	}
	}, {
	"title": {
	"text": "% change (year-on-year)",
    "rotation": -90,
	"style": {
	"color": "#bd732a",
	"fontWeight": "normal",
	"fontSize": "12px",
	"fontFamily": "Arial"
	}
	},
	"opposite": true,
	"tickPositions":[-80, -60, -40, -20, 0, 20, 40, 60, 80, 100, 120, 140],
	"labels": {
	"style": {
	"color": "#bd732a",
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
<?php if ($forPPT) { ?>
	"enableMouseTracking": false,
	"marker": {
	"enabled": false
	}
<?php } ?>
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
	this.exportChart({filename: 'saudi_production'}, options)
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
	window.open('./csv/saudi_production.csv');
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
	"#003953",
	"#a33340",
	"#bd732a",
	"#103203",
	"#ffc702"
	],
	"series": [{
	"data": [
<?php
for ($i = 0; $i < sizeof($query); $i++) {
	echo '[' . (mktime(0, 0, 0, $query[$i]['qtr'] * 3 - 2, 1, $query[$i]['year']) * 1000) . ', ' . floattostr($query[$i]['saudi_production']) . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
}
?>

	],
	"type": "column",
	"color": "#0096d7",
	"name": "Saudi Arabia crude oil production"
	}, {
	"data": [
<?php
for ($i = 0; $i < sizeof($query); $i++) {
	echo '[' . (mktime(0, 0, 0, $query[$i]['qtr'] * 3 - 2, 1, $query[$i]['year']) * 1000) . ', ' . floattostr($query[$i]['wti_pct_change']) . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
}
?>

	],
	"type": "line",
	"yAxis": 1,
	"color": "#bd732a",
	"name": "WTI percent change"
	}]

	}
<?php $chartOptions = ob_get_clean(); ?>
	<script type="text/javascript">
		var chart,
				opts_saudi_demand = <?php echo $chartOptions; ?>;

		$(document).ready(function () {
			var chart = new Highcharts.Chart(opts_saudi_demand);
		});
	</script>

	<div id="saudi_demand"></div>
<?php if (!$forPPT) { ?>
	<div id="update_date">
		<div class="update">
			Updated: Monthly | Last Updated: <?php echo $updateDate[0]['update_date']; ?>
		</div>
	</div>
<?php } ?>