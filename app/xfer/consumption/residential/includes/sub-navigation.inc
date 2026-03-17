<?php

$globalTitle 		= 'U.S. Energy Information Administration (EIA)';
$reportTitle        = 'Residential Energy Consumption Survey (RECS)';
$pageTitle 			= 'Residential Energy Consumption Survey (RECS)';

$seeAll				= '<a href="../">Consumption &amp; Efficiency</a>';

$releaseDate        = ''; 
$nextReleaseDate    = '';
$fullReport         = '<span class="responsive-container"></span>';
$currentYear		= ''; 


$path 				= 'consumption';
$sectionname		= 'residential';
$sectionPath		= strtolower($sectionname);

////////// sub-navigation 01
////////// sub-navigation 01
////////// sub-navigation 01

$subNavLink01Label 	= 'Overview';


////////// sub-navigation 02
////////// sub-navigation 02
////////// sub-navigation 02

$subNavLink02Label 			= 'Data';
$subNavLink02URL 			= strtolower($subNavLink02Label);
$menuPath					= strtolower($subNavLink02Label);
$subNavMenu02Link01 		= '2020';
$subNavMenu02Link02 		= '2015';
$subNavMenu02Link03 		= '2009';
$subNavMenu02Link04 		= '2005';
$subNavMenu02Link05 		= '2001';
$subNavMenu02Link06 		= '1997';
$subNavMenu02Link07 		= '1993';
$subNavMenu02Link08 		= 'Previous';
$subNavMenu02Link08URL 		= strtolower($subNavMenu02Link08);

////////// sub-navigation 03
////////// sub-navigation 03
////////// sub-navigation 03

$subNavLink03URL 			= "reports.php";
$subNavLink03Label 			= "Analysis & Projections";


////////// sub-navigation 04 & 05
////////// sub-navigation 04 & 05
////////// sub-navigation 04 & 05

$glossaryURL 		= "/glossary?id=residential";
$glossaryLabel 		= "Glossary";
$faqURL 			= "/tools/faqs#residential";
$faqLabel 			= "FAQS";




$subjectids = "140,142";
$tags = "T86";
?>
<div class="l-row header l-full-width-col">
	<div class="title-banner bg-recs">
		<div class="see-all">
			<?=$seeAll?>
		</div>
		<h1>
			<?=$pageTitle?>
		</h1>
	</div>
	<a href="#page-content" class="eia-accessibility">Skip to page content</a>
	<div class="sub-navigation" id="page-sub-nav">
		<div class="left">
			<ul class="left-nav">
				<li class="<?php if($locale == 'overview') {?>active<?php } ?>">
					<a href="/<?=$path?>/<?=$sectionPath?>/">
						<?=$subNavLink01Label?>
					</a>
				</li>
				<li class="dropdown-data <?php if($locale == 'data') {?>active<?php } ?>">
					<a href="/<?=$path?>/<?=$sectionPath?>/<?=$subNavLink02URL?>" class="dropbtn">
						<?=$subNavLink02Label?><span class="ico sort-up"></span>
					</a>
					<div class="dropdown-data-content dropdown-content">
						<ul>
							<li><a href="/<?=$path?>/<?=$sectionPath?>/<?=$menuPath?>/<?$subNavMenu02Link01?>/">
									<?$subNavMenu02Link01?>
								</a></li>
							<li><a href="/<?=$path?>/<?=$sectionPath?>/<?=$menuPath?>/<?=$subNavMenu02Link02?>/">
									<?=$subNavMenu02Link02?>
								</a></li>
							<li><a href="/<?=$path?>/<?=$sectionPath?>/<?=$menuPath?>/<?=$subNavMenu02Link03?>/">
									<?=$subNavMenu02Link03?>
								</a></li>
							<li><a href="/<?=$path?>/<?=$sectionPath?>/<?=$menuPath?>/<?=$subNavMenu02Link04?>/">
									<?=$subNavMenu02Link04?>
								</a></li>
							<li><a href="/<?=$path?>/<?=$sectionPath?>/<?=$menuPath?>/<?=$subNavMenu02Link05?>/">
									<?=$subNavMenu02Link05?>
								</a></li>
							<li><a href="/<?=$path?>/<?=$sectionPath?>/<?=$menuPath?>/<?=$subNavMenu02Link06?>/">
									<?=$subNavMenu02Link06?>
								</a></li>
							<li><a href="/<?=$path?>/<?=$sectionPath?>/<?=$menuPath?>/<?=$subNavMenu02Link07?>/">
									<?=$subNavMenu02Link07?>
								</a></li>
							<li><a href="/<?=$path?>/<?=$sectionPath?>/<?=$menuPath?>/<?=$subNavMenu02Link08URL?>.php">
									<?=$subNavMenu02Link08?>
								</a></li>
								
						</ul>
					</div>
				</li>
				<li class="<?php if( $l2page == 'ap') { ?>active<?php } ?> <?php if( $locale ==  'reports') { ?>active<?php } ?>">
					<a href="/<?=$path?>/<?=$sectionPath?>/<?=$subNavLink03URL?>">
						<?=$subNavLink03Label?>
					</a>
				</li>
			</ul>
		</div>
		<div class="right">
			<span>
				<a href="<?=$glossaryURL?>">
					<?=$glossaryLabel?>
				</a>
				<a href="<?=$faqURL?>">
					<?=$faqLabel?>
				</a>
			</span>
		</div>
	</div>
</div>
<div id="page-content"></div>