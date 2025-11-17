<?php
require_once(__DIR__ . '/../../../includes/helper_functions.inc');
$chart = 'top_assets';
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
	"renderTo": "top_assets",
	"zoomType": "x",
	"marginTop": 85,
	"marginBottom": 105,
	"height": "510"
	},

	"credits": {
<?php if (!$forPPT) { ?>
	"text": "Data source: Bloomberg L.P., Published by: U.S. Energy Information Administration.",
	"href": "",
	"position": {
	"align": "left",
	"verticalAlign": "bottom",
	"x": 50,
	"y": -20,
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
	"text": "Commodity index assets under management and Bloomberg commodity index level",
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
	"startOnTick": false,
	"endOnTick": false,
	"min": <?php echo mktime(0, 0, 0, 1, 1, 2006) * 1000; ?>,
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
	"formatter": function () {
	var d = new Date(this.x),
	quarter = Math.ceil(( d.getMonth() / 3)) + 1 < 5 ? Math.ceil(( d.getMonth() / 3)) + 1 : 1,
	year = Math.ceil(( d.getMonth() / 3)) + 1 < 5 ? d.getFullYear() : d.getFullYear() + 1,
	val = {
	"Bloomberg commodity index": this.y.toFixed(1) + "% change",
	"assets under management (4 largest public U.S. commodity index funds)": this.y.toFixed(1) + "% change"
	}[this.series.name];

	return "<strong>" + this.series.name + "</strong><br/>" + year + ", quarter " + quarter + "<br/>" + val;
	}
	},
<?php } else { ?>
	"tooltip": {
	"enabled": false
	},
<?php } ?>
	"yAxis": [{
	"title": {
	"text": "% change (year-on-year)",
	"style": {
	"color": "black",
	"fontWeight": "normal",
	"fontSize": "12px",
	"fontFamily": "Arial"
	}
	},
	"tickInterval": 50,
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
	}],
	"plotOptions": {
	"series": {
	"groupPadding": 0.1,
<?php if ($forPPT) { ?>
	"enableMouseTracking": false,
<?php } ?>
	"marker": {
	"enabled": false
	}
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
	this.exportChart({filename: 'Markets_index'}, options)
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
	window.open('./csv/Markets_index.csv');
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
	echo '[' . (mktime(0, 0, 0, $query[$i]['qtr'] * 3 - 2, 1, $query[$i]['year']) * 1000) . ', ' . floattostr($query[$i]['dow_ubs_commodity_index']) . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
}
?>

	],
	"type": "column",
	"color": "#0096d7",
	"name": "Bloomberg commodity index"
	}, {
	"data": [
<?php
for ($i = 0; $i < sizeof($query); $i++) {
	echo '[' . (mktime(0, 0, 0, $query[$i]['qtr'] * 3 - 2, 1, $query[$i]['year']) * 1000) . ', ' . floattostr($query[$i]['assets_under_mgmt']) . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
}
?>

	],
	"type": "column",
	"color": "#bd732a",
	"name": "assets under management (4 largest public U.S. commodity index funds)"
	}]
	}
<?php $chartOptions = ob_get_clean(); ?>
	<script type="text/javascript">
		var chart,
				opts_top_assets = <?php echo $chartOptions; ?>;

		$(document).ready(function () {
			var chart = new Highcharts.Chart(opts_top_assets);
		});
	</script>

	<div id="top_assets"></div>
<?php if (!$forPPT) { ?>
	<div id="update_date">
		<div class="update">
			Updated: Quarterly | Last Updated: <?php echo $updateDate[0]['update_date']; ?>
		</div>
	</div>
<?php } ?>