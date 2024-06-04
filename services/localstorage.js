export function addToWatchlist(...id) {
    const watchlist = JSON.parse(localStorage.getItem("watchlist")) || [];
    watchlist.push(...id);
    localStorage.setItem("watchlist", JSON.stringify(watchlist));
}

export function removeFromWatchlist(...id) {
    try {
        let watchlist = JSON.parse(localStorage.getItem("watchlist")) || [];
        watchlist = watchlist.filter((coin) => !id.includes(coin));
        localStorage.setItem("watchlist", JSON.stringify(watchlist));
        return true;
    } catch (error) {
        return false;
    }
}

export function buyCoin(id, totalCoin, buyPrice) {
    try {
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
        return true;
    } catch (error) {
        console.error(error);
        return false;
    }
}

export function deleteCoin(coinToDelete) {
    try {
        const portofolio = JSON.parse(localStorage.getItem("portofolio")) || {
            coins: {},
        };
        delete portofolio.coins[coinToDelete];
        localStorage.setItem("portofolio", JSON.stringify(portofolio));
        return true;
    } catch (error) {
        return false;
    }
}
