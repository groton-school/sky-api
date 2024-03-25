# # StudentMedicalAllergy

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_id** | **int** | The user ID of the student. |
**allergy** | **string** | The ID or description of the allergy. |
**date_as_of** | **\DateTime** | The start date for the allergy. Use ISO-8601 date format: 2022-08-31. |
**date_until** | **\DateTime** | The end date for the allergy. Use ISO-8601 date format: 2022-08-31. | [optional]
**notes** | **string** | The notes for the allergy. | [optional]
**allergy_signs** | **string** | The signs of an allergic reaction | [optional]
**minor_reaction_response** | **string** | The response for a minor allergic reaction | [optional]
**major_reaction_response** | **string** | The response for a major allergic reaction | [optional]
**access_roles** | [**\SKY\School\Model\StudentAccessRole[]**](StudentAccessRole.md) | An array of access role objects. | [optional]
**student_medications** | **int[]** | An array of student medication ID integers. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
