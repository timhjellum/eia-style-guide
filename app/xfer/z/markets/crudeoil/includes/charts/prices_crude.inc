<?php
require_once(__DIR__ . '/../../../includes/helper_functions.inc');
$chart = 'prices1';
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
"renderTo": "prices_crude",
"zoomType": "x",
"marginTop": 55,
"marginBottom": 85
},
"credits": {
	<?php if(!$forPPT) { ?>
	"text" : "Data sources: <a href=\"http://www.Bloomberg.com/\">Bloomberg L.P.</a>, <a href=\"http://thomsonreuters.com/\">Refinitiv An LSEG Business</a>. Published by: <a href=\"http://www.eia.gov/\">U.S. Energy Information Administration</a>."
	<?php } else { ?>
	"enabled" : false
	<?php } ?>
},
<?php if(!$forPPT) { ?>
	"title": {
		"text": "World crude oil prices",
		"align": "left",
		"x": 0,
		"y": 10,
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
	"tickInterval": <?php echo 365 * 86400 * 1000 * 2; ?>,
	"lineColor": "#000000",
	"gridLineColor" : "#FFFFFF",
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
<?php if(!$forImageGeneration) { ?>
	"tooltip": {
	"style": {
	"padding": 5,
	"fontFamily": "Arial"
	},
	"formatter": function () {
	return '<strong>' + this.series.name + '<br/>' + '</strong>' + Highcharts.dateFormat('%B %Y', this.x) + '<br/>' + '$' + this.y.toFixed(2) + ' dollars per barrel';
	}
	},
<?php } else { ?>
	"tooltip": {
	"enabled": false
	},
<?php } ?>
"yAxis": [{
"title": {
	"text" : "$/b (real 2022 dollars, monthly average)",
	"style" : {
		"fontWeight" : "normal",
		"color" : "black"
	}
},
"tickInterval": 20,
"labels": {
"style": {
"color": "black",
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
<?php if(!$forImageGeneration) { ?>
	"exporting": {
	"buttons": {
	"printButton": {
	"enabled": false
	}
	}
	},
	"navigation": {
	"buttonOptions": {
	"y": 0
	}
	},
<?php } ?>


"colors": [
	"#0096d7",
	"#bd732a",
	"#5D9732",
	"#ffc702",
	"#a33340",
	"#bd732a",
	"#103203",
	"#003953"
],
"series": [{
"data": [
<?php
for ($i = 0; $i < sizeof($query); $i++) {
	echo '[' . (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) * 1000) . ', ' . $query[$i]['wti_price'] . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
}
?>

],
"type": "line",
"name": "WTI"
}, {
"data": [
<?php
for ($i = 0; $i < sizeof($query); $i++) {
	echo '[' . (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) * 1000) . ', ' . $query[$i]['brent_price'] . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
}
?>

],
"type": "line",
"name": "Brent"
}, {
"data": [
<?php
for ($i = 0; $i < sizeof($query); $i++) {
	echo '[' . (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) * 1000) . ', ' . $query[$i]['mars_price'] . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
}
?>

],
"type": "line",
"name": "Mars"
}, {
"data": [
<?php
for ($i = 0; $i < sizeof($query); $i++) {
	echo '[' . (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) * 1000) . ', ' . $query[$i]['tapis_price'] . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
}
?>

],
"type": "line",
"name": "Tapis"
}, {
"data": [
<?php
for ($i = 0; $i < sizeof($query); $i++) {
	echo '[' . (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) * 1000) . ', ' . $query[$i]['dubai_price'] . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
}
?>

],
"type": "line",
"name": "Dubai"
}]
}
<?php $chartOptions = ob_get_clean(); ?>
<script type="text/javascript">
	var chart,
			opts_prices_crude = <?php echo $chartOptions; ?>
			;


	$(document).ready(function () {
		var chart = new Highcharts.Chart(opts_prices_crude);
	});
</script>

<div id="prices_crude"></div>