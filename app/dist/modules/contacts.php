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
include('./contacts/module-one.inc');
include('./contacts/module-two.inc');
include('./contacts/module-thr.inc');
include('./contacts/module-fou.inc');
include('./contacts/module-fiv.inc');
include('./contacts/module-six.inc');
include('./contacts/module-sev.inc');
include('../includes/footer.inc'); ?>
	</main>
</body>

</html>