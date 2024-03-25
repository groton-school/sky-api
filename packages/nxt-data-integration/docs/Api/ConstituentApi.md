# SKY\NXT\DataIntegration\ConstituentApi

All URIs are relative to https://api.sky.blackbaud.com/nxt-data-integration, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteConstituent()**](ConstituentApi.md#deleteConstituent) | **DELETE** /v1/re/constituents/{id} | Delete a constituent |
| [**getConstituentIdMapByConstituentId()**](ConstituentApi.md#getConstituentIdMapByConstituentId) | **GET** /v1/re/constituentidmap/{constituentid} | Get a constituent record id from constituent id |
| [**getConstituentIdMapByImportId()**](ConstituentApi.md#getConstituentIdMapByImportId) | **GET** /v1/re/importidmap/constituent/{importid} | Get a constituent record id from import id |
| [**getConstituentsByFund()**](ConstituentApi.md#getConstituentsByFund) | **GET** /v1/re/constituents/fund/{fundId} | Get constituents who gave to a fund |
| [**getCustomSearchConstituent()**](ConstituentApi.md#getCustomSearchConstituent) | **GET** /v1/re/constituents/customsearch | Get constituent list (search) |


## `deleteConstituent()`

```php
deleteConstituent($id)
```

Delete a constituent

Deletes a constituent. The constituent cannot have any gifts or actions.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\ConstituentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Format - int32. The constituent system ID.

try {
    $apiInstance->deleteConstituent($id);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentApi->deleteConstituent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Format - int32. The constituent system ID. | |

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

## `getConstituentIdMapByConstituentId()`

```php
getConstituentIdMapByConstituentId($constituentid): \SKY\NXT\DataIntegration\Model\ConstituentIdMap
```

Get a constituent record id from constituent id

Returns a constituent system record id mapping for a given constituent id.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\ConstituentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$constituentid = 'constituentid_example'; // string | The constituent ID.

try {
    $result = $apiInstance->getConstituentIdMapByConstituentId($constituentid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentApi->getConstituentIdMapByConstituentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **constituentid** | **string**| The constituent ID. | |

### Return type

[**\SKY\NXT\DataIntegration\Model\ConstituentIdMap**](../Model/ConstituentIdMap.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConstituentIdMapByImportId()`

```php
getConstituentIdMapByImportId($importid): \SKY\NXT\DataIntegration\Model\ImportIdMap
```

Get a constituent record id from import id

Returns a constituent system record id mapping for a given import id.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\ConstituentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$importid = 'importid_example'; // string | The constituent import ID.

try {
    $result = $apiInstance->getConstituentIdMapByImportId($importid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentApi->getConstituentIdMapByImportId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **importid** | **string**| The constituent import ID. | |

### Return type

[**\SKY\NXT\DataIntegration\Model\ImportIdMap**](../Model/ImportIdMap.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConstituentsByFund()`

```php
getConstituentsByFund($fundId, $limit, $offset): \SKY\NXT\DataIntegration\Model\ConstituentByFundCollection
```

Get constituents who gave to a fund

Gets constituent records that have given a gift to a specific fund.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\ConstituentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fundId = 'fundId_example'; // string | The fund identifier.
$limit = 56; // int | Format - int32. Optional parameter for the maximum number of records to return.
$offset = 56; // int | Format - int32. Optional query parameter to support paging.

try {
    $result = $apiInstance->getConstituentsByFund($fundId, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentApi->getConstituentsByFund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fundId** | **string**| The fund identifier. | |
| **limit** | **int**| Format - int32. Optional parameter for the maximum number of records to return. | [optional] |
| **offset** | **int**| Format - int32. Optional query parameter to support paging. | [optional] |

### Return type

[**\SKY\NXT\DataIntegration\Model\ConstituentByFundCollection**](../Model/ConstituentByFundCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomSearchConstituent()`

```php
getCustomSearchConstituent($limit, $firstName, $lastName, $aliasType, $lookupId, $addressLines, $city, $state, $postCode, $email, $phoneNumber, $includeMaidenName, $includeAlias, $recordIds): \SKY\NXT\DataIntegration\Model\ConstituentCollection
```

Get constituent list (search)

Searches for constituent records using the given filter criteria.

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


$apiInstance = new SKY\NXT\DataIntegration\Api\ConstituentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Format - int32. Represents the number of records to return. The default is 500. The maximum is 1000.
$firstName = 'firstName_example'; // string | First name.
$lastName = 'lastName_example'; // string | Last name.
$aliasType = 'aliasType_example'; // string | Alias type.
$lookupId = 'lookupId_example'; // string | Lookup ID.
$addressLines = 'addressLines_example'; // string | Address lines.
$city = 'city_example'; // string | Address city.
$state = 'state_example'; // string | Address state.
$postCode = 'postCode_example'; // string | Address postal code.
$email = 'email_example'; // string | Email address.
$phoneNumber = 'phoneNumber_example'; // string | Phone number.
$includeMaidenName = True; // bool | Include maiden name when searching for last name.
$includeAlias = True; // bool | Include alias when searching for last name.
$recordIds = array('recordIds_example'); // string[] | Only return results with following record ids.

try {
    $result = $apiInstance->getCustomSearchConstituent($limit, $firstName, $lastName, $aliasType, $lookupId, $addressLines, $city, $state, $postCode, $email, $phoneNumber, $includeMaidenName, $includeAlias, $recordIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentApi->getCustomSearchConstituent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Format - int32. Represents the number of records to return. The default is 500. The maximum is 1000. | [optional] |
| **firstName** | **string**| First name. | [optional] |
| **lastName** | **string**| Last name. | [optional] |
| **aliasType** | **string**| Alias type. | [optional] |
| **lookupId** | **string**| Lookup ID. | [optional] |
| **addressLines** | **string**| Address lines. | [optional] |
| **city** | **string**| Address city. | [optional] |
| **state** | **string**| Address state. | [optional] |
| **postCode** | **string**| Address postal code. | [optional] |
| **email** | **string**| Email address. | [optional] |
| **phoneNumber** | **string**| Phone number. | [optional] |
| **includeMaidenName** | **bool**| Include maiden name when searching for last name. | [optional] |
| **includeAlias** | **bool**| Include alias when searching for last name. | [optional] |
| **recordIds** | [**string[]**](../Model/string.md)| Only return results with following record ids. | [optional] |

### Return type

[**\SKY\NXT\DataIntegration\Model\ConstituentCollection**](../Model/ConstituentCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
