<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./src/output.css" rel="stylesheet" />
</head>

<body class="bg-background container">
    <div class="pt-[20px] px-[20px] flex flex-col gap-14">
        <div class="flex flex-row gap-2 items-center">
            <img src="./src/img/logo.png" class="w-16 h-16">
            <h1 class="text-white font-bold text-3xl">crypo</h1>
        </div>
        <p class="text-white text-4xl font-extrabold" id="datetime"></p>
        <div class="grid grid-cols-3 gap-5 gap-y-5">
            <!-- TradingView Widget NEWS -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
                    {
                        "feedMode": "market",
                        "market": "crypto",
                        "isTransparent": false,
                        "displayMode": "regular",
                        "height": 550,
                        "colorTheme": "dark",
                        "locale": "id"
                    }
                </script>
            </div>
            <!-- TradingView Widget END -->

            <!-- TradingView Widget CHART -->
            <div class="col-span-2">
                <div class=""></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
                    {
                        "symbol": "BITSTAMP:BTCUSD",
                        "interval": "D",
                        "timezone": "Etc/UTC",
                        "theme": "dark",
                        "style": "1",
                        "locale": "en",
                        "height": 550,
                        "allow_symbol_change": true,
                        "calendar": false,
                        "support_host": "https://www.tradingview.com"
                    }
                </script>
            </div>
            <!-- TradingView Widget END -->

            <p id="test"></p>
        </div>
    </div>
</body>

<script type="module">
    import {
        getListLatestCoin
    } from "./models/api.js";

    // Function to update date and time
    setInterval(() => {
        const date = new Date();
        const options = {
            weekday: "long",
            day: "numeric",
            month: "long",
            year: "numeric",
            hour: "numeric",
            minute: "numeric",
            second: "numeric"
        };
        document.getElementById("datetime").innerHTML = date.toLocaleDateString("id-ID", options);
    }, 1000);

    /* Display the data
     * GET data using getListLatestCoin function
     * Display the data to the container using DOM
     * Uncomment this code below
     */

    getListLatestCoin({
        limit: 10
    }).then((data) => {
        console.log(data);

        for (let index = 0; index < data.length; index++) {
            document.getElementById("test").innerHTML += data.data[index].name + "<br>";
        }
    });
</script>

</html>