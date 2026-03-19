<!doctype html>
<?php
$globalTitle	= 'U.S. Energy Information Administration (EIA)';
$pageTitle		= 'Commercial Buildings Energy Consumption Survey (CBECS)';
$locale = 'overview';
//$page['year'] = '2022';
//$url['view']	= isset($_REQUEST['view']) ? $_REQUEST['view'] : '';
$L2Title = "Commercial Buildings Energy Consumption Survey (CBECS)";
$hct			= "y";
?>
<html>

<head>
	<title><?=$pageTitle?> - <?=$globalTitle?></title>
	<meta property="og:title" content="<?=$pageTitle?> - <?=$globalTitle?>">
	<meta property="og:url" content="https://www.eia.gov<?=$_SERVER['SCRIPT_NAME']?>">
	<meta name="url" content="https://www.eia.gov<?=$_SERVER['SCRIPT_NAME']?>">
	<?php include('global/head/includes/head.inc'); ?>
	<link href="/global/styles/global.mecs.min.css" type="text/css" media="screen, projection" rel="stylesheet">
	<style>
	.next:after {
		display: none !important;
	}
	</style>
</head>
<body>
	<?php
include('global/header/includes/header.inc');
include('consumption/commercial/includes/sub-navigation.inc');
include('consumption/includes/report-header.inc');
	?>
	<div class="l-row l-two-col-right-narrow">
		<div class="l-col article">
		<?php
		include('consumption/manufacturing/includes/carousel.inc');
		include('consumption/commercial/includes/index-content.inc');
		include('includes/blog.inc');
		?>	  		
		</div>
		<div class="l-col">
    	<?php include('consumption/commercial/includes/side-nav-commercial.inc'); ?>
  </div>
  </div>
	<?php include('global/footer/includes/footer.inc'); ?>
	<script src="/global/scripts/global.mecs.min.js"></script>
</body>
<script>
jQuery(document).ready(function(){
  $('#slider1').bxSlider(sliderOpts);

	$('.toggle')
				.css({'cursor':'pointer', 'color':'#189bd7',})
        .attr('title','Click to expand/collapse')
				.click(function () {
					if ($(this).next('.more').is(':hidden')) {
						$(this).next('.more').slideDown('fast');
						//$(this).children('div').append('-');
						} 
					else {
						$(this).next('.more').slideUp('fast');
						//$(this).children('div').append('+');
						}
					});
	$('.comments').css({'background-color':'#e8ecf2', 'padding':'10px'})
				});

for(var i = 0; i <$('.fig1').length; i++)
	{
    new Highcharts.Chart({
			chart: {
				renderTo: $('.fig1')[i],
				defaultSeriesType: 'column',
				zoomType:'xy',
				height:360,
				marginLeft:50
				},
			title: {
        text: 'Fuels and Energy End Uses in Large Hospital Buildings, 2007'
        },
			credits: {
				text: 'Source: U.S. Energy Information Administration, Commercial Building Energy Consumption Survey, 2007',
				//href: 'http://www.eia.doe.gov/emeu/mecs/mecs2002/data02/shelltables.html',
				position: {
					y: -5
					},
				style:{
					width:550,
					}
				},
			legend: {
				layout: 'vertical',
				align: 'right',
				verticalAlign: 'middle'
				},
			xAxis: {
				categories: ['All space heating*', 'Main space heating', 'Water heating*', 'Cooking*', 'Cooling*', 'Electricity generation']
				},
			yAxis: {
				title: {
					text: 'number of buildings'
					}
				},
			/*captions: {
				enabled: true,
				style: {
					color: 'black',
					fontSize: '11px',
					fontFamily: 'Arial, Verdana, sans-serif',
					//fontWeight:'bold'
					},
				items:[{
					text: "<b>Energy End Uses:</b> * More than one may apply"
					}]
        },*/
			/*plotOptions: {
        column: {
					groupPadding: 0.25,
					pointPadding: 0
					},
				series: {
					dataLabels: {
						enabled: true,
						style: {
              fontWeight: 'bold',
							color:'black'
							}
						}
					}
				},*/
			series: [{
				data: [2406, 2240, 2253, 2473, 275, null],
				name: 'Natural gas'
				},{
				data: [1286, null, 283, 1918, 2810, null],
				name: 'Electricity'
				},{
				data: [768, null, 436, null, null, 2850],
				name: 'Fuel Oil'
				},{
				data: [685, 610, 534, null, null, null],
				name: 'District heat'
				},{
				data: [null, null, null, null, 612, null],
				name: 'District chilled water'
				}]
			});
		}
</script>
</html>