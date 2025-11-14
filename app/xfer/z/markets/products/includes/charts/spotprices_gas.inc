<?php
require_once(__DIR__ . '/../../../includes/helper_functions.inc');
$chart = 'spotprices_gas';
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
        "renderTo": "spotprices_gas",
        "zoomType": "x",
        "marginTop": 75,
        "marginBottom": 155,
        "height": "490"
        <?php if($forPPT) { ?>
        , "marginRight": 20
        <?php } else { ?>
        , "marginRight": 10
        <?php } ?>
    },
    "credits": {
        <?php if(!$forPPT) { ?>
        "text": "Data source: U.S. Energy Information Administration, Bloomberg L.P.",
        "href": ""
        <?php } else { ?>
        "enabled": false
        <?php } ?>
    },

    <?php if(!$forPPT) { ?>
    "title": {
        "text": "Gasoline spot prices",
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
        "min": <?php echo mktime(0, 0, 0, 1, 1, 2008) * 1000; ?>,
        "labels": {
            "y": 20,
            "style": {
                "color": "black",
                "fontFamily": "Arial"
            }
        }
    },
		<?php if(!$forPPT) { ?>
    "caption": {
        "x" : 10,
        "y" : -15,
        "text": "Note: CBOB is Conventional Blendstock for Oxygenate Blending. CARBOB is California<br>Reformulated Gasoline Blendstock for Oxygenate Blending.",
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
        "y": -15,
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
            return "<b>" + this.series.name + "</b><br>" + Highcharts.dateFormat("%B %Y", this.x)
                    + "<br/>" + "$" + Highcharts.numberFormat(this.y, 3) + (this.series.name == "U.S. retail price of regular gasoline" ? " per gallon" : " per barrel");
        }
    },
    <?php } else { ?>
    "tooltip": {
        "enabled": false
    },
    <?php } ?>
    "yAxis": [{
        "title": {
					"text": "dollars per gallon, nominal",
					"style" : {
						"fontWeight" : "normal",
						"color" : "black"
					}
        },
        "min": 0,
        "max": 5.0,
        "tickInterval": 0.5,
        "plotLines": [{
            "color": "black",
            "width": 2,
            "value": 0
        }],
        "labels": {
			"format":"{value:.1f}",
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
    <?php if(!$forImageGeneration) { ?>
    "exporting": {
        "buttons": {
            "contextButton": {
                "text": "DOWNLOAD",
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
                            this.exportChart({filename: 'spotprices_gas'}, options)
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
                            window.open('./csv/spotprices_gas.csv');
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
        "#003953",
        "#103203"
    ],
    "series": [
        {
            "data": [
                <?php
				$keyCount = 0; $keyIndex = 1;
				// get record count of 'chicago_cbob' keys
				for($i = 0; $i < sizeof($query); $i++) { if (array_key_exists('chicago_cbob', $query[$i])) { $keyCount++; } }
                for ($i = 0; $i < sizeof($query); $i++) {
					if (array_key_exists('chicago_cbob', $query[$i])) {
						echo '[' . (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) * 1000) . ', ' . number_format($query[$i]['chicago_cbob'], 2, '.', '') . ']' . ($i < sizeof($query) - 1 && ($keyIndex < $keyCount) ? ', ' : '');
						$keyIndex++;
					}
				}
                ?>

            ],
            "type": "line",
            "name": "Chicago CBOB"
        },
        {
            "data": [
                <?php
				$keyCount = 0; $keyIndex = 1;
				// get record count of 'ny_harbor_conventional_gas' keys
				for($i = 0; $i < sizeof($query); $i++) { if (array_key_exists('ny_harbor_conventional_gas', $query[$i])) { $keyCount++; } }
                for ($i = 0; $i < sizeof($query); $i++) {
					if (array_key_exists('ny_harbor_conventional_gas', $query[$i])) {
						echo '[' . (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) * 1000) . ', ' . number_format($query[$i]['ny_harbor_conventional_gas'], 2, '.', '') . ']' . ($i < sizeof($query) - 1 && ($keyIndex < $keyCount) ? ', ' : '');
						$keyIndex++;
					}
				}
                ?>

            ],
            "type": "line",
            "name": "New York Harbor conventional gasoline"
        },
        {
            "data": [
                <?php
				$keyCount = 0; $keyIndex = 1;
				// get record count of 'gulf_coast_conventional_gas' keys
				for($i = 0; $i < sizeof($query); $i++) { if (array_key_exists('gulf_coast_conventional_gas', $query[$i])) { $keyCount++; } }
                for ($i = 0; $i < sizeof($query); $i++) {
					if (array_key_exists('gulf_coast_conventional_gas', $query[$i])) { 
						echo '[' . (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) * 1000) . ', ' . number_format($query[$i]['gulf_coast_conventional_gas'], 2, '.', '') . ']' . ($i < sizeof($query) - 1 && ($keyIndex < $keyCount)? ', ' : '');
						$keyIndex++;
					}
				}
                ?>

            ],
            "type": "line",
            "name": "Gulf Coast conventional gasoline"
        },
        {
            "data": [
                <?php
				$keyCount = 0; $keyIndex = 1;
				// get record count of 'los_angeles_carbob' keys
				for($i = 0; $i < sizeof($query); $i++) { if (array_key_exists('los_angeles_carbob', $query[$i])) { $keyCount++; } }
                for ($i = 0; $i < sizeof($query); $i++) {
                    if (array_key_exists('los_angeles_carbob', $query[$i])) {
                        echo '[' . (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) * 1000) . ', ' . number_format($query[$i]['los_angeles_carbob'], 2, '.', '') . ']' . ($i < sizeof($query) - 1 && ($keyIndex < $keyCount) ? ', ' : '');
						$keyIndex++;
					}
                }
                ?>

            ],
            "type": "line",
            "name": "Los Angeles CARBOB"
        },

        {
            "data": [
                <?php
				$keyCount = 0; $keyIndex = 1;
				// get record count of 'north_west_europe_gas' keys
				for($i = 0; $i < sizeof($query); $i++) { if (array_key_exists('north_west_europe_gas', $query[$i])) { $keyCount++; } }
                for ($i = 0; $i < sizeof($query); $i++) {
                    if (array_key_exists('north_west_europe_gas', $query[$i])) {
                        echo '[' . (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) * 1000) . ', ' . number_format($query[$i]['north_west_europe_gas'], 2, '.', '') . ']' . ($i < sizeof($query) - 1 && ($keyIndex < $keyCount)? ', ' : '');
						$keyIndex++;
					}
                }
                ?>

            ], 
            "type": "line",
            "name": "Northwest Europe gasoline"
        },
        {
            "data": [
                <?php
				$keyCount = 0; $keyIndex = 1;
				// get record count of 'singapore_gasoline' keys
				for($i = 0; $i < sizeof($query); $i++) { if (array_key_exists('singapore_gasoline', $query[$i])) { $keyCount++; } }
                for ($i = 0; $i < sizeof($query); $i++) {
                    if (array_key_exists('singapore_gasoline', $query[$i])) {
                        echo '[' . (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) * 1000) . ', ' . number_format($query[$i]['singapore_gasoline'], 2, '.', '') . ']' . ($i < sizeof($query) - 1 && ($keyIndex < $keyCount) ? ', ' : '');
						$keyIndex++;
					}
                }
                ?>

            ],
            "type": "line",
            "name": "Singapore gasoline"
        }
    ]
}
<?php $chartOptions = ob_get_clean();?>
<script type="text/javascript">
    var chart,
            opts_spotprices_gas = <?php echo $chartOptions;?>;
		$(document).ready(function () {
			var chart = new Highcharts.Chart(opts_spotprices_gas);
		});
	</script>

	<div id="spotprices_gas"></div>
<?php if (!$forPPT) { ?>
	<div id="update_date">
		<div class="update">
			Updated: Monthly | Last Updated: <?php echo $updateDate[0]['update_date']; ?>
		</div>
	</div>
<?php } ?>