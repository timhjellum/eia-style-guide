<?php
require_once '../includes/variables.inc';
$globalTitle 	= 'U.S. Energy Information Administration (EIA)';
$section		= 'Themes';
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
		<section id="top">
			<!-- start master layout-->
			<div class="grid-wrapper">
				<div class="grid-left">
					<!-- start left navigation-->
					<div></div>
					<!-- end master layout-->
				</div>
				<div class="grid-main">
					<!-- start main template area -->
					<div class="eia-container">
						<h1 class="uk-h1 tm-heading-fragment"><?=$section?> - <?=$subSection?></h1>
						<p class="uk-text-lead"></p>
					</div>
					<p class="eia">
						There's only two types of row class names, <code>l-row</code> and <code>l-row header</code>. The difference it that the default row adds a <span class="_row">22px</span> space on the left and sometimes has a <span class="_col">22px</span> space on the right (based on the type of content). As a developer or content editor, always use the <code>l-row</code> as the other is reserved for special applications.
					</p>
					<!-- 
						<div class="clipboard-container">
							<p class="eia">Good CSS structure might look something like this:</p>
							<pre>
              <code class="html">&lt;!-- default row --&gt; &lt;div class="l-row"&gt;&lt;/div&gt;</code>
            </pre>
						</div>
						<h3>Row (Default)</h3>
						<h4>Live examples:</h4>
<ul class="live-examples">
							<li class="li">
								<strong>Live example(s)</strong>
							</li>
							<li class="li">
								Everything below the 'PETROLEUM and OTHER LIQUIDS' section of <a href="https://www.eia.gov/petroleum/">https://www.eia.gov/petroleum/</a>
							</li>
						</ul>
						 -->

					<script>
					function rowArticle() {
						var row = document.getElementById("rowStyleSwitcher")
						row.setAttribute('class', 'article')
					}

					function rowPrimary() {
						var row = document.getElementById("rowStyleSwitcher")
						row.setAttribute('class', 'primary')
					}

					function rowPrimaryAlt() {
						var row = document.getElementById("rowStyleSwitcher")
						row.setAttribute('class', 'primary-alt')
					}

					function rowSecondary() {
						var row = document.getElementById("rowStyleSwitcher")
						row.setAttribute('class', 'secondary')
					}

					function rowSecondaryAlt() {
						var row = document.getElementById("rowStyleSwitcher")
						row.setAttribute('class', 'secondary-alt')
					}
					</script>
					<div class="style-switcher">
						<button onclick="rowArticle()">Article</button>
						<button onclick="rowPrimary()">Primary</button>
						<button onclick="rowPrimaryAlt()">Primary-alt</button>
						<button onclick="rowSecondary()">Secondary</button>
						<button onclick="rowSecondaryAlt()">Secondary-alt</button>
					</div>

					<div class="article" id="rowStyleSwitcher">

						<div class="l-row l-full-width-col">
							<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
							</div>
						</div>
					</div>

				</div>
				.example-layouts-row-default,

				<h3>Header Row</h3>
				<h4>Live examples:</h4>
				<ul class="live-examples">
					<li class="li">
						<strong>Live example(s)</strong>
					</li>
					<li></li>
					<li>
						The 'PETROLEUM and OTHER LIQUIDS' section of <a href="https://www.eia.gov/petroleum/">https://www.eia.gov/petroleum/</a>
					</li>
				</ul>
				<script>
				function rowHeaderArticle() {
					var rowHeader = document.getElementById("rowHeaderStyleSwitcher")
					rowHeader.setAttribute('class', 'article')
				}

				function rowHeaderPrimary() {
					var rowHeader = document.getElementById("rowHeaderStyleSwitcher")
					rowHeader.setAttribute('class', 'primary')
				}

				function rowHeaderPrimaryAlt() {
					var rowHeader = document.getElementById("rowHeaderStyleSwitcher")
					rowHeader.setAttribute('class', 'primary-alt')
				}

				function rowHeaderSecondary() {
					var rowHeader = document.getElementById("rowHeaderStyleSwitcher")
					rowHeader.setAttribute('class', 'secondary')
				}

				function rowHeaderSecondaryAlt() {
					var rowHeader = document.getElementById("rowHeaderStyleSwitcher")
					rowHeader.setAttribute('class', 'secondary-alt')
				}
				</script>
				<div class="style-switcher">
					<button onclick="rowHeaderArticle()">Article</button>
					<button onclick="rowHeaderPrimary()">Primary</button>
					<button onclick="rowHeaderPrimaryAlt()">Primary-alt</button>
					<button onclick="rowHeaderSecondary()">Secondary</button>
					<button onclick="rowHeaderSecondaryAlt()">Secondary-alt</button>
				</div>

				<div class="article" id="rowHeaderStyleSwitcher">

					<div class="l-row header l-full-width-col">
						<div class="l-col hide-overflow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
						</div>
					</div>
				</div>

			</div>
			<!-- Legend -->
			.RowHeader,
			</div>
			<div class="l-col layouts sticky">
				.sub-nav,
			</div>
			</div>
			<!-- end main template area -->
			</div>
			<div class="grid-right"></div>
			</div>
			<!-- end master layout-->
		</section>
		<?php include('./includes/footer.inc'); ?>
	</main>
</body>

</html>