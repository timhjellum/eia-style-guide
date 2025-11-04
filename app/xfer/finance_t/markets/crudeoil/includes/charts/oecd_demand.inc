<?php
require_once(__DIR__ . '/../../../includes/helper_functions.inc');
$chart = 'oecd_demand';
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
"renderTo": "oecd_demand",
"zoomType": "x",
"marginTop": 75,
"marginBottom": 105,
"height": "510"

},

"credits": {
<?php if (!$forPPT) { ?>
	"text": "Data source: U.S. Energy Information Administration, Refinitiv An LSEG Business.",
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
	"text": "OECD liquid fuels consumption and WTI crude oil price ",
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
"labels": {
"y": 20,
"style": {
"color": "black",
"fontFamily": "Arial"
}
},
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
"y": 14
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
	"OECD liquid fuels consumption": this.y.toFixed(1) + "% change",
	"WTI crude oil price": "$" + this.y.toFixed(2) + " per barrel"
	}[this.series.name];
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
	"text": "% change (year-on-year)",
	"rotation": 0,
	"style": {
	"color": "#0096D7",
	"fontWeight": "normal",
	"fontSize": "12px",
	"fontFamily": "Arial"
	}
	},
"tickPositions" : [-24, -18, -12, -6, 0, 6, 12, 18, 24],
"plotLines": [{
"color": "#0096d7",
"width": 2,
"value": 0
}],
"labels": {
"style": {
"color": "#0096D7",
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
"opposite": "true",
"tickPositions":[-200, -150, -100, -50, 0, 50, 100, 150, 200],
"labels": {
"style": {
"color": "#bd732a",
"fontFamily": "Arial"
}
}
}],
"plotOptions": {
"series": {
"groupPadding": 0.3,
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
	this.exportChart({filename: 'OECD_consumption'}, options)
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
	window.open('./csv/OECD_consumption.csv');
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
	echo '[' . (mktime(0, 0, 0, $query[$i]['qtr'] * 3 - 2, 1, $query[$i]['year']) * 1000) . ', ' . floattostr($query[$i]['pct_change']) . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
}
?>

],
"type": "column",
"color": "#0096d7",
"name": "OECD liquid fuels consumption"
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
			opts_oecd_demand = <?php echo $chartOptions; ?>;

	$(document).ready(function () {
		var chart = new Highcharts.Chart(opts_oecd_demand);
	});
</script>


<div id="oecd_demand"></div>
<?php if (!$forPPT) { ?>
	<div id="update_date">
		<div class="update">
			Updated: Monthly | Last Updated: <?php echo $updateDate[0]['update_date']; ?>
		</div>
	</div>
<?php } ?>
