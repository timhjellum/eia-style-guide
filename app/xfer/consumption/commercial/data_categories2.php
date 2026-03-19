<?php
$pageTitle = "";
$locale = 'overview';
$L2Title = "Commercial Buildings Energy Consumption Survey (CBECS)";

$pagetitle = 'Energy Information Administration (EIA)- CBECS Survey Background and Technical Information';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title><?php echo "$pagetitle"?></title>
<?php include ('global/includes/eia_head_info.inc') ; ?>
<?php  if(!isset($no_titling)) include "global/includes/titling.inc"; ?></head>
<body>
<div id="outerX"> 
  <?php /* Outer Wrapper */ ?>
  <?php include ('global/includes/eia_header.inc') ; ?>
      <?php include ('../includes/subnav_consumption_cbecs.inc') ; ?>
    <?php /* Page/Body Content */ ?>
    <div class="pagecontent mr_temp3">
      <div class="main_col"> 
        <?php /* Main Column */ ?>
        <h1>Description of Detailed Tables and Categories of Data</h1>
        <table width="100%">
          <p><a href="#column">Column Categories</a> | <a href="#row">Row Categories</a> 
<p>  

<p>The first set of detailed tables for the 
        1995 CBECS consists of building characteristics (BC) tables 1 through 
        44, which contain the number of buildings and amount of floorspace for 
        major building characteristics. BC Tables 1 and 2 of this set are summary 
        tables. BC Tables 3 through 17 address location, building size, year constructed, 
        number of workers, hours of operation, and types of occupancy. BC Tables 
        18 through 28 contain data about the energy sources used for all end uses 
        and for specific major end uses. BC Tables 29 through 44 contain data 
        about percent of floorspace heated, cooled, and lit, energy-using equipment 
        types, and conservation measures used in the buildings. </p>
        
        <p>The second set of tables consists of energy consumption and expenditures 
        (CE) tables 1 through 31, which present detailed energy consumption and 
        expenditure data for buildings in the commercial sector. These tables 
        are grouped into major fuel tables (CE Tables 1 through 8) and specific 
        fuel tables. The specific fuel tables consist of CE Tables 9 through 19 
        for electricity, CE Tables 20 through 25 for natural gas, CE Tables 26 
        through 29 for fuel oil, and CE Tables 30 and 31 for district heat. </p>
        
       <p>The third set of tables consists of energy end-use (EU) Tables 1 through 
        6, which contain estimates of the amount of natural gas and electricity 
        that is consumed for nine specific end uses: space heating, cooling, ventilation, 
        water heating, lighting, cooking, refrigeration, office equipment, and 
  other.</p>
<A NAME="column"></A> 
<h2>Column Categories</h2>
        <p>The column categories most commonly classify 
        data by building characteristics or by consumption and expenditures. The 
        following data items, listed in alphabetical order, are explanations of 
        some of the column categories found in the set of energy consumption and 
        expenditures tables that may require clarification.</p>
        
       <p><strong>Conditional Energy Intensity&#151;</strong>The amount of electricity, natural 
        gas, fuel oil, or district heat used per square foot in buildings using 
        the specified energy source. For example, in consumption and expenditures 
        (CE) Table 11, data in the row labeled "Electricity" under "Energy Sources" 
        and in the column labeled "Northeast" under "Electricity Energy Intensity" 
        would read: "Buildings in the Northeast that used electricity as an energy 
        source used 11.2 kilowatthours of electricity per square foot." </p>
        <strong>Demand-Metered Buildings&#151;</strong>Buildings that have meters to measure 
        peak demand (in addition to total consumption) during a billing period. 
        Peak demand is usually metered only for electricity. <BR>
        &nbsp;<BR>
        <strong>Distribution of Building-Level Intensities&#151;</strong>The amount of energy 
        used per square foot, divided into three percentiles: 25<SUP>th</SUP>, 
        median, and 75<SUP>th</SUP>. In CE Table 10, for example, the row labeled "Education" under "Principal Building Activity" and in the column labeled 
        "25<SUP>th</SUP> Percentile" under "Distribution of Building-Level Intensities" 
        would read: "In 1995, 25 percent of U.S. education buildings used 4.3 
        kilowatthours per square foot or less. (75 percent of the buildings used 
        more than 4.3 kilowatthours of electricity per square foot.)" <BR>
        &nbsp;<BR>
        <strong>Electricity&#151;</strong>Site electricity. (See "site electricity" and 
        "primary electricity" in this listing.) <BR>
        &nbsp;<BR>
        <strong>Energy Intensity&#151;</strong>Usually defined as "gross energy intensity" 
        or "conditional energy intensity" in title of table. If table title does 
        not specify, "energy intensity" is to be defined as "conditional energy 
        intensity." <BR>
        &nbsp;<BR>
        <strong>Floorspace&#151;</strong>The enclosed area in a building; the sum of the 
        floorspace in all buildings in a category. <BR>
        &nbsp;<BR>
        <strong>Gross Energy Intensity&#151;</strong>The ratio of the total amount of energy 
        consumed by a group of buildings to the total floorspace of those buildings, 
        including buildings and floorspace where the energy source is not used. 
        For example, in CE Table 5, data in the row category "Education" under 
        "Principal Building Activity" and in the column category of "Northeast" 
        under "Energy Intensity for Sum of Major Fuels" would read: "Education 
        buildings in the Northeast consumed 83.4 thousand Btu per square foot." 
        <BR>
        &nbsp;<BR>
        <strong>Major Fuel&#151;</strong>Major energy sources: electricity, natural gas, 
        fuel oil, and district heat (district steam or district hot water). Although 
        electricity is technically not a fuel, "Major Fuel," rather than "Major 
        Energy Source," was retained as the title of this category to facilitate 
        comparison of previous CBECS data. <BR>
        &nbsp;<BR>
        <strong>Primary Electricity&#151;</strong>Site electricity plus the losses associated 
        with the generation and transmission of the electricity. Most of the tables 
        present statistics for site consumption alone, but CE Tables 1 and 9 also 
        provide consumption statistics for primary electricity. <BR>
        &nbsp;<BR>
        <strong>Site Electricity&#151;</strong>The amount of electricity delivered to the 
        commercial building. This amount excludes losses associated with the generation 
        and transmission of the electricity. (See "primary electricity" in this 
        listing.) Most of the tables in this section provide statistics for site 
        electricity alone (not for primary electricity). When the term "electricity" is used, the reference is to site electricity. <BR>
        &nbsp;<BR>
        <strong>Total of Major Fuels&#151;</strong>The sum of site electricity, natural 
        gas, fuel oil, and district heat. Statistics in this column exclude data 
  from the column "Primary Electricity."</span></p>
  <p><A NAME="row"></A>  <h2> Row Categories</h2>
      
        <p>The row categories classify data by specific 
        features, such as principal building activity or energy sources used. 
        Data in the row categories relate to the buildings having such a feature, 
        not to the feature. For example, in consumption and expenditures (CE) 
        Table 1, the data in the "Major Fuels" column and the row category "Buildings 
        with Cooling" is to be read as "Buildings with cooling consumed 4,923 
        trillion Btu of the major fuels." CE Tables 1 through 31 contain no data 
        on the energy consumption for cooling specifically. Estimates of energy 
        used for specific end uses are found in energy end-use (EU) Tables 1 through 
        6. </p>
        Below are explanations of some of the row categories found in the tables 
        that may require clarification. These terms are listed in the order in 
        which they occur in the tables. <BR>
        &nbsp;<BR>
        <strong>All Buildings&#151;</strong>Number of buildings, square footage, and consumption 
        or expenditures for roofed and walled structures whose principal activities 
        are nonresidential, nonagricultural, and nonindustrial and that are larger 
        than 1,000 square feet (roughly twice the size of a two-car garage). <BR>
        &nbsp;<BR>
        <strong>Principal Building Activity&#151;</strong>Number of buildings, square footage, 
        and consumption or expenditures for buildings grouped by the activity 
        that occupies the most floorspace in the buildings. Some building types 
        are combined in the tables. For example, inpatient and outpatient health 
        care facilities were combined as "health care buildings," refrigerated 
        and non-refrigerated warehouses were combined as "warehouses," and skilled 
        nursing care buildings were included in "lodging." See <A HREF="consumption/commercial/building-type-definitions.cfm">&#147;Description 
        of types of buildings&#148;</A> for a full description of the principal 
        building activity categories. <BR>
        &nbsp;<BR>
        <strong>Climate Zone&#151;</strong>Number of buildings, square footage, and consumption 
        or expenditures for commercial buildings located in one of the five U.S. 
        climate zones, based on the average number of cooling degree-days (CDD) 
        and heating degree-days (HDD) in a 45-year period (1931-1975). See <A HREF="climate_zones.html">&#147;U.S. 
        Climate Zone map&#148;</A> for a map that shows the five U.S. climate 
        zones. <BR>
        &nbsp;<BR>
        <strong>Census Region and Division&#151;</strong>Number of buildings, square footage, 
        and consumption or expenditures for commercial buildings located in one 
        of the nine divisions within the four regions as defined by the U.S. Bureau 
        of Census. See <A HREF="/consumption/commercial/census-maps.cfm">&#147;Census Regions and Divisions 
        map&#148;</A> for a map that shows the four Census Regions and nine Census 
        Divisions. <BR>
        &nbsp;<BR>
        <strong>Energy Sources&#151;</strong>Number of buildings, square footage, and consumption 
        or expenditures for buildings using a specific type of energy (electricity, 
        natural gas, fuel oil, district heat [district steam or district hot water], 
        district chilled water, propane, and any other type of energy [wood, coal, 
        active solar, and photovoltaic cells]). The energy consumption and expenditures 
        tables contain consumption data based on billing information obtained 
        from energy suppliers, for the first four sources only. Estimates of the 
        amount of wood burned in buildings were obtained during the personal interviews 
        with building respondents. No consumption data were collected for propane, 
        coal, solar energy, or other renewable sources because such a collection 
        effort would not be feasible. <BR>
        &nbsp;<BR>
        <strong>Energy End Uses&#151;</strong>Number of buildings, square footage, and consumption 
        or expenditures in buildings that had specific end uses (heating, air-conditioning, 
        water heating, cooking, and manufacturing), not the amount of energy consumption 
        or expenditures for a particular end use (CE Tables 1 through 31). EU 
        Tables 1 through 6 provide the amount of electricity or natural gas used 
        for a particular end use. <BR>
        &nbsp;<BR>
        <strong>Space-Heating Energy Sources&#151;</strong>Number of buildings, square footage, 
        and consumption or expenditures in buildings using at least one of the 
        major fuels, propane, wood, or any other energy source for space heating. 
        (In some tables, this category is subdivided into "Main and Secondary 
        Energy Sources.") CE Tables 1 through 31 contain no data on the amount 
        of energy consumption or expenditures for space heating specifically. 
        EU Tables 1 through 6 provide the amount of electricity or natural gas 
        used specifically for space heating. <BR>
        &nbsp;<BR>
        <strong>Primary Space-Heating Energy Source&#151;</strong>Number of buildings, square 
        footage, and consumption or expenditures in buildings using a specific 
        energy source to heat most of the square footage in the building most 
        of the time. CE Tables 1 through 31 contain no specific data on the amount 
        of energy consumption or expenditures for space heating. EU Tables 1 through 
        6 provide the amount of electricity or natural gas used specifically for 
        space heating. <BR>
        &nbsp;<BR>
        <strong>Cooling Energy Source&#151;</strong>Number of buildings, square footage, 
        and consumption or expenditures in buildings using electricity, natural 
        gas, or district chilled water for cooling. CE Tables 1 through 31 contain 
        no specific data on the amount of energy consumption or expenditures for 
        cooling. EU Tables 1 through 6 provide the amount of electricity specifically 
        used for cooling. <BR>
        &nbsp;<BR>
        <strong>Water-Heating Energy Source&#151;</strong>Number of buildings, square footage, 
        and consumption or expenditures in buildings using one of the major fuels 
        or propane for water heating. CE Tables 1 through 31 contain no specific 
        data on the amount of energy consumption or expenditures for water heating. 
        EU Tables 1 through 6 provide the amount of electricity or natural gas 
        used specifically for water heating. Cooking Energy Source—Number of buildings, 
        square footage, and consumption or expenditures in buildings using electricity, 
        natural gas, or propane for cooking. CE Tables 1 through 31 contain no 
        data specific on the amount of energy consumption or expenditures for 
        cooking. EU Tables 1 through 6 provide the amount of electricity or natural 
        gas specifically used for cooking. <BR>
        &nbsp;<BR>
        <strong>Heating Equipment&#151;</strong>Number of buildings, square footage, and 
        natural gas and electricity consumption (EU Tables 1 through 6) in buildings 
        that had at least one type of heating equipment. <BR>
        &nbsp;<BR>
        <strong>Cooling Equipment&#151;</strong>Number of buildings, square footage, and 
        natural gas and electricity consumption (EU Tables 1 through 6) in buildings 
        that had at least one type of cooling equipment. <BR>
        &nbsp;<BR>
        <strong>Lighting Equipment&#151;</strong>Number of buildings, square footage, and 
        natural gas and electricity consumption (EU Tables 1 through 6) in buildings 
        that had at least one type of lighting equipment. <BR>
        &nbsp;<BR>
        <strong>Water-Heating Equipment&#151;</strong>Number of buildings, square footage, 
        and natural gas and electricity consumption (EU Tables 1 through 6) in 
        buildings that had at least one type of cooling equipment. <BR>
  </h2>
  <p></TD>  
  <p>

        </table>
        <?php include ('includes/cbecs_survey_manager_contact_info.inc') ; ?>
        <?php /* /Main Column */ ?> 
      </div>
      <?php /* Side Column */ ?>
      <div class="side_col right">
        <?php include ('../includes/side_nav_commercial.inc') ; ?>
      </div>
      
      <?php /*/ Side Content */ ?> 
      
      <?php /*/ Page/Body Content */ ?> 
    </div>
    <?php include ('global/includes/eia_footer.inc') ; ?>
<?php /*/ Outer Wrapper */ ?>
</body>
</html>