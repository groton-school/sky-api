# # Meeting

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sectionId** | **int** | The id of the section | [optional]
**sectionIdentifier** | **string** | The section identifier | [optional]
**courseTitle** | **string** | The title of the course | [optional]
**groupName** | **string** | The auto generated name of the group | [optional]
**blockId** | **int** | The id of the block | [optional]
**blockName** | **string** | The name of the block | [optional]
**roomId** | **int** | The id of the room where the meeting takes place | [optional]
**roomName** | **string** | The name of the room where the meeting takes place | [optional]
**roomNumber** | **int** | The room number where the meeting takes place | [optional]
**roomCapacity** | **int** | The room capacity | [optional]
**roomCode** | **string** | The room code | [optional]
**facultyUserId** | **int** | The user id of the faculty member | [optional]
**facultyName** | **string** | The combined name of the head faculty member | [optional]
**facultyFirstname** | **string** | The faculty member&#39;s first name | [optional]
**facultyLastname** | **string** | The faculty member&#39;s last name | [optional]
**startTime** | **\DateTime** | The start time of the meeting | [optional]
**endTime** | **\DateTime** | The end time of the meeting | [optional]
**meetingDate** | **\DateTime** | The date the meeting takes place | [optional]
**attendanceRequired** | **bool** | Returns true if attendance is required to be taken for this meeting | [optional]
**attendanceTaken** | **bool** | Return true if attendance was taken | [optional]
**numAbsent** | **int** | The number of absent students for this meeting | [optional]
**attendanceId** | **int** | the id of the attendance record | [optional]
**levelNumber** | **int** | The level number the meeting belongs to | [optional]
**offeringType** | [**\SKY\School\Model\OfferingType**](OfferingType.md) |  | [optional]
**createdDate** | **\DateTime** | The date the section was created | [optional]
**modifiedDate** | **\DateTime** | The date the section was last modified | [optional]
**lastModifiedUserId** | **int** | The identifier of the user that last modified the section | [optional]
**teachers** | [**\SKY\School\Model\Teacher[]**](Teacher.md) | The list of teachers for the meeting | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
