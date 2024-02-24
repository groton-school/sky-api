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
     * @param int $student_id Format - int32.
     * @param string $start_date Format - date-time (as date-time in RFC3339).
     * @param ?string $end_date Format - date-time (as date-time in RFC3339).
     * @param ?string $section_ids
     *
     * @return \Blackbaud\SKY\School\Components\StudentAssignmentCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByStudent(int $student_id, string $start_date, ?string $end_date, ?string $section_ids): StudentAssignmentCollection
    {
        assert($student_id !== null, new ArgumentException("Parameter `student_id` is required"));
        assert($start_date !== null, new ArgumentException("Parameter `start_date` is required"));
        assert($end_date !== null, new ArgumentException("Parameter `end_date` is required"));
        assert($section_ids !== null, new ArgumentException("Parameter `section_ids` is required"));

        return new StudentAssignmentCollection($this->send("get", ["{student_id}" => $student_id], ["start_date" => $start_date,
        "end_date" => $end_date,
        "section_ids" => $section_ids]));
    }
}
