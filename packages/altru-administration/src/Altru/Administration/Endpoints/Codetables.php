<?php

namespace Blackbaud\SKY\Altru\Administration\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\Altru\Administration\Endpoints\Codetables\Codetableentryid;
use Blackbaud\SKY\Altru\Administration\Endpoints\Codetables\Entries;
use Blackbaud\SKY\Altru\Administration\Endpoints\Codetables\Entry;
use Blackbaud\SKY\Altru\Administration\Endpoints\Codetables\Entrydescription;
use Blackbaud\SKY\Altru\Administration\Endpoints\Codetables\Entryid;
use Blackbaud\SKY\Altru\Administration\Endpoints\Codetables\List_;

/**
 * Routing class for the subnamespace `Codetables`
 *
 * @property \Blackbaud\SKY\Altru\Administration\Endpoints\Codetables\Codetableentryid
 *   $codetableentryid
 * @property \Blackbaud\SKY\Altru\Administration\Endpoints\Codetables\Entries
 *   $entries
 * @property \Blackbaud\SKY\Altru\Administration\Endpoints\Codetables\Entry
 *   $entry
 * @property \Blackbaud\SKY\Altru\Administration\Endpoints\Codetables\Entryid
 *   $entryid
 * @property \Blackbaud\SKY\Altru\Administration\Endpoints\Codetables\Entrydescription
 *   $entrydescription
 * @property \Blackbaud\SKY\Altru\Administration\Endpoints\Codetables\List_
 *   $list_
 *
 * @api
 */
class Codetables extends BaseEndpoint
{
    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "codetableentryid" => "\Blackbaud\SKY\Altru\Administration\Endpoints\Codetables\Codetableentryid",
        "entries" => "\Blackbaud\SKY\Altru\Administration\Endpoints\Codetables\Entries",
        "entry" => "\Blackbaud\SKY\Altru\Administration\Endpoints\Codetables\Entry",
        "entryid" => "\Blackbaud\SKY\Altru\Administration\Endpoints\Codetables\Entryid",
        "entrydescription" => "\Blackbaud\SKY\Altru\Administration\Endpoints\Codetables\Entrydescription",
        "list_" => "\Blackbaud\SKY\Altru\Administration\Endpoints\Codetables\List_",
    ];

    /**
     * @var \Blackbaud\SKY\Altru\Administration\Endpoints\Codetables\Codetableentryid
     *   $_codetableentryid
     */
    protected Codetableentryid $_codetableentryid = null;

    /**
     * @var \Blackbaud\SKY\Altru\Administration\Endpoints\Codetables\Entries
     *   $_entries
     */
    protected Entries $_entries = null;

    /**
     * @var \Blackbaud\SKY\Altru\Administration\Endpoints\Codetables\Entry
     *   $_entry
     */
    protected Entry $_entry = null;

    /**
     * @var \Blackbaud\SKY\Altru\Administration\Endpoints\Codetables\Entryid
     *   $_entryid
     */
    protected Entryid $_entryid = null;

    /**
     * @var \Blackbaud\SKY\Altru\Administration\Endpoints\Codetables\Entrydescription
     *   $_entrydescription
     */
    protected Entrydescription $_entrydescription = null;

    /**
     * @var \Blackbaud\SKY\Altru\Administration\Endpoints\Codetables\List_
     *   $_list_
     */
    protected List_ $_list_ = null;
}
