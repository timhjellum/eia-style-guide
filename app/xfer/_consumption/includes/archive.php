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