<!doctype html>
<?php
$globalTitle 	= 'U.S. Energy Information Administration (EIA)';
$pageTitle          = '';

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
</head>

<body>

	<?php include('adaptive/global/header/includes/header.inc'); ?>
	<?php include('./includes/subnav_consumption.inc'); ?>


	<div class="l-row mr_temp3">
		<div class="l-col">




			<?php include('./includes/side_content_analysis.inc'); ?>

		</div>
		<div class="l-col">
			<h1>Energy End Use: What's New</h1>
			<?php /* Data Example */ ?>
			<h2><a name="2009RECS" id="2009RECS"></a>2009 RECS Update: Household Energy Characteristics Data Coming Soon
				<br />
			</h2>
			<p>EIA will begin releasing survey results from the latest RECS in the first quarter of 2011. &nbsp;Initial
				data tables will show energy characteristics of U.S. homes, including structural features, fuels used,
				heating and cooling equipment, appliances, and energy usage patterns. &nbsp;New to the 2009 RECS are
				expanded statistics about home electronics and energy efficiency, as well as state-level estimates</p>
			<p>The larger sample size of the 2009 RECS will allow EIA to release state-level estimates for at least 15
				states. These states, shaded on the map below, are varied in their geography, climate, and size.
				Previously, RECS produced estimates for only the four largest states: California, Texas, New York, and
				Florida.</p>
			<p> &nbsp;A follow-on survey to collect energy consumption and expenditures data for RECS households begins
				in February 2011. &nbsp;Results from this survey will be posted in late 2011 or early 2012.</p>
			<p class="p"><img src="/consumption/images/map_color_recs-300h.gif" height="" alt="2009 RECS states surveyed" />
			<div style="float:left; margin-left:25px">2005 states surveyed in Red, 2009 states in Red and Blue&nbsp;
			</div>
			</p>
			<?php /* Additional Links */ ?>
			<?php /* SubData Example */ ?>
			<hr />
			<h2><a href="#">Analysis Link (No format other than HTML)</a></h2>
			<p class="date"><em>Date Stamp</em></p>
			<p>Short description</p>

			<?php /* Additional Links */ ?>
			<span class="pub_links"><a href="#">Additional links (if needed)</a> <a href="#" class="no-border">Single/Last additional link</a></span>
			<?php /* Additional Links */ ?>
			<hr />
			<h2><a href="#">Example Stand Alone Link</a></h2>





		</div>

		<?php include('adaptive/global/footer/includes/footer.inc'); ?>
	</div>

</body>

</html>