# SKY\OneRoster\AcademicsApi

All URIs are relative to https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAcademicSession()**](AcademicsApi.md#getAcademicSession) | **GET** /academicSessions/{id} | AcademicSession by id |
| [**getAllAcademicSessions()**](AcademicsApi.md#getAllAcademicSessions) | **GET** /academicSessions | AcademicSessions all |
| [**getAllGradingPeriods()**](AcademicsApi.md#getAllGradingPeriods) | **GET** /gradingPeriods | GradingPeriods all |
| [**getAllTerms()**](AcademicsApi.md#getAllTerms) | **GET** /terms | Terms all |
| [**getGradingPeriod()**](AcademicsApi.md#getGradingPeriod) | **GET** /gradingPeriods/{id} | GradingPeriod by id |
| [**getGradingPeriodsForTerm()**](AcademicsApi.md#getGradingPeriodsForTerm) | **GET** /terms/{term_id}/gradingPeriods | GradingPeriods for term |
| [**getTerm()**](AcademicsApi.md#getTerm) | **GET** /terms/{id} | Term by id |
| [**getTermsForSchool()**](AcademicsApi.md#getTermsForSchool) | **GET** /schools/{school_id}/terms | Terms for school |


## `getAcademicSession()`

```php
getAcademicSession($id): \SKY\OneRoster\Model\AcademicSessionOutputModel
```

AcademicSession by id

Returns a specific academic session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\AcademicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | sourcedId for the academic session

try {
    $result = $apiInstance->getAcademicSession($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcademicsApi->getAcademicSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| sourcedId for the academic session | |

### Return type

[**\SKY\OneRoster\Model\AcademicSessionOutputModel**](../Model/AcademicSessionOutputModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllAcademicSessions()`

```php
getAllAcademicSessions(): \SKY\OneRoster\Model\AcademicSessionsOutputModel
```

AcademicSessions all

Returns a collection of academic sessions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\AcademicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAllAcademicSessions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcademicsApi->getAllAcademicSessions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SKY\OneRoster\Model\AcademicSessionsOutputModel**](../Model/AcademicSessionsOutputModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllGradingPeriods()`

```php
getAllGradingPeriods(): \SKY\OneRoster\Model\AcademicSessionsOutputModel
```

GradingPeriods all

Returns a collection of grading periods.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\AcademicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAllGradingPeriods();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcademicsApi->getAllGradingPeriods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SKY\OneRoster\Model\AcademicSessionsOutputModel**](../Model/AcademicSessionsOutputModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllTerms()`

```php
getAllTerms(): \SKY\OneRoster\Model\AcademicSessionsOutputModel
```

Terms all

Returns a collection of terms.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\AcademicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAllTerms();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcademicsApi->getAllTerms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SKY\OneRoster\Model\AcademicSessionsOutputModel**](../Model/AcademicSessionsOutputModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGradingPeriod()`

```php
getGradingPeriod($id): \SKY\OneRoster\Model\AcademicSessionOutputModel
```

GradingPeriod by id

Returns a specific grading period.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\AcademicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | sourcedId for the grading period

try {
    $result = $apiInstance->getGradingPeriod($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcademicsApi->getGradingPeriod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| sourcedId for the grading period | |

### Return type

[**\SKY\OneRoster\Model\AcademicSessionOutputModel**](../Model/AcademicSessionOutputModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGradingPeriodsForTerm()`

```php
getGradingPeriodsForTerm($termId): \SKY\OneRoster\Model\AcademicSessionsOutputModel
```

GradingPeriods for term

Returns a collection of grading periods for the specified <code>term_id</code>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\AcademicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$termId = 'termId_example'; // string | sourcedId for the term

try {
    $result = $apiInstance->getGradingPeriodsForTerm($termId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcademicsApi->getGradingPeriodsForTerm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **termId** | **string**| sourcedId for the term | |

### Return type

[**\SKY\OneRoster\Model\AcademicSessionsOutputModel**](../Model/AcademicSessionsOutputModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTerm()`

```php
getTerm($id): \SKY\OneRoster\Model\AcademicSessionOutputModel
```

Term by id

Returns a specific term.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\AcademicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | sourcedId for the term

try {
    $result = $apiInstance->getTerm($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcademicsApi->getTerm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| sourcedId for the term | |

### Return type

[**\SKY\OneRoster\Model\AcademicSessionOutputModel**](../Model/AcademicSessionOutputModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTermsForSchool()`

```php
getTermsForSchool($schoolId): \SKY\OneRoster\Model\AcademicSessionsOutputModel
```

Terms for school

Returns a collection of terms for the specified <code>school_id</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\AcademicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$schoolId = 'schoolId_example'; // string | sourcedId for the school

try {
    $result = $apiInstance->getTermsForSchool($schoolId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcademicsApi->getTermsForSchool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **schoolId** | **string**| sourcedId for the school | |

### Return type

[**\SKY\OneRoster\Model\AcademicSessionsOutputModel**](../Model/AcademicSessionsOutputModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
