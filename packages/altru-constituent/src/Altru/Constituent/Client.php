<?php

namespace Blackbaud\SKY\Altru\Constituent;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Addresses;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Alternatelookupids;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Constituent;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentappealresponses;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentappeals;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentattributes;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentcorrespondencecodes;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentinactivityreasoncodes;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentmergeconfiguration;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentnotes;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Educationalhistories;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Emailaddresses;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Fundraisers;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Individuals;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Interactions;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Mergetwoconstituents;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Organizations;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Phones;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Relationshipjobsinfo;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Solicitcodes;
use Blackbaud\SKY\Altru\Constituent\Endpoints\States;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Tribute;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Tributes;

/**
 * Routing class for Constituent
 *
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Individuals
 *   $individuals Routing class for the subnamespace `Individuals`
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Organizations
 *   $organizations
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents
 *   $constituents Routing class for the subnamespace `Constituents`
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Addresses $addresses
 *   Routing class for the subnamespace `Addresses`
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Alternatelookupids
 *   $alternatelookupids
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentcorrespondencecodes
 *   $constituentcorrespondencecodes Routing class for the subnamespace
 *   `Constituentcorrespondencecodes`
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Emailaddresses
 *   $emailaddresses
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Interactions
 *   $interactions
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Phones $phones
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Solicitcodes
 *   $solicitcodes
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentattributes
 *   $constituentattributes
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentnotes
 *   $constituentnotes Routing class for the subnamespace `Constituentnotes`
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Mergetwoconstituents
 *   $mergetwoconstituents
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentinactivityreasoncodes
 *   $constituentinactivityreasoncodes
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Tribute $tribute
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Tributes $tributes
 *   Routing class for the subnamespace `Tributes`
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentappeals
 *   $constituentappeals Routing class for the subnamespace `Constituentappeals`

 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentappealresponses
 *   $constituentappealresponses
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Fundraisers
 *   $fundraisers Routing class for the subnamespace `Fundraisers`
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Educationalhistories
 *   $educationalhistories Routing class for the subnamespace
 *   `Educationalhistories`
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Relationshipjobsinfo
 *   $relationshipjobsinfo
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\States $states
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentmergeconfiguration
 *   $constituentmergeconfiguration
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Constituent
 *   $constituent Routing class for the subnamespace `Constituent`
 *
 * @api
 */
class Client extends BaseEndpoint
{
    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "individuals" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Individuals",
        "organizations" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Organizations",
        "constituents" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents",
        "addresses" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Addresses",
        "alternatelookupids" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Alternatelookupids",
        "constituentcorrespondencecodes" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentcorrespondencecodes",
        "emailaddresses" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Emailaddresses",
        "interactions" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Interactions",
        "phones" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Phones",
        "solicitcodes" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Solicitcodes",
        "constituentattributes" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentattributes",
        "constituentnotes" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentnotes",
        "mergetwoconstituents" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Mergetwoconstituents",
        "constituentinactivityreasoncodes" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentinactivityreasoncodes",
        "tribute" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Tribute",
        "tributes" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Tributes",
        "constituentappeals" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentappeals",
        "constituentappealresponses" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentappealresponses",
        "fundraisers" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Fundraisers",
        "educationalhistories" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Educationalhistories",
        "relationshipjobsinfo" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Relationshipjobsinfo",
        "states" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\States",
        "constituentmergeconfiguration" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentmergeconfiguration",
        "constituent" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituent",
    ];

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Individuals
     *   $_individuals Routing class for the subnamespace `Individuals`
     */
    protected ?Individuals $_individuals = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Organizations
     *   $_organizations
     */
    protected ?Organizations $_organizations = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents
     *   $_constituents Routing class for the subnamespace `Constituents`
     */
    protected ?Constituents $_constituents = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Addresses $_addresses
     *   Routing class for the subnamespace `Addresses`
     */
    protected ?Addresses $_addresses = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Alternatelookupids
     *   $_alternatelookupids
     */
    protected ?Alternatelookupids $_alternatelookupids = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentcorrespondencecodes
     *   $_constituentcorrespondencecodes Routing class for the subnamespace
     *   `Constituentcorrespondencecodes`
     */
    protected ?Constituentcorrespondencecodes $_constituentcorrespondencecodes = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Emailaddresses
     *   $_emailaddresses
     */
    protected ?Emailaddresses $_emailaddresses = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Interactions
     *   $_interactions
     */
    protected ?Interactions $_interactions = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Phones $_phones
     */
    protected ?Phones $_phones = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Solicitcodes
     *   $_solicitcodes
     */
    protected ?Solicitcodes $_solicitcodes = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentattributes
     *   $_constituentattributes
     */
    protected ?Constituentattributes $_constituentattributes = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentnotes
     *   $_constituentnotes Routing class for the subnamespace
     *   `Constituentnotes`
     */
    protected ?Constituentnotes $_constituentnotes = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Mergetwoconstituents
     *   $_mergetwoconstituents
     */
    protected ?Mergetwoconstituents $_mergetwoconstituents = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentinactivityreasoncodes
     *   $_constituentinactivityreasoncodes
     */
    protected ?Constituentinactivityreasoncodes $_constituentinactivityreasoncodes = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Tribute $_tribute
     */
    protected ?Tribute $_tribute = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Tributes $_tributes
     *   Routing class for the subnamespace `Tributes`
     */
    protected ?Tributes $_tributes = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentappeals
     *   $_constituentappeals Routing class for the subnamespace
     *   `Constituentappeals`
     */
    protected ?Constituentappeals $_constituentappeals = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentappealresponses
     *   $_constituentappealresponses
     */
    protected ?Constituentappealresponses $_constituentappealresponses = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Fundraisers
     *   $_fundraisers Routing class for the subnamespace `Fundraisers`
     */
    protected ?Fundraisers $_fundraisers = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Educationalhistories
     *   $_educationalhistories Routing class for the subnamespace
     *   `Educationalhistories`
     */
    protected ?Educationalhistories $_educationalhistories = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Relationshipjobsinfo
     *   $_relationshipjobsinfo
     */
    protected ?Relationshipjobsinfo $_relationshipjobsinfo = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\States $_states
     */
    protected ?States $_states = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentmergeconfiguration
     *   $_constituentmergeconfiguration
     */
    protected ?Constituentmergeconfiguration $_constituentmergeconfiguration = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituent
     *   $_constituent Routing class for the subnamespace `Constituent`
     */
    protected ?Constituent $_constituent = null;
}
