<?php
$pageTitle = "";
$locale = 'data';

$page['year'] = 'Archive';
$L2Title = "Manufacturing Energy Consumption Survey (MECS)";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php include ('global/includes/eia_head_info.inc') ; ?>
  <link rel="stylesheet" href="/global/scripts/JQuery/tablesorter/themes/blue/eia_style.css" type="text/css" media="print, projection, screen" />
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
      <?php include ('consumption/includes/subnav_consumption_mecs.inc') ; ?>
      <?php /* Page/Body Content */ ?>
      <div class="pagecontent mr_temp3"> 
        <?php /* Main Column */ ?>
        
        <div class="main_col">
        <?php include ('../../includes/data_cycle_jump_menu.inc') ; ?>
          <table width="100%" class="tablesorter basic_table" id="tablesorter-demo">
            <caption>
            Special Reports (click on table headings to sort)
            <p>
            </caption>
            <thead>
              <tr>
                <th><strong>Title</strong></th>
                <th width="17%"><strong>Release Year</strong></th>
                <th width="15%"><strong>Cycle Year</strong></th>
                <th width="15%"><strong>Format</strong></th>
              </tr>
            </thead>
            <tbody>
				<tr>
				  <td>MECS Summary<br />
                  <em>Release Date: </em></td>
				  <td>2021</td>
				  <td>2018</td>
				  <td><a href="/consumption/manufacturing/pdf/MECSonepagerV3.pdf" class="ico_pdf">PDF</a></td>
			  </tr>
				<tr>
				  <td>2018 Manufacturing Energy Consumption Survey Consumption Results<br>
                  <em>Release Date: March 31, 2021</em></td>
				  <td>2021</td>
				  <td>2018</td>
				  <td><a href="/consumption/manufacturing/pdf/MECS%202018%20Results%20Flipbook.pdf" class="ico_pdf">PDF</a></td>
			  </tr>
				<tr>
				  <td><a href="/consumption/manufacturing/reports/2014/fuel_switching/">The Capability of U.S. Manufacturing to Switch Fuels</a><br>
                  <em>Release Date: September 6, 2018</em></td>
				  <td>2018</td>
				  <td>2014</td>
				  <td>&nbsp;</td>
			  </tr>
				<tr>
                <td><a href="/consumption/manufacturing/reports/2014/enduse_intensity/">Energy Use and Energy Intensity of U.S. Manufacturing&mdash;Data from the 2014 Manufacturing Energy Consumption Survey (MECS)</a><br>
                  <em>Release Date: October 18, 2017</em></td>
                <td>2017</td>
                <td>2014</td>
                <td>-</td>
              </tr>
				<tr>
                <td><a href="/consumption/manufacturing/reports/2014/pre_estimates/">Preliminary estimates show that U.S. manufacturing energy consumption increased between 2010 and 2014</a><br>
                  <em>Release Date: October 13, 2016</em></td>
                <td>2016</td>
                <td>2010 and 2014</td>
                <td>-</td>
              </tr>
				<tr>
                <td><a href="/consumption/manufacturing/reports/2010/ng_cost/">Cost of Natural Gas Used in Manufacturing Sector Has Fallen</a><br>
                  <em>Release Date:  September 6, 2013</em></td>
                <td>2013</td>
                <td>2010</td>
                <td>-</td>
              </tr>
				<tr>
                <td><a href="/consumption/manufacturing/reports/2010/decrease_use.php">Manufacturing Energy Consumption Data Show Large Reductions in Both Manufacturing Energy Use and the Energy Intensity of Manufacturing Activity between 2002 and 2010</a><br>
                  <em>Release Date: March 19, 2013</em></td>
                <td>2013</td>
                <td>2010</td>
                <td>-</td>
              </tr>
				<tr>
                <td><a href="/consumption/manufacturing/reports/2010/early_estimates.php">Early-release estimates from the 2010 MECS show that energy consumption in the manufacturing sector decreased between 2006 and 2010</a><br>
                  <em>Release Date: March 28, 2012</em></td>
                <td>2012</td>
                <td>2006&ndash;2010</td>
                <td>-</td>
              </tr>
				 <tr>
                <td><a href="/consumption/manufacturing/briefs/steel/">Steel Industry Analysis Brief</a><br>
                  <em>Release Date: July 15, 2009 </em></td>
                <td>2009</td>
                <td>-</td>
                <td>-</td>
              </tr>
				 <tr>
                <td><a href="/consumption/manufacturing/briefs/chemical/">Chemical Industry Analysis Brief</a><br>
                  <em>Release Date: June 15, 2005</em></td>
                <td>2005</td>
                <td>-</td>
                <td>-</td>
              </tr>
              <tr>
                <td>Energy-Related Carbon Dioxide Emissions<br>
                  <em>Release Date: November 2006</em></td>
                <td>2005</td>
                <td>-</td>
                <td><a href="/consumption/manufacturing/reports/archive/pdf/industry_mecs.pdf" class="ico_pdf">PDF</a></td>
              </tr>
              <tr>
                <td>Energy Use in Manufacturing<br></td>
                <td>2002</td>
                <td>1998</td>
                <td><a href="/consumption/manufacturing/reports/archive/pdf/mecs_1998to2002.pdf" class="ico_pdf">PDF</a></td>
              </tr>
              <tr>
                <td><a href="/consumption/manufacturing/reports/archive/carbon_emissions/carbon_mfg.html">Energy Related Carbon Emissions</a><br>
                  <em>Release Date: </em></td>
                <td>1994</td>
                <td>1994</td>
                <td></td>
              </tr>
              <tr>
                <td><a href="/consumption/manufacturing/reports/archive/fueloil/mecs_fueloil_use.html">Fuel Oil in Manufacturing</a><br>
                  <em>Release Date: </em></td>
                <td>2000</td>
                <td>1974&ndash;1999</td>
                <td>-</td>
              </tr>
              <tr>
                <td><a href="/consumption/manufacturing/reports/archive/special_topics/restructuring_mecs94.htm">How Changing Energy Markets Affect Manufacturing</a><br>
                  <em>Release Date: August 20,1984</em></td>
                <td>1984</td>
                <td>1981</td>
                <td>-<!--<a href="/emeu/recs/archive/arch_hist_pubs/hp_pdf/SR-EEUD-84-1.pdf" class="ico_pdf">PDF</a></td>
              </tr> --->
              <tr>
                <td><a href="/consumption/manufacturing/reports/archive/establishments/mecs_pubs.html">Manufacturing Establishments</a></strong><br>
                  reports, data tables and questionnaires<br />
                  <em>Release Date: October 1995</em></td>
                <td>2008</td>
                <td>1985&ndash;1994</td>
                <td>-</td>
              </tr>
              <tr>
                <td><a href="/consumption/manufacturing/reports/archive/consumption/mecs4a.html">Manufacturing Energy Consumption Survey</a><br>
                  (combined Consumption and Fuel Switching)<br />
                  <em>Release Date: August 1998</em></td>
                <td>1994</td>
                <td>1994</td>
                <td>-</td>
              </tr>
              <tr>
                <td><a href="/consumption/manufacturing/reports/archive/mecs91/consumption/mecs1a.html">Manufacturing Consumption of Energy</a><br>
                  1985-1994<br />
                  (combined Consumption and Fuel Switching)<br />
                  <em>Release Date: 1996</em></td>
                <td>1996</td>
                <td>1991</td>
                <td>-</td>
              </tr>
              <tr>
                <td><a href="/consumption/manufacturing/data/1991/">Manufacturing Consumption of Energy</a><br />
                  1991
               </td>
                <td>&nbsp;</td>
                <td>1991</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><a href="/consumption/manufacturing/reports/archive/ei/ei_2.html">Changes in Energy Intensity in the Manufacturing Sector</a><br>
                  <em>Release Date: August 1998</em></td>
                <td>1996</td>
                <td>-</td>
                <td>-</td>
              </tr>
              <tr>
                <td><a href="/consumption/manufacturing/reports/archive/intensity/mecs1b.html">Changes in Energy Intensity</a><br>
                  1985-1991<br />
                  <em>Release Date: February 1980</em></td>
                <td>1980</td>
                <td>1979</td>
                <td>-<!--<a href="/emeu/recs/archive/arch_hist_pubs/hp_pdf/DOE%20EIA-0207-2.pdf" class="ico_pdf">PDF</a>---></td>
              </tr>
              <tr>
                <td><a href="/consumption/manufacturing/reports/archive/derived/mecs2j.html">Derived Annual Estimates of Manufacturing Energy Consumption</a><br>
                  1974&ndash;1988<br />
                  <em>Release Date: August 1998</em></td>
                <td>1998</td>
                <td>1974&ndash;1988</td>
                <td>-</td>
              </tr>
              <tr>
                <td><a href="/consumption/manufacturing/reports/archive/naics/naics8.html">Good-Bye, SIC  -  Hello, NAICS</a><br />
                  The North American Industry Classification System (NAICS)
                  of the United States, Canada, and Mexico <br />
                  <em>Release Date: February 2000</em></td>
                <td>1998</td>
                <td>1998</td>
                <td>-</td>
              </tr>
              <tr>
                <td><a href="/consumption/manufacturing/reports/archive/measures/mecs4.html">Calculation of MECS Energy Measures</a><br />
                  <em>Release Date: April 1997</em></td>
                <td>1991</td>
                <td>1974&ndash;1981</td>
                <td></td>
              </tr>
              <tr>
                <td><a href="/consumption/manufacturing/reports/archive/user_questionnaire/results.html">Summary of the MECS 2002 User Needs Questionnaire</a><br />
                  Release Date:June 2002</td>
                <td>2002</td>
                <td>2002</td>
                <td>-</td>
              </tr>
              <tr>
                <td><a href="/consumption/manufacturing/reports/archive/userneeds/mecs98un.html">1998 MECS User Need</a><br />
                    Mail/Electronic Survey Results <br />
                    Release Date:April 1, 1999</td>
                <td>1999</td>
                <td>1998</td>
                <td>-</td>
              </tr>
              <tr>
                <td><a href="/consumption/manufacturing/reports/archive/attributes/mecs_attributes.html">Selected Survey Attributes of the Manufacturing Energy Consumption Survey (MECS)</a><br />
                  1991&ndash;2006</td>
                <td>2009</td>
                <td>1991&ndash;2006</td>
                <td>-</td>
              </tr>
            </tbody>
          </table>
        </div>
        <?php /* /Main Column */ ?>
        <div class="side_col right">
          <?php include("../../includes/side_nav_manufacturing_data.inc"); ?>
        </div>
      </div>
  <?php /*/ Page/Body Content */ ?>
  <?php include("global/includes/eia_footer.inc"); ?>
</div>
<?php /*/ Outer Wrapper */ ?>
</body>
<script type="text/javascript" src="/global/scripts/JQuery/tablesorter/jquery.tablesorter.min.js"></script>
<script type="text/javascript">
  $(function() {
    $("#tablesorter-demo").tablesorter({sortList:[[1,0]], widgets: ['zebra']});
    $("#options").tablesorter({sortList: [[0,0]], headers: { 3:{sorter: false}, 4:{sorter: false}}});
  });
</script>
</html>