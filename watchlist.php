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

        <!-- Main modal -->
        <div id="crypto-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full ease-in duration-1000">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative rounded-lg shadow bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex flex-col items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-600 gap-5">
                        <div class="w-full flex flex-row justify-between items-center">
                            <h3 class="text-lg font-semibold text-white">
                                Pilih koin
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center hover:bg-gray-600 hover:text-white" data-modal-toggle="crypto-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Search Bar -->
                        <form class="w-full">
                            <label for="default-search" class="mb-2 text-sm font-medium sr-only text-white">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                    </svg>
                                </div>
                                <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm border rounded-lg  bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500" placeholder="Search Mockups, Logos..." required />
                                <button type="submit" class="text-white absolute end-2.5 bottom-2.5  focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-4 py-2 bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">Search</button>
                            </div>
                        </form>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5">
                        <ul class="my-4 space-y-3 h-80 overflow-scroll" id="coinList">
                        </ul>
                        <div>
                            <a href="#" class="inline-flex items-center text-xs font-normal hover:underline text-gray-400">
                                <svg class="w-3 h-3 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.529 7.988a2.502 2.502 0 0 1 5 .191A2.441 2.441 0 0 1 10 10.582V12m-.01 3.008H10M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                Why do I need to connect with my wallet?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->

        <!-- Judul -->
        <div class="grid-cols-2">
            <div class="flex flex-row justify-between items-center mb-5">
                <p class="text-white text-4xl font-extrabold">My First Coin Watchlist</p>
                <button id="add-asset-btn" data-modal-target="crypto-modal" data-modal-toggle="crypto-modal" class="block text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    <div class="flex flex-row justify-between gap-2 items-center">
                        <p>Add Asset</p>
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.285 0H8.715C3.255 0 0 3.255 0 8.715V21.27C0 26.745 3.255 30 8.715 30H21.27C26.73 30 29.985 26.745 29.985 21.285V8.715C30 3.255 26.745 0 21.285 0ZM21 16.125H16.125V21C16.125 21.615 15.615 22.125 15 22.125C14.385 22.125 13.875 21.615 13.875 21V16.125H9C8.385 16.125 7.875 15.615 7.875 15C7.875 14.385 8.385 13.875 9 13.875H13.875V9C13.875 8.385 14.385 7.875 15 7.875C15.615 7.875 16.125 8.385 16.125 9V13.875H21C21.615 13.875 22.125 14.385 22.125 15C22.125 15.615 21.615 16.125 21 16.125Z" fill="#FCFCFC" />
                        </svg>
                    </div>
                </button>
            </div>
        </div>

        <!-- Table -->
        <div class="flex flex-row sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-end justify-between">
            <!-- Data Table Start -->
            <table class="w-full text-sm text-left rtl:text-right text-gray-400 rounded-xl overflow-hidden">
                <thead class="text-sm font-extrabold bg-gray-700 text-white font-sora">
                    <tr>
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
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script type="module">
        import {
            getListLatestCoin
        } from "./models/api.js";
        import {
            getLatestQuote
        } from "./models/api3.js";

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

        // Fetch the data from the API
        getListLatestCoin().then((data) => {
            // Loop through the data and create options for each coin
            data.data.forEach((coin) => {
                // Create a list item element
                const listItem = document.createElement('li');

                // Create a div element for the list item content
                const listItemContent = document.createElement('div');
                listItemContent.classList.add('flex', 'flex-row', 'justify-between', 'items-center', 'p-3', 'text-base', 'font-bold', 'rounded-lg', 'group', 'hover:shadow', 'bg-gray-600', 'hover:bg-gray-500', 'text-white');

                // Create a div element for the coin information
                const coinInfo = document.createElement('div');
                coinInfo.classList.add('flex', 'flex-row');

                // Create an image element for the coin logo
                const coinLogo = document.createElement('img');
                coinLogo.src = 'test.jpg';
                coinLogo.alt = 'test';

                // Create a span element for the coin name
                const coinName = document.createElement('span');
                coinName.classList.add('flex-1', 'ms-3', 'whitespace-nowrap');
                coinName.textContent = coin.name;

                // Append the coin logo and name to the coin info div
                coinInfo.appendChild(coinLogo);
                coinInfo.appendChild(coinName);

                // Create a div element for the checkbox
                const checkboxDiv = document.createElement('div');
                checkboxDiv.classList.add('flex', 'items-center', 'h-5');

                // Create the checkbox element
                const checkbox = document.createElement('input');
                checkbox.id = 'helper-checkbox';
                checkbox.setAttribute('aria-describedby', 'helper-checkbox-text');
                checkbox.type = 'checkbox';
                checkbox.value = '';
                checkbox.classList.add('w-5', 'h-5', 'text-blue-600', 'rounded', 'focus:ring-blue-600', 'ring-offset-gray-800', 'focus:ring-2', 'bg-gray-700', 'border-gray-600');

                // Append the checkbox to the checkbox div
                checkboxDiv.appendChild(checkbox);

                // Append the coin info and checkbox div to the list item content
                listItemContent.appendChild(coinInfo);
                listItemContent.appendChild(checkboxDiv);

                // Append the list item content to the list item
                listItem.appendChild(listItemContent);

                // Append the list item to the coin list
                const coinList = document.getElementById('coinList');
                coinList.appendChild(listItem);
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

            const tr = document.createElement("tr");
            tr.onclick = function() {
                changePage(data.id, data.symbol);
            };
            tr.className = "bg-secondaryBg border-gray-700 hover:bg-gray-50 hover:bg-gray-600";
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