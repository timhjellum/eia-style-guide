<?php
require_once '../includes/variables.inc';
$globalTitle 	= 'U.S. Energy Information Administration (EIA)';
$section		= 'Modules';
$subSection		= 'Footnotes';
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
include('./footnotes/footnotes-one.inc');
include('./footnotes/footnotes-two.inc');
include('./footnotes/footnotes-thr.inc');
include('./footnotes/footnotes-fou.inc');
include('./footnotes/footnotes-fiv.inc');
include('./footnotes/footnotes-six.inc');
include('./footnotes/footnotes-sev.inc');
?>
		<?php include('../includes/footer.inc'); ?>
	</main>
</body>

</html>