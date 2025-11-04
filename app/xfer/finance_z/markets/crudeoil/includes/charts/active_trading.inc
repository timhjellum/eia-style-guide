<?php
require_once(__DIR__ . '/../../../includes/helper_functions.inc');
$chart = 'active_trading';
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
	"renderTo": "active-trading",
	"zoomType": "x",
	"marginTop": 75,
	"marginBottom": 65,
	"height": "440"

	},

	"credits": {
<?php if (!$forPPT) { ?>
	"text": "Data source: NYMEX CME Group, Published by:U.S. Energy Information Administration",
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
	"text": "Average daily open interest in crude oil futures on U.S. exchanges",
	"style": {
	"color": "black",
	"fontWeight": "bold",
	"fontSize": "16px",
	"fontFamily": "Arial"
	}
	},
<?php } else { ?>
	"title": {"text": ""},
<?php } ?>
	"xAxis": {
	"type": "datetime",
	"tickInterval": <?php echo 365 * 86400 * 1000 * 2; ?>,
	"lineColor": "#000000",
	"showLastLabel": true,
	"labels": {
	"y": 20,
	"style": {
	"color": "black",
	"fontFamily": "Arial"
	}
	}
	},
	"legend": {
	"enabled": false
	},
<?php if (!$forPPT) { ?>
	"tooltip": {
	"style": {
	"padding": 5,
	"fontFamily": "Arial"
	},
	"formatter": function () {
	var d = new Date(this.x),
	quarter = Math.ceil(( d.getMonth() / 3)) + 1 < 5 ? Math.ceil(( d.getMonth() / 3)) + 1 : 1;
	year = Math.ceil(( d.getMonth() / 3)) + 1 < 5 ? d.getFullYear() : d.getFullYear() + 1;
	return '<b>' + year + ', quarter ' + quarter + '</b><br/>' + Highcharts.numberFormat(this.y, 3) + ' thousand contracts';
	}
	},
<?php } else { ?>
	"tooltip": {
	"enabled": false
	},
<?php } ?>
	"yAxis": {
	"title": {
	"text": "number of contracts (thousands)",
	"rotation": 0,
	"style": {
	"color": "black",
	"fontWeight": "normal",
	"fontSize": "12px",
	"fontFamily": "Arial"
	}
	},
	"max": 2600,
	"tickInterval": 200,
	"labels": {
		"format" : "{value:,.0f}"
	},
	"style": {
	"color": "black",
	"fontFamily": "Arial"
	}
	},
	"plotOptions": {
	"column": {
	"shadow": 0,
	"borderWidth": 0
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
	this.exportChart({filename: 'Markets_interest'}, options)
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
	window.open('./csv/Markets_interest.csv');
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
		"#bd732a",
		"#5D9732",
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
	echo '[' . (mktime(0, 0, 0, $query[$i]['qtr'] * 3 - 2, 1, $query[$i]['year']) * 1000) . ' , ' . number_format($query[$i]['thousands_of_contracts'], 2, '.', '') . ']' . ($i < sizeof($query) - 1 ? ' , ' : '');
}
?>

	],
	"type": "column",
	"color": "#BD732A",
	"name": "WTI crude futures"
<?php if (!$forPPT) { ?>
	, "events": {
	"legendItemClick": function (e) {
	return false;
	}
	}
<?php } ?>
	}]
	}
<?php $chartOptions = ob_get_clean(); ?>
	<script type="text/javascript">
		var chart,
				opts_active_trading = <?php echo $chartOptions; ?>;

		$(document).ready(function () {
			var chart = new Highcharts.Chart(opts_active_trading);
		});
	</script>

	<div id="active-trading"></div>
<?php if (!$forPPT) { ?>
	<div id="update_date">
		<div class="update">
			Updated: Quarterly | Last Updated: <?php echo $updateDate[0]['update_date']; ?>
		</div>
	</div>
<?php } ?>