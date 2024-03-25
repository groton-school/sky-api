# # Enrollment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the section | [optional]
**beginDate** | **\DateTime** | The begin date of the course. Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO-8601&lt;/a&gt; (24H) format: 2003-04-21T10:29:43 | [optional]
**blockId** | **int** | The block ID for a section | [optional]
**blockName** | **string** | The block name for a section | [optional]
**blocks** | **bool** | Returns true if the course has blocks | [optional]
**buildingName** | **string** | The building name | [optional]
**changedSections** | **int** | changed sections | [optional]
**courseCode** | **string** | The identifier used to reference a course; the Course Code is a user-entered value | [optional]
**courseLength** | **int** | The length of a course | [optional]
**courseTitle** | **string** | The title of the course | [optional]
**departments** | [**\SKY\School\Model\Department[]**](Department.md) | The list of departments the section is associated with | [optional]
**distinction** | **string** | distinction | [optional]
**dropped** | **int** | was the course dropped | [optional]
**durationBeginDate** | **\DateTime** | The begin date of the duration. Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO-8601&lt;/a&gt; (24H) format: 2003-04-21T10:29:43 | [optional]
**durationDescription** | **string** | The description of the starting term of the section | [optional]
**durationEndDate** | **\DateTime** | The end date of the duration. Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO-8601&lt;/a&gt; (24H) format: 2003-04-21T10:29:43 | [optional]
**durationId** | **int** | The duration ID for a section | [optional]
**durationName** | **string** | The starting term of the section | [optional]
**endDate** | **\DateTime** | The end date of the course. Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO-8601&lt;/a&gt; (24H) format: 2003-04-21T10:29:43 | [optional]
**facultyFirstName** | **string** | The first name of the head teacher | [optional]
**facultyLastName** | **string** | The last name of the head teacher | [optional]
**levelNumber** | **int** | level number | [optional]
**offeringDescription** | **string** | The description of an offering type | [optional]
**offeringId** | **int** | The ID of an offered course | [optional]
**offeringTypeId** | **int** | The ID of an offering type | [optional]
**roomId** | **int** | The room ID for a section | [optional]
**roomName** | **string** | The room name for the section | [optional]
**roomNumber** | **string** | The room number for the section | [optional]
**schoolYear** | **string** | The school year date range in which the section occurs | [optional]
**sectionIdentifier** | **string** | The identifier used to differentiate between multiple sections that contain a course; the Section Identifier is a user-entered value | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
