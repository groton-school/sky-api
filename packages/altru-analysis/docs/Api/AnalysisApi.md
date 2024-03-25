# SKY\Altru\Analysis\AnalysisApi

All URIs are relative to https://api.sky.blackbaud.com/alt-anamg, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAdHocQueryId()**](AnalysisApi.md#getAdHocQueryId) | **GET** /adhocqueries/id/{query_name} | Get Adhoc query Id by name |
| [**listAdHocQueryEntries()**](AnalysisApi.md#listAdHocQueryEntries) | **GET** /adhocqueries/{query_id} | List adhoc query entries |


## `getAdHocQueryId()`

```php
getAdHocQueryId($queryName): \SKY\Altru\Analysis\Model\GetAdHocQueryId
```

Get Adhoc query Id by name

Gets the query ID for the given query name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = SKY\Altru\Analysis\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\Altru\Analysis\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = SKY\Altru\Analysis\Configuration::getDefaultConfiguration()->setApiKey('Bb-Api-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\Altru\Analysis\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Bb-Api-Subscription-Key', 'Bearer');


$apiInstance = new SKY\Altru\Analysis\Api\AnalysisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queryName = 'queryName_example'; // string | The name of the query.

try {
    $result = $apiInstance->getAdHocQueryId($queryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisApi->getAdHocQueryId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **queryName** | **string**| The name of the query. | |

### Return type

[**\SKY\Altru\Analysis\Model\GetAdHocQueryId**](../Model/GetAdHocQueryId.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAdHocQueryEntries()`

```php
listAdHocQueryEntries($queryId, $limit): \SKY\Altru\Analysis\Model\ApiCollectionAdHocQueryRead
```

List adhoc query entries

Gets the results for the given query ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = SKY\Altru\Analysis\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\Altru\Analysis\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = SKY\Altru\Analysis\Configuration::getDefaultConfiguration()->setApiKey('Bb-Api-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\Altru\Analysis\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Bb-Api-Subscription-Key', 'Bearer');


$apiInstance = new SKY\Altru\Analysis\Api\AnalysisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queryId = 'queryId_example'; // string | The ID of the query.
$limit = 56; // int | The maximum number of rows returned.

try {
    $result = $apiInstance->listAdHocQueryEntries($queryId, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisApi->listAdHocQueryEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **queryId** | **string**| The ID of the query. | |
| **limit** | **int**| The maximum number of rows returned. | [optional] |

### Return type

[**\SKY\Altru\Analysis\Model\ApiCollectionAdHocQueryRead**](../Model/ApiCollectionAdHocQueryRead.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
