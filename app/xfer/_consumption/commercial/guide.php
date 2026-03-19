<!doctype html>

<?php
$globalTitle 	= 'U.S. Energy Information Administration (EIA)'; 
$pageTitle		= 'Commercial Buildings Energy Consumption Survey (CBECS)';
$L2Title 		= "Commercial Buildings Energy Consumption Survey (CBECS)";
$locale = 'overview';
$L2Title = "";
?>
<html>
<head>
	<title><?=$pageTitle?> - <?=$globalTitle?></title>
	<meta property="og:title" content="<?=$pageTitle?> - <?=$globalTitle?>">
	<meta property="og:url" content="https://www.eia.gov<?=$_SERVER['SCRIPT_NAME']?>">
	<meta name="url" content="https://www.eia.gov<?=$_SERVER['SCRIPT_NAME']?>">
	<?php include('global/head/includes/head.inc'); ?>

</head>

<body>
	<?php
include('global/header/includes/header.inc');
include('consumption/commercial/includes/sub-navigation.inc');
include('consumption/includes/report-header.inc')
?>
	<div class="l-row l-two-col-right-narrow">
		<div class="l-col">
<h1>Guide to the 2018 CBECS Tables</h1>
		  
<ul type="disc">
	
	<li ><a href="http://www.eia.gov/consumption/commercial/data/2012/rse.cfm" title="Relative Standard Errors (RSEs)">Relative Standard Errors (RSEs)</a></li>
	<li> <a href="#column"  >How to read the tables</a></li>
	<div id="anchors"><a name="HW"></a></div>
	
	<li> <a href="#CC"  >Column categories</a></li>
   
    <li> <a href="#RC"  >Row categories</a></li>
	
    <li> <a href="#CD"  >Row categories details</a></li>
	</ul>
	
<p>The data tables for the <em>2018 Commercial Buildings Energy Consumption Survey</em> (CBECS) currently consist of building characteristics tables that contain the number of buildings and amount of floorspace for structural and energy-related characteristics of buildings. They also include preliminary consumption and expenditures tables, which contain total energy usage data by the major energy sources. We will release additional consumption and expenditures tables, including end-use energy consumption estimates, by December 2022.</p>

<p>This guide provides a short explanation of relative standard errors (RSEs), an overview of how to read the tables, and details about some of the row categories, including explanations of changes since the 2012 CBECS.</p>

		   <?php /* 
<p>Please note that we have condensed the number of tables. If you are looking for a building characteristics table that is no longer here, please contact <a href="mailto:joelle.michaels@eia.gov">Joelle Michaels</a>. We will release the consumption and expenditures tables, which contain energy usage data, in summer 2022.</p>
 */ ?>

<h2>Relative standard errors</h2>
<p>Because CBECS is a sample survey, its data values are estimates rather than precise values, and a known error is associated with each published value.</p>

<p>Standard error is a measure of the reliability or precision of the survey statistic. The value for the standard error (the square root of the variance) can be used to construct confidence intervals and to perform hypothesis tests by standard statistical methods. Relative standard error (RSE) is the standard error of a survey estimate, divided by the survey estimate, and multiplied by 100.</p>

<p>Each Excel version of the Detailed Tables contains a second worksheet tab labeled RSE, which contains the RSE for each cell in the corresponding table. These RSEs can be used to construct confidence intervals and test for statistical differences, as described in <a href="https://www.eia.gov/consumption/commercial/data/2018/rse.php">What is an  RSE?</a>. CBECS data tables withhold an estimate when the RSE value is greater than 50% or fewer than 20 buildings are in the responding sample. </p>

<h2><a name="column" id="HW">How to read the tables</h2>
<h2><a name="row" id="CC"></a>Column categories</h2>
<p>The column categories in the building characteristics tables mostly provide estimated counts of the number of buildings or total floorspace of all buildings in that category by various building characteristics (with the exception of Tables B1 and B2, which also include means, medians, floorspace per building, floorspace per worker, and operating hours per week). </p>

<p>For example, in Table B3, the number in the <em>All buildings</em> row, in the column labeled <em>Northeast</em> under the heading <em>Number of buildings</em> tells us how many thousands of buildings were estimated in the Northeast Census Region. This same column under the heading <em>Total floorspace</em> tells us how many million square feet are in these buildings.</p>
		  
		  <?php /* 

<p><img src="./image/guide-b3.jpg" alt="Table B3. Census region, number of buildings and floorpsace, 2018" height="auto" width="100%"></p>
		  
		   */ ?>

<p>In CBECS, total floorspace includes all the area enclosed by the exterior walls of a building, both finished and unfinished, including indoor parking levels, basements, hallways, lobbies, stairways, and elevator shafts.</p>
		  
      <p>The column categories in the energy consumption and expenditures tables provide various measures of energy use. Some of these columns that may require clarification include:</p>

      <p><strong>Major fuel</strong>—Major energy sources are electricity, natural gas, fuel oil, and district heat (district steam or district hot water). Although electricity is technically not a fuel, we kept the label <em>Major fuel</em>, rather than <em>Major energy source</em>, to help users compare the recent data with previous CBECS data.</p>

      <p><strong>Sum of major fuels</strong>—The total of <a href="/consumption/commercial/terminology.php#SiteElec" title="site electricity">site electricity</a>, natural gas, fuel oil, and district heat. </p>
    
    <p><strong>Electricity</strong>—Most of the tables in the CBECS provide statistics for <a href="/consumption/commercial/terminology.php#SiteElec" title="site electricity">site electricity</a> (not for <a href="/consumption/commercial/terminology.php#PriElec" title="primary electricity">primary electricity</a>). When the term electricity is used alone, the reference is to site electricity. Tables C1 and C13 provide consumption statistics for both primary and site electricity.</p>

    <p><strong>Gross energy intensity</strong>—The ratio of the total amount of energy consumed by a group of buildings to the total floorspace of those buildings, including buildings and floorspace where the energy source is not used. For example, in Table C5, data in the row category <em>Education</em> within the <em>Principal building activity</em> row category and in the column labeled <em>Northeast</em> under <em>Energy intensity</em> for sum of major fuels should be interpreted as "In 2018, all education buildings in the Northeast consumed an average of {value} thousand British thermal units (Btu) per square foot." </p> 
		  
    <p><strong>Conditional energy intensity</strong>—The amount of electricity, natural gas, fuel oil, or district heat used per square foot only in buildings using the specified energy source. For example, in Table C15, data in the row labeled <em>Education within the Principal building activity</em> row category and in the column labeled <em>Northeast</em> under <em>Electricity energy intensity</em> should be interpreted as "In 2018, education buildings in the Northeast that used electricity as an energy source used an average of {value} kilowatthours (kWh) of electricity per square foot." </p>
    
    <p><strong>Distribution of building-level intensities</strong>—The amount of energy used per square foot, divided into three percentiles: 25th, median (50th), and 75th. In Table C14, for example, the row labeled Over 500,000 within the <em>Building floorspace</em> row category and in the column labeled <em>25th percentile under Distribution of building-level intensities</em> should be interpreted as "In 2018, 25% of commercial buildings in the United States that were larger than 500,000 square feet used {value} kilowatthours (kWh) per square foot or less, and 75% of these buildings used more than {value} kWh of electricity per square foot."</p>

    <p><strong>Energy intensity</strong>—Intensity is usually defined as gross energy intensity or conditional energy intensity in the title of the table. If the table title does not specify, energy intensity should be interpreted as conditional energy intensity. </p> 
    
   

<h2><a name="row" id="RC"> </a>Row categories </h2>
<p>The row categories classify data by specific characteristics, such as principal building activity or energy sources used. Some of these categories are followed by the phrase <em>more than one may apply</em>, indicating overlapping categories. In such row categories, a particular building may be represented in more than one row; for example, in the <em>Energy sources</em> row category, a building that uses both electricity and natural gas would be included in both the <em>Electricity and Natural gas</em> rows, and therefore these rows sum to more than the total number of buildings. In general, row categories <em>without</em> this designation are <em>mutually exclusive</em>; that is, they divide the population of buildings into distinct groups so that a particular building is represented in only one line within the row category.
</p>
		  
		  <?php /*  

<p><img src="./image/energy-sources.jpg" alt="Energy Sources" height="auto" width="100%"></p>
		  
		   */ ?>

<p>Any line within a row category that is indented should be interpreted as being a subset of the preceding line. For example, in the row category <em>Principal building activity</em>, there are two indented lines under <em>Health care; Inpatient and Outpatient</em> are both subsets of the <em>Health care</em> category. The sum of indented items will equal the main item except in row categories labeled as <em>More than one may apply</em>.</p>

<h2><a name="row" id="CD"> </a>Row category details </h2>
<p>These terms are listed in the order in which they occur in the tables. Definitions of most terms found in the Detailed Tables are in <a href="http://www.eia.gov/consumption/commercial/terminology.cfm">CBECS Terminology</a>. These entries provide additional details and explanations of changes since the 2012 CBECS.</p>
		  
<p><strong>All buildings</strong>—The CBECS definition of all commercial buildings includes all roofed and walled structures whose principal activities are nonresidential, nonagricultural, and nonindustrial and that are larger than 1,000 square feet (about twice the size of a two-car garage).  </p>
		  
<p>All of the values in the Detailed Tables are statistical estimates of the U.S. commercial building population. The totals are estimated by applying sampling weights to a probability-based sample of buildings (see <a href="https://www.eia.gov/consumption/commercial/reports/2018/methodology/sampling.php">How  Were Buildings Selected for the 2018 CBECS?</a> for more information). </p>
		  
<p><strong>Principal building activity</strong>—This row category classifies the commercial activity that occupies the most floorspace in the building. Some building types are combined in the tables. For example, refrigerated and non-refrigerated warehouses were combined as <em>Warehouse and storage</em>, and skilled nursing care buildings are included in the <em>Lodging</em> category. See <a href="http://www.eia.gov/consumption/commercial/building-type-definitions.cfm">Description of Building Types</a> for a full description of the principal building activity categories.</p>
		  
<p><strong>Census region and division</strong>—These areas are the geographical areas as defined by the U.S. Census Bureau. See the <a href="http://www.eia.gov/consumption/commercial/census-maps.cfm">Census Regions and Divisions Map</a> for a map of the four census regions and nine census divisions. </p>
		  
<p><strong>Climate zone</strong>—The 2018 CBECS climate zones are based on groups of county-level climate zones as designated by the American Society of Heating, Refrigerating and Air-Conditioning Engineers (ASHRAE) in <em>Standard 169-2021, Climatic Data for Building Design Standards</em>. See <a href="https://www.eia.gov/consumption/commercial/maps.php">CBECS Maps</a> for more information. We stopped using Building America climate regions (as we did in the 2012 CBECS) following discussions with data users. </p>
		  
<p><strong>Ownership and occupancy</strong>—We slightly changed our question about owner occupancy between the 2012 and 2018 CBECS, which led to one change in the display of this row category. A note about the apparent growth in the number of federal buildings is also included.  </p>
<ul>
  <li>In 2012, for buildings that reported having more than one business or organization, the follow-up question about occupancy was “Is the space in this building occupied by the owner, leased to tenants, or a combination of both?” In 2018, we changed this question to “Does the owner occupy any space in the building?” Therefore, the 2018 row category no longer includes <em>Owner occupied and leased</em>, and the row for <em>Owner occupied</em> may include buildings that are occupied by the owner but also contain some leased spaces. 
</li><br />

  <li>The estimate for the number of federally owned buildings increased from 33,000 buildings in 2012 to 70,000 buildings in 2018. However, both of these estimates have relative standard errors (RSEs) around 25%, and therefore the increase is not statistically significant. See <a href="https://www.eia.gov/consumption/commercial/data/2018/rse.php">What is an  RSE?</a> for details on how to calculate whether or not the difference between two estimates is statistically significant. </li>
</ul>
<p><strong>Party responsible for operation of energy systems</strong>—In 2012, this question asked about the party responsible for the operation and maintenance of the energy systems. We realized that because one entity may be responsible for operation and another for maintenance, they should not be combined in one question. For 2018, the question asked only about the party responsible for the operation of the energy systems.</p>
<p><strong>Predominant exterior wall material</strong> and <strong>predominant roof material</strong>—The 2018 CBECS no longer allowed for a response of <em>No one major type</em>. In 2012, when an interviewer administered all interviews, there were <em>If volunteered</em> options for <em>Other</em> and <em>No one major type</em>. In 2018, to accommodate the online version, <em>Other</em> appeared in the list, but we removed <em>No one major type</em> to prevent over-reporting.</p>
<p><strong>Roof tilt</strong>—This row category is new as a standalone category; in 2012, it was part of the <em>Roof characteristics</em> row category.</p>
<p><strong>Cool roof characteristics</strong>—This row category is new and provides details that the 2018 CBECS added about cool roof qualities.</p>
<ul>
  <li>In 2012, the survey had one question about cool roofs, which was phrased, “Is the roof of this building designed to reduce solar heat gain, also known as a ‘cool roof’?” The following explanation was also provided: “Roofs with a highly reflective surface, a ballasted roof system, a vegetated roof system, or any combination of these technologies should be considered a ‘cool roof’.”</li><br />

  <li>In 2018, we redesigned the question to collect details about special qualities of the roof to make the <em>cool roof</em> determination less subjective. The question read, “Some roofs are designed to reflect more sunlight or absorb less heat than a standard roof. Which special qualities, if any, describe the roof of this building?” The response choices were:</li>
  <ul style="list-style-type: circle;">
    <li>White or highly reflective coating or paint </li>
    <li>White or highly reflective tiles or shingles </li>
    <li>Aluminum coating </li>
    <li>Ballasted roof system </li>
    <li>Vegetated roof</li>
    <li>Other </li>
    <li>None </li>
  </UL><li><em>Vegetated roof</em> and <em>other</em> are combined as <em>Other cool roof property</em> in this new row category.</ul>
<p><strong>Renovations since 2000</strong>—In the 2012 CBECS, this row category was called <em>Renovations in buildings constructed before 2008</em>.</p>
<ul>
  <li>Similar to the 2012 CBECS, for the 2018 CBECS, we asked the renovation question of all except the newest buildings (the question was skipped for buildings constructed from 2013 to 2018). For buildings constructed in 2000 or later, it was worded, “Has any portion of this building undergone renovations since it was constructed?” and for buildings constructed before 2000, “Has any portion of this building undergone renovations since the year 2000?” The data table also provides estimates for those buildings constructed since 2013 that were not asked about renovations.</li><br />

  <li>Also similar to the 2012 CBECS, within the follow-up list of types of renovations, one option was <em>Interior or exterior cosmetic improvements</em>. We re-coded the buildings that chose only this type of renovation as <em>No renovations</em>.</li><br />

  <li>The renovation type <em>Exterior</em> wall replacement was removed from the follow-up question about types of renovations and from the table row category.</li>
</ul>		  
		  
<p><strong>Energy sources</strong>—This row category tabulates buildings using each of the following energy sources for any purpose during the reference year: </p>
<ul>
  <li>Electricity</li>
  <li>Natural gas</li>
  <li>Fuel oil</li>
  <li>District heat (district steam or district hot water)</li>
  <li>District chilled water</li>
  <li>Propane</li>
  <li>Wood</li>
  <li>Coal</li>
  <li>Solar</li>
  <li>Other</li>
</ul>
<p>In Tables B1 and B2, wood, coal, and other sources are reported separately, but in the rest of the tables, they are combined into a category for <em>Wood, coal, and other</em>. Examples of <em>other</em> energy sources are waste oil and wind.</p>
		  
<p>In the building characteristics tables, this row category indicates the number of buildings or amount of floorspace in buildings that use each energy source for any purpose. For example, in Table B11 (Selected principal building activity), the value in the <em>Office</em> column and the <em>Natural gas</em> row should be interpreted as "{value} office buildings used natural gas for some purpose in 2018."</p>
		  
<p>In the consumption and expenditures tables, this row indicates total consumption in buildings that use each energy source for any purpose. For example, in Table C4, the value in the column <em>Sum of major fuel consumption per square foot</em> and the row <em>Fuel oil</em> should be interpreted as "Buildings that used fuel oil for any purpose consumed an average of {value} British thermal units combined with consumption from electricity, natural gas, and district heat per square foot in 2018." (It does not represent the consumption specifically of fuel oil.)</p>		  
		  
<p><strong>Space-heating energy sources, Primary space-heating energy source, Cooling energy sources, Water-heating energy sources, Cooking energy sources</strong>—These row categories tabulate buildings by energy sources used for the specified end use during the reference year. </p>
		  
<p>In the building characteristics tables, these row categories indicate the number of buildings or floorspace in buildings that use each energy source for the end use. These rows indicate total consumption in buildings that use each energy source for the end use. For example, in Table C23, the value in the column <em>Natural gas consumption</em> and the row <em>Natural gas</em> in the <em>Space-heating energy sources</em> row category should be interpreted as "{value} billion cubic feet of natural gas were used in buildings that use natural gas for space heating." (It does not represent the consumption of natural gas specifically for space heating; that value will be in both Tables E7 and E8 when they are released later this year.)</p>
		  
<p><strong>Energy end uses</strong>—This row category tabulates buildings in which some energy was used for the specific end uses (heating, air conditioning, water heating, cooking, manufacturing, and electricity generation) in the building during the reference year. For example, in Table B6 (Building size), the value in the <em>1,001 to 5,000 square feet column</em> and the <em>Buildings with cooking</em> row should be interpreted as “{value} buildings between 1,001 and 5,000 square feet in size used some energy for cooking in 2018.” As another example, in Table C1, data in the <em>Buildings with cooling</em> row and in the <em>Sum of major fuels</em> column should interpreted as "Buildings with cooling consumed a total of {value} trillion Btu of the major fuels." Note that it does not represent the amount of energy specifically used for cooling; that value will be in Table E1 when it is released later this year. </p>
		  
<p><strong>Percentage lit when open</strong>—Buildings that used electricity and reported being open at all were asked what percentage of the total square footage was lit when the building was normally open, and that response is categorized in this row category. In past CBECS, buildings that reported not being open at all (for example, vacant buildings) were not asked the lighting questions. We changed that sequence for the 2018 CBECS, asking buildings with no open hours “What percentage of the {value} square feet was usually lit?” However, for <em>Percentage lit when open</em>, such buildings are still included in the <em>Building never open/electricity not used</em> row, and their response is categorized in the <em>Percentage lit during off hours</em> row category.  </p>	
		  
<p><strong>Percentage lit during off hours</strong>—Three scenarios involve percentage lit during off hours. </p>
<ul>
  <li>Buildings with at least some operating hours that aren’t always open are asked “What percentage of the {value} square feet is lit during off hours, that is, the hours when the building is not normally open?” That response is categorized into one of three rows corresponding to their response: <em>0%, 1% to 50%, or 51% to 100%</em>.</li><br />

  <li>As described above in <em>Percentage lit when open</em>, buildings that reported not being open at all were asked “What percentage of the {value} square feet was usually lit?” Because these buildings are never open, all their hours can be considered <em>off hours</em>, so their response is placed here into one of three categories corresponding to their answer.</li><br />

  <li>For buildings that are always open, we precede the percentage lit during off hours question by asking “Are there any periods during a normal 24-hour day when some of the lights are turned off?” If no, the building is counted in the row <em>Building always open with no off hours</em>. If yes, we ask “What percentage of the {value} square feet is lit during off hours, that is, the time during a 24-hour period when some lights are turned off?”, and the building is counted in the row corresponding to the answer.  </li>
</ul>		  
		  
	  
	  
		  
<?php /* 	  
<p><strong>Space-heating energy sources</strong>—This row category tabulates buildings using each of the following energy sources for main or secondary space heating during the reference year:</p>
<ul>
  <li>Electricity</li>
  <li>Natural gas</li>
  <li>Fuel oil</li>
  <li>District heat (district steam or district hot water)</li>
  <li>Propane</li>
  <li>Wood</li>
  <li>Coal</li>
  <li>Solar</li>
  <li>Other</li>
</ul>
		  
<p>In Tables B1 and B2, wood, coal, solar, and other are reported separately, but in the rest of the tables they are combined into a category called <em>Other sources</em>. In the building characteristics tables, this row category indicates the number of buildings or floorspace in buildings that use each energy source for main or secondary space heating.</p>
<p><strong>Primary space-heating energy source</strong>—This row category tabulates buildings using each of the following energy sources for main space heating (that is, the energy source used to heat most of the square footage in the building most of the time) during the reference year:</p>
<ul>
  <li>Electricity</li>
  <li>Natural gas</li>
  <li>Fuel oil</li>
  <li>District heat (district steam or district hot water)</li>
  <li>Propane</li>
  <li>Wood</li>
  <li>Coal</li>
  <li>Solar</li>
  <li>Other</li>
</ul>
<p>In Tables B1 and B2, wood, coal, solar, and other are reported separately, but in the rest of the tables, they are combined into a category called <em>Other</em> sources. In the building characteristics tables, this row category indicates the number of buildings or floorspace in buildings that use each energy source for main space heating.</p>
<p><strong>Cooling energy source</strong>—This row category tabulates buildings using each of the following energy sources for cooling the building during the reference year: electricity, natural gas, and district chilled water. In the building characteristics tables, this row category indicates the number of buildings or floorspace in buildings that use each energy source for cooling. </p>
<p><strong>Water-heating energy source</strong>—This row category tabulates buildings using each of the following energy sources for water heating in the building during the reference year: electricity, natural gas, fuel oil, district heat (district steam or district hot water), and propane. In the building characteristics tables, this row category indicates the number of buildings or floorspace in buildings that use each energy source for water heating.</p>
<p><strong>Cooking energy source</strong>—This row category tabulates buildings using each of the following energy sources for cooking in the building during the reference year: electricity, natural gas, and propane. In the building characteristics tables, this row category indicates the number of buildings or floorspace in buildings that use each energy source for cooking.</p>
<p><strong>Energy end uses</strong>— This row category tabulates buildings in which some energy was used for the specific end uses (heating, air-conditioning, water heating, cooking, manufacturing, and electricity generation) in the building during the reference year. For example, in Table B6 (Building size), the figure in the <em>1,001 to 5,000 square feet column</em> and the <em>Buildings with cooking</em> row should be interpreted as “788,000 buildings between the sizes of 1,001 and 5,000 square feet used some energy for cooking in 2018.”</p>
		  
	 */ ?>		  

		  
		  
		  
		  
		  
<p><strong>Heating equipment</strong>—A comparison of the types of heating equipment reported between 2012 and 2018 reveals some notable differences. For example, more furnaces, boilers, and district heat were reported in 2018 than in 2012 and fewer packaged units. These changes are likely due more to questionnaire changes rather than to actual changes in the types of equipment being used in buildings. </p>
<ul>
  <li>The 2012 CBECS used a series of follow-up questions to the seven heating equipment types, which resulted in reclassification of some of the heating equipment types, especially furnaces and other heating equipment. (See the <a href="https://www.eia.gov/consumption/commercial/data/2012/guide.php">Guide to  the 2012 CBECS Detailed Tables</a> for further details). We did not use this type of reclassification in 2018. </li><br />

  <li>The 2018 CBECS equipment sections of the questionnaire were designed differently than previous years. Instead of collecting all the energy sources for heating and then all the equipment, which required assumptions about which source powered each equipment, the 2018 CBECS asked specifically which heating type was used with each source. We added duct reheat as a type of electrical heating equipment. </li><br />

  <li>The 2018 CBECS added some follow-up questions to try to better classify boilers inside the building versus district steam or hot water piped in from outside. This distinction is always difficult to convey to respondents. When district steam or hot water was reported as an energy source, we asked whether the steam or water was coming from a boiler in another building (such as a campus central plant), from a utility, or from a boiler inside the building. If it was from a boiler inside the building, we asked for the energy source used for the boiler, and that energy source became the heating source rather than district steam or hot water. Similarly, if they reported a boiler as equipment, we asked whether the boiler was in the building or in another building, and if it was in another building, then it was considered to be district heat. </li><br />

  <li>We modified the order of the heating equipment types to better match their prevalence in commercial buildings. We moved packaged central units to the top of the list, and moved furnaces from first in the list to fourth (and we changed the name from <em>Furnaces that heat air directly, without using steam or hot water</em> to <em>Residential-type furnaces</em>). We moved heat pumps up from fifth on the list to third.</li>
</ul>
		  
<p><strong>Cooling equipment</strong>—Cooling equipment reported from 2012 to 2018 also indicated some changes. More packaged units were reported in 2018 and fewer heat pumps and residential-type central air conditioners were reported. Like heating, these changes may be due to questionnaire changes rather than to actual changes in the types of equipment. </p>
<ul>
  <li>Similar to the heating section, the 2018 CBECS asked specifically which cooling type was used with each energy source. This section was simpler than the heating section because fewer possible energy source choices are available for cooling. Most buildings use either electricity or district chilled water for cooling. 

 </li><br />

  <li>The 2018 CBECS added some follow-up questions to try to better classify chillers inside the building versus district chilled water piped in from outside. This distinction is always difficult to convey to respondents. When district chilled water was reported as a source for cooling, we asked whether it was coming from a chiller in another building (such as a campus central plant), from a utility, or from a chiller inside the building. If it was from a chiller inside the building, the equipment became chiller rather than district chilled water. Similarly, if they reported a chiller as equipment, we asked whether it was in the building or in another building, and if it was in another building, then it was considered to be district chilled water.</li><br />

  <li>In the 2018 CBECS, the heat pump choice specified <em>other than components of a packaged central unit</em>, whereas in 2012 the packaged unit choice specified <em>other than heat pumps</em>. Therefore, in 2012, a packaged unit that contained a heat pump may have been classified as a heat pump, while in 2018, it would have been classified as a packaged unit. The 2018 CBECS asked a follow-up question about whether electric packaged units contained a heat pump.</li><br />

  <li>We modified the order of the cooling equipment types. We moved packaged air-conditioning units to the top of the list, and we moved residential-type air conditioners from first to fourth in the list (and we changed the name of the equipment from <em>residential-type central</em> air conditioners to <em>residential-type split system</em>). We suspected over-reporting of central air conditioners in the 2012 CBECS, and so we made these changes.</li>
</ul>
		  
<p><strong>Office equipment</strong>—Due to the evolving nature of office equipment, this row category has changed since the 2012 CBECS.</p>
<ul>
  <li>We removed the question about flat screen monitors because they are the vast majority of monitors currently in use. As a result, we deleted the row for <em>Desktop computers with flat screen monitors</em>.</li><br />

  <li>We added tablets to the types of computing equipment collected. When tablets were reported, we asked whether any of them were charged in the building. Most buildings that used tablets did charge them in the building; the tables show a row for <em>Tablets charged in the building</em> and exclude <em>buildings</em> with tablets not charged in the building
</li>
  <li>We replaced the questions about laser printers, inkjet printers, fax machines, and photocopiers with questions about large floor-standing office devices and smaller desktop office devices, in other words, any combination of printer, copier, scanner, or fax machine.</li><br />

  <li>We added rows in the tables for <em>Interactive whiteboards</em> and <em>Point-of-sales devices or cash registers</em>. In previous years, CBECS only asked about these devices for some building types, so they weren’t included in the tables. The 2018 CBECS asked about them for all building types. </li><br />

  <li>We added a row for <em>Televisions or video displays</em>. This information was previously reported in a row category for <em>Number of TVs or video displays</em>, which has been removed. We also removed row categories for number of desktop computers, laptop computers, dedicated servers, and photocopiers.</li>
</ul>
<p><strong>Separate computer areas</strong>—The 2018 CBECS added a category for <em>Server closet</em>, which is reported here. We added this category to help prevent over-reporting of data centers.</p>
<p><strong>HVAC features</strong>—This row category was previously called <em>HVAC conservation features</em>, but we have expanded it to include more than just conservation-related equipment.</p>
<ul>
  <li>We added rows for <em>Variable air volume (VAV) system, Dedicated outside air system (DOAS), and Demand controlled ventilation (DCV)</em>.</li><br />

  <li>The 2018 CBECS added a follow-up question for buildings that reported a building automation system (BAS) that asked whether the BAS controls the heating, cooling, or lighting. The BAS row in this category includes just buildings that reported BAS for heating or cooling (very few buildings only used the BAS for lighting). A row in the <em>Window and interior lighting features</em> row category shows how many buildings had BAS for lighting.</li><br />

  <li>We have added rows for <em>Internet-connected/smart thermostat and Programmable thermostat</em>. The question about internet-connected or smart thermostats was new to the 2018 CBECS and was only asked for buildings that did not have a building automation system. For buildings that didn’t have BAS or a smart thermostat, we showed a list of other methods of controlling the indoor temperature, one of which was a programmable thermostat.  </li>
</ul>
<p><strong>Electric vehicle (EV) charging</strong>—This new row category provides information about whether any electric vehicle charging stations were associated with the building, either inside or outside the building.   </p>
      </div>
		<div class="l-col">
			<?php include('consumption/commercial/includes/side-nav-commercial.inc'); ?>
		</div>
    </div>
	<?php include('global/footer/includes/footer.inc'); ?>
</body>
</html>