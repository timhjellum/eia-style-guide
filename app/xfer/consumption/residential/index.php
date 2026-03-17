<?php
$pageTitle = "Residential Energy Consumption Survey (RECS) - Energy Information Administration";
$locale = 'overview';

$page['year'] = 'home';
$hct = 'y';
$L2Title = "Residential Energy Consumption Survey (RECS)";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<?php
	if(isset($pageTitle) && $pageTitle) {
		print "<title>" . $pageTitle . "</title>"; print PHP_EOL;
		$pageTitle = '';
	}
	?>
<?php include ('global/includes/eia_head_info.inc') ; ?>
<?php  if(!isset($no_titling)) include "global/includes/titling.inc"; ?></head>
<body>
<div id="outerX">
<?php /* Outer Wrapper */ ?>
<?php include ('global/includes/eia_header.inc') ; ?>
    <?php include ('../includes/subnav_consumption_recs.inc') ; ?>
    <?php /* Page/Body Content */ ?>
    <div class="pagecontent mr_temp1">
      <div class="main_col"> 
        <?php /* Main Column */ ?> 
        <?php /* Carousel */ ?> 
        <!-- Start Carousel -->
		  
		  
        <div class= "carousel blue_top">
          <ul id="slider1">
			   <!--Slider 1-->
			  <li>
              <h1><a href="/consumption/residential/data/2024/index.php?view=housing">Initial housing characteristics tables from the 2024 RECS data are now available!</a></h1><br />
              <div class="carousel_image"><a href="/consumption/residential/data/2024/index.php?view=housing" width="525"><img src="images/Picture_2024.png" width="595" style="background-color: #e1f5ff; padding: 12px 82px; margin-bottom: 0px; max-width: 450px;" alt="Total site electricity consumption in U.S. homes with select end uses, 2020" /></a>
				                	<div class="carousel_footer">
					<p style="font-size: 9px">Access tables related to structural and geographic characteristics of homes, types of electronics and appliances used within them, lighting characteristics, demographic characteristics, square footage, and household energy insecurity here. Data for all 50 states and the District of Columbia are <a href="/consumption/residential/data/2024/index.php?view=housing">here</a>. </p>
				</div>
              </div>
            </li>
			  
			  <!--Slider 1-->
			  <li>
              <h1><a href="/consumption/residential/data/2020/index.php?view=consumption#estimates">Check out our new monthly consumption and expenditures tables from the 2020 RECS</a></h1><br />
              <div class="carousel_image"><a href="/consumption/residential/data/2020/index.php?view=consumption#estimates" width="525"><img src="images/electricity-consumption.png" width="595" style="background-color: #e1f5ff; padding: 12px 82px; margin-bottom: 0px; max-width: 450px;" alt="Total site electricity consumption in U.S. homes with select end uses, 2020" /></a>
				                	<div class="carousel_footer">
					<p><strong>Data source: </strong>U.S. Energy Information Administration, <a href="/consumption/residential/data/2020/index.php?view=consumption#estimates"><em>Residential Energy Consumption Survey</em></a> (RECS)</p>
				</div>
              </div>
            </li>
			  
			  <!--Slider 2-->
			  <!--<li>
              <h1><a href="/consumption/residential/status/">The 2024 RECS ESS data collection has started!</a></h1><br />
              <div class="carousel_image"><a href="/consumption/residential/status/" width="525"><img src="images/RECS-ESS.png" width="595" style="background-color: #e1f5ff; padding: 12px 82px; margin-bottom: 0px; max-width: 450px;" alt="RECS ESS logo" /></a><br>
				                	<div class="carousel_footer">
					<p style="font-size: 14px">The data collection for the <em>2024 Residential Energy Consumption Survey (RECS) Energy Supplier Survey (ESS)</em> started in July 2025. RTI International is collecting survey responses on behalf of the U.S. Energy Information Administration, the statistical and analytical agency within the U.S. Department of Energy. If you need additional information about the survey, please click <a href="/consumption/residential/background-technical.php">here</a>. </p>
</div>
              </div>
            </li>-->
			  	    <!--Slider 3-->
			  <li>
              <h1><a href="https://experience.arcgis.com/experience/cbf6875974554a74823232f84f563253">Check out our new interactive dashboard displaying data from the 2020 RECS</a></h1><br />
              <div class="carousel_image"><a href="https://experience.arcgis.com/experience/cbf6875974554a74823232f84f563253" width="525"><img src="images/recs-dashboard-carousel.png" width="595" style="background-color: #e1f5ff; padding: 12px 82px; margin-bottom: 0px; max-width: 450px;" alt="screenshot of the RECS dashboard" /></a>
				                	<div class="carousel_footer">
					<p><strong>Data source: </strong>U.S. Energy Information Administration, <a href="/consumption/residential/"><em>Residential Energy Consumption Survey</em></a> (RECS)</p>
				</div>
              </div>
            </li>
			  	    <!--Slider 4-->
			<li>
              <h1><a href="/todayinenergy/detail.php?id=57321">Midwest homes, notably older homes, consume more natural gas than most other U.S. homes</a></h1><br />
              <div class="carousel_image"><a href="/todayinenergy/detail.php?id=57321" width="525"><img src="/todayinenergy/images/2023.08.07/main.svg" width="595" alt="Midwest homes, notably older homes, consume more natural gas than most other U.S. homes" /></a>
				                	<div class="carousel_footer">
					<p><strong>Data source: </strong>U.S. Energy Information Administration, <a href="/consumption/residential/"><em>Residential Energy Consumption Survey</em></a> (RECS)</p>
				</div>
              </div>
            </li>
				<?php /* for highchart
                <div class="fig2"></div> 
              </div>
          */ ?>	
			    <!--Slider 5-->
			<li>
              <h1><a href="/todayinenergy/detail.php?id=56640">U.S. energy insecure households were billed more for energy than other households</a></h1><br />
              <div class="carousel_image"><a href="/todayinenergy/detail.php?id=56640" width="525"><img src="/todayinenergy/images/2023.05.30/main.svg" width="595" alt="graph of average U.S. household energy expenditures per square foot (2020)" /></a>
				                	<div class="carousel_footer">
					<p><strong>Data source: </strong>U.S. Energy Information Administration, <a href="/consumption/residential/"><em>Residential Energy Consumption Survey</em></a> (RECS)</p>
				</div>
              </div>
            </li>
				<?php /* for highchart
                <div class="fig2"></div> 
              </div>
          */ ?>		
        
			  
			  <!--Slider 6-->
			<li>
              <h1><a href="/todayinenergy/detail.php?id=56380">U.S. households in warmer states consume less site energy than households in colder states</a></h1><br />
              <div class="carousel_image"><a href="/todayinenergy/detail.php?id=56380" width="525"><img src="/todayinenergy/images/2023.05.04/main.svg" width="595" alt="graph of site energy consumption per household versus average state temperature (2020)" /></a>
				                	<div class="carousel_footer">
					<p><strong>Data source: </strong>U.S. Energy Information Administration, <a href="/consumption/residential/"><em>Residential Energy Consumption Survey</em></a> (RECS)</p>
				</div>
              </div>
            </li>
				<?php /* for highchart
                <div class="fig2"></div> 
              </div>
          */ ?>		
        
			    	<!--Slider 7-->
			<li>
              <h1><a href="/todayinenergy/detail.php?id=55760">Nearly 5% of U.S. households did not use space heating in 2020, especially in warm regions</a></h1><br />
              <div class="carousel_image"><a href="/todayinenergy/detail.php?id=55760" width="525"><img src="/todayinenergy/images/2023.03.09/main.svg" width="595" alt="image of U.S. households space heating survey respondents" /></a>
				                	<div class="carousel_footer">
					<p><strong>Data source: </strong>U.S. Energy Information Administration, <a href="/consumption/residential/"><em>Residential Energy Consumption Survey</em></a> (RECS)</p>
				</div>
              </div>
            </li>
				<?php /* for highchart
                <div class="fig2"></div> 
              </div>
          */ ?>		
			  
			  
			  <!--Slider 7-->
			<!--<li>
              <h1><a href="/todayinenergy/detail.php?id=53439">In 2020, most U.S. households prepared at least one hot meal a day at home</a></h1><br />
              <div class="carousel_image"><a href="/todayinenergy/detail.php?id=53439" width="525"><img src="/todayinenergy/images/2022.08.15/main.svg" width="595" alt="image of In 2020, most U.S. households prepared at least one hot meal a day at home" /></a>
				                	<div class="carousel_footer">
					<p><strong>Data source: </strong>U.S. Energy Information Administration, <a href="/consumption/residential/data/2020/index.php?view=characteristics"><em>2020 Residential Energy Consumption Survey</em> (RECS)</a></p>
				</div>
              </div>
            </li> -->
				<?php /* for highchart
                <div class="fig2"></div> 
              </div>
          */ ?>
			  			  			
			  			<!--Slider 7-->
			<!-- <li>
              <h1><a href="/todayinenergy/detail.php?id=52558">Nearly 90% of U.S. households used air conditioning in 2020</a></h1><br />
              <div class="carousel_image"><a href="/todayinenergy/detail.php?id=52558" width="525"><img src="/todayinenergy/images/2022.05.31/main.svg" width="595" alt="image of U.S. residential television-related equipment." /></a>
				                	<div class="carousel_footer">
					<p><strong>Source: </strong>U.S. Energy Information Administration, <a href="/consumption/residential/data/2020/index.php?view=characteristics"><em>2020 Residential Energy Consumption Survey</em> (RECS)</a></p>
				</div>
              </div>
            </li> -->
				<?php /* for highchart
                <div class="fig2"></div> 
              </div>
          */ ?>
			  			
          </ul>
          <div class="thumbs"></div>
        </div>
        <!-- End Carousel --> 
         <?php /* Carousel */ ?>
      	  

         <?php /* Features */ ?>
        <span class="left">
        <h4>Features</h4>
			
			<h3><a href="/consumption/residential/data/2024/index.php?view=characteristics"><strong>2024 <em>Residential Energy Consumption Survey</em> (RECS) Housing Characteristics Data</strong></a></h3>
			
		<p><i>Release Date: March xx, 2026</i></p>
			<p>The 2024 RECS provides household characteristics and energy usage indicators for the estimated 132.5 million homes in the United States that were occupied as a primary residence in 2024. The first release of 2024 RECS data includes preliminary estimates on the structural and geographic characteristics of homes, types of electronics and appliances used within them, lighting characteristics, demographic characteristics, square footage, and household energy insecurity. These data will also include key estimates for all 50 states and the District of Columbia.</p>
			<hr>
			
			<h3><a href="/consumption/residential/data/2020/index.php?view=consumption#estimates"><strong>Monthly Estimates Released for the 2020 <em>Residential Energy Consumption Survey</em><em> </em>(RECS)</strong></a></h3>
			
			
		<p><i>Release Date: May 27, 2025</i></p>
			<p>We released <a href="/consumption/residential/data/2020/index.php?view=consumption#estimates">supplemental tables</a> of monthly estimates for consumption and expenditures (C&amp;E) of site electricity and natural gas from the <a href="/consumption/residential/"><em>2020 Residential Energy Consumption Survey (RECS)</em></a>.&nbsp; This release also includes monthly estimates for three major end uses of electricity and natural gas: space heating, space cooling, and water heating. This is the first time in RECS history we have published monthly statistics.</p>
			<p>In these 18 tables, we show  the total values and average values of C&amp;E across various geographic units, including the nation, census regions, census divisions, and states. We also updated our <a href="/consumption/residential/data/2020/pdf/2020%20RECS%20CE%20Methodology%20-%20Monthly%20Appendix%20-%20Final.pdf" class="ico_pdf">C&amp;E methodology documentation</a> in a new Appendix C to explain how we derived  these estimates.</p>
			<hr />
			
			
		<h3><a href="https://www.youtube.com/watch?v=Er4VRJRAWrM"><strong>Webinar</strong>: 2020 <em>Residential Energy Consumption Survey</em> Webinar - Estimating heating and other end uses</a></h3>
			
			<p><i>Release Date: September 5, 2023</i></p>
			<p>EIA hosted a webinar on August 29, 2023 to discuss 2020 Residential Energy Consumption Survey (RECS) household consumption and expenditure results. The webinar featured data highlights, a demonstration of the new RECS state-data dashboard, a summary of end-use estimation methods, and an audience Q&amp;A. The webinar presentation slides are also available.</p>
				<p><a href="webinar_slides/2020 RECS C&amp;E Webinar slides.pdf" class="ico_pdf">Presentation: 2020 RECS Webinar August 29</a></p>
			<hr />
			
			<h3><a href="https://experience.arcgis.com/experience/cbf6875974554a74823232f84f563253"><strong>2020 RECS Data Visualizations</strong></a>: Dashboard displaying state-level estimates for selected data is now available</h3>
			
			<p><i>Release Date: August 15, 2023</i></p>
			<p>We recently released a new interactive <a href="https://experience.arcgis.com/experience/cbf6875974554a74823232f84f563253">dashboard</a> that includes state-level estimates for selected residential site energy consumption, expenditures, and household characteristics information from the 2020 RECS. These visualizations include U.S. maps, charts, and data for 20 different estimates, providing both a national view of energy usage and state-specific data. Please <a href="mailto:eiainfoconsumption&amp;efficiency@eia.gov">contact us</a> with any feedback. </p>
			<hr />
			
		<h3><a href="/consumption/residential/data/2020/index.php?view=consumption"><strong>2020 RECS Consumption and Expenditures Data</strong></a>: 2020 RECS end-use consumption and expenditures tables are now available</h3>
			
			<p><i>Release Date: June 15, 2023</i></p>
			<p>The final set of <a href="/consumption/residential/data/2020/index.php?view=consumption">consumption and expenditures tables</a> are now available. These tables include estimates of energy consumption and expenditures by end use (for example, air conditioning and water heating). This final data release also includes a final version of the <a href="/consumption/residential/data/2020/index.php?view=microdata">public-use microdata</a> file containing consumption, expenditures, and end-use data as well as additional <a href="/consumption/residential/data/2020/index.php?view=methodology">technical documentation</a>.</p>
			<hr />
			
			<h3><a href="/consumption/residential/data/2020/index.php?view=consumption"><strong>2020 RECS Consumption and Expenditures Data</strong></a>: 2020 RECS consumption and expenditures tables are now available</h3>
			
			<p><i>Release Date: March 29, 2023</i></p>
			<p>Our first set of <a href="/consumption/residential/data/2020/index.php?view=consumption">consumption and expenditures tables</a> are now available. This release features, for the first time ever, household consumption and expenditures estimates for all 50 states and the District of Columbia. The 18 tables in this release include total consumption, total expenditures, and energy-intensity estimates for electricity, natural gas, propane, and fuel oil.</p>
			<p>Additional tables with estimates of energy consumption and expenditures by end use (for example, air conditioning and water heating); a final public-use microdata file containing consumption, expenditures, and end-use data; and additional documentation will be released in June 2023.</p>
			<hr />
			
			
			<h3><a href="/consumption/residential/data/2020/index.php?view=characteristics"><strong>2020 RECS Final Housing Characteristics and Square Footage data are now available</strong></a></h3>
			
			<p><i>Release Date: March 8, 2023</i></p>
			<p>The final public-use housing characteristics microdata file and tables are available. This release includes data on square footage. The microdata file and tables contain results from nearly 18,500 households, the largest responding sample in program history. You can find the revised, final housing characteristics tables and square footage tables on our <a href="/consumption/residential/data/2020/">housing characteristics page</a>. A new state-level square footage table  is on our <a href="/consumption/residential/data/2020/index.php?view=state">state data page</a>. You can find the final housing characteristics data file,  codebook, and information on how to work with RECS microdata on the <a href="/consumption/residential/data/2020/index.php?view=microdata">RECS microdata page</a>. You can find more information on the survey processes and methodology we used for the 2020 RECS Household Survey, in to the detailed housing characteristics and square footage technical documentation on our <a href="/consumption/residential/data/2020/index.php?view=methodology">methodology  page</a>. Appendix A of the Housing Characteristics documentation contains details on differences  between the preliminary and final estimates.</p>
			<hr />
			
			
			<h3><a href="/consumption/residential/pdf/Multifamily_Building_Study_Pilot.pdf"> <strong>Multifamily Building Study (MBS) Pilot:</strong> Report on methods, findings, and lessons learned</a></h3>
			
			<p><i>Release Date: December 7, 2022</i></p>
			<p>From July through October 2021, we fielded a multifamily building study pilot to assess the feasibility of collecting data on the characteristics of multiunit residential buildings, such as apartments, condominiums, and co-ops. The target population was multifamily and multifamily mixed-use buildings that were more than 50% residential by floorspace or square footage and that contained five or more residential units. This report outlines the pilot objectives, design, results, and analysis and shares lessons learned for a potential future study.</p>
			
			<p><a href="/consumption/residential/pdf/Multifamily_Building_Study_Pilot.pdf" class="ico_pdf">Multifamily Building Study (MBS) Pilot: Report on methods, findings, and lessons learned</a></p>
			<hr />
			
			<h3><a href="https://www.youtube.com/watch?v=VSpVTcXly5c"> <strong>Webinar: </strong>2020 Residential Energy Consumption Survey (RECS) Housing Characteristics Webinar</a></h3>
			
			<p><i>Release Date: September 21, 2022</i></p>
			<p>EIA's Office of Energy Demand and Integrated Statistics held a webinar to present highlights from the housing characteristics data from the 2020 Residential Energy Consumption Survey (RECS) on September 14, 2022. Learn more about improvements to the 2020 RECS, including data on all 50 states and the District of Columbia, as well as an overview of key methodological information on our study design. The recording of the webinar includes a Q&amp;A session with RECS Survey Manager Carolyn Hronis and members of the RECS team. The webinar presentation slides are also available.</p>
			
			<p><a href="/consumption/residential/status/pdf/RECS 2020 Webinar.pdf" class="ico_pdf">Presentation: 2020 RECS Housing Characteristics Webinar September 14</a></p>
			<hr />
		
			
			<h3><a href="/consumption/residential/data/2020/index.php?view=state"><strong>2020 RECS Housing Characteristics Data:</strong> 2020 RECS state-level housing characteristics tables are now available </a></h3>
			
			<p><i>Release Date: July 6, 2022</i></p>
			<p>The third set of 2020 RECS housing characteristics tables are now available. The third data release contains data highlights for housing characteristics at the state-level. This is the first time in program history that data have been released for all 50 states and the District of Columbia. Previous 2020 RECS releases contained data for housing characteristics at the national, regional, and division level.</p>
			<p><a href="/consumption/residential/data/2020/index.php?view=state">2020 RECS State data</a></p>
			<hr />
			
			<h3><a href="/consumption/residential/data/2020/index.php?view=microdata"><strong>2020 RECS Housing Characteristics:</strong> Public Use Microdata file and documentation are now available</a></h3>
			
			<p><i>Release Date: July 6, 2022</i></p>
			<p>The preliminary public use microdata file for the 2020 RECS is now available. The file contains records of survey responses from more 18,500 households, the largest responding sample in program history. In addition to the data file, a codebook, and information on working with the RECS microdata can be found on the 2020 RECS microdata page (link). For more information on survey processes and methodology utilized for the 2020 RECS Household Survey, please refer to the detailed <a href="/consumption/residential/data/2020/pdf/2020 RECS_Methodology Report.pdf" class="ico_pdf">technical documentation</a>.</p>
			<!--<p><a href="/consumption/residential/data/2020/index.php?view=microdata">2020 RECS Housing Characteristics Public Use Microdata file </a></p>-->
			<hr />
			
			
		<h3><a href="https://www.youtube.com/watch?v=u5cOg-FCZz4&feature=em-share_video_user"> <strong>Webinar: </strong>2020 RECS Planning Webinar</a></h3>
			
		<p><i>Release Date: August 12, 2019</i></p>
		<p>EIA’s household energy consumption experts held a discussion with stakeholders about the 2020 Residential Energy Consumption Survey (RECS) on Thursday, July 11, 2019. The presentation included an outline for the upcoming RECS, including the reintroduction of state-level estimates and anticipated changes to the Household Questionnaire. Annual Energy Outlook modeler Kevin Jarzomski provided insights on how the RECS data are used in EIA’s residential energy consumption projections. The webinar concluded with a Q&A period.</p>
		<p><a href="/consumption/residential/status/pdf/2020_RECS_Outreach_Presentation.pdf" class="ico_pdf">Presentation: RECS Webinar July 11</a></p>
		<hr />
			
		<h3><a href="https://www.youtube.com/watch?v=qR7uBcSgqfI&feature=em-share_video_user"> <strong>Webinar: </strong>Highlights from the 2015 RECS: energy consumption, expenditures and end-use modeling</a></h3>
			
		<p><i>Release Date: July 31, 2018</i></p>
		<p>EIA's Office of  Energy Consumption and Efficiency Statistics held a webinar reviewing  consumption and expenditures data from the 2015 <em>Residential Energy Consumption  Survey</em> (RECS) on July 31, 2018. Learn more about new consumption and  expenditures (C&amp;E) data from the 2015 RECS and improvements to the methods  used for modeling end-use consumption. The recording of the webinar</a> includes a Q&amp;A session with RECS Survey Manager Chip Berry and  members of the RECS team. The webinar presentation slides are also available.</p>
		
		   <p><a href="/consumption/residential/webinar_slides/highlights_from_the_2015_RECS.pdf" class="ico_pdf">Presentation: RECS webinar slides</a></p>
		<hr />
		
		
        &nbsp; </span> 
        <?php /*  /Main Column */ ?>
      </div>
       <?php /* Side Column */ ?>
      <div class="side_col right">
        <?php include ('consumption/includes/side_nav_residential.inc') ; ?>
      </div>
      <?php /*/ Side Content*/ ?>
      <?php /*/ Page/Body Content */ ?>
    </div>
    <?php include ('global/includes/eia_footer.inc') ; ?>
<?php /*/ Outer Wrapper */ ?>
</body>
<script type="text/javascript">
$(document).ready(function(){
  $('#slider1').bxSlider(sliderOpts);
	
	var colors = Highcharts.getOptions().colors,
	tooltipFormatter = {
		0: function (point) {
				return '<b>Average consumption</b><br>' + Highcharts.numberFormat(point.y, 1)+' million Btu per housing unit'
				},
		1: function (point) {
				return '<b>Number of housing units</b><br>' + Highcharts.numberFormat(point.y, 1)+' million housing units'
				}
		}
	for(var i = 0; i <$('.fig1').length; i++)
  {
		new Highcharts.Chart({
				chart: {
					zoomType:'xy',
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
					formatter: function(){
						return tooltipFormatter[this.series.index](this);
						},
					crosshairs: true
					},
				xAxis: {
					categories: ['1980', '', '1982', '', '1984', '','','1987', '', '', '1990', '', '','1993', '', '','','1997', '', '','','2001', '', '','','2005', '', '','','2009'],
					tickColor: '#ffffff'
					},          
				yAxis: [{
					title:{
						text:'million Btu per housing unit',
						style: {
							color: colors[0]
							}
						},
					max: 115,
					min: 0,
					//tickInterval: 5,
					},{
					title:{
						text:'million housing units',
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
					data: [114, null, 103, null, 104.7, null, null, 100.8, null, null,98, null, null,103.6, null, null,null,101, null, null,null,92.2, null, null,null,94.9, null, null,null,89.6],
					name: 'Average Consumption',
					connectNulls:true,
					marker: {
						enabled: true,
						radius: 2
						}
					},{
					data: [81.6, null, 83.8, null, 86.3, null, null, 90.5, null, null,94, null, null,96.6, null, null,null,101.5, null, null,null,107, null, null,null,111.1, null, null,null,113.6],
					name: 'Number Housing Units',
					connectNulls:true,
					marker: {
						enabled: true,
						radius: 3
						},
					yAxis: 1
					}]
		  });
		}
	for(var i = 0; i <$('.fig2').length; i++)
	{
    new Highcharts.Chart({
			chart: {
				zoomType:'xy',
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
				formatter: function() {
					return '<b>'+ this.x +' homes built in ' + this.series.name +'</b><br/>'+ this.y +' average square footage';
					}
			 },
			xAxis: {
				categories: ['US', 'Northeast', 'Midwest', 'South', 'West'],
				plotLines : [
					$.extend(true, {
						value: 0.5
						},Highcharts.eia_projections_line)
					],
				},
			yAxis: [{
				max: 3600,
				tickInterval: 600,
				title:{
					text:'average square footage'
					}
				}],
			series: [{
				name: '1970s',
				data: [1685, 1922, 1887, 1604, 1493]
				},{
				name: '1980s',
				data: [1770, 2125, 2010, 1619, 1677]
				},{
				name: '1990s',
				data: [2200, 2507, 2524, 2073, 2082]
				},{
				name: '2000s',
				data: [2465, 3006, 3033, 2302, 2146]
				}]
			});
		}
	for(var i = 0; i <$('.fig3').length; i++)
	{
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
				categories:  ['0','1', '2', '3', '4', '5+', ' ', '0','1', '2', '3', '4', '5+',' ','0', '1-3','4-8', '9+'],
				},{ // slave axis
				linkedTo: 0,
				lineWidth: 0,
				tickLength:0,
				offset:25,
				categories: ['Televisions','', '', '', '', '', ' ', 'Computers','', '', '', '', '',' ','Rechargeable electronic devices', '','', ''],
				labels: {
					align: 'left',
					x: 30
					}
				}],
			yAxis: {
				min: 0,
				max: 60,
				tickInterval: 10,
				title:{
					text:'million households'
					}
				},
				tooltip: {
					formatter: function() {
						return'<b>'+this.point.name +'</b> ' +'</br> in '+ Highcharts.numberFormat(this.y, 1) + ' million households';
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
						},{
						y: 24.2,
						name: '1 Television'   
						},{
						y: 37.5,
						name: '2 Televisions' 
						},{
						y: 26.6,
						name: '3 Televisions'   
						},{
						y: 14.2,
						name: '4 Televisions'   
						},{
						y: 9.7,
						name: '5+ Televisions'   	   
						},{
						y: null
						},{
						name: '0 Computers',
						y: 27.4
						},{
						y: 46.9,
						name: '1 Computer'
						},{
						y: 24.3,
						name: '2 Computers'
						},{
						y: 9.5,
						name: '3 Computers'
						},{
						y: 3.6,
						name: '4 Computers'
						},{
						y: 2.0,	  
						name: '5+ Computers' 
						},{
						y: null
						},{
						name: '0 Rechargeable electronic<br/>devices',
						y: 11.4
						},{
						y: 57.9,
						name: '1-3 Rechargeable electronic<br/>devices'
						},{
						y: 36.4,
						name: '4-8 Rechargeable electronic<br/>devices'
						},{
						y: 7.9,
						name: '9+ Rechargeable electronic<br/> devices'
					}]
				}]
	    });
		}
	});

for(var i = 0; i <$('.20130103').length; i++)
	{
		new Highcharts.Chart({
			chart: {
				renderTo: $('.20130103')[i],
				defaultSeriesType: 'bar',
				zoomType:'xy',
				height:320
				},
			title: {
        text: 'Percentage of household site energy consumption by end-use, 1993-2009'
        },
			
			tooltip: {
            /*formatter: function() {
                return '<b>' + this.series.name + '</b><br />' + this.x +
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
				style:{
					width:550
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
					fontWeight:'bold'
					}/*,
				items:[{
					text: "* Not Reported/Not Asked includes end use that was not collected along with those establishments that did not know or report their end use"
					}]*/
        },
			plotOptions: {
				series: {
					dataLabels: {
						enabled: true,
						formatter: function() {
                        return (this.y*10).toFixed(0) +'%';
                    },
						style: {
              fontWeight: 'bold',
							color:'black'
							}
						}
					}
				},
			series: [{
				data: [5.32, 0.46, 1.83, 0.46, 1.94],
				color: 'rgba(0,150,215,.85)',
				name: '1993',
				lineWidth: 10
				},{
				data: [4.23, 0.64, 1.80, 0.48, 3.04],
				color: 'rgba(163,52,64,.85)',
				name: '2009',
				lineWidth: 10
				}]
			});
		}
</script>
</html>