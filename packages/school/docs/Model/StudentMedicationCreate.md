# # StudentMedicationCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**userId** | **int** | The ID of the student |
**medicationType** | **string** | The ID or description of the medication type |
**dateAsOf** | **\DateTime** | The date when medication began. Use format ...  Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO-8601&lt;/a&gt; format: &#x60;&#x60;&#x60;2022-01-20T16:30:00-05:00&#x60;&#x60;&#x60; |
**dateUntil** | **\DateTime** | The date when medication ended. Use format ...  Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO-8601&lt;/a&gt; format: &#x60;&#x60;&#x60;2022-01-20T16:30:00-05:00&#x60;&#x60;&#x60; | [optional]
**location** | **string** | The ID or description of the location of the medication. | [optional]
**dosage** | **string** | The dosage of the medication to dispense | [optional]
**dispense** | [**\SKY\School\Model\MedicationDosageCreate**](MedicationDosageCreate.md) |  |
**conditions** | **int[]** | The list of student condition IDs for the condition. If included, this list will replace the existing list of conditions on the medication. | [optional]
**allergies** | **int[]** | The list of student allergy IDs for the allergy. If included, this list will replace the existing list of allegies on the medication. | [optional]
**notes** | **string** | Notes for medication | [optional]
**roleAccess** | [**\SKY\School\Model\MedicalSecurityRole[]**](MedicalSecurityRole.md) | Array of roles | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
