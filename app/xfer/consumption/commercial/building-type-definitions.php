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
        <h1>Building Type Definitions</h1>
        <p>In the Commercial Buildings Energy Consumption Survey (CBECS), buildings are classified according to principal building activity, which is the primary business, commerce, or function carried on within each building. Buildings used for more than one of the activities described below are assigned to the activity occupying the most floorspace. A building assigned to a particular principal activity category may be used for other activities in a portion of its space or at some time during the year. Respondents are asked to place their building into a more specific activity sub-category to ensure the quality of the data. After data collection, we combine the subcategories into the more general building categories.</p>
        <h2>Building Types:</h2>
        <div class="split_4columns">
          <ul>
            <li><a href="#Education">Education</a></li>
            <li> <a href="#FoodSales">Food sales</a></li>
            <li><a href="#FoodService">Food service</a></li>
            <li><a href="#HealthIn">Health care (inpatient)</a></li>
            <li><a href="#HealthOut">Health care (outpatient)</a></li>
          </ul>
        </div>
        <div class="split_4columns">
          <ul>
            <li><a href="#Lodging">Lodging</a></li>
            <li><a href="#RetailOther">Mercantile (retail other than mall)</a></li>
            <li><a href="#RetailStripMalls">Mercantile (enclosed and strip malls)</a></li>
            <li><a href="#Office">Office</a></li>
            <li><a href="#PublicAssembly">Public assembly</a></li>
          </ul>
        </div>
        <div class="split_4columns">
          <ul>
            <li><a href="#PublicOrder">Public order and safety</a></li>
            <li><a href="#Worship">Religious worship</a></li>
            <li><a href="#Service">Service</a></li>
            <li><a href="#Warehouse">Warehouse and storage</a></li>
            <li><a href="#Other">Other</a></li>
          </ul>
        </div>
        <div class="split_4columns">
          <ul>
            <li><a href="#Vacant">Vacant</a></li>
          </ul>
        </div>
        <table width="100%" class="simpletable">
          <thead>
            <tr>
              <th width="21%">Building type</th>
              <th style="text-align:left; vertical-align:bottom" width="42%">Definition</th>
              <th style="text-align:left; vertical-align:top" width="37%">Includes these sub-categories from the CBECS questionnaire</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td valign="top" style="text-align:left; vertical-align:top"><a name="Education" id="Education"></a>Education <img src="./images/Education.png" alt="Education" height="auto" width="100%"></td>
              <td style="text-align:left; vertical-align:top">Buildings used for academic or technical classroom instruction, such as elementary, middle, or high schools, and classroom buildings on college or university campuses. Buildings on education campuses for which the main use is not educational instruction, are included in the category relating to their use. For example, administration buildings are considered office, dormitories are considered lodging, and libraries are considered public assembly.</td>
              <td valign="top" style="text-align:left; vertical-align:top" ><ul>
                  <li >Elementary or middle school</li>
                  <li >High school</li>
                  <li >Multi-grade K-12</li>
                  <li >College or university</li>
                  <li >Preschool or daycare</li>
                  <li >Adult education</li>
                  <li >Career or vocational training</li>
                  <li >Religious education</li>
                </ul></td>
            </tr>
            <tr>
              <td valign="top" ><a name="FoodSales" id="FoodSales"></a>Food sales <img src="./images/FoodSales.png" alt="Food sales" height="auto" width="100%"></td>
              <td valign="top" style="text-align:left; vertical-align:top" >Buildings used for retail or wholesale of food.</td>
              <td style="text-align:left; vertical-align:top" ><ul>
                  <li>Grocery store or food market</li>
                  <li>Convenience store (with or without a gas station)</li>
                  <li>Bakery</li>
                </ul></td>
            </tr>
            <tr>
              <td valign="top"><a name="FoodService" id="FoodService"></a>Food service <img src="./images/FoodService.png" alt="Food service" height="auto" width="100%"></td>
              <td valign="top" style="text-align:left; vertical-align:top" >Buildings used for selling prepared food and beverages.</td>
              <td style="text-align:left; vertical-align:top" ><ul>
                  <li >Fast food</li>
                  <li >Restaurant or cafeteria</li>
                  <li >Bar, pub, or lounge</li>
                  <li >Catering service</li>
                  <li >Coffee, bagel, or doughnut shop</li>
                  <li >Ice cream or frozen yogurt shop</li>
               </ul>
               </td>
            </tr>
            <tr>
              <td valign="top" style="text-align:left; vertical-align:top"><a name="HealthIn"></a>Health care (inpatient) <img src="./images/HealthInPatient.png" alt="Healthcare inpatient" height="auto" width="100%"></td>
              <td style="text-align:left; vertical-align:top" >Buildings used as diagnostic and treatment facilities for inpatient care.</td>
              <td style="text-align:left; vertical-align:top" ><ul>
                  <li >Hospital</li>
                  <li >Inpatient rehabilitation</li>
                </ul></td>
            </tr>
            <tr>
              <td valign="top" style="text-align:left; vertical-align:top"><a name="HealthOut"></a>Health care (outpatient) <img src="./images/HeathOutPatient.png" alt="Healthcare outpatient" height="auto" width="100%"></td>
              <td style="text-align:left; vertical-align:top" >Buildings used as diagnostic and treatment facilities for outpatient care. Medical offices are included here if they use any type of diagnostic medical equipment (if they do not, they are categorized as an office building).</td>
              <td style="text-align:left; vertical-align:top"><ul>
                  <li >Medical office (see Definition)</li>
                  <li >Clinic or other outpatient health care</li>
                  <li >Outpatient rehabilitation</li>
                  <li >Veterinarian</li>
                </ul></td>
            </tr>
            <tr>
              <td valign="top" style="text-align:left; vertical-align:top"><a name="Lodging"></a>Lodging <img src="./images/Lodging.png" alt="Lodging" height="auto" width="100%"></td>
<td style="text-align:left; vertical-align:top">Buildings used to offer multiple accommodations for short-term or long-term residents, including skilled nursing and other residential care buildings.</td>
              <td style="text-align:left; vertical-align:top"><ul>
                  <li >Hotel or resort</li>
                  <li >Motel, inn, or bed and breakfast</li>
                  <li >Dormitory, fraternity, or sorority</li>
                  <li >Retirement home</li> 
                  <li >Nursing home, assisted living, or other residential care</li>
                  <li >Convent or monastery</li>
                  <li >Shelter, group home, or children's home</li>
                  <li >Halfway house</li></td></tr>
            <tr>
              <td valign="top" style="text-align:left; vertical-align:top"><a name="RetailOther"></a>Mercantile (retail other than mall) <img src="./images/MerchantileRetail.png" alt="Mercantile retail" height="auto" width="100%"></td>
              <td style="text-align:left; vertical-align:top">Buildings used for the sale and display of goods other than food.</td>
              <td style="text-align:left; vertical-align:top" ><ul>
                  <li >Retail store</li>
                  <li >Beer, wine, or liquor store</li>
                  <li  >Rental center</li>
                  <li >Dealership or showroom for vehicles or boats</li>
                  <li >Studio or gallery</li>
                </ul></td>
            </tr>
            <tr>
              <td valign="top" style="text-align:left; vertical-align:top"><a name="RetailStripMalls"></a>Mercantile (enclosed and strip malls) <img src="./images/MerchantileMall.png" alt="Mercantile mall" height="auto" width="100%"></td>
              <td style="text-align:left; vertical-align:top" >Shopping malls made up of multiple connected establishments. Enclosed malls are often anchored by one or more department stores and have interior walkways or common areas. Strip shopping centers have separate exterior entrances for each establishment.</td>
              <td style="text-align:left; vertical-align:top" ><ul>
                  <li >Enclosed mall</li>
                  <li >Strip shopping center</li>
                </ul></td>
            </tr>
            <tr>
              <td valign="top" style="text-align:left; vertical-align:top"><a name="Office"></a>Office <img src="./images/Offices.png" alt="Office" height="auto" width="100%"></td>
              <td style="text-align:left; vertical-align:top"  >Buildings used for general office space, professional offices, or administrative offices. Medical offices are included here if they do not use any type of diagnostic medical equipment (if they do, they are categorized as an outpatient health care building).</td>
              <td style="text-align:left; vertical-align:top"  ><ul>
              <li >Administrative or professional office</li>
              <li >Government office</li> 
              <li >Mixed-use office</li>
              <li >Bank or other financial institution</li> 
              <li >Medical office (see Definition)</li>
              <li >Sales office</li>
              <li >Contractor's office (for example, construction, plumbing, HVAC)</li>
              <li >Non-profit or social services</li>
              <li >City hall or city center</li>
              <li >Religious office</li> 
              <li >Call center</li>
              </ul></td>
            </tr>
              <td valign="top" style="text-align:left; vertical-align:top"><a name="PublicAssembly"></a>Public assembly <img src="./images/PublicAssembly.png" alt="Public assembly" height="auto" width="100%"></td>
              <td valign="top" style="text-align:left; vertical-align:top"  >Buildings in which people gather for social or recreational activities, whether in private or non-private meeting halls.</td>
              <td  style="text-align:left; vertical-align:top" ><ul>
              <li >Social or meeting (for example, community center, 
                lodge, meeting hall, convention center, senior center)</li>
              <li >Recreation (for example, gymnasium, health club, bowling alley, ice rink, field house, indoor racquet sports)</li>
              <li >Entertainment or culture (for example, museum, theater, cinema, sports arena, casino, night club)</li>
              <li >Library</li>
              <li >Transportation terminal</li>
              <li >Funeral home</li>
              <li >Student activities center</li>
              <li>Armory</li>
              <li>Exhibition hall</li>
                </ul></td>
            </tr>
            <tr>
              <td valign="top" ><a name="PublicOrder"></a>Public order and safety <img src="./images/PublicOrder.png" alt="Public order and safety" height="auto" width="100%"></td>
              <td valign="top" style="text-align:left; vertical-align:top" >Buildings used for the preservation of law and order or public safety.</td>
              <td style="text-align:left; vertical-align:top"  ><ul>
                  <li>Police station</li>
                  <li>Fire station</li>
                  <li>Jail, reformatory, or penitentiary</li>
                  <li>Courthouse or probation office</li>
                </ul></td>
            </tr>
            <tr>
              <td valign="top" style="text-align:left; vertical-align:top"><a name="Worship"></a>Religious worship <img src="./images/Religious.png" alt="Religious" height="auto" width="100%"></td>
              <td  style="text-align:left; vertical-align:top">Buildings in which people gather for religious activities, such as chapels, churches, mosques, synagogues, and temples.</td>
              <td style="text-align:left; vertical-align:top" > No subcategories collected </td>
            </tr>
            <tr>
              <td valign="top" style="text-align:left; vertical-align:top"><a name="Service"></a>Service<sup>1</sup> <img src="./images/Service.png" alt="Service" height="auto" width="100%"></td>
              <td style="text-align:left; vertical-align:top" >Buildings in which some type of service is provided, other than food service or retail sales of goods</td>
              <td style="text-align:left; vertical-align:top"><ul>
                  <li>Vehicle service or repair shop</li>
                  <li>Vehicle storage or maintenance (car barn)</li>
                  <li>Repair shop</li>
                  <li>Dry cleaner or laundromat</li>
                  <li>Post office or postal center</li>
                  <li>Car wash</li>
                  <li>Beauty parlor or barber shop</li>
                  <li>Copy center or printing shop</li>
                  <li>Kennel</li>
                </ul></td>
            </tr>
            <tr>
              <td valign="top" style="text-align:left; vertical-align:top"><a name="Warehouse"></a>Warehouse and storage <img src="./images/WarehouseStorage.png" alt="Warehouse and storage" height="auto" width="100%"></td>
              <td  style="text-align:left; vertical-align:top">Buildings used to store goods, manufactured products, merchandise, raw materials, or personal belongings (such as public self-storage).</td>
              <td style="text-align:left; vertical-align:top"  ><ul>
                  <li>Refrigerated warehouse</li>
                  <li>Non-refrigerated warehouse</li>
                  <li>Distribution or shipping center</li>
                  <li>Public rental storage units</li>
                </ul></td>
            </tr>
            <tr>
              <td valign="top" style="text-align:left; vertical-align:top"><a name="Other"></a>Other <img src="./images/Other.png" alt="Other buildings" height="auto" width="100%"></td>
              <td style="text-align:left; vertical-align:top" >The <em>other</em> category includes laboratories and other miscellaneous buildings that do not fit into any other activity category. It also includes buildings that are industrial or agricultural with some retail space and buildings with several different commercial activities that, together, comprise 50% or more of the floorspace, but whose largest single activity is agricultural, industrial, manufacturing, or residential.</td>
              <td style="text-align:left; vertical-align:top" ><ul>
                  <li>Airplane hangar</li>
                  <li>Broadcasting studio<sup>2</sup></li>
                  <li>Crematorium</li>
                  <li>Laboratory</li>
                  <li>Telephone switching</li>
                  <li>Agricultural with some retail space</li>
                  <li>Manufacturing or industrial with some retail space</li>
                  <li>Data center</li>
                  <li>Public restroom, locker, or changing area</li>
                </ul></td>
            </tr>
            <tr>
              <td valign="top" style="text-align:left; vertical-align:top"><a name="Vacant"></a>Vacant <img src="./images/Vacant.png" alt="Vacant" height="auto" width="100%"></td>
              <td style="text-align:left; vertical-align:top"  >Buildings in which more floorspace was vacant than was used for any single commercial activity at the time of interview. Therefore, a vacant building may have some occupied floorspace.</td>
              <td  style="text-align:left; vertical-align:top" >No subcategories collected, but we asked whether the building was completely vacant.</td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td colspan="3"><p>Notes: These subcategories are not exhaustive lists of the types of buildings included in each category. For every general category, we found some "other" types of buildings that did not fit into any of the given subcategories. <br> 
                <sup>1</sup>Prior to the 2018 CBECS, this category also included photo processing shops and tanning salons. These building types are no longer questionnaire subcategories but are still included in service if added as an “other specify.” <br> 
                <sup>2</sup>Prior to the 2018 CBECS, broadcasting studios were included in public assembly.
</p></td>
            </tr>
          </tfoot>
        </table>
     	</div>
		<div class="l-col">
			<?php include('consumption/commercial/includes/side-nav-commercial.inc'); ?>
		</div>
	</div>
	<?php include('global/footer/includes/footer.inc'); ?>
</body>

</html>