# SKY\Altru\Administration\AdministrationApi

All URIs are relative to https://api.sky.blackbaud.com/alt-adnmg, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCodeTableEntry()**](AdministrationApi.md#createCodeTableEntry) | **POST** /codetables/entry/{code_table_name} | Create a code table entry |
| [**deleteCodeTableEntry()**](AdministrationApi.md#deleteCodeTableEntry) | **DELETE** /codetables/{code_table_name}/codetableentryid/{entry_id} | Delete code table entry |
| [**getCodeTableEntryDescription()**](AdministrationApi.md#getCodeTableEntryDescription) | **GET** /codetables/{code_table_name}/entryid/{entry_id} | Get a code table entry description by Id |
| [**getCodeTableEntryId()**](AdministrationApi.md#getCodeTableEntryId) | **GET** /codetables/{code_table_name}/entrydescription/{entry_description} | Get code table entry Id by description |
| [**listCodeTable()**](AdministrationApi.md#listCodeTable) | **GET** /codetables/{code_table_id}/list | List code table |
| [**listCodeTableEntries()**](AdministrationApi.md#listCodeTableEntries) | **GET** /codetables/{code_table_name}/entries | List code table entries |
| [**searchSite()**](AdministrationApi.md#searchSite) | **GET** /sites/search | Search for site |
| [**simpleListLoad()**](AdministrationApi.md#simpleListLoad) | **GET** /simplelists/{simple_list_id} | Simple list load |
| [**simpleListTranslation()**](AdministrationApi.md#simpleListTranslation) | **GET** /simplelists/translation/{simple_list_id} | Simple list translation |
| [**updateCodeTableEntry()**](AdministrationApi.md#updateCodeTableEntry) | **PATCH** /codetables/entry/{code_table_name} | Update a code table entry |


## `createCodeTableEntry()`

```php
createCodeTableEntry($codeTableName, $newCodeTableEntry): \SKY\Altru\Administration\Model\PostResponse
```

Create a code table entry

Creates a code table entry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKey('Bb-Api-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Bb-Api-Subscription-Key', 'Bearer');


$apiInstance = new SKY\Altru\Administration\Api\AdministrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$codeTableName = 'codeTableName_example'; // string | The name of the code table.
$newCodeTableEntry = {"table_entry_description":"Annual","table_entry_id":"e6c79f33-841b-4a96-80b2-3d185944ecc9","inactive":false,"sequence":1}; // \SKY\Altru\Administration\Model\NewCodeTableEntry | ConfigurationMessage object representing operation intended to be created

try {
    $result = $apiInstance->createCodeTableEntry($codeTableName, $newCodeTableEntry);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdministrationApi->createCodeTableEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **codeTableName** | **string**| The name of the code table. | |
| **newCodeTableEntry** | [**\SKY\Altru\Administration\Model\NewCodeTableEntry**](../Model/NewCodeTableEntry.md)| ConfigurationMessage object representing operation intended to be created | [optional] |

### Return type

[**\SKY\Altru\Administration\Model\PostResponse**](../Model/PostResponse.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCodeTableEntry()`

```php
deleteCodeTableEntry($codeTableName, $entryId)
```

Delete code table entry

Deletes a code table entry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKey('Bb-Api-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Bb-Api-Subscription-Key', 'Bearer');


$apiInstance = new SKY\Altru\Administration\Api\AdministrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$codeTableName = 'codeTableName_example'; // string | The name of the code table.
$entryId = 'entryId_example'; // string | The code table entry ID.

try {
    $apiInstance->deleteCodeTableEntry($codeTableName, $entryId);
} catch (Exception $e) {
    echo 'Exception when calling AdministrationApi->deleteCodeTableEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **codeTableName** | **string**| The name of the code table. | |
| **entryId** | **string**| The code table entry ID. | |

### Return type

void (empty response body)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCodeTableEntryDescription()`

```php
getCodeTableEntryDescription($codeTableName, $entryId): \SKY\Altru\Administration\Model\CodeTableEntryDescription
```

Get a code table entry description by Id

Gets a code table entry description by Id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKey('Bb-Api-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Bb-Api-Subscription-Key', 'Bearer');


$apiInstance = new SKY\Altru\Administration\Api\AdministrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$codeTableName = 'codeTableName_example'; // string | The name of the code table.
$entryId = 'entryId_example'; // string | The code table entry description.

try {
    $result = $apiInstance->getCodeTableEntryDescription($codeTableName, $entryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdministrationApi->getCodeTableEntryDescription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **codeTableName** | **string**| The name of the code table. | |
| **entryId** | **string**| The code table entry description. | |

### Return type

[**\SKY\Altru\Administration\Model\CodeTableEntryDescription**](../Model/CodeTableEntryDescription.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCodeTableEntryId()`

```php
getCodeTableEntryId($codeTableName, $entryDescription): \SKY\Altru\Administration\Model\CodeTableEntryId
```

Get code table entry Id by description

Gets a code table entry Id by description.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKey('Bb-Api-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Bb-Api-Subscription-Key', 'Bearer');


$apiInstance = new SKY\Altru\Administration\Api\AdministrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$codeTableName = 'codeTableName_example'; // string | The name of the code table.
$entryDescription = 'entryDescription_example'; // string | The code table entry description.

try {
    $result = $apiInstance->getCodeTableEntryId($codeTableName, $entryDescription);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdministrationApi->getCodeTableEntryId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **codeTableName** | **string**| The name of the code table. | |
| **entryDescription** | **string**| The code table entry description. | |

### Return type

[**\SKY\Altru\Administration\Model\CodeTableEntryId**](../Model/CodeTableEntryId.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCodeTable()`

```php
listCodeTable($codeTableId, $includeInactive, $limit): \SKY\Altru\Administration\Model\CodeTableListCollection
```

List code table

List of entries defined for a given code table

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKey('Bb-Api-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Bb-Api-Subscription-Key', 'Bearer');


$apiInstance = new SKY\Altru\Administration\Api\AdministrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$codeTableId = 'codeTableId_example'; // string | The code table id.
$includeInactive = True; // bool | include inactive?
$limit = 56; // int | Limits the number of records to return.

try {
    $result = $apiInstance->listCodeTable($codeTableId, $includeInactive, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdministrationApi->listCodeTable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **codeTableId** | **string**| The code table id. | |
| **includeInactive** | **bool**| include inactive? | [optional] |
| **limit** | **int**| Limits the number of records to return. | [optional] |

### Return type

[**\SKY\Altru\Administration\Model\CodeTableListCollection**](../Model/CodeTableListCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCodeTableEntries()`

```php
listCodeTableEntries($codeTableName): \SKY\Altru\Administration\Model\CodeTableEntryCollection
```

List code table entries

Returns table entries for the specified code table.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKey('Bb-Api-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Bb-Api-Subscription-Key', 'Bearer');


$apiInstance = new SKY\Altru\Administration\Api\AdministrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$codeTableName = 'codeTableName_example'; // string | The name of the code table.

try {
    $result = $apiInstance->listCodeTableEntries($codeTableName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdministrationApi->listCodeTableEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **codeTableName** | **string**| The name of the code table. | |

### Return type

[**\SKY\Altru\Administration\Model\CodeTableEntryCollection**](../Model/CodeTableEntryCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchSite()`

```php
searchSite($id, $siteId, $name, $shortName, $acronym, $sitetype, $limit): \SKY\Altru\Administration\Model\SiteSearchCollection
```

Search for site

Search screen for finding a site.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKey('Bb-Api-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Bb-Api-Subscription-Key', 'Bearer');


$apiInstance = new SKY\Altru\Administration\Api\AdministrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | id
$siteId = 'siteId_example'; // string | site id
$name = 'name_example'; // string | name
$shortName = 'shortName_example'; // string | short name
$acronym = 'acronym_example'; // string | acronym
$sitetype = 'sitetype_example'; // string | site type This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/SITETYPECODE/entries
$limit = 56; // int | Limits the number of records to return.

try {
    $result = $apiInstance->searchSite($id, $siteId, $name, $shortName, $acronym, $sitetype, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdministrationApi->searchSite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| id | [optional] |
| **siteId** | **string**| site id | [optional] |
| **name** | **string**| name | [optional] |
| **shortName** | **string**| short name | [optional] |
| **acronym** | **string**| acronym | [optional] |
| **sitetype** | **string**| site type This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/SITETYPECODE/entries | [optional] |
| **limit** | **int**| Limits the number of records to return. | [optional] |

### Return type

[**\SKY\Altru\Administration\Model\SiteSearchCollection**](../Model/SiteSearchCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `simpleListLoad()`

```php
simpleListLoad($simpleListId, $parameters): \SKY\Altru\Administration\Model\ApiCollectionSimpleListLoad
```

Simple list load

Gets the data for a simple datalist using ID or Name and any parameters. /appfxwebservice.asmx?op=SimpleDataListLoad, SOAPAction=Blackbaud.AppFx.WebService.API.1/SimpleDataListLoad.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKey('Bb-Api-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Bb-Api-Subscription-Key', 'Bearer');


$apiInstance = new SKY\Altru\Administration\Api\AdministrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$simpleListId = 'simpleListId_example'; // string | The ID of simple list.
$parameters = 'parameters_example'; // string | String of comma separated parameter and its value.Example: interaction_category_id,d4e18cdc-1baa-4d0c-ae41-2e40fcda9d64

try {
    $result = $apiInstance->simpleListLoad($simpleListId, $parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdministrationApi->simpleListLoad: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **simpleListId** | **string**| The ID of simple list. | |
| **parameters** | **string**| String of comma separated parameter and its value.Example: interaction_category_id,d4e18cdc-1baa-4d0c-ae41-2e40fcda9d64 | [optional] |

### Return type

[**\SKY\Altru\Administration\Model\ApiCollectionSimpleListLoad**](../Model/ApiCollectionSimpleListLoad.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `simpleListTranslation()`

```php
simpleListTranslation($simpleListId, $entryId, $simpleListName): \SKY\Altru\Administration\Model\SimpleListTranslation
```

Simple list translation

/appfxwebservice.asmx?op=SimpleDataListGetTranslation, SOAPAction=Blackbaud.AppFx.WebService.API.1/SimpleDataListGetTranslation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKey('Bb-Api-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Bb-Api-Subscription-Key', 'Bearer');


$apiInstance = new SKY\Altru\Administration\Api\AdministrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$simpleListId = 'simpleListId_example'; // string | The ID of simple list.
$entryId = 'entryId_example'; // string | Simple list entry value.
$simpleListName = 'simpleListName_example'; // string | Simple list name.

try {
    $result = $apiInstance->simpleListTranslation($simpleListId, $entryId, $simpleListName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdministrationApi->simpleListTranslation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **simpleListId** | **string**| The ID of simple list. | |
| **entryId** | **string**| Simple list entry value. | [optional] |
| **simpleListName** | **string**| Simple list name. | [optional] |

### Return type

[**\SKY\Altru\Administration\Model\SimpleListTranslation**](../Model/SimpleListTranslation.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCodeTableEntry()`

```php
updateCodeTableEntry($codeTableName, $updateCodeTable)
```

Update a code table entry

Updates a code table entry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKey('Bb-Api-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Bb-Api-Subscription-Key', 'Bearer');


$apiInstance = new SKY\Altru\Administration\Api\AdministrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$codeTableName = 'codeTableName_example'; // string | The name of the code table.
$updateCodeTable = {"table_entry_description":"Annual","table_entry_id":"e6c79f33-841b-4a96-80b2-3d185944ecc9","inactive":false,"sequence":1}; // \SKY\Altru\Administration\Model\UpdateCodeTable | ConfigurationMessage object representing operation intended to be updated

try {
    $apiInstance->updateCodeTableEntry($codeTableName, $updateCodeTable);
} catch (Exception $e) {
    echo 'Exception when calling AdministrationApi->updateCodeTableEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **codeTableName** | **string**| The name of the code table. | |
| **updateCodeTable** | [**\SKY\Altru\Administration\Model\UpdateCodeTable**](../Model/UpdateCodeTable.md)| ConfigurationMessage object representing operation intended to be updated | [optional] |

### Return type

void (empty response body)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
