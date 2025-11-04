<div class="l-row l-full-width-col">
    <div class="l-col article">
        <h1>
            <?=$pageTitle?>
        </h1>
        <p>The seasonal consumption pattern of gasoline, with higher demand in the summer than in the winter, affects inventory management by refiners and end users. In the summer driving season, gasoline inventories tend to decline whereas in the fall and winter, gasoline inventories are replenished. Distillate inventories also exhibit seasonality based on distillate's use as a heating fuel in the winter months, although this effect has declined in recent years as distillate is increasingly used as a low-sulfur transportation fuel. In areas of the United States, such as the Northeast, where distillate is still widely used for heating, inventories display a more pronounced seasonal pattern of decreasing in the winter time and increasing in the summer.</p>

        <p>Because inventories can satisfy either current or future demand, their level is sensitive to the relationship between the current product prices and expectations of future prices. If market expectations indicate a change toward relatively stronger future demand or lower future supply, prices for futures contracts will tend to increase, encouraging inventory builds to satisfy the otherwise tightening future balance. On the other hand, a sharp loss of current production or unexpected increase in current consumption will tend to push up spot prices relative to futures prices and encourage inventory drawdowns to meet the current demand. The futures curve for gasoline, for example, exhibits the seasonality inherent to the product's consumption. Prices for summer months are higher, which encourages inventory builds in the transition months between seasons to satisfy future demand.</p>

        <div class="chart_r">
            <div class="chart_h">The shape of the gasoline futures curve spread is related to changes in gasoline inventories </div> <img src="<?php echo $rootPath; ?>/products/png/gasoline_inventories.png" alt="The shape of the gasoline futures curve spread is related to changes in gasoline inventories ">
            <div>
                <?php $chart = 'gasoline_inventories'; $updateDate = null; include(__DIR__ . '/data.php'); ?> Updated: Quarterly | Last Updated:
                <?php echo $updateDate[0]['update_date']; ?>
            </div>
        </div>

        <div class="chart_r">
            <div class="chart_h">The shape of the distillate futures curve spread is related to changes in distillate inventories </div> <img src="<?php echo $rootPath; ?>/products/png/distillate_inventories.png" alt="The shape of the distillate futures curve spread is related to changes in distillate inventories ">
            <div>
                <?php $chart = 'distillate_inventories'; $updateDate = null; include(__DIR__ . '/data.php'); ?> Updated: Quarterly | Last Updated:
                <?php echo $updateDate[0]['update_date']; ?>
            </div>

        </div>
    </div>
</div>