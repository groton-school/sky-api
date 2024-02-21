<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property int $id ID of the coach
 * @property ?string $first_name Coach's first name
 * @property ?string $last_name Coach's last name
 * @property ?string $title Coach's title
 * @property ?string $preferred_name Preferred Name
 *
 * @api
 */
class Coach extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "first_name" => "string",
        "last_name" => "string",
        "title" => "string",
        "preferred_name" => "string",
    ];
}
