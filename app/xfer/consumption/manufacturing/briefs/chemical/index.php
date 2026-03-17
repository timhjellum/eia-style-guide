<?php
$pageTitle = "Energy Information Administration (EIA)- Manufacturing Energy Consumption Survey (MECS) Steel Analysis Brief";
$locale = 'ap';
$hct = 'y';
$page['year'] = '';
$hct = 'y';
$briefTopic = 'Chemical';
$L2Title = "Manufacturing Energy Consumption Survey (MECS)";
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
  <style media="all">
    .tab_highchart {
      width:616px;
    }
    .chartCaptionsContainer {
      margin-bottom:20px;
    }
  </style>
<?php  if(!isset($no_titling)) include "global/includes/titling.inc"; ?></head><body>
<div id="outerX"> 
  <?php /* Outer Wrapper */ ?>
  <?php include ('global/includes/eia_header.inc') ; ?>
      <?php include ('../../../includes/subnav_consumption_mecs.inc') ; ?>
      <?php /* Page/Body Content */ ?>
      <div class="pagecontent mr_temp3"> 
        <?php /* Main Column */ ?>
        <div class="main_col">
          <?php include ('../includes/briefs_jump_menu.inc') ; ?>
          <span class="ngwu_jump_menu do-not-print"><strong>JUMP TO:</strong> <a href="#introduction">Introduction</a> | <a href="#energy-consumption">Energy Consumption</a> | <a href="#energy-expenditures">Energy Expenditures</a> | <a href="#producer-prices-production">Producer Prices and Production</a> | <a href="#energy-intensity">Energy Intensity</a> | <a href="#energy-management-activities">Energy Management Activities</a> | <a href="#fuel-switching-capacity">Fuel Switching Capacity</a></span>
          <h2><a name="introduction" id="introduction"></a>Introduction</h2>
          <p><a name="fn1ref" id="fn1ref"></a>The chemical industries are a cornerstone of the U.S. economy, converting raw materials such as oil, natural gas, air, water, metals, and minerals into thousands of various products.  Chemicals are key materials for producing an extensive assortment of consumer goods.  They are also crucial materials in creating many resources that are essential inputs to the numerous industries and sectors of the U.S. economy.<sup><a href="#fn1text" class="footnote">1</a></sup></p>
          <p>The manufacturing sector is classified by the North American Industry Classification System (NAICS) of which the chemicals sub-sector is NAICS 325 and encompasses many different industries that have their own particular energy usage patterns.  As will be discussed in the energy intensity section, a few of the chemical-specific industries will be compared to the energy intensity in the chemicals sub-sector.</p>
          <p>The chemical industries are the second largest user of energy in the manufacturing sector.  Natural gas, liquefied petroleum gases (LPG), and natural gas liquids (NGL) are the major energy sources used in these industries.  Including fuel and feedstock use, the chemical industries account for about 29 percent of the total energy consumed in the manufacturing sector (<a href="#fig1chart">Figure 1</a>).</p>
          <?php /*img src="img/image002.gif" width="566" height="351" alt="Figure 1" /*/ ?>
          <a name="fig1chart" id="fig1chart"></a>
          <div class="fig1 tab_highchart"></div>
          <p>Since 1991 the chemical industries have steadily increased their total energy consumption by 1.4 quadrillion Btu (quads).  That constitutes a 28 percent increase of the total energy consumed by this sub-sector during the eleven year period (<a href="#fig2chart">Figure 2</a>).  Over half of the increase, 736 trillion Btu, occurred between 1994 and 1998. </p>
          <?php /*img src="img/image004.gif" width="533" height="238" alt="Figure 2" /*/ ?>
           <a name="fig2chart" id="fig2chart"></a>
          <div class="fig2 tab_highchart"></div>
          <p>As will be seen later, the rise in consumption coincides with an increase in the LPG used as a feedstock.  The increase in LPG usage was verified by comparing the MECS and the Economic Census - Manufacturing (EC-M) data which were collected for the same year, 2002.  No direct comparison could be made, however, for the 1991, 1994 or 1998 data, so further evaluation of the increase will be verified using the 2006 MECS data.</p>
          <h2><a name="energy-consumption" id="energy-consumption"></a>Energy Consumption</h2>
          <p><a name="fn2ref" id="fn2ref"></a>There are two types of energy use in the manufacturing sector; energy consumed for fuel and energy consumed for feedstock.  Energy consumed as a fuel includes all energy used for heat, power, and electricity generation, regardless of where the energy was produced.  Not included in fuel are electricity inputs from onsite cogeneration, nor generation from combustible fuels, because that energy has already been included as generating fuel.<sup><a href="#fn2text" class="footnote">2</a></sup></p>
          <p>Energy used as a feedstock, sometimes referred to as nonfuel energy use, is the energy used as a raw material for purposes other than for heat, power, and electricity generation.  For instance, in the nitrogenous fertilizer industry natural gas is used as a raw material to produce fertilizers.</p>
          <p><a name="fn3ref" id="fn3ref"></a><strong>Energy Consumed as a Fuel</strong> - The chemical industries used over 3.7 quadrillion Btu (quads) of energy as fuel in 2002.  'Other' fuels make the second largest share of fuels consumed, after natural gas in the chemical industries (<a href="#fig3chart">Figure 3</a>).  Roughly 43 percent of 'other' fuels are byproducts derived during the manufacturing processes.  Waste gas is the primary byproduct fuel consumed and accounts for 96 percent of the byproduct fuel used in the chemical industries.  Typically, waste gas is recovered and used to generate steam, preheat materials through heat exchangers, or supply heat to other plant processes.<sup><a href="#fn3text" class="footnote"></a>3</sup></p>
          <?php /*img src="img/image006.gif" width="556" height="369" alt="Figure 3" />
          <p>Source: Energy Information Administration, Manufacturing Energy Consumption Survey - Table 3.2: Fuel Consumption, 2002, http://www.eia.doe.gov/emeu/mecs/mecs2002/data02/shelltables.html</p*/ ?>
          <a name="fig3chart" id="fig3chart"></a>
          <div class="fig3 tab_highchart"></div>
          <p>The fuel consumption of natural gas in the chemical industries increased approximately 19 percent between 1991 and 1998.  However, the natural gas consumption decreased by a similar amount, 15 percent, during the four year period from 1998 to 2002.  During that same four year period, 1998 to 2002, the consumption of byproduct fuel increased by 14 percent (<a href="#fig4chart">Figure 4</a>).  This suggests that some chemical manufacturers' processes have become more flexible enabling them to use less natural gas, and additionally replacing some natural gas with more economical energy sources such as byproduct fuel/waste.</p>
          <?php /*img src="img/image008.gif" width="552" height="284" alt="Figure 4" />
          <p>Sources: Energy Information Administration, Manufacturing Energy Consumption Survey - Table 3.2: Fuel Consumption, Table 3.5: Byproducts in Fuel Consumption, 1991, 1994, 1998, and 2002, http://www.eia.doe.gov/emeu/mecs/mecs2002/data02/shelltables.html</p*/ ?>
          <a name="fig4chart" id="fig4chart"></a>
          <div class="fig4 tab_highchart"></div>
          <p><strong>End Use of Fuel Consumption</strong> -  The Manufacturing Energy Consumption Survey (MECS) collects fuel consumption by end use for six major energy sources – electricity, natural gas, coal, LPG, diesel/distillate, and residual fuel oil.  However, byproduct fuels, particularly waste gas, are not included as one of the six major energy sources when collecting for end use.</p>
          <p>Typically natural gas is used in boilers, process heating equipment, and non-process use such as for heating, ventilation and air conditioning (HVAC).  In recent years, with the rising cost of natural gas, chemical manufacturers have looked towards waste gas to become a substitute for their natural gas consumption.  Though the MECS does not collect end uses for waste gas, a portion of what is shown as "not reported/not asked" in <a href="#fig5chart">Figure 5</a> is the waste gas used for heat and fuel purposes in numerous chemical processes.</p>
          <p>Although there has been little change to the various end uses reported in the manufacturing sector between 1998 and 2002, <a href="#fig5chart">Figure 5</a> suggests that chemical manufacturers are starting to substitute their natural gas use with less expensive energy sources such as waste gas. </p>
          <?php /*img src="img/image010.gif" width="538" height="291" alt="Figure 5" /*/ ?> 
          <a name="fig5chart" id="fig5chart"></a>
          <div class="fig5 tab_highchart"></div>
          <p><strong>Energy Used as a Feedstock</strong> - The chemical industries used over 3.7 quads of energy for feedstock use in 2002.  This accounts for approximately 46 percent of the energy used as a feedstock in the manufacturing sector (<a href="#fig6chart">Figure 6</a>).</p>
          <?php /*img src="img/image012.gif" width="528" height="365" alt="Figure 6" />
          <p>Source: Energy Information Administration, Manufacturing Energy Consumption Survey - Table 2.2: Nonfuel (Feedstock) Use of Combustible Energy, 2002, http://www.eia.doe.gov/emeu/mecs/mecs2002/data02/shelltables.html</p*/ ?>
          <a name="fig6chart" id="fig6chart"></a>
          <div class="fig6 tab_highchart"></div>
          <p>The two major energy sources used as feedstocks in the chemical industries are natural gas and the combination of liquefied petroleum gases (LPG) and natural gas liquids (NGL).  Natural gas and LPG and NGL account for about 96 percent of the total feedstock use in the chemical industries.  Furthermore, nearly all (99 percent) of the natural gas and LPG and NGL used as a feedstock in manufacturing are used in the chemical industries (<a href="#fig7chart">Figure 7</a>).</p>
          <?php /*img src="img/image014.gif" width="538" height="320" alt="Figure 7" />
          <p>Source: Energy Information Administration, Manufacturing Energy Consumption Survey - Table 2.2: Nonfuel (Feedstock) Use of Combustible Energy, 2002, http://www.eia.doe.gov/emeu/mecs/mecs2002/data02/shelltables.html</p*/ ?>
          <a name="fig7chart" id="fig7chart"></a>
          <div class="fig7 tab_highchart"></div>
          <p>Natural gas used as a feedstock in the chemical industries increased by about eight percent between 1994 and 1998.  However, the period between 1998 and 2002 natural gas used as a feedstock decreased by approximately 13 percent (<a href="#fig8chart">Figure 8</a>).  This decrease in the natural gas used as a feedstock can be attributed, in part, to the rising cost of natural gas.</p>
          <p><a href="#fig8chart">Figure 8</a> also illustrates that the use of LPG and NGL as a feedstock has increased significantly, around 94 percent, between 1994 and 2002.  The largest portion of the increase, roughly 70 percent, was between 1998 and 2002.  As previously mentioned, the increase was verified by comparing the MECS and the Economic Census - Manufacturing (EC-M) data which were collected for the same year, 2002, but no direct comparison could be made for the 1994 or 1998 data.  Further evaluation of the 70 percent increase will be verified using the 2006 MECS data.</p>
          <?php /*img src="img/image016.gif" width="508" height="328" alt="Figure 8" />
          <p>Sources: Energy Information Administration, Manufacturing Energy Consumption Survey – Table 2.2: Nonfuel (Feedstock) Use of Combustible Energy, 1994, 1998, and 2002, http://www.eia.doe.gov/emeu/mecs/mecs2002/data02/shelltables.html</p*/ ?>
          <a name="fig8chart" id="fig8chart"></a>
          <div class="fig8 tab_highchart"></div>
          <h2><a name="energy-expenditures" id="energy-expenditures"></a>Energy Expenditures</h2>
          <p>The total energy expenditures in the chemical industries were over 32 billion dollars in 2002, 92 percent coming from electricity, natural gas, and LPG and NGL (<a href="#fig9chart">Figure 9</a>).  LPG and NGL is the largest expenditure and accounts for roughly 48 percent of the total energy expenditures in these industries. At least partially, LPG and NGL account for such a large share of expenditures because they are the basic raw materials for creating plastics, one of the major products in chemical manufacturing.</p>
          <?php /*img src="img/image018.gif" width="566" height="319" alt="Figure 9" />
          <p>Source: Energy Information Administration, Manufacturing Energy Consumption Survey - Table 7.9: Expenditures for Purchased Energy Sources, 2002, http://www.eia.doe.gov/emeu/mecs/mecs2002/data02/shelltables.html</p*/ ?>
          <a name="fig9chart" id="fig9chart"></a>
          <div class="fig9 tab_highchart"></div>
          <p>The LPG and NGL expenditures increased by over seven billion dollars between 1998 and 2002 in the chemical industries (<a href="#fig10chart">Figure 10</a>).</p>
          <p>Again, a direct comparison of the 2002 MECS and Economic Census LPG and NGL expenditures data were made and the 1998 expenditures data were not compared.  Therefore the seven billion dollar increase between the 1998 and 2002 LPG and NGL expenditures will be confirmed using the 2006 MECS data.</p>
          <?php /*img src="img/image020.gif" width="565" height="307" alt="Figure 10" />
          <p>Note: Energy price indices from Bureau of Economic Analysis are for the chemical industries.</p>
          <p>Sources: Energy Information Administration, Manufacturing Energy Consumption Survey - Table 7.9: Expenditures for Purchased Energy Sources, 1998, and 2002, http://www.eia.doe.gov/emeu/mecs/mecs2002/data02/shelltables.html; U.S. Bureau of Economic Analysis, Gross-Domestic-Product-(GDP)-by Industry Data, 1998, and 2002, http://bea.gov/industry/gdpbyind_data.htm</p*/ ?>
          <a name="fig10chart" id="fig10chart"></a>
          <div class="fig10 tab_highchart"></div>
          <p><a href="#fig1achart">Figure 11</a> shows the historical energy share of total establishment costs in the chemical industries.  The percentages do not deviate much between 1994 and 1998; however, there was a 3.2 percent increase between 1998 and 2002 indicating a significant rise in energy expenditures as compared to the corresponding total establishment costs.</p>
          <?php /*img src="img/image022.gif" width="566" height="320" alt="Figure 11" /*/ ?>
          <a name="fig11chart" id="fig11chart"></a>
          <div class="fig11 tab_highchart"></div>
          <?php /*p>Sources: Energy Information Administration, Manufacturing Energy Consumption Survey – Table 7.9: Expenditures for Purchased Energy Sources, 1994, 1998, and 2002, http://www.eia.doe.gov/emeu/mecs/mecs2002/data02/shelltables.html; U.S. Census Bureau, 1994, and 1998 Annual Survey of Manufacturing, 2002 Economic Census – Manufacturing, http://www.census.gov/prod/www/abs/manu-min.html</p*/ ?>
          <h2><a name="producer-prices-production" id="producer-prices-production"></a>Producer Prices and Production</h2>
          <p><a href="#table1">Table 1</a> shows the producer price indices for the chemical industries according to the U.S. Bureau of Economic Analysis (BEA).  Producer prices are the prices that these industries received for their goods.  As is shown in Table 1, the indices have increased between 1998 and 2002.  The increase in producer prices corresponds with the increase in the energy expenditures as compared to the corresponding total establishment costs indicated in <a href="#fig11chart">Figure 11</a>.</p>
          <p>Additionally, Table 2 below illustrates the production indices for the chemical industries according to BEA.  Unlike the producer price indices shown in <a href="#table1">Table 1</a>, the production indices in Table 2 have decreased between 1998 and 2002.  As mentioned previously, there was a sharp increase in the LPG usage between 1998 and 2002 in the chemical industries, and further evaluation of the increase in consumption will be verified using the 2006 MECS data.  If the LPG used in these industries in 2002 were excluded from the equation, the chemical industries total energy consumption would have decreased between 1998 and 2002.  This decrease in the total energy consumption coincides with the reduction in shipments in the chemical industries as shown in Table 2.</p>
          <a name="table1" id="table1"></a>
          <table width="100%" class="basic_table">
            <caption>
            Table 1: Chemical Industries Received Slightly Higher Prices for their Products
            </caption>
            <thead>
              <tr>
                <th>Producer Price Indices</th>
                <th>1998</th>
                <th>1999</th>
                <th>2000</th>
                <th>2001</th>
                <th>2002</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>BEA</td>
                <td>94.472</td>
                <td>94.789</td>
                <td>100</td>
                <td>100.698</td>
                <td>100.553</td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <td colspan="6">Source: U.S. Bureau of Economic Analysis, Gross-Domestic-Product-(GDP)-by Industry Data, http://bea.gov/industry/gdpbyind_data.htm </td>
              </tr>
            </tfoot>
          </table>
          <a name="table2" id="table2"></a>
          <table width="100%" class="basic_table">
            <caption>
            Table 2: Chemical Industries Reduced Shipments
            </caption>
            <thead>
              <tr>
                <th>Production Indices </th>
                <th>1998</th>
                <th>1999</th>
                <th>2000</th>
                <th>2001</th>
                <th>2002</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>BEA</td>
                <td>97.860</td>
                <td>99.075</td>
                <td>100</td>
                <td>96.775</td>
                <td>93.804</td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <td colspan="6">Sources: Federal Reserve Board, G.17: Industrial Production and Capacity Utilization, http://www.federalreserve.gov/releases/g17/; 
                  U.S. Bureau of Economic Analysis, Gross-Domestic-Product-(GDP)-by Industry Data, http://bea.gov/industry/gdpbyind_data.html </td>
              </tr>
            </tfoot>
          </table>
          <h2><a name="energy-intensity" id="energy-intensity"></a>Energy Intensity</h2>
          <p><a name="fn4ref" id="fn4ref"></a>Typically in dealing with MECS energy statistics, energy intensities are measured as a ratio of energy consumption per an economic measure.  One such economic measure often used is the dollar value of shipments.  This is the dollar value received for the complete output at the company's billing price.  This does not include excise taxes, freight or transportation charges, or installation charges.<sup><a href="#fn4text" class="footnote">4</a></sup></p>
          <p><a name="fn5ref" id="fn5ref"></a>Another economic measure that is commonly used when analyzing energy intensities is the dollar of value added.  This is a measure of manufacturing activity that is derived by subtracting the cost of materials (which covers materials, supplies, containers, fuel, purchased electricity, and contract work) from the value of shipments. This difference is then adjusted by the net change in finished goods and work-in-progress between the beginning- and end-of-year inventories.<sup><a href="#fn5text" class="footnote">5</a></sup></p>
          <p>Energy consumption per dollar value of shipments has been stable for the chemical industries over the past ten years (<a href="#fig12chart">Figure 12</a>).  However, energy consumption per dollar of value added has slightly decreased during the same time period, the sharpest decline occurred between 1998 and 2002 (<a href="#fig13chart">Figure 13</a>).</p>
          <p>By either means, stable or declining energy intensities as specified in Figures 12 and 13 can be an indication that the energy efficiency in the chemical industries has improved.  Although this may be true for the chemical industries as a whole, it may not be true of the different sub-industries within chemicals.  For instance, <a href="#fig14chart">Figures 14</a> and <a href="#fig15chart">15</a>, the alkalies and chlorine industry and nitrogenous fertilizer industry respectively, show that these two industries decreased their energy consumption per dollar value of shipments over the past ten years.  This indicates that the energy efficiency in these two sub-industries within chemicals improved.</p>
          <p>The plastics material and resins industry, another sub-industry within chemicals, however, increased their energy consumption per dollar of value of shipments over the same ten year period with the sharpest increase coming between 1998 and 2002 (<a href="#fig16chart">Figure 16</a>).  This indicates that this sub-industry may have become less energy efficient.  Also, the plastics material and resins industry is responsible for a majority of the liquefied petroleum gas (LPG) consumed in chemicals because these LPG's are the raw materials the sub-industry uses to make their products.  The energy consumed per dollar value of shipments however only takes into consideration energy consumed as a fuel and does not account for any nonfuel and/or feedstock use.  The increase in the energy consumed per dollar of value of shipments for the plastics material and resins industry between 1998 and 2002 corresponds with <a href="#fig8chart">Figure 8</a> that shows the LPG usage in the chemical industries increased during this same time period.  This suggests that this sub-industry, largely responsible for LPG consumption as a raw material, also consumed a great deal of energy for fuel between 1998 and 2002.</p>
          <?php /*img src="img/image024.gif" width="566" height="298" alt="Figure 12" />
          <p>Sources: Energy Information Administration, Manufacturing Energy Consumption Survey – Table 6.1: Consumption Ratios of Fuel, 1991, 1994, 1998, and 2002, http://www.eia.doe.gov/emeu/mecs/mecs2002/data02/shelltables.html; U.S. Bureau of Economic Analysis, Gross-Domestic-Product-(GDP)-by Industry Data, 1991, 1994, 1998, and 2002, http://bea.gov/industry/gdpbyind_data.htm</p*/ ?>
          <a name="fig12chart" id="fig12chart"></a>
          <div class="fig12 tab_highchart"></div>
          <?php /*img src="img/image026.gif" width="566" height="306" alt="Figure 13" />
          <p>Note: Value added price indices from Bureau of Economic Analysis are for the chemicals sub-sector.</p>
          <p>Sources: Energy Information Administration, Manufacturing Energy Consumption Survey – Table 6.1: Consumption Ratios of Fuel, 1991, 1994, 1998, and 2002, http://www.eia.doe.gov/emeu/mecs/mecs2002/data02/shelltables.html; U.S. Bureau of Economic Analysis, Gross-Domestic-Product-(GDP)-by Industry Data, 1991, 1994, 1998, and 2002, http://bea.gov/industry/gdpbyind_data.htm </p*/ ?>
          <a name="fig13chart" id="fig13chart"></a>
          <div class="fig13 tab_highchart"></div>
          <?php /*img src="img/image028.gif" width="566" height="306" alt="Figure 14" />
          <p>Sources: Energy Information Administration, Manufacturing Energy Consumption Survey – Table 6.1: Consumption Ratios of Fuel, 1991, 1994, 1998, and 2002, http://www.eia.doe.gov/emeu/mecs/mecs2002/data02/shelltables.html; U.S. Bureau of Economic Analysis, Gross-Domestic-Product-(GDP)-by Industry Data, 1991, 1994, 1998, and 2002, http://bea.gov/industry/gdpbyind_data.htm</p*/ ?>
          <a name="fig14chart" id="fig14chart"></a>
          <div class="fig14 tab_highchart"></div>
          <?php /*img src="img/image030.gif" width="566" height="304" alt="Figure 15" />
          <p>Sources: Energy Information Administration, Manufacturing Energy Consumption Survey – Table 6.1: Consumption Ratios of Fuel, 1991, 1994, 1998, and 2002, http://www.eia.doe.gov/emeu/mecs/mecs2002/data02/shelltables.html; U.S. Bureau of Economic Analysis, Gross-Domestic-Product-(GDP)-by Industry Data, 1991, 1994, 1998, and 2002, http://bea.gov/industry/gdpbyind_data.htm</p*/ ?>
          <a name="fig15chart" id="fig15chart"></a>
          <div class="fig15 tab_highchart"></div>
          <?php /*img src="img/image032.gif" width="566" height="310" alt="Figure 16" />
          <p>Sources: Energy Information Administration, Manufacturing Energy Consumption Survey – Table 6.1: Consumption Ratios of Fuel, 1991, 1994, 1998, and 2002, http://www.eia.doe.gov/emeu/mecs/mecs2002/data02/shelltables.html; U.S. Bureau of Economic Analysis, Gross-Domestic-Product-(GDP)-by Industry Data, 1991, 1994, 1998, and 2002, http://bea.gov/industry/gdpbyind_data.htm</p*/ ?>
          <a name="fig16chart" id="fig16chart"></a>
          <div class="fig16 tab_highchart"></div>
          <h2><a name="energy-management-activities" id="energy-management-activities"></a>Energy-Management Activities</h2>
          <p>Over the past several years manufacturers in general have increasingly recognized the correlation between rising energy costs and their ever shrinking profit margins.  Through this understanding, manufacturers have greatly improved their energy-management practices as is the case with manufacturers in the chemicals sub-sector.  <a href="#table3">Table 3</a> illustrates that the chemical industries have followed this trend, although not all of the year-to-year differences shown are statistically significant.</p>
          <p>Most notably, energy audits and equipment installation and/or retrofit for enhancing energy efficiency are the two areas where these industries significantly improved their energy-management practices.  Energy audits are programs carried out either in-house or by another company in which an auditor inspects a manufacturing establishment and suggests ways energy can be saved.  Installing new equipment or retrofitting old is often a result of performing these energy audits because it improves the energy efficiency at the establishment.  The energy audit participation rate in these industries increased 12 percent between 1998 and 2002.  Similarly, the participation rates for the various equipment installations and/or retrofits to improve energy efficiency significantly increased, three to eight percent, during the same four year period.</p>
          <p>The percent participation rates were also measured for the same energy-management activities for all manufacturing industries in the U.S. economy.  It was observed upon analyzing the results that the percent of manufacturing establishments participating in the energy-management activities increased from 1998 to 2002.  Likewise, the chemical industries also improved their percent participation in the energy-management activities between 1998 and 2002.</p>
          <a name="table3" id="table3"></a>
          <table width="100%" class="basic_table">
            <caption>
            Table 3: Chemical Industries Participated in Energy-Management Activities, 1998 and 2002
            </caption>
            <thead>
              <tr>
                <th>Energy-Management Activity</th>
                <th>Percent Participation in 1998</th>
                <th>Percent Participation in 2002</th>
                <th>Percent Change 1998-2002</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Participation in One or More of the Following Types of Activities</td>
                <td>49</td>
                <td>55</td>
                <td>6</td>
              </tr>
              <tr>
                <td>Energy Audits</td>
                <td>19</td>
                <td>31</td>
                <td>12*</td>
              </tr>
              <tr>
                <td>Direct Electricity Load Control</td>
                <td>19</td>
                <td>21</td>
                <td>2</td>
              </tr>
              <tr>
                <td>Special Rate Schedule</td>
                <td>20</td>
                <td>17</td>
                <td>-3</td>
              </tr>
              <tr>
                <td>Standby Generation Program</td>
                <td>7</td>
                <td>9</td>
                <td>2</td>
              </tr>
              <tr>
                <td>Equipment Rebates</td>
                <td>3</td>
                <td>4</td>
                <td>1*</td>
              </tr>
              <tr>
                <td>Power Factor Correction or Improvement</td>
                <td>17</td>
                <td>18</td>
                <td>1</td>
              </tr>
              <tr>
                <td>Interval Metering (needed to manage energy use for programs such as real-time pricing) </td>
                <td>N/A</td>
                <td>8</td>
                <td>N/A</td>
              </tr>
              <tr>
                <td>U.S. Environmental Protection Agency's Energy Star Program</td>
                <td>3</td>
                <td>1</td>
                <td>-2*</td>
              </tr>
              <tr>
                <td>U.S. Environmental Protection Agency's Green Lights Program</td>
                <td>3</td>
                <td>2</td>
                <td>-1</td>
              </tr>
              <tr>
                <td>U.S Department of Energy's Motor Challenge Program</td>
                <td>3</td>
                <td>N/A</td>
                <td>N/A</td>
              </tr>
              <tr>
                <td>Other Federally Sponsored Energy or Environmental Management Program</td>
                <td>N/A</td>
                <td>0</td>
                <td>N/A</td>
              </tr>
              <tr>
                <td colspan="4">Equipment Installation or Retrofit for the Primary Purpose of Improving Energy Efficiency Affecting:</td>
              </tr>
              <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;Steam Production/System</td>
                <td>12</td>
                <td>15</td>
                <td>3*</td>
              </tr>
              <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;Compressed Air Systems </td>
                <td>16</td>
                <td>24</td>
                <td>8*</td>
              </tr>
              <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;Direct/Indirect Process Heating</td>
                <td>10 </td>
                <td>13</td>
                <td>3</td>
              </tr>
              <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;Direct Process Cooling, Refrigeration</td>
                <td>8</td>
                <td>13</td>
                <td>5*</td>
              </tr>
              <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;Direct Machine Drive</td>
                <td>19</td>
                <td>23</td>
                <td>4</td>
              </tr>
              <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;Facility HVAC </td>
                <td>16</td>
                <td>22</td>
                <td>6*</td>
              </tr>
              <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;Facility Lighting</td>
                <td>14</td>
                <td>21</td>
                <td>7*</td>
              </tr>
              <tr>
                <td>Equipment Installation or Retrofit for the Primary Purpose of Using a Different Energy Source</td>
                <td>6</td>
                <td>5</td>
                <td>-1</td>
              </tr>
              <tr>
                <td>Other</td>
                <td>1</td>
                <td>4</td>
                <td>3*</td>
              </tr>
              <tr>
                <td>Full-Time Energy Manager </td>
                <td>4</td>
                <td>5</td>
                <td>1*</td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <td colspan="4">* Significance testing was performed on the percentages in Table 3 to account for relative standard errors during data collection and determine those differences that are truly significant.<br />
                  Sources: Energy Information Administration, Manufacturing Energy Consumption Survey -	Table 8.1: Number of Establishments by Participation in Energy-Management Activity, 1998, and 2002, http://www.eia.doe.gov/emeu/mecs/mecs2002/data02/shelltables.html </td>
              </tr>
            </tfoot>
          </table>
          <h2><a name="fuel-switching-capacity" id="fuel-switching-capacity"></a>Fuel Switching Capacity</h2>
          <p>The capability to switch from one energy source to another has many benefits for chemical manufacturers.  For instance, a chemical plant can save money by switching from one fuel to another when energy prices rise.  However, there are limitations to fuel switching as well.  One limitation is that a plant might not be able to switch to another energy source because one is not readily available, or may adversely change the composition of the product.</p>
          <p><a href="#table4">Table 4</a> shows the fuel switching capability in the chemical industries in 2002.  It does not measure whether these industries did switch, but rather, has the capability to switch to an alternate fuel within 30 days.  The table illustrates that the chemical industries have a significant capability to switch fuels, particularly the means to switch from coal, residual, and distillate fuels.  Similarly, in 1994, the last time fuel switching data were collected on the MECS, the percent of the total fuel consumed that was switchable for coal, residual, and distillate fuels were 33, 41, and 29 percent respectively.</p>
          <p>The chemical industries faired similarly in their capability to switch from natural gas, electricity, coal, residual, and distillate fuels compared to other U.S. manufacturers in 2002.  The capability to switch from LPG in 2002, however, was a different story.  The chemical industries capability to switch from LPG was not as large as other manufacturers, in part, because LPG is not used for fuel purposes in many chemical industries but instead as a feedstock to make various chemical products.</p>
          <a name="table4" id="table4"></a>
          <table width="100%" class="basic_table">
            <caption>
            Table 4: Chemical Industries had Significant Capability to Switch Fuels, 2002 (Trillion Btu)
            </caption>
            <thead>
              <tr>
                <th>Capability to Switch from:</th>
                <th>Total Consumed* </th>
                <th>Amount Switchable </th>
                <th>Percent of Total Consumed that was Switchable</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Natural Gas </td>
                <td>1,678.1</td>
                <td>168.4</td>
                <td>10</td>
              </tr>
              <tr>
                <td>Residual Fuel </td>
                <td>40.8</td>
                <td>12.5</td>
                <td>31</td>
              </tr>
              <tr>
                <td>Electricity </td>
                <td>550.6</td>
                <td>7.7</td>
                <td>1</td>
              </tr>
              <tr>
                <td>Distillate Fuel </td>
                <td>14.1</td>
                <td>2.3</td>
                <td>17</td>
              </tr>
              <tr>
                <td>Coal</td>
                <td>321.7</td>
                <td>115.5</td>
                <td>36</td>
              </tr>
              <tr>
                <td>LPG</td>
                <td>32.2</td>
                <td>0.4</td>
                <td>1</td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <td colspan="4">* The total electricity consumed amount does not include any electricity generated onsite.<br />
                  Sources: Energy Information Administration, Manufacturing Energy Consumption Survey &mdash; Tables 10.2, 10.4, 10.6, 10.8, 10.10, and 10.12: Capability to Switch Fuels to Alternative Energy Sources, 2002, http://www.eia.doe.gov/emeu/mecs/mecs2002/data02/shelltables.html </td>
              </tr>
            </tfoot>
          </table>
          <div id="footnotes">
            <h3>Footnotes</h3>
            <p><sup><a href="#fn1ref" class="footnote">1</a></sup><a name="fn1text" id="fn1text"></a> U.S. Department of Energy, Energy Efficiency and Renewable Energy, Industrial Technologies Program, <em>Chemicals Industry of the Future</em>, http://www1.eere.energy.gov/industry/chemicals/profile.html</p>
            <p><sup><a href="#fn2ref" class="footnote">2</a></sup><a name="fn2text" id="fn2text"></a> Energy Information Administration, Manufacturing Energy Consumption Survey, MECS Definition of Fuel Use, http://www.eia.doe.gov/emeu/mecs/mecs98/datatables/fueldef.html</p>
            <p><sup><a href="#fn3ref" class="footnote">3</a></sup><a name="fn3text" id="fn3text"></a> Energy Information Administration, Manufacturing Energy Consumption Survey, MECS Definition of NonFuel (Feedstock), http://www.eia.doe.gov/emeu/mecs/mecs98/datatables/nonfueldef.html </p>
            <p><sup><a href="#fn4ref" class="footnote">4</a></sup><a name="fn4text" id="fn4text"></a> Energy Information Administration Glossary, "<a href="/tools/glossary/?id=Value%20(of%20shipments)">Value (of shipments)</a>"</p>
            <p><sup><a href="#fn5ref" class="footnote">5</a></sup><a name="fn5text" id="fn5text"></a> Energy Information Administration Glossary, "<a href="/tools/glossary/index.cfm?id=Value%20added%20by%20manufacture">Value added by manufacture</a>"</p>
          </div>
        </div>
        <?php /*/ Main Column */ ?> 
        <?php /* Side Column */ ?>
        <div class="side_col right">
          <?php include ('../../../includes/side_nav_manufacturing.inc') ; ?>
           <?php /*cfinclude template="../../includes/side_nav_manufacturing_data.cfm"*/ ?>
       </div>
        <?php /*/ Side Column */ ?> 
      </div>
      <?php /*/ Page/Body Content */ ?>
      <?php include ('global/includes/eia_footer.inc') ; ?>
</div>
<?php /*/ Outer Wrapper */ ?>
</body>
<script src="js/chemical-highcharts.js" type="text/javascript"></script>
</html>