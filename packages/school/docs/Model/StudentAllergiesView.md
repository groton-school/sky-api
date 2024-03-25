# # StudentAllergiesView

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of student medical allergy | [optional]
**allergy** | [**\SKY\School\Model\IdDescriptorField**](IdDescriptorField.md) |  | [optional]
**date_as_of** | **\DateTime** | The start date for the allergy. | [optional]
**date_until** | **\DateTime** | The end date for the allergy. | [optional]
**notes** | **string** | The notes for the allergy. | [optional]
**allergy_signs** | **string** | The signs of an allergic reaction. | [optional]
**minor_reaction_response** | **string** | The response for a minor allergic reaction. | [optional]
**major_reaction_response** | **string** | The response for a major allergic reaction. | [optional]
**student_medications** | [**\SKY\School\Model\StudentMedication[]**](StudentMedication.md) | An array of student medication objects. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
