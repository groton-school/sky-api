# # Education

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**primaryRecord** | **bool** | Indicates whether primary education information. | [optional]
**educationalInstitutionId** | **string** | The educational institution. |
**academicCatalogProgram** | **string** | The program. This simple list can be queried at https://api.sky.blackbaud.com/alt-adnmg/simplelists/d411c16b-8bcf-4fc8-a747-754e1e89e9bc?parameters&#x3D;educational_institution_id,{educational_institution_id}. | [optional]
**educationalProgram** | **string** | The program. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/educationalprogramcode/entries | [optional]
**constituencyStatus** | **string** | The status. Available values are &lt;i&gt;unknown&lt;/i&gt;, &lt;i&gt;currently attending&lt;/i&gt;, &lt;i&gt;incomplete&lt;/i&gt;, &lt;i&gt;graduated&lt;/i&gt; |
**dateGraduated** | [**\SKY\Altru\Constituent\Model\FuzzyDate**](FuzzyDate.md) |  | [optional]
**dateLeft** | [**\SKY\Altru\Constituent\Model\FuzzyDate**](FuzzyDate.md) |  | [optional]
**academicCatalogDegree** | **string** | The degree. This simple list can be queried at https://api.sky.blackbaud.com/alt-adnmg/simplelists/73c67942-07ad-412e-8596-a042e5e68002?parameters&#x3D;academiccatalogprogramid,{academiccatalogprogramid}. | [optional]
**educationalDegree** | **string** | The degree. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/educationaldegreecode/entries | [optional]
**educationalAward** | **string** | The honor awarded. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/educationalawardcode/entries | [optional]
**startDate** | [**\SKY\Altru\Constituent\Model\FuzzyDate**](FuzzyDate.md) |  | [optional]
**classYear** | **int** | The class of. | [optional]
**preferredClassYear** | **int** | The preferred class of. | [optional]
**educationalSource** | **string** | The information source. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/educationalsourcecode/entries | [optional]
**educationalSourceDate** | [**\SKY\Altru\Constituent\Model\FuzzyDate**](FuzzyDate.md) |  | [optional]
**comment** | **string** | The comments. | [optional]
**affiliatedAdditionalInformation** | [**\SKY\Altru\Constituent\Model\EducationAffiliatedadditionalinformation[]**](EducationAffiliatedadditionalinformation.md) | affiliated_additional_information | [optional]
**unaffiliatedAdditionalInformation** | [**\SKY\Altru\Constituent\Model\EducationUnaffiliatedadditionalinformation[]**](EducationUnaffiliatedadditionalinformation.md) | unaffiliated_additional_information | [optional]
**affiliated** | **bool** | Indicates whether affiliated. | [optional]
**educationalHistoryLevel** | **string** | The level. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/educationalhistorylevelcode/entries | [optional]
**educationalHistoryReason** | **string** | The reason. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/educationalhistoryreasoncode/entries | [optional]
**useAcademicCatalog** | **bool** | Indicates whether use academic catalog. Read-only in the SOAP API. | [optional]
**educationalHistoryStatus** | **string** | The status. This simple list can be queried at https://api.sky.blackbaud.com/alt-adnmg/simplelists/086c5bfb-1a80-46cf-a2f5-05ef51120891. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
