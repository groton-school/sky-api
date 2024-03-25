# # AllergiesAndConditionsView

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of student medical allergy/conditon | [optional]
**type** | **string** | Medical type | [optional]
**allergy_condition_type** | [**\SKY\School\Model\IdDescriptorField**](IdDescriptorField.md) |  | [optional]
**date_as_of** | **\DateTime** | The date the allergy or condition began. Use format ...  Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO-8601&lt;/a&gt; format: &#x60;&#x60;&#x60;2022-01-20T16:30:00-05:00&#x60;&#x60;&#x60; | [optional]
**date_until** | **\DateTime** | The date the allergy or condition ended. Use format ...  Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO-8601&lt;/a&gt; format: &#x60;&#x60;&#x60;2022-01-20T16:30:00-05:00&#x60;&#x60;&#x60; | [optional]
**notes** | **string** | The notes for a allergy/condition | [optional]
**allergy_signs** | **string** | The signs of an allergic reaction | [optional]
**minor_reaction_response** | **string** | The response for a minor allergic reaction | [optional]
**major_reaction_response** | **string** | The response for a major allergic reaction | [optional]
**medications** | [**\SKY\School\Model\StudentMedicationRead[]**](StudentMedicationRead.md) | Collection of medicines | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
