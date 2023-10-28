<!doctype html>
<html>
<?php
$globalTitle 		= 'U.S. Energy Information Administration (EIA)';
$pageTitle 			= "Tables";
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


	<style>
		#Default:active {
			color: red;
		}

		#Basic:active {
			color: red;
		}

		#FullWidth:active {
			color: red;
		}

		#Caption:active {
			color: red;
		}

		#HeadDouble:active {
			color: red;
		}

		#RowHead:active {
			color: red;
		}

		#RowTotal:active {
			color: red;
		}

		#RowBold:active {
			color: red;
		}

		#RowIndent:active {
			color: red;
		}

		#RowSectionHead:active {
			color: red;
		}

		#RowSectionDivider:active {
			color: red;
		}

		#ColumnHighlight:active {
			color: red;
		}

		#ColumnDivider:active {
			color: red;
		}

		#ColumnAlign:active {
			color: red;
		}

		#ColumnHide:active {
			color: red;
		}

		#Foot:active {
			color: red;
		}

		#Footnotes:active {
			color: red;
		}

		#Stacked:active {
			color: red;
		}

		#RowSelected:active {
			color: red;
		}

		#HolidaySchedule:active {
			color: red;
		}

		.tertiary-table-nav {
			display: block;
		}
	</style>


</head>

<body>
	<!-- includes/header.inc') ?>
	<div class="l-row l-two-col-right">
		<div class="l-col">
			<span class="themes">
				<h1 class="uk-h1 tm-heading-fragment">
					<!-- title here -->
				</h1>
<p class="uk-text-lead"></p>
			</span>
			<?php
				include('tables/basic.inc');
				include('tables/full-width.inc');
				include('tables/caption.inc');
				?>
			<h2>HEAD</h2>
			<p><code>&lt;head&gt;...&lt;/head&gt;</code></p>
			<?php
				include('tables/double-head.inc');
				include('tables/row-head.inc');
				?>
			<h2>BODY (Rows)</h2>
			<p><code>&lt;body&gt;...&lt;/body&gt;</code></p>
			<?php
				include('tables/row-total.inc');
				include('tables/row-bold.inc');
				include('tables/row-indent.inc');
				include('tables/row-section-head.inc');
				include('tables/row-Section-divider.inc');
				?>
			<h2>BODY (Columns)</h2>
			<p><code>&lt;tbody&gt;...&lt;/tbody&gt;</code></p>
			<?php 
				include('tables/column-highlight.inc');
				include('tables/column-divider.inc');
				include('tables/column-align.inc');
				include('tables/column-hide.inc');
				?>
			<h2>FOOT</h2>
			<p><code>&lt;foot&gt;...&lt;/foot&gt;</code></p>
			<?php
				include('tables/foot.inc');
				include('tables/footnotes.inc');
				?>
			<h2>multiple tables</h2>
			<?php 
				include('tables/stacked.inc');
				?>
			<h2>custom tables</h2>
			<?php 
				include('tables/row-selected.inc');
				include('tables/holiday-schedule.inc');
				?>
		</div>
		<div>
			<?php include('./includes/sub-nav.inc') ?>
		</div>
	</div>
	