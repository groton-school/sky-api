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
     * @param int $section_id Format - int32. The ID of the section.
     * @param ?string $types Returns results that match a comma separated list
     *   of assignment type IDs.
     * @param ?string $status The status of the assignment. The status
     *   corresponds with static system options. Allowed values: "0" for In
     *   Progress, "1" for Completed, "2" for Overdue, and "-1" for To Do.
     * @param ?int $persona_id Format - int32. The ID of the persona to get
     *   assignments. 3 = Faculty, 2 = Student. Defaults to 3.
     * @param ?string $filter Return assignments based on the entered string:
     *   ```expired```, ```future```, or ```all```. All is the default sort
     *   value.
     * @param ?string $search Returns results with Descriptions or Titles that
     *   match search string.
     *
     * @return \Blackbaud\SKY\School\Components\AssignmentCollection Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getBySection(int $section_id, ?string $types, ?string $status, ?int $persona_id, ?string $filter, ?string $search): AssignmentCollection
    {
        assert($section_id !== null, new ArgumentException("Parameter `section_id` is required"));
        assert($types !== null, new ArgumentException("Parameter `types` is required"));
        assert($status !== null, new ArgumentException("Parameter `status` is required"));
        assert($persona_id !== null, new ArgumentException("Parameter `persona_id` is required"));
        assert($filter !== null, new ArgumentException("Parameter `filter` is required"));
        assert($search !== null, new ArgumentException("Parameter `search` is required"));

        return new AssignmentCollection($this->send("get", ["{section_id}" => $section_id], ["types" => $types,
        "status" => $status,
        "persona_id" => $persona_id,
        "filter" => $filter,
        "search" => $search]));
    }
}
