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

export function buyCoin(id, totalCoin, buyPrice) {
    console.log(buyPrice);
    let portofolio = JSON.parse(localStorage.getItem("portofolio")) || {
        coins: {},
    };
    const totalCoinNew = totalCoin + (portofolio.coins[id]?.totalCoin ?? 0);
    const avgPrice =
        ((portofolio.coins[id]?.avgPrice ?? 0) *
            (portofolio.coins[id]?.totalCoin ?? 0) +
            buyPrice * totalCoin) /
        totalCoinNew;

    portofolio.coins[id] = {
        totalCoin: totalCoinNew,
        avgPrice: avgPrice,
    };

    localStorage.setItem("portofolio", JSON.stringify(portofolio));
}
