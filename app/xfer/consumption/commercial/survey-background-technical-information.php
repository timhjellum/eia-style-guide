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
    <h1><a name="survey_background" id="survey_background"></a>Survey Background and Technical Information</h1>
    <h2>Survey Background</h2>
    <p>The commercial sector encompasses a vast range of building types-service businesses, such as retail and wholesale stores, hotels and motels, restaurants, and hospitals, as well as certain buildings that would not be considered &quot;commercial&quot; in a traditional economic sense, such as public and private schools, correctional institutions, and religious and fraternal organizations. Excluded from the sector are the goods-producing industries: manufacturing, agriculture, mining, forestry and fisheries, and construction.</p>
    <p>Nearly all energy use in the commercial sector takes place in, or is associated with, the buildings that house these commercial activities. Analysis of the structures, activities, and equipment associated with different types of buildings is the clearest way to evaluate commercial sector energy use. The Commercial Buildings Energy Consumption Survey (CBECS) is a national-level sample survey of commercial buildings and their energy suppliers conducted quadrennially (previously triennially) by the Energy Information Administration (EIA). The 2018 CBECS was the eleventh survey in the series begun in 1979. From 1979 to 1986, the survey was known as the Nonresidential Buildings Energy Consumption Survey, or NBECS.</p>

    <h2>Technical Information</h2>
    <p>The following topics provide  detailed information on survey methodology, the kinds of errors associated with  sample surveys, estimation of standard errors, estimation of energy end-use  consumption, and the relationship between CBECS and EIA supply surveys. Methodology for specific survey years can be found on the&nbsp;<strong><em>Methodology</em> </strong>tab of the <em><strong>Data</strong></em> page for that survey year.  Specific technical information for older CBECS surveys are found in the  Appendices of the data reports for that year.</p>
    <ul>
      <li><a href="/consumption/commercial/data/2018/index.php?view=methodology">2018  CBECS Methodology &amp; Research</a></li>
      <li><a href="/consumption/commercial/data/2012/index.php?view=methodology">2012  CBECS Methodology &amp; Research</a></li>
      <li><a href="/consumption/commercial/data/2003/index.php?view=methodology">2003  CBECS Methodology &amp; Development</a></li>
      <li><a href="/consumption/commercial/data/1999/index.php?view=methodology">1999  CBECS Methodology &amp; Development</a></li>
      <li><a href="/consumption/commercial/data/1995/index.php?view=methodology">1995  CBECS Methodology &amp; Development</a></li>
      <li><a href="comparison-between-years.php">Comparisons across surveys from the 1992 CBECS through the 2018 CBECS</a></li>
      <li><a href="/consumption/commercial/data/2018/rse.php">What is a Relative Standard Error (RSE)?</a></li>
      <li><a href="estimation-of-standard-errors.php">Estimation of Standard Errors</a></li>
      <li><a href="estimation-enduse-consumption.php">Estimation of Energy End-Use Consumption</a></li>
      <li><a href="relationship-to-EIA-supply-surveys.php">Relationship of CBECS Coverage to EIA Supply Surveys</a></li>
    </ul>

    <p>EIA also conducts research to improve and expand CBECS data collection. Research results are provided below and may be found on the <strong><em>Methodology</em></strong> tab of the <strong><em>Data</em></strong> page for the applicable survey year.</p>

    <ul>
      <li><a href="/consumption/commercial/reports/2018/pilot/">2018 CBECS Data Center Pilot Results</a></li>
      <li><a href="/consumption/commercial/reports/2012/assessorexp/">Select Results from the Energy Assessor Experiment in the 2012 Commercial Buildings Energy Consumption Survey</a></li>
      <li><a href="/consumption/commercial/data/2012/pdf/green_certification_cbecs.pdf">Green Building Certification and the CBECS </a></li>
      <li><a href="/consumption/commercial/data/2012/pdf/green_buildings_cbecs.pdf">Comparison of energy data for green-certified and non-certified buildings in the 2012 CBECS</a></li>
      <li><a href="/consumption/commercial/reports/2012/water/">2012 CBECS: Water Consumption in Large Buildings Summary</a></li>
      <li><a href="/consumption/commercial/reports/2007/hospital-water-data-collection.php">Water Data Collection in the 2007 CBECS</a></li>
    </ul>
 	</div>
		<div class="l-col">
			<?php include('consumption/commercial/includes/side-nav-commercial.inc'); ?>
		</div>
	</div>
	<?php include('global/footer/includes/footer.inc'); ?>
</body>

</html>