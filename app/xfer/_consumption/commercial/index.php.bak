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

<?php include ('../includes/subnav_consumption_cbecs.inc') ; ?>

<?php /* Page/Body Content */ ?>
<div class="pagecontent mr_temp1"> 
  <?php /* Main Column */ ?>
  
  <div class="main_col">
	  
	  <h1>2018 Commercial Buildings Energy Consumption Survey final results</h1>
	<br>
    <img src="images/townscape.png" style="margin-right:10px; padding-bottom: 15px" alt="&quot;&quot;" class="left" width="300"/>	  
    <p>Based on the 2018 <em>Commercial Buildings Energy Consumption Survey</em> (CBECS), the estimated 5.9 million U.S. commercial buildings consumed 6.8 quadrillion British thermal units of energy and spent $141 billion on energy in 2018. Electricity and natural gas were the main energy sources. Space heating accounted for close to one-third of end-use consumption in 2018.<br><strong><a href="/consumption/commercial/data/2018/">Data Tables</a></strong> 
		<br><strong>Consumption and expenditures report &nbsp;</strong> <a href="/consumption/commercial/data/2018/pdf/CBECS 2018 CE Release 2 Flipbook.pdf" class="ico_pdf"><strong>PDF</strong></a>&nbsp;&nbsp;<a href="/consumption/commercial/data/2018/ppt/CBECS 2018 CE Release 2 Flipbook.pptx" class="ico_ppt"><strong>PPT</strong></a>
		<br><strong>Buildings characteristics report   &nbsp;</strong> <a href="/consumption/commercial/data/2018/pdf/CBECS_2018_Building_Characteristics_Flipbook.pdf" class="ico_pdf"><strong>PDF</strong></a>&nbsp;&nbsp;<a href="/consumption/commercial/data/2018/ppt/CBECS_2018_Building_Characteristics_Flipbook.pptx" class="ico_ppt"><strong>PPT</strong></a>
		
		 <?php /*<br><strong>Report&nbsp;</strong> <a href="/consumption/commercial/data/2018/pdf/CBECS_2018_Building_Characteristics_Flipbook.pdf" class="ico_pdf"><strong>PDF</strong></a>&nbsp;&nbsp;<a href="/consumption/commercial/data/2018/ppt/CBECS_2018_Building_Characteristics_Flipbook.pptx" class="ico_ppt"><strong>PPT</strong></a>*/ ?>
	  </p>

            <?php include ('includes/blog.inc') ; ?>
		
  </div>
        
  <?php /*/div*/ ?>
  <?php /* /Main Column */ ?> 
  <?php /* Side Column */ ?>
  <div class="side_col right">
    <?php include ('consumption/includes/side_nav_commercial.inc') ; ?>
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