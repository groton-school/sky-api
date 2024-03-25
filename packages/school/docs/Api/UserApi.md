# SKY\School\UserApi

All URIs are relative to https://api.sky.blackbaud.com/school, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1UsersAddresstypesGet()**](UserApi.md#v1UsersAddresstypesGet) | **GET** /v1/users/addresstypes | Users address types |
| [**v1UsersAuditGet()**](UserApi.md#v1UsersAuditGet) | **GET** /v1/users/audit | Users audit by role ID |
| [**v1UsersBbidstatusGet()**](UserApi.md#v1UsersBbidstatusGet) | **GET** /v1/users/bbidstatus | Users BBID status by role(s). |
| [**v1UsersByParentIdStudentsGet()**](UserApi.md#v1UsersByParentIdStudentsGet) | **GET** /v1/users/{parent_id}/students | Users Children of Parent |
| [**v1UsersByUserIdAddressesByAddressIdByAddressTypeIdDelete()**](UserApi.md#v1UsersByUserIdAddressesByAddressIdByAddressTypeIdDelete) | **DELETE** /v1/users/{user_id}/addresses/{address_id}/{address_type_id} | Users address delete (BETA) |
| [**v1UsersByUserIdAddressesByAddressIdPatch()**](UserApi.md#v1UsersByUserIdAddressesByAddressIdPatch) | **PATCH** /v1/users/{user_id}/addresses/{address_id} | Users address update |
| [**v1UsersByUserIdAddressesGet()**](UserApi.md#v1UsersByUserIdAddressesGet) | **GET** /v1/users/{user_id}/addresses | Users addresses by user ID |
| [**v1UsersByUserIdAddressesPost()**](UserApi.md#v1UsersByUserIdAddressesPost) | **POST** /v1/users/{user_id}/addresses | Users address create |
| [**v1UsersByUserIdAddressesSharePost()**](UserApi.md#v1UsersByUserIdAddressesSharePost) | **POST** /v1/users/{user_id}/addresses/share | Users address create - shared (BETA) |
| [**v1UsersByUserIdCustomfieldsGet()**](UserApi.md#v1UsersByUserIdCustomfieldsGet) | **GET** /v1/users/{user_id}/customfields | Users custom fields single |
| [**v1UsersByUserIdCustomfieldsListPatch()**](UserApi.md#v1UsersByUserIdCustomfieldsListPatch) | **PATCH** /v1/users/{user_id}/customfields/list | Users custom fields list update |
| [**v1UsersByUserIdCustomfieldsListPost()**](UserApi.md#v1UsersByUserIdCustomfieldsListPost) | **POST** /v1/users/{user_id}/customfields/list | Users custom fields list create (BETA) |
| [**v1UsersByUserIdCustomfieldsPatch()**](UserApi.md#v1UsersByUserIdCustomfieldsPatch) | **PATCH** /v1/users/{user_id}/customfields | Users custom fields update |
| [**v1UsersByUserIdCustomfieldsPost()**](UserApi.md#v1UsersByUserIdCustomfieldsPost) | **POST** /v1/users/{user_id}/customfields | Users custom fields create |
| [**v1UsersByUserIdEducationByEducationIdDelete()**](UserApi.md#v1UsersByUserIdEducationByEducationIdDelete) | **DELETE** /v1/users/{user_id}/education/{education_id} | User education delete (BETA) |
| [**v1UsersByUserIdEducationByEducationIdPatch()**](UserApi.md#v1UsersByUserIdEducationByEducationIdPatch) | **PATCH** /v1/users/{user_id}/education/{education_id} | Users education update (BETA) |
| [**v1UsersByUserIdEducationGet()**](UserApi.md#v1UsersByUserIdEducationGet) | **GET** /v1/users/{user_id}/education | Users education by user |
| [**v1UsersByUserIdEducationPost()**](UserApi.md#v1UsersByUserIdEducationPost) | **POST** /v1/users/{user_id}/education | Users education create (BETA) |
| [**v1UsersByUserIdEmergencycontactsGet()**](UserApi.md#v1UsersByUserIdEmergencycontactsGet) | **GET** /v1/users/{user_id}/emergencycontacts | Users emergency contacts by user ID |
| [**v1UsersByUserIdEmergencycontactsNonuserPost()**](UserApi.md#v1UsersByUserIdEmergencycontactsNonuserPost) | **POST** /v1/users/{user_id}/emergencycontacts/nonuser | Users emergency contact non-user create |
| [**v1UsersByUserIdEmergencycontactsUserPost()**](UserApi.md#v1UsersByUserIdEmergencycontactsUserPost) | **POST** /v1/users/{user_id}/emergencycontacts/user | Users emergency contact user create |
| [**v1UsersByUserIdEmploymentGet()**](UserApi.md#v1UsersByUserIdEmploymentGet) | **GET** /v1/users/{user_id}/employment | Users employment by user ID |
| [**v1UsersByUserIdGet()**](UserApi.md#v1UsersByUserIdGet) | **GET** /v1/users/{user_id} | User by ID |
| [**v1UsersByUserIdOccupationsByOccupationIdDelete()**](UserApi.md#v1UsersByUserIdOccupationsByOccupationIdDelete) | **DELETE** /v1/users/{user_id}/occupations/{occupation_id} | Users occupation delete (BETA) |
| [**v1UsersByUserIdOccupationsByOccupationIdPatch()**](UserApi.md#v1UsersByUserIdOccupationsByOccupationIdPatch) | **PATCH** /v1/users/{user_id}/occupations/{occupation_id} | Users occupation update |
| [**v1UsersByUserIdOccupationsGet()**](UserApi.md#v1UsersByUserIdOccupationsGet) | **GET** /v1/users/{user_id}/occupations | Users occupations by user ID |
| [**v1UsersByUserIdOccupationsPost()**](UserApi.md#v1UsersByUserIdOccupationsPost) | **POST** /v1/users/{user_id}/occupations | Users occupation create |
| [**v1UsersByUserIdPhonesByPhoneIdByPhoneTypeIdDelete()**](UserApi.md#v1UsersByUserIdPhonesByPhoneIdByPhoneTypeIdDelete) | **DELETE** /v1/users/{user_id}/phones/{phone_id}/{phone_type_id} | Users phone delete (BETA) |
| [**v1UsersByUserIdPhonesByPhoneIdPatch()**](UserApi.md#v1UsersByUserIdPhonesByPhoneIdPatch) | **PATCH** /v1/users/{user_id}/phones/{phone_id} | Users phone update |
| [**v1UsersByUserIdPhonesGet()**](UserApi.md#v1UsersByUserIdPhonesGet) | **GET** /v1/users/{user_id}/phones | Users phones by user |
| [**v1UsersByUserIdPhonesPost()**](UserApi.md#v1UsersByUserIdPhonesPost) | **POST** /v1/users/{user_id}/phones | Users phone create |
| [**v1UsersByUserIdPhonesSharePost()**](UserApi.md#v1UsersByUserIdPhonesSharePost) | **POST** /v1/users/{user_id}/phones/share | Users phone create - shared (BETA) |
| [**v1UsersByUserIdRelationshipsDelete()**](UserApi.md#v1UsersByUserIdRelationshipsDelete) | **DELETE** /v1/users/{user_id}/relationships | Users relationship delete |
| [**v1UsersByUserIdRelationshipsGet()**](UserApi.md#v1UsersByUserIdRelationshipsGet) | **GET** /v1/users/{user_id}/relationships | Users relationships by user |
| [**v1UsersByUserIdRelationshipsPost()**](UserApi.md#v1UsersByUserIdRelationshipsPost) | **POST** /v1/users/{user_id}/relationships | Users relationship create |
| [**v1UsersChangedGet()**](UserApi.md#v1UsersChangedGet) | **GET** /v1/users/changed | Users changed by base role(s) |
| [**v1UsersCustomfieldsGet()**](UserApi.md#v1UsersCustomfieldsGet) | **GET** /v1/users/customfields | Users custom fields list by base role(s) |
| [**v1UsersEmergencycontactsChangedGet()**](UserApi.md#v1UsersEmergencycontactsChangedGet) | **GET** /v1/users/emergencycontacts/changed | Users emergency contact changes |
| [**v1UsersEnrollPost()**](UserApi.md#v1UsersEnrollPost) | **POST** /v1/users/enroll | Users enrollment create |
| [**v1UsersEnrollmentsGet()**](UserApi.md#v1UsersEnrollmentsGet) | **GET** /v1/users/enrollments | Users enrollments by year |
| [**v1UsersExtendedByUserIdGet()**](UserApi.md#v1UsersExtendedByUserIdGet) | **GET** /v1/users/extended/{user_id} | Users extended by user |
| [**v1UsersExtendedGet()**](UserApi.md#v1UsersExtendedGet) | **GET** /v1/users/extended | Users extended by role(s) |
| [**v1UsersGendertypesGet()**](UserApi.md#v1UsersGendertypesGet) | **GET** /v1/users/gendertypes | Users gender types |
| [**v1UsersMeGet()**](UserApi.md#v1UsersMeGet) | **GET** /v1/users/me | Users Get Me |
| [**v1UsersPatch()**](UserApi.md#v1UsersPatch) | **PATCH** /v1/users | User update |
| [**v1UsersPhonetypesGet()**](UserApi.md#v1UsersPhonetypesGet) | **GET** /v1/users/phonetypes | Users phone types |
| [**v1UsersPost()**](UserApi.md#v1UsersPost) | **POST** /v1/users | User create |
| [**v1usersget()**](UserApi.md#v1usersget) | **GET** /v1/users | Users by role(s) |


## `v1UsersAddresstypesGet()`

```php
v1UsersAddresstypesGet(): \SKY\School\Model\AddressTypeCollection
```

Users address types

Returns a collection of address types. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>SKY API Data Sync</li><li>Any Manager Role</li></ul>

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1UsersAddresstypesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersAddresstypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SKY\School\Model\AddressTypeCollection**](../Model/AddressTypeCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1UsersAuditGet()`

```php
v1UsersAuditGet($role_id, $start_date, $end_date): \SKY\School\Model\UserAuditReadCollection
```

Users audit by role ID

Returns a collection of audit information based on the specified ```role_id``` within the dates provided.<br />  Requires at least one of the following roles in the Education Management system:  <ul><li>SKY API Data Sync</li></ul>

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_id = 'role_id_example'; // string | Role to return audit information for.
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). The date to begin looking for changes. Must be greater than 01/01/1990.
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). The date to end looking for changes.  Must be within 1 year of start_date. Null returns start_date + 7 days.

try {
    $result = $apiInstance->v1UsersAuditGet($role_id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersAuditGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **role_id** | **string**| Role to return audit information for. | |
| **start_date** | **\DateTime**| Format - date-time (as date-time in RFC3339). The date to begin looking for changes. Must be greater than 01/01/1990. | [optional] |
| **end_date** | **\DateTime**| Format - date-time (as date-time in RFC3339). The date to end looking for changes.  Must be within 1 year of start_date. Null returns start_date + 7 days. | [optional] |

### Return type

[**\SKY\School\Model\UserAuditReadCollection**](../Model/UserAuditReadCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1UsersBbidstatusGet()`

```php
v1UsersBbidstatusGet($base_role_ids, $marker): \SKY\School\Model\SchoolBbidStatusCollection
```

Users BBID status by role(s).

Returns a paginated collection of users education management BBID status, limited to 1000 users per page.<br />  Use the last user's ID as the ```marker``` value to return the next set of results.<br />  Requires one of the following roles in the Education Management system:  <ul><li>SKY API Data Sync</li><li>Platform Manager</li></ul>

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_role_ids = 'base_role_ids_example'; // string | Comma delimited list of base role IDs to get users for.
$marker = 56; // int | Format - int32. The user's ID to start at to return the next batch of data. Results will start with the next user in the result set.

try {
    $result = $apiInstance->v1UsersBbidstatusGet($base_role_ids, $marker);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersBbidstatusGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_role_ids** | **string**| Comma delimited list of base role IDs to get users for. | |
| **marker** | **int**| Format - int32. The user&#39;s ID to start at to return the next batch of data. Results will start with the next user in the result set. | [optional] |

### Return type

[**\SKY\School\Model\SchoolBbidStatusCollection**](../Model/SchoolBbidStatusCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1UsersByParentIdStudentsGet()`

```php
v1UsersByParentIdStudentsGet($parent_id): \SKY\School\Model\ChildOfParentCollection
```

Users Children of Parent

Returns a collection of children of the specified ```parent_id```.<br />  Requires the logged in ```user_id``` matches the specified ```parent_id```.  Requires the following role in the Education Management system:  <ul><li>Parent</li></ul>

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parent_id = 56; // int | Format - int32.

try {
    $result = $apiInstance->v1UsersByParentIdStudentsGet($parent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersByParentIdStudentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **parent_id** | **int**| Format - int32. | |

### Return type

[**\SKY\School\Model\ChildOfParentCollection**](../Model/ChildOfParentCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1UsersByUserIdAddressesByAddressIdByAddressTypeIdDelete()`

```php
v1UsersByUserIdAddressesByAddressIdByAddressTypeIdDelete($user_id, $address_id, $address_type_id)
```

Users address delete (BETA)

Removes the specified address from the user. <br />  If the address is shared, other users linked to the address will not be affected. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>SKY API Data Sync</li><li>Platform Manager</li><li>Contact Card Manager</li></ul>  ***This endpoint is in BETA. It may be removed or replaced with a 90 day deprecation period.***

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Format - int32. The ID of the user
$address_id = 56; // int | Format - int32. The ID of the user's address to delete.
$address_type_id = 56; // int | Format - int32. The ID of the user's address type to delete.

try {
    $apiInstance->v1UsersByUserIdAddressesByAddressIdByAddressTypeIdDelete($user_id, $address_id, $address_type_id);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersByUserIdAddressesByAddressIdByAddressTypeIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| Format - int32. The ID of the user | |
| **address_id** | **int**| Format - int32. The ID of the user&#39;s address to delete. | |
| **address_type_id** | **int**| Format - int32. The ID of the user&#39;s address type to delete. | |

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

## `v1UsersByUserIdAddressesByAddressIdPatch()`

```php
v1UsersByUserIdAddressesByAddressIdPatch($user_id, $address_id, $address_edit): int
```

Users address update

Returns ID of the address just updated. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>SKY API Data Sync</li><li>Platform Manager</li><li>Contact Card Manager</li></ul>

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Format - int32. The ID of the user.
$address_id = 56; // int | Format - int32. The ID of the address to be updated.
$address_edit = {"id":0,"city":"string","country":"string","line_one":"string","line_two":"string","line_three":"string","mailing_address":true,"postal_code":"string","primary":true,"province":"string","region":"string","state":"string","type_id":0,"user_id":0,"links":[{"type_id":0,"primary":true,"shared":true,"shared_relationship":"string","shared_user":"string","type":"string","user_id":0}]}; // \SKY\School\Model\AddressEdit | Address information to be updated.

try {
    $result = $apiInstance->v1UsersByUserIdAddressesByAddressIdPatch($user_id, $address_id, $address_edit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersByUserIdAddressesByAddressIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| Format - int32. The ID of the user. | |
| **address_id** | **int**| Format - int32. The ID of the address to be updated. | |
| **address_edit** | [**\SKY\School\Model\AddressEdit**](../Model/AddressEdit.md)| Address information to be updated. | [optional] |

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

## `v1UsersByUserIdAddressesGet()`

```php
v1UsersByUserIdAddressesGet($user_id): \SKY\School\Model\AddressReadCollection
```

Users addresses by user ID

Returns a collection of addresses. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>SKY API Data Sync</li></ul>

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Format - int32. The ID of the user.

try {
    $result = $apiInstance->v1UsersByUserIdAddressesGet($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersByUserIdAddressesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| Format - int32. The ID of the user. | |

### Return type

[**\SKY\School\Model\AddressReadCollection**](../Model/AddressReadCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1UsersByUserIdAddressesPost()`

```php
v1UsersByUserIdAddressesPost($user_id, $address_add): int
```

Users address create

Returns the ID of the address just created. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>SKY API Data Sync</li><li>Platform Manager</li><li>Contact Card Manager</li></ul>

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Format - int32. The ID of the user.
$address_add = {"user_id":0,"type_id":0,"country":"string","line_one":"string","line_two":"string","line_three":"string","city":"string","state":"string","postal_code":"string","province":"string","region":"string","mailing_address":true,"primary":true}; // \SKY\School\Model\AddressAdd | Address information to be updated.

try {
    $result = $apiInstance->v1UsersByUserIdAddressesPost($user_id, $address_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersByUserIdAddressesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| Format - int32. The ID of the user. | |
| **address_add** | [**\SKY\School\Model\AddressAdd**](../Model/AddressAdd.md)| Address information to be updated. | [optional] |

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

## `v1UsersByUserIdAddressesSharePost()`

```php
v1UsersByUserIdAddressesSharePost($user_id, $address_share): int
```

Users address create - shared (BETA)

For an existing user, create a link to an existing address.<br />  Returns the ID of the address just shared. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Contact Card Manager</li><li>Platform Manager</li><li>SKY API Data Sync</li></ul>  ***This endpoint is in BETA. It may be removed or replaced with a 90 day deprecation period.***

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Format - int32. The Id of the user the existing address should be shared.
$address_share = {"id":0,"address_type_id":0}; // \SKY\School\Model\AddressShare | The details about the address that should be shared with the user.

try {
    $result = $apiInstance->v1UsersByUserIdAddressesSharePost($user_id, $address_share);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersByUserIdAddressesSharePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| Format - int32. The Id of the user the existing address should be shared. | |
| **address_share** | [**\SKY\School\Model\AddressShare**](../Model/AddressShare.md)| The details about the address that should be shared with the user. | [optional] |

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

## `v1UsersByUserIdCustomfieldsGet()`

```php
v1UsersByUserIdCustomfieldsGet($user_id): \SKY\School\Model\UserAdminCustomField
```

Users custom fields single

Returns a collection of custom fields for a single ```user_id```.  This includes both user custom fields and administration view only custom fields.<br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Platform Manager</li></ul>

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Format - int32. The id of the user to get custom fields for.

try {
    $result = $apiInstance->v1UsersByUserIdCustomfieldsGet($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersByUserIdCustomfieldsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| Format - int32. The id of the user to get custom fields for. | |

### Return type

[**\SKY\School\Model\UserAdminCustomField**](../Model/UserAdminCustomField.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1UsersByUserIdCustomfieldsListPatch()`

```php
v1UsersByUserIdCustomfieldsListPatch($user_id, $user_admin_custom_field_update): bool
```

Users custom fields list update

Updates a list of admin custom field for a user. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Platform Manager</li></ul>

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Format - int32. The Id of the user to update an existing custom field for.
$user_admin_custom_field_update = [{"id":"string","field_id":0,"data_type_id":0,"int_value":0,"text_value":"string","decimal_value":0,"date_value":"string","bit_value":true}]; // \SKY\School\Model\UserAdminCustomFieldUpdate[] | Object that describes the custom field that should be updated.

try {
    $result = $apiInstance->v1UsersByUserIdCustomfieldsListPatch($user_id, $user_admin_custom_field_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersByUserIdCustomfieldsListPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| Format - int32. The Id of the user to update an existing custom field for. | |
| **user_admin_custom_field_update** | [**\SKY\School\Model\UserAdminCustomFieldUpdate[]**](../Model/UserAdminCustomFieldUpdate.md)| Object that describes the custom field that should be updated. | [optional] |

### Return type

**bool**

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1UsersByUserIdCustomfieldsListPost()`

```php
v1UsersByUserIdCustomfieldsListPost($user_id, $user_admin_custom_field_create): bool
```

Users custom fields list create (BETA)

Creates a list of admin custom field for a user. <br />  Does not create any of the ten default custom fields, every user has those fields created for them by default.  To update those fields see User Custom Field Values Update. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Platform Manager</li></ul>  ***This endpoint is in BETA. It may be removed or replaced with a 90 day deprecation period.***

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Format - int32. The Id of the user to create a custom field for
$user_admin_custom_field_create = [{"field_id":393,"data_type_id":7,"text_value":"Text value 1"},{"field_id":394,"data_type_id":7,"text_value":"Text value 2"}]; // \SKY\School\Model\UserAdminCustomFieldCreate[] | Object that describes the list of custom fields that will be created for the user.

try {
    $result = $apiInstance->v1UsersByUserIdCustomfieldsListPost($user_id, $user_admin_custom_field_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersByUserIdCustomfieldsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| Format - int32. The Id of the user to create a custom field for | |
| **user_admin_custom_field_create** | [**\SKY\School\Model\UserAdminCustomFieldCreate[]**](../Model/UserAdminCustomFieldCreate.md)| Object that describes the list of custom fields that will be created for the user. | [optional] |

### Return type

**bool**

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1UsersByUserIdCustomfieldsPatch()`

```php
v1UsersByUserIdCustomfieldsPatch($user_id, $user_admin_custom_field_update): bool
```

Users custom fields update

Updates an admin custom field for a user. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Platform Manager</li></ul>

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Format - int32. The Id of the user to update an existing custom field for.
$user_admin_custom_field_update = {"id":"string","field_id":0,"data_type_id":0,"int_value":0,"text_value":"string","decimal_value":0,"date_value":"string","bit_value":true}; // \SKY\School\Model\UserAdminCustomFieldUpdate | Object that describes the custom field that should be updated.

try {
    $result = $apiInstance->v1UsersByUserIdCustomfieldsPatch($user_id, $user_admin_custom_field_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersByUserIdCustomfieldsPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| Format - int32. The Id of the user to update an existing custom field for. | |
| **user_admin_custom_field_update** | [**\SKY\School\Model\UserAdminCustomFieldUpdate**](../Model/UserAdminCustomFieldUpdate.md)| Object that describes the custom field that should be updated. | [optional] |

### Return type

**bool**

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1UsersByUserIdCustomfieldsPost()`

```php
v1UsersByUserIdCustomfieldsPost($user_id, $user_admin_custom_field_create): bool
```

Users custom fields create

Creates an admin custom field for a user. <br />  Does not create any of the ten default custom fields, every user has those fields created for them by default.  To update those fields see User Custom Field Values Update. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Platform Manager</li></ul>

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Format - int32. The Id of the user to create a custom field for
$user_admin_custom_field_create = {"field_id":393,"data_type_id":7,"text_value":"This is the value the field will have."}; // \SKY\School\Model\UserAdminCustomFieldCreate | Object that describes the custom field that will be created.

try {
    $result = $apiInstance->v1UsersByUserIdCustomfieldsPost($user_id, $user_admin_custom_field_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersByUserIdCustomfieldsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| Format - int32. The Id of the user to create a custom field for | |
| **user_admin_custom_field_create** | [**\SKY\School\Model\UserAdminCustomFieldCreate**](../Model/UserAdminCustomFieldCreate.md)| Object that describes the custom field that will be created. | [optional] |

### Return type

**bool**

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1UsersByUserIdEducationByEducationIdDelete()`

```php
v1UsersByUserIdEducationByEducationIdDelete($user_id, $education_id)
```

User education delete (BETA)

Deletes an education entry for a user. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>SKY API Data Sync</li><li>Platform Manager</li><li>Contact Card Manager</li></ul>  ***This endpoint is in BETA. It may be removed or replaced with a 90 day deprecation period.***

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Format - int32.
$education_id = 56; // int | Format - int32.

try {
    $apiInstance->v1UsersByUserIdEducationByEducationIdDelete($user_id, $education_id);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersByUserIdEducationByEducationIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| Format - int32. | |
| **education_id** | **int**| Format - int32. | |

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

## `v1UsersByUserIdEducationByEducationIdPatch()`

```php
v1UsersByUserIdEducationByEducationIdPatch($user_id, $education_id, $education_update): int
```

Users education update (BETA)

Updates an education entry for a user. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>SKY API Data Sync</li><li>Platform Manager</li><li>Contact Card Manager</li></ul>  ***This endpoint is in BETA. It may be removed or replaced with a 90 day deprecation period.***

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Format - int32. The ID of the user.
$education_id = 56; // int | Format - int32. The ID of the education.
$education_update = {"school":"Brookfield Academy","degree":"High School Diploma","major":"Mathematics","field":"Encryption","grad_year":"2024","sort_order":"1"}; // \SKY\School\Model\EducationUpdate | The education model.

try {
    $result = $apiInstance->v1UsersByUserIdEducationByEducationIdPatch($user_id, $education_id, $education_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersByUserIdEducationByEducationIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| Format - int32. The ID of the user. | |
| **education_id** | **int**| Format - int32. The ID of the education. | |
| **education_update** | [**\SKY\School\Model\EducationUpdate**](../Model/EducationUpdate.md)| The education model. | [optional] |

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

## `v1UsersByUserIdEducationGet()`

```php
v1UsersByUserIdEducationGet($user_id): \SKY\School\Model\EducationReadCollection
```

Users education by user

Returns a collection of education information for the specified ```user_id```. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>SKY API Data Sync</li></ul>

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Format - int32. The ID of the user.

try {
    $result = $apiInstance->v1UsersByUserIdEducationGet($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersByUserIdEducationGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| Format - int32. The ID of the user. | |

### Return type

[**\SKY\School\Model\EducationReadCollection**](../Model/EducationReadCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1UsersByUserIdEducationPost()`

```php
v1UsersByUserIdEducationPost($user_id, $education_add): int
```

Users education create (BETA)

Creates an education entry for a user. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>SKY API Data Sync</li><li>Platform Manager</li><li>Contact Card Manager</li></ul>  ***This endpoint is in BETA. It may be removed or replaced with a 90 day deprecation period.***

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Format - int32. The ID of the user.
$education_add = {"school":"Brookfield Academy","degree":"High School Diploma","major":"Mathematics","field":"Encryption","grad_year":2024,"sort_order":1}; // \SKY\School\Model\EducationAdd | The education model.

try {
    $result = $apiInstance->v1UsersByUserIdEducationPost($user_id, $education_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersByUserIdEducationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| Format - int32. The ID of the user. | |
| **education_add** | [**\SKY\School\Model\EducationAdd**](../Model/EducationAdd.md)| The education model. | [optional] |

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

## `v1UsersByUserIdEmergencycontactsGet()`

```php
v1UsersByUserIdEmergencycontactsGet($user_id): \SKY\School\Model\EmergencyContactList
```

Users emergency contacts by user ID

Returns a collection of a emergency contacts for the specified ```user_id```.  Requires at least one of the following roles in the Education Management system:  <ul><li>SKY API Data Sync</li></ul>

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Format - int32. The ID of the user.

try {
    $result = $apiInstance->v1UsersByUserIdEmergencycontactsGet($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersByUserIdEmergencycontactsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| Format - int32. The ID of the user. | |

### Return type

[**\SKY\School\Model\EmergencyContactList**](../Model/EmergencyContactList.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1UsersByUserIdEmergencycontactsNonuserPost()`

```php
v1UsersByUserIdEmergencycontactsNonuserPost($user_id, $emergency_contact_non_user_create)
```

Users emergency contact non-user create

Creates a non-user emergency contact for the given user.<br />  Requires at least one of the following roles in the Education Management system:  <ul><li>SKY API Data Sync</li></ul>

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Format - int32. The ID of the user.
$emergency_contact_non_user_create = {"automated_email":0,"email":"example@example.com","call_dialer":1,"firstname":"John","lastname":"Smith","phone_number":"555-555-5555","phone_type":"Home","relationship":"Friend"}; // \SKY\School\Model\EmergencyContactNonUserCreate | 

try {
    $apiInstance->v1UsersByUserIdEmergencycontactsNonuserPost($user_id, $emergency_contact_non_user_create);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersByUserIdEmergencycontactsNonuserPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| Format - int32. The ID of the user. | |
| **emergency_contact_non_user_create** | [**\SKY\School\Model\EmergencyContactNonUserCreate**](../Model/EmergencyContactNonUserCreate.md)|  | [optional] |

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

## `v1UsersByUserIdEmergencycontactsUserPost()`

```php
v1UsersByUserIdEmergencycontactsUserPost($user_id, $emergency_contact_user_create)
```

Users emergency contact user create

Activates an existing inactive or suggested emergency contact for a user.  To add a new user emergency contact, add the correct relationship between users first.<br />  To add a non-user emergency contact please see the Emergency Contact Non-User Create route.<br />  Requires at least one of the following roles in the Education Management system:  <ul><li>SKY API Data Sync</li></ul>

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Format - int32. The ID of the user.
$emergency_contact_user_create = {"automated_email":0,"call_dialer":1,"email":"example@example.com","phone_number":"555-555-5555"}; // \SKY\School\Model\EmergencyContactUserCreate | 

try {
    $apiInstance->v1UsersByUserIdEmergencycontactsUserPost($user_id, $emergency_contact_user_create);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersByUserIdEmergencycontactsUserPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| Format - int32. The ID of the user. | |
| **emergency_contact_user_create** | [**\SKY\School\Model\EmergencyContactUserCreate**](../Model/EmergencyContactUserCreate.md)|  | [optional] |

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

## `v1UsersByUserIdEmploymentGet()`

```php
v1UsersByUserIdEmploymentGet($user_id): \SKY\School\Model\FacultyEmploymentRead
```

Users employment by user ID

Returns the employment details for the specified ```user_id```.  <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>SKY API Data Sync</li></ul>

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Format - int32. The ID of the user.

try {
    $result = $apiInstance->v1UsersByUserIdEmploymentGet($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersByUserIdEmploymentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| Format - int32. The ID of the user. | |

### Return type

[**\SKY\School\Model\FacultyEmploymentRead**](../Model/FacultyEmploymentRead.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1UsersByUserIdGet()`

```php
v1UsersByUserIdGet($user_id): \SKY\School\Model\UserRead
```

User by ID

Returns data for the specified ```user_id```. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>SKY API Data Sync</li></ul>

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Format - int32. ID of the user to be returned.

try {
    $result = $apiInstance->v1UsersByUserIdGet($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersByUserIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| Format - int32. ID of the user to be returned. | |

### Return type

[**\SKY\School\Model\UserRead**](../Model/UserRead.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1UsersByUserIdOccupationsByOccupationIdDelete()`

```php
v1UsersByUserIdOccupationsByOccupationIdDelete($user_id, $occupation_id, $current): int
```

Users occupation delete (BETA)

Deletes an occupation entry for a user.<br />  Requires at least one of the following roles in the Education Management system:  <ul><li>SKY API Data Sync</li><li>Platform Manager</li><li>Contact Card Manager</li></ul>  ***This endpoint is in BETA. It may be removed or replaced with a 90 day deprecation period.***

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Format - int32. The ID of the user.
$occupation_id = 56; // int | Format - int32. The ID of the occupation.
$current = True; // bool | Current Employment Status

try {
    $result = $apiInstance->v1UsersByUserIdOccupationsByOccupationIdDelete($user_id, $occupation_id, $current);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersByUserIdOccupationsByOccupationIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| Format - int32. The ID of the user. | |
| **occupation_id** | **int**| Format - int32. The ID of the occupation. | |
| **current** | **bool**| Current Employment Status | [optional] |

### Return type

**int**

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1UsersByUserIdOccupationsByOccupationIdPatch()`

```php
v1UsersByUserIdOccupationsByOccupationIdPatch($user_id, $occupation_id, $occupation_update): int
```

Users occupation update

Updates an occupation entry for a user.<br />  Returns the ID of the occupation updated. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>SKY API Data Sync</li><li>Platform Manager</li><li>Contact Card Manager</li></ul>

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Format - int32. The ID of the user.
$occupation_id = 56; // int | Format - int32. The ID of the occupation.
$occupation_update = {"business_name":"Business name","job_title":"Associate","business_url":"www.businessurl.com","industry":"Industry","organization":"Organization","occupation":"Developer","matching_gift":"Yes","begin_date":"2023-01-01","end_date":"2024-02-02","specialty":"Specialty","parent_company":"Parent company","job_function":"Job functions","years_employed":"9","currently_employed":true}; // \SKY\School\Model\OccupationUpdate | The occupation information to be updated.

try {
    $result = $apiInstance->v1UsersByUserIdOccupationsByOccupationIdPatch($user_id, $occupation_id, $occupation_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersByUserIdOccupationsByOccupationIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| Format - int32. The ID of the user. | |
| **occupation_id** | **int**| Format - int32. The ID of the occupation. | |
| **occupation_update** | [**\SKY\School\Model\OccupationUpdate**](../Model/OccupationUpdate.md)| The occupation information to be updated. | [optional] |

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

## `v1UsersByUserIdOccupationsGet()`

```php
v1UsersByUserIdOccupationsGet($user_id): \SKY\School\Model\OccupationReadCollection
```

Users occupations by user ID

Returns a collection of occupations for the specified ```user_id```. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>SKY API Data Sync</li></ul>

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Format - int32. The ID of the user.

try {
    $result = $apiInstance->v1UsersByUserIdOccupationsGet($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersByUserIdOccupationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| Format - int32. The ID of the user. | |

### Return type

[**\SKY\School\Model\OccupationReadCollection**](../Model/OccupationReadCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1UsersByUserIdOccupationsPost()`

```php
v1UsersByUserIdOccupationsPost($user_id, $occupation_create): int
```

Users occupation create

Creates an occupation record for the specified ```user_id```.<br />  Returns the ID of the occupation created. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>SKY API Data Sync</li><li>Platform Manager</li><li>Contact Card Manager</li></ul>

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Format - int32. The ID of the user.
$occupation_create = {"business_name":"string","job_title":"string","business_url":"string","industry":"string","organization":"string","occupation":"string","matching_gift":true,"begin_date":"string","end_date":"string","specialty":"string","parent_company":"string","job_function":"string","years_employed":0,"current":true}; // \SKY\School\Model\OccupationCreate | The occupation information to be created.

try {
    $result = $apiInstance->v1UsersByUserIdOccupationsPost($user_id, $occupation_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersByUserIdOccupationsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| Format - int32. The ID of the user. | |
| **occupation_create** | [**\SKY\School\Model\OccupationCreate**](../Model/OccupationCreate.md)| The occupation information to be created. | [optional] |

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

## `v1UsersByUserIdPhonesByPhoneIdByPhoneTypeIdDelete()`

```php
v1UsersByUserIdPhonesByPhoneIdByPhoneTypeIdDelete($user_id, $phone_id, $phone_type_id)
```

Users phone delete (BETA)

Removes the specified phone from the user. <br />  If the phone is shared, other users linked to the phone will not be affected. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>SKY API Data Sync</li><li>Platform Manager</li><li>Contact Card Manager</li></ul>  ***This endpoint is in BETA. It may be removed or replaced with a 90 day deprecation period.***

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Format - int32. The ID of the user.
$phone_id = 56; // int | Format - int32. The ID of the user's phone to delete.
$phone_type_id = 56; // int | Format - int32. The ID of the phone type.

try {
    $apiInstance->v1UsersByUserIdPhonesByPhoneIdByPhoneTypeIdDelete($user_id, $phone_id, $phone_type_id);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersByUserIdPhonesByPhoneIdByPhoneTypeIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| Format - int32. The ID of the user. | |
| **phone_id** | **int**| Format - int32. The ID of the user&#39;s phone to delete. | |
| **phone_type_id** | **int**| Format - int32. The ID of the phone type. | |

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

## `v1UsersByUserIdPhonesByPhoneIdPatch()`

```php
v1UsersByUserIdPhonesByPhoneIdPatch($user_id, $phone_id, $split_phone_if_shared, $phone_update): int
```

Users phone update

Updates an exising phone record for the specified ```user_id```.<br />  Returns the ID of the phone number updated.

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Format - int32. The ID of the user.
$phone_id = 56; // int | Format - int32. The phone id to be updated.
$split_phone_if_shared = false; // bool | Set to true if phone number is shared
$phone_update = {"number":"string","type_id":0}; // \SKY\School\Model\PhoneUpdate | The phone information to be updated.

try {
    $result = $apiInstance->v1UsersByUserIdPhonesByPhoneIdPatch($user_id, $phone_id, $split_phone_if_shared, $phone_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersByUserIdPhonesByPhoneIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| Format - int32. The ID of the user. | |
| **phone_id** | **int**| Format - int32. The phone id to be updated. | |
| **split_phone_if_shared** | **bool**| Set to true if phone number is shared | [optional] [default to false] |
| **phone_update** | [**\SKY\School\Model\PhoneUpdate**](../Model/PhoneUpdate.md)| The phone information to be updated. | [optional] |

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

## `v1UsersByUserIdPhonesGet()`

```php
v1UsersByUserIdPhonesGet($user_id): \SKY\School\Model\PhoneReadCollection
```

Users phones by user

Returns a collection phone numbers for the specified ```user_id```.

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Format - int32. The ID of the user.

try {
    $result = $apiInstance->v1UsersByUserIdPhonesGet($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersByUserIdPhonesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| Format - int32. The ID of the user. | |

### Return type

[**\SKY\School\Model\PhoneReadCollection**](../Model/PhoneReadCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1UsersByUserIdPhonesPost()`

```php
v1UsersByUserIdPhonesPost($user_id, $phone_add): int
```

Users phone create

Creates a new phone record for the specified ```user_id```.<br />  Returns the ID of the phone number created.  Requires at least one of the following roles in the Education Management system:  <ul><li>SKY API Data Sync</li><li>Platform Manager</li><li>Contact Card Manager</li></ul>

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Format - int32. The ID of the user.
$phone_add = {"number":"string","type_id":0}; // \SKY\School\Model\PhoneAdd | The phone information to be created.

try {
    $result = $apiInstance->v1UsersByUserIdPhonesPost($user_id, $phone_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersByUserIdPhonesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| Format - int32. The ID of the user. | |
| **phone_add** | [**\SKY\School\Model\PhoneAdd**](../Model/PhoneAdd.md)| The phone information to be created. | [optional] |

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

## `v1UsersByUserIdPhonesSharePost()`

```php
v1UsersByUserIdPhonesSharePost($user_id, $phone_share): int
```

Users phone create - shared (BETA)

For an existing user, create a link to an existing phone number.<br />  Returns the ID of the phone number just shared. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Contact Card Manager</li><li>Platform Manager</li><li>SKY API Data Sync</li></ul>  ***This endpoint is in BETA. It may be removed or replaced with a 90 day deprecation period.***

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Format - int32. The Id of the user the existing address should be shared.
$phone_share = {"id":0,"phone_type_id":0}; // \SKY\School\Model\PhoneShare | The details about the phone number that should be shared with the user.

try {
    $result = $apiInstance->v1UsersByUserIdPhonesSharePost($user_id, $phone_share);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersByUserIdPhonesSharePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| Format - int32. The Id of the user the existing address should be shared. | |
| **phone_share** | [**\SKY\School\Model\PhoneShare**](../Model/PhoneShare.md)| The details about the phone number that should be shared with the user. | [optional] |

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

## `v1UsersByUserIdRelationshipsDelete()`

```php
v1UsersByUserIdRelationshipsDelete($user_id, $left_user, $relationship_type)
```

Users relationship delete

Removes a relationship record from the specified ```user_id```.<br />  If the related individual is also a user, the user profile of that user is preserved. Individuals may need to review or update their emergency contacts.  Requires at least one of the following roles in the Education Management system:  <ul><li>Payment Services Manager</li><li>Integration Manager</li><li>Contact Card Manager</li><li>Platform Manager</li></ul>

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Format - int32. The ID of the user for whom you are deleting the relationship.
$left_user = 56; // int | Format - int32. ID of the other user in the relationship.
$relationship_type = 'relationship_type_example'; // string | Defines the relationship between left_user and this user.

try {
    $apiInstance->v1UsersByUserIdRelationshipsDelete($user_id, $left_user, $relationship_type);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersByUserIdRelationshipsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| Format - int32. The ID of the user for whom you are deleting the relationship. | |
| **left_user** | **int**| Format - int32. ID of the other user in the relationship. | |
| **relationship_type** | **string**| Defines the relationship between left_user and this user. | |

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

## `v1UsersByUserIdRelationshipsGet()`

```php
v1UsersByUserIdRelationshipsGet($user_id): \SKY\School\Model\RelationshipReadCollection
```

Users relationships by user

Returns a collection of a relationships for the specified ```user_id```.  Requires at least one of the following roles in the Education Management system:  <ul><li>Payment Services Manager</li><li>Integration Manager</li><li>Contact Card Manager</li><li>Platform Manager</li></ul>

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Format - int32. The ID of the user.

try {
    $result = $apiInstance->v1UsersByUserIdRelationshipsGet($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersByUserIdRelationshipsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| Format - int32. The ID of the user. | |

### Return type

[**\SKY\School\Model\RelationshipReadCollection**](../Model/RelationshipReadCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1UsersByUserIdRelationshipsPost()`

```php
v1UsersByUserIdRelationshipsPost($user_id, $relationship_create)
```

Users relationship create

Creates a relationship record for the specified ```user_id```.<br />  This doesn't create a user profile for the related individual.<br />  Returns 200 OK  Requires at least one of the following roles in the Education Management system:  <ul><li>Payment Services Manager</li><li>Integration Manager</li><li>Contact Card Manager</li><li>Platform Manager</li></ul>

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Format - int32. The ID of the user.
$relationship_create = {"relationship_type":"Guardian_Ward","give_parental_access":true,"list_as_parent":false,"tuition_responsible_signer":true,"left_user":5409253}; // \SKY\School\Model\RelationshipCreate | Defines the relationship to be created.

try {
    $apiInstance->v1UsersByUserIdRelationshipsPost($user_id, $relationship_create);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersByUserIdRelationshipsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| Format - int32. The ID of the user. | |
| **relationship_create** | [**\SKY\School\Model\RelationshipCreate**](../Model/RelationshipCreate.md)| Defines the relationship to be created. | [optional] |

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

## `v1UsersChangedGet()`

```php
v1UsersChangedGet($base_role_ids, $start_date): \SKY\School\Model\UserExtendedCollection
```

Users changed by base role(s)

Returns a paginated collection of users that have been created or modified within the specified timeframe. The timeframe is from the start_date to the start_date plus seven days.<br />  Requires the following role in the Education Management system:  <ul><li>SKY API Data Sync</li></ul>

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_role_ids = 'base_role_ids_example'; // string | Comma delimited list of base role IDs to get users for.
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). The date to begin looking for changes. Use <a href=\"https://en.wikipedia.org/wiki/ISO_8601\" target=\"_blank\">ISO-8601</a> date format: 2003-04-21.

try {
    $result = $apiInstance->v1UsersChangedGet($base_role_ids, $start_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersChangedGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_role_ids** | **string**| Comma delimited list of base role IDs to get users for. | |
| **start_date** | **\DateTime**| Format - date-time (as date-time in RFC3339). The date to begin looking for changes. Use &lt;a href&#x3D;\&quot;https://en.wikipedia.org/wiki/ISO_8601\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO-8601&lt;/a&gt; date format: 2003-04-21. | |

### Return type

[**\SKY\School\Model\UserExtendedCollection**](../Model/UserExtendedCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1UsersCustomfieldsGet()`

```php
v1UsersCustomfieldsGet($base_role_ids, $marker, $field_ids): \SKY\School\Model\UserAdminCustomFieldCollection
```

Users custom fields list by base role(s)

Returns a paginated collection of users with custom admin fields, limited to 100 users per page.  This includes both user custom fields and administration view only custom fields.<br />  Use the last user ```id``` number as the ```marker``` value to return the next set of results.  For example: ```marker=23232323``` will return a second set of results beginning with the next user ID in the result set.<br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Platform Manager</li></ul>

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_role_ids = 'base_role_ids_example'; // string | A comma delimited list of base role IDs to get users for. Example: ```base_role_ids=14,16``` for Students and Parents.
$marker = 56; // int | Format - int32. The user's ```id``` to start at to return the next batch of data. Results will start with the next user in the result set.
$field_ids = 'field_ids_example'; // string | A comma delimited list of field IDs to filter the result set down to. Only matching custom fields will be returned from that result set for all users in that set even if they don't have any data for the given ```field_ids```.

try {
    $result = $apiInstance->v1UsersCustomfieldsGet($base_role_ids, $marker, $field_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersCustomfieldsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_role_ids** | **string**| A comma delimited list of base role IDs to get users for. Example: &#x60;&#x60;&#x60;base_role_ids&#x3D;14,16&#x60;&#x60;&#x60; for Students and Parents. | |
| **marker** | **int**| Format - int32. The user&#39;s &#x60;&#x60;&#x60;id&#x60;&#x60;&#x60; to start at to return the next batch of data. Results will start with the next user in the result set. | [optional] |
| **field_ids** | **string**| A comma delimited list of field IDs to filter the result set down to. Only matching custom fields will be returned from that result set for all users in that set even if they don&#39;t have any data for the given &#x60;&#x60;&#x60;field_ids&#x60;&#x60;&#x60;. | [optional] |

### Return type

[**\SKY\School\Model\UserAdminCustomFieldCollection**](../Model/UserAdminCustomFieldCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1UsersEmergencycontactsChangedGet()`

```php
v1UsersEmergencycontactsChangedGet($start_date, $marker): \SKY\School\Model\EmergencyContactChangeCollection
```

Users emergency contact changes

Returns a paginated collection of all emergency contacts for all users that have had changes since the specified ```start_date```. <br />  If no date is specified then this returns a paginated collection of all emergency contacts for all users. <br />  Use the last user's ID as the ```marker``` value to return the next set of results.<br />  Requires at least one of the following roles in the Education Management system:  <ul><li>SKY API Data Sync</li></ul>

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). The date to begin looking for changes. Use <a href=\"https://en.wikipedia.org/wiki/ISO_8601\" target=\"_blank\">ISO-8601</a> date format: 2022-04-16.
$marker = 0; // int | Format - int32. The user's ID to start at to return the next batch of data. Results will start with the next user in the result set.

try {
    $result = $apiInstance->v1UsersEmergencycontactsChangedGet($start_date, $marker);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersEmergencycontactsChangedGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date** | **\DateTime**| Format - date-time (as date-time in RFC3339). The date to begin looking for changes. Use &lt;a href&#x3D;\&quot;https://en.wikipedia.org/wiki/ISO_8601\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO-8601&lt;/a&gt; date format: 2022-04-16. | [optional] |
| **marker** | **int**| Format - int32. The user&#39;s ID to start at to return the next batch of data. Results will start with the next user in the result set. | [optional] [default to 0] |

### Return type

[**\SKY\School\Model\EmergencyContactChangeCollection**](../Model/EmergencyContactChangeCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1UsersEnrollPost()`

```php
v1UsersEnrollPost($user_enrollment_create): \SKY\School\Model\UserEnrollmentResponse
```

Users enrollment create

Creates the users enrollment record.<br />  Requires at least one of the following roles in the Education Management system:  <ul><li>SKY API Data Sync</li></ul>

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_enrollment_create = {"user_id":123456,"grade_level_id":2345,"school_level_id":0,"school_year_label":"2021 - 2022","enroll_date":"2020-09-01T04:00:00.0000000+00:00","current_year":true,"has_grades":true,"grade_repeated":false,"graduated":false,"allow_edit":true,"allow_delete":true,"future_enrollments":true,"duration_id":1655555,"session_id":0,"role_ids":[5555]}; // \SKY\School\Model\UserEnrollmentCreate | 

try {
    $result = $apiInstance->v1UsersEnrollPost($user_enrollment_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersEnrollPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_enrollment_create** | [**\SKY\School\Model\UserEnrollmentCreate**](../Model/UserEnrollmentCreate.md)|  | [optional] |

### Return type

[**\SKY\School\Model\UserEnrollmentResponse**](../Model/UserEnrollmentResponse.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1UsersEnrollmentsGet()`

```php
v1UsersEnrollmentsGet($school_year, $school_level_id, $grade_level_id, $limit, $offset): \SKY\School\Model\UserEnrollmentCollection
```

Users enrollments by year

Returns a collection of users and their enrollments for a single school year.<br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Admissions manager</li><li>Platform manager</li><li>SKY API Data Sync</li></ul>

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$school_year = 'school_year_example'; // string | The school year label to get enrollments for. The school year should be formatted like ```2022-2023```
$school_level_id = 56; // int | Format - int32. The school level Id to return enrollments for. Optional.
$grade_level_id = 56; // int | Format - int32. The grade level Id to return enrollments for. Optional.
$limit = 1000; // int | Format - int32. The number of records to return.  Defaults to 1000. Maximum is 5000.
$offset = 0; // int | Format - int32. The record to start the next collection on. Defaults to 0.

try {
    $result = $apiInstance->v1UsersEnrollmentsGet($school_year, $school_level_id, $grade_level_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersEnrollmentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **school_year** | **string**| The school year label to get enrollments for. The school year should be formatted like &#x60;&#x60;&#x60;2022-2023&#x60;&#x60;&#x60; | |
| **school_level_id** | **int**| Format - int32. The school level Id to return enrollments for. Optional. | [optional] |
| **grade_level_id** | **int**| Format - int32. The grade level Id to return enrollments for. Optional. | [optional] |
| **limit** | **int**| Format - int32. The number of records to return.  Defaults to 1000. Maximum is 5000. | [optional] [default to 1000] |
| **offset** | **int**| Format - int32. The record to start the next collection on. Defaults to 0. | [optional] [default to 0] |

### Return type

[**\SKY\School\Model\UserEnrollmentCollection**](../Model/UserEnrollmentCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1UsersExtendedByUserIdGet()`

```php
v1UsersExtendedByUserIdGet($user_id): \SKY\School\Model\UserExtended
```

Users extended by user

Returns extended user details for the specified ```user_id```.<br />  Requires the following role in the Education Management system:  <ul><li>SKY API Data Sync</li></ul>

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Format - int32. The ID of the user.

try {
    $result = $apiInstance->v1UsersExtendedByUserIdGet($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersExtendedByUserIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| Format - int32. The ID of the user. | |

### Return type

[**\SKY\School\Model\UserExtended**](../Model/UserExtended.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1UsersExtendedGet()`

```php
v1UsersExtendedGet($base_role_ids, $marker): \SKY\School\Model\UserExtendedCollection
```

Users extended by role(s)

Returns a paginated collection of extended user details, limited to 1000 users per page.<br />  Use the last user's ID as the ```marker``` value to return the next set of results.<br />  Requires the following role in the Education Management system:  <ul><li>SKY API Data Sync</li></ul>

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_role_ids = 'base_role_ids_example'; // string | Comma delimited list of base role IDs to get users for.
$marker = 56; // int | Format - int32. The user's ID to start at to return the next batch of data. Results will start with the next user in the result set.

try {
    $result = $apiInstance->v1UsersExtendedGet($base_role_ids, $marker);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersExtendedGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_role_ids** | **string**| Comma delimited list of base role IDs to get users for. | |
| **marker** | **int**| Format - int32. The user&#39;s ID to start at to return the next batch of data. Results will start with the next user in the result set. | [optional] |

### Return type

[**\SKY\School\Model\UserExtendedCollection**](../Model/UserExtendedCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1UsersGendertypesGet()`

```php
v1UsersGendertypesGet(): \SKY\School\Model\GenderTypeCollection
```

Users gender types

Returns a collection of gender types. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>SKY API Data Sync</li><li>Any Manager Role</li></ul>

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1UsersGendertypesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersGendertypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SKY\School\Model\GenderTypeCollection**](../Model/GenderTypeCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1UsersMeGet()`

```php
v1UsersMeGet(): \SKY\School\Model\UserMe
```

Users Get Me

Returns information about the caller.

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1UsersMeGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersMeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SKY\School\Model\UserMe**](../Model/UserMe.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1UsersPatch()`

```php
v1UsersPatch($user_edit): int
```

User update

Updates the record of a single user.<br />  Returns the ID of the user just updated upon success. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Platform Manager</li><li>Contact Card Manager</li></ul>

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_edit = {"affiliation":"Test Affiliation","birth_place":"USA","boarding_or_day":"B","cc_email":"example@example.com","citizenship":"United States","custom_field_one":"custom value","custom_field_two":"custom value","custom_field_three":"custom value","custom_field_four":"custom value","custom_field_five":"custom value","custom_field_six":"custom value","custom_field_seven":"custom value","custom_field_eight":"custom value","custom_field_nine":"custom value","custom_field_ten":"custom value","custom_field_10":"custom value","custom_field_3":"custom value","custom_field_2":"custom value","custom_field_1":"custom value","custom_field_4":"custom value","custom_field_5":"custom value","custom_field_6":"custom value","custom_field_7":"custom value","custom_field_8":"custom value","custom_field_9":"custom value","deceased":false,"dob":"1987-02-14T12:00:00.0000000+00:00","email":"example@example.com","email_active":true,"ethnicity":"Latin American","first_name":"John","gender":"Male","greeting":"","home_languages":[{"language":"German"},{"language":"5997"}],"host_id":"example-host-id","id":1,"international":"Yes","is_abroad":true,"is_international":false,"latino_hispanic":"Yes","is_responsible_signer":true,"in_state":{"resident":"Yes","county":"Merrimack","from_date":"1987-02-14T12:00:00.0000000+00:00"},"last_name":"Smith","living_status":"Single","locker":{"number":"123","combo":""},"lost":false,"maiden_name":"","mailbox":{"number":"222","combo":""},"middle_name":"Nolan","passport":{"number":"HG2345T","expire_date":"2035-09-29T12:00:00.0000000+00:00"},"primary_language":"English","preferred_name":"Jonny","prefix":"Mr.","pronouns":"(He/Him/His)","races":[{"race_type":"American Indian or Alaska Native"},{"race_type":"1430"}],"religion":"Christian","school_program":"Ninja squad","state_id":"","student_id":"","suffix":"III","visa":{"number":"12345678","status":"Current","type":"Student","issue_date":"2020-09-14T12:00:00.0000000+00:00","expire_date":"2025-09-28T12:00:00.0000000+00:00"},"fields_to_delete":["middle_name","locker.number","visa.number"]}; // \SKY\School\Model\UserEdit | User information to be updated

try {
    $result = $apiInstance->v1UsersPatch($user_edit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_edit** | [**\SKY\School\Model\UserEdit**](../Model/UserEdit.md)| User information to be updated | [optional] |

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

## `v1UsersPhonetypesGet()`

```php
v1UsersPhonetypesGet(): \SKY\School\Model\PhoneTypeCollection
```

Users phone types

Returns a collection of phone types.  Requires at least one of the following roles in the Education Management system:  <ul><li>SKY API Data Sync</li><li>Any Manager Role</li></ul>

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1UsersPhonetypesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersPhonetypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SKY\School\Model\PhoneTypeCollection**](../Model/PhoneTypeCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1UsersPost()`

```php
v1UsersPost($user_add): int
```

User create

Creates a new user record.<br />  Returns the newly created ID. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Platform Manager</li><li>Contact Card Manager</li></ul>

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_add = {"affiliation":"Test Affiliation","birth_place":"USA","boarding_or_day":"B","cc_email":"example@example.com","citizenship":"United States","custom_field_eight":"custom value","custom_field_five":"custom value","custom_field_four":"custom value","custom_field_nine":"custom value","custom_field_one":"custom value","custom_field_seven":"custom value","custom_field_six":"custom value","custom_field_ten":"custom value","custom_field_three":"custom value","custom_field_two":"custom value","deceased":false,"dob":"1987-02-14T12:00:00.0000000+00:00","email":"example@example.com","email_active":true,"ethnicity":"Latin American","first_name":"John","gender":"Male","greeting":"","home_languages":[{"language":"German"},{"language":"5997"}],"host_id":"example-host-id","international":"Yes","is_abroad":true,"latino_hispanic":"No","is_responsible_signer":true,"in_state":{"resident":"Yes","county":"Merrimack","from_date":"1987-02-14T12:00:00.0000000+00:00"},"last_name":"Smith","living_status":"Single","locker":{"number":"123","combo":""},"lost":false,"maiden_name":"","mailbox":{"number":"222","combo":""},"middle_name":"Nolan","passport":{"number":"HG2345T","expire_date":"2035-09-29T12:00:00.0000000+00:00"},"primary_language":"English","preferred_name":"Jonny","prefix":"Mr.","pronouns":"(He/Him/His)","races":[{"race_type":"American Indian or Alaska Native"},{"race_type":"1430"}],"religion":"Christian","school_program":"Ninja squad","state_id":"","student_id":"","suffix":"III","visa":{"number":"12345678","status":"Current","type":"Student","issue_date":"2020-09-14T12:00:00.0000000+00:00","expire_date":"2025-09-28T12:00:00.0000000+00:00"}}; // \SKY\School\Model\UserAdd | The user to be created

try {
    $result = $apiInstance->v1UsersPost($user_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UsersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_add** | [**\SKY\School\Model\UserAdd**](../Model/UserAdd.md)| The user to be created | [optional] |

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

## `v1usersget()`

```php
v1usersget($roles, $first_name, $last_name, $email, $maiden_name, $grad_year, $end_grad_year, $marker): \SKY\School\Model\UserReadCollection
```

Users by role(s)

Returns a paginated collection of users, limited to 100 users per page.<br />  Use the record number as the ```marker``` value to return the next set of results. For example: ```marker=101``` will return the second set of results.<br />  Results dependant on the directory settings of each user.<br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Billing Clerk</li><li>Password Manager</li><li>Contact Card Manager</li><li>Platform Manager</li></ul>

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


$apiInstance = new SKY\School\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$roles = 'roles_example'; // string | Comma delimited list of role IDs to get users for.
$first_name = 'first_name_example'; // string | Filter results by first name.
$last_name = 'last_name_example'; // string | Filter results by last name.
$email = 'email_example'; // string | Filter results by e-mail.
$maiden_name = 'maiden_name_example'; // string | Filter results by maiden name.
$grad_year = 'grad_year_example'; // string | The beginning date in a school year (ex. 2017).
$end_grad_year = 'end_grad_year_example'; // string | The end date in a school year (ex. 2018). Enter a grad_year and end_grad_year to find matching results in the date range.
$marker = 56; // int | Format - int32. The record number start at to return the next batch of data.

try {
    $result = $apiInstance->v1usersget($roles, $first_name, $last_name, $email, $maiden_name, $grad_year, $end_grad_year, $marker);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1usersget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **roles** | **string**| Comma delimited list of role IDs to get users for. | |
| **first_name** | **string**| Filter results by first name. | [optional] |
| **last_name** | **string**| Filter results by last name. | [optional] |
| **email** | **string**| Filter results by e-mail. | [optional] |
| **maiden_name** | **string**| Filter results by maiden name. | [optional] |
| **grad_year** | **string**| The beginning date in a school year (ex. 2017). | [optional] |
| **end_grad_year** | **string**| The end date in a school year (ex. 2018). Enter a grad_year and end_grad_year to find matching results in the date range. | [optional] |
| **marker** | **int**| Format - int32. The record number start at to return the next batch of data. | [optional] |

### Return type

[**\SKY\School\Model\UserReadCollection**](../Model/UserReadCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
