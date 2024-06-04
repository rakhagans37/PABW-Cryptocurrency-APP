<?php
/*
 * Function to get all data from API
 * Parameter must be an array (similar to an object in JavaScript)
 */

function getMetaData($parameter = null)
{
    $url = "https://pro-api.coinmarketcap.com/v2/cryptocurrency/info";

    $headers = [
        "Accept: application/json",
        "X-CMC_PRO_API_KEY: 0ad0fd50-4b81-4477-8bd2-2428072a6f2a"
    ];

    if ($parameter !== null) {
        $queryParameter = http_build_query($parameter);
        $url = "$url?$queryParameter";
    }

    $options = [
        "http" => [
            "method" => "GET",
            "header" => implode("\r\n", $headers)
        ]
    ];

    $context = stream_context_create($options);
    $data = file_get_contents($url, false, $context);

    echo json_encode(json_decode($data, true));
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $parameter = $_GET ? $_GET : null;
    getMetaData($parameter);
}
