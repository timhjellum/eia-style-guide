<?php
$pageTitle = "";
$locale = 'ap';
$sect = 'Consumption';
$l2id = 4; // for consumption, see NEIC.BS_L2_PAGES
$L2Title = "Manufacturing Energy Consumption Survey (MECS)";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php include ('global/includes/eia_head_info.inc') ; ?>

<?php  if(!isset($no_titling)) include "global/includes/titling.inc"; ?></head>

<body onLoad="clearForms()" onUnload="clearForms()">
<div id="outerX"><?php /* Outer Wrapper */ ?>
<?php include ('global/includes/eia_header.inc') ; ?>
<?php include ('../includes/subnav_consumption_mecs.inc') ; ?>

<?php $url['t'] = '90'; ?><?php /* Classifies this reports page as commercial (id88) */ ?>
<?php include ('global/includes/bookshelf_single.inc') ; ?>
<?php /* Page/Body Content */ ?>

    <div class="pagecontent mr_temp1">
      <div class="side_col left">
		<?php /* Side Column */ ?>
          <?php include ('global/includes/bookshelf_side_search.inc') ; ?>
        <?php /* Side Column */ ?>

      </div>
      <div class="main_col">
      <?php /* Main Column */ ?>
        <?php include ('global/includes/bookshelf_results_sub.inc') ; ?>
      <?php /* Main Column */ ?>
      </div>
    </div>
<?php /*/ Page/Body Content */ ?>
<?php include ('global/includes/eia_footer.inc') ; ?>
</div><?php /*/ Outer Wrapper */ ?>
</body>
</html>