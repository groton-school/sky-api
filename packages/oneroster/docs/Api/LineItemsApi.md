# SKY\OneRoster\LineItemsApi

All URIs are relative to https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllLineItems()**](LineItemsApi.md#getAllLineItems) | **GET** /lineItems | LineItems all |
| [**getLineItem()**](LineItemsApi.md#getLineItem) | **GET** /lineItems/{id} | LineItem by id |
| [**putLineItem()**](LineItemsApi.md#putLineItem) | **PUT** /lineItems/{id} | LineItem create/update |


## `getAllLineItems()`

```php
getAllLineItems(): \SKY\OneRoster\Model\LineItemsOutputModel
```

LineItems all

Returns a collection of lineItems.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\LineItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAllLineItems();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineItemsApi->getAllLineItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `getLineItem()`

```php
getLineItem($id): \SKY\OneRoster\Model\LineItemOutputModel
```

LineItem by id

Returns a specific lineItem.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\LineItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | sourcedId for the lineItem

try {
    $result = $apiInstance->getLineItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineItemsApi->getLineItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| sourcedId for the lineItem | |

### Return type

[**\SKY\OneRoster\Model\LineItemOutputModel**](../Model/LineItemOutputModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putLineItem()`

```php
putLineItem($id, $lineItemInputModel): \SKY\OneRoster\Model\LineItemOutputModel
```

LineItem create/update

Returns the lineItem object that was created or updated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SKY\OneRoster\Api\LineItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | sourcedId for the lineItem
$lineItemInputModel = {"lineItem":{"title":"Assignment Title 1","description":"Assignment Description for Assignment 1","assignDate":"2022-09-26T01:30:00.0000000+00:00","dueDate":"2022-09-29T01:30:00.0000000+00:00","class":{"sourcedId":"cls-222-12345","href":"https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/classes/cls-222-12345","type":"class"},"category":{"sourcedId":"lic-222-345","href":"https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/categories/lic-222-345","type":"category"},"gradingPeriod":{"sourcedId":"as-grp-222-6789","href":"https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/gradingperiods/as-grp-222-6789","type":"academicSession"},"resultValueMin":0,"resultValueMax":10,"sourcedId":"external-lineitem-sourcedId","status":"active","dateLastModified":"2022-09-26T01:30:00.0000000+00:00"}}; // \SKY\OneRoster\Model\LineItemInputModel | input model for the lineItem

try {
    $result = $apiInstance->putLineItem($id, $lineItemInputModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineItemsApi->putLineItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| sourcedId for the lineItem | |
| **lineItemInputModel** | [**\SKY\OneRoster\Model\LineItemInputModel**](../Model/LineItemInputModel.md)| input model for the lineItem | [optional] |

### Return type

[**\SKY\OneRoster\Model\LineItemOutputModel**](../Model/LineItemOutputModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
