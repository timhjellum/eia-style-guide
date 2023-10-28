<!doctype html>
<html>
<?php
$globalTitle 		= 'U.S. Energy Information Administration (EIA)';
$pageTitle          = 'Style Guide';
$pageTitle = "Color Palette"
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

	<?php
function path() {
	if($_SERVER['SERVER_NAME'] == 'localhost') {
        return '/';
    }
    return '/style-guide';
}
?>
</head>

<body>
	<!-- includes/header.inc') ?>
	<div class="l-row l-two-col-right">
		<div class="l-col">
			<div class="article base">
				<h1 class="uk-h1 tm-heading-fragment">Color Palette</h1>
<p class="uk-text-lead"></p>



				<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
				<!-- $$$$$$$$$$     colors    $$$$$$$$$$ -->
				<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
				<h2>Default Colors</h2>
				<div class="color-section">
					<!-- $$$$$$$$$$$$  darker   $$$$$$$$$$$$ -->
					<div class="swatch-wrapper">
						<div class="eia-dark-blue-60 swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-dark-blue-45 swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-dark-blue-30 swatch"></div>
					</div>
					<!-- $$$$$$$$$$$$  neutral  $$$$$$$$$$$$ -->
					<div class="swatch-wrapper">
						<div class="eia-dark-blue-15 swatch"></div>
					</div>
					<div class="swatch-wrapper primary-color">
						<div class="eia-blue swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-light-blue-15 swatch"></div>
					</div>
					<!-- $$$$$$$$$$$$  lighter  $$$$$$$$$$$$ -->
					<div class="swatch-wrapper primary-color">
						<div class="eia-light-blue-30 swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-light-blue-45 swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-light-blue-60 swatch"></div>
					</div>
				</div>
				<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
				<!-- $$$$$$$$$$      red      $$$$$$$$$$ -->
				<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
				<div class="color-section">
					<!-- $$$$$$$$$$$$  darker   $$$$$$$$$$$$ -->
					<div class="swatch-wrapper">
						<div class="eia-dark-red-60 swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-dark-red-45 swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-dark-red-30 swatch"></div>
					</div>
					<!-- $$$$$$$$$$$$  neutral  $$$$$$$$$$$$ -->
					<div class="swatch-wrapper">
						<div class="eia-dark-red-15 swatch"></div>
					</div>
					<div class="swatch-wrapper primary-color">
						<div class="eia-red swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-light-red-15 swatch"></div>
					</div>
					<!-- $$$$$$$$$$$$  lighter  $$$$$$$$$$$$ -->
					<div class="swatch-wrapper">
						<div class="eia-light-red-30 swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-light-red-45 swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-light-red-60 swatch"></div>
					</div>
				</div>
				<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
				<!-- $$$$$$$$$$     green     $$$$$$$$$$ -->
				<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
				<div class="color-section">
					<!-- $$$$$$$$$$$$  darker   $$$$$$$$$$$$ -->
					<div class="swatch-wrapper">
						<div class="eia-dark-green-60 swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-dark-green-45 swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-dark-green-30 swatch"></div>
					</div>
					<!-- $$$$$$$$$$$$  neutral  $$$$$$$$$$$$ -->
					<div class="swatch-wrapper">
						<div class="eia-dark-green-15 swatch"></div>
					</div>
					<div class="swatch-wrapper primary-color">
						<div class="eia-green swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-light-green-15 swatch"></div>
					</div>
					<!-- $$$$$$$$$$$$  lighter  $$$$$$$$$$$$ -->
					<div class="swatch-wrapper primary-color">
						<div class="eia-light-green-30 swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-light-green-45 swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-light-green-60 swatch"></div>
					</div>
				</div>
				<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
				<!-- $$$$$$$$$$     yellow    $$$$$$$$$$ -->
				<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
				<div class="color-section">
					<!-- $$$$$$$$$$$$  darker   $$$$$$$$$$$$ -->
					<div class="swatch-wrapper">
						<div class="eia-dark-yellow-60 swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-dark-yellow-45 swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-dark-yellow-30 swatch"></div>
					</div>
					<!-- $$$$$$$$$$$$  neutral  $$$$$$$$$$$$ -->
					<div class="swatch-wrapper">
						<div class="eia-dark-yellow-15 swatch"></div>
					</div>
					<div class="swatch-wrapper primary-color">
						<div class="eia-yellow swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-light-yellow-15 swatch"></div>
					</div>
					<!-- $$$$$$$$$$$$  lighter  $$$$$$$$$$$$ -->
					<div class="swatch-wrapper">
						<div class="eia-light-yellow-30 swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-light-yellow-45 swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-light-yellow-60 swatch"></div>
					</div>
				</div>
				<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
				<!-- $$$$$$$$$$     orange    $$$$$$$$$$ -->
				<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
				<div class="color-section">
					<!-- $$$$$$$$$$$$  darker   $$$$$$$$$$$$ -->
					<div class="swatch-wrapper">
						<div class="eia-dark-orange-60 swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-dark-orange-45 swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-dark-orange-30 swatch"></div>
					</div>
					<!-- $$$$$$$$$$$$  neutral  $$$$$$$$$$$$ -->
					<div class="swatch-wrapper">
						<div class="eia-dark-orange-15 swatch"></div>
					</div>
					<div class="swatch-wrapper primary-color">
						<div class="eia-orange swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-light-orange-15 swatch"></div>
					</div>
					<!-- $$$$$$$$$$$$  lighter  $$$$$$$$$$$$ -->
					<div class="swatch-wrapper">
						<div class="eia-light-orange-30 swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-light-orange-45 swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-light-orange-60 swatch"></div>
					</div>
				</div>
				<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
				<!-- $$$$$$$$$$     brown    $$$$$$$$$$ -->
				<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
				<div class="color-section">
					<!-- $$$$$$$$$$$$  darker   $$$$$$$$$$$$ -->
					<div class="swatch-wrapper">
						<div class="eia-dark-brown-60 swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-dark-brown-45 swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-dark-brown-30 swatch"></div>
					</div>
					<!-- $$$$$$$$$$$$  neutral  $$$$$$$$$$$$ -->
					<div class="swatch-wrapper">
						<div class="eia-dark-brown-15 swatch"></div>
					</div>
					<div class="swatch-wrapper primary-color">
						<div class="eia-brown swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-light-brown-15 swatch"></div>
					</div>
					<!-- $$$$$$$$$$$$  lighter  $$$$$$$$$$$$ -->
					<div class="swatch-wrapper">
						<div class="eia-light-brown-30 swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-light-brown-45 swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-light-brown-60 swatch"></div>
					</div>
				</div>
				<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
				<!-- $$$$$$$$$$     purple    $$$$$$$$$$ -->
				<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
				<div class="color-section">
					<!-- $$$$$$$$$$$$  darker   $$$$$$$$$$$$ -->
					<div class="swatch-wrapper">
						<div class="eia-dark-purple-60 swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-dark-purple-45 swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-dark-purple-30 swatch"></div>
					</div>
					<!-- $$$$$$$$$$$$  neutral  $$$$$$$$$$$$ -->
					<div class="swatch-wrapper">
						<div class="eia-dark-purple-15 swatch"></div>
					</div>
					<div class="swatch-wrapper primary-color">
						<div class="eia-purple swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-light-purple-15 swatch"></div>
					</div>
					<!-- $$$$$$$$$$$$  lighter  $$$$$$$$$$$$ -->
					<div class="swatch-wrapper">
						<div class="eia-light-purple-30 swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-light-purple-45 swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-light-purple-60 swatch"></div>
					</div>
				</div>
				<h2>Greyscales</h2>
				<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
				<!-- $$$$$$$$$$   greyscale   $$$$$$$$$$ -->
				<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
				<div class="greyscale-section">
					<div class="swatch-wrapper">
						<div class="eia-black swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-black-90 swatch"></div>
					</div>
					<div class="swatch-wrapper primary-color">
						<div class="eia-black-80 swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-black-70 swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-black-60 swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-black-50 swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-black-40 swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-black-30 swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-black-20 swatch"></div>
					</div>
					<div class="swatch-wrapper">
						<div class="eia-black-10 swatch"></div>
					</div>
					<div class="swatch-wrapper white">
						<div class="eia-white swatch"></div>
					</div>
				</div>
				<!--
<h2>Custom or Legacy</h2>
<h3>Muted</h3>



<div class="muted-section">
	<div class="swatch-wrapper">
		<div class="eia-muted-blue swatch"></div>
	</div>
	<div class="swatch-wrapper">
		<div class="eia-muted-green swatch"></div>
	</div>
	<div class="swatch-wrapper">
		<div class="eia-muted-brown swatch"></div>
	</div>
</div>
<h3>Muted</h3>



<div class="logo-section">
	<div class="swatch-wrapper">
		<div class="eia-yellow swatch"></div>
	</div>
	<div class="swatch-wrapper">
		<div class="eia-yellow-mono swatch"></div>
	</div>
	<div class="swatch-wrapper">
		<div class="eia-blue-mono swatch"></div>
	</div>
</div>
<h2>Misc</h2>



<div class="misc-section">
	<div class="swatch-wrapper">
		<div class="eia-greyish-blue swatch"></div>
	</div>
	<div class="swatch-wrapper">
		<div class="eia-darker-blue swatch"></div>
	</div>
	<div class="swatch-wrapper">
		<div class="port-blue swatch"></div>
	</div>
	<div class="swatch-wrapper">
		<div class="eia-blue-module-background swatch"></div>
	</div>
	<div class="swatch-wrapper">
		<div class="alert-background swatch"></div>
	</div>
	<div class="swatch-wrapper">
		<div class="eia-date-light swatch"></div>
	</div>
	<div class="swatch-wrapper">
		<div class="gradient-background swatch"></div>
	</div>
	<div class="swatch-wrapper">
		<div class="eia-divider swatch"></div>
	</div>
	<div class="swatch-wrapper">
		<div class="button_green swatch"></div>
	</div>
</div>
<div class="misc-section">
	<div class="label-wrapper">
		@eia-greyish-blue
	</div>
	<div class="label-wrapper">
		@eia-darker-blue
	</div>
	<div class="label-wrapper">
		@port-blue swatch
	</div>
	<div class="label-wrapper">
		@eia-blue-module-background
	</div>
	<div class="label-wrapper">
		@alert-background
	</div>
	<div class="label-wrapper">
		@eia-date-light
	</div>
	<div class="label-wrapper">
		@gradient-background
	</div>
	<div class="label-wrapper">
		@eia-divider
	</div>
	<div class="label-wrapper">
		@button_green
	</div>
</div>
<div class="misc-section">
	<div class="swatch-wrapper">
		<div class="slider_green swatch"></div>
	</div>
	<div class="swatch-wrapper">
		<div class="eia-light-blue swatch"></div>
	</div>
	<div class="swatch-wrapper">
		<div class="eia-dark-green swatch"></div>
	</div>
	<div class="swatch-wrapper">
		<div class="eia-dark-red swatch"></div>
	</div>
	<div class="swatch-wrapper">
		<div class="eia-light-red swatch"></div>
	</div>
	<div class="swatch-wrapper">
		<div class="eia-dark-yellow swatch"></div>
	</div>
	<div class="swatch-wrapper">
		<div class="eia-brown swatch"></div>
	</div>
	<div class="swatch-wrapper">
		<div class="eia-dark-orange swatch"></div>
	</div>
	<div class="swatch-wrapper">
		<div class="eia-light-purple swatch"></div>
	</div>
</div>
<div class="misc-section">
	<div class="label-wrapper">
		@slider_green
	</div>
	<div class="label-wrapper">
		@eia-light-blue
	</div>
	<div class="label-wrapper">
		@eia-dark-green
	</div>
	<div class="label-wrapper">
		@eia-dark-red
	</div>
	<div class="label-wrapper">
		@eia-light-red
	</div>
	<div class="label-wrapper">
		@eia-dark-yellow
	</div>
	<div class="label-wrapper">
		@eia-brown
	</div>
	<div class="label-wrapper">
		@eia-dark-orange
	</div>
	<div class="label-wrapper">
		@eia-light-purple
	</div>
</div>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
-->
			</div>
		</div>
		<div class="l-col base sticky">
			<?php include('./includes/sub-nav.inc') ?>
		</div>
	</div>
	