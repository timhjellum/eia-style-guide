<?php
$pageTitle = "RECS Archive";
$locale = 'data';
$L2Title = "Residential Energy Consumption Survey (RECS)";

$page['year'] = 'Previous';

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
<?php  if(!isset($no_titling)) include "global/includes/titling.inc"; ?></head>
<body>
<div id="outerX"> 
  <?php /* Outer Wrapper */ ?>
  <?php include ('global/includes/eia_header.inc') ; ?>
      <?php include ('../../includes/subnav_consumption_recs.inc') ; ?>
      <?php /* Page/Body Content */ ?>
      <div class="pagecontent mr_temp2">
        <div class="main_col">
          <?php include ('includes/data_cycle_jump_menu.inc') ; ?>
          
          <h3>1990</h3>
          <ul>
            <li><a href="/consumption/residential/data/archive/pdf/DOE EIA-0314(90).pdf" class="ico_pdf">Housing Characteristics Tables</a></li>
            <li>Consumption &amp; Expenditures Tables
              <ul>
                <li><a href="/consumption/residential/data/archive/pdf/DOE%20EIA-0321(90).pdf" class="ico_pdf">National</a></li>
                <li><a href="/consumption/residential/data/archive/pdf/DOE%20EIA-0321(90)S.pdf" class="ico_pdf">Regional</a></li>
              </ul>
            </li>
            <li><a href="/consumption/archive/residential/data/recspubuse90/90publicuse.html">Microdata</a></li>
            <li><a href="/survey/#eia-457">Survey Forms</a></li>
          </ul>
          <h3>1987</h3>
          <ul>
            <li><a href="/consumption/residential/data/archive/pdf/DOE%20EIA-0314(87).pdf" class="ico_pdf"> Housing Characteristics Tables</a></li>
            <li>Consumption &amp; Expenditures Tables
              <ul>
                <li><a href="/consumption/residential/data/archive/pdf/DOE%20EIA-0321(87)-1.pdf" class="ico_pdf">National</a></li>
                <li><a href="/consumption/residential/data/archive/pdf/DOE%20EIA-0321(87)_2.pdf" class="ico_pdf">Regional</a></li>
              </ul>
            </li>
            <li><a href="/consumption/archive/residential/recspubuse87/87publicuse.html">Microdata</a></li>
            <li><a href="/survey/#eia-457">Survey Forms</a></li>
          </ul>
          <h3>1984</h3>
          <ul>
            <li><a href="/consumption/residential/data/archive/pdf/DOE%20EIA-0314(84).pdf" class="ico_pdf">Housing Characteristics Tables</a></li>
            <li>Consumption &amp; Expenditures Tables
              <ul>
                <li><a href="/consumption/residential/data/archive/pdf/DOE%20EIA-0321(84)-1.pdf" class="ico_pdf">National</a></li>
                <li><a href="/consumption/residential/data/archive/pdf/DOE%20EIA-0321(84)-2.pdf" class="ico_pdf">Regional</a></li>
              </ul>
            </li>
            <li><a href="/survey/#eia-457">Survey Forms</a> 1984/1985</li>
          </ul>
          <h3>1982</h3>
          <ul>
            <li><a href="/consumption/residential/data/archive/pdf/DOE%20EIA-0314(82).pdf" class="ico_pdf">Housing Characteristics Tables</a></li>
            <li>Consumption &amp; Expenditures Tables
              <ul>
                <li><a href="/consumption/residential/data/archive/pdf/DOE%20EIA-0321(82)-1.pdf" class="ico_pdf">National</a></li>
                <li><a href="/consumption/residential/data/archive/pdf/DOE%20EIA-0321(82)-2001.pdf" class="ico_pdf">Regional</a></li>
              </ul>
            </li>
            <li><a href="/survey/#eia-457">Survey Forms</a> 1982/1983</li>
          </ul>
          <h3>1981</h3>
          <ul>
            <li><a href="/consumption/residential/data/archive/pdf/DOE%20EIA-0314(81).pdf" class="ico_pdf">Housing Characteristics Tables</a></li>
            <li>Consumption &amp; Expenditures Tables
              <ul>
                <li><a href="/consumption/residential/data/archive/pdf/DOE%20EIA-0321(81)-1.pdf" class="ico_pdf">National</a></li>
                <li><a href="/consumption/residential/data/archive/pdf/DOE%20EIA-0321(81)-2.pdf" class="ico_pdf">Regional</a></li>
              </ul>
            </li>
            <li><a href="/survey/#eia-457">Survey Forms</a> 1981/1982</li>
          </ul>
          <h3>1980</h3>
          <ul>
            <li><a href="/consumption/residential/data/archive/pdf/DOE%20EIA-0314.pdf" class="ico_pdf">Housing Characteristics Tables</a></li>
            <li>Consumption &amp; Expenditures Tables
              <ul>
                <li><a href="/consumption/residential/data/archive/pdf/DOE%20EIA-0321-1.pdf" class="ico_pdf">National</a></li>
                <li><a href="/consumption/residential/data/archive/pdf/DOE%20EIA-0321-2.pdf" class="ico_pdf">Regional</a></li>
              </ul>
            </li>
            <li><a href="/survey/#eia-457">Survey Forms</a> 1980/1981</li>
          </ul>
          <h3>1979</h3>
          <ul>
            <li>Housing Characteristics Tables <strong>not available</strong></li>
            <li>Consumption &amp; Expenditures Tables
              <ul>
                <li><a href="/consumption/residential/data/archive/pdf/DOE%20EIA-0262-1.pdf" class="ico_pdf">National</a></li>
                <li><a href="/consumption/residential/data/archive/pdf/DOE%20EIA-0262-2.pdf" class="ico_pdf">Regional</a></li>
              </ul>
            </li>
            <li>Survey Forms <strong>not available</strong></li>
          </ul>
          
          <h3>Historical Trends</h3>
          <table class="basic_table width=100%">
            <thead>
              <tr>
                <th width="88">Total</th>
                <th width="88">Electricity</th>
                <th width="88">LPG</th>
                <th width="88">Natural gas</th>
                <th>Fuel oil/kerosene</th>
              </tr></thead>
            <tbody>
              <tr>
                <td><a href="historical/total/total_html/total2001.html" >2001</a></td>
                <td><a href="historical/electricity/electricity_html/elec2001.html" >2001</a></td>
                <td><a href="historical/lpg/lpg_html/lpg2001.html">2001</a></td>
                <td><a href="historical/naturalgas/gas_html/natgas2001.html">2001</a></td>
                <td><a href="historical/fueloil_kerosene/fueloil_html/oil2001.html">2001</a>&nbsp; <a href="historical/fueloil_kerosene/fueloil_pdf/oil2001.pdf" class="ico_pdf"></a><a href="historical/fueloil_kerosene/fueloil_xls/oil2001.xls" class="ico_xls"></a></td>
              </tr>
              <tr>
                <td><a href="historical/total/total_html/total1997.html">1997</a></td>
                <td><a href="historical/electricity/electricity_html/elec1997.html">1997</a></td>
                <td><a href="historical/lpg/lpg_html/lpg1997.html">1997</a></td>
                <td><a href="historical/naturalgas/gas_html/natgas1997.html">1997</a></td>
                <td width="144"><a href="historical/fueloil_kerosene/fueloil_html/oil1997.html">1997</a>&nbsp; <a href="historical/fueloil_kerosene/fueloil_pdf/oil1997.pdf" class="ico_pdf"></a><a href="historical/fueloil_kerosene/fueloil_xls/oil1997.xls" class="ico_xls"></a></td>
              </tr>
              <tr>
                <td><a href="historical/total/total_html/total1993.html">1993</a></td>
                <td><a href="historical/electricity/electricity_html/elec1993.html">1993</a></td>
                <td><a href="historical/lpg/lpg_html/lpg1993.html">1993</a></td>
                <td><a href="historical/naturalgas/gas_html/natgas1993.html">1993</a></td>
                <td><a href="historical/fueloil_kerosene/fueloil_html/oil1993.html">1993</a>&nbsp; <a href="historical/fueloil_kerosene/fueloil_pdf/oil1993.pdf" class="ico_pdf"></a><a href="historical/fueloil_kerosene/fueloil_xls/oil1993.xls" class="ico_xls"></a></td>
              </tr>
              <tr>
                <td><a href="historical/total/total_html/total1990.html">1990</a></td>
                <td><a href="historical/electricity/electricity_html/elec1990.html">1990</a></td>
                <td><a href="historical/lpg/lpg_html/lpg1990.html">1990</a></td>
                <td><a href="historical/naturalgas/gas_html/natgas1990.html">1990</a></td>
                <td><a href="historical/fueloil_kerosene/fueloil_html/oil1990.html">1990</a>&nbsp; <a href="historical/fueloil_kerosene/fueloil_pdf/oil1990.pdf" class="ico_pdf"></a><a href="historical/fueloil_kerosene/fueloil_xls/oil1990.xls" class="ico_xls"></a></td>
              </tr>
              <tr>
                <td><a href="historical/total/total_html/total1987.html">1987</a></td>
                <td><a href="historical/electricity/electricity_html/elec1987.html">1987</a></td>
                <td><a href="historical/lpg/lpg_html/lpg1987.html">1987</a></td>
                <td><a href="historical/naturalgas/gas_html/natgas1987.html">1987</a></td>
                <td><a href="historical/fueloil_kerosene/fueloil_html/oil1987.html">1987</a>&nbsp; <a href="historical/fueloil_kerosene/fueloil_pdf/oil1987.pdf" class="ico_pdf"></a><a href="historical/fueloil_kerosene/fueloil_xls/oil1987.xls" class="ico_xls"></a></td>
              </tr>
              <tr>
                <td><a href="historical/total/total_html/total1984.html">1984</a></td>
                <td><a href="historical/electricity/electricity_html/elec1984.html">1984</a></td>
                <td><a href="historical/lpg/lpg_html/lpg1984.html">1984</a></td>
                <td><a href="historical/naturalgas/gas_html/natgas1984.html">1984</a></td>
                <td><a href="historical/fueloil_kerosene/fueloil_html/oil1984.html">1984</a>&nbsp; <a href="historical/fueloil_kerosene/fueloil_pdf/oil1984.pdf" class="ico_pdf"></a><a href="historical/fueloil_kerosene/fueloil_xls/oil1984.xls" class="ico_xls"></a></td>
              </tr>
              <tr>
                <td><a href="historical/total/total_html/total1982.html">1982</a></td>
                <td><a href="historical/electricity/electricity_html/elec1982.html">1982</a></td>
                <td><a href="historical/lpg/lpg_html/lpg1982.html">1982</a></td>
                <td><a href="historical/naturalgas/gas_html/natgas1982.html">1982</a></td>
                <td><a href="historical/fueloil_kerosene/fueloil_html/oil1982.html">1982</a>&nbsp; <a href="historical/fueloil_kerosene/fueloil_pdf/oil1982.pdf" class="ico_pdf"></a><a href="historical/fueloil_kerosene/fueloil_xls/oil1982.xls" class="ico_xls"></a></td>
              </tr>
              <tr>
                <td><a href="historical/total/total_html/total1981.html">1981</a></td>
                <td><a href="historical/electricity/electricity_html/elec1981.html">1981</a></td>
                <td><a href="historical/lpg/lpg_html/lpg1981.html">1981</a></td>
                <td><a href="historical/naturalgas/gas_html/natgas1981.html">1981</a></td>
                <td><a href="historical/fueloil_kerosene/fueloil_html/oil1981.html">1981</a>&nbsp; <a href="historical/fueloil_kerosene/fueloil_pdf/oil1981.pdf" class="ico_pdf"></a><a href="historical/fueloil_kerosene/fueloil_xls/oil1981.xls" class="ico_xls"></a></td>
              </tr>
              <tr>
                <td><a href="historical/total/total_html/total1980.html">1980</a></td>
                <td><a href="historical/electricity/electricity_html/elec1980.html">1980</a></td>
                <td><a href="historical/lpg/lpg_html/lpg1980.html">1980</a></td>
                <td><a href="historical/naturalgas/gas_html/natgas1980.html">1980</a></td>
                <td><a href="historical/fueloil_kerosene/fueloil_html/oil1980.html">1980</a>&nbsp;<a href="historical/fueloil_kerosene/fueloil_pdf/oil1980.pdf" class="ico_pdf"></a><a href="historical/fueloil_kerosene/fueloil_xls/oil1980.xls" class="ico_xls"></a></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="side_col right">
          <?php include ('../../includes/side_nav_residential_data.inc') ; ?>
        </div>
      </div>
      <?php /*/ Page/Body Content */ ?>
      <?php include ('global/includes/eia_footer.inc') ; ?>
</div>
<?php /*/ Outer Wrapper */ ?>
</body>
</html>