<?php 

$selectName 	= 'products';

$productsURL 		= 'index.php';
$productsID 		= 'products';
$productsLabel 	= 'Products';

$pricesURL 		= 'prices.php';
$pricesID 		= 'prices';
$pricesLabel 	= 'Prices';

$consumptionURL 		= 'consumption.php';
$consumptionID 		= 'consumption';
$consumptionLabel 	= 'Consumption';

$tradeURL 		= 'trade.php';
$tradeID 		= 'trade';
$tradeLabel 	= 'Trade';

$balanceURL 		= 'balance.php';
$balanceID 		= 'balance';
$balanceLabel 	= 'Balance';

$financialMarketsURL 		= 'financial_markets.php';
$financialMarketsID 		= 'financial-markets';
$financialMarketsLabel 	= 'Financial Markets';

$productionURL 		= 'production.php';
$productionID 		= 'production';
$productionLabel 	= 'Production';

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
				<li class="select__option <?php if ( $linkPage == 'prices') {?>select__active<?php } ?>">
					<input class="select__input" type="radio" name="<?=$selectName?>" id="<?=$pricesID?>" />
					<label class="select__label" for="<?=$pricesID?>"><a href="<?=$pricesURL?>" title="<?=$pricesLabel?>"><?=$pricesLabel?></a></label>
				</li>
				<li class="select__option <?php if ( $linkPage == 'consumption') {?>select__active<?php } ?>">
					<input class="select__input" type="radio" name="<?=$selectName?>" id="<?=$consumptionID?>" />
					<label class="select__label" for="<?=$consumptionID?>"><a href="<?=$consumptionURL?>" title="<?=$consumptionLabel?>"><?=$consumptionLabel?></a></label>
				</li>
				<li class="select__option <?php if ( $linkPage == 'trade') {?>select__active<?php } ?>">
					<input class="select__input" type="radio" name="<?=$selectName?>" id="<?=$tradeID?>" />
					<label class="select__label" for="<?=$tradeID?>"><a href="<?=$tradeURL?>" title="<?=$tradeLabel?>"><?=$tradeLabel?></a></label>
				</li>
				<li class="select__option <?php if ( $linkPage == 'balance') {?>select__active<?php } ?>">
					<input class="select__input" type="radio" name="<?=$selectName?>" id="<?=$balanceID?>" />
					<label class="select__label" for="<?=$balanceID?>"><a href="<?=$balanceURL?>" title="<?=$balanceLabel?>"><?=$balanceLabel?></a></label>
				</li>
				<li class="select__option <?php if ( $linkPage == 'financialMarkets') {?>select__active<?php } ?>">
					<input class="select__input" type="radio" name="<?=$selectName?>" id="<?=$financialMarketsID?>" />
					<label class="select__label" for="<?=$financialMarketsID?>"><a href="<?=$financialMarketsURL?>" title="<?=$financialMarketsLabel?>"><?=$financialMarketsLabel?></a></label>
				</li>
				<li class="select__option <?php if ( $linkPage == 'production') {?>select__active<?php } ?>">
					<input class="select__input" type="radio" name="<?=$selectName?>" id="<?=$productionID?>" />
					<label class="select__label" for="<?=$productionID?>"><a href="<?=$productionURL?>" title="<?=$productionLabel?>"><?=$productionLabel?></a></label>
				</li>
			</ul>
			<label class="select__expand--label" for="<?=$selectName?>--opener"></label>
		</li>
	</ul>
</form>