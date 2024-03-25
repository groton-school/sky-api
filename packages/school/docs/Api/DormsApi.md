# SKY\School\DormsApi

All URIs are relative to https://api.sky.blackbaud.com/school, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1DormsAllGet()**](DormsApi.md#v1DormsAllGet) | **GET** /v1/dorms/all | Dorms |


## `v1DormsAllGet()`

```php
v1DormsAllGet($level_number, $school_year): \SKY\School\Model\DormCollection
```

Dorms

Requires at least one of the following roles in the Education Management system:  <ul><li>Dorm Group Manager</li><li>Dorm Supervisor</li><li>Pending Dorm Supervisor</li></ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = SKY\School\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\School\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = SKY\School\Configuration::getDefaultConfiguration()->setApiKey('Bb-Api-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\School\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Bb-Api-Subscription-Key', 'Bearer');


$apiInstance = new SKY\School\Api\DormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$level_number = 56; // int | Format - int32. Identifier for the school level
$school_year = 'school_year_example'; // string | Identifier for the school year

try {
    $result = $apiInstance->v1DormsAllGet($level_number, $school_year);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DormsApi->v1DormsAllGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level_number** | **int**| Format - int32. Identifier for the school level | [optional] |
| **school_year** | **string**| Identifier for the school year | [optional] |

### Return type

[**\SKY\School\Model\DormCollection**](../Model/DormCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
