<!doctype html>
<?php
$globalTitle 	= 'U.S. Energy Information Administration (EIA)';
$pageTitle          = '';

?>

<head>

	<title><?=$pageTitle?> - <?=$globalTitle?></title>
	<meta property="og:title" content="<?=$pageTitle?> - <?=$globalTitle?>">
	<meta property="og:url" content="https://www.eia.gov<?=$_SERVER['PHP_SELF']?>">
	<meta name="url" content="https://www.eia.gov<?=$_SERVER['PHP_SELF']?>">
	<?php include('adaptive/global/head/includes/head.inc'); ?>
</head>

<body>

	<?php include('adaptive/global/header/includes/header.inc'); ?>
	<?php include('./includes/subnav_consumption.inc'); ?>


	<div class="l-row l-two-col-right-narrow">
		<div class="l-col">

			<h1>Title: Sample Data Page<span class="right">Available formats</span></h1>
			<?php /* Data Example */ ?>
			<h2><span class="right"><a href="" class="ico_csv">CSV</a> <a href="" class="ico pdf">PDF</a> <a href="" class="ico xls"><span class="ico xls inline"><span>XLS</span></span></a></span>
				<a href="#">Data Link Example</a></h2>
			<p class="date"><em>Date Stamp</em></p>
			<p>Short description</p>
			<?php /* Additional Links */ ?>
			<span class="pub_links"><a href="#">Additional links (if needed)</a> <a href="#" class="no-border">Single/Last additional link</a></span>
			<?php /* Additional Links */ ?>
			<?php /* Data Example */ ?>
			<?php /* SubData Example */ ?>
			<blockquote>
				<h2><span class="right"><a href="" class="ico_csv">CSV</a> <a href="" class="ico pdf">PDF</a> <a href="" class="ico xls"><span class="ico xls inline"><span>XLS</span></span></a></span>
					<a href="#">SubData Link Example</a></h2>
				<p class="date"><em>Date Stamp</em></p>
				<p>Short description</p>
				<?php /* Additional Links */ ?>
				<span class="pub_links"><a href="#">Additional links (if needed)</a> <a href="#" class="no-border">Single/Last additional link</a></span>
				<?php /* Additional Links */ ?>
			</blockquote>
			<?php /* SubData Example */ ?>
			<hr />
			<h2><a href="#">Data Link (No format other than HTML)</a></h2>
			<p class="date"><em>Date Stamp</em></p>
			<p>Short description</p>
			<?php /* Additional Links */ ?>
			<span class="pub_links"><a href="#">Additional links (if needed)</a> <a href="#" class="no-border">Single/Last additional link</a></span>
			<?php /* Additional Links */ ?>
			<hr />
			<h2><a href="#">Example Stand Alone Link</a></h2>

		</div>
		<div class="l-col">

			<?php include('./includes/side_content_data.inc'); ?>

		</div>
	</div>

	<?php include('adaptive/global/footer/includes/footer.inc'); ?>

</body>

</html>