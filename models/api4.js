export async function getGlobalMetrics(parameter = null) {
    let url =
        "https://pro-api.coinmarketcap.com/v1/global-metrics/quotes/latest";

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
