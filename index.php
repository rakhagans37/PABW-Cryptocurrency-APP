<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" / <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./src/output.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-background w-screen font-sans">
    <div class="w-full pt-[85px] px-[85px] flex flex-col gap-14">
        <!-- Header -->
        <div class="flex flex-row gap-2 items-center">
            <img src="./src/img/logo.png" class="w-16 h-16" />
            <h1 class="text-white font-bold text-3xl">crypo</h1>
        </div>

        <!-- Date and Time -->
        <p class="text-white text-4xl font-extrabold" id="datetime"></p>

        <!-- Widget -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 gap-y-5">
            <!-- TradingView Widget NEWS -->
            <div class="md:col-span-1">
                <div class="tradingview-widget-container__widget"></div>
                <div class="tradingview-widget-copyright">
                    <a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a>
                </div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
                    {
                        "feedMode": "market",
                        "market": "crypto",
                        "isTransparent": false,
                        "displayMode": "regular",
                        "height": 800,
                        "colorTheme": "dark",
                        "locale": "id"
                    }
                </script>
            </div>
            <!-- TradingView Widget END -->

            <!-- TradingView Widget CHART -->
            <div class="md:col-span-2">
                <div class="tradingview-widget-container__widget"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
                    {
                        "symbol": "CRYPTOCAP:BTC",
                        "interval": "D",
                        "timezone": "Etc/UTC",
                        "theme": "dark",
                        "style": "1",
                        "locale": "en",
                        "height": 800,
                        "allow_symbol_change": true,
                        "calendar": false,
                        "support_host": "https://www.tradingview.com"
                    }
                </script>
            </div>
            <!-- TradingView Widget END -->
        </div>
        <!-- Widget END -->

        <!-- Table -->
        <div class="relative overflow-hidden shadow-md">
            <div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input type="text" id="table-search" class="block p-2 ps-10 text-sm border rounded-lg w-80 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500" placeholder="Search for items">
                </div>
                <div>
                    <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio" class="inline-flex items-center  border focus:outline-none focus:ring-4 font-medium rounded-lg text-sm px-3 py-1.5 bg-gray-800 text-white border-gray-600 hover:bg-gray-700 hover:border-gray-600 focus:ring-gray-700" type="button">
                        <svg class="w-3 h-3  text-gray-400 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z" />
                        </svg>
                        Last 30 days
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownRadio" class="z-10 hidden w-48 divide-yrounded-lg shadow bg-gray-700 divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 3847.5px, 0px);">
                        <ul class="p-3 space-y-1 text-smtext-gray-200" aria-labelledby="dropdownRadioButton">
                            <li>
                                <div class="flex items-center p-2 rounded hover:bg-gray-600">
                                    <input id="filter-radio-example-1" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 focus:ring-blue-600 ring-offset-gray-800 focus:ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
                                    <label for="filter-radio-example-1" class="w-full ms-2 text-sm font-medium rounded text-gray-300">Last day</label>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center p-2 rounded hover:bg-gray-600">
                                    <input checked="" id="filter-radio-example-2" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 focus:ring-blue-600 ring-offset-gray-800 focus:ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
                                    <label for="filter-radio-example-2" class="w-full ms-2 text-sm font-medium rounded text-gray-300">Last 7 days</label>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center p-2 rounded hover:bg-gray-600">
                                    <input id="filter-radio-example-3" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 focus:ring-blue-600 ring-offset-gray-800 focus:ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
                                    <label for="filter-radio-example-3" class="w-full ms-2 text-sm font-medium rounded text-gray-300">Last 30 days</label>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center p-2 rounded hover:bg-gray-600">
                                    <input id="filter-radio-example-4" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 focus:ring-blue-600 ring-offset-gray-800 focus:ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
                                    <label for="filter-radio-example-4" class="w-full ms-2 text-sm font-medium rounded text-gray-300">Last month</label>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center p-2 rounded hover:bg-gray-600">
                                    <input id="filter-radio-example-5" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 focus:ring-blue-600 ring-offset-gray-800 focus:ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
                                    <label for="filter-radio-example-5" class="w-full ms-2 text-sm font-medium rounded text-gray-300">Last year</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <table class="w-full text-sm text-left rtl:text-right text-gray-400">
                <thead class="text-sm font-extrabold bg-gray-700 text-white font-sora">
                    <tr>
                        <th scope="col" class="p-4">
                            <div class="flex items-center">
                                <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 rounded focus:ring-blue-600 ring-offset-gray-800 focus:ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
                                <label for="checkbox-all-search" class="sr-only">checkbox</label>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            1h%
                        </th>
                        <th scope="col" class="px-6 py-3">
                            24h%
                        </th>
                        <th scope="col" class="px-6 py-3">
                            7d%
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Market cap
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Circulating Supply
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Latest7d
                        </th>
                    </tr>
                </thead>
                <tbody id="allDataTable" class="font-sora font-normal text-sm text-white">

                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
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
            second: "numeric",
        };
        document.getElementById("datetime").innerHTML =
            date.toLocaleDateString("id-ID", options);
    }, 1000);

    /* Display the data
     * GET data using getListLatestCoin function
     * Display the data to the container using DOM
     * Uncomment this code below
     */

    getListLatestCoin({
        "convert": "IDR"
    }).then((data) => {
        var dataJSON = {
            "data": data
        };
        var data = dataJSON.data;

        console.log(dataJSON.data);

        for (let index = 0; index < data.data.length; index++) {
            var checkbox = document.createElement("input");
            checkbox.id = "checkbox-table-search-1";
            checkbox.type = "checkbox";
            checkbox.className = "w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-600 ring-offset-gray-800 focus:ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600";

            var label = document.createElement("label");
            label.htmlFor = "checkbox-table-search-1";
            label.className = "sr-only";
            label.textContent = "checkbox";

            var div = document.createElement("div");
            div.className = "flex items-center";
            div.appendChild(checkbox);
            div.appendChild(label);

            var td = document.createElement("td");
            td.className = "w-4 p-4";
            td.appendChild(div);

            var th = document.createElement("th");
            th.scope = "row";
            th.className = "px-6 py-4";
            th.textContent = data.data[index].name;

            var td1 = document.createElement("td");
            td1.className = "px-6 py-4";
            td1.textContent = "Rp." + parseFloat(data.data[index].quote.IDR.price).toLocaleString('id-ID');

            var td2 = document.createElement("td");
            if (parseFloat(data.data[index].quote.IDR.percent_change_1h) > 0.0) {
                td2.className = "px-6 py-4 text-green-800";
            } else {
                td2.className = "px-6 py-4 text-red-800"
            };
            td2.textContent = data.data[index].quote.IDR.percent_change_1h + '%';

            var td3 = document.createElement("td");
            td3.className = "px-6 py-4";
            td3.textContent = data.data[index].quote.IDR.percent_change_24h + '%';

            var td4 = document.createElement("td");
            td4.className = "px-6 py-4";
            td4.textContent = data.data[index].quote.IDR.percent_change_7d + '%';

            var td5 = document.createElement("td");
            td5.className = "px-6 py-4";
            td5.textContent = "Rp." + parseFloat(data.data[index].quote.IDR.market_cap).toLocaleString('id-ID');

            var td6 = document.createElement("td");
            td6.className = "px-6 py-4";
            td6.textContent = data.data[index].circulating_supply;

            var td7 = document.createElement("td");
            td7.className = "px-6 py-4";

            var td7 = document.createElement("td");
            td7.className = "px-6 py-4";

            // var tradingviewContainer = document.createElement("div");
            // tradingviewContainer.className = "tradingview-widget-container";
            // tradingviewContainer.style.height = "100%";
            // tradingviewContainer.style.width = "100%";

            // var tradingviewWidget = document.createElement("div");
            // tradingviewWidget.className = "tradingview-widget-container__widget";
            // tradingviewWidget.style.height = "calc(100% - 32px)";
            // tradingviewWidget.style.width = "100%";

            // var tradingviewCopyright = document.createElement("div");
            // var tradingviewLink = document.createElement("a");
            // tradingviewLink.href = "https://www.tradingview.com/";
            // tradingviewLink.rel = "noopener nofollow";
            // tradingviewLink.target = "_blank";
            // var tradingviewSpan = document.createElement("span");
            // tradingviewSpan.className = "blue-text";
            // tradingviewSpan.textContent = "Track all markets on TradingView";
            // tradingviewLink.appendChild(tradingviewSpan);
            // tradingviewCopyright.appendChild(tradingviewLink);

            // var tradingviewScript = document.createElement("script");
            // tradingviewScript.type = "text/javascript";
            // tradingviewScript.src = "https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js";
            // tradingviewScript.async = true;
            // tradingviewScript.innerHTML = `{
            //         "autosize": true,
            //         "symbol": "CRYPTOCAP:${data.data[index].symbol}",
            //         "interval": "D",
            //         "timezone": "Etc/UTC",
            //         "theme": "dark",
            //         "style": "2",
            //         "locale": "en",
            //         "hide_top_toolbar": true,
            //         "hide_legend": true,
            //         "allow_symbol_change": false,
            //         "save_image": false,
            //         "calendar": false,
            //         "hide_volume": true,
            //         "support_host": "https://www.tradingview.com"
            //     }`;

            // td7.appendChild(tradingviewContainer);
            // tradingviewContainer.appendChild(tradingviewWidget);
            // tradingviewContainer.appendChild(tradingviewCopyright);
            // tradingviewContainer.appendChild(tradingviewScript);


            var tr = document.createElement("tr");
            tr.className = "border-b bg-gray-800 border-gray-700 hover:bg-gray-50 hover:bg-gray-600";
            tr.appendChild(td);
            tr.appendChild(th);
            tr.appendChild(td1);
            tr.appendChild(td2);
            tr.appendChild(td3);
            tr.appendChild(td4);
            tr.appendChild(td5);
            tr.appendChild(td6);
            tr.appendChild(td7);

            var table = document.getElementById("allDataTable");
            table.appendChild(tr);

        }
    })
</script>

</html>