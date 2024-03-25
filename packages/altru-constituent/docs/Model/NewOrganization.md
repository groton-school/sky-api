# # NewOrganization

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name. |
**webAddress** | **string** | The website. | [optional]
**picture** | **string** | The image. | [optional]
**pictureThumbnail** | **string** | The picture thumbnail. | [optional]
**industry** | **string** | The industry. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/industrycode/entries | [optional]
**numEmployees** | **int** | The no. of employees. | [optional]
**numSubsidiaries** | **int** | The no. of subsidiary orgs. | [optional]
**parentCorpId** | **string** | The parent org. | [optional]
**addressType** | **string** | The address type. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/addresstypecode/entries | [optional]
**addressBlock** | **string** | The address. | [optional]
**addressCity** | **string** | The city. | [optional]
**addressState** | **string** | The state. This simple list can be queried at https://api.sky.blackbaud.com/alt-adnmg/simplelists/7fa91401-596c-4f7c-936d-6e41683121d7?parameters&#x3D;country_id,{address_country_id}. | [optional]
**addressPostcode** | **string** | The zip. | [optional]
**addressCountry** | **string** | The country. This simple list can be queried at https://api.sky.blackbaud.com/alt-adnmg/simplelists/c9649672-353d-42e8-8c25-4d34bbabfbba. | [optional]
**addressDoNotMail** | **bool** | Indicates whether do not send mail to this address. | [optional]
**addressDoNotMailReason** | **string** | The reason. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/donotmailreasoncode/entries | [optional]
**phoneType** | **string** | The phone type. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/phonetypecode/entries | [optional]
**phoneNumber** | **string** | The phone number. | [optional]
**emailAddressType** | **string** | The email type. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/emailaddresstypecode/entries | [optional]
**emailAddress** | **string** | The email address. | [optional]
**skipAddingSecurityGroups** | **bool** | Indicates whether skip adding security groups. | [optional]
**zipLookupCountries** | [**\SKY\Altru\Constituent\Model\NewOrganizationZiplookupcountries[]**](NewOrganizationZiplookupcountries.md) | zip_lookup_countries | [optional]
**omitFromValidation** | **bool** | Indicates whether omit from validation. | [optional]
**dpc** | **string** | The dpc. | [optional]
**cart** | **string** | The cart. | [optional]
**lot** | **string** | The lot. | [optional]
**county** | **string** | The county. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/countycode/entries | [optional]
**congressionalDistrict** | **string** | The congressional district. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/congressionaldistrictcode/entries | [optional]
**lastValidationAttemptDate** | **\DateTime** | The last validation attempt date.Uses the format YYYY-MM-DD. An example date: &lt;i&gt;2019-11-21&lt;/i&gt;. | [optional]
**validationMessage** | **string** | The validation message. | [optional]
**certificationData** | **int** | The certification data. | [optional]
**validationCountries** | [**\SKY\Altru\Constituent\Model\NewOrganizationValidationcountries[]**](NewOrganizationValidationcountries.md) | validation_countries | [optional]
**isPrimary** | **bool** | Indicates whether this is a primary organization. | [optional]
**skipAddingSites** | **bool** | Indicates whether skip adding sites. | [optional]
**infoSource** | **string** | The information source. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/infosourcecode/entries | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
