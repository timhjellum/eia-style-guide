<?php
$pageTitle = "CBECS Archive";
$locale = 'overview';
$L2Title = "Commercial Buildings Energy Consumption Survey (CBECS)";
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
<?php  if(!isset($no_titling)) include "global/includes/titling.inc"; ?></head>
<body>
<div id="outerX">
<?php /* Outer Wrapper */ ?>
<?php include ('global/includes/eia_header.inc') ; ?>
<?php include ('consumption/includes/subnav_consumption_cbecs.inc') ; ?>
<?php /* Page/Body Content */ ?>
<div class="pagecontent mr_temp2">
  <div class="main_col"> 
    <?php /*cfinclude template="includes/data_cycle_jump_menu.cfm"*/ ?>
    <h1>Publications &amp; Reports</h1>
    <table width="100%" class="tablesorter basic_table" id="tablesorter-demo">
      <caption>
      (Click on table headings to sort)
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
		    <td><strong><a href="/consumption/commercial/reports/2024/covid_education/">Energy-Related Changes in Education Buildings Following the COVID-19 Pandemic </a></strong><br />
		      <em>Release date: December 2024</em></td>
		    <td>2024</td>
		    <td>n.a.</td>
		    <td>---</td>
	      </tr>
		  <tr>
		    <td><strong><a href="/consumption/commercial/reports/2024/covid/">Energy-Related Changes in Office Buildings Following the COVID-19 Pandemic</a></strong><br />
            <em>Release date: July 2024</em></td>
		    <td>2024</td>
		    <td>n.a.</td>
		    <td>---</td>
	      </tr>
		  <tr>
		    <td><strong><a href="/consumption/commercial/pba/">Building Type Reports</a></strong><br />
            <em>Release date: July 2023</em></td>
		    <td>2023</td>
		    <td>2018</td>
		    <td>---</td>
	      </tr>
		  <tr>
		    <td><strong>2018 CBECS Webinar: Highlights and Methods</strong><br />
            <em>Release date: April 2023</em></td>
		    <td>2023</td>
		    <td>2018</td>
		    <td><a href="/consumption/commercial/pdf/2018 CBECS webinar.pdf" class="ico_pdf right">PDF</a><br />
	        &nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.youtube.com/watch?v=U8Xrmvl0W9g">Video</a></td>
	      </tr>
		  <tr>
          <td><strong><a href="/consumption/commercial/data/2018/index.php?view=consumption">2018 Commercial Buildings Energy Consumption Survey: Consumption and Expenditures Highlights</a></strong><br />
            <em>Revised date: December 2022</em></td>
          <td>2022</td>
          <td>2018</td>
          <td><a href="/consumption/commercial/data/2018/pdf/CBECS%202018%20CE%20Release%202%20Flipbook.pdf" class="ico_pdf right">PDF</a><br />
			<a href="/consumption/commercial/data/2018/ppt/CBECS%202018%20CE%20Release%202%20Flipbook.pptx" class="ico_ppt right">PPTX</a></td>
        </tr>
        <tr>
          <td><strong><a href="/consumption/commercial/data/2018/index.php?view=characteristics">2018 Commercial Buildings Energy Consumption Survey: Building Characteristics Highlights</a></strong><br />
            <em>Revised date: September 2022</em></td>
          <td>2022</td>
          <td>2018</td>
          <td><a href="/consumption/commercial/data/2018/pdf/CBECS_2018_Building_Characteristics_Flipbook.pdf" class="ico_pdf right">PDF</a><br />
            <a href="/consumption/commercial/data/2018/ppt/CBECS_2018_Building_Characteristics_Flipbook.pptx" class="ico_ppt right">PPTX</a></td>
        </tr>
        <tr>
	        <td><strong><a href="/consumption/commercial/reports/2012/lighting/">Trends in Lighting in Commercial Buildings</a></strong><br />
            <em>Release date: May 2017</em></td>
	        <td>2017</td>
	        <td>2012</td>
	        <td>---</td>
          </tr>
        <tr>
          <td><strong><a href="/consumption/commercial/reports/2018/pilot/">2018 CBECS Data Center Pilot Results</a></strong><br />
            <em>Release date: May 2021</em></td>
          <td>2021</td>
          <td>2018</td>
          <td>---</td>
        </tr>
        <tr>
          <td><strong><a href="/consumption/commercial/reports/2012/water/">2012 Commercial Buildings Energy Consumption Survey: Water Consumption in Large Buildings Summary</a></strong><br />
            <em>Release date: February  2017</em></td>
          <td>2017</td>
          <td>2012</td>
          <td>---</td>
        </tr>
        <tr>
          <td><strong><a href="/consumption/commercial/reports/2012/energyusage/">2012 Commercial Buildings Energy Consumption Survey: Energy Usage Summary</a></strong><br />
            <em>Release date: March  2016</em></td>
          <td>2016</td>
          <td>2012</td>
          <td>---</td>
        </tr>
        <tr>
          <td><strong><a href="/consumption/commercial/reports/2012/buildstock/">A Look at the U.S. Commercial Building Stock: Results from EIA's 2012 Commercial Buildings Energy Consumption Survey (CBECS)</a></strong><br />
            <em>Release date:  March 2015</em></td>
          <td>2015</td>
          <td>2012</td>
          <td>---</td>
        </tr>
        <tr>
          <td><strong><a href="/consumption/commercial/reports/2007/large-hospital.php">Large Hospital Buildings in the United States in 2007 </a></strong><br />
            <em>Release date: August 2012</em></td>
          <td>2012</td>
          <td>2007</td>
          <td>---</td>
        </tr>
        <tr>
          <td><strong><a href="cbecs/cbecs2003/officereport/office1.html">Office Buildings</a></strong><br>
            <em>Release date:September 2010</em></td>
          <td>2010</td>
          <td>2003</td>
          <td><a href="/consumption/commercial/archive/cbecs/cbecs2003/officereport/office_print.pdf" class="ico_pdf right">PDF</a></td>
        </tr>
        <tr>
          <td><strong><a href="/consumption/commercial/archive/cbecs/cbecs2003/lighting/lighting1.html">Lighting in Commercial Buildings</a></strong><br>
            <em>Release date: April 2009</em></td>
          <td>2009</td>
          <td>2003</td>
          <td><a href="/consumption/commercial/archive/cbecs/cbecs2003/lighting/pdf/lighting_print.pdf" class="ico_pdf right">PDF</a></td>
        </tr>
        <tr>
          <td><strong><a href="/consumption/commercial/archive/cbecs/cbecs2003/overview1.html">Overview of Commercial Buildings, 2003</a></strong><br>
            <em>Release date: December 2008</em></td>
          <td>2008</td>
          <td>2003</td>
          <td><a href="/consumption/commercial/archive/cbecs/cbecs2003/overview.pdf" class="ico_pdf right">PDF</a></td>
        </tr>
        <tr>
          <td><strong><a href="/consumption/commercial/archive/cbecs/pba99/intro.html">A Look at Building Activities in the 1999 CBECS</a></strong><br>
            <em>Release date: July 2002</em></td>
          <td>2002</td>
          <td>1999</td>
          <td>---</td>
        </tr>
        <tr>
          <td><strong><a href="/consumption/commercial/archive/cbecs/char99/intro.html">1999 Commercial Buildings Characteristics</a></strong><br>
            <em>Release date: May 2002</em></td>
          <td>2002</td>
          <td>1999</td>
          <td>---</a></td>
        </tr>
        <tr>
          <td><strong> <a href="/consumption/commercial/archive/cbecs/consumptionbriefs/cbecs_trends/main_menu.html">Trends in the Commercial Buildings Sector</a></strong><br>
            <em>Release date: January 2000</em></td>
          <td>2000</td>
          <td>1979-1999</td>
          <td>---</a></td>
        </tr>
        <tr>
          <td><strong><a href="/consumption/commercial/archive/cbecs/pc_copier/pccopier99.html">Computers and Photocopiers in Commercial Buildings</a></strong><br>
            <em>Release date: August 2002</em></td>
          <td>2002</td>
          <td>1992-1999</td>
          <td>---</td>
        </tr>
        <tr>
          <td><strong><a href="/consumption/commercial/archive/cbecs/lit-type.html">At Home and At Work: What Types of Lights Are We Using?</a></strong><br>
            <em>Release date: January 1998</em></td>
          <td>1998</td>
          <td>1993</td>
          <td>---</td>
        </tr>
        <tr>
          <td><strong><a href="/consumption/commercial/archive/cbecs/consumptionbriefs/pcsterminals.html">Personal Computers and Computer Terminals
            in Commercial Buildings </a></strong><br>
            <em>Release date: April 1999</em></td>
          <td>1999</td>
          <td>1995</td>
          <td>---</td>
        </tr>
        <tr>
        <tr>
          <td><strong><a href="/consumption/commercial/archive/cbecs/consumptionbriefs/pbawebsite/contents.htm">A Look at Principal Building Activities in the 1995 CBECS</a></strong><br>
            <em>Release date: September 2000</em></td>
          <td>2000</td>
          <td>1995</td>
          <td>---</td>
        </tr>
        <tr>
          <td><strong><a href="/consumption/commercial/archive/cbecs/Squareft/efecsqt1.html">Effective Occupied and Vacant Square Footage
            in Commercial Buildings in 1992</a></strong><br>
            <em>Release date: 1996</em></td>
          <td>1996</td>
          <td>1992</td>
          <td>---</td>
        </tr>
        <tr>
          <td><strong><a href="/consumption/commercial/archive/cbecs/cbecs1d.html">1992 Energy End-Use Intensities</a></strong><br>
            <em>Release date: February 1995</em></td>
          <td>1995</td>
          <td>1992</td>
          <td>---</td>
        </tr>
        <tr>
          <td><strong><a href="/consumption/commercial/archive/cbecs/cbecs1c.html">1989 Energy End-Use Intensities</a></strong><br>
            <em>Release date: September 1994</em></td>
          <td>1994</td>
          <td>1989</td>
          <td><a href="/consumption/commercial/archive/pubs/0555942.pdf" class="ico_pdf">PDF</a></td>
        </tr>
        <tr>
          <td><strong><a href="/consumption/commercial/archive/cbecs/cbecs1g.html">Assessment of Energy Use in Multibuliding Facilities</a></strong><br>
            <em>Release date: August 1993</em></td>
          <td>1993</td>
          <td>1989</td>
          <td><a href="/consumption/commercial/archive/pubs/0555931.pdf" class="ico_pdf">PDF</a></td>
        </tr>
        <tr>
          <td><strong><a href="/consumption/commercial/archive/cbecs/cbecs1h.html">1993 Federal Buildings Supplemental Survey (FBSS)</a></strong><br>
            <em>Release date: November 1995</em></td>
          <td>1995</td>
          <td>1993</td>
          <td><a href="/consumption/commercial/archive/pubs/emeu9502.pdf" class="ico_pdf right">PDF</a></td>
        </tr>
        <tr>
          <td><strong><a href="/consumption/commercial/archive/cbecs/pubfbss.html">Microdata Files for the 1993 <acronym title="Federal Buildings Supplemental Survey">FBSS</acronym></a></strong><br>
            <em>Release date: November 1995</em></td>
          <td>1995</td>
          <td>1993</td>
          <td>---</td>
        </tr>
        <tr>
          <td><strong><a href="/consumption/commercial/archive/cbecs/cbecs1e.html">Lighting in Commercial Buildings</a></strong><br />
            <em>Release date: March 1992</em></td>
          <td>1992</td>
          <td>1986</td>
          <td><a href="/consumption/commercial/archive/pubs/0555921.pdf" class="ico_pdf right">PDF</a></td>
        </tr>
        <tr>
          <td><strong><a href="/consumption/commercial/archive/cbecs/cbecs1f.html">Buildings and Energy in the 1980's</a></strong><br />
            <em>Release date: June 1995</em></td>
          <td>1995</td>
          <td>1979-1989</td>
          <td><a href="/consumption/commercial/archive/pubs/0555951.pdf" class="ico_pdf right">PDF</a></td>
        <tr>
          <td><a href="/consumption/commercial/archive/cbecs/report_1995.html"><strong>A Look at Commercial Buildings in 1995</strong></a><br />
            <em>Release date: October 1998</em></td>
          <td>1998</td>
          <td>1995</td>
          <td><a href="/consumption/commercial/archive/pubs/062595.pdf" class="ico_pdf right">PDF</a></td>
        </tr>
        <tr>
          <td><strong><a href="/consumption/commercial/archive/cbecs/cbecs1a.html">1992 Buildings Characteristics</a></strong><br />
            Release date:April 1994</td>
          <td>1994</td>
          <td>1992</td>
          <td><a href="/consumption/commercial/archive/pubs/024692.pdf" class="ico_pdf right">PDF</a></td>
        </tr>
        <tr>
          <td><strong><a href="/consumption/commercial/reports/2007/hospital-water-data-collection.cfm">Water Data Collection</a></strong><br />
            <em>Release date: August 2012</em></td>
          <td>2012</td>
          <td>2007</td>
          <td>---</td>
        </tr>
        <tr>
          <td><strong>User-Needs Study for the 1992 CBECS</strong><br />
            <em>Release date: September 1992</em></td>
          <td>1992</td>
          <td>1992</td>
          <td><a href="/consumption/commercial/archive/cbecs/archive/arch_hist_pubs/cbecs_pdf/DOE%20EIA-0555(92)-4.pdf" class="ico_pdf">PDF</a></td>
        </tr>
        <tr>
          <td><strong>1979 Building Characteristics</strong><br />
            <em>Release date: March 1981</em></td>
          <td>1981</td>
          <td>1979</td>
          <td><a href="/consumption/commercial/archive/cbecs/archive/arch_hist_pubs/cbecs_pdf/DOE%20EIA-0246.pdf" class="ico_pdf right">PDF</a></td>
        </tr>
        <tr>
          <td><strong>1979 Fuel Characteristics and Conservation Practices</strong><br />
            <em>Release date: June 1981</em></td>
          <td>1981</td>
          <td>1979</td>
          <td><a href="/consumption/commercial/archive/cbecs/archive/arch_hist_pubs/cbecs_pdf/DOE%20EIA-0278.pdf" class="ico_pdf right">PDF</a></td>
        </tr>
        <tr>
          <td><strong>1983 Characteristics of Commercial Buildings</strong><br />
            <em>Release date: July 1985</em></td>
          <td>1985</td>
          <td>1983</td>
          <td><a href="/consumption/commercial/archive/cbecs/archive/arch_hist_pubs/cbecs_pdf/DOE%20EIA-0246(83).pdf" class="ico_pdf right">PDF</a></td>
        </tr>
        <tr>
          <td><strong>1986 Characteristics of Commercial Buildings</strong><br />
            <em>Release date: September 1988</em></td>
          <td>1988</td>
          <td>1986</td>
          <td><a href="/consumption/commercial/archive/cbecs/archive/arch_hist_pubs/cbecs_pdf/DOE%20EIA-0246(86).pdf" class="ico_pdf">PDF</a></td>
        </tr>
        <tr>
          <td><strong>1989 Commercial Buildings Characteristics</strong><br />
            <em>Release date: June 1991</em></td>
          <td>1991</td>
          <td>1989</td>
          <td><a href="/consumption/commercial/archive/cbecs/archive/arch_hist_pubs/cbecs_pdf/DOE%20EIA-0246(89).pdf" class="ico_pdf">PDF</a></td>
        </tr>
        <tr>
          <td><strong>1979 Consumption and Expenditures, Part 1: Natural Gas and Electricity</strong><br />
            <em>Release date: March 1983</em></td>
          <td>1983</td>
          <td>1979</td>
          <td><a href="/consumption/commercial/archive/cbecs/archive/arch_hist_pubs/cbecs_pdf/DOE%20EIA-0318-1.pdf" class="ico_pdf">PDF</a></td>
        </tr>
        <tr>
          <td><strong>1979 Consumption and Expenditures, Part 2: Steam, Fuel Oil, LPG, and All Fuels</strong><br />
            <em>Release date: December 1983</em></td>
          <td>1983</td>
          <td>1979</td>
          <td><a href="/consumption/commercial/archive/cbecs/archive/arch_hist_pubs/cbecs_pdf/DOE%20EIA-0318(79)2.pdf" class="ico_pdf">PDF</a></td>
        </tr>
        <tr>
          <td><strong>1983 Commercial Buildings Consumption and Expenditures</strong><br />
            <em>Release date: September 1986</em></td>
          <td>1986</td>
          <td>1983</td>
          <td><a href="/consumption/commercial/archive/cbecs/archive/arch_hist_pubs/cbecs_pdf/DOE%20EIA-0318(83).pdf" class="ico_pdf">PDF</a></td>
        </tr>
        <tr>
          <td><strong>1986 Commercial Buildings Consumption and Expenditures</strong><br />
            <em>Release date: May 1989</em></td>
          <td>1989</td>
          <td>1986</td>
          <td><a href="/consumption/commercial/archive/cbecs/archive/arch_hist_pubs/cbecs_pdf/DOE%20EIA-0318(86).pdf" class="ico_pdf">PDF</a></td>
        </tr>
        <tr>
          <td><strong>1989 Commercial Buildings Consumption and Expenditures</strong><br />
            <em>Release date: April 1992</em></td>
          <td>1992</td>
          <td>1989</td>
          <td><a href="/consumption/commercial/archive/cbecs/archive/arch_hist_pubs/cbecs_pdf/DOE%20EIA-0318(89).pdf" class="ico_pdf">PDF</a></td>
        </tr>
        <tr>
          <td><strong><a href="/consumption/commercial/archive/cbecs/cbecs1b.html">1992 Consumption &amp; Expenditures</a></strong><br />
            <em>Release date: April 1995</em></td>
          <td>1995</td>
          <td>1992</td>
          <td><a href="/consumption/commercial/archive/pubs/031892.pdf" class="ico_pdf">PDF</a></td>
        </tr>
        <?php /*tr>
          <td><strong>_TITLE_</strong><br />
            <em>Release date: MONTH YYYY</em></td>
          <td>YYYY</td>
          <td>YYYY</td>
          <td><a href="XXXXXXXXX" class="ico_pdf">PDF</a></td>
        </tr>
        <tr>
          <td><strong>_TITLE_</strong><br />
            <em>Release date: MONTH YYYY</em></td>
          <td>YYYY</td>
          <td>YYYY</td>
          <td><a href="XXXXXXXXX" class="ico_pdf">PDF</a></td>
        </tr>
        <tr>
          <td><strong>_TITLE_</strong><br />
            <em>Release date: MONTH YYYY</em></td>
          <td>YYYY</td>
          <td>YYYY</td>
          <td><a href="XXXXXXXXX" class="ico_pdf">PDF</a></td>
        </tr*/ ?>
      </tbody>
    </table>
    <?php include ('../../includes/cbecs_survey_manager_contact_info.inc') ; ?>
  </div>
  <div class="side_col right">
    <?php include ('consumption/commercial/includes/side_nav_commercial_data.inc') ; ?>
  </div>
</div>
<?php /*/ Page/Body Content */ ?>
<?php include ('global/includes/eia_footer.inc') ; ?>
</div>
<?php /*/ Outer Wrapper */ ?>
</body>
<script type="text/javascript" src="/global/scripts/JQuery/tablesorter/jquery.tablesorter.min.js"></script>
<script type="text/javascript">
	$(function() {		
		$("#tablesorter-demo").tablesorter({sortList:[[1,1]], widgets: ['zebra']});
		$("#options").tablesorter({sortList: [[0,0]], headers: { 3:{sorter: false}, 4:{sorter: false}}});
	});	
	</script>
</html>