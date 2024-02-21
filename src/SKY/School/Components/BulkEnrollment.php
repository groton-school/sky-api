<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Model to define bulk enrollments for both students and teachers
 *
 * @property int $id The duration ID of section to be enrolled in. Corresponds
 *   to the ```duration ID``` in the [section
 *   list](https://developer.sky.blackbaud.com/docs/services/school/operations/V1AcademicsSectionsGet).
 * @property string $enrollment_date The effective date that users will be
 *   added to the sections. Uses [ISO-8601](https://tools.ietf.org/html/rfc3339)
 *   (24H) format: 2003-04-21T10:29:43
 * @property string $section_ids Comma delimited list of sections to which you
 *   want to add the users listed above into
 * @property string $user_ids Comma delimited list of ids representing users
 *   to be added to the sections listed below
 *
 * @api
 */
class BulkEnrollment extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id",
        "enrollment_date",
        "section_ids",
        "user_ids",
    ];
}
