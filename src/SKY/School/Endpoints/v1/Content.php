<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Content\Events;
use Blackbaud\SKY\School\Endpoints\V1\Content\News;
use Blackbaud\SKY\School\Endpoints\V1\Content\Resources;

/**
 * Routing class for the namespace Blackbaud\SKY\School\Endpoints\V1\Content
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1\Content\Resources $resources
 * @property \Blackbaud\SKY\School\Endpoints\V1\Content\News $news Routing
 *   class for the namespace Blackbaud\SKY\School\Endpoints\V1\Content\News
 * @property \Blackbaud\SKY\School\Endpoints\V1\Content\Events $events Routing
 *   class for the namespace Blackbaud\SKY\School\Endpoints\V1\Content\Events
 *
 * @api
 */
class Content extends BaseEndpoint
{
    /**
     * @var \array<string class-string=""> $endpoints Routing
     *   subpaths</string>
     */
    protected array $endpoints = [
        "resources" => "\Blackbaud\SKY\School\Endpoints\V1\Content\Resources",
        "news" => "\Blackbaud\SKY\School\Endpoints\V1\Content\News",
        "events" => "\Blackbaud\SKY\School\Endpoints\V1\Content\Events",
    ];

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Content\Resources $_resources
     */
    protected ?Resources $_resources = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Content\News $_news Routing
     *   class for the namespace Blackbaud\SKY\School\Endpoints\V1\Content\News

     */
    protected ?News $_news = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Content\Events $_events
     *   Routing class for the namespace
     *   Blackbaud\SKY\School\Endpoints\V1\Content\Events
     */
    protected ?Events $_events = null;
}
