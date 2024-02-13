<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Model to define bulk enrollments for both students and teachers
 *
 * @property int $id The duration ID of section to be enrolled in. Corresponds
 *   to the ```duration ID``` in the <a
 *   href="https://developer.sky.blackbaud.com/docs/services/school/operations/V1AcademicsSectionsGet">section
 *   list</a>.
 * @property string $enrollment_date The effective date that users will be
 *   added to the sections. Uses <a href="https://tools.ietf.org/html/rfc3339"
 *   target="_blank">ISO-8601</a> (24H) format: 2003-04-21T10:29:43
 * @property string $section_ids Comma delimited list of sections to which you
 *   want to add the users listed above into
 * @property string $user_ids Comma delimited list of ids representing users
 *   to be added to the sections listed below
 *
 * @api
 */
class BulkEnrollment extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","enrollment_date","section_ids","user_ids"];
}
