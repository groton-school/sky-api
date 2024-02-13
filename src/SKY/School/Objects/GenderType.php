<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int | null $id The ID of the gender type
 * @property int | null $gender_type_id The ID of the gender type specific to
 *   the school
 * @property string | null $code The gender code
 * @property string | null $description The gender description
 * @property bool | null $active True if the gender is active
 * @property int | null $sort_order The sort order of the gender type
 * @property string | null $pronouns The pronouns associated with the gender
 *   type
 *
 * @api
 */
class GenderType extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","gender_type_id","code","description","active","sort_order","pronouns"];
}
