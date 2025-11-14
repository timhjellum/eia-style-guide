<?php 
$selectName 	= 'crude-oil';

$link00URL 		= 'index.php';
$link00label 	= 'Crude Oil';

$link01id 		= 'spot_prices';
$link01URL 		= 'spot_prices.php';
$link01label 	= 'Spot Prices';

$link02id 		= 'supply-nonopec';
$link02URL 		= 'supply-nonopec.php';
$link02label 	= 'Supply Non-OPEC';

$link03id 		= 'supply-opec';
$link03URL 		= 'supply-opec.php';
$link03label 	= 'Supply OPEC';

$link04id 		= 'balance';
$link04URL 		= 'balance.php';
$link04label 	= 'Balance';

$link05id 		= 'financial_markets';
$link05URL 		= 'financial_markets.php';
$link05label 	= 'Financial Markets';

$link06id 		= 'demand-nonoecd';
$link06URL 		= 'demand-nonoecd.php';
$link06label 	= 'Demand Non-OECD';

$link07id 		= 'demand-oecd';
$link07URL 		= 'demand-oecd.php';
$link07label 	= 'Demand OECD';
?>

<!--
ul>
	<li class="<?php if ( $linkPage == 'link02page') {?>active<?php } ?>"><a href="<?=$link02URL?>" title="<?=$link02label?>"><?=$link02label?></a></li>
</ul
-->

<form>
    <ul class="select">
        <li>
            <input class="select__close" type="radio" name="<?=$selectName?>" id="<?=$selectName?>--close" value="" />
            <span class="select__label select__label--placeholder">Select</span>
        </li>
        <li class="select__items">
            <input class="select__expand" type="radio" name="<?=$selectName?>" id="<?=$selectName?>--opener" />
            <label class="select__close--label" for="<?=$selectName?>--close"></label>
            <ul class="select__options">
                <li class="select__option <?php if ( $linkPage == 'link01page') {?>active<?php } ?>">
                    <input class="select__input" type="radio" name="<?=$selectName?>" id="<?=$link01id?>" />
                    <label class="select__label" for="<?=$link01id?>"><a href="<?=$link01URL?>" title="<?=$link01label?>">
                            <?=$link01label?>
                        </a></label>
                </li>
                <li class="select__option <?php if ( $linkPage == 'link02page') {?>active<?php } ?>">
                    <input class="select__input" type="radio" name="<?=$selectName?>" id="<?=$link02id?>" />
                    <label class="select__label" for="<?=$link02id?>"><a href="<?=$link02URL?>" title="<?=$link02label?>">
                            <?=$link02label?>
                        </a></label>
                </li>
                <li class="select__option <?php if ( $linkPage == 'link03page') {?>active<?php } ?>">
                    <input class="select__input" type="radio" name="<?=$selectName?>" id="<?=$link03id?>" />
                    <label class="select__label" for="<?=$link03id?>"><a href="<?=$link03URL?>" title="<?=$link03label?>">
                            <?=$link03label?>
                        </a></label>
                </li>
                <li class="select__option <?php if ( $linkPage == 'link04page') {?>active<?php } ?>">
                    <input class="select__input" type="radio" name="<?=$selectName?>" id="<?=$link04id?>" />
                    <label class="select__label" for="<?=$link04id?>"><a href="<?=$link04URL?>" title="<?=$link04label?>">
                            <?=$link04label?>
                        </a></label>
                </li>
                <li class="select__option <?php if ( $linkPage == 'link05page') {?>active<?php } ?>">
                    <input class="select__input" type="radio" name="<?=$selectName?>" id="<?=$link05id?>" />
                    <label class="select__label" for="<?=$link05id?>"><a href="<?=$link05URL?>" title="<?=$link05label?>">
                            <?=$link05label?>
                        </a></label>
                </li>
                <li class="select__option <?php if ( $linkPage == 'link06page') {?>active<?php } ?>">
                    <input class="select__input" type="radio" name="<?=$selectName?>" id="<?=$link06id?>" />
                    <label class="select__label" for="<?=$link06id?>"><a href="<?=$link06URL?>" title="<?=$link06label?>">
                            <?=$link06label?>
                        </a></label>
                </li>
                <li class="select__option <?php if ( $linkPage == 'link07page') {?>active<?php } ?>">
                    <input class="select__input" type="radio" name="<?=$selectName?>" id="<?=$link07id?>" />
                    <label class="select__label" for="<?=$link07id?>"><a href="<?=$link07URL?>" title="<?=$link07label?>">
                            <?=$link07label?>
                        </a></label>
                </li>
            </ul>
            <label class="select__expand--label" for="<?=$selectName?>--opener"></label>
        </li>
    </ul>
</form>