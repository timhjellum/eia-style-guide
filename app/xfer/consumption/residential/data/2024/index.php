<?php
$pageTitle = "";
$locale = 'data';
$L2Title = "Residential Energy Consumption Survey (RECS)";

$hct = 'y';
$page['year'] = '2024';
$url['view'] = isset($_REQUEST['view']) ? $_REQUEST['view'] : '';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php include ('global/includes/eia_head_info.inc') ; ?>
  <script type="text/javascript">
    $(function() {
      $('#recs_tables').tabs();
    });
  </script>
<?php  if(!isset($no_titling)) include "global/includes/titling.inc"; ?></head>

<body>
<?php /* BEGIn Outer Wrapper */ ?>
<div id="outerX">
  <?php include ('global/includes/eia_header.inc') ; ?>
      <?php include ('../../../includes/subnav_consumption_recs.inc') ; ?>
      <?php /* BEGIn Page/Body Content */ ?>
      <div class="pagecontent mr_temp2"> 
        <?php /* BEGIn MaIn Column */ ?>
        <div class="main_col">
          <?php include ('../includes/data_cycle_jump_menu.inc') ; ?>
          <?php /* Tabs */ ?>
          <?php include ('../includes/tabs-data-pages-state.inc') ; ?>
          <div class="tab-contentbox">
            <?php if ( $url['view'] == "consumption") {?>
              <div id="expenditures">
                <?php include ('includes/consumption-expenditures.inc') ; ?>
                <?php include ('../includes/recs_survey_manager_contact_info.inc') ; ?>
              </div>
            <?php } elseif ( $url['view'] == "microdata") {?>
              <div id="microdata">
                <?php include ('includes/microdata.inc') ; ?>
                <?php include ('../includes/recs_survey_manager_contact_info.inc') ; ?>
              </div>
            <?php } elseif ( $url['view'] == "methodology") {?>
              <div id="methodology">
                <?php include ('includes/methodology.inc') ; ?>
                <?php include ('../includes/recs_survey_manager_contact_info.inc') ; ?>
              </div>
            <?php } elseif ( $url['view'] == "state") {?>
              <div id="state">
                <?php include ('includes/state-data.inc') ; ?>
                <?php include ('../includes/recs_survey_manager_contact_info.inc') ; ?>
              </div>
              <?php  } else { ?>
              <div id="characteristics">
                <?php include ('includes/housing-characteristics.inc') ; ?>
                <?php include ('../includes/recs_survey_manager_contact_info.inc') ; ?>
              </div>
            <?php  } // end if ?>
          </div>
          <?php /*/ Tabs */ ?>
        </div>
        <?php /* END MaIn Column */ ?> 
        <?php /* BEGIn Side Column */ ?>
        <div class="side_col right">
          <?php include ('consumption/includes/side_nav_residential.inc') ; ?>
        </div>
        <?php /* END Side Column */ ?> 
      </div>
      <?php /* END Page/Body Content */ ?>
      <?php include ('global/includes/eia_footer.inc') ; ?>
</div>
<?php /*END Outer Wrapper */ ?>
</body>
</html>