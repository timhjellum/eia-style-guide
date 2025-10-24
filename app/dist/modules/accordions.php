<?php
require_once '../includes/variables.inc';
$globalTitle 	= 'U.S. Energy Information Administration (EIA)';
$section		= 'Modules';
$subSection		= 'Accordions';
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
include('./contact/module-one.inc');
include('./contact/module-two.inc');
include('./contact/module-thr.inc');
include('./contact/module-fou.inc');
?>
		<?php include('../includes/footer.inc'); ?>
	</main>
</body>

</html>