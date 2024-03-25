# SKY\School\AthleticsApi

All URIs are relative to https://api.sky.blackbaud.com/school, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1AthleticsHighlightsByHighlightIdGet()**](AthleticsApi.md#v1AthleticsHighlightsByHighlightIdGet) | **GET** /v1/athletics/highlights/{highlight_id} | Athletics highlights by ID |
| [**v1AthleticsLocationsGet()**](AthleticsApi.md#v1AthleticsLocationsGet) | **GET** /v1/athletics/locations | Athletics locations |
| [**v1AthleticsLocationsPost()**](AthleticsApi.md#v1AthleticsLocationsPost) | **POST** /v1/athletics/locations | Athletics location create |
| [**v1AthleticsOpponentsGet()**](AthleticsApi.md#v1AthleticsOpponentsGet) | **GET** /v1/athletics/opponents | Athletics opponents |
| [**v1AthleticsOpponentsPost()**](AthleticsApi.md#v1AthleticsOpponentsPost) | **POST** /v1/athletics/opponents | Athletics opponent create |
| [**v1AthleticsResultPost()**](AthleticsApi.md#v1AthleticsResultPost) | **POST** /v1/athletics/result | Athletics game result |
| [**v1AthleticsSchedulesGet()**](AthleticsApi.md#v1AthleticsSchedulesGet) | **GET** /v1/athletics/schedules | Athletics schedules |
| [**v1AthleticsSportsGet()**](AthleticsApi.md#v1AthleticsSportsGet) | **GET** /v1/athletics/sports | Athletics sports |
| [**v1AthleticsSportslevelsGet()**](AthleticsApi.md#v1AthleticsSportslevelsGet) | **GET** /v1/athletics/sportslevels | Athletics sports levels |
| [**v1AthleticsTeamsByTeamIdRosterGet()**](AthleticsApi.md#v1AthleticsTeamsByTeamIdRosterGet) | **GET** /v1/athletics/teams/{team_id}/roster | Athletics team roster |
| [**v1AthleticsTeamsByTeamIdScheduleByGameIdDelete()**](AthleticsApi.md#v1AthleticsTeamsByTeamIdScheduleByGameIdDelete) | **DELETE** /v1/athletics/teams/{team_id}/schedule/{game_id} | Athletics game delete |
| [**v1AthleticsTeamsByTeamIdSchedulePatch()**](AthleticsApi.md#v1AthleticsTeamsByTeamIdSchedulePatch) | **PATCH** /v1/athletics/teams/{team_id}/schedule | Athletics game update |
| [**v1AthleticsTeamsByTeamIdSchedulePost()**](AthleticsApi.md#v1AthleticsTeamsByTeamIdSchedulePost) | **POST** /v1/athletics/teams/{team_id}/schedule | Athletics game create |
| [**v1AthleticsTeamsByTeamIdSchedulePracticeByPracticeIdDelete()**](AthleticsApi.md#v1AthleticsTeamsByTeamIdSchedulePracticeByPracticeIdDelete) | **DELETE** /v1/athletics/teams/{team_id}/schedule/practice/{practice_id} | Athletics practice delete |
| [**v1AthleticsTeamsByTeamIdSchedulePracticePatch()**](AthleticsApi.md#v1AthleticsTeamsByTeamIdSchedulePracticePatch) | **PATCH** /v1/athletics/teams/{team_id}/schedule/practice | Athletics practice update |
| [**v1AthleticsTeamsByTeamIdSchedulePracticePost()**](AthleticsApi.md#v1AthleticsTeamsByTeamIdSchedulePracticePost) | **POST** /v1/athletics/teams/{team_id}/schedule/practice | Athletics practice create |
| [**v1AthleticsTeamsGet()**](AthleticsApi.md#v1AthleticsTeamsGet) | **GET** /v1/athletics/teams | Athletics teams |
| [**v1AthleticsTransportationtypesGet()**](AthleticsApi.md#v1AthleticsTransportationtypesGet) | **GET** /v1/athletics/transportationtypes | Athletics transportation types |
| [**v1AthleticsVenuesGet()**](AthleticsApi.md#v1AthleticsVenuesGet) | **GET** /v1/athletics/venues | Athletics venues |


## `v1AthleticsHighlightsByHighlightIdGet()`

```php
v1AthleticsHighlightsByHighlightIdGet($highlightId): \SKY\School\Model\Highlight
```

Athletics highlights by ID

Returns an athletic game's highlights for the specified ```highlight_id```. <br />  This ID can be obtained via the GET athletics schedules endpoint for a game if highlights exist for that game. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Athletic Group Manager</li><li>Team Schedule Manager</li><li>Schedule Manager</li><li>Page Manager</li><li>Coach</li><li>Pending Coach</li></ul>

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


$apiInstance = new SKY\School\Api\AthleticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$highlightId = 56; // int | Format - int32. ID of the highlight to be returned.

try {
    $result = $apiInstance->v1AthleticsHighlightsByHighlightIdGet($highlightId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AthleticsApi->v1AthleticsHighlightsByHighlightIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **highlightId** | **int**| Format - int32. ID of the highlight to be returned. | |

### Return type

[**\SKY\School\Model\Highlight**](../Model/Highlight.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AthleticsLocationsGet()`

```php
v1AthleticsLocationsGet(): \SKY\School\Model\LocationCollection
```

Athletics locations

Returns a collection of athletic locations. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Athletic Group Manager</li><li>Team Schedule Manager</li><li>Schedule Manager</li><li>Coach</li><li>Pending Coach</li></ul>

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


$apiInstance = new SKY\School\Api\AthleticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1AthleticsLocationsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AthleticsApi->v1AthleticsLocationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SKY\School\Model\LocationCollection**](../Model/LocationCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AthleticsLocationsPost()`

```php
v1AthleticsLocationsPost($locationCreateModel): int
```

Athletics location create

Creates a new athletic location. <br />  The location can optionally be tied to an opponent using the ```opponent_id``` from the GET opponents endpoint. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Athletic Group Manager</li><li>Team Schedule Manager</li><li>Schedule Manager</li><li>Coach</li><li>Pending Coach</li></ul>

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


$apiInstance = new SKY\School\Api\AthleticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$locationCreateModel = {"opponent_id":864549,"name":"South City Main Field","directions":"Go straight, take left at light","travel_time":15,"address_line1":"123a Main Street","address_line2":"","address_line3":"","city":"Springfield","state":"Texas","state_short":"TX","country":"USA","zip":"12345-0954","province":"","map_url":"http://www.somemap.com/"}; // \SKY\School\Model\LocationCreateModel | The location to be created

try {
    $result = $apiInstance->v1AthleticsLocationsPost($locationCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AthleticsApi->v1AthleticsLocationsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **locationCreateModel** | [**\SKY\School\Model\LocationCreateModel**](../Model/LocationCreateModel.md)| The location to be created | [optional] |

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

## `v1AthleticsOpponentsGet()`

```php
v1AthleticsOpponentsGet(): \SKY\School\Model\OpponentFlyweightCollection
```

Athletics opponents

Returns a collection of athletic opponents. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Athletic Group Manager</li><li>Team Schedule Manager</li><li>Page Manager</li><li>Coach</li><li>Pending Coach</li></ul>

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


$apiInstance = new SKY\School\Api\AthleticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1AthleticsOpponentsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AthleticsApi->v1AthleticsOpponentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SKY\School\Model\OpponentFlyweightCollection**](../Model/OpponentFlyweightCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AthleticsOpponentsPost()`

```php
v1AthleticsOpponentsPost($opponentUpdateModel): int
```

Athletics opponent create

Creates a new athletic opponent. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Athletic Group Manager</li><li>Team Schedule Manager</li><li>Schedule Manager</li><li>Page Manager</li><li>Coach</li><li>Pending Coach</li></ul>

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


$apiInstance = new SKY\School\Api\AthleticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$opponentUpdateModel = {"name":"South City Jets","phone1":"(123) 456-9568","ad_first_name":"Pat","ad_last_name":"Malone","ad_email":"AthleticDirector@southcity.edu","fax":"(987) 654-4321","phone2":"","asst_ad_first_name":"Chris","asst_ad_last_name":"Humphrey","asst_ad_email":"AsstAthleticDirector@southcity.edu","address_id":195095,"address_line1":"123 Main Street","address_line2":"","address_line3":"","city":"Springfield","state_short":"","country":"Canada","province":"","zip":"12345-0954","conference_id":45958}; // \SKY\School\Model\OpponentUpdateModel | The opponent to be created

try {
    $result = $apiInstance->v1AthleticsOpponentsPost($opponentUpdateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AthleticsApi->v1AthleticsOpponentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **opponentUpdateModel** | [**\SKY\School\Model\OpponentUpdateModel**](../Model/OpponentUpdateModel.md)| The opponent to be created | [optional] |

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

## `v1AthleticsResultPost()`

```php
v1AthleticsResultPost($resultCreate)
```

Athletics game result

Creates a result/score for the specified athletic game ```schedule_id```. <br />  Existing IDs can be retrieved via the GET athletics schedules endpoint as well as after a POST athletics game. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Team Schedule Manager</li><li>Page Manager</li><li>Coach</li><li>Pending Coach</li></ul>

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


$apiInstance = new SKY\School\Api\AthleticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resultCreate = {"schedule_id":12345,"schedule_type":0,"send_notification":false,"opponents":[{"opponent_id":7654,"score":"5","win_loss":"Win","score_versus":"2"}]}; // \SKY\School\Model\ResultCreate | 

try {
    $apiInstance->v1AthleticsResultPost($resultCreate);
} catch (Exception $e) {
    echo 'Exception when calling AthleticsApi->v1AthleticsResultPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resultCreate** | [**\SKY\School\Model\ResultCreate**](../Model/ResultCreate.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AthleticsSchedulesGet()`

```php
v1AthleticsSchedulesGet($startDate, $endDate, $schoolYear, $includePractice, $teamId, $lastModified): \SKY\School\Model\ScheduleItemCollection
```

Athletics schedules

Returns a collection of athletic games for the current school year. <br />  Use the ```start_date``` and/or ```end_date``` to filter to a specific timeframe. <br />  Returns data for a specific team by setting the ```team_id``` using the GET teams endpoint. <br />  Returns both games and practices by setting ```include_practice``` to true. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Athletic Group Manager</li><li>Team Schedule Manager</li><li>Schedule Manager</li><li>Coach</li><li>Pending Coach</li></ul>

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


$apiInstance = new SKY\School\Api\AthleticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Filter games/practices after this date
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Filter games/practices before this date
$schoolYear = 'schoolYear_example'; // string | Filter on a specific school year. Defaults to current school year.
$includePractice = false; // bool | Set to ```true``` to include practices with games. Defaults to false.
$teamId = 0; // int | Format - int32. Filter games/practices for a specific team. Defaults to all teams.
$lastModified = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Set date to limit results to games with information changed on and after that date.

try {
    $result = $apiInstance->v1AthleticsSchedulesGet($startDate, $endDate, $schoolYear, $includePractice, $teamId, $lastModified);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AthleticsApi->v1AthleticsSchedulesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startDate** | **\DateTime**| Format - date-time (as date-time in RFC3339). Filter games/practices after this date | [optional] |
| **endDate** | **\DateTime**| Format - date-time (as date-time in RFC3339). Filter games/practices before this date | [optional] |
| **schoolYear** | **string**| Filter on a specific school year. Defaults to current school year. | [optional] |
| **includePractice** | **bool**| Set to &#x60;&#x60;&#x60;true&#x60;&#x60;&#x60; to include practices with games. Defaults to false. | [optional] [default to false] |
| **teamId** | **int**| Format - int32. Filter games/practices for a specific team. Defaults to all teams. | [optional] [default to 0] |
| **lastModified** | **\DateTime**| Format - date-time (as date-time in RFC3339). Set date to limit results to games with information changed on and after that date. | [optional] |

### Return type

[**\SKY\School\Model\ScheduleItemCollection**](../Model/ScheduleItemCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AthleticsSportsGet()`

```php
v1AthleticsSportsGet($seasonId): \SKY\School\Model\SportCollection
```

Athletics sports

Returns a collection of athletic sports.<br />  Use the optional ```season_id``` to filter the results by season.<br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Athletic Group Manager</li><li>Schedule Manager</li><li>Page Manager</li><li>Coach</li><li>Pending Coach</li></ul>

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


$apiInstance = new SKY\School\Api\AthleticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$seasonId = 56; // int | Format - int32. Season ID

try {
    $result = $apiInstance->v1AthleticsSportsGet($seasonId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AthleticsApi->v1AthleticsSportsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **seasonId** | **int**| Format - int32. Season ID | [optional] |

### Return type

[**\SKY\School\Model\SportCollection**](../Model/SportCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AthleticsSportslevelsGet()`

```php
v1AthleticsSportslevelsGet(): \SKY\School\Model\SportsLevelCollection
```

Athletics sports levels

Returns a collection of athletic sports levels.<br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Team Schedule Manager</li><li>Coach</li><li>Pending Coach</li><li>Any Manager Role</li></ul>

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


$apiInstance = new SKY\School\Api\AthleticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1AthleticsSportslevelsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AthleticsApi->v1AthleticsSportslevelsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SKY\School\Model\SportsLevelCollection**](../Model/SportsLevelCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AthleticsTeamsByTeamIdRosterGet()`

```php
v1AthleticsTeamsByTeamIdRosterGet($teamId): \SKY\School\Model\Roster
```

Athletics team roster

Returns a collection of players and coaches for the specified athletic team's ID. <br />  The ```team_id``` can be retrieved using the GET athletics teams endpoint. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Athletic Group Manager</li><li>Team Schedule Manager</li><li>Coach</li><li>Pending Coach</li></ul>

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


$apiInstance = new SKY\School\Api\AthleticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$teamId = 56; // int | Format - int32. The ID for the team to get the roster for.

try {
    $result = $apiInstance->v1AthleticsTeamsByTeamIdRosterGet($teamId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AthleticsApi->v1AthleticsTeamsByTeamIdRosterGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **teamId** | **int**| Format - int32. The ID for the team to get the roster for. | |

### Return type

[**\SKY\School\Model\Roster**](../Model/Roster.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AthleticsTeamsByTeamIdScheduleByGameIdDelete()`

```php
v1AthleticsTeamsByTeamIdScheduleByGameIdDelete($teamId, $gameId)
```

Athletics game delete

Removes an athletic ```game_id``` for the specified ```team_id```. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Team Schedule Manager</li><li>Page Manager</li></ul>

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


$apiInstance = new SKY\School\Api\AthleticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$teamId = 56; // int | Format - int32. ID of the team for the game to be deleted
$gameId = 56; // int | Format - int32. ID of the game to be deleted

try {
    $apiInstance->v1AthleticsTeamsByTeamIdScheduleByGameIdDelete($teamId, $gameId);
} catch (Exception $e) {
    echo 'Exception when calling AthleticsApi->v1AthleticsTeamsByTeamIdScheduleByGameIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **teamId** | **int**| Format - int32. ID of the team for the game to be deleted | |
| **gameId** | **int**| Format - int32. ID of the game to be deleted | |

### Return type

void (empty response body)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AthleticsTeamsByTeamIdSchedulePatch()`

```php
v1AthleticsTeamsByTeamIdSchedulePatch($teamId, $gameUpdate)
```

Athletics game update

Updates the game data for the specified ```team_id``` and athletic ```game_id```. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Athletic Group Manager</li><li>Team Schedule Manager</li><li>Schedule Manager</li><li>Coach</li><li>Pending Coach</li></ul>

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


$apiInstance = new SKY\School\Api\AthleticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$teamId = 56; // int | Format - int32. ID of the team for the game to be updated
$gameUpdate = {"game_id":84509,"schedule_type":0,"title":"Game Title","game_date":"2021-10-05T01:30:00.0000000+00:00","game_date_end":"2021-10-05T03:30:00.0000000+00:00","home_away_type":1,"location_id":5489,"dismissal_time":"2024-02-13","departure_time":"2024-02-13","departure_note":"We are departing at lunch","pickup_time":"2024-02-13","pickup_note":"We will return at end of school","league_ind":true,"scrimmage_ind":false,"tournament_ind":false,"invitational_ind":true,"playoff_ind":false,"additional_notes":"Please read this.","send_notifications":true,"skip_validation":false,"transportation":[{"transportation_id":54095,"full_day":false,"begin_use":"2021-10-05T12:00:00.0000000+00:00","end_use":"2021-10-05T04:15:00.0000000+00:00"}],"opponents":[{"opponent_id":94508}]}; // \SKY\School\Model\GameUpdate | Information for the game to be updated

try {
    $apiInstance->v1AthleticsTeamsByTeamIdSchedulePatch($teamId, $gameUpdate);
} catch (Exception $e) {
    echo 'Exception when calling AthleticsApi->v1AthleticsTeamsByTeamIdSchedulePatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **teamId** | **int**| Format - int32. ID of the team for the game to be updated | |
| **gameUpdate** | [**\SKY\School\Model\GameUpdate**](../Model/GameUpdate.md)| Information for the game to be updated | [optional] |

### Return type

void (empty response body)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AthleticsTeamsByTeamIdSchedulePost()`

```php
v1AthleticsTeamsByTeamIdSchedulePost($teamId, $gameCreate): int
```

Athletics game create

Creates a new athletic game for the specified ```team_id```. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Athletic Group Manager</li><li>Team Schedule Manager</li><li>Schedule Manager</li><li>Coach</li><li>Pending Coach</li></ul>

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


$apiInstance = new SKY\School\Api\AthleticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$teamId = 56; // int | Format - int32. ID of the team for the game to be created
$gameCreate = {"schedule_type":0,"title":"Game Title","game_date":"2021-10-05T01:30:00.0000000+00:00","game_date_end":"2021-10-05T03:30:00.0000000+00:00","home_away_type":1,"location_id":5489,"dismissal_time":"2024-02-13","departure_time":"2024-02-13","departure_note":"We are departing at lunch","pickup_time":"2024-02-13","pickup_note":"We will return at end of school","league_ind":true,"scrimmage_ind":false,"tournament_ind":false,"invitational_ind":true,"playoff_ind":false,"additional_notes":"Please read this.","send_notifications":true,"skip_validation":false,"transportation":[{"transportation_id":54095,"full_day":false,"begin_use":"2021-10-05T12:00:00.0000000+00:00","end_use":"2021-10-05T04:15:00.0000000+00:00"}],"opponents":[{"opponent_id":94508}]}; // \SKY\School\Model\GameCreate | Information about the game to be created

try {
    $result = $apiInstance->v1AthleticsTeamsByTeamIdSchedulePost($teamId, $gameCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AthleticsApi->v1AthleticsTeamsByTeamIdSchedulePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **teamId** | **int**| Format - int32. ID of the team for the game to be created | |
| **gameCreate** | [**\SKY\School\Model\GameCreate**](../Model/GameCreate.md)| Information about the game to be created | [optional] |

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

## `v1AthleticsTeamsByTeamIdSchedulePracticeByPracticeIdDelete()`

```php
v1AthleticsTeamsByTeamIdSchedulePracticeByPracticeIdDelete($teamId, $practiceId)
```

Athletics practice delete

Removes the athletic ```practice_id``` for the specified ```team_id```. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Team Schedule Manager</li><li>Page Manager</li></ul>

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


$apiInstance = new SKY\School\Api\AthleticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$teamId = 56; // int | Format - int32. ID of the team for the practice to be deleted
$practiceId = 56; // int | Format - int32. ID of the practice to be deleted

try {
    $apiInstance->v1AthleticsTeamsByTeamIdSchedulePracticeByPracticeIdDelete($teamId, $practiceId);
} catch (Exception $e) {
    echo 'Exception when calling AthleticsApi->v1AthleticsTeamsByTeamIdSchedulePracticeByPracticeIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **teamId** | **int**| Format - int32. ID of the team for the practice to be deleted | |
| **practiceId** | **int**| Format - int32. ID of the practice to be deleted | |

### Return type

void (empty response body)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AthleticsTeamsByTeamIdSchedulePracticePatch()`

```php
v1AthleticsTeamsByTeamIdSchedulePracticePatch($teamId, $practiceUpdate)
```

Athletics practice update

Updates the practice data for the specified athletic practice ```id```. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Athletic Group Manager</li></ul>

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


$apiInstance = new SKY\School\Api\AthleticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$teamId = 56; // int | Format - int32. The ID of the team for the practice to be updated
$practiceUpdate = {"id":45623,"send_notification":true,"title":"JV Softball extra practice","practice_start_date":"2021-10-04T04:30:00.0000000+00:00","practice_end_date":"2021-10-04T06:00:00.0000000+00:00","location_id":2454,"transportation_id":5689,"dismissal_time":"2021-10-04T04:00:00.0000000+00:00","departure_time":"2021-10-04T04:20:00.0000000+00:00","pickup_time":"2021-10-04T06:10:00.0000000+00:00","practice_note":"some note about this practice","skip_validation":false}; // \SKY\School\Model\PracticeUpdate | Information about the practice to be updated

try {
    $apiInstance->v1AthleticsTeamsByTeamIdSchedulePracticePatch($teamId, $practiceUpdate);
} catch (Exception $e) {
    echo 'Exception when calling AthleticsApi->v1AthleticsTeamsByTeamIdSchedulePracticePatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **teamId** | **int**| Format - int32. The ID of the team for the practice to be updated | |
| **practiceUpdate** | [**\SKY\School\Model\PracticeUpdate**](../Model/PracticeUpdate.md)| Information about the practice to be updated | [optional] |

### Return type

void (empty response body)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AthleticsTeamsByTeamIdSchedulePracticePost()`

```php
v1AthleticsTeamsByTeamIdSchedulePracticePost($teamId, $practiceCreate): int
```

Athletics practice create

Creates a new athletic practice for the specified ```team_id```. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Team Schedule Manager</li><li>Page Manager</li></ul>

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


$apiInstance = new SKY\School\Api\AthleticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$teamId = 56; // int | Format - int32. ID of the team for the practice to be created
$practiceCreate = {"send_notification":true,"title":"JV Softball extra practice","practice_start_date":"2021-10-04T04:30:00.0000000+00:00","practice_end_date":"2021-10-04T06:00:00.0000000+00:00","location_id":2454,"transportation_id":5689,"dismissal_time":"2021-10-04T04:00:00.0000000+00:00","departure_time":"2021-10-04T04:20:00.0000000+00:00","pickup_time":"2021-10-04T06:10:00.0000000+00:00","practice_note":"some note about this practice","skip_validation":false}; // \SKY\School\Model\PracticeCreate | Information about the practice to be created

try {
    $result = $apiInstance->v1AthleticsTeamsByTeamIdSchedulePracticePost($teamId, $practiceCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AthleticsApi->v1AthleticsTeamsByTeamIdSchedulePracticePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **teamId** | **int**| Format - int32. ID of the team for the practice to be created | |
| **practiceCreate** | [**\SKY\School\Model\PracticeCreate**](../Model/PracticeCreate.md)| Information about the practice to be created | [optional] |

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

## `v1AthleticsTeamsGet()`

```php
v1AthleticsTeamsGet($schoolYear): \SKY\School\Model\TeamCollection
```

Athletics teams

Returns a collection of athletic teams for the current school year. <br />  Use the optional ```school_year``` parameter to specify a different year. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Athletic Group Manager</li><li>Team Schedule Manager</li><li>Coach</li><li>Pending Coach</li></ul>

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


$apiInstance = new SKY\School\Api\AthleticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$schoolYear = 'schoolYear_example'; // string | School year

try {
    $result = $apiInstance->v1AthleticsTeamsGet($schoolYear);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AthleticsApi->v1AthleticsTeamsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **schoolYear** | **string**| School year | [optional] |

### Return type

[**\SKY\School\Model\TeamCollection**](../Model/TeamCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AthleticsTransportationtypesGet()`

```php
v1AthleticsTransportationtypesGet(): \SKY\School\Model\TransportationCollection
```

Athletics transportation types

Returns a collection of athletic transportation types. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Athletic Group Manager</li><li>Team Schedule Manager</li><li>Schedule Manager</li><li>Coach</li><li>Pending Coach</li><li>Any Manager Role</li></ul>

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


$apiInstance = new SKY\School\Api\AthleticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1AthleticsTransportationtypesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AthleticsApi->v1AthleticsTransportationtypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SKY\School\Model\TransportationCollection**](../Model/TransportationCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AthleticsVenuesGet()`

```php
v1AthleticsVenuesGet(): \SKY\School\Model\AthleticVenueCollection
```

Athletics venues

Returns a collection of athletic venues. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Athletic Group Manager</li><li>Team Schedule Manager</li><li>Coach</li><li>Pending Coach</li></ul>

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


$apiInstance = new SKY\School\Api\AthleticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1AthleticsVenuesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AthleticsApi->v1AthleticsVenuesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SKY\School\Model\AthleticVenueCollection**](../Model/AthleticVenueCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
