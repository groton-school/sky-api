<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Content;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Content\News\Categories;
use Blackbaud\SKY\School\Endpoints\V1\Content\News\Items;

/**
 * Routing class for the namespace
 * Blackbaud\SKY\School\Endpoints\V1\Content\News
 *
 * @api
 */
class News extends BaseEndpoint
{
    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Content\News\Categories
     *   $_categories
     */
    public Categories $_categories;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Content\News\Items $_items
     */
    public Items $_items;

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Content\News\Categories
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

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Content\News\Items
     *
     * @api
     */
    public function items(): Items
    {
        if ($this->_items === null) {
            $this->_items = new Items($this->api);
        }
        return $this->_items;
    }
}
