# # StudentMedicalAllergyCondition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_id** | **int** | The ID of the student |
**type** | **string** | The type of record to create. Allowed values: allergy, condition |
**allergy_condition_type** | **string** | The ID or description of the allergy or condition. |
**date_as_of** | **\DateTime** | The date the allergy or condition began. Use format ...  Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO-8601&lt;/a&gt; format: &#x60;&#x60;&#x60;2022-01-20T16:30:00-05:00&#x60;&#x60;&#x60; |
**date_until** | **\DateTime** | The date the allergy or condition ended. Use format ...  Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO-8601&lt;/a&gt; format: &#x60;&#x60;&#x60;2022-01-20T16:30:00-05:00&#x60;&#x60;&#x60; | [optional]
**allergy_signs** | **string** | The signs of an allergic reaction | [optional]
**minor_reaction_response** | **string** | The response for a minor allergic reaction | [optional]
**major_reaction_response** | **string** | The response for a major allergic reaction | [optional]
**role_access** | [**\SKY\School\Model\MedicalSecurityRole[]**](MedicalSecurityRole.md) | Array of roles | [optional]
**medications** | **int[]** | Array of medication IDs | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
