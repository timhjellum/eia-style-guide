<!doctype html>
<?php
$globalTitle 	= 'U.S. Energy Information Administration (EIA)';
$pageTitle 		= "Residential Energy Consumption Survey (RECS) - Energy Information Administration";
$locale 		= 'overview';
$L2Title 		= "Residential Energy Consumption Survey (RECS)";
$page['year'] 	= 'home';
?>

<head>
	<title>
		<?=$pageTitle?> -
		<?=$globalTitle?>
	</title>
	<meta property="og:title" content="<?=$pageTitle?> - <?=$globalTitle?>">
	<meta property="og:url" content="https://www.eia.gov<?=$_SERVER['PHP_SELF']?>">
	<meta name="url" content="https://www.eia.gov<?=$_SERVER['PHP_SELF']?>">
	<?php include('adaptive/global/head/includes/head.inc'); ?>
	<title>
		<?=$pageTitle?> -
		<?=$globalTitle?>
	</title>
	<meta property="og:title" content="<?=$pageTitle?> - <?=$globalTitle?>">
	<meta property="og:url" content="https://www.eia.gov<?=$_SERVER['PHP_SELF']?>">
	<meta name="url" content="https://www.eia.gov<?=$_SERVER['PHP_SELF']?>">
</head>

<body>

	<!--  Outer Wrapper 
		<?php include('adaptive/global/header/includes/header.inc') ; ?>
		<?php include ('consumption/residential/includes/subnav_consumption_recs.inc') ; ?>
 -->
	<div class="l-row l-two-col-right-narrow">
		<div class="l-col">
			<!--  
				<?php include ('consumption/includes/side_nav_residential.inc') ; ?>
				-->
		</div>
		<div class="l-col">
			<div class="article">


				<!--  

				
-->

			</div>
		</div>
		<!-- <?php include('adaptive/global/footer/includes/footer.inc'); ?> -->
	</div>
</body>

</html>