<?php
require_once(__DIR__ . '/../../../includes/helper_functions.inc');
$chart = 'consumption_gas_retail';
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
        "renderTo": "consumption_gas_retail",
        "zoomType": "x",
        "marginTop": 75,
        "marginBottom": 75
        <?php if($forPPT) { ?>
        , "marginRight": 40
        <?php } else { ?>
        , "marginRight": 40,
        "height": "470"
        <?php } ?>
    },
    "credits": {
        <?php if(!$forPPT) { ?>
        "text": "Data source: U.S. Energy Information Administration",
        "href": "",
        "position": {
            "align": "left",
            "verticalAlign": "bottom",
            "x": 80,
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
    <?php if(!$forPPT) { ?>
    "title": {
        "text": "U.S. consumption of gasoline and retail gasoline prices",
        "align": "left",
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
            $date = "";
            for ($i = 0; $i < sizeof($query); $i++) {
                if (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) <= time()) {
                    $date = (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) * 1000) - (365 * 24 * 3600 * 1000 / 12);
                }
            }
            ?>
            "value": <?php echo $date; ?> ,
            "width": 0.5,
            "label": {
                "text": "forecast",
                "verticalAlign": "top",
                "rotation": 0,
                "y": 14
            }

        }]
    },
    "legend": {
        "enabled": true,
        "layout": "horizontal",
        "align": "center",
        "verticalAlign": "bottom",
        "x": 0,
        "y": <?php if($forPPT) { echo 15; } else { echo 0; }?>,
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
                    quarter = Math.ceil(( d.getMonth() / 3)) + 1 < 5 ? Math.ceil(( d.getMonth() / 3)) + 1 : 1;
            year = Math.ceil(( d.getMonth() / 3)) + 1 < 5 ? d.getFullYear() : d.getFullYear() + 1;
            return '<b>' + this.series.name + '</b>' + '<br/>' + year + ', quarter ' + quarter + '<br/>' + Highcharts.numberFormat(this.y, 3) + (this.series.name == "U.S. gasoline product supplied" ? " percent change product supplied (year over year)" : " dollars per gallon, nominal");
        }
    },
    <?php } else { ?>
    "tooltip": {
        "enabled": false
    },
    <?php } ?>
    "yAxis": [{
        "title": {
            "text": "% change product supplied (year over year)",
            "style": {
                "color": "#0096d7",
                "fontWeight": "normal",
                "fontSize": "12px",
                "fontFamily": "Arial"
            }
        },
        "tickPositions":[-30, -20, -10, 0, 10, 20, 30],
        "labels" : {
            "style": {
                "color": "#0096d7",
                "fontFamily": "Arial"
            }
        }
        
    },
        {
            "opposite": true,
            "title": {
                "text": "dollars per gallon, nominal",
                "style": {
                    "color": "#bd732a",
                    "fontWeight": "normal",
                    "fontSize": "12px",
                    "fontFamily": "Arial"
                }
            },
            "tickPositions":[-6, -4, -2, 0, 2, 4, 6],
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
                            this.exportChart({filename: 'consumption_gas_retail'}, options)
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
                            window.open('./csv/consumption_gas_retail.csv');
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
                    echo '[' . (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) * 1000) . ', ' . number_format($query[$i]['motor_gasoline'], 2, '.', '') . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
                }
                ?>

            ],
            "type": "column",
            "name": "U.S. gasoline product supplied",
            "yAxis": 0
        },
        {
            "data": [
                <?php
                for ($i = 0; $i < sizeof($query); $i++) {
                    echo '[' . (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) * 1000) . ', ' . number_format($query[$i]['gasoline_regular'], 2, '.', '') . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
                }
                ?>

            ],
            "type": "line",
            "name": "Gasoline regular grade retail price incl taxes, U.S. Average",
            "yAxis": 1
        }
    ]

}

<?php $chartOptions = ob_get_clean();?>
<script type="text/javascript">
	var chart,
			opts_consumption_gas_retail = <?php echo $chartOptions; ?>;


	$(document).ready(function () {
		var chart = new Highcharts.Chart(opts_consumption_gas_retail);
	});
</script>

<div id="consumption_gas_retail"></div>
<?php if (!$forPPT) { ?>
	<div id="update_date">
		<div class="update">
			Updated: Monthly | Last Updated: <?php echo $updateDate[0]['update_date']; ?>
		</div>
	</div>
<?php } ?>