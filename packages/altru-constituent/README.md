# OpenAPIClient-php

Altru Constituent SKY API


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
      "url": "https://github.com/groton-school/sky-api.altru-constituent.git"
    }
  ],
  "require": {
    "groton-school/sky-api.altru-constituent": "*@dev"
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
$config = SKY\Altru\Constituent\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\Altru\Constituent\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = SKY\Altru\Constituent\Configuration::getDefaultConfiguration()->setApiKey('Bb-Api-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\Altru\Constituent\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Bb-Api-Subscription-Key', 'Bearer');


$apiInstance = new SKY\Altru\Constituent\Api\ConstituentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newConstituent = {"last_name":"","first_name":"","middle_name":"","title":"","suffix":"","nick_name":"","maiden_name":"","birth_date":"","gender":"Unknown","marital_status":"","address_type":"","address_country":"","address_block":"","address_city":"","address_state":"","address_post_code":"","address_do_not_mail":false,"address_do_not_mail_reason":"","phone_type":"","phone_number":"","email_address_type":"","email_address":"","skip_adding_security_groups":false,"existing_spouse":false,"spouse_id":"","spouse_last_name":"","spouse_first_name":"","spouse_middle_name":"","spouse_title":"","spouse_suffix":"","spouse_nick_name":"","spouse_maiden_name":"","spouse_birth_date":"","spouse_gender":"Unknown","spouse_relationshiptypecode":"","spouse_reciprocaltypecode":"","spouse_start_date":"","copy_primary_information":false,"primary_soft_credit_relationship_exists":false,"primary_soft_credit_match_factor":0,"reciprocal_soft_credit_relationship_exists":false,"reciprocal_soft_credit_match_factor":0,"existing_organization":false,"organization_id":"","organization_name":"","organization_address_type":"","organization_country":"","organization_address_block":"","organization_city":"","organization_state":"","organization_post_code":"","organization_do_not_mail":false,"organization_do_not_mail_reason":"","organization_phone_type":"","organization_number":"","organization_relationshiptypecode":"","organization_reciprocaltypecode":"","organization_start_date":"","organization_end_date":"","contact":false,"contact_type":"","primary_contact":false,"position":"","matching_gift_relationship":false,"reciprocal_recognition_type":"","primary_recognition_type":"","address_omit_from_validation":false,"address_dpc":"","address_cart":"","address_lot":"","address_county":"","address_congressional_district":"","address_last_validation_attempt_date":"","address_validation_message":"","address_certification_data":0,"organization_omit_from_validation":false,"organization_dpc":"","organization_cart":"","organization_lot":"","organization_county":"","organization_congressional_district":"","organization_last_validation_attempt_date":"","organization_validation_message":"","organization_certification_data":0,"validation_countries":[{"country_id":"","browsable":false}],"zip_lookup_countries":[{"country_id":"","country_name":""}],"spouse_relationship":false,"house_hold_copy_primary_contact_info":false,"job_category":"","career_level":"","address_info_source":"","organization_info_source":"","title_2":"","suffix_2":"","spouse_title_2":"","spouse_suffix_2":"","skip_adding_sites":false,"constituent_type":0,"organization_primary_soft_credit_relationship_exists":false,"organization_primary_soft_credit_match_factor":0,"organization_reciprocal_soft_credit_relationship_exists":false,"organization_reciprocal_soft_credit_match_factor":0,"organization_primary_recognition_type":"","organization_reciprocal_recognition_type":"","optoutads":false,"optoutsale":false,"gpc":false}; // \SKY\Altru\Constituent\Model\NewConstituent | ConfigurationMessage object representing operation intended to be created

try {
    $result = $apiInstance->createConstituent($newConstituent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstituentApi->createConstituent: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.sky.blackbaud.com/alt-conmg*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ConstituentApi* | [**createConstituent**](docs/Api/ConstituentApi.md#createconstituent) | **POST** /constituents | Create a constituent
*ConstituentApi* | [**createConstituentAddress**](docs/Api/ConstituentApi.md#createconstituentaddress) | **POST** /addresses | Create a constituent address
*ConstituentApi* | [**createConstituentAlternateLookupId**](docs/Api/ConstituentApi.md#createconstituentalternatelookupid) | **POST** /alternatelookupids | Create a constituent alternate lookup id
*ConstituentApi* | [**createConstituentAppeal**](docs/Api/ConstituentApi.md#createconstituentappeal) | **POST** /constituentappeals | Create a constituent appeal
*ConstituentApi* | [**createConstituentAppealResponse**](docs/Api/ConstituentApi.md#createconstituentappealresponse) | **POST** /constituentappealresponses | Create a constituent appeal response
*ConstituentApi* | [**createConstituentAttribute**](docs/Api/ConstituentApi.md#createconstituentattribute) | **POST** /constituentattributes | Create a constituent attribute
*ConstituentApi* | [**createConstituentCorrespondenceCode**](docs/Api/ConstituentApi.md#createconstituentcorrespondencecode) | **POST** /constituentcorrespondencecodes | Create a constituent correspondence code
*ConstituentApi* | [**createConstituentEmailAddress**](docs/Api/ConstituentApi.md#createconstituentemailaddress) | **POST** /emailaddresses | Create a constituent email address
*ConstituentApi* | [**createConstituentFundraiser**](docs/Api/ConstituentApi.md#createconstituentfundraiser) | **POST** /fundraisers | Create a constituent fundraiser
*ConstituentApi* | [**createConstituentInteraction**](docs/Api/ConstituentApi.md#createconstituentinteraction) | **POST** /interactions | Create a constituent interaction
*ConstituentApi* | [**createConstituentNote**](docs/Api/ConstituentApi.md#createconstituentnote) | **POST** /constituentnotes | Create a constituent note
*ConstituentApi* | [**createConstituentPhone**](docs/Api/ConstituentApi.md#createconstituentphone) | **POST** /phones | Create a constituent phone
*ConstituentApi* | [**createConstituentSolicitCode**](docs/Api/ConstituentApi.md#createconstituentsolicitcode) | **POST** /solicitcodes | Create a constituent solicit code
*ConstituentApi* | [**createEducation**](docs/Api/ConstituentApi.md#createeducation) | **POST** /educationalhistories | Create an education
*ConstituentApi* | [**createIndividual**](docs/Api/ConstituentApi.md#createindividual) | **POST** /individuals | Create an individual
*ConstituentApi* | [**createMergeTwoConstituents**](docs/Api/ConstituentApi.md#createmergetwoconstituents) | **POST** /mergetwoconstituents | Create merge two constituents
*ConstituentApi* | [**createOrganization**](docs/Api/ConstituentApi.md#createorganization) | **POST** /organizations | Create an organization
*ConstituentApi* | [**createRelationshipJobInfo**](docs/Api/ConstituentApi.md#createrelationshipjobinfo) | **POST** /relationshipjobsinfo | Create a Relationship Job Info
*ConstituentApi* | [**createTribute**](docs/Api/ConstituentApi.md#createtribute) | **POST** /tribute | Create a tribute
*ConstituentApi* | [**deleteConstituent**](docs/Api/ConstituentApi.md#deleteconstituent) | **DELETE** /constituents/{constituent_id} | Delete a constituent
*ConstituentApi* | [**deleteConstituentAddress**](docs/Api/ConstituentApi.md#deleteconstituentaddress) | **DELETE** /addresses/{address_id} | Delete a constituent address
*ConstituentApi* | [**deleteConstituentAlternateLookupId**](docs/Api/ConstituentApi.md#deleteconstituentalternatelookupid) | **DELETE** /alternatelookupids/{alternate_lookup_id_id} | Delete a constituent alternate lookup id
*ConstituentApi* | [**deleteConstituentAppeal**](docs/Api/ConstituentApi.md#deleteconstituentappeal) | **DELETE** /constituentappeals/{constituent_appeal_id} | Delete a constituent appeal
*ConstituentApi* | [**deleteConstituentAttribute**](docs/Api/ConstituentApi.md#deleteconstituentattribute) | **DELETE** /constituentattributes/{constituent_attribute_id} | Delete a constituent attribute
*ConstituentApi* | [**deleteConstituentCorrespondenceCode**](docs/Api/ConstituentApi.md#deleteconstituentcorrespondencecode) | **DELETE** /constituentcorrespondencecodes/{constituent_correspondence_id} | Delete a constituent correspondence code
*ConstituentApi* | [**deleteConstituentEmailAddress**](docs/Api/ConstituentApi.md#deleteconstituentemailaddress) | **DELETE** /emailaddresses/{email_address_id} | Delete a constituent email address
*ConstituentApi* | [**deleteConstituentFundraiser**](docs/Api/ConstituentApi.md#deleteconstituentfundraiser) | **DELETE** /fundraisers/{fundraiser_date_range_id} | Delete a constituent fundraiser
*ConstituentApi* | [**deleteConstituentInteraction**](docs/Api/ConstituentApi.md#deleteconstituentinteraction) | **DELETE** /interactions/{constituent_interaction_id} | Delete a constituent interaction
*ConstituentApi* | [**deleteConstituentNote**](docs/Api/ConstituentApi.md#deleteconstituentnote) | **DELETE** /constituentnotes/{constituent_note_id} | Delete a constituent note
*ConstituentApi* | [**deleteConstituentPhone**](docs/Api/ConstituentApi.md#deleteconstituentphone) | **DELETE** /phones/{phone_id} | Delete a constituent phone
*ConstituentApi* | [**deleteConstituentSolicitCode**](docs/Api/ConstituentApi.md#deleteconstituentsolicitcode) | **DELETE** /solicitcodes/{constituent_solicit_code_id} | Delete a constituent solicit code
*ConstituentApi* | [**deleteEducation**](docs/Api/ConstituentApi.md#deleteeducation) | **DELETE** /educationalhistories/{educational_history_id} | Delete an education
*ConstituentApi* | [**deleteRelationshipJobInfo**](docs/Api/ConstituentApi.md#deleterelationshipjobinfo) | **DELETE** /relationshipjobsinfo/{relationship_job_information_id} | Delete a Relationship Job Info
*ConstituentApi* | [**deleteTribute**](docs/Api/ConstituentApi.md#deletetribute) | **DELETE** /tributes/{revenue_tribute_id} | Delete a tribute
*ConstituentApi* | [**getConstituentAddress**](docs/Api/ConstituentApi.md#getconstituentaddress) | **GET** /addresses/{address_id} | Get a constituent address
*ConstituentApi* | [**getConstituentAlternateLookupId**](docs/Api/ConstituentApi.md#getconstituentalternatelookupid) | **GET** /alternatelookupids/{alternate_lookup_id_id} | Get a constituent alternate lookup id
*ConstituentApi* | [**getConstituentAppeal**](docs/Api/ConstituentApi.md#getconstituentappeal) | **GET** /constituentappeals/{constituent_appeal_id} | Get a constituent appeal
*ConstituentApi* | [**getConstituentAppealResponse**](docs/Api/ConstituentApi.md#getconstituentappealresponse) | **GET** /constituentappealresponses/{constituent_appeal_id} | Get a constituent appeal response
*ConstituentApi* | [**getConstituentAttribute**](docs/Api/ConstituentApi.md#getconstituentattribute) | **GET** /constituentattributes/{constituent_attribute_id} | Get a constituent attribute
*ConstituentApi* | [**getConstituentCorrespondenceCode**](docs/Api/ConstituentApi.md#getconstituentcorrespondencecode) | **GET** /constituentcorrespondencecodes/{constituent_correspondence_id} | Get a constituent correspondence code
*ConstituentApi* | [**getConstituentCorrespondenceCodeResponse**](docs/Api/ConstituentApi.md#getconstituentcorrespondencecoderesponse) | **GET** /constituentcorrespondencecodes/{constituent_correspondence_id}/response | Get a constituent correspondence code response
*ConstituentApi* | [**getConstituentEmailAddress**](docs/Api/ConstituentApi.md#getconstituentemailaddress) | **GET** /emailaddresses/{email_address_id} | Get a constituent email address
*ConstituentApi* | [**getConstituentFundraiser**](docs/Api/ConstituentApi.md#getconstituentfundraiser) | **GET** /fundraisers/{fundraiser_date_range_id} | Get a constituent fundraiser
*ConstituentApi* | [**getConstituentInteraction**](docs/Api/ConstituentApi.md#getconstituentinteraction) | **GET** /interactions/{constituent_interaction_id} | Get a constituent interaction
*ConstituentApi* | [**getConstituentPhone**](docs/Api/ConstituentApi.md#getconstituentphone) | **GET** /phones/{phone_id} | Get a constituent phone
*ConstituentApi* | [**getConstituentSolicitCode**](docs/Api/ConstituentApi.md#getconstituentsolicitcode) | **GET** /solicitcodes/{constituent_solicit_code_id} | Get a constituent solicit code
*ConstituentApi* | [**getEducation**](docs/Api/ConstituentApi.md#geteducation) | **GET** /educationalhistories/{educational_history_id} | Get an education
*ConstituentApi* | [**getIndividual**](docs/Api/ConstituentApi.md#getindividual) | **GET** /individuals/{constituent_id} | Get an individual
*ConstituentApi* | [**getOrganization**](docs/Api/ConstituentApi.md#getorganization) | **GET** /organizations/{constituent_id} | Get an organization
*ConstituentApi* | [**getRelationshipJobInfo**](docs/Api/ConstituentApi.md#getrelationshipjobinfo) | **GET** /relationshipjobsinfo/{relationship_job_information_id} | Get a Relationship Job Info
*ConstituentApi* | [**getTribute**](docs/Api/ConstituentApi.md#gettribute) | **GET** /tribute/{revenue_tribute_id} | Get a tribute
*ConstituentApi* | [**listConstituentAddress**](docs/Api/ConstituentApi.md#listconstituentaddress) | **GET** /constituents/{constituent_id}/addresses | List constituent address
*ConstituentApi* | [**listConstituentAlternateLookupId**](docs/Api/ConstituentApi.md#listconstituentalternatelookupid) | **GET** /constituents/{constituent_id}/alternatelookupids | List constituent alternate lookup id
*ConstituentApi* | [**listConstituentAppeal**](docs/Api/ConstituentApi.md#listconstituentappeal) | **GET** /constituentappeals/{constituent_id}/appeals | List constituent appeal
*ConstituentApi* | [**listConstituentAttribute**](docs/Api/ConstituentApi.md#listconstituentattribute) | **GET** /constituents/{constituent_id}/constituentattributelist | List constituent attribute
*ConstituentApi* | [**listConstituentDuplicateMatch**](docs/Api/ConstituentApi.md#listconstituentduplicatematch) | **GET** /constituents/constituentduplicatematch | List constituent duplicate match
*ConstituentApi* | [**listConstituentEmailAddress**](docs/Api/ConstituentApi.md#listconstituentemailaddress) | **GET** /constituents/{constituent_id}/emailaddresses | List constituent email address
*ConstituentApi* | [**listConstituentFundraiser**](docs/Api/ConstituentApi.md#listconstituentfundraiser) | **GET** /fundraisers/List | List constituent fundraiser
*ConstituentApi* | [**listConstituentInactivityReasonCodes**](docs/Api/ConstituentApi.md#listconstituentinactivityreasoncodes) | **GET** /constituentinactivityreasoncodes | List constituent inactivity reason codes
*ConstituentApi* | [**listConstituentMemberships**](docs/Api/ConstituentApi.md#listconstituentmemberships) | **GET** /constituent/{constituent_id}/constituentmemberships | List constituent memberships
*ConstituentApi* | [**listConstituentMergeConfiguration**](docs/Api/ConstituentApi.md#listconstituentmergeconfiguration) | **GET** /constituentmergeconfiguration | List constituent merge configuration
*ConstituentApi* | [**listConstituentPhone**](docs/Api/ConstituentApi.md#listconstituentphone) | **GET** /constituents/{constituent_id}/phones | List constituent phone
*ConstituentApi* | [**listConstituentSolicitCode**](docs/Api/ConstituentApi.md#listconstituentsolicitcode) | **GET** /constituents/{constituent_id}/solicitcodes | List constituent solicit code
*ConstituentApi* | [**listContactEmailAddress**](docs/Api/ConstituentApi.md#listcontactemailaddress) | **GET** /constituents/{constituent_id}/contactinformationemailaddress | List contact email address
*ConstituentApi* | [**listContactInformationPhone**](docs/Api/ConstituentApi.md#listcontactinformationphone) | **GET** /constituents/{constituent_id}/contactinformationphone | List contact information phone
*ConstituentApi* | [**listEducation**](docs/Api/ConstituentApi.md#listeducation) | **GET** /constituents/{constituent_id}/educationalhistories | List education
*ConstituentApi* | [**listPatronData**](docs/Api/ConstituentApi.md#listpatrondata) | **GET** /constituents/{constituent_id}/patrondata | List patron data
*ConstituentApi* | [**listPatronOrders**](docs/Api/ConstituentApi.md#listpatronorders) | **GET** /constituents/{constituent_id}/patronorders | List patron orders
*ConstituentApi* | [**listProspectPlan**](docs/Api/ConstituentApi.md#listprospectplan) | **GET** /fundraisers/{constituent_id}/prospectplanlist | List constituent fundraiser
*ConstituentApi* | [**listRelationshipJobInfo**](docs/Api/ConstituentApi.md#listrelationshipjobinfo) | **GET** /constituents/{constituent_id}/relationshipjobsinfo | List Relationship Job Info
*ConstituentApi* | [**listState**](docs/Api/ConstituentApi.md#liststate) | **GET** /states/{country_id} | List state
*ConstituentApi* | [**listTribute**](docs/Api/ConstituentApi.md#listtribute) | **GET** /constituents/{constituent_id}/tributes | List tribute
*ConstituentApi* | [**searchConstituent**](docs/Api/ConstituentApi.md#searchconstituent) | **GET** /constituents/search | Search for constituent
*ConstituentApi* | [**searchConstituentAddress**](docs/Api/ConstituentApi.md#searchconstituentaddress) | **GET** /addresses/search | Search for constituent address
*ConstituentApi* | [**searchConstituentFundraiser**](docs/Api/ConstituentApi.md#searchconstituentfundraiser) | **GET** /constituents/fundraisersearch | Search for constituent fundraiser
*ConstituentApi* | [**searchTribute**](docs/Api/ConstituentApi.md#searchtribute) | **GET** /tributes/search | Search for tribute
*ConstituentApi* | [**updateConstituentAddress**](docs/Api/ConstituentApi.md#updateconstituentaddress) | **PATCH** /addresses/{address_id} | Update a constituent address
*ConstituentApi* | [**updateConstituentAlternateLookupId**](docs/Api/ConstituentApi.md#updateconstituentalternatelookupid) | **PATCH** /alternatelookupids/{alternate_lookup_id_id} | Update a constituent alternate lookup id
*ConstituentApi* | [**updateConstituentAppeal**](docs/Api/ConstituentApi.md#updateconstituentappeal) | **PATCH** /constituentappeals/{constituent_appeal_id} | Update a constituent appeal
*ConstituentApi* | [**updateConstituentAppealResponse**](docs/Api/ConstituentApi.md#updateconstituentappealresponse) | **PATCH** /constituentappealresponses/{constituent_appeal_id} | Update a constituent appeal response
*ConstituentApi* | [**updateConstituentAttribute**](docs/Api/ConstituentApi.md#updateconstituentattribute) | **PATCH** /constituentattributes/{constituent_attribute_id} | Update a constituent attribute
*ConstituentApi* | [**updateConstituentCorrespondenceCode**](docs/Api/ConstituentApi.md#updateconstituentcorrespondencecode) | **PATCH** /constituentcorrespondencecodes/{constituent_correspondence_id} | Update a constituent correspondence code
*ConstituentApi* | [**updateConstituentCorrespondenceCodeResponse**](docs/Api/ConstituentApi.md#updateconstituentcorrespondencecoderesponse) | **PATCH** /constituentcorrespondencecodes/{constituent_correspondence_id}/response | Update a constituent correspondence code response
*ConstituentApi* | [**updateConstituentEmailAddress**](docs/Api/ConstituentApi.md#updateconstituentemailaddress) | **PATCH** /emailaddresses/{email_address_id} | Update a constituent email address
*ConstituentApi* | [**updateConstituentFundraiser**](docs/Api/ConstituentApi.md#updateconstituentfundraiser) | **PATCH** /fundraisers/{fundraiser_date_range_id} | Update a constituent fundraiser
*ConstituentApi* | [**updateConstituentInteraction**](docs/Api/ConstituentApi.md#updateconstituentinteraction) | **PATCH** /interactions/{constituent_interaction_id} | Update a constituent interaction
*ConstituentApi* | [**updateConstituentNote**](docs/Api/ConstituentApi.md#updateconstituentnote) | **PATCH** /constituentnotes/{constituent_note_id} | Update a constituent note
*ConstituentApi* | [**updateConstituentPhone**](docs/Api/ConstituentApi.md#updateconstituentphone) | **PATCH** /phones/{phone_id} | Update a constituent phone
*ConstituentApi* | [**updateConstituentSolicitCode**](docs/Api/ConstituentApi.md#updateconstituentsolicitcode) | **PATCH** /solicitcodes/{constituent_solicit_code_id} | Update a constituent solicit code
*ConstituentApi* | [**updateEducation**](docs/Api/ConstituentApi.md#updateeducation) | **PATCH** /educationalhistories/{educational_history_id} | Update an education
*ConstituentApi* | [**updateIndividual**](docs/Api/ConstituentApi.md#updateindividual) | **PATCH** /individuals/{constituent_id} | Update an individual
*ConstituentApi* | [**updateOrganization**](docs/Api/ConstituentApi.md#updateorganization) | **PATCH** /organizations/{constituent_id} | Update an organization
*ConstituentApi* | [**updateRelationshipJobInfo**](docs/Api/ConstituentApi.md#updaterelationshipjobinfo) | **PATCH** /relationshipjobsinfo/{relationship_job_information_id} | Update a Relationship Job Info
*ConstituentApi* | [**updateTribute**](docs/Api/ConstituentApi.md#updatetribute) | **PATCH** /tribute/{revenue_tribute_id} | Update a tribute
*ConstituentApi* | [**viewConstituentAddress**](docs/Api/ConstituentApi.md#viewconstituentaddress) | **GET** /addresses/{address_id}/view | View a constituent address
*ConstituentApi* | [**viewConstituentNote**](docs/Api/ConstituentApi.md#viewconstituentnote) | **GET** /constituentnotes/{constituent_note_id}/view | View a constituent note
*ConstituentApi* | [**viewConstituentPrimaryContactInformation**](docs/Api/ConstituentApi.md#viewconstituentprimarycontactinformation) | **GET** /constituents/{constituent_id}/contactview | View constituent primary contact information
*ConstituentApi* | [**viewConstituentProfilePicture**](docs/Api/ConstituentApi.md#viewconstituentprofilepicture) | **GET** /constituents/{constituent_id}/profilepicture | View a constituent profile picture
*ConstituentApi* | [**viewConstituentSummaryProfile**](docs/Api/ConstituentApi.md#viewconstituentsummaryprofile) | **GET** /constituents/{constituent_id}/view | View a constituent summary profile
*ConstituentApi* | [**viewIndividualRecentRevenue**](docs/Api/ConstituentApi.md#viewindividualrecentrevenue) | **GET** /individuals/{constituent_id}/recentrevenueview | View an individual&#39;s recent revenue&#39;
*ConstituentApi* | [**viewIndividualRevenueSummary**](docs/Api/ConstituentApi.md#viewindividualrevenuesummary) | **GET** /individuals/{constituent_id}/revenuesummaryview | View an individual&#39;s revenue summary

## Models

- [ConstituentAddress](docs/Model/ConstituentAddress.md)
- [ConstituentAddressListCollection](docs/Model/ConstituentAddressListCollection.md)
- [ConstituentAddressListSummary](docs/Model/ConstituentAddressListSummary.md)
- [ConstituentAddressMatchinghouseholdmembers](docs/Model/ConstituentAddressMatchinghouseholdmembers.md)
- [ConstituentAddressSearchCollection](docs/Model/ConstituentAddressSearchCollection.md)
- [ConstituentAddressSearchSummary](docs/Model/ConstituentAddressSearchSummary.md)
- [ConstituentAddressValidationcountries](docs/Model/ConstituentAddressValidationcountries.md)
- [ConstituentAddressView](docs/Model/ConstituentAddressView.md)
- [ConstituentAddressZiplookupcountries](docs/Model/ConstituentAddressZiplookupcountries.md)
- [ConstituentAlternateLookupId](docs/Model/ConstituentAlternateLookupId.md)
- [ConstituentAlternateLookupIdListCollection](docs/Model/ConstituentAlternateLookupIdListCollection.md)
- [ConstituentAlternateLookupIdListSummary](docs/Model/ConstituentAlternateLookupIdListSummary.md)
- [ConstituentAppeal](docs/Model/ConstituentAppeal.md)
- [ConstituentAppealListCollection](docs/Model/ConstituentAppealListCollection.md)
- [ConstituentAppealListSummary](docs/Model/ConstituentAppealListSummary.md)
- [ConstituentAppealResponse](docs/Model/ConstituentAppealResponse.md)
- [ConstituentAppealResponseResponses](docs/Model/ConstituentAppealResponseResponses.md)
- [ConstituentAttribute](docs/Model/ConstituentAttribute.md)
- [ConstituentAttributeListCollection](docs/Model/ConstituentAttributeListCollection.md)
- [ConstituentAttributeListSummary](docs/Model/ConstituentAttributeListSummary.md)
- [ConstituentConstituenciesdisplayorder](docs/Model/ConstituentConstituenciesdisplayorder.md)
- [ConstituentContactListCollection](docs/Model/ConstituentContactListCollection.md)
- [ConstituentContactListSummary](docs/Model/ConstituentContactListSummary.md)
- [ConstituentCorrespondenceCode](docs/Model/ConstituentCorrespondenceCode.md)
- [ConstituentDuplicateMatchListCollection](docs/Model/ConstituentDuplicateMatchListCollection.md)
- [ConstituentDuplicateMatchListSummary](docs/Model/ConstituentDuplicateMatchListSummary.md)
- [ConstituentEmailAddress](docs/Model/ConstituentEmailAddress.md)
- [ConstituentEmailAddressListCollection](docs/Model/ConstituentEmailAddressListCollection.md)
- [ConstituentEmailAddressListSummary](docs/Model/ConstituentEmailAddressListSummary.md)
- [ConstituentEmailAddressMatchinghouseholdmembers](docs/Model/ConstituentEmailAddressMatchinghouseholdmembers.md)
- [ConstituentFundraiser](docs/Model/ConstituentFundraiser.md)
- [ConstituentFundraiserListCollection](docs/Model/ConstituentFundraiserListCollection.md)
- [ConstituentFundraiserListSummary](docs/Model/ConstituentFundraiserListSummary.md)
- [ConstituentFundraiserSearchCollection](docs/Model/ConstituentFundraiserSearchCollection.md)
- [ConstituentFundraiserSearchSummary](docs/Model/ConstituentFundraiserSearchSummary.md)
- [ConstituentInactivityReasonCodesListCollection](docs/Model/ConstituentInactivityReasonCodesListCollection.md)
- [ConstituentInactivityReasonCodesListSummary](docs/Model/ConstituentInactivityReasonCodesListSummary.md)
- [ConstituentInteraction](docs/Model/ConstituentInteraction.md)
- [ConstituentInteractionParticipants](docs/Model/ConstituentInteractionParticipants.md)
- [ConstituentInteractionSites](docs/Model/ConstituentInteractionSites.md)
- [ConstituentListCollection](docs/Model/ConstituentListCollection.md)
- [ConstituentListSummary](docs/Model/ConstituentListSummary.md)
- [ConstituentMembershipsListCollection](docs/Model/ConstituentMembershipsListCollection.md)
- [ConstituentMembershipsListSummary](docs/Model/ConstituentMembershipsListSummary.md)
- [ConstituentMergeListCollection](docs/Model/ConstituentMergeListCollection.md)
- [ConstituentMergeListSummary](docs/Model/ConstituentMergeListSummary.md)
- [ConstituentNoteView](docs/Model/ConstituentNoteView.md)
- [ConstituentPhone](docs/Model/ConstituentPhone.md)
- [ConstituentPhoneCountrycodes](docs/Model/ConstituentPhoneCountrycodes.md)
- [ConstituentPhoneListCollection](docs/Model/ConstituentPhoneListCollection.md)
- [ConstituentPhoneListSummary](docs/Model/ConstituentPhoneListSummary.md)
- [ConstituentPhoneMatchinghouseholdmembers](docs/Model/ConstituentPhoneMatchinghouseholdmembers.md)
- [ConstituentPrimaryContactInformationView](docs/Model/ConstituentPrimaryContactInformationView.md)
- [ConstituentProfilePictureView](docs/Model/ConstituentProfilePictureView.md)
- [ConstituentRevenueConstituentrevenuerecent](docs/Model/ConstituentRevenueConstituentrevenuerecent.md)
- [ConstituentSearchCollection](docs/Model/ConstituentSearchCollection.md)
- [ConstituentSearchSummary](docs/Model/ConstituentSearchSummary.md)
- [ConstituentSocialmediaaccounts](docs/Model/ConstituentSocialmediaaccounts.md)
- [ConstituentSolicitCode](docs/Model/ConstituentSolicitCode.md)
- [ConstituentSolicitCodeListCollection](docs/Model/ConstituentSolicitCodeListCollection.md)
- [ConstituentSolicitCodeListSummary](docs/Model/ConstituentSolicitCodeListSummary.md)
- [ConstituentStudentrelationconstituencies](docs/Model/ConstituentStudentrelationconstituencies.md)
- [ConstituentSummaryProfileView](docs/Model/ConstituentSummaryProfileView.md)
- [ConstituentUserdefinedconstituencies](docs/Model/ConstituentUserdefinedconstituencies.md)
- [Education](docs/Model/Education.md)
- [EducationAffiliatedadditionalinformation](docs/Model/EducationAffiliatedadditionalinformation.md)
- [EducationListCollection](docs/Model/EducationListCollection.md)
- [EducationListSummary](docs/Model/EducationListSummary.md)
- [EducationUnaffiliatedadditionalinformation](docs/Model/EducationUnaffiliatedadditionalinformation.md)
- [FuzzyDate](docs/Model/FuzzyDate.md)
- [HourMinute](docs/Model/HourMinute.md)
- [Individual](docs/Model/Individual.md)
- [IndividualRecentRevenueView](docs/Model/IndividualRecentRevenueView.md)
- [IndividualRevenueSummaryView](docs/Model/IndividualRevenueSummaryView.md)
- [MonthDay](docs/Model/MonthDay.md)
- [NewConstituent](docs/Model/NewConstituent.md)
- [NewConstituentAddress](docs/Model/NewConstituentAddress.md)
- [NewConstituentAddressValidationcountries](docs/Model/NewConstituentAddressValidationcountries.md)
- [NewConstituentAddressZiplookupcountries](docs/Model/NewConstituentAddressZiplookupcountries.md)
- [NewConstituentAlternateLookupId](docs/Model/NewConstituentAlternateLookupId.md)
- [NewConstituentAppeal](docs/Model/NewConstituentAppeal.md)
- [NewConstituentAppealResponse](docs/Model/NewConstituentAppealResponse.md)
- [NewConstituentAttribute](docs/Model/NewConstituentAttribute.md)
- [NewConstituentAttributeAttributecategories](docs/Model/NewConstituentAttributeAttributecategories.md)
- [NewConstituentCorrespondenceCode](docs/Model/NewConstituentCorrespondenceCode.md)
- [NewConstituentEmailAddress](docs/Model/NewConstituentEmailAddress.md)
- [NewConstituentFundraiser](docs/Model/NewConstituentFundraiser.md)
- [NewConstituentInteraction](docs/Model/NewConstituentInteraction.md)
- [NewConstituentInteractionParticipants](docs/Model/NewConstituentInteractionParticipants.md)
- [NewConstituentInteractionSites](docs/Model/NewConstituentInteractionSites.md)
- [NewConstituentMerge](docs/Model/NewConstituentMerge.md)
- [NewConstituentNote](docs/Model/NewConstituentNote.md)
- [NewConstituentPhone](docs/Model/NewConstituentPhone.md)
- [NewConstituentPhoneCountrycodes](docs/Model/NewConstituentPhoneCountrycodes.md)
- [NewConstituentSolicitCode](docs/Model/NewConstituentSolicitCode.md)
- [NewConstituentValidationcountries](docs/Model/NewConstituentValidationcountries.md)
- [NewConstituentZiplookupcountries](docs/Model/NewConstituentZiplookupcountries.md)
- [NewEducation](docs/Model/NewEducation.md)
- [NewEducationAffiliatedadditionalinformation](docs/Model/NewEducationAffiliatedadditionalinformation.md)
- [NewEducationUnaffiliatedadditionalinformation](docs/Model/NewEducationUnaffiliatedadditionalinformation.md)
- [NewIndividual](docs/Model/NewIndividual.md)
- [NewIndividualValidationcountries](docs/Model/NewIndividualValidationcountries.md)
- [NewIndividualZiplookupcountries](docs/Model/NewIndividualZiplookupcountries.md)
- [NewOrganization](docs/Model/NewOrganization.md)
- [NewOrganizationValidationcountries](docs/Model/NewOrganizationValidationcountries.md)
- [NewOrganizationZiplookupcountries](docs/Model/NewOrganizationZiplookupcountries.md)
- [NewRelationshipJobInfo](docs/Model/NewRelationshipJobInfo.md)
- [NewTribute](docs/Model/NewTribute.md)
- [NewTributeSplits](docs/Model/NewTributeSplits.md)
- [Organization](docs/Model/Organization.md)
- [PostResponse](docs/Model/PostResponse.md)
- [ProblemDetails](docs/Model/ProblemDetails.md)
- [RelationshipJobInfo](docs/Model/RelationshipJobInfo.md)
- [RelationshipJobInfoListCollection](docs/Model/RelationshipJobInfoListCollection.md)
- [RelationshipJobInfoListSummary](docs/Model/RelationshipJobInfoListSummary.md)
- [StateListCollection](docs/Model/StateListCollection.md)
- [StateListSummary](docs/Model/StateListSummary.md)
- [Tribute](docs/Model/Tribute.md)
- [TributeListCollection](docs/Model/TributeListCollection.md)
- [TributeListSummary](docs/Model/TributeListSummary.md)
- [TributeSearchCollection](docs/Model/TributeSearchCollection.md)
- [TributeSearchSummary](docs/Model/TributeSearchSummary.md)
- [UpdateConstituentAddress](docs/Model/UpdateConstituentAddress.md)
- [UpdateConstituentAddressMatchinghouseholdmembers](docs/Model/UpdateConstituentAddressMatchinghouseholdmembers.md)
- [UpdateConstituentAddressValidationcountries](docs/Model/UpdateConstituentAddressValidationcountries.md)
- [UpdateConstituentAddressZiplookupcountries](docs/Model/UpdateConstituentAddressZiplookupcountries.md)
- [UpdateConstituentAlternateLookupId](docs/Model/UpdateConstituentAlternateLookupId.md)
- [UpdateConstituentAppeal](docs/Model/UpdateConstituentAppeal.md)
- [UpdateConstituentAppealResponse](docs/Model/UpdateConstituentAppealResponse.md)
- [UpdateConstituentAppealResponseResponses](docs/Model/UpdateConstituentAppealResponseResponses.md)
- [UpdateConstituentAttribute](docs/Model/UpdateConstituentAttribute.md)
- [UpdateConstituentCorrespondenceCode](docs/Model/UpdateConstituentCorrespondenceCode.md)
- [UpdateConstituentEmailAddress](docs/Model/UpdateConstituentEmailAddress.md)
- [UpdateConstituentEmailAddressMatchinghouseholdmembers](docs/Model/UpdateConstituentEmailAddressMatchinghouseholdmembers.md)
- [UpdateConstituentFundraiser](docs/Model/UpdateConstituentFundraiser.md)
- [UpdateConstituentInteraction](docs/Model/UpdateConstituentInteraction.md)
- [UpdateConstituentInteractionParticipants](docs/Model/UpdateConstituentInteractionParticipants.md)
- [UpdateConstituentInteractionSites](docs/Model/UpdateConstituentInteractionSites.md)
- [UpdateConstituentNote](docs/Model/UpdateConstituentNote.md)
- [UpdateConstituentPhone](docs/Model/UpdateConstituentPhone.md)
- [UpdateConstituentPhoneCountrycodes](docs/Model/UpdateConstituentPhoneCountrycodes.md)
- [UpdateConstituentPhoneMatchinghouseholdmembers](docs/Model/UpdateConstituentPhoneMatchinghouseholdmembers.md)
- [UpdateConstituentSolicitCode](docs/Model/UpdateConstituentSolicitCode.md)
- [UpdateEducation](docs/Model/UpdateEducation.md)
- [UpdateEducationAffiliatedadditionalinformation](docs/Model/UpdateEducationAffiliatedadditionalinformation.md)
- [UpdateEducationUnaffiliatedadditionalinformation](docs/Model/UpdateEducationUnaffiliatedadditionalinformation.md)
- [UpdateIndividual](docs/Model/UpdateIndividual.md)
- [UpdateOrganization](docs/Model/UpdateOrganization.md)
- [UpdateRelationshipJobInfo](docs/Model/UpdateRelationshipJobInfo.md)
- [UpdateTribute](docs/Model/UpdateTribute.md)

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
