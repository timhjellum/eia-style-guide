<!doctype html>
<?php
$pageTitle = 'U.S. Energy Information Administration (EIA)';
$L2T = 'Browse by Tag';
$locale = 'reports';
$l2id = 4;
?>
<html>

<head>
	<?php include('adaptive/global/head/includes/head.inc') ?>
	<title>
		<?=$pageTitle?> - <?=$L2T?>
	</title>
</head>

<body>
	<?php
include('adaptive/global/header/includes/header.inc');
include('./includes/sub-navigation.inc');
include('global/includes/browse-by-tag.inc');
include('adaptive/global/footer/includes/footer.inc');
?>
</body>

</html>