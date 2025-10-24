<?php
require_once '../includes/variables.inc';
$globalTitle 	= 'U.S. Energy Information Administration (EIA)';
$section		= 'Layouts';
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
					<!-- content here -->


					<script>
					/*
							function baseDivFullWidthCol() {
								var baseDiv = document.getElementById('baseDivStyleSwitcher')
								baseDiv.setAttribute('class', 'l-row l-full-width-col nested-example');
							}
							*/

					function baseDivTwoColEven() {
						var baseDiv = document.getElementById('baseDivStyleSwitcher')

						baseDiv.setAttribute('class', 'l-row l-two-col-even nested-example')
					}

					function baseDivTwoColLeftWide() {
						var baseDiv = document.getElementById('baseDivStyleSwitcher')
						baseDiv.setAttribute('class', 'l-row l-two-col-left-wide nested-example');
					}

					function baseDivTwoColLeftNarrow() {
						var baseDiv = document.getElementById('baseDivStyleSwitcher')
						baseDiv.setAttribute('class', 'l-row l-two-col-left-narrow nested-example');
					}

					function baseDivTwoColLeft() {
						var baseDiv = document.getElementById('baseDivStyleSwitcher')
						baseDiv.setAttribute('class', 'l-row l-two-col-left nested-example');
					}

					function baseDivTwoColRightNarrow() {
						var baseDiv = document.getElementById('baseDivStyleSwitcher')
						baseDiv.setAttribute('class', 'l-row l-two-col-right-narrow nested-example');
					}

					function baseDivTwoColRight() {
						var baseDiv = document.getElementById('baseDivStyleSwitcher')
						baseDiv.setAttribute('class', 'l-row l-two-col-right nested-example');
					}

					function baseDivTwoColRightWide() {
						var baseDiv = document.getElementById('baseDivStyleSwitcher')
						baseDiv.setAttribute('class', 'l-row l-two-col-right-wide nested-example');
					}
					/*
																													function baseDivThreeCol() {
																														var baseDiv = document.getElementById('baseDivStyleSwitcher')
																														baseDiv.setAttribute('class', 'l-row l-three-col nested-example');
																													}
																										
																													function baseDivThreeColEven() {
																														var baseDiv = document.getElementById('baseDivStyleSwitcher')
																														baseDiv.setAttribute('class', 'l-row l-three-col-even nested-example');
																													}
																										
																													function baseDivFourColEven() {
																														var baseDiv = document.getElementById('baseDivStyleSwitcher')
																														baseDiv.setAttribute('class', 'l-row l-four-col-even nested-example');
																													}
																										
																													function baseDivFiveColEven() {
																														var baseDiv = document.getElementById('baseDivStyleSwitcher')
																														baseDiv.setAttribute('class', 'l-row l-five-col-even nested-example');
																													}
																										
																													function baseDivSixColEven() {
																														var baseDiv = document.getElementById('baseDivStyleSwitcher')
																														baseDiv.setAttribute('class', 'l-row l-six-col-even nested-example');
																													}
																													
																													function firstColumnTwoColEven() {
																														var firstColumn = document.getElementById('firstColumnStyleSwitcher')
																														firstColumn.setAttribute('class', 'l-row l-two-col-even nested-example')
																													}
																										
																													function firstColumnTwoColLeftWide() {
																														var firstColumn = document.getElementById('firstColumnStyleSwitcher')
																														firstColumn.setAttribute('class', 'l-row l-two-col-left-wide nested-example');
																													}
																										
																													function firstColumnTwoColLeftNarrow() {
																														var firstColumn = document.getElementById('firstColumnStyleSwitcher')
																														firstColumn.setAttribute('class', 'l-row l-two-col-left-narrow nested-example');
																													}
																										
																													function firstColumnTwoColLeft() {
																														var firstColumn = document.getElementById('firstColumnStyleSwitcher')
																														firstColumn.setAttribute('class', 'l-row l-two-col-left nested-example');
																													}
																										
																													function firstColumnTwoColRightNarrow() {
																														var firstColumn = document.getElementById('firstColumnStyleSwitcher')
																														firstColumn.setAttribute('class', 'l-row l-two-col-right-narrow nested-example');
																													}
																										
																													function firstColumnTwoColRight() {
																														var firstColumn = document.getElementById('firstColumnStyleSwitcher')
																														firstColumn.setAttribute('class', 'l-row l-two-col-right nested-example');
																													}
																										
																													function firstColumnTwoColRightWide() {
																														var firstColumn = document.getElementById('firstColumnStyleSwitcher')
																														firstColumn.setAttribute('class', 'l-row l-two-col-right-wide nested-example');
																													}
																										
																													function firstColumnThreeCol() {
																														var firstColumn = document.getElementById('firstColumnStyleSwitcher')
																														firstColumn.setAttribute('class', 'l-row l-three-col nested-example');
																													}
																										
																													function firstColumnThreeColEven() {
																														var firstColumn = document.getElementById('firstColumnStyleSwitcher')
																														firstColumn.setAttribute('class', 'l-row l-three-col-even nested-example');
																													}
																										
																													function firstColumnFourColEven() {
																														var firstColumn = document.getElementById('firstColumnStyleSwitcher')
																														firstColumn.setAttribute('class', 'l-row l-four-col-even nested-example');
																													}
																										
																													function firstColumnFiveColEven() {
																														var firstColumn = document.getElementById('firstColumnStyleSwitcher')
																														firstColumn.setAttribute('class', 'l-row l-five-col-even nested-example');
																													}
																										
																													function firstColumnSixColEven() {
																														var firstColumn = document.getElementById('firstColumnStyleSwitcher')
																														firstColumn.setAttribute('class', 'l-row l-six-col-even nested-example');
																													}
																													function secondColumnTwoColEven() {
																														var secondColumn = document.getElementById('secondColumnStyleSwitcher')
																														secondColumn.setAttribute('class', 'l-row l-two-col-even nested-example')
																													}
																										
																													function secondColumnTwoColLeftWide() {
																														var secondColumn = document.getElementById('secondColumnStyleSwitcher')
																														secondColumn.setAttribute('class', 'l-row l-two-col-left-wide nested-example');
																													}
																										
																													function secondColumnTwoColLeftNarrow() {
																														var secondColumn = document.getElementById('secondColumnStyleSwitcher')
																														secondColumn.setAttribute('class', 'l-row l-two-col-left-narrow nested-example');
																													}
																										
																													function secondColumnTwoColLeft() {
																														var secondColumn = document.getElementById('secondColumnStyleSwitcher')
																														secondColumn.setAttribute('class', 'l-row l-two-col-left nested-example');
																													}
																										
																													function secondColumnTwoColRightNarrow() {
																														var secondColumn = document.getElementById('secondColumnStyleSwitcher')
																														secondColumn.setAttribute('class', 'l-row l-two-col-right-narrow nested-example');
																													}
																										
																													function secondColumnTwoColRight() {
																														var secondColumn = document.getElementById('secondColumnStyleSwitcher')
																														secondColumn.setAttribute('class', 'l-row l-two-col-right nested-example');
																													}
																										
																													function secondColumnTwoColRightWide() {
																														var secondColumn = document.getElementById('secondColumnStyleSwitcher')
																														secondColumn.setAttribute('class', 'l-row l-two-col-right-wide nested-example');
																													}
																										
																													function secondColumnThreeCol() {
																														var secondColumn = document.getElementById('secondColumnStyleSwitcher')
																														secondColumn.setAttribute('class', 'l-row l-three-col nested-example');
																													}
																										
																													function secondColumnThreeColEven() {
																														var secondColumn = document.getElementById('secondColumnStyleSwitcher')
																														secondColumn.setAttribute('class', 'l-row l-three-col-even nested-example');
																													}
																										
																													function secondColumnFourColEven() {
																														var secondColumn = document.getElementById('secondColumnStyleSwitcher')
																														secondColumn.setAttribute('class', 'l-row l-four-col-even nested-example');
																													}
																										
																													function secondColumnFiveColEven() {
																														var secondColumn = document.getElementById('secondColumnStyleSwitcher')
																														secondColumn.setAttribute('class', 'l-row l-five-col-even nested-example');
																													}
																										
																													function secondColumnSixColEven() {
																														var secondColumn = document.getElementById('secondColumnStyleSwitcher')
																														secondColumn.setAttribute('class', 'l-row l-six-col-even nested-example');
																													}
																													*/
					</script>
					<h2>Base Layout</h2>
					<div class="thumb-switcher column-one">
						<div class="seven">
							<a onclick="baseDivTwoColLeftNarrow()">Two Columns<br />Left Narrow<br />(25% 75%)<br />
								<?php include('includes/l-two-col-left-narrow-thumb.inc') ?>
							</a>
						</div>
						<div class="seven">
							<a onclick="baseDivTwoColLeft()">
								Two Columns<br />33/66-Split<br />(33.333% 66.666%)<br />
								<?php include('includes/l-two-col-left-thumb.inc') ?>
							</a>
						</div>
						<div class="seven">
							<a onclick="baseDivTwoColRightWide()">
								Two Columns<br />42/58-Split<br />(41.666% 58.333%)<br />
								<?php include('includes/l-two-col-right-wide-thumb.inc') ?>
							</a>
						</div>
						<div class="seven">
							<a onclick="baseDivTwoColEven()">
								Two Columns<br />Even<br />(50% 50%)<br />
								<?php include('includes/l-two-col-even-thumb.inc') ?>
							</a>
						</div>
						<div class="seven">
							<a onclick="baseDivTwoColLeftWide()">
								Two Columns<br />58/42-Split<br />(58.333% 41.666%)<br />
								<?php include('includes/l-two-col-left-wide-thumb.inc') ?>
							</a>
						</div>
						<div class="seven">
							<a onclick="baseDivTwoColRight()">
								Two Columns<br />66/33-Split<br />(66.666% 33.333%)<br />
								<?php include('includes/l-two-col-right-thumb.inc') ?>
							</a>
						</div>
						<div class="seven">
							<a onclick="baseDivTwoColRightNarrow()">
								Two Columns<br />Right Narrow<br />(75% 25%)<br />
								<?php include('includes/l-two-col-right-narrow-thumb.inc') ?>
							</a>
						</div>



						<!-- 3 col
<a onclick="baseDivThreeCol()">
		Three Columns<br />(25% 50% 25%)<br />
		<?php include('includes/l-three-col-thumb.inc') ?>
</a>
<a onclick="baseDivThreeColEven()">
		Three Columns<br />Even<br />(33.333% 33.333% 33.333%)<br />
		<?php include('includes/l-three-col-even-thumb.inc') ?>
</a>
-->
						<!-- 4 col
<a onclick="baseFourThreeColEven()">
		Four Columns<br />Even<br />(25% 25% 25% 25%)<br />
		<?php include('includes/l-four-col-even-thumb.inc') ?>
</a>
 -->
						<!-- 5 col
<a onclick="baseFiveThreeColEven()">
		Five Columns<br />Even<br />(20% 20% 20% 20% 20%)<br />
		<?php include('includes/l-five-col-even-thumb.inc') ?>
</a>
 -->
						<!-- 6 col
<a onclick="baseDivSixColEven()">
		Six Columns<br />Even<br />(18.25% 18.25% 18.25% 18.25% 18.25% 18.25%)<br />
		<?php include('includes/l-six-col-even-thumb.inc') ?>
</a>
 -->
					</div>
					<!--
		<h2>Column Two</h2>
		<div class="thumb-switcher column-two">
			<div class="seven">
				<a onclick="firstColumnTwoColLeftNarrow()">Two Columns<br />Left Narrow<br />(25% 75%)<br />
					<?php include('includes/l-two-col-left-narrow-thumb.inc') ?>
				</a>
			</div>
			<div class="seven">
				<a onclick="firstColumnTwoColLeft()">
					Two Columns<br />33/66-Split<br />(33.333% 66.666%)<br />
					<?php include('includes/l-two-col-left-thumb.inc') ?>
				</a>
			</div>
			<div class="seven">
				<a onclick="firstColumnTwoColRightWide()">
					Two Columns<br />42/58-Split<br />(41.666% 58.333%)<br />
					<?php include('includes/l-two-col-right-wide-thumb.inc') ?>
				</a>
			</div>
			<div class="seven">
				<a onclick="firstColumnTwoColEven()">
					Two Columns<br />Even<br />(50% 50%)<br />
					<?php include('includes/l-two-col-even-thumb.inc') ?>
				</a>
			</div>
			<div class="seven">
				<a onclick="firstColumnTwoColLeftWide()">
					Two Columns<br />58/42-Split<br />(58.333% 41.666%)<br />
					<?php include('includes/l-two-col-left-wide-thumb.inc') ?>
				</a>
			</div>
			<div class="seven">
				<a onclick="firstColumnTwoColRight()">
					Two Columns<br />66/33-Split<br />(66.666% 33.333%)<br />
					<?php include('includes/l-two-col-right-thumb.inc') ?>
				</a>
			</div>
			<div class="seven">
				<a onclick="firstColumnTwoColRightNarrow()">
					Two Columns<br />Right Narrow<br />(75% 25%)<br />
					<?php include('includes/l-two-col-right-narrow-thumb.inc') ?>
				</a>
			</div>
		</div>
		<h2>Column 3</h2>
		<div class="thumb-switcher column-thr">
			<div class="seven">
				<a onclick="secondColumnTwoColLeftNarrow()">Two Columns<br />Left Narrow<br />(25% 75%)<br />
					<?php include('includes/l-two-col-left-narrow-thumb.inc') ?>
				</a>
			</div>
			<div class="seven">
				<a onclick="secondColumnTwoColLeft()">
					Two Columns<br />33/66-Split<br />(33.333% 66.666%)<br />
					<?php include('includes/l-two-col-left-thumb.inc') ?>
				</a>
			</div>
			<div class="seven">
				<a onclick="secondColumnTwoColRightWide()">
					Two Columns<br />42/58-Split<br />(41.666% 58.333%)<br />
					<?php include('includes/l-two-col-right-wide-thumb.inc') ?>
				</a>
			</div>
			<div class="seven">
				<a onclick="secondColumnTwoColEven()">
					Two Columns<br />Even<br />(50% 50%)<br />
					<?php include('includes/l-two-col-even-thumb.inc') ?>
				</a>
			</div>

			<div class="seven">
				<a onclick="secondColumnTwoColLeftWide()">
					Two Columns<br />58/42-Split<br />(58.333% 41.666%)<br />
					<?php include('includes/l-two-col-left-wide-thumb.inc') ?>
				</a>
			</div>


			<div class="seven">
				<a onclick="secondColumnTwoColRight()">
					Two Columns<br />66/33-Split<br />(66.666% 33.333%)<br />
					<?php include('includes/l-two-col-right-thumb.inc') ?>
				</a>
			</div>
			<div class="seven">
				<a onclick="secondColumnTwoColRightNarrow()">
					Two Columns<br />Right Narrow<br />(75% 25%)<br />
					<?php include('includes/l-two-col-right-narrow-thumb.inc') ?>
				</a>
			</div>
		</div>
				-->
					<div class="l-row l-two-col-even nested-example" id="baseDivStyleSwitcher">
						<div class="l-col">
							<h4>column 1</h4>
							<div class="l-row l-three-col-even nested-example">
								<div class="l-col hide-overflow">
									<h4>column 2a</h4><br />
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
								</div>
								<div class="l-col hide-overflow">
									<h4>column 2b</h4><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
								</div>
								<div class="l-col hide-overflow">
									<h4>column 2c</h4><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
								</div>


							</div>
						</div>
						<div class="l-col">
							<h4>column 2</h4>
							<div class="l-row l-three-col-even nested-example">
								<div class="l-col hide-overflow">
									<h4>column 3a</h4><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
								</div>
								<div class="l-col hide-overflow">
									<h4>column 3b</h4><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
								</div>
								<div class="l-col hide-overflow">
									<h4>column 3c</h4><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem massa, semper nec eros a, lacinia porttitor nunc. Phasellus ex dolor, ultricies eu ornare ut, placerat non sapien. Suspendisse sagittis risus eu sem suscipit sodales. Vivamus ligula turpis, aliquam et maximus vel, tempor sed lectus. Mauris quis posuere massa. Ut quis diam sed mi placerat efficitur eu sed felis. Aliquam ipsum metus, bibendum vel ipsum sed, lobortis fringilla sem. Vestibulum ut odio id nulla commodo dignissim. Proin a pharetra tellus.<div class="fade"></div>
								</div>


							</div>
						</div>
					</div>
					<!-- end content -->
					<!-- end main template area -->
				</div>
				<div class="grid-right"></div>
			</div>
			<!-- end master layout-->
		</section>
		<?php include('../includes/footer.inc'); ?>
	</main>
</body>

</html>