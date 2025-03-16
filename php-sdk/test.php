<?php
require __DIR__ . '/vendor/autoload.php';

use OpenAPI\Client\Configuration;
use OpenAPI\Client\Api\MoviesApi;
use GuzzleHttp\Client;

// Настройка клиента API
$config = Configuration::getDefaultConfiguration()
    ->setHost('http://api.streamingvideoservice.com/v1');
// Если требуется API-ключ или другая авторизация, настройте их здесь:
// ->setApiKey('X-API-KEY', 'your_api_key_here');

$apiClient = new MoviesApi(new Client(), $config);

try {
    // Попытка получить список фильмов
    $movies = $apiClient->getMovies();
    print_r($movies);
} catch (Exception $e) {
    echo 'Ошибка при вызове API: ', $e->getMessage(), PHP_EOL;
}
