<?php
require_once(__DIR__ . '/../../../includes/helper_functions.inc');
$chart = 'gasoline_refinery_output';
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
        "renderTo": "gasoline_refinery_output",
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
            "y": -5,
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
        "text": "Gasoline refinery output",
        "style": {
            "color": "black",
            "fontWeight": "bold",
            "fontSize": "16px",
            "fontFamily": "Arial"
        }
    },
    <?php } else { ?>
    "title": {"text": ""},
    <?php } ?>
    "xAxis": {
        "type": "datetime",
        "tickInterval": <?php echo 365 * 24 * 3600 * 1000 * 2; ?>,
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
    "legend": {
        "enabled": false
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
            return '<strong>' + this.series.name + '</strong>' + '<br/>' + year + ', quarter ' + quarter + '<br/>' + Highcharts.numberFormat(this.y, 3) + ' million barrels per day';
        }
    },
    <?php } else { ?>
    "tooltip": {
        "enabled": false
    },
    <?php } ?>
    "yAxis": {
        "title": {
            "text": "million barrels per day",
            "rotation": 0,
            "style": {
                "color": "black",
                "fontWeight": "normal",
                "fontSize": "12px",
                "fontFamily": "Arial"
            }
        },
        "min": 0,
        "max": 12,
        "tickInterval": 2,
        "labels": {
            "style": {
                "color": "black",
                "fontFamily": "Arial",
                "marginLeft": "-25px"
            }
        }
    },

    "plotOptions": {
        "column": {
            "shadow": 0,
            "borderWidth": 0
        },
        "series": {
            <?php if($forPPT) { ?>
            "enableMouseTracking": false,
            "marker": {
                "enabled": false
            }
            <?php } ?>
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
                            this.exportChart({filename: 'gasoline_refinery_output'}, options)
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
                            window.open('./csv/gasoline_refinery_output.csv');
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
                echo '[' . (mktime(0, 0, 0, $query[$i]['month'], 1, $query[$i]['year']) * 1000) . ', ' . number_format($query[$i]['gasoline'], 2, '.', '') . ']' . ($i < sizeof($query) - 1 ? ', ' : '');
            }
            ?>

        ],
        "type": "column",
        "color": "#5D9732",
        "name": "Gasoline"
        <?php if(!$forPPT) { ?>
        , "events": {
            "legendItemClick": function (e) {
                return false;
            }
        }
        <?php } ?>
    }
  ]
}

<?php $chartOptions = ob_get_clean();?>
<script type="text/javascript">
    var chart,
            opts_gasoline_refinery_output = <?php echo $chartOptions;?>;
	$(document).ready(function () {
		var chart = new Highcharts.Chart(opts_gasoline_refinery_output);
	});
</script>

<div id="gasoline_refinery_output"></div>
<?php if (!$forPPT) { ?>
	<div id="update_date">
		<div class="update">
			Updated: Monthly | Last Updated: <?php echo $updateDate[0]['update_date']; ?>
		</div>
	</div>
<?php } ?>
