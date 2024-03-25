# SKY\School\DegreeApi

All URIs are relative to https://api.sky.blackbaud.com/school, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1DegreesStudentdegreesByStudentIdGet()**](DegreeApi.md#v1DegreesStudentdegreesByStudentIdGet) | **GET** /v1/degrees/studentdegrees/{student_id} | Degrees student degrees by ID |


## `v1DegreesStudentdegreesByStudentIdGet()`

```php
v1DegreesStudentdegreesByStudentIdGet($student_id): \SKY\School\Model\UserDegreeOutputModelCollection
```

Degrees student degrees by ID

Returns a collection of degree/diplomas assigned to the student.<br></br>  Each degree/diploma has a collection of majors, minors and/or concentrations as appropriate for that degree or diploma.<br></br>  Requires the following role in the Education Management system:  <ul><li>Degree Manager</li><li>Diploma Manager</li><li>Student</li><li>Parent</li></ul>

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


$apiInstance = new SKY\School\Api\DegreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$student_id = 56; // int | Format - int32. user Id

try {
    $result = $apiInstance->v1DegreesStudentdegreesByStudentIdGet($student_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DegreeApi->v1DegreesStudentdegreesByStudentIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **student_id** | **int**| Format - int32. user Id | |

### Return type

[**\SKY\School\Model\UserDegreeOutputModelCollection**](../Model/UserDegreeOutputModelCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
