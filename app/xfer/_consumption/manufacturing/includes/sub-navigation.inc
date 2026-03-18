<?php

$globalTitle 		= 'U.S. Energy Information Administration (EIA)';
$reportTitle        = 'Manufacturing Energy Consumption Survey (MECS)';
$pageTitle 			= 'Manufacturing Energy Consumption Survey (MECS)';

$seeAll				= '<a href="../">Consumption &amp; Efficiency</a>';

$releaseDate        = ''; 
$nextReleaseDate    = '';
$fullReport         = '<span class="responsive-container"></span>';
$currentYear		= ''; 


$path 						= 'consumption';
$sectionname				= 'manufacturing';
$sectionPath				= strtolower($sectionname);

////////// sub-navigation 01
////////// sub-navigation 01
////////// sub-navigation 01

$subNavLink01Label 			= 'Overview';


////////// sub-navigation 02
////////// sub-navigation 02
////////// sub-navigation 02

$subNavLink02Label 			= 'Data';
$subNavLink02URL 			= strtolower($subNavLink02Label);
$menuPath					= strtolower($subNavLink02Label);
$subNavMenu02Link01 		= '2022';
$subNavMenu02Link02 		= '2018';
$subNavMenu02Link03 		= '2014';
$subNavMenu02Link04 		= '2010';
$subNavMenu02Link05 		= '2006';
$subNavMenu02Link06 		= '2002';
$subNavMenu02Link07 		= '1998';
$subNavMenu02Link08 		= '1994';
$subNavMenu02Link09 		= 'Archive';
$subNavMenu02Link09URL 		= strtolower($subNavMenu02Link09);

////////// sub-navigation 03
////////// sub-navigation 03
////////// sub-navigation 03

$subNavLink03URL 			= "reports.php";
$subNavLink03Label 			= "Analysis & Projections";


////////// sub-navigation 04 & 05
////////// sub-navigation 04 & 05
////////// sub-navigation 04 & 05

$glossaryURL 				= "/glossary?id=manufacturing";
$glossaryLabel 				= "Glossary";
$faqURL 					= "/tools/faqs#manufacturing";
$faqLabel 					= "FAQS";




$subjectids = "140,142";
$tags = "T86";
?>
<div class="l-row header l-full-width-col">
	<div class="l-col title-banner bg-industrial">
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
							<li><a href="/<?=$path?>/<?=$sectionPath?>/<?=$menuPath?>/<?=$subNavMenu02Link08?>.php">
									<?=$subNavMenu02Link08?>
								</a></li>
							<li><a href="/<?=$path?>/<?=$sectionPath?>/<?=$menuPath?>/<?=$subNavMenu02Link09URL?>.php">
									<?=$subNavMenu02Link09?>
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