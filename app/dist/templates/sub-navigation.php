<?php
require_once '../includes/variables.inc';
$globalTitle 	= 'U.S. Energy Information Administration (EIA)';
$section		= 'Themes';
$subSection		= 'Sub-navigation';

$sectionname 		= "Coal";
$l2id 				= 3;
$directory 			= "coal";
$subNavLink02URL 	= "data.php";
$subNavLink02Label 	= "Data";

$subNavLink03URL 	= "reports.php";
$subNavLink03Label 	= "Analysis & Projections";

$menu01link01URL 	= "data/browser/";
$menu01link01Label 	= "Coal Data Browser (interactive query tool with charting and mapping)";
$menu01link02URL 	= "data.php#summary";
$menu01link02Label 	= "Summary";
$menu01link03URL 	= "data.php#prices";
$menu01link03Label 	= "Prices";
$menu01link04URL 	= "data.php#reserves";
$menu01link04Label 	= "Reserves";
$menu01link05URL 	= "data.php#consumption";
$menu01link05Label 	= "Consumption";
$menu01link06URL 	= "data.php#production";
$menu01link06Label 	= "Production";
$menu01link07URL 	= "data.php#stocks";
$menu01link07Label 	= "Stocks";
$menu01link08URL 	= "data.php#imports";
$menu01link08Label 	= "Imports, exports & distribution";
$menu01link09URL 	= "data.php#coalplants";
$menu01link09Label 	= "Coal-fired electric power plants";
$menu01link10URL 	= "data.php#transrate";
$menu01link10Label 	= "Transportation costs to electric power sector";

$menu02Title01 		= "Major Topics";
$menu02Title02 		= "Find by";

$menu02link01URL 	= "browsebytag.php";
$menu02link01Label 	= "Alphabetical";

$menu02link02URL 	= "reports.php#/T192,T182,T198,T1564,T1568";
$menu02link02Label 	= "Recurring";

$menu02link03URL 	= "browsebytag.php?tagcloud";
$menu02link03Label 	= "Tag Cloud";

$glossaryURL 		= "/glossary/?id=coal";
$glossaryLabel 		= "Glossary";
$faqURL 			= "/tools/faqs/";
$faqLabel 			= "FAQS";

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

					<div class="l-row header l-full-width-col">
						<div class="title-banner bg-coal">
							<h1>
								<?php echo "$sectionname"?>
							</h1>
						</div>
						<a href="#page-content" class="eia-accessibility">Skip to page content</a>
						<div class="sub-navigation" id="page-sub-nav">
							<div class="left">
								<ul class="left-nav">
									<li class="<?php if ( $locale == 'overview') {?>active<?php } ?>"><a href="/<?=$directory?>/">Overview</a></li>
									<li class="dropdown-data <?php if ( $locale == 'data') {?>active<?php } ?>">
										<a href="/<?=$directory?>/<?=$subNavLink02URL?>" class="dropbtn">
											<?=$subNavLink02Label?><span class="ico sort-up"></span>
										</a>
										<div class="dropdown-data-content dropdown-content">
											<ul>
												<li>
													<a href="/<?=$directory?>/<?=$menu01link01URL?>">
														<?=$menu01link01Label?>
													</a>
												</li>
												<li>
													<a href="/<?=$directory?>/<?=$menu01link02URL?>">
														<?=$menu01link02Label?>
													</a>
												</li>
												<li>
													<a href="/<?=$directory?>/<?=$menu01link03URL?>">
														<?=$menu01link03Label?>
													</a>
												</li>
												<li>
													<a href="/<?=$directory?>/<?=$menu01link04URL?>">
														<?=$menu01link04Label?>
													</a>
												</li>
												<li>
													<a href="/<?=$directory?>/<?=$menu01link05URL?>">
														<?=$menu01link05Label?>
													</a>
												</li>
												<li>
													<a href="/<?=$directory?>/<?=$menu01link06URL?>">
														<?=$menu01link06Label?>
													</a>
												</li>
												<li>
													<a href="/<?=$directory?>/<?=$menu01link07URL?>">
														<?=$menu01link07Label?>
													</a>
												</li>
											</ul>
										</div>
									</li>
									<li class="dropdown-analysis-projections <?php if( $l2page ==  'ap') { ?>active<?php } ?> <?php if( $locale ==  'reports') { ?>active<?php } ?>">
										<a href="/<?=$directory?>/<?=$subNavLink03URL?>" class="dropbtn">
											<?=$subNavLink03Label?><span class="ico sort-up"></span>
										</a>
										<div class="dropdown-analysis-projections-content dropdown-content">
											<!-- 66.666% / 33.333% -->
											<div class="l-row l-two-col-right">
												<div class="l-col">
													<h4>
														<?=$menu02Title01?>
													</h4>
												</div>
												<div class="l-col">
													<h4>
														<?=$menu02Title02?>
													</h4>
												</div>
											</div>
											<!-- 66.666% / 33.333% -->
											<div class="l-row l-two-col-right">
												<div class="l-col">
													<!-- 50% | 50% -->
													<div class="l-row l-two-col-even">
														<?php include("global/analysis-projections/sub-navigation-menus.inc") ?>
													</div>
												</div>
												<ul class="l-col">
													<li>
														<a href="/<?=$directory?>/<?=$menu02link01URL?>">
															<?=$menu02link01Label?>
														</a>
													</li>
													<li>
														<a href="/<?=$directory?>/<?=$menu02link02URL?>">
															<?=$menu02link02Label?>
														</a>
													</li>
													<li>
														<a href="/<?=$directory?>/<?=$menu02link03URL?>">
															<?=$menu02link03Label?>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="right">
								<span><a href="<?=$glossaryURL?>">
										<?=$glossaryLabel?>
									</a><a href="<?=$faqURL?>">
										<?=$faqLabel?>
									</a></span>
							</div>
						</div>
					</div>
					<div id="page-content"></div>

					<!-- end main template area -->
				</div>
				<div class="grid-right"></div>
			</div>
			<!-- end master layout-->
		</section>
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

					<div class="l-row header l-full-width-col">
						<div class="title-banner bg-coal">
							<h1>
								<?php echo "$sectionname"?>
							</h1>
						</div>
						<a href="#page-content" class="eia-accessibility">Skip to page content</a>
						<div class="sub-navigation" id="page-sub-nav">
							<div class="left">
								<ul class="left-nav">
									<li class="<?php if ( $locale == 'overview') {?>active<?php } ?>"><a href="/<?=$directory?>/">Overview</a></li>
									<li class="dropdown-data <?php if ( $locale == 'data') {?>active<?php } ?>">
										<a href="/<?=$directory?>/<?=$subNavLink02URL?>" class="dropbtn">
											<?=$subNavLink02Label?><span class="ico sort-up"></span>
										</a>
										<div class="dropdown-data-content dropdown-content">
											<ul>
												<li>
													<a href="/<?=$directory?>/<?=$menu01link01URL?>">
														<?=$menu01link01Label?>
													</a>
												</li>
												<li>
													<a href="/<?=$directory?>/<?=$menu01link02URL?>">
														<?=$menu01link02Label?>
													</a>
												</li>
												<li>
													<a href="/<?=$directory?>/<?=$menu01link03URL?>">
														<?=$menu01link03Label?>
													</a>
												</li>
												<li>
													<a href="/<?=$directory?>/<?=$menu01link04URL?>">
														<?=$menu01link04Label?>
													</a>
												</li>
												<li>
													<a href="/<?=$directory?>/<?=$menu01link05URL?>">
														<?=$menu01link05Label?>
													</a>
												</li>
												<li>
													<a href="/<?=$directory?>/<?=$menu01link06URL?>">
														<?=$menu01link06Label?>
													</a>
												</li>
												<li>
													<a href="/<?=$directory?>/<?=$menu01link07URL?>">
														<?=$menu01link07Label?>
													</a>
												</li>
											</ul>
										</div>
									</li>
									<li class="dropdown-analysis-projections <?php if( $l2page ==  'ap') { ?>active<?php } ?> <?php if( $locale ==  'reports') { ?>active<?php } ?>">
										<a href="/<?=$directory?>/<?=$subNavLink03URL?>" class="dropbtn">
											<?=$subNavLink03Label?><span class="ico sort-up"></span>
										</a>
										<div class="dropdown-analysis-projections-content dropdown-content">
											<!-- 66.666% / 33.333% -->
											<div class="l-row l-two-col-right">
												<div class="l-col">
													<h4>
														<?=$menu02Title01?>
													</h4>
												</div>
												<div class="l-col">
													<h4>
														<?=$menu02Title02?>
													</h4>
												</div>
											</div>
											<!-- 66.666% / 33.333% -->
											<div class="l-row l-two-col-right">
												<div class="l-col">
													<!-- 50% | 50% -->
													<div class="l-row l-two-col-even">
														<?php include("global/analysis-projections/sub-navigation-menus.inc") ?>
													</div>
												</div>
												<ul class="l-col">
													<li>
														<a href="/<?=$directory?>/<?=$menu02link01URL?>">
															<?=$menu02link01Label?>
														</a>
													</li>
													<li>
														<a href="/<?=$directory?>/<?=$menu02link02URL?>">
															<?=$menu02link02Label?>
														</a>
													</li>
													<li>
														<a href="/<?=$directory?>/<?=$menu02link03URL?>">
															<?=$menu02link03Label?>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="right">
								<ul class="right-nav">
									<li><a href="<?=$glossaryURL?>"><?=$glossaryLabel?></a></li>
									<li><a href="<?=$faqURL?>"><?=$faqLabel?></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div id="page-content"></div>
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