<?php $locale = 'crudeoil'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Energy & Financial Markets: What Drives Crude Oil Prices? - Energy Information Administration</title>
	<?php
	$doNotIncludeHighcharts = true;
	
	include('../includes/header_efmi.inc');
	?>
	<link rel="stylesheet" href="includes/efmi.css" type="text/css">

	<script type="text/javascript" src="../includes/efmi.js"></script>
	<?php if (!isset($no_titling)) include "global/includes/titling.inc"; ?>
</head>

<?php
$schemaName = "neic";
require_once 'global/includes/utils/Neic.inc';
$neic = new NEIC();

$neic->sql = <<<SQL
SELECT CHART_ID, FREQUENCY, UPDATE_DATE
FROM $schemaName.EFMI_UPDATE_DATE
SQL;

$query = $neic->get();
$dataArray = array();

for ($i = 0; $i < sizeof($query); $i++) {
	$chartId = $query[$i]['chart_id'];
	$dataArray[$chartId] = array();
	$dataArray[$chartId]["frequency"] = $query[$i]['frequency'];
	$dataArray[$chartId]["update_date"] = $query[$i]['update_date'];
}
?>

<body>
<?php /* BEGIN Outer Wrapper  */ ?>
<div id="outerX">
	<?php
	include('global/includes/eia_header.inc');
	include("includes/dashboard.inc");
	?>
	<div class="blue_top"><a class="right" style="cursor:pointer;">&nbsp;</a></div>
	
	<?php /* BEGIN Page/Body Content  */ ?>
	<div class="pagecontent mr_temp4">
		<?php /* BEGIN Main Column  */ ?>
		

		<div class="main_col left" style="margin-top:-20px;width:600px;">
			<h1>What drives crude oil prices: Overview</h1>
			<p>We assess the various factors that may influence crude oil prices &#8212; physical market factors as well as
				those related to trading and financial markets. We describe the seven key factors that could influence oil
				markets and explore possible links between each factor and crude oil prices. We include regularly updated
				graphs that depict aspects of those relationships. </p>

			<p>Several graphs include projections from our <a href="/forecasts/steo/">Short-Term Energy Outlook</a>. Graphs
				are updated with new data on a monthly, quarterly, and annual basis according to the schedule below. Analytical
				text will be updated as needed. </p>
			<style>
				.simpletable td {
					vertical-align: top;
				}

				.simpletable {
					margin-top: 16px;
				}

			</style>
			<span style="font-weight:normal;"><a href="<?php echo $rootPath; ?>/crudeoil/reports_presentations/crude.pdf"
																					 class="ico_pdf">All graphs</a></span><br/>

			<table class="simpletable" cellspacing="0" cellpadding="0" border="0" width="100%">
				<thead>
				<tr>
					<th align="left">
						Graph update schedule by section &nbsp; &nbsp;
					</th>
					<th>Update frequency</th>
					<th>Last update</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td valign="top"><strong><a href="supply-nonopec.php">Supply: Non-OPEC</a></strong></td>
					<td width="100" valign="top">&nbsp;</td>
					<td width="100" valign="top">&nbsp;</td>
				</tr>
				<tr>
					<td valign="top">Production &amp; WTI crude prices</td>
					<td valign="top"><?php echo $dataArray["NONOPEC_1"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["NONOPEC_1"]["update_date"]; ?></td>
				</tr>
				<tr>
					<td valign="top">Changes in production capacity &amp; GDP, price of WTI crude</td>
					<td valign="top"><?php echo $dataArray["NONOPEC_2"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["NONOPEC_2"]["update_date"]; ?></td>
				</tr>
				<tr>
					<td valign="top">Projected supply, annual average</td>
					<td valign="top"><?php echo $dataArray["NONOPEC_3"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["NONOPEC_3"]["update_date"]; ?></td>
				</tr>
				<tr>
					<td valign="top">OPEC and Non-opec Supply disruption</td>
					<td valign="top"><?php echo $dataArray["NONOPEC_4"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["NONOPEC_4"]["update_date"]; ?></td>
				</tr>
				<tr>
					<td colspan="3" valign="top" class="no-border">&nbsp;</td>
				</tr>
				<tr>

					<td valign="top"><strong><a href="supply-opec.php">Supply: OPEC</a></strong></td>
					<td valign="top">&nbsp;</td>
					<td valign="top">&nbsp;</td>
				</tr>
				<tr>
					<td valign="top">Changes in Saudi Production &amp; WTI crude prices</td>
					<td valign="top"><?php echo $dataArray["OPEC_1"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["OPEC_1"]["update_date"]; ?></td>
				</tr>
				<tr>
					<td valign="top">Spare production capacity &amp; WTI crude prices</td>
					<td valign="top"><?php echo $dataArray["OPEC_2"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["OPEC_2"]["update_date"]; ?></td>
				</tr>
				<tr>
					<td valign="top">Changes in production capacity &amp; GDP, price of WTI crude</td>
					<td valign="top"><?php echo $dataArray["OPEC_3"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["OPEC_3"]["update_date"]; ?></td>
				</tr>
				<tr>
					<td valign="top">OPEC and Non-opec Supply disruption</td>
					<td valign="top"><?php echo $dataArray["OPEC_4"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["OPEC_4"]["update_date"]; ?></td>
				</tr>
				<tr>
					<td colspan="3" valign="top" class="no-border">&nbsp;</td>
				</tr>
				<tr>
					<td valign="top"><strong><a href="balance.php">Balance</a></strong></td>
					<td valign="top">&nbsp;</td>
					<td valign="top">&nbsp;</td>
				</tr>
				<tr>
					<td valign="top">OECD inventories &amp; WTI futures spread</td>
					<td valign="top"><?php echo $dataArray["BALANCE_1"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["BALANCE_1"]["update_date"]; ?></td>
				</tr>
				<tr>
					<td colspan="3" valign="top" class="no-border">&nbsp;</td>
				</tr>
				<tr>
					<td valign="top"><strong><a href="spot_prices.php">Spot Prices</a></strong></td>
					<td valign="top">&nbsp;</td>
					<td valign="top">&nbsp;</td>
				</tr>
				<tr>
					<td valign="top">World crude oil prices</td>
					<td valign="top"><?php echo $dataArray["SPOT_1"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["SPOT_1"]["update_date"]; ?></td>
				<tr>
					<td valign="top">U.S. retail gasoline price, refiner acquisition cost of crude oil</td>
					<td valign="top"><?php echo $dataArray["SPOT_2"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["SPOT_2"]["update_date"]; ?></td>
				</tr>
				<tr>
					<td valign="top">Crude price reaction to events</td>
					<td valign="top"><?php echo $dataArray["SPOT_3"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["SPOT_3"]["update_date"]; ?></td>
				</tr>
				<tr>
					<td colspan="3" valign="top" class="no-border">&nbsp;</td>
				</tr>
				<tr>
					<td valign="top"><strong><a href="financial_markets.php">Financial Markets</a></strong></td>
					<td valign="top">&nbsp;</td>
					<td valign="top">&nbsp;</td>
				</tr>
				<tr>
					<td valign="top">Average daily open interest in crude oil futures</td>
					<td valign="top"><?php echo $dataArray["FIN_1"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["FIN_1"]["update_date"]; ?></td>
				</tr>
				<tr>
					<td valign="top">Futures positions by producers, merchants, processors, &amp; end users</td>
					<td valign="top"><?php echo $dataArray["FIN_2"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["FIN_2"]["update_date"]; ?></td>
				</tr>
				<tr>
					<td valign="top">Futures positions by money managers</td>
					<td valign="top"><?php echo $dataArray["FIN_3"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["FIN_3"]["update_date"]; ?></td>
				</tr>
				<tr>
					<td valign="top">Correlations between daily prices changes of crude &amp; other commodities</td>
					<td valign="top"><?php echo $dataArray["FIN_4"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["FIN_4"]["update_date"]; ?></td>
				</tr>
				<tr>
					<td valign="top"><p>Commodity index assets under management &amp; Dow Jones UBS price index</p></td>
					<td valign="top"><?php echo $dataArray["FIN_5"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["FIN_5"]["update_date"]; ?></td>
				</tr>
				<tr>
					<td valign="top">Composition of the Dow Jones UBS commodity index</td>
					<td valign="top"><?php echo $dataArray["FIN_6"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["FIN_6"]["update_date"]; ?></td>
				</tr>
				<tr>
					<td valign="top">Correlations between daily returns on crude oil &amp; financial investments</td>
					<td valign="top"><?php echo $dataArray["FIN_7"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["FIN_7"]["update_date"]; ?></td>
				</tr>
				<tr>
					<td colspan="3" valign="top" class="no-border">&nbsp;</td>
				</tr>
				<tr>
					<td valign="top"><strong><a href="demand-nonoecd.php">Demand: Non-OECD</a></strong></td>
					<td valign="top">&nbsp;</td>
					<td valign="top">&nbsp;</td>
				</tr>
				<tr>
					<td valign="top">Consumption &amp; GDP</td>
					<td valign="top"><?php echo $dataArray["NONOECD_1"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["NONOECD_1"]["update_date"]; ?></td>
				</tr>
				<tr>
					<td valign="top">World oil consumption, world GDP &amp; WTI crude oil prices</td>
					<td valign="top"><?php echo $dataArray["NONOECD_2"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["NONOECD_2"]["update_date"]; ?></td>
				</tr>
				<tr>
					<td valign="top">Projected non-OECD production, annual average</td>
					<td valign="top"><?php echo $dataArray["NONOECD_3"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["NONOECD_3"]["update_date"]; ?></td>
				</tr>
				<tr>
					<td colspan="3" valign="top" class="no-border">&nbsp;</td>
				</tr>
				<tr>
					<td valign="top"><strong><a href="demand-oecd.php">Demand: OECD</a></strong></td>
					<td valign="top">&nbsp;</td>
					<td valign="top">&nbsp;</td>
				</tr>
				<tr>
					<td valign="top">Crude oil consumption &amp; WTI crude oil price</td>
					<td valign="top"><?php echo $dataArray["OECD_1"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["OECD_1"]["update_date"]; ?></td>
				</tr>
				<tr>
					<td valign="top">World oil consumption, world GDP &amp; WTI crude oil prices</td>
					<td valign="top"><?php echo $dataArray["OECD_2"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["OECD_2"]["update_date"]; ?></td>
				</tr>
				</tbody>
			</table>
		</div>

		<div class="right" style="width:280px;">

			<?php /* / Today in Energy Widget Top3  */ ?>
			<?php
			$neic->sql = <<<SQL
SELECT * FROM (
  SELECT * FROM NEIC.TODAY_IN_ENERGY
  WHERE ACTIVE = 'yes' and tags like '%crude%'
  ORDER BY ID DESC
)
--WHERE ROWNUM <= 1
SQL;

			$query = $neic->get();

			if (sizeof($query) > 0) {
				$tietopic = 'crude';
				?>

				<span class="dblue_side_top blue_top ">
  <a href="/todayinenergy/"><img src="/global/images/sprites/tie_w_title.png" alt="TIE logo" /></a>
</span>
				<span class="white_box">
  <div id="eiatie">
		<?php include("todayinenergy/outreach/file_scrub_tie_side_sm_top3.php"); ?>
	</div>
</span>
				<br/>
				<?php
			}
			?>


			<?php /* / Today in Energy Widget Top3  */ ?>

			<span class="grey_side blue_top" style="width:240px;">
            <h4 class="no-border">Contact</h4>
            <p><strong>Jeff Barron</strong><br/>
							Office of Energy Production<br/>
							and Markets Analysis<br/>
							<a href="mailto:Jeffrey.Barron@eia.gov">Jeffrey.Barron@eia.gov</a></p>
           
          </span>
		</div>
		<div class="clear"></div>
		<?php /*  END Main Column  */ ?>
	</div>
	<?php /*  END Page/Body Content  */ ?>
	<?php include("global/includes/eia_footer.inc"); ?>
</div>
<?php /* END Outer Wrapper  */ ?>
</body>
</html>