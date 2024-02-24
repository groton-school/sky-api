<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
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
     *  Requires at least one of the following roles in the Education
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
     * @param ?string $school_year The school year to get terms for. Defaults
     *   to the current school year.
     * @param ?int $offering_type Format - int32. The offering type to filter
     *   terms by.
     *
     * @return \Blackbaud\SKY\School\Components\TermCollection Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function filterBy(?string $school_year, ?int $offering_type): TermCollection
    {
        assert($school_year !== null, new ArgumentException("Parameter `school_year` is required"));
        assert($offering_type !== null, new ArgumentException("Parameter `offering_type` is required"));

        return new TermCollection($this->send("get", [], ["school_year" => $school_year,
        "offering_type" => $offering_type]));
    }
}
