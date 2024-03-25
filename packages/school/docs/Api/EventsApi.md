# SKY\School\EventsApi

All URIs are relative to https://api.sky.blackbaud.com/school, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1EventsCalendarGet()**](EventsApi.md#v1EventsCalendarGet) | **GET** /v1/events/calendar | Calendar for User (BETA) |
| [**v1EventsCategoriesGet()**](EventsApi.md#v1EventsCategoriesGet) | **GET** /v1/events/categories | Events categories |
| [**v1EventsCategoriesPost()**](EventsApi.md#v1EventsCategoriesPost) | **POST** /v1/events/categories | Events category create |


## `v1EventsCalendarGet()`

```php
v1EventsCalendarGet($startDate, $endDate): \SKY\School\Model\CalendarItemCollection
```

Calendar for User (BETA)

Returns a list of events for the calling user.  Requires one of the following roles in the Education Management system:  <ul><li>Student</li><li>Parent</li><li>Teacher</li></ul>  ***This endpoint is in BETA. It may be removed or replaced with a 90 day deprecation period.***

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


$apiInstance = new SKY\School\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339).
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339).

try {
    $result = $apiInstance->v1EventsCalendarGet($startDate, $endDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->v1EventsCalendarGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startDate** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional] |
| **endDate** | **\DateTime**| Format - date-time (as date-time in RFC3339). | [optional] |

### Return type

[**\SKY\School\Model\CalendarItemCollection**](../Model/CalendarItemCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1EventsCategoriesGet()`

```php
v1EventsCategoriesGet($page): \SKY\School\Model\EventCategoryCollection
```

Events categories

Returns a collection of event categories.<br />  Requires one of the following roles in the Education Management system:  <ul><li>Content Manager</li><li>Platform Manager</li></ul>

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


$apiInstance = new SKY\School\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Format - int32. The page of results to start from.

try {
    $result = $apiInstance->v1EventsCategoriesGet($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->v1EventsCategoriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Format - int32. The page of results to start from. | [optional] |

### Return type

[**\SKY\School\Model\EventCategoryCollection**](../Model/EventCategoryCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1EventsCategoriesPost()`

```php
v1EventsCategoriesPost($eventCategory): \SKY\School\Model\EventCategoryCreateResponseExample
```

Events category create

Returns the Id of the created Events Category<br />  Requires one of the following roles in the Education Management system:  <ul><li>Content Manager</li><li>Platform Manager</li></ul><param name=\"eventCategory\"></param><param name=\"cancellationToken\"></param>

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


$apiInstance = new SKY\School\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$eventCategory = {"description":"Test Category","calendar_url":"http://www.example.com/calendar/test_calendar.ics","include_brief_description":true,"include_long_description":false,"public":true,"roles":[12345]}; // \SKY\School\Model\EventCategory

try {
    $result = $apiInstance->v1EventsCategoriesPost($eventCategory);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->v1EventsCategoriesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **eventCategory** | [**\SKY\School\Model\EventCategory**](../Model/EventCategory.md)|  | [optional] |

### Return type

[**\SKY\School\Model\EventCategoryCreateResponseExample**](../Model/EventCategoryCreateResponseExample.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
