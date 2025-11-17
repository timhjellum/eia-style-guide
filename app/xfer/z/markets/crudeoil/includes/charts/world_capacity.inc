<?php
require_once(__DIR__ . '/../../../includes/helper_functions.inc');
$chart = 'world_capacity';
$forPPT = isset($forPPT) ? $forPPT : false;
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
"renderTo": "world_capacity",
"zoomType": "x",
"marginTop": 80,
"marginBottom": 115,
"height": "490"
},

"credits": {
<?php if (!$forPPT) { ?>
	"text": "Data source: U.S. Energy Information Administration, Refinitiv An LSEG Business, Oxford Economics",
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
	"text": "Changes in world liquid fuels production capacity and GDP, price of WTI crude oil",
	"align": "left",
	"x": 0,
	"y": 14,
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
"endOnTick": false,
"showLastLabel": true,
"lineColor": "#a8a9a9",
"min": <?php echo mktime(0, 0, 0, 1, 1, 2001) * 1000; ?>,
"labels": {
"y": 20,
"style": {
"color": "black",
"fontFamily": "Arial"
}
},
"plotBands": [{
"from": <?php echo mktime(0, 0, 0, 1, 1, 2003) * 1000; ?>,
"to": <?php echo mktime(0, 0, 0, 1, 1, 2009) * 1000; ?>,
"label": {
"text": "Spare capacity < 2.5 million barrels per day",
"y": 11,
"inside":false
},
"color": "#efeded"
}],
"plotLines": [{
"color": "#7f7f7f",
"dashStyle": "shortdash",
<?php
$date = "";
for ($i = 0; $i < sizeof($query); $i++) {
	if (mktime(0, 0, 0, $query[$i]['qtr'] * 3 - 2, 1, $query[$i]['year']) <= time()) {
		$date = (mktime(0, 0, 0, $query[$i]['qtr'] * 3 - 2, 1, $query[$i]['year']) * 1000) - (365 * 24 * 3600 * 1000 / 8);
	}
}
?>
"value": <?php echo $date; ?>,
"width": 0.5,
"label": {
"text": "forecast",
"verticalAlign": "top",
"rotation": 0,
"y": 12
}

}]

},
<?php if (!$forPPT) { ?>
	"navigation": {
	"buttonOptions": {
	"y": 0
	}
	},
<?php } ?>
"labels": {
"items": [
<?php if (!$forPPT) { ?>
	{
	"html": "*World capacity = OPEC capacity plus non-OPEC production",
	"style": {
	"left": "20px",
	"top": "360px",
	"color": "gray",
	"fontSize": "10px",
	"fontFamily": "Arial"
	}
	}
<?php } ?>
]
},
"legend": {
"enabled": true,
"layout": "horizontal",
"align": "center",
"verticalAlign": "bottom",
"x": 0,
"y": -30,
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
	unit = {
	"world liquid fuels production capacity*": this.y.toFixed(1) + " percent change",
	"world GDP": this.y.toFixed(1) + " percent change",
	"WTI crude oil price": "$" + this.y.toFixed(2) + " per barrel"
	}[this.series.name];
	/*symbol = {
	"world liquid fuels production capacity": "",
	"WTI crude oil price": "$"
	}[this.series.name];*/

	//quarter = {1:"1st",2:"2nd",3:"3rd",4:"4th"}[quarter];
	//return "<strong>" + this.series.name + "</strong><br/>" + quarter + " quarter of //"+ year +"<br/>"  + val;
	return "<strong>" + this.series.name + "</strong><br/>" + year + ", quarter " + quarter + "<br/>" + unit;
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
	"rotation": -90,
	"style": {
	"color": "black",
	"fontWeight": "normal",
	"fontSize": "12px",
	"fontFamily": "Arial"
	}
	},
"tickPositions":[-12, -10, -8, -6, -4, -2, 0, 2, 4, 6, 8, 10, 12, 14],
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
}, {
	"title": {
	"text": "$/b (real 2022 dollars)",
	"rotation": -90,
	"style": {
	"color": "#bd732a",
	"fontWeight": "normal",
	"fontSize": "12px",
	"fontFamily": "Arial"
	}
	},
"opposite": true,
"tickPositions":[-240, -200, -160, -120, -80, -40, 0, 40, 80, 120, 160, 200, 240, 280],
"labels": {
"style": {
"color": "#bd732a",
"fontFamily": "Arial"
}
}
}],
"plotOptions": {
"series": {
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
	this.exportChart({filename: 'Supply_summary'}, options)
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
	window.open('./csv/Supply_summary.csv');
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
	if (array_key_exists('capacity_pct_change', $query[$i])) {
		echo '[' . (mktime(0, 0, 0, $query[$i]['qtr'] * 3 - 2, 1, $query[$i]['year']) * 1000) . ', ' . floattostr($query[$i]['capacity_pct_change']) . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
	}
}
?>

],
"type": "column",
"name": "world liquid fuels production capacity*",
"color": "#0096d7"
}, {
"data": [
<?php
for ($i = 0; $i < sizeof($query); $i++) {
	if (array_key_exists('world_gdp_change', $query[$i])) {
		echo '[' . (mktime(0, 0, 0, $query[$i]['qtr'] * 3 - 2, 1, $query[$i]['year']) * 1000) . ', ' . floattostr($query[$i]['world_gdp_change']) . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
	}
}
?>

],
"type": "column",
"name": "world GDP",
"color": "#003953"
}, {
"data": [
<?php
for ($i = 0; $i < sizeof($query); $i++) {
	if (array_key_exists('wti_real', $query[$i])) {
		echo '[' . (mktime(0, 0, 0, $query[$i]['qtr'] * 3 - 2, 1, $query[$i]['year']) * 1000) . ', ' . floattostr($query[$i]['wti_real']) . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
	}
}
?>

],
"type": "line",
"name": "WTI crude oil price",
"yAxis": 1,
"color": "#bd732a"
}]

}
<?php $chartOptions = ob_get_clean(); ?>
<script type="text/javascript">
	var chart,
			opts_world_capacity = <?php echo $chartOptions;?>;


	$(document).ready(function () {
		var chart = new Highcharts.Chart(opts_world_capacity);
	});
</script>

<div id="world_capacity"></div>
<?php if (!$forPPT) { ?>
	<div id="update_date">
		<div class="update">
			Updated: Monthly | Last Updated: <?php echo $updateDate[0]['update_date']; ?>
		</div>
	</div>
<?php } ?>
