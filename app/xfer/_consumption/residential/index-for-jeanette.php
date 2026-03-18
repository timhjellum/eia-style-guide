<?php
$pageTitle 		= '';
$locale 		= 'overview';
$L2Title = "Residential Energy Consumption Survey (RECS)";

$page['year'] = 'home';
$hct = 'y';
?>
<!doctype html>
<?php
$globalTitle 	= 'U.S. Energy Information Administration (EIA)';

$pageTitle          = '';

?>

<head>

	<script src="../../global/test/cws/jquerycycle/jquery.cycle.all.js" type="text/javascript"></script>
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
 
<?php /* Carousel */ ?> 
        <!-- Start Carousel -->
	<?php /*div class= "carousel blue_top">
          <ul id="slider1">
            <li>
              <h1><a href="/consumption/residential/reports/2009/consumption-down.cfm">Energy consumption per home has steadily declined over the last three decades</a></h1>
              <div class="carousel_image">
                <div class="fig1"></div>
              </div>
              <div class="carousel_footer">
                <div>
                  <p>Source: <a href="/consumption/residential/data/2009/#consumption-expenditures">Residential Energy Consumption Survey</a>. Includes occupied primary housing units only.</p>
                </div>
              </div>
            </li>
            <li>
              <h1><a href="/consumption/residential/reports/2009/methodology-square-footage.cfm">Where does RECS square footage data come from?</a></h1>
              <div class="carousel_image"> <a href="/consumption/residential/reports/2009/methodology-square-footage.cfm"><img src="data/2009/img/2009-methodology-house_rotator.jpg" height="" alt="Diagram of house showing that the basement and floors of a typical home are measured always, and if garage or attic are heated or cooled, their square footage is measured as well." /></a></div>
              <div class="carousel_footer">
                <div>
                  <p>Source: <a href="/consumption/residential/data/2009/#methodology">Residential Energy Consumption Survey Methodology</a></p>
                </div>
              </div>
            </li>
            <li>
              <h1><a href="/consumption/residential/reports/2009/square-footage.cfm">The impact of increasing home size on energy demand</a></h1>
              <div class="carousel_image">
                <div class="fig2"></div>
              </div>
              <div class="carousel_footer">
                <div>
                  <p>Source: <a href="/consumption/residential/data/2009/#sf">Table HC10.8  Average Square Footage of U.S. Homes, By Housing Characteristics, 2009</a></p>
                </div>
              </div>
            </li>
            <li>
              <h1><a href="/consumption/residential/reports/2009/electronics.cfm"> Average U.S. household using more consumer electronics</a></h1>
              <div class="carousel_image">
                <div class="fig3"></div>
              </div>
              <div class="carousel_footer">
                <div>
                  <p><a href="/consumption/residential/data/2009/">Source: U.S. Energy Information Administration, 2009 Residential Energy Consumption Survey</a></p>
                </div>
              </div>
            </li>
          </ul>
          <div class="thumbs"></div>
        </div*/ ?>

	<div id="slideshow">
		<div class="fig3"></div>

		<div class="fig1"></div>
		<div class="fig2"></div>
	</div>
	<div class="nav">
		<p><a href="#" id="prev">Prev</a> <a href="#" id="next">Next</a></p>
	</div>
	<!-- End Carousel -->

	
	<?php /* Carousel */ ?>
	<?php /* EIB */ ?>
	<H1>Content</H1>
	<p>Something...</p>
	</div>

	<div class="l-col">
		<?php include('consumption/includes/side_nav_residential.inc'); ?>
	</div>


	</div>
	<?php include('adaptive/global/footer/includes/footer.inc'); ?>

</body>
<script type="text/javascript">
	$(document).ready(function () {
		$('#slideshow').cycle({
			fx: 'fade',
			speed: 300,
			timeout: 1000,
			next: '#slideshow',
			pause: 1,
			next: '#next',
			prev: '#prev'
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function () {
		$('#slider1').bxSlider(sliderOpts);

		var colors = Highcharts.getOptions().colors,
			tooltipFormatter = {
				0: function (point) {
					return '<strong>Average consumption</strong><br>' + Highcharts.numberFormat(point.y, 1) + ' million Btu per housing unit'
				},
				1: function (point) {
					return '<strong>Number of housing units</strong><br>' + Highcharts.numberFormat(point.y, 1) + ' million housing units'
				}
			}
		for (var i = 0; i < $('.fig1').length; i++) {
			new Highcharts.Chart({
				chart: {
					zoomType: 'xy',
					renderTo: $('.fig1')[i],
					defaultSeriesType: 'line',
					height: 360,
					marginLeft: 50
				},
				exporting: {
					csvOptions: {
						overrideURL: '/consumption/residential/reports/2009/xls/2009 RECS CE DER 1 Graphs v3.xlsx'
					}
				},
				credits: {
					enabled: false,
					text: 'Source: Residential Energy Consumption Survey. Includes occupied primary housing units only.',
					href: '/consumption/residential/data/2009/'
				},
				title: {
					text: 'Average energy consumption per home and number of housing units, 1980-2009'
				},
				tooltip: {
					formatter: function () {
						return tooltipFormatter[this.series.index](this);
					},
					crosshairs: true
				},
				xAxis: {
					categories: ['1980', '', '1982', '', '1984', '', '', '1987', '', '', '1990', '', '', '1993', '', '', '', '1997', '', '', '', '2001', '', '', '', '2005', '', '', '', '2009'],
					tickColor: '#ffffff'
				},
				yAxis: [{
					title: {
						text: 'million Btu per housing unit',
						style: {
							color: colors[0]
						}
					},
					max: 115,
					min: 0,
					//tickInterval: 5,
				}, {
					title: {
						text: 'million housing units',
						style: {
							color: colors[1]
						}
					},
					max: 115,
					min: 0,
					//tickInterval: 5,
					opposite: true
				}],
				series: [{
					data: [114, null, 103, null, 104.7, null, null, 100.8, null, null, 98, null, null, 103.6, null, null, null, 101, null, null, null, 92.2, null, null, null, 94.9, null, null, null, 89.6],
					name: 'Average Consumption',
					connectNulls: true,
					marker: {
						enabled: true,
						radius: 2
					}
				}, {
					data: [81.6, null, 83.8, null, 86.3, null, null, 90.5, null, null, 94, null, null, 96.6, null, null, null, 101.5, null, null, null, 107, null, null, null, 111.1, null, null, null, 113.6],
					name: 'Number Housing Units',
					connectNulls: true,
					marker: {
						enabled: true,
						radius: 3
					},
					yAxis: 1
				}]
			});
		}
		for (var i = 0; i < $('.fig2').length; i++) {
			new Highcharts.Chart({
				chart: {
					zoomType: 'xy',
					renderTo: $('.fig2')[i],
					defaultSeriesType: 'column',
					//width: 640,
					height: 350,
					//marginBottom: 50
				},
				credits: {
					enabled: false,
					text: 'Source: Table HC10.8 Average Square Footage of U.S. Homes, By Housing Characteristics, 2009',
					href: '/consumption/residential/data/2009/#sf'
				},
				title: {
					text: 'Figure 1. Newer homes trend larger in all regions of the country'
				},
				tooltip: {
					formatter: function () {
						return '<strong>' + this.x + ' homes built in ' + this.series.name + '</strong><br/>' + this.y + ' average square footage';
					}
				},
				xAxis: {
					categories: ['US', 'Northeast', 'Midwest', 'South', 'West'],
					plotLines: [
						$.extend(true, {
							value: 0.5
						}, Highcharts.eia_projections_line)
					],
				},
				yAxis: [{
					max: 3600,
					tickInterval: 600,
					title: {
						text: 'average square footage'
					}
				}],
				series: [{
					name: '1970s',
					data: [1685, 1922, 1887, 1604, 1493]
				}, {
					name: '1980s',
					data: [1770, 2125, 2010, 1619, 1677]
				}, {
					name: '1990s',
					data: [2200, 2507, 2524, 2073, 2082]
				}, {
					name: '2000s',
					data: [2465, 3006, 3033, 2302, 2146]
				}]
			});
		}

	});
</script>
<script type="text/javascript">
	$(document).ready(function () {
		$('#slider1').bxSlider(sliderOpts);


		for (var i = 0; i < $('.fig3').length; i++) {
			new Highcharts.Chart({
				chart: {
					renderTo: $('.fig3')[i],

					defaultSeriesType: 'column',
					//width: 640,
					height: 350,
					//marginBottom: 50
				},
				credits: {
					enabled: false,
					text: 'Source: U.S. Energy Information Administration, 2009 Residential Energy Consumption Survey',
					href: 'http://www.eia.gov/consumption/residential/'
				},
				title: {
					text: 'Number of electronic devices by household, 2009',
					align: 'left',
					x: 1,
					y: 20
				},
				xAxis: [{
					categories: ['0', '1', '2', '3', '4', '5+', ' ', '0', '1', '2', '3', '4', '5+', ' ', '0', '1-3', '4-8', '9+'],
				}, { // slave axis
					linkedTo: 0,
					lineWidth: 0,
					tickLength: 0,
					offset: 25,
					categories: ['Televisions', '', '', '', '', '', ' ', 'Computers', '', '', '', '', '', ' ', 'Rechargeable electronic devices', '', '', ''],
					labels: {
						align: 'left',
						x: 30
					}
				}],
				yAxis: {
					min: 0,
					max: 60,
					tickInterval: 10,
					title: {
						text: 'million households'
					}
				},
				tooltip: {
					formatter: function () {
						return '<strong>' + this.point.name + '</strong> ' + '</br> in ' + Highcharts.numberFormat(this.y, 1) + ' million households';
					}
				},
				plotOptions: {
					column: {
						pointWidth: 30,
					},
				},
				series: [{
					showInLegend: false,
					color: 'rgba(0, 150, 215, 1.0)',
					data: [{
						name: '0 Televisions',
						y: 1.5
					}, {
						y: 24.2,
						name: '1 Television'
					}, {
						y: 37.5,
						name: '2 Televisions'
					}, {
						y: 26.6,
						name: '3 Televisions'
					}, {
						y: 14.2,
						name: '4 Televisions'
					}, {
						y: 9.7,
						name: '5+ Televisions'
					}, {
						y: null
					}, {
						name: '0 Computers',
						y: 27.4
					}, {
						y: 46.9,
						name: '1 Computer'
					}, {
						y: 24.3,
						name: '2 Computers'
					}, {
						y: 9.5,
						name: '3 Computers'
					}, {
						y: 3.6,
						name: '4 Computers'
					}, {
						y: 2.0,
						name: '5+ Computers'
					}, {
						y: null
					}, {
						name: '0 Rechargeable electronic<br/>devices',
						y: 11.4
					}, {
						y: 57.9,
						name: '1-3 Rechargeable electronic<br/>devices'
					}, {
						y: 36.4,
						name: '4-8 Rechargeable electronic<br/>devices'
					}, {
						y: 7.9,
						name: '9+ Rechargeable electronic<br/> devices'
					}]
				}]
			});
		}
	});
</script>

</html>