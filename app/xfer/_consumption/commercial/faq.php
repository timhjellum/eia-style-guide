<!doctype html>

<?php
$globalTitle 	= 'U.S. Energy Information Administration (EIA)'; 
$pageTitle		= 'Commercial Buildings Energy Consumption Survey (CBECS)';
$L2Title = "Commercial Buildings Energy Consumption Survey (CBECS)";
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
					<h1>FAQs for CBECS</h1>
					<ul>
					<li><a href="#q1">What do you mean by <em>commercial</em>?</a></li>
					<li><a href="#q2">What do you mean by <em>building</em>?</a></li>
					<li><a href="#q3">Can I get this information by state (or county, or city,
									etc.)?</a></li>
					<li><a href="#q4">What does the figure <em>5,918,000 total commercial buildings</em> represent—is it the number in your sample or the actual number of buildings in the United States?</a></li>
					<li><a href="#q5">Are the consumption and expenditures estimates annual data?</a></li>
					<li><a href="#q6">How are 2018 CBECS data used?</a></li>
					<li><a href="#q7">Are historical CBECS data available?</a></li>
					<li><a href="#q8">Does EIA have any forecasts for growth in the commercial sector?</a></li>
					<li><a href="#q9">Are the data available by NAICS or SIC code?</a></li>
					<li><a href="#q10">Why do CBECS energy consumption estimates differ from the commercial data in other EIA publications?</a></li>
					<li><a href="#q11">Is it possible to obtain a list of all the buildings that participated in the CBECS?</a></li>
					<li><a href="#q12">Does CBECS collect information about data centers?</a></li>
					<li><a href="#q13">Is water consumption information available in CBECS?</a></li>
					<li><a href="#q14">For the 2007 CBECS, why is there information only for large hospitals and not for the rest of the commercial building population? </a></li>
				  </ul>

					<a id="general"></a>
					<a name="q1"></a>
				  <h3 style="font-weight:bold">What do you mean by <em>commercial?</em></h3>
					<p>In the CBECS, <em>commercial</em> refers to any building that is not primarily residential (used as a dwelling for one or more households), manufacturing or industrial (used for processing or procurement of goods, merchandise, raw materials, or food), or agricultural (used for the production, processing, sale, storage, or housing of agricultural products, including livestock). At least 50% of the floorspace must be used for purposes other than residential, manufacturing or industrial, or agricultural for a building to be considered commercial. For a list of commercial building types, see <em><a href="/consumption/commercial/building-type-definitions.php">Building type definitions</a></em>.</p>
					<a name="q2" id="q2"></a>
					<h3>What do you mean by <em>building</em>?</h3>
					<p>In the CBECS, a <em>building</em> is a structure totally enclosed by walls extending from the foundation to the roof, containing over 1,000 square feet of floorspace and ready for human occupancy during the reference year (not under construction, dilapidated, or condemned). Structures erected on pillars to elevate the first fully enclosed level but leaving the sides at ground level open are also included as buildings in the CBECS. CBECS collects data for the entire building, even when the building contains multiple businesses or addresses (such as shopping malls). When multiple buildings are part of a campus or complex (such
					as hospitals and universities), CBECS still collects data at the building level, sampling individual buildings on the campus.</p>
					<p>The CBECS specifically excludes the following buildings and structures:</p>
					<ul>
					<li>Buildings on military bases that are closed to the public or have restricted public access</li>
					<li>Foreign embassies</li>
					<li>Monuments</li>
					<li>Structures that people do not usually enter, such as oil storage tanks, the cooling towers of a nuclear power plant, and pumping stations</li>
					<li>Enclosed parking garages (included in previous CBECS before 1995)</li>
					<li>Commercial buildings on manufacturing sites (included in previous CBECS before 1995)</li>
					</ul>
					
					<a name="q3" id="q3"></a>
					<h3>Can I get this information by state (or county, or city, etc.)?</h3>
					<!-- Confidentiality link broken -->
					<p>No, unfortunately, because of sample size and <a href=""></a>confidentiality issues, CBECS does not produce state-level estimates. The smallest level of geographic detail for which data are available is by census division. The United States has nine census divisions (<a href="/consumption/commercial/maps.php">see the map</a> of state groupings for more information).</p>

					<a name="q4" id="q4"></a>
					<h3>What does the figure <em>5,918,000 total commercial buildings</em> represent&mdash;is it the number in your sample or the actual number of buildings in the United States?</h3>

					<p>This figure is an estimate of the number of commercial buildings in the United States in 2018. It is based on a sample of 6,436 buildings across the country that were statistically sampled and then weighted to represent the entire stock of commercial buildings in the United States. See the <a href="/consumption/commercial/data/2018/index.cfm?view=methodology">2018 CBECS Methodology</a> section for details and more information on sampling and how we conduct the survey.</p>

					<p><a name="q5" id="q5"></a>
					<h3>Are the consumption and expenditures estimates annual data?</h3>
					</p>
					<p>Yes, all data in the CBECS are annual figures for the survey year (for example, calendar year 2018).</p>

					<a name="q6" id="q6"></a>
					<h3>How are 2018 CBECS data used?</h3>
					<p>CBECS is the only independent, statistically representative source for the characteristics and energy use of commercial buildings in the United States. CBECS data serve as the baseline for a variety of planning, policy, program, and business purposes. CBECS informs our nation’s building codes, ENERGY STAR building benchmarks, energy models, and forecasts. Governments, academia, building owners, and others use CBECS data to update a variety of analyses about individual buildings, the building stock as a whole, and energy-consuming equipment and practices. The more recent 2018 reference year provides a much needed benchmark to refresh our understanding of how commercial buildings use energy, without including any temporary impacts from the COVID-19 pandemic.</p>

					<a name="q7" id="q7"></a>
					<h3>Are historical CBECS data available?</h3>
					<p>We have conducted the CBECS since 1979; the 2018 CBECS is the 11th iteration. Each survey cycle provides a snapshot of U.S. commercial buildings for a given point in time. Past CBECS data are available by reference year on the <a href="/consumption/commercial/">CBECS web page</a> in detailed tables, public use data, and special reports. Survey methodology is also documented by reference year as changes are made for each survey cycle. In addition, selected data from previous reference years are compiled in <em><a href="data/2018/xls/CBECS data by survey year.xlsx" class="ico_xls">Energy consumption in commercial buildings by major fuel, 1979 to 2018</a></em>, the special report <em><a href="/consumption/commercial/data/archive/cbecs/cbecs1f.html">Buildings and Energy in the 1980s</a></em>, and the <em><a  href="/totalenergy/data/annual/">Annual Energy Review</a></em> (Tables 2.9 and 2.10 include historical data through the 2003 CBECS).</p>

					<a name="q8" id="q8"></a>
					<h3>Does EIA have any forecasts for growth in the commercial sector?</h3>
					<p>EIA’s Office of Energy Analysis publishes the <em><a href="/outlooks/aeo/">Annual Energy Outlook</a></em>, which presents midterm projections and analyses of U.S. energy supply, demand, and prices through 2050. Tables 5 and 22 of the <a href="/outlooks/aeo/tables_ref.php"><em>Annual Energy Outlook</em> Reference tables</a> provides forecasts of commercial buildings energy consumption and floorspace through 2050 by type of building.</p>

					<a name="q9" id="q9"></a>
					<h3>Are the data available by NAICS or SIC code?</h3>
					<p>No, the CBECS principal building activities (PBAs) were designed to group buildings that have similar patterns of energy consumption, and they are much broader than the North American Industry Classification System (NAICS) or Standard Industrial Classification (SIC) codes. Many industry codes could have more than one possible CBECS PBA and more than one industry may be represented by the establishments located in a building. It is also somewhat difficult to compare these codes because CBECS deals with the buildings sector, whereas NAICS deals with the industry. For example, a dormitory on a college campus would be classified as <em>lodging</em> in the CBECS while the college is classified as <em>education</em> in NAICS or SIC. However, because of customer interest, we have created an <a
					href="/consumption/commercial/data/2018/pdf/NAICS-CBECS-Crosswalk.pdf">approximate crosswalk of 2018 NAICS codes for establishments located in buildings</a>.
					</p>

				  <a name="q10" id="q10"></a>
					<h3>Why do CBECS energy consumption estimates differ from the commercial data in other EIA publications?</h3>
					<p>The <em>Monthly Energy Review</em> (MER), State Energy Data System(SEDS), <em>Annual Energy Outlook</em> (AEO), and <em>Short-term Energy Outlook </em>(STEO) publish data for the <a href="/tools/glossary/index.php?id=Commercial%20sector">commercial sector</a>, while CBECS publishes data for <a href="/consumption/commercial/faq.php#q1">commercial</a> <a href="/consumption/commercial/faq.php#q2">buildings</a>. Although these data may seem to cover the same information, they are not entirely comparable. CBECS commercial buildings data exclude energy used outside of buildings or during construction, while commercial sector data include both building and non-building energy use. Examples of non-building energy use include energy consumed by unenclosed equipment (such as motor gasoline by non-highway vehicles or lawn and garden equipment), street lighting, exterior security systems, electricity plants not at a building, sewage treatment facilities, and stand-alone electric vehicle chargers.</p>
					<p>Methodology differences also exist. CBECS is a<a href="/consumption/commercial/data/2018/index.php?view=methodology"> sample survey</a> that collects building characteristics and energy consumption data for individual buildings from building and energy supplier respondents. MER, SEDS, and AEO commercial sector data are from state-level sales or delivery data collected from energy suppliers via other EIA surveys and non-EIA sources. Energy suppliers may classify customers as <em>commercial</em> based on their rate class or the amount of energy supplied and not necessarily on the type of activity occurring at the building. For example, an energy supplier may designate a small, non-energy-intensive assembly plant as a <em> commercial</em> customer (but CBECS excludes that building because its activity is  manufacturing), or an energy supplier may designate a large energy-intensive office or data center as an <em>industrial</em> customer (but CBECS includes it as a type of commercial building). An energy supplier may classify a complex with multiple buildings, such as a college campus, as a single commercial customer (but CBECS surveys individual buildings separately). In addition, energy suppliers may not have sufficient information about each customer to classify sales consistently with EIA&rsquo;s <a href="/tools/glossary/index.php?id=Commercial%20sector">commercial sector</a> definition.</p>
					<p>Lastly, the energy sources reflected in commercial consumption estimates differ. CBECS estimates commercial building consumption of four major fuels&mdash;electricity, natural gas, fuel oil, and district heat. MER  and SEDS estimate consumption of electricity, natural gas, distillate fuel oil, motor gasoline, propane, biomass, solar, wind, geothermal, hydroelectric power, coal, and other petroleum products. AEO estimates consumption of electricity, natural gas, fuel oil, motor gasoline, propane, steam coal, solar, and wind, as well as fuels consumed by combined-heat-and-power (CHP) technologies and district energy systems. STEO estimates commercial sector energy consumption  for electricity and natural gas. Commercial sector <a href="/tools/glossary/index.php?id=End-use%20energy%20consumption">end-use energy consumption</a> includes the consumption of primary energy, as it is first consumed, plus the electricity sales to commercial customers. Therefore, MER, SEDS, AEO, and STEO report natural gas delivered to commercial sector CHP plants as <em>natural gas</em> end-use energy consumption, while CBECS reports <a href="/consumption/commercial/terminology.php#S">site electricity</a> and <a href="/tools/glossary/index.php?id=district%20heat">district heat</a> delivered to individual buildings.</p>
				
					<p>This <a href="/consumption/commercial/pdf/EIA commercial consumption products.pdf" class="ico_pdf2">summary table</a> may be helpful when deciding which data to use. The table provides information on five EIA products that provide commercial energy consumption estimates and  highlights key differences in the commercial energy information published in each source. For example, CBECS and AEO estimate energy consumption by building <a href="/consumption/commercial/reports/2018/estimated-end-use.php">energy uses</a> and <a href="/consumption/commercial/building-type-definitions.php">activity types</a>, while MER, SEDS, and STEO do not. However, MER publishes a monthly historical time series of consumption estimates, and SEDS publishes more granular geographic estimates by state.</p>
                    
					<a name="q11" id="q11"></a>
					<h3>Is it possible to obtain a list of all the buildings that participated in the CBECS?
					</h3>
					<p>No, CBECS respondent information is used for statistical purposes and is strictly confidential by law. In accordance with the Confidential Information Protection and Statistical Efficiency Act of 2002 and other applicable federal laws, we must not disclose identifiable information about a respondent without consent. Every EIA employee, as well as every agent, is subject to a jail term, a fine, or both if he or she willfully discloses any identifiable respondent information.</p>
					<p>To ensure confidentiality, we remove all building identifiers from the data file before we create the public use microdata file, and we make the location of each building available only at the census-division level (groups of four to nine states). In addition, we do not disclose building characteristics that could potentially identify a particular responding building, such as number of floors, building square footage, and number of workers in the building, to protect the respondent's identity.</p>
				
				  <a name="q12" id="q12"></a>
					<h3>Does CBECS publish information about data centers?</h3>
					<p>Yes, we publish information about data center spaces but not as a separate building type. We publish information on data center spaces within buildings that are primarily used for another purpose, such as office or education buildings. Separate data center buildings are grouped into the Other category in CBECS along with other buildings that do not fit into the list of CBECS principal building activity categories, such as airplane hangars, laboratories, and public restrooms.</p>
					<p>We assessed the feasibility of publishing information about data centers as a separate building type as part of the 2018 CBECS data collection. We conducted a <a href="/consumption/commercial/reports/2018/pilot/">pilot study</a> of 50 data center buildings. The study found that we would need both a high-quality frame and industry cooperation to collect statistically valid building characteristics and energy consumption estimates for data center buildings as a separate building type in future collections.</p>

				  <a name="q13" id="q13"></a>
					<h3>Is water consumption information available in CBECS?</h3>
					<p>Because water and energy consumption are connected in many ways, we, in cooperation with the U.S. Environmental Protection Agency (EPA), added water usage questions to the 2007 and 2012 CBECS. After performing extensive data quality checks on the 2012 CBECS responses, we determined that the data for <a									href="/consumption/commercial/reports/2012/water/index.php">water consumption in large buildings</a> met our quality standards for
					publication. Due to the low response rate for water data and lack of authority and funding to conduct a follow-up water supplier survey, water consumption data was not collected in the 2018 CBECS.</p>

				  <a name="q14" id="q14"></a>
					<h3>For the 2007 CBECS, why is there information only for large hospitals and not for the rest of the commercial building population?</h3>
					<p>A majority of the 2007 CBECS buildings were sampled from a frame that used a less expensive experimental method to update the 2003 frame for new construction. After careful analysis, we determined that the buildings sampled from this experimental frame were not representative of the commercial building population. As a result, the 2007 CBECS sample as a whole did not meet our standards for quality, credible energy information. However, the large hospital buildings are a subset of the CBECS sample that was not sampled from the experimental frame. They were sampled from high-quality, well-established lists of hospitals, federal buildings, and other large buildings. We did a thorough evaluation of this frame and the data collected from its sampled units and deemed them to be representative of the large hospital building population as a whole. See <em><a href="/consumption/commercial/reports/2007/large-hospital.php">Energy Characteristics and Energy Consumed in Large Hospital Buildings in the United States in 2007</a></em> for the report, methodology, and data tables.</p>
				</div>
		<div class="l-col">
			<?php include('consumption/commercial/includes/side-nav-commercial.inc'); ?>
				</div>
		</div>
	<?php include('global/footer/includes/footer.inc'); ?>
</body>

</html>