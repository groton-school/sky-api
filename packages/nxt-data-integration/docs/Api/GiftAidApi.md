# SKY\NXT\DataIntegration\GiftAidApi

All URIs are relative to https://api.sky.blackbaud.com/nxt-data-integration, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTaxDeclaration()**](GiftAidApi.md#createTaxDeclaration) | **POST** /v1/re/giftaid/taxdeclarations | Create a tax declaration |
| [**deleteTaxDeclaration()**](GiftAidApi.md#deleteTaxDeclaration) | **DELETE** /v1/re/giftaid/taxdeclarations/{id} | Delete a tax declaration |
| [**editTaxDeclaration()**](GiftAidApi.md#editTaxDeclaration) | **PATCH** /v1/re/giftaid/taxdeclarations/{id} | Edit a tax declaration |
| [**getTaxDeclaration()**](GiftAidApi.md#getTaxDeclaration) | **GET** /v1/re/giftaid/taxdeclarations/{id} | Get a tax declaration |
| [**getTaxDeclarationsList()**](GiftAidApi.md#getTaxDeclarationsList) | **GET** /v1/re/giftaid/constituents/{id}/taxdeclarations | Get tax declarations list for a constituent |


## `createTaxDeclaration()`

```php
createTaxDeclaration($giftAidTaxDeclarationCreate): \SKY\NXT\DataIntegration\Model\PostResponse
```

Create a tax declaration

Creates a Gift Aid tax declaration.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\GiftAidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$giftAidTaxDeclarationCreate = {"constituent_id":42,"import_id":"ABC_123","constituent_pays_tax":"Yes","declaration_made":"2015-07-04T02:15:00.0000000+00:00","confirmation_sent":"2015-07-04T02:45:00.0000000+00:00","confirmation_returned":"2015-07-06T10:30:00.0000000+00:00","declaration_starts":"2015-07-01T12:00:00.0000000+00:00","declaration_ends":"2016-06-30T11:59:59.0000000+00:00","tax_notes":"Notes notes notes.","tax_payer_status":"Employed","declaration_indicator":"Written","declaration_source":"Direct mail appeal","sequence":1}; // \SKY\NXT\DataIntegration\Model\GiftAidTaxDeclarationCreate | The tax declaration to add.

try {
    $result = $apiInstance->createTaxDeclaration($giftAidTaxDeclarationCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftAidApi->createTaxDeclaration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **giftAidTaxDeclarationCreate** | [**\SKY\NXT\DataIntegration\Model\GiftAidTaxDeclarationCreate**](../Model/GiftAidTaxDeclarationCreate.md)| The tax declaration to add. | [optional] |

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

## `deleteTaxDeclaration()`

```php
deleteTaxDeclaration($id): \SKY\NXT\DataIntegration\Model\GiftAidTaxDeclaration
```

Delete a tax declaration

Deletes a Gift Aid tax declaration.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\GiftAidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int32. The tax declaration identifier.

try {
    $result = $apiInstance->deleteTaxDeclaration($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftAidApi->deleteTaxDeclaration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int32. The tax declaration identifier. | |

### Return type

[**\SKY\NXT\DataIntegration\Model\GiftAidTaxDeclaration**](../Model/GiftAidTaxDeclaration.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `editTaxDeclaration()`

```php
editTaxDeclaration($id, $giftAidTaxDeclarationEdit)
```

Edit a tax declaration

Edit a Gift Aid tax declaration.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\GiftAidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int32. The ID of the tax declaration to update.
$giftAidTaxDeclarationEdit = {"import_id":"ABC_123","constituent_pays_tax":"Yes","declaration_made":"2015-07-04T02:15:00.0000000+00:00","confirmation_sent":"2015-07-04T02:45:00.0000000+00:00","confirmation_returned":"2015-07-06T10:30:00.0000000+00:00","declaration_starts":"2015-07-01T12:00:00.0000000+00:00","declaration_ends":"2016-06-30T11:59:59.0000000+00:00","tax_notes":"Notes notes notes.","tax_payer_status":"Employed","declaration_indicator":"Written","declaration_source":"Direct mail appeal","sequence":1}; // \SKY\NXT\DataIntegration\Model\GiftAidTaxDeclarationEdit | Description of changes for the tax declaration.

try {
    $apiInstance->editTaxDeclaration($id, $giftAidTaxDeclarationEdit);
} catch (Exception $e) {
    echo 'Exception when calling GiftAidApi->editTaxDeclaration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int32. The ID of the tax declaration to update. | |
| **giftAidTaxDeclarationEdit** | [**\SKY\NXT\DataIntegration\Model\GiftAidTaxDeclarationEdit**](../Model/GiftAidTaxDeclarationEdit.md)| Description of changes for the tax declaration. | [optional] |

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

## `getTaxDeclaration()`

```php
getTaxDeclaration($id): \SKY\NXT\DataIntegration\Model\GiftAidTaxDeclaration
```

Get a tax declaration

Returns a Gift Aid tax declaration.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\GiftAidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int32. The tax declaration identifier.

try {
    $result = $apiInstance->getTaxDeclaration($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftAidApi->getTaxDeclaration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int32. The tax declaration identifier. | |

### Return type

[**\SKY\NXT\DataIntegration\Model\GiftAidTaxDeclaration**](../Model/GiftAidTaxDeclaration.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaxDeclarationsList()`

```php
getTaxDeclarationsList($id, $limit, $offset): \SKY\NXT\DataIntegration\Model\GiftAidTaxDeclarationCollection
```

Get tax declarations list for a constituent

Returns a list of Gift Aid tax declarations for a given constituent.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\GiftAidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int32. The constituent identifier.
$limit = 56; // int | Format - int32.
$offset = 56; // int | Format - int32.

try {
    $result = $apiInstance->getTaxDeclarationsList($id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftAidApi->getTaxDeclarationsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int32. The constituent identifier. | |
| **limit** | **int**| Format - int32. | [optional] |
| **offset** | **int**| Format - int32. | [optional] |

### Return type

[**\SKY\NXT\DataIntegration\Model\GiftAidTaxDeclarationCollection**](../Model/GiftAidTaxDeclarationCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
