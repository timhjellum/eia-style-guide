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

	<link href="style-guide/styles/style-guide.css" type="text/css" media="screen, projection" rel="stylesheet">
	<link href="../global/styles/global.css" type="text/css" media="screen, projection" rel="stylesheet">
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/jquery/jquery.migrate.min.js"></script>
	<script src="vendor/jquery-ui/jquery-ui.min.js"></script>
	<script src="vendor/jquery-ui/jquery.ui.touch-punch.min.js"></script>
	<link href="../includes/favicon.ico" rel="shortcut icon">
	<link href="../includes/favicon.ico" rel="icon" type="image/x-icon">
	<link href="../includes/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">

</head>

<body>
	<!-- includes/header.inc') ?>
	<div class="l-row l-two-col-right">
		<div class="l-col">
			<div class="article">
				<span class="layouts">
					<h1 class="uk-h1 tm-heading-fragment">Icons</h1>
<p class="uk-text-lead"></p>
					<p class="eia">The graphic images below are SVG, an image format for vector graphics. These images are not physical images that you link to like a typical .gif, .jpg or .png. Vvector-based icons look great in a high pixel density world and offers design control, and predictability. The examples below are the base examples with minimal customizing. They also have a nested span and label which is used for accessibility.</p>
				</span>

				Logos (Dark Background)
				<div class="logos">
					<?php include('./includes/icons/logos/l.inc') ?>
					<?php include('./includes/icons/logos/lShrunk.inc') ?>
				</div>

				Logos (White Background)
				<div class="logos"></div>
				<?php include('./includes/icons/logos/lWhiteBackgroundCSS.inc') ?>
				<?php include('./includes/icons/logos/lWhiteBackgroundPNG.inc') ?>
			</div>

			BETA Logo (Dark Background)
			<div class="logos">
				<?php include('./includes/logos/beta-logo.inc') ?>
				<?php include('./includes/logos/beta-logoShrunk.inc') ?>
			</div>

		</div>
	</div>

	<div class="l-col base sticky">
		<?php include('./includes/side-content.inc') ?>
	</div>
	</div>
	<!-- includes/footer.inc') ?>
</body>


</html>