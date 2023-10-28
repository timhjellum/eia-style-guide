<!doctype html>
<html>
<?php
$globalTitle 		= 'U.S. Energy Information Administration (EIA)';
$pageTitle = "Accessibility"
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
			<div class="section base">
				<h1 class="uk-h1 tm-heading-fragment">Accessibility</h1>
<p class="uk-text-lead"></p>
			</div>
			<h2>Links</h2>
			
				<?php include('accessibility/links.inc') ?>
			</div>
			<!-- 
			
				<?php include('accessibility/links-list.inc') ?>
			</div>
			<div class="section" id="Button">
				<h2>Forms</h2>
				<?php include('accessibility/button.inc') ?>
			</div>
			
				<h4>Form Containers</h4>
				<?php include('accessibility/fieldset.inc') ?>
			</div>
			
				<h4>Radiobuttons and Checkboxes</h4>
				<p class="eia">Radiobuttons and Checkboxes must be clearly organized into groups and generally aligned uniformly with a corresponding textual label.</p>
				<?php include('accessibility/checkbox-group.inc') ?>
			</div>
			
				<?php include('accessibility/stand-alone-checkbox.inc') ?>
			</div>
			
				<?php include('accessibility/branded-checkbox.inc') ?>
			</div>
			
				<?php include('accessibility/radiobutton-group.inc') ?>
			</div>
			
				<?php include('accessibility/label-and-input.inc') ?>
			</div>
			
				<?php include('accessibility/textarea.inc') ?>
			</div>
			
				<?php include('accessibility/branded-dropdown.inc') ?>
			</div>
			
				<h4>Validation</h4>
				<!-- includes/.inc') ?>
			</div>
			
				<?php include('accessibility/links.inc') ?>
			</div>
			
				<h4>Images</h4>
				<!-- includes/images/best-practices.inc') ?>
			</div>
			
				<h4>Tables</h4>
				<!-- includes/tables/accessibility.inc') ?>
			</div>
			-->
		</div>
		<div class="l-col layouts sticky">
			<?php include('./includes/sub-nav.inc') ?>
		</div>
	</div>
	<!-- includes/footer.inc') ?>
</body>


</html>