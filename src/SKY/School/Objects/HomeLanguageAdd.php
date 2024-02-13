<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * HomeLanguageAdd Model
 *
 * @property string | null $language The ID or description of the language to
 *   be added to the user
 *
 * @api
 */
class HomeLanguageAdd extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["language"];
}
