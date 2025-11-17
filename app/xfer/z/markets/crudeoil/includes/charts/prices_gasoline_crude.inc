<?php
require_once(__DIR__ . '/../../../includes/helper_functions.inc');
$chart = 'prices_gasoline_crude';
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
"renderTo": "price_gas",
"zoomType": "x",
"marginTop": 75,
"marginBottom": 115,
"height": "510"
},

"credits": {
	"text": "Data source: U.S. Energy Information Administration, Refinitiv An LSEG Business",
	"href": "",
	"position": {
	"align": "left",
	"verticalAlign": "bottom",
	"x": 50,
	"y": -10
	},
	"style": {
	"color": "black",
	"fontSize": "10px",
	"fontFamily": "Arial"
	}
<?php if ($forPPT) { ?>
	,"enabled": false
<?php } ?>
},
<?php if (!$forPPT) { ?>
	"title": {
		"text": "U.S. retail regular gasoline price, refiner acquisition cost of crude oil",
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
		"lineColor": "#a8a9a9",
		"showLastLabel": true,
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
$date = time() * 1000;
for ($i = 0; $i < sizeof($query); $i++) {
	if (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) <= time()) {
		$date = (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) * 1000) - (365 * 24 * 3600 * 1000 / 12);
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
	"caption": {
		"text" : "Note: Assumes a typical $1 per gallon markup of gasoline over the refiner acquisition cost of crude oil.",
		"y" : -10,
		"style" : {
			"color" : "gray",
			"fontSize" : "10px",
			"fontFamily" : "Arial"
		}
	},
<?php } ?>
	"legend" : {
		"enabled" : true,
		"layout" : "horizontal",
		"align" : "center",
		"verticalAlign" : "bottom",
		"x" : 0,
		"y" : -10,
		"borderWidth" : 0,
		"symbolPadding" : 5,
		"itemStyle" : {
			"fontFamily" : "Arial",
			"color" : <?php if($forPPT) { ?>"#black"<?php } else { ?>"#189bd7"<?php } ?>,
			"textDecoration" : "none"
		},
		"itemHoverStyle" : {
			"fontFamily" : "Arial",
			"textDecoration" : "underline"
		}
	},
<?php if (!$forPPT) { ?>
	"tooltip" : {
	"style" : {
	"padding" : 5,
	"fontFamily" : "Arial"
	}
	,
	"formatter" : function () {
	return "<strong>" + this.series.name + "</strong><br>" + Highcharts.dateFormat("%B %Y", this.x)
	+ "<br/>" + "$" + Highcharts.numberFormat(this.y, 3) + (this.series.name == "U.S. retail price of regular gasoline" ? " per gallon" : " per barrel");
	}
	}
	,
<?php } else { ?>
	"tooltip" : {
	"enabled" : false
	}
	,
<?php } ?>
"yAxis" : [{
	"title": {
	"text": "dollars per gallon (real 2022 dollars, monthly average)",
	"style": {
	"color": "#0096d7",
	"fontWeight": "normal",
	"fontSize": "12px",
	"fontFamily": "Arial",
	"whiteSpace" : "nowrap"
	}
	},
"min": 1,
"max": 6.0,
"tickInterval": 1,

"labels": {
"formatter": function () { return Highcharts.numberFormat(this.value, 0); },
"style": {
"color": "#0096d7",
"fontFamily": "Arial"
}
}
}, {
	"title": {
		"text": "$/b (real 2022 dollars, monthly average)",
		"style": {
			"color": "#bd732a",
			"fontWeight": "normal",
			"fontSize": "12px",
			"fontFamily": "Arial",
            "whiteSpace" : "nowrap"
		}
	},
"opposite": true,
"min": 0,
"max": 200,
"tickInterval": 40,
"labels": {
"style": {
"color": "#bd732a",
"fontFamily": "Arial"
}
}
}],
"plotOptions" : {
"series" : {
<?php if ($forPPT) { ?>
	"enableMouseTracking" : false,
<?php } ?>
"marker" : {
"enabled" : false
}
}
,
"line" : {
"shadow" : false,
"lineWidth" : 2,
"marker" : {
"enabled" : false,
"states" : {
"hover" : {
"enabled" : true,
"radius" : 4
}
}
}
,
"states" : {
"hover" : {
"lineWidth" : 2,
"marker" : {
"radius" : 1
}
}
}
}
}
,
<?php if (!$forPPT) { ?>
	"exporting" : {
	"buttons" : {
	"contextButton" : {
	"menuItems" : [
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
	this.exportChart({filename: 'Prices_products'}, options)
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
	window.open('./csv/Prices_products.csv');
	}
	},
	null,
	null
	]
	}
	}
	}
	,
	"navigation" : {
	"buttonOptions" : {
	"y" : 0,
	theme : {
	style: {
	fontSize: '12px',
	textTransform : 'uppercase',
	color : "#00000"
	}
	}
	}
	}
	,
<?php } ?>
"colors" : [
"#bd732a",
"#0096d7"
],
"series" : [{
"data": [
<?php
for ($i = 0; $i < sizeof($query); $i++) {
	echo '[' . (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) * 1000) . ', ' . $query[$i]['us_retail_gasoline'] . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
}
?>

],
"type": "line",
"name": "U.S. retail price of regular gasoline"
}, {
"data": [
<?php
for ($i = 0; $i < sizeof($query); $i++) {
	echo '[' . (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) * 1000) . ', ' . $query[$i]['refiner_crude_cost'] . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
}
?>

],
"type": "line",
"name": "refiner acquisition cost of crude oil",
"yAxis": 1
}]

}
<?php $chartOptions = ob_get_clean(); ?>
<script type="text/javascript">
	var chart,
			opts_prices_gasoline_crude = <?php echo $chartOptions; ?>;

	$(document).ready(function () {
		var chart = new Highcharts.Chart(opts_prices_gasoline_crude);
	});
</script>

<div id="price_gas"></div>
<?php if (!$forPPT) { ?>
	<div id="update_date">
		<div class="update">
			Updated: Monthly | Last Updated: <?php echo $updateDate[0]['update_date']; ?>
		</div>
	</div>
<?php } ?>
