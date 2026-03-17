<?php
$locale = 'overview';
$L2Title = "Residential Energy Consumption Survey (RECS)";

$page['year'] = 'faq';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php include ('global/includes/eia_head_info.inc') ; ?>
<?php  if(!isset($no_titling)) include "global/includes/titling.inc"; ?></head>

<body>
<div id="outerX"><?php /* Outer Wrapper */ ?>
  <?php include ('global/includes/eia_header.inc') ; ?>
      <?php include ('../includes/subnav_consumption_recs.inc') ; ?>
      <?php /* Page/Body Content */ ?>
      <div class="pagecontent mr_temp3">
        <div class="main_col">
          <ol>
            <a href="#rfaq1"><li>Who is represented in the RECS?</li></a>
            <a href="#rfaq2"><li>Does EIA have official EIA energy consumption statistics for counties, cities and ZIP codes?</li></a>
           <a href="#rfaq3"><li>What are the sources for EIA’s statistics on household energy consumption and expenditures?</li></a>
            <a href="#rfaq4"><li>Where can I find more information about the statistical models used to estimate how energy is used within U.S. homes?</li></a>
            <a href="#rfaq5"><li>Why doesn't the average household consumption by fuel add up to the average consumption for all fuels?</li></a>
            <a href="#rfaq6"><li>I found a table that's useful, but it's not tabulated the way I need it. Can EIA provide custom tabulations for me?</li></a>
            <a href="#rfaq7"><li>Why do some RECS consumption statistics differ from data in other EIA data products and DOE reports?</li></a>
              <?php /* <a href="#rfaq8"><li>8. The latest RECS tables are for the year 2005?  Does EIA have more recent data on household energy consumption and energy end uses?</li></a> */ ?>
            
          </ol>
          <hr />
		  <a name="rfaq1" id="rfaq1"></a><p><strong>1. Who is represented in the RECS?</a></strong></p>
          <p>The RECS is a sample survey with a target population of all occupied housing units in the 50 states and the District of Columbia (DC) that are used as primary residences. Vacant homes, seasonal housing units, and group quarters (such as dormitories, nursing homes, prisons, and military barracks) are excluded. Housing units located on military installations are included. Addresses are statistically selected using a stratified, random sample. Each responding household has a final analysis weight (NWEIGHT), which is used to produce RECS estimates. The average NWEIGHT for the 2020 RECS is 6,679, meaning that, on average, each RECS household represents itself and 6,678 other households like it.</p>

          <a name="rfaq2" id="rfaq2"></a><p><strong>2. Does EIA have official EIA energy consumption statistics for  counties, cities and ZIP codes?</a> </strong> </p>
          <p>The 2020 RECS includes key estimates for <a href="/consumption/residential/data/2020/index.php?view=state">all 50 states and DC</a>. Currently EIA does <em>not</em> produce any energy consumption and end use statistics for sub-State  geographies. However, for the 2024 RECS, EIA plans to produce key energy-use estimates for 10 Metropolitan Statistical Areas (MSA), in addition to national, region, and state-level estimates.<br />
          </p>

          <a name="rfaq3" id="rfaq3"></a><p><strong>3. What are the sources for EIA’s statistics on household energy consumption and expenditures?</a></strong></p>
          <p>RECS estimates are based on two surveys and a modeling and calibration  process. Every four years EIA conducts RECS with a sample of occupants in  single-family homes, apartments, and mobile homes across the United States. Selected  respondents complete a web or mail Household Survey on structural  characteristics of the housing unit, energy consuming behavior, appliances and  equipment. Following the Household Survey, EIA collects energy billing data for  sampled housing units from their energy suppliers. EIA uses energy  characteristics and auxiliary data to develop <a href="/consumption/residential/data/2020/pdf/2020%20RECS%20CE%20Methodology_Final.pdf">engineering-based  model estimates</a> for many energy end-uses for the household respondents. These modeled  estimates are then calibrated to the billing data to produce final end-use  estimates for each fuel.</p>

          <a name="rfaq4" id="rfaq4"></a><p><strong>4. Where can I find more information about the statistical models used to estimate how energy is used within U.S. homes?</strong></p>
          <p><a href="/consumption/residential/data/2020/pdf/2020%20RECS%20CE%20Methodology_Final.pdf">The 2020 Residential  Energy Consumption Survey: Technical Documentation Summary</a> provides a detailed  discussion of the end-use modeling and calibration process used in the 2020 RECS.</p>

          <a name="rfaq5" id="rfaq5"></a><p><strong>5. Why doesn&rsquo;t the average household consumption by fuel add up to the average consumption for all fuels?</a></strong></p>
		  <p>Different numbers of households use different fuels, so a <em>weighted average</em> has to be calculated. The average household consumption of each fuel is only the average of households using that fuel.</p>

		  <a name="rfaq6" id="rfaq6"></a><p><strong>6. I found a table that&rsquo;s useful, but it&rsquo;s not tabulated the way I need it. Can EIA provide custom tabulations for me?</strong></p>
          <p>EIA provides a public <a href="/consumption/residential/data/2020/index.php?view=microdata">microdata</a> file so users can conduct their own analyses and tabulations. Because this survey uses complex sample design methods (unequal probabilities of selection, stratification, etc.), you should apply the variable NWEIGHT in any analyses to adjust for these design features. This ensures you will get the correct means and totals in your work. You will also have to use statistical software to correctly estimate standard errors in tests of statistical significance, given the complex RECS sample design. EIA provides a <a href="/consumption/residential/data/2020/pdf/microdata-guide.pdf">guide to correctly  using the microdata</a>.</p>

		<a name="rfaq7" id="rfaq7"></a><p><strong>7. Why do some RECS consumption statistics differ from data in other EIA data products and DOE reports?</strong>
        <p>The <a href="/totalenergy/data/monthly/"><em>Monthly Energy Review</em> (MER)</a>, <a href="/state/seds/">State Energy Data  System (SEDS)</a>, <a href="/outlooks/aeo/"><em>Annual Energy  Outlook</em> (AEO)</a>, and <a href="/outlooks/steo/"><em>Short-term Energy Outlook </em>(STEO)</a> publish estimates and projections for the entire residential sector. RECS data represent estimates for energy use in homes occupied as a primary residences, a subset all housing units in the residential sector. RECS does not include energy used in seasonal or vacation housing units, common areas of multifamily buildings, or energy consumed in mixed-use buildings that may be classified by energy suppliers as residential.        
        <p>The MER and SEDS provide historical energy demand information for the  entire residential sector. The AEO includes annual projections of energy demand for the residential sector. The estimates and projections that contribute to these three data series come from different sources. The RECS data are produced from household occupant surveys, the actual energy billing data for those  households, and statistically modeled energy end-uses. Other programs within EIA and DOE use company-level data by energy sector and fuel, data from  equipment/appliance manufacturers, as well as some RECS data to produce estimates for the sector as a whole. Differences in statistical methods also contribute to differences between RECS and other EIA data products.</p>

            <?php /*    <p><a name="rfaq8" id="rfaq8"></a><strong>8. The  latest RECS tables are for the year 2005? &nbsp;Does EIA have more recent data  on household energy consumption and energy end uses? </strong>
      <p>EIA  collects household-level energy data only once every 4 years.&nbsp; The most  current data on the web come from the 2005 RECS.&nbsp; During the first quarter  of 2011, EIA will begin releasing the first household energy characteristics  data tables from the 2009 RECS.&nbsp; Updated Household Consumption and  Expenditures data will be available early in 2012.</p> */ ?>
            
          <hr />
          
          <?php /* Main Column */ ?> 
        </div>
        <?php /* Side Column */ ?>
        <div class="side_col right">
          <?php include ('consumption/includes/side_nav_residential.inc') ; ?>
        </div>
      </div>
      <?php /*/ Page/Body Content */ ?>
      <?php include ('global/includes/eia_footer.inc') ; ?>
</div>
<?php /*/ Outer Wrapper */ ?>
</body>
</html>