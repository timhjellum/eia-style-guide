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
    <h1>Estimation of Energy End-use Consumption</h1>
    <p class="dat">CBECS 2012 - Release date: March 18, 2016</p>
    <h2>2012 CBECS</h2>
    <p>The energy end-use  consumption tables for the 2012 CBECS <a href="/consumption/commercial/data/2012/index.php?view=consumption">Detailed Tables E1-E11</a> provide estimates of the amount of  electricity, natural gas, fuel oil, and district heat used for ten end uses:  space heating, cooling, ventilation, water heating, lighting, cooking,  refrigeration, computing (including servers), office equipment, and other uses.</p>
    <p>Although details  vary by energy source, there are three basic steps in the end-use estimation  process:</p>
    <ul>
      <li>Engineering modeling by end use,</li>
      <li>Cross-sectional regressions to calibrate the engineering  estimates and account for additional energy uses, and</li>
      <li>Reconciliation of the end-use estimates to the CBECS total  building energy consumption.</li>
    </ul>
<h2>Engineering End-use Models</h2>
<p>The engineering  end-use models are the heart of the end-use estimation procedure. Sources for  the engineering equations were from ASHRAE, Illuminating Engineering Society of  North America (IESNA), and other standard engineering handbooks. Up-to-date parameter  values came from these handbooks and from large-scale field studies of  commercial buildings.</p>
  <p><strong>Space Heating and Cooling</strong>.</strong>&nbsp;The early stages of the heating  and cooling models estimate the total energy required or expected for heating  and cooling in the building. The models account for building heat loss (or  gain) as a function of the building&rsquo;s weighted average conductance and annual heating  (or cooling) degree days, based on the thermal properties of the roof and wall  materials. Additionally, the models account for ventilation heat loss (or gain)  as a function of the volume of external air brought into a building each day,  the temperature difference between the outside air and the inside air, and the  heat capacity of air. Once the total energy required for heating and cooling  has been estimated, the amount of each specific fuel used for heating and  cooling is modeled using CBECS information on the fuels used, the equipment  type, average estimates for equipment efficiency, and estimated percentage of  heated or cooled floorspace.</p>
  
  <p><strong>Ventilation.&nbsp;</strong>The engineering model for ventilation  estimates supply and return fan energy use. To estimate total ventilation air  volume, the model relies on the external air ventilation volumes. The model  accounts for differences in static pressure by system type and by building  floorspace. Typical meteorological year data helped develop estimates of  variable air-volume energy factors by climate zone.</p>
 <p>   <strong>Water Heating.</strong>&nbsp;The water heating model uses  building activity and size measures from the CBECS interview to estimate the  amount of hot water required in the building. The ground water temperature and  the system efficiency of the water heating equipment is used to convert this  estimate to total energy consumed. To account for the variation in energy use  by system type, the model uses indicators about equipment type and whether the  water is supplied by instant-heating types to determine whether storage and  distribution are used. Additional energy use is estimated in systems with  booster water heaters that operate at high temperatures. </p>
<p>    <strong>Lighting.</strong>&nbsp;The lighting model estimates electricity consumption  from internal and external lighting for all building types. The model  calculates energy use as a factor of average lamp power per floorspace and  average annual operating hours. The interior lighting portion relies on  information from CBECS on percentage floorspace lit by each lamp type, and  building operating hours. The model assumes average lamp system efficacy (lumens  per watt) for each lamp type, and recommended average illuminance levels by  building type.</p>
<p><strong>Cooking.</strong>&nbsp;The cooking model  estimates cooking energy consumption for natural gas and electricity.  Commercial kitchens can be quite varied in their set-ups but limited  information is collected by CBECS on the types and number of cooking equipment  used by commercial buildings. Although few commercial cooking energy  consumption studies exist, the 2005 California Commercial End-use Survey (CEuS)  sponsored by the California Energy Commission (<em>California Commercial End-use  Survey</em>. CEC-400-2006-005. Sacramento, CA: CEC, 2006) provides  estimated conditional intensities. The present model combines the CEuS  intensities along with CBECS information on floorspace and CBECS indicators of  cooking fuel use. The amount of fuel oil and district heat used for cooking was  estimated using 2003 CBECS end use intensities. </p>
<p>  <strong>    Refrigeration.</strong>&nbsp;The refrigeration model calculates commercial  refrigeration electricity consumption. CBECS collects information on the  number, but not the size, of refrigerators used by commercial buildings. The  model incorporates the CBECS information on the number of refrigerators and  building type, but relies predominantly on CEuS end-use intensity estimates, by  building type, to estimate refrigeration consumption.</p>
<p>  <strong>Office Equipment and Computing.</strong>&nbsp;The office equipment  model estimates electricity consumption from office equipment for all building  types. The model divides office equipment electricity consumption into two components,  computer equipment versus other office electric loads. Computer equipment  includes PCs, laptops, monitors, servers, and data centers. The  non-computer-based equipment includes copiers, printers, FAX machines, cash  registers, and video displays.</p>
<p>  <strong>Other.</strong>&nbsp;The model for miscellaneous uses for electricity relies on  engineering estimates. Since many types of equipment use electricity, CBECS  does not explicitly ask if electricity is used for unspecified &ldquo;other&rdquo; uses of  electricity. Therefore, the engineering model estimates &ldquo;other&rdquo; electricity use  by applying the CEuS intensities for miscellaneous, process equipment, motors,  and air compressors to the CBECS floorspace. These estimates were then adjusted  for the number of months of building operation per year. Since district heat is  primarily used for heating, water heating, cooling, and cooking end-uses, which  were explicitly modeled, and given the relatively small number of cases and  lack of information, the district model does not calculate &ldquo;other&rdquo; consumption.  For fuel oil and natural gas, the model for other energy use is based on  regression estimates.</p>
<p><strong>Cross-sectional Regressions</strong> 
  Cross-sectional  regression models were used to calibrate the engineering estimates. The  cross-sectional regression models were fit with consumption per square foot as  the dependent variable and the independent variables were defined on a  corresponding scale. Besides the engineering estimates, the independent variables  could include dummy variables for the presence of energy intensive equipment or  processes, such as fuel used for manufacturing or electricity generation.  Additional dummy variables were defined to indicate some other fuel was used as  a secondary heating source in the building.</p>
 <p> <strong>Final Reconciliation</strong> <br />
  For buildings with  known consumption of a particular fuel, the ratio between that consumption and  the total of the modeled estimates of that fuel&rsquo;s end use consumption was  calculated, and this reconciliation ratio was applied to the modeled end use  estimates to ensure that these estimates added up to the total reported  consumption.</p>
<p>  For buildings where  the total consumption of electricity or natural gas was unknown, it was  necessary to impute that consumption. The modelled end uses were used as the  basis for this imputation. Since no reconciliation ratio could be calculated  for these buildings, the buildings with known consumption were grouped  according to principal building activity. The median reconciliation ratio for  each activity group was calculated and applied to the buildings with unknown  consumption in that group to obtain the final imputed estimate of consumption.  A similar process was used for fuel oil and district heat, except that the  groups were formed using different variables to accommodate the smaller sample  size of buildings using these fuels.<a name="1999" id="19992"></a></p>

<h2>2003 CBECS</h2>
<p>The energy end-use consumption tables for 2003 (<a href="/consumption/commercial/data/2003/index.php?view=consumption#e1">Detailed Tables E1-E11 and E1A-E11A</a>) provide estimates of the amount of electricity, natural gas, fuel oil, and district heat used for ten end uses: space heating, cooling, ventilation, water heating, lighting, cooking, refrigeration, personal computers, office equipment (including servers), and other uses.</p>
<p>Although details vary by energy source (Table 1), there are four basic steps in the end-use estimation process:</p>
  <ul>
    <li>Regressions of monthly consumption on degree-days to establish reference temperatures for the engineering models,</li>
    <li>Engineering modeling by end use,</li>
    <li>Cross-sectional regressions to calibrate the engineering estimates and account for additional energy uses, and</li>
    <li>Reconciliation of the end-use estimates to the CBECS total building energy consumption.</li>
  </ul>


<table width="100%" class="basic_table">
<caption>
Table 1. Summary of Steps to Estimate End-use Consumption by Energy Source, 2003 CBECS
</caption>
    <thead>
      <tr>
        <th width="28%">Steps</th>
        <th width="21%" style="text-align:left" >Electricity</th>
        <th width="18%" style="text-align:left" >Natural Gas</th>
        <th width="14%" style="text-align:left">Fuel Oil</th>
        <th width="18%" style="text-align:left" >District Heat</th>
      </tr>
  </thead>
<tbody>
      <tr>
        <td><strong>Monthly Regressions</strong></td>
        <td style="text-align:left">Performed using data from 1,500 buildings</td>
        <td  style="text-align:left">Performed using data from 1,000 buildings</td>
        <td style="text-align:left" colspan="2">Monthly data not available, used natural gas results</td>
      </tr>
      <tr>
        <td><strong>Engineering Models</strong></td>
        <td style="text-align:left" >Specified for all end uses</td>
        <td style="text-align:left" colspan="2">Specified for all end uses except secondary heating, cooking, and &quot;other&quot; uses</td>
        <td style="text-align:left" >Specified for all relevant end use</td>
      </tr>
      <tr>
        <td><strong>Cross-Sectional Regressions</strong></td>
        <td style="text-align:left"  >Not performed</td>
        <td style="text-align:left" colspan="2">Performed</td>
        <td style="text-align:left">Not performed</td>
      </tr>
      <tr>
        <td><strong>Reconciliation and Proration</strong></td>
        <td style="text-align:left" >Monthly regressions results used to adjust heating and cooling, then prorated</td>
        <td style="text-align:left"colspan="3">Prorated to match total building energy consumption</td>
     </tr>
  </tbody><tfoot><td  colspan="5"></td><td width="1%"></tfoot>
</table>

<p><strong>Monthly Regressions</strong></p>
<p>Monthly consumption data and degree-day data were available for about 1,500 buildings for electricity and 1,000 buildings for natural gas in the 2003 building sample. These data allow us to analyze the dependence of consumption on temperature. The degree-day terms were calculated for the periods defined by the actual meter-read dates each month for each case. The results of the analysis determine appropriate degree-day bases for modeling heating and cooling energy use. The median estimated reference temperatures serve as inputs to the engineering models for all cases. </p>
<p><strong>Engineering End-use Models</strong></p>
<p>The engineering end-use models are the heart of the end-use estimation procedure. Sources for the engineering equations were from ASHRAE, Illuminating Engineering Society of North America (IESNA), and other standard engineering handbooks. Parameter values came from these handbooks and from large-scale field studies of commercial buildings.</p>
<p><strong>Space Heating and Cooling.</strong> The heating and cooling models estimate the energy consumption of heating systems (primary and secondary) and cooling systems for all energy sources. The models account for building heat loss (or gain) as a function of the building&rsquo;s weighted average conductance and heating (or cooling) degree days. The model accounts for ventilation heat loss (or gain) as a function of the volume of external air brought into a building each day, the temperature difference between the outside air and the inside air, and the heat capacity of air.  Starting with CBECS information on the equipment type and estimated percentage of heated or cooled floorspace, the model relies on average estimates for equipment efficiency, and on calculations for conduction and ventilation losses (or gains). </p>
<p><strong>Ventilation. </strong>The engineering model for ventilation estimates supply and return fan energy use. To estimate total ventilation air volume, the model relies on the external air ventilation volumes. The model accounts for differences in static pressure by system type and by building floorspace. Typical meteorological year data helped develop estimates of variable air-volume energy factors by climate zone. </p>
<p><strong>Water Heating.</strong> The water heating model uses system efficiency to convert water heating load to total energy consumed, where the load is the amount of energy needed to heat a given amount of water to a given temperature. Additional energy is used in systems which distribute hot water throughout the building or systems with storage tanks. To account for the variation in energy use by system type, the model uses indicators about equipment type and whether the water is supplied by instant-heating types to determine whether storage and distribution are used. </p>
<p><strong>Lighting.</strong> The lighting model estimates electricity consumption from internal and external lighting for all building types. The model calculates energy use as a factor of average lamp power per floorspace and average annual operating hours. The interior lighting portion relies on information from CBECS on percentage floorspace lit by each lamp type, and building operating hours. The model assumes average lamp system efficacy (lumens per watt) for each lamp type, and recommended average illuminance levels by building type. </p>
<p><strong>Office Equipment.</strong> The office model estimates electricity consumption from office equipment for all building types. The model divides office equipment electricity consumption into four components. One division separates office electricity use into computer equipment versus other office electric loads. Computer equipment includes PCs, monitors and printers. The non-computer-based equipment includes copiers, faxes, cash registers, and servers. The other division separates office electricity used during building on-hours from electricity used during building off-hours. </p>
<p><strong>Cooking</strong><strong>.</strong> The model estimates cooking energy consumption for district heat and electricity. Commercial kitchens can be quite varied in their set-ups but limited information is collected by CBECS on the types and number of cooking equipment used by commercial buildings. Although few commercial cooking energy consumption studies exist, the 2005 California Commercial End-use Survey (CEuS) sponsored by the California Energy Commission (<em>California Commercial End-use Survey</em>. CEC-400-2006-005. Sacramento, CA: CEC, 2006) provides estimated conditional intensities. The present model combines the CEuS intensities along with CBECS information on floorspace and CBECS indicators of cooking fuel use. The cross-sectional regression models are used to estimate cooking for fuel oil and natural gas.</p>
<p><strong>Refrigeration</strong><strong>.</strong> The refrigeration model calculates commercial refrigeration electricity consumption. CBECS collects information on the number, but not the size, of refrigerators used by commercial buildings. The model incorporates the CBECS information on the number of refrigerators and building type, but relies predominantly on CEuS end-use intensity estimates, by building type, to estimate refrigeration consumption.</p>
<p><strong>Other.</strong> The electricity and district heat models rely on engineering estimates. Since many types of equipment use electricity, CBECS does not explicitly ask if electricity is used for unspecified &ldquo;other&rdquo; uses of electricity. Therefore, the engineering model estimates &ldquo;other&rdquo; electricity use by applying the CEuS intensities for miscellaneous, process equipment, motors, and air compressors to the CBECS floorspace. These estimates were then adjusted for the number of months of building operation per year. Since district heat is primarily used for heating, water heating, cooling, and cooking end-uses, which were explicitly modeled, and given the relatively small number of cases and lack of information, the district model does not calculate &ldquo;other&rdquo; consumption. For fuel oil and natural gas, the model for other energy use is based on regression estimates. </p>
<p><strong>Cross-sectional Regressions</strong></p>
<p>Cross-sectional regression models were used to calibrate the natural gas and fuel oil engineering estimates. The cross-sectional regression models for natural gas were fit with consumption per square foot as the dependent variable and the independent variables were defined on a corresponding scale. Besides the engineering estimates, independent variables included dummy variables for the presence of a laundry, cleaners, or central plant, and to indicate natural gas use for manufacturing or electricity generation. Additional dummy variables were defined to indicate whether natural gas or some other fuel was used as a secondary heating source in the building.</p>
<p>The cross-sectional fuel oil regression models were fit with CBECS consumption per square foot as the dependent variable. The independent variables, defined on a corresponding scale, included the engineering estimates and dummy variables for the presence of a central plant or the use of fuel oil for manufacturing or electricity generation.  Additional dummy variables were defined to indicate whether fuel oil or some other energy source was used as a secondary heating source in the building.</p>
<p><strong>Final Reconciliation</strong></p>
<p>For electricity, reconciliation with the total consumption took two steps. First, the monthly model results were used to provide approximate estimates of annual heating and cooling use. For each case with monthly regression estimates, the ratio of that heating or cooling estimate to the corresponding preliminary engineering estimate was calculated. The median ratios were then reviewed by building size, activity, and age, as well as by climate zone. Since the results showed a definite variation by climate zone, the median ratios were used to adjust the engineering estimates for electric primary heat and electric cooling for all cases. Second, the adjusted engineering estimates were prorated to match the CBECS estimate of total building electricity consumption.</p>
<p>For natural gas and fuel oil, the adjusted engineering estimates were prorated to match the total building consumption.  For district heat, the engineering estimates were prorated to match the total building consumption.</p>
<h2><a name="1999" id="1999"></a><strong>1999 CBECS</strong></h2>
<p>No end-use consumption estimates are available for 1999.</p>
<h2><a name="1989" id="1989"></a><strong>1989, 1992, and 1995 CBECS</strong></h2>
<p>The energy end-use tables for 1989, 1992, and 1995 provide estimates of the amount of natural gas and electricity used specifically for nine end uses: space heating, cooling, ventilation, water heating, lighting, cooking, refrigeration, office equipment, and other.</p>
<p> The end-use estimates were calculated by using two main sources of data: (1) survey data collected by the CBECS and (2) building energy simulations provided by the Facility Energy Decision Screening (FEDS) system. The CBECS provided data on building characteristics and total energy consumption (i.e., for all end uses) for a national sample of commercial buildings. using data collected by the CBECS, the FEDS engineering modules were used to produce estimates of energy consumption by end use. The FEDS engineering estimates were then statistically adjusted to match the CBECS total energy consumption.</p>
<p>This section briefly describes the FEDS load estimation methodology, the statistical adjustment procedure, and the remaining steps necessary to produce the final end-use estimates.</p>
<p><strong>The Facility Energy Decision Screening Engineering Estimates</strong></p>
<p>The energy consumption data provided by energy suppliers cover all end uses performed within commercial buildings. Total energy consumption can be disaggregated into end-use consumption by several approaches: engineering simulations, statistical modeling, or a hybrid approach known as a statistically adjusted engineering (SAE) approach. The CBECS end-use estimates were developed by using the SAE approach, with the FEDS system providing the initial engineering estimates.</p>
<p> The FEDS software was developed for the u.S. Department of Energy&rsquo;s Federal Energy Management Program and the u.S. Army Construction Engineering Research Laboratory as a tool for screening groups of buildings on Federal facilities (such as Army bases) for energy efficiency retrofits. The engineering modules, which estimate the energy load to be subjected to retrofit optimization, are one in a series of well-known building energy simulations which include DOE-2 and ASEAM. The FEDS uses high-level installation information (number, age, size, and types of buildings and energy systems), an internal data base of typical energy-system configurations and performance data, and sophisticated energy simulation and optimization models to estimate the net present value of potential energy retrofits in Federal installations.</p>
<p> The FEDS engineering models are designed to produce estimates for five end uses: space heating, cooling, ventilation, lighting, and water heating. Two other end uses, cooking and refrigeration, are also calculated internally by the model, although they are not part of the normal FEDS output. These seven end uses, plus an &ldquo;other&rdquo; end use, represent the FEDS accounting for total building end use. Estimates for office equipment energy use were not provided by the FEDS model.</p>
<p>Estimates for the first five end uses are based on detailed building engineering simulations. Estimates for the latter two rely on parameters developed in the Regional End-use Monitoring Program (REMP), formerly known as the End-use Load and Consumer Assessment Program (ELCAP) study. REMP was a large end-use monitoring project sponsored by the Bonneville Power Administration. As it was designed to be used in facilities, only a general description of a building need be input for the building energy loads to be estimated interactively, relying on an extensive series of internal default values. Some of these defaults were based on data from prior CBECS, but many were based on the REMP study. For use with the CBECS, the FEDS interface was changed from interactive to batch, with the CBECS survey data supplying as many values as possible.</p>
<p> Besides values relating to the building characteristics, the engineering estimates also required hourly weather profiles. For each calendar month, the average temperature, humidity, and cloudiness during each hour of the day were calculated and input to the model.</p>
<p><strong>Statistically Adjusted Engineering Estimates</strong></p>
<p>  The FEDS estimates were based on building characteristics and weather only. At the statistically adjusted engineering (SAE) stage, the engineering estimates were modified to match the observed CBECS consumption data. The basic idea behind the SAE method is simple. Let <em>euibfu</em> be the end-use consumption per square foot estimated by the FEDS model for building <em>b</em>, fuel <em>f</em>, and end use <em>u</em>, and let <em>eui<sub>bf</sub></em> be the total energy consumption (from the CBECS Energy Suppliers Survey) per square foot for building <em>b</em> and fuel <em>f</em>. Then a set of coefficients <em>afu</em> can be estimated statistically, i.e., by multiple regression, such that:</p>
  <div align="center">
  <img height="36" alt="equation" src="http://wwwdev.eia.gov/consumption/commercial/data/archive/cbecs/eqn1.gif" width="121" /> <br />
</div>
<p>  The coefficients adjust the FEDS engineering estimates upward or downward to match the reported energy use. The <em>e&ucirc;i<sub>bf</sub></em> are referred to as SAE estimates. If each estimated value of <em>a<sub>fu</sub></em> is equal to one, the <em>eui</em>&rsquo;s are the same as those calculated in the engineering model. A value other than one can reflect a variety of factors. The FEDS model assumed values for a number of engineering variables on the basis of a typical or average building. If the characteristics within the sample buildings differ on average from the assumed values, then the actual <em>eui</em>&rsquo;s will diverge from the engineering <em>eui</em>&rsquo;s.</p>
<p> The basic SAE equation stated above assumes that there is a constant bias in the engineering estimates. However, the assumption of constant bias may be inappropriate. The bias may vary along a number of dimensions. Building type, building age, occupant density, and the presence of energy-intensive activities within the building were some of the variables examined to explore the patterns of bias. A nonlinear SAE equation was developed to incorporate these items. The nonlinear framework allowed greater flexibility in the way that variables, such as building age and employment density, could interact with the engineering estimates of end-use consumption. The SAE equations were estimated separately for electricity, natural gas, fuel oil, and district heat.</p>
<p><strong>The Final End-use Estimates</strong></p>
<p>  Because the SAE procedure calibrated the engineering estimates to the reported data for aggregates of buildings, SAE estimates for individual buildings could still vary from the values on the CBECS Master File. For the final end-use estimates, the value on the CBECS Master File (whether reported or imputed) was prorated in proportion to the SAE estimates.</p>
<p> The office equipment estimate was also made after the SAE estimation by using both REMP estimates and estimates from Arthur D. Little Inc. (ADL). The REMP database contains estimates for subcomponents of &ldquo;other&rdquo; end-use consumption and was used to estimate the office equipment share of the &ldquo;other&rdquo; end-use energy consumption for the 1989 and 1992 CBECS. Included in office equipment were large computer equipment (if the CBECS data indicated the presence of a computer area with a separate air-conditioning system), personal computer equipment, and general office equipment (typewriters, copiers, cash registers, etc.). For the 1995 CBECS, the REMP computer energy consumption estimates were replaced with the more recent ADL estimates before calculating the office equipment share was calculated. </p>
    <hr>
   <p>Specific questions on this product may be directed to:</p>
        <blockquote>
          
            <p>Jay Olsen<br />
              <a href="mailto:jay.olsen@eia.gov">jay.olsen@eia.gov</a></p>
     </blockquote>     
  </div>
		<div class="l-col">
			<?php include('consumption/commercial/includes/side-nav-commercial.inc'); ?>
		</div>
  </div>
	<?php include('global/footer/includes/footer.inc'); ?>
</body>
  
</html>