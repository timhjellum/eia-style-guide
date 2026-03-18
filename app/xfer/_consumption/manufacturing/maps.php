<?php
$pageTitle = "";
$locale = 'overview';

$page['year'] = 'maps';
$L2Title = "Manufacturing Energy Consumption Survey (MECS)";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php include ('global/includes/eia_head_info.inc') ; ?>
  <script type="text/javascript">
    $(function() {
      $('#tabs').tabs();
    });
  </script>
<?php  if(!isset($no_titling)) include "global/includes/titling.inc"; ?></head>
<body>
<div id="outerX"> 
  <?php /* Outer Wrapper */ ?>
  <?php include ('global/includes/eia_header.inc') ; ?>
      <?php include ('../includes/subnav_consumption_mecs.inc') ; ?>
      <?php /* Page/Body Content */ ?><p>
 <h2><a name="census"></a>U. S. Census Regions and Divisions:</h2>
      <div class="pagecontent mr_temp3"> 
        <?php /* Main Column */ ?>
        
        <img src="../commercial/images/cendivco.gif" width="599" height="516" alt="census map" />    
            <?php /* /Main Column */ ?>
        <div class="side_col right">
          <?php include ('../includes/side_nav_manufacturing.inc') ; ?>
        </div>
      </div>
      <?php /*/ Page/Body Content */ ?>
      <?php include ('global/includes/eia_footer.inc') ; ?>
</div>
<?php /*/ Outer Wrapper */ ?>
</body>

</html>