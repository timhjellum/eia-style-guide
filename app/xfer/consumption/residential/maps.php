<?php
$pageTitle = "";
$locale = 'overview';

$page['year'] = '';
$L2Title = "Residential Energy Consumption Survey (RECS)";

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
          <?php /*cfinclude template="/consumption/includes/side_nav_residential.cfm"*/ ?>
          <?php include ('../includes/side_nav_residential_data.inc') ; ?>
          
        </div>
        <div class="main_col">
          <h1>Maps</h1>
  <!--        <h2><a name="recs-maps-census"></a>Census Regions &amp; Divisions map</h2>
<img src="/consumption/images/census_map.png" alt="Census Regions &amp; Divisions map" title="Census Regions &amp; Divisions map" width="580"/>
<p>&nbsp;</p>-->
       <h2><a name="recs-maps-bacr"></a>Building America Climate Regions &mdash; RECS 2009</h2><br />
<img src="reports/images/climatezone_eere-lg.jpg" alt="Building America Climate Regions &mdash; RECS 2009" title="Building America Climate Regions &mdash; RECS 2009"/>   <p>&nbsp;</p>  
<br />
          <h2><a name="recs-maps-aia"></a>AIA Climate Zones &mdash; RECS 1978-2005</h2><p>&nbsp;</p>
<img src="reports/images/climatezone-lg.jpg" alt="AIA Climate Zones &mdash; RECS 1978-2005" title="AIA Climate Zones &mdash; RECS 1978-2005"/>

        
        </div>
        <?php /*/ Page/Body Content */ ?> 
      </div>
      <?php include ('global/includes/eia_footer.inc') ; ?>
</div>
<?php /*/ Outer Wrapper */ ?>
</body>
</html>