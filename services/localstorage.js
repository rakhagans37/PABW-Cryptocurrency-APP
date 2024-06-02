function saveCoin(id) {
    let coins = JSON.parse(localStorage.getItem("coins")) || [];
    coins.push(id);
    localStorage.setItem("coins", JSON.stringify(coins));
}

function removeCoin(id) {
    let coins = JSON.parse(localStorage.getItem("coins")) || [];
    coins = coins.filter((coin) => coin !== id);
    localStorage.setItem("coins", JSON.stringify(coins));
}

export function addToWatchlist(...id) {
    const watchlist = JSON.parse(localStorage.getItem("watchlist")) || [];
    watchlist.push(...id);
    localStorage.setItem("watchlist", JSON.stringify(watchlist));
}

export function removeFromWatchlist(...id) {
    let watchlist = JSON.parse(localStorage.getItem("watchlist")) || [];
    watchlist = watchlist.filter((coin) => !id.includes(coin));
    localStorage.setItem("watchlist", JSON.stringify(watchlist));
}
