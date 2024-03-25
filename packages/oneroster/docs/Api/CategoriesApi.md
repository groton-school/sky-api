# SKY\OneRoster\CategoriesApi

All URIs are relative to https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllCategories()**](CategoriesApi.md#getAllCategories) | **GET** /categories | Categories all |
| [**getCategoriesForClass()**](CategoriesApi.md#getCategoriesForClass) | **GET** /classes/{class_id}/categories | Categories for a class |
| [**getCategory()**](CategoriesApi.md#getCategory) | **GET** /categories/{id} | Category by id |
| [**putCategory()**](CategoriesApi.md#putCategory) | **PUT** /categories/{id} | Category create/update |


## `getAllCategories()`

```php
getAllCategories(): \SKY\OneRoster\Model\CategoriesOutputModel
```

Categories all

Returns a collection of categories.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAllCategories();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getAllCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SKY\OneRoster\Model\CategoriesOutputModel**](../Model/CategoriesOutputModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCategoriesForClass()`

```php
getCategoriesForClass($classId): \SKY\OneRoster\Model\CategoriesOutputModel
```

Categories for a class

Returns a collection of categories for a specified <code>class_id</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$classId = 'classId_example'; // string | sourcedId for the category

try {
    $result = $apiInstance->getCategoriesForClass($classId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getCategoriesForClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **classId** | **string**| sourcedId for the category | |

### Return type

[**\SKY\OneRoster\Model\CategoriesOutputModel**](../Model/CategoriesOutputModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCategory()`

```php
getCategory($id): \SKY\OneRoster\Model\CategoryOutputModel
```

Category by id

Returns a specific category.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | sourcedId for the category

try {
    $result = $apiInstance->getCategory($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| sourcedId for the category | |

### Return type

[**\SKY\OneRoster\Model\CategoryOutputModel**](../Model/CategoryOutputModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putCategory()`

```php
putCategory($id, $categoryInputModel): \SKY\OneRoster\Model\CategoryOutputModel
```

Category create/update

Returns the category object that was created or updated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | sourcedId for the category
$categoryInputModel = {"category":{"title":"Homework","sourcedId":"lic-222-sourcedId","status":"active","dateLastModified":"2022-09-26T01:30:00.0000000+00:00"}}; // \SKY\OneRoster\Model\CategoryInputModel | input model for a category

try {
    $result = $apiInstance->putCategory($id, $categoryInputModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->putCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| sourcedId for the category | |
| **categoryInputModel** | [**\SKY\OneRoster\Model\CategoryInputModel**](../Model/CategoryInputModel.md)| input model for a category | [optional] |

### Return type

[**\SKY\OneRoster\Model\CategoryOutputModel**](../Model/CategoryOutputModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
