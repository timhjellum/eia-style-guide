<?php
require_once(__DIR__ . '/../../../includes/helper_functions.inc');
$chart = 'inventory';
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
	"renderTo": "inventory",
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
	"text": "OECD liquid fuels inventories and WTI futures spread",
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
	"tickInterval": <?php echo 365 * 86400 * 1000; ?>,
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
	"y": -10,
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
	"formatter": function () {
	var val = {
	'OECD liquid fuels inventory': Math.abs(this.y.toFixed(0)) + ' Million barrels',
	'WTI crude 12th - 1st futures price spread': '$' + Math.abs(this.y.toFixed(2)) + '  per barrel'
	}[this.series.name],

	d = new Date(this.x),
	quarter = Math.ceil(( d.getMonth() / 3)) + 1 < 5 ? Math.ceil(( d.getMonth() / 3)) + 1 : 1,
	year = Math.ceil(( d.getMonth() / 3)) + 1 < 5 ? d.getFullYear() : d.getFullYear() + 1;
	if (this.y < 0) val = '-' + val; //add negative sign in front of value

	return '<b>' + this.series.name + '</b><br/>' + year + ', quarter ' + quarter + '<br/>' + val;
	}
	},
<?php } else { ?>
	"tooltip": {
	"enabled": false
	},
<?php } ?>
	"yAxis": [{
	"title": {
	"text": "million barrels change (year-on-year)",
	"style": {
	"color": "#0096d7",
	"fontWeight": "normal",
	"fontSize": "12px",
	"fontFamily": "Arial"
	}
	},
	"max": 400,
	"min": -450,
	"tickInterval": 50,
	"plotLines": [{
	"color": "black",
	"width": 2,
	"value": 0
	}],
	"labels": {
	"style": {
	"color": "#0096d7",
	"fontFamily": "Arial"
	}
	}
	}, {
	"title": {
	"text": " $/b change (year-on-year)",
	"style": {
	"color": "#bd732a",
	"fontWeight": "normal",
	"fontSize": "12px",
	"fontFamily": "Arial"
	}
	},
	"opposite": true,
	"min": -45,
	"max": 40,
	"tickInterval": 5,
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
	this.exportChart({filename: 'balance'}, options)
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
	window.open('./csv/balance.csv');
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
	echo '[' . (mktime(0, 0, 0, $query[$i]['qtr'] * 3 - 2, 1, $query[$i]['year']) * 1000) . ', ' . floattostr($query[$i]['change_absolute']) . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
}
?>

	],
	"type": "column",
	"color": "#0096d7",
	"name": "OECD liquid fuels inventory"
	}, {
	"data": [
<?php
for ($i = 0; $i < sizeof($query); $i++) {
	echo '[' . (mktime(0, 0, 0, $query[$i]['qtr'] * 3 - 2, 1, $query[$i]['year']) * 1000) . ', ' . floattostr($query[$i]['price_spread_change']) . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
}
?>

	],
	"type": "line",
	"color": "#bd732a",
	"name": "WTI crude 12th - 1st futures price spread",
	"yAxis": 1
	}]
	}
<?php $chartOptions = ob_get_clean(); ?>
	<script type="text/javascript">
		var chart,
				opts_inventory = <?php echo $chartOptions; ?>;


		$(document).ready(function () {
			var chart = new Highcharts.Chart(opts_inventory);
		});
	</script>

	<div id="inventory"></div>
<?php if (!$forPPT) { ?>
	<div id="update_date">
		<div class="update">
			Updated: Quarterly | Last Updated: <?php echo $updateDate[0]['update_date']; ?>
		</div>
	</div>
<?php } ?>