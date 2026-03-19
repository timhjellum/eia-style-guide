<?php
$pageTitle = "";
$locale = 'data';
$L2Title = "Commercial Buildings Energy Consumption Survey (CBECS)";

$pageYear = '';
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
    <?php include ('../../includes/subnav_consumption_cbecs.inc') ; ?>
    <?php /* Page/Body Content */ ?>
    <div class="pagecontent mr_temp1">
      <div class="main_col"> 
        <?php /* Main Column */ ?>
        <h1>What is an RSE?</h1>
        <p>The estimates in the Commercial Buildings Energy Consumption Survey (CBECS) are based on data reported by representatives of a statistically-designed subset of the entire commercial building population in the United States, or a "sample".  Consequently, the estimates differ from the true population values.  However, the sample design permits us to estimate the sampling error in each value.</p>
        <p>It is important to understand: CBECS estimates should not be considered as finite point estimates, but as estimates with some associated error in each direction.</p>
        <p>The standard error is a measure of the reliability or precision of the survey statistic.  The value for the standard error can be used to construct confidence intervals and to perform hypothesis tests by standard statistical methods.  Relative Standard Error (RSE) is defined as the standard error (square root of the variance) of a survey estimate, divided by the survey estimate and multiplied by 100.</p>
        <p>The 95-percent confidence range for a given survey estimate can be determined with the RSE.  To calculate the 95-percent confidence range:</p>
        <ol>
          <li> Divide the RSE by 100 and multiply by the survey estimate to determine the standard error.</li>
          <li> Multiply the standard error by 1.96 to determine the confidence error.</li>
          <li> The survey estimate plus or minus the confidence error is the 95-percent confidence range.</li>
        </ol>
        <p>For example, from Table A1, the estimate for total floorspace for all commercial buildings in the 2003 CBECS is 71,658 square feet and the estimate's RSE is 3.1 percent.  The standard error is (3.1/100)*(71,658 million square feet) or 2,221 million square feet.  The 95-percent confidence error is (1.96)*(2,221 million square feet), or 4,354 million square feet.  Therefore, with 95 percent confidence, the true amount of floorspace in commercial buildings in the U.S. in 2003 was 71,658 plus or minus 4,354 million square feet, or, the range was from 67,304 to 76,012 million square feet.</p>
        <h2> Statistical Significance Between Two Statistics</h2>
        <p>The difference between any two estimates given in the Detailed Tables may or may not be statistically significant. Statistical significance is computed as:</p>
        <div align="center" style="margin-bottom:20px;">
        <img src="../images/eqn11.gif" alt="equation" width="153" height="39" border="0">
        </div>

        <p> where <em>S</em> is the standard error, <em>x</em><sub>1</sub> is the first estimate, and <em>x</em><sub>2</sub> is the second estimate. The result of this computation is to be multiplied by 1.96 and, if this result is less than the difference between the two estimates, the difference is statistically significant.<br>
          <br>
          For example, from Table B1, food sales buildings were an average 5,600 square feet in 2003 with an RSE of 7.5, while health care buildings averaged 24,600 square feet with an RSE of 11.4, for an estimated difference of 19,000 square feet between the two building types. The standard error for food sales buildings (<em>x</em><sub>1</sub>) is (7.5/100)*5,600, or 420, and the standard error for health care buildings (<em>x</em><sub>2</sub>) is (11.4/100)*24,600, or 2,804. So,</p>

          <div align="center">
          <p><em>S</em><sub><em>x</em><sub>1</sub>-<em>x</em><sub>2</sub></sub> = (420<sup>2</sup>+2,804<sup>2</sup>)<sup>&frac12;</sup></p>

          <p>and</p>
          <p><em>S</em><sub><em>x</em><sub>1</sub>-<em>x</em><sub>2</sub></sub> = 2,836.</p>
          </div>
          <p>
          Multiplying 2,836 by 1.96 yields 5,558. Since 5,558 is less than 19,000, the difference between the two estimates is statistically significant.</p>
      </div>
      <?php /* Side Column */ ?>
      <div class="side_col right">
        <?php include ('../includes/side_nav_commercial_data.inc') ; ?>
      </div>
      
      <?php /*/ Side Content */ ?> 
      
      <?php /*/ Page/Body Content */ ?> 
    </div>
    <?php include ('global/includes/eia_footer.inc') ; ?>
<?php /*/ Outer Wrapper */ ?>
</body>
</html>