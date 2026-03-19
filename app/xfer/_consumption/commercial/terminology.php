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
    <h1>CBECS Terminology</h1>
    <p>This glossary is specific to the <em>2018 Commercial Buildings Energy Consumption Survey</em> (CBECS). CBECS glossaries for prior years can be found in <a href="/consumption/commercial/terminology_2012.php">1999 to 2012 CBECS Terminology</a> and in the appendixes of <a href="/consumption/commercial/data/archive/ ">past CBECS reports</a>.</p>
    <p align="center">A&nbsp;&nbsp;<a href="#B">B</a>&nbsp;&nbsp;<a href="#C">C</a>&nbsp;&nbsp;<a href="#D">D</a>&nbsp;&nbsp;<a href="#E">E</a>&nbsp;&nbsp;<a href="#F">F</a>&nbsp;&nbsp;<a href="#G">G</a>&nbsp;&nbsp;<a href="#H">H</a>&nbsp;&nbsp;<a href="#I">I</a>&nbsp;&nbsp;J&nbsp;&nbsp;<a href="#K">K</a>&nbsp;&nbsp;<a href="#L">L</a>&nbsp;&nbsp;<a href="#M">M</a>&nbsp;&nbsp;<a href="#N">N</a>&nbsp;&nbsp;<a href="#O">O</a>&nbsp;&nbsp;<a href="#P">P</a>&nbsp;&nbsp;Q&nbsp;&nbsp;<a href="#R">R</a>&nbsp;&nbsp;<a href="#S">S</a>&nbsp;&nbsp;<a href="#T">T</a>&nbsp;&nbsp;U&nbsp;&nbsp;<a href="#V">V</a>&nbsp;&nbsp;<a href="#W">W</a>&nbsp;&nbsp;X&nbsp;&nbsp;<a href="#Y">Y</a>&nbsp;&nbsp;Z</p>
    <!-- Start definitions -->
    <p><strong>Air-conditioning:</strong> See Cooling.</p>
    <p><strong>Air source heat pump:</strong> A type of heat pump that extracts heat from the outside air and brings it inside the building. Most heat pumps in use today are air source.</p>

    <p> <a name="B"></a><strong>Boiler:</strong> A type of space-heating equipment consisting of a vessel or tank where heat produced from the combustion of such fuels as natural gas, fuel oil, or coal is used to generate hot water or steam. Many buildings have their own boilers, while other buildings have steam or hot water piped in from a central plant. For this survey, only boilers inside the building (or serving only that particular building) are counted as part of the building’s heating system. The CBECS considers steam or hot water piped into a building from a central plant to be district heat.</p>
      
    <!-- <div>
      <table class="basic_table" width="100%">
        <thead>
          <tr>
            <th> Energy source</th>
            <th>Btu equivalent</th>
            <th> Unit</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>electricity</td>
            <td>3,412</td>
            <td>kilowatthour</td>
          </tr>
          <tr>
            <td>natural gas (2012)</td>
            <td>1,025</td>
            <td>cubic foot</td>
          </tr>
          <tr>
            <td>natural gas (2003)</td>
            <td>1,031</td>
            <td>cubic foot</td>
          </tr>
          <tr>
            <td>natural gas (1999)</td>
            <td>1,027</td>
            <td>cubic foot</td>
          </tr>
          <tr>
            <td>fuel oil (2012)</td>
            <td>137,476</td>
            <td>gallon</td>
          </tr>
          <tr>
            <td> fuel oils (2003)</td>
            <td>138,690</td>
            <td>gallon</td>
          </tr>
          <tr>
            
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="3"><span class="footnotes"><strong>Source for 2012 factors: </strong>U.S.<strong> </strong>Energy Information Administration,<strong> </strong><em>Monthly Energy Review,  Appendices A3 and A4</em>.<br />
              <strong>Note</strong>: A Btu of district hot water has been converted into equivalent pounds of  steam with the conversion of 1,000 Btu hot water approximately =1 pound steam.<br />
            </span></td>
          </tr>
        </tfoot>
      </table>
    </div> -->
    <p><strong>Brick, stone, or stucco:</strong> Nonstructural materials typically used on the exterior of a wood or metal frame building.</p>
	<p> <strong>Btu (British thermal unit):</strong> A unit of energy that  represents  the quantity of heat required to raise the temperature of 1 pound of  liquid water by 1°F at the temperature at which water has its greatest density  (approximately 39°F). Energy consumption is expressed in Btu to allow for  consumption comparisons among fuels that are measured in different units.  </p>
    <p> <strong>Btu Conversion Factors: </strong>The British thermal unit (Btu) conversion factors used for the 2018 CBECS are shown in the following table.
      
    <div>
      <table class="basic_table" width="100%">
        <thead>
          <tr>
            <th> Energy source</th>
            <th>Btu equivalent</th>
            <th> Unit</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Electricity</td>
            <td>3,412</td>
            <td>Kilowatthour</td>
          </tr>
			          <tr>
            <td>Natural gas </td>
            <td>1,038</td>
            <td>Cubic foot</td>
          </tr>    <?php /* 
          <tr>
            <td>natural gas (2012)</td>
            <td>1,025</td>
            <td>cubic foot</td>
          </tr>
          <tr>
            <td>natural gas (2003)</td>
            <td>1,031</td>
            <td>cubic foot</td>
          </tr>
          <tr>
            <td>natural gas (1999)</td>
            <td>1,027</td>
            <td>cubic foot</td>
          </tr>   */ ?>
			          <tr>
            <td>Fuel oil </td>
            <td>137,429</td>
            <td>Gallon</td>
          </tr>   <?php /* 
          <tr>
            <td>fuel oil (2012)</td>
            <td>137,476</td>
            <td>gallon</td>
          </tr>
          <tr>
            <td> fuel oils (2003)</td>
            <td>138,690</td>
            <td>gallon</td>
          </tr>
          <tr>   */ ?>
            
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="3"><span class="footnotes"><strong>Data source: </strong>U.S.<strong> </strong>Energy Information Administration,<strong> </strong><em>Monthly Energy Review,  Appendices A3 and A4</em>.<br />
              <strong>Note</strong>: For previous British thermal unit conversion factors, see <a href="https://www.eia.gov/consumption/commercial/terminology_2012.php">1999  to 2012 CBECS Terminology</a>. <br />
            </span></td>
          </tr>
        </tfoot>
      </table>
    </div>
	    <p><strong>Building:</strong> A structure totally enclosed by walls extending from the foundation to the roof, containing over 1,000 square feet of floorspace and ready for human occupancy during the reference year (not under construction, dilapidated, or condemned). Structures erected on pillars to elevate the first fully enclosed level but leaving the sides at ground level open are also included as buildings in the CBECS.</p>
	<p>The CBECS specifically excludes the following buildings and structures: </p>
	    <ul>
		<li>Buildings on military bases that are closed to the public or have restricted public access</li>
		<li>Foreign embassies</li>
		<li>Monuments</li>
		<li>Structures that people do not usually enter, such as oil storage tanks, the cooling towers of a nuclear power plant, and pumping stations</li>
		<li>Enclosed parking garages (included in previous CBECS before 1995)</li>
		<li>Commercial buildings on manufacturing sites (included in previous CBECS before 1995)</li>
	</ul>

    <p><strong>Building Automation System (BAS):</strong>An energy management feature that uses remote sensing and control  instruments as well as interpretive and control software to monitor changes in  ambient temperature and operating systems. These systems manage a building's  use of energy for heating, ventilation, air-conditioning, lighting, and  business-related processes. These systems may also manage fire control, safety,  and security. BAS was referred to as <em>Emergency  Management and Control System </em>(EMCS) prior to the 2012 CBECS.</p>
    <p><strong>Built-up roof:</strong> A roof covering consisting of several successive layers (each of which is called a ply), usually of roofing felt, with a mopping of hot asphalt between layers and topped by a mineral-surfaced layer or by gravel embedded in a heavy coat of asphalt.</p>

    <p><a name="C"></a><strong>Cases or cabinets:</strong> Refrigeration in open or closed units for the purpose of selling, displaying, or storing perishable materials. <em>Open</em> refers to cases or cabinets with no covers or with flexible covers made of plastic or some other material, hung in strips or curtains to stop the flow of warm air into the refrigerated space. Examples of open cases are produce, dairy, and deli cases, salad bars, and sandwich preparation units. <em>Closed</em> refers to units with doors that shut, such as beverage display coolers, grocery coolers or freezers, dessert displays, under-counter coolers, floral display coolers, and ice machines.</p>
	<p> <strong>CDD:</strong> See <em>cooling degree days</em> (CDD). </p>
    <p><strong>Census Region and Division:</strong> A geographic area consisting of several states defined by the U.S.  Department of Commerce, Bureau of the Census. See following table: </p>
    <div>
      <table width="100%" class="simpletable" >
        <thead>
          <tr>
            <th width="16%">Region</th>
            <th width="31%">Division</th>
            <th width="53%" style="text-align:left">States</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td >Northeast</td>
            <td style="text-align:left" >New England</td>
            <td style="text-align:left">Connecticut, Maine, Massachusetts, New Hampshire, <br />
            Rhode Island, and Vermont</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td style="text-align:left" >Middle Atlantic</td>
            <td style="text-align:left">New Jersey, New York, and Pennsylvania</td>
          </tr>
          <tr>
            <td>Midwest</td>
            <td style="text-align:left" >East North Central</td>
            <td style="text-align:left">Illinois, Indiana, Michigan, Ohio, and Wisconsin</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td style="text-align:left" >West North Central</td>
            <td style="text-align:left">Iowa, Kansas, Minnesota, Missouri, Nebraska, North Dakota, and South Dakota</td>
          </tr>
          <tr>
            <td>South</td>
            <td style="text-align:left"  >South Atlantic</td>
            <td style="text-align:left">Delaware, District of Columbia, Florida, Georgia, Maryland, North  Carolina, South Carolina, Virginia, <br />
            and West Virginia</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td style="text-align:left" >East South Central</td>
            <td style="text-align:left">Alabama, Kentucky, Mississippi, and Tennessee</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td style="text-align:left"  >West South Central</td>
            <td style="text-align:left">Arkansas, Louisiana, Oklahoma, and Texas</td>
          </tr>
          <tr>
            <td>West</td>
            <td style="text-align:left"  >Mountain</td>
            <td style="text-align:left">Arizona, Colorado, Idaho, Montana, Nevada, New Mexico, Utah, and Wyoming</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td style="text-align:left"  >Pacific</td>
            <td style="text-align:left">Alaska, California, Hawaii, Oregon, and Washington</td>
          </tr>
        </tbody>
      </table>
	
      <p><strong>Central air handlers:</strong> A type of heating or cooling distribution equipment that channels warm or cool air to different parts of a building. This process of channeling the conditioned air often involves drawing air over heating or cooling coils and forcing it from a central location through ducts or air-handling units. Air-handling units are hidden in the walls or ceilings, where they use steam or hot water to heat or chilled water to cool the air inside the ductwork.</p>
    <p><strong>Central chiller:</strong> A type of cooling equipment that is centrally located and that produces chilled water to cool the air. The chilled water or cold air is then distributed throughout the building by use of pipes or air ducts, or both. These systems are also commonly known as chillers, centrifugal chillers, reciprocating chillers, or absorption chillers. Chillers are generally located in, or just outside, the building they serve. For this survey, only chillers inside the building (or serving only that particular building) are counted as part of the building’s cooling system. The CBECS considers chilled water piped into a building from a central plant to be district chilled water.</p>
    <p><strong>Central physical plant:</strong> A plant that is owned by, and on the grounds of, a multibuilding facility that provides district heating, district cooling, or electricity to one or more buildings on the same facility. The central physical plant may be by itself in a separate building or may be located in a building where other activities occur.</p>
    <p><strong>Centralized water-heating system:</strong> A type of water-heating equipment that heats and stores water (for purposes other than space heating) in tanks and then distributes this heated water throughout the building. A residential-type tank water heater is an example of a centralized water heater.</p>
	<p><strong>Climate zones: </strong>Geographic areas that exhibit similar weather  conditions over some long period of time. The 2018 CBECS provides estimates  based on the climate zones of the American Society of Heating, Refrigerating  and Air-Conditioning Engineers (ASHRAE); see <a href="https://www.eia.gov/consumption/commercial/maps.php">CBECS Maps</a>.</p>
    <p><strong>Coal:</strong> A readily combustible black or brownish-black rock whose composition, including inherent moisture, consists of more than 50% by weight and more than 70% by volume of carbonaceous material. It is formed from plant remains that have been compacted, hardened, chemically altered, and changed by heat and pressure over geologic time. The term includes anthracite, bituminous, and subbituminous coal, as well as coke, the derivative of coal formed by destructive distillation or imperfect combustion. The CBECS collects data on the use of coal but not on coal consumption and expenditures. </p>
    <p><strong>Cogeneration:</strong> The production of electrical energy and another form of useful energy (such as heat or steam) through the sequential use of energy. </p>
    <p><strong>Commercial:</strong> In the CBECS, <em>commercial</em> refers to any activity that is neither residential (used as a dwelling for one or more households), manufacturing or industrial (used for processing or procurement of goods, merchandise, raw materials, or food), nor agricultural (used for the production, processing, sale, storage, or housing of agricultural products, including livestock). At least 50% of the floorspace must be used for purposes other than these for a building to be considered commercial.</p>
    <p><strong>Compact fluorescent light bulb:</strong> A bulb that combines the efficiency of fluorescent lighting with the convenience of standard incandescent bulbs. Compact fluorescent light bulbs are used in many different types of fixtures, including exit light fixtures and floodlights (lamps containing reflectors). They are often in table lamps, wall sconces, and hall and ceiling fixtures of commercial buildings with residential type lights. Many screw into a standard light socket, and most produce a similar color of light as a standard incandescent bulb. Compact fluorescent bulbs have either electronic or magnetic ballasts, and they are also known as <em>screw-in fluorescent replacements for incandescents</em> or <em>screw-ins</em>.</p>
	<p><strong>Computing:</strong> An end use of energy that includes PCs, laptops, tablets, monitors, servers, and data centers. </p>
    <p><strong>Concrete (block or poured): </strong> A concrete block is more than just square cinder block; it comes in a wide variety of sizes, shapes, and colors. Above-grade poured concrete is formed and poured in place; it may also be referred to as ICF (insulated concrete form) walls. It is very expensive and rarely used in commercial buildings.</p>
    <p><strong>Concrete panels:</strong>  A wall construction material usually made in a factory and delivered to the construction site, where it is hoisted onto the structure (although sometimes it is poured at the site and then hoisted on the structure). The panels are either solid or insulated. They can have plain, colored, or textured finishing. They may also be referred to as prefabricated concrete panels.</p>
    <p><strong>Concrete roof:</strong>  A poured concrete roof, often intended to bear the load of a parking garage that occupies the roof area of a building.</p>
	<p><strong>Conditional energy intensity:</strong> Total consumption of a particular energy source or fuel divided by the total floorspace of buildings that use the energy source or fuel—in other words, the ratio of consumption to energy source-specific floorspace. This measure is used in the fuel-specific detailed tables.</p>
      <p><strong>Consumption:</strong> The amount of energy used in a building during a given period of time. Unless otherwise noted, all consumption statistics are site energy consumption, which includes sales to commercial buildings but excludes the energy used to produce and deliver the energy. Statistics are presented on an annual basis for the survey calendar year. </p>
    <p><strong>Cooking: </strong>As an energy end use, the use of energy for food preparation. It does not include food preparation in areas such as employee lounges, breakrooms, or vending areas that only involve equipment such as microwaves, coffee pots, and vending machines. </p>
    <p><strong>Cooling: </strong>The conditioning of air in a room for human comfort by a refrigeration unit (such as an air conditioner or heat pump) or by a central cooling or district cooling system that circulates chilled water. Use of fans or blowers by themselves without chilled air or water is not included in this definition of air-conditioning. </p>
	<p><strong>Cooling degree-days (CDD):</strong> A measure of how hot a location was over a period of time relative to a base temperature. In this report, the base temperature is 65°F, and the period of time is one year. The cooling degree day is the difference between that day’s average temperature and 65°F if the daily average is greater than 65°F; it is zero if the daily average temperature is less than or equal to 65°F. Cooling degree days for a year are the sum of the daily cooling degree days for that year. </p>
    <p><strong>Cooling equipment: </strong>The equipment used for cooling room air in a building for human comfort, such as a packaged unit, central chiller, heat pump, residential-type split system air conditioner, individual room air conditioner, district chilled water system, or swamp cooler.</p>
	<p> <strong>Cubic foot (cf):</strong> As a natural gas measure, the volume of natural gas contained in a cube with an edge that is 1 foot long at standard temperature and pressure (60°F and 14.73 pounds standard per square inch.) The thermal content varies by the composition of the natural gas. </p>
      <!-- <div>
        <table class="basic_table" width="100%">
          <thead>
            <tr>
              <th>Climate zone</th>
              <th>Average annual cooling degree-days</th>
              <th>Average annual heating Degree-days</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>fewer than 2,000</td>
              <td>more than 7,000</td>
            </tr>
            <tr>
              <td>2</td>
              <td>fewer than 2,000</td>
              <td>5,500 to 7,000</td>
            </tr>
            <tr>
              <td>3</td>
              <td>fewer than 2,000</td>
              <td>4,000 to 5,499</td>
            </tr>
            <tr>
              <td>4</td>
              <td>fewer than 2,000</td>
              <td>fewer than 4,000</td>
            </tr>
            <tr>
              <td>5</td>
              <td>2,000 or More</td>
              <td>fewer than 4,000</td>
            </tr>
          </tbody>
        </table>
      </div> -->
      
      <p><a name="D"></a><strong>Data center:</strong> A group of networked computer servers that are housed in one location, usually a secure area, that perform no other tasks besides server tasks. A data center usually contains many computers without screens that are stacked in rows of racks and operate continuously, day and night. These areas are generally kept very cool and have a backup source of electricity.</p>
    <p><strong>Daylight harvesting: </strong>An interior lighting control and shade system that automatically dims light fixtures when natural light is available or adjusts shades so that the combination of natural light and artificial light combine to provide the desired level of lighting.</p>
    <p><strong>Decorative or construction glass: </strong>Exterior glass covering that you can’t see through. It may look just like window glass when viewed from the street, except that it is opaque and does not let light through. Includes glass blocks, structural glass, or glass curtain walls. It is included in the <em>other</em> category of <em>predominant exterior wall</em> material.</p>
    <p><strong>Dedicated server: </strong>A server is usually just the CPU or case portion of a computer that is used to manage network resources such as computer files, printers, databases, or network traffic; it does not require much human operation, so most do not have keyboards or monitors. <em>Dedicated</em> means that the server performs no other tasks besides server tasks.</p>
    <p><strong>Demand responsive lighting: </strong>An interior lighting control that reduces lighting at times of peak electricity demand.</p>
    <p><strong>Diesel: </strong>A fuel composed of distillates obtained in petroleum refining, or blends of such distillates, with residual oil used in motor vehicles. It is included in the <em>fuel oil</em> category under <em>energy sources</em>.</p>
    <p><strong>Distributed water-heating system: </strong>A type of system for heating water (for purposes other than space heating) that heats water as needed for immediate use near the location where this water is heated. It is often called a <em>point-of-use</em> water heating system, and it is usually located in more than one place within a building. Because water is not heated until it is required, this equipment is more energy efficient.</p>
    <p><strong>District chilled water: </strong>Water chilled outside of a building in a central plant and piped into the building as an energy source for cooling. Chilled water may be purchased from a utility or provided by a central physical plant in a separate building that is part of the same multibuilding facility (for example, a hospital complex or university).</p>
    <p><strong>District heat: </strong>Steam or hot water produced outside of a building in a central plant and piped into the building as an energy source for space heating or another end use. The district heat may be purchased from a utility or provided by a central physical plant in a separate building that is part of the same multibuilding facility (for example, a hospital complex or university.) District heat includes district steam and district hot water.</p>
		
    <P align=left> <strong><a name="E"></a></strong><span><strong>Economizer cycle: </strong>A heating, ventilation, and air-conditioning (HVAC) conservation feature consisting of indoor and outdoor temperature and humidity sensors, dampers, motors, and motor controls for the ventilation system to reduce the air-conditioning load. Whenever the temperature and humidity of the outdoor air is more favorable (lower heat content) than the temperature and humidity of the indoor air, more outdoor air is brought into the building.</span></P>&nbsp;






      <p><strong>Electricity: </strong>A form of energy characterized by the presence and motion of elementary charged particles generated by friction, induction, or chemical change. Electric energy is supplied to a building by a central utility via power lines or from a central physical plant in a separate building that is part of the same multibuilding facility. The CBECS excludes electric power generated within a building for exclusive use in that building from its definition of electricity as an energy source.</p>
		
      <p><strong>Electricity generation: </strong>As an energy end use, the onsite production of electricity by means of electricity generators on either a regular or emergency basis. </p>
		
	<p><strong>Energy end use: </strong>A use for which energy is consumed in a building. Building characteristics information on seven specific end uses was collected in the CBECS—space heating, cooling, water heating, cooking, manufacturing, electricity generation, and lighting. Estimates of consumption for nine end uses and an <em>other</em> category are also estimated—computing, cooking, cooling, lighting, office equipment, refrigeration, space heating, ventilation, and water heating. </p>
	<p><strong>Energy intensity:</strong> The ratio of consumption to unit of measurement (floorspace, number of workers, etc.). Energy intensity is usually given on an aggregate basis, as the ratio of the total consumption for a set of buildings to the total floorspace in those buildings. CBECS includes both conditional energy intensity and gross energy intensity. Energy intensity can also be computed for individual buildings. </p>
      <p><strong>Energy source: </strong>A type of energy or fuel consumed in a building. In the CBECS, information about the use of electricity, natural gas, fuel oil, district heat, district chilled water, propane, wood, coal, and solar in commercial buildings was obtained from the building respondent.</p>
	<p><strong>Energy source-specific floorspace:</strong> Total floorspace of those buildings that use a particular fuel, for  example, total floorspace in buildings that use natural gas. </p>
<p><strong>Energy supplier:</strong> Energy companies that supply electricity, natural gas, fuel oil, or other sources of energy to a building. For the 2018 CBECS, we sent suppliers of electricity, natural gas, fuel oil, and district heat the <em>Energy Supplier Survey</em> forms. We also collected consumption and expenditures information from building respondents.</p>
<p><strong>Expenditures</strong>: Funds spent for the energy used  in a building during a given period of time. All expenditure statistics are presented on an annual basis for the survey calendar year. The total dollar amount includes state and local taxes, fuel adjustment charges, system charges, and demand charges. The total dollar amount excludes merchandise, repair charges, and service charges. </p>
      <p><strong>External overhangs or awnings: </strong>A conservation feature designed to reduce the transmission of light into a building. These features include any type of overhang (including architectural) or awning on the outside of the building designed to limit solar penetration.</p>
      
      <p><strong><a name="F"></a>Floors: </strong>The number of levels in the tallest section of a building that are considered a part of the building, including parking areas, basements, or other floors below ground level, but excluding half-floors, mezzanines, balconies, and lofts.</p>
      <p><strong>Floorspace: </strong>All the area enclosed by the exterior walls of a building, both finished and unfinished, including indoor parking facilities, basements, hallways, lobbies, stairways, and elevator shafts. For aggregate floorspace statistics, floorspace was summed or aggregated over all buildings in a category (such as all office buildings in the United States). </p>
      <p><strong>Fuel cell: </strong>A technology used for electricity generation composed of electrode devices that convert the energy of a chemical reaction directly into electrical energy, heat, and water; it is somewhat like a battery that requires no recharging.</p>
      <p><strong>Fuel oil: </strong>A liquid petroleum product used as an energy source that is less volatile than gasoline. CBECS  fuel oil estimates include fuel oil, diesel, and kerosene information reported  by survey respondents.<br />
      </p>
      <p><strong>Furnace: </strong>A type of space-heating equipment with an enclosed chamber where fuel is burned or electrical resistance is used to heat air directly without steam or hot water. The heated air is then distributed throughout a building, typically by air ducts.</p>
		
	  <p><strong><a name="G"></a>Gallon:</strong> A volumetric measure  equal to 4 quarts (231 cubic inches) used to measure fuel oil. One barrel  equals 42 gallons.</p>

      <p><strong>Government owned: </strong>A building owned by a federal, state, or local government agency. The building may be occupied by agencies of more than one government and may also be shared with nongovernment establishments.</p>
	<p><strong>Gross energy intensity:</strong>Total consumption of a particular energy source or fuel by a group of  buildings, divided by the total floorspace of those buildings, including  buildings and floorspace where the energy source or fuel is not used, in other  words, the ratio of consumption to gross floorspace. </p>
      <p><strong>Gross floorspace:</strong>Total floorspace of a group of buildings, regardless of which end uses  are present or which energy sources or fuels are used within the buildings. </p>
      <p><strong>Ground source heat pump: </strong>A type of heat pump that uses the natural heat storage ability of the earth or the groundwater to heat or cool a building. The earth can absorb and store heat energy from the sun. To use that stored energy, heat is extracted from the earth through a liquid medium (groundwater or an anti-freeze solution) and is pumped to the heat pump or heat exchanger. There, the heat is used to heat the building. In the summer, the process is reversed and indoor heat is extracted from the building and transferred to the earth through the liquid. The geothermal heat pump is more efficient than an air-source heat pump. It is also referred to as a closed-loop system or a geothermal heat pump.</p>

      <p><strong><a name="H"></a>Halogen light bulb:</strong> A type of incandescent light bulb that lasts much longer and is more efficient than a standard incandescent light bulb. The light bulb uses a halogen gas, usually iodine or bromine, which causes the evaporating tungsten to be redeposited on the filament, thus prolonging its life. Halogen lamps produce a brighter, whiter light than standard incandescent. They are especially suited to recessed (canned) fixtures, track lights, and outdoor lights.</p>
		<p><strong>Heating degree days (HDD): </strong>A measure of how cold a location was over a period of time, relative to  a base temperature. In CBECS, the base temperature used is 65°F, and the period  of time is one year. The heating degree day is the difference between that  day's average temperature and 65°F if the daily average is less than 65°F; it  is zero if the daily average temperature is greater than or equal to 65°F.  Heating degree days for a year are the sum of the daily heating degree days for  days that year.</p>
	
      <p><strong>Heating equipment: </strong>The equipment used for heating ambient air in a building, such as a packaged central unit, boiler, heat pump, furnace, individual space heater, duct reheat, or district steam or hot water piped in from outside the building. </p>
      <p><strong>Heating, ventilation, and air-conditioning (HVAC): </strong>The system or systems that condition air in a building.</p>
      <p><strong>Heat pump: </strong>A type of heating and cooling equipment that draws heat into a building from outside and, during the cooling season, ejects heat from the building to the outside. Heat pumps are vapor-compression refrigeration systems whose indoor/outdoor coils are used reversibly as condensers or evaporators, depending on the need for heating or cooling. </p>
      <p><strong>High-intensity discharge (HID) light bulb: </strong>A lamp bulb that produces light by passing electricity through a gas, which causes the gas to glow. Examples of HID lamps are mercury vapor lamps, metal halide lamps, and high- and low-pressure sodium lamps. HID lamps have an extremely long life and emit many more lumens per fixture than do fluorescent lights.</p>
      <p><strong>HVAC: </strong>Abbreviation for <em>heating, ventilation, and air-conditioning</em>.</p>
      <p><strong>HVAC maintenance: </strong>An HVAC conservation feature consisting of a program of routine inspection and service for heating and cooling equipment. The inspection is performed on a regular basis, even if no apparent problems exist.</p>

      <P><span><strong><a name="I"></a>Imputation:</strong> A statistical method used to generate values for missing items, designed to minimize the bias of estimates based on the resulting data set. In this survey, missing responses were generated using a procedure known as a hot-deck imputation, which uses random resampling from similar non-missing cases to generate values for missing cases.</span></P>&nbsp;
      <p><strong>Incandescent light bulb: </strong>A light bulb that produces a soft warm light by electrically heating a tungsten filament so that it glows. Because so much of the energy is lost as heat, these light bulbs are highly inefficient sources of light. Included in this category are the familiar type of light bulbs that screw into sockets, as well as energy-efficient incandescent bulbs, such as reflector or R-lamps (accent and task lighting), parabolic aluminized reflector (PAR) lamps (flood and spot lighting), and ellipsoidal reflector (ER) lamps (recessed lighting).</p>
      <p><strong>Individual air conditioner: </strong>A type of cooling equipment characterized by a lack of pipes or ductwork that directly cool only the room or areas where they are located. Room air conditioners are self-contained units installed in or through walls or windows. They include packaged terminal air conditioners (PTACs), packaged terminal heat pumps (PTHPs), and window air-conditioning units. This category also includes portable air conditioners, which are freestanding with a tube to vent warm air outside.</p>
      <p><strong>Individual space heater: </strong>A type of space-heating equipment that is a free-standing or a self-contained unit that generates and delivers heat to a local zone within the building. The heater may be permanently mounted in a wall or floor or may be portable. Examples of individual space heaters include electric baseboards, electric radiant or quartz heaters, heating panels, natural gas- or kerosene-fired unit heaters, wood stoves, infrared radiant heaters, and the heating elements in room space conditioning equipment such as packaged terminal air conditioners (PTACs) and packaged terminal heat pumps (PTHPs). Individual space heaters are characterized by a lack of pipes or ductwork for distributing hot water, steam, or warm air through a building.</p>
	<P><strong>Intensity: </strong>The amount of a quantity per unit of measurement (floorspace, number of  workers, etc.) This method adjusts either the amount of energy consumed or  expenditures spent, for the effects of various building characteristics, such  as size of the building, number of workers, or number of operating hours, to  facilitate comparisons of energy across time, fuels, and buildings. </P>
      <p><strong>Interior wall reconfiguration: </strong>A type of building renovation in which walls within the building are taken down or moved, such as individual offices turned into an area for cubicles.</p>
      <p><strong>Internet-connected or smart thermostat: </strong>An internet-connected thermostat can be programmed to adjust the temperature settings for heating or cooling at predetermined times. A smart thermostat may allow heating and cooling to be controlled remotely (for example, through a smartphone.)</p>
      
      <P><strong><a name="K"></a>Kerosene:</strong> A petroleum distillate with properties similar to those of No. 1 fuel oil; used primarily in space heaters, cooking stoves, and water heaters. The CBECS does not distinguish between kerosene and fuel oil; kerosene is included in the <em>fuel oil</em> category under <em>energy sources</em>.</P>
	<P><strong>Kilowatthour (kWh):</strong> A unit of work or  energy, measured as 1 kilowatt (1,000 watts) of power expended for 1 hour. One  kWh is equivalent to 3,412 British thermal units. </P>

      <P><strong><a name="L"></a>Light-emitting diode (LED) lights: </strong>A type of solid state lighting where a semi-conducting material converts electricity directly into light. Unlike incandescent and fluorescent lights, LEDs generate light without producing heat. </P>
      <P><strong>Light scheduling: </strong>An interior lighting conservation strategy in which lights are automatically dimmed or turned off at certain times of the day.</P>
      <P><strong>Lighting: </strong>The illumination of the interior of a building by use of artificial sources of light. </P>
      <P><strong>Liquefied petroleum gas (LPG): </strong>Any fuel gas supplied to a building in liquid form. Propane is the usual LPG, but gases such as butane, propylene, butylene, and ethane are also LPG. For this report, any LPG reported was assumed to be propane.</P>
		  
	<P><strong><a name="M"></a>Major fuels:</strong> The energy sources or  fuels for which consumption and expenditures data are collected. These fuels or  energy sources are electricity, fuel oil, natural gas, district steam, and  district hot water. </P>
      
      <P><strong>Manufacturing:</strong> As an energy end use,  any of the energy-using operations required for manufacturing or industrial  processes. </P>
      <p><strong>Mean: </strong>The simple average for a population characteristic is the sum of all the values in a population divided by the size of the population. For this report, population means are estimated by computing the weighted sum of the sample values, then dividing by the sum of the sample weights. For example, <em>mean hours per week</em> is the weighted sum of the number of operating hours divided by the weighted sum of the number of buildings. <em>Mean square feet per building</em> is the weighted sum of the total square feet divided by the weighted sum of the number of buildings. <em>Mean square feet per worker</em> is the weighted sum of the total square feet divided by the weighted sum of the total number of main shift workers. </p>
      <p><strong>Median: </strong>The middle value of the population characteristic. Half the population has a value above the median and half has a value below. The median is different from the mean in that extremes in the sample do not influence the median as much. An estimate of the mean square feet per building would be affected by the inclusion of some very large buildings and would not express square footage for a typical building. In contrast, the median square feet would not be so affected. <em>Median age of the building</em> is the middle age of all CBECS buildings. <em>Median hours per week</em> is the middle number of operating hours of all CBECS buildings. Median square feet per building is the middle size (in square feet) of all CBECS buildings. <em>Median square feet per worker</em> is the middle amount of the floorspace per worker of all CBECS buildings.</p>
      <p><strong>Metal panels: </strong>An exterior wall construction material made of aluminum or galvanized steel panels fabricated in factories and fastened to the frame of the building to form outside walls. Pre-engineered metal buildings are also included in this category.</p>
      <p><strong>Metal surfacing: </strong>Light-gauge metal sheets used for roofing, commonly referred to as a tin roof.</p>
	<P><strong>Metric conversion factors: </strong>Estimates are presented in customary U.S. units. Floorspace estimates may be converted to metric units by using the relationship: 1 square foot is approximately equal to 0.0929 square meter. Energy estimates may be converted to metric units by using the relationship: 1 British thermal unit is approximately equal to 1,055 joules; 1 kilowatthour is exactly equal to 3,600,000 joules; and 1 gigajoule (10<sup>9</sup> joules) is approximately 278 kilowatthours (kWh).</P>
      <p><strong>Microturbine: </strong>An electricity generation technology; a small combustion turbine that produces between 25 kilowatts and 500 kilowatts of power.</p>
      <p><strong>More than one may apply: </strong>A row stub accompanied by this phrase indicates overlapping categories, so that a particular building may be represented in more than one line under this stub. In general, row stubs without this designation are mutually exclusive—that is, they divide the population of buildings into distinct groups, so that a particular building is represented in only one line under this stub.</p>
      <p><strong>Multibuilding complex: </strong>A group of two or more buildings on the same site owned or operated by a single organization, business, or individual. Examples include university campuses and hospital complexes.</p>
      <p><strong>Multilevel lighting or dimming: </strong>Interior lighting control devices that adjust lighting power by continuous dimming, stepped dimming, or stepped switching.</p>
      <p><strong>Multipaned window: </strong>An energy-efficient window made of two or three pieces of glass with air space in between them to improve insulation against heat transfer. These windows may also be referred to as double-paned or triple-paned windows.</p>
      <p><strong>Multistage area probability sample: </strong>A sample design executed in stages with geographic clusters of sampling units selected at each stage.</p>

      <P><strong><a name="N"></a>Natural gas:</strong> Hydrocarbon gas (mostly methane) supplied as an energy source to individual buildings by pipelines from a central utility company. Natural gas does not refer to liquefied petroleum gas (LPG) or to privately owned gas wells operated by a building owner.</P>
      <p><strong>Nongovernment owned: </strong>Owned by an individual or a group, such as a private business, a nonprofit organization, a privately owned utility company, or a church, synagogue, or other religious organization. The building may be occupied by more than one agency and may be owner-occupied, leased to tenants, or unoccupied.</p>
      
      <P><strong><a name="O"></a>Occupancy  sensors: </strong>Interior lighting control sensors that automatically turn off or dim lights when a person leaves a room or space.</P>
	<P><strong>Office equipment:</strong> A class of energy-using equipment that may be used across building types. End-use estimates provided for office equipment reflect non-computer-based equipment, including copiers, printers, FAX machines, point-of-sale devices and cash registers, and video displays. End-use estimates for computing equipment are provided separately.  </P>
      <P><strong>Owner occupied: </strong>Refers to a building that has the owner or the owner’s business represented at the site.</P>
    
      <P><a name="P"></a><strong>Packaged unit: </strong>A type of heating and cooling equipment that is assembled at a factory and installed as a self-contained unit. Packaged units are in contrast to engineer-specified units built up from individual components for use in a given building. They are generally mounted on the roof of the building, but they are also sometimes located on a slab outside the building. Packaged units produce warm or cool air directly and distribute it throughout the building by ducts or a similar distribution system. Some types of electric packaged units are also called direct expansion, or DX, units.</P>
      <p><strong>Percentage lit when closed: </strong>The percentage of a building’s square footage that is lit electrically during all hours other than the usual operating hours.</p>
      <p><strong>Percentage lit when open: </strong>The percentage of a building’s square footage that is lit electrically during usual operating hours.</p>
      <p><strong>Percentage of floorspace cooled: </strong>The percentage of a building’s square footage that is cooled to meet the comfort requirements of the occupants.</p>
      <p><strong>Percentage of floorspace heated: </strong>The percentage of a building’s square footage designed to be heated to at least 50°F.</p>
      <p><strong>Plumbing system upgrade: </strong>A type of building renovation that involves improvements to the pipes, fixtures, and other apparatus of the water system in the building, including the hot water heater.</p>
      <p><strong>Predominant exterior wall material: </strong>The major type of exterior wall construction material used in a building.</p>
      <p><strong>Predominant roof material: </strong>The material used the most for the roof of a building. </p>
	<P id="PriElec"><strong>Primary electricity:</strong>&nbsp;Site  electricity (the amount of electricity that enters a building) plus the energy  used to produce and deliver that electricity. The 2018 CBECS  uses a conversion factor of 2.90, which was calculated from the <em><a href="https://www.eia.gov/totalenergy/data/monthly/pdf/sec2_5.pdf">Monthly  Energy Review Table 2.1b</a></em>&nbsp;as the sum of the  energy content of electricity sales and the electrical system energy losses,  divided by the energy content of electricity sales. Electrical system energy  losses include conversion losses, plant use, transmission and distribution  losses, and unaccounted for electricity. Electricity sales include sales to  ultimate customers from the electric power sector including photovoltaic solar  systems with 1 megawatt or more of capacity. Kilowatthours of solar, wind,  geothermal, and hydroelectric generation are converted to British thermal units  by using the average annual heat rate of fossil-fuel fired power plants. Using  the heat content of electricity would result in a primary electricity  conversion factor of 2.62 for 2018. See <em><a href="https://www.eia.gov/totalenergy/data/monthly/pdf/mer_e.pdf">Monthly  Energy Review Appendix E</a></em> for more information on  alternative approaches used to derive  the energy content of noncombustible renewable electricity.</P>
      <p><strong>Primary sampling unit (PSU):</strong>A sampling unit selected at the first stage in a multistage area probability sample. A PSU typically consists of one to several contiguous counties—for example, a metropolitan statistical area with surrounding suburban counties.</p>
      <p><strong>Primary space-heating energy source: </strong>The energy source used to heat most of the heated floorspace in a building most of the time.</p>
      <p><strong>Principal building activity: </strong>The activity or function occupying the most floorspace in a building. The categories were designed to group buildings that have similar patterns of energy consumption. Examples of principal building activity include office, health care, lodging, mercantile, and service. (See <a href="https://www.eia.gov/consumption/commercial/building-type-definitions.cfm">Description of CBECS Building Types</a> for a complete list and definitions of each.)</p>
      <p><strong>Programmable thermostat: </strong>A control system for the heating and cooling system that can be programmed to automatically change thermostat settings at certain times.</p>
      <p><strong>Propane: </strong>A type of liquefied petroleum gas (LPG), also known as bottled gas. Propane is usually delivered by tank trucks and stored near the building in a tank or cylinder until used, but it can also be purchased in canisters from retail stores.</p>
      
      <P><strong><a name="R"></a>Reflective window glass:</strong> A conservation feature that consists of reflective glass installed on the exterior glazing of a building to reduce the rate of solar penetration into the building.</P>
      <p><strong>Refrigeration equipment: </strong>Refrigeration equipment is designed to maintain the stored items below room temperature but above the freezing point of water. CBECS collects information on commercial refrigeration such as walk-in units, cases or cabinets, and large cold storage areas, as well as residential-type units (full size and compact) and refrigerated vending machines. This category also includes commercial ice machines and freezer equipment, which are designed to keep their contents below the freezing point of water (32°F). </p>
      <p><strong>Residential-type central air conditioner: </strong>Central split system air conditioners cool air directly and use a fan or blower to circulate it through a system of air ducts without using chilled water. These systems consist of an outdoor condensing unit connected by refrigerant lines to an indoor evaporator or cooling coil.</p>
      <p><strong>Residential-type refrigeration unit: </strong>The type of refrigerator, freezer, or combination refrigerator and freezer often found in a home kitchen. This category also includes half-size units often found in a dormitory, office, or hotel. </p>
      <p><strong>Relative standard error (RSE): </strong>A measure of the reliability or precision of a survey statistic. Variability occurs in survey statistics because the different samples that could be drawn would each produce different values for the survey statistics. The RSE is the standard error (the square root of the variance) of a survey estimate, divided by the survey estimate, and multiplied by 100. For example, an RSE of 10% means that the standard error is one-tenth as large as the survey estimate. Tables of RSEs are provided for each of the CBECS Detailed Tables as a separate tab in the Excel table.</p>

      <P><strong><a name="S"></a>Separate computer area: </strong>A room or rooms in a building specifically designed and equipped to meet the needs of computer equipment, such as a data center, computer-based training room, or a computer center for student or public use.</P>
      <p><strong>Server: </strong>The CPU, or case, portion of a computer that manages network resources, such as computer files, printers, databases, or network traffic. A server does not require much human operation, so most do not have keyboards or monitors.</p>
      <p><strong>Shakes: </strong>Flat pieces of weatherproof material laid with others in a series of overlapping rows as a covering for roofs and sometimes the sides of buildings. Shakes are similar to wood shingles, but, instead of having a cut and smoothly planed surface, shakes have textured grooves and a rough or <em>split</em> rustic appearance.</p>
      <p><strong>Shingles: </strong>Flat pieces of weatherproof material laid with others in a series of overlapping rows as covering for roofs and sometimes the walls of buildings. Shingles are manufactured in a variety of materials, including fiberglass, plastic, baked clay, tile, asbestos, asphalt, aluminum, and wood. Wood shingles are included in the <em>wooden materials</em> category under <em>predominant roof material</em>.</p>
      <p><strong>Siding: </strong>An exterior wall covering material made of wood, plastic (including vinyl), or metal. The structural walls may be masonry or wood. Siding is generally produced in the shape of boards and applied to the outside of a building in overlapping rows.</p>
	<P id="SiteElec"><strong>Site electricity:</strong> The amount of electricity that  enters a building. </P>
      <p><strong>Slate or tile shingles: </strong>A shingle is a thin, wedge-shaped piece of material laid with others in a series of overlapping rows as a covering for roofs. <em>Tile</em> refers to any thin, square, or rectangular piece of baked clay, stone, or concrete used as a roofing material. <em>Slate</em> refers to a particular stone used for roofing.</p>
      <p><strong>Solar: </strong>CBECS collects information about solar panels and solar thermal systems. A solar panel, or photovoltaic cell (PVC), is an electronic device consisting of layers of semiconductor materials fabricated to form a junction (adjacent layers of materials with different electronic characteristics) and electrical contacts. A solar panel can convert incident light directly into electricity (direct current). A solar thermal system actively concentrates thermal energy from the sun by means of solar collector panels. The panels typically consist of flat, sun-oriented boxes with transparent covers, containing water tubes or air baffles under a blackened heat absorbent panel. The energy is usually used for space heating, water heating, and for heating swimming pools.</p>
      <p><strong>Space heating: </strong>As an energy end use, the use of mechanical equipment (including wood stoves and active solar heating devices) to heat all, or part, of a building to at least 50°F.</p>
      <p><strong>Square footage: </strong>Floorspace, in units of square feet. One square foot is approximately equal to 0.0929 square meters.</p>
      <p><strong>Standard error: </strong>A measure of the precision of an estimate, equal to the square root of the variance.</p>
      <p><strong>Standard fluorescent light bulb: </strong>Usually a long, narrow, white tube made of glass, coated on the inside with fluorescent material that is connected to an electric fixture at both ends of the light bulb. They may also be circular or U-shaped. The light bulb produces light by passing electricity through mercury vapor, causing the fluorescent coating to glow, or fluoresce. Excluded are compact fluorescent light bulbs, which are listed in a separate category.</p>
      <p><strong>Swamp cooler (evaporative cooler): </strong>A type of cooling equipment that turns air into moist, cool air by spraying cool water into ducts and cooling the air as the spray evaporates. It does not cool air by use of a refrigeration unit. This type of equipment is commonly used in warm, dry climates.</p>
      <p><strong>Synthetic or rubber roofing: </strong>A layer of heavy gauge plastic or rubber used for roofing.</p>
      
      <P><strong><a name="T"></a>Tinted window glass: </strong>A conservation feature that consists of tinted glass installed on the exterior glazing of a building to reduce the rate of solar penetration into the building.</P>
		  
	<P><strong>Trillion Btu: </strong>Equivalent to  1,000,000,000,000 (or 10<SUP>12</SUP>) British thermal units (Btu). </P>

      <P><strong><a name="V"></a>Variable air-volume (VAV) system: </strong>An HVAC conservation feature that supplies varying quantities of conditioned (heated or cooled) air to different parts of a building according to the heating and cooling needs of those specific areas.</P>
      <p><strong>Variance: </strong>A measure of the variability of a set of observations that are subject to some chance variation, equal to the expected squared difference between a single observation and the average of all possible observations obtained in the same manner. The variance is the square of the standard error of estimates. The variance indicates the likely difference between the value computed from the CBECS sample and the average of the values that could have been computed from all possible samples that might have been obtained by the same sample selection process.</p>
      <p><strong>Vending machine: </strong>As a type of refrigeration equipment, this category includes only refrigerated vending machines, such as soda, juice, water, or frozen dessert machines.</p>
		  
	<P><strong>Ventilation:</strong>The circulation of air  through a building to provide fresh air to the occupants and to deliver heating  and cooling to the occupied spaces. </P>
      
      <P><strong><a name="W"></a>Walk-in refrigeration unit: </strong>A refrigeration or freezer unit (within a building) that is large enough to walk into. It may be portable or permanent, such as a meat storage locker in a butcher store. Walk-in units may or may not have a door, plastic strips, or other flexible covers. </P>
      <p><strong>Water heating: </strong>As an energy end use, the use of energy to heat water for purposes other than space heating. Also referred to as <em>domestic hot water heating</em>. </p>
      <p><strong>Water heating equipment: </strong>Automatically controlled, thermally insulated equipment designed for heating water at temperatures less than 180°F for other than space heating purposes. This survey collected data to distinguish between two types of water heating equipment: centralized and distributed. </p>
      <p><strong>Water loop heat pump: </strong> A type of heat pump in which water is drawn up through a well directly to a heat exchanger where the heat is obtained. The water is then discharged back to an above-ground body of water or to a separate well. It uses water as a source of heat during the heating season. It may also be referred to as an <em>open</em> system. </p>
      <p><strong>Weekly operating hours: </strong>The number of hours per week that a building is used, excluding hours when the building is occupied only by maintenance, housekeeping, security, or other support personnel. For buildings with a schedule that vary during the year, <em>weekly operating hours</em> refer to the total weekly hours for the most typical months. </p>
      <p><strong>Weight: </strong>The number of buildings in the United States that a particular building in the sample represents. To estimate the total value of an attribute (such as square footage) in the U.S. commercial buildings population as a whole, each sample building’s value is multiplied by the building’s weight. Summing (aggregating) the weighted sample values provides an estimate of the national total.</p>
      <p><strong>Window glass: </strong>An exterior wall construction material made of glass that can be seen through from the inside of the building, like the glass found in windows. Walls that are glass-covered or constructed of non-transparent material are excluded from this category.</p>
      <p><strong>Wood: </strong>As an energy source, wood logs, chips, or wood products that are used as fuel. </p>
      <p><strong>Workers (main shift): </strong>The number of people working in a building during the main shift on a typical workday during the year. The main shift is the time when most people are in the building. Included in this definition are self-employed workers and volunteers. Excluded are customers, patients, and students, unless they are working for establishments in the building. Also excluded are employees who work out of the office, such as salespeople who report into the office, delivery people with routes, and messengers.</p>

      
      <P><strong><a name="Y"></a>Year constructed:</strong> The year in which the major part or the largest portion of a building was constructed.</P>
    </div>
		<div class="l-col">
			<?php include('consumption/commercial/includes/side-nav-commercial.inc'); ?>
  </div>
  </div>
	<?php include('global/footer/includes/footer.inc'); ?>
</body>
  
</html>