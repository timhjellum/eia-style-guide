<?php
$pageTitle = "Residential Energy Consumption Survey (RECS) - Energy Information Administration";
$locale 		= 'overview';

$page['year'] = 'home';
$hct = 'y';
$L2Title = "Residential Energy Consumption Survey (RECS)";

?>
<!doctype html>
<?php
$globalTitle 	= 'U.S. Energy Information Administration (EIA)';

$pageTitle          = '';

?>

<head>
	<?php
	if(isset($pageTitle) && $pageTitle) {
		print "<title>" . $pageTitle . "</title>"; print PHP_EOL;
		$pageTitle 		= '';
	}
	?>

	<title>
		<?=$pageTitle?> -
		<?=$globalTitle?>
	</title>
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


	<div class="carousel blue_top">
		<ul id="slider1">
			<?php /*li>
              
              </div>
            </li*/ ?>
			<!--slider 1--->
			<?php /* <li>
              <h1><center><a href="https://doe.webex.com/doe/onstage/g.php?MTID=efd1aea5d96bc70db90dfed4961d397f4">Join us for a webinar</a></center></h1><br />
              <div class="carousel_image"><a href="https://doe.webex.com/doe/onstage/g.php?MTID=efd1aea5d96bc70db90dfed4961d397f4"><img src="./images/webinar2019.png" alt="Join us for a webinar on July 11: A vision for the 2020 RECS"/></a>*/ ?>
			<?php /*   <div class="fig2"></div> */ ?>
			<?php /*  </div>
             
              <div class="carousel_footer">
                <div>
                  <p>Source: U.S. Energy Information Administration</p>
                </div>
              </div>
            </li> */ ?>
			<!--slider 1--->
			<li>
				<h1><a href="/todayinenergy/detail.php?id=36412">EIA’s residential energy survey now includes estimates
						for more than 20 new end uses</a></h1><br />
				<div class="carousel_image"><a href="/todayinenergy/detail.php?id=36412"><img src="/todayinenergy/images/2018.06.05/main.png" alt="Chart. Results from the 2015 Residential Energy Consumption Survey (RECS) introduced estimates of energy consumption for an expanded list of energy end uses" /></a>
					<?php /* for highchart
                <div class="fig2"></div> */ ?>
				</div>

				<div class="carousel_footer">
					<div>
						<p>Source: U.S. Energy Information Administration, <a href="/consumption/residential/data/2015/index.php?view=consumption"><em>2015
									Residential Energy Consumption Survey</em></a></p>
					</div>
				</div>
			</li>

			<!--slider 2--->

			<li>
				<h1><a href="/todayinenergy/detail.php?id=37072">One in three U.S. households faces a challenge in
						meeting energy needs</a></h1><br />
				<div class="carousel_image"><a href="/todayinenergy/detail.php?id=37072"><img src="/todayinenergy/images/2018.09.19/main.png" alt="image of one in three U.S. households faces a challenge in meeting energy needs." /></a>
					<?php /* for highchart
                <div class="fig2"></div> */ ?>
				</div>

				<div class="carousel_footer">

					<p>Source: U.S. Energy Information Administration, <a href="/consumption/residential/data/2015/index.php?view=characteristics"><em>Residential
								Energy Consumption Survey 2015</em></a></p>
				</div>

			</li>

			<li>
				<h1><a href="/todayinenergy/detail.php?id=37032">In 2015, peripheral devices consumed nearly as much
						electricity as televisions</a></h1><br />
				<div class="carousel_image"><a href="/todayinenergy/detail.php?id=37032"><img src="/todayinenergy/images/2018.09.06/main.png" alt="image of 2015 peripheral devices consumed nearly as much electricity as televisions" /></a>
					<?php /* for highchart
                <div class="fig2"></div> */ ?>
				</div>

				<div class="carousel_footer">
					<div>
						<p>Source: U.S. Energy Information Administration, <em><a href="/consumption/residential/data/2015/index.php?view=consumption">2015
									Residential Energy Consumption Survey</a></em></p>
					</div>
				</div>
			</li>
			<!--slider 3--->
			<li>
				<h1><a href="/todayinenergy/detail.php?id=36692">Air conditioning accounts for about 12% of U.S. home
						energy expenditures</a></h1>
				<div class="carousel_image" style="padding-top: 20px;"><a href="/todayinenergy/detail.php?id=36692#"><img src="/todayinenergy/images/2018.07.23/main.png" alt="Data from the 2015 RECS highlight the variability and trends in energy use across the nation’s more than 118 million single-family homes, apartments, and mobile homes." /></a>
					<?php /* for highchart
                <div class="fig2"></div> */ ?>
				</div>

				<div class="carousel_footer">
					<div>
						Source: U.S. Energy Information Administration, <em><a href="/consumption/residential/data/2015/index.php?view=consumption">2015 Residential
								Energy Consumption Survey </a></em><br>
						<strong>Note: </strong>Climate regions based on <a href="https://energy.gov/eere/buildings/building-america-climate-specific-guidance">Department
							of Energy Building America climate regions</a>.
					</div>
				</div>
			</li>
			<!--slider 4--->
			<li>
				<h1><a href="/todayinenergy/detail.php?id=29852">EIA's residential and commercial studies require
						significant data collection and analysis</a></h1>
				<div class="carousel_image" style="padding-top: 20px;"><a href="/todayinenergy/detail.php?id=29852"><img src="/todayinenergy/images/2017.02.07/main.png" alt="EIA’s studies of energy-related characteristics and energy consumption, the Residential Energy Consumption Survey (RECS) require years of preparation, data collection, analysis, modeling, and dissemination for each survey cycle." /></a>
					<?php /* for highchart
                <div class="fig2"></div> */ ?>
				</div>

				<div class="carousel_footer">
					<div>
						<p>Source: U.S. Energy Information Administration</p>
					</div>
				</div>
			</li>
			<!--slider 5--->

			</li>
		</ul>
		<div class="thumbs"></div>
	</div>
	<!-- End Carousel -->
	<?php /* Carousel */ ?>
	<?php /* EIB */ ?>
	<span class="side_left">
		<h4>Methodology</h4>
		<h5><a href="/consumption/residential/reports/2015/comparison/">Comparing the 2015 RECS with Previous RECS and
				Other Studies</a></h5>
		<p>This document describes differences between the 2015 Residential Energy Consumption Survey (RECS) and the
			2009 RECS and previous studies, and compares RECS with estimates derived from external sources. Users should
			be aware of these differences when comparing estimates from one round of RECS to another, and when comparing
			RECS with other studies.</p>
		<hr />
		<h5><a href="/consumption/residential/reports/2015/methodology_c&e/">2015 Consumption and Expenditures Technical
				Documentation Summary</a></h5>
		<p>This document provides the methodological descriptions for the Energy Supplier Survey (ESS), consumption and
			expenditures annualization and imputation, and end-use estimation modeling and calibration procedures.</p>
		<hr />

		<h5><a href="/consumption/residential/reports/2015/methodology/">2015 Household Characteristics Technical
				Documentation Summary</a></h5>
		<p>RECS is a multi-year effort consisting of a Household Survey phase, data collection from household energy
			suppliers, and end-use consumption and expenditures estimation.</p>
		<hr />
		<h5><a href="/consumption/residential/reports/smartmetering/">An Assessment of Interval Data and Their Potential
				Application to Residential Electricity End-Use Modeling</a></h5>
		<p>The Energy Information Administration (EIA) is investigating the potential benefits of incorporating interval
			electricity data into its residential energy end use models.</p>
		<hr />
		<h5><a href="/consumption/NAS.cfm">An Assessment of EIA's Building Consumption Data</a></h5>
		<p>The U.S. Energy Information Administration (EIA) routinely uses feedback from customers and outside experts
			to help improve its programs and products.</p>
		<hr />
	</span>
	<?php /* Features */ ?>
	<span class="main">
		<h4>Features</h4>
		<h3><a href="https://www.youtube.com/watch?v=qR7uBcSgqfI&feature=em-share_video_user"> <strong>Webinar:
				</strong>Highlights from the 2015 RECS: energy consumption, expenditures and end-use modeling</a></h3>

		<p><em>Release Date: July 31, 2018</em></p>
		<p>EIA's Office of Energy Consumption and Efficiency Statistics held a webinar reviewing consumption and
			expenditures data from the 2015 <em>Residential Energy Consumption Survey</em> (RECS) on July 31, 2018.
			Learn more about new consumption and expenditures (C&amp;E) data from the 2015 RECS and improvements to the
			methods used for modeling end-use consumption. The recording of the webinar</a> includes a Q&amp;A session
			with RECS Survey Manager Chip Berry and members of the RECS team. The webinar presentation slides are also
			available.</p>
		<p> <a href="/consumption/residential/webinar_slides/highlights_from_the_2015_RECS.pdf" class="ico pdf">Presentation: RECS webinar slides </a></p>
		<hr />
		<h3><a href="https://www.youtube.com/watch?v=R6XvepTv6YY&feature=youtu.be"><strong>Webinar:</strong> Highlights
				from the 2015 RECS: household characteristics</a></h3>

		<p><em>Release Date: September 19, 2017</em></p>
		<p>Staff from EIA hosted a RECS webinar to present highlights from the 2015 RECS Household Characteristics data,
			provide an overview of key methodological features of the study design, and conduct a tour of the RECS
			website. The webinar presentation slides are also available.</p>
		<p> <a href="/consumption/residential/webinar_slides/2015RECS_hcwebinar.pdf" class="ico pdf">Presentation: RECS
				webinar slides </a></p>
		<hr />
		<h3><a href="/consumption/residential/reports/2015/overview/index.php"><img src="/consumption/residential/reports/2015/overview/images/fig1.png" alt="image of what's New in How We Use Energy at Home" />What's new in how we use energy
				at home</a></h3>

		<p><em>Release Date: May 31, 2018</em></p>
		<p>This report highlights findings from the U.S. Energy Information Administration's 2015 RECS, which collected
			information about energy characteristics from a representative sample of U.S. households.</p>

		<hr />

		<?php /*hr />
        <h3><a href="reports/2009/overview.cfm"><img src="../images/feat_recs_2009_overview.gif"  alt="Line Chart" /></a><a href="reports/2009/overview.cfm">How are we using energy in homes today?</a></h3>
        <p><em>Release Date: March 28, 2011</em></p>
        <p>The 2009 Residential Energy Consumption Survey (RECS) collected home energy characteristics data from over 12,000 U.S. households.  Findings from the survey are highlighted in this report and presented in detailed Household Energy Characteristics tables.</p>
        <hr />
        <h3><a href="reports/2009/16-states.cfm"><img src="reports/images/states_map.png"  alt="U.S. State RECS Region Map" />EIA expands household energy use data series to include 16 states </a></h3>
        <p><em>Release Date: March 28, 2011</em></p>
        <p>EIA is releasing new benchmark estimates for home energy use for the year 2009 that will include data for 16 States, 12 more than in past survey rounds.  EIA has conducted the Residential Energy Consumption Survey (RECS) since 1978 to provide data on home energy characteristics, end uses and expenses for the four Census Regions and nine Divisions. </p */ ?>
		&nbsp;
	</span>
	<?php /*  /Main Column */ ?>
	</div>

	<div class="l-col">
		<?php include('consumption/includes/side_nav_residential.inc'); ?>
	</div>
	<?php /*/ Side Content*/ ?>

	</div>
	<?php include('adaptive/global/footer/includes/footer.inc'); ?>

</body>
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

	for (var i = 0; i < $('.20130103').length; i++) {
		new Highcharts.Chart({
			chart: {
				renderTo: $('.20130103')[i],
				defaultSeriesType: 'bar',
				zoomType: 'xy',
				height: 320
			},
			title: {
				text: 'Percentage of household site energy consumption by end-use, 1993-2009'
			},

			tooltip: {
				/*formatter: function() {
					return '<strong>' + this.series.name + '</strong><br />' + this.x +
						'<br />'+ this.y;
									}*/
				enabled: false
			},
			credits: {
				enabled: false,
				text: 'Sources: U.S. Energy Information Administration, 2009 Residential Energy Consumption Survey',
				//href: 'http://www.eia.doe.gov/emeu/mecs/mecs2002/data02/shelltables.html',
				position: {
					y: -20
				},
				style: {
					width: 550
				}
			},
			legend: {
				layout: 'vertical',
				align: 'right',
				verticalAlign: 'middle'
			},
			xAxis: {
				categories: ['Space Heating', 'Air-conditioning', 'Water heating', 'Refrigerators', 'Other Appliances , Electronics, Lighting, Misc.']
			},
			yAxis: {
				title: {
					text: 'Percent of total end uses'
				}
			},
			captions: {
				enabled: true,
				style: {
					color: 'black',
					fontSize: '11px',
					fontFamily: 'Arial, Verdana, sans-serif',
					fontWeight: 'bold'
				}/*,
				items:[{
					text: "* Not Reported/Not Asked includes end use that was not collected along with those establishments that did not know or report their end use"
					}]*/
			},
			plotOptions: {
				series: {
					dataLabels: {
						enabled: true,
						formatter: function () {
							return (this.y * 10).toFixed(0) + '%';
						},
						style: {
							fontWeight: 'bold',
							color: 'black'
						}
					}
				}
			},
			series: [{
				data: [5.32, 0.46, 1.83, 0.46, 1.94],
				color: 'rgba(0,150,215,.85)',
				name: '1993',
				lineWidth: 10
			}, {
				data: [4.23, 0.64, 1.80, 0.48, 3.04],
				color: 'rgba(163,52,64,.85)',
				name: '2009',
				lineWidth: 10
			}]
		});
	}
</script>

</html>