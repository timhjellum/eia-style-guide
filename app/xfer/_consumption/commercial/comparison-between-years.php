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
        <h1>Comparisons across surveys from the 1992 CBECS through the 2018 CBECS</h1>
		  <p>The following tables provide a high-level look at the ways that CBECS survey design and questionnaire items have evolved over six survey cycles, from 1992 through 2018. For data users who want to look further back, Appendix D of the <a href="/consumption/commercial/data/archive/pubs/024692.pdf">1992 report</a> compares 1986 through 1992.</p>
		  <p>The comparisons across the survey design and methodology (Table 1) and questionnaire items (Tables 2 through 8) are meant to convey major changes and do not cover every detail. See <a href="/consumption/commercial/survey-background-technical-information.php">survey methodology pages</a> and <a href="/survey/#eia-871">survey forms</a> for additional details by survey cycle. Data users should compare survey forms for different survey cycles to check for specific changes in questionnaire items, such as wording, question order, or response choice order. </p>
        <ul>
		  <li><a href="pdf/Comparison across CBECS surveys - Table 1.pdf">Table 1. Survey design and methodology</a></li>
          <li><a href="pdf/Comparison across CBECS surveys - Table 2.pdf">Table 2. Building size, age, and activity</a></li>
          <li><a href="pdf/Comparison across CBECS surveys - Table 3.pdf">Table 3. Structural characteristics</a></li>
          <li><a href="pdf/Comparison across CBECS surveys - Table 4.pdf">Table 4. Ownership, occupancy, hours, and workers</a></li>
          <li><a href="pdf/Comparison across CBECS surveys - Table 5.pdf">Table 5. Uses of space</a></li>
          <li><a href="pdf/Comparison across CBECS surveys - Table 6.pdf">Table 6. Energy sources, end uses, and consumption</a></li>
          <li><a href="pdf/Comparison across CBECS surveys - Table 7.pdf">Table 7. Energy-using equipmen</a>t</li>
          <li><a href="pdf/Comparison across CBECS surveys - Table 8.pdf">Table 8. Conservation and energy management characteristics and practices</a></li>
		  </ul>
      </div>
		<div class="l-col">
			<?php include('consumption/commercial/includes/side-nav-commercial.inc'); ?>
      </div>
    </div>
	<?php include('global/footer/includes/footer.inc'); ?>
</body>
</html>