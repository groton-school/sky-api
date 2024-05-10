<?php

namespace Blackbaud\SKY\Altru\Administration\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Administration\Components\NewBatch;
use Blackbaud\SKY\Altru\Administration\Components\PostResponse;
use Blackbaud\SKY\Altru\Administration\Endpoints\Batches\Revenue;

/**
 * Routing class for the subnamespace `Batches`
 *
 * @property \Blackbaud\SKY\Altru\Administration\Endpoints\Batches\Revenue
 *   $revenue
 *
 * @api
 */
class Batches extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-adnmg/batches";

    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "revenue" => "\Blackbaud\SKY\Altru\Administration\Endpoints\Batches\Revenue",
    ];

    /**
     * @var ?\Blackbaud\SKY\Altru\Administration\Endpoints\Batches\Revenue
     *   $_revenue
     */
    protected ?Revenue $_revenue = null;

    /**
     * Add operation for adding a batch
     *
     * @param \Blackbaud\SKY\Altru\Administration\Components\NewBatch
     *   $requestBody ConfigurationMessage object representing operation
     *   intended to be created
     *
     * @return \Blackbaud\SKY\Altru\Administration\Components\PostResponse
     *   Returned when the operation successfully creates the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function post(NewBatch $requestBody): PostResponse
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new PostResponse($this->send("post", [], [], $requestBody));
    }
}
