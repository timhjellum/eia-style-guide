<?php
$locale 		= 'overview';
$L2Title = "Residential Energy Consumption Survey (RECS)";
?>
<!doctype html>
<?php
$globalTitle 	= 'U.S. Energy Information Administration (EIA)';

$pageTitle          = '';

?>

<head>

  <script type="text/javascript">

    $(window).load(function () {

      var chart_20110113 = new Highcharts.Chart({

        chart: {



          renderTo: 'container_AEO2011',

          defaultSeriesType: 'column',

          spacingBottom: 30 * 1 //spacing at the bottom of the chart for credits/notes. Use 25 for each line of text: 1 line = 25, 2 lines = 50...

        },



        title: {

          text: '',

          align: 'left',

          style: {

            color: 'black',

            fontWeight: 'bold',

            fontSize: '16px',

            fontFamily: 'Arial'

          }

        },



        subtitle: {

          text: 'million light-duty cars and trucks sold',

          align: 'left',

          x: 0,

          y: 20,

          style: {

            color: 'black',

            fontWeight: 'normal',

            fontSize: '12px',

            fontFamily: 'Arial'

          }

        },



        credits: {

          enabled: false

        },

        xAxis: {

          categories: ['2000', '2009', '2015', '2020', '2025', '2030', '2035'],

          lineColor: '#000000',

          labels: {

            y: 15,

            style: {

              color: 'black',

              fontFamily: 'Arial'

            }

          },

          plotLines: [{

            color: '#BDBDBD',

            width: 1.5,

            value: 1.5

          }]

        },

        yAxis: {

          title: null,

          min: 0,

          max: 20,

          labels: {

            style: {

              color: 'black',

              fontFamily: 'Arial'

            }

          },



        },





        navigation: {

          buttonOptions: {

            enabled: true

          }

        },

        legend: {

          enabled: true,

          layout: 'vertical',

          align: 'right',

          x: 15,

          y: 10,

          verticalAlign: 'middle',

          borderWidth: 0,

          symbolPadding: 5,

          itemStyle: {

            fontFamily: 'Arial',

            color: '#189bd7',

            fontWeight: 'normal',

            textDecoration: 'none'

          },

          itemHoverStyle: {

            color: '#189bd7',

            textDecoration: 'underline'

          },

          itemHiddenStyle: {

            color: '#ccc',

            fontWeight: 'normal'

          }

        },

        exporting: {

          buttons: {

            exportButton: {

              menuItems: [{

                text: 'Download Image',

                onclick: function () {

                  this.exportChart();

                }

              }, {

                text: 'Download Data in CSV',

                onclick: function () { window.open('chartdata/unconventional_vehicles.csv'); }

              },

                null,

                null

              ]
            }

          },

          filename: 'historical_energy_consumption',

          type: 'image/png'

        },

        tooltip: {

          formatter: function () {

            return '<strong>' + this.x + '</strong><br/>' +

              this.series.name + ': ' + Highcharts.numberFormat(this.y, 1) + ' million' + '<br/>';

          }

        },







        labels: {

          items: [{



            html: 'history',

            style: {

              left: '40px',

              top: '5px',

              color: 'black',

              fontSize: '12px',

              fontFamily: 'Arial'

            }

          },



          {

            html: 'projections',

            style: {

              left: '205px',

              top: '5px',

              color: 'black',

              fontSize: '12px',

              fontFamily: 'Arial'

            }

          },



          {

            html: 'Source: <a href="http://www.eia.doe.gov/" class="reg";>U.S. Energy Information Administration</a> - <a href="http://www.eia.gov/forecasts/aeo/index.cfm" class="reg";>Annual Energy Outlook 2011 Early Release</a>',

            style: {

              left: '-20px',

              top: '265px',

              color: 'black',

              fontSize: '10px',

              fontFamily: 'Arial'

            }

          },



          ]



        },



        plotOptions: {

          column: {

            stacking: 'normal',

            pointPadding: 0.0,

            borderWidth: 0,

            shadow: false

          }

        },

        series: [{



          name: 'Diesel',

          color: 'rgba(93, 151, 50, 1.0)',

          data: [0.025804766, 0.171894806, 0.65154065, 0.625231873, 0.73879773, 0.889342713, 1.054686401]
        }, {

          name: 'E85 flex fuel',

          color: 'rgba(255, 199, 2, 1.0)',

          data: [0.679667114, 1.046771606, 3.469730469, 3.293205566, 3.457868652, 3.629343994, 3.860647949]

        }, {

          name: 'Hybrid electric',

          color: 'rgba(0, 57, 83, 1.0)',

          data: [0.009404406, 0.252737366, 0.593174317, 0.677445801, 0.809419861, 0.926797058, 0.987759278]

        }, {

          name: 'Mild hybrid electric',

          color: 'rgba(163, 51, 64, 1.0)',

          data: [0, 0.010938847, 0.424016022, 1.458677246, 1.534604492, 1.61600354, 1.649755981]

        }, {

          name: 'Gaseous and fuel cell',

          color: 'rgba(189, 115, 42, 1.0)',

          data: [0.011945039, 0.00656614, 0.013769955, 0.016636087, 0.018921216, 0.020774916, 0.021909806]

        }, {

          name: 'Conventional gasoline',

          color: 'rgba(0, 150, 215, 1.0)',

          data: [15.75840039, 8.329217403, 10.93672128, 9.665209473, 10.34863965, 11.01429236, 11.34373621]

        }, {

          name: 'Plug-in hybrid & all-electric',

          color: 'rgba(64, 50, 3, 1.0)',

          data: [0.000165922, 0.0000973873, 0.067745991, 0.140536057, 0.285450714, 0.403807358, 0.505599106]





        }]

      });



      /*

       chart.renderer.image('images/label_interactive.gif', 538, 35, 52, 20)

       .on('click', function() {

       window.open('resources/interactive.htm','name', 'height=370, width=395,toolbar=no,directories=no,status=no,menubar=no, scrollbars=no,resizable=no'); return false;

       })

       .on('mouseover', function() {

       $(this).css({

       cursor:'hand'

       });

       })

       .add();

       */





    });



  </script>

  <script>
    $(function () {
      $('#slider1').bxSlider(sliderOpts);
    });
  </script>
  <title><?=$pageTitle?> - <?=$globalTitle?></title>
  <meta property="og:title" content="<?=$pageTitle?> - <?=$globalTitle?>">
  <meta property="og:url" content="https://www.eia.gov<?=$_SERVER['PHP_SELF']?>">
  <meta name="url" content="https://www.eia.gov<?=$_SERVER['PHP_SELF']?>">
  <?php include('adaptive/global/head/includes/head.inc'); ?>
</head>

<body>

  <?php include('adaptive/global/header/includes/header.inc'); ?>
  <?php include('../includes/sub-navigation.inc'); ?>
  <!-- consumption_recs.inc'); ?>

    <div class="l-row l-two-col-right-narrow">
      <div class="l-col">
   
          <h3>Residential End Use Data</h3>
          <p>About the Programs, Surveys, etc text content goes here with nice photo of something.</p>
          <p><!--<a href="#">Find out more &gt;&gt;</a>-->
  </p>

  <?php /* Carousel */ ?>
  <div class="carousel blue_top">
    <ul id="slider1">
      <li>
        <h1><a href="http://www.eia.gov/todayinenergy/detail.cfm?id=70#"> EIA projects rapid growth in unconventional
            vehicle sales</a></h1>
        <div class="carousel_image">
          <div id="container_AEO2011" style="width: 600px; height:310px;"></div>
        </div>
        <div class="carousel_footer">
          <div>
            <p>Source: U.S. Energy Information Administration, <a
                href="http://www.eia.gov/todayinenergy/detail.cfm?id=70#"><em>Today in Energy</em></a>, February 10,
              2011</p>
          </div>
        </div>
      </li>



      <li>
        <h1><a href="http://www.eia.gov/emeu/recs/recs2005/hc2005_tables/detailed_tables2005.html">Home electronics
            drive up residential electricity use</a></h1>
        <div class="carousel_image"><a
            href="http://www.eia.gov/emeu/recs/recs2005/hc2005_tables/detailed_tables2005.html"><img
              src="../images/Residential consump.png" height="" /></a></div>
        <div class="carousel_footer">
          <div>
            <p>Source: U.S. Energy Information Administration, <em>Residential Energy Consumption Survey</em></p>
          </div>
        </div>
      </li>
      <li>
        <h1><a href="/emeu/cbecs/cbecs2003/detailed_tables_2003/detailed_tables_2003.html">Most energy used in
            commercial buildings goes to space heating </a></h1>
        <div class="carousel_image"><a href="/emeu/cbecs/cbecs2003/detailed_tables_2003/detailed_tables_2003.html"><img
              src="../images/images_CBECS/pie chart fig 2A.png" height="" /></a></div>
        <div class="carousel_footer">
          <div>
            <p>Source: U.S. Energy Information Administration, <em>Commercial Buildings Energy Consumption Survey</em>
            </p>
          </div>
        </div>
      </li>
      <li>
        <h1><a href="http://www.eia.gov/forecasts/aeo/early_consumption.cfm"> Outlook for energy consumption by
            sector</a></h1>
        <div class="carousel_image"><a href="http://www.eia.gov/forecasts/aeo/early_consumption.cfm"><img
              src="../../forecasts/aeo/images/rotator/figure_6es-rotator.jpg" height=""
              alt="Figure of Deliverd enrgy consumption by sector, 1980-2035, quadrillion Btu"></a></div>
        <div class="carousel_footer">
          <div>
            <p>Source: U.S. Energy Information Administration, <em>Annual Energy Outlook 2011, Early Release</em></p>
          </div>
        </div>
      </li>
    </ul>
    <div class="thumbs"></div>
  </div>
  <?php /* Carousel */ ?>




  <hr />
  <?php /* Consumption Example */ ?>
  <h2>Consumption & Expenditures</h2>
  <p>The Consumption & Expenditures tables include summary data on total residential consumption and expenditures in the
    U.S., as well as energy intensity statistics. Detailed tables related to fuels used in the residential sector and
    various end-uses are also available. Each table includes data by housing unit and household characteristics, such as
    Census region and income.</p>
  <span class="condaterange"><strong>Sort date by year:</strong> <a href="#" class="active">2005</a><a
      href="#">2001</a><a href="#">1997</a><a href="#">1993</a><a href="#" class="no-border">Archive</a><a
      class="no-border expandall">+ EXPAND ALL</a></span>
  <table class="contable">
    <thead>
      <tr>
        <th class="active"><strong>Summary Statistics</strong></th>
        <th scope="col"><a href="#" class="pdf">PDF (All Tables)</a></th>
      </tr>
    </thead>
    <tr>
      <td><strong>Total Energy Consumption, Expenditures, and Intensities</strong></td>
      <td></td>
    </tr>
    <tr>
      <td>Housing Unit Characteristics and Energy Usage Indicators (US1:Part 1)</td>
      <td><a href="#" class="pdf">PDF</a></td>
    </tr>
    <tr>
      <td>Household Characteristics (US1:Part 2)</td>
      <td></td>
    </tr>
    <thead>
      <tr>
        <th scope="col"><strong>Summary Statistics</strong></th>
        <th scope="col"><a href="#" class="pdf">PDF (All Tables)</a></th>
      </tr>
    </thead>
    <tr>
      <td><strong>Total Energy Consumption, Expenditures, and Intensities</strong></td>
      <td></td>
    </tr>
    <tr>
      <td>Housing Unit Characteristics and Energy Usage Indicators (US1:Part 1)</td>
      <td><a href="#" class="pdf">PDF</a></td>
    </tr>
    <tr class="summary">
      <td><strong>Household Characteristics (US1:Part 2)</strong></td>
      <td></td>
    </tr>
  </table>



  </div>
  <div class="l-col">

    <div class="secondary">
<ul>
      <ul class="top">
        <p class="no_btm_border">
        <h4>Residential Data</h4>
        <a href="../data.cfm">Highlights</a>
        <hr />
        <a href="../data_tables.cfm">Data Tables</a>
        <hr />
        <a href="../microdata.cfm">Microdata</a>
        <hr />
        <a href="../methodology.cfm">Methodology</a>
        <hr />
        <a href="../surveyforms.cfm">Survey Forms</a>


      </ul>
    </span>

  </div>
  <?php include('adaptive/global/footer/includes/footer.inc'); ?>
</body>

</html>