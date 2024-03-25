# SKY\NXT\DataIntegration\NameFormatsApi

All URIs are relative to https://api.sky.blackbaud.com/nxt-data-integration, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNameFormatConfiguration()**](NameFormatsApi.md#createNameFormatConfiguration) | **POST** /v1/re/nameformatconfigurations | Create a name format configuration |
| [**createNameFormatConfigurationField()**](NameFormatsApi.md#createNameFormatConfigurationField) | **POST** /v1/re/nameformatconfigurations/fields | Create a name format configuration field |
| [**deleteNameFormatConfiguration()**](NameFormatsApi.md#deleteNameFormatConfiguration) | **DELETE** /v1/re/nameformatconfigurations/{id} | Delete a name format configuration |
| [**deleteNameFormatConfigurationField()**](NameFormatsApi.md#deleteNameFormatConfigurationField) | **DELETE** /v1/re/nameformatconfigurations/fields/{id} | Delete a name format configuration field |
| [**editNameFormatConfiguration()**](NameFormatsApi.md#editNameFormatConfiguration) | **PATCH** /v1/re/nameformatconfigurations/{id} | Edit a name format configuration |
| [**editNameFormatConfigurationField()**](NameFormatsApi.md#editNameFormatConfigurationField) | **PATCH** /v1/re/nameformatconfigurations/fields/{id} | Edit a name format configuration field |
| [**getNameFormatConfiguration()**](NameFormatsApi.md#getNameFormatConfiguration) | **GET** /v1/re/nameformatconfigurations/{id} | Get a name format configuration |
| [**getNameFormatConfigurationField()**](NameFormatsApi.md#getNameFormatConfigurationField) | **GET** /v1/re/nameformatconfigurations/fields/{id} | Get a name format configuration field |
| [**getNameFormatConfigurationFieldsList()**](NameFormatsApi.md#getNameFormatConfigurationFieldsList) | **GET** /v1/re/nameformatconfigurations/fields | Get name format configuration fields list |
| [**getNameFormatConfigurationList()**](NameFormatsApi.md#getNameFormatConfigurationList) | **GET** /v1/re/nameformatconfigurations | Get name format configuration list |


## `createNameFormatConfiguration()`

```php
createNameFormatConfiguration($nameFormatConfigurationCreate): \SKY\NXT\DataIntegration\Model\PostResponse
```

Create a name format configuration

Creates a new name format configuration.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\NameFormatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nameFormatConfigurationCreate = {"fields":[{"field_id":5,"initial":true,"comma":false,"conditional_break":false,"hard_break":false,"concatenate":false,"smart":false,"sequence":1},{"field_id":1,"initial":false,"comma":false,"conditional_break":false,"hard_break":false,"concatenate":false,"smart":false,"sequence":2}]}; // \SKY\NXT\DataIntegration\Model\NameFormatConfigurationCreate | The name format configuration to add.

try {
    $result = $apiInstance->createNameFormatConfiguration($nameFormatConfigurationCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NameFormatsApi->createNameFormatConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **nameFormatConfigurationCreate** | [**\SKY\NXT\DataIntegration\Model\NameFormatConfigurationCreate**](../Model/NameFormatConfigurationCreate.md)| The name format configuration to add. | [optional] |

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

## `createNameFormatConfigurationField()`

```php
createNameFormatConfigurationField($nameFormatConfigurationFieldCreate): \SKY\NXT\DataIntegration\Model\PostResponse
```

Create a name format configuration field

Creates a new name format configuration field.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\NameFormatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nameFormatConfigurationFieldCreate = {"field_name":"[Last Name]"}; // \SKY\NXT\DataIntegration\Model\NameFormatConfigurationFieldCreate | The name format configuration field to add.

try {
    $result = $apiInstance->createNameFormatConfigurationField($nameFormatConfigurationFieldCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NameFormatsApi->createNameFormatConfigurationField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **nameFormatConfigurationFieldCreate** | [**\SKY\NXT\DataIntegration\Model\NameFormatConfigurationFieldCreate**](../Model/NameFormatConfigurationFieldCreate.md)| The name format configuration field to add. | [optional] |

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

## `deleteNameFormatConfiguration()`

```php
deleteNameFormatConfiguration($id)
```

Delete a name format configuration

Deletes a name format configuration.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\NameFormatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int32. The name format configuration system ID.

try {
    $apiInstance->deleteNameFormatConfiguration($id);
} catch (Exception $e) {
    echo 'Exception when calling NameFormatsApi->deleteNameFormatConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int32. The name format configuration system ID. | |

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

## `deleteNameFormatConfigurationField()`

```php
deleteNameFormatConfigurationField($id)
```

Delete a name format configuration field

Deletes a name format configuration field.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\NameFormatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int32. The name format configuration field option system ID.

try {
    $apiInstance->deleteNameFormatConfigurationField($id);
} catch (Exception $e) {
    echo 'Exception when calling NameFormatsApi->deleteNameFormatConfigurationField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int32. The name format configuration field option system ID. | |

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

## `editNameFormatConfiguration()`

```php
editNameFormatConfiguration($id, $nameFormatConfigurationEdit)
```

Edit a name format configuration

Edit the details about a name format configuration.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\NameFormatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int32. The name format configuration system ID.
$nameFormatConfigurationEdit = {"fields":[{"field_id":5,"initial":true,"comma":false,"conditional_break":false,"hard_break":false,"concatenate":false,"smart":false,"sequence":1},{"field_id":1,"initial":false,"comma":false,"conditional_break":false,"hard_break":false,"concatenate":false,"smart":false,"sequence":2}]}; // \SKY\NXT\DataIntegration\Model\NameFormatConfigurationEdit | Description of changes for the name format configuration field.

try {
    $apiInstance->editNameFormatConfiguration($id, $nameFormatConfigurationEdit);
} catch (Exception $e) {
    echo 'Exception when calling NameFormatsApi->editNameFormatConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int32. The name format configuration system ID. | |
| **nameFormatConfigurationEdit** | [**\SKY\NXT\DataIntegration\Model\NameFormatConfigurationEdit**](../Model/NameFormatConfigurationEdit.md)| Description of changes for the name format configuration field. | [optional] |

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

## `editNameFormatConfigurationField()`

```php
editNameFormatConfigurationField($id, $nameFormatConfigurationFieldEdit)
```

Edit a name format configuration field

Edit the details about a name format configuration field.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\NameFormatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int32. The name format configuration field option system ID.
$nameFormatConfigurationFieldEdit = {"field_name":"[Last Name]"}; // \SKY\NXT\DataIntegration\Model\NameFormatConfigurationFieldEdit | Description of changes for the name format configuration field option.

try {
    $apiInstance->editNameFormatConfigurationField($id, $nameFormatConfigurationFieldEdit);
} catch (Exception $e) {
    echo 'Exception when calling NameFormatsApi->editNameFormatConfigurationField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int32. The name format configuration field option system ID. | |
| **nameFormatConfigurationFieldEdit** | [**\SKY\NXT\DataIntegration\Model\NameFormatConfigurationFieldEdit**](../Model/NameFormatConfigurationFieldEdit.md)| Description of changes for the name format configuration field option. | [optional] |

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

## `getNameFormatConfiguration()`

```php
getNameFormatConfiguration($id): \SKY\NXT\DataIntegration\Model\NameFormatConfiguration
```

Get a name format configuration

Returns details about a name format configuration.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\NameFormatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int32. The name format configuration field option system ID.

try {
    $result = $apiInstance->getNameFormatConfiguration($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NameFormatsApi->getNameFormatConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int32. The name format configuration field option system ID. | |

### Return type

[**\SKY\NXT\DataIntegration\Model\NameFormatConfiguration**](../Model/NameFormatConfiguration.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNameFormatConfigurationField()`

```php
getNameFormatConfigurationField($id): \SKY\NXT\DataIntegration\Model\NameFormatConfigurationField
```

Get a name format configuration field

Returns details about a name format configuration field.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\NameFormatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int32. The name format configuration field system ID.

try {
    $result = $apiInstance->getNameFormatConfigurationField($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NameFormatsApi->getNameFormatConfigurationField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int32. The name format configuration field system ID. | |

### Return type

[**\SKY\NXT\DataIntegration\Model\NameFormatConfigurationField**](../Model/NameFormatConfigurationField.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNameFormatConfigurationFieldsList()`

```php
getNameFormatConfigurationFieldsList(): \SKY\NXT\DataIntegration\Model\NameFormatConfigurationFieldCollection
```

Get name format configuration fields list

Returns a list of name format configuration fields.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\NameFormatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getNameFormatConfigurationFieldsList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NameFormatsApi->getNameFormatConfigurationFieldsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SKY\NXT\DataIntegration\Model\NameFormatConfigurationFieldCollection**](../Model/NameFormatConfigurationFieldCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNameFormatConfigurationList()`

```php
getNameFormatConfigurationList(): \SKY\NXT\DataIntegration\Model\NameFormatConfigurationCollection
```

Get name format configuration list

Returns a list of name format configurations.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\NameFormatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getNameFormatConfigurationList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NameFormatsApi->getNameFormatConfigurationList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SKY\NXT\DataIntegration\Model\NameFormatConfigurationCollection**](../Model/NameFormatConfigurationCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
