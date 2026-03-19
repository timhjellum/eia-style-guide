<!doctype html>
<?php
$globalTitle 	= 'U.S. Energy Information Administration (EIA)';
$pageTitle          = '';

?>

<head>

	<title><?=$pageTitle?> - <?=$globalTitle?></title>
	<meta property="og:title" content="<?=$pageTitle?> - <?=$globalTitle?>">
	<meta property="og:url" content="https://www.eia.gov<?=$_SERVER['SCRIPT_NAME']?>">
	<meta name="url" content="https://www.eia.gov<?=$_SERVER['SCRIPT_NAME']?>">
	<?php include('global/head/includes/head.inc'); ?>
</head>

<body>

	<?php include('global/header/includes/header.inc');
	include('consumption/includes/sub-navigation.inc'); ?>


        <div class="l-row l-two-col-right-narrow">
            <div class="l-col">
<?php include('consumption/includes/faqs.inc'); ?>
            </div>
            <div class="l-col">
<?php include('./includes/faqs-side-content.inc'); ?>
            </div>
        </div>
<?php include('global/footer/includes/footer.inc'); ?>
    </body>

    </html>
	

			


																	<?php /* Additional Links */ ?>
																	<?php /* Additional Links */ ?>

		</div>


	</div>
	
	<?php include('global/footer/includes/footer.inc'); ?>
	
</body>

</html>