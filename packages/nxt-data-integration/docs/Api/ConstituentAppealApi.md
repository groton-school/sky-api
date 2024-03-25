# SKY\NXT\DataIntegration\ConstituentAppealApi

All URIs are relative to https://api.sky.blackbaud.com/nxt-data-integration, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createConstituentAppeal()**](ConstituentAppealApi.md#createConstituentAppeal) | **POST** /v1/re/constitappeals | Create a constituent appeal |
| [**deleteConstituentAppeal()**](ConstituentAppealApi.md#deleteConstituentAppeal) | **DELETE** /v1/re/constitappeals/{id} | Delete a constituent appeal |
| [**editConstituentAppeal()**](ConstituentAppealApi.md#editConstituentAppeal) | **PATCH** /v1/re/constitappeals/{id} | Edit a constituent appeal |


## `createConstituentAppeal()`

```php
createConstituentAppeal($constituentAppealCreate): \SKY\NXT\DataIntegration\Model\PostResponse
```

Create a constituent appeal

Creates a new constituent appeal.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\ConstituentAppealApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$constituentAppealCreate = {"constituent_id":185,"import_id":"00001-555-0000005555","appeal_description":"Holiday Cocktail Hour and Dinner Party","package_description":"Holiday Event Volunteer Opportunity","response_description":"Interested","comments":"Comment about the constituent appeal.","appeal_date":"0001-01-01T12:00:00.0000000+00:00","mailing_id":12345,"market_finder_number":"987654","marketing_segment":"MKSeg","marketing_source_code":"MKSrcCODE"}; // \SKY\NXT\DataIntegration\Model\ConstituentAppealCreate | The constituent appeal to add.

try {
    $result = $apiInstance->createConstituentAppeal($constituentAppealCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentAppealApi->createConstituentAppeal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **constituentAppealCreate** | [**\SKY\NXT\DataIntegration\Model\ConstituentAppealCreate**](../Model/ConstituentAppealCreate.md)| The constituent appeal to add. | [optional] |

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

## `deleteConstituentAppeal()`

```php
deleteConstituentAppeal($id)
```

Delete a constituent appeal

Deletes a constituent appeal.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\ConstituentAppealApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int32. The ID for the constituent appeal to delete.

try {
    $apiInstance->deleteConstituentAppeal($id);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentAppealApi->deleteConstituentAppeal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int32. The ID for the constituent appeal to delete. | |

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

## `editConstituentAppeal()`

```php
editConstituentAppeal($id, $constituentAppealEdit)
```

Edit a constituent appeal

Edits a constituent appeal.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\ConstituentAppealApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int32. The ID for the constituent appeal to update.
$constituentAppealEdit = {"appeal_description":"Holiday Cocktail Hour and Dinner Party","package_description":"Holiday Event Volunteer Opportunity","response_description":"Interested","comments":"Comment about the constituent appeal.","appeal_date":"0001-01-01T12:00:00.0000000+00:00","mailing_id":12345,"market_finder_number":"987654","marketing_segment":"MKSeg","marketing_source_code":"MKSrcCODE"}; // \SKY\NXT\DataIntegration\Model\ConstituentAppealEdit | The changes made to the constituent appeal.

try {
    $apiInstance->editConstituentAppeal($id, $constituentAppealEdit);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentAppealApi->editConstituentAppeal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int32. The ID for the constituent appeal to update. | |
| **constituentAppealEdit** | [**\SKY\NXT\DataIntegration\Model\ConstituentAppealEdit**](../Model/ConstituentAppealEdit.md)| The changes made to the constituent appeal. | [optional] |

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
