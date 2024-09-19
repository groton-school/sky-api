<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Academics\Sections;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\AssignmentCollection;

/**
 * @api
 */
class Assignments extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/academics/sections/{section_id}/assignments";

    /**
     * Returns a collection of assignments for the specified
     * ```section\_id```.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Academic Group Manager
     *
     * - Student
     *
     * - Teacher
     *
     * - Pending Teacher
     *
     * @param array{section_id: int, types: string, status: string,
     *   persona_id: int, filter: string, search: string} $params An associative
     *   array
     *     - section_id: Format - int32. The ID of the section.
     *     - types: Returns results that match a comma separated list of
     *   assignment type IDs.
     *     - status: The status of the assignment. The status corresponds with
     *   static system options. Allowed values: "0" for In Progress, "1" for
     *   Completed, "2" for Overdue, and "-1" for To Do.
     *     - persona_id: Format - int32. The ID of the persona to get
     *   assignments. 3 = Faculty, 2 = Student. Defaults to 3.
     *     - filter: Return assignments based on the entered string:
     *   ```expired```, ```future```, or ```all```. All is the default sort
     *   value.
     *     - search: Returns results with Descriptions or Titles that match
     *   search string.
     *
     * @return \Blackbaud\SKY\School\Components\AssignmentCollection Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function searchBySectionId(array $params): AssignmentCollection
    {
        assert(isset($params['section_id']), new ArgumentException("Parameter `section_id` is required"));
        assert(isset($params['types']), new ArgumentException("Parameter `types` is required"));
        assert(isset($params['status']), new ArgumentException("Parameter `status` is required"));
        assert(isset($params['persona_id']), new ArgumentException("Parameter `persona_id` is required"));
        assert(isset($params['filter']), new ArgumentException("Parameter `filter` is required"));
        assert(isset($params['search']), new ArgumentException("Parameter `search` is required"));

        return new AssignmentCollection($this->send("get", array_filter($params, fn($key) => in_array($key, ['section_id']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['types','status','persona_id','filter','search']), ARRAY_FILTER_USE_KEY)));
    }
}
