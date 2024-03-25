# # StudentMedicationRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of student medication | [optional]
**medication_type** | [**\SKY\School\Model\IdDescriptorField**](IdDescriptorField.md) |  | [optional]
**date_as_of** | **\DateTime** | The date the allergy or condition began. Use format ...  Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO-8601&lt;/a&gt; format: &#x60;&#x60;&#x60;2022-01-20T16:30:00-05:00&#x60;&#x60;&#x60; | [optional]
**date_until** | **\DateTime** | The date the allergy or condition ended. Use format ...  Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO-8601&lt;/a&gt; format: &#x60;&#x60;&#x60;2022-01-20T16:30:00-05:00&#x60;&#x60;&#x60; | [optional]
**location** | [**\SKY\School\Model\IdDescriptorField**](IdDescriptorField.md) |  | [optional]
**dosage** | **string** | The dosage of medication | [optional]
**dispense** | [**\SKY\School\Model\MedicationDosage**](MedicationDosage.md) |  | [optional]
**notes** | **string** | The notes/comments for the medication. | [optional]
**allergies** | [**\SKY\School\Model\AllergyRead[]**](AllergyRead.md) | The list of allergies this medication can treat. | [optional]
**conditions** | [**\SKY\School\Model\ConditionRead[]**](ConditionRead.md) | The list of conditions this medication can treat. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
