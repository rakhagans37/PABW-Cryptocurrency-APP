export async function getGlobalMetrics(parameter = null) {
    let url = "https://crypto.startuphub.id/models/api/getGlobalMetrics.php";
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
