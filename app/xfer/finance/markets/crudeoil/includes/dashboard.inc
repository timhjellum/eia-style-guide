<style>
    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        clip-path: inset(50%);
        border: 0;
    }

    .efm-container {
        background-image: url(./images/ui/arrows_back2.png);
        aspect-ratio: 920 / 270;
        background-repeat: no-repeat;
        background-size: contain;
        display: grid;
        grid-template-columns: repeat(5, 20%);
        grid-template-rows: repeat(4, 25%);
        max-width: 920px;
        max-height: 270px;
        margin-top: 10px;

    }

    .efm-container>div {
        background-repeat: no-repeat;
        aspect-ratio: 166 / 125;
        background-size: 80%;
    }

    .efm-container>div a {
        width: 100%;
        height: 100%;
        display: flex;
    }

    .efm-container .supply-nonopec {
        background-image: url("./images/ui/supply_non_oecd_off.png");
        background-position: top center;
        grid-column: 1;
        grid-row: 1 / 3;
    }

    .efm-container .supply-nonopec:hover {
        background-image: url("./images/ui/supply_non_oecd_on.png");
    }

    .efm-container .demand_non_oecd {
        background-image: url("./images/ui/demand_non_oecd_off.png");
        background-position: top center;
        grid-column: 5;
        grid-row: 1 / 3;
    }

    .efm-container .demand_non_oecd:hover {
        background-image: url("./images/ui/demand_non_oecd_on.png");
    }

    .efm-container .supply_oecd {
        background-image: url("./images/ui/supply_oecd_off.png");
        background-position: bottom center;
        grid-column: 1;
        grid-row: 3 / 5;
    }

    .efm-container .supply_oecd:hover {
        background-image: url("./images/ui/supply_oecd_on.png");
    }

    .efm-container .balance {
        background-image: url("./images/ui/balance_off.png");
        background-position: center center;
        grid-column: 2;
        grid-row: 2 / 4;
    }

    .efm-container .balance:hover {
        background-image: url("./images/ui/balance_on.png");
    }

    .efm-container .spot_prices {
        background-image: url("./images/ui/spot_prices_off.png");
        background-position: center center;
        grid-column: 3;
        grid-row: 2 / 4;
    }

    .efm-container .spot_prices:hover {
        background-image: url("./images/ui/spot_prices_on.png");
    }

    .efm-container .financial_markets {
        background-image: url("./images/ui/financial_markets_off.png");
        background-position: center center;
        grid-column: 4;
        grid-row: 2 / 4;
    }

    .efm-container .financial_markets:hover {
        background-image: url("./images/ui/financial_markets_on.png");
    }

    .efm-container .demand_oecd {
        background-image: url("./images/ui/demand_oecd_off.png");
        background-position: bottom center;
        grid-column: 5;
        grid-row: 3 / 5;
    }

    .efm-container .demand_oecd:hover {
        background-image: url("./images/ui/demand_oecd_on.png");
    }
</style>

<div class="efm-container">
    <div class="supply-nonopec">
        <a href="supply-nonopec.php" title="Supply non-OECD"><span class="sr-only">Supply non-OECD</span></a>
    </div>
    <div class="demand_non_oecd">
        <a href="demand-nonoecd.php" title="Demand non-OECD"><span class="sr-only">Demand non-OECD</span></a>
    </div>
    <div class="supply_oecd">
        <a href="supply-opec.php" title="Supply OECD"><span class="sr-only">Supply OECD</span></a>
    </div>
    <div class="balance">
        <a href="balance.php" title="Balance"><span class="sr-only">Balance</span></a>
    </div>
    <div class="spot_prices">
        <a href="spot_prices.php" title="Spot Prices"><span class="sr-only">Spot Prices</span></a>
    </div>
    <div class="financial_markets">
        <a href="financial_markets.php" title="Financial Markets"><span class="sr-only">Financial Markets</span></a>
    </div>
    <div class="demand_oecd">
        <a href="demand-oecd.php" title="Demand OECD"><span class="sr-only">Demand OECD</span></a>
    </div>
</div>