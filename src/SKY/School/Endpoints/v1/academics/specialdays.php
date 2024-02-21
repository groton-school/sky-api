<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Academics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Components\SpecialDayCollection;

/**
 * @api
 */
class Specialdays extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/academics/specialdays";

    /**
     * Returns a collection of special days.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Academic Group Manager
     *
     * - Schedule Manager
     *
     * @param ?int $level_id (Optional) Format - int32. Identifier for a
     *   specific school level.
     *
     * @return \Blackbaud\SKY\School\Components\SpecialDayCollectionSuccess
     *
     * @api
     */
    public function filterBy(?int $level_id = null): SpecialDayCollection
    {
        return new SpecialDayCollection($this->send("get", [], ["level_id" => $level_id]));
    }
}
