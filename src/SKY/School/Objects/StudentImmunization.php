<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Student immunization
 *
 * @property string $immunization_type The ID or description of the
 *   immunization type
 * @property string | null $immunization_date The date of the immunization.
 *   Use format ...
 *
 * @api
 */
class StudentImmunization extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["immunization_type","immunization_date"];
}
