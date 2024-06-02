// Function if user click search button
function search() {
    if (document.getElementById("table-search").value == "") {
        return;
    }
    const search = document.getElementById("table-search").value;
    const param = new URLSearchParams({
        search: search,
    });
    window.location.href = "index.php?" + param.toString();
}

// Function to go to next page
function nextPage() {
    const urlSearchParams = new URLSearchParams(window.location.search);
    const page = urlSearchParams.get("page");
    const nextPage = parseInt(page ?? 1) + 1;
    const newParam = new URLSearchParams({
        page: nextPage,
    });

    window.location.href = "index.php?" + newParam.toString();
}

// Function to go to previous page
function prevPage() {
    const urlSearchParams = new URLSearchParams(window.location.search);
    const page = urlSearchParams.get("page") ?? null;
    const nextPage =
        page == 1 || page == null ? parseInt(1) : parseInt(page ?? 1) - 1;
    const newParam = new URLSearchParams({
        page: nextPage,
    });

    window.location.href = "index.php?" + newParam.toString();
}
