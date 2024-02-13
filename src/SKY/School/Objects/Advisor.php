<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Advisor Model
 *
 * @property int | null $id The user ID for the advisor
 * @property bool | null $head The head advisor indicator
 * @property string | null $name The firstname and lastname of the advisor
 *
 * @api
 */
class Advisor extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","head","name"];
}
