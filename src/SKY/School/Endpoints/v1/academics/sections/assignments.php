<?php

namespace Blackbaud\SKY\School\Endpoints\v1\academics\sections;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\AssignmentCollection;

/**
 * @api
 */
class assignments extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/academics/sections/{section_id}/assignments";

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
     * @param array{section_id: int, types?: string, status?: string,
     *   persona_id?: int, filter?: string, search?: string} $params An
     *   associative array
     *     - section_id: Format - int32. The ID of the section.
     *     - types: (Optional) Returns results that match a comma separated
     *   list of assignment type IDs.
     *     - status: (Optional) The status of the assignment. The status
     *   corresponds with static system options. Allowed values: "0" for In
     *   Progress, "1" for Completed, "2" for Overdue, and "-1" for To Do.
     *     - persona_id: (Optional) Format - int32. The ID of the persona to
     *   get assignments. 3 = Faculty, 2 = Student. Defaults to 3.
     *     - filter: (Optional) Return assignments based on the entered
     *   string: ```expired```, ```future```, or ```all```. All is the default
     *   sort value.
     *     - search: (Optional) Returns results with Descriptions or Titles
     *   that match search string.
     *
     * @return \Blackbaud\SKY\School\Objects\AssignmentCollection
     *
     * @api
     */
    public function getBySection(array $params)
    {
        return new AssignmentCollection($this->send("get", ["{section_id}" => $params["section_id"]], ["types" => $params["types"],
        "status" => $params["status"],
        "persona_id" => $params["persona_id"],
        "filter" => $params["filter"],
        "search" => $params["search"]]));
    }
}
