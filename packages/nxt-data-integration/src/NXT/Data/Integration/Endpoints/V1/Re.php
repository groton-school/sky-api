<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Appeals;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Campaigns;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Codetables;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Constitappeals;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Constituentidmap;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Constituents;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Countries;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Customfieldcategories;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Funds;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Giftaid;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Giftidmap;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Gifts;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Gifttribute;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Importidmap;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Installedcountry;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Nameformatconfigurations;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Phonetypes;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Proposals;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Relationships;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Serialnumber;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Tribute;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Users;

/**
 * Routing class for the subnamespace `Re`
 *
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Appeals
 *   $appeals
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Campaigns
 *   $campaigns
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Codetables
 *   $codetables Routing class for the subnamespace `Codetables`
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Constituents
 *   $constituents Routing class for the subnamespace `Constituents`
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Constitappeals
 *   $constitappeals
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Countries
 *   $countries
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Customfieldcategories
 *   $customfieldcategories
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Funds $funds
 *   Routing class for the subnamespace `Funds`
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Serialnumber
 *   $serialnumber
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Nameformatconfigurations
 *   $nameformatconfigurations Routing class for the subnamespace
 *   `Nameformatconfigurations`
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Phonetypes
 *   $phonetypes
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Proposals
 *   $proposals
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Users $users
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Constituentidmap
 *   $constituentidmap
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Installedcountry
 *   $installedcountry
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Tribute
 *   $tribute Routing class for the subnamespace `Tribute`
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Gifttribute
 *   $gifttribute Routing class for the subnamespace `Gifttribute`
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Giftidmap
 *   $giftidmap
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Gifts $gifts
 *   Routing class for the subnamespace `Gifts`
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Importidmap
 *   $importidmap Routing class for the subnamespace `Importidmap`
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Relationships
 *   $relationships Routing class for the subnamespace `Relationships`
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Giftaid
 *   $giftaid Routing class for the subnamespace `Giftaid`
 *
 * @api
 */
class Re extends BaseEndpoint
{
    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "appeals" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Appeals",
        "campaigns" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Campaigns",
        "codetables" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Codetables",
        "constituents" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Constituents",
        "constitappeals" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Constitappeals",
        "countries" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Countries",
        "customfieldcategories" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Customfieldcategories",
        "funds" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Funds",
        "serialnumber" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Serialnumber",
        "nameformatconfigurations" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Nameformatconfigurations",
        "phonetypes" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Phonetypes",
        "proposals" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Proposals",
        "users" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Users",
        "constituentidmap" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Constituentidmap",
        "installedcountry" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Installedcountry",
        "tribute" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Tribute",
        "gifttribute" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Gifttribute",
        "giftidmap" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Giftidmap",
        "gifts" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Gifts",
        "importidmap" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Importidmap",
        "relationships" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Relationships",
        "giftaid" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Giftaid",
    ];

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Appeals
     *   $_appeals
     */
    protected ?Appeals $_appeals = null;

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Campaigns
     *   $_campaigns
     */
    protected ?Campaigns $_campaigns = null;

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Codetables
     *   $_codetables Routing class for the subnamespace `Codetables`
     */
    protected ?Codetables $_codetables = null;

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Constituents
     *   $_constituents Routing class for the subnamespace `Constituents`
     */
    protected ?Constituents $_constituents = null;

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Constitappeals
     *   $_constitappeals
     */
    protected ?Constitappeals $_constitappeals = null;

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Countries
     *   $_countries
     */
    protected ?Countries $_countries = null;

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Customfieldcategories
     *   $_customfieldcategories
     */
    protected ?Customfieldcategories $_customfieldcategories = null;

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Funds $_funds
     *   Routing class for the subnamespace `Funds`
     */
    protected ?Funds $_funds = null;

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Serialnumber
     *   $_serialnumber
     */
    protected ?Serialnumber $_serialnumber = null;

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Nameformatconfigurations
     *   $_nameformatconfigurations Routing class for the subnamespace
     *   `Nameformatconfigurations`
     */
    protected ?Nameformatconfigurations $_nameformatconfigurations = null;

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Phonetypes
     *   $_phonetypes
     */
    protected ?Phonetypes $_phonetypes = null;

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Proposals
     *   $_proposals
     */
    protected ?Proposals $_proposals = null;

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Users $_users
     */
    protected ?Users $_users = null;

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Constituentidmap
     *   $_constituentidmap
     */
    protected ?Constituentidmap $_constituentidmap = null;

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Installedcountry
     *   $_installedcountry
     */
    protected ?Installedcountry $_installedcountry = null;

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Tribute
     *   $_tribute Routing class for the subnamespace `Tribute`
     */
    protected ?Tribute $_tribute = null;

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Gifttribute
     *   $_gifttribute Routing class for the subnamespace `Gifttribute`
     */
    protected ?Gifttribute $_gifttribute = null;

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Giftidmap
     *   $_giftidmap
     */
    protected ?Giftidmap $_giftidmap = null;

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Gifts $_gifts
     *   Routing class for the subnamespace `Gifts`
     */
    protected ?Gifts $_gifts = null;

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Importidmap
     *   $_importidmap Routing class for the subnamespace `Importidmap`
     */
    protected ?Importidmap $_importidmap = null;

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Relationships
     *   $_relationships Routing class for the subnamespace `Relationships`
     */
    protected ?Relationships $_relationships = null;

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Giftaid
     *   $_giftaid Routing class for the subnamespace `Giftaid`
     */
    protected ?Giftaid $_giftaid = null;
}
