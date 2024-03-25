# SKY\School\AcademicsApi

All URIs are relative to https://api.sky.blackbaud.com/school, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1AcademicsByStudentIdAssignmentsGet()**](AcademicsApi.md#v1AcademicsByStudentIdAssignmentsGet) | **GET** /v1/academics/{student_id}/assignments | Academics assignments for student |
| [**v1AcademicsByStudentIdBySectionIdGradedassignmentsGet()**](AcademicsApi.md#v1AcademicsByStudentIdBySectionIdGradedassignmentsGet) | **GET** /v1/academics/{student_id}/{section_id}/gradedassignments | Academics graded assignments for student |
| [**v1AcademicsCoursesGet()**](AcademicsApi.md#v1AcademicsCoursesGet) | **GET** /v1/academics/courses | Academics courses |
| [**v1AcademicsDepartmentsGet()**](AcademicsApi.md#v1AcademicsDepartmentsGet) | **GET** /v1/academics/departments | Academics departments |
| [**v1AcademicsEnrollmentsByUserIdGet()**](AcademicsApi.md#v1AcademicsEnrollmentsByUserIdGet) | **GET** /v1/academics/enrollments/{user_id} | Academics student enrollment list |
| [**v1AcademicsEnrollmentsChangesGet()**](AcademicsApi.md#v1AcademicsEnrollmentsChangesGet) | **GET** /v1/academics/enrollments/changes | Academics Student Enrollments Changes |
| [**v1AcademicsSchedulesMasterGet()**](AcademicsApi.md#v1AcademicsSchedulesMasterGet) | **GET** /v1/academics/schedules/master | Academics master schedule |
| [**v1AcademicsSchedulesSetsByScheduleSetIdGet()**](AcademicsApi.md#v1AcademicsSchedulesSetsByScheduleSetIdGet) | **GET** /v1/academics/schedules/sets/{schedule_set_id} | Academics schedule set |
| [**v1AcademicsSchedulesSetsGet()**](AcademicsApi.md#v1AcademicsSchedulesSetsGet) | **GET** /v1/academics/schedules/sets | Academics schedule sets by level |
| [**v1AcademicsSectionsBySectionIdAssignmentsGet()**](AcademicsApi.md#v1AcademicsSectionsBySectionIdAssignmentsGet) | **GET** /v1/academics/sections/{section_id}/assignments | Academics assignments by section |
| [**v1AcademicsSectionsBySectionIdCyclesGet()**](AcademicsApi.md#v1AcademicsSectionsBySectionIdCyclesGet) | **GET** /v1/academics/sections/{section_id}/cycles | Academics cycles by section |
| [**v1AcademicsSectionsBySectionIdStudentsGet()**](AcademicsApi.md#v1AcademicsSectionsBySectionIdStudentsGet) | **GET** /v1/academics/sections/{section_id}/students | Academics students by section |
| [**v1AcademicsSectionsGet()**](AcademicsApi.md#v1AcademicsSectionsGet) | **GET** /v1/academics/sections | Academics sections by school level |
| [**v1AcademicsSectionsStudentsPost()**](AcademicsApi.md#v1AcademicsSectionsStudentsPost) | **POST** /v1/academics/sections/students | Academics enroll students into sections |
| [**v1AcademicsSpecialdaysGet()**](AcademicsApi.md#v1AcademicsSpecialdaysGet) | **GET** /v1/academics/specialdays | Academics special days |
| [**v1AcademicsStudentByStudentIdSectionsGet()**](AcademicsApi.md#v1AcademicsStudentByStudentIdSectionsGet) | **GET** /v1/academics/student/{student_id}/sections | Academics sections for student |
| [**v1AcademicsTeachersByTeacherIdSectionsGet()**](AcademicsApi.md#v1AcademicsTeachersByTeacherIdSectionsGet) | **GET** /v1/academics/teachers/{teacher_id}/sections | Academics sections by teacher |


## `v1AcademicsByStudentIdAssignmentsGet()`

```php
v1AcademicsByStudentIdAssignmentsGet($student_id, $start_date, $end_date, $section_ids): \SKY\School\Model\StudentAssignmentCollection
```

Academics assignments for student

Returns assignments for a student that are assigned or due within the date range specified.<br />  If no ```end_date``` is supplied it defaults to 31 days past the ```start_date```  Requires at least one of the following roles in the Education Management system:  <ul><li>Student</li><li>Parent</li></ul>

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


$apiInstance = new SKY\School\Api\AcademicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$student_id = 56; // int | Format - int32.
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339).
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339).
$section_ids = 'section_ids_example'; // string | 

try {
    $result = $apiInstance->v1AcademicsByStudentIdAssignmentsGet($student_id, $start_date, $end_date, $section_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcademicsApi->v1AcademicsByStudentIdAssignmentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **student_id** | **int**| Format - int32. | |
| **start_date** | **\DateTime**| Format - date-time (as date-time in RFC3339). | |
| **end_date** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional] |
| **section_ids** | **string**|  | [optional] |

### Return type

[**\SKY\School\Model\StudentAssignmentCollection**](../Model/StudentAssignmentCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AcademicsByStudentIdBySectionIdGradedassignmentsGet()`

```php
v1AcademicsByStudentIdBySectionIdGradedassignmentsGet($student_id, $section_id, $marking_period_id): \SKY\School\Model\StudentGradedAssignmentCollection
```

Academics graded assignments for student

Returns the graded assignments for the specified ```student_id``` and their ```section_id```.<br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Student</li><li>Parent</li></ul>

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


$apiInstance = new SKY\School\Api\AcademicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$student_id = 56; // int | Format - int32. The ID of the student to view graded assignments for.
$section_id = 56; // int | Format - int32. The ID of the lead section for the student.
$marking_period_id = 56; // int | Format - int32. The ID of the marking period to return grades for.

try {
    $result = $apiInstance->v1AcademicsByStudentIdBySectionIdGradedassignmentsGet($student_id, $section_id, $marking_period_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcademicsApi->v1AcademicsByStudentIdBySectionIdGradedassignmentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **student_id** | **int**| Format - int32. The ID of the student to view graded assignments for. | |
| **section_id** | **int**| Format - int32. The ID of the lead section for the student. | |
| **marking_period_id** | **int**| Format - int32. The ID of the marking period to return grades for. | |

### Return type

[**\SKY\School\Model\StudentGradedAssignmentCollection**](../Model/StudentGradedAssignmentCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AcademicsCoursesGet()`

```php
v1AcademicsCoursesGet($department_id, $level_id): \SKY\School\Model\CourseCollection
```

Academics courses

Returns a collection of academic courses, filtered by department and/or school level.<br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Academic Group Manager</li><li>Platform Manager</li></ul>

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


$apiInstance = new SKY\School\Api\AcademicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$department_id = 56; // int | Format - int32. Identifier for a specific department.
$level_id = 56; // int | Format - int32. Identifier for a specific school level.

try {
    $result = $apiInstance->v1AcademicsCoursesGet($department_id, $level_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcademicsApi->v1AcademicsCoursesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **department_id** | **int**| Format - int32. Identifier for a specific department. | [optional] |
| **level_id** | **int**| Format - int32. Identifier for a specific school level. | [optional] |

### Return type

[**\SKY\School\Model\CourseCollection**](../Model/CourseCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AcademicsDepartmentsGet()`

```php
v1AcademicsDepartmentsGet($level_id): \SKY\School\Model\DepartmentCollection
```

Academics departments

Returns a collection of academic departments.<br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Academic Group Manager</li><li>Platform Manager</li><li>Any Manager Role</li></ul>

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


$apiInstance = new SKY\School\Api\AcademicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$level_id = 56; // int | Format - int32. Level number.

try {
    $result = $apiInstance->v1AcademicsDepartmentsGet($level_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcademicsApi->v1AcademicsDepartmentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level_id** | **int**| Format - int32. Level number. | [optional] |

### Return type

[**\SKY\School\Model\DepartmentCollection**](../Model/DepartmentCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AcademicsEnrollmentsByUserIdGet()`

```php
v1AcademicsEnrollmentsByUserIdGet($user_id, $school_year): \SKY\School\Model\EnrollmentCollection
```

Academics student enrollment list

Returns a collection of course sections in which the provided student is enrolled.<br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Academic Group Manager</li><li>Schedule Manager</li></ul>

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


$apiInstance = new SKY\School\Api\AcademicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Format - int32. User identifier.
$school_year = 'school_year_example'; // string | The school year to filter the collection of sections by. Corresponds to ```school_year_label``` in the <a href=\"https://developer.sky.blackbaud.com/docs/services/school/operations/v1yearsget\">Year list</a>. Defaults to the current school year.

try {
    $result = $apiInstance->v1AcademicsEnrollmentsByUserIdGet($user_id, $school_year);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcademicsApi->v1AcademicsEnrollmentsByUserIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| Format - int32. User identifier. | |
| **school_year** | **string**| The school year to filter the collection of sections by. Corresponds to &#x60;&#x60;&#x60;school_year_label&#x60;&#x60;&#x60; in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/school/operations/v1yearsget\&quot;&gt;Year list&lt;/a&gt;. Defaults to the current school year. | [optional] |

### Return type

[**\SKY\School\Model\EnrollmentCollection**](../Model/EnrollmentCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AcademicsEnrollmentsChangesGet()`

```php
v1AcademicsEnrollmentsChangesGet($start_date, $end_date): \SKY\School\Model\EnrollmentChangesCollection
```

Academics Student Enrollments Changes

Returns a collection of students with enrollment changes on or after the date parameter.<br />  The maximum period of time that can be specified is 30 days from start_date, if end_date is not provided or is greater than 30 days from start_date it will be set to start_date + 30 days.<br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Schedule Manager</li><li>Academic Group Manager</li></ul>

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


$apiInstance = new SKY\School\Api\AcademicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). The DateTime of changes to academics enrollments to begin with
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). The DateTime of changes to academics enrollments to end with.

try {
    $result = $apiInstance->v1AcademicsEnrollmentsChangesGet($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcademicsApi->v1AcademicsEnrollmentsChangesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date** | **\DateTime**| Format - date-time (as date-time in RFC3339). The DateTime of changes to academics enrollments to begin with | |
| **end_date** | **\DateTime**| Format - date-time (as date-time in RFC3339). The DateTime of changes to academics enrollments to end with. | [optional] |

### Return type

[**\SKY\School\Model\EnrollmentChangesCollection**](../Model/EnrollmentChangesCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AcademicsSchedulesMasterGet()`

```php
v1AcademicsSchedulesMasterGet($level_num, $start_date, $end_date, $offering_type): \SKY\School\Model\MasterScheduleDayCollection
```

Academics master schedule

Returns a collection of Master Schedule days within the date range provided.<br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Academic Group Manager</li><li>Schedule Manager</li></ul>

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


$apiInstance = new SKY\School\Api\AcademicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$level_num = 56; // int | Format - int32. Level Number indicates which school you are working with.
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Start of the date range (inclusive).  The earliest possible start_date is 1/1/1900, any date entered before that date will be overwritten with 1/1/1900.
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). End of the date range (inclusive). If the end_date is earlier than the start_date the end_date wil be overwritten with the start_date plus 7 days.
$offering_type = 56; // int | Format - int32. Filters the results by a specific group type. Defaults to \"All\" offering types.

try {
    $result = $apiInstance->v1AcademicsSchedulesMasterGet($level_num, $start_date, $end_date, $offering_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcademicsApi->v1AcademicsSchedulesMasterGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level_num** | **int**| Format - int32. Level Number indicates which school you are working with. | |
| **start_date** | **\DateTime**| Format - date-time (as date-time in RFC3339). Start of the date range (inclusive).  The earliest possible start_date is 1/1/1900, any date entered before that date will be overwritten with 1/1/1900. | |
| **end_date** | **\DateTime**| Format - date-time (as date-time in RFC3339). End of the date range (inclusive). If the end_date is earlier than the start_date the end_date wil be overwritten with the start_date plus 7 days. | |
| **offering_type** | **int**| Format - int32. Filters the results by a specific group type. Defaults to \&quot;All\&quot; offering types. | [optional] |

### Return type

[**\SKY\School\Model\MasterScheduleDayCollection**](../Model/MasterScheduleDayCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AcademicsSchedulesSetsByScheduleSetIdGet()`

```php
v1AcademicsSchedulesSetsByScheduleSetIdGet($schedule_set_id): \SKY\School\Model\ScheduleSetDetails
```

Academics schedule set

Returns details about the specified ```schedule_set_id```.<br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Academic Group Manager</li><li>Schedule Manager</li></ul>

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


$apiInstance = new SKY\School\Api\AcademicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$schedule_set_id = 56; // int | Format - int32. ID of the Schedule Set you seek.

try {
    $result = $apiInstance->v1AcademicsSchedulesSetsByScheduleSetIdGet($schedule_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcademicsApi->v1AcademicsSchedulesSetsByScheduleSetIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **schedule_set_id** | **int**| Format - int32. ID of the Schedule Set you seek. | |

### Return type

[**\SKY\School\Model\ScheduleSetDetails**](../Model/ScheduleSetDetails.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AcademicsSchedulesSetsGet()`

```php
v1AcademicsSchedulesSetsGet($level_num, $school_year, $group_type): \SKY\School\Model\ScheduleSetCollection
```

Academics schedule sets by level

Returns a collection of Schedule Sets for the specified ```level_num```.<br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Academic Group Manager</li><li>Schedule Manager</li></ul>

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


$apiInstance = new SKY\School\Api\AcademicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$level_num = 56; // int | Format - int32. Level Number indicates which school you are working with.
$school_year = 'school_year_example'; // string | The school year to get Schedule Sets for. Corresponds to ```school_year_label``` in the <a href=\"https://developer.sky.blackbaud.com/docs/services/school/operations/v1yearsget\">Year list</a>. Defaults to the current school year.
$group_type = 1; // int | Format - int32. The Group Type to filter the collection of Schedule Sets. Defaults to the 'Academics' (1).

try {
    $result = $apiInstance->v1AcademicsSchedulesSetsGet($level_num, $school_year, $group_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcademicsApi->v1AcademicsSchedulesSetsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level_num** | **int**| Format - int32. Level Number indicates which school you are working with. | |
| **school_year** | **string**| The school year to get Schedule Sets for. Corresponds to &#x60;&#x60;&#x60;school_year_label&#x60;&#x60;&#x60; in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/school/operations/v1yearsget\&quot;&gt;Year list&lt;/a&gt;. Defaults to the current school year. | [optional] |
| **group_type** | **int**| Format - int32. The Group Type to filter the collection of Schedule Sets. Defaults to the &#39;Academics&#39; (1). | [optional] [default to 1] |

### Return type

[**\SKY\School\Model\ScheduleSetCollection**](../Model/ScheduleSetCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AcademicsSectionsBySectionIdAssignmentsGet()`

```php
v1AcademicsSectionsBySectionIdAssignmentsGet($section_id, $types, $status, $persona_id, $filter, $search): \SKY\School\Model\AssignmentCollection
```

Academics assignments by section

Returns a collection of assignments for the specified ```section_id```.<br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Academic Group Manager</li><li>Student</li><li>Teacher</li><li>Pending Teacher</li></ul>

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


$apiInstance = new SKY\School\Api\AcademicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$section_id = 56; // int | Format - int32. The ID of the section.
$types = 'types_example'; // string | Returns results that match a comma separated list of assignment type IDs.
$status = 'status_example'; // string | The status of the assignment. The status corresponds with static system options. Allowed values: \"0\" for In Progress, \"1\" for Completed, \"2\" for Overdue, and \"-1\" for To Do.
$persona_id = 56; // int | Format - int32. The ID of the persona to get assignments. 3 = Faculty, 2 = Student. Defaults to 3.
$filter = 'filter_example'; // string | Return assignments based on the entered string: ```expired```, ```future```, or ```all```. All is the default sort value.
$search = 'search_example'; // string | Returns results with Descriptions or Titles that match search string.

try {
    $result = $apiInstance->v1AcademicsSectionsBySectionIdAssignmentsGet($section_id, $types, $status, $persona_id, $filter, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcademicsApi->v1AcademicsSectionsBySectionIdAssignmentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **section_id** | **int**| Format - int32. The ID of the section. | |
| **types** | **string**| Returns results that match a comma separated list of assignment type IDs. | [optional] |
| **status** | **string**| The status of the assignment. The status corresponds with static system options. Allowed values: \&quot;0\&quot; for In Progress, \&quot;1\&quot; for Completed, \&quot;2\&quot; for Overdue, and \&quot;-1\&quot; for To Do. | [optional] |
| **persona_id** | **int**| Format - int32. The ID of the persona to get assignments. 3 &#x3D; Faculty, 2 &#x3D; Student. Defaults to 3. | [optional] |
| **filter** | **string**| Return assignments based on the entered string: &#x60;&#x60;&#x60;expired&#x60;&#x60;&#x60;, &#x60;&#x60;&#x60;future&#x60;&#x60;&#x60;, or &#x60;&#x60;&#x60;all&#x60;&#x60;&#x60;. All is the default sort value. | [optional] |
| **search** | **string**| Returns results with Descriptions or Titles that match search string. | [optional] |

### Return type

[**\SKY\School\Model\AssignmentCollection**](../Model/AssignmentCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AcademicsSectionsBySectionIdCyclesGet()`

```php
v1AcademicsSectionsBySectionIdCyclesGet($section_id, $duration_id, $group_type): \SKY\School\Model\SectionCycles
```

Academics cycles by section

Returns a collection of cycles for the specified ```section_id```.<br />  Requires the following role in the Education Management system:  <ul><li>Academic Group Manager</li></ul>

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


$apiInstance = new SKY\School\Api\AcademicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$section_id = 56; // int | Format - int32. The ID of the section.
$duration_id = 56; // int | Format - int32. The ID of the term for which you want to return cycles. Defaults to the current term for the section provided.
$group_type = 1; // int | Format - int32. The Group Type for the section specified. Defaults to the 'Academics' (1).

try {
    $result = $apiInstance->v1AcademicsSectionsBySectionIdCyclesGet($section_id, $duration_id, $group_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcademicsApi->v1AcademicsSectionsBySectionIdCyclesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **section_id** | **int**| Format - int32. The ID of the section. | |
| **duration_id** | **int**| Format - int32. The ID of the term for which you want to return cycles. Defaults to the current term for the section provided. | [optional] |
| **group_type** | **int**| Format - int32. The Group Type for the section specified. Defaults to the &#39;Academics&#39; (1). | [optional] [default to 1] |

### Return type

[**\SKY\School\Model\SectionCycles**](../Model/SectionCycles.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AcademicsSectionsBySectionIdStudentsGet()`

```php
v1AcademicsSectionsBySectionIdStudentsGet($section_id): \SKY\School\Model\StudentCollection
```

Academics students by section

Returns a collection of students in the specified ```section_id```.<br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Academic Group Manager</li><li>Teacher</li></ul>

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


$apiInstance = new SKY\School\Api\AcademicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$section_id = 56; // int | Format - int32. The ID of the section, which can be found using <a href=\"https://developer.sky.blackbaud.com/docs/services/school/operations/V1AcademicsSectionsGet\">Section list</a>.

try {
    $result = $apiInstance->v1AcademicsSectionsBySectionIdStudentsGet($section_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcademicsApi->v1AcademicsSectionsBySectionIdStudentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **section_id** | **int**| Format - int32. The ID of the section, which can be found using &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/school/operations/V1AcademicsSectionsGet\&quot;&gt;Section list&lt;/a&gt;. | |

### Return type

[**\SKY\School\Model\StudentCollection**](../Model/StudentCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AcademicsSectionsGet()`

```php
v1AcademicsSectionsGet($level_num, $school_year): \SKY\School\Model\AcademicsSectionCollection
```

Academics sections by school level

Returns a collection of academic sections for the specified school level.<br />  Requires the following role in the Education Management system:  <ul><li>Academic Group Manager</li></ul>

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


$apiInstance = new SKY\School\Api\AcademicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$level_num = 56; // int | Format - int32. Level number.
$school_year = 'school_year_example'; // string | The school year to get sections for. Corresponds to ```school_year_label``` in the <a href=\"https://developer.sky.blackbaud.com/docs/services/school/operations/v1yearsget\">Year list</a>. Defaults to the current school year.

try {
    $result = $apiInstance->v1AcademicsSectionsGet($level_num, $school_year);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcademicsApi->v1AcademicsSectionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level_num** | **int**| Format - int32. Level number. | |
| **school_year** | **string**| The school year to get sections for. Corresponds to &#x60;&#x60;&#x60;school_year_label&#x60;&#x60;&#x60; in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/school/operations/v1yearsget\&quot;&gt;Year list&lt;/a&gt;. Defaults to the current school year. | [optional] |

### Return type

[**\SKY\School\Model\AcademicsSectionCollection**](../Model/AcademicsSectionCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AcademicsSectionsStudentsPost()`

```php
v1AcademicsSectionsStudentsPost($bulk_enrollment): \SKY\School\Model\PostResponse
```

Academics enroll students into sections

Adds bulk enrollment data (students and/or teachers) for the specified section(s).<br />  Returns True if successful, otherwise false.<br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Academic Group Manager</li><li>Schedule Manager</li></ul>

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


$apiInstance = new SKY\School\Api\AcademicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulk_enrollment = {"id":60708,"enrollment_date":"2021-08-08T12:00:00.0000000+00:00","section_ids":"90123567,89012345","user_ids":"12345678,9012345"}; // \SKY\School\Model\BulkEnrollment | Defines which users (students and/or teachers) should be added to which offerings (via ```section_id``` and duration ```id```)

try {
    $result = $apiInstance->v1AcademicsSectionsStudentsPost($bulk_enrollment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcademicsApi->v1AcademicsSectionsStudentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bulk_enrollment** | [**\SKY\School\Model\BulkEnrollment**](../Model/BulkEnrollment.md)| Defines which users (students and/or teachers) should be added to which offerings (via &#x60;&#x60;&#x60;section_id&#x60;&#x60;&#x60; and duration &#x60;&#x60;&#x60;id&#x60;&#x60;&#x60;) | [optional] |

### Return type

[**\SKY\School\Model\PostResponse**](../Model/PostResponse.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AcademicsSpecialdaysGet()`

```php
v1AcademicsSpecialdaysGet($level_id): \SKY\School\Model\SpecialDayCollection
```

Academics special days

Returns a collection of special days.<br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Academic Group Manager</li><li>Schedule Manager</li></ul>

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


$apiInstance = new SKY\School\Api\AcademicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$level_id = 56; // int | Format - int32. Identifier for a specific school level.

try {
    $result = $apiInstance->v1AcademicsSpecialdaysGet($level_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcademicsApi->v1AcademicsSpecialdaysGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level_id** | **int**| Format - int32. Identifier for a specific school level. | [optional] |

### Return type

[**\SKY\School\Model\SpecialDayCollection**](../Model/SpecialDayCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AcademicsStudentByStudentIdSectionsGet()`

```php
v1AcademicsStudentByStudentIdSectionsGet($student_id): \SKY\School\Model\AcademicsSectionStudentCollection
```

Academics sections for student

Returns a collection of sections for the specified ```student_id```.<br />  The user requesting the information must be the student, parent of the student or faculty member associated with the student.<br />  The ```cumulative_gade``` is shown if the user has the correct access to view it.<br />   Requires at least one of the following roles in the Education Management system:  <ul><li>Student</li><li>Parent</li><li>Faculty</li></ul>

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


$apiInstance = new SKY\School\Api\AcademicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$student_id = 56; // int | Format - int32. The ID of the student to view sections and grades for.

try {
    $result = $apiInstance->v1AcademicsStudentByStudentIdSectionsGet($student_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcademicsApi->v1AcademicsStudentByStudentIdSectionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **student_id** | **int**| Format - int32. The ID of the student to view sections and grades for. | |

### Return type

[**\SKY\School\Model\AcademicsSectionStudentCollection**](../Model/AcademicsSectionStudentCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AcademicsTeachersByTeacherIdSectionsGet()`

```php
v1AcademicsTeachersByTeacherIdSectionsGet($teacher_id, $school_year): \SKY\School\Model\AcademicsSectionCollection
```

Academics sections by teacher

Returns a collection of sections for the specified ```teacher_id```.<br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Academic Group Manager</li><li>Teacher</li></ul>

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


$apiInstance = new SKY\School\Api\AcademicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$teacher_id = 56; // int | Format - int32. The ID of the teacher to get sections for.
$school_year = 'school_year_example'; // string | The school year. Corresponds to ```school_year_label``` in the <a href=\"https://developer.sky.blackbaud.com/docs/services/school/operations/v1yearsget\">Year list</a>.

try {
    $result = $apiInstance->v1AcademicsTeachersByTeacherIdSectionsGet($teacher_id, $school_year);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcademicsApi->v1AcademicsTeachersByTeacherIdSectionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **teacher_id** | **int**| Format - int32. The ID of the teacher to get sections for. | |
| **school_year** | **string**| The school year. Corresponds to &#x60;&#x60;&#x60;school_year_label&#x60;&#x60;&#x60; in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/school/operations/v1yearsget\&quot;&gt;Year list&lt;/a&gt;. | [optional] |

### Return type

[**\SKY\School\Model\AcademicsSectionCollection**](../Model/AcademicsSectionCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
