# # ConstituentEmailAddress

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**emailAddressType** | **string** | The type. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/emailaddresstypecode/entries | [optional]
**emailAddress** | **string** | The email address. |
**primary** | **bool** | Indicates whether set as primary email address. | [optional]
**doNotEmail** | **bool** | Indicates whether do not send email to this address. | [optional]
**spouseName** | **string** | The spouse name. Read-only in the SOAP API. | [optional]
**spouseHasMatchingEmailAddress** | **bool** | Indicates whether spouse has matching email address. Read-only in the SOAP API. | [optional]
**updateMatchingSpouseEmailAddress** | **bool** | Indicates whether update matching email information for spouse. | [optional]
**household** | **bool** | Indicates whether household. Read-only in the SOAP API. | [optional]
**householdMember** | **bool** | Indicates whether household member. Read-only in the SOAP API. | [optional]
**updateMatchingHouseholdEmailAddress** | **bool** | Indicates whether update matching email addresses in household. | [optional]
**matchingHouseholdMembers** | [**\SKY\Altru\Constituent\Model\ConstituentEmailAddressMatchinghouseholdmembers[]**](ConstituentEmailAddressMatchinghouseholdmembers.md) | matching_household_members | [optional]
**infoSource** | **string** | The information source. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/infosourcecode/entries | [optional]
**infoSourceComments** | **string** | The comments. | [optional]
**constituentDataReviewRollbackReason** | **string** | The reason. This simple list can be queried at https://api.sky.blackbaud.com/alt-adnmg/simplelists/484441bc-f0e6-4f5f-a6bf-49f02881dd13. | [optional]
**forcedPrimary** | **bool** | Indicates whether forced primary. Read-only in the SOAP API. | [optional]
**canEditPrimary** | **bool** | Indicates whether can edit primary. Read-only in the SOAP API. | [optional]
**invalidFields** | **string** | The invalid fields. Read-only in the SOAP API. | [optional]
**origin** | **string** | The origin. Read-only in the SOAP API. Available values are &lt;i&gt;user&lt;/i&gt;, &lt;i&gt;web forms&lt;/i&gt; | [optional]
**startDate** | **\DateTime** | The start date.Uses the format YYYY-MM-DD. An example date: &lt;i&gt;2019-11-21&lt;/i&gt;. | [optional]
**endDate** | **\DateTime** | The end date.Uses the format YYYY-MM-DD. An example date: &lt;i&gt;2019-11-21&lt;/i&gt;. | [optional]
**invalidEmail** | **bool** | Indicates whether invalid email. Read-only in the SOAP API. | [optional]
**emailBouncedDate** | **\DateTime** | The email bounced date. Read-only in the SOAP API.Uses the format YYYY-MM-DD. An example date: &lt;i&gt;2019-11-21&lt;/i&gt;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
