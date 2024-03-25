# # BulkEnrollment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The duration ID of section to be enrolled in. Corresponds to the &#x60;&#x60;&#x60;duration ID&#x60;&#x60;&#x60; in the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/school/operations/V1AcademicsSectionsGet\&quot;&gt;section list&lt;/a&gt;. |
**enrollment_date** | **\DateTime** | The effective date that users will be added to the sections. Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO-8601&lt;/a&gt; (24H) format: 2003-04-21T10:29:43 |
**section_ids** | **string** | Comma delimited list of sections to which you want to add the users listed above into |
**user_ids** | **string** | Comma delimited list of ids representing users to be added to the sections listed below |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
