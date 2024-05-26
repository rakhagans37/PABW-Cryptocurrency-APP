<!DOCTYPE html>
<html>

<head>
    <title>Crypo - Pantauan Crypto</title>
    <meta charset="UTF-8" / <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./src/output.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-background w-screen font-sans">
    <!-- Container -->
    <div class="w-full pt-[85px] px-[85px] flex flex-col gap-14">
        <!-- Header -->
        <a class="flex flex-row gap-2 items-center" href="index.php">
            <img src="./src/img/logo.png" class="w-16 h-16" />
            <h1 class="text-white font-bold text-3xl">crypo</h1>
        </a>

        <!-- Date and Time -->
        <p class="text-white text-4xl font-extrabold" id="datetime"></p>

        <!-- Widget -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 gap-y-5 mb-20">
            <!-- TradingView Widget NEWS -->
            <div class="lg:col-span-1">
                <div class="tradingview-widget-container__widget"></div>
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
            <div class="lg:col-span-2">
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
        <div class="relative shadow-md overflow-x-scroll">
            <!-- Table Header -->
            <div class="flex flex-row sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-end justify-between pb-4">
                <!-- Search Start-->
                <label for="table-search" class="sr-only">Search</label>
                <div class="flex flex-row gap-3 justify-center items-center">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" id="table-search" class="block p-2 ps-10 text-sm border rounded-lg w-80 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500" placeholder="Cari koin">
                    </div>
                    <button class="inline-flex items-center justify-center p-0.5 overflow-hidden text-sm font-medium rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white text-white focus:ring-4 focus:outline-none focus:ring-green-800" onclick="search()">
                        <span class="px-5 py-2.5 transition-all ease-in duration-75 bg-gray-900 rounded-md group-hover:bg-opacity-0">
                            Search
                        </span>
                    </button>
                </div>


                <!-- Search End -->

                <!-- Loading -->
                <div id="loading" role="status" style="display: none;">
                    <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor" />
                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill" />
                    </svg>
                    <span class="sr-only">Loading...</span>
                </div>
                <!-- Loading End -->

                <!-- DropDown Start -->
                <div>
                    <label for="dropdownRadio" class="text-white font-bold mr-2">Tampilkan Koin:</label>
                    <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio" class="inline-flex items-center  border focus:outline-none focus:ring-4 font-medium rounded-lg text-sm px-3 py-1.5 bg-gray-800 text-white border-gray-600 hover:bg-gray-700 hover:border-gray-600 focus:ring-gray-700" type="button">
                        10
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownRadio" class="z-10 hidden w-48 divide-yrounded-lg shadow bg-gray-700 divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 3847.5px, 0px);">
                        <ul class="p-3 space-y-1 text-smtext-gray-200" aria-labelledby="dropdownRadioButton">
                            <li>
                                <div class="flex items-center p-2 rounded hover:bg-gray-600">
                                    <input id="filter-radio-example-1" type="radio" value="5" name="filter-radio" class="w-4 h-4 text-blue-600 focus:ring-blue-600 ring-offset-gray-800 focus:ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
                                    <label for="filter-radio-example-1" class="w-full ms-2 text-sm font-medium rounded text-gray-300">5</label>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center p-2 rounded hover:bg-gray-600">
                                    <input checked="" id="filter-radio-example-2" type="radio" value="10" name="filter-radio" class="w-4 h-4 text-blue-600 focus:ring-blue-600 ring-offset-gray-800 focus:ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
                                    <label for="filter-radio-example-2" class="w-full ms-2 text-sm font-medium rounded text-gray-300">10</label>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center p-2 rounded hover:bg-gray-600">
                                    <input id="filter-radio-example-3" type="radio" value="50" name="filter-radio" class="w-4 h-4 text-blue-600 focus:ring-blue-600 ring-offset-gray-800 focus:ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
                                    <label for="filter-radio-example-3" class="w-full ms-2 text-sm font-medium rounded text-gray-300">50</label>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center p-2 rounded hover:bg-gray-600">
                                    <input id="filter-radio-example-4" type="radio" value="100" name="filter-radio" class="w-4 h-4 text-blue-600 focus:ring-blue-600 ring-offset-gray-800 focus:ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
                                    <label for="filter-radio-example-4" class="w-full ms-2 text-sm font-medium rounded text-gray-300">100</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- DropDown End -->
            </div> <!-- Table Header End -->

            <!-- Data Table Start -->
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
                            Volume
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Latest7d
                        </th>
                    </tr>
                </thead>
                <tbody id="allDataTable" class="font-sora font-normal text-sm text-white">

                </tbody>
            </table>
            <!-- Data Table End -->
        </div>
        <!-- Table End -->

        <!-- Pagination -->
        <div class="flex flex-col items-center  mb-10">
            <!-- Help text -->
            <span class="text-sm text-gray-400">
                Page <span class="font-semibold text-white"><?= $_GET["page"] ?? 1 ?></span> get <span class="font-semibold  text-white">100</span> Entries
            </span>
            <!-- Buttons -->
            <div class="inline-flex mt-2 xs:mt-0">
                <button class="flex items-center justify-center px-4 h-10 text-base font-medium  rounded-s  bg-gray-800 border-gray-700 text-gray-400 hover:bg-gray-700 hover:text-white" onclick="prevPage()">
                    Prev
                </button>
                <button class="flex items-center justify-center px-4 h-10 text-base font-medium border-0 border-s rounded-e  bg-gray-800 border-gray-700 text-gray-400 hover:bg-gray-700 hover:text-white" onclick="nextPage()">
                    Next
                </button>
            </div>
        </div>



    </div> <!-- Container End -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script>
        function search() {
            if (document.getElementById("table-search").value == "") {
                return;
            }
            const search = document.getElementById("table-search").value;
            const param = new URLSearchParams({
                "search": search
            });
            window.location.href = "index.php?" + param.toString();
        }

        function nextPage() {
            const urlSearchParams = new URLSearchParams(window.location.search);
            const page = urlSearchParams.get("page");
            const nextPage = parseInt(page ?? 1) + 1;;
            const newParam = new URLSearchParams({
                "page": nextPage
            });

            window.location.href = "index.php?" + newParam.toString();
        }

        function prevPage() {
            const urlSearchParams = new URLSearchParams(window.location.search);
            const page = urlSearchParams.get("page") ?? null;
            const nextPage = page == 1 || page == null ? parseInt(1) : parseInt(page ?? 1) - 1;;
            const newParam = new URLSearchParams({
                "page": nextPage
            });

            window.location.href = "index.php?" + newParam.toString();
        }
    </script>
</body>

<script type="module">
    import {
        getListLatestCoin
    } from "./models/api.js";

    import {
        getLatestQuote
    } from "./models/api3.js";

    const urlParams = new URLSearchParams(window.location.search);
    const search = urlParams.get("search") ?? null;
    const page = urlParams.get("page") ?? 1;
    const startPage = page == 1 ? 1 : (page - 1) * 100 + 1;

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
        document.getElementById("datetime").innerHTML = date.toLocaleDateString("id-ID", options);
    }, 1000);

    // Function to display data to the table
    function displayTable(data, limit) {
        for (let index = 0; index < 100; index++) {
            const checkbox = document.createElement("input");
            checkbox.id = "checkbox-table-search-1";
            checkbox.type = "checkbox";
            checkbox.className = "w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-600 ring-offset-gray-800 focus:ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600";

            const label = document.createElement("label");
            label.htmlFor = "checkbox-table-search-1";
            label.className = "sr-only";
            label.textContent = "checkbox";

            const div = document.createElement("div");
            div.className = "flex items-center";
            div.appendChild(checkbox);
            div.appendChild(label);

            const td = document.createElement("td");
            td.className = "w-4 p-4";
            td.appendChild(div);

            const th = document.createElement("th");
            th.scope = "row";
            th.className = "px-6 py-4";
            th.textContent = data.data[index].name;

            const td1 = document.createElement("td");
            td1.className = "px-6 py-4";
            td1.textContent = "Rp." + parseFloat(data.data[index].quote.IDR.price).toLocaleString("id-ID");

            const td2 = document.createElement("td");
            td2.className = parseFloat(data.data[index].quote.IDR.percent_change_1h) > 0.0 ? "px-6 py-4 text-green-500" : "px-6 py-4 text-red-800";
            td2.textContent = data.data[index].quote.IDR.percent_change_1h + "%";

            const td3 = document.createElement("td");
            td3.className = parseFloat(data.data[index].quote.IDR.percent_change_24h) > 0.0 ? "px-6 py-4 text-green-500" : "px-6 py-4 text-red-800";
            td3.textContent = data.data[index].quote.IDR.percent_change_24h + "%";

            const td4 = document.createElement("td");
            td4.className = parseFloat(data.data[index].quote.IDR.percent_change_7d) > 0.0 ? "px-6 py-4 text-green-500" : "px-6 py-4 text-red-800";
            td4.textContent = data.data[index].quote.IDR.percent_change_7d + "%";

            const td5 = document.createElement("td");
            td5.className = "px-6 py-4";
            td5.textContent = "Rp." + parseFloat(data.data[index].quote.IDR.market_cap).toLocaleString("id-ID");

            const td6 = document.createElement("td");
            td6.className = "px-6 py-4 text-sm";
            td6.textContent = data.data[index].quote.IDR.volume_24h + " " + data.data[index].quote.IDR.volume_change_24h + " " + data.data[index].symbol;

            const td7 = document.createElement("td");
            td7.className = "px-6 py-4";
            if (index < limit) {
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
                "symbol": "CRYPTOCAP:${data.data[index].symbol}",
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
            }


            const tr = document.createElement("tr");
            tr.onclick = function() {
                changePage(data.data[index].id, data.data[index].symbol);
            };
            tr.className = "border-b bg-gray-800 border-gray-700 hover:bg-gray-50 hover:bg-gray-600";
            if (index >= limit) {
                tr.style.display = "none";
            }
            tr.appendChild(td);
            tr.appendChild(th);
            tr.appendChild(td1);
            tr.appendChild(td2);
            tr.appendChild(td3);
            tr.appendChild(td4);
            tr.appendChild(td5);
            tr.appendChild(td6);
            tr.appendChild(td7);

            const table = document.getElementById("allDataTable");
            table.appendChild(tr);
        }
    }

    // Function to display data to the table
    function searchCoin(data, limit) {
        for (let index = 0; index < limit; index++) {
            const checkbox = document.createElement("input");
            checkbox.id = "checkbox-table-search-1";
            checkbox.type = "checkbox";
            checkbox.className = "w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-600 ring-offset-gray-800 focus:ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600";

            const label = document.createElement("label");
            label.htmlFor = "checkbox-table-search-1";
            label.className = "sr-only";
            label.textContent = "checkbox";

            const div = document.createElement("div");
            div.className = "flex items-center";
            div.appendChild(checkbox);
            div.appendChild(label);

            const td = document.createElement("td");
            td.className = "w-4 p-4";
            td.appendChild(div);

            const th = document.createElement("th");
            th.scope = "row";
            th.className = "px-6 py-4";
            th.textContent = data[index].name;

            const td1 = document.createElement("td");
            td1.className = "px-6 py-4";
            td1.textContent = "Rp." + parseFloat(data[index].quote.IDR.price).toLocaleString("id-ID");

            const td2 = document.createElement("td");
            td2.className = parseFloat(data[index].quote.IDR.percent_change_1h) > 0.0 ? "px-6 py-4 text-green-500" : "px-6 py-4 text-red-800";
            td2.textContent = data[index].quote.IDR.percent_change_1h + "%";

            const td3 = document.createElement("td");
            td3.className = parseFloat(data[index].quote.IDR.percent_change_24h) > 0.0 ? "px-6 py-4 text-green-500" : "px-6 py-4 text-red-800";
            td3.textContent = data[index].quote.IDR.percent_change_24h + "%";

            const td4 = document.createElement("td");
            td4.className = parseFloat(data[index].quote.IDR.percent_change_7d) > 0.0 ? "px-6 py-4 text-green-500" : "px-6 py-4 text-red-800";
            td4.textContent = data[index].quote.IDR.percent_change_7d + "%";

            const td5 = document.createElement("td");
            td5.className = "px-6 py-4";
            td5.textContent = "Rp." + parseFloat(data[index].quote.IDR.market_cap).toLocaleString("id-ID");

            const td6 = document.createElement("td");
            td6.className = "px-6 py-4 text-sm";
            td6.textContent = data[index].quote.IDR.volume_24h + " " + data[index].quote.IDR.volume_change_24h + " " + data[index].symbol;

            const td7 = document.createElement("td");
            td7.className = "px-6 py-4";
            if (index < limit) {
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
                "symbol": "CRYPTOCAP:${data[index].symbol}",
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
            }


            const tr = document.createElement("tr");
            tr.onclick = function() {
                changePage(data[index].id, data[index].symbol);
            };
            tr.className = "border-b bg-gray-800 border-gray-700 hover:bg-gray-50 hover:bg-gray-600";
            if (index >= limit) {
                tr.style.display = "none";
            }
            tr.appendChild(td);
            tr.appendChild(th);
            tr.appendChild(td1);
            tr.appendChild(td2);
            tr.appendChild(td3);
            tr.appendChild(td4);
            tr.appendChild(td5);
            tr.appendChild(td6);
            tr.appendChild(td7);

            const table = document.getElementById("allDataTable");
            table.appendChild(tr);
        }
    }

    // Function to search data in the table
    document.getElementById('table-search').addEventListener('input', function() {
        const filter = this.value.toLowerCase();
        const rows = document.querySelectorAll('tbody tr');
        let limit = document.querySelector('input[name="filter-radio"]:checked').value;
        let index = 0;

        rows.forEach(function(row) {
            const cells = row.querySelectorAll('td, th');
            const match = Array.from(cells).some(function(cell) {
                if (filter == '' && index < limit) {
                    return true;
                } else if (filter == '' && index >= limit) {
                    return false;
                }
                return cell.textContent.toLowerCase().includes(filter);
            });

            row.style.display = match ? '' : 'none';
            index++;
        });
    });

    // Function to filter data in the table based on the limit
    document.getElementById("dropdownRadio").addEventListener("change", function() {
        document.getElementById("loading").style.display = "block";
        const limit = document.querySelector('input[name="filter-radio"]:checked').value;
        getListLatestCoin({
            "convert": "IDR",
        }).then((newData) => {
            const tableBody = document.getElementById("allDataTable");
            tableBody.innerHTML = "";

            displayTable(newData, limit);
            document.getElementById("loading").style.display = "none";
        });

    });

    if (search != null) {
        document.getElementById("table-search").value = search;
        document.getElementById("loading").style.display = "block";
        getLatestQuote({
            "convert": "IDR",
            "symbol": search
        }).then((response) => {
            document.getElementById("loading").style.display = "block";
            console.log(response);

            searchCoin(response.data[search], response.data[search].length);
            document.getElementById("loading").style.display = "none";
        });
    } else {
        getListLatestCoin({
            "convert": "IDR",
            "start": startPage,
            "limit": 100,
        }).then((response) => {
            document.getElementById("loading").style.display = "block";
            console.log(response);

            displayTable(response, 10);
            document.getElementById("loading").style.display = "none";
        });
    }

    function changePage(id, symbol) {
        const param = new URLSearchParams({
            "id": id,
            "symbol": symbol
        });
        window.location.href = "detailKoin.php?" + param.toString();
    }
</script>

</html>