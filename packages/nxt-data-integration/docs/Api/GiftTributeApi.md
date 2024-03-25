# SKY\NXT\DataIntegration\GiftTributeApi

All URIs are relative to https://api.sky.blackbaud.com/nxt-data-integration, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createGiftTribute()**](GiftTributeApi.md#createGiftTribute) | **POST** /v1/re/gifttribute | Create a gift tribute |
| [**deleteGiftTribute()**](GiftTributeApi.md#deleteGiftTribute) | **DELETE** /v1/re/gifttribute/{giftTributeId} | Delete a gift tribute |
| [**editGiftTribute()**](GiftTributeApi.md#editGiftTribute) | **PATCH** /v1/re/gifttribute/{giftTributeId} | Edit a gift tribute |
| [**editGiftTributeAcknowledgee()**](GiftTributeApi.md#editGiftTributeAcknowledgee) | **PATCH** /v1/re/gifttribute/acknowledgees/{giftTributeAcknowledgeeId} | Edit a gift tribute acknowledgee |
| [**getAllGiftTributes()**](GiftTributeApi.md#getAllGiftTributes) | **GET** /v1/re/gifttribute | Get all gift tributes |
| [**getGiftTributeById()**](GiftTributeApi.md#getGiftTributeById) | **GET** /v1/re/gifttribute/{giftTributeId} | Get a gift tribute by ID |
| [**getGiftTributeByImportId()**](GiftTributeApi.md#getGiftTributeByImportId) | **GET** /v1/re/gifttribute/importid/{importId} | Get a gift tribute by import ID |
| [**listGiftTributeAcknowledgees()**](GiftTributeApi.md#listGiftTributeAcknowledgees) | **GET** /v1/re/gifttribute/{giftTributeId}/acknowledgees | List gift tribute acknowledgees |
| [**listGiftTributes()**](GiftTributeApi.md#listGiftTributes) | **GET** /v1/re/gifttribute/gift/{giftId} | List gift tributes |


## `createGiftTribute()`

```php
createGiftTribute($giftTributeCreate): \SKY\NXT\DataIntegration\Model\PostResponse
```

Create a gift tribute

Creates a new gift tribute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = SKY\NXT\DataIntegration\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\NXT\DataIntegration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = SKY\NXT\DataIntegration\Configuration::getDefaultConfiguration()->setApiKey('Bb-Api-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\NXT\DataIntegration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Bb-Api-Subscription-Key', 'Bearer');


$apiInstance = new SKY\NXT\DataIntegration\Api\GiftTributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$giftTributeCreate = {"gift_id":12,"tribute_id":2,"import_id":"IMPORT-0001"}; // \SKY\NXT\DataIntegration\Model\GiftTributeCreate | The gift tribute to add.

try {
    $result = $apiInstance->createGiftTribute($giftTributeCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftTributeApi->createGiftTribute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **giftTributeCreate** | [**\SKY\NXT\DataIntegration\Model\GiftTributeCreate**](../Model/GiftTributeCreate.md)| The gift tribute to add. | [optional] |

### Return type

[**\SKY\NXT\DataIntegration\Model\PostResponse**](../Model/PostResponse.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteGiftTribute()`

```php
deleteGiftTribute($giftTributeId)
```

Delete a gift tribute

Deletes a gift tribute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = SKY\NXT\DataIntegration\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\NXT\DataIntegration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = SKY\NXT\DataIntegration\Configuration::getDefaultConfiguration()->setApiKey('Bb-Api-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\NXT\DataIntegration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Bb-Api-Subscription-Key', 'Bearer');


$apiInstance = new SKY\NXT\DataIntegration\Api\GiftTributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$giftTributeId = 56; // int | Format - int32. The ID of the gift tribute to delete.

try {
    $apiInstance->deleteGiftTribute($giftTributeId);
} catch (Exception $e) {
    echo 'Exception when calling GiftTributeApi->deleteGiftTribute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **giftTributeId** | **int**| Format - int32. The ID of the gift tribute to delete. | |

### Return type

void (empty response body)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `editGiftTribute()`

```php
editGiftTribute($giftTributeId, $giftTributeEdit)
```

Edit a gift tribute

Update the details about a gift tribute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = SKY\NXT\DataIntegration\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\NXT\DataIntegration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = SKY\NXT\DataIntegration\Configuration::getDefaultConfiguration()->setApiKey('Bb-Api-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\NXT\DataIntegration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Bb-Api-Subscription-Key', 'Bearer');


$apiInstance = new SKY\NXT\DataIntegration\Api\GiftTributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$giftTributeId = 56; // int | Format - int32. The ID of the gift tribute to update.
$giftTributeEdit = {"tribute_type":6,"acknowledge":"Acknowledged"}; // \SKY\NXT\DataIntegration\Model\GiftTributeEdit | Description of changes for the gift tribute.

try {
    $apiInstance->editGiftTribute($giftTributeId, $giftTributeEdit);
} catch (Exception $e) {
    echo 'Exception when calling GiftTributeApi->editGiftTribute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **giftTributeId** | **int**| Format - int32. The ID of the gift tribute to update. | |
| **giftTributeEdit** | [**\SKY\NXT\DataIntegration\Model\GiftTributeEdit**](../Model/GiftTributeEdit.md)| Description of changes for the gift tribute. | [optional] |

### Return type

void (empty response body)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `editGiftTributeAcknowledgee()`

```php
editGiftTributeAcknowledgee($giftTributeAcknowledgeeId, $giftTributeAcknowledgeeEdit)
```

Edit a gift tribute acknowledgee

Update the details about a gift tribute acknowledgee.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = SKY\NXT\DataIntegration\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\NXT\DataIntegration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = SKY\NXT\DataIntegration\Configuration::getDefaultConfiguration()->setApiKey('Bb-Api-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\NXT\DataIntegration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Bb-Api-Subscription-Key', 'Bearer');


$apiInstance = new SKY\NXT\DataIntegration\Api\GiftTributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$giftTributeAcknowledgeeId = 56; // int | Format - int32. The ID of the gift tribute acknowledgee to update.
$giftTributeAcknowledgeeEdit = {"letter":6,"letter_date":"0001-01-01T12:00:00.0000000+00:00"}; // \SKY\NXT\DataIntegration\Model\GiftTributeAcknowledgeeEdit | Description of changes for the gift tribute acknowledgee.

try {
    $apiInstance->editGiftTributeAcknowledgee($giftTributeAcknowledgeeId, $giftTributeAcknowledgeeEdit);
} catch (Exception $e) {
    echo 'Exception when calling GiftTributeApi->editGiftTributeAcknowledgee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **giftTributeAcknowledgeeId** | **int**| Format - int32. The ID of the gift tribute acknowledgee to update. | |
| **giftTributeAcknowledgeeEdit** | [**\SKY\NXT\DataIntegration\Model\GiftTributeAcknowledgeeEdit**](../Model/GiftTributeAcknowledgeeEdit.md)| Description of changes for the gift tribute acknowledgee. | [optional] |

### Return type

void (empty response body)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllGiftTributes()`

```php
getAllGiftTributes($limit, $offset): \SKY\NXT\DataIntegration\Model\GiftTributeCollection
```

Get all gift tributes

Returns a collection of gift tributes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = SKY\NXT\DataIntegration\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\NXT\DataIntegration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = SKY\NXT\DataIntegration\Configuration::getDefaultConfiguration()->setApiKey('Bb-Api-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\NXT\DataIntegration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Bb-Api-Subscription-Key', 'Bearer');


$apiInstance = new SKY\NXT\DataIntegration\Api\GiftTributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Format - int32.
$offset = 56; // int | Format - int32.

try {
    $result = $apiInstance->getAllGiftTributes($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftTributeApi->getAllGiftTributes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Format - int32. | [optional] |
| **offset** | **int**| Format - int32. | [optional] |

### Return type

[**\SKY\NXT\DataIntegration\Model\GiftTributeCollection**](../Model/GiftTributeCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGiftTributeById()`

```php
getGiftTributeById($giftTributeId): \SKY\NXT\DataIntegration\Model\GiftTribute
```

Get a gift tribute by ID

Returns details about a tribute with the given ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = SKY\NXT\DataIntegration\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\NXT\DataIntegration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = SKY\NXT\DataIntegration\Configuration::getDefaultConfiguration()->setApiKey('Bb-Api-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\NXT\DataIntegration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Bb-Api-Subscription-Key', 'Bearer');


$apiInstance = new SKY\NXT\DataIntegration\Api\GiftTributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$giftTributeId = 56; // int | Format - int32. The ID of the gift tribute to get.

try {
    $result = $apiInstance->getGiftTributeById($giftTributeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftTributeApi->getGiftTributeById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **giftTributeId** | **int**| Format - int32. The ID of the gift tribute to get. | |

### Return type

[**\SKY\NXT\DataIntegration\Model\GiftTribute**](../Model/GiftTribute.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGiftTributeByImportId()`

```php
getGiftTributeByImportId($importId): \SKY\NXT\DataIntegration\Model\GiftTribute
```

Get a gift tribute by import ID

Returns details about a tribute with the given import ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = SKY\NXT\DataIntegration\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\NXT\DataIntegration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = SKY\NXT\DataIntegration\Configuration::getDefaultConfiguration()->setApiKey('Bb-Api-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\NXT\DataIntegration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Bb-Api-Subscription-Key', 'Bearer');


$apiInstance = new SKY\NXT\DataIntegration\Api\GiftTributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$importId = 'importId_example'; // string | The import ID of the gift tribute to get.

try {
    $result = $apiInstance->getGiftTributeByImportId($importId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftTributeApi->getGiftTributeByImportId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **importId** | **string**| The import ID of the gift tribute to get. | |

### Return type

[**\SKY\NXT\DataIntegration\Model\GiftTribute**](../Model/GiftTribute.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGiftTributeAcknowledgees()`

```php
listGiftTributeAcknowledgees($giftTributeId): \SKY\NXT\DataIntegration\Model\GiftTributeAcknowledgeeCollection
```

List gift tribute acknowledgees

List the acknowledgees for a gift tribute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = SKY\NXT\DataIntegration\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\NXT\DataIntegration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = SKY\NXT\DataIntegration\Configuration::getDefaultConfiguration()->setApiKey('Bb-Api-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\NXT\DataIntegration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Bb-Api-Subscription-Key', 'Bearer');


$apiInstance = new SKY\NXT\DataIntegration\Api\GiftTributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$giftTributeId = 56; // int | Format - int32. The ID of the gift tribute to get acknowledgees for.

try {
    $result = $apiInstance->listGiftTributeAcknowledgees($giftTributeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftTributeApi->listGiftTributeAcknowledgees: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **giftTributeId** | **int**| Format - int32. The ID of the gift tribute to get acknowledgees for. | |

### Return type

[**\SKY\NXT\DataIntegration\Model\GiftTributeAcknowledgeeCollection**](../Model/GiftTributeAcknowledgeeCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGiftTributes()`

```php
listGiftTributes($giftId): \SKY\NXT\DataIntegration\Model\GiftTributeCollection
```

List gift tributes

List the tributes for a gift.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = SKY\NXT\DataIntegration\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\NXT\DataIntegration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = SKY\NXT\DataIntegration\Configuration::getDefaultConfiguration()->setApiKey('Bb-Api-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\NXT\DataIntegration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Bb-Api-Subscription-Key', 'Bearer');


$apiInstance = new SKY\NXT\DataIntegration\Api\GiftTributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$giftId = 56; // int | Format - int32. The ID of the gift to get tributes for.

try {
    $result = $apiInstance->listGiftTributes($giftId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftTributeApi->listGiftTributes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **giftId** | **int**| Format - int32. The ID of the gift to get tributes for. | |

### Return type

[**\SKY\NXT\DataIntegration\Model\GiftTributeCollection**](../Model/GiftTributeCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
