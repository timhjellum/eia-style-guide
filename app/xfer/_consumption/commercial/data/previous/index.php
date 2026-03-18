<?php
$pageTitle = "";
$locale = 'data';
$L2Title = "Commercial Buildings Energy Consumption Survey (CBECS)";
$pageYear = 'Previous';
$pagetitle = 'Energy Information Administration (EIA)- Commercial Buildings Energy Consumption Survey (CBECS) Data';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title><?php echo $pagetitle; ?></title>
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
      <?php include ('../../../includes/subnav_consumption_cbecs.inc') ; ?>
      <?php /* Page/Body Content */ ?>
      <div class="pagecontent mr_temp3">
        <div class="main_col">
          <?php include ('../includes/data_cycle_jump_menu.inc') ; ?>
          <?php /* Main Column */ ?> 
          <?php include ('1989/microdata.php') ; ?><?php include ('1986/microdata.php') ; ?><?php include ('1983/microdata.php') ; ?>
          <?php include ('1979/microdata.php') ; ?>          
        </div>
        <div class="side_col right">
          <?php include ('../../includes/side_nav_commercial_data.inc') ; ?>
        </div>
      </div> 
      <?php /*/ Page/Body Content */ ?>
      <?php include ('global/includes/eia_footer.inc') ; ?>
</div>
<?php /*/ Outer Wrapper */ ?>
</body>
<script>
jQuery(document).ready(function(){
  $('.toggle')
  .append('<span class="right morelink">[ + ] See more</span>')
	.css({'cursor':'pointer', 'color':'#189bd7'})
  .attr('title','Click to expand/collapse')
  .prepend(function () {
    if ($(this).next('.more').is(':hidden')) {
      } 
    else {
      }
    })
  .click(function () {
      //$(this).next('.more').slideToggle('fast');
	  //$(this).children('.morelink').text('[-] See less');
    if ($(this).next('.more').is(':hidden')) {
      $(this).next('.more').slideDown('fast');
	  $(this).children('.morelink').text('[ - ] See less');
      } 
    else {
      $(this).next('.more').slideUp('fast');
	  $(this).children('.morelink').text('[ + ] See more');
      }
    })
  $('.comments')
  .css({'background-color':'#e8ecf2', 'padding':'10px'})
  });
</script>
</html>