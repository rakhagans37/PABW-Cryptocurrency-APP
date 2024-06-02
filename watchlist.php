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
    <!-- Container -->
    <div class="w-full pt-[85px] px-[85px] flex flex-col gap-14">
        <!-- Header -->
        <a class="flex flex-row gap-2 items-center" href="index.php">
            <img src="./src/img/logo.png" class="w-16 h-16" />
            <h1 class="text-white font-bold text-3xl">crypo</h1>
        </a>
        <!-- Judul -->
        <div class="grid-cols-2">
            <div class="flex flex-row justify-between items-center mb-5">
                <p class="text-white text-4xl font-extrabold">My First Coin Watchlist</p>
                <button id="add-asset-btn" data-modal-target="select-modal" data-modal-toggle="select-modal" class="block text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    <div class="flex flex-row justify-between gap-2 items-center">
                        <p>Add Asset</p>
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.285 0H8.715C3.255 0 0 3.255 0 8.715V21.27C0 26.745 3.255 30 8.715 30H21.27C26.73 30 29.985 26.745 29.985 21.285V8.715C30 3.255 26.745 0 21.285 0ZM21 16.125H16.125V21C16.125 21.615 15.615 22.125 15 22.125C14.385 22.125 13.875 21.615 13.875 21V16.125H9C8.385 16.125 7.875 15.615 7.875 15C7.875 14.385 8.385 13.875 9 13.875H13.875V9C13.875 8.385 14.385 7.875 15 7.875C15.615 7.875 16.125 8.385 16.125 9V13.875H21C21.615 13.875 22.125 14.385 22.125 15C22.125 15.615 21.615 16.125 21 16.125Z" fill="#FCFCFC" />
                        </svg>
                    </div>
                </button>
                <div id="select-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <!-- Modal content -->
                        <div class="relative rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-lg font-semibold dark:text-white">
                                    Select Coins
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="select-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-4 md:p-5">
                                <ul id="coin-list" class="space-y-4 mb-4 text-white">
                                    
                                </ul>
                                <button class="inline-flex w-full justify-center text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                    Save
                                </button>
                                </button>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>

        <!-- Table -->
        <div class="flex flex-row sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-end justify-between">
            <!-- Data Table Start -->
            <table class="w-full text-sm text-left rtl:text-right text-gray-400">
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

       getListLatestCoin().then((data) => {
            console.log(data);
        });
        document.getElementById("add-asset-btn").addEventListener("click", function() {
            document.getElementById("select-modal").classList.toggle("hidden");
            // Get the coin list element
            var coinList = document.getElementById("coin-list");
            
            // Clear the existing coin list
            coinList.innerHTML = "";
            
            // Fetch the data from the API
            getListLatestCoin().then((data) => {
            // Loop through the data and create options for each coin
            data.data.forEach((coin) => {
                // Create a new option element
                var option = document.createElement("li");
                 // Create a new checkbox element
                var checkbox = document.createElement("input");
                checkbox.type = "checkbox";
                checkbox.value = coin.id;

                // Create a label for the checkbox
                var label = document.createElement("label");
                label.textContent = coin.symbol + coin.name;

                // Append the checkbox and label to the list item
                listItem.appendChild(checkbox);
                listItem.appendChild(label);

                // Append the list item to the coin list
                coinList.appendChild(listItem);

                // Set the value of the option to the coin's ID
                option.value = coin.id;
                
                // Set the text of the option to the coin's name and symbol
                option.textContent = coin.symbol + coin.name ;
                
                // Append the option to the coin list
                coinList.appendChild(option);
            });
            });
   
                                           
        });
    </script>
</body>
</html>
