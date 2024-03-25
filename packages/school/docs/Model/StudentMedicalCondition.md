# # StudentMedicalCondition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**userId** | **int** | The user ID of the student. |
**condition** | **string** | The ID or description of the condition. |
**dateAsOf** | **\DateTime** | The start date for the condition. Use ISO-8601 date format: 2022-08-31. |
**dateUntil** | **\DateTime** | The end date for the condition. Use ISO-8601 date format: 2022-08-31. | [optional]
**notes** | **string** | The notes for the condition. | [optional]
**accessRoles** | [**\SKY\School\Model\StudentAccessRole[]**](StudentAccessRole.md) | An array of access role objects. | [optional]
**studentMedications** | **int[]** | An array of student medication ID integers. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
