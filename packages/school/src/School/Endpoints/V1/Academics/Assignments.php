<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Academics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\StudentAssignmentCollection;

/**
 * @api
 */
class Assignments extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/academics/{student_id}/assignments";

    /**
     * Returns assignments for a student that are assigned or due within the
     * date range specified.
     *
     *  If no ```end\_date``` is supplied it defaults to 31 days past the
     * ```start\_date``` Requires at least one of the following roles in the
     * Education Management system:
     *
     * - Student
     *
     * - Parent
     *
     * @param array{student_id: int, start_date: string, end_date: string,
     *   section_ids: string} $params An associative array
     *     - student_id: Format - int32.
     *     - start_date: Format - date-time (as date-time in RFC3339).
     *     - end_date: Format - date-time (as date-time in RFC3339).
     *     - section_ids:
     *
     * @return \Blackbaud\SKY\School\Components\StudentAssignmentCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function searchByStudentId(array $params): StudentAssignmentCollection
    {
        assert(isset($params['student_id']), new ArgumentException("Parameter `student_id` is required"));
        assert(isset($params['start_date']), new ArgumentException("Parameter `start_date` is required"));
        assert(isset($params['end_date']), new ArgumentException("Parameter `end_date` is required"));
        assert(isset($params['section_ids']), new ArgumentException("Parameter `section_ids` is required"));

        return new StudentAssignmentCollection($this->send("get", ["{student_id}" => $params['student_id']], ["start_date" => $params['start_date'],
            "end_date" => $params['end_date'],
            "section_ids" => $params['section_ids']]));
    }
}
