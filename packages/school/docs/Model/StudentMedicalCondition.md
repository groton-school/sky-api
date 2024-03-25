# # StudentMedicalCondition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_id** | **int** | The user ID of the student. |
**condition** | **string** | The ID or description of the condition. |
**date_as_of** | **\DateTime** | The start date for the condition. Use ISO-8601 date format: 2022-08-31. |
**date_until** | **\DateTime** | The end date for the condition. Use ISO-8601 date format: 2022-08-31. | [optional]
**notes** | **string** | The notes for the condition. | [optional]
**access_roles** | [**\SKY\School\Model\StudentAccessRole[]**](StudentAccessRole.md) | An array of access role objects. | [optional]
**student_medications** | **int[]** | An array of student medication ID integers. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
