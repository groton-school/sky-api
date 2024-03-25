# SKY\Altru\Administration\CurrencyApi

All URIs are relative to https://api.sky.blackbaud.com/alt-adnmg, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**viewCurrencyConfiguration()**](CurrencyApi.md#viewCurrencyConfiguration) | **GET** /currencies/{currency_id}/currencyconfiguration | View a currency configuration |


## `viewCurrencyConfiguration()`

```php
viewCurrencyConfiguration($currencyId): \SKY\Altru\Administration\Model\CurrencyConfigurationView
```

View a currency configuration

This view form loads information necessary for formatting a value as currency.

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


$apiInstance = new SKY\Altru\Administration\Api\CurrencyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currencyId = 'currencyId_example'; // string | The currency id.

try {
    $result = $apiInstance->viewCurrencyConfiguration($currencyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyApi->viewCurrencyConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currencyId** | **string**| The currency id. | |

### Return type

[**\SKY\Altru\Administration\Model\CurrencyConfigurationView**](../Model/CurrencyConfigurationView.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
