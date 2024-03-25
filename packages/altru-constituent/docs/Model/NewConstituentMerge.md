# # NewConstituentMerge

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sourceId** | **string** | The the constituent whose data will be merged into the target constituent.. |
**targetid** | **string** | The the constituent record that will represent the consolidated view of the constituent&#39;s data after the merge has completed.. |
**config** | **string** | The the merge configuration that will be used to merge the two constituents.. This simple list can be queried at https://api.sky.blackbaud.com/alt-adnmg/simplelists/c18b465c-c012-4839-952b-4bb8aae7cb3f. |
**deleteSource** | **bool** | Indicates whether if true then the source constituent will be deleted after the merge operation is complete.. |
**constituentInactivityReasonCode** | **string** | The inactive reason. This simple list can be queried at https://api.sky.blackbaud.com/alt-adnmg/simplelists/71b29b04-d70f-4d38-bab1-e44a2528d0e8. | [optional]
**constituentInactivityDetails** | **string** | The inactive details. | [optional]
**deleteSourceConstituent** | **string** | The delete source constituent. Available values are &lt;i&gt;delete source constituent&lt;/i&gt;, &lt;i&gt;mark source constituent inactive&lt;/i&gt; |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
