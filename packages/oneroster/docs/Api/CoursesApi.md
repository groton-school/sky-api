# SKY\OneRoster\CoursesApi

All URIs are relative to https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllCourses()**](CoursesApi.md#getAllCourses) | **GET** /courses | Courses all |
| [**getCourse()**](CoursesApi.md#getCourse) | **GET** /courses/{id} | Course by id |
| [**getCoursesForSchool()**](CoursesApi.md#getCoursesForSchool) | **GET** /schools/{school_id}/courses | Courses for school |


## `getAllCourses()`

```php
getAllCourses(): \SKY\OneRoster\Model\CoursesOutputModel
```

Courses all

Returns a collection of courses.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\CoursesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAllCourses();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoursesApi->getAllCourses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SKY\OneRoster\Model\CoursesOutputModel**](../Model/CoursesOutputModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCourse()`

```php
getCourse($id): \SKY\OneRoster\Model\CourseOutputModel
```

Course by id

Returns a specific course.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\CoursesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | sourcedId for the course

try {
    $result = $apiInstance->getCourse($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoursesApi->getCourse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| sourcedId for the course | |

### Return type

[**\SKY\OneRoster\Model\CourseOutputModel**](../Model/CourseOutputModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCoursesForSchool()`

```php
getCoursesForSchool($schoolId): \SKY\OneRoster\Model\CoursesOutputModel
```

Courses for school

Returns a collection of courses for the specified <code>school_id</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\CoursesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$schoolId = 'schoolId_example'; // string | sourcedId for the teacher

try {
    $result = $apiInstance->getCoursesForSchool($schoolId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoursesApi->getCoursesForSchool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **schoolId** | **string**| sourcedId for the teacher | |

### Return type

[**\SKY\OneRoster\Model\CoursesOutputModel**](../Model/CoursesOutputModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
