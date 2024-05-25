<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="./src/output.css" rel="stylesheet">
    <title>Detail Coin</title>
    <style>
        body {
            font-family: 'Sora', sans-serif;
            background-color: #1A1A1A;
            color: white;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 90%;
            margin: 0 auto;
            padding-top: 20px;
        }

        .header {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 40px;
        }

        .header img {
            width: 50px;
            height: 50px;
        }

        .header h1 {
            font-size: 2rem;
            font-weight: 700;
        }

        .datetime {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 40px;
        }

        .grid-container {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 20px;
            margin-bottom: 40px;
        }

        .coin-detail,
        .chart-container {
            background-color: #2A2A2A;
            padding: 20px;
            border-radius: 8px;
        }

        .coin-detail h2 {
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .market-list {
            background-color: #2A2A2A;
            padding: 20px;
            border-radius: 8px;
        }

        .market-list h2 {
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .table-container {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #333;
        }

        tr:nth-child(even) {
            background-color: #444;
        }

        @media (max-width: 768px) {
            .grid-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <img src="./src/img/logo.png" alt="Logo">
            <h1>crypo</h1>
        </div>

        <!-- Date and Time -->
        <div class="datetime" id="datetime"></div>

        <!-- Grid Container -->
        <div class="grid-container">
            <!-- Coin Detail -->
            <div class="coin-detail" id="coin-detail">
                <!-- Coin detail content will be populated here -->
            </div>
            <!-- Chart Container -->
            <div class="chart-container" id="chart-container">
                <!-- TradingView Widget will be embedded here -->
            </div>
        </div>

        <!-- Market List -->
        <div class="market-list">
            <h2>ApeCoin Markets</h2>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Price</th>
                            <th>1h</th>
                            <th>24h</th>
                            <th>7d</th>
                            <th>Market Cap</th>
                            <th>Select</th>
                            <th>Circulating Supply</th>
                            <th>Chart</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Table rows will be populated here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script type="module">
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

        // Load coin details from localStorage
        const coin = JSON.parse(localStorage.getItem('selectedCoin'));
        if (coin) {
            const detailContainer = document.getElementById('coin-detail');
            detailContainer.innerHTML = `
                <h2>${coin.name}</h2>
                <p>Price: Rp.${parseFloat(coin.quote.IDR.price).toLocaleString('id-ID')}</p>
                <p>1h Change: ${coin.quote.IDR.percent_change_1h}%</p>
                <p>24h Change: ${coin.quote.IDR.percent_change_24h}%</p>
                <p>7d Change: ${coin.quote.IDR.percent_change_7d}%</p>
                <p>Market Cap: Rp.${parseFloat(coin.quote.IDR.market_cap).toLocaleString('id-ID')}</p>
                <p>Circulating Supply: ${coin.circulating_supply}</p>
            `;
        }
    </script>
</body>

</html>