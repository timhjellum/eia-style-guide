<?php
$pageTitle = "";
$locale = 'ap';

$page['year'] = '2009';
$L2Title = "Manufacturing Energy Consumption Survey (MECS)";
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
  <?php include ('../includes/subnav_consumption_mecs.inc') ; ?>
  <?php /* Page/Body Content */ ?>
  <div class="pagecontent mr_temp7">
    <div class="side_col right"> 
      <?php /* Side Column */ ?>
      <?php include ('../includes/side_nav_manufacturing.inc') ; ?>      <?php /*  <?php include ('consumption/includes/side_content_methodology_recs.inc') ; ?> */ ?> 
    </div>
    <div class="main_col">
      <h1>Manufacturing Energy Consumption Data Show Large Reductions in Both Manufacturing Energy Use and the Energy Intensity of Manufacturing Activity between 2002 and 2010<br />
      </h1>
      <p class="dat">MECS 2010 &mdash; Release date:  March 19, 2013</p>
     <br /> <p>Total energy consumption in the manufacturing sector decreased by 17 percent from 2002 to 2010 (Figure 1), according to data from the U.S. Energy Information Administration's (EIA) Manufacturing Energy Consumption Survey (MECS). <a href="images/fig1-lg.png" class="lightbox"><img src="images/fig1-sm.png" width="325" alt="line chart:air conditioning in U.S." /></a><!--<span class="caption"><a href="../residential/reports/2009/pdf/acbrief_fig1_09data.xls" class="ico_xls">figure data</a></span></span>-->  Manufacturing gross output decreased by only 3 percent over the same period.   Taken together, these data indicate a significant decline in the amount of energy used per unit of gross manufacturing output. The significant decline in energy intensity reflects both improvements in energy efficiency and changes in the manufacturing output mix.  Consumption of every fuel used for manufacturing declined over this period.<sup>1</sup>    </p>
      <p>The manufacturing sector comprised over 11 percent of gross domestic product (GDP) in 2010.  The manufacturing base in the United States is broad, producing items as varied as the food we eat to the beds we sleep on at night.  Manufacturing includes energy-intensive industries (those that use relatively large amounts of energy) such as petroleum refining, chemicals, aluminum, iron and steel, paper, wood products, and food, as well as less energy-intensive industries such as textiles, leather, apparel, furniture, machinery, and electrical equipment.   </p>
<p>Energy for manufacturing can be consumed in two ways: as a fuel or as a feedstock (material input to a final product).  Energy consumed as a fuel includes all energy used for heat and power, regardless of where the energy was produced.<sup>2</sup>   Energy used as feedstock is the use of energy sources for raw material input or for any purpose other than the production of heat or power.<sup>3</sup></p>       
      <p> U.S. manufacturing used over 14 quadrillion Btu of energy as a fuel in 2010, a decrease of 13 percent from the MECS 2002 level.  Figure 2 shows fuel consumption in the five most energy-intensive subsectors along with all other manufacturing.  Together, those five subsectors <a href="images/fig2-lg.png" class="lightbox"><img src="images/fig2-sm.png" width="325" alt="line chart:air conditioning in U.S." /></a>accounted for 81 percent of fuel use in manufacturing. Two energy-intensive subsectors (petroleum and coal products, and food) showed 3.5 percent increases in their fuel consumption from 2002 to 2010. </p>
<!--<span class="caption"> <a href="../residential/reports/2009/pdf/acbrief_fig1_09data.xls" class="ico_xls">figure data</a></span></span> ---><p>The amount of nonfuel energy use in U.S. manufacturing is significant, at approximately 6 quadrillion Btu (quads) in 2010, which is more than 6 percent of all energy consumed in the country.  Although nearly all manufacturers use energy as a fuel, 99 percent of nonfuel use occurs in only three manufacturing subsectors: primary metals, chemicals, and petroleum and coal products.</p>
      <p>Although overall manufacturing output declined by 3 percent between 2002 and 2010, some manufacturing industries grew over the period.  The gross output for the petroleum and coal products subsector grew by about 3 percent, while the gross output for the food subsector increased by 5 percent.  However, during this same period the number of employees in both subsectors fell, the petroleum and coal products subsector by 6,000 employees, and the food subsector by 115,000 employees.<sup>4</sup>   The reduction in employment, along with an increase in gross output signals an increase in labor productivity in these two subsectors.  </p>
      <p>These data, among others, are drawn from the more detailed results of EIA's <a href="data/2010/index.cfm">2010 MECS.</a> The 2010 MECS is EIA's eighth survey of the manufacturing sector and covers the U.S. and four Census regions (Northeast, Midwest, South, and West).  For more about the scope of the MECS over time, see MECS Methodology and Forms.  Previous surveys were conducted for 1985, 1988, 1991, 1994, 1998, 2002, and 2006, respectively. Future MECS are planned for every four years.  Data collection for the 2014 MECS will begin in 2015.  </p>
      <p class="foot-note"><sup>1</sup>Bureau of Economic Analysis, Gross Domestic Product (GDP) by Industry Data, GDPbyInd_VA_NAICS, http://bea.gov/industry/gdpbyind_data.htm<br />* Total is the sum of the energy sources minus the shipments. Shipments of energy sources produced onsite are those shipments produced or transformed onsite from the nonfuel use of other energy sources. Shipments are subtracted from the total to avoid duplication.<br/>
        Source: U.S. Energy Information Administration, Manufacturing Energy Consumption Survey - Table 1.2: First Use of Energy for All Purposes (Fuel and Nonfuel), 2002, 2006, and 2010. <br />
        <sup>2</sup>Net electricity is included in the energy consumed as a fuel.  However, net electricity does not include electricity from onsite generation or combustible fuel sources. See U.S. Energy Information Administration, Manufacturing Energy Consumption Survey, MECS Definition of Fuel Use, http://www.eia.doe.gov/emeu/mecs/mecs98/datatables/fueldef.html<br/>
        <sup>3</sup>U.S. Energy Information Administration, Manufacturing Energy Consumption Survey, MECS Definition of NonFuel (Feedstock), http://www.eia.doe.gov/emeu/mecs/mecs98/datatables/nonfueldef.html <br/>
        <sup>4</sup>  Bureau of Economic Analysis, Gross Domestic Product (GDP) by Industry Data, GDPbyInd_VA_NAICS, http://bea.gov/industry/gdpbyind_data.htm
        </span>
      </p>
      <?php /*/ Outer Wrapper */ ?>
    </div>
  </div>
  <div>
    <?php include("global/includes/eia_footer.inc"); ?>
</body>
</html>