<?php
$hct="y";
$pageTitle = "";
$locale = 'overview';
$L2Title = "Commercial Buildings Energy Consumption Survey (CBECS)";

$pagetitle = 'Energy Information Administration (EIA)- Commercial Buildings Energy Consumption Survey (CBECS)';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>
<?php echo "$pagetitle"; print PHP_EOL;?>
</title>
<?php include ('global/includes/eia_head_info.inc') ; ?>
<?php  if(!isset($no_titling)) include "global/includes/titling.inc"; ?></head>
<body>
<div id="outerX">
<?php /* Outer Wrapper */ ?>
<?php include ('global/includes/eia_header.inc') ; ?>

<?php include ('../../includes/subnav_consumption_recs.inc') ; ?>

<?php /* Page/Body Content */ ?>
<div class="pagecontent mr_temp1"> 
  <?php /* Main Column */ ?>
  
  <div class="main_col">

        <div>
            <?php include ('includes/blog2.inc') ; ?>
        </div>

  <?php /* /Main Column */ ?> 
  <?php /* Side Column */ ?>
  <div class="side_col right">
    <?php include ('consumption/includes/side_nav_residential_status.inc') ; ?>
  </div>
  <?php /*/ Side Content */ ?> 
</div>
<?php /*/ Page/Body Content */ ?>
<?php include ('global/includes/eia_footer.inc') ; ?>
<?php /*/ Outer Wrapper */ ?>

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