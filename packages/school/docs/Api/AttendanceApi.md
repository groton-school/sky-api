# SKY\School\AttendanceApi

All URIs are relative to https://api.sky.blackbaud.com/school, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1AttendanceGet()**](AttendanceApi.md#v1AttendanceGet) | **GET** /v1/attendance | Attendance record |
| [**v1AttendancePost()**](AttendanceApi.md#v1AttendancePost) | **POST** /v1/attendance | Attendance record create |


## `v1AttendanceGet()`

```php
v1AttendanceGet($levelId, $day, $offeringType, $excuseType): \SKY\School\Model\AttendanceGetCollection
```

Attendance record

Returns a collection of student attendance records for the specified day.<br></br>  Please use this <a href=\"https://webfiles-sc1.blackbaud.com/support/helpfiles/k12-kb/sis-tutorial-attendance-setup.html\"> Attendance Setup Guide</a> to verify your attendance settings.<br></br>  Requires the following role in the Education Management system:  <ul><li>Attendance Manager</li></ul>

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


$apiInstance = new SKY\School\Api\AttendanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$levelId = 56; // int | Format - int32. The ID of the school level to retrieve attendance records.
$day = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). The date to return attendance for.
$offeringType = 56; // int | Format - int32. The offering type to retrieve records for.
$excuseType = 56; // int | Format - int32. Filters results to a specific excuse type.

try {
    $result = $apiInstance->v1AttendanceGet($levelId, $day, $offeringType, $excuseType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttendanceApi->v1AttendanceGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **levelId** | **int**| Format - int32. The ID of the school level to retrieve attendance records. | |
| **day** | **\DateTime**| Format - date-time (as date-time in RFC3339). The date to return attendance for. | |
| **offeringType** | **int**| Format - int32. The offering type to retrieve records for. | |
| **excuseType** | **int**| Format - int32. Filters results to a specific excuse type. | [optional] |

### Return type

[**\SKY\School\Model\AttendanceGetCollection**](../Model/AttendanceGetCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AttendancePost()`

```php
v1AttendancePost($attendanceCreate)
```

Attendance record create

Creates a new attendance record for the specified student.<br></br>  Please use this <a href=\"https://webfiles-sc1.blackbaud.com/support/helpfiles/k12-kb/sis-tutorial-attendance-setup.html\"> Attendance Setup Guide</a> to verify your attendance settings.<br></br>  Requires the following role in the Education Management system:  <ul><li>Attendance Manager</li></ul>

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


$apiInstance = new SKY\School\Api\AttendanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attendanceCreate = {"student_user_id":10,"begin_date":"2021-09-30T12:00:00.0000000+00:00","end_date":"2021-09-30T12:00:00.0000000+00:00","start_time":"2024-02-13","end_time":"2024-02-13","excuse_type_id":153,"excuse_comment":"College Trip"}; // \SKY\School\Model\AttendanceCreate | Information about the attendance report

try {
    $apiInstance->v1AttendancePost($attendanceCreate);
} catch (Exception $e) {
    echo 'Exception when calling AttendanceApi->v1AttendancePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attendanceCreate** | [**\SKY\School\Model\AttendanceCreate**](../Model/AttendanceCreate.md)| Information about the attendance report | [optional] |

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
