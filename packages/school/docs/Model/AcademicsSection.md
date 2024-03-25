# # AcademicsSection

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**teachers** | [**\SKY\School\Model\Teacher[]**](Teacher.md) | The list of teachers for this section | [optional]
**id** | **int** | The ID of the section | [optional]
**course_code** | **string** | The identifier used to reference a course; the Course Code is a user-entered value | [optional]
**duration** | [**\SKY\School\Model\Duration**](Duration.md) |  | [optional]
**lead_section_id** | **int** | The ID of the first section in a series of terms | [optional]
**name** | **string** | The name of the section | [optional]
**offering_id** | **int** | The ID of an offered course | [optional]
**parent_section_id** | **int** | The ID that leads you back to the offered section | [optional]
**room_id** | **int** | The ID of the room the section is held in | [optional]
**school_year** | **string** | The school year date range in which the section occurs | [optional]
**section_identifier** | **string** | The identifier used to differentiate between multiple sections that contain a course; the Section Identifier is a user-entered value | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
