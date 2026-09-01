<?php
require_once '../includes/variables.inc';
$globalTitle 	= 'U.S. Energy Information Administration (EIA)';
$section		= 'Modules';
$subSection		= 'Contacts';
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
include('./contact/module-fiv.inc');
include('./contact/module-six.inc');
include('./contact/module-sev.inc');
?>
		<?php include('../includes/footer.inc'); ?>
	</main>
</body>

</html>