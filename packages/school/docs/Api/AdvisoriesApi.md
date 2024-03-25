# SKY\School\AdvisoriesApi

All URIs are relative to https://api.sky.blackbaud.com/school, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1AdvisoriesSectionsGet()**](AdvisoriesApi.md#v1AdvisoriesSectionsGet) | **GET** /v1/advisories/sections | Advisories sections by school level |


## `v1AdvisoriesSectionsGet()`

```php
v1AdvisoriesSectionsGet($level_num, $school_year): \SKY\School\Model\AdvisoriesSectionCollection
```

Advisories sections by school level

Returns a collection of advisory sections for the specified school level<br></br>  Requires the following role in the Education Management system:  <ul><li>Sky API Advisory Group Manager</li></ul>

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


$apiInstance = new SKY\School\Api\AdvisoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$level_num = 56; // int | Format - int32. Level number
$school_year = 'school_year_example'; // string | The school year to get advisory sections for. <br></br>Defaults to the current school year.

try {
    $result = $apiInstance->v1AdvisoriesSectionsGet($level_num, $school_year);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvisoriesApi->v1AdvisoriesSectionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level_num** | **int**| Format - int32. Level number | |
| **school_year** | **string**| The school year to get advisory sections for. &lt;br&gt;&lt;/br&gt;Defaults to the current school year. | [optional] |

### Return type

[**\SKY\School\Model\AdvisoriesSectionCollection**](../Model/AdvisoriesSectionCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
