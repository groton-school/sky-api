# SKY\OneRoster\UsersApi

All URIs are relative to https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllDemographics()**](UsersApi.md#getAllDemographics) | **GET** /demographics | Demographics all |
| [**getAllStudents()**](UsersApi.md#getAllStudents) | **GET** /students | Students all |
| [**getAllTeachers()**](UsersApi.md#getAllTeachers) | **GET** /teachers | Teachers all |
| [**getAllUsers()**](UsersApi.md#getAllUsers) | **GET** /users | Users all |
| [**getDemographics()**](UsersApi.md#getDemographics) | **GET** /demographics/{id} | Demographics by id |
| [**getStudent()**](UsersApi.md#getStudent) | **GET** /students/{id} | Student by id |
| [**getStudentsForClass()**](UsersApi.md#getStudentsForClass) | **GET** /classes/{class_id}/students | Students for class |
| [**getStudentsForSchool()**](UsersApi.md#getStudentsForSchool) | **GET** /schools/{school_id}/students | Students for school |
| [**getTeacher()**](UsersApi.md#getTeacher) | **GET** /teachers/{id} | Teacher by id |
| [**getTeachersForClass()**](UsersApi.md#getTeachersForClass) | **GET** /classes/{class_id}/teachers | Teachers for class |
| [**getTeachersForSchool()**](UsersApi.md#getTeachersForSchool) | **GET** /schools/{school_id}/teachers | Teachers for school |
| [**getUser()**](UsersApi.md#getUser) | **GET** /users/{id} | User by id |


## `getAllDemographics()`

```php
getAllDemographics(): \SKY\OneRoster\Model\DemographicsOutputModel
```

Demographics all

Returns a collection of user's demographic data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAllDemographics();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getAllDemographics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SKY\OneRoster\Model\DemographicsOutputModel**](../Model/DemographicsOutputModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllStudents()`

```php
getAllStudents(): \SKY\OneRoster\Model\UsersOutputModel
```

Students all

Returns a collection of student user data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAllStudents();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getAllStudents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SKY\OneRoster\Model\UsersOutputModel**](../Model/UsersOutputModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllTeachers()`

```php
getAllTeachers(): \SKY\OneRoster\Model\UsersOutputModel
```

Teachers all

Returns a collection of teacher user data. <br />  Roles returned include:  <ul><li>Teacher</li><li>Pending Teacher</li></ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAllTeachers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getAllTeachers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SKY\OneRoster\Model\UsersOutputModel**](../Model/UsersOutputModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllUsers()`

```php
getAllUsers(): \SKY\OneRoster\Model\UsersOutputModel
```

Users all

Returns a collection of user data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAllUsers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getAllUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SKY\OneRoster\Model\UsersOutputModel**](../Model/UsersOutputModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDemographics()`

```php
getDemographics($id): \SKY\OneRoster\Model\DemographicOutputModel
```

Demographics by id

Returns a single user's demographic data for the specified <code>id</code>..

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | sourcedId for the user

try {
    $result = $apiInstance->getDemographics($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getDemographics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| sourcedId for the user | |

### Return type

[**\SKY\OneRoster\Model\DemographicOutputModel**](../Model/DemographicOutputModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudent()`

```php
getStudent($id): \SKY\OneRoster\Model\UserOutputModel
```

Student by id

Returns a single student user for the specified <code>id</code>. <br />

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | sourcedId for the student

try {
    $result = $apiInstance->getStudent($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getStudent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| sourcedId for the student | |

### Return type

[**\SKY\OneRoster\Model\UserOutputModel**](../Model/UserOutputModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentsForClass()`

```php
getStudentsForClass($classId): \SKY\OneRoster\Model\UsersOutputModel
```

Students for class

Returns a collection of student user data for the specified <code>class_id</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$classId = 'classId_example'; // string | sourcedId for the class

try {
    $result = $apiInstance->getStudentsForClass($classId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getStudentsForClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **classId** | **string**| sourcedId for the class | |

### Return type

[**\SKY\OneRoster\Model\UsersOutputModel**](../Model/UsersOutputModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudentsForSchool()`

```php
getStudentsForSchool($schoolId): \SKY\OneRoster\Model\UsersOutputModel
```

Students for school

Returns a collection of student user data for the specified <code>school_id</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$schoolId = 'schoolId_example'; // string | sourcedId for the school

try {
    $result = $apiInstance->getStudentsForSchool($schoolId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getStudentsForSchool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **schoolId** | **string**| sourcedId for the school | |

### Return type

[**\SKY\OneRoster\Model\UsersOutputModel**](../Model/UsersOutputModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTeacher()`

```php
getTeacher($id): \SKY\OneRoster\Model\UserOutputModel
```

Teacher by id

Returns a single teacher user for the specified <code>id</code>. <br />  Roles returned include:  <ul><li>Teacher</li><li>Pending Teacher</li></ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | sourcedId for the teacher

try {
    $result = $apiInstance->getTeacher($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getTeacher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| sourcedId for the teacher | |

### Return type

[**\SKY\OneRoster\Model\UserOutputModel**](../Model/UserOutputModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTeachersForClass()`

```php
getTeachersForClass($classId): \SKY\OneRoster\Model\UsersOutputModel
```

Teachers for class

Returns a collection of teacher user data for the specified <code>class_id</code>. <br />  Roles returned include:  <ul><li>Teacher</li><li>Pending Teacher</li></ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$classId = 'classId_example'; // string | sourcedId for the class

try {
    $result = $apiInstance->getTeachersForClass($classId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getTeachersForClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **classId** | **string**| sourcedId for the class | |

### Return type

[**\SKY\OneRoster\Model\UsersOutputModel**](../Model/UsersOutputModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTeachersForSchool()`

```php
getTeachersForSchool($schoolId): \SKY\OneRoster\Model\UsersOutputModel
```

Teachers for school

Returns a collection of teacher user data for the specified <code>school_id</code>. <br />  Roles returned include:  <ul><li>Teacher</li><li>Pending Teacher</li></ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$schoolId = 'schoolId_example'; // string | sourcedId for the school

try {
    $result = $apiInstance->getTeachersForSchool($schoolId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getTeachersForSchool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **schoolId** | **string**| sourcedId for the school | |

### Return type

[**\SKY\OneRoster\Model\UsersOutputModel**](../Model/UsersOutputModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUser()`

```php
getUser($id): \SKY\OneRoster\Model\UserOutputModel
```

User by id

Returns a single user for the specified <code>id</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | sourcedId for the user

try {
    $result = $apiInstance->getUser($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| sourcedId for the user | |

### Return type

[**\SKY\OneRoster\Model\UserOutputModel**](../Model/UserOutputModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
