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
      <h1>About the RECS</h1>
      <p>EIA administers the Residential Energy Consumption Survey (RECS) to a  nationally representative sample of housing units. Traditionally, specially  trained interviewers collect energy characteristics on the housing unit, usage  patterns, and household demographics. For the 2020 survey cycle, EIA used Web and mail forms to collect detailed information on household energy characteristics. This information is combined with data from energy suppliers to these homes to estimate energy costs and usage for  heating, cooling, appliances and other end uses — information critical to  meeting future energy demand and improving efficiency and building design. </p>
<p>First conducted in 1978, the fifteenth  RECS collected data from nearly 18,500  households in housing units statistically selected to represent the 123.5 million housing units that are occupied as a primary residence. Data from the  2020 RECS are tabulated by geography and for particularly characteristics, such as housing unit type and income, that are of particular interest to energy analysis.</p>
<p>The results of each RECS include data tables, a microdata file, and a series of reports. Data tables are generally organized across two headings; &quot;Household Characteristics&quot;  and &quot;Consumption &amp; Expenditures.&quot; See <a href="/consumption/residential/data/2020/">RECS data tables</a>.</p>
      <p>The RECS and many of the EIA  supplier surveys are integral ingredients for some of EIA's more comprehensive  data products and reports, such as the <a href="/forecasts/aeo/"><em>Annual Energy Outlook </em>(AEO)</a> and <a href="/totalenergy/data/monthly/index.php"><em>Monthly Energy  Review</em> (MER)</a>. These products allow for broader comparisons  across sectors, as well as projections of future consumption trends. </p>
    </div>
		<div class="l-col">
			<?php include('consumption/commercial/includes/side-nav-commercial.inc'); ?>
		</div>
  </div>
	<?php include('global/footer/includes/footer.inc'); ?>
</body>
</html>