<?php
require_once(__DIR__ . '/../../../includes/helper_functions.inc');
$chart = 'opec_spare_capacity';
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
<?php if($forPPT) { ?>
	"backgroundColor": null,
	"logo" : 0,
<?php } ?>
"renderTo": "opec_capacity",
"zoomType": "x",
"marginTop": 75,
"marginBottom": 105,
"height": "490"
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
<?php } else {?>
	"enabled": false
<?php } ?>
},
<?php if(!$forPPT) { ?>
	"title": {
	"text": "OPEC spare production capacity and WTI crude oil prices",
	"style": {
	"color": "black",
	"fontWeight": "bold",
	"fontSize": "16px",
	"fontFamily": "Arial"
	}
	},
<?php } else {?>
	"title": {
	"text": ""
	},
<?php } ?>
"xAxis": {
"type": "datetime",
"tickInterval": <?php echo 365 * 86400 * 1000 * 2; ?>,
"showLastLabel": true,
"endOnTick": false,
"lineColor": "#000000",
"labels": {
"y": 20,
"style": {
"color": "black",
"fontFamily": "Arial"
}
},

"plotBands": [{
"from": 1041397200000,
"to": 1230786000000,
"label": {
"text": "Spare capacity < 2.5 million barrels per day",
"x": 40,
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
"y": 14,
"x": 8
}

}]
},
<?php if(!$forPPT) { ?>
	"navigation": {
	"buttonOptions": {
	"y": 0
	}
	},
<?php } ?>
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
	"formatter": function () {
	var d = new Date(this.x),
	quarter = Math.ceil(( d.getMonth() / 3)) + 1 < 5 ? Math.ceil(( d.getMonth() / 3)) + 1 : 1,
	year = Math.ceil(( d.getMonth() / 3)) + 1 < 5 ? d.getFullYear() : d.getFullYear() + 1,
	val = {
	'OPEC spare capacity': this.y.toFixed(2) + ' million barrels per day',
	'WTI crude oil price': '$' + this.y.toFixed(2) + ' per barrel'
	}[this.series.name];
	return '<b>' + this.series.name + '</b><br/>' + year + ', quarter ' + quarter + '<br/>' + val;
	}
	},
<?php } else {?>
	"tooltip": {
	"enabled": false
	},
<?php } ?>
"yAxis": [{
	"title": {
	"text": "spare capacity (million barrels per day)",
	"rotation": 0,
	"style": {
	"color": "#0096d7",
	"fontWeight": "normal",
	"fontSize": "12px",
	"fontFamily": "Arial"
	}
	},
"tickPositions":[0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
"labels": {
"style": {
"color": "#0096d7",
"fontFamily": "Arial"
}
}
}, {
	"title": {
	"text": "$/b (real 2022 dollars)",
	"rotation": 0,
	"style": {
	"color": "#bd732a",
	"fontWeight": "normal",
	"fontSize": "12px",
	"fontFamily": "Arial"
	}
	},
"opposite": true,
"tickPositions": [0, 20, 40, 60, 80, 100, 120, 140, 160, 180, 200],
"labels": {
"style": {
"color": "#bd732a",
"fontFamily": "Arial"
}
}
}],
"plotOptions": {
"series": {
<?php if($forPPT) { ?>
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
	this.exportChart({filename: 'opec_spare_capacity'}, options)
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
	window.open('./csv/opec_spare_capacity.csv');
	}
	},
	null,
	null
	]
	}
	}
	},
<?php } ?>
<?php if(!$forPPT) { ?>
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
	echo '[' . (mktime(0, 0, 0, $query[$i]['qtr'] * 3 - 2, 1, $query[$i]['year']) * 1000) . ', ' . floattostr($query[$i]['cops_opec']) . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
}
?>

],
"type": "column",
"color": "#0096d7",
"name": "OPEC spare capacity"
}, {
"data": [
<?php
for ($i = 0; $i < sizeof($query); $i++) {
	echo '[' . (mktime(0, 0, 0, $query[$i]['qtr'] * 3 - 2, 1, $query[$i]['year']) * 1000) . ', ' . floattostr($query[$i]['wti_gdp_real_price']) . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
}
?>

],
"type": "line",
"color": "#bd732a",
"name": "WTI crude oil price",
"yAxis": 1
}]
}
<?php $chartOptions = ob_get_clean(); ?>
<script type="text/javascript">
	var chart,
			opts_opec_spare_capacity = <?php echo $chartOptions; ?>;

	$(document).ready(function () {
		var chart = new Highcharts.Chart(opts_opec_spare_capacity);
	});
</script>

<div id="opec_capacity"></div>
<?php if (!$forPPT) { ?>
	<div id="update_date">
		<div class="update">
			Updated: Monthly | Last Updated: <?php echo $updateDate[0]['update_date']; ?>
		</div>
	</div>
<?php } ?>
