# SKY\School\CoreApi

All URIs are relative to https://api.sky.blackbaud.com/school, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1CustomfieldsGet()**](CoreApi.md#v1CustomfieldsGet) | **GET** /v1/customfields | Core custom fields |
| [**v1SessionsGet()**](CoreApi.md#v1SessionsGet) | **GET** /v1/sessions | Core sessions |
| [**v1TimezoneGet()**](CoreApi.md#v1TimezoneGet) | **GET** /v1/timezone | Core time zone |
| [**v1gradelevelsget()**](CoreApi.md#v1gradelevelsget) | **GET** /v1/gradelevels | Core grade levels |
| [**v1levelsget()**](CoreApi.md#v1levelsget) | **GET** /v1/levels | Core school levels |
| [**v1offeringtypesget()**](CoreApi.md#v1offeringtypesget) | **GET** /v1/offeringtypes | Core offering types |
| [**v1rolesget()**](CoreApi.md#v1rolesget) | **GET** /v1/roles | Core roles |
| [**v1termsget()**](CoreApi.md#v1termsget) | **GET** /v1/terms | Core terms |
| [**v1yearsget()**](CoreApi.md#v1yearsget) | **GET** /v1/years | Core years |


## `v1CustomfieldsGet()`

```php
v1CustomfieldsGet(): \SKY\School\Model\AdminCustomFieldsCollection
```

Core custom fields

Returns a collection of admin custom fields.<br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Platform Manager</li></ul>

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


$apiInstance = new SKY\School\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1CustomfieldsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->v1CustomfieldsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SKY\School\Model\AdminCustomFieldsCollection**](../Model/AdminCustomFieldsCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1SessionsGet()`

```php
v1SessionsGet($levelNum, $schoolYear): \SKY\School\Model\SchoolSessionCollection
```

Core sessions

Returns a collection of sessions for a higher education institution.<br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Academic Group Manager</li><li>Platform Manager</li></ul>

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


$apiInstance = new SKY\School\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$levelNum = 56; // int | Format - int32. Filter for a specific ```level_num``` (level number)
$schoolYear = 'schoolYear_example'; // string | Filter for a specific ```school_year``` (required format YYYY - YYYY (11 chars))

try {
    $result = $apiInstance->v1SessionsGet($levelNum, $schoolYear);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->v1SessionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **levelNum** | **int**| Format - int32. Filter for a specific &#x60;&#x60;&#x60;level_num&#x60;&#x60;&#x60; (level number) | [optional] |
| **schoolYear** | **string**| Filter for a specific &#x60;&#x60;&#x60;school_year&#x60;&#x60;&#x60; (required format YYYY - YYYY (11 chars)) | [optional] |

### Return type

[**\SKY\School\Model\SchoolSessionCollection**](../Model/SchoolSessionCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1TimezoneGet()`

```php
v1TimezoneGet(): \SKY\School\Model\Timezone
```

Core time zone

Returns the current time zone set for the school.<br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Academic Group Manager</li><li>Platform Manager</li><li>Any Manager Role</li></ul>

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


$apiInstance = new SKY\School\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1TimezoneGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->v1TimezoneGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SKY\School\Model\Timezone**](../Model/Timezone.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1gradelevelsget()`

```php
v1gradelevelsget(): \SKY\School\Model\GradeLevelCollection
```

Core grade levels

Returns a collection of core school grade levels.<br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Academic Group Manager</li><li>Schedule Manager</li><li>Platform Manager</li><li>Any Manager Role</li></ul>

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


$apiInstance = new SKY\School\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1gradelevelsget();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->v1gradelevelsget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SKY\School\Model\GradeLevelCollection**](../Model/GradeLevelCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1levelsget()`

```php
v1levelsget(): \SKY\School\Model\LevelCollection
```

Core school levels

Returns a collection of core school levels.<br />  Requires at least one of the following roles in the Education Management system:  <ul><li>SKY API Data Sync</li><li>Any Manager Role</li></ul>

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


$apiInstance = new SKY\School\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1levelsget();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->v1levelsget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SKY\School\Model\LevelCollection**](../Model/LevelCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1offeringtypesget()`

```php
v1offeringtypesget(): \SKY\School\Model\OfferingTypeCollection
```

Core offering types

Returns a collection of core school offering types.<br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Academic Group Manager</li><li>Schedule Manager</li><li>Platform Manager</li></ul>

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


$apiInstance = new SKY\School\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1offeringtypesget();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->v1offeringtypesget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SKY\School\Model\OfferingTypeCollection**](../Model/OfferingTypeCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1rolesget()`

```php
v1rolesget(): \SKY\School\Model\RoleCollection
```

Core roles

Returns a collection of core school user roles.<br />  Requires at least one of the following roles in the Education Management system:  <ul><li>SKY API Data Sync</li><li>Any Manager Role</li></ul>

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


$apiInstance = new SKY\School\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1rolesget();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->v1rolesget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SKY\School\Model\RoleCollection**](../Model/RoleCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1termsget()`

```php
v1termsget($schoolYear, $offeringType): \SKY\School\Model\TermCollection
```

Core terms

Returns a collection of core school terms.<br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Academic Group Manager</li><li>Schedule Manager</li><li>Platform Manager</li><li>Any Manager Role</li></ul>

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


$apiInstance = new SKY\School\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$schoolYear = 'schoolYear_example'; // string | The school year to get terms for. Defaults to the current school year.
$offeringType = 56; // int | Format - int32. The offering type to filter terms by.

try {
    $result = $apiInstance->v1termsget($schoolYear, $offeringType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->v1termsget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **schoolYear** | **string**| The school year to get terms for. Defaults to the current school year. | [optional] |
| **offeringType** | **int**| Format - int32. The offering type to filter terms by. | [optional] |

### Return type

[**\SKY\School\Model\TermCollection**](../Model/TermCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1yearsget()`

```php
v1yearsget(): \SKY\School\Model\YearCollection
```

Core years

Returns a collection of core school years.<br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Academic Group Manager</li><li>Schedule Manager</li><li>Platform Manager</li><li>Any Manager Role</li></ul>

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


$apiInstance = new SKY\School\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1yearsget();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->v1yearsget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SKY\School\Model\YearCollection**](../Model/YearCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
