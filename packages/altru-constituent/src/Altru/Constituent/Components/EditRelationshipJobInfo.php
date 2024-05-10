<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * EditRelationshipJobInfo
 *
 * @property string $job_title The job title.
 * @property string $career_level The career level. This code table can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/careerlevelcode/entries

 * @property string $job_category The category. This code table can be queried
 *   at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/jobcategorycode/entries

 * @property string $start_date The start date. Uses the format
 *   YYYY-MM-DDThh:mm:ss. An example date: *1955-11-05T22:04:00*.
 * @property string $end_date The end date. Uses the format
 *   YYYY-MM-DDThh:mm:ss. An example date: *1955-11-05T22:04:00*.
 * @property string $job_department The department.
 * @property string $job_division The division.
 * @property string $job_schedule The schedule. This code table can be queried
 *   at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/jobschedulecode/entries

 * @property string $job_responsibility The responsibilities.
 * @property bool $private_record Indicates whether is private.
 *
 * @api
 */
class EditRelationshipJobInfo extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "job_title" => "string",
        "career_level" => "string",
        "job_category" => "string",
        "start_date" => "string",
        "end_date" => "string",
        "job_department" => "string",
        "job_division" => "string",
        "job_schedule" => "string",
        "job_responsibility" => "string",
        "private_record" => "bool",
    ];
}
