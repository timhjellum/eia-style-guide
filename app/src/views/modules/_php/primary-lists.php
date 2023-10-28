<!doctype html>
<html>
<?php
$globalTitle 		= 'U.S. Energy Information Administration (EIA)';
$pageTitle          = 'Style Guide';
$pageTitle 			= "List Theme";
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

			<?php include('./includes/themes/primary-lists.inc') ?>

			<span class="themes">
				<h1 class="uk-h1 tm-heading-fragment">List Theme</h1>
<p class="uk-text-lead"></p>
			</span>


			<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Bulleted List</h2>


			<?php include('lists/bulleted.inc') ?>
			<!-- includes/top.inc') ?>

			<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">List Spacer with Nested Bulleted List</h2>


			<ul>
				<li>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				</li>
				<li class="list-spacer">
					<ul class="bullet">
						<li>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						</li>
						<li>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						</li>
					</ul>
				</li>
				<li>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				</li>
			</ul>
			<!-- includes/top.inc') ?>

			<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">List Spacer with Multiple Nested Lists</h2>

			<ul>
				<li>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit:
				</li>
				<li class="list-spacer">
					<ul>
						<li class="head">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						</li>
						<li>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						</li>
					</ul>
					<ul>
						<li class="head">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						</li>
						<li>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						</li>
					</ul>
					<ul>
						<li class="head">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						</li>
						<li>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						</li>
					</ul>
				</li>
				<li>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				</li>
			</ul>


			<!-- includes/top.inc') ?>

			<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Sub List with Multiple Nested Bulleted List</h2>

			<ul>
				<li class="head">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit:
				</li>
				<li class="sub-list">
					<?php include('lists/unordered -->
				</li>
				<li>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit
				</li>
			</ul>
			<!-- includes/top.inc') ?>

			<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Sub List with Nested Bulleted List</h2>

			<ul>
				<li>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit:
				</li>
				<li class="sub-list">
					<ul class="bullet">
						<li>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						</li>
						<li>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						</li>
					</ul>
				</li>
				<li>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				</li>
			</ul>
			<!-- includes/top.inc') ?>

			<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">List Highlight</h2>
			<?php include('lists/highlight -->

			<p>This list should only be used in Secondarys. Do not nest this list.</p>

			<!-- includes/top.inc') ?>

			<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Third-Level Unordered-List</h2>

			<ul>
				<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
				<li class="list-item">
					<ul>
						<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
						<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
					</ul>
					<ul>
						<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
						<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
					</ul>
				</li>
			</ul>



			<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Numbered List Items</h2>

			<?php include('lists/ordered -->


			<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Default List (no styles applied)</h2>

			<ul>
				<li>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				</li>
				<li>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				</li>
				<li>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				</li>
				<li>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				</li>
				<li>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				</li>
			</ul>
			<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Forced Bulleted List</h2>
			<?php include('lists/bulleted.inc') ?>


			<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Unordered Bulleted-List</h2>

			<ul>
				<li class="list-item">
					<ul>
						<li>
							<a class="/">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
						</li>
						<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
						<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
						<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
					</ul>
					<ul>
						<li>
							<a class="/">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
						</li>
						<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
						<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
						<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
					</ul>
				</li>
			</ul>



			<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Second-Level Unordered-List</h2>

			<ul>
				<li class="list-item">
					<ul>
						<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
						<li class="list-item">
							<ul>
								<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
								<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
							</ul>
							<ul>
								<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
								<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>


		</div>
		<div>
			<?php include('./includes/sub-nav.inc') ?>
		</div>
	</div>
	<!-- includes/footer.inc') ?>
</body>


</html>