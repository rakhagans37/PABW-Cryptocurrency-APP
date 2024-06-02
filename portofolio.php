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

<body class="bg-background w-screen font-sans">
    <!-- Container -->
    <div class="w-full pt-[85px] px-[85px] flex flex-col gap-14">
        <!-- Header -->
        <div class="w-max">
            <a href="index.php">
                <div class="flex flex-row gap-2 items-center w-max">
                    <img src="./src/img/logo.png" class="w-16 h-16" />
                    <h1 class="text-white font-bold text-3xl">crypo</h1>
                </div>
            </a>
        </div>

        <!-- Date and Time -->
        <p class="text-white text-4xl font-extrabold" id="datetime"></p>

        <!-- Wallet -->
        <div class="grid grid-cols-4 gap-20 items-center">
            <!-- Total Asset -->
            <div class="flex flex-col gap-5">
                <h1 class="text-grayText text-3xl">My Portofolio</h1>
                <p class="text-white text-5xl font-bold">Rp. 160000</p>
                <div class="flex flex-row gap-4 items-center ">
                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.9997 2.33325C7.55967 2.33325 2.33301 7.55992 2.33301 13.9999C2.33301 20.4399 7.55967 25.6666 13.9997 25.6666C20.4397 25.6666 25.6663 20.4399 25.6663 13.9999C25.6663 7.55992 20.4397 2.33325 13.9997 2.33325ZM18.118 14.0349C17.943 14.2099 17.7213 14.2916 17.4997 14.2916C17.278 14.2916 17.0563 14.2099 16.8813 14.0349L14.8747 12.0283V18.0833C14.8747 18.5616 14.478 18.9583 13.9997 18.9583C13.5213 18.9583 13.1247 18.5616 13.1247 18.0833V12.0283L11.118 14.0349C10.7797 14.3733 10.2197 14.3733 9.88134 14.0349C9.54301 13.6966 9.54301 13.1366 9.88134 12.7983L13.3813 9.29825C13.7197 8.95992 14.2797 8.95992 14.618 9.29825L18.118 12.7983C18.4563 13.1366 18.4563 13.6966 18.118 14.0349Z" fill="#14C784" />
                    </svg>
                    <p class="text-greenCustom text-2xl font-semibold">Rp. 10.000</p>
                </div>
            </div>
            <!-- Total Asset End -->

            <!-- Data -->
            <div class="backdrop-blur bg-secondaryBg/50 grid grid-cols-3 col-span-3 py-6 px-10 gap-8 rounded-xl shadow-sm shadow-black">
                <div class="bg-thirdBg flex flex-col py-5 px-5 gap-2 rounded-lg shadow-sm">
                    <h2 class="text-grayText text-3xl">All-Time Profit</h2>
                    <p class="text-greenCustom text-2xl font-bold">+ Rp. 10.000</p>
                    <div class="flex flex-row gap-4 items-center ">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.9997 2.33325C7.55967 2.33325 2.33301 7.55992 2.33301 13.9999C2.33301 20.4399 7.55967 25.6666 13.9997 25.6666C20.4397 25.6666 25.6663 20.4399 25.6663 13.9999C25.6663 7.55992 20.4397 2.33325 13.9997 2.33325ZM18.118 14.0349C17.943 14.2099 17.7213 14.2916 17.4997 14.2916C17.278 14.2916 17.0563 14.2099 16.8813 14.0349L14.8747 12.0283V18.0833C14.8747 18.5616 14.478 18.9583 13.9997 18.9583C13.5213 18.9583 13.1247 18.5616 13.1247 18.0833V12.0283L11.118 14.0349C10.7797 14.3733 10.2197 14.3733 9.88134 14.0349C9.54301 13.6966 9.54301 13.1366 9.88134 12.7983L13.3813 9.29825C13.7197 8.95992 14.2797 8.95992 14.618 9.29825L18.118 12.7983C18.4563 13.1366 18.4563 13.6966 18.118 14.0349Z" fill="#14C784" />
                        </svg>
                        <p class="text-greenCustom text-2xl font-semibold">0,3%</p>
                    </div>
                </div>
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
            </div>

        </div>
    </div> <!-- Container End -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>