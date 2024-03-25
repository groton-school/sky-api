# # StudentMedicationUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dateAsOf** | **\DateTime** | The date to begin the medication. Use format ...  Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO-8601&lt;/a&gt; format: &#x60;&#x60;&#x60;2022-01-20T16:30:00-05:00&#x60;&#x60;&#x60; | [optional]
**dateUntil** | **\DateTime** | The date to end the medication. Use format ...  Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO-8601&lt;/a&gt; format: &#x60;&#x60;&#x60;2022-01-20T16:30:00-05:00&#x60;&#x60;&#x60; | [optional]
**location** | **string** | The ID or description of the location of the medication. | [optional]
**dosage** | **string** | The dosage of the medication to dispense. | [optional]
**despenseTimesADay** | **int** | The times per day to dispense the medication | [optional]
**dispenseFrequency** | **string** | The weekly frequency to dispense the medication. Allowed values: everyday, asneeded, specificdays. | [optional]
**dispenseDays** | [**\SKY\School\Model\Days**](Days.md) |  | [optional]
**conditions** | **int[]** | The list of student condition IDs for the condition. If included, this list will replace the existing list of conditions on the medication. | [optional]
**allergies** | **int[]** | The list of student allergy IDs for the allergy. If included, this list will replace the existing list of allegies on the medication. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
