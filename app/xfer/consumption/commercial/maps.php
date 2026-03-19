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
<h1>Maps</h1>
	
<p>These maps illustrate geographic areas used in the Commercial Buildings Energy Consumption Survey (CBECS). </p>
<ul>
  <li><a href="#census">U.S. census regions and divisions</a></li>
  <li><a href="#ASHRAE">U.S. climate zones for 2018 CBECS</a></li>
  <li><a href="#recs-maps-bacr">Building America climate regions (2012 CBECS)</a></li>
  <li><a href="#2003climate">U.S. climate zones for 2003 CBECS</a></li>
  <li><a href="#prevclimate">U.S. climate zones for 1979-1999 CBECS</a></li>
  <li><a href="#defines">Definitions of CBECS climate zones</a></li>
</ul>
<br />

<h2><a name="census"></a>U.S. census regions and divisions:</h2>	

<img src="images/cendivco_new.gif"  alt="U.S. census regions and divisions Map" width="580"/>
	<p>&nbsp;</p>
<p>Data source: U.S. Census Bureau</p>
<p>&nbsp;</p><br />	
	
	

<h2><a name="ASHRAE"></a>U.S. climate zones for 2018 CBECS:</h2>
<img src="images/ClimateRegionMap.png" alt="ASHRAE climate zones" width="590px"
/><p>&nbsp;</p>
<p>Data source: ANSI/ASHRAE  Standard 169-2021, <em>Climatic Data for Building  Design Standards</em><br />
Note: Adapted with permission from Figure A‐2, Climate zones for United States counties, ANSI/ASHRAE <br />Standard 169-2021, <em>Climatic Data for Building Design Standards</em>, © 2021 ASHRAE.</p>
<p>&nbsp;</p><br /><br />
	
	
	
<h2><a name="recs-maps-bacr"></a>Building America climate regions (2012 CBECS):</h2>	
<img src="data/2012/images/climatezone_eere-lg.jpg" alt="Building America Climate Regions &mdash; RECS 2009" title="Building America Climate Regions &mdash; RECS 2009"/></a><p>&nbsp;</p>
<p>Data source: U.S. Department of Energy, Building America program</p>
<p>&nbsp;</p><br />
	
	
	
	
<h2><a name="2003climate"></a>U.S. climate zones for 2003 CBECS:</h2>

<img src="data/archive/cbecs/climzonenew.gif" alt="U.S. census regions and divisions Map" /><p>&nbsp;</p>

<p>Data source: National Oceanic and Atmospheric Administration</p>
<p>&nbsp;</p><br />
	
	
	
	
<h2><a name="prevclimate"></a>U.S. climate zones for 1979-1999 CBECS:</h2><br />

<img src="data/archive/cbecs/climzone.gif" alt="U.S. census regions and divisions Map" /><p>&nbsp;</p>

<p>Data source: National Oceanic and Atmospheric Administration</p>
<p>&nbsp;</p><br />


	
<h1><a name="defines"></a>Definitions of CBECS climate zones</h1>
	
<h2>2018 CBECS</h2>
<p>The 2018 CBECS climate zones are based on groups of county-level American Society of Heating, Refrigerating and Air-Conditioning Engineers (ASHRAE) climate zones as designated in <a href="https://www.ashrae.org/news/ashraejournal/size-and-design-right-how-standard-169-helps-engineers-with-updated-climate-data">ANSI/ASHRAE  Standard 169-2021, <em>Climatic Data for Building  Design Standards</em></a>. ASHRAE labels climate zones with numbers and letters. Numbers reflect the thermal climate zone and are determined by annual average heating degree days and cooling degree days. Letters reflect marine, dry, or humid moisture zones and are determined by precipitation and temperatures. The period of record for weather data used in Standard 169-2021 was from 1994 to 2019. </p>
<table cellpadding="0" cellspacing="0" class="basic_table" width="70%">
  <caption>
  ASHRAE climate zones combined by thermal climate zones (2018 CBECS)
  </caption>
  <thead>
    <tr>
      <th><strong>Climate zone for 2018 CBECS</strong></th>
      <th><strong>U.S. climate zones for 2018 CBECS</strong></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Cold or very cold</td>
      <td>6A, 6B, 7, 8</td>
    </tr>
    <tr>
      <td>Cool</td>
      <td>5A, 5B, 5C</td>
    </tr>
    <tr>
      <td>Mixed mild</td>
      <td>4A, 4B, 4C</td>
    </tr>
    <tr>
      <td>Warm</td>
      <td>3A, 3B, 3C</td>
    </tr>
    <tr>
      <td>Hot or very hot</td>
      <td>1A, 1B, 2A, 2B</td>
    </tr>
  </tbody>
</table>	
	
	
<h2>2012 CBECS: </h2>
<p>The 2012 CBECS reported <a href="http://energy.gov/eere/buildings/climate-zones">climate regions created by the Building America program</a>, sponsored by the U.S. Department of Energy’s Office of Energy Efficiency and Renewable Energy (EERE). EERE’s <a href="http://energy.gov/eere/buildings/downloads/building-america-best-practices-series-volume-73-guide-determining-climate">Guide to Determining Climate Regions by County</a> contains a list of all U.S. counties by climate region. </p>
<p>
<h2><a name="defined"></a>2003 CBECS:</h2>

<p>The CBECS climate zones were groups of climate divisions, as defined by the National Oceanic and Atmospheric Administration (NOAA), which are regions within a state that are as climatically homogeneous as possible. Each NOAA climate division was placed into one of five CBECS climate zones based on its 30-year average heating degree days (HDD) and cooling degree days (CDD) for the period 1971 through 2000. (These climate zones were updated for the 2003 CBECS. All previous CBECS cycles used averages for the 45-year period from 1931 through 1975.)</p>
<p>An HDD is a measure of how cold a location was over a period of time, relative to a base temperature (in CBECS, 65°F). The heating degree day is the difference between that day's average temperature and 65°F if the daily average is less than 65°F; it is zero if the daily average temperature is greater than or equal to 65°F. For example, if the average temperature for a given day is 40°F, then the heating degree days for that single day equal 25. Heating degree days for a year are the sum of the daily heating degree days that year.</p>
<p>Similarly, a CDD is a measure of how hot a location was over a period of time, relative to a base temperature (65°F). The cooling degree day is the difference between that day's average temperature and 65°F if the daily average is greater than 65°F; it is zero if the daily average temperature is less than or equal to 65°F. For example, if the average temperature for a given day is 80°F, then the cooling degree days for that single day equal 15. Cooling degree days for a year are the sum of the daily cooling degree days for that year.</p>
<p>There are 359 NOAA climate divisions within the 50 U.S. states. Boundaries of these divisions generally coincide with county boundaries, except in the western United States, where they are based largely on drainage basins. A <a href="http://www.esrl.noaa.gov/psd/data/usclimdivs/data/map.html">map</a> of all the NOAA climate divisions in the United States is available online. Individual <a href="http://www.cpc.ncep.noaa.gov/products/analysis_monitoring/regional_monitoring/CLIM_DIVS/states_counties_climate-divisions.shtml">state  maps</a> that show the NOAA climate divisions by county are also available online.</p>
<p>Each building in CBECS was assigned a CBECS climate zone based on the 30-year average (1971–2000) HDD and CDD (base 65°F) for the NOAA climate division in which the weather station closest to the sampled building is located. </p>
<table cellpadding="0" cellspacing="0" class="basic_table" width="100%">
  <caption>
  Ranges of HDD and CDD used to determine climate zones
  </caption>
  <thead>
    <tr>
      <th><strong>Climate Zone</strong></th>
      <th><strong>Cooling Degree Days</strong></th>
      <th><strong>Heating Degree Days</strong></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Fewer than 2,000</td>
      <td>More than 7,000</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Fewer than 2,000</td>
      <td>5,500 to 7,000</td>
    </tr>
    <tr>
      <td>3</td>
      <td>Fewer than 2,000</td>
      <td>4,000 to 5,499</td>
    </tr>
    <tr>
      <td>4</td>
      <td>Fewer than 2,000</td>
      <td>Fewer than 4,000</td>
    </tr>
    <tr>
      <td>5</td>
      <td>2,000 or More</td>
      <td>Fewer than 4,000</td>
    </tr>
  </tbody>
</table>
<p><a href="https://www.eia.gov/consumption/commercial/archive/cbecs/CBECS%20climate%20zones%20by%20county.xls">This Excel file</a> provides the CBECS climate zone for each U.S. county. Usually, there is  only one climate zone per county and the mapping is straightforward. However,  in some of the Western states, the NOAA climate divisions (on which the CBECS  climate zones are based) are defined more by drainage basins than by counties,  and so sometimes there is more than one climate zone per county.</p>
	</div>
		<div class="l-col">
			<?php include('consumption/commercial/includes/side-nav-commercial.inc'); ?>
		</div>
	</div>
	<?php include('global/footer/includes/footer.inc'); ?>
</body>

</html>