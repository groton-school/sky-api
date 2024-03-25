# SKY\School\AdmissionsApi

All URIs are relative to https://api.sky.blackbaud.com/school, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1AdmissionsCandidatesGet()**](AdmissionsApi.md#v1AdmissionsCandidatesGet) | **GET** /v1/admissions/candidates | Admissions candidates |
| [**v1AdmissionsCandidatesPost()**](AdmissionsApi.md#v1AdmissionsCandidatesPost) | **POST** /v1/admissions/candidates | Admissions candidate create |
| [**v1AdmissionsChecklistsGet()**](AdmissionsApi.md#v1AdmissionsChecklistsGet) | **GET** /v1/admissions/checklists | Admissions checklists |
| [**v1AdmissionsCheckliststatusGet()**](AdmissionsApi.md#v1AdmissionsCheckliststatusGet) | **GET** /v1/admissions/checkliststatus | Admissions checklist status |
| [**v1AdmissionsStatusGet()**](AdmissionsApi.md#v1AdmissionsStatusGet) | **GET** /v1/admissions/status | Admissions statuses |


## `v1AdmissionsCandidatesGet()`

```php
v1AdmissionsCandidatesGet($schoolYear, $statusIds, $modifiedDate): \SKY\School\Model\CandidateReadCollection
```

Admissions candidates

Returns a collection of admissions candidates.<br></br>  Requires one of the following roles in the Education Management system:  <ul><li>Admissions Manager</li><li>Platform Manager</li><li>SKY API Data Sync</li></ul>  NOTE: The following fields have been deprecated and are no longer returned as of 01/01/2023.   <ul><li>school_decision</li><li>school_decision_type</li><li>candidate_decision</li><li>candidate_decision_type</li></ul>  Use the school decision and candidate decision objects instead.<br /><br />                NOTE: The filter for school_year_id has been replaced by school_year.<br />  The school_year_id filter has been deprecated and no longer functions as of 01/01/2023.

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


$apiInstance = new SKY\School\Api\AdmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$schoolYear = 'schoolYear_example'; // string | The school year for which to return results.  Corresponds to ```school_year_label``` in the <a href=\"https://developer.sky.blackbaud.com/docs/services/school/operations/v1yearsget\">Year list</a>.  Default is current year.
$statusIds = 'statusIds_example'; // string | One or more comma delimited status Id(s) to filter results on.  Corresponds to ```id``` in the <a href=\"https://developer.sky.blackbaud.com/docs/services/school/operations/V1AdmissionsStatusGet\">Status list</a>.  Default is no status Id filter.
$modifiedDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). The date last modified to filter results to on or after. Use <a href=\"https://en.wikipedia.org/wiki/ISO_8601\" target=\"_blank\">ISO-8601</a> date format: 2003-04-21. Default is no modified date filter

try {
    $result = $apiInstance->v1AdmissionsCandidatesGet($schoolYear, $statusIds, $modifiedDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdmissionsApi->v1AdmissionsCandidatesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **schoolYear** | **string**| The school year for which to return results.  Corresponds to &#x60;&#x60;&#x60;school_year_label&#x60;&#x60;&#x60; in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/school/operations/v1yearsget\&quot;&gt;Year list&lt;/a&gt;.  Default is current year. | [optional] |
| **statusIds** | **string**| One or more comma delimited status Id(s) to filter results on.  Corresponds to &#x60;&#x60;&#x60;id&#x60;&#x60;&#x60; in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/school/operations/V1AdmissionsStatusGet\&quot;&gt;Status list&lt;/a&gt;.  Default is no status Id filter. | [optional] |
| **modifiedDate** | **\DateTime**| Format - date-time (as date-time in RFC3339). The date last modified to filter results to on or after. Use &lt;a href&#x3D;\&quot;https://en.wikipedia.org/wiki/ISO_8601\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO-8601&lt;/a&gt; date format: 2003-04-21. Default is no modified date filter | [optional] |

### Return type

[**\SKY\School\Model\CandidateReadCollection**](../Model/CandidateReadCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AdmissionsCandidatesPost()`

```php
v1AdmissionsCandidatesPost($candidateCreate): int
```

Admissions candidate create

Creates a new admissions candidate record.<br></br>  Returns the ID of the newly created candidate.<br></br>  Requires one of the following roles in the Education Management system:  <ul><li>Admissions Manager</li><li>Admissions Staff</li></ul>

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


$apiInstance = new SKY\School\Api\AdmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$candidateCreate = {"user_id":0,"entering_year":"string","entering_grade_id":0,"checklist_id":0}; // \SKY\School\Model\CandidateCreate | 

try {
    $result = $apiInstance->v1AdmissionsCandidatesPost($candidateCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdmissionsApi->v1AdmissionsCandidatesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **candidateCreate** | [**\SKY\School\Model\CandidateCreate**](../Model/CandidateCreate.md)|  | [optional] |

### Return type

**int**

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AdmissionsChecklistsGet()`

```php
v1AdmissionsChecklistsGet($searchText, $inactive): \SKY\School\Model\AdmissionsCheckListCollection
```

Admissions checklists

Returns a collection of admissions checklists.<br></br>  Use the optional ```search_text``` to apply a case-insensitive search against check lists \"name\".<br />  Use the optional ```inactive``` to return only inactive checklists (default is both).<br />  Requires the following role in the Education Management system:  <ul><li>Admissions Manager</li></ul>

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


$apiInstance = new SKY\School\Api\AdmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$searchText = 'searchText_example'; // string | Applies a case-insensitive search against check lists \"name\".
$inactive = True; // bool | flag to return only inactive checklists (default is both).

try {
    $result = $apiInstance->v1AdmissionsChecklistsGet($searchText, $inactive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdmissionsApi->v1AdmissionsChecklistsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **searchText** | **string**| Applies a case-insensitive search against check lists \&quot;name\&quot;. | [optional] |
| **inactive** | **bool**| flag to return only inactive checklists (default is both). | [optional] |

### Return type

[**\SKY\School\Model\AdmissionsCheckListCollection**](../Model/AdmissionsCheckListCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AdmissionsCheckliststatusGet()`

```php
v1AdmissionsCheckliststatusGet(): \SKY\School\Model\AdmissionsChecklistStatusCollection
```

Admissions checklist status

Returns a collection of admissions checklist statuses.<br />  Requires the following role in the Education Management system:  <ul><li>Admissions Manager</li></ul>

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


$apiInstance = new SKY\School\Api\AdmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1AdmissionsCheckliststatusGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdmissionsApi->v1AdmissionsCheckliststatusGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SKY\School\Model\AdmissionsChecklistStatusCollection**](../Model/AdmissionsChecklistStatusCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AdmissionsStatusGet()`

```php
v1AdmissionsStatusGet(): \SKY\School\Model\AdmissionsStatusesCollection
```

Admissions statuses

Returns a collection of admissions statuses.<br />  Requires one of the following roles in the Education Management system:  <ul><li>Admissions Manager</li><li>Platform Manager</li><li>SKY API Data Sync</li></ul>

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


$apiInstance = new SKY\School\Api\AdmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1AdmissionsStatusGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdmissionsApi->v1AdmissionsStatusGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SKY\School\Model\AdmissionsStatusesCollection**](../Model/AdmissionsStatusesCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
