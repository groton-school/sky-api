# SKY\OneRoster\SchoolsApi

All URIs are relative to https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllSchools()**](SchoolsApi.md#getAllSchools) | **GET** /schools | Schools all |
| [**getSchool()**](SchoolsApi.md#getSchool) | **GET** /schools/{id} | School by id |


## `getAllSchools()`

```php
getAllSchools(): \SKY\OneRoster\Model\OrgsOutputModel
```

Schools all

Returns a collection of schools.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\SchoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAllSchools();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchoolsApi->getAllSchools: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SKY\OneRoster\Model\OrgsOutputModel**](../Model/OrgsOutputModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSchool()`

```php
getSchool($id): \SKY\OneRoster\Model\OrgOutputModel
```

School by id

Returns a specific school.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\SchoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | sourcedId for the school

try {
    $result = $apiInstance->getSchool($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchoolsApi->getSchool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| sourcedId for the school | |

### Return type

[**\SKY\OneRoster\Model\OrgOutputModel**](../Model/OrgOutputModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
