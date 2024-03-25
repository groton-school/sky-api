# # NewConstituentAddress

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**constituentId** | **string** | The constituent id. |
**addressType** | **string** | The type. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/addresstypecode/entries | [optional]
**addressBlock** | **string** | The address. | [optional]
**city** | **string** | The city. | [optional]
**state** | **string** | The state. This simple list can be queried at https://api.sky.blackbaud.com/alt-adnmg/simplelists/7fa91401-596c-4f7c-936d-6e41683121d7?parameters&#x3D;country_id,{country_id}. | [optional]
**postcode** | **string** | The zip. | [optional]
**country** | **string** | The country. This simple list can be queried at https://api.sky.blackbaud.com/alt-adnmg/simplelists/c9649672-353d-42e8-8c25-4d34bbabfbba. |
**doNotMail** | **bool** | Indicates whether do not send mail to this address. | [optional]
**cart** | **string** | The cart. | [optional]
**lot** | **string** | The lot. | [optional]
**dpc** | **string** | The dpc. | [optional]
**startDate** | [**\SKY\Altru\Constituent\Model\MonthDay**](MonthDay.md) |  | [optional]
**endDate** | [**\SKY\Altru\Constituent\Model\MonthDay**](MonthDay.md) |  | [optional]
**primary** | **bool** | Indicates whether set as primary address. | [optional]
**historicalStartDate** | **\DateTime** | The start date.Uses the format YYYY-MM-DD. An example date: &lt;i&gt;2019-11-21&lt;/i&gt;. | [optional]
**recentMove** | **bool** | Indicates whether recently moved/changed from this address?. | [optional]
**oldAddress** | **string** | The old address. This simple list can be queried at https://api.sky.blackbaud.com/alt-adnmg/simplelists/bc075172-8103-4ccb-8285-658180e603a1?parameters&#x3D;constituent_id,{constituent_id}. | [optional]
**spouseName** | **string** | The spouse name. Read-only in the SOAP API. | [optional]
**updateMatchingSpouseAddresses** | **bool** | Indicates whether update matching address information for spouse. | [optional]
**omitFromValidation** | **bool** | Indicates whether omit this address from validation. | [optional]
**county** | **string** | The county. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/countycode/entries | [optional]
**congressionalDistrict** | **string** | The congressional district. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/congressionaldistrictcode/entries | [optional]
**stateHouseDistrict** | **string** | The state house district. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/statehousedistrictcode/entries | [optional]
**stateSenateDistrict** | **string** | The state senate district. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/statesenatedistrictcode/entries | [optional]
**localPrecinct** | **string** | The local precinct. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/localprecinctcode/entries | [optional]
**infoSource** | **string** | The information source. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/infosourcecode/entries | [optional]
**region** | **string** | The region. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/regioncode/entries | [optional]
**lastValidationAttemptDate** | **\DateTime** | The last attempt.Uses the format YYYY-MM-DD. An example date: &lt;i&gt;2019-11-21&lt;/i&gt;. | [optional]
**validationMessage** | **string** | The validation message. | [optional]
**certificationData** | **int** | The certification data. | [optional]
**zipLookupCountries** | [**\SKY\Altru\Constituent\Model\NewConstituentAddressZiplookupcountries[]**](NewConstituentAddressZiplookupcountries.md) | zip_lookup_countries | [optional]
**household** | **bool** | Indicates whether household. Read-only in the SOAP API. | [optional]
**householdMember** | **bool** | Indicates whether household member. Read-only in the SOAP API. | [optional]
**updateMatchingHouseholdAddresses** | **bool** | Indicates whether copy address information to household members. | [optional]
**validationCountries** | [**\SKY\Altru\Constituent\Model\NewConstituentAddressValidationcountries[]**](NewConstituentAddressValidationcountries.md) | validation_countries | [optional]
**doNotMailReason** | **string** | The reason. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/donotmailreasoncode/entries | [optional]
**infoSourceComments** | **string** | The comments. | [optional]
**confidential** | **bool** | Indicates whether this address is confidential. | [optional]
**constituentDataReviewRollbackReason** | **string** | The reason. This simple list can be queried at https://api.sky.blackbaud.com/alt-adnmg/simplelists/484441bc-f0e6-4f5f-a6bf-49f02881dd13. | [optional]
**forcedPrimary** | **bool** | Indicates whether forced primary. Read-only in the SOAP API. | [optional]
**canEditPrimary** | **bool** | Indicates whether can edit primary. Read-only in the SOAP API. | [optional]
**invalidFields** | **string** | The invalid fields. Read-only in the SOAP API. | [optional]
**origin** | **string** | The origin. Available values are &lt;i&gt;user&lt;/i&gt;, &lt;i&gt;web forms&lt;/i&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
