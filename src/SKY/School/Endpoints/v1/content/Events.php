<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Content;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Content\Events\Categories;

/**
 * Routing class for the namespace
 * Blackbaud\SKY\School\Endpoints\V1\Content\Events
 *
 * @api
 */
class Events extends BaseEndpoint
{
    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Content\Events\Categories
     *   $_categories
     */
    public Categories $_categories;

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Content\Events\Categories
     *
     * @api
     */
    public function categories(): Categories
    {
        if ($this->_categories === null) {
            $this->_categories = new Categories($this->api);
        }
        return $this->_categories;
    }
}
