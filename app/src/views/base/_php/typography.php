<!doctype html>
<html>
<?php
$globalTitle 		= 'U.S. Energy Information Administration (EIA)';
$pageTitle          = 'Style Guide';
$pageTitle = 'Coming Soon';
?>

<head>
	<title>
		<!-- title here --> -
		<?=$globalTitle?>
	</title>
	<meta property="og:title" content="<!-- title here --> - <?=$globalTitle?>">

	<link href="../style-guide/styles/style-guide.css" type="text/css" media="screen, projection" rel="stylesheet">
	<link href="../global/styles/global.css" type="text/css" media="screen, projection" rel="stylesheet">

	<script src="../vendor/jquery/jquery.min.js"></script>
	<script src="../vendor/jquery/jquery.migrate.min.js"></script>
	<script src="../vendor/jquery-ui/jquery-ui.min.js"></script>
	<script src="../vendor/jquery-ui/jquery.ui.touch-punch.min.js"></script>
	<link href="../includes/favicon.ico" rel="shortcut icon">
	<link href="../includes/favicon.ico" rel="icon" type="image/x-icon">
	<link href="../includes/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">




</head>

<body>
	<!-- includes/header.inc') ?>
	<div class="l-row l-two-col-right">
		<div class="l-col">

			<span class="base">
				<h1 class="uk-h1 tm-heading-fragment">Typography</h1>
<p class="uk-text-lead"></p>
			</span>
		</div>
		<div class="l-col sticky">
			<?php include('./includes/sub-nav.inc') ?>
		</div>
	</div>

	<h3 class="h3 base">Header 1</h3>
	<script>
		function h1Article() {
			var h1 = document.getElementById('h1StyleSwitcher')
			h1.setAttribute('class', 'article');
		}

		function h1Primary() {
			var h1 = document.getElementById('h1StyleSwitcher')
			h1.setAttribute('class', 'primary');
		}

		function h1PrimaryAlt() {
			var h1 = document.getElementById('h1StyleSwitcher')
			h1.setAttribute('class', 'primary-alt');
		}

		function h1Secondary() {
			var h1 = document.getElementById('h1StyleSwitcher')
			h1.setAttribute('class', 'secondary');
		}

		function h1SecondaryAlt() {
			var h1 = document.getElementById('h1StyleSwitcher')
			h1.setAttribute('class', 'secondary-alt');
		}
	</script>
	<div class="style-switcher">
		<button onclick='h1Article()'>Article</button>
		<button onclick='h1Primary()'>Primary</button>
		<button onclick='h1PrimaryAlt()'>Primary-alt</button>
		<button onclick='h1Secondary()'>Secondary</button>
		<button onclick='h1SecondaryAlt()'>Secondary-alt</button>
	</div>

	<div class="article" id="h1StyleSwitcher">

		<!-- includes/placeholders/h1 -->
	</div>

	<h3 class="h3 base">Header 2</h3>
	<script>
		function h2Article() {
			var h2 = document.getElementById('h2StyleSwitcher')
			h2.setAttribute('class', 'article');
		}

		function h2Primary() {
			var h2 = document.getElementById('h2StyleSwitcher')
			h2.setAttribute('class', 'primary');
		}

		function h2PrimaryAlt() {
			var h2 = document.getElementById('h2StyleSwitcher')
			h2.setAttribute('class', 'primary-alt');
		}

		function h2Secondary() {
			var h2 = document.getElementById('h2StyleSwitcher')
			h2.setAttribute('class', 'secondary');
		}

		function h2SecondaryAlt() {
			var h2 = document.getElementById('h2StyleSwitcher')
			h2.setAttribute('class', 'secondary-alt');
		}
	</script>
	<div class="style-switcher">
		<button onclick='h2Article()'>Article</button>
		<button onclick='h2Primary()'>Primary</button>
		<button onclick='h2PrimaryAlt()'>Primary-alt</button>
		<button onclick='h2Secondary()'>Secondary</button>
		<button onclick='h2SecondaryAlt()'>Secondary-alt</button>
	</div>

	<div class="article" id="h2StyleSwitcher">

		<h2 class="eia">H2 Lorem Ipsum Dolor</h2>
	</div>


	<h3 class="h3 base">Header 3</h3>

	<script>
		function h3Article() {
			var h3 = document.getElementById('h3StyleSwitcher')
			h3.setAttribute('class', 'article');
		}

		function h3Primary() {
			var h3 = document.getElementById('h3StyleSwitcher')
			h3.setAttribute('class', 'primary');
		}

		function h3PrimaryAlt() {
			var h3 = document.getElementById('h3StyleSwitcher')
			h3.setAttribute('class', 'primary-alt');
		}

		function h3Secondary() {
			var h3 = document.getElementById('h3StyleSwitcher')
			h3.setAttribute('class', 'secondary');
		}

		function h3SecondaryAlt() {
			var h3 = document.getElementById('h3StyleSwitcher')
			h3.setAttribute('class', 'secondary-alt');
		}
	</script>
	<div class="style-switcher">
		<button onclick='h3Article()'>Article</button>
		<button onclick='h3Primary()'>Primary</button>
		<button onclick='h3PrimaryAlt()'>Primary-alt</button>
		<button onclick='h3Secondary()'>Secondary</button>
		<button onclick='h3SecondaryAlt()'>Secondary-alt</button>
	</div>
	<div class="article" id="h3StyleSwitcher">

		<!-- includes/placeholders/h3 -->
	</div>

	<h3 class="h3 base">Header 4</h3>
	<script>
		function h4Article() {
			var h4 = document.getElementById('h4StyleSwitcher')
			h4.setAttribute('class', 'article');
		}

		function h4Primary() {
			var h4 = document.getElementById('h4StyleSwitcher')
			h4.setAttribute('class', 'primary');
		}

		function h4PrimaryAlt() {
			var h4 = document.getElementById('h4StyleSwitcher')
			h4.setAttribute('class', 'primary-alt');
		}

		function h4Secondary() {
			var h4 = document.getElementById('h4StyleSwitcher')
			h4.setAttribute('class', 'secondary');
		}

		function h4SecondaryAlt() {
			var h4 = document.getElementById('h4StyleSwitcher')
			h4.setAttribute('class', 'secondary-alt');
		}
	</script>
	<div class="style-switcher">
		<button onclick='h4Article()'>Article</button>
		<button onclick='h4Primary()'>Primary</button>
		<button onclick='h4PrimaryAlt()'>Primary-alt</button>
		<button onclick='h4Secondary()'>Secondary</button>
		<button onclick='h4SecondaryAlt()'>Secondary-alt</button>
	</div>

	<div class="article" id="h4StyleSwitcher">
		<!-- includes/placeholders/h4 -->
	</div>
	<h3 class="h3 base">Header 5</h3>
	<script>
		function h5Article() {
			var h5 = document.getElementById('h5StyleSwitcher')
			h5.setAttribute('class', 'article');
		}

		function h5Primary() {
			var h5 = document.getElementById('h5StyleSwitcher')
			h5.setAttribute('class', 'primary');
		}

		function h5PrimaryAlt() {
			var h5 = document.getElementById('h5StyleSwitcher')
			h5.setAttribute('class', 'primary-alt');
		}

		function h5Secondary() {
			var h5 = document.getElementById('h5StyleSwitcher')
			h5.setAttribute('class', 'secondary');
		}

		function h5SecondaryAlt() {
			var h5 = document.getElementById('h5StyleSwitcher')
			h5.setAttribute('class', 'secondary-alt');
		}
	</script>
	<div class="style-switcher">
		<button onclick='h5Article()'>Article</button>
		<button onclick='h5Primary()'>Primary</button>
		<button onclick='h5PrimaryAlt()'>Primary-alt</button>
		<button onclick='h5Secondary()'>Secondary</button>
		<button onclick='h5SecondaryAlt()'>Secondary-alt</button>
	</div>

	<div class="article" id="h5StyleSwitcher">

		<!-- includes/placeholders/h5 -->
	</div>
	<h3 class="h3 base">Header 6</h3>
	<script>
		function h6Article() {
			var h6 = document.getElementById('h6StyleSwitcher')
			h6.setAttribute('class', 'article');
		}

		function h6Primary() {
			var h6 = document.getElementById('h6StyleSwitcher')
			h6.setAttribute('class', 'primary');
		}

		function h6PrimaryAlt() {
			var h6 = document.getElementById('h6StyleSwitcher')
			h6.setAttribute('class', 'primary-alt');
		}

		function h6Secondary() {
			var h6 = document.getElementById('h6StyleSwitcher')
			h6.setAttribute('class', 'secondary');
		}

		function h6SecondaryAlt() {
			var h6 = document.getElementById('h6StyleSwitcher')
			h6.setAttribute('class', 'secondary-alt');
		}
	</script>
	<div class="style-switcher">
		<button onclick='h6Article()'>Article</button>
		<button onclick='h6Primary()'>Primary</button>
		<button onclick='h6PrimaryAlt()'>Primary-alt</button>
		<button onclick='h6Secondary()'>Secondary</button>
		<button onclick='h6SecondaryAlt()'>Secondary-alt</button>
	</div>

	<div class="article" id="h6StyleSwitcher">
		<!-- includes/placeholders/h6 -->
	</div>
	<h3 class="h3 base">Paragraph</h3>
	<script>
		function paragraphArticle() {
			var paragraph = document.getElementById('paragraphStyleSwitcher')
			paragraph.setAttribute('class', 'article');
		}

		function paragraphPrimary() {
			var paragraph = document.getElementById('paragraphStyleSwitcher')
			paragraph.setAttribute('class', 'primary');
		}

		function paragraphPrimaryAlt() {
			var paragraph = document.getElementById('paragraphStyleSwitcher')
			paragraph.setAttribute('class', 'primary-alt');
		}

		function paragraphSecondary() {
			var paragraph = document.getElementById('paragraphStyleSwitcher')
			paragraph.setAttribute('class', 'secondary');
		}

		function paragraphSecondaryAlt() {
			var paragraph = document.getElementById('paragraphStyleSwitcher')
			paragraph.setAttribute('class', 'secondary-alt');
		}
	</script>
	<div class="style-switcher">
		<button onclick='paragraphArticle()'>Article</button>
		<button onclick='paragraphPrimary()'>Primary</button>
		<button onclick='paragraphPrimaryAlt()'>Primary-alt</button>
		<button onclick='paragraphSecondary()'>Secondary</button>
		<button onclick='paragraphSecondaryAlt()'>Secondary-alt</button>
	</div>

	<div class="article" id="paragraphStyleSwitcher">
		<!-- includes/placeholders/lorem-ipsum-p') ?>
	</div>


	<h3 class="h3 base">Headers</h3>
	<script>
		function headersArticle() {
			var headers = document.getElementById('headersStyleSwitcher')
			headers.setAttribute('class', 'article');
		}

		function headersPrimary() {
			var headers = document.getElementById('headersStyleSwitcher')
			headers.setAttribute('class', 'primary');
		}

		function headersPrimaryAlt() {
			var headers = document.getElementById('headersStyleSwitcher')
			headers.setAttribute('class', 'primary-alt');
		}

		function headersSecondary() {
			var headers = document.getElementById('headersStyleSwitcher')
			headers.setAttribute('class', 'secondary');
		}

		function headersSecondaryAlt() {
			var headers = document.getElementById('headersStyleSwitcher')
			headers.setAttribute('class', 'secondary-alt');
		}
	</script>
	<div class="style-switcher">
		<button onclick='headersArticle()'>Article</button>
		<button onclick='headersPrimary()'>Primary</button>
		<button onclick='headersPrimaryAlt()'>Primary-alt</button>
		<button onclick='headersSecondary()'>Secondary</button>
		<button onclick='headersSecondaryAlt()'>Secondary-alt</button>
	</div>

	<div class="article" id="headersStyleSwitcher">
		<div class="l-row l-full-width-col">
			<div class="l-col">
				<h1>h1 - The five boxing wizards jump quickly</h1>
<p class="uk-text-lead"></p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lacus nulla, interdum a tellus eu, sollicitudin lobortis felis. Curabitur fermentum tristique rhoncus. Maecenas aliquam, odio tincidunt aliquam malesuada, dolor tellus finibus leo, vitae justo nulla ac neque.</p>
				<h2>h2 - The five boxing wizards jump quickly</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lacus nulla, interdum a tellus eu, sollicitudin lobortis felis. Curabitur fermentum tristique rhoncus. Maecenas aliquam, odio tincidunt aliquam malesuada, dolor tellus finibus leo, vitae justo nulla ac neque.</p>
				<h3>h3 - The five boxing wizards jump quickly</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lacus nulla, interdum a tellus eu, sollicitudin lobortis felis. Curabitur fermentum tristique rhoncus. Maecenas aliquam, odio tincidunt aliquam malesuada, dolor tellus finibus leo, vitae justo nulla ac neque.</p>
				<h4>h4 - The five boxing wizards jump quickly</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lacus nulla, interdum a tellus eu, sollicitudin lobortis felis. Curabitur fermentum tristique rhoncus. Maecenas aliquam, odio tincidunt aliquam malesuada, dolor tellus finibus leo, vitae justo nulla ac neque.</p>
				<h5>h5 - The five boxing wizards jump quickly</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lacus nulla, interdum a tellus eu, sollicitudin lobortis felis. Curabitur fermentum tristique rhoncus. Maecenas aliquam, odio tincidunt aliquam malesuada, dolor tellus finibus leo, vitae justo nulla ac neque.</p>
				<h6>h6 - The five boxing wizards jump quickly</h6>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lacus nulla, interdum a tellus eu, sollicitudin lobortis felis. Curabitur fermentum tristique rhoncus. Maecenas aliquam, odio tincidunt aliquam malesuada, dolor tellus finibus leo, vitae justo nulla ac neque.</p>
			</div>
		</div>
	</div>

	<!-- includes/footer.inc') ?>
</body>


</html>