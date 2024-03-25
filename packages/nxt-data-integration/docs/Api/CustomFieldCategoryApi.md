# SKY\NXT\DataIntegration\CustomFieldCategoryApi

All URIs are relative to https://api.sky.blackbaud.com/nxt-data-integration, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCustomFieldCategory()**](CustomFieldCategoryApi.md#createCustomFieldCategory) | **POST** /v1/re/customfieldcategories | Create a custom field category |
| [**deleteCustomFieldCategory()**](CustomFieldCategoryApi.md#deleteCustomFieldCategory) | **DELETE** /v1/re/customfieldcategories/{id} | Delete a custom field category |
| [**editCustomFieldCategory()**](CustomFieldCategoryApi.md#editCustomFieldCategory) | **PATCH** /v1/re/customfieldcategories/{id} | Edit a custom field category |
| [**getCustomFieldCategory()**](CustomFieldCategoryApi.md#getCustomFieldCategory) | **GET** /v1/re/customfieldcategories/{id} | Get a custom field category |
| [**getCustomFieldCategoryList()**](CustomFieldCategoryApi.md#getCustomFieldCategoryList) | **GET** /v1/re/customfieldcategories | Get custom field category list |


## `createCustomFieldCategory()`

```php
createCustomFieldCategory($customFieldCategoryCreate): \SKY\NXT\DataIntegration\Model\PostResponse
```

Create a custom field category

Creates a new custom field category.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\CustomFieldCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customFieldCategoryCreate = {"id":8,"record_type":"Education","description":"Athletics","data_type":"Table","code_table_id":1020,"is_required":false,"is_unique":false,"is_active":true,"sequence":2}; // \SKY\NXT\DataIntegration\Model\CustomFieldCategoryCreate | The custom field category to add.

try {
    $result = $apiInstance->createCustomFieldCategory($customFieldCategoryCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldCategoryApi->createCustomFieldCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customFieldCategoryCreate** | [**\SKY\NXT\DataIntegration\Model\CustomFieldCategoryCreate**](../Model/CustomFieldCategoryCreate.md)| The custom field category to add. | [optional] |

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

## `deleteCustomFieldCategory()`

```php
deleteCustomFieldCategory($id)
```

Delete a custom field category

Deletes a custom field category.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\CustomFieldCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int32. The custom field category system ID.

try {
    $apiInstance->deleteCustomFieldCategory($id);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldCategoryApi->deleteCustomFieldCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int32. The custom field category system ID. | |

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

## `editCustomFieldCategory()`

```php
editCustomFieldCategory($id, $customFieldCategoryEdit)
```

Edit a custom field category

Edit the details about a custom field category.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\CustomFieldCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int32. The custom field category system ID.
$customFieldCategoryEdit = {"id":8,"record_type":"Education","data_type":"Table","code_table_id":1020,"description":"Athletics","is_required":false,"is_unique":false,"is_active":true,"sequence":2}; // \SKY\NXT\DataIntegration\Model\CustomFieldCategoryEdit | Description of changes for the custom field category.

try {
    $apiInstance->editCustomFieldCategory($id, $customFieldCategoryEdit);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldCategoryApi->editCustomFieldCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int32. The custom field category system ID. | |
| **customFieldCategoryEdit** | [**\SKY\NXT\DataIntegration\Model\CustomFieldCategoryEdit**](../Model/CustomFieldCategoryEdit.md)| Description of changes for the custom field category. | [optional] |

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

## `getCustomFieldCategory()`

```php
getCustomFieldCategory($id): \SKY\NXT\DataIntegration\Model\CustomFieldCategory
```

Get a custom field category

Returns details about a custom field category.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\CustomFieldCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int32. The custom field category system ID.

try {
    $result = $apiInstance->getCustomFieldCategory($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldCategoryApi->getCustomFieldCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int32. The custom field category system ID. | |

### Return type

[**\SKY\NXT\DataIntegration\Model\CustomFieldCategory**](../Model/CustomFieldCategory.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomFieldCategoryList()`

```php
getCustomFieldCategoryList($recordType, $includeInactive, $limit, $offset): \SKY\NXT\DataIntegration\Model\CustomFieldCategoryCollection
```

Get custom field category list

Returns a list of custom field categories.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\CustomFieldCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$recordType = 'recordType_example'; // string | The record type used for filtering custom field categories.
$includeInactive = True; // bool | Indicates whether to include inactive custom field categories.
$limit = 56; // int | Format - int32.
$offset = 56; // int | Format - int32.

try {
    $result = $apiInstance->getCustomFieldCategoryList($recordType, $includeInactive, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldCategoryApi->getCustomFieldCategoryList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recordType** | **string**| The record type used for filtering custom field categories. | [optional] |
| **includeInactive** | **bool**| Indicates whether to include inactive custom field categories. | [optional] |
| **limit** | **int**| Format - int32. | [optional] |
| **offset** | **int**| Format - int32. | [optional] |

### Return type

[**\SKY\NXT\DataIntegration\Model\CustomFieldCategoryCollection**](../Model/CustomFieldCategoryCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
