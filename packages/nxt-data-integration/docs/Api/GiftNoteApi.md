# SKY\NXT\DataIntegration\GiftNoteApi

All URIs are relative to https://api.sky.blackbaud.com/nxt-data-integration, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createGiftNote()**](GiftNoteApi.md#createGiftNote) | **POST** /v1/re/gifts/notes | Create a gift note |
| [**deleteGiftNote()**](GiftNoteApi.md#deleteGiftNote) | **DELETE** /v1/re/gifts/notes/{id} | Delete a gift note |
| [**editGiftNote()**](GiftNoteApi.md#editGiftNote) | **PATCH** /v1/re/gifts/notes/{id} | Edit a gift note |
| [**getGiftNote()**](GiftNoteApi.md#getGiftNote) | **GET** /v1/re/gifts/notes/{id} | Get a gift note |
| [**getGiftNoteList()**](GiftNoteApi.md#getGiftNoteList) | **GET** /v1/re/gifts/{gift_id}/notes | Get a gift note list |


## `createGiftNote()`

```php
createGiftNote($giftNoteCreate): \SKY\NXT\DataIntegration\Model\PostResponse
```

Create a gift note

Creates a note for a gift.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\GiftNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$giftNoteCreate = {"gift_id":356,"date":{"d":15,"m":12,"y":2018},"summary":"Registration fees","text":"The registration fees were paid by Mrs. Hernandez.","note_type_id":1122,"author":"Supervisor"}; // \SKY\NXT\DataIntegration\Model\GiftNoteCreate | The gift note details.

try {
    $result = $apiInstance->createGiftNote($giftNoteCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftNoteApi->createGiftNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **giftNoteCreate** | [**\SKY\NXT\DataIntegration\Model\GiftNoteCreate**](../Model/GiftNoteCreate.md)| The gift note details. | [optional] |

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

## `deleteGiftNote()`

```php
deleteGiftNote($id)
```

Delete a gift note

Deletes a note for a gift.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\GiftNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int32. The gift note ID.

try {
    $apiInstance->deleteGiftNote($id);
} catch (Exception $e) {
    echo 'Exception when calling GiftNoteApi->deleteGiftNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int32. The gift note ID. | |

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

## `editGiftNote()`

```php
editGiftNote($id, $giftNoteEdit)
```

Edit a gift note

Edits a note for a gift.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\GiftNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int32. The gift note ID.
$giftNoteEdit = {"date":{"d":15,"m":12,"y":2018},"summary":"Registration fees","text":"The registration fees were paid by Mrs. Hernandez.","note_type_id":1122,"author":"Supervisor"}; // \SKY\NXT\DataIntegration\Model\GiftNoteEdit | The gift note details.

try {
    $apiInstance->editGiftNote($id, $giftNoteEdit);
} catch (Exception $e) {
    echo 'Exception when calling GiftNoteApi->editGiftNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int32. The gift note ID. | |
| **giftNoteEdit** | [**\SKY\NXT\DataIntegration\Model\GiftNoteEdit**](../Model/GiftNoteEdit.md)| The gift note details. | [optional] |

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

## `getGiftNote()`

```php
getGiftNote($id): \SKY\NXT\DataIntegration\Model\GiftNote
```

Get a gift note

Returns gift note details.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\GiftNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int32. The gift note ID.

try {
    $result = $apiInstance->getGiftNote($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftNoteApi->getGiftNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int32. The gift note ID. | |

### Return type

[**\SKY\NXT\DataIntegration\Model\GiftNote**](../Model/GiftNote.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGiftNoteList()`

```php
getGiftNoteList($giftId, $limit, $offset): \SKY\NXT\DataIntegration\Model\GiftNoteCollection
```

Get a gift note list

Returns a list of gift note details.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\GiftNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$giftId = 56; // int | Format - int32. The gift ID.
$limit = 56; // int | Format - int32.
$offset = 56; // int | Format - int32.

try {
    $result = $apiInstance->getGiftNoteList($giftId, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftNoteApi->getGiftNoteList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **giftId** | **int**| Format - int32. The gift ID. | |
| **limit** | **int**| Format - int32. | [optional] |
| **offset** | **int**| Format - int32. | [optional] |

### Return type

[**\SKY\NXT\DataIntegration\Model\GiftNoteCollection**](../Model/GiftNoteCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
