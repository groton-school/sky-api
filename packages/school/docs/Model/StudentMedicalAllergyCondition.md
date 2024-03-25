# # StudentMedicalAllergyCondition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**userId** | **int** | The ID of the student |
**type** | **string** | The type of record to create. Allowed values: allergy, condition |
**allergyConditionType** | **string** | The ID or description of the allergy or condition. |
**dateAsOf** | **\DateTime** | The date the allergy or condition began. Use format ...  Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO-8601&lt;/a&gt; format: &#x60;&#x60;&#x60;2022-01-20T16:30:00-05:00&#x60;&#x60;&#x60; |
**dateUntil** | **\DateTime** | The date the allergy or condition ended. Use format ...  Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO-8601&lt;/a&gt; format: &#x60;&#x60;&#x60;2022-01-20T16:30:00-05:00&#x60;&#x60;&#x60; | [optional]
**allergySigns** | **string** | The signs of an allergic reaction | [optional]
**minorReactionResponse** | **string** | The response for a minor allergic reaction | [optional]
**majorReactionResponse** | **string** | The response for a major allergic reaction | [optional]
**roleAccess** | [**\SKY\School\Model\MedicalSecurityRole[]**](MedicalSecurityRole.md) | Array of roles | [optional]
**medications** | **int[]** | Array of medication IDs | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
