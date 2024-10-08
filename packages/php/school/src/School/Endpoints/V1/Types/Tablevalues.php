<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Types;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\AddTableValuesRequest;
use Blackbaud\SKY\School\Components\AddTableValuesResponse;
use Blackbaud\SKY\School\Components\TableValueCollection;

/**
 * @api
 */
class Tablevalues extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/types/tablevalues";

    /**
     * Returns a collection of table values.
     *
     *  Either ```tableId``` or ```tableName``` parameter is required, but not
     * both. For example, If a ```tableId``` is provided, then any value
     * provided for ```tableName``` will be ignored. In the case that the
     * calling user does not have permissions to view the data being requested
     * no results will be returned.
     *
     * @param array{tableId?: int, tableName: string, includeInactive?: bool}
     *   $params An associative array
     *     - tableId: Format - int32. The ID of the table type. The tableId is
     *   returned by [Types table
     *   types](https://developer.sky.blackbaud.com/docs/services/school/operations/V1TypesTablesGet) or from the settings area for the table within Blackbaud Education Management.
     *     - tableName: The name of the table type. The name is returned by
     *   [Types table
     *   types](https://developer.sky.blackbaud.com/docs/services/school/operations/V1TypesTablesGet) or from the settings area for the table within Blackbaud Education Management.
     *     - includeInactive: If set to true, returns inactive items for the
     *   table. Defaults to false.
     *
     * @return \Blackbaud\SKY\School\Components\TableValueCollection Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function list_(array $params): TableValueCollection
    {
        assert(isset($params['tableName']), new ArgumentException("Parameter `tableName` is required"));

        return new TableValueCollection($this->send("get", [], array_filter($params, fn($key) => in_array($key, ['tableId','tableName','includeInactive']), ARRAY_FILTER_USE_KEY)));
    }

    /**
     * Add a new table value to a table type.
     *
     *  Allowed table types: Allergy, Condition, Admission
     *
     * @param \Blackbaud\SKY\School\Components\AddTableValuesRequest
     *   $requestBody
     *
     * @return \Blackbaud\SKY\School\Components\AddTableValuesResponse Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function post(AddTableValuesRequest $requestBody): AddTableValuesResponse
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new AddTableValuesResponse($this->send("post", [], [], $requestBody));
    }
}
