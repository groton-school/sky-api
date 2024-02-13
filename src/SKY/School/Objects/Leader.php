<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Leader Model
 *
 * @property int | null $id The user ID for the leader
 * @property bool | null $head The head leader indicator
 * @property string | null $name The firstname and lastname of the leader
 *
 * @api
 */
class Leader extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","head","name"];
}
