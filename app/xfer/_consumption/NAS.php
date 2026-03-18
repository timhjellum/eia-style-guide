<?php $locale 		= 'overview'; ?>
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


	<div class="l-row l-two-col-right-narrow">

		<div class="l-col">
			<h1>An Assessment of EIA's Building Consumption Data</h1>
			<h3>Background</h3>
			<p><a href="http://www.nap.edu/catalog.php?record_id=13360"><img src="./images/CNSTAT.gif" width="0" alt="image of CNSTAT logo" /></a>The U.S. Energy Information Administration (EIA)
				routinely uses feedback from customers and outside experts to help improve its programs and products. As
				part of an assessment of its consumption surveys, EIA reached out to the National Academy of Sciences'
				Committee on National Statistics (CNSTAT) asking them to assess the Commercial Buildings Energy
				Consumption Survey (CBECS) and the Residential Energy Consumption Survey (RECS) and recommend
				improvements in data quality, geographic coverage, timeliness of data releases, and relevance of data
				for users.</p>
			<p>On February 10, 2012, a panel from CNSTAT released their assessment of EIA's surveys on residential and
				commercial buildings end-use energy consumption, titled <a href="http://www.nap.edu/catalog.php?record_id=13360"><em>Effective Tracking of Building Energy Use:
						Improving the Commercial Buildings and Residential Energy Consumption Surveys</em></a>. A
				summary of the major issues and recommendations identified in the report is provided below.</p>
			</p>
			<h3>Next Steps</h3>
			<p>EIA and the Committee on National Statistics are now meeting with statistical and industry experts to
				discuss the recommendations and implementation ideas. EIA will also undertake methodological research
				later this year to test the concept of expanded use of administrative records and alternative modes of
				data collection.</p>

			<h3>Major Issues and Recommendations</h3>
			<p>The panel report included 33 recommendations across five broad areas where EIA could direct resources to
				improve the RECS and CBECS programs.</p>
			<h2>Explore methods to improve timeliness, increase frequency and measure change</h2>
			<p>
				<?php /*     <ul class="split_2columns"> */ ?>
			<div class="ltblue_callout left">
				<span>
					<?php /* <h4>Did You Know?</h4> */ ?>
					<br />
					<p>RECS and CBECS currently rely on costly area probability sample frames, in-person interviews, and
						complex editing and estimation methods to achieve high response rates, accuracy on key survey
						items and good coverage of the sampled populations for Census Divisions, and, in the case of
						RECS, sixteen states. </p>
				</span>

			</div>
			</p>
			<strong>The panel recommended that EIA &mdash;</strong>
			<ul style="margin:1px 2px 5px 125px; padding:1px 5px 5px 165px; list-style-position:outside;">
				<li>Evaluate use of a smaller and more frequent rotating sample design</li>
				<li>Revisit a subset of buildings and housing units over time</li>
				<li>Use multiple modes to collect data (in person, telephone, mail, and web)</li>
				<li>Release data faster by revising processing procedures and producing early estimates from a
					representative sample of the surveys</li>
				<li>Engage more energy suppliers to identify efficiencies in collecting consumption and expenditures
					data</li>
				<li>Conduct research on the advantages of alternative sampling frames</li>
			</ul>

			<h2>Increase access to more data for public, academic, and commercial research uses </h2>
			<p>
				<?php /*     <ul class="split_2columns"> */ ?>
			<div class="ltblue_callout left">
				<span>
					<?php /* <h4>Did You Know?</h4> */ ?>
					<p>Some RECS and CBECS data tabulations do not meet EIA standards for statistical precision, and in
						some cases, the sampled units are so unique that data groups or items must be truncated or
						suppressed. Other data items are omitted in the public micro-datasets or statistically perturbed
						or top-coded to meet strict legal requirements to protect the privacy and confidentiality of
						survey respondents. Federal statistical agencies, however, are moving to more open access via
						secure research data centers. </p>
				</span>

			</div>
			</p>
			<strong> The panel recommended that EIA &mdash;</strong>
			<ul style="margin:1px 2px 5px 125px; padding:1px 5px 5px 165px; list-style-position:outside;">

				<li>Increase survey sample sizes to reduce data table suppressions</li>
				<li>Consider placing all microdata with small area geographic identifiers in one of the established,
					secure data research environments to foster innovation and insight in energy research</li>
			</ul>

			<h2>Work to balance respondent burden, data quality, and relevance</h2>
			<p>
				<?php /*     <ul class="split_2columns"> */ ?>
			<div class="ltblue_callout left">
				<span>
					<?php /* <h4>Did You Know?</h4> */ ?>
					<p>The current RECS interview averages about 50 minutes and includes physical measurements of the
						housing unit. The CBECS includes a respondent worksheet and a building interview, which averages
						about 35 minutes. Some survey questions are technical; respondents vary in their knowledge and
						ability to answer them.</p>
				</span>

			</div>
			</p>
			<strong> The panel recommended that EIA &mdash;</strong>
			<ul style="margin:1px 2px 5px 125px; padding:1px 5px 5px 165px; list-style-position:outside;">
				<li>Explore use of 'short' and 'long' form CBECS and RECS questionnaires</li>
				<li>Where possible, use administrative records to replace or reduce the need for existing or new survey
					questions</li>
				<li>Use energy auditors and routinely debrief survey interviewers to understand the quality of
					respondents' answers </li>
				<li>Review and update question wording</li>
			</ul>

			<h2>Fill data gaps, prepare for new energy uses and data sources</h2>
			<p>
				<?php /*     <ul class="split_2columns"> */ ?>
			<div class="ltblue_callout left">
				<span>
					<?php /* <h4>Did You Know?</h4> */ ?>
					<p>On their current quadrennial cycle, RECS and CBECS are vulnerable to missing the adoption of fast
						emerging, new uses of energy in buildings (e.g., big screen televisions in conference rooms
						instead of projectors), quality improvements that reduce consumption for familiar ones (LED for
						Plasma TVs), or substitution of new for old uses (smartphones for computers). Furthermore,
						program gaps should be filled, and new data sources should be researched.</p>
				</span>

			</div>
			</p>
			<strong> The panel recommended that EIA &mdash;</strong>
			<ul style="margin:1px 2px 5px 125px; padding:1px 5px 5px 165px; list-style-position:outside;">
				<li>Evaluate how well the surveys cover emerging energy uses </li>
				<li>Prepare to collect information on the capacity for electric vehicles</li>
				<li>Research uses of 'smart meter' data </li>
				<li>Fill the program gap on large multi-unit residential buildings by conducting a 'whole building'
					survey </li>
				</p>
			</ul>
			</ul>

			<h2>Suggestions for 'state-of-the-art' improvements</h2>
			<p>
				<?php /*     <ul class="split_2columns"> */ ?>
			<div class="ltblue_callout left">
				<span>
					<?php /* <h4>Did You Know?</h4> */ ?>
					<br />
					<p>The goals of the RECS and CBECS programs may also benefit from developing a variety of state of
						the art methods/tools.</p>
				</span>

			</div>
			</p>
			<strong> The panel recommended that EIA &mdash;</strong>
			<ul style="margin:1px 2px 5px 125px; padding:1px 5px 5px 165px; list-style-position:outside;">
				<li>Develop a comprehensive survey of all energy-consuming premises</li>
				<li>Develop Interactive online tools to engage sample members in understanding their home/building's
					energy consumption</li>
				<li>Use digital photographs to capture building and equipment characteristics</li>
				<li>Develop survey modules on special topics related to energy issues</li>
			</ul>



		</div>


		<div class="l-col">

			<?php include('consumption/includes/side_content_overview.inc'); ?>

		</div>
	</div>

	<?php include('adaptive/global/footer/includes/footer.inc'); ?>

</body>

</html>