<?php 
$link00url 		= '/consumption/commercial/about.php';
$link00label	= 'About the CBECS';

$link01url 		= '/consumption/commercial/about.php';
$link01label 	= 'Survey Background and Technical Information';

//$link02url 		= '/consumption/manufacturing/maps.php';
//$link02label 	= 'Maps';

//$link03url 		= '/consumption/manufacturing/terms.php';
//$link03label	= 'MECS Terminology';

//$link04url		= 'data/archive/';
//$link04label 	= 'Archives';

//$link05url 		= '/pressroom/releases/press383.php';
//$link05label 	= 'First 2010 Data Press Release';

//$link06url 		= 'reports/2010/decrease_use.php';
//$link06label 	= '2010 Data Brief';

//$link07url 		= '/consumption/commercial/';
//$link07label 	= 'Commercial Buildings - CBECS';

//$link08url 		= '/consumption/residential/';
//$link08label 	= 'Residential - RECS';

//$link09url 		= '/consumption/archive/rtecs/contents.html';
//$link09label 	= 'Transportation';

?>

<div class="secondary" data-active="true">
	<ul>
		<li class="<?php if ( $linkPage == 'link01page') {?>active<?php } ?>"><a href="<?=$link01url?>" title="<?=$link01label?>"><?=$link01label?></a></li>
		<!-- <li><a href="/consumption/manufacturing/xls/MECS Attributes.xlsx">Attributes <span class="ico xls"><span>XLSX</span></span></a></li> -->
		<li class="<?php if ( $linkPage == 'link02page') {?>active<?php } ?>"><a href="<?=$link02url?>" title="<?=$link02label?>"><?=$link02label?></a></li>
		<!-- <li class="<?php if ( $linkPage == 'link03page') {?>active<?php } ?>"><a href="<?=$link03url?>" title="<?=$link03label?>"><?=$link03label?></a></li> -->
		<!-- <li class="<?php if ( $linkPage == 'link04page') {?>active<?php } ?>"><a href="<?=$link04url?>" title="<?=$link04label?>"><?=$link04label?></a></li> -->
	</ul>
</div>
<!-- 
<div class="secondary" data-active="true">
<ul>
<li class="head">Features</li>
<li class="<?php if ( $linkPage == 'link05page') {?>active<?php } ?>"><a href="<?=$link05url?>" title="<?=$link05label?>"><?=$link05label?></a></li>
<li class="<?php if ( $linkPage == 'link06page') {?>active<?php } ?>"><a href="<?=$link06url?>" title="<?=$link06label?>"><?=$link06label?></a></li>
</ul>
</div>
<div class="secondary" data-active="true">
<ul>
<li class="head">Other End Use Surveys</li>
<li class="<?php if ( $linkPage == 'link07page') {?>active<?php } ?>"><a href="<?=$link07url?>" title="<?=$link07label?>"><?=$link07label?></a></li>
<li class="<?php if ( $linkPage == 'link08page') {?>active<?php } ?>"><a href="<?=$link08url?>" title="<?=$link08label?>"><?=$link08label?></a></li>
<li class="<?php if ( $linkPage == 'link09page') {?>active<?php } ?>"><a href="<?=$link09url?>" title="<?=$link09label?>"><?=$link09label?></a></li>
</ul>
</div>
-->
<div class="secondary">
	<ul>
		<li class="head">Other End Use Surveys</li>
		<li class="l-row l-two-col-left-narrow icon-row l-padding-medium-bottom">
			<i class="l-col ico consumption-surveys residential"></i>
			<a class="l-col" href="/consumption/residential/">Residential Energy Consumption Survey (RECS)</a>
		</li>
		<br /><br />
		<li class="l-row l-two-col-left-narrow icon-row">
			<i class="l-col ico consumption-surveys commercial"></i>
			<a class="l-col" href="/consumption/commercial/">Commercial Building Energy Consumption Survey (CBECS)</a>
		</li>
		<br /><br />
		<li class="l-row l-two-col-left-narrow icon-row">
			<i class="l-col ico consumption-surveys industrial"></i>
			<a class="l-col" href="/consumption/manufacturing/">Manufacturing Energy Consumption Survey (MECS)</a>
		</li>
	</ul>
</div>
<!--
<div class="secondary">
<ul>
<li class="head">DOE Uses MECS Data</li>
<li><a href="http://www1.eere.energy.gov/manufacturing/resources/footprints.html">Manufacturing Energy and Carbon Footprints</a></li>
<li><img src="/consumption/manufacturing/reports/2010/images/doe_mecs.jpg"></li>
</ul>
</div>
-->