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
					<div class="wrapper">
						<h1 class="header"><?=$section?></h1>
						<p class="para"></p>
					</div>
					<!-- end top template -->
					<!-- content here -->



					<!-- end content -->
					<!-- start bottom template -->
				</div>
			</div>
			<div class="grid-right"></div>
			<?php include('../includes/footer.inc'); ?>
			</div>
</body>

</html>