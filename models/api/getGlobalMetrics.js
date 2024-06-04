export async function getGlobalMetrics(parameter = null) {
    let url =
        "http://localhost/PABW-Cryptocurrency-APP/api/getGlobalMetrics.php";
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
