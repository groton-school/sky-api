# # Enrollment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the section | [optional]
**begin_date** | **\DateTime** | The begin date of the course. Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO-8601&lt;/a&gt; (24H) format: 2003-04-21T10:29:43 | [optional]
**block_id** | **int** | The block ID for a section | [optional]
**block_name** | **string** | The block name for a section | [optional]
**blocks** | **bool** | Returns true if the course has blocks | [optional]
**building_name** | **string** | The building name | [optional]
**changed_sections** | **int** | changed sections | [optional]
**course_code** | **string** | The identifier used to reference a course; the Course Code is a user-entered value | [optional]
**course_length** | **int** | The length of a course | [optional]
**course_title** | **string** | The title of the course | [optional]
**departments** | [**\SKY\School\Model\Department[]**](Department.md) | The list of departments the section is associated with | [optional]
**distinction** | **string** | distinction | [optional]
**dropped** | **int** | was the course dropped | [optional]
**duration_begin_date** | **\DateTime** | The begin date of the duration. Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO-8601&lt;/a&gt; (24H) format: 2003-04-21T10:29:43 | [optional]
**duration_description** | **string** | The description of the starting term of the section | [optional]
**duration_end_date** | **\DateTime** | The end date of the duration. Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO-8601&lt;/a&gt; (24H) format: 2003-04-21T10:29:43 | [optional]
**duration_id** | **int** | The duration ID for a section | [optional]
**duration_name** | **string** | The starting term of the section | [optional]
**end_date** | **\DateTime** | The end date of the course. Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO-8601&lt;/a&gt; (24H) format: 2003-04-21T10:29:43 | [optional]
**faculty_first_name** | **string** | The first name of the head teacher | [optional]
**faculty_last_name** | **string** | The last name of the head teacher | [optional]
**level_number** | **int** | level number | [optional]
**offering_description** | **string** | The description of an offering type | [optional]
**offering_id** | **int** | The ID of an offered course | [optional]
**offering_type_id** | **int** | The ID of an offering type | [optional]
**room_id** | **int** | The room ID for a section | [optional]
**room_name** | **string** | The room name for the section | [optional]
**room_number** | **string** | The room number for the section | [optional]
**school_year** | **string** | The school year date range in which the section occurs | [optional]
**section_identifier** | **string** | The identifier used to differentiate between multiple sections that contain a course; the Section Identifier is a user-entered value | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
