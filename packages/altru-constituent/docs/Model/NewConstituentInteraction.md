# # NewConstituentInteraction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**constituentId** | **string** | The constituent id. |
**interactionType** | **string** | The contact method. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/interactiontypecode/entries |
**objective** | **string** | The summary. |
**fundraiserId** | **string** | The owner. | [optional]
**expectedDate** | **\DateTime** | The expected date.Uses the format YYYY-MM-DD. An example date: &lt;i&gt;2019-11-21&lt;/i&gt;. |
**actualDate** | **\DateTime** | The actual date.Uses the format YYYY-MM-DD. An example date: &lt;i&gt;2019-11-21&lt;/i&gt;. | [optional]
**status** | **string** | The status. Available values are &lt;i&gt;pending&lt;/i&gt;, &lt;i&gt;completed&lt;/i&gt;, &lt;i&gt;canceled&lt;/i&gt;, &lt;i&gt;declined&lt;/i&gt; |
**comment** | **string** | The comment. | [optional]
**eventId** | **string** | The event. | [optional]
**constituentName** | **string** | The constituent name. Read-only in the SOAP API. | [optional]
**participants** | [**\SKY\Altru\Constituent\Model\NewConstituentInteractionParticipants[]**](NewConstituentInteractionParticipants.md) | participants | [optional]
**interactionCategory** | **string** | The category. This simple list can be queried at https://api.sky.blackbaud.com/alt-adnmg/simplelists/cbba7545-b66f-44ac-aa24-d9c2f8cbc4ec. | [optional]
**interactionSubcategory** | **string** | The subcategory. This simple list can be queried at https://api.sky.blackbaud.com/alt-adnmg/simplelists/0eacc39b-07d1-4641-8774-e319559535a7?parameters&#x3D;interaction_category_id,{interaction_category_id}. | [optional]
**sites** | [**\SKY\Altru\Constituent\Model\NewConstituentInteractionSites[]**](NewConstituentInteractionSites.md) | sites | [optional]
**siteRequired** | **bool** | Indicates whether site required. Read-only in the SOAP API. | [optional]
**selectedConstituentId** | **string** | The constituent. | [optional]
**expectedStartTime** | [**\SKY\Altru\Constituent\Model\HourMinute**](HourMinute.md) |  | [optional]
**expectedEndTime** | [**\SKY\Altru\Constituent\Model\HourMinute**](HourMinute.md) |  | [optional]
**isAllDayEvent** | **bool** | Indicates whether is all day event. | [optional]
**timeZoneEntry** | **string** | The time zone. This simple list can be queried at https://api.sky.blackbaud.com/alt-adnmg/simplelists/7fba76fa-b1ea-4c01-b841-edb18f03fe8c. | [optional]
**actualStartTime** | [**\SKY\Altru\Constituent\Model\HourMinute**](HourMinute.md) |  | [optional]
**actualEndTime** | [**\SKY\Altru\Constituent\Model\HourMinute**](HourMinute.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
