<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $id The ID of the gender type
 * @property int $gender_type_id The ID of the gender type specific to the
 *   school
 * @property string $code The gender code
 * @property string $description The gender description
 * @property bool $active True if the gender is active
 * @property int $sort_order The sort order of the gender type
 * @property string $pronouns The pronouns associated with the gender type
 *
 * @api
 */
class GenderType extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "id",
        "gender_type_id",
        "code",
        "description",
        "active",
        "sort_order",
        "pronouns",
    ];
}
