# # CountryEdit

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the country; corresponds to the LONGDESCRIPTION in dbo.TABLEENTRIES. |
**abbreviation** | **string** | The user-defined abbreviation for the country; corresponds to the SHORTDESCRIPTION in dbo.TABLEENTRIES. |
**currencyTypeId** | **int** | The identifier for the country&#39;s currency type; corresponds to TYPE in dbo.COUNTRY_CODES. | [optional]
**thousandSeparator** | **string** | The thousand separator character used by the country. | [optional] [default to '']
**exchangeRate** | **float** | The country&#39;s currency exchange rate. |
**decimalSeparator** | **string** | The the decimal separator character used by the country. |
**decimalDigits** | **int** | The number of digits following a decimal. | [optional]
**currencySymbol** | **string** | The currency symbol used by the country. |
**currencyPlacementId** | **string** | The value used to determine where the  country&#39;s currency symbol is placed. | [optional]
**leadingZero** | **bool** | Value used to indicate whether a leading zero should be placed when displaying currency. | [optional]
**isoCode** | **string** | The country&#39;s ISO code. | [optional]
**labelFormatCountry** | **string** | Value used to indicate the label format for the country. | [optional]
**countryCodeId** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
