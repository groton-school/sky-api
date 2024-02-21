<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Events;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\EventCategory;
use Blackbaud\SKY\School\Components\EventCategoryCollection;
use Blackbaud\SKY\School\Components\EventCategoryCreateResponseExample;

/**
 * @api
 */
class Categories extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/events/categories";

    /**
     * Returns a collection of event categories.
     *
     * Requires one of the following roles in the Education Management system:
     *
     * - Content Manager
     *
     * - Platform Manager
     *
     * @param ?int $page (Optional) Format - int32. The page of results to
     *   start from.
     *
     * @return \Blackbaud\SKY\School\Components\EventCategoryCollection
     *   Success
     *
     * @api
     */
    public function filterBy(?int $page = null): EventCategoryCollection
    {
        return new EventCategoryCollection($this->send("get", [], ["page" => $page]));
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
     * @param \Blackbaud\SKY\School\Components\EventCategory $requestBody
     *
     * @return \Blackbaud\SKY\School\Components\EventCategoryCreateResponseExample
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function post(EventCategory $requestBody): EventCategoryCreateResponseExample
    {
        assert($requestBody !== null, new ArgumentException("Parameter `requestBody` is required"));

        return new EventCategoryCreateResponseExample($this->send("post", [], [], $requestBody));
    }
}
