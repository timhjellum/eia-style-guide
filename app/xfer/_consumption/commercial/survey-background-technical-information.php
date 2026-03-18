<?php
$pageTitle = "";
$locale = 'overview';
$L2Title = "Commercial Buildings Energy Consumption Survey (CBECS)";
$pageyear = '';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php include ('global/includes/eia_head_info.inc') ; ?>
  <style type="text/css">
    <!--
    p.MsoNormal {
      margin-top:0in;
      margin-right:0in;
      margin-bottom:10.0pt;
      margin-left:0in;
      line-height:115%;
      font-size:11.0pt;
      font-family:"Calibri","sans-serif";
    }
    -->
  </style>
<?php  if(!isset($no_titling)) include "global/includes/titling.inc"; ?></head>
<body>
<div id="outerX">
<?php /* Outer Wrapper */ ?>
<?php include ('global/includes/eia_header.inc') ; ?>
<?php include ('../includes/subnav_consumption_cbecs.inc') ; ?>
<?php /* Page/Body Content */ ?>
<div class="pagecontent mr_temp1">
  <div class="main_col"> 
    <?php /* Main Column */ ?>
    <h1><a name="survey_background" id="survey_background"></a>Survey Background and Technical Information</h1>
    <h2>Survey Background</h2>
    <p>The commercial sector encompasses a vast range of building types-service businesses, such as retail and wholesale stores, hotels and motels, restaurants, and hospitals, as well as certain buildings that would not be considered &quot;commercial&quot; in a traditional economic sense, such as public and private schools, correctional institutions, and religious and fraternal organizations. Excluded from the sector are the goods-producing industries: manufacturing, agriculture, mining, forestry and fisheries, and construction.</p>
    <p>Nearly all energy use in the commercial sector takes place in, or is associated with, the buildings that house these commercial activities. Analysis of the structures, activities, and equipment associated with different types of buildings is the clearest way to evaluate commercial sector energy use. The Commercial Buildings Energy Consumption Survey (CBECS) is a national-level sample survey of commercial buildings and their energy suppliers conducted quadrennially (previously triennially) by the Energy Information Administration (EIA). The 2018 CBECS was the eleventh survey in the series begun in 1979. From 1979 to 1986, the survey was known as the Nonresidential Buildings Energy Consumption Survey, or NBECS.</p>

    <h2>Technical Information</h2>
    <p>The following topics provide  detailed information on survey methodology, the kinds of errors associated with  sample surveys, estimation of standard errors, estimation of energy end-use  consumption, and the relationship between CBECS and EIA supply surveys. Methodology for specific survey years can be found on the&nbsp;<strong><em>Methodology</em> </strong>tab of the <em><strong>Data</strong></em> page for that survey year.  Specific technical information for older CBECS surveys are found in the  Appendices of the data reports for that year.</p>
    <ul>
      <li><a href="/consumption/commercial/data/2018/index.php?view=methodology">2018  CBECS Methodology &amp; Research</a></li>
      <li><a href="/consumption/commercial/data/2012/index.php?view=methodology">2012  CBECS Methodology &amp; Research</a></li>
      <li><a href="/consumption/commercial/data/2003/index.php?view=methodology">2003  CBECS Methodology &amp; Development</a></li>
      <li><a href="/consumption/commercial/data/1999/index.php?view=methodology">1999  CBECS Methodology &amp; Development</a></li>
      <li><a href="/consumption/commercial/data/1995/index.php?view=methodology">1995  CBECS Methodology &amp; Development</a></li>
      <li><a href="comparison-between-years.php">Comparisons across surveys from the 1992 CBECS through the 2018 CBECS</a></li>
      <li><a href="/consumption/commercial/data/2018/rse.php">What is a Relative Standard Error (RSE)?</a></li>
      <li><a href="estimation-of-standard-errors.php">Estimation of Standard Errors</a></li>
      <li><a href="estimation-enduse-consumption.php">Estimation of Energy End-Use Consumption</a></li>
      <li><a href="relationship-to-EIA-supply-surveys.php">Relationship of CBECS Coverage to EIA Supply Surveys</a></li>
    </ul>

    <p>EIA also conducts research to improve and expand CBECS data collection. Research results are provided below and may be found on the <strong><em>Methodology</em></strong> tab of the <strong><em>Data</em></strong> page for the applicable survey year.</p>

    <ul>
      <li><a href="/consumption/commercial/reports/2018/pilot/">2018 CBECS Data Center Pilot Results</a></li>
      <li><a href="/consumption/commercial/reports/2012/assessorexp/">Select Results from the Energy Assessor Experiment in the 2012 Commercial Buildings Energy Consumption Survey</a></li>
      <li><a href="/consumption/commercial/data/2012/pdf/green_certification_cbecs.pdf">Green Building Certification and the CBECS </a></li>
      <li><a href="/consumption/commercial/data/2012/pdf/green_buildings_cbecs.pdf">Comparison of energy data for green-certified and non-certified buildings in the 2012 CBECS</a></li>
      <li><a href="/consumption/commercial/reports/2012/water/">2012 CBECS: Water Consumption in Large Buildings Summary</a></li>
      <li><a href="/consumption/commercial/reports/2007/hospital-water-data-collection.php">Water Data Collection in the 2007 CBECS</a></li>
    </ul>
    
    <?php include ('includes/cbecs_survey_manager_contact_info.inc') ; ?>
  </div>
  <?php /* Side Column */ ?>
  <div class="side_col right">
    <?php include ('includes/side_nav_commercial_data.inc') ; ?>
  </div>
  
  <?php /*/ Side Content */ ?> 
  
  <?php /*/ Page/Body Content */ ?> 
</div>
<?php include ('global/includes/eia_footer.inc') ; ?>
<?php /*/ Outer Wrapper */ ?>
</body>
</html>