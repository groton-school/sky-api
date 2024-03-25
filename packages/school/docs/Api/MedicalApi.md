# SKY\School\MedicalApi

All URIs are relative to https://api.sky.blackbaud.com/school, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1MedicalAllergiesByAllergyIdDelete()**](MedicalApi.md#v1MedicalAllergiesByAllergyIdDelete) | **DELETE** /v1/medical/allergies/{allergy_id} | Medical allergies delete (BETA) |
| [**v1MedicalAllergiesByAllergyIdPatch()**](MedicalApi.md#v1MedicalAllergiesByAllergyIdPatch) | **PATCH** /v1/medical/allergies/{allergy_id} | Medical allergies update (BETA) |
| [**v1MedicalAllergiesPost()**](MedicalApi.md#v1MedicalAllergiesPost) | **POST** /v1/medical/allergies | Medical allergies create (BETA) |
| [**v1MedicalAllergiesconditionsPost()**](MedicalApi.md#v1MedicalAllergiesconditionsPost) | **POST** /v1/medical/allergiesconditions | Medical allergies/conditions create (BETA) |
| [**v1MedicalAthleticclearancePost()**](MedicalApi.md#v1MedicalAthleticclearancePost) | **POST** /v1/medical/athleticclearance | Athletic requirements update (BETA) |
| [**v1MedicalConditionsByConditionIdDelete()**](MedicalApi.md#v1MedicalConditionsByConditionIdDelete) | **DELETE** /v1/medical/conditions/{condition_id} | Medical conditions delete (BETA) |
| [**v1MedicalConditionsByConditionIdPatch()**](MedicalApi.md#v1MedicalConditionsByConditionIdPatch) | **PATCH** /v1/medical/conditions/{condition_id} | Medical conditions update (BETA) |
| [**v1MedicalConditionsPost()**](MedicalApi.md#v1MedicalConditionsPost) | **POST** /v1/medical/conditions | Medical conditions create (BETA) |
| [**v1MedicalImmunizationsPost()**](MedicalApi.md#v1MedicalImmunizationsPost) | **POST** /v1/medical/immunizations | Medical immunizations update (BETA) |
| [**v1MedicalMedicationsByMedicationIdDelete()**](MedicalApi.md#v1MedicalMedicationsByMedicationIdDelete) | **DELETE** /v1/medical/medications/{medication_id} | Medical medications delete (BETA) |
| [**v1MedicalMedicationsByMedicationIdPatch()**](MedicalApi.md#v1MedicalMedicationsByMedicationIdPatch) | **PATCH** /v1/medical/medications/{medication_id} | Medical medication update (BETA) |
| [**v1MedicalMedicationsPost()**](MedicalApi.md#v1MedicalMedicationsPost) | **POST** /v1/medical/medications | Medical medications create (BETA) |
| [**v1MedicalSecurityrolesGet()**](MedicalApi.md#v1MedicalSecurityrolesGet) | **GET** /v1/medical/securityroles | Medical Security Roles (BETA) |
| [**v1MedicalUsersByUserIdAllergiesGet()**](MedicalApi.md#v1MedicalUsersByUserIdAllergiesGet) | **GET** /v1/medical/users/{user_id}/allergies | Medical allergies for a student (BETA) |
| [**v1MedicalUsersByUserIdAllergiesconditionsGet()**](MedicalApi.md#v1MedicalUsersByUserIdAllergiesconditionsGet) | **GET** /v1/medical/users/{user_id}/allergiesconditions | Medical allergies/conditions for a student (BETA) |
| [**v1MedicalUsersByUserIdAthleticrequirementsGet()**](MedicalApi.md#v1MedicalUsersByUserIdAthleticrequirementsGet) | **GET** /v1/medical/users/{user_id}/athleticrequirements | Medical athletic requirements for a student (BETA) |
| [**v1MedicalUsersByUserIdConditionsGet()**](MedicalApi.md#v1MedicalUsersByUserIdConditionsGet) | **GET** /v1/medical/users/{user_id}/conditions | Medical conditions for a student (BETA) |
| [**v1MedicalUsersByUserIdImmunizationsGet()**](MedicalApi.md#v1MedicalUsersByUserIdImmunizationsGet) | **GET** /v1/medical/users/{user_id}/immunizations | Medical immunizations for a student (BETA) |
| [**v1MedicalUsersByUserIdMedicationsGet()**](MedicalApi.md#v1MedicalUsersByUserIdMedicationsGet) | **GET** /v1/medical/users/{user_id}/medications | Medical medications for a student (BETA) |


## `v1MedicalAllergiesByAllergyIdDelete()`

```php
v1MedicalAllergiesByAllergyIdDelete($allergy_id): int
```

Medical allergies delete (BETA)

Delete a medical allergy for a student.<br />  Requires one of the following roles in the Education Management system:  <ul><li>Nurse</li></ul>  ***This endpoint is in BETA. It may be removed or replaced with a 90 day deprecation period.***

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


$apiInstance = new SKY\School\Api\MedicalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$allergy_id = 56; // int | Format - int32. The ID of the student's allergy.

try {
    $result = $apiInstance->v1MedicalAllergiesByAllergyIdDelete($allergy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MedicalApi->v1MedicalAllergiesByAllergyIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **allergy_id** | **int**| Format - int32. The ID of the student&#39;s allergy. | |

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

## `v1MedicalAllergiesByAllergyIdPatch()`

```php
v1MedicalAllergiesByAllergyIdPatch($allergy_id, $student_allergy_update): int
```

Medical allergies update (BETA)

Update a medical allergy for a student.<br />  Requires one of the following roles in the Education Management system:  <ul><li>Nurse</li></ul>  ***This endpoint is in BETA. It may be removed or replaced with a 90 day deprecation period.***

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


$apiInstance = new SKY\School\Api\MedicalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$allergy_id = 56; // int | Format - int32. The ID of the student's allergy.
$student_allergy_update = {"date_as_of":"2023-01-01T12:00:00.0000000+00:00","date_until":"2023-02-01T12:00:00.0000000+00:00","notes":"notes","allergy_signs":"allergy signs","minor_reaction_response":"minor reaction response","major_reaction_response":"major reaction response","role_access":[{"role_id":1,"has_access":true},{"role_id":2,"has_access":false}],"medications":[1,2,3]}; // \SKY\School\Model\StudentAllergyUpdate | The allergy changes

try {
    $result = $apiInstance->v1MedicalAllergiesByAllergyIdPatch($allergy_id, $student_allergy_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MedicalApi->v1MedicalAllergiesByAllergyIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **allergy_id** | **int**| Format - int32. The ID of the student&#39;s allergy. | |
| **student_allergy_update** | [**\SKY\School\Model\StudentAllergyUpdate**](../Model/StudentAllergyUpdate.md)| The allergy changes | [optional] |

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

## `v1MedicalAllergiesPost()`

```php
v1MedicalAllergiesPost($student_medical_allergy): int
```

Medical allergies create (BETA)

Creates an allergy for a student.<br />  Returns the newly created ID. <br />  Requires one of the following roles in the Education Management system:  <ul><li>Nurse</li></ul>  ***This endpoint is in BETA. It may be removed or replaced with a 90 day deprecation period.***

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


$apiInstance = new SKY\School\Api\MedicalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$student_medical_allergy = {"user_id":1,"allergy":"Peanut butter","date_as_of":"2023-08-31T12:00:00.0000000+00:00","date_until":"2024-02-01T12:00:00.0000000+00:00","notes":"Life threatening","allergy_signs":"Rash and wheezing","minor_reaction_response":"Give Benadryl","major_reaction_response":"Use epi pen","access_roles":[{"id":1,"has_access":true},{"id":2,"has_access":false}],"student_medications":[1,2,3]}; // \SKY\School\Model\StudentMedicalAllergy | The medical allergy to be created for student

try {
    $result = $apiInstance->v1MedicalAllergiesPost($student_medical_allergy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MedicalApi->v1MedicalAllergiesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **student_medical_allergy** | [**\SKY\School\Model\StudentMedicalAllergy**](../Model/StudentMedicalAllergy.md)| The medical allergy to be created for student | [optional] |

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

## `v1MedicalAllergiesconditionsPost()`

```php
v1MedicalAllergiesconditionsPost($student_medical_allergy_condition): int
```

Medical allergies/conditions create (BETA)

Creates medical allergy/condition record for a student.<br />  Returns the newly created ID. <br />  Requires one of the following roles in the Education Management system:  <ul><li>Nurse</li></ul>  ***This endpoint is in BETA. It may be removed or replaced with a 90 day deprecation period.***

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


$apiInstance = new SKY\School\Api\MedicalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$student_medical_allergy_condition = {"user_id":1,"type":"allergy or condition","allergy_condition_type":"12","date_as_of":"2023-01-01T12:00:00.0000000+00:00","date_until":"2023-02-01T12:00:00.0000000+00:00","allergy_signs":"allergy signs","minor_reaction_response":"minor reaction response","major_reaction_response":"major reaction response","role_access":[{"role_id":1,"has_access":true},{"role_id":2,"has_access":false}],"medications":[1,2,3]}; // \SKY\School\Model\StudentMedicalAllergyCondition | The medical allergy/condition to be created for student

try {
    $result = $apiInstance->v1MedicalAllergiesconditionsPost($student_medical_allergy_condition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MedicalApi->v1MedicalAllergiesconditionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **student_medical_allergy_condition** | [**\SKY\School\Model\StudentMedicalAllergyCondition**](../Model/StudentMedicalAllergyCondition.md)| The medical allergy/condition to be created for student | [optional] |

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

## `v1MedicalAthleticclearancePost()`

```php
v1MedicalAthleticclearancePost($student_athletic_requirement_update): string[]
```

Athletic requirements update (BETA)

Updates a medical athletic requirements for a student.<br />  Requires one of the following roles in the Education Management system:  <ul><li>Nurse</li></ul>  ***This endpoint is in BETA. It may be removed or replaced with a 90 day deprecation period.***

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


$apiInstance = new SKY\School\Api\MedicalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$student_athletic_requirement_update = {"user_id":123,"school_year":"2023 - 2024","season":"156057","athletics_requirement":[{"athletic_type":"Swim Test","athletic_date":"2022-01-01T01:00:00.0000000+00:00"},{"athletic_type":"Can Actively Play"}]}; // \SKY\School\Model\StudentAthleticRequirementUpdate | The athletics requirements to update

try {
    $result = $apiInstance->v1MedicalAthleticclearancePost($student_athletic_requirement_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MedicalApi->v1MedicalAthleticclearancePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **student_athletic_requirement_update** | [**\SKY\School\Model\StudentAthleticRequirementUpdate**](../Model/StudentAthleticRequirementUpdate.md)| The athletics requirements to update | [optional] |

### Return type

**string[]**

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1MedicalConditionsByConditionIdDelete()`

```php
v1MedicalConditionsByConditionIdDelete($condition_id): int
```

Medical conditions delete (BETA)

Delete a medical condition for a student.<br />  Requires one of the following roles in the Education Management system:  <ul><li>Nurse</li></ul>  ***This endpoint is in BETA. It may be removed or replaced with a 90 day deprecation period.***

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


$apiInstance = new SKY\School\Api\MedicalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$condition_id = 56; // int | Format - int32. The ID of the student's condition.

try {
    $result = $apiInstance->v1MedicalConditionsByConditionIdDelete($condition_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MedicalApi->v1MedicalConditionsByConditionIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **condition_id** | **int**| Format - int32. The ID of the student&#39;s condition. | |

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

## `v1MedicalConditionsByConditionIdPatch()`

```php
v1MedicalConditionsByConditionIdPatch($condition_id, $student_condition_update): int
```

Medical conditions update (BETA)

Update a medical condition for a student.<br />  Requires one of the following roles in the Education Management system:  <ul><li>Nurse</li></ul>  ***This endpoint is in BETA. It may be removed or replaced with a 90 day deprecation period.***

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


$apiInstance = new SKY\School\Api\MedicalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$condition_id = 56; // int | Format - int32. The ID of the student's condition.
$student_condition_update = {"date_as_of":"2023-01-01T12:00:00.0000000+00:00","date_until":"2023-02-01T12:00:00.0000000+00:00","notes":"notes","role_access":[{"role_id":1,"has_access":true},{"role_id":2,"has_access":false}],"medications":[1,2,3]}; // \SKY\School\Model\StudentConditionUpdate | The condition changes

try {
    $result = $apiInstance->v1MedicalConditionsByConditionIdPatch($condition_id, $student_condition_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MedicalApi->v1MedicalConditionsByConditionIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **condition_id** | **int**| Format - int32. The ID of the student&#39;s condition. | |
| **student_condition_update** | [**\SKY\School\Model\StudentConditionUpdate**](../Model/StudentConditionUpdate.md)| The condition changes | [optional] |

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

## `v1MedicalConditionsPost()`

```php
v1MedicalConditionsPost($student_medical_condition): int
```

Medical conditions create (BETA)

Creates a condition for a student.<br />  Returns the newly created ID. <br />  Requires one of the following roles in the Education Management system:  <ul><li>Nurse</li></ul>  ***This endpoint is in BETA. It may be removed or replaced with a 90 day deprecation period.***

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


$apiInstance = new SKY\School\Api\MedicalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$student_medical_condition = {"user_id":1,"condition":"Asthma","date_as_of":"2023-08-31T12:00:00.0000000+00:00","date_until":"2024-02-01T12:00:00.0000000+00:00","notes":"Can cause panic attack","access_roles":[{"id":1,"has_access":true},{"id":2,"has_access":false}],"student_medications":[1,2,3]}; // \SKY\School\Model\StudentMedicalCondition | The medical condition to be created for student

try {
    $result = $apiInstance->v1MedicalConditionsPost($student_medical_condition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MedicalApi->v1MedicalConditionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **student_medical_condition** | [**\SKY\School\Model\StudentMedicalCondition**](../Model/StudentMedicalCondition.md)| The medical condition to be created for student | [optional] |

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

## `v1MedicalImmunizationsPost()`

```php
v1MedicalImmunizationsPost($student_immunization_update)
```

Medical immunizations update (BETA)

Updates a medical immunization for a student.<br />  Requires one of the following roles in the Education Management system:  <ul><li>Nurse</li></ul>  ***This endpoint is in BETA. It may be removed or replaced with a 90 day deprecation period.***

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


$apiInstance = new SKY\School\Api\MedicalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$student_immunization_update = {"user_id":123,"immunizations":[{"immunization_type":"dtap"},{"immunization_type":"12","immunization_date":"2022-01-01T01:00:00.0000000+00:00"}]}; // \SKY\School\Model\StudentImmunizationUpdate | The immunizations to update

try {
    $apiInstance->v1MedicalImmunizationsPost($student_immunization_update);
} catch (Exception $e) {
    echo 'Exception when calling MedicalApi->v1MedicalImmunizationsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **student_immunization_update** | [**\SKY\School\Model\StudentImmunizationUpdate**](../Model/StudentImmunizationUpdate.md)| The immunizations to update | [optional] |

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

## `v1MedicalMedicationsByMedicationIdDelete()`

```php
v1MedicalMedicationsByMedicationIdDelete($medication_id): int
```

Medical medications delete (BETA)

Delete a medication for a student.<br />  Requires one of the following roles in the Education Management system:  <ul><li>Nurse</li></ul>  ***This endpoint is in BETA. It may be removed or replaced with a 90 day deprecation period.***

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


$apiInstance = new SKY\School\Api\MedicalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$medication_id = 56; // int | Format - int32. The ID of the student's medication.

try {
    $result = $apiInstance->v1MedicalMedicationsByMedicationIdDelete($medication_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MedicalApi->v1MedicalMedicationsByMedicationIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **medication_id** | **int**| Format - int32. The ID of the student&#39;s medication. | |

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

## `v1MedicalMedicationsByMedicationIdPatch()`

```php
v1MedicalMedicationsByMedicationIdPatch($medication_id, $student_medication_update): int
```

Medical medication update (BETA)

Updates a medical medication for a student.<br />  Requires one of the following roles in the Education Management system:  <ul><li>Nurse</li></ul>  ***This endpoint is in BETA. It may be removed or replaced with a 90 day deprecation period.***

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


$apiInstance = new SKY\School\Api\MedicalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$medication_id = 56; // int | Format - int32. >The student medication ID
$student_medication_update = {"date_as_of":"2023-01-01T12:00:00.0000000+00:00","date_until":"2023-02-01T12:00:00.0000000+00:00","location":"Admin Office","dosage":"1","despense_times_a_day":2,"dispense_frequency":"specificdays","dispense_days":{"sunday":false,"monday":false,"tuesday":false,"wednesday":true,"thursday":false,"friday":false,"saturday":false},"conditions":[1,2],"allergies":[1,2,3]}; // \SKY\School\Model\StudentMedicationUpdate | The medication changes to update

try {
    $result = $apiInstance->v1MedicalMedicationsByMedicationIdPatch($medication_id, $student_medication_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MedicalApi->v1MedicalMedicationsByMedicationIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **medication_id** | **int**| Format - int32. &gt;The student medication ID | |
| **student_medication_update** | [**\SKY\School\Model\StudentMedicationUpdate**](../Model/StudentMedicationUpdate.md)| The medication changes to update | [optional] |

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

## `v1MedicalMedicationsPost()`

```php
v1MedicalMedicationsPost($student_medication_create): int
```

Medical medications create (BETA)

Create a medication for a student.<br />  Returns the newly created ID. <br />  Requires one of the following roles in the Education Management system:  <ul><li>Nurse</li></ul>  ***This endpoint is in BETA. It may be removed or replaced with a 90 day deprecation period.***

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


$apiInstance = new SKY\School\Api\MedicalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$student_medication_create = {"user_id":123,"medication_type":"Insulin","date_as_of":"2023-01-01T12:00:00.0000000+00:00","date_until":"2023-02-01T12:00:00.0000000+00:00","location":"At home","dosage":"1","dispense":{"times_a_day":2,"frequency":"specific days","days":{"sunday":false,"monday":false,"tuesday":false,"wednesday":true,"thursday":false,"friday":false,"saturday":false}},"conditions":[1,2],"allergies":[1,2],"notes":"Comments","role_access":[{"role_id":1,"has_access":true},{"role_id":2,"has_access":false}]}; // \SKY\School\Model\StudentMedicationCreate | The medication to be created for student

try {
    $result = $apiInstance->v1MedicalMedicationsPost($student_medication_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MedicalApi->v1MedicalMedicationsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **student_medication_create** | [**\SKY\School\Model\StudentMedicationCreate**](../Model/StudentMedicationCreate.md)| The medication to be created for student | [optional] |

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

## `v1MedicalSecurityrolesGet()`

```php
v1MedicalSecurityrolesGet(): \SKY\School\Model\SecurityRoleCollection
```

Medical Security Roles (BETA)

Returns the user roles available for additional access control when posting medical data like student allergies or student medication. <br />  The ```role_access``` object in those post endpoints takes in the role IDs returned here.  ***This endpoint is in BETA. It may be removed or replaced with a 90 day deprecation period.***

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


$apiInstance = new SKY\School\Api\MedicalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1MedicalSecurityrolesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MedicalApi->v1MedicalSecurityrolesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SKY\School\Model\SecurityRoleCollection**](../Model/SecurityRoleCollection.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1MedicalUsersByUserIdAllergiesGet()`

```php
v1MedicalUsersByUserIdAllergiesGet($user_id): \SKY\School\Model\StudentAllergiesView[]
```

Medical allergies for a student (BETA)

Returns the medical allergies for a student.<br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Nurse</li></ul>  ***This endpoint is in BETA. It may be removed or replaced with a 90 day deprecation period.***

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


$apiInstance = new SKY\School\Api\MedicalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Format - int32. ID of the student

try {
    $result = $apiInstance->v1MedicalUsersByUserIdAllergiesGet($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MedicalApi->v1MedicalUsersByUserIdAllergiesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| Format - int32. ID of the student | |

### Return type

[**\SKY\School\Model\StudentAllergiesView[]**](../Model/StudentAllergiesView.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1MedicalUsersByUserIdAllergiesconditionsGet()`

```php
v1MedicalUsersByUserIdAllergiesconditionsGet($user_id): \SKY\School\Model\AllergiesAndConditionsView[]
```

Medical allergies/conditions for a student (BETA)

Returns a list of allergies/conditions for the specified ```user_id```. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Nurse</li></ul>  ***This endpoint is in BETA. It may be removed or replaced with a 90 day deprecation period.***

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


$apiInstance = new SKY\School\Api\MedicalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Format - int32. ID of the student

try {
    $result = $apiInstance->v1MedicalUsersByUserIdAllergiesconditionsGet($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MedicalApi->v1MedicalUsersByUserIdAllergiesconditionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| Format - int32. ID of the student | |

### Return type

[**\SKY\School\Model\AllergiesAndConditionsView[]**](../Model/AllergiesAndConditionsView.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1MedicalUsersByUserIdAthleticrequirementsGet()`

```php
v1MedicalUsersByUserIdAthleticrequirementsGet($user_id, $school_year, $season, $include): \SKY\School\Model\StudentAthleticRequirementRead[]
```

Medical athletic requirements for a student (BETA)

Returns a collection of medical athletic requirements for a student. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Nurse</li><li>Coach</li></ul>  ***This endpoint is in BETA. It may be removed or replaced with a 90 day deprecation period.***

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


$apiInstance = new SKY\School\Api\MedicalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Format - int32. The ID of the student
$school_year = 'school_year_example'; // string | The description of the school year
$season = 'season_example'; // string | The description of the season
$include = 'include_example'; // string | Show all athletic requirements or only those completed or missing. School year and season are required if not set to completed. Allowed values: all, completed, missing

try {
    $result = $apiInstance->v1MedicalUsersByUserIdAthleticrequirementsGet($user_id, $school_year, $season, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MedicalApi->v1MedicalUsersByUserIdAthleticrequirementsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| Format - int32. The ID of the student | |
| **school_year** | **string**| The description of the school year | [optional] |
| **season** | **string**| The description of the season | [optional] |
| **include** | **string**| Show all athletic requirements or only those completed or missing. School year and season are required if not set to completed. Allowed values: all, completed, missing | [optional] |

### Return type

[**\SKY\School\Model\StudentAthleticRequirementRead[]**](../Model/StudentAthleticRequirementRead.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1MedicalUsersByUserIdConditionsGet()`

```php
v1MedicalUsersByUserIdConditionsGet($user_id): \SKY\School\Model\StudentConditionView[]
```

Medical conditions for a student (BETA)

Returns the medical conditions for a student.<br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Nurse</li></ul>  ***This endpoint is in BETA. It may be removed or replaced with a 90 day deprecation period.***

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


$apiInstance = new SKY\School\Api\MedicalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Format - int32. ID of the student

try {
    $result = $apiInstance->v1MedicalUsersByUserIdConditionsGet($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MedicalApi->v1MedicalUsersByUserIdConditionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| Format - int32. ID of the student | |

### Return type

[**\SKY\School\Model\StudentConditionView[]**](../Model/StudentConditionView.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1MedicalUsersByUserIdImmunizationsGet()`

```php
v1MedicalUsersByUserIdImmunizationsGet($user_id, $include): \SKY\School\Model\StudentImmunizationRead[]
```

Medical immunizations for a student (BETA)

Returns a collection of medical immunizations for the specified ```user_id```. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Nurse</li></ul>  ***This endpoint is in BETA. It may be removed or replaced with a 90 day deprecation period.***

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


$apiInstance = new SKY\School\Api\MedicalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Format - int32. The ID of the student
$include = 'include_example'; // string | Show all required immunizations or just those completed or missing. Allowed values: all, completed, missing.

try {
    $result = $apiInstance->v1MedicalUsersByUserIdImmunizationsGet($user_id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MedicalApi->v1MedicalUsersByUserIdImmunizationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| Format - int32. The ID of the student | |
| **include** | **string**| Show all required immunizations or just those completed or missing. Allowed values: all, completed, missing. | [optional] |

### Return type

[**\SKY\School\Model\StudentImmunizationRead[]**](../Model/StudentImmunizationRead.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1MedicalUsersByUserIdMedicationsGet()`

```php
v1MedicalUsersByUserIdMedicationsGet($user_id): \SKY\School\Model\StudentMedicationRead[]
```

Medical medications for a student (BETA)

Returns a list of medications for the specified ```user_id```. <br />  Requires at least one of the following roles in the Education Management system:  <ul><li>Nurse</li></ul>  ***This endpoint is in BETA. It may be removed or replaced with a 90 day deprecation period.***

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


$apiInstance = new SKY\School\Api\MedicalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Format - int32. ID of the student

try {
    $result = $apiInstance->v1MedicalUsersByUserIdMedicationsGet($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MedicalApi->v1MedicalUsersByUserIdMedicationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| Format - int32. ID of the student | |

### Return type

[**\SKY\School\Model\StudentMedicationRead[]**](../Model/StudentMedicationRead.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
