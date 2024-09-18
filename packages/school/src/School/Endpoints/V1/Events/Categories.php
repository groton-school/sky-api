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
     *  Requires one of the following roles in the Education Management
     * system:
     *
     * - Content Manager
     *
     * - Platform Manager
     *
     * @param array{page: int} $params An associative array
     *     - page: Format - int32. The page of results to start from.
     *
     * @return \Blackbaud\SKY\School\Components\EventCategoryCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function list_(array $params): EventCategoryCollection
    {
        assert(isset($params['page']), new ArgumentException("Parameter `page` is required"));

        return new EventCategoryCollection($this->send("get", [], array_filter($params, fn($key) => in_array($key, ['page']), ARRAY_FILTER_USE_KEY)));
    }

    /**
     * Returns the ID of the created Events Category
     *
     *  Requires one of the following roles in the Education Management
     * system:
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
     */
    public function post(EventCategory $requestBody): EventCategoryCreateResponseExample
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new EventCategoryCreateResponseExample($this->send("post", [], [], $requestBody));
    }
}
