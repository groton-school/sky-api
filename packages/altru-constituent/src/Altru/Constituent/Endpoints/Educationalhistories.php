<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\EditEducation;
use Blackbaud\SKY\Altru\Constituent\Components\Education;
use Blackbaud\SKY\Altru\Constituent\Components\NewEducation;
use Blackbaud\SKY\Altru\Constituent\Components\PostResponse;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Educationalhistories\Search;

/**
 * Routing class for the subnamespace `Educationalhistories`
 *
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Educationalhistories\Search
 *   $search
 *
 * @api
 */
class Educationalhistories extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/educationalhistories/{educational_history_id}";

    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "search" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Educationalhistories\Search",
    ];

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Educationalhistories\Search
     *   $_search
     */
    protected ?Search $_search = null;

    /**
     * Adds a new educational history record to an existing constituent.
     *
     * @param \Blackbaud\SKY\Altru\Constituent\Components\NewEducation
     *   $requestBody ConfigurationMessage object representing operation
     *   intended to be created
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\PostResponse
     *   Returned when the operation successfully creates the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function post(NewEducation $requestBody): PostResponse
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new PostResponse($this->send("post", [], [], $requestBody));
    }

    /**
     * Edits educational history.
     *
     * @param array{educational_history_id: string} $params An associative
     *   array
     *     - educational_history_id: The educational history id.
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\Education Returned
     *   when the operation succeeds. The response body contains the specified
     *   resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByEducationalHistoryId(array $params): Education
    {
        assert(isset($params['educational_history_id']), new ArgumentException("Parameter `educational_history_id` is required"));

        return new Education($this->send("get", array_filter($params, fn($key) => in_array($key, ['educational_history_id']), ARRAY_FILTER_USE_KEY), []));
    }

    /**
     * This deletion handles only the basic deletion rules for an educational
     * history (currently none).
     *
     * @param array{educational_history_id: string} $params An associative
     *   array
     *     - educational_history_id: The educational history id
     *
     * @return mixed Returned when the operation successfully deletes the
     *   resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteByEducationalHistoryId(array $params): mixed
    {
        assert(isset($params['educational_history_id']), new ArgumentException("Parameter `educational_history_id` is required"));

        return $this->send("delete", array_filter($params, fn($key) => in_array($key, ['educational_history_id']), ARRAY_FILTER_USE_KEY), []);
    }

    /**
     * Edits educational history.
     *
     * @param array{educational_history_id: string} $params An associative
     *   array
     *     - educational_history_id: The educational history id.
     * @param \Blackbaud\SKY\Altru\Constituent\Components\EditEducation
     *   $requestBody ConfigurationMessage object representing operation
     *   intended to be created
     *
     * @return mixed Returned when the operation successfully edits the
     *   resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchOnEducationalHistoryId(array $params, EditEducation $requestBody): mixed
    {
        assert(isset($params['educational_history_id']), new ArgumentException("Parameter `educational_history_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", array_filter($params, fn($key) => in_array($key, ['educational_history_id']), ARRAY_FILTER_USE_KEY), [], $requestBody);
    }
}
