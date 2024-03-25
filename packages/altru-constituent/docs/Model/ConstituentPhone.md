# # ConstituentPhone

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**phoneType** | **string** | The type. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/phonetypecode/entries | [optional]
**number** | **string** | The number. |
**primary** | **bool** | Indicates whether set as primary phone number. | [optional]
**doNotCall** | **bool** | Indicates whether do not call this phone number. | [optional]
**spouseName** | **string** | The spouse name. Read-only in the SOAP API. | [optional]
**spouseHasMatchingPhone** | **bool** | Indicates whether spouse has matching phone. Read-only in the SOAP API. | [optional]
**updateMatchingSpousePhone** | **bool** | Indicates whether update matching phone information for household. | [optional]
**household** | **bool** | Indicates whether household. Read-only in the SOAP API. | [optional]
**householdMember** | **bool** | Indicates whether household member. Read-only in the SOAP API. | [optional]
**updateMatchingHouseholdPhone** | **bool** | Indicates whether update matching phone numbers in household. | [optional]
**matchingHouseholdMembers** | [**\SKY\Altru\Constituent\Model\ConstituentPhoneMatchinghouseholdmembers[]**](ConstituentPhoneMatchinghouseholdmembers.md) | matching_household_members | [optional]
**startTime** | [**\SKY\Altru\Constituent\Model\HourMinute**](HourMinute.md) |  | [optional]
**endTime** | [**\SKY\Altru\Constituent\Model\HourMinute**](HourMinute.md) |  | [optional]
**infoSource** | **string** | The information source. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/infosourcecode/entries | [optional]
**infoSourceComments** | **string** | The comments. | [optional]
**country** | **string** | The country. This simple list can be queried at https://api.sky.blackbaud.com/alt-adnmg/simplelists/c9649672-353d-42e8-8c25-4d34bbabfbba. | [optional]
**seasonalStartDate** | [**\SKY\Altru\Constituent\Model\MonthDay**](MonthDay.md) |  | [optional]
**seasonalEndDate** | [**\SKY\Altru\Constituent\Model\MonthDay**](MonthDay.md) |  | [optional]
**startDate** | **\DateTime** | The start date.Uses the format YYYY-MM-DD. An example date: &lt;i&gt;2019-11-21&lt;/i&gt;. | [optional]
**endDate** | **\DateTime** | The end date.Uses the format YYYY-MM-DD. An example date: &lt;i&gt;2019-11-21&lt;/i&gt;. | [optional]
**doNotCallReason** | **string** | The reason. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/donotcallreasoncode/entries | [optional]
**confidential** | **bool** | Indicates whether this phone number is confidential. | [optional]
**countryCodes** | [**\SKY\Altru\Constituent\Model\ConstituentPhoneCountrycodes[]**](ConstituentPhoneCountrycodes.md) | country_codes | [optional]
**constituentDataReviewRollbackReason** | **string** | The reason. This simple list can be queried at https://api.sky.blackbaud.com/alt-adnmg/simplelists/484441bc-f0e6-4f5f-a6bf-49f02881dd13. | [optional]
**forcedPrimary** | **bool** | Indicates whether forced primary. Read-only in the SOAP API. | [optional]
**canEditPrimary** | **bool** | Indicates whether can edit primary. Read-only in the SOAP API. | [optional]
**invalidFields** | **string** | The invalid fields. Read-only in the SOAP API. | [optional]
**origin** | **string** | The origin. Read-only in the SOAP API. Available values are &lt;i&gt;user&lt;/i&gt;, &lt;i&gt;web forms&lt;/i&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
