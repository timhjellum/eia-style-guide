<?php $locale = 'petprod'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Energy & Financial Markets: What drives petroleum product prices - Energy Information Administration</title>
	<?php
	$doNotIncludeHighcharts = true;
	include("global/includes/eia_head_info.inc");
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
FROM $schemaName.V2_EFMI_UPDATE_DATE
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
<?php /*  BEGIN Outer Wrapper  */ ?>
<div id="outerX">
	<?php
	include('global/includes/eia_header.inc');
	include("includes/dashboard.inc");
	?>
	<div class="blue_top"><a class="right" style="cursor:pointer;">&nbsp;</a></div>
	<div class="clear"></div>
	<?php /*  BEGIN Page/Body Content  */ ?>
	<div class="pagecontent mr_temp4">
		<?php /*  BEGIN Main Column  */ ?>
		
		

		<div class="main_col left" style="margin-top:-20px;width:600px;">
			<h1>What drives petroleum product prices: Overview</h1>

			<p class="para">Although crude oil prices receive a lot of media attention, consumers purchase petroleum products refined from
				crude oil rather than the crude oil itself. Refiners produce many petroleum products from crude oil for a wide
				range of applications. Prices for some petroleum products, such as gasoline, are very visible to consumers,
				while others are much less so. This section focuses on the two most prominent groups of petroleum products&#8212;gasoline
				and distillate (or diesel fuel).
			</p>
			</p>
			<p class="para">Graphs are updated with new data on a monthly, quarterly, and annual basis according to the schedule
				below. </p>
			<style>
				.simpletable td {
					vertical-align: top;
				}

				.simpletable {
					margin-top: 16px;
				}

			</style>
			<span style="font-weight:normal;"><a href="<?php echo $rootPath; ?>/products/reports_presentations/product.pdf"
																					 class="ico_pdf">All graphs</a></span><br/>
			<table class="simpletable" cellspacing="0" cellpadding="0" border="0" width="100%">
				<thead>
				<tr>
					<th align="left">
						Graph update schedule by section
					</th>
					<th>Update frequency</th>
					<th>Last update</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td valign="top"><strong><a href="balance.php">Balance</a></strong></td>
					<td width="100" valign="top">&nbsp;</td>
					<td width="100" valign="top">&nbsp;</td>
				</tr>

				<td valign="top">Gasoline Inventories and gasoline 3rd minus 1st month futures contract</td>
				<td valign="top"><?php echo $dataArray["PROD_BALANCE_1"]["frequency"]; ?></td>
				<td valign="top"><?php echo $dataArray["PROD_BALANCE_1"]["update_date"]; ?></td>
				</tr>
				<tr>
					<td valign="top">Distillate Inventories and heating oil 3rd minus 1st month futures contract</td>
					<td valign="top"><?php echo $dataArray["PROD_BALANCE_2"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["PROD_BALANCE_2"]["update_date"]; ?></td>
				</tr>
				<tr>
					<td colspan="3" valign="top" class="no-border">&nbsp;</td>
				</tr>
				<tr>

					<td valign="top"><strong><a href="trade.php">Trade</a></strong></td>
					<td valign="top">&nbsp;</td>
					<td valign="top">&nbsp;</td>
				</tr>
				<tr>
					<td valign="top">U.S. total gasoline net imports</td>
					<td valign="top"><?php echo $dataArray["PROD_TRADE_1"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["PROD_TRADE_1"]["update_date"]; ?></td>
				</tr>
				<tr>
					<td valign="top">U.S. total gasoline net imports by PADD</td>
					<td valign="top"><?php echo $dataArray["PROD_TRADE_2"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["PROD_TRADE_2"]["update_date"]; ?></td>
				</tr>
				<tr>
					<td valign="top">U.S. distillate fuel net imports</td>
					<td valign="top"><?php echo $dataArray["PROD_TRADE_3"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["PROD_TRADE_3"]["update_date"]; ?></td>
				</tr>
				<tr>
					<td valign="top">U.S. distillate fuel net imports by PADD</td>
					<td valign="top"><?php echo $dataArray["PROD_TRADE_4"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["PROD_TRADE_4"]["update_date"]; ?></td>
				</tr>
				<tr>
					<td colspan="3" valign="top" class="no-border">&nbsp;</td>
				</tr>
				<tr>
					<td valign="top"><strong><a href="production.php">Production</a></strong></td>
					<td valign="top">&nbsp;</td>
					<td valign="top">&nbsp;</td>
				</tr>
				<tr>
					<td valign="top">Gasoline refinery output</td>
					<td valign="top"><?php echo $dataArray["PROD_OUT_1"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["PROD_OUT_1"]["update_date"]; ?></td>
				</tr>
				<tr>
					<td valign="top">Distillate refinery output</td>
					<td valign="top"><?php echo $dataArray["PROD_OUT_2"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["PROD_OUT_2"]["update_date"]; ?></td>
				</tr>
				<tr>
					<td valign="top">Refinery output</td>
					<td valign="top"><?php echo $dataArray["PROD_OUT_3"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["PROD_OUT_3"]["update_date"]; ?></td>
				</tr>
				<tr>
					<td valign="top">Production and futures prices</td>
					<td valign="top"><?php echo $dataArray["PROD_OUT_4"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["PROD_OUT_4"]["update_date"]; ?></td>
				</tr>
				<td colspan="3" valign="top" class="no-border">&nbsp;</td>
				</tr>
				<tr>
					<td valign="top"><strong><a href="prices.php">Spot Prices</a></strong></td>
					<td valign="top">&nbsp;</td>
					<td valign="top">&nbsp;</td>
				</tr>
				<tr>
					<td valign="top">Gasoline spot prices</td>
					<td valign="top"><?php echo $dataArray["PROD_SPOT_1"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["PROD_SPOT_1"]["update_date"]; ?></td>
				</tr>
				<tr>
					<td valign="top">Distillate spot prices</td>
					<td valign="top"><?php echo $dataArray["PROD_SPOT_2"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["PROD_SPOT_2"]["update_date"]; ?></td>
				</tr>
				<tr>
					<td valign="top">RBOB futures price and crack spread</td>
					<td valign="top"><?php echo $dataArray["PROD_SPOT_3"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["PROD_SPOT_3"]["update_date"]; ?></td>
				</tr>
				<tr>
					<td valign="top">Heating oil futures price and crack spread</td>
					<td valign="top"><?php echo $dataArray["PROD_SPOT_4"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["PROD_SPOT_4"]["update_date"]; ?></td>
				</tr>
				<tr>
					<td valign="top">RBOB - Brent Crack Spread Range</td>
					<td valign="top"><?php echo $dataArray["PROD_SPOT_5"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["PROD_SPOT_5"]["update_date"]; ?></td>
				</tr>
				<tr>
					<td valign="top">ULSD - Brent Crack Spread Ranges</td>
					<td valign="top"><?php echo $dataArray["PROD_SPOT_6"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["PROD_SPOT_6"]["update_date"]; ?></td>
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
					<td valign="top">Average daily open interest of petroleum product futures contracts</td>
					<td valign="top"><?php echo $dataArray["PROD_FIN_1"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["PROD_FIN_1"]["update_date"]; ?></td>
				</tr>
				<tr>
					<td valign="top">Average daily volume of petroleum product futures contracts</td>
					<td valign="top"><?php echo $dataArray["PROD_FIN_2"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["PROD_FIN_2"]["update_date"]; ?></td>
				</tr>
				<tr>
					<td valign="top">U.S. exchange-traded futures positions by money managers</td>
					<td valign="top"><?php echo $dataArray["PROD_FIN_3"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["PROD_FIN_3"]["update_date"]; ?></td>
				</tr>
				<tr>
					<td colspan="3" valign="top" class="no-border">&nbsp;</td>
				</tr>
				<tr>
					<td valign="top"><strong><a href="consumption.php">Consumption</a></strong></td>
					<td valign="top">&nbsp;</td>
					<td valign="top">&nbsp;</td>
				</tr>
				<tr>
					<td valign="top">Petroleum product consumption</td>
					<td valign="top"><?php echo $dataArray["PROD_CONS_1"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["PROD_CONS_1"]["update_date"]; ?></td>
				</tr>
				<tr>
					<td valign="top">U.S. consumption of gasoline and retail gasoline prices</td>
					<td valign="top"><?php echo $dataArray["PROD_CONS_2"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["PROD_CONS_2"]["update_date"]; ?></td>
				</tr>
				<tr>
					<td valign="top">U.S. consumption of distillate and retail heating oil prices</td>
					<td valign="top"><?php echo $dataArray["PROD_CONS_3"]["frequency"]; ?></td>
					<td valign="top"><?php echo $dataArray["PROD_CONS_3"]["update_date"]; ?></td>
				</tr */ ?>
				<tr>
					<td colspan="3" valign="top" class="no-border">&nbsp;</td>
				</tr>
				</tbody>
			</table>
			</cfoutput>

		</div>
		<div class="right" style="width:280px;"><br/>

			<?php
			$neic->sql = <<<SQL
SELECT * FROM (
  SELECT * FROM NEIC.TODAY_IN_ENERGY
  WHERE ACTIVE = 'yes' and tags like '%oil/petroleum%'
  ORDER BY ID DESC
)
--WHERE ROWNUM <= 1
SQL;

			$query = $neic->get();

			if (sizeof($query) > 0) {
				$tietopic = 'oil/petroleum';
				?>
				<span class="dblue_side_top blue_top ">
  <a href="/todayinenergy/"><img src="/global/images/sprites/tie_w_title.png"  alt="TIE logo" /></a>
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
            <p class="para">Petroleum and liquid fuels markets team<br/>
							<a href="mailto:eiainfopetroleum@eia.gov">eiainfopetroleum@eia.gov</a></p>
           
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