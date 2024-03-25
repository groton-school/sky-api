# # ResultCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schedule_id** | **int** | ID for the scheduled event (game) |
**schedule_type** | **int** | Set to 0 for Versus scoring results &lt;br /&gt;  Set to 1 for Place/Points scoring results | [optional]
**send_notification** | **bool** | Toggle to true to send a notification of this event change | [optional]
**opponents** | [**\SKY\School\Model\ResultCreateOpponent[]**](ResultCreateOpponent.md) | List of opponents to record results for | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
