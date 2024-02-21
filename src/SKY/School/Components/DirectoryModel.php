<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property int $id The Id of the directory
 * @property ?string $name the name of the directory
 * @property int $sort The sort order that the directory should be displayed
 *
 * @api
 */
class DirectoryModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "name" => "string",
        "sort" => "int",
    ];
}
