<h1 class="l-border-bottom l-border-thin">
    <?=$pageTitle?>
</h1>
<p>Although crude oil prices receive a lot of media attention, consumers purchase petroleum products refined from crude oil rather than the crude oil itself. Refiners produce many petroleum products from crude oil for a wide range of applications. Prices for some petroleum products, such as gasoline, are very visible to consumers, while others are much less so. This section focuses on the two most prominent groups of petroleum products&#8212;gasoline and distillate (or diesel fuel).</p>
<p>Graphs are updated with new data on a monthly, quarterly, and annual basis according to the schedule below.</p> <a href="<?php echo $rootPath; ?>/products/reports_presentations/product.pdf" class="ico pdf"><span>All graphs</span></a>
<div class="basic-table">
    <table class="basic-table full-width">
        <thead>
            <tr>
                <th scope="col">Graph update schedule by section</th>
                <th scope="col">Update frequency</th>
                <th scope="col">Last update</th>
            </tr>
        </thead>
        <tbody>
            <tr class="section" scope="row">
                <th colspan="3"><a href="balance.php">Balance</a></th>
            </tr>
            <tr>
                <td>Gasoline Inventories and gasoline 3rd minus 1st month futures contract</td>
                <td>
                    <?php echo $dataArray["PROD_BALANCE_1"]["frequency"]; ?>
                </td>
                <td>
                    <?php echo $dataArray["PROD_BALANCE_1"]["update_date"]; ?>
                </td>
            </tr>
            <tr>
                <td>Distillate Inventories and heating oil 3rd minus 1st month futures contract</td>
                <td>
                    <?php echo $dataArray["PROD_BALANCE_2"]["frequency"]; ?>
                </td>
                <td>
                    <?php echo $dataArray["PROD_BALANCE_2"]["update_date"]; ?>
                </td>
            </tr>
            <tr class="section" scope="row">
                <th colspan="3"><a href="trade.php">Trade</a></th>
            </tr>
            <tr>
                <td>U.S. total gasoline net imports</td>
                <td>
                    <?php echo $dataArray["PROD_TRADE_1"]["frequency"]; ?>
                </td>
                <td>
                    <?php echo $dataArray["PROD_TRADE_1"]["update_date"]; ?>
                </td>
            </tr>
            <tr>
                <td>U.S. total gasoline net imports by PADD</td>
                <td>
                    <?php echo $dataArray["PROD_TRADE_2"]["frequency"]; ?>
                </td>
                <td>
                    <?php echo $dataArray["PROD_TRADE_2"]["update_date"]; ?>
                </td>
            </tr>
            <tr>
                <td>U.S. distillate fuel net imports</td>
                <td>
                    <?php echo $dataArray["PROD_TRADE_3"]["frequency"]; ?>
                </td>
                <td>
                    <?php echo $dataArray["PROD_TRADE_3"]["update_date"]; ?>
                </td>
            </tr>
            <tr>
                <td>U.S. distillate fuel net imports by PADD</td>
                <td>
                    <?php echo $dataArray["PROD_TRADE_4"]["frequency"]; ?>
                </td>
                <td>
                    <?php echo $dataArray["PROD_TRADE_4"]["update_date"]; ?>
                </td>
            </tr>
            <tr class="section" scope="row">
                <th colspan="3"><a href="production.php">Production</a></th>
            </tr>
            <tr>
                <td>Gasoline refinery output</td>
                <td>
                    <?php echo $dataArray["PROD_OUT_1"]["frequency"]; ?>
                </td>
                <td>
                    <?php echo $dataArray["PROD_OUT_1"]["update_date"]; ?>
                </td>
            </tr>
            <tr>
                <td>Distillate refinery output</td>
                <td>
                    <?php echo $dataArray["PROD_OUT_2"]["frequency"]; ?>
                </td>
                <td>
                    <?php echo $dataArray["PROD_OUT_2"]["update_date"]; ?>
                </td>
            </tr>
            <tr>
                <td>Refinery output</td>
                <td>
                    <?php echo $dataArray["PROD_OUT_3"]["frequency"]; ?>
                </td>
                <td>
                    <?php echo $dataArray["PROD_OUT_3"]["update_date"]; ?>
                </td>
            </tr>
            <tr>
                <td>Production and futures prices</td>
                <td>
                    <?php echo $dataArray["PROD_OUT_4"]["frequency"]; ?>
                </td>
                <td>
                    <?php echo $dataArray["PROD_OUT_4"]["update_date"]; ?>
                </td>
            </tr>
            <tr class="section" scope="row">
                <th colspan="3"><a href="prices.php">Spot Prices</a></th>
            </tr>
            <tr>
                <td>Gasoline spot prices</td>
                <td>
                    <?php echo $dataArray["PROD_SPOT_1"]["frequency"]; ?>
                </td>
                <td>
                    <?php echo $dataArray["PROD_SPOT_1"]["update_date"]; ?>
                </td>
            </tr>
            <tr>
                <td>Distillate spot prices</td>
                <td>
                    <?php echo $dataArray["PROD_SPOT_2"]["frequency"]; ?>
                </td>
                <td>
                    <?php echo $dataArray["PROD_SPOT_2"]["update_date"]; ?>
                </td>
            </tr>
            <tr>
                <td>RBOB futures price and crack spread</td>
                <td>
                    <?php echo $dataArray["PROD_SPOT_3"]["frequency"]; ?>
                </td>
                <td>
                    <?php echo $dataArray["PROD_SPOT_3"]["update_date"]; ?>
                </td>
            </tr>
            <tr>
                <td>Heating oil futures price and crack spread</td>
                <td>
                    <?php echo $dataArray["PROD_SPOT_4"]["frequency"]; ?>
                </td>
                <td>
                    <?php echo $dataArray["PROD_SPOT_4"]["update_date"]; ?>
                </td>
            </tr>
            <tr>
                <td>RBOB - Brent Crack Spread Range</td>
                <td>
                    <?php echo $dataArray["PROD_SPOT_5"]["frequency"]; ?>
                </td>
                <td>
                    <?php echo $dataArray["PROD_SPOT_5"]["update_date"]; ?>
                </td>
            </tr>
            <tr>
                <td>ULSD - Brent Crack Spread Ranges</td>
                <td>
                    <?php echo $dataArray["PROD_SPOT_6"]["frequency"]; ?>
                </td>
                <td>
                    <?php echo $dataArray["PROD_SPOT_6"]["update_date"]; ?>
                </td>
            </tr>
            <tr class="section" scope="row">
                <th colspan="3"><a href="financial_markets.php">Financial Markets</a></th>
            </tr>
            <tr>
                <td>Average daily open interest of petroleum product futures contracts</td>
                <td>
                    <?php echo $dataArray["PROD_FIN_1"]["frequency"]; ?>
                </td>
                <td>
                    <?php echo $dataArray["PROD_FIN_1"]["update_date"]; ?>
                </td>
            </tr>
            <tr>
                <td>Average daily volume of petroleum product futures contracts</td>
                <td>
                    <?php echo $dataArray["PROD_FIN_2"]["frequency"]; ?>
                </td>
                <td>
                    <?php echo $dataArray["PROD_FIN_2"]["update_date"]; ?>
                </td>
            </tr>
            <tr>
                <td>U.S. exchange-traded futures positions by money managers</td>
                <td>
                    <?php echo $dataArray["PROD_FIN_3"]["frequency"]; ?>
                </td>
                <td>
                    <?php echo $dataArray["PROD_FIN_3"]["update_date"]; ?>
                </td>
            </tr>
            <tr class="section" scope="row">
                <th colspan="3"><a href="consumption.php">Consumption</a></th>
            </tr>
            <tr>
                <td>Petroleum product consumption</td>
                <td>
                    <?php echo $dataArray["PROD_CONS_1"]["frequency"]; ?>
                </td>
                <td>
                    <?php echo $dataArray["PROD_CONS_1"]["update_date"]; ?>
                </td>
            </tr>
            <tr>
                <td>U.S. consumption of gasoline and retail gasoline prices</td>
                <td>
                    <?php echo $dataArray["PROD_CONS_2"]["frequency"]; ?>
                </td>
                <td>
                    <?php echo $dataArray["PROD_CONS_2"]["update_date"]; ?>
                </td>
            </tr>
            <tr>
                <td>U.S. consumption of distillate and retail heating oil prices</td>
                <td>
                    <?php echo $dataArray["PROD_CONS_3"]["frequency"]; ?>
                </td>
                <td>
                    <?php echo $dataArray["PROD_CONS_3"]["update_date"]; ?>
                </td>
            </tr>
        </tbody>
    </table>
</div>