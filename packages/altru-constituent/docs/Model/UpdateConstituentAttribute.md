# # UpdateConstituentAttribute

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**headerCaption** | **string** | The headercaption. Read-only in the SOAP API. | [optional]
**attributeCategoryDescription** | **string** | The category. Read-only in the SOAP API. | [optional]
**attributeCategoryId** | **string** | The attributecategoryid. Read-only in the SOAP API. | [optional]
**dataTypeCode** | **int** | The datatypecode. Read-only in the SOAP API. | [optional]
**stringValue** | **string** | The value. | [optional]
**numberValue** | **int** | The value. | [optional]
**moneyValue** | **float** | The value. | [optional]
**dateValue** | **\DateTime** | The value.Uses the format YYYY-MM-DD. An example date: &lt;i&gt;2019-11-21&lt;/i&gt;. | [optional]
**booleanvalue** | **string** | The value. Available values are &lt;i&gt;no&lt;/i&gt;, &lt;i&gt;yes&lt;/i&gt; | [optional]
**codeTableValue** | **string** | The value. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/addresstypecode/entries | [optional]
**fuzzyDateValue** | [**\SKY\Altru\Constituent\Model\FuzzyDate**](FuzzyDate.md) |  | [optional]
**constituentIdValue** | **string** | The value. | [optional]
**hourMinuteValue** | [**\SKY\Altru\Constituent\Model\HourMinute**](HourMinute.md) |  | [optional]
**memoValue** | **string** | The value. | [optional]
**comment** | **string** | The comment. | [optional]
**constituentSearchListCatalogId** | **string** | The constituent search list catalog id. Read-only in the SOAP API. | [optional]
**codeTableName** | **string** | The code table name. Read-only in the SOAP API. | [optional]
**startDate** | **\DateTime** | The start date.Uses the format YYYY-MM-DD. An example date: &lt;i&gt;2019-11-21&lt;/i&gt;. | [optional]
**endDate** | **\DateTime** | The end date.Uses the format YYYY-MM-DD. An example date: &lt;i&gt;2019-11-21&lt;/i&gt;. | [optional]
**currency** | **string** | The currency. This simple list can be queried at https://api.sky.blackbaud.com/alt-adnmg/simplelists/13612288-b37e-409d-ba52-6ab31637ddd6?parameters&#x3D;transaction_currency_id,{transaction_currency_id}&amp;parameters&#x3D;base_currency_id,{base_currency_id}&amp;parameters&#x3D;current_currency_id,{currency_id}. | [optional]
**transactionCurrencyId** | **string** | The transaction currency. Read-only in the SOAP API. | [optional]
**baseCurrencyId** | **string** | The base currency. Read-only in the SOAP API. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
