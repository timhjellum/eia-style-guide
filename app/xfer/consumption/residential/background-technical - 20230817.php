<?php
$pageTitle = "";
$locale = 'overview';
$L2Title = "Residential Energy Consumption Survey (RECS)";

$page['year'] = 'home';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php include ('global/includes/eia_head_info.inc') ; ?>
<?php  if(!isset($no_titling)) include "global/includes/titling.inc"; ?></head>
<body>
<div id="outerX">
  <?php /* Outer Wrapper */ ?>
  <?php include ('global/includes/eia_header.inc') ; ?>
  <?php include ('../includes/subnav_consumption_recs.inc') ; ?>
  <?php /* Page/Body Content */ ?>
  <div class="pagecontent mr_temp1">
     <div class="side_col right">
		<?php /* Side Column */ ?>
		  <?php include ('consumption/includes/side_nav_residential.inc') ; ?>
      </div> 
    <div class="main_col">
		<h1>Survey Background and Technical Information</h1>
		<h2>Survey Background</h2>
		<p>The Residential Energy Consumption Survey (RECS) is the only nationwide source of energy related characteristics, consumption, and expenditures for U.S. homes.</p>
		<p>The RECS is a multi-phase study that begins with a household survey, which asks  respondents about physical characteristics of the home (such as the roofing material and the number of windows), and energy use behaviors (such as how many times per week the microwave is used). EIA then contacts the energy suppliers for the housing unit to obtain the fuel consumption and expenditures data. For example, if a home uses natural gas, EIA asks the natural gas supplier both how  many cubic feet of gas the home used, as well as how much that gas cost. Data are combined within complex statistical models to dissagregate consumption into estimates for end uses, including space heating, air conditioning, water heating, and refrigeration.</p>
		<p>RECS began in 1978 as an annual survey. The 2020 RECS is the fifteenth iteration of the survey.</p>
		
		<h2>Technical Information</h2>
		<p>The following links provide detailed information on RECS methodology, data quality (including the kinds of errors associated with sample surveys), estimation of standard errors, and end-use consumption estimation. Methodology for specific survey years is  linked below and can be found on the <strong><em>Methodology</em></strong> tab of the <strong><em>Data</em></strong> page for that survey year. Technical information for RECS surveys prior to 1993  is available upon request.</p>
		
		<ul type="disc">
			<li><a href="/consumption/residential/data/2020/index.php?view=methodology">2020 RECS Household Characteristics Technical Documentation Summary</a></li>
			<li><a href="/consumption/residential/data/2020/index.php?view=methodology">2020 RECS Methodology</a></li>
			<li><a href="/consumption/residential/data/2015/index.php?view=methodology">2015 RECS Methodology</a></li>
			<li><a href="/consumption/residential/data/2009/index.php?view=methodology">2009 RECS Methodology &amp; Research</a>
				<ul>
					<li><a href="/consumption/residential/reports/2009/methodology-end-use.php">How does EIA estimate energy consumption and end uses in U.S. homes?</a></li>
					<li><a href="/consumption/residential/reports/2009/methodology-square-footage.php">Where does the RECS square footage data come from?</a></li>
					<li><a href="/consumption/residential/methodology/2009/pdf/faqs-enduse-models022013.pdf">End-use model FAQs</a></li>
					</ul>
				</li>
			<li><a href="/consumption/residential/reports/smartmetering/">An Assessment of Interval Data and Their Potential Application to Residential Electricity End-Use Modeling</a></li>
			<li><a href="/consumption/nas.php">An Assessment of EIA&rsquo;s Building Consumption Data</a></li>
			<li><a href="/consumption/residential/data/2001/index.php?view=methodology">2001 RECS Methodology</a></li>
			<li><a href="/consumption/residential/data/1997/index.php?view=methodology">1997 RECS Methodology</a></li>
			<li><a href="/consumption/residential/data/1993/index.php?view=methodology">1993 RECS Data Quality</a></li>
			</ul>
<?php include ('data/includes/recs_survey_manager_contact_info.inc') ; ?>
    </div>
    <?php /*/ Page/Body Content */ ?>
  </div>
  <?php include ('global/includes/eia_footer.inc') ; ?>
</div>
<?php /*/ Outer Wrapper */ ?>

</body>
</html>