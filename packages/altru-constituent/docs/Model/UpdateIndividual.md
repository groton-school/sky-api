# # UpdateIndividual

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lastName** | **string** | The last name. | [optional]
**firstName** | **string** | The first name. | [optional]
**middleName** | **string** | The middle name. | [optional]
**maidenName** | **string** | The maiden name. | [optional]
**nickname** | **string** | The nickname. | [optional]
**title** | **string** | The title. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/titlecode/entries | [optional]
**suffix** | **string** | The suffix. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/suffixcode/entries | [optional]
**gender** | **string** | The gender. Available values are &lt;i&gt;unknown&lt;/i&gt;, &lt;i&gt;male&lt;/i&gt;, &lt;i&gt;female&lt;/i&gt;, &lt;i&gt;other&lt;/i&gt; | [optional]
**birthDate** | [**\SKY\Altru\Constituent\Model\FuzzyDate**](FuzzyDate.md) |  | [optional]
**age** | **int** | The age. Read-only in the SOAP API. | [optional]
**givesAnonymously** | **bool** | Indicates whether gives anonymously. | [optional]
**picture** | **string** | The image. | [optional]
**pictureThumbnail** | **string** | The image. | [optional]
**pictureChanged** | **bool** | Indicates whether picture changed. | [optional]
**webAddress** | **string** | The website. | [optional]
**maritalStatus** | **string** | The marital status. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/maritalstatuscode/entries | [optional]
**title2** | **string** | The title 2. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/titlecode/entries | [optional]
**suffix2** | **string** | The suffix 2. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/suffixcode/entries | [optional]
**deceased** | **bool** | Indicates whether is deceased. Read-only in the SOAP API. | [optional]
**optoutads** | **bool** | Indicates whether opt out of targeted ads. | [optional]
**optoutsale** | **bool** | Indicates whether opt out of sale. | [optional]
**gpc** | **bool** | Indicates whether gpc. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
