<?php

namespace Blackbaud\SKY\School\Endpoints\v1\content\news;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\NewsCategoryCollection;

/**
 * @api
 */
class categories extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/content/news/categories";

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
     * @return \Blackbaud\SKY\School\Objects\NewsCategoryCollection
     *
     * @api
     */
    public function getAll()
    {
        return new NewsCategoryCollection($this->send("get", [], []));
    }
}
