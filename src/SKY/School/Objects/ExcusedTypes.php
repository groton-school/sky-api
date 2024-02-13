<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property string | null $category_description The category that the excuse
 *   associated with
 * @property int | null $category_id The ID of category that the excuse
 *   associated with
 * @property int | null $excuse_type_id The ID of the excuse type
 * @property string | null $excuse_description The description of the excuse
 *   type
 * @property bool | null $use_in_calculations The Use In Calculations flag
 * @property string | null $excused The Excused/Unexecused status
 * @property string | null $duration The Full Day/Half day status
 * @property string | null $attendance_type The attendance type
 *
 * @api
 */
class ExcusedTypes extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["category_description","category_id","excuse_type_id","excuse_description","use_in_calculations","excused","duration","attendance_type"];
}
