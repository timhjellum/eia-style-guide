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
				import Legend from "./Placeholders/Legend"
				import Placeholder from "./Placeholders/Placeholder"
				import ContainerWrapper from "./Containers/ContainerWrapper"
				import ContainerLayout from "./Containers/ContainerLayout"

	import VisualizationsExample from "./States/VisualizationsExample"
				-->
				<span class="states">
					<h1 class="uk-h1 tm-heading-fragment">Toggle or Show/Hide Elements</h1>
<p class="uk-text-lead"></p>

					<h2>Expand/Collapse Toggle</h2>

					<p class="eia">The Expand/Collapse Toggle functions like the accordion, can be styled like the accordion, and can replace the accordion, but is not the accordion which is used on various pages. So while this toggle can be used as an accordion, it was created as a expand-collapse toggle module.</p>
					<!-- Placeholder -->
					<p class="eia">The Expand/Collapse Toggle is not styled so you can apply any style you want. Additionally, the script can be activate by using any element that you can attach a click function to (anchor, button, title bar).</p>
					<h3>Expand/Collapse Accordion</h3>
					<!-- Placeholder -->
					<?php include('./includes/top.inc') ?>
					<h3>Vertical Toggle</h3>
					<!-- Legend -->
					<span class="_container-inside">

						<div class="l-row l-full-width-col">
							<div class="l-col">
								<div class="expand-collapse-toggle-vertical-slide">
									<a class="toggle expand-collapse">
										<span class="active-text">Hide</span>
										<span class="inactive-text">Show</span>
									</a>
									<div class="expand-collapse-content">
										<div class="primary">
											<span class="hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</span>
										</div>
									</div>
								</div>
							</div>
						</div>

					</span>
					<!-- Placeholder -->
					<?php include('./includes/top.inc') ?>
					<h3>Expand/Collapse Content (button below content)</h3>
					<!-- Legend -->
					<span class="_container-inside">

						<div class="l-row header l-full-width-col">
							<div class="l-col">
								<div class="expand-collapse-content-above-toggle-vertical-slide"></div>
							</div>
						</div>

					</span>
					<!-- Placeholder -->
					<?php include('./includes/top.inc') ?>
					<h3>Show/Hide Toggle</h3>
					<p class="eia">The Show/Hide Toggle is not styled so you can apply any style you want. Additionally, the script can be activate by using any element that you can attach a click function to (anchor, button, title bar).</p>
					<!-- Placeholder -->
					<!-- Legend -->
					<span class="_container-inside">

						<div class="l-row l-full-width-col">
							<div class="l-col">
								<div class="show-hide-toggle">
									<a class="toggle show-hide">
										<span class="active-text">Hide</span>
										<span class="inactive-text">Show</span>
									</a>
									<div class="show-hide-content">
										<div class="primary-fixed">
											<span class="hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.</span>
										</div>
									</div>
								</div>
							</div>
						</div>

					</span>
					<!-- Placeholder -->
					<?php include('./includes/top.inc') ?>
					<h2>Show/Hide Toggle (two elements)</h2>
					<p class="eia">The Show/Hide Toggle is not styled so you can apply any style you want. Additionally, the script can be activate by using any element that you can attach a click function to (anchor, button, title bar).</p>
					<!-- Placeholder -->
					<!-- Legend -->
					<span class="_container-inside">

						<div class="l-row l-two-col-right-wide">
							<div class="l-col">
								<a class="policy toggle show-hide">
									<span class="active-text">Hide our feedback policy.</span>
									<span class="inactive-text">Show our feedback policy.</span>
								</a>
							</div>
							<div class="l-col">
								<div class="show-hide-content" style="display: block">
									<p>Layer 1</p>
								</div>
								<div class="show-hide-content" style="display: none">
									<p>Layer 2</p>
								</div>
							</div>
						</div>

					</span>
					<!-- Placeholder -->
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