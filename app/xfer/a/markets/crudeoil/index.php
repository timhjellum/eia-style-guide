<?php $locale = 'crudeoil'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Energy & Financial Markets: What Drives Crude Oil Prices? - Energy Information Administration</title>
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
	<div class="clear"></div>
	<?php /* BEGIN Page/Body Content  */ ?>
	<div class="pagecontent mr_temp4">
		<?php /* BEGIN Main Column  */ ?>
		

		<div class="main_col left" style="margin-top:-20px;width:600px;">
			<h1>What drives crude oil prices: Overview</h1>
			<p class="para">Understanding what moves crude oil prices is vital for  informed decision-making across government, industry, and the public. Crude oil  prices are shaped by a dynamic interplay of global forces, and have impacts on  energy security, the economy, and consumers. </p>
<p class="para">Here, we present an <strong>analysis of the seven key factors  that influence crude oil markets</strong>, including both physical market dynamics  and influences from trading and finance, and examine their connection to crude  oil prices. </p>
<p class="para">This resource serves as a guide for those seeking a deeper  understanding of crude markets and the major drivers of crude prices.</p>
            <p class="para"><strong>Key factors influencing crude oil prices: </strong></p>
            <ul>
              <li>Spot prices </li>
              <li>Supply from non-OPEC countries </li>
              <li>Supply from OPEC countries</li>
              <li>The supply demand balance: inventories</li>
              <li>Financial markets</li>
              <li>Demand in non-OECD countries</li>
              <li>Demand in OECD countries</li>
            </ul>
            <p class="para"><br/>
              
              
            </p>
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