<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Student immunization type
 *
 * @property int | null $id The ID of immunization type
 * @property string | null $description The description of immunization type
 * @property bool | null $required Returns true if immunization type is
 *   required else false
 *
 * @api
 */
class StudentImmunizationType extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","description","required"];
}
