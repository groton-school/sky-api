# SKY\School\TestScoresApi

All URIs are relative to https://api.sky.blackbaud.com/school, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1TestscoresByUserIdPost()**](TestScoresApi.md#v1TestscoresByUserIdPost) | **POST** /v1/testscores/{user_id} | Test Score create |
| [**v1TestscoresGet()**](TestScoresApi.md#v1TestscoresGet) | **GET** /v1/testscores | Test scores by user ID |
| [**v1TestscoresTesttypesGet()**](TestScoresApi.md#v1TestscoresTesttypesGet) | **GET** /v1/testscores/testtypes | Test and Subtest types |


## `v1TestscoresByUserIdPost()`

```php
v1TestscoresByUserIdPost($user_id, $test_score_add): int
```

Test Score create

Creates a test score for a student ```user_id```<br />  Requires the following role in the Education Management system:  <ul><li>Grading Manager</li></ul>

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


$apiInstance = new SKY\School\Api\TestScoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Format - int32. The ID of the user.
$test_score_add = {"id":0,"comment":"string","overall_score":0,"printon_report_card":true,"printon_transcript":true,"sub_tests":[{"test_type_id":0,"sub_test_type":"string","score":0,"test_subtype_id":0,"percentile":0,"scale":0,"stanie":0}],"test_date":"string"}; // \SKY\School\Model\TestScoreAdd | 

try {
    $result = $apiInstance->v1TestscoresByUserIdPost($user_id, $test_score_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestScoresApi->v1TestscoresByUserIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| Format - int32. The ID of the user. | |
| **test_score_add** | [**\SKY\School\Model\TestScoreAdd**](../Model/TestScoreAdd.md)|  | [optional] |

### Return type

**int**

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1TestscoresGet()`

```php
v1TestscoresGet($user_id): \SKY\School\Model\TestScoreCollection
```

Test scores by user ID

Returns a collection of test scores.<br></br>  Requires the following role in the Education Management system:  <ul><li>Grading Manager</li></ul>

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


$apiInstance = new SKY\School\Api\TestScoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Format - int32. The ID of the user.

try {
    $result = $apiInstance->v1TestscoresGet($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestScoresApi->v1TestscoresGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| Format - int32. The ID of the user. | [optional] |

### Return type

[**\SKY\School\Model\TestScoreCollection**](../Model/TestScoreCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1TestscoresTesttypesGet()`

```php
v1TestscoresTesttypesGet(): \SKY\School\Model\TestTypeCollection
```

Test and Subtest types

Returns a collection of test and subtest types for a school.<br />  Requires the following role in the Education Management system:  <ul><li>Grading Manager</li><li>Any Manager Role</li></ul>

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


$apiInstance = new SKY\School\Api\TestScoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1TestscoresTesttypesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestScoresApi->v1TestscoresTesttypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SKY\School\Model\TestTypeCollection**](../Model/TestTypeCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
