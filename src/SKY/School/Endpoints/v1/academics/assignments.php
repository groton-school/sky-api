<?php

namespace Blackbaud\SKY\School\Endpoints\v1\academics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\StudentAssignmentCollection;

/**
 * @api
 */
class assignments extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/academics/{student_id}/assignments";

    /**
     * Returns assignments for a student that are assigned or due within the
     * date range specified.
     *
     * If no ```end_date``` is supplied it defaults to 31 days past the
     * ```start_date``` Requires at least one of the following roles in the
     * Education Management system:
     *
     * - Student
     *
     * - Parent
     *
     * @param array{student_id: int, start_date: string, end_date?: string,
     *   section_ids?: string} $params An associative array
     *     - student_id: Format - int32.
     *     - start_date: Format - date-time (as date-time in RFC3339).
     *     - end_date: (Optional) Format - date-time (as date-time in
     *   RFC3339).
     *     - section_ids: (Optional)
     *
     * @return \Blackbaud\SKY\School\Objects\StudentAssignmentCollection
     *
     * @api
     */
    public function getByStudent(array $params)
    {
        return new StudentAssignmentCollection($this->send("get", ["{student_id}" => $params["student_id"]], ["start_date" => $params["start_date"],
        "end_date" => $params["end_date"],
        "section_ids" => $params["section_ids"]]));
    }
}
