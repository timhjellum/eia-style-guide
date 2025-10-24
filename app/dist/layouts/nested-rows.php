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
					<p class="eia">When a column layout is nested within another column layout, the nested colums have no right space on the last column.</p>
					<h2>Single Columns</h2>
					<p class="eia">
						No left or right space by adding <code>header</code> to the <code>l-row</code> tag.
					</p>
					<?php include('layouts/proto-tested.inc') ?>
					<?php include('layouts/l-two-column-even-template.inc') ?>
					<?php include('layouts/three-columns-even.inc') ?>
					<?php include('layouts/four-columns-even.inc') ?>
					<?php include('layouts/five-columns-even.inc') ?>
					<?php include('layouts/six-columns-even.inc') ?>
					<!-- end content -->
					<!-- end main template area -->
				</div>
				<div class="grid-right"></div>
			</div>
			<!-- end master layout-->
		</section>
		<?php include('../includes/footer.inc'); ?>
	</main>
</body>

</html>