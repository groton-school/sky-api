<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $id The Id of the language
 * @property string $description The description fo the language
 *
 * @api
 */
class HomeLanguageRead extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "id",
        "description",
    ];
}
