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
<?php  if(!isset($no_titling)) include "global/includes/titling.inc"; ?>
<style type="text/css">
<!--
p.MsoNormal {
margin-top:0in;
margin-right:0in;
margin-bottom:8.0pt;
margin-left:0in;
line-height:107%;
font-size:11.0pt;
font-family:"Arial",sans-serif;
}
-->
</style>
</head>
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
      <h1>About the RECS</h1>
      <p>EIA administers the <em>Residential Energy Consumption Survey</em> (RECS) to a nationally representative sample of housing units. For the 2024 survey cycle, EIA used web and mail forms to collect detailed information on household energy characteristics. This information is combined with data from energy suppliers to these homes to estimate energy costs and usage for heating, cooling, appliances and other end uses&mdash;information critical to meeting future energy demand and improving efficiency and building design.</p>
<p>We first conducted RECS in 1978. This release marks the 16th RECS cycle, which collected data from nearly 17,000 households in housing units statistically selected to represent the 132.5 million housing units in the United States that were occupied as a primary residence in 2024. Data from the 2024 RECS are tabulated by geography and for characteristics, such as housing unit type and income, that are of interest to energy analysis.</p>
<p>The results of each RECS include data tables, a microdata file, and a series of reports. Data tables are generally organized across two headings: Household Characteristics and Consumption &amp; Expenditures. See  <a href="/consumption/residential/data/2024/">RECS data tables</a>.</p>
      <p>RECS and many of the EIA supplier surveys are integral ingredients for some of EIA's more comprehensive data products and reports, such as the  <a href="/forecasts/aeo/"><em>Annual Energy Outlook </em>(AEO)</a> and <a href="/totalenergy/data/monthly/index.php"><em>Monthly Energy  Review</em> (MER)</a>. These products allow for broader comparisons across sectors, as well as projections of future consumption trends.</p>
      <p class="MsoNormal">&nbsp;</p>
<p>&nbsp;</p>

    </div>
    <?php /*/ Page/Body Content */ ?>
  </div>
  <?php include ('global/includes/eia_footer.inc') ; ?>
</div>
<?php /*/ Outer Wrapper */ ?>
</body>
</html>