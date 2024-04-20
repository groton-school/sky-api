<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\NewConstituent;
use Blackbaud\SKY\Altru\Constituent\Components\PostResponse;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Addresses;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Alternatelookupids;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Constituentattributelist;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Constituentduplicatematch;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Contactinformationemailaddress;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Contactinformationphone;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Contactview;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Educationalhistories;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Emailaddresses;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Fundraisersearch;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Patrondata;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Patronorders;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Phones;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Profilepicture;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Relationshipjobsinfo;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Search;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Solicitcodes;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Tributes;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\View;

/**
 * Routing class for the subnamespace `Constituents`
 *
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Addresses
 *   $addresses
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Alternatelookupids
 *   $alternatelookupids
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Emailaddresses
 *   $emailaddresses
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Phones
 *   $phones
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Solicitcodes
 *   $solicitcodes
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\View
 *   $view
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Constituentattributelist
 *   $constituentattributelist
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Contactinformationemailaddress
 *   $contactinformationemailaddress
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Contactinformationphone
 *   $contactinformationphone
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Patrondata
 *   $patrondata
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Patronorders
 *   $patronorders
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Search
 *   $search
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Contactview
 *   $contactview
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Tributes
 *   $tributes
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Fundraisersearch
 *   $fundraisersearch
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Profilepicture
 *   $profilepicture
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Constituentduplicatematch
 *   $constituentduplicatematch
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Educationalhistories
 *   $educationalhistories
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Relationshipjobsinfo
 *   $relationshipjobsinfo
 *
 * @api
 */
class Constituents extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/constituents/{constituent_id}";

    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "addresses" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Addresses",
        "alternatelookupids" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Alternatelookupids",
        "emailaddresses" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Emailaddresses",
        "phones" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Phones",
        "solicitcodes" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Solicitcodes",
        "view" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\View",
        "constituentattributelist" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Constituentattributelist",
        "contactinformationemailaddress" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Contactinformationemailaddress",
        "contactinformationphone" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Contactinformationphone",
        "patrondata" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Patrondata",
        "patronorders" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Patronorders",
        "search" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Search",
        "contactview" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Contactview",
        "tributes" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Tributes",
        "fundraisersearch" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Fundraisersearch",
        "profilepicture" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Profilepicture",
        "constituentduplicatematch" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Constituentduplicatematch",
        "educationalhistories" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Educationalhistories",
        "relationshipjobsinfo" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Relationshipjobsinfo",
    ];

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Addresses
     *   $_addresses
     */
    protected ?Addresses $_addresses = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Alternatelookupids
     *   $_alternatelookupids
     */
    protected ?Alternatelookupids $_alternatelookupids = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Emailaddresses
     *   $_emailaddresses
     */
    protected ?Emailaddresses $_emailaddresses = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Phones
     *   $_phones
     */
    protected ?Phones $_phones = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Solicitcodes
     *   $_solicitcodes
     */
    protected ?Solicitcodes $_solicitcodes = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\View
     *   $_view
     */
    protected ?View $_view = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Constituentattributelist
     *   $_constituentattributelist
     */
    protected ?Constituentattributelist $_constituentattributelist = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Contactinformationemailaddress
     *   $_contactinformationemailaddress
     */
    protected ?Contactinformationemailaddress $_contactinformationemailaddress = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Contactinformationphone
     *   $_contactinformationphone
     */
    protected ?Contactinformationphone $_contactinformationphone = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Patrondata
     *   $_patrondata
     */
    protected ?Patrondata $_patrondata = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Patronorders
     *   $_patronorders
     */
    protected ?Patronorders $_patronorders = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Search
     *   $_search
     */
    protected ?Search $_search = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Contactview
     *   $_contactview
     */
    protected ?Contactview $_contactview = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Tributes
     *   $_tributes
     */
    protected ?Tributes $_tributes = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Fundraisersearch
     *   $_fundraisersearch
     */
    protected ?Fundraisersearch $_fundraisersearch = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Profilepicture
     *   $_profilepicture
     */
    protected ?Profilepicture $_profilepicture = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Constituentduplicatematch
     *   $_constituentduplicatematch
     */
    protected ?Constituentduplicatematch $_constituentduplicatematch = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Educationalhistories
     *   $_educationalhistories
     */
    protected ?Educationalhistories $_educationalhistories = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents\Relationshipjobsinfo
     *   $_relationshipjobsinfo
     */
    protected ?Relationshipjobsinfo $_relationshipjobsinfo = null;

    /**
     * This deletion handles only the basic deletion rules for a constituent.
     *
     * @param array{constituent_id: string} $params An associative array
     *     - constituent_id: The constituent id
     *
     * @return mixed Returned when the operation successfully deletes the
     *   resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteByConstituentId(array $params): mixed
    {
        assert(isset($params['constituent_id']), new ArgumentException("Parameter `constituent_id` is required"));

        return $this->send("delete", ["{constituent_id}" => $params['constituent_id']], []);
    }

    /**
     * This dataform template is used to add an individual constituent,
     * spouse(optional), and business(optional).
     *
     * @param \Blackbaud\SKY\Altru\Constituent\Components\NewConstituent
     *   $requestBody ConfigurationMessage object representing operation
     *   intended to be created
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\PostResponse
     *   Returned when the operation successfully creates the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function post(NewConstituent $requestBody): PostResponse
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new PostResponse($this->send("post", [], [], $requestBody));
    }
}
