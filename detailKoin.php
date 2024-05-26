<!DOCTYPE html>
<html lang="en">

<head>
    <title>Crypo - Pantauan Crypto</title>
    <meta charset="UTF-8" / <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./src/output.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-background w-screen font-sans">
    <!-- Container -->
    <div class=" w-full pt-[85px] px-[85px] flex flex-col gap-14">
        <!-- Header -->
        <a class="flex flex-row gap-2 items-center" href="index.php">
            <img src="./src/img/logo.png" class="w-16 h-16" />
            <h1 class="text-white font-bold text-3xl">crypo</h1>
        </a>

        <!-- Date and Time -->
        <p class="text-white text-4xl font-extrabold" id="datetime"></p>

        <!-- Grid Container -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <!-- Coin Detail -->
            <div class=" bg-secondaryBg p-6 rounded-lg flex flex-col gap-4 py-8 px-6">
                <!-- Header -->
                <div class="flex flex-row justify-between items-center font-semibold">
                    <h2 class="text-white text-[40px]" id="price"></h2>
                    <p class="text-red-800 text-xl" id="price24h"></p>
                </div>

                <!-- Market Cap -->
                <div class="flex flex-col justify-between items-center gap-1">
                    <div class="w-full flex flex-row items-center justify-between font-semibold text-lg">
                        <div class="flex flex-row items-center justify-center">
                            <h3 class="text-white/70">Market Cap</h3>
                            <button data-popover-target="popover-description" data-popover-placement="bottom-end" type="button"><svg class="w-4 h-4 ms-2 text-gray-400 hover:text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                                </svg><span class="sr-only">Show information</span></button>
                        </div>
                        <div data-popover id="popover-description" role="tooltip" class="absolute z-10 invisible inline-block text-sm transition-opacity duration-300 border rounded-lg shadow-sm opacity-0 w-72 bg-gray-800 border-gray-600 text-gray-400">
                            <div class="p-3 space-y-2">
                                <h3 class="font-semibold text-white">Market Cap</h3>
                                <p>Market cap kripto adalah kapitalisasi pasar yang didapatkan aset kripto dari ketertarikan investor membeli aset tersebut. Dengan kata kain market cap terbesar di aset kripto sama dengan popularitas aset tersebut.</p>
                            </div>
                            <div data-popper-arrow></div>
                        </div>
                        <p id="marketCap24h"></p>
                        <p class="text-white/70" id="marketCap"></p>
                    </div>
                    <div class="w-full flex flex-row justify-between items-center gap-4">
                        <div class="w-full rounded-full h-2.5 bg-gray-700">
                            <div class="bg-barColor h-2.5 rounded-full" style="width: 50%" id="marketCapBar"></div>
                        </div>
                        <div class="bg-white/20 rounded-sm py-1 px-2">
                            <p id="marketCapRanking"></p>
                        </div>
                    </div>
                </div>

                <!-- Volume -->
                <div class="flex flex-col justify-between items-center gap-1">
                    <div class="w-full flex flex-row items-center justify-between font-semibold text-lg">
                        <div class="flex flex-row justify-center items-center">
                            <h3 class="text-white/70">Volume</h3>
                            <button data-popover-target="popover-volume" data-popover-placement="bottom-end" type="button"><svg class="w-4 h-4 ms-2 text-gray-400 hover:text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                                </svg><span class="sr-only">Show information</span></button>
                        </div>
                        <div data-popover id="popover-volume" role="tooltip" class="absolute z-10 invisible inline-block text-sm transition-opacity duration-300 border rounded-lg shadow-sm opacity-0 w-72 bg-gray-800 border-gray-600 text-gray-400">
                            <div class="p-3 space-y-2">
                                <h3 class="font-semibold text-white">Volume</h3>
                                <p>Volume perdagangan kripto adalah ukuran jumlah total uang yang mengalir masuk dan keluar dari pasar aset kripto selama periode waktu tertentu.</p>
                            </div>
                            <div data-popper-arrow></div>
                        </div>
                        <p id="volume24h"></p>
                        <p class="text-white/70" id="volume"></p>
                    </div>

                </div>

                <div class="flex flex-row justify-between items-center font-semibold text-lg">
                    <h3 class="text-white/70">Volume/Market Cap (24h)</h3>
                    <p class="text-white" id="volumeByCap"></p>
                </div>

                <div class="flex flex-col justify-between items-center gap-1">
                    <div class="w-full flex flex-row items-center justify-between font-semibold text-lg">
                        <div class="flex flex-row justify-center items-center">
                            <h3 class="text-white/70">Circulating Supply</h3>
                            <button data-popover-target="popover-circulating" data-popover-placement="bottom-end" type="button"><svg class="w-4 h-4 ms-2 text-gray-400 hover:text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                                </svg><span class="sr-only">Show information</span></button>
                        </div>
                        <div data-popover id="popover-circulating" role="tooltip" class="absolute z-10 invisible inline-block text-sm transition-opacity duration-300 border rounded-lg shadow-sm opacity-0 w-72 bg-gray-800 border-gray-600 text-gray-400">
                            <div class="p-3 space-y-2">
                                <h3 class="font-semibold text-white">Circulating Supply</h3>
                                <p>Circulating supply adalah jumlah koin atau token kripto yang telah diedarkan dan dimiliki publik di pasar.</p>
                            </div>
                            <div data-popper-arrow></div>
                        </div>
                        <p class="text-white/70" id="circulating"></p>
                    </div>
                    <div class="w-full flex flex-row justify-between items-center gap-4">
                        <div class="w-full rounded-full h-2.5 bg-gray-700">
                            <div class="bg-barColor h-2.5 rounded-full" style="width: 50%" id="circulateBar"></div>
                        </div>
                        <div class="bg-white/20 rounded-sm py-1 px-2">
                            <p id="circulatePercent"></p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-row justify-between items-center font-semibold text-lg">
                    <div class="flex flex-row justify-center items-center">
                        <h3 class="text-white/70">Total Supply</h3>
                        <button data-popover-target="popover-total-supply" data-popover-placement="bottom-end" type="button"><svg class="w-4 h-4 ms-2 text-gray-400 hover:text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                            </svg><span class="sr-only">Show information</span></button>
                    </div>
                    <div data-popover id="popover-total-supply" role="tooltip" class="absolute z-10 invisible inline-block text-sm transition-opacity duration-300 border rounded-lg shadow-sm opacity-0 w-72 bg-gray-800 border-gray-600 text-gray-400">
                        <div class="p-3 space-y-2">
                            <h3 class="font-semibold text-white">Total Supply</h3>
                            <p>Total supply adalah jumlah keseluruhan koin/token yang pernah diciptakan pada suatu protokol blockchain cryptocurrency. Total supply mencakup seluruh koin yang sudah beredar (circulating supply) dan yang masih tersimpan. </p>
                        </div>
                        <div data-popper-arrow></div>
                    </div>
                    <p class="text-white" id="totalSupply"></p>
                </div>

                <div class="flex flex-row justify-between items-center font-semibold text-lg">
                    <div class="flex flex-row justify-center items-center">
                        <h3 class="text-white/70">Max Supply</h3>
                        <button data-popover-target="popover-max-supply" data-popover-placement="bottom-end" type="button"><svg class="w-4 h-4 ms-2 text-gray-400 hover:text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                            </svg><span class="sr-only">Show information</span></button>
                    </div>
                    <div data-popover id="popover-max-supply" role="tooltip" class="absolute z-10 invisible inline-block text-sm transition-opacity duration-300 border rounded-lg shadow-sm opacity-0 w-72 bg-gray-800 border-gray-600 text-gray-400">
                        <div class="p-3 space-y-2">
                            <h3 class="font-semibold text-white">Max Supply</h3>
                            <p>Maximum supply atau pasokan maksimal adalah jumlah maksimal koin dari sebuah aset crypto tertentu. Setelah sebuah aset crypto mencapai pasokan maksimal ini, tidak ada koin baru yang akan diproduksi atau ditambang.</p>
                        </div>
                        <div data-popper-arrow></div>
                    </div>
                    <p class="text-white" id="maxSupply"></p>
                </div>

                <div class="flex flex-row justify-between items-center font-semibold text-lg">
                    <div class="flex flex-row justify-center items-center">
                        <h3 class="text-white/70">Fully Dilluted Market Cap</h3>
                        <button data-popover-target="popover-dilluted" data-popover-placement="bottom-end" type="button"><svg class="w-4 h-4 ms-2 text-gray-400 hover:text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                            </svg><span class="sr-only">Show information</span></button>
                    </div>
                    <div data-popover id="popover-dilluted" role="tooltip" class="absolute z-10 invisible inline-block text-sm transition-opacity duration-300 border rounded-lg shadow-sm opacity-0 w-72 bg-gray-800 border-gray-600 text-gray-400">
                        <div class="p-3 space-y-2">
                            <h3 class="font-semibold text-white">Max Supply</h3>
                            <p>Fully diluted market cap adalah perhitungan nilai kapitalisasi pasar kripto dengan asumsi bahwa seluruh aset kripto tersebut sudah selesai ditambang sepenuhnya, yang didasarkan dengan harga pasarnya pada saat ini. Dengan kata lain, fully dilluted market cap adalah nilai kapitalisasi pasar sebuah aset kripto yang paling maksimal jika diukur dengan harga saat ini.</p>
                        </div>
                        <div data-popper-arrow></div>
                    </div>
                    <p class="text-white" id="dillutedMarket"></p>
                </div>


            </div>
            <!-- Chart Container -->
            <div class="lg:col-span-2 bg-secondaryBg p-6 rounded-lg">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container h-full">
                    <div class="tradingview-widget-container__widget"></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                        {
                            "symbol": "CRYPTOCAP:<?php echo $_GET['symbol']; ?>",
                            "locale": "en",
                            "dateRange": "12M",
                            "colorTheme": "dark",
                            "isTransparent": false,
                            "autosize": false,
                            "largeChartUrl": "",
                            "chartOnly": true
                        }
                    </script>
                </div>
            </div>
        </div>

        <!-- Tab Container -->

        <div class="w-full rounded-lg shadow bg-secondaryBg border-gray-700 mb-20">
            <ul class="flex flex-wrap text-sm font-medium text-center border-b  rounded-t-lg  border-gray-700 text-gray-400 bg-secondaryBg" id="defaultTab" data-tabs-toggle="#defaultTabContent" role="tablist">
                <li class="me-2">
                    <button id="deskripsi-tab" data-tabs-target="#deskripsi" type="button" role="tab" aria-controls="deskripsi" aria-selected="true" class="inline-block p-4 rounded-ss-lg bg-secondaryBg hover:bg-gray-700 text-blue-500">Deskripsi</button>
                </li>
                <li class="me-2">
                    <button id="services-tab" data-tabs-target="#services" type="button" role="tab" aria-controls="services" aria-selected="false" class="inline-block p-4  hover:bg-gray-700 hover:text-gray-300">Social Media</button>
                </li>
                <li class="me-2">
                    <button id="statistics-tab" data-tabs-target="#statistics" type="button" role="tab" aria-controls="statistics" aria-selected="false" class="inline-block p-4  hover:bg-gray-700 hover:text-gray-300">Pesan</button>
                </li>
                <li class="me-2">
                    <button id="tags-tab" data-tabs-target="#tags" type="button" role="tab" aria-controls="tags" aria-selected="false" class="inline-block p-4  hover:bg-gray-700 hover:text-gray-300">Tags</button>
                </li>
            </ul>
            <div id="defaultTabContent">
                <div class="hidden p-4 rounded-lg md:p-8 bg-secondaryBg" id="deskripsi" role="tabpanel" aria-labelledby="deskripsi-tab">
                    <div class="flex flex-row items-center gap-2">
                        <img src="" id="logo" class="w-12 h-12" />
                        <h3 id='juduldeskripsi' class=" text-2xl font-extrabold tracking-tight  text-white"></h3>
                    </div>
                    <p id='description' class="mb-3 text-gray-400 mt-3 text-xl"></p>
                </div>
                <div class="hidden p-4 rounded-lg md:p-8 bg-secondaryBg" id="services" role="tabpanel" aria-labelledby="services-tab">
                    <h2 class="mb-5 text-2xl font-extrabold tracking-tight  text-white">Social Media <?php echo $_GET['symbol']; ?></h2>
                    <div class='flex flex-row items-center gap-3'>
                        <p class="mb-3  text-gray-400 mt-3">Website</p>
                        <button id='website' type="button" class=" bg-gray-100 hover:bg-gray-200 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center focus:ring-gray-500 me-2 mb-2"></button>
                    </div>
                    <div class='flex flex-row items-center gap-3'>
                        <p class="mb-3  text-gray-400 mt-3">twitter</p>
                        <button id='twitter' type="button" class=" bg-gray-100 hover:bg-gray-200 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center focus:ring-gray-500 me-2 mb-2"></button>
                    </div>
                    <div class='flex flex-row items-center gap-3'>
                        <p class="mb-3  text-gray-400 mt-3">facebook</p>
                        <button id='facebook' type="button" class=" bg-gray-100 hover:bg-gray-200 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center focus:ring-gray-500 me-2 mb-2"></button>
                    </div>
                    <div class='flex flex-row items-center gap-3'>
                        <p class="mb-3  text-gray-400 mt-3">reddit</p>
                        <button id='reddit' type="button" class=" bg-gray-100 hover:bg-gray-200 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center focus:ring-gray-500 me-2 mb-2"></button>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg md:p-8 bg-secondaryBg" id="statistics" role="tabpanel" aria-labelledby="statistics-tab">
                    <h2 class="mb-5 text-2xl font-extrabold tracking-tight  text-white">Forum Resmi</h2>
                    <ul id="message-board-list" class="space-y-4  text-gray-400"></ul>
                    <input type="text" id="message-input" class="w-full p-2 mt-4 rounded-md bg-gray-700 text-gray-300" placeholder="Type your message here...">
                    <button id="send-message" class="w-full p-2 mt-2 text-white bg-blue-600 rounded-md">Send</button>
                </div>
                <div class="hidden p-4 rounded-lg md:p-8 bg-secondaryBg" id="tags" role="tabpanel" aria-labelledby="tags-tab">
                    <h2 class="mb-5 text-2xl font-extrabold tracking-tight  text-white">All Tags : </h2>
                    <div class="grid grid-cols-6 gap-2" id="tags-value">

                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

<script type="module">
    import {
        getMetaData
    } from "./models/api2.js";

    import {
        getLatestQuote
    } from "./models/api3.js";

    import {
        getGlobalMetrics
    } from "./models/api4.js";

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

    // Get id from URL
    const urlParams = new URLSearchParams(window.location.search);
    const id = urlParams.get("id");
    const symbol = urlParams.get("symbol");

    // Get coin metadata
    getMetaData({
        "id": id
    }).then((data) => {
        console.log(data);

        document.getElementById('logo').src = data.data[id].logo;
        document.getElementById('description').innerHTML = data.data[id].description;
        document.getElementById('juduldeskripsi').innerHTML = data.data[id].name;
        document.getElementById('website').innerHTML = '<a href="' + data.data[id].urls.website + '">' + data.data[id].urls.website + '</a>';
        document.getElementById('twitter').innerHTML = '<a href="' + data.data[id].urls.twitter + '">' + data.data[id].urls.twitter + '</a>';
        document.getElementById('facebook').innerHTML = '<a href="' + data.data[id].urls.facebook + '">' + data.data[id].urls.facebook + '</a>';
        document.getElementById('reddit').innerHTML = '<a href="' + data.data[id].urls.reddit + '">' + data.data[id].urls.reddit + '</a>';

        data.data[id]["tag-names"].forEach((element, index) => {
            const button = document.createElement('button');
            button.type = 'button';
            button.className = 'border focus:outline-none  focus:ring-4 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 bg-gray-800 text-white border-gray-600 hover:bg-gray-700 hover:border-gray-600 focus:ring-gray-700';
            button.textContent = element;
            document.getElementById('tags-value').appendChild(button);
        });


    });

    // Get latest quote
    getLatestQuote({
        "convert": "IDR",
        "id": id
    }).then((data) => {
        const volume = data.data[id].quote.IDR.volume_24h;
        const marketCap = data.data[id].quote.IDR.market_cap;
        const volumeByCap = (volume / marketCap) * 100;
        const circulatingSupply = data.data[id].circulating_supply;
        const maxSupply = data.data[id].max_supply;
        const circulatingPercentage = (circulatingSupply / maxSupply) * 100;
        const rank = data.data[id].cmc_rank;
        const quoteIDR = data.data[id].quote.IDR;
        const symbol = data.data[id].symbol;

        getGlobalMetrics().then((globalData) => {
            const rankRatio = (globalData.data.active_cryptocurrencies - rank + 1) / globalData.data.active_cryptocurrencies * 100;
            document.getElementById("marketCapBar").style.width = rankRatio.toFixed(2) + "%";
            console.log(rankRatio);
        });

        // Push data into HTML
        document.getElementById("price").innerHTML = quoteIDR.price.toLocaleString("id-ID", {
            style: "currency",
            currency: "IDR"
        });
        document.getElementById("price24h").innerHTML = quoteIDR.percent_change_1h.toFixed(2) + "% (1h)";
        document.getElementById("marketCap24h").innerHTML = quoteIDR.percent_change_24h.toFixed(2) + "% (1d)";
        document.getElementById("marketCap24h").className = parseFloat(quoteIDR.percent_change_24h) > 0 ? "text-green-500" : "text-red-800";
        document.getElementById("marketCap").innerHTML = quoteIDR.market_cap.toLocaleString("id-ID", {
            style: "currency",
            currency: "IDR"
        });
        document.getElementById("volume24h").innerHTML = quoteIDR.volume_change_24h.toFixed(2) + "% (1d)";
        document.getElementById("volume24h").className = parseFloat(quoteIDR.volume_change_24h) > 0 ? "text-green-500" : "text-red-800";
        document.getElementById("volume").innerHTML = quoteIDR.volume_24h.toLocaleString("id-ID", {
            style: "currency",
            currency: "IDR"
        });
        document.getElementById("volumeByCap").innerHTML = volumeByCap.toFixed(2) + "%";
        document.getElementById("circulating").innerHTML = circulatingSupply.toLocaleString("id-ID") + " " + symbol;
        document.getElementById("circulatePercent").innerHTML = circulatingPercentage.toFixed(2) + "%";
        document.getElementById("circulateBar").style.width = circulatingPercentage.toFixed(2) + "%";
        document.getElementById("totalSupply").innerHTML = data.data[id].total_supply.toLocaleString("id-ID") + " " + symbol;
        document.getElementById("maxSupply").innerHTML = (maxSupply == null ? "No Data" : maxSupply.toLocaleString("id-ID")) + " " + symbol;
        document.getElementById("dillutedMarket").innerHTML = quoteIDR.market_cap.toLocaleString("id-ID", {
            style: "currency",
            currency: "IDR"
        });
        document.getElementById("marketCapRanking").innerHTML = "#" + rank;
    });

    // Event listener for send message button
    document.getElementById('send-message').addEventListener('click', () => {
        const messageInput = document.getElementById('message-input');
        const messageList = document.getElementById('message-board-list');
        const newMessage = messageInput.value.trim();
        localStorage.setItem('messages', JSON.stringify([...JSON.parse(localStorage.getItem('messages')), newMessage]));

        if (newMessage) {
            getMessages();
        }
    });

    // Get message from local storage
    function getMessages() {
        const messageList = document.getElementById('message-board-list');
        const messages = JSON.parse(localStorage.getItem('messages')) || [];

        messages.forEach((message) => {
            const messageElement = document.createElement('li');
            messageElement.textContent = message;
            messageElement.className = "text-gray-500 text-gray-400";
            messageList.appendChild(messageElement);
        });
    }

    if (localStorage.getItem('messages') == null) {
        localStorage.setItem('messages', JSON.stringify([]));
    } else {
        getMessages();
    }
</script>

</html>