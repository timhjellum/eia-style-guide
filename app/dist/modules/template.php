<?php
require_once '../includes/variables.inc';
$globalTitle 	= 'U.S. Energy Information Administration (EIA)';
$section		= 'Layouts';
$subSection		= 'Home';
?>
<!doctype html>
<html>

<head>
	<?php include('../includes/head.inc'); ?>
</head>

<body>
	<?php include('../includes/header.inc'); ?>
	<main>
		<section id="top">
			<!-- start master layout-->
			<div class="grid-wrapper">
				<div class="grid-left">
					<!-- start left navigation-->
					<div></div>
					<!-- end master layout-->
				</div>
				<div class="grid-main">
					<!-- start main template area -->
				<!-- content here -->






				<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
				<!-- $$$$$$$$$$  Introduction $$$$$$$$$$ -->
				<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
				<section id="introduction">
					<div class="eia-container">
						<h1 class="uk-h1 tm-heading-fragment">Introduction</h1>
						<p class="uk-text-lead"></p>
					</div>
				</section>
				<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
				<!-- $$$$$$$$$$   All Closed  $$$$$$$$$$ -->
				<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
				<section id="allClosed">
					<div class="eia-container">

					</div>
				</section>
				<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
				<!-- $$$$$$$      All Open      $$$$$$$$ -->
				<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
				<section id="allOpen">
					<div class="eia-container">

					</div>
				</section>
				<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
				<!-- $$$$$$$    First Open    $$$$$$$$$$ -->
				<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
				<section id="firstOpen">
					<div class="eia-container">


					</div>
				</section>

				<!-- end content -->
<!-- end main template area -->
				</div>
				<div class="grid-right"></div>
			</div>
			<!-- end master layout-->
		</section>
		<?php include('../includes/footer.inc'); ?>
	</main>
</body>

</html>