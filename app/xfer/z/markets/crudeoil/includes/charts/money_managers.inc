<?php
require_once(__DIR__ . '/../../../includes/helper_functions.inc');
$chart = 'mm_crude_trader';
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
	"renderTo": "money_trading",
	"zoomType": "x",
	"marginTop": 75,
	"marginBottom": 105,
	"height": "515"

	},
	"credits": {
<?php if (!$forPPT) { ?>
	"text": "Data source: CFTC Commitments of Traders, Published by: U.S. Energy Information Administration",
	"href": "",
	"position": {
	"align": "left",
	"verticalAlign": "bottom",
	"x": 50,
	"y": 0,
	},
	"style": {
	"color": "black",
	"fontSize": "9px",
	"fontFamily": "Arial"
	}
<?php } else { ?>
	"enabled": false
<?php } ?>
	},
<?php if (!$forPPT) { ?>
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
	"tickPixelInterval": 60,
	"startOnTick": false,
	"endOnTick": false,
	"tickColor": "black",
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
	"crosshairs": "false",
	"formatter": function () {

	return "<strong>" + this.series.name + "</strong><br/>" + Highcharts.dateFormat("%B %Y", this.x) + "<br/>" + Highcharts.numberFormat(this.y, 3) + " thousands of contracts" + "<br>";
	}
	},
<?php } else { ?>
	"tooltip": {
	"enabled": false
	},
<?php } ?>
	"yAxis": [{
	"title": {
	"text": "number of contracts (thousands)",
	"rotation": -90,
	"style": {
	"color": "black",
	"fontWeight": "normal",
	"fontSize": "12px",
	"fontFamily": "Arial"
	}
	},
	"tickInterval": 50,
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
	"groupPadding": 0.1,
<?php if ($forPPT) { ?>
	"enableMouseTracking": false,
	"marker": {
	"enabled": false
	}
<?php } ?>
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
	this.exportChart({filename: 'Markets_managers'}, options)
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
	window.open('./csv/Markets_managers.csv');
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
for ($i = 0; $i < sizeof($query); $i++) {
	echo '[' . (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) * 1000) . ', ' . $query[$i]['long_contracts'] . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
}
?>

	],
	"type": "column",
	"color": "#0096d7",
	"name": "money managers long"
	}, {
	"data": [
<?php
for ($i = 0; $i < sizeof($query); $i++) {
	echo '[' . (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) * 1000) . ', ' . $query[$i]['short_contracts'] . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
}
?>

	],
	"type": "column",
	"color": "#5d9732",
	"name": "money managers short"
	}, {
	"data": [
<?php
for ($i = 0; $i < sizeof($query); $i++) {
	echo '[' . (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) * 1000) . ', ' . $query[$i]['net_contracts'] . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
}
?>

	],
	"type": "line",
	"color": "#a33340",
	"name": "money managers net"
	}]
	}
<?php $chartOptions = ob_get_clean(); ?>
	<script type="text/javascript">
		var chart,
				opts_money_managers = <?php echo $chartOptions; ?>;

		$(document).ready(function () {
			var chart = new Highcharts.Chart(opts_money_managers);
		});
	</script>

	<div id="money_trading"></div>
<?php if (!$forPPT) { ?>
	<div id="update_date">
		<div class="update">
			Updated: Monthly | Last Updated: <?php echo $updateDate[0]['update_date']; ?>
		</div>
	</div>
<?php } ?>