<!doctype html>
<html>
<?php
$globalTitle 		= 'U.S. Energy Information Administration (EIA)';
$pageTitle          = 'Modals';
$pageTitle          = 'Modals';
$subPageTitle 		= 'Enlarge Charts';
?>

<head>
	<title>
		<!-- title here --> -
		<?=$subPageTitle?>
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
			<span class="modules">
				<h1 class="uk-h1 tm-heading-fragment">
					<!-- title here --> -
					<?=$subPageTitle?>
				</h1>
<p class="uk-text-lead"></p>

				<p>Fancybox is a tool that offers a nice and elegant way to add zooming functionality for images, html content and multi-media on your webpages. It is built on the top of the popular JavaScript framework jQuery and is both easy to implement and a snap to customize.</p>

				<?php include('modals/enlarge-image.inc') ?>
				<?php include('modals/enlarge-image-caption.inc') ?>
				<?php include('modals/inline-content.inc') ?>
				<?php include('modals/enlarge-image-icon.inc') ?>
				<?php include('modals/enlarge-image-caption-icon.inc') ?>
				<?php include('modals/full-width.inc') ?>
			</span>
		</div>
		<div>
			<?php include('./includes/sub-nav.inc') ?>
		</div>
	</div>
	