<style>
	#efmi_ofm {
		width: 100%;
	}

	#efmi_ofm .qtr {
		width: 25%;
		height: 100%;
	}

	#legend {
		margin-top: 2.5em;
		padding: 0;
		text-align: center;
		margin-left: 50px;
	}

	#efmi_ofm span,
	#legend span {
		font-weight: bold;
		display: inline-block;
	}

	#legend .vals {
		height: 20px;
		width: 85px;
	}

	#legend div span {
		width: 50%;
		text-align: center;
	}

	#legend_colors {
		border: solid 1px #939393;
		height: 20px;
		width: 595px;
	}

	#efmi_ofm tr td {
		border-bottom: 1px solid gray;
		border-right: 1px solid gray;
		height: 40px;
		padding: 0;
	}

	#efmi_ofm tr th {
		border-bottom: none;
		text-align: center;
	}

	#efmi_ofm td.first_col {
		background-color: white;
		border-left: 1px solid gray;
		text-align: center;
		padding: 0 5px;
		vertical-align: bottom;
	}

	.negative.low {
		background-color: #4cc9ff;
	}

	.negative.med {
		background-color: #0196d8;
	}

	.negative.high {
		background-color: #00628c;
		color: #a4cddf;
	}

	.positive.low {
		background-color: #91c767;
	}

	.positive.med {
		background-color: #5d9731;
	}

	.positive.high {
		background-color: #32630c;
		color: #bacfaa;
	}

	.empty {
		background-color: white;
	}

	.noVal {
		background-color: lightgray;
	}

	#efmi_ofm span.oilPeak {
		border-left: 2px solid black;
		margin-right: -2px;
	}
</style>
<?php
require_once('chartHelperFunctions.inc');
$chart = "commodities";
$forPPT = isset($forPPT) ? $forPPT : false;
$query = null;
$updateDate = null;
ob_start();
include(__DIR__ . '/../../data.php');
ob_end_clean();
date_default_timezone_set('UTC');

$dataArr = array();
$minYear = INF;
$maxYear = -INF;
$rows = array(
		"ngas",
		"gold",
		"copper",
		"silver",
		"soy",
		"corn",
		"wheat"
);
for ($i = 0; $i < sizeof($rows); $i++) {
	$dataArr[$rows[$i]] = array();
}

for ($i = 0; $i < sizeof($query); $i++) {
	$rec = $query[$i];
	$year = $rec['year'];
	$qtr = $rec['qtr'];
	$minYear = min($minYear, $year);
	$maxYear = max($maxYear, $year);

	for ($j = 0; $j < sizeof($rows); $j++) {
		if (!array_key_exists($year, $dataArr[$rows[$j]])) {
			$dataArr[$rows[$j]][$year] = array();
		}
		$dataArr[$rows[$j]][$year][$qtr] = $rec[$rows[$j]];
	}
}

$header = '';
$rowOutput = array(
		"ngas" => '<td class="first_col">Natural Gas</td>',
		"gold" => '<td class="first_col">Gold</td>',
		"copper" => '<td class="first_col">Copper</td>',
		"silver" => '<td class="first_col">Silver</td>',
		"soy" => '<td class="first_col">Soybeans</td>',
		"corn" => '<td class="first_col">Corn</td>',
		"wheat" => '<td class="first_col">Wheat</td>'
);
?>

<div style=" margin-top: 10px; margin-bottom: -5px; margin-left: 10px; font-size:16px; font-weight:bold;">Correlations
	between daily price changes of crude oil and other commodities
</div>
<div>
	<?php /* <table id="efmi_ofm" style="color:white;"> */ ?>
	<table id="efmi_ofm">
		<?php
		// build header row
		for ($j = $minYear; $j <= $maxYear; $j++) {
			$header .= "<th>$j</th>";
		}
		$header = "<tr><th></th>" . $header . "</tr>";

		// loop over rows to build body html
		for ($i = 0; $i < sizeof($rows); $i++) {
			$rowOutput[$rows[$i]] = '<tr>' . $rowOutput[$rows[$i]];
			// loop over years, first column grouping
			for ($j = $minYear; $j <= $maxYear; $j++) {
				$rowOutput[$rows[$i]] .= '<td>';

				// loop over quarters, second column grouping
				for ($k = 1; $k <= 4; $k++) {
					$dataValue = 'noVal';
					if (array_key_exists($rows[$i], $dataArr) && array_key_exists($j, $dataArr[$rows[$i]]) && array_key_exists($k, $dataArr[$rows[$i]][$j])) {
						$dataValue = $dataArr[$rows[$i]][$j][$k];
					}
					$rowOutput[$rows[$i]] .= '<span class="qtr ' . getClassForValue($dataValue) . '" alt="Quarter ' . $k . '"></span>';
				}

				$rowOutput[$rows[$i]] .= '</td>';
			}

			$rowOutput[$rows[$i]] .= '</tr>';
		}

		echo $header;

		for ($i = 0; $i < sizeof($rows); $i++) {
			echo $rowOutput[$rows[$i]];
		}
		?>
	</table>
</div>
<!-- <div class="peakLbl2"><img src="images/price_peak.png" border="0"  /></div> -->
<!--<span class="peakLbl">WTI crude oil price peak</span><-->
<div id="legend">
	<div id="legend_colors">
		<span class="vals negative high">< -0.65</span><span class="vals negative med">-0.65 to -0.4</span><span
				class="vals negative low">-0.4 to -0.25</span><span class="vals empty">-0.25 to 0.25</span><span
				class="vals positive low">0.25 to 0.4</span><span class="vals positive med">0.4 to 0.65</span><span
				class="vals positive high">> 0.65</span>
	</div>
	<div><span>Negative Correlation</span><span>Positive Correlation</span></div>
</div>
<br clear="all">
<p>
<div style="color:gray;font-size:10px; margin-bottom: -20px;">Data source: U.S. Energy Information Administration</div><br
		clear="all">
<div style="color:grey;font-size:10px;">Updated: Quarterly | Last
	Updated: <?php echo $updateDate[0]['update_date']; ?></div>
</p>