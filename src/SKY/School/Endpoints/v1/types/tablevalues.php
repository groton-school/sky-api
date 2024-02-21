<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Types;

use Battis\OpenAPI\Client\BaseEndpoint;
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
     * Either ```tableId``` or ```tableName``` parameter is required, but not
     * both. For example, If a ```tableId``` is provided, then any value
     * provided for ```tableName``` will be ignored. In the case that the
     * calling user does not have permissions to view the data being requested
     * no results will be returned. ***This endpoint is in BETA. It may be
     * removed or replaced with a 90 day deprecation period.***
     *
     * @param ?int $tableId (Optional) Format - int32. The ID of the table
     *   type. The tableId is returned by [Types table
     *   types](https://developer.sky.blackbaud.com/docs/services/school/operations/V1TypesTablesGet) or from the settings area for the table within Blackbaud Education Management.
     * @param ?string $tableName (Optional) The name of the table type. The
     *   name is returned by [Types table
     *   types](https://developer.sky.blackbaud.com/docs/services/school/operations/V1TypesTablesGet) or from the settings area for the table within Blackbaud Education Management.
     * @param ?bool $includeInactive (Optional) If set to true, returns
     *   inactive items for the table. Defaults to false.
     *
     * @return \Blackbaud\SKY\School\Components\TableValueCollection Success
     *
     * @api
     */
    public function filterBy(?int $tableId = null, ?string $tableName = null, ?bool $includeInactive = null): TableValueCollection
    {
        return new TableValueCollection($this->send("get", [], ["tableId" => $tableId,
        "tableName" => $tableName,
        "includeInactive" => $includeInactive]));
    }
}
