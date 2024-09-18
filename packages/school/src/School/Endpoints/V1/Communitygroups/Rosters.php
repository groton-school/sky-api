<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Communitygroups;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\SectionRosterModel;

/**
 * @api
 */
class Rosters extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/communitygroups/rosters";

    /**
     * Returns the community group rosters for a selected year. Uses current
     * school year by default.
     *
     *  Requires the following role in the Education Management system:
     *
     * - Schedule Manager
     *
     * - Community Group Manager
     *
     * \*\*\*This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.\*\*\*
     *
     * @param array{school_year: string, school_level: int, section_ids:
     *   string, last_modified: string} $params An associative array
     *     - school_year: The ID or label of the school year. Defaults to the
     *   current school year.
     *     - school_level: Format - int32. Limits rosters returned to school
     *   level specified.
     *     - section_ids: Limits rosters returned to sections
     *   specified.Provide comma-delimited list of section\_id values.
     *     - last_modified: Format - date-time (as date-time in RFC3339).
     *   Limits rosters returned to sections that were modified on or after the
     *   date provided. Use ISO-8601 date-time format: 2024-09-01T00:00:00-5:00.

     *
     * @return \Blackbaud\SKY\School\Components\SectionRosterModel[] A List of
     *   Community Group rosters
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function get(array $params): array
    {
        assert(isset($params['school_year']), new ArgumentException("Parameter `school_year` is required"));
        assert(isset($params['school_level']), new ArgumentException("Parameter `school_level` is required"));
        assert(isset($params['section_ids']), new ArgumentException("Parameter `section_ids` is required"));
        assert(isset($params['last_modified']), new ArgumentException("Parameter `last_modified` is required"));

        return array_map(fn($a) => new SectionRosterModel($a), $this->send("get", [], array_filter($params, fn($key) => in_array($key, ['school_year','school_level','section_ids','last_modified']), ARRAY_FILTER_USE_KEY)));
    }
}
