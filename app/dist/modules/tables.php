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
		<?php
		include('./tables/basic-table.inc'); 
		include('./tables/column-align.inc'); 
		include('./tables/column-divider.inc'); 
		include('./tables/column-hide.inc'); 
		include('./tables/column-highlight.inc'); 
		include('./tables/row-bold.inc'); 
		include('./tables/row-divider.inc'); 
		include('./tables/row-head.inc'); 
		include('./tables/row-indent.inc'); 
		include('./tables/row-total.inc'); 
		include('./tables/section-head.inc'); 
		include('./tables/table-caption.inc'); 
		include('./tables/table-double-header.inc'); 
		include('./tables/table-foot.inc'); 
		include('./tables/table-footnotes.inc'); 
		include('./tables/table-full-width.inc'); 
		include('./tables/table-holiday.inc'); 
		include('./tables/tables.inc'); 
		include('./tables/tables-stacked.inc'); 
include('../includes/footer.inc'); ?>
	</main>
</body>

</html>

</html>