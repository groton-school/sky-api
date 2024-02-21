<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Components\TermCollection;

/**
 * @api
 */
class Terms extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/terms";

    /**
     * Returns a collection of core school terms.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Academic Group Manager
     *
     * - Schedule Manager
     *
     * - Platform Manager
     *
     * - Any Manager Role
     *
     * @param ?string $school_year (Optional) The school year to get terms
     *   for. Defaults to the current school year.
     * @param ?int $offering_type (Optional) Format - int32. The offering type
     *   to filter terms by.
     *
     * @return \Blackbaud\SKY\School\Components\TermCollectionSuccess
     *
     * @api
     */
    public function filterBy(?string $school_year = null, ?int $offering_type = null): TermCollection
    {
        return new TermCollection($this->send("get", [], ["school_year" => $school_year,
        "offering_type" => $offering_type]));
    }
}
