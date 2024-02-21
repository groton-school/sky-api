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
     * Returns a collection of assignments for the specified ```section_id```.
     *
     *
     * Requires at least one of the following roles in the Education
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
     * @param ?string $types (Optional) Returns results that match a comma
     *   separated list of assignment type IDs.
     * @param ?string $status (Optional) The status of the assignment. The
     *   status corresponds with static system options. Allowed values: "0" for
     *   In Progress, "1" for Completed, "2" for Overdue, and "-1" for To Do.
     * @param ?int $persona_id (Optional) Format - int32. The ID of the
     *   persona to get assignments. 3 = Faculty, 2 = Student. Defaults to 3.
     * @param ?string $filter (Optional) Return assignments based on the
     *   entered string: ```expired```, ```future```, or ```all```. All is the
     *   default sort value.
     * @param ?string $search (Optional) Returns results with Descriptions or
     *   Titles that match search string.
     *
     * @return \Blackbaud\SKY\School\Components\AssignmentCollection Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function getBySection(int $section_id, ?string $types = null, ?string $status = null, ?int $persona_id = null, ?string $filter = null, ?string $search = null): AssignmentCollection
    {
        assert($section_id !== null, new ArgumentException("Parameter `section_id` is required"));

        return new AssignmentCollection($this->send("get", ["{section_id}" => $section_id], ["types" => $types,
        "status" => $status,
        "persona_id" => $persona_id,
        "filter" => $filter,
        "search" => $search]));
    }
}
