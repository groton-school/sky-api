# # StudentAllergyUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dateAsOf** | **\DateTime** | The date the allergy began. Use format ...  Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO-8601&lt;/a&gt; format: &#x60;&#x60;&#x60;2022-01-20T16:30:00-05:00&#x60;&#x60;&#x60; | [optional]
**dateUntil** | **\DateTime** | The date the allergy ended. Use format ...  Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO-8601&lt;/a&gt; format: &#x60;&#x60;&#x60;2022-01-20T16:30:00-05:00&#x60;&#x60;&#x60; | [optional]
**notes** | **string** | The notes for the allergy | [optional]
**allergySigns** | **string** | The signs of an allergic reaction | [optional]
**minorReactionResponse** | **string** | The response for a minor allergic reaction | [optional]
**majorReactionResponse** | **string** | The response for a major allergic reaction | [optional]
**roleAccess** | [**\SKY\School\Model\MedicalSecurityRole[]**](MedicalSecurityRole.md) | Array of roles. If a role is not included, default access will be set to true | [optional]
**medications** | **int[]** | The list of student medication IDs for the allergy. If included, this list will replace the existing list of medications. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
