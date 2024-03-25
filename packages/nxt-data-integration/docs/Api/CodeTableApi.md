# SKY\NXT\DataIntegration\CodeTableApi

All URIs are relative to https://api.sky.blackbaud.com/nxt-data-integration, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCodeTable()**](CodeTableApi.md#createCodeTable) | **POST** /v1/re/codetables | Create a code table |
| [**createTableEntry()**](CodeTableApi.md#createTableEntry) | **POST** /v1/re/codetables/{code_table_id}/tableentries | Create a table entry |
| [**deleteCodeTable()**](CodeTableApi.md#deleteCodeTable) | **DELETE** /v1/re/codetables/{id} | Delete a code table |
| [**deleteTableEntry()**](CodeTableApi.md#deleteTableEntry) | **DELETE** /v1/re/codetables/{code_table_id}/tableentries/{id} | Delete a table entry |
| [**editCodeTable()**](CodeTableApi.md#editCodeTable) | **PATCH** /v1/re/codetables/{id} | Edit a code table |
| [**editTableEntry()**](CodeTableApi.md#editTableEntry) | **PATCH** /v1/re/codetables/{code_table_id}/tableentries/{id} | Edit a table entry |
| [**getCodeTable()**](CodeTableApi.md#getCodeTable) | **GET** /v1/re/codetables/{id} | Get a code table |
| [**getCodeTableList()**](CodeTableApi.md#getCodeTableList) | **GET** /v1/re/codetables | Get code table list |
| [**getTableEntriesList()**](CodeTableApi.md#getTableEntriesList) | **GET** /v1/re/codetables/{code_table_id}/tableentries | Get table entries list |
| [**getTableEntry()**](CodeTableApi.md#getTableEntry) | **GET** /v1/re/codetables/{code_table_id}/tableentries/{id} | Get a table entry |


## `createCodeTable()`

```php
createCodeTable($codeTableCreate): \SKY\NXT\DataIntegration\Model\PostResponse
```

Create a code table

Creates a new code table.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\CodeTableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$codeTableCreate = {"name":"Country"}; // \SKY\NXT\DataIntegration\Model\CodeTableCreate | The code table to add.

try {
    $result = $apiInstance->createCodeTable($codeTableCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodeTableApi->createCodeTable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **codeTableCreate** | [**\SKY\NXT\DataIntegration\Model\CodeTableCreate**](../Model/CodeTableCreate.md)| The code table to add. | [optional] |

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

## `createTableEntry()`

```php
createTableEntry($codeTableId, $tableEntryCreate): \SKY\NXT\DataIntegration\Model\PostResponse
```

Create a table entry

Creates a new table entry.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\CodeTableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$codeTableId = 56; // int | Format - int32. The code table ID.
$tableEntryCreate = {"is_active":true,"long_description":"Employee","short_description":"EMP","numeric_value":0}; // \SKY\NXT\DataIntegration\Model\TableEntryCreate | The table entry to add.

try {
    $result = $apiInstance->createTableEntry($codeTableId, $tableEntryCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodeTableApi->createTableEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **codeTableId** | **int**| Format - int32. The code table ID. | |
| **tableEntryCreate** | [**\SKY\NXT\DataIntegration\Model\TableEntryCreate**](../Model/TableEntryCreate.md)| The table entry to add. | [optional] |

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

## `deleteCodeTable()`

```php
deleteCodeTable($id)
```

Delete a code table

Delete a user defined code table.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\CodeTableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int32. The code table system IDs.

try {
    $apiInstance->deleteCodeTable($id);
} catch (Exception $e) {
    echo 'Exception when calling CodeTableApi->deleteCodeTable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int32. The code table system IDs. | |

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

## `deleteTableEntry()`

```php
deleteTableEntry($codeTableId, $id)
```

Delete a table entry

Deletes a table entry.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\CodeTableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$codeTableId = 56; // int | Format - int32. The code table ID.
$id = 56; // int | Format - int32. The table entry system ID.

try {
    $apiInstance->deleteTableEntry($codeTableId, $id);
} catch (Exception $e) {
    echo 'Exception when calling CodeTableApi->deleteTableEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **codeTableId** | **int**| Format - int32. The code table ID. | |
| **id** | **int**| Format - int32. The table entry system ID. | |

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

## `editCodeTable()`

```php
editCodeTable($id, $codeTableEdit)
```

Edit a code table

Edit the details about a code table.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\CodeTableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int32. The code table system ID.
$codeTableEdit = {"name":"Country"}; // \SKY\NXT\DataIntegration\Model\CodeTableEdit | Description of changes for the code table.

try {
    $apiInstance->editCodeTable($id, $codeTableEdit);
} catch (Exception $e) {
    echo 'Exception when calling CodeTableApi->editCodeTable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int32. The code table system ID. | |
| **codeTableEdit** | [**\SKY\NXT\DataIntegration\Model\CodeTableEdit**](../Model/CodeTableEdit.md)| Description of changes for the code table. | [optional] |

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

## `editTableEntry()`

```php
editTableEntry($codeTableId, $id, $tableEntryEdit)
```

Edit a table entry

Edit the details about a table entry.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\CodeTableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$codeTableId = 56; // int | Format - int32. The code table ID.
$id = 56; // int | Format - int32. The table entry system ID.
$tableEntryEdit = {"is_active":true,"long_description":"Employee","short_description":"EMP","numeric_value":0}; // \SKY\NXT\DataIntegration\Model\TableEntryEdit | Description of changes for the table entry.

try {
    $apiInstance->editTableEntry($codeTableId, $id, $tableEntryEdit);
} catch (Exception $e) {
    echo 'Exception when calling CodeTableApi->editTableEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **codeTableId** | **int**| Format - int32. The code table ID. | |
| **id** | **int**| Format - int32. The table entry system ID. | |
| **tableEntryEdit** | [**\SKY\NXT\DataIntegration\Model\TableEntryEdit**](../Model/TableEntryEdit.md)| Description of changes for the table entry. | [optional] |

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

## `getCodeTable()`

```php
getCodeTable($id): \SKY\NXT\DataIntegration\Model\CodeTable
```

Get a code table

Returns details about a code table.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\CodeTableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int32. The code table system ID.

try {
    $result = $apiInstance->getCodeTable($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodeTableApi->getCodeTable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int32. The code table system ID. | |

### Return type

[**\SKY\NXT\DataIntegration\Model\CodeTable**](../Model/CodeTable.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCodeTableList()`

```php
getCodeTableList($name, $includeHiddenSystem, $limit, $offset): \SKY\NXT\DataIntegration\Model\CodeTableCollection
```

Get code table list

Returns a list of code tables.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\CodeTableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | The name of the code table used for filtering.
$includeHiddenSystem = True; // bool | Indicates whether to include hidden system code tables.
$limit = 56; // int | Format - int32.
$offset = 56; // int | Format - int32.

try {
    $result = $apiInstance->getCodeTableList($name, $includeHiddenSystem, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodeTableApi->getCodeTableList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of the code table used for filtering. | [optional] |
| **includeHiddenSystem** | **bool**| Indicates whether to include hidden system code tables. | [optional] |
| **limit** | **int**| Format - int32. | [optional] |
| **offset** | **int**| Format - int32. | [optional] |

### Return type

[**\SKY\NXT\DataIntegration\Model\CodeTableCollection**](../Model/CodeTableCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTableEntriesList()`

```php
getTableEntriesList($codeTableId, $longDescription, $shortDescription, $numericValue, $includeInactive, $limit, $offset): \SKY\NXT\DataIntegration\Model\TableEntryCollection
```

Get table entries list

Returns a list of table entries.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\CodeTableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$codeTableId = 56; // int | Format - int32. The code table ID.
$longDescription = 'longDescription_example'; // string | The long description of the table entry.
$shortDescription = 'shortDescription_example'; // string | The short description of the table entry.
$numericValue = 3.4; // float | Format - double. The numeric value of the table entry.
$includeInactive = True; // bool | Indicates whether to include inactive table entries.
$limit = 56; // int | Format - int32.
$offset = 56; // int | Format - int32.

try {
    $result = $apiInstance->getTableEntriesList($codeTableId, $longDescription, $shortDescription, $numericValue, $includeInactive, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodeTableApi->getTableEntriesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **codeTableId** | **int**| Format - int32. The code table ID. | |
| **longDescription** | **string**| The long description of the table entry. | [optional] |
| **shortDescription** | **string**| The short description of the table entry. | [optional] |
| **numericValue** | **float**| Format - double. The numeric value of the table entry. | [optional] |
| **includeInactive** | **bool**| Indicates whether to include inactive table entries. | [optional] |
| **limit** | **int**| Format - int32. | [optional] |
| **offset** | **int**| Format - int32. | [optional] |

### Return type

[**\SKY\NXT\DataIntegration\Model\TableEntryCollection**](../Model/TableEntryCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTableEntry()`

```php
getTableEntry($codeTableId, $id): \SKY\NXT\DataIntegration\Model\TableEntry
```

Get a table entry

Returns details about a table entry.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\CodeTableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$codeTableId = 56; // int | Format - int32. The code table ID.
$id = 56; // int | Format - int32. The table entry system ID.

try {
    $result = $apiInstance->getTableEntry($codeTableId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodeTableApi->getTableEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **codeTableId** | **int**| Format - int32. The code table ID. | |
| **id** | **int**| Format - int32. The table entry system ID. | |

### Return type

[**\SKY\NXT\DataIntegration\Model\TableEntry**](../Model/TableEntry.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
