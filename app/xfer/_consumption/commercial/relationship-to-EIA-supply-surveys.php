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
    
    <h1>Relationship of CBECS Coverage to EIA Supply Surveys</h1>
    <p>The primary purpose of the CBECS is to collect accurate statistics of energy consumption by individual buildings. EIA also collects data on total energy supply (sales). For the information on sales totals, a different reporting system is used for each fuel and the boundaries between the different sectors (e.g., residential, commercial, industrial) are drawn differently for each fuel.</p>
    <h2>Background</h2>
    <p>EIA sales data on the different fuels are compiled in individual fuel reports. Annual electricity sales data are currently collected on Form EIA-861, &ldquo;Annual Electric Utility Report,&rdquo; which is sent to all electric utilities in the United States. Supply data for natural gas are collected on Form EIA-176, &ldquo;Annual Report of Natural and Supplemental Gas Supply and Disposition.&rdquo; That form must be submitted by all gas pipeline companies and other plant operators that deliver gas directly to consumers. Fuel oil and kerosene sales are collected on Form EIA-821, &ldquo;Annual Fuel Oil and Kerosene Sales Report.&rdquo; The supply data are compiled and summarized at the national level, as well as the State level, in several EIA reports, including the <em>State Energy Data Report</em> (SEDR) and the<em>Monthly Energy Review</em> (MER). When the CBECS totals are compared with the national commercial sales totals reported in the SEDR or MER, only electricity, natural gas, and fuel oil can be compared directly. CBECS does not collect data on coal consumption, and sales data for district heating are not collected by EIA.</p>
    <p> Differences between CBECS totals and sales totals can result from either (a) consumption that is included in the CBECS but not in the sales totals or (b) consumption that is included in commercial sales totals but is not considered commercial in CBECS and, therefore, is excluded from CBECS totals. A principal reason that a component of consumption may be in the CBECS totals but not in the sales totals, or vice versa, are differences in how <strong>buildings</strong>are classified for CBECS and how customer <strong>accounts</strong> are classified in the sales reporting system. Each energy supplier has its own system of classifying accounts. When reporting sales totals to EIA by end-use sector, the supplier uses EIA guidelines, as well as the supplier&rsquo;s own account classification, to determine whether a particular account belongs in the residential, commercial, industrial, or transportation sector.</p>
    <p>There are several general differences between the CBECS and the energy suppliers as to how each defines which buildings or accounts are commercial.</p>
    <ol>
      <li> CBECS covers consumption only in buildings. Commercial accounts are not necessarily associated only with buildings, but may also include unenclosed equipment or outdoor lighting. Outdoor lighting is included in commercial sales data reported in the SEDR but is not included in the commercial sales data reported in the MER.</li>
      <li> CBECS covers consumption for the entire building whose principal activity is commercial, i.e., nonindustrial or nonresidential; CBECS includes no consumption in other buildings. As a result, consumption for commercial activity in noncommercial buildings is not included in CBECS, but consumption for noncommercial activity in a commercial building is included. For example, in the first case, if the building&rsquo;s principal activity is manufacturing but there is a small office in the building, the energy associated with the office space would not be included in the CBECS. In the second case, if the building&rsquo;s principal activity is retail but there is a small portion of the building devoted to manufacturing, the energy associated with the manufacturing would be included and reported as commercial in CBECS. While energy suppliers may have several accounts within a building and those accounts could be classified as commercial or noncommercial sales, energy consumed in the CBECS buildings is classified as commercial.</li>
      <li> The activities included as commercial differ between the CBECS and the supply-side reporting systems. On the supply side, as noted, the definitions also differ among fuels.</li>
    </ol>
    <p>To help understand the relationship between CBECS consumption totals and EIA&rsquo;s commercial sales totals, the 1995 CBECS Energy Suppliers Survey collected information from the suppliers on how they classified each of the accounts for the CBECS sample.</p>
    <p> The CBECS energy suppliers&rsquo; account classification information showed the amount of consumption in commercial buildings that is likely to be excluded from commercial sales totals. Accounts classified by the energy supplier as residential or industrial are ordinarily included in EIA&rsquo;s sales totals for those sectors, not in commercial sales, as reported in the CBECS. Accounts classified by the supplier as commercial, school, government, or institutional are ordinarily included in EIA&rsquo;s commercial sales total: accounts with hybrid or combination classifications, however, are probably included partly in commercial and partly in noncommercial totals.</p>
    <p><a href="#table1">Table 1</a> shows the number of buildings, total floorspace, and energy consumption by the CBECS suppliers&rsquo; account classification for 1995 CBECS buildings. The shaded area indicates agreement between the CBECS definition of a building and the energy suppliers&rsquo; classification of their accounts for the CBECS buildings, as reported in the Energy Suppliers Survey portion of the CBECS. Since the SEDR and MER are based on data from the energy suppliers, the unshaded areas could potentially be classified by SEDR or MER as either residential, industrial, or other. However, they are included in the CBECS totals for commercial buildings.</p>
    <h3>Electricity</h3>
    <p> In 1995, about 82 percent of the 2.6 quadrillion Btu of electricity consumed in commercial buildings was classified by both CBECS and the electricity suppliers as commercial. This represented about 84 percent of total floorspace in buildings supplied with electricity. About 4 percent of the 1995 CBECS electricity consumption estimate and 5 percent of the floorspace were classified by the suppliers as either residential or industrial accounts. The remaining 14 percent of electricity consumption and 11 percent of floorspace were classified as mixed noncommercial/commercial by the supplier.<br />
    </p>
    <h3>Natural gas</h3>
    <p> For buildings supplied with natural gas, about 78 percent of the 1.9 quadrillion Btu of natural gas consumed and about 85 percent of the floorspace was classified by both CBECS and the natural gas suppliers as commercial. About 1 percent of the natural gas consumed was consumed in buildings classified as industrial by the supplier. This represented about 1 percent of the floorspace in buildings that use natural gas. An additional 1 percent of the natural gas consumption and 1 percent of the floorspace were classified as residential accounts. The remaining 19 percent of consumption and 13 percent of floorspace were classified by the supplier as mixed noncommercial/commercial accounts.<br />
    </p>
    <h3>Fuel oil</h3>
    <p>About 80 percent of the 0.2 quadrillion Btu of fuel oil consumed and 83 percent of the floorspace in buildings supplied with fuel oil in 1995 were classified by both the CBECS and the suppliers as commercial accounts. Energy suppliers classified about 8 percent of the consumption and 6 percent of the floorspace as either industrial or residential accounts. The remaining 11 percent of fuel oil consumed and 10 percent of floorspace were in buildings with mixed account classifications.<br />
      <br />
      Therefore, about 18 percent of the CBECS electricity consumption, 22 percent of the CBECS natural gas consumption, and 20 percent of the CBECS fuel oil consumption are potentially excluded from the 1995 commercial sales because of differences in account classifications between the energy suppliers and the CBECS. <br />
    </p>
    <table widtd="100%" class="basic_table">
      <caption>
      <a name="table1" id="table1"></a>Table 1. Energy Suppliers&rsquo; Account Classification of Commercial Buildings, 1995
      </caption>
      <tbody>
      <thead>
        <tr>
          <th></th>
          <th colspan="2" style="border-bottom: 2px solid #189BD7;">Buildings</th>
          <th colspan="2" style="border-bottom: 2px solid #189BD7;">Floorspace</th>
          <th colspan="2" style="border-bottom: 2px solid #189BD7;">Consumption</th>
        </tr>
        <tr>
        <th><strong>Energy Suppliers' Account Classification</strong></th>
          <th><strong>thousand</strong></th>
          <th><strong>percent</strong></th>
          <th><strong>million square feet</strong></th>
          <th><strong>percent</strong></th>
          <th><strong>trillion Btu</strong></th>
          <th><strong>percent</strong></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td colspan="7" style="background-color:#eee;"><strong>Energy Suppliers</strong></td>
        </tr>
        <tr>
          <td><strong>All Commercial Buildings Using Electricity</strong></td>
          <td>4,343</td>
          <td>100</td>
          <td>57,076</td>
          <td>100</td>
          <td>2,608</td>
          <td>100</td>
        </tr>
        <tr>
          <td><strong>Residential</strong></td>
          <td>64</td>
          <td>1</td>
          <td>336</td>
          <td>1</td>
          <td>5</td>
          <td>0</td>
        </tr>
        <tr>
          <td><strong>Commercial</strong></td>
          <td>3,860</td>
          <td>89</td>
          <td>48,131</td>
          <td>84</td>
          <td>2,133</td>
          <td>82</td>
        </tr>
        <tr>
          <td><strong>Industrial</strong></td>
          <td>63</td>
          <td>1</td>
          <td>2,238</td>
          <td>4</td>
          <td>115</td>
          <td>4</td>
        </tr>
        <tr>
          <td><strong>Mixed</strong></td>
          <td>357</td>
          <td>8</td>
          <td>6,371</td>
          <td>11</td>
          <td>355</td>
          <td>14</td>
        </tr>
        <tr>
          <td colspan="7" style="background-color:#eee;"><strong>Natural Gas Suppliers</strong></td>
        </tr>
        <tr>
          <td><strong>All Commercial Buildings Using Natural Gas</strong></td>
          <td>2,478</td>
          <td>100</td>
          <td>38,145</td>
          <td>100</td>
          <td>1,946</td>
          <td>100</td>
        </tr>
        <tr>
          <td><strong>Residential</strong></td>
          <td>81</td>
          <td>3</td>
          <td>273</td>
          <td>1</td>
          <td>19</td>
          <td>1</td>
        </tr>
        <tr>
          <td><strong>Commercial</strong></td>
          <td>2,094</td>
          <td>85</td>
          <td>32,516</td>
          <td>85</td>
          <td>1,523</td>
          <td>78</td>
        </tr>
        <tr>
          <td><strong>Industrial</strong></td>
          <td>22</td>
          <td>1</td>
          <td>530</td>
          <td>1</td>
          <td>28</td>
          <td>1</td>
        </tr>
        <tr>
          <td><strong>Mixed</strong></td>
          <td>282</td>
          <td>11</td>
          <td>4,826</td>
          <td>13</td>
          <td>375</td>
          <td>19</td>
        </tr>
        <tr>
          <td colspan="7" style="background-color:#eee;"><strong>Fuel Oil Suppliers</strong></td>
        </tr>
        <tr>
          <td><strong>All Commercial Buildings Using Fuel Oil</strong></td>
          <td>607</td>
          <td>100</td>
          <td>14,421</td>
          <td>100</td>
          <td>235</td>
          <td>100</td>
        </tr>
        <tr>
          <td><strong>Residential</strong></td>
          <td>25</td>
          <td>4</td>
          <td>265</td>
          <td>2</td>
          <td>11</td>
          <td>5</td>
        </tr>
        <tr>
          <td><strong>Commercial</strong></td>
          <td>500</td>
          <td>82</td>
          <td>11,994</td>
          <td>83</td>
          <td>188</td>
          <td>80</td>
        </tr>
        <tr>
          <td><strong>Industrial</strong></td>
          <td>5</td>
          <td>1</td>
          <td>565</td>
          <td>4</td>
          <td>8</td>
          <td>3</td>
        </tr>
        <tr>
          <td><strong>Mixed</strong></td>
          <td>69</td>
          <td>11</td>
          <td>1,497</td>
          <td>10</td>
          <td>27</td>
          <td>11</td>
        </tr>
        <tr>
          <td><strong>Not Classified</strong></td>
          <td>8</td>
          <td>1</td>
          <td>100</td>
          <td>1</td>
          <td>1</td>
          <td>0</td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="7">Note: Due to rounding data may not sum to totals.<br />
            Source: Energy Information Administration, 1995 Commercial Buildings Energy Consumption Survey</td>
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