<?php 

$selectName 	= 'crude-oil';

$link00url 		= 'index.php';
$link00id 		= 'crude-oil';
$link00label 	= 'Crude Oil';

$link01url 		= 'spot_prices.php';
$link01id 		= 'spot-prices';
$link01label 	= 'Spot Prices';

$link02url 		= 'supply-nonopec.php';
$link02id 		= 'supply-nonopec';
$link02label 	= 'Supply Non-OPEC';

$link03url 		= 'supply-opec.php';
$link03id 		= 'supply-opec';
$link03label 	= 'Supply OPEC';

$link04url 		= 'balance.php';
$link04id 		= 'balance';
$link04label 	= 'Balance';

$link05url 		= 'financial_markets.php';
$link05id 		= 'financial-markets';
$link05label 	= 'Financial Markets';

$link06url 		= 'demand-nonoecd.php';
$link06id 		= 'demand-nonoecd';
$link06label 	= 'Demand Non-OECD';

$link07url 		= 'demand-oecd.php';
$link07id 		= 'demand-oecd';
$link07label 	= 'Demand OECD';
?>
<style>

@media (min-width: 1px) {
 .tab-and-select {
        padding-left: 12px;
        padding-right: 12px;
    }
}
@media (min-width: 480px) {
    .tab-and-select {
        width: 50vw;
    }
}

@media (min-width: 1025px) {
    .tab-and-select {
        width: unset;
    }
}




</style>
<form class="tab-and-select" style="margin-top: 2em">
    <ul class="select">
        <li>
            <input class="select__close" type="radio" name="<?=$selectName?>" id="<?=$selectName?>--close" value="" />
            <span class="select__label select__label--placeholder">Select</span>
        </li>
        <li class="select__items">
            <input class="select__expand" type="radio" name="<?=$selectName?>" id="<?=$selectName?>--opener" />
            <label class="select__close--label" for="<?=$selectName?>--close"></label>
            <ul class="select__options">
                <li class="select__option <?php if ( $linkPage == 'link01page') {?>select__active<?php } ?>">
                    <input class="select__input" type="radio" name="<?=$selectName?>" id="<?=$link01id?>" />
                    <label class="select__label" for="<?=$link01id?>"><a href="<?=$link01url?>" title="<?=$link01label?>"><?=$link01label?></a></label>
                </li>
                <li class="select__option <?php if ( $linkPage == 'link02page') {?>select__active<?php } ?>">
                    <input class="select__input" type="radio" name="<?=$selectName?>" id="<?=$link02id?>" />
                    <label class="select__label" for="<?=$link02id?>"><a href="<?=$link02url?>" title="<?=$link02label?>"><?=$link02label?></a></label>
                </li>
                <li class="select__option <?php if ( $linkPage == 'link03page') {?>select__active<?php } ?>">
                    <input class="select__input" type="radio" name="<?=$selectName?>" id="<?=$link03id?>" />
                    <label class="select__label" for="<?=$link03id?>"><a href="<?=$link03url?>" title="<?=$link03label?>"><?=$link03label?></a></label>
                </li>
                <li class="select__option <?php if ( $linkPage == 'link04page') {?>select__active<?php } ?>">
                    <input class="select__input" type="radio" name="<?=$selectName?>" id="<?=$link04id?>" />
                    <label class="select__label" for="<?=$link04id?>"><a href="<?=$link04url?>" title="<?=$link04label?>"><?=$link04label?></a></label>
                </li>
                <li class="select__option <?php if ( $linkPage == 'link05page') {?>select__active<?php } ?>">
                    <input class="select__input" type="radio" name="<?=$selectName?>" id="<?=$link05id?>" />
                    <label class="select__label" for="<?=$link05id?>"><a href="<?=$link05url?>" title="<?=$link05label?>"><?=$link05label?></a></label>
                </li>
                <li class="select__option <?php if ( $linkPage == 'link06page') {?>select__active<?php } ?>">
                    <input class="select__input" type="radio" name="<?=$selectName?>" id="<?=$link06id?>" />
                    <label class="select__label" for="<?=$link06id?>"><a href="<?=$link06url?>" title="<?=$link06label?>"><?=$link06label?></a></label>
                </li>
                <li class="select__option <?php if ( $linkPage == 'link07page') {?>select__active<?php } ?>">
                    <input class="select__input" type="radio" name="<?=$selectName?>" id="<?=$link07id?>" />
                    <label class="select__label" for="<?=$link07id?>"><a href="<?=$link07url?>" title="<?=$link07label?>"><?=$link07label?></a></label>
                </li>
            </ul>
            <label class="select__expand--label" for="<?=$selectName?>--opener"></label>
        </li>
    </ul>
</form>