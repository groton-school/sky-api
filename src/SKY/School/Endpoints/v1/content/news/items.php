<?php

namespace Blackbaud\SKY\School\Endpoints\v1\content\news;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\NewsItemCollection;

/**
 * @api
 */
class items extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/content/news/items";

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
     * @param array{categories?: string} $params An associative array
     *     - categories: (Optional)
     *
     * @return \Blackbaud\SKY\School\Objects\NewsItemCollection
     *
     * @api
     */
    public function filterBy(array $params = [])
    {
        return new NewsItemCollection($this->send("get", [], ["categories" => $params["categories"]]));
    }
}
