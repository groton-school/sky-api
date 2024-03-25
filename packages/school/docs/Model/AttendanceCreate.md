# # AttendanceCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**studentUserId** | **int** | ID of the student | [optional]
**beginDate** | **\DateTime** | Start date of the Attendance report. The timestamp is required, but only the date portion is used. To specify a specific start time, use the start_time field. | [optional]
**endDate** | **\DateTime** | End date of the Attendance report. The timestamp is required, but only the date portion is used. To specific a specific end time, use the end_time field. | [optional]
**startTime** | **string** | Start time of the Attendance report. If blank, will default to the beginning of the day (\&quot;00:00:00\&quot;). | [optional]
**endTime** | **string** | End time of the Attendance report. If blank, will default to the end of the day (\&quot;23:59:00\&quot;). | [optional]
**excuseTypeId** | **int** | ID of the attendace execuse | [optional]
**excuseComment** | **string** | Description of the attendance report | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
