# SKY\School\DirectoryApi

All URIs are relative to https://api.sky.blackbaud.com/school, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1DirectoriesByDirectoryIdGet()**](DirectoryApi.md#v1DirectoriesByDirectoryIdGet) | **GET** /v1/directories/{directory_id} | Directories results |
| [**v1DirectoriesGet()**](DirectoryApi.md#v1DirectoriesGet) | **GET** /v1/directories | Directories |


## `v1DirectoriesByDirectoryIdGet()`

```php
v1DirectoriesByDirectoryIdGet($directoryId, $search, $searchAll): \SKY\School\Model\DirectoryResultCollection
```

Directories results

Returns a collection of directory results the logged in user has access to<br />```search``` is an optional search string to filter directory results.<br />```search_all``` allows the search string to be used for all fields.<br />  When set to ```false```, only searches name fields. defaults to ```true```.<br />  Requires at least one of the following roles in the Education Management System:  <ul><li>Parent</li><li>Faculty</li><li>Student</li></ul>

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


$apiInstance = new SKY\School\Api\DirectoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$directoryId = 56; // int | Format - int32.
$search = 'search_example'; // string | 
$searchAll = true; // bool | 

try {
    $result = $apiInstance->v1DirectoriesByDirectoryIdGet($directoryId, $search, $searchAll);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryApi->v1DirectoriesByDirectoryIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **directoryId** | **int**| Format - int32. | |
| **search** | **string**|  | [optional] |
| **searchAll** | **bool**|  | [optional] [default to true] |

### Return type

[**\SKY\School\Model\DirectoryResultCollection**](../Model/DirectoryResultCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1DirectoriesGet()`

```php
v1DirectoriesGet(): \SKY\School\Model\DirectoryModelCollection
```

Directories

Returns a collection of directories the logged in user has access to  Requires at least one of the following roles in the Education Management System:  <ul><li>Parent</li><li>Faculty</li><li>Student</li></ul>

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


$apiInstance = new SKY\School\Api\DirectoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1DirectoriesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryApi->v1DirectoriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SKY\School\Model\DirectoryModelCollection**](../Model/DirectoryModelCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
