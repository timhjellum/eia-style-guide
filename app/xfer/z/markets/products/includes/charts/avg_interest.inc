<?php
require_once(__DIR__ . '/../../../includes/helper_functions.inc');
$chart = 'avg_interest';
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
	"renderTo": "avg_interest",
  "marginTop": 65,
	"marginBottom": 160,
	"height": "490"
	},
	"credits": {
<?php if (!$forPPT) { ?>
	"text": "Data source: Bloomberg L.P.",
	"href": ""
<?php } else { ?>
	"enabled": false
<?php } ?>
	},

<?php if (!$forPPT) { ?>
	"title": {
	"text": "Average daily open interest of petroleum product futures contracts"
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
	"min": <?php echo mktime(0, 0, 0, 1, 1, 2000) * 1000; ?>,
	"labels": {
	"y": 20,
	"style": {
	"color": "black",
	"fontFamily": "Arial"
	}
	}
	},<?php if (!$forPPT) { ?>
	"caption": {
		"x" : 15,
		"y" : -60,
	"text": "Note: Gasoline data prior to 2006 used the Unleaded Gasoline contract. After 2006 the contract changed to Reformulated<br>Blendstock for Oxygenate Blending (RBOB). Since the spring of 2013, the underlying commodity for the distillate<br>futures contract has been ultra-low sulfur diesel (ULSD).",
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
	"y": <?php echo $forPPT ? -80 : 25; ?>,
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
<?php if (!$forImageGeneration) { ?>
	"tooltip": {
	"style": {
	"padding": 5,
	"fontFamily": "Arial"
	},
	"formatter": function () {
	var d = new Date(this.x),
	quarter = Math.ceil(( d.getMonth() / 3)) + 1 < 5 ? Math.ceil(( d.getMonth() / 3)) + 1 : 1;
	year = Math.ceil(( d.getMonth() / 3)) + 1 < 5 ? d.getFullYear() : d.getFullYear() + 1;
	return '<b>' + this.series.name + '</b>' + '<br/>' + year + ', quarter ' + quarter + '<br/>' + Highcharts.numberFormat(this.y, 3) + " thousands of contracts";

	}
	},
<?php } else { ?>
	"tooltip": {
	"enabled": false
	},
<?php } ?>
	"yAxis": [{
		"title": {
			"text" : "thousands of contracts",
			"style" : {
				"color" : "black",
				"fontWeight" : "normal"
			}
		},
	"min": 0,
	"max": 500,
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
<?php if ($forImageGeneration) { ?>
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
<?php if (!$forImageGeneration) { ?>
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
	this.exportChart({filename: 'avg_interest'}, options)
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
	window.open('./csv/avg_interest.csv');
	}
	},
	null,
	null
	]
	}
	}
	},
<?php } ?>
<?php if (!$forImageGeneration) { ?>
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
	if (array_key_exists('gasoline_regular', $query[$i])) {
		echo '[' . (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) * 1000) . ', ' . number_format($query[$i]['gasoline_regular'], 2, '.', '') . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
	}
}
?>

	],
	"type": "column",
	"name": "Gasoline",
	"color": "#a33340"

	},
	{
	"data": [
<?php
for ($i = 0; $i < sizeof($query); $i++) {
	if (array_key_exists('heating_oil', $query[$i])) {
		echo '[' . (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) * 1000) . ', ' . number_format($query[$i]['heating_oil'], 2, '.', '') . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
	}
}
?>

	],
	"type": "column",
	"name": "Distillate",
	"color": "#0096d7"
	}
	]
}
<?php $chartOptions = ob_get_clean();?>
<script type="text/javascript">
    var chart,
            opts_avg_interest = <?php echo $chartOptions;?>;

		$(document).ready(function () {
			var chart = new Highcharts.Chart(opts_avg_interest);
		});
	</script>

	<div id="avg_interest"></div>
<?php if (!$forPPT) { ?>
	<div id="update_date">
		<div class="update">
			Updated: Quarterly | Last Updated: <?php echo $updateDate[0]['update_date']; ?>
		</div>
	</div>
<?php } ?>