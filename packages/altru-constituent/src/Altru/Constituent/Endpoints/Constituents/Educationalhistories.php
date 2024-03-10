<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\EducationListCollection;

/**
 * @api
 */
class Educationalhistories extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/constituents/{constituent_id}/educationalhistories";

    /**
     * This datalist returns the education history for a constituent.
     *
     * @param array{constituent_id: string, limit: int} $params An associative
     *   array
     *     - constituent_id: The constituent id.
     *     - limit: Limits the number of records to return.
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\EducationListCollection
     *   Returned when the operation succeeds. The response body contains a
     *   collection of result entities.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByConstituentId(array $params): EducationListCollection
    {
        assert(isset($params['constituent_id']), new ArgumentException("Parameter `constituent_id` is required"));
        assert(isset($params['limit']), new ArgumentException("Parameter `limit` is required"));

        return new EducationListCollection($this->send("get", ["{constituent_id}" => $params['constituent_id']], ["limit" => $params['limit']]));
    }
}
