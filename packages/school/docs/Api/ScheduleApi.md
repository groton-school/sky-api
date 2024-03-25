# SKY\School\ScheduleApi

All URIs are relative to https://api.sky.blackbaud.com/school, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1SchedulesByStudentIdMeetingsGet()**](ScheduleApi.md#v1SchedulesByStudentIdMeetingsGet) | **GET** /v1/schedules/{student_id}/meetings | Schedules - Meetings for a student |
| [**v1SchedulesMeetingsGet()**](ScheduleApi.md#v1SchedulesMeetingsGet) | **GET** /v1/schedules/meetings | Schedules meetings |


## `v1SchedulesByStudentIdMeetingsGet()`

```php
v1SchedulesByStudentIdMeetingsGet($student_id, $start_date, $end_date): \SKY\School\Model\StudentScheduleCollection
```

Schedules - Meetings for a student

Returns a list of meetings for a given student for a specific date.  When ```end_date``` is supplied a range of meetings between the given dates is returned.<br />```end_date``` cannot be more than 30 days past the ```start_date```. Default date range is 30 days.<br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Student</li><li>Parent</li><li>Platform Manager</li><li>Attendance Manager</li><li>Schedule Manager</li></ul>

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


$apiInstance = new SKY\School\Api\ScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$student_id = 56; // int | Format - int32.
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339).
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339).

try {
    $result = $apiInstance->v1SchedulesByStudentIdMeetingsGet($student_id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleApi->v1SchedulesByStudentIdMeetingsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **student_id** | **int**| Format - int32. | |
| **start_date** | **\DateTime**| Format - date-time (as date-time in RFC3339). | |
| **end_date** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional] |

### Return type

[**\SKY\School\Model\StudentScheduleCollection**](../Model/StudentScheduleCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1SchedulesMeetingsGet()`

```php
v1SchedulesMeetingsGet($start_date, $end_date, $offering_types, $section_ids, $last_modified, $show_time_for_current_date): \SKY\School\Model\MeetingCollection
```

Schedules meetings

Returns a list of section meetings for a given date.  When ```end_date``` is supplied a range of meetings between the given dates is returned.<br />```offering_types``` can take a single or multiple values as a comma delimited ```string``` of integers, defaults to 1<br />```end_date``` cannot be more than 30 days past the ```start_date```. Default date range is 30 days.<br /><ul><li>Academics: 1</li><li>Activities: 2</li><li>Advisory: 3</li><li>Athletics: 9</li></ul>  Requires at least one of the following roles in the Education Management system:  <ul><li>Academics Group Manager</li><li>Advisory Group Manager</li><li>Platform Manager</li><li>Activity Group Manager</li><li>Athletic Group Manager</li><li>Scheduling Manager</li></ul>

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


$apiInstance = new SKY\School\Api\ScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use <a href=\"https://en.wikipedia.org/wiki/ISO_8601\" target=\"_blank\">ISO-8601</a> date format: 2022-04-01.
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use <a href=\"https://en.wikipedia.org/wiki/ISO_8601\" target=\"_blank\">ISO-8601</a> date format: 2022-04-08.
$offering_types = '1'; // string | Comma delimited list of integer values above. Defaults to 1.
$section_ids = 'section_ids_example'; // string | Comma delimited list of integer values for the section identifiers to return. By default the route returns all sections.
$last_modified = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Filters meetings to sections that were modified on or after the date provided. <br /> Use <a href=\"https://en.wikipedia.org/wiki/ISO_8601\" target=\"_blank\">ISO-8601</a> date format: 2022-04-01.
$show_time_for_current_date = false; // bool | Set to true to calculate the ```start_time``` and ```end_time``` or meetings based on the current day instead of the meeting day. Defaults to false.

try {
    $result = $apiInstance->v1SchedulesMeetingsGet($start_date, $end_date, $offering_types, $section_ids, $last_modified, $show_time_for_current_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleApi->v1SchedulesMeetingsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use &lt;a href&#x3D;\&quot;https://en.wikipedia.org/wiki/ISO_8601\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO-8601&lt;/a&gt; date format: 2022-04-01. | |
| **end_date** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use &lt;a href&#x3D;\&quot;https://en.wikipedia.org/wiki/ISO_8601\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO-8601&lt;/a&gt; date format: 2022-04-08. | [optional] |
| **offering_types** | **string**| Comma delimited list of integer values above. Defaults to 1. | [optional] [default to &#39;1&#39;] |
| **section_ids** | **string**| Comma delimited list of integer values for the section identifiers to return. By default the route returns all sections. | [optional] |
| **last_modified** | **\DateTime**| Format - date-time (as date-time in RFC3339). Filters meetings to sections that were modified on or after the date provided. &lt;br /&gt; Use &lt;a href&#x3D;\&quot;https://en.wikipedia.org/wiki/ISO_8601\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO-8601&lt;/a&gt; date format: 2022-04-01. | [optional] |
| **show_time_for_current_date** | **bool**| Set to true to calculate the &#x60;&#x60;&#x60;start_time&#x60;&#x60;&#x60; and &#x60;&#x60;&#x60;end_time&#x60;&#x60;&#x60; or meetings based on the current day instead of the meeting day. Defaults to false. | [optional] [default to false] |

### Return type

[**\SKY\School\Model\MeetingCollection**](../Model/MeetingCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
