# SKY\School\ActivitiesApi

All URIs are relative to https://api.sky.blackbaud.com/school, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1ActivitiesSectionsGet()**](ActivitiesApi.md#v1ActivitiesSectionsGet) | **GET** /v1/activities/sections | Activities sections by school level |


## `v1ActivitiesSectionsGet()`

```php
v1ActivitiesSectionsGet($level_num, $school_year): \SKY\School\Model\ActivitiesSectionCollection
```

Activities sections by school level

Returns a collection of activity sections for the specified school level.<br />  Requires the following role in the Education Management system:  <ul><li>Activity Group Manager</li></ul>

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


$apiInstance = new SKY\School\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$level_num = 56; // int | Format - int32. Level number
$school_year = 'school_year_example'; // string | The school year to get activity sections for. <br />Defaults to the current school year.

try {
    $result = $apiInstance->v1ActivitiesSectionsGet($level_num, $school_year);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->v1ActivitiesSectionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level_num** | **int**| Format - int32. Level number | |
| **school_year** | **string**| The school year to get activity sections for. &lt;br /&gt;Defaults to the current school year. | [optional] |

### Return type

[**\SKY\School\Model\ActivitiesSectionCollection**](../Model/ActivitiesSectionCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
