<?php
require_once(__DIR__ . '/../../../includes/helper_functions.inc');
$chart = 'product_demand';
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
        "renderTo": "product_demand",
        "zoomType": "x",
        "marginTop": 75,
        "marginBottom": 75,
        "height": "470"
        <?php if($forPPT) { ?>
        , "marginRight": 20
        <?php } else { ?>
        , "marginRight": 10
        <?php } ?>
    },
    "credits": {
        <?php if(!$forPPT) { ?>
        "text": "Data source: U.S. Energy Information Administration",
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
        <?php } else { ?>
        "enabled": false
        <?php } ?>
    },

    <?php if(!$forPPT) { ?>
    "title": {
        "text": "Global petroleum product consumption",
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
        "tickInterval": <?php echo 730 * 24 * 3600 * 1000; ?>,
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
        "y": 0,
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
            return "<b>" + this.series.name + "</b><br>" + Highcharts.dateFormat(" %Y", this.x)
                    + "<br/>" + Highcharts.numberFormat(this.y, 3) + " percent change (year over year)";
        }
    },
    <?php } else { ?>
    "tooltip": {
        "enabled": false
    },
    <?php } ?>
    "yAxis": {
        "title": {
            "text": "% change (year over year)",
            "style": {
                "color": "black",
                "fontWeight": "normal",
                "fontSize": "12px",
                "fontFamily": "Arial"
            }
        },
        "min": -13,
        "max": 9,
        "tickInterval": 1,
        "plotLines": [{
            "color": "black",
            "width": 2,
            "value": 0
        }],
        "labels": {
            "style": {
                "color": "black",
                "fontFamily": "Arial"
            }
        }
    },
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
                            this.exportChart({filename: 'product_demand'}, options)
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
                            window.open('./csv/product_demand.csv');
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
                    echo '[' . (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) * 1000) . ', ' . number_format($query[$i]['gasoline'], 2, '.', '') . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
                }
                ?>

            ],
            "type": "column",
            "name": "Gasoline"
        },
        {
            "data": [
                <?php
                for ($i = 0; $i < sizeof($query); $i++) {
                    echo '[' . (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) * 1000) . ', ' . number_format($query[$i]['distillate'], 2, '.', '') . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
                }
                ?>

            ],
            "type": "column",
            "name": "Distillate"
        }
    ]
				
}
<?php $chartOptions = ob_get_clean();?>
<script type="text/javascript">
    var chart,
            opts_product_demand = <?php echo $chartOptions;?>;

        $(document).ready(function () {
            var chart = new Highcharts.Chart(opts_product_demand);
        });
</script>

<div id="product_demand"></div>
<?php if (!$forPPT) { ?>
	<div id="update_date">
		<div class="update">
			Updated: Annual | Last Updated: <?php echo $updateDate[0]['update_date']; ?>
		</div>
	</div>
<?php } ?>