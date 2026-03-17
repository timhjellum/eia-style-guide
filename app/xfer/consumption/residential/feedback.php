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
<?php  if(!isset($no_titling)) include "global/includes/titling.inc";?>
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
    <h1>Feedback</h1>
        <?php if( !$formSubmitted ) { ?>
          <form name="commenter" id="commenter" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <table width="515" align="left" cellpadding="0" cellspacing="0">
              <tr>
                <?php /*<td style="padding-left:15px" bgcolor="##EFEFEF"  class="CategoryTitle"*/ ?>
                <td style="padding-left:15px"  class="replytxt">
                  <h2>Provide comments, suggestions, requests, kudos, and gripes.</h2>
                  <?php /*br /><b>Your Comment or Question: </b> <br /*/ ?>
                  <TEXTAREA style="width:480px;min-height:150px;height:150px;" name="q7_comment" required="required"></TEXTAREA>
                </td>
              </tr>
              <tr>
                <td class="replytxt"><strong>Name</strong><br /><input type="text" name="name" required="required" size="38" style="margin-top:-2px"></td>
                <?php /* <td></td> */ ?>
              </tr>
              <tr>
                <td class="replytxt"><strong>Email</strong><br /><input type="email" ID="email" name="email" required="required" size="38" message = "Email required" style="margin-top:-2px"></td>
              </tr>
              <?php /*/table */ ?>
              <tr>
                <td>
                  <p style="padding-left:16px;padding-bottom:16px;">
                    <input id="submit1" type="submit" value="Submit" name="submit1">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input id="reset1" type="reset" value="Clear" name="reset1"></p>
                </td>
              </tr>
            </table>
            <?php /* determine which person gets email based on directory name */ ?>
            <?php
            if (isset($_SERVER['HTTP_REFERER'])) {
              $temail   = 'ifeedback@eia.gov';
              $recpName = 'EIA';

              $woffice = str_replace('/', '', $_SERVER['HTTP_REFERER']);
              switch ($woffice) {
                case 'biofuels':
                  $woffice = 'alternate';
                  break;

                case 'ipdbproject':
                  $woffice = 'intlstats';
                  break;

                case 'dnav':
                  $woffice = 'navigators';
                  break;
              }
            }
            ?>
            </form>
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