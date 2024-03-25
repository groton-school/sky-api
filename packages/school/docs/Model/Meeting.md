# # Meeting

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**section_id** | **int** | The id of the section | [optional]
**section_identifier** | **string** | The section identifier | [optional]
**course_title** | **string** | The title of the course | [optional]
**group_name** | **string** | The auto generated name of the group | [optional]
**block_id** | **int** | The id of the block | [optional]
**block_name** | **string** | The name of the block | [optional]
**room_id** | **int** | The id of the room where the meeting takes place | [optional]
**room_name** | **string** | The name of the room where the meeting takes place | [optional]
**room_number** | **int** | The room number where the meeting takes place | [optional]
**room_capacity** | **int** | The room capacity | [optional]
**room_code** | **string** | The room code | [optional]
**faculty_user_id** | **int** | The user id of the faculty member | [optional]
**faculty_name** | **string** | The combined name of the head faculty member | [optional]
**faculty_firstname** | **string** | The faculty member&#39;s first name | [optional]
**faculty_lastname** | **string** | The faculty member&#39;s last name | [optional]
**start_time** | **\DateTime** | The start time of the meeting | [optional]
**end_time** | **\DateTime** | The end time of the meeting | [optional]
**meeting_date** | **\DateTime** | The date the meeting takes place | [optional]
**attendance_required** | **bool** | Returns true if attendance is required to be taken for this meeting | [optional]
**attendance_taken** | **bool** | Return true if attendance was taken | [optional]
**num_absent** | **int** | The number of absent students for this meeting | [optional]
**attendance_id** | **int** | the id of the attendance record | [optional]
**level_number** | **int** | The level number the meeting belongs to | [optional]
**offering_type** | [**\SKY\School\Model\OfferingType**](OfferingType.md) |  | [optional]
**created_date** | **\DateTime** | The date the section was created | [optional]
**modified_date** | **\DateTime** | The date the section was last modified | [optional]
**last_modified_user_id** | **int** | The identifier of the user that last modified the section | [optional]
**teachers** | [**\SKY\School\Model\Teacher[]**](Teacher.md) | The list of teachers for the meeting | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
