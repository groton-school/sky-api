<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ListRead Class
 *
 * @property int $id The id of the list
 * @property ?string $name The name of the list
 * @property ?string $type The list type, either Basic or Advanced
 * @property ?string $description The description of the list
 * @property ?string $category The category of the list
 * @property ?string $created_by The name of the user who created the list
 * @property ?string $created The date the list was created on
 * @property ?string $last_modified The date the list was last modified
 *
 * @api
 */
class ListRead extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "name" => "string",
        "type" => "string",
        "description" => "string",
        "category" => "string",
        "created_by" => "string",
        "created" => "string",
        "last_modified" => "string",
    ];
}
