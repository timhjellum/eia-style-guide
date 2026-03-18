<?php
$pageTitle 		= '';
$locale 		= 'overview';
$L2Title = "Residential Energy Consumption Survey (RECS)";

$page['year'] = 'home';
?>
<!doctype html>
<?php
$globalTitle 	= 'U.S. Energy Information Administration (EIA)';

$pageTitle          = '';

?>

<head>


	<style type="text/css">
		<!--
		p.MsoNormal {
			margin-top: 0in;
			margin-right: 0in;
			margin-bottom: 8.0pt;
			margin-left: 0in;
			line-height: 107%;
			font-size: 11.0pt;
			font-family: "Arial", sans-serif;
		}
		-->
	</style>
</head>

<body>


	<?php include('adaptive/global/header/includes/header.inc'); ?>
	<?php include('../includes/sub-navigation.inc'); ?>
	<!-- consumption_recs.inc'); ?>

	<div class="l-row l-two-col-right-narrow">
		<div class="l-col">

			<?php include('consumption/includes/side_nav_residential.inc'); ?>
		</div>
		<div class="l-col">
			<h1>About the RECS</h1>
			<p>EIA administers the Residential Energy Consumption Survey (RECS) to a nationally representative sample of housing units. Traditionally, specially trained interviewers collect energy characteristics on the housing unit, usage patterns, and household demographics. For the 2015 survey cycle, EIA used Web and mail forms, in addition to in-person interviews, to collect detailed information on household energy characteristics. This information is combined with data from energy suppliers to these homes to estimate energy costs and usage for heating, cooling, appliances and other end uses — information critical to meeting future energy demand and improving efficiency and building design.</p>
			<p>First conducted in 1978, the fourteenth RECS collected data from more than 5,600 households in housing units statistically selected to represent the 118.2 million housing units that are occupied as a primary residence. Data from the 2015 RECS are tabulated by geography and for particularly characteristics, such as housing unit type and income, that are of particular interest to energy analysis.</p>
			<p>The results of each RECS include data tables, a microdata file, and a series of reports. Data tables are generally organized across two headings; &quot;Household Characteristics&quot; and &quot;Consumption &amp; Expenditures.&quot; See <a href="/consumption/residential/data/2015/index.cfm">RECS data tables</a>.</p>
			<p>The RECS and many of the EIA supplier surveys are integral ingredients for some of EIA's more comprehensive data products and reports, such as the <a href="/forecasts/aeo/"><em>Annual Energy Outlook </em>(AEO)</a> and <a href="/totalenergy/data/monthly/index.php"><em>Monthly Energy Review</em> (MER)</a>. These products allow for broader comparisons across sectors, as well as projections of future consumption trends.</p>
			<p class="MsoNormal">&nbsp;</p>


		</div>

	</div>
	<?php include('adaptive/global/footer/includes/footer.inc'); ?>
	
</body>

</html>