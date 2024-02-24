<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Content\News;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Components\NewsCategoryCollection;

/**
 * @api
 */
class Categories extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/content/news/categories";

    /**
     * Returns a collection of Content News Categories Requires at least one
     * of the following roles in the Education Management System:
     *
     * - Parent
     *
     * - Faculty
     *
     * - Student
     *
     * @return \Blackbaud\SKY\School\Components\NewsCategoryCollection Success
     */
    public function getAll(): NewsCategoryCollection
    {
        return new NewsCategoryCollection($this->send("get", [], []));
    }
}
