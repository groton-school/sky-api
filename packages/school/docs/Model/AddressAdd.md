# # AddressAdd

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_id** | **int** | The ID of the user of the address |
**type_id** | **int** | Address Type ID associated with an address. The list of address types can be found using the &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/school/operations/V1UsersAddresstypesGet\&quot;&gt;GET Users Address Types List&lt;/a&gt;. |
**country** | **string** | Country full name (United States) | [optional]
**line_one** | **string** | Address Line 1 (123 Main Street) |
**line_two** | **string** | Address Line 2 (Suite 100) | [optional]
**line_three** | **string** | Address Line 3 | [optional]
**city** | **string** | City (Charleston) |
**state** | **string** | State 2 letter abbreviation (SC) or full name.  Required only if Country property is United States | [optional]
**postal_code** | **string** | Postal code | [optional]
**province** | **string** | Province | [optional]
**region** | **string** | Region | [optional]
**mailing_address** | **bool** | Set to true to set this address as the mailing address | [optional]
**primary** | **bool** | Set to true to make this the primary address | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
