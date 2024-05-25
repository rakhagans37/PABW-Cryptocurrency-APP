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
        <div class="flex flex-row gap-2 items-center">
            <img src="./src/img/logo.png" class="w-16 h-16" />
            <h1 class="text-white font-bold text-3xl">crypo</h1>
        </div>

        <!-- Date and Time -->
        <p class="text-white text-4xl font-extrabold" id="datetime"></p>

        <!-- Grid Container -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <!-- Coin Detail -->
            <div class=" bg-secondaryBg p-6 rounded-lg flex flex-col gap-4 py-8 px-6">
                <div class="flex flex-row justify-between items-center font-semibold">
                    <h2 class="text-white text-[40px]" id="price"></h2>
                    <p class="text-red-800 text-xl" id="price24h"></p>
                </div>

                <div class="flex flex-col justify-between items-center gap-1">
                    <div class="w-full flex flex-row items-center justify-between font-semibold text-lg">
                        <h3 class="text-white/70">Market Cap</h3>
                        <p class="text-red-800" id="marketCap24h"></p>
                        <p class="text-white/70" id="marketCap"></p>
                    </div>
                    <div class="w-full flex flex-row justify-between items-center gap-4">
                        <div class="w-full rounded-full h-2.5 bg-gray-700">
                            <div class="bg-barColor h-2.5 rounded-full" style="width: 50%"></div>
                        </div>
                        <div class="bg-white/20 rounded-sm py-1 px-2">
                            <p id="marketCapRanking"></p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col justify-between items-center gap-1">
                    <div class="w-full flex flex-row items-center justify-between font-semibold text-lg">
                        <h3 class="text-white/70">Volume</h3>
                        <p class="text-red-800" id="volume24h"></p>
                        <p class="text-white/70" id="volume"></p>
                    </div>
                    <div class="w-full flex flex-row justify-between items-center gap-4">
                        <div class="w-full rounded-full h-2.5 bg-gray-700">
                            <div class="bg-barColor h-2.5 rounded-full" style="width: 50%"></div>
                        </div>
                        <div class="bg-white/20 rounded-sm py-1 px-2">
                            <p id="volumeRanking"></p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-row justify-between items-center font-semibold text-lg">
                    <h3 class="text-white/70">Volume/Market Cap (24h)</h3>
                    <p class="text-white" id="volumeByCap"></p>
                </div>

                <div class="flex flex-col justify-between items-center gap-1">
                    <div class="w-full flex flex-row items-center justify-between font-semibold text-lg">
                        <h3 class="text-white/70">Circulating Supply</h3>
                        <p class="text-white/70" id="circulating"></p>
                    </div>
                    <div class="w-full flex flex-row justify-between items-center gap-4">
                        <div class="w-full rounded-full h-2.5 bg-gray-700">
                            <div class="bg-barColor h-2.5 rounded-full" style="width: 50%"></div>
                        </div>
                        <div class="bg-white/20 rounded-sm py-1 px-2">
                            <p id="circulatePercent"></p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-row justify-between items-center font-semibold text-lg">
                    <h3 class="text-white/70">Total Supply</h3>
                    <p class="text-white" id="totalSupply"></p>
                </div>

                <div class="flex flex-row justify-between items-center font-semibold text-lg">
                    <h3 class="text-white/70">Max Supply</h3>
                    <p class="text-white" id="maxSupply"></p>
                </div>

                <div class="flex flex-row justify-between items-center font-semibold text-lg">
                    <h3 class="text-white/70">Fully Dilluted Market Cap</h3>
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
            </ul>
            <div id="defaultTabContent">
                <div class="hidden p-4 rounded-lg md:p-8 bg-secondaryBg" id="deskripsi" role="tabpanel" aria-labelledby="deskripsi-tab">
                    <div class="flex flex-row items-center gap-2">
                        <img src="" id="logo" class="w-12 h-12" />
                        <h3 id='juduldeskripsi' class=" text-2xl font-extrabold tracking-tight  text-white"></h3>
                    </div>
                    <p id='description' class="mb-3  text-gray-400 mt-3"></p>
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
    console.log(id);

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
    })

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

        console.log(data);
        //Push data into HTML
        document.getElementById("price").innerHTML = data.data[id].quote.IDR.price.toLocaleString("id-ID", {
            style: "currency",
            currency: "IDR"
        });
        document.getElementById("price24h").innerHTML = data.data[id].quote.IDR.percent_change_1h.toFixed(2) + "% (1h)";
        document.getElementById("marketCap24h").innerHTML = data.data[id].quote.IDR.percent_change_24h.toFixed(2) + "% (1d)";
        document.getElementById("marketCap").innerHTML = data.data[id].quote.IDR.market_cap.toLocaleString("id-ID", {
            style: "currency",
            currency: "IDR"
        });
        document.getElementById("volume24h").innerHTML = data.data[id].quote.IDR.volume_change_24h.toFixed(2) + "% (1d)";
        document.getElementById("volume").innerHTML = data.data[id].quote.IDR.volume_24h.toLocaleString("id-ID", {
            style: "currency",
            currency: "IDR"
        });
        document.getElementById("volumeByCap").innerHTML = volumeByCap.toFixed(2) + "%";
        document.getElementById("circulating").innerHTML = data.data[id].circulating_supply.toLocaleString("id-ID") + " " + data.data[id].symbol;
        document.getElementById("circulatePercent").innerHTML = circulatingPercentage.toFixed(2) + "%";
        document.getElementById("totalSupply").innerHTML = data.data[id].total_supply.toLocaleString("id-ID") + " " + data.data[id].symbol;
        document.getElementById("maxSupply").innerHTML = data.data[id].max_supply.toLocaleString("id-ID") + " " + data.data[id].symbol;
        document.getElementById("dillutedMarket").innerHTML = data.data[id].quote.IDR.market_cap.toLocaleString("id-ID", {
            style: "currency",
            currency: "IDR"
        });
        document.getElementById("marketCapRanking").innerHTML = "#" + data.data[id].cmc_rank;
    })

    getGlobalMetrics().then((data) => {
        console.log(data);
    })

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