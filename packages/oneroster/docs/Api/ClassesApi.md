# SKY\OneRoster\ClassesApi

All URIs are relative to https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllClasses()**](ClassesApi.md#getAllClasses) | **GET** /classes | Classes all |
| [**getClass()**](ClassesApi.md#getClass) | **GET** /classes/{id} | Class by id |
| [**getClassesForSchool()**](ClassesApi.md#getClassesForSchool) | **GET** /schools/{school_id}/classes | Classes for a school |
| [**getClassesForTeacher()**](ClassesApi.md#getClassesForTeacher) | **GET** /teachers/{teacher_id}/classes | Classes for a teacher |
| [**getLineItemsForClass()**](ClassesApi.md#getLineItemsForClass) | **GET** /classes/{class_id}/lineItems | LineItems for a class |


## `getAllClasses()`

```php
getAllClasses(): \SKY\OneRoster\Model\ClassesOutputModel
```

Classes all

Returns a collection of classes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\ClassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAllClasses();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassesApi->getAllClasses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SKY\OneRoster\Model\ClassesOutputModel**](../Model/ClassesOutputModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClass()`

```php
getClass($id): \SKY\OneRoster\Model\ClassOutputModel
```

Class by id

Returns a specific class.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\ClassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | sourcedId for the class

try {
    $result = $apiInstance->getClass($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassesApi->getClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| sourcedId for the class | |

### Return type

[**\SKY\OneRoster\Model\ClassOutputModel**](../Model/ClassOutputModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClassesForSchool()`

```php
getClassesForSchool($schoolId): \SKY\OneRoster\Model\ClassOutputModel
```

Classes for a school

Returns a collection of classes for the specified <code>school_id</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\ClassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$schoolId = 'schoolId_example'; // string | sourcedId for the school

try {
    $result = $apiInstance->getClassesForSchool($schoolId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassesApi->getClassesForSchool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **schoolId** | **string**| sourcedId for the school | |

### Return type

[**\SKY\OneRoster\Model\ClassOutputModel**](../Model/ClassOutputModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClassesForTeacher()`

```php
getClassesForTeacher($teacherId): \SKY\OneRoster\Model\ClassOutputModel
```

Classes for a teacher

Returns a collection of classes for the specified <code>teacher_id</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\ClassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$teacherId = 'teacherId_example'; // string | sourcedId for the teacher

try {
    $result = $apiInstance->getClassesForTeacher($teacherId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassesApi->getClassesForTeacher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **teacherId** | **string**| sourcedId for the teacher | |

### Return type

[**\SKY\OneRoster\Model\ClassOutputModel**](../Model/ClassOutputModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLineItemsForClass()`

```php
getLineItemsForClass($classId): \SKY\OneRoster\Model\LineItemsOutputModel
```

LineItems for a class

Returns a collection of lineItems for the specified <code>class_id</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\ClassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$classId = 'classId_example'; // string | sourcedId for the class

try {
    $result = $apiInstance->getLineItemsForClass($classId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassesApi->getLineItemsForClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **classId** | **string**| sourcedId for the class | |

### Return type

[**\SKY\OneRoster\Model\LineItemsOutputModel**](../Model/LineItemsOutputModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
