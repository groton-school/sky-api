# SKY\OneRoster\OrgsApi

All URIs are relative to https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllOrgs()**](OrgsApi.md#getAllOrgs) | **GET** /orgs | Orgs all |
| [**getOrg()**](OrgsApi.md#getOrg) | **GET** /orgs/{id} | Org by id |


## `getAllOrgs()`

```php
getAllOrgs(): \SKY\OneRoster\Model\OrgsOutputModel
```

Orgs all

Returns a collection of organizations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\OrgsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAllOrgs();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->getAllOrgs: ', $e->getMessage(), PHP_EOL;
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

## `getOrg()`

```php
getOrg($id): \SKY\OneRoster\Model\OrgOutputModel
```

Org by id

Returns a specific org.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\OrgsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | sourcedId for the org

try {
    $result = $apiInstance->getOrg($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->getOrg: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| sourcedId for the org | |

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
