<?php
$pageTitle = "RECS Archive";
$locale = 'overview';
$L2Title = "Residential Energy Consumption Survey (RECS)";

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
      <?php include ('../../../includes/subnav_consumption_recs.inc') ; ?>
      <?php /* Page/Body Content */ ?>
      <div class="pagecontent mr_temp2">
        <div class="main_col"> 
          <?php /*cfinclude template="includes/data_cycle_jump_menu.cfm"*/ ?>
          <h1>Archived Publications &amp; Reports</h1>
          
          <?php /*cfinclude template="archive_jump_menu.cfm"*/ ?>
          
          <table width="100%" class="tablesorter basic_table" id="tablesorter-demo">
            <caption>
            Special Reports (click on table headings to sort)
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
                <td><strong>Preliminary Conservation Tables from National Interim Energy Consumption Survey</strong><br>
                  <em>Release Date: August 1, 1979</em></td>
                <td>1979</td>
                <td>1979</td>
                <td><a href="/consumption/residential/archive/0193-P.pdf" class="ico_pdf">PDF</a></td>
              </tr>
              <tr>
                <td><strong>RECS Conservation</strong><br>
                  <em>Release Date: February 1980</em></td>
                <td>1980</td>
                <td>1979</td>
                <td><a href="/consumption/residential/archive/0207-3.pdf" class="ico_pdf">PDF</a></td>
              </tr>
              <tr>
                <td><strong>An Economic Evaluation of Energy Conservation &amp; Renewable Energy Tax Credits</strong><br>
                  <em>Release Date: 10/1985</em></td>
                <td>1985</td>
                <td>-</td>
                <td><a href="/consumption/residential/archive/SERVICE REPORT OCT 1985.pdf" class="ico_pdf">PDF</a></td>
              </tr>
              <tr>
                <td><strong>Residential Conservation Measures</strong><br>
                  <em>Release Date: July 1986</em></td>
                <td>1986</td>
                <td>1984</td>
                <td><a href="/consumption/residential/archive/SR-EEUD-86-01.pdf" class="ico_pdf">PDF</a></td>
              </tr>
              <tr>
                <td><strong>Weatherization Program Evaluation</strong><br>
                  <em>Release Date: August 20,1984</em></td>
                <td>1984</td>
                <td>1981</td>
                <td><a href="/consumption/residential/archive/SR-EEUD-84-1.pdf" class="ico_pdf">PDF</a></td>
              </tr>
              <tr>
                <td><strong>Measuring Energy Efficiency in the United States' Economy:A Beginning</strong><br>
                  <em>Release Date: October 1995</em></td>
                <td>1995</td>
                <td>1993</td>
                <td><a href="/consumption/residential/archive/DOE EIA-0555(95)-2.pdf" class="ico_pdf">PDF</a></td>
              </tr>
              <tr>
                <td><strong>Consumption Series - Residential Lighting: Use and Potential Savings</strong><br>
                  <em>Release Date: September 1996</em></td>
                <td>1996</td>
                <td>1993</td>
                <td><a href="/consumption/residential/archive/DOE EIA-0555(96) 2.pdf" class="ico_pdf">PDF</a></td>
              </tr>
              <tr>
                <td><strong>A Comparison of Measures by Consumption and Supply Surveys</strong><br>
                  <em>Release Date: 1987</em></td>
                <td>1987</td>
                <td>1987</td>
                <td><a href="/consumption/residential/archive/DOE EIA-0533.pdf" class="ico_pdf">PDF</a></td>
              </tr>
              <tr>
                <td><strong>Single-Family Households, Fuel Oil Inventories</strong><br>
                  <em>Release Date: December 1979</em></td>
                <td>1979</td>
                <td>1979</td>
                <td><a href="/consumption/residential/archive/0207-1.pdf" class="ico_pdf">PDF</a></td>
              </tr>
              <tr>
                <td><strong>Characteristics of the Housing Stock and Households</strong><br>
                  <em>Release Date: February 1980</em></td>
                <td>1980</td>
                <td>1979</td>
                <td><a href="/consumption/residential/archive/0207-2.pdf" class="ico_pdf">PDF</a></td>
              </tr>
              <tr>
                <td><strong>Exploring the Variability in Energy Consumption</strong><br>
                  <em>Release Date: July 1981</em></td>
                <td>1981</td>
                <td>1980</td>
                <td><a href="/consumption/residential/archive/0272.pdf" class="ico_pdf">PDF</a></td>
              </tr>
              <tr>
                <td><strong>Exploring the Variability in Energy Consumption, A Supplement</strong><br>
                  <em>Release Date: October 1981</em></td>
                <td>1981</td>
                <td>1980</td>
                <td><a href="pdf/DOE%20EIA-0272(S).pdf" class="ico_pdf">PDF</a></td>
              </tr>
              <tr>
                <td><strong>Regression Analysis of Energy Consumption by End Use</strong><br>
                  <em>Release Date: October 1983</em></td>
                <td>1983</td>
                <td>1980</td>
                <td><a href="/consumption/residential/archive/0431.pdf" class="ico_pdf">PDF</a></td>
              </tr>
              <tr>
                <td><strong>Consumption and Expenditures by End Use for 1978, 1980 and 1981</strong><br>
                  <em>Release Date: 1984</em></td>
                <td>1984</td>
                <td>1981</td>
                <td><a href="/consumption/residential/archive/0458.pdf" class="ico_pdf">PDF</a></td>
              </tr>
              <tr>
                <td><strong>Trends in Consumption and Expenditures, 1978-1984</strong><br>
                  <em>Release Date: 1987</em></td>
                <td>1987</td>
                <td>1984</td>
                <td><a href="/consumption/residential/archive/DOE EIA-0482.pdf" class="ico_pdf">PDF</a></td>
              </tr>
              <tr>
                <td><strong>User Needs Study for the 1993 RECS</strong><br>
                  <em>Release Date: 1993</em></td>
                <td>1993</td>
                <td>1993</td>
                <td><a href="/consumption/residential/archive/DOE EIA-0555(93)-2.pdf" class="ico_pdf">PDF</a></td>
              </tr>
              <tr>
                <td><strong>Sample Design for RECS</strong><br>
                  <em>Release Date: August 1994</em></td>
                <td>1994</td>
                <td>1993</td>
                <td><a href="/consumption/residential/archive/DOE EIA-0555(94)-1.pdf" class="ico_pdf">PDF</a></td>
              </tr>
              <tr>
                <td><strong>Quality Profile</strong><br>
                  <em>Release Date: March 1996</em></td>
                <td>1996</td>
                <td>1993</td>
                <td><a href="/consumption/residential/archive/DOE EIA-0555(96)-1.pdf" class="ico_pdf">PDF</a></td>
              </tr>
              <tr>
                <td><strong>Reducing Home Heating 
                  and Cooling Costs</strong><br />
                  <em>Release Date: July 1984</em></td>
                <td>1994</td>
                <td>1990</td>
                <td><a href="/consumption/residential/archive/emeu9401.pdf" class="ico_pdf">PDF</a></td>
              </tr>
              <tr>
                <td><strong>Buildings and Energy in the 1980's</strong><br />
                  <em>Release Date: June 1995</em></td>
                <td>1995</td>
                <td>1990</td>
                <td><a href="/consumption/residential/archive/DOE EIA-0555(95)-1.pdf" class="ico_pdf">PDF</a></td>
              </tr>
              
            </tbody>
          </table>
          <hr />
          
          <?php /*h3>Other Items</h3>
          <p><a href="/emeu/recs/census_map.html">Census 
            Map</a><br />
            <a href="/emeu/recs/climate_zone.html">US 
            Climate Zones</a></p*/ ?> 
          <?php /*h3>Special Topics - <a href="/consumption/residential/reports.cfm">Move to A&amp;P</a></h3>
          <h2><a name="st2004" id="st2004"></a>2004</h2>
          <p><a href="/emeu/recs/recs2001/insulation/insulation.html">Insulation</a> (2004)</p>
          <h2><a name="st2003" id="st2003"></a>2003</h2>
          <p><a href="/emeu/recs/ceilingfans/ceiling_fan.html">Ceiling Fans</a> (2003)</p>
          <h2><a name="st2001" id="st2001"></a>2001</h2>
          <p><a href="/emeu/recs/sqft-measure.html">Housing Unit Size</a> (2001)<br />
            <a href="/emeu/recs/fax-copiers-compare.html">Fax/Copier</a> (2001)<br />
            <a href="/emeu/recs/appliances/appliances.html">Appliances</a> (2001) <br />
            <a href="/emeu/consumptionbriefs/recs/heating_oil/heating_oil.html">Heating Oil</a> (2001)<br />
            <a href="/emeu/consumptionbriefs/recs/natgas/nat_gas_piece.html">Natural Gas</a> (2001) <br />
            <a href="/emeu/recs/cookingtrends/cooking.html">Cooking Trends</a> (2001) </p>
          <h2><a name="st2000" id="st2000"></a>2000</h2>
          <p><a href="/emeu/recs/recs97/recs022900.html">Fuel Oil Trends</a> (2000)<br />
            <a href="/emeu/consumptionbriefs/recs/thermostat_settings/thermostat.html">Thermostat Settings</a> (2000)<br />
            <a href="/emeu/consumptionbriefs/recs/actrends/recs_ac_trends.html">Air Conditioning Trends</a> (2000) </p>
          <h2><a name="st1997" id="st1997"></a>1997</h2>
          <p><a href="/emeu/recs/recs97/trends.html">Trend Analysis</a> (1997)<br />
            <a href="/emeu/recs/recs97_additions/recs_changes.html">Household Members and Buildings</a> (1997) <br />
            <a href="/emeu/recs/origin/origin_householder.html">Origin of Householder</a> (1997) <br />
            <a href="/emeu/consumptionbriefs/recs/aircond_use.html">Air Conditioning Facts</a> (1997) </p>
          <h2><a name="st1995" id="st1995"></a>1995</h2>
          <p><a href="/emeu/cbecs/lit-type.html">Lighting</a> (1995 CBECS) </p*/ ?> 
          
        </div>
        <div class="side_col right">
          <?php include ('../../../includes/side_nav_residential_data.inc') ; ?>
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
		$("#tablesorter-demo").tablesorter({sortList:[[1,0]], widgets: ['zebra']});
		$("#options").tablesorter({sortList: [[0,0]], headers: { 3:{sorter: false}, 4:{sorter: false}}});
	});	
	</script>
</html>