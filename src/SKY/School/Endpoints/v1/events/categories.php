<?php

namespace Blackbaud\SKY\School\Endpoints\v1\events;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\EventCategoryCollection;
use Blackbaud\SKY\School\Objects\EventCategoryCreateResponseExample;

/**
 * @api
 */
class categories extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/events/categories";

    /**
     * Returns a collection of event categories.
     *
     * Requires one of the following roles in the Education Management system:
     *
     * - Content Manager
     *
     * - Platform Manager
     *
     * @param array{page?: int} $params An associative array
     *     - page: (Optional) Format - int32. The page of results to start
     *   from.
     *
     * @return \Blackbaud\SKY\School\Objects\EventCategoryCollection
     *
     * @api
     */
    public function filterBy(array $params = [])
    {
        return new EventCategoryCollection($this->send("get", [], ["page" => $params["page"]]));
    }

    /**
     * Returns the Id of the created Events Category
     *
     * Requires one of the following roles in the Education Management system:
     *
     * - Content Manager
     *
     * - Platform Manager
     *
     * <param name="eventCategory"></param><param
     * name="cancellationToken"></param>
     *
     * @return \Blackbaud\SKY\School\Objects\EventCategoryCreateResponseExample

     *
     * @api
     */
    public function post()
    {
        return new EventCategoryCreateResponseExample($this->send("post", [], []));
    }
}
