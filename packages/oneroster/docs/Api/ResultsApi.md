# SKY\OneRoster\ResultsApi

All URIs are relative to https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteResult()**](ResultsApi.md#deleteResult) | **DELETE** /results/{id} | Result delete |
| [**getAllResults()**](ResultsApi.md#getAllResults) | **GET** /results | Results all |
| [**getResult()**](ResultsApi.md#getResult) | **GET** /results/{id} | Result by id |
| [**getResultsForClass()**](ResultsApi.md#getResultsForClass) | **GET** /classes/{class_id}/results | Results for a class |
| [**getResultsForLineItemForClass()**](ResultsApi.md#getResultsForLineItemForClass) | **GET** /classes/{class_id}/lineItems/{li_id}/results | Results for a lineItem for a class |
| [**getResultsForStudentForClass()**](ResultsApi.md#getResultsForStudentForClass) | **GET** /classes/{class_id}/students/{student_id}/results | Results for a student for a class |
| [**putResult()**](ResultsApi.md#putResult) | **PUT** /results/{id} | Result create/update |


## `deleteResult()`

```php
deleteResult($id): \SKY\OneRoster\Model\ResultsOutputModelSvc
```

Result delete

Deletes the specified result sourcedId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\ResultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | sourcedId for the result

try {
    $result = $apiInstance->deleteResult($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResultsApi->deleteResult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| sourcedId for the result | |

### Return type

[**\SKY\OneRoster\Model\ResultsOutputModelSvc**](../Model/ResultsOutputModelSvc.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllResults()`

```php
getAllResults(): \SKY\OneRoster\Model\ResultsOutputModelSvc
```

Results all

Returns a collection of results.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\ResultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAllResults();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResultsApi->getAllResults: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SKY\OneRoster\Model\ResultsOutputModelSvc**](../Model/ResultsOutputModelSvc.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getResult()`

```php
getResult($id): \SKY\OneRoster\Model\ResultOutputModelSvc
```

Result by id

Returns a specific result.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\ResultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | sourcedId for the result

try {
    $result = $apiInstance->getResult($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResultsApi->getResult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| sourcedId for the result | |

### Return type

[**\SKY\OneRoster\Model\ResultOutputModelSvc**](../Model/ResultOutputModelSvc.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getResultsForClass()`

```php
getResultsForClass($classId): \SKY\OneRoster\Model\ResultsOutputModelSvc
```

Results for a class

Returns a collection of results for a specified <code>class_id</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\ResultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$classId = 'classId_example'; // string | sourcedId for the class

try {
    $result = $apiInstance->getResultsForClass($classId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResultsApi->getResultsForClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **classId** | **string**| sourcedId for the class | |

### Return type

[**\SKY\OneRoster\Model\ResultsOutputModelSvc**](../Model/ResultsOutputModelSvc.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getResultsForLineItemForClass()`

```php
getResultsForLineItemForClass($classId, $liId): \SKY\OneRoster\Model\ResultsOutputModelSvc
```

Results for a lineItem for a class

Returns a collection of results for the specified <code>class_id</code> and <code>li_id</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\ResultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$classId = 'classId_example'; // string | sourcedId for the class
$liId = 'liId_example'; // string | sourcedId for the lineItem

try {
    $result = $apiInstance->getResultsForLineItemForClass($classId, $liId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResultsApi->getResultsForLineItemForClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **classId** | **string**| sourcedId for the class | |
| **liId** | **string**| sourcedId for the lineItem | |

### Return type

[**\SKY\OneRoster\Model\ResultsOutputModelSvc**](../Model/ResultsOutputModelSvc.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getResultsForStudentForClass()`

```php
getResultsForStudentForClass($classId, $studentId): \SKY\OneRoster\Model\ResultsOutputModelSvc
```

Results for a student for a class

Returns a collection of results for a specified <code>class_id</code> and <code>student_id</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\ResultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$classId = 'classId_example'; // string | sourcedId for the class
$studentId = 'studentId_example'; // string | sourcedId for the student

try {
    $result = $apiInstance->getResultsForStudentForClass($classId, $studentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResultsApi->getResultsForStudentForClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **classId** | **string**| sourcedId for the class | |
| **studentId** | **string**| sourcedId for the student | |

### Return type

[**\SKY\OneRoster\Model\ResultsOutputModelSvc**](../Model/ResultsOutputModelSvc.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putResult()`

```php
putResult($id, $resultInputModelSvc): \SKY\OneRoster\Model\ResultOutputModelSvc
```

Result create/update

Returns the result object that was created or updated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\ResultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | sourcedId for the result
$resultInputModelSvc = {"result":{"scoreStatus":"fully graded","scoreDate":"2022-09-26T01:30:00.0000000+00:00","score":88,"comment":"Result comment","lineItem":{"sourcedId":"<external-lineitem-id>","href":"https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/lineitems/<external-lineitem-ID>","type":"lineItem"},"student":{"sourcedId":"usr-222-12345678","href":"https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/users/cls-222-12345678","type":"user"},"sourcedId":"<external-result-ID>","status":"active","dateLastModified":"2022-09-26T01:30:00.0000000+00:00"}}; // \SKY\OneRoster\Model\ResultInputModelSvc | input model for the result

try {
    $result = $apiInstance->putResult($id, $resultInputModelSvc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResultsApi->putResult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| sourcedId for the result | |
| **resultInputModelSvc** | [**\SKY\OneRoster\Model\ResultInputModelSvc**](../Model/ResultInputModelSvc.md)| input model for the result | [optional] |

### Return type

[**\SKY\OneRoster\Model\ResultOutputModelSvc**](../Model/ResultOutputModelSvc.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
