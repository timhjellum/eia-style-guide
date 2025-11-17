<?php
require_once(__DIR__ . '/../../../includes/helper_functions.inc');
$chart = 'non-opec_production';
$forPPT = isset($forPPT) ? $forPPT : false;
$forImage = isset($forImage) ? $forImage : false;
$forImageGeneration = $forPPT || $forImage;
$query = null;
$updateDate = null;
ob_start();
include(__DIR__ . '/../../data.php');
ob_end_clean();
ob_start();
?>

{
"chart": {
<?php if ($forPPT) { ?>
	"backgroundColor": null,
	"logo" : 0,
<?php } ?>
"renderTo": "non_opec_production",
"zoomType": "x",
"marginTop": 75,
"marginBottom": 85,
"height": "470"
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
	"text": "Non-OPEC liquid fuels production and WTI crude oil prices",
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
"showLastLabel": true,
"endOnTick": false,
"lineColor": "#a8a9a9",
"min": <?php echo mktime(0, 0, 0, 1, 1, 2001) * 1000; ?>,
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
"legend": {
"enabled": true,
"layout": "horizontal",
"align": "center",
"verticalAlign": "bottom",
<?php if ($forPPT) { ?>
	"y": 0,
<?php } else { ?>
	"y": -10,
<?php } ?>
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
	th = {1: "1st", 2: "2nd", 3: "3rd", 4: "4th"}[quarter],
	unit = {
	"non-OPEC liquid fuels production": " million barrels per day",
	"WTI crude oil price": " per barrel"
	}[this.series.name],
	symbol = {
	"non-OPEC liquid fuels production": "",
	"WTI crude oil price": "$"
	}[this.series.name];

	return "<strong>" + this.series.name + "</strong><br/>" + year + ", quarter " + quarter + "<br/>" + symbol + this.y.toFixed(2) + unit;
	}
	},
<?php } else { ?>
	"tooltip": {
	"enabled": false
	},
<?php } ?>
"yAxis": [{
	"title": {
	"text": "million barrels per day change (year-on-year)",
	"rotation": -90,
	"style": {
		"color": "#0096d7",
		"fontWeight": "normal",
		"fontSize": "12px",
		"fontFamily": "Arial",
		"whiteSpace" : "nowrap"
	}
	},
"tickPositions" : [-5, -4, -3, -2, -1, 0, 1, 2, 3, 4, 5],
"plotLines": [{
"color": "black",
"width": 2,
"value": 0
}],
"labels": {
	"format" : "{value:.1f}",
"style": {
"color": "#0096d7",
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
"tickPositions": [-200, -160, -120, -80, -40, 0, 40, 80, 120, 160, 200],
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
	this.exportChart({filename: 'non_opec_production'}, options)
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
	window.open('./csv/nonOPEC_production.csv');
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
	if (array_key_exists('change_absolute', $query[$i])) {
		echo '[' . (mktime(0, 0, 0, $query[$i]['qtr'] * 3 - 2, 1, $query[$i]['year']) * 1000) . ', ' . floattostr($query[$i]['change_absolute']) . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
	}
}
?>

],
"type": "column",
"color": "#0096d7",
"name": "non-OPEC liquid fuels production",
"yAxis": 0
}, {
"data": [
<?php
for ($i = 0; $i < sizeof($query); $i++) {
	if (array_key_exists('wti_gdp_real_price', $query[$i])) {
		echo '[' . (mktime(0, 0, 0, $query[$i]['qtr'] * 3 - 2, 1, $query[$i]['year']) * 1000) . ', ' . floattostr($query[$i]['wti_gdp_real_price']) . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
	}
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
			opts_non_opec_production = <?php echo $chartOptions; ?>;


	$(document).ready(function () {
		var chart = new Highcharts.Chart(opts_non_opec_production);
	});
</script>

<div id="non_opec_production"></div>
<?php if (!$forPPT) { ?>
	<div id="update_date">
		<div class="update">
			Updated: Monthly | Last Updated: <?php echo $updateDate[0]['update_date']; ?>
		</div>
	</div>
<?php } ?>
