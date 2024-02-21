<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Content\Events;
use Blackbaud\SKY\School\Endpoints\V1\Content\News;
use Blackbaud\SKY\School\Endpoints\V1\Content\Resources;

/**
 * Routing class for the namespace Blackbaud\SKY\School\Endpoints\V1\Content
 *
 * @api
 */
class Content extends BaseEndpoint
{
    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Content\Resources $_resources
     */
    public Resources $_resources;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Content\News $_news Routing
     *   class for the namespace Blackbaud\SKY\School\Endpoints\V1\Content\News

     */
    public News $_news;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Content\Events $_events Routing
     *   class for the namespace
     *   Blackbaud\SKY\School\Endpoints\V1\Content\Events
     */
    public Events $_events;

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Content\Resources
     *
     * @api
     */
    public function resources(): Resources
    {
        if ($this->_resources === null) {
            $this->_resources = new Resources($this->api);
        }
        return $this->_resources;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Content\News
     *
     * @api
     */
    public function news(): News
    {
        if ($this->_news === null) {
            $this->_news = new News($this->api);
        }
        return $this->_news;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Content\Events
     *
     * @api
     */
    public function events(): Events
    {
        if ($this->_events === null) {
            $this->_events = new Events($this->api);
        }
        return $this->_events;
    }
}
