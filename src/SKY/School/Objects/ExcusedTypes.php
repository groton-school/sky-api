<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property string $category_description The category that the excuse
 *   associated with
 * @property int $category_id The ID of category that the excuse associated
 *   with
 * @property int $excuse_type_id The ID of the excuse type
 * @property string $excuse_description The description of the excuse type
 * @property bool $use_in_calculations The Use In Calculations flag
 * @property string $excused The Excused/Unexecused status
 * @property string $duration The Full Day/Half day status
 * @property string $attendance_type The attendance type
 *
 * @api
 */
class ExcusedTypes extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "category_description",
        "category_id",
        "excuse_type_id",
        "excuse_description",
        "use_in_calculations",
        "excused",
        "duration",
        "attendance_type",
    ];
}
