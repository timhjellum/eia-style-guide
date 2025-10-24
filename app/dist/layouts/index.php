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
include('./layouts/module-one.inc');
include('./layouts/module-two.inc');
include('./layouts/module-thr.inc');
include('./layouts/module-fou.inc');
include('./layouts/module-fiv.inc');
include('./layouts/module-six.inc');
include('./layouts/module-sev.inc');
?>
		<?php include('../includes/footer.inc'); ?>
	</main>
</body>

</html>