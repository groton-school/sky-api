<?php

namespace Blackbaud\SKY\Altru\Administration\Endpoints\Batches;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRow;
use Blackbaud\SKY\Altru\Administration\Components\PostResponse;

/**
 * @api
 */
class Revenue extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-adnmg/batches/revenue";

    /**
     * Add operation for revenue batch records.
     *
     * @param \Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRow
     *   $requestBody ConfigurationMessage object representing operation
     *   intended to be created
     *
     * @return \Blackbaud\SKY\Altru\Administration\Components\PostResponse
     *   Returned when the operation successfully creates the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function post(NewRevenueBatchRow $requestBody): PostResponse
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new PostResponse($this->send("post", [], [], $requestBody));
    }
}
