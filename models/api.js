/*
 *Function to get all data from API
 *Paremeter must be an object
 *Uncomment this code below
 */

export async function getListLatestCoin(parameter = null) {
    let url =
        "https://cors-anywhere.herokuapp.com/https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest";

    const header = {
        Accept: "application/json",
        "X-CMC_PRO_API_KEY": "0ad0fd50-4b81-4477-8bd2-2428072a6f2a",
    };

    const queryParameter = new URLSearchParams(parameter);

    url = parameter === null ? url : `${url}?${queryParameter.toString()}`;

    let data = await fetch(url, {
        method: "GET",
        headers: header,
    });
    data = await data.json();
    return data;
}
