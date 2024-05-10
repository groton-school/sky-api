<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;

/**
 * @api
 */
class Proposals extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/nxt-data-integration/v1/re/proposals/{id}";

    /**
     * Deletes a proposal.
     *
     * @param array{id: int} $params An associative array
     *     - id: Format - int32. The proposal system ID.
     *
     * @return mixed Returned when the operation successfully deletes the
     *   proposal.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteById(array $params): mixed
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return $this->send("delete", array_filter($params, fn($key) => in_array($key, ['id']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY));
    }
}
