<?php
require_once '../includes/variables.inc';
$globalTitle 	= 'U.S. Energy Information Administration (EIA)';
$section		= 'Themes';
$subSection		= 'Homepage';
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
include('./footnotes/data-highlights.inc');
include('./footnotes/energy-kids.inc');
include('./footnotes/especially-for.inc');
include('./footnotes/features.inc');
include('./footnotes/learn-about-energy.inc');
include('./footnotes/our-experts-speak.inc');
include('./footnotes/outlooks.inc');
include('./footnotes/today-in-energy.inc');
include('./footnotes/top-picks.inc');
include('./footnotes/whats-new.inc');
?>
		<?php include('../includes/footer.inc'); ?>
	</main>
</body>

</html>