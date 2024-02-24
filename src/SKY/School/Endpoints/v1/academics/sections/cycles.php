<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Academics\Sections;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\SectionCycles;

/**
 * @api
 */
class Cycles extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/academics/sections/{section_id}/cycles";

    /**
     * Returns a collection of cycles for the specified ```section\_id```.
     *
     *  Requires the following role in the Education Management system:
     *
     * - Academic Group Manager
     *
     * @param int $section_id Format - int32. The ID of the section.
     * @param ?int $duration_id Format - int32. The ID of the term for which
     *   you want to return cycles. Defaults to the current term for the section
     *   provided.
     * @param ?int $group_type Format - int32. The Group Type for the section
     *   specified. Defaults to the 'Academics' (1).
     *
     * @return \Blackbaud\SKY\School\Components\SectionCycles Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getBySection(int $section_id, ?int $duration_id, ?int $group_type): SectionCycles
    {
        assert($section_id !== null, new ArgumentException("Parameter `section_id` is required"));
        assert($duration_id !== null, new ArgumentException("Parameter `duration_id` is required"));
        assert($group_type !== null, new ArgumentException("Parameter `group_type` is required"));

        return new SectionCycles($this->send("get", ["{section_id}" => $section_id], ["duration_id" => $duration_id,
        "group_type" => $group_type]));
    }
}
