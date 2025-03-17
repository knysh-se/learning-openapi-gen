<?php

use OpenAPI\Client\Model\Movie;

require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {

    $m = new Movie([
        'title' => 'Inception',
        'description' => 'A mind-bending thriller that explores the nature of dreams.',
        'release_year' => 2010, // если ожидается число; если строка, то '2010'
    ]);
    $apiInstance->moviesPost($m);
    $result = $apiInstance->moviesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->moviesGet: ', $e->getMessage(), PHP_EOL;
}