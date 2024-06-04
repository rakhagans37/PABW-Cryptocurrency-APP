<!DOCTYPE html>
<html>

<head>
    <title>Crypo - Pantauan Crypto</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link href="./src/output.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
</head>

<body class="bg-background w-screen font-sans dark">
    <!-- Decoration -->
    <div class="absolute -z-10">
        <img src="assets/gradient2.svg" width="500px">
    </div>

    <div class="absolute -z-10 right-0">
        <img src="assets/gradient3.svg" width="500px">
    </div>

    <!-- Container -->
    <div class="w-full pt-[85px] px-[85px] flex flex-col gap-14">
        <!-- Header -->
        <div class="flex flex-col gap-5 md:flex-row md:justify-between md:items-end">
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

        <!-- Date and Time -->
        <div class="flex flex-row justify-between">
            <p class="text-white text-4xl font-extrabold" id="datetime">Senin, 3 Juni 2024</p>
            <button id="buy-asset-btn" data-modal-target="crypto-modal" data-modal-toggle="crypto-modal" class="block text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                <div class="flex flex-row justify-between gap-2 items-center">
                    <p>Buy Asset</p>
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.285 0H8.715C3.255 0 0 3.255 0 8.715V21.27C0 26.745 3.255 30 8.715 30H21.27C26.73 30 29.985 26.745 29.985 21.285V8.715C30 3.255 26.745 0 21.285 0ZM21 16.125H16.125V21C16.125 21.615 15.615 22.125 15 22.125C14.385 22.125 13.875 21.615 13.875 21V16.125H9C8.385 16.125 7.875 15.615 7.875 15C7.875 14.385 8.385 13.875 9 13.875H13.875V9C13.875 8.385 14.385 7.875 15 7.875C15.615 7.875 16.125 8.385 16.125 9V13.875H21C21.615 13.875 22.125 14.385 22.125 15C22.125 15.615 21.615 16.125 21 16.125Z" fill="#FCFCFC" />
                    </svg>
                </div>
            </button>
        </div>

        <!-- Main modal -->
        <div id="crypto-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Pilih Koin
                        </h3>
                        <button id="close-crypto-modal" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crypto-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5">
                        <p class="text-gray-500 dark:text-gray-400 mb-4">Select your desired position:</p>
                        <ul class="space-y-4 mb-4 h-80 overflow-scroll" id="choosen-coin">

                        </ul>
                        <button id="crypto-next-button" data-modal-target="crypto-next-modal" data-modal-toggle="crypto-next-modal" class="text-white inline-flex w-full justify-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Next step
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Secondary modal -->
        <div id="crypto-next-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative rounded-lg shadow bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-600">
                        <h3 class="text-lg font-semibold text-white">
                            Beli Koin
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crypto-next-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>

                    <!-- Modal body -->
                    <form class="hidden p-4 md:p-5" id="buy-form">
                        <!-- Data -->
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2 flex flex-row items-center gap-2">
                                <img width="32px" height="32px" src="" alt="Coin Logo" id="buy-coin-logo">
                                <p id="buy-coin-name" class="text-white font-semibold"></p>
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Koin</label>
                                <input type="number" name="totalCoin" id="totalCoin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="0,41241" required="" value="1">
                            </div>
                            <div class="col-span-2 sm:col-span-2">
                                <label for="subtotal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subtotal</label>
                                <input type="text" name="subtotal" id="subtotal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="0,41241" required="" disabled>
                            </div>
                        </div>
                        <button type="submit" class="inline-flex text-white items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                            </svg>
                            Beli Koin
                        </button>
                        <!-- Data End -->
                    </form>

                    <!-- Loading -->
                    <div role="status" class="space-y-2.5 animate-pulse max-w-lg p-4 md:p-5" id="loading">
                        <div class="flex items-center w-full">
                            <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-32"></div>
                            <div class="h-2.5 ms-2 bg-gray-300 rounded-full dark:bg-gray-600 w-24"></div>
                            <div class="h-2.5 ms-2 bg-gray-300 rounded-full dark:bg-gray-600 w-full"></div>
                        </div>
                        <div class="flex items-center w-full max-w-[480px]">
                            <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full"></div>
                            <div class="h-2.5 ms-2 bg-gray-300 rounded-full dark:bg-gray-600 w-full"></div>
                            <div class="h-2.5 ms-2 bg-gray-300 rounded-full dark:bg-gray-600 w-24"></div>
                        </div>
                        <div class="flex items-center w-full max-w-[400px]">
                            <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-full"></div>
                            <div class="h-2.5 ms-2 bg-gray-200 rounded-full dark:bg-gray-700 w-80"></div>
                            <div class="h-2.5 ms-2 bg-gray-300 rounded-full dark:bg-gray-600 w-full"></div>
                        </div>
                        <div class="flex items-center w-full max-w-[480px]">
                            <div class="h-2.5 ms-2 bg-gray-200 rounded-full dark:bg-gray-700 w-full"></div>
                            <div class="h-2.5 ms-2 bg-gray-300 rounded-full dark:bg-gray-600 w-full"></div>
                            <div class="h-2.5 ms-2 bg-gray-300 rounded-full dark:bg-gray-600 w-24"></div>
                        </div>
                        <div class="flex items-center w-full max-w-[440px]">
                            <div class="h-2.5 ms-2 bg-gray-300 rounded-full dark:bg-gray-600 w-32"></div>
                            <div class="h-2.5 ms-2 bg-gray-300 rounded-full dark:bg-gray-600 w-24"></div>
                            <div class="h-2.5 ms-2 bg-gray-200 rounded-full dark:bg-gray-700 w-full"></div>
                        </div>
                        <div class="flex items-center w-full max-w-[360px]">
                            <div class="h-2.5 ms-2 bg-gray-300 rounded-full dark:bg-gray-600 w-full"></div>
                            <div class="h-2.5 ms-2 bg-gray-200 rounded-full dark:bg-gray-700 w-80"></div>
                            <div class="h-2.5 ms-2 bg-gray-300 rounded-full dark:bg-gray-600 w-full"></div>
                        </div>
                        <span class="sr-only">Loading...</span>
                    </div>
                    <!-- Loading End -->
                </div>
            </div>
        </div>

        <!-- Wallet -->
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-20 items-center">
            <!-- Total Asset -->
            <div class="flex flex-col gap-5 lg:col-span-2">
                <h1 class="text-grayText text-3xl">My Portofolio</h1>
                <p class="text-white text-5xl font-bold" id="ballance"></p>
                <div class="flex flex-row gap-4 items-center">
                    <img src="./assets/arrow-top.svg" alt="" id="profit-icon" width="28px" height="28px">
                    <p class="text-greenCustom text-2xl font-semibold" id="ballance-profit"></p>
                </div>
            </div>
            <!-- Total Asset End -->

            <!-- Data -->
            <div class="backdrop-blur bg-secondaryBg/60 grid md:grid-cols-2 lg:col-span-3 py-6 px-10 gap-8 rounded-xl shadow-sm shadow-black">
                <div class="bg-thirdBg flex flex-col py-5 px-5 gap-2 rounded-lg shadow-sm">
                    <h2 class="text-grayText text-3xl">Best Performer</h2>
                    <p class="text-greenCustom text-2xl font-bold">+ Rp. 10.000</p>
                    <div class="flex flex-row gap-4 items-center ">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.9997 2.33325C7.55967 2.33325 2.33301 7.55992 2.33301 13.9999C2.33301 20.4399 7.55967 25.6666 13.9997 25.6666C20.4397 25.6666 25.6663 20.4399 25.6663 13.9999C25.6663 7.55992 20.4397 2.33325 13.9997 2.33325ZM18.118 14.0349C17.943 14.2099 17.7213 14.2916 17.4997 14.2916C17.278 14.2916 17.0563 14.2099 16.8813 14.0349L14.8747 12.0283V18.0833C14.8747 18.5616 14.478 18.9583 13.9997 18.9583C13.5213 18.9583 13.1247 18.5616 13.1247 18.0833V12.0283L11.118 14.0349C10.7797 14.3733 10.2197 14.3733 9.88134 14.0349C9.54301 13.6966 9.54301 13.1366 9.88134 12.7983L13.3813 9.29825C13.7197 8.95992 14.2797 8.95992 14.618 9.29825L18.118 12.7983C18.4563 13.1366 18.4563 13.6966 18.118 14.0349Z" fill="#14C784" />
                        </svg>
                        <p class="text-greenCustom text-2xl font-semibold">0,3%</p>
                    </div>
                </div>
                <div class="bg-thirdBg flex flex-col py-5 px-5 gap-2 rounded-lg shadow-sm">
                    <h2 class="text-grayText text-3xl">Worst Performer</h2>
                    <p class="text-greenCustom text-2xl font-bold">+ Rp. 10.000</p>
                    <div class="flex flex-row gap-4 items-center ">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.9997 2.33325C7.55967 2.33325 2.33301 7.55992 2.33301 13.9999C2.33301 20.4399 7.55967 25.6666 13.9997 25.6666C20.4397 25.6666 25.6663 20.4399 25.6663 13.9999C25.6663 7.55992 20.4397 2.33325 13.9997 2.33325ZM18.118 14.0349C17.943 14.2099 17.7213 14.2916 17.4997 14.2916C17.278 14.2916 17.0563 14.2099 16.8813 14.0349L14.8747 12.0283V18.0833C14.8747 18.5616 14.478 18.9583 13.9997 18.9583C13.5213 18.9583 13.1247 18.5616 13.1247 18.0833V12.0283L11.118 14.0349C10.7797 14.3733 10.2197 14.3733 9.88134 14.0349C9.54301 13.6966 9.54301 13.1366 9.88134 12.7983L13.3813 9.29825C13.7197 8.95992 14.2797 8.95992 14.618 9.29825L18.118 12.7983C18.4563 13.1366 18.4563 13.6966 18.118 14.0349Z" fill="#14C784" />
                        </svg>
                        <p class="text-greenCustom text-2xl font-semibold">0,3%</p>
                    </div>
                </div>
            </div> <!-- Data End -->
        </div> <!-- Wallet End -->

        <!-- Table -->
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga Rata Rata
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Total Koin
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nilai Aset
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Saran
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody id="portofolio-table">

                </tbody>
            </table>
        </div> <!-- Table End -->

        <div id="dropdown-container">

        </div>
    </div> <!-- Container End -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

<script type="module">
    // Import the functions you need from the SDKs you need
    import {
        getLatestQuote
    } from './models/api/getLatestQuote.js';

    import {
        getListLatestCoin
    } from './models/api/getListLatestCoin.js';

    import {
        getMetaData
    } from './models/api/getMetaData.js';

    import {
        buyCoin
    } from './services/localstorage.js';

    const portofolio = JSON.parse(localStorage.getItem('portofolio')) || {
        coins: {}
    };
    const coins = Object.keys(portofolio.coins);

    // Get Latest Quote
    getLatestQuote({
        id: coins.toString(),
        convert: "IDR"
    }).then((data) => {
        let ballance = 0;
        let totalProfit = 0;
        // Display the data
        coins.forEach(element => {
            const tableBody = document.getElementById("portofolio-table");

            const newRow = document.createElement("tr");
            newRow.classList.add("bg-secondaryBg/60", "border-gray-700");

            const nameCell = document.createElement("th");
            nameCell.setAttribute("scope", "row");
            nameCell.classList.add("px-6", "py-4", "font-medium", "whitespace-nowrap", "text-white");
            nameCell.textContent = data.data[element].name;

            const colorCell = document.createElement("td");
            colorCell.classList.add("px-6", "py-4", "text-white", "font-medium");
            colorCell.textContent = "Rp. " + portofolio.coins[element].avgPrice.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");

            const typeCell = document.createElement("td");
            typeCell.classList.add("px-6", "py-4", "text-white", "font-medium");
            typeCell.textContent = portofolio.coins[element].totalCoin + " " + data.data[element].symbol;

            const priceCell = document.createElement("td");
            const priceDiv = document.createElement("div");
            const priceSpan = document.createElement("span");
            const profitSpan = document.createElement("span");
            const profit = (data.data[element].quote.IDR.price - portofolio.coins[element].avgPrice) * portofolio.coins[element].totalCoin;
            priceCell.classList.add("px-6", "py-4");
            priceDiv.classList.add("flex", "flex-col", "gap-2", "justify-center");
            priceSpan.classList.add("text-white", "font-bold");
            priceSpan.textContent = "Rp. " + (data.data[element].quote.IDR.price * portofolio.coins[element].totalCoin).toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            if (profit > 0) {
                profitSpan.textContent = "+ Rp. " + profit.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                profitSpan.classList.add("text-greenCustom");
            } else {
                profitSpan.textContent = "- Rp. " + Math.abs(profit).toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                profitSpan.classList.add("text-redCustom");
            }
            priceDiv.appendChild(priceSpan);
            priceDiv.appendChild(profitSpan);
            priceCell.appendChild(priceDiv);

            const suggestionCell = document.createElement("td");
            suggestionCell.classList.add("px-6", "py-4");
            suggestionCell.textContent = "Buy";

            const actionCell = document.createElement("td");
            actionCell.classList.add("px-6", "py-4");

            const dropdownButton = document.createElement("button");
            dropdownButton.setAttribute("id", "dropdownMenuIconHorizontalButton");
            dropdownButton.setAttribute("data-dropdown-toggle", "dropdownDotsHorizontal");
            dropdownButton.setAttribute("type", "button");

            const dropdownImage = document.createElement("img");
            dropdownImage.setAttribute("src", "./assets/more.svg");
            dropdownImage.setAttribute("alt", "more-button");

            dropdownButton.appendChild(dropdownImage);
            actionCell.appendChild(dropdownButton);

            newRow.appendChild(nameCell);
            newRow.appendChild(colorCell);
            newRow.appendChild(typeCell);
            newRow.appendChild(priceCell);
            newRow.appendChild(suggestionCell);
            newRow.appendChild(actionCell);

            tableBody.appendChild(newRow);

            const dropdownContainer = document.getElementById("dropdown-container");

            const dropdownDiv = document.createElement("div");
            dropdownDiv.setAttribute("id", "dropdownDotsHorizontal");
            dropdownDiv.classList.add("z-10", "hidden", "divide-y", "rounded-lg", "shadow", "w-44", "bg-gray-700", "divide-gray-600");

            const dropdownList = document.createElement("ul");
            dropdownList.classList.add("py-2", "text-sm", "text-gray-200");
            dropdownList.setAttribute("aria-labelledby", "dropdownMenuIconHorizontalButton");

            const buyItem = document.createElement("li");
            const buyLink = document.createElement("a");
            buyLink.setAttribute("href", "#");
            buyLink.classList.add("block", "px-4", "py-2", "hover:bg-gray-600", "hover:text-white");
            buyLink.textContent = "Beli";
            buyItem.appendChild(buyLink);

            const sellItem = document.createElement("li");
            const sellLink = document.createElement("a");
            sellLink.setAttribute("href", "#");
            sellLink.classList.add("block", "px-4", "py-2", "hover:bg-gray-600", "hover:text-white");
            sellLink.textContent = "Jual";
            sellItem.appendChild(sellLink);

            dropdownList.appendChild(buyItem);
            dropdownList.appendChild(sellItem);

            dropdownDiv.appendChild(dropdownList);
            dropdownContainer.appendChild(dropdownDiv);

            ballance += data.data[element].quote.IDR.price * portofolio.coins[element].totalCoin;
            totalProfit += profit;
        });
        document.getElementById("ballance").textContent = "Rp. " + ballance.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        if (totalProfit < 0) {
            document.getElementById("ballance-profit").textContent = "Rp. " + Math.abs(totalProfit).toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            document.getElementById("ballance-profit").classList.add("text-redCustom");
            document.getElementById("profit-icon").setAttribute("src", "./assets/arrow-bottom.svg");
        } else {
            document.getElementById("ballance-profit").textContent = "Rp. " + totalProfit.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            document.getElementById("ballance-profit").classList.add("text-greenCustom");
        }
    });

    // Get List of Coins
    getListLatestCoin({
        convert: "IDR"
    }).then((data) => {
        // Display the data
        data.data.forEach(element => {
            const choosenCoin = document.getElementById("choosen-coin");
            const li = document.createElement("li");
            const radioInput = document.createElement("input");
            radioInput.type = "radio";
            radioInput.id = element.id;
            radioInput.name = "coin";
            radioInput.value = element.id;
            radioInput.classList.add("hidden", "peer");

            const label = document.createElement("label");
            label.htmlFor = element.id;
            label.classList.add(
                "inline-flex",
                "items-center",
                "justify-between",
                "w-full",
                "p-3",
                "text-gray-900",
                "bg-white",
                "border",
                "border-gray-200",
                "rounded-lg",
                "cursor-pointer",
                "dark:hover:text-gray-300",
                "dark:border-gray-500",
                "dark:peer-checked:text-blue-500",
                "peer-checked:border-blue-600",
                "peer-checked:text-blue-600",
                "hover:text-gray-900",
                "hover:bg-gray-100",
                "dark:text-white",
                "dark:bg-gray-600",
                "dark:hover:bg-gray-500"
            );

            const div = document.createElement("div");
            div.classList.add("w-full", "text-md", "font-semibold");
            div.textContent = element.name + " (" + element.symbol + ")";

            const img = document.createElement("img");
            img.src = "./assets/arrow-right.svg";

            label.appendChild(div);
            label.appendChild(img);
            li.appendChild(radioInput);
            li.appendChild(label);
            choosenCoin.appendChild(li);
        });
    });

    // Event Listener for Buy Asset Button
    document.getElementById("buy-asset-btn").addEventListener("click", () => {
        const modal = new Modal(document.getElementById("crypto-modal"));
        modal.show();
    });

    // Event Listener for Close Modal Button
    document.getElementById("close-crypto-modal").addEventListener("click", () => {
        const modal = new Modal(document.getElementById("crypto-modal"));
        modal.hide();
    });

    // Event Listener for Price Form
    document.getElementById("price").addEventListener("change", () => {
        const price = document.getElementById("price").value;
        const totalCoin = document.getElementById("totalCoin").value;
        const subtotal = document.getElementById("subtotal");
        subtotal.value = (price * totalCoin).toFixed();
    });

    // Event Listener for Close Total Coin Form
    document.getElementById("totalCoin").addEventListener("change", () => {
        const price = document.getElementById("price").value;
        const totalCoin = document.getElementById("totalCoin").value;
        const subtotal = document.getElementById("subtotal");
        subtotal.value = (price * totalCoin).toFixed();
    });

    // Event Listener for Buy Form
    document.getElementById("buy-form").addEventListener("submit", (e) => {
        e.preventDefault();
        const choosenCoin = document.getElementById("choosen-coin");
        const modal = new Modal(document.getElementById("crypto-modal"));
        const selectedCoin = choosenCoin.querySelector("input:checked").value;
        const price = document.getElementById("price").value;
        const totalCoin = document.getElementById("totalCoin").value;

        if (buyCoin(selectedCoin, parseFloat(totalCoin), parseFloat(price))) {
            modal.hide();
            window.location.reload();
        }
    });

    // Event Listener for Next Button
    document.getElementById("crypto-next-button").addEventListener("click", () => {
        const choosenCoin = document.getElementById("choosen-coin");
        const modal = new Modal(document.getElementById("crypto-modal"));
        const selectedCoin = choosenCoin.querySelector("input:checked").value;
        modal.hide();
        document.getElementById("loading").classList.remove("hidden");
        document.getElementById("buy-form").classList.add("hidden");

        getLatestQuote({
            id: selectedCoin,
            convert: "IDR"
        }).then((data) => {
            const buyCoinName = document.getElementById("buy-coin-name");
            const price = document.getElementById("price");
            const subtotal = document.getElementById("subtotal");
            price.value = data.data[selectedCoin].quote.IDR.price.toFixed();
            subtotal.value = data.data[selectedCoin].quote.IDR.price.toFixed();
            buyCoinName.textContent = data.data[selectedCoin].name + " (" + data.data[selectedCoin].symbol + ")";
        }).then(() => {
            getMetaData({
                id: selectedCoin
            }).then((data) => {
                const buyCoinLogo = document.getElementById("buy-coin-logo");
                buyCoinLogo.src = data.data[selectedCoin].logo;
                document.getElementById("loading").classList.add("hidden");
                document.getElementById("buy-form").classList.remove("hidden");
            });
        });
    });
</script>

</html>