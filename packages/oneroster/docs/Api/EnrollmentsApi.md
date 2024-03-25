# SKY\OneRoster\EnrollmentsApi

All URIs are relative to https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllEnrollments()**](EnrollmentsApi.md#getAllEnrollments) | **GET** /enrollments | Enrollments all |
| [**getEnrollment()**](EnrollmentsApi.md#getEnrollment) | **GET** /enrollments/{id} | Enrollment by id |
| [**getEnrollmentsForClassInSchool()**](EnrollmentsApi.md#getEnrollmentsForClassInSchool) | **GET** /schools/{school_id}/classes/{class_id}/enrollments | Enrollments for a class in a school |
| [**getEnrollmentsForSchool()**](EnrollmentsApi.md#getEnrollmentsForSchool) | **GET** /schools/{school_id}/enrollments | Enrollments for a school |


## `getAllEnrollments()`

```php
getAllEnrollments(): \SKY\OneRoster\Model\EnrollmentsOutputModel
```

Enrollments all

Returns a collection of enrollments.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\EnrollmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAllEnrollments();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnrollmentsApi->getAllEnrollments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SKY\OneRoster\Model\EnrollmentsOutputModel**](../Model/EnrollmentsOutputModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnrollment()`

```php
getEnrollment($id): \SKY\OneRoster\Model\EnrollmentOutputModel
```

Enrollment by id

Returns a specific enrollment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\EnrollmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | sourcedId for the enrollment

try {
    $result = $apiInstance->getEnrollment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnrollmentsApi->getEnrollment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| sourcedId for the enrollment | |

### Return type

[**\SKY\OneRoster\Model\EnrollmentOutputModel**](../Model/EnrollmentOutputModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnrollmentsForClassInSchool()`

```php
getEnrollmentsForClassInSchool($schoolId, $classId): \SKY\OneRoster\Model\EnrollmentsOutputModel
```

Enrollments for a class in a school

Returns a collection of enrollments for the specified <code>class_id</code> in the <code>school_id</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\EnrollmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$schoolId = 'schoolId_example'; // string | sourcedId for the school
$classId = 'classId_example'; // string | sourcedId for the class

try {
    $result = $apiInstance->getEnrollmentsForClassInSchool($schoolId, $classId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnrollmentsApi->getEnrollmentsForClassInSchool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **schoolId** | **string**| sourcedId for the school | |
| **classId** | **string**| sourcedId for the class | |

### Return type

[**\SKY\OneRoster\Model\EnrollmentsOutputModel**](../Model/EnrollmentsOutputModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnrollmentsForSchool()`

```php
getEnrollmentsForSchool($schoolId): \SKY\OneRoster\Model\EnrollmentsOutputModel
```

Enrollments for a school

Returns a collection of enrollments for the specified <code>school_id</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\EnrollmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$schoolId = 'schoolId_example'; // string | sourcedId for the school

try {
    $result = $apiInstance->getEnrollmentsForSchool($schoolId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnrollmentsApi->getEnrollmentsForSchool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **schoolId** | **string**| sourcedId for the school | |

### Return type

[**\SKY\OneRoster\Model\EnrollmentsOutputModel**](../Model/EnrollmentsOutputModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
