<!doctype html>
<html>
<?php
$globalTitle 		= 'U.S. Energy Information Administration (EIA)';
$pageTitle          = 'Style Guide';
?>

<head>
	<title>
		<!-- title here --> -
		<?=$globalTitle?>
	</title>
	<meta property="og:title" content="<!-- title here --> - <?=$globalTitle?>">


	<link href="../style-guide/styles/style-guide.css" type="text/css" media="screen, projection" rel="stylesheet">
	<link href="../global/styles/global.css" type="text/css" media="screen, projection" rel="stylesheet">

	<script src="../vendor/jquery/jquery.min.js"></script>
	<script src="../vendor/jquery/jquery.migrate.min.js"></script>
	<script src="../vendor/jquery-ui/jquery-ui.min.js"></script>
	<script src="../vendor/jquery-ui/jquery.ui.touch-punch.min.js"></script>
	<link href="../includes/favicon.ico" rel="shortcut icon">
	<link href="../includes/favicon.ico" rel="icon" type="image/x-icon">
	<link href="../includes/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">


</head>

<body>
	<!-- includes/header.inc') ?>
	<div class="l-row l-two-col-right">
		<div class="l-col">
			<span class="base">

				<h1 class="uk-h1 tm-heading-fragment">Icons</h1>
<p class="uk-text-lead"></p>
				<div class="primary">
					<div class="accordion first-open">
						<?php
include('icons/anchors/index.inc');
include('icons/inline/index.inc');
include('icons/spans/index.inc');
include('icons/stand-alone/index.inc');
include('icons/list-items/index.inc');
include('icons/this-week.inc');
include('icons/open-data.inc');
include('icons/informative/index.inc');
include('icons/grid/index.inc');
include('icons/control.inc');
include('icons/general.inc');
include('icons/analysis-projections.inc');
include('icons/navigational.inc');
include('icons/surveys.inc');
include('icons/social/index.inc');
include('logos/index.inc');					
?>

					</div>

				</div>


				<!-- 
						<div class="icon-container">
							<span class="eia ico close-menu">
								<span>CLOSE MENU</span>
							</span>
						</div>
						<div class="icon-container">
							<span class="eia ico search-submit">
								<span>SUBMIT</span>
							</span>
						</div>
						<div class="icon-container">
							<span class="eia ico analysis">
								<span>analysis</span>
							</span>
						</div>
						<div class="icon-container">
							<span class="eia ico cancel">
								<span>cancel</span>
							</span>
						</div>
						<div class="icon-container">
							<span class="eia ico column-chart">
								<span>column-chart</span>
							</span>
						</div>
						<div class="icon-container">
							<span class="eia ico compare">
								<span>compare</span>
							</span>
						</div>
						<div class="icon-container">
							<span class="eia ico d-arrow">
								<span>DOWN ARROW</span>
							</span>
						</div>
						<div class="icon-container">
							<span class="eia ico download">
								<span>download</span>
							</span>
						</div>
						<div class="icon-container">
							<span class="eia ico edit">
								<span>edit</span>
							</span>
						</div>
						<div class="icon-container">
							<span class="eia ico filter">
								<span>filter</span>
							</span>
						</div>
						<div class="icon-container">
							<span class="eia ico grab-dot">
								<span>grab dotS</span>
							</span>
						</div>
						 -->


			</span>
		</div>
		<div class="l-col base sticky">
			<?php include('./includes/sub-nav.inc') ?>
		</div>
	</div>
	<!-- includes/footer.inc') ?>
</body>


</html>