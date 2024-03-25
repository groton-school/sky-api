# # RelationshipRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the relationship | [optional]
**comment** | **string** | A comment describing the relationship | [optional]
**contact** | **bool** | Returns True if the user can be contacted. Returns False if the user is marked as &#39;No Contact&#39; in the UI. | [optional]
**firstName** | **string** | The first name of the user(s) associated with the queried user | [optional]
**lastName** | **string** | The last name of the user(s) associated with the queried user | [optional]
**listAsParent** | **bool** | Returns True if List as Parent is enabled in the UI for a user. If enabled, the user can be listed in directories as the student&#39;s parent | [optional]
**parentalAccess** | **bool** | Returns True if Parental Access is enabled in the UI for a relationship type | [optional]
**primary** | **bool** | Returns True if the user in a relationship is the primary user | [optional]
**relationship** | **int** | The enum value that describes the relationship (ex. Parent_Child &#x3D; 6) | [optional]
**residesWith** | **bool** | Returns True if Resides With is enabled in the UI. If enabled, then the user in a relationship resides with the queried user | [optional]
**showParent** | **bool** | Returns True if a parent&#39;s contact information is displayable in the directory | [optional]
**tuitionResponsibleSigner** | **bool** | Returns True if Responsible Signer is enabled in the UI for a user. If enabled, it indicates the user signs enrollment contracts in onBoard | [optional]
**typeId** | **int** | The ID of the relationship type. The ID corresponds with static options in the UI | [optional]
**userOneId** | **int** | The ID of the user associated with user_two_id | [optional]
**userOneRole** | **string** | The role of the user being queried | [optional]
**userTwoId** | **int** | The ID of the user associated with user_one_id | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
