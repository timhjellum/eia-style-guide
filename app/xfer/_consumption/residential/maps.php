<?php
$pageTitle 		= '';
$locale 		= 'overview';

$page['year'] = '';
$L2Title = "Residential Energy Consumption Survey (RECS)";

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

<?php /*cfinclude template="/consumption/includes/side_nav_residential.cfm"*/ ?>
<?php include('../includes/side_nav_residential_data.inc'); ?>
          
        </div>
        <div class="l-col">
          <h1>Maps</h1>
  <!--        <h2><a name="recs-maps-census"></a>Census Regions &amp; Divisions map</h2>
<img src="/consumption/images/census_map.png" alt="Census Regions &amp; Divisions map" title="Census Regions &amp; Divisions map"/>
-->
  <h2><a name="recs-maps-bacr"></a>Building America Climate Regions &mdash; RECS 2009</h2><br />
  <img src="reports/images/climatezone_eere-lg.jpg" alt="Building America Climate Regions &mdash; RECS 2009"
    title="Building America Climate Regions &mdash; RECS 2009" />
  <br />
  <h2><a name="recs-maps-aia"></a>AIA Climate Zones &mdash; RECS 1978-2005</h2>
  <img src="reports/images/climatezone-lg.jpg" alt="AIA Climate Zones &mdash; RECS 1978-2005"
    title="AIA Climate Zones &mdash; RECS 1978-2005" />


  </div>

  </div>
  <?php include('adaptive/global/footer/includes/footer.inc'); ?>
  </div>

</body>

</html>