<?php
$pageTitle = "";
$locale = 'data';

$page['year'] = '2022';
$url['view'] = isset($_REQUEST['view']) ? $_REQUEST['view'] : '';
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
<?php  if(!isset($no_titling)) include "global/includes/titling.inc"; ?>
</head>
<body>
<?php /* Outer Wrapper */ ?>
<div id="outerX">
<?php include ('global/includes/eia_header.inc') ; ?>
<?php include ('../../../includes/subnav_consumption_mecs.inc') ; ?>
<?php /* Page/Body Content */ ?>
<div class="pagecontent mr_temp3">
<div class="main_col">
<?php include ('../../includes/data_cycle_jump_menu.inc') ; ?>
<?php include ('../../includes/tabs-data-pages-2022.inc') ; ?>
<div class="tab-contentbox">
<?php if ( $url['view'] == "methodology") { ?>
<div id="methodology">
<?php include ('includes/methodology.inc'); ?>
<?php include ('../../includes/mecs_survey_manager_contact_info.inc'); ?>
</div>
	<?php /*
<?php } else if ( $url['view'] == "methodology_2018") { ?>
<div id="methodology_2018">
<?php include ('includes/methodology_2018.inc'); ?>
<?php include ('../../includes/mecs_survey_manager_contact_info.inc'); ?>
</div>*/ ?>
<?php  } else { ?>
<div id="data">
<?php include ('includes/data-tables.inc'); ?>
<?php include ('../../includes/mecs_survey_manager_contact_info.inc'); ?>
</div>
<?php  } // end if ?>
</div>
</div>
<?php /*/ Main Column */ ?>
<?php /* Side Column */ ?>
<div class="side_col right">
<?php include ('../../includes/side_nav_manufacturing_data.inc') ; ?>
</div>
<?php /*/ Side Column */ ?>
</div>
<?php /*/ Page/Body Content */ ?>
<?php include ('global/includes/eia_footer.inc') ; ?>
</div>
<?php /*/ Outer Wrapper */ ?>
</body>

</html>