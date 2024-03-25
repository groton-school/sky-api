# SKY\NXT\DataIntegration\RelationshipApi

All URIs are relative to https://api.sky.blackbaud.com/nxt-data-integration, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getConstituentRelationshipsForFund()**](RelationshipApi.md#getConstituentRelationshipsForFund) | **GET** /v1/re/relationships/constituents/fund/{fundId} | Get constituent relationships for fund |
| [**getFundRelationshipsForConstituent()**](RelationshipApi.md#getFundRelationshipsForConstituent) | **GET** /v1/re/relationships/funds/constituent/{constituentId} | Get fund relationships for constituent |


## `getConstituentRelationshipsForFund()`

```php
getConstituentRelationshipsForFund($fundId, $limit, $offset): \SKY\NXT\DataIntegration\Model\RelationshipCollection
```

Get constituent relationships for fund

Returns constituent relationships for the given fund identifier.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\RelationshipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fundId = 56; // int | Format - int32. The fund identifier.
$limit = 56; // int | Format - int32. Optional parameter for the maximum number of records to return.
$offset = 56; // int | Format - int32. Optional query parameter to support paging.

try {
    $result = $apiInstance->getConstituentRelationshipsForFund($fundId, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RelationshipApi->getConstituentRelationshipsForFund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fundId** | **int**| Format - int32. The fund identifier. | |
| **limit** | **int**| Format - int32. Optional parameter for the maximum number of records to return. | [optional] |
| **offset** | **int**| Format - int32. Optional query parameter to support paging. | [optional] |

### Return type

[**\SKY\NXT\DataIntegration\Model\RelationshipCollection**](../Model/RelationshipCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFundRelationshipsForConstituent()`

```php
getFundRelationshipsForConstituent($constituentId, $limit, $offset): \SKY\NXT\DataIntegration\Model\RelationshipCollection
```

Get fund relationships for constituent

Returns fund relationships for the given constituent identifier.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\RelationshipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$constituentId = 56; // int | Format - int32. The constituent identifier.
$limit = 56; // int | Format - int32. Optional parameter for the maximum number of records to return.
$offset = 56; // int | Format - int32. Optional query parameter to support paging.

try {
    $result = $apiInstance->getFundRelationshipsForConstituent($constituentId, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RelationshipApi->getFundRelationshipsForConstituent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **constituentId** | **int**| Format - int32. The constituent identifier. | |
| **limit** | **int**| Format - int32. Optional parameter for the maximum number of records to return. | [optional] |
| **offset** | **int**| Format - int32. Optional query parameter to support paging. | [optional] |

### Return type

[**\SKY\NXT\DataIntegration\Model\RelationshipCollection**](../Model/RelationshipCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
