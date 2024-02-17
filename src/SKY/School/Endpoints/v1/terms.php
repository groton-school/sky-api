<?php

namespace Blackbaud\SKY\School\Endpoints\v1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\TermCollection;

/**
 * @api
 */
class terms extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/terms";

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
     * @param array{school_year?: string, offering_type?: int} $params An
     *   associative array
     *     - school_year: (Optional) The school year to get terms for.
     *   Defaults to the current school year.
     *     - offering_type: (Optional) Format - int32. The offering type to
     *   filter terms by.
     *
     * @return \Blackbaud\SKY\School\Objects\TermCollection
     *
     * @api
     */
    public function filterBy(array $params = [])
    {
        return new TermCollection($this->send("get", [], ["school_year" => $params["school_year"],
        "offering_type" => $params["offering_type"]]));
    }
}
