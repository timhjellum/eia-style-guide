<?php
$locale 		= 'overview';
$L2Title = "Residential Energy Consumption Survey (RECS)";

$page['year'] = 'faq';

?>
<!doctype html>
<?php
$globalTitle 	= 'U.S. Energy Information Administration (EIA)';

$pageTitle          = '';

?>

<head>

	<title><?=$pageTitle?> - <?=$globalTitle?></title>
	<meta property="og:title" content="<?=$pageTitle?> - <?=$globalTitle?>">
	<meta property="og:url" content="https://www.eia.gov<?=$_SERVER['PHP_SELF']?>">
	<meta name="url" content="https://www.eia.gov<?=$_SERVER['PHP_SELF']?>">
<?php include('adaptive/global/head/includes/head.inc'); ?>
</head>

<body>

<?php include('adaptive/global/header/includes/header.inc'); ?>
<?php include('../includes/sub-navigation.inc'); ?>
<!-- consumption_recs.inc'); ?>

      <div class="l-row mr_temp3">
        <div class="l-col">
          <ol>
            <li><a href="#rfaq1">Does EIA have official EIA energy consumption statistics for  counties, cities and ZIP codes?</a>           </li>
            <li><a href="#rfaq2">What  is the basis for EIA&rsquo;s statistics on household energy consumption and  expenditures?</a>          </li>
            <li><a href="#rfaq3">Where can I find more information about the statistical models used to estimate how energy is used within U.S. homes? </a>          </li>
            <li><a href="#rfaq4">Why doesn't the average household consumption by fuel add up to the average consumption for all fuels? </a>          </li>
            <li><a href="#rfaq5"> I found a table that's useful, but it's not tabulated the way I need it.  Can EIA provide custom tabulations for me? </a>          </li>
            <li><a href="#rfaq6">Why do some RECS consumption statistics differ from data in other EIA data products and DOE reports, such as the Annual Energy Review (AER) and Annual Energy Outlook (AEO)?</a><br>
<?php /*  8. <a href="#rfaq8">The latest RECS tables are for the year 2005?  Does EIA have more recent data on household energy consumption and energy end uses?
      </a> */ ?>
            </li>
          </ol>
          <hr />
          <p><a name="rfaq1" id="rfaq1"></a><strong>1. &nbsp;Does EIA have official EIA energy consumption statistics for  counties, cities and ZIP codes?</a> </strong> </p>
          <p>EIA does <em>not</em> produce any energy consumption and end use statistics for sub-State  geographies.&nbsp; Because the RECS is a small sample survey, tables only show  data for the U.S., Census Regions, Census Divisions, and selected States. &nbsp; A larger sample of households in the 2009 RECS expanded the  State program to 16 States</a>.&nbsp;<a href="methodology/states.cfm"> Read more &rsaquo;</a> </p>
          <br />
          <p><a name="rfaq2" id="rfaq2"></a><strong>2. &nbsp;What  is the basis for EIA&rsquo;s statistics on household energy consumption and  expenditures?</a></strong></p>
          <p>The statistics are based on two surveys and a  statistical model.&nbsp; Every four years EIA conducts the Residential Energy  Consumption Survey (RECS) with a sample of occupants in single family homes,  apartments and mobile homes across the United States.&nbsp; Trained interviewers meet with residents and record information on structural characteristics of the  housing unit, energy consuming behavior, appliances and equipment.&nbsp;  Following the household survey, EIA collects energy billing data for sampled households from  their energy suppliers with a second survey.&nbsp; Complex statistical models allocate a household&rsquo;s  total consumption to specific uses such as heating, cooling and refrigeration.<br />
          </p>
          <p><a name="rfaq3" id="rfaq3"></a><strong>3. &nbsp;Where can I find more information about the statistical models used to estimate how energy is used within U.S. homes? </strong></p>
          <p>Appendix C of<a href="http://www.eia.gov/pub/pdf/consumption/063297.pdf"> the 1997 RECS publication</a> contains a basic summary of the models used throughout the history of the survey to estimate household end-use consumption.</p>
          <p><a name="rfaq4" id="rfaq4"></a><strong>4. &nbsp;Why doesn&rsquo;t the average household consumption by fuel add up to the average consumption for all fuels? </a> </strong>
          <p>Different  numbers of households use different fuels, so a <em>weighted average</em> has to  be calculated.&nbsp; This accounts for the different basis.</p>
          <p><a name="rfaq5" id="rfaq5"></a><strong>5. &nbsp;I found a table that&rsquo;s useful, but it&rsquo;s not tabulated the way I need it.  Can EIA provide custom tabulations for me?</strong> </a>
          <p>EIA  is not able to produce tabulations on demand. &nbsp;However, we do make a micro  dataset publicly available via the web so users can conduct their own analyses  and tabulations.&nbsp; Because this survey uses complex sample design methods  (unequal probabilities of selection, clustering, stratification, etc.), you  should apply the variable NWEIGHT in any analyses to adjust for these design  features. &nbsp;This ensures you will get the correct means and totals in your  work. &nbsp;You will also have to use specialized statistical software to  correctly estimate standard errors in tests of statistical significance, given  the complex RECS sample design.
          <p> <a name="rfaq6" id="rfaq6"></a><strong>6. &nbsp;Why do some RECS consumption statistics differ from data in other EIA data products and DOE reports, such as the Annual Energy Review (AER) and Annual Energy Outlook (AEO)?</a> </strong>
          <p>The  AEO, AER and RECS answer different questions about energy use. &nbsp;Every four  years, RECS provides detailed statistics on how we actually used energy in  homes occupied as primary residences, a subset all homes <em>for the year of the survey</em>.  &nbsp;The AER provides annual historical energy demand information and the AEO annual forecasted energy demand information.  Both of these series cover the residential sector as a whole.&nbsp; 
            The data that contribute to these three data series come from different sources. &nbsp;The RECS data are produced from in-home personal interviews with household occupants, the actual energy billing  data for those households, and statistically modeled energy end-uses.&nbsp;  Other programs within EIA and DOE use company-level data by energy sector and  fuel, data from equipment/appliance manufacturers, as well as some RECS data to  produce estimates for the sector as a whole. The relationship between the  different data series is fairly stable.&nbsp; Small differences are due to  variations in definitions, data inputs, and statistical methods. 
<?php /*    <p><a name="rfaq8" id="rfaq8"></a><strong>8. The  latest RECS tables are for the year 2005? &nbsp;Does EIA have more recent data  on household energy consumption and energy end uses? </strong>
      <p>EIA  collects household-level energy data only once every 4 years.&nbsp; The most  current data on the web come from the 2005 RECS.&nbsp; During the first quarter  of 2011, EIA will begin releasing the first household energy characteristics  data tables from the 2009 RECS.&nbsp; Updated Household Consumption and  Expenditures data will be available early in 2012.</p> */ ?>
            
          <hr />
          
 
        </div>

        <div class="l-col">
<?php include('consumption/includes/side_nav_residential.inc'); ?>
        </div>
      </div>

<?php include('adaptive/global/footer/includes/footer.inc'); ?>
</div>

</body>
</html>