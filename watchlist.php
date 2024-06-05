<!DOCTYPE html>
<html>

<head>
    <title>Crypo - Pantauan Crypto</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./src/output.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-background w-screen font-sans">
    <!-- Decoration -->
    <div class="absolute -z-10">
        <img src="assets/gradient2.svg" width="500px">
    </div>

    <div class="absolute -z-10 right-0">
        <img src="assets/gradient3.svg" width="500px">
    </div>

    <!-- Container -->
    <div class="w-full pt-[85px] px-[85px] flex flex-col gap-14">
        <div class="flex flex-row justify-between items-end">
            <!-- Header -->
            <a class="flex flex-row gap-2 items-center" href="index.php">
                <img src="./src/img/logo.png" class="w-16 h-16" />
                <h1 class="text-white font-bold text-3xl">crypo</h1>
            </a>

            <div class="flex flex-row">
                <a href="watchlist.php">
                    <button type="button" class="borderfocus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex gap-4 items-center focus:ring-gray-600 bg-gray-800 border-gray-700 text-white hover:bg-gray-700 me-2 mb-2">
                        <img src="./assets/star.svg" alt="">
                        Watchlist
                    </button>
                </a>
                <a href="portofolio.php">
                    <button type="button" class="borderfocus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex gap-4 items-center focus:ring-gray-600 bg-gray-800 border-gray-700 text-white hover:bg-gray-700 me-2 mb-2">
                        <img src="./assets/wallet-money.svg" alt="">
                        Portofolio
                    </button>
                </a>
            </div>
        </div>

        <!-- Judul -->
        <div class="grid-cols-2">
            <div class="flex flex-row justify-between items-center mb-5">
                <p class="text-white text-4xl font-extrabold">My Coin Watchlist</p>
            </div>
        </div>

        <!-- Table -->
        <div class="flex flex-row sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-end justify-between">
            <!-- Data Table Start -->
            <div class="w-full overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-400 rounded-xl overflow-hidden">
                    <thead class="text-sm font-extrabold bg-gray-700 text-white font-sora sticky top-0">
                        <tr>
                            <th scope="col" class="px-6 py-3 bg-gray-700">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3 bg-gray-700">
                                Price
                            </th>
                            <th scope="col" class="px-6 py-3 bg-gray-700">
                                1h%
                            </th>
                            <th scope="col" class="px-6 py-3 bg-gray-700">
                                24h%
                            </th>
                            <th scope="col" class="px-6 py-3 bg-gray-700">
                                7d%
                            </th>
                            <th scope="col" class="px-6 py-3 bg-gray-700">
                                Market cap
                            </th>
                            <th scope="col" class="px-6 py-3 bg-gray-700">
                                Volume
                            </th>
                            <th scope="col" class="px-6 py-3 bg-gray-700">
                                Latest7d
                            </th>
                            <th scope="col" class="px-6 py-3 bg-gray-700">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    </thead>
                    <tbody id="allDataTable" class="font-sora font-normal text-sm text-white">
                        <!-- Data rows go here -->
                    </tbody>
                </table>
            </div>
            <!-- Data Table End -->
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script type="module">
        import {
            getListLatestCoin
        } from "./models/api/getListLatestCoin.js";
        import {
            getLatestQuote
        } from "./models/api/getLatestQuote.js";
        import {
            removeFromWatchlist
        } from "./services/localstorage.js";

        let watchlist = JSON.parse(localStorage.getItem('watchlist')) || [];
        watchlist = watchlist.toString();

        // Fetch the data from the API
        getLatestQuote({
            "id": watchlist,
            "convert": "IDR"
        }).then((data) => {
            console.log(data);
            let watchlist = JSON.parse(localStorage.getItem('watchlist')) || [];
            watchlist.forEach((coin) => {
                displayTable(data.data[coin]);
            });
        });

        // Function to display data to the table
        function displayTable(data) {
            const th = document.createElement("th");
            th.scope = "row";
            th.className = "px-6 py-4";
            th.textContent = data.name;

            const td1 = document.createElement("td");
            td1.className = "px-6 py-4";
            td1.textContent = "Rp." + parseFloat(data.quote.IDR.price).toLocaleString("id-ID");

            const td2 = document.createElement("td");
            td2.className = parseFloat(data.quote.IDR.percent_change_1h) > 0.0 ? "px-6 py-4 text-greenCustom" : "px-6 py-4 text-redCustom";
            td2.textContent = data.quote.IDR.percent_change_1h + "%";

            const td3 = document.createElement("td");
            td3.className = parseFloat(data.quote.IDR.percent_change_24h) > 0.0 ? "px-6 py-4 text-greenCustom" : "px-6 py-4 text-redCustom";
            td3.textContent = data.quote.IDR.percent_change_24h + "%";

            const td4 = document.createElement("td");
            td4.className = parseFloat(data.quote.IDR.percent_change_7d) > 0.0 ? "px-6 py-4 text-greenCustom" : "px-6 py-4 text-redCustom";
            td4.textContent = data.quote.IDR.percent_change_7d + "%";

            const td5 = document.createElement("td");
            td5.className = "px-6 py-4";
            td5.textContent = "Rp." + parseFloat(data.quote.IDR.market_cap).toLocaleString("id-ID");

            const td6 = document.createElement("td");
            td6.className = "px-6 py-4 text-sm";
            td6.textContent = data.quote.IDR.volume_24h + " " + data.quote.IDR.volume_change_24h + " " + data.symbol;

            const td7 = document.createElement("td");
            td7.className = "px-6 py-4";

            const divTradingView = document.createElement("div");
            divTradingView.className = "tradingview-widget-container";
            const divWidget = document.createElement("div");
            divWidget.className = "tradingview-widget-container__widget";
            divTradingView.appendChild(divWidget);
            const script = document.createElement("script");
            script.type = "text/javascript";
            script.src = "https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js";
            script.async = true;
            script.textContent = `{
                "symbol": "CRYPTOCAP:${data.symbol}",
                "width": "250",
                "height": "100",
                "locale": "en",
                "dateRange": "1M",
                "colorTheme": "dark",
                "isTransparent": false,
                "autosize": false,
                "largeChartUrl": "",
                "chartOnly": true,
                "noTimeScale": true
            }`;
            divTradingView.appendChild(script);
            td7.appendChild(divTradingView);

            const td8 = document.createElement("td");
            td8.className = "px-6 py-4";
            const deleteIcon = document.createElement("img");
            deleteIcon.src = "assets/trash.svg";
            deleteIcon.alt = "Delete";
            deleteIcon.className = "w-5 h-5 cursor-pointer";
            deleteIcon.addEventListener("click", function() {
                if (removeFromWatchlist(data.id.toString())) {
                    window.location.reload();
                } else {
                    alert("Failed to remove from watchlist");
                }
            });
            td8.appendChild(deleteIcon);

            const tr = document.createElement("tr");
            tr.className = "bg-secondaryBg border-gray-700 hover:bg-gray-50 hover:bg-gray-600";
            tr.appendChild(th);
            tr.appendChild(td1);
            tr.appendChild(td2);
            tr.appendChild(td3);
            tr.appendChild(td4);
            tr.appendChild(td5);
            tr.appendChild(td6);
            tr.appendChild(td7);
            tr.appendChild(td8);

            const table = document.getElementById("allDataTable");
            table.appendChild(tr);
        }

        // Function change page to detail page
        function changePage(id, symbol) {
            const param = new URLSearchParams({
                "id": id,
                "symbol": symbol
            });
            window.location.href = "detailKoin.php?" + param.toString();
        }
    </script>
</body>

</html>