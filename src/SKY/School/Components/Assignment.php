<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Assignment Model
 *
 * @property int $id The ID of the assignment
 * @property ?string $date The date the assignment was assigned; Uses
 *   [ISO-8601](https://tools.ietf.org/html/rfc3339) (24H) format:
 *   2003-04-21T10:29:43
 * @property ?string $description The description of the assignment
 * @property bool $discussion Returns True if Discussion is enabled;
 *   Discussion is a user-defined value.
 * @property ?string $due_date The date the assignment is due; Uses
 *   [ISO-8601](https://tools.ietf.org/html/rfc3339) (24H) format:
 *   2003-04-21T10:29:43
 * @property ?int $enrolled The number of students enrolled in a class.
 * @property ?int $graded_count Returns the number of assignments that have
 *   been graded
 * @property ?int $index_id The index ID of the assignment
 * @property bool $major Whether the assignment is a major assignment or not;
 *   a major assignment is a user-defined value
 * @property ?string $name The name of the assignment
 * @property bool $publish_on_assigned Returns True if assignment is published
 *   when it's assigned; based on the Date property
 * @property bool $published Returns True if the assignment is published
 * @property ?int $rank Gets or sets the rank of the assignment
 * @property ?int $status The status of the assignment
 * @property ?string $type The assignment type (ex. Homework, Essay)
 * @property ?int $type_id The Type ID of the assignment; the Type ID is a
 *   static system value.
 *
 * @api
 */
class Assignment extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "id",
        "date",
        "description",
        "discussion",
        "due_date",
        "enrolled",
        "graded_count",
        "index_id",
        "major",
        "name",
        "publish_on_assigned",
        "published",
        "rank",
        "status",
        "type",
        "type_id",
    ];
}
