# SKY\NXT\DataIntegration\GiftApi

All URIs are relative to https://api.sky.blackbaud.com/nxt-data-integration, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getGiftIdMapByGiftLookupId()**](GiftApi.md#getGiftIdMapByGiftLookupId) | **GET** /v1/re/giftidmap/{giftlookupid} | Get a gift record id from gift lookup id |
| [**getGiftIdMapByImportId()**](GiftApi.md#getGiftIdMapByImportId) | **GET** /v1/re/importidmap/gift/{importid} | Get a gift record id from import id |


## `getGiftIdMapByGiftLookupId()`

```php
getGiftIdMapByGiftLookupId($giftlookupid): \SKY\NXT\DataIntegration\Model\GiftIdMap
```

Get a gift record id from gift lookup id

Returns a gift system record id mapping for a given gift lookup id.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\GiftApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$giftlookupid = 'giftlookupid_example'; // string | The gift lookup ID.

try {
    $result = $apiInstance->getGiftIdMapByGiftLookupId($giftlookupid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftApi->getGiftIdMapByGiftLookupId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **giftlookupid** | **string**| The gift lookup ID. | |

### Return type

[**\SKY\NXT\DataIntegration\Model\GiftIdMap**](../Model/GiftIdMap.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGiftIdMapByImportId()`

```php
getGiftIdMapByImportId($importid): \SKY\NXT\DataIntegration\Model\ImportIdMap
```

Get a gift record id from import id

Returns a gift system record id mapping for a given import id.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\GiftApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$importid = 'importid_example'; // string | The gift import ID.

try {
    $result = $apiInstance->getGiftIdMapByImportId($importid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftApi->getGiftIdMapByImportId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **importid** | **string**| The gift import ID. | |

### Return type

[**\SKY\NXT\DataIntegration\Model\ImportIdMap**](../Model/ImportIdMap.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
