# SKY\School\TypesApi

All URIs are relative to https://api.sky.blackbaud.com/school, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1TypesAttendancetypesGet()**](TypesApi.md#v1TypesAttendancetypesGet) | **GET** /v1/types/attendancetypes | Types attendance types |
| [**v1TypesExcusedtypesGet()**](TypesApi.md#v1TypesExcusedtypesGet) | **GET** /v1/types/excusedtypes | Types excused types |
| [**v1TypesExcusedurationtypesGet()**](TypesApi.md#v1TypesExcusedurationtypesGet) | **GET** /v1/types/excusedurationtypes | Types excuse duration types |
| [**v1TypesTablesGet()**](TypesApi.md#v1TypesTablesGet) | **GET** /v1/types/tables | Types table types (BETA) |
| [**v1TypesTablevaluesGet()**](TypesApi.md#v1TypesTablevaluesGet) | **GET** /v1/types/tablevalues | Types table values (BETA) |


## `v1TypesAttendancetypesGet()`

```php
v1TypesAttendancetypesGet(): \SKY\School\Model\AttendanceTypes
```

Types attendance types

Returns a collection of attendance types.<br></br>  Requires the following role in the Education Management system:  <ul><li>SKY API Basic</li></ul>

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


$apiInstance = new SKY\School\Api\TypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1TypesAttendancetypesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TypesApi->v1TypesAttendancetypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SKY\School\Model\AttendanceTypes**](../Model/AttendanceTypes.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1TypesExcusedtypesGet()`

```php
v1TypesExcusedtypesGet(): \SKY\School\Model\ExcusedTypesCollection
```

Types excused types

Returns a collection of excused types.<br></br>  Requires the following role in the Education Management system:  <ul><li>SKY API Basic</li><li>Any Manager Role</li></ul>

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


$apiInstance = new SKY\School\Api\TypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1TypesExcusedtypesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TypesApi->v1TypesExcusedtypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SKY\School\Model\ExcusedTypesCollection**](../Model/ExcusedTypesCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1TypesExcusedurationtypesGet()`

```php
v1TypesExcusedurationtypesGet(): \SKY\School\Model\ExcuseDurationTypes
```

Types excuse duration types

Returns a collection of excuse duration types.<br></br>  Requires the following role in the Education Management system:  <ul><li>SKY API Basic</li></ul>

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


$apiInstance = new SKY\School\Api\TypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1TypesExcusedurationtypesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TypesApi->v1TypesExcusedurationtypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SKY\School\Model\ExcuseDurationTypes**](../Model/ExcuseDurationTypes.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1TypesTablesGet()`

```php
v1TypesTablesGet(): \SKY\School\Model\TableCollection
```

Types table types (BETA)

Returns a collection of table types.<br></br>  System tables will have an Id that is a negative number (Example: -100)  User defined tables will have an Id that is a positive number (Example: 100)  ***This endpoint is in BETA. It may be removed or replaced with a 90 day deprecation period.***

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


$apiInstance = new SKY\School\Api\TypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1TypesTablesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TypesApi->v1TypesTablesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SKY\School\Model\TableCollection**](../Model/TableCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1TypesTablevaluesGet()`

```php
v1TypesTablevaluesGet($table_id, $table_name, $include_inactive): \SKY\School\Model\TableValueCollection
```

Types table values (BETA)

Returns a collection of table values.<br></br>  Either ```tableId``` or ```tableName``` parameter is required, but not both.  For example, If a ```tableId``` is provided, then any value provided for ```tableName``` will be ignored.  In the case that the calling user does not have permissions to view the data being requested no results will be returned.  ***This endpoint is in BETA. It may be removed or replaced with a 90 day deprecation period.***

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


$apiInstance = new SKY\School\Api\TypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$table_id = 0; // int | Format - int32. The ID of the table type. The tableId is returned by <a href=\"https://developer.sky.blackbaud.com/docs/services/school/operations/V1TypesTablesGet\">Types table types</a> or from the settings area for the table within Blackbaud Education Management.
$table_name = 'table_name_example'; // string | The name of the table type. The name is returned by <a href=\"https://developer.sky.blackbaud.com/docs/services/school/operations/V1TypesTablesGet\">Types table types</a> or from the settings area for the table within Blackbaud Education Management.
$include_inactive = false; // bool | If set to true, returns inactive items for the table. Defaults to false.

try {
    $result = $apiInstance->v1TypesTablevaluesGet($table_id, $table_name, $include_inactive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TypesApi->v1TypesTablevaluesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **table_id** | **int**| Format - int32. The ID of the table type. The tableId is returned by &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/school/operations/V1TypesTablesGet\&quot;&gt;Types table types&lt;/a&gt; or from the settings area for the table within Blackbaud Education Management. | [optional] [default to 0] |
| **table_name** | **string**| The name of the table type. The name is returned by &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/school/operations/V1TypesTablesGet\&quot;&gt;Types table types&lt;/a&gt; or from the settings area for the table within Blackbaud Education Management. | [optional] |
| **include_inactive** | **bool**| If set to true, returns inactive items for the table. Defaults to false. | [optional] [default to false] |

### Return type

[**\SKY\School\Model\TableValueCollection**](../Model/TableValueCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
