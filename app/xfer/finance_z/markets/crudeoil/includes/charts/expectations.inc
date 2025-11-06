<?php
require_once(__DIR__ . '/../../../includes/helper_functions.inc');
$chart = 'expectations';
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
"renderTo": "expectations",
"zoomType": "x",
"marginTop": 75,
"marginBottom": 105,
"height": 470
},

"credits": {
<?php if (!$forPPT) { ?>
	"text": "Data source: U.S. Energy Information Administration, Short-Term Energy Outlook",
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
	"text": "Projected non-OPEC liquid fuels production, annual expectations",
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
"title": {
"text": " ",
"margin": 8,
"style": {
"color": "black",
"fontWeight": "normal",
"fontFamily": "Arial"
}
},
"type": "datetime",
"lineColor": "#a8a9a9",
"labels": {
"y": 20,
"style": {
"color": "black",
"fontFamily": "Arial"
}
}
},
"caption": {
	"text" : "forecast year:",
	"useHTML" : true,
	"x" : 85,
	"y" : -10,
	"style": {
		"color": "black",
		"fontSize": "12px",
		"fontFamily": "Arial"
	}
},
"legend": {
"enabled": true,
"layout": "horizontal",
"align": "center",
"verticalAlign": "bottom",
"x": 15,
"y": 10,
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
	return "<b>" + this.series.name + " forecast" + "</b><br/>" +
	"forecast made: " + Highcharts.dateFormat("%b %Y", this.x) + "<br>" +
	this.y.toFixed(1) + " million barrels per day";
	}
	},
<?php } else { ?>
	"tooltip": {
	"enabled": false
	},
<?php } ?>
"yAxis": {
	"title": {
		"text": "million barrels per day<?php if($forPPT) { print ' (annual expectations)'; }?>",
		"rotation": -90,
		"style": {
			"color": "black",
			"fontWeight": "normal",
			"fontSize": "12px",
			"fontFamily": "Arial",
            "whiteSpace" : "nowrap"
		}
	},
	"tickPositions" : [60, 62, 64, 66, 68, 70, 72, 74, 76],
	"labels": {
		"formatter": function () { return Highcharts.numberFormat(this.value); },
		"style": {
			"color": "black",
			"fontSize": "10px"
		}
	}
},
"plotOptions": {
"line": {
"shadow": 0,
"borderWidth": 0,
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
<?php if ($forPPT) { ?>
	, "series": {
	"enableMouseTracking": false,
	"marker": {
	"enabled": false
	}
	}
<?php } ?>
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
	this.exportChart({filename: 'nonOPEC_expectations'}, options)
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
	window.open('./csv/nonOPEC_expectations.csv');
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
"series": [
<?php
for ($i = 0; $i < sizeof($query); $i++) {
	if ($i == 0 || $query[$i - 1]['forecast_year'] != $query[$i]['forecast_year']) {
		echo '{' . "\xA" . '"type" : "line",' . "\xA" . '"name" : ' . $query[$i]['forecast_year'] . ',' . "\xA" . '"data" : [ ' . "\xA";
	}
	echo '[ ' . (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) * 1000) . ', ' . $query[$i]['value'] . ' ] ';
	if ($i == (sizeof($query) - 1) || $query[$i]['forecast_year'] != $query[$i + 1]['forecast_year']) {
		echo "\xA" . ']' . "\xA";
		echo '}';
		if ($i < (sizeof($query) - 1)) {
			echo ',' . "\xA";
		}
	} else {
		echo ',' . "\xA";
	}
}
?>
]
}
<?php $chartOptions = ob_get_clean(); ?>
<script type="text/javascript">
	var chart,
			opts_expectations = <?php print $chartOptions; ?>;

	$(document).ready(function () {
		var chart = new Highcharts.Chart(opts_expectations);
	});
</script>

<div id="expectations"></div>
<?php if (!$forPPT) { ?>
	<div id="update_date">
		<div class="update">
			Updated: Monthly | Last Updated: <?php echo $updateDate[0]['update_date']; ?>
		</div>
	</div>
<?php } ?>
