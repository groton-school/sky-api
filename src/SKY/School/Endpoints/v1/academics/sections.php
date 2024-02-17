<?php

namespace Blackbaud\SKY\School\Endpoints\v1\academics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\AcademicsSectionCollection;

/**
 * @api
 */
class sections extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/academics/sections";

    /**
     * Returns a collection of academic sections for the specified school
     * level.
     *
     * Requires the following role in the Education Management system:
     *
     * - Academic Group Manager
     *
     * @param array{level_num: int, school_year?: string} $params An
     *   associative array - level_num: Format - int32. Level number. -
     *   school_year: (Optional) The school year to get sections for.
     *   Corresponds to ```school_year_label``` in the [Year
     *   list](https://developer.sky.blackbaud.com/docs/services/school/operations/v1yearsget). Defaults to the current school year.
     *
     * @return \Blackbaud\SKY\School\Objects\AcademicsSectionCollection
     *
     * @api
     */
    public function filterBy(array $params)
    {
        return new AcademicsSectionCollection($this->send("get", [], ["level_num" => $params["level_num"],
        "school_year" => $params["school_year"]]));
    }
}
