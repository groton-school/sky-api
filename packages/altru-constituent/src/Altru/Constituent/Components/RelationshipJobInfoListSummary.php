<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ListRelationshipJobInfos
 *
 * @property string $relationship_set_id The relationshipsetid.
 * @property string $id The ID.
 * @property string $reciprocal_id The reciprocalid.
 * @property string $name The name.
 * @property string $job_title The job title.
 * @property string $job_category The job category.
 * @property string $career_level The career level.
 * @property string $start_date The start date. Uses the format
 *   YYYY-MM-DDThh:mm:ss. An example date: *1955-11-05T22:04:00*.
 * @property string $end_date The end date. Uses the format
 *   YYYY-MM-DDThh:mm:ss. An example date: *1955-11-05T22:04:00*.
 * @property string $job_schedule The schedule.
 * @property string $job_department The department.
 * @property string $job_division The division.
 * @property string $job_responsibility The responsibilities.
 * @property bool $private_record Indicates whether is private.
 *
 * @api
 */
class RelationshipJobInfoListSummary extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "relationship_set_id" => "string",
        "id" => "string",
        "reciprocal_id" => "string",
        "name" => "string",
        "job_title" => "string",
        "job_category" => "string",
        "career_level" => "string",
        "start_date" => "string",
        "end_date" => "string",
        "job_schedule" => "string",
        "job_department" => "string",
        "job_division" => "string",
        "job_responsibility" => "string",
        "private_record" => "bool",
    ];
}
