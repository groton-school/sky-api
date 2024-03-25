# OpenAPIClient-php

This API supports an expanded set of endpoints optimized for data integration scenarios.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/groton-school/sky-api.nxt-data-integration.git"
    }
  ],
  "require": {
    "groton-school/sky-api.nxt-data-integration": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: apiKeyQuery
$config = SKY\NXT\DataIntegration\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\NXT\DataIntegration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = SKY\NXT\DataIntegration\Configuration::getDefaultConfiguration()->setApiKey('Bb-Api-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\NXT\DataIntegration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Bb-Api-Subscription-Key', 'Bearer');


$apiInstance = new SKY\NXT\DataIntegration\Api\AppealApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$appealCreate = {"appeal_id":"PGLETTER","campaign_id":3,"appeal_category_id":1347,"description":"Planned Giving Letter","goal":20000,"start_date":"0001-01-01T12:00:00.0000000+00:00","end_date":"0001-01-01T12:00:00.0000000+00:00","inactive":false,"default_fund_id":202,"notes":"We send several planned giving letters throughout the year.","number_solicited":716,"default_gift_amount":0}; // \SKY\NXT\DataIntegration\Model\AppealCreate | The appeal to add.

try {
    $result = $apiInstance->createAppeal($appealCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppealApi->createAppeal: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.sky.blackbaud.com/nxt-data-integration*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AppealApi* | [**createAppeal**](docs/Api/AppealApi.md#createappeal) | **POST** /v1/re/appeals | Create an appeal
*AppealApi* | [**deleteAppeal**](docs/Api/AppealApi.md#deleteappeal) | **DELETE** /v1/re/appeals/{id} | Delete an appeal
*AppealApi* | [**editAppeal**](docs/Api/AppealApi.md#editappeal) | **PATCH** /v1/re/appeals/{id} | Edit an appeal
*AppealApi* | [**getAppeal**](docs/Api/AppealApi.md#getappeal) | **GET** /v1/re/appeals/{id} | Get an appeal
*AppealApi* | [**getAppealList**](docs/Api/AppealApi.md#getappeallist) | **GET** /v1/re/appeals | Get appeal list
*CampaignApi* | [**createCampaign**](docs/Api/CampaignApi.md#createcampaign) | **POST** /v1/re/campaigns | Create a campaign
*CampaignApi* | [**deleteCampaign**](docs/Api/CampaignApi.md#deletecampaign) | **DELETE** /v1/re/campaigns/{id} | Delete a campaign
*CampaignApi* | [**editCampaign**](docs/Api/CampaignApi.md#editcampaign) | **PATCH** /v1/re/campaigns/{id} | Edit a campaign
*CampaignApi* | [**getCampaign**](docs/Api/CampaignApi.md#getcampaign) | **GET** /v1/re/campaigns/{id} | Get a campaign
*CampaignApi* | [**getCampaignList**](docs/Api/CampaignApi.md#getcampaignlist) | **GET** /v1/re/campaigns | Get campaign list
*CodeTableApi* | [**createCodeTable**](docs/Api/CodeTableApi.md#createcodetable) | **POST** /v1/re/codetables | Create a code table
*CodeTableApi* | [**createTableEntry**](docs/Api/CodeTableApi.md#createtableentry) | **POST** /v1/re/codetables/{code_table_id}/tableentries | Create a table entry
*CodeTableApi* | [**deleteCodeTable**](docs/Api/CodeTableApi.md#deletecodetable) | **DELETE** /v1/re/codetables/{id} | Delete a code table
*CodeTableApi* | [**deleteTableEntry**](docs/Api/CodeTableApi.md#deletetableentry) | **DELETE** /v1/re/codetables/{code_table_id}/tableentries/{id} | Delete a table entry
*CodeTableApi* | [**editCodeTable**](docs/Api/CodeTableApi.md#editcodetable) | **PATCH** /v1/re/codetables/{id} | Edit a code table
*CodeTableApi* | [**editTableEntry**](docs/Api/CodeTableApi.md#edittableentry) | **PATCH** /v1/re/codetables/{code_table_id}/tableentries/{id} | Edit a table entry
*CodeTableApi* | [**getCodeTable**](docs/Api/CodeTableApi.md#getcodetable) | **GET** /v1/re/codetables/{id} | Get a code table
*CodeTableApi* | [**getCodeTableList**](docs/Api/CodeTableApi.md#getcodetablelist) | **GET** /v1/re/codetables | Get code table list
*CodeTableApi* | [**getTableEntriesList**](docs/Api/CodeTableApi.md#gettableentrieslist) | **GET** /v1/re/codetables/{code_table_id}/tableentries | Get table entries list
*CodeTableApi* | [**getTableEntry**](docs/Api/CodeTableApi.md#gettableentry) | **GET** /v1/re/codetables/{code_table_id}/tableentries/{id} | Get a table entry
*ConstituentApi* | [**deleteConstituent**](docs/Api/ConstituentApi.md#deleteconstituent) | **DELETE** /v1/re/constituents/{id} | Delete a constituent
*ConstituentApi* | [**getConstituentIdMapByConstituentId**](docs/Api/ConstituentApi.md#getconstituentidmapbyconstituentid) | **GET** /v1/re/constituentidmap/{constituentid} | Get a constituent record id from constituent id
*ConstituentApi* | [**getConstituentIdMapByImportId**](docs/Api/ConstituentApi.md#getconstituentidmapbyimportid) | **GET** /v1/re/importidmap/constituent/{importid} | Get a constituent record id from import id
*ConstituentApi* | [**getConstituentsByFund**](docs/Api/ConstituentApi.md#getconstituentsbyfund) | **GET** /v1/re/constituents/fund/{fundId} | Get constituents who gave to a fund
*ConstituentApi* | [**getCustomSearchConstituent**](docs/Api/ConstituentApi.md#getcustomsearchconstituent) | **GET** /v1/re/constituents/customsearch | Get constituent list (search)
*ConstituentAppealApi* | [**createConstituentAppeal**](docs/Api/ConstituentAppealApi.md#createconstituentappeal) | **POST** /v1/re/constitappeals | Create a constituent appeal
*ConstituentAppealApi* | [**deleteConstituentAppeal**](docs/Api/ConstituentAppealApi.md#deleteconstituentappeal) | **DELETE** /v1/re/constitappeals/{id} | Delete a constituent appeal
*ConstituentAppealApi* | [**editConstituentAppeal**](docs/Api/ConstituentAppealApi.md#editconstituentappeal) | **PATCH** /v1/re/constitappeals/{id} | Edit a constituent appeal
*CountryApi* | [**createCountry**](docs/Api/CountryApi.md#createcountry) | **POST** /v1/re/countries | Create a country
*CountryApi* | [**deleteCountry**](docs/Api/CountryApi.md#deletecountry) | **DELETE** /v1/re/countries/{id} | Delete a country
*CountryApi* | [**editCountry**](docs/Api/CountryApi.md#editcountry) | **PATCH** /v1/re/countries/{id} | Edit a country
*CountryApi* | [**getCountry**](docs/Api/CountryApi.md#getcountry) | **GET** /v1/re/countries/{id} | Get a country
*CountryApi* | [**getCountryList**](docs/Api/CountryApi.md#getcountrylist) | **GET** /v1/re/countries | Get country list
*CustomFieldCategoryApi* | [**createCustomFieldCategory**](docs/Api/CustomFieldCategoryApi.md#createcustomfieldcategory) | **POST** /v1/re/customfieldcategories | Create a custom field category
*CustomFieldCategoryApi* | [**deleteCustomFieldCategory**](docs/Api/CustomFieldCategoryApi.md#deletecustomfieldcategory) | **DELETE** /v1/re/customfieldcategories/{id} | Delete a custom field category
*CustomFieldCategoryApi* | [**editCustomFieldCategory**](docs/Api/CustomFieldCategoryApi.md#editcustomfieldcategory) | **PATCH** /v1/re/customfieldcategories/{id} | Edit a custom field category
*CustomFieldCategoryApi* | [**getCustomFieldCategory**](docs/Api/CustomFieldCategoryApi.md#getcustomfieldcategory) | **GET** /v1/re/customfieldcategories/{id} | Get a custom field category
*CustomFieldCategoryApi* | [**getCustomFieldCategoryList**](docs/Api/CustomFieldCategoryApi.md#getcustomfieldcategorylist) | **GET** /v1/re/customfieldcategories | Get custom field category list
*FundApi* | [**createFund**](docs/Api/FundApi.md#createfund) | **POST** /v1/re/funds | Create a fund
*FundApi* | [**deleteFund**](docs/Api/FundApi.md#deletefund) | **DELETE** /v1/re/funds/{id} | Delete a fund
*FundApi* | [**editFund**](docs/Api/FundApi.md#editfund) | **PATCH** /v1/re/funds/{id} | Edit a fund
*FundApi* | [**getFund**](docs/Api/FundApi.md#getfund) | **GET** /v1/re/funds/{id} | Get a fund
*FundApi* | [**getFundList**](docs/Api/FundApi.md#getfundlist) | **GET** /v1/re/funds | Get fund list
*FundApi* | [**getFundsByConstituentId**](docs/Api/FundApi.md#getfundsbyconstituentid) | **GET** /v1/re/funds/constituent/{constituentId} | Get funds by constituent
*GeneralInformationApi* | [**getInstalledCountry**](docs/Api/GeneralInformationApi.md#getinstalledcountry) | **GET** /v1/re/installedcountry | Get installed country
*GeneralInformationApi* | [**getSerialNumber**](docs/Api/GeneralInformationApi.md#getserialnumber) | **GET** /v1/re/serialnumber | Get serial number
*GiftApi* | [**getGiftIdMapByGiftLookupId**](docs/Api/GiftApi.md#getgiftidmapbygiftlookupid) | **GET** /v1/re/giftidmap/{giftlookupid} | Get a gift record id from gift lookup id
*GiftApi* | [**getGiftIdMapByImportId**](docs/Api/GiftApi.md#getgiftidmapbyimportid) | **GET** /v1/re/importidmap/gift/{importid} | Get a gift record id from import id
*GiftAidApi* | [**createTaxDeclaration**](docs/Api/GiftAidApi.md#createtaxdeclaration) | **POST** /v1/re/giftaid/taxdeclarations | Create a tax declaration
*GiftAidApi* | [**deleteTaxDeclaration**](docs/Api/GiftAidApi.md#deletetaxdeclaration) | **DELETE** /v1/re/giftaid/taxdeclarations/{id} | Delete a tax declaration
*GiftAidApi* | [**editTaxDeclaration**](docs/Api/GiftAidApi.md#edittaxdeclaration) | **PATCH** /v1/re/giftaid/taxdeclarations/{id} | Edit a tax declaration
*GiftAidApi* | [**getTaxDeclaration**](docs/Api/GiftAidApi.md#gettaxdeclaration) | **GET** /v1/re/giftaid/taxdeclarations/{id} | Get a tax declaration
*GiftAidApi* | [**getTaxDeclarationsList**](docs/Api/GiftAidApi.md#gettaxdeclarationslist) | **GET** /v1/re/giftaid/constituents/{id}/taxdeclarations | Get tax declarations list for a constituent
*GiftNoteApi* | [**createGiftNote**](docs/Api/GiftNoteApi.md#creategiftnote) | **POST** /v1/re/gifts/notes | Create a gift note
*GiftNoteApi* | [**deleteGiftNote**](docs/Api/GiftNoteApi.md#deletegiftnote) | **DELETE** /v1/re/gifts/notes/{id} | Delete a gift note
*GiftNoteApi* | [**editGiftNote**](docs/Api/GiftNoteApi.md#editgiftnote) | **PATCH** /v1/re/gifts/notes/{id} | Edit a gift note
*GiftNoteApi* | [**getGiftNote**](docs/Api/GiftNoteApi.md#getgiftnote) | **GET** /v1/re/gifts/notes/{id} | Get a gift note
*GiftNoteApi* | [**getGiftNoteList**](docs/Api/GiftNoteApi.md#getgiftnotelist) | **GET** /v1/re/gifts/{gift_id}/notes | Get a gift note list
*GiftTributeApi* | [**createGiftTribute**](docs/Api/GiftTributeApi.md#creategifttribute) | **POST** /v1/re/gifttribute | Create a gift tribute
*GiftTributeApi* | [**deleteGiftTribute**](docs/Api/GiftTributeApi.md#deletegifttribute) | **DELETE** /v1/re/gifttribute/{giftTributeId} | Delete a gift tribute
*GiftTributeApi* | [**editGiftTribute**](docs/Api/GiftTributeApi.md#editgifttribute) | **PATCH** /v1/re/gifttribute/{giftTributeId} | Edit a gift tribute
*GiftTributeApi* | [**editGiftTributeAcknowledgee**](docs/Api/GiftTributeApi.md#editgifttributeacknowledgee) | **PATCH** /v1/re/gifttribute/acknowledgees/{giftTributeAcknowledgeeId} | Edit a gift tribute acknowledgee
*GiftTributeApi* | [**getAllGiftTributes**](docs/Api/GiftTributeApi.md#getallgifttributes) | **GET** /v1/re/gifttribute | Get all gift tributes
*GiftTributeApi* | [**getGiftTributeById**](docs/Api/GiftTributeApi.md#getgifttributebyid) | **GET** /v1/re/gifttribute/{giftTributeId} | Get a gift tribute by ID
*GiftTributeApi* | [**getGiftTributeByImportId**](docs/Api/GiftTributeApi.md#getgifttributebyimportid) | **GET** /v1/re/gifttribute/importid/{importId} | Get a gift tribute by import ID
*GiftTributeApi* | [**listGiftTributeAcknowledgees**](docs/Api/GiftTributeApi.md#listgifttributeacknowledgees) | **GET** /v1/re/gifttribute/{giftTributeId}/acknowledgees | List gift tribute acknowledgees
*GiftTributeApi* | [**listGiftTributes**](docs/Api/GiftTributeApi.md#listgifttributes) | **GET** /v1/re/gifttribute/gift/{giftId} | List gift tributes
*NameFormatsApi* | [**createNameFormatConfiguration**](docs/Api/NameFormatsApi.md#createnameformatconfiguration) | **POST** /v1/re/nameformatconfigurations | Create a name format configuration
*NameFormatsApi* | [**createNameFormatConfigurationField**](docs/Api/NameFormatsApi.md#createnameformatconfigurationfield) | **POST** /v1/re/nameformatconfigurations/fields | Create a name format configuration field
*NameFormatsApi* | [**deleteNameFormatConfiguration**](docs/Api/NameFormatsApi.md#deletenameformatconfiguration) | **DELETE** /v1/re/nameformatconfigurations/{id} | Delete a name format configuration
*NameFormatsApi* | [**deleteNameFormatConfigurationField**](docs/Api/NameFormatsApi.md#deletenameformatconfigurationfield) | **DELETE** /v1/re/nameformatconfigurations/fields/{id} | Delete a name format configuration field
*NameFormatsApi* | [**editNameFormatConfiguration**](docs/Api/NameFormatsApi.md#editnameformatconfiguration) | **PATCH** /v1/re/nameformatconfigurations/{id} | Edit a name format configuration
*NameFormatsApi* | [**editNameFormatConfigurationField**](docs/Api/NameFormatsApi.md#editnameformatconfigurationfield) | **PATCH** /v1/re/nameformatconfigurations/fields/{id} | Edit a name format configuration field
*NameFormatsApi* | [**getNameFormatConfiguration**](docs/Api/NameFormatsApi.md#getnameformatconfiguration) | **GET** /v1/re/nameformatconfigurations/{id} | Get a name format configuration
*NameFormatsApi* | [**getNameFormatConfigurationField**](docs/Api/NameFormatsApi.md#getnameformatconfigurationfield) | **GET** /v1/re/nameformatconfigurations/fields/{id} | Get a name format configuration field
*NameFormatsApi* | [**getNameFormatConfigurationFieldsList**](docs/Api/NameFormatsApi.md#getnameformatconfigurationfieldslist) | **GET** /v1/re/nameformatconfigurations/fields | Get name format configuration fields list
*NameFormatsApi* | [**getNameFormatConfigurationList**](docs/Api/NameFormatsApi.md#getnameformatconfigurationlist) | **GET** /v1/re/nameformatconfigurations | Get name format configuration list
*PhoneTypeApi* | [**createPhoneType**](docs/Api/PhoneTypeApi.md#createphonetype) | **POST** /v1/re/phonetypes | Create a phone type
*PhoneTypeApi* | [**deletePhoneType**](docs/Api/PhoneTypeApi.md#deletephonetype) | **DELETE** /v1/re/phonetypes/{id} | Delete a phone type
*PhoneTypeApi* | [**editPhoneType**](docs/Api/PhoneTypeApi.md#editphonetype) | **PATCH** /v1/re/phonetypes/{id} | Edit a phone type
*PhoneTypeApi* | [**getPhoneType**](docs/Api/PhoneTypeApi.md#getphonetype) | **GET** /v1/re/phonetypes/{id} | Get a phone type
*PhoneTypeApi* | [**getPhoneTypesList**](docs/Api/PhoneTypeApi.md#getphonetypeslist) | **GET** /v1/re/phonetypes | Get phone types list
*ProposalApi* | [**deleteProposal**](docs/Api/ProposalApi.md#deleteproposal) | **DELETE** /v1/re/proposals/{id} | Delete a proposal
*RelationshipApi* | [**getConstituentRelationshipsForFund**](docs/Api/RelationshipApi.md#getconstituentrelationshipsforfund) | **GET** /v1/re/relationships/constituents/fund/{fundId} | Get constituent relationships for fund
*RelationshipApi* | [**getFundRelationshipsForConstituent**](docs/Api/RelationshipApi.md#getfundrelationshipsforconstituent) | **GET** /v1/re/relationships/funds/constituent/{constituentId} | Get fund relationships for constituent
*TributeApi* | [**createTribute**](docs/Api/TributeApi.md#createtribute) | **POST** /v1/re/tribute | Create a tribute
*TributeApi* | [**createTributeAcknowledgee**](docs/Api/TributeApi.md#createtributeacknowledgee) | **POST** /v1/re/tribute/acknowledgee | Create a tribute acknowledgee
*TributeApi* | [**deleteTribute**](docs/Api/TributeApi.md#deletetribute) | **DELETE** /v1/re/tribute/{id} | Delete a tribute
*TributeApi* | [**getTribute**](docs/Api/TributeApi.md#gettribute) | **GET** /v1/re/tribute/{id} | Get a tribute
*TributeApi* | [**getTributeAcknowledgeesByTributeId**](docs/Api/TributeApi.md#gettributeacknowledgeesbytributeid) | **GET** /v1/re/tribute/{tributeId}/acknowledgees | Get tribute acknowledgees by tribute id
*TributeApi* | [**getTributeByImportId**](docs/Api/TributeApi.md#gettributebyimportid) | **GET** /v1/re/tribute/importid/{importid} | Get a tribute by import id
*TributeApi* | [**getTributeList**](docs/Api/TributeApi.md#gettributelist) | **GET** /v1/re/tribute | Get tribute list
*TributeApi* | [**getTributesByConstituentId**](docs/Api/TributeApi.md#gettributesbyconstituentid) | **GET** /v1/re/tribute/constituent/{constituentId} | Get tributes by constituent id
*UserApi* | [**getUser**](docs/Api/UserApi.md#getuser) | **GET** /v1/re/users/{id} | Get information about a user

## Models

- [Appeal](docs/Model/Appeal.md)
- [AppealCollection](docs/Model/AppealCollection.md)
- [AppealCreate](docs/Model/AppealCreate.md)
- [AppealEdit](docs/Model/AppealEdit.md)
- [Campaign](docs/Model/Campaign.md)
- [CampaignCollection](docs/Model/CampaignCollection.md)
- [CampaignCreate](docs/Model/CampaignCreate.md)
- [CampaignEdit](docs/Model/CampaignEdit.md)
- [CodeTable](docs/Model/CodeTable.md)
- [CodeTableCollection](docs/Model/CodeTableCollection.md)
- [CodeTableCreate](docs/Model/CodeTableCreate.md)
- [CodeTableEdit](docs/Model/CodeTableEdit.md)
- [Constituent](docs/Model/Constituent.md)
- [ConstituentAppealCreate](docs/Model/ConstituentAppealCreate.md)
- [ConstituentAppealEdit](docs/Model/ConstituentAppealEdit.md)
- [ConstituentByFundCollection](docs/Model/ConstituentByFundCollection.md)
- [ConstituentCollection](docs/Model/ConstituentCollection.md)
- [ConstituentIdMap](docs/Model/ConstituentIdMap.md)
- [ConstituentSearchResult](docs/Model/ConstituentSearchResult.md)
- [Country](docs/Model/Country.md)
- [CountryCollection](docs/Model/CountryCollection.md)
- [CountryCreate](docs/Model/CountryCreate.md)
- [CountryEdit](docs/Model/CountryEdit.md)
- [CustomFieldCategory](docs/Model/CustomFieldCategory.md)
- [CustomFieldCategoryCollection](docs/Model/CustomFieldCategoryCollection.md)
- [CustomFieldCategoryCreate](docs/Model/CustomFieldCategoryCreate.md)
- [CustomFieldCategoryEdit](docs/Model/CustomFieldCategoryEdit.md)
- [Fund](docs/Model/Fund.md)
- [FundCollection](docs/Model/FundCollection.md)
- [FundCreate](docs/Model/FundCreate.md)
- [FundEdit](docs/Model/FundEdit.md)
- [FuzzyDate](docs/Model/FuzzyDate.md)
- [GiftAidTaxDeclaration](docs/Model/GiftAidTaxDeclaration.md)
- [GiftAidTaxDeclarationCollection](docs/Model/GiftAidTaxDeclarationCollection.md)
- [GiftAidTaxDeclarationCreate](docs/Model/GiftAidTaxDeclarationCreate.md)
- [GiftAidTaxDeclarationEdit](docs/Model/GiftAidTaxDeclarationEdit.md)
- [GiftIdMap](docs/Model/GiftIdMap.md)
- [GiftNote](docs/Model/GiftNote.md)
- [GiftNoteCollection](docs/Model/GiftNoteCollection.md)
- [GiftNoteCreate](docs/Model/GiftNoteCreate.md)
- [GiftNoteEdit](docs/Model/GiftNoteEdit.md)
- [GiftTribute](docs/Model/GiftTribute.md)
- [GiftTributeAcknowledgee](docs/Model/GiftTributeAcknowledgee.md)
- [GiftTributeAcknowledgeeCollection](docs/Model/GiftTributeAcknowledgeeCollection.md)
- [GiftTributeAcknowledgeeEdit](docs/Model/GiftTributeAcknowledgeeEdit.md)
- [GiftTributeCollection](docs/Model/GiftTributeCollection.md)
- [GiftTributeCreate](docs/Model/GiftTributeCreate.md)
- [GiftTributeEdit](docs/Model/GiftTributeEdit.md)
- [ImportIdMap](docs/Model/ImportIdMap.md)
- [NameFormatConfiguration](docs/Model/NameFormatConfiguration.md)
- [NameFormatConfigurationCollection](docs/Model/NameFormatConfigurationCollection.md)
- [NameFormatConfigurationCreate](docs/Model/NameFormatConfigurationCreate.md)
- [NameFormatConfigurationEdit](docs/Model/NameFormatConfigurationEdit.md)
- [NameFormatConfigurationField](docs/Model/NameFormatConfigurationField.md)
- [NameFormatConfigurationFieldCollection](docs/Model/NameFormatConfigurationFieldCollection.md)
- [NameFormatConfigurationFieldCreate](docs/Model/NameFormatConfigurationFieldCreate.md)
- [NameFormatConfigurationFieldDetail](docs/Model/NameFormatConfigurationFieldDetail.md)
- [NameFormatConfigurationFieldEdit](docs/Model/NameFormatConfigurationFieldEdit.md)
- [NameFormatConfigurationForList](docs/Model/NameFormatConfigurationForList.md)
- [PhoneType](docs/Model/PhoneType.md)
- [PhoneTypeCollection](docs/Model/PhoneTypeCollection.md)
- [PhoneTypeCreate](docs/Model/PhoneTypeCreate.md)
- [PhoneTypeEdit](docs/Model/PhoneTypeEdit.md)
- [PostResponse](docs/Model/PostResponse.md)
- [Relationship](docs/Model/Relationship.md)
- [RelationshipCollection](docs/Model/RelationshipCollection.md)
- [TableEntry](docs/Model/TableEntry.md)
- [TableEntryCollection](docs/Model/TableEntryCollection.md)
- [TableEntryCreate](docs/Model/TableEntryCreate.md)
- [TableEntryEdit](docs/Model/TableEntryEdit.md)
- [Tribute](docs/Model/Tribute.md)
- [TributeAcknowledgee](docs/Model/TributeAcknowledgee.md)
- [TributeAcknowledgeeCollection](docs/Model/TributeAcknowledgeeCollection.md)
- [TributeAcknowledgeeCreate](docs/Model/TributeAcknowledgeeCreate.md)
- [TributeCollection](docs/Model/TributeCollection.md)
- [TributeCreate](docs/Model/TributeCreate.md)
- [User](docs/Model/User.md)

## Authorization

Authentication schemes defined for the API:
### apiKeyHeader

- **Type**: API key
- **API key parameter name**: Bb-Api-Subscription-Key
- **Location**: HTTP header


### apiKeyQuery

- **Type**: API key
- **API key parameter name**: subscription-key
- **Location**: URL query string


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0`
    - Generator version: `7.4.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
