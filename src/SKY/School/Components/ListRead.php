<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * ListRead Class
 *
 * @property int $id The id of the list
 * @property string $name The name of the list
 * @property string $type The list type, either Basic or Advanced
 * @property string $description The description of the list
 * @property string $category The category of the list
 * @property string $created_by The name of the user who created the list
 * @property string $created The date the list was created on
 * @property string $last_modified The date the list was last modified
 *
 * @api
 */
class ListRead extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "id",
        "name",
        "type",
        "description",
        "category",
        "created_by",
        "created",
        "last_modified",
    ];
}
