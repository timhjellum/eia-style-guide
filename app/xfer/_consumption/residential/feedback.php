<!doctype html>
<?php
$globalTitle 	= 'U.S. Energy Information Administration (EIA)';
$pageTitle 		= "Residential Energy Consumption Survey (RECS) - Energy Information Administration";
$locale 		= 'overview';
$L2Title 		= "Residential Energy Consumption Survey (RECS)";
$page['year'] 	= 'home';
?>

<head>
	<title>
		<?=$pageTitle?> -
		<?=$globalTitle?>
	</title>
	<meta property="og:title" content="<?=$pageTitle?> - <?=$globalTitle?>">
	<meta property="og:url" content="https://www.eia.gov<?=$_SERVER['PHP_SELF']?>">
	<meta name="url" content="https://www.eia.gov<?=$_SERVER['PHP_SELF']?>">
	<?php include('adaptive/global/head/includes/head.inc'); ?>
	<title>
		<?=$pageTitle?> -
		<?=$globalTitle?>
	</title>
	<meta property="og:title" content="<?=$pageTitle?> - <?=$globalTitle?>">
	<meta property="og:url" content="https://www.eia.gov<?=$_SERVER['PHP_SELF']?>">
	<meta name="url" content="https://www.eia.gov<?=$_SERVER['PHP_SELF']?>">
</head>

<body>

	<!--  Outer Wrapper 
		<?php include('adaptive/global/header/includes/header.inc') ; ?>
		<?php include ('consumption/residential/includes/subnav_consumption_recs.inc') ; ?>
 -->
	<div class="l-row l-two-col-right-narrow">
		<div class="l-col">
			<!--  
				<?php include ('consumption/includes/side_nav_residential.inc') ; ?>
				-->
		</div>
		<div class="l-col">
			<div class="article">
				<h1>Feedback</h1>

				<!--  

				<?php if( !$formSubmitted ) { ?>
				<form name="commenter" id="commenter" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					<table cellpadding="0" cellspacing="0">
						<tr>

							<td style="padding-left: 15px" class="replytxt">
								<h2>Provide comments, suggestions, requests, kudos, and gripes.</h2>

								<TEXTAREA style="width:px;min-height:150px;height:150px;" name="q7_comment" required="required"></TEXTAREA>
							</td>
						</tr>
						<tr>
							<td class="replytxt"><strong>Name</strong><br /><input type="text" name="name" required="required" size="38"></td>

						</tr>
						<tr>
							<td class="replytxt"><strong>Email</strong><br /><input type="email" ID="email" name="email" required="required" size="38" message="Email required"></td>
						</tr>

						<tr>
							<td>
								<p style="padding-left:16px;padding-bottom:16px;">
									<input id="submit1" type="submit" value="Submit" name="submit1">
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input id="reset1" type="reset" value="Clear" name="reset1"></p>
							</td>
						</tr>
					</table>

				<?php
            if (isset($_SERVER['HTTP_REFERER'])) {
              $temail   = 'ifeedback@eia.gov';
              $recpName = 'EIA';

              $woffice = str_replace('/', '', $_SERVER['HTTP_REFERER']);
              switch ($woffice) {
                case 'biofuels':
                  $woffice = 'alternate';
                  break;

                case 'ipdbproject':
                  $woffice = 'intlstats';
                  break;

                case 'dnav':
                  $woffice = 'navigators';
                  break;
              }
            }
            ?>
				</form>
-->

			</div>
		</div>
		<!-- <?php include('adaptive/global/footer/includes/footer.inc'); ?> -->
	</div>
</body>

</html>