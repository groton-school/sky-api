# SKY\NXT\DataIntegration\PhoneTypeApi

All URIs are relative to https://api.sky.blackbaud.com/nxt-data-integration, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPhoneType()**](PhoneTypeApi.md#createPhoneType) | **POST** /v1/re/phonetypes | Create a phone type |
| [**deletePhoneType()**](PhoneTypeApi.md#deletePhoneType) | **DELETE** /v1/re/phonetypes/{id} | Delete a phone type |
| [**editPhoneType()**](PhoneTypeApi.md#editPhoneType) | **PATCH** /v1/re/phonetypes/{id} | Edit a phone type |
| [**getPhoneType()**](PhoneTypeApi.md#getPhoneType) | **GET** /v1/re/phonetypes/{id} | Get a phone type |
| [**getPhoneTypesList()**](PhoneTypeApi.md#getPhoneTypesList) | **GET** /v1/re/phonetypes | Get phone types list |


## `createPhoneType()`

```php
createPhoneType($phoneTypeCreate): \SKY\NXT\DataIntegration\Model\PostResponse
```

Create a phone type

Creates a new phone type.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\PhoneTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phoneTypeCreate = {"is_active":true,"description":"Home","type":"TelephoneNumber","format":"Mask2"}; // \SKY\NXT\DataIntegration\Model\PhoneTypeCreate | The phone type to add.

try {
    $result = $apiInstance->createPhoneType($phoneTypeCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneTypeApi->createPhoneType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phoneTypeCreate** | [**\SKY\NXT\DataIntegration\Model\PhoneTypeCreate**](../Model/PhoneTypeCreate.md)| The phone type to add. | [optional] |

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

## `deletePhoneType()`

```php
deletePhoneType($id)
```

Delete a phone type

Deletes a phone type.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\PhoneTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int32. The phone type system ID.

try {
    $apiInstance->deletePhoneType($id);
} catch (Exception $e) {
    echo 'Exception when calling PhoneTypeApi->deletePhoneType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int32. The phone type system ID. | |

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

## `editPhoneType()`

```php
editPhoneType($id, $phoneTypeEdit)
```

Edit a phone type

Edit the details about a phone type.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\PhoneTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int32. The phone type system ID.
$phoneTypeEdit = {"is_active":true,"description":"Home","type":"TelephoneNumber","format":"Mask2"}; // \SKY\NXT\DataIntegration\Model\PhoneTypeEdit | Description of changes for the phone type.

try {
    $apiInstance->editPhoneType($id, $phoneTypeEdit);
} catch (Exception $e) {
    echo 'Exception when calling PhoneTypeApi->editPhoneType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int32. The phone type system ID. | |
| **phoneTypeEdit** | [**\SKY\NXT\DataIntegration\Model\PhoneTypeEdit**](../Model/PhoneTypeEdit.md)| Description of changes for the phone type. | [optional] |

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

## `getPhoneType()`

```php
getPhoneType($id): \SKY\NXT\DataIntegration\Model\PhoneType
```

Get a phone type

Returns details about a phone type.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\PhoneTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int32. The phone type system ID.

try {
    $result = $apiInstance->getPhoneType($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneTypeApi->getPhoneType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int32. The phone type system ID. | |

### Return type

[**\SKY\NXT\DataIntegration\Model\PhoneType**](../Model/PhoneType.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPhoneTypesList()`

```php
getPhoneTypesList($description, $type, $format, $includeInactive, $limit, $offset): \SKY\NXT\DataIntegration\Model\PhoneTypeCollection
```

Get phone types list

Returns a list of phone types.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\PhoneTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$description = 'description_example'; // string | The description of the phone type.
$type = 'type_example'; // string | The phone number type.
$format = 'format_example'; // string | The phone number format.
$includeInactive = True; // bool | Indicates whether to include inactive phone types.
$limit = 56; // int | Format - int32.
$offset = 56; // int | Format - int32.

try {
    $result = $apiInstance->getPhoneTypesList($description, $type, $format, $includeInactive, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneTypeApi->getPhoneTypesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **description** | **string**| The description of the phone type. | [optional] |
| **type** | **string**| The phone number type. | [optional] |
| **format** | **string**| The phone number format. | [optional] |
| **includeInactive** | **bool**| Indicates whether to include inactive phone types. | [optional] |
| **limit** | **int**| Format - int32. | [optional] |
| **offset** | **int**| Format - int32. | [optional] |

### Return type

[**\SKY\NXT\DataIntegration\Model\PhoneTypeCollection**](../Model/PhoneTypeCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
