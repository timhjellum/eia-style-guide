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
      <h1>Household  Pulse Survey  asks questions on energy insecurity</h1>
      
      <p>The U.S. Census Bureau&rsquo;s Household Pulse Survey collects experimental data on the social and economic effects of the COVID-19 pandemic on U.S. households. Although administered by the U.S. Census Bureau, the Household Pulse Survey is a collaborative effort among several U.S. statistical agencies. The U.S. Census Bureau began Phase 3.2  of data collection in July 2021, which included three questions on household energy  insecurity. These questions are very similar to questions administered on our Residential  Energy Consumption Survey (RECS).</p>
      <p>The U.S. Census Bureau Household Pulse Survey data tables are updated every two weeks as new data become available. <a href="https://www.census.gov/programs-surveys/household-pulse-survey/data.html#phase3.2">Results for the household energy insecurity questions begin in Phase 3.2</a>.</p>
      <p>When interpreting results, remember that the Household Pulse Survey dataset is an experimental product, and as such, it does not meet all of the U.S. Census Bureau&rsquo;s data publication standards. As noted in the U.S. Census Bureau&rsquo;s <a href="https://www.census.gov/programs-surveys/household-pulse-survey/technical-documentation.html">technical documentation and nonresponse bias report</a>, the Household Survey Pulse data are subject to nonresponse bias and nonsampling errors.</p>
    </div>
    <?php /*/ Page/Body Content */ ?>
  </div>
  <?php include ('global/includes/eia_footer.inc') ; ?>
</div>
<?php /*/ Outer Wrapper */ ?>

</body>
</html>