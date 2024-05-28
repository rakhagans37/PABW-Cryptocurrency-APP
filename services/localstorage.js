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
