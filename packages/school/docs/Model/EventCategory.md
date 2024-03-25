# # EventCategory

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the event category | [optional]
**description** | **string** | The name of the event category | [optional]
**calendarUrl** | **string** | The URL of the ICS feed used to populate the event category | [optional]
**includeBriefDescription** | **bool** | If set to True, brief description is included in events in the category | [optional]
**includeLongDescription** | **bool** | If set to True, long description is included in events in the category | [optional]
**public** | **bool** | If set to True, the event category is public.  If set to False, it is secure and only users with the allowed list of roles can see the events in the category | [optional]
**roles** | **int[]** | List of Role IDs that are allowed to see a secure event category | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
