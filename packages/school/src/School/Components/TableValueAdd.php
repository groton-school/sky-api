<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * An object with table value information
 *
 * @property string $description The description of the table value
 * @property ?string $abbreviation The abbreviation of the table value.
 *   Maximum length is 6 characters
 *
 * @api
 */
class TableValueAdd extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "description" => "string",
        "abbreviation" => "string",
    ];
}
