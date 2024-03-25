# SKY\School\ListsApi

All URIs are relative to https://api.sky.blackbaud.com/school, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1ListsAdvancedByListIdGet()**](ListsApi.md#v1ListsAdvancedByListIdGet) | **GET** /v1/lists/advanced/{list_id} | List Single |
| [**v1ListsGet()**](ListsApi.md#v1ListsGet) | **GET** /v1/lists | List of Lists |


## `v1ListsAdvancedByListIdGet()`

```php
v1ListsAdvancedByListIdGet($listId, $page, $pageSize): \SKY\School\Model\ListResult
```

List Single

Returns a collection of results from a basic or advanced list.<br /><b>Note</b>: The requested list must have access permissions enabled for a role listed below or the user requesting the list needs read permission to that list.<br />  Requires one of the following roles in the Education Management system:  <ul><li>Page Manager</li><li>Content Editor</li><li>Teacher</li><li>Coach</li><li>Community Group Manager</li><li>Mentor Manager</li><li>Alumni Group Manager</li><li>Athletic Group Manager</li><li>Academic Group Manager</li><li>System Group Manager</li><li>Content Manager</li><li>Community Group Owner</li><li>Dorm Group Manager</li><li>Activity Group Manager</li><li>Advisory Group Manager</li><li>Advisor</li><li>Dorm Supervisor</li><li>Activity Leader</li><li>Pending Teacher</li><li>Pending Advisor</li><li>Pending Dorm Supervisor</li><li>Pending Activity Leader</li><li>Platform Manager</li><li>SkyApi Data Sync</li></ul>

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


$apiInstance = new SKY\School\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$listId = 56; // int | Format - int32. The ID of the list. To learn how to find the list ID, see <a href=\"https://kb.blackbaud.com/articles/Article/108336\" target=\"_blank\">KB article 108336</a>.
$page = 1; // int | Format - int32. The number of the page to return. Defaults to <b>1</b>.
$pageSize = 1000; // int | Format - int32. Number of rows to return per page. Default is 1000. Maximum allowed is 1000.

try {
    $result = $apiInstance->v1ListsAdvancedByListIdGet($listId, $page, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->v1ListsAdvancedByListIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **listId** | **int**| Format - int32. The ID of the list. To learn how to find the list ID, see &lt;a href&#x3D;\&quot;https://kb.blackbaud.com/articles/Article/108336\&quot; target&#x3D;\&quot;_blank\&quot;&gt;KB article 108336&lt;/a&gt;. | |
| **page** | **int**| Format - int32. The number of the page to return. Defaults to &lt;b&gt;1&lt;/b&gt;. | [optional] [default to 1] |
| **pageSize** | **int**| Format - int32. Number of rows to return per page. Default is 1000. Maximum allowed is 1000. | [optional] [default to 1000] |

### Return type

[**\SKY\School\Model\ListResult**](../Model/ListResult.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1ListsGet()`

```php
v1ListsGet(): \SKY\School\Model\ListReadCollection
```

List of Lists

Returns a list of basic or advanced lists the authorized user has access to<br />  Requires the following role in the Education Management system:  <ul><li>Page Manager</li><li>Content Editor</li><li>Teacher</li><li>Coach</li><li>Community Group Manager</li><li>Mentor Manager</li><li>Alumni Group Manager</li><li>Athletic Group Manager</li><li>Academic Group Manager</li><li>System Group Manager</li><li>Content Manager</li><li>Community Group Owner</li><li>Dorm Group Manager</li><li>Activity Group Manager</li><li>Advisory Group Manager</li><li>Advisor</li><li>Dorm Supervisor</li><li>Activity Leader</li><li>Pending Teacher</li><li>Pending Advisor</li><li>Pending Dorm Supervisor</li><li>Pending Activity Leader</li><li>Platform Manager</li><li>SkyApi Data Sync</li></ul>

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


$apiInstance = new SKY\School\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1ListsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->v1ListsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SKY\School\Model\ListReadCollection**](../Model/ListReadCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
