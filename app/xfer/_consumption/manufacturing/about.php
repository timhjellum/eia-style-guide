<?php
$pageTitle = "Energy Information Administration (EIA)- About the Manufacturing Energy Consumption Survey (MECS)";
$locale = 'overview';

$L2Title = "Manufacturing Energy Consumption Survey (MECS)";
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
      <?php include ('../includes/subnav_consumption_mecs.inc') ; ?>
    <?php /* Page/Body Content */ ?>
    <div class="pagecontent mr_temp3">
      <div class="main_col"> 
        <?php /* Main Column */ ?>
        
<h1>About the Manufacturing Energy Consumption Survey</h1>
<p>The Manufacturing Energy Consumption Survey (MECS) is a national sample  survey that collects information on the stock of U.S. manufacturing  establishment, their energy-related building characteristics, and their energy  consumption and expenditures. </p>
 <P> The MECS was first conducted in 1985; the eleventh, and most recent survey,  began in 2023 and the first data will be appearing starting in January 2025  to provide data for calendar year 2022. MECS is currently conducted on a  quadrennial basis.</p>
<p>  In previous survey years, establishments reported their energy information  on mail questionnaires; in 2006, most used a secure web-based questionnaire,  and since that time, this has been the main method of reporting data for the  MECS. The 2022 MECS sample size of approximately 15,000 establishments was  drawn from a nationally representative sample frame representing 97-98% of the  manufacturing payroll. This sample allows EIA to report separate estimates of  energy use for 21 3-digit industry subsectors, and 50 industry groups and  industries according to the&nbsp;<a href="http://www.census.gov/eos/www/naics/">North  American Industry Classification System (NAICS)</a>.</p>
<?php include ('includes/mecs_survey_manager_contact_info.inc') ; ?>

        <?php /* /Main Column */ ?> 
        
      </div>
      <?php /* Side Column */ ?>
      <div class="side_col right">
        <?php include ('../includes/side_nav_manufacturing.inc') ; ?>
      </div>
      
      <?php /*/ Side Content */ ?> 
      
      <?php /*/ Page/Body Content */ ?> 
    </div>
    <?php include ('global/includes/eia_footer.inc') ; ?>
<?php /*/ Outer Wrapper */ ?>
</body>
</html>