<?php
$pageTitle = "RECS Archive";
$locale = 'overview';

$page['year'] = 'Archive';

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
  <link rel="stylesheet" href="/global/scripts/JQuery/tablesorter/themes/blue/eia_style.css" type="text/css" media="print, projection, screen" />
<?php  if(!isset($no_titling)) include "global/includes/titling.inc"; ?></head><body>
<div id="outerX"> 
  <?php /* Outer Wrapper */ ?>
  <?php include ('global/includes/eia_header.inc') ; ?>
      
      <?php /* Page/Body Content */ ?>
      <div class="pagecontent mr_temp2">
        <div class="main_col"> 
          <table width="630" cellpadding="2" cellspacing="0" bordercolor="#FFFFFF">
            <tbody>
              <tr align="left">
                <td width="3"></td>
                <td valign="top" align="left" width="150" bgcolor="#e6e6e6"><a  name="top" id="top"></a> <b>
                  <p><a    href="/consumption/residential/"><font size="2">Return 
                    to: Residential Home Page</font></a><font size="2">&nbsp;</font></p>
                  </b>
                  <p><b><font size="2">Changes in the 1997 RECS:</font></b></p>
                  <p><font face="Arial" size="-1">&nbsp; <a 
      href="#housing_type">Housing Unit Type</a></font></p>
                  <p><font face="Arial" size="-1">&nbsp; <a 
      href="#household_mem">Per Household Member</a></font></p>
                  <p><font face="Arial" size="-1">&nbsp; <a 
      href="#bldg_increase">Per Building Increase</a></font></p></td>
                <td width="10"></td>
                <td width="480" valign="top" bgcolor="#ffffff"><h3>Residential Energy Consumption 
                  and Expenditures per Household Member and per Building </h3>
                  <p  align="justify"><br />
                    <font face="Arial" size="2">In 1997, residential energy consumption was 123 million 
                      Btu per building, 101 million Btu per household and 39 million Btu per household 
                      member. The residential energy expenditures were $1,632 per building, $1,338 per household, and 
                      $517 per household member. </font></p>
                  <p  align="justify"> <font face="Arial" size="2"> The 1997 Residential Energy Consumption Survey (RECS) had 101.5 million households of which 73.7   million lived in single-family homes (73 percent), 21.4 million lived in multi-family 
                    units (21 percent), and 6.3 million lived in mobile homes (6 percent). </font></p>
                  </FONT> <a name="housing_type" id="housing_type">
                    <p><br />
                    </p>
                    <h4><font face="Arial"><b><i>Energy consumption and expenditures varied by housing 
                      unit type..... </i></b></font></h4>
                    </a>
                  <p  align="justify"> <font face="Arial" size="2"> The average Btu of energy consumed by single-family 
                    households was 115 million per building and per household, and 
                    42 million per household member. </font></p>
                  <p><font face="Arial" size="2"> The average Btu of energy consumed by households in multi-family 
                    units was 402 million per building, 60 million per household, and 
                    28 million per household member. </font></p>
                  <p><font face="Arial" size="2"> The average Btu of energy consumed by households in mobile 
                    homes was 79 million per building and per household, and 32 million 
                    per household member. </font></p>
                  </FONT>
                  <p><br />
                    <img src="figure1.gif" width="563" height="283" alt="Figure 1.  Average Energy Consumption" />
                    </CENTER>
                  </p>
                  <p  align="justify"><br />
                    <font face="Arial" size="2">The average amount spent on all energy 
                      by single-family households was $1,492 per building and per household, 
                      and $546 per household member. </font></p>
                  <p  align="justify"> <font face="Arial" size="2"> The average amount spent on all energy 
                    by households in multi-family units was $5,692 per building, $848 per household, 
                    and $403 per household member. </font></p>
                  <p  align="justify"><font face="Arial" size="2"> The average amount spent on all energy 
                    by households in mobile homes was $1,206 per building and per household, and $478 
                    per household member. </font></p>
                  <p><br />
                    <img src="figure2.gif" width="555" height="297" alt="Figure 2.  Average Energy Expenditures" /></p>
                  <a name="household_mem" id="household_mem">
                    <p><br />
                    </p>
                    <h4><b><font face="Arial"> <i>Energy consumption and expenditures per household member decreases as the number of people in the household increases.....</i></font></b></h4>
                    </P>
                  </a>
                  <p  align="justify"> <font face="Arial" size="2">Based on household size, the average Btu of energy consumption per household member for a 1-person household was 75 million, 51 million for a 2-person household, 37 million for a 3-person household, 29 million for a 4-person household, 25 million for a 5-person  household, and 20 million for a 6-person or more household. </font></p>
                  <p><img src="figure3.gif" width="519" height="274" alt="Figure 3.  Average Energy Consumption per Household Member" /></p>
                  <p  align="justify"> <font face="Arial" size="2">Based on household size, the average energy costs per household member was $962 for a 1-person household, $673 for a 2-person household, $490 for a 3-person household, $393 for a 4-person household, $328 for 
                    a 5-person household, and $261 for 6 or more person households. </font></p>
                  <p><br />
                    <img src="figure4.gif" width="507" height="292" alt="Figure 4.  Average Energy Expenditures per Household Member" /></p>
                  <a name="bldg_increase" id="bldg_increase">
                    <p><br />
                    </p>
                    <h4> <font face="Arial" size="2"><i>Energy consumption and expenditures per building increases with the number of units in the building..... </i></font></h4>
                  </a>
                  </P>
                  <p  align="justify"> <font face="Arial" size="2"> The average Btu of energy consumption per building was 253 million for buildingw with 2 to 4 units, 367 million for 5 to 10 units, 605 million for 11 to 20 units, 1,612 million for 21 to 50 units, and 4,977 million for 51 units or more.</font></p>
                  <p><br />
                    <img src="figure5.gif" width="530" height="241" alt="Figure 5.  Average Energy Consumption per Building" /></p>
                  <p  align="justify"><br />
                    <font face="Arial" size="2"> The average amount spent on energy per  building was $3,063 for buildings with 2 to 4 units, $5,789 for 5 to 10 units, $10,512 for 11 to 20 units, $23,067 for 21 to 50 units, and $72,341 for 51 units or more. </font></p>
                  <p><br />
                    <img src="figure6.gif" width="551" height="276" alt="Figure 6.  Average Energy Expenditures per Building" /></p>
                  <p  align="justify"><br />
                    <font face="Arial" size="2">For detailed data, choose from the table listed 
                      below. This table presents pertinent information for average residential household 
                      data. These data are from the 1997 RECS and are the most recent residential household 
                      data currently available. </font></p>
                  <font face="Arial" size="2">
                  <p><a href="../../../consumption/residential/data/2001/html/table1a.html"> HTML Format </a> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<a href="../../../consumption/residential/data/2001/html/table1a.pdf"> PDF Format </a></p>
                  <p><a href="http://www.adobe.com/products/acrobat/readstep.html"> <img src="getacro(1).gif" width="88" height="31" alt="Adobe Acrobat Reader" /></a> &nbsp; <b>NOTE:&nbsp;&nbsp;</b> To View and/or Print PDF's (requires Adobe Acrobat Reader) -  
                    Download Acrobat Reader for viewing PDF files. </p>
                  <br />
                  <a  href="#top">Top</a>
                  <p><a   href="/consumption/residential/">Return to: 
                    Residential Home Page</a></p>
                  <font face="Arial" size="2">
                    <p>&nbsp;</p>
                  </font>
                  <div align="left"><font size="2" face="Arial, Helvetica, sans-serif"><a href="mailto:stephanie.battles@eia.doe.gov">Stephanie.Battles@eia.doe.gov</a></font></div>
                  <div align="left"><font size="2" face="Arial, Helvetica, sans-serif">Stephanie 
                    J. Battles </font></div>
                  <div align="left"><font size="2" face="Arial, Helvetica, sans-serif">Author </font></div>
                  <div align="left"><font size="2" face="Arial, Helvetica, sans-serif">Phone: 
                    (202) 586-7237 </font></div>
                  <div align="left"><font size="2" face="Arial, Helvetica, sans-serif">Fax: 
                    (202) 586-0018</font></div>
                  <p><font face="Arial" size="2"> Specific questions may be directed to: </font></p>
                  <p> Vicki Moorhead <br />
                    <a 
      href="mailto:vicki.moorhead@eia.doe.gov">mailto:vicki.moorhead@eia.doe.gov</a> <br />
                    Phone:&nbsp; (202) 586-1133 <br />
                    FAX:&nbsp; (202) 586-0018 </p>
                  <font face="Arial" size="2">&nbsp;</font>
                  <dl>
                    <div align="left">
                      <p align="left" bgcolor="#ffffff"><font color="#000066" size="-1" face="verdana, ms sans serif, arial"><a href="mailto:eileen.obrien@eia.doe.gov">Eileen M. O'Brien</a></font><br />
                        <font color="#000066" size="-1" face="verdana, ms sans serif, arial">RECS Survey Manager </font><br />
                        <font color="#000066" size="-1" face="verdana, ms sans serif, arial">Phone: (202)   586-1122<br />
                          Fax: (202) 586-0018 </font></p>
                      <dl>
                      </dl>
                    </div>
                  </dl>
                  <font face="Arial" size="2">
                    <p>&nbsp; </p>
                    <p> Release date:&nbsp; &nbsp;December 20, 2001 </p>
                    <p>
<!--                      <script language="JavaScript" type="text/javascript">
<!--
document.write("Page last modified on " + document.lastModified);
//
            </script> -->
                    </p>
                  </font></td>
              </tr>
            </tbody>
          </table>
          <hr />
          
          
        </div>

      </div>
      <?php /*/ Page/Body Content */ ?>
      <?php include ('global/includes/eia_footer.inc') ; ?>
</div>
</body>

</html>