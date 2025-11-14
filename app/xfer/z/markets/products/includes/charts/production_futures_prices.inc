<?php
require_once(__DIR__ . '/../../../includes/helper_functions.inc');
$chart = 'production_futures_prices';
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
        "renderTo": "production_futures_prices",
        "zoomType": "x",
        "marginTop": 75,
        "marginBottom": 160,
        "height": "480"
        , "marginRight": 40
    },
    "credits": {
        "text": "Data source: U.S. Energy Information Administration, Bloomberg L.P.",
        "href": "",
        "position": {
            "align": "left",
            "verticalAlign": "bottom",
            "x": 50,
            "y": -5
        },
        "style": {
            "color": "black",
            "fontSize": "10px",
            "fontFamily": "Arial"
        }
				<?php if($forPPT) { ?>
        ,"enabled": false
        <?php } ?>
    },
    <?php if(!$forPPT) { ?>
    "title": {
        "text": "Production and futures prices",
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
        "min": <?php echo mktime(0, 0, 0, 1, 1, 2000) * 1000; ?>,
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
        "x" : 0,
        "y" : -20,
        "text": "Note: Since 2006, the underlying commodity for the gasoline futures contract has been reformulated blendstock for oxygenate<br>blending (RBOB). Since the spring of 2013, the underlying commodity for the distillate futures contract has been ultra-low<br>sulfur diesel (ULSD).",
        "style": {
            "color": "gray",
            "fontSize": "10px",
            "fontFamily": "Arial"
        }
    },
    <?php } ?>
    "legend": {
        "enabled": true,
				<?php if(!$forPPT) { ?>"backgroundColor" : "#F1F1F1",<?php } ?>
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
    <?php if(!$forImageGeneration) { ?>
    "tooltip": {
        "style": {
            "padding": 5,
            "fontFamily": "Arial"
        },
        "formatter": function () {
            return "<b>" + this.series.name + "</b><br>" + Highcharts.dateFormat("%Y", this.x) + "<br/>" + " " + Highcharts.numberFormat(this.y, 5) + (this.series.name == "Distillate to gasoline production ratio" ? " production ratio" : "price spread (dollars per gallon, nominal)");
        }
    },
    <?php } else { ?>
    "tooltip": {
        "enabled": false
    },
    <?php } ?>
    "yAxis": [{
        "title": {
            "text": "production ratio",
            "style": {
                "color": "#0096d7",
								"fontWeight" : "normal"
            }
        },
        "tickPositions" : [0.4, 0.45, 0.5, 0.55, 0.6, 0.65, 0.7, 0.75, 0.8],

        "labels": {
					"format":"{value:.2f}",
					"style": {
							"color": "#0096d7",
							"fontFamily": "Arial"
					}
				}
			}, {
        "title": {
            "text": "price spread (dollars per gallon, nominal)",
            "style": {
                "color": "#bd732a",
                "fontWeight": "normal",
                "fontSize": "12px"
            },
						"align" : "high",
						"rotation": 0,
						"y" : -15
        },
        "opposite": true,
        "tickPositions" : [-0.2, -0.1, 0, 0.1, 0.2, 0.3, 0.4, 0.5, 0.6],
        "labels": {
            "format":"{value:.1f}",
            "style": {
                "color": "#bd732a",
                "fontFamily": "Arial"
            }
        }
    }
    ],
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
                        text: "Print Chart",
                        onclick: function () {
                            this.print();
                        }
                    },
                    {
                        separator: true
                    },
                    {
                        "text": "Download Image",
                        "onclick": function () {
                            var options =
                            {
                                url: '/global/scripts/jquery/highcharts/exporting-server/index.php',
                                width: 870
                            }
                            this.exportChart({filename: 'production_futures_prices'}, options)
                        }
                    },
                    {
                        "text": "Download PDF",
                        "onclick": function () {
                            var options =
                            {
                                url: "/global/scripts/jquery/highcharts/exporting-server/index.php",
                                type: "application/pdf",
                                width: 1270
                            }
                            this.exportChart(options)
                        }
                    },
                    {
                        "text": "Download Data in CSV",
                        "onclick": function () {
                            window.open('./csv/production_futures_prices.csv');
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
        "#003953",
        "#a33340",
        "#bd732a",
        "#103203",
        "#ffc702"
    ],
    "series": [
        {
            "data": [
                <?php
                for ($i = 0; $i < sizeof($query); $i++) {
                    if (array_key_exists('distillate_gasoline_ratio', $query[$i])) {
                        echo '[' . (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) * 1000) . ', ' . $query[$i]['distillate_gasoline_ratio'] . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
                    }
                }
                ?>

            ],
            "type": "line",
            "name": "Distillate to gasoline production ratio"

        },
        {
            "data": [
                <?php
                for ($i = 0; $i < sizeof($query); $i++) {
                    if (array_key_exists('heating_minus_gasoline', $query[$i])) {
                        echo '[' . (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) * 1000) . ', ' . $query[$i]['heating_minus_gasoline'] . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
                    }
                }
                ?>

            ],
            "type": "line",
            "name": "Distillate minus gasoline futures (right side)",
            "yAxis": 1
        }
    ]
}
<?php $chartOptions = ob_get_clean();?>
<script type="text/javascript">
    var chart,
            opts_production_futures_prices = <?php echo $chartOptions;?>;
		$(document).ready(function () {
			var chart = new Highcharts.Chart(opts_production_futures_prices);
		});
	</script>

	<div id="production_futures_prices"></div>
<?php if (!$forPPT) { ?>
	<div id="update_date">
		<div class="update">
			Updated: Annual | Last Updated: <?php echo $updateDate[0]['update_date']; ?>
		</div>
	</div>
<?php } ?>