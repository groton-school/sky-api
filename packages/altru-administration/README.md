# OpenAPIClient-php

Altru Administration SKY API


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
      "url": "https://github.com/groton-school/sky-api.altru-administration.git"
    }
  ],
  "require": {
    "groton-school/sky-api.altru-administration": "*@dev"
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
$config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKey('Bb-Api-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\Altru\Administration\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Bb-Api-Subscription-Key', 'Bearer');


$apiInstance = new SKY\Altru\Administration\Api\AdministrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$codeTableName = 'codeTableName_example'; // string | The name of the code table.
$newCodeTableEntry = {"table_entry_description":"Annual","table_entry_id":"e6c79f33-841b-4a96-80b2-3d185944ecc9","inactive":false,"sequence":1}; // \SKY\Altru\Administration\Model\NewCodeTableEntry | ConfigurationMessage object representing operation intended to be created

try {
    $result = $apiInstance->createCodeTableEntry($codeTableName, $newCodeTableEntry);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdministrationApi->createCodeTableEntry: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.sky.blackbaud.com/alt-adnmg*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AdministrationApi* | [**createCodeTableEntry**](docs/Api/AdministrationApi.md#createcodetableentry) | **POST** /codetables/entry/{code_table_name} | Create a code table entry
*AdministrationApi* | [**deleteCodeTableEntry**](docs/Api/AdministrationApi.md#deletecodetableentry) | **DELETE** /codetables/{code_table_name}/codetableentryid/{entry_id} | Delete code table entry
*AdministrationApi* | [**getCodeTableEntryDescription**](docs/Api/AdministrationApi.md#getcodetableentrydescription) | **GET** /codetables/{code_table_name}/entryid/{entry_id} | Get a code table entry description by Id
*AdministrationApi* | [**getCodeTableEntryId**](docs/Api/AdministrationApi.md#getcodetableentryid) | **GET** /codetables/{code_table_name}/entrydescription/{entry_description} | Get code table entry Id by description
*AdministrationApi* | [**listCodeTable**](docs/Api/AdministrationApi.md#listcodetable) | **GET** /codetables/{code_table_id}/list | List code table
*AdministrationApi* | [**listCodeTableEntries**](docs/Api/AdministrationApi.md#listcodetableentries) | **GET** /codetables/{code_table_name}/entries | List code table entries
*AdministrationApi* | [**searchSite**](docs/Api/AdministrationApi.md#searchsite) | **GET** /sites/search | Search for site
*AdministrationApi* | [**simpleListLoad**](docs/Api/AdministrationApi.md#simplelistload) | **GET** /simplelists/{simple_list_id} | Simple list load
*AdministrationApi* | [**simpleListTranslation**](docs/Api/AdministrationApi.md#simplelisttranslation) | **GET** /simplelists/translation/{simple_list_id} | Simple list translation
*AdministrationApi* | [**updateCodeTableEntry**](docs/Api/AdministrationApi.md#updatecodetableentry) | **PATCH** /codetables/entry/{code_table_name} | Update a code table entry
*CurrencyApi* | [**viewCurrencyConfiguration**](docs/Api/CurrencyApi.md#viewcurrencyconfiguration) | **GET** /currencies/{currency_id}/currencyconfiguration | View a currency configuration

## Models

- [ApiCollectionSimpleListLoad](docs/Model/ApiCollectionSimpleListLoad.md)
- [CodeTableEntry](docs/Model/CodeTableEntry.md)
- [CodeTableEntryCollection](docs/Model/CodeTableEntryCollection.md)
- [CodeTableEntryDescription](docs/Model/CodeTableEntryDescription.md)
- [CodeTableEntryId](docs/Model/CodeTableEntryId.md)
- [CodeTableListCollection](docs/Model/CodeTableListCollection.md)
- [CodeTableListSummary](docs/Model/CodeTableListSummary.md)
- [CurrencyConfigurationView](docs/Model/CurrencyConfigurationView.md)
- [NewCodeTableEntry](docs/Model/NewCodeTableEntry.md)
- [PostResponse](docs/Model/PostResponse.md)
- [ProblemDetails](docs/Model/ProblemDetails.md)
- [SimpleListLoad](docs/Model/SimpleListLoad.md)
- [SimpleListTranslation](docs/Model/SimpleListTranslation.md)
- [SimpleListrows](docs/Model/SimpleListrows.md)
- [SiteSearchCollection](docs/Model/SiteSearchCollection.md)
- [SiteSearchSummary](docs/Model/SiteSearchSummary.md)
- [UpdateCodeTable](docs/Model/UpdateCodeTable.md)

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
