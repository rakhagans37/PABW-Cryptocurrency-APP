export async function getListLatestCoin(parameter = null) {
    let url =
        "http://localhost/PABW-Cryptocurrency-APP/models/api/getListLatestCoin.php";
    const queryParameter = new URLSearchParams(parameter);

    url = parameter === null ? url : `${url}?${queryParameter.toString()}`;

    let data = await fetch(url, {
        method: "GET",
        headers: {
            Accept: "application/json",
        },
    });
    data = await data.json();
    return data;
}
