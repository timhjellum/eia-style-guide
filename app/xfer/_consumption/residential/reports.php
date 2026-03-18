<?php
$pageTitle 		= '';
$locale 		= 'ap';
$sect = 'Consumption';
$l2id 			= 4; // for consumption, see NEIC.BS_L2_PAGES
$L2Title = "Residential Energy Consumption Survey (RECS)";

require_once 'global/includes/utils/utils.inc';
require_once 'global/includes/utils/Neic.inc';
$neic      = new NEIC();
?>
<!doctype html>
<?php
$globalTitle 	= 'U.S. Energy Information Administration (EIA)';

$pageTitle          = '';

?>

<head>


	<title><?=$pageTitle?> - <?=$globalTitle?></title>
	<meta property="og:title" content="<?=$pageTitle?> - <?=$globalTitle?>">
	<meta property="og:url" content="https://www.eia.gov<?=$_SERVER['PHP_SELF']?>">
	<meta name="url" content="https://www.eia.gov<?=$_SERVER['PHP_SELF']?>">
	<?php include('adaptive/global/head/includes/head.inc'); ?>
</head>

<body onLoad="clearForms()" onUnload="clearForms()">

	<?php include('adaptive/global/header/includes/header.inc'); ?>
	<?php include('../includes/sub-navigation.inc'); ?>
	<!-- consumption_recs.inc'); ?>

<?php $url['t'] = '1125'; ?><?php /* Classifies this reports page as RECS -- residential (id86) */ ?>
<?php include('global/includes/bookshelf_single.inc'); ?>




  <div class="l-row l-two-col-right-narrow">
    <div class="l-col">

<?php include('global/includes/bookshelf_side_search.inc'); ?>

<br />
<?php /*/ Today in Energy Widget Top3 */ ?>

<?php
  //hsh_sql:
  //associated with query name $tie_lookup
  $bindVariables = array();
  $neic->sql = " Select *
    from neic.today_in_energy
    Where active = :active
    AND tags like :tags
    ORDER BY ID DESC ";
  $bindVariables[":active"] = 'yes';
  $bindVariables[":tags"] = '%residential%';
  //print $neic->sql;
  //print_r($bindVariables);
  $tie_lookup = $neic->get($bindVariables);
  ?>
<?php if ( !empty($tie_lookup)) {?>
<?php $tietopic = 'Residential'; ?>
  <span class="dblue_side_top blue_top ">
  <a href="/todayinenergy/"><img src="/global/images/sprites/tie_w_title.png"/></a>
</span>
<span class="white_box">
  <div id="eiatie">
<?php include('todayinenergy/outreach/file_scrub_tie_side_sm_top3.php'); ?>
  </div>
</span>
<br />
<?php  } // end if ?>

<?php /*/ Today in Energy Widget Top3 */ ?>






    </div>
    <div class="l-col">

<?php include('global/includes/bookshelf_results_sub.inc'); ?>


    </div>
  </div>

<?php include('adaptive/global/footer/includes/footer.inc'); ?>
</div>

</body>
</html>