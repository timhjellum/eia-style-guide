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


			<?php $pageTitle = "Document Icons"?>
			<span class="base">
				<h1 class="uk-h1 tm-heading-fragment">Document Icons</h1>
<p class="uk-text-lead"></p>
				<p class="eia">The graphic images below are SVG, an image format for vector graphics. These images are not physical images that you link to like a typical .gif, .jpg or .png. Vvector-based icons look great in a high pixel density world and offers design control, and predictability. The examples below are the base examples with minimal customizing. They also have a nested span and label which is used for accessibility.</p>
			</span>
			<div class="l-row l-three-col-even">
				<div class="l-col">
					<ul class="ul">
						<li>
							<a class="eia ico pdf">
								PDF
							</a>
						</li>
						<li class="li">
							<p class="eia">Iconic Only Anchors</p>
						</li>
					</ul>
					<ul class="ul">
						<li>
							Lorem ipsum (
							<a class="eia ico pdf">
								<span>PDF</span>
							</a>
							) Lorem ipsum.
						</li>
						<li class="li">
							<p class="eia">Iconic Only Anchors</p>
						</li>
					</ul>
					<ul class="ul">
						<li>
							<a>
								Lorem ipsum
								<span class="eia ico pdf">
									<span>PDF</span>
								</span>
								.
							</a>
						</li>
						<li class="li">
							<p class="eia">Iconic Anchors</p>
						</li>
					</ul>
					<ul class="ul">
						<li>
							<a>
								Lorem ipsum
								<span class="eia ico pdf right">
									<span>PDF</span>
								</span>
								.
							</a>
						</li>
						<li class="li">
							<p class="eia">Iconic Anchors (Icon to the right of the icon description, e.g.: PDF.)</p>
						</li>
					</ul>
					<ul class="ul">
						<li>
							<a>
								Lorem ipsum
								<span class="eia ico pdf icon-only">
									<span>PDF</span>
								</span>
								.
							</a>
						</li>
						<li class="li">
							<p class="eia">Icon only (no description, e.g.: PDF.)</p>
						</li>
					</ul>
				</div>
				<div class="l-col">2</div>
				<div class="l-col">3</div>
			</div>


			Iconic Only Anchors
			<?php include('icons/anchors/index.inc') ?>
			Iconic Anchors">
			<?php include('icons/inline/index.inc') ?>
			Table Cell Icons">
			<?php include('icons/tables/index.inc') ?>
			Icon Only">
			<?php include('icons/stand-alone/index.inc') ?>
			Iconic List Items">
			<?php include('icons/list-items/index.inc') ?>

		</div>

	</div>
	<div class="l-col base sticky">
		<?php include('./includes/sub-nav.inc') ?>
	</div>
	</div>
	<!-- includes/footer.inc') ?>
</body>


</html>