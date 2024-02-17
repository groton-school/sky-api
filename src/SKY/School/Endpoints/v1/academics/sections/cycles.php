<?php

namespace Blackbaud\SKY\School\Endpoints\v1\academics\sections;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\SectionCycles;

/**
 * @api
 */
class cycles extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/academics/sections/{section_id}/cycles";

    /**
     * Returns a collection of cycles for the specified ```section_id```.
     *
     * Requires the following role in the Education Management system:
     *
     * - Academic Group Manager
     *
     * @param array{section_id: int, duration_id?: int, group_type?: int}
     *   $params An associative array
     *     - section_id: Format - int32. The ID of the section.
     *     - duration_id: (Optional) Format - int32. The ID of the term for
     *   which you want to return cycles. Defaults to the current term for the
     *   section provided.
     *     - group_type: (Optional) Format - int32. The Group Type for the
     *   section specified. Defaults to the 'Academics' (1).
     *
     * @return \Blackbaud\SKY\School\Objects\SectionCycles
     *
     * @api
     */
    public function getBySection(array $params)
    {
        return new SectionCycles($this->send("get", ["{section_id}" => $params["section_id"]], ["duration_id" => $params["duration_id"],
        "group_type" => $params["group_type"]]));
    }
}
