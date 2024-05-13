<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./src/output.css" rel="stylesheet" />
</head>

<body>
    <p id="text"></p>
</body>

<script>
    async function getAllData() {
        const url =
            "https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest"

        const header = {
            Accept: "application/json",
            'X-CMC_PRO_API_KEY': '0ad0fd50-4b81-4477-8bd2-2428072a6f2a',
        }

        const queryParameter = new URLSearchParams({
            limit: 10,
            conver: "IDR"
        })

        let data = await fetch(url, {
            method: "GET",
            headers: header
        })
        data = await data.json();
        return data;
    }

    getAllData().then((data) => {
        console.log(data);
        document.getElementById("text").innerHTML = JSON.stringify(data);
    });
</script>

</html>