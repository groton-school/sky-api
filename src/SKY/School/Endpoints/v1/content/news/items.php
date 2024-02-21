<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Content\News;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Components\NewsItemCollection;

/**
 * @api
 */
class Items extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/content/news/items";

    /**
     * Returns a collection of Content News Items Requires at least one of the
     * following roles in the Education Management System:
     *
     * - Parent
     *
     * - Faculty
     *
     * - Student
     *
     * @param ?string $categories (Optional)
     *
     * @return \Blackbaud\SKY\School\Components\NewsItemCollectionSuccess
     *
     * @api
     */
    public function filterBy(?string $categories = null): NewsItemCollection
    {
        return new NewsItemCollection($this->send("get", [], ["categories" => $categories]));
    }
}
