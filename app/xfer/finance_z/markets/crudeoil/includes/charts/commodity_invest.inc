<?php
$chart = 'ubs_commodity';
$forPPT = isset($forPPT) ? $forPPT : false;
$forImage = isset($forImage) ? $forImage : false;
$forImageGeneration = $forPPT || $forImage;
$query = null;
$updateDate = null;

/* Setting the colors for the categories below. */
$colors = array(
		"Energy" => "rgb(64, 50, 3)",
		"Grains" => "rgb(189, 115, 42)",
		"Softs" => "rgb(244, 176, 132)",
		"Precious Metals" => "rgb(0, 57, 83)",
		"Industrial Metals" => "rgb(0, 100, 150)",
		"Livestock" => "rgb(93, 151, 50)",
);

/* The order of this is important as this determines what order the things show up in the pie chart.
 * The first element will start and the 12:00 O'clock position and move clockwise.
 */
$category = array(
		"Natural Gas" => "Energy",
		"Crude Oil: Brent" => "Energy",
		"Crude Oil: WTI" => "Energy",
		"Heating Oil" => "Energy",
		"Gas Oil" => "Energy",
		"Gasoline" => "Energy",
		"Corn" => "Grains",
		"Soybeans" => "Grains",
		"Wheat" => "Grains",
		"Soybean Meal" => "Grains",
		"Soybean Oil" => "Grains",
		"Sugar" => "Softs",
		"Coffee" => "Softs",
		"Cotton" => "Softs",
		"Gold" => "Precious Metals",
		"Silver" => "Precious Metals",
		"Copper" => "Industrial Metals",
		"Aluminum" => "Industrial Metals",
		"Zinc" => "Industrial Metals",
		"Nickel" => "Industrial Metals",
		"Live Cattle" => "Livestock",
		"Lean Hogs" => "Livestock"
);

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
"type" : "pie",
"renderTo": "comm_invest",
"zoomType": "x",
"marginTop": 75,
"marginLeft": 40,
"marginBottom": 105,
"height": "510"
, "marginRight": <?php if ($forPPT) {
	echo '30';
} else {
	echo '40';
} ?>

},
"credits": {
<?php if (!$forPPT) { ?>
	"text": "Data source: Bloomberg L.P., Published by: U.S. Energy Information Administration.",
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
	"text": "Composition of the Bloomberg L.P. Commodity Index",
	"align": "left",
	"y": 10,
	"style": {
	"color": "black",
	"fontWeight": "bold",
	"fontSize": "16px",
	"fontFamily": "Arial"
	}
	},
	"subtitle": {
	"text": "2022 Target Weights of the Bloomberg L.P. Commodity Index",
	"align": "left",
	"style": {
	"color": "black",
	"fontSize": "12px",
	"fontFamily": "Arial"
	}
	},
<?php } else { ?>
	"title": {
	"text": ""
	},
<?php } ?>
"legend": {
"enabled": true,
"layout": "horizontal",
"align": "center",
"verticalAlign": "bottom",
"x": 0,
"y": -25,
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
	"crosshairs": false,
	"formatter": function () { return '<b>' + this.point.name + '</b>: ' + this.y.toFixed(1) + ' %'; }
	},
<?php } else { ?>
	"tooltip": {
	"enabled": false
	},
<?php } ?>
"plotOptions": {
"series": {
"states": {
"hover": {
"enabled": true
}
}
},
"pie": {
"borderColor": "#ffffff",
"allowPointSelect": true,
"cursor": "pointer",
"borderWidth": 0.5,
<?php if (!$forPPT) { ?>
	"shadow": true,
<?php } ?>
"dataLabels": {
"distance": 20,
"allowOverlap" : true,
"style": {
"fontFamily": "Arial",
"fontSize": <?php if($forPPT) { echo '"8px"'; } else { echo '"11px"'; }?>,
"color": "black"
},
"formatter": function () { return '<b>' + this.point.name + '</b>: ' + this.y.toFixed(1) + ' %'; }

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
	this.exportChart({filename: 'Markets_shares'}, options)
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
	window.open('./csv/Markets_shares.csv');
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
<?php }?>
"series": [{
<?php /* purpose of this series is to show the legend. It is drawn first so it shows up behind the actual pie chart */ ?>
"type": "pie",
"size": "0%",
"name": "legend_data",
"showInLegend": true,
"dataLabels": {
"formatter": function () { return null; }
},
"data": <?php
$categories = array_keys($colors);
$legend_data = array();
for ($i = 0; $i < sizeof($categories); $i++) {
	array_push($legend_data, array(
			"name" => $categories[$i],
			"color" => $colors[$categories[$i]]
	));
}

echo json_encode($legend_data);
?>
<?php /* porpose of this piece of code is to make it so that clicking on legend does nothing */ ?>
<?php if(!$forPPT) { ?>
,"point": {
	"events": {
		"legendItemClick": function (e) {
			e.preventDefault();
		}
	}
}
<?php } ?>
}, {
"type": "pie",
"name": "Browser share",
"data":
<?php
$query_result = array();

for ($i = 0; $i < sizeof($query); $i++) {
	$query_result[$query[$i]['commodity']] = array(
			"name" => $query[$i]['commodity'],
			"y" => $query[$i]['percent_allocation'],
			"color" => $colors[$category[$query[$i]['commodity']]]
	);
}

/* The following code will sort the commodities in the exact same order
 * as the above's $category variable
 */
$sorted_result = array();
$sorted_asc_array = array();
foreach (array_keys($category) as $key) {
	array_push($sorted_result, $query_result[$key]);
}


/* sort each category in descending order (comparing by color)
*/

function cmp($a, $b){
    return ($a["y"] == $b["y"]) ? 0 : (($a["y"] < $b["y"]) ? -1 : 1);
}

foreach(array_keys($colors) as $key2){
    $temp_array = array();
    foreach($sorted_result as $item){
        if($item["color"] == $colors[$key2]){
            array_push($temp_array, $item);
        }
    }

   usort($temp_array,"cmp");
    array_push($sorted_asc_array, ...$temp_array );
}
$sorted_result = $sorted_asc_array;


/* encode the structure as JSON and print it out.
 * Also this version of PHP is old so JSON_NUMERIC_CHECK flag is necessary
 * for the "y" to be converted to an integer instead of a string
 */
echo json_encode($sorted_result, JSON_NUMERIC_CHECK);
?>
}]
}
<?php $chartOptions = ob_get_clean(); ?>
<script type="text/javascript">
	var chart,
			opts_commodity_invest = <?php echo $chartOptions; ?>;

	$(document).ready(function () {
		var chart = new Highcharts.Chart(opts_commodity_invest);
	});
</script>

<div id="comm_invest"></div>
<?php if (!$forPPT) { ?>
	<div id="update_date">
		<div class="update">
			Updated: Annually | Last Updated: <?php echo $updateDate[0]['update_date']; ?>
		</div>
	</div>
<?php } ?>
