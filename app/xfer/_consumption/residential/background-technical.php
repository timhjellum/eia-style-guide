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

  <div class="l-row l-two-col-right-narrow">
     <div class="l-col">

		<?php include('consumption/includes/side_nav_residential.inc'); ?>
      </div> 
    <div class="l-col">
      <h1>Survey Background and Technical Information</h1>
      <h2>Survey Background</h2>
      <p>The Residential  Energy Consumption Survey (RECS) is the only nationwide source of energy  related characteristics, consumption, and expenditures for U.S. homes.</p>
 <p>       The  RECS is a multi-phase study that begins with a household survey, which asks  respondents about physical characteristics of the home (such as the roofing  material and the number of windows), and energy use behaviors (such as how many  times per week the microwave is used). EIA then contacts the energy suppliers  for the housing unit to obtain the fuel consumption and expenditures data. For  example, if a home uses natural gas, EIA asks the natural gas supplier both how  many cubic feet of gas the home used, as well as how much that gas cost. Data  are combined within complex statistical models to dissagregate consumption into  estimates for end uses, including space heating, air conditioning, water  heating, and refrigeration.</p>
  <p>    RECS  began in 1978 as an annual survey. The 2015 RECS is the fourteenth  iteration of the survey.</p>
<h2>Technical Information</h2>
  <p>The following links  provide detailed information on RECS methodology, data quality (including the  kinds of errors associated with sample surveys), estimation of standard errors,  and end-use consumption estimation. Methodology for specific survey years is  linked below and can be found on the <strong><em>Methodology</em></strong> tab of the <strong><em>Data</em></strong> page for that survey year. Technical information for RECS surveys prior to 1993  is available upon request.
  </p>
  </p>
  <ul type="disc">
    <li><a href="/consumption/residential/data/2015/index.php?view=methodology">2015 RECS Methodology</a></li>
    <li><a href="https://www.eia.gov/consumption/residential/data/2009/index.php?view=methodology">2009 RECS Methodology &amp; Research</a>
      <ul>
        <li><a href="/consumption/residential/reports/2009/methodology-end-use.php">How does        EIA estimate energy consumption and end uses in U.S. homes?</a></li>
        <li><a href="/consumption/residential/reports/2009/methodology-square-footage.php">Where        does the RECS square footage data come from?</a></li>
        <li><a href="/consumption/residential/methodology/2009/pdf/faqs-enduse-models022013.pdf">End-use model FAQs</a></li>
        </ul>
    </li>
    <li><a href="/consumption/residential/reports/smartmetering/">An       assessment of interval data and their potential application to residential       electricity end-use modeling</a></li>
    <li><a href="/consumption/nas.php">As Assessment of EIA&rsquo;s Building Consumption Data</a></li>
    <li><a href="/consumption/residential/data/2001/index.php?view=methodology">2001 RECS Methodology </a></li>
    <li><a href="/consumption/residential/data/1997/index.php?view=methodology">1997 RECS Methodology </a></li>
    <li><a href="/consumption/residential/data/1993/index.php?view=methodology">1993 RECS       Data Quality</a></li>
  </ul>
<?php include('data/includes/recs_survey_manager_contact_info.inc'); ?>
    </div>

  </div>
<?php include('adaptive/global/footer/includes/footer.inc'); ?>
</div>


</body>
</html>