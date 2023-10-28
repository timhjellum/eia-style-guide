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
				<!--
				import Top from "./Placeholders/Top.js"
				import ContainerLayout from "./Containers/ContainerLayout"

				LinkLists -->

				<?php $pageTitle = ""; ?>
				<span class="states">
					<h1 class="uk-h1 tm-heading-fragment">States Link Lists</h1>
<p class="uk-text-lead"></p>
					<p class="eia">Some editible include files contain editible variables which write the values to corresponding HTML elements. Notice the fourth and fifth variables have been left blank.</p>



					<?php include('./includes/top.inc') ?>

					<p class="eia">The list item will be hidden:</p>



					<?php include('./includes/top.inc') ?>
					<p class="eia">Here's how the link list would display on the page with the fourth and fifth list items hidden from the user.</p>


					<div class="l-row l-full-width-col">
						<div class="l-col">
							<div class="secondary hide-mt">
								<ul>
									<li class="head">
										<h2>Survey Forms, Changes &amp; Announcements</h2>
									</li>
									<li>
										<a title="Row Number One">
											Row Number One
										</a>
									</li>
									<li>
										<a title="Row Number Two">
											Row Number Two
										</a>
									</li>
									<li>
										<a title="Row Number Three">
											Row Number Three
										</a>
									</li>
									<li>
										<a title="Row Number Six">
											Row Number Six
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>


					<?php include('./includes/top.inc') ?>

					<p class="eia">Some editible include files contain editible variables which write the values to corresponding HTML elements. Notice the fourth and fifth variables have been left blank.</p>



					<?php include('./includes/top.inc') ?>

					<p class="eia">The list item will be hidden:</p>



					<?php include('./includes/top.inc') ?>

					<p class="eia">Here's how the link list would display on the page with the fourth and fifth list items hidden from the user.</p>



					<?php include('./includes/top.inc') ?>
				</span>

			</div>
		</div>
		<div class="l-col states sticky">
			<?php include('./includes/sub-nav.inc') ?>
		</div>
	</div>
	<!-- includes/footer.inc') ?>
</body>


</html>