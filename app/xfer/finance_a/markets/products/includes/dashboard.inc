<style>
    :root {
        --hover-size: 80%;
    }
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
        background-image: url("./images/ui/arrows_back4a.png");
        aspect-ratio: 920 / 270;
        background-repeat: no-repeat;
        background-position: 13px 6px;
        background-size: contain;
        display: grid;
        grid-template-columns: repeat(4, 25%);
        grid-template-rows: repeat(4, 25%);
        max-width: 920px;
        max-height: 270px;
        margin-top: 10px;
    }

    .efm-container>div {
        background-repeat: no-repeat;
        aspect-ratio: 166 / 125;
        background-size: 80%;
        animation: hover-off 500ms cubic-bezier(0.46, 0.03, 0.52, 0.96) forwards;
    }


    .efm-container>div:hover {
        /*
        aspect-ratio: 199 / 150;
        */
        animation: hover-on 500ms cubic-bezier(0.46, 0.03, 0.52, 0.96) forwards;

    }

    .efm-container>div a {
        width: 100%;
        height: 100%;
        display: flex;
    }

    .efm-container .consumption {
        background-image: url("./images/ui/b_productconsumption_button_off.png");
background-position: top center;
        grid-column: 1;
        grid-row: 1 / 3;
    }

    .efm-container .consumption:hover {
        background-image: url("./images/ui/b_productconsumption_button_on.png");
    }


    .efm-container .production {
        background-image: url("./images/ui/b_productproduction_button_off.png");
background-position: top center;
        grid-column: 1;
        grid-row: 3 / 5;
    }

    .efm-container .production:hover {
        background-image: url("./images/ui/b_productproduction_button_on.png");
    }


    .efm-container .prices {
        background-image: url("./images/ui/b_productprice_button_off.png");
 background-position: center center;
        grid-column: 2;
        grid-row: 2 / 4;
    }

    .efm-container .prices:hover {
        background-image: url("./images/ui/b_productprice_button_on.png");
    }


    .efm-container .financial_markets {
        background-image: url("./images/ui/b_productfinancialmarkets_button_off.png");
 background-position: center center;
        grid-column: 3;
        grid-row: 2 / 4;
    }

    .efm-container .financial_markets:hover {
        background-image: url("./images/ui/b_productfinancialmarkets_button_on.png");
    }


    .efm-container .trade {
        background-image: url("./images/ui/b_producttrade_button_off.png");
background-position: top center;
        grid-column: 4;
        grid-row: 1 / 3;
    }

    .efm-container .trade:hover {
        background-image: url("./images/ui/b_producttrade_button_on.png");
    }



    .efm-container .balance {
        background-image: url("./images/ui/b_productbalance_button_off.png");
background-position: bottom center;
        grid-column: 4;
        grid-row: 3 / 5;
    }

    .efm-container .balance:hover {
        background-image: url("./images/ui/b_productbalance_button_on.png");
    }



    @keyframes hover-on {
        from {
            background-size: 80%;
        }

        to {
            background-size: var(--hover-size);
        }
    }

    @keyframes hover-off {
        from {
            background-size: var(--hover-size);
        }

        to {
            background-size: 80%;
        }
    }
</style>
<script>
    setTimeout(() => {
document.documentElement.style.setProperty("--hover-size", "90%");
}, 500);
</script>


<div class="efm-container">
    <div class="consumption">
        <a href="consumption.php" title="Consumption"><span class="sr-only">Consumption</span></a>
    </div>
    <div class="trade">
        <a href="trade.php" title="Trade"><span class="sr-only">Trade</span></a>
    </div>
    <div class="production">
        <a href="production.php" title="Production"><span class="sr-only">Production</span></a>
    </div>
    <div class="prices">
        <a href="prices.php" title="Prices"><span class="sr-only">Prices</span></a>
    </div>
    <div class="financial_markets">
        <a href="financial_markets.php" title="Financial Markets"><span class="sr-only">Financial Markets</span></a>
    </div>
    <div class="balance">
        <a href="balance.php" title="Balance"><span class="sr-only">Balance</span></a>
    </div>
</div>