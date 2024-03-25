# # NewIndividual

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lastName** | **string** | The last name. |
**firstName** | **string** | The first name. | [optional]
**middleName** | **string** | The middle name. | [optional]
**maidenName** | **string** | The maiden name. | [optional]
**nickname** | **string** | The nickname. | [optional]
**maritalStatus** | **string** | The marital status. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/maritalstatuscode/entries | [optional]
**title** | **string** | The title. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/titlecode/entries | [optional]
**title2** | **string** | The title 2. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/titlecode/entries | [optional]
**suffix** | **string** | The suffix. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/suffixcode/entries | [optional]
**suffix2** | **string** | The suffix 2. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/suffixcode/entries | [optional]
**gender** | **string** | The gender. Available values are &lt;i&gt;unknown&lt;/i&gt;, &lt;i&gt;male&lt;/i&gt;, &lt;i&gt;female&lt;/i&gt;, &lt;i&gt;other&lt;/i&gt; |
**birthDate** | [**\SKY\Altru\Constituent\Model\FuzzyDate**](FuzzyDate.md) |  | [optional]
**picture** | **string** | The image. | [optional]
**pictureThumbnail** | **string** | The picture thumbnail. | [optional]
**webAddress** | **string** | The website. | [optional]
**addressType** | **string** | The address type. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/addresstypecode/entries | [optional]
**addressCountry** | **string** | The country. This simple list can be queried at https://api.sky.blackbaud.com/alt-adnmg/simplelists/c9649672-353d-42e8-8c25-4d34bbabfbba. | [optional]
**addressBlock** | **string** | The address. | [optional]
**addressCity** | **string** | The city. | [optional]
**addressState** | **string** | The state. This simple list can be queried at https://api.sky.blackbaud.com/alt-adnmg/simplelists/7fa91401-596c-4f7c-936d-6e41683121d7?parameters&#x3D;country_id,{address_country_id}. | [optional]
**addressPostcode** | **string** | The zip. | [optional]
**addressDoNotMail** | **bool** | Indicates whether do not send mail to this address. | [optional]
**addressDoNotMailReason** | **string** | The reason. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/donotmailreasoncode/entries | [optional]
**phoneType** | **string** | The phone type. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/phonetypecode/entries | [optional]
**phoneNumber** | **string** | The phone number. | [optional]
**emailAddressType** | **string** | The email type. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/emailaddresstypecode/entries | [optional]
**emailAddress** | **string** | The email address. | [optional]
**skipAddingSecurityGroups** | **bool** | Indicates whether skip adding security groups. | [optional]
**zipLookupCountries** | [**\SKY\Altru\Constituent\Model\NewIndividualZiplookupcountries[]**](NewIndividualZiplookupcountries.md) | zip_lookup_countries | [optional]
**jobTitle** | **string** | The job title. | [optional]
**omitFromValidation** | **bool** | Indicates whether omit from validation. | [optional]
**dpc** | **string** | The dpc. | [optional]
**cart** | **string** | The cart. | [optional]
**lot** | **string** | The lot. | [optional]
**county** | **string** | The county. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/countycode/entries | [optional]
**congressionalDistrict** | **string** | The congressional district. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/congressionaldistrictcode/entries | [optional]
**lastValidationAttemptDate** | **\DateTime** | The last validation attempt date.Uses the format YYYY-MM-DD. An example date: &lt;i&gt;2019-11-21&lt;/i&gt;. | [optional]
**validationMessage** | **string** | The validation message. | [optional]
**certificationData** | **int** | The certification data. | [optional]
**validationCountries** | [**\SKY\Altru\Constituent\Model\NewIndividualValidationcountries[]**](NewIndividualValidationcountries.md) | validation_countries | [optional]
**skipAddingSites** | **bool** | Indicates whether skip adding sites. | [optional]
**infoSource** | **string** | The information source. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/infosourcecode/entries | [optional]
**origin** | **string** | The origin. Available values are &lt;i&gt;user&lt;/i&gt;, &lt;i&gt;web forms&lt;/i&gt; | [optional]
**gpc** | **bool** | Indicates whether gpc. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
