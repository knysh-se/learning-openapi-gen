# OpenAPI\Client\DefaultApi

All URIs are relative to http://localhost:8000/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**moviesGet()**](DefaultApi.md#moviesGet) | **GET** /movies | Get a list of all movies |
| [**moviesMovieIdDelete()**](DefaultApi.md#moviesMovieIdDelete) | **DELETE** /movies/{movieId} | Delete movie |
| [**moviesMovieIdGet()**](DefaultApi.md#moviesMovieIdGet) | **GET** /movies/{movieId} | Get movie by ID |
| [**moviesMovieIdPut()**](DefaultApi.md#moviesMovieIdPut) | **PUT** /movies/{movieId} | Update movie information |
| [**moviesPost()**](DefaultApi.md#moviesPost) | **POST** /movies | Create a new movie |
| [**reviewsGet()**](DefaultApi.md#reviewsGet) | **GET** /reviews | Get list of reviews |
| [**reviewsPost()**](DefaultApi.md#reviewsPost) | **POST** /reviews | Create a new review |
| [**reviewsReviewIdDelete()**](DefaultApi.md#reviewsReviewIdDelete) | **DELETE** /reviews/{reviewId} | Delete review |
| [**reviewsReviewIdGet()**](DefaultApi.md#reviewsReviewIdGet) | **GET** /reviews/{reviewId} | Get review by ID |
| [**reviewsReviewIdPut()**](DefaultApi.md#reviewsReviewIdPut) | **PUT** /reviews/{reviewId} | Update review |


## `moviesGet()`

```php
moviesGet(): \OpenAPI\Client\Model\Movie[]
```

Get a list of all movies

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->moviesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->moviesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Movie[]**](../Model/Movie.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `moviesMovieIdDelete()`

```php
moviesMovieIdDelete($movie_id)
```

Delete movie

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$movie_id = 56; // int

try {
    $apiInstance->moviesMovieIdDelete($movie_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->moviesMovieIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **movie_id** | **int**|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `moviesMovieIdGet()`

```php
moviesMovieIdGet($movie_id): \OpenAPI\Client\Model\Movie
```

Get movie by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$movie_id = 56; // int

try {
    $result = $apiInstance->moviesMovieIdGet($movie_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->moviesMovieIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **movie_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\Movie**](../Model/Movie.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `moviesMovieIdPut()`

```php
moviesMovieIdPut($movie_id, $movie): \OpenAPI\Client\Model\Movie
```

Update movie information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$movie_id = 56; // int
$movie = new \OpenAPI\Client\Model\Movie(); // \OpenAPI\Client\Model\Movie

try {
    $result = $apiInstance->moviesMovieIdPut($movie_id, $movie);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->moviesMovieIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **movie_id** | **int**|  | |
| **movie** | [**\OpenAPI\Client\Model\Movie**](../Model/Movie.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Movie**](../Model/Movie.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `moviesPost()`

```php
moviesPost($movie): \OpenAPI\Client\Model\Movie
```

Create a new movie

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$movie = new \OpenAPI\Client\Model\Movie(); // \OpenAPI\Client\Model\Movie

try {
    $result = $apiInstance->moviesPost($movie);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->moviesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **movie** | [**\OpenAPI\Client\Model\Movie**](../Model/Movie.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Movie**](../Model/Movie.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reviewsGet()`

```php
reviewsGet($movie_id): \OpenAPI\Client\Model\Review[]
```

Get list of reviews

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$movie_id = 56; // int | Filter reviews by movie ID

try {
    $result = $apiInstance->reviewsGet($movie_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->reviewsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **movie_id** | **int**| Filter reviews by movie ID | [optional] |

### Return type

[**\OpenAPI\Client\Model\Review[]**](../Model/Review.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reviewsPost()`

```php
reviewsPost($review): \OpenAPI\Client\Model\Review
```

Create a new review

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$review = new \OpenAPI\Client\Model\Review(); // \OpenAPI\Client\Model\Review

try {
    $result = $apiInstance->reviewsPost($review);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->reviewsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **review** | [**\OpenAPI\Client\Model\Review**](../Model/Review.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Review**](../Model/Review.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reviewsReviewIdDelete()`

```php
reviewsReviewIdDelete($review_id)
```

Delete review

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$review_id = 56; // int

try {
    $apiInstance->reviewsReviewIdDelete($review_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->reviewsReviewIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **review_id** | **int**|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reviewsReviewIdGet()`

```php
reviewsReviewIdGet($review_id): \OpenAPI\Client\Model\Review
```

Get review by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$review_id = 56; // int

try {
    $result = $apiInstance->reviewsReviewIdGet($review_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->reviewsReviewIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **review_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\Review**](../Model/Review.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reviewsReviewIdPut()`

```php
reviewsReviewIdPut($review_id, $review): \OpenAPI\Client\Model\Review
```

Update review

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$review_id = 56; // int
$review = new \OpenAPI\Client\Model\Review(); // \OpenAPI\Client\Model\Review

try {
    $result = $apiInstance->reviewsReviewIdPut($review_id, $review);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->reviewsReviewIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **review_id** | **int**|  | |
| **review** | [**\OpenAPI\Client\Model\Review**](../Model/Review.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Review**](../Model/Review.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
