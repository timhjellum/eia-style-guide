<?php
require_once '../includes/variables.inc';
$globalTitle 	= 'U.S. Energy Information Administration (EIA)';
?>
<!doctype html>
<html>

<head>
	<?php include('../includes/head.inc'); ?>
</head>

<body>
	<?php include('../includes/header.inc'); ?>
	<main>
		<section class="landing">
			
			<!-- start master layout-->
			<div class="grid-wrapper">
				<div class="grid-left">
					<!-- start left navigation-->
					<div></div>
					<!-- end master layout-->
				</div>
				<div class="grid-main">
					<!-- start main template area -->
					<div class="color-palette">
						<div class="palettes">
							<figure></figure>
							<figure></figure>
							<figure></figure>
							<figure></figure>
							<figure></figure>
							<figure></figure>
							<figure></figure>
							<figure></figure>
							<figure></figure>
							<!-- $$$$$$$$$$$$  darker   $$$$$$$$$$$$ -->
							<figure class="palette">
								<div class="eia-dark-blue-60 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-dark-blue-45 swatch"></div>
								<figcaption class="palette__caption">caption</figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-dark-blue-30 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<!-- $$$$$$$$$$$$  neutral  $$$$$$$$$$$$ -->
							<figure class="palette">
								<div class="eia-dark-blue-15 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-blue swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-light-blue-15 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<!-- $$$$$$$$$$$$  lighter  $$$$$$$$$$$$ -->
							<figure class="palette">
								<div class="eia-light-blue-30 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-light-blue-45 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-light-blue-60 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<!-- $$$$$$$$$$$$  darker   $$$$$$$$$$$$ -->
							<figure class="palette">
								<div class="eia-dark-red-60 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-dark-red-45 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-dark-red-30 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<!-- $$$$$$$$$$$$  neutral  $$$$$$$$$$$$ -->
							<figure class="palette">
								<div class="eia-dark-red-15 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-red swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-light-red-15 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<!-- $$$$$$$$$$$$  lighter  $$$$$$$$$$$$ -->
							<figure class="palette">
								<div class="eia-light-red-30 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-light-red-45 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-light-red-60 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<!-- $$$$$$$$$$$$  darker   $$$$$$$$$$$$ -->
							<figure class="palette">
								<div class="eia-dark-green-60 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-dark-green-45 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-dark-green-30 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<!-- $$$$$$$$$$$$  neutral  $$$$$$$$$$$$ -->
							<figure class="palette">
								<div class="eia-dark-green-15 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-green swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-light-green-15 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<!-- $$$$$$$$$$$$  lighter  $$$$$$$$$$$$ -->
							<figure class="palette">
								<div class="eia-light-green-30 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-light-green-45 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-light-green-60 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<!-- $$$$$$$$$$$$  darker   $$$$$$$$$$$$ -->
							<figure class="palette">
								<div class="eia-dark-yellow-60 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-dark-yellow-45 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-dark-yellow-30 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<!-- $$$$$$$$$$$$  neutral  $$$$$$$$$$$$ -->
							<figure class="palette">
								<div class="eia-dark-yellow-15 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-yellow swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-light-yellow-15 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<!-- $$$$$$$$$$$$  lighter  $$$$$$$$$$$$ -->
							<figure class="palette">
								<div class="eia-light-yellow-30 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-light-yellow-45 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-light-yellow-60 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<!-- $$$$$$$$$$$$  darker   $$$$$$$$$$$$ -->
							<figure class="palette">
								<div class="eia-dark-orange-60 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-dark-orange-45 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-dark-orange-30 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<!-- $$$$$$$$$$$$  neutral  $$$$$$$$$$$$ -->
							<figure class="palette">
								<div class="eia-dark-orange-15 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-orange swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-light-orange-15 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<!-- $$$$$$$$$$$$  lighter  $$$$$$$$$$$$ -->
							<figure class="palette">
								<div class="eia-light-orange-30 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-light-orange-45 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-light-orange-60 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<!-- $$$$$$$$$$$$  darker   $$$$$$$$$$$$ -->
							<figure class="palette">
								<div class="eia-dark-brown-60 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-dark-brown-45 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-dark-brown-30 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<!-- $$$$$$$$$$$$  neutral  $$$$$$$$$$$$ -->
							<figure class="palette">
								<div class="eia-dark-brown-15 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-brown swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-light-brown-15 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<!-- $$$$$$$$$$$$  lighter  $$$$$$$$$$$$ -->
							<figure class="palette">
								<div class="eia-light-brown-30 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-light-brown-45 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-light-brown-60 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<!-- $$$$$$$$$$$$  darker   $$$$$$$$$$$$ -->
							<figure class="palette">
								<div class="eia-dark-purple-60 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-dark-purple-45 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-dark-purple-30 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<!-- $$$$$$$$$$$$  neutral  $$$$$$$$$$$$ -->
							<figure class="palette">
								<div class="eia-dark-purple-15 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-purple swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-light-purple-15 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<!-- $$$$$$$$$$$$  lighter  $$$$$$$$$$$$ -->
							<figure class="palette">
								<div class="eia-light-purple-30 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-light-purple-45 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-light-purple-60 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<!-- greyscale -->
							<figure class="palette">
								<div class="eia-black swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-black-90 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-black-80 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-black-70 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-black-60 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-black-50 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-black-40 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-black-30 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-black-20 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<figure class="palette">
								<div class="eia-black-10 swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<!-- greyscale -->
							<figure class="palette">
								<div class="eia-white swatch"></div>
								<figcaption class="palette__caption"></figcaption>
							</figure>
							<!-- spacer for now -->
							<figure></figure>
							<figure></figure>
							<figure></figure>
							<figure></figure>
							<figure></figure>
							<figure></figure>
							<figure></figure>
							<figure></figure>
							<figure></figure>
						</div>
					</div>
					<!-- end main template area -->
				</div>
				<div class="grid-right"></div>
			</div>
			<!-- end master layout-->
		</section>
	</main>
</body>

</html>