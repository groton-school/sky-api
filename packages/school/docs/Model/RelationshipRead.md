# # RelationshipRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the relationship | [optional]
**comment** | **string** | A comment describing the relationship | [optional]
**contact** | **bool** | Returns True if the user can be contacted. Returns False if the user is marked as &#39;No Contact&#39; in the UI. | [optional]
**first_name** | **string** | The first name of the user(s) associated with the queried user | [optional]
**last_name** | **string** | The last name of the user(s) associated with the queried user | [optional]
**list_as_parent** | **bool** | Returns True if List as Parent is enabled in the UI for a user. If enabled, the user can be listed in directories as the student&#39;s parent | [optional]
**parental_access** | **bool** | Returns True if Parental Access is enabled in the UI for a relationship type | [optional]
**primary** | **bool** | Returns True if the user in a relationship is the primary user | [optional]
**relationship** | **int** | The enum value that describes the relationship (ex. Parent_Child &#x3D; 6) | [optional]
**resides_with** | **bool** | Returns True if Resides With is enabled in the UI. If enabled, then the user in a relationship resides with the queried user | [optional]
**show_parent** | **bool** | Returns True if a parent&#39;s contact information is displayable in the directory | [optional]
**tuition_responsible_signer** | **bool** | Returns True if Responsible Signer is enabled in the UI for a user. If enabled, it indicates the user signs enrollment contracts in onBoard | [optional]
**type_id** | **int** | The ID of the relationship type. The ID corresponds with static options in the UI | [optional]
**user_one_id** | **int** | The ID of the user associated with user_two_id | [optional]
**user_one_role** | **string** | The role of the user being queried | [optional]
**user_two_id** | **int** | The ID of the user associated with user_one_id | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
