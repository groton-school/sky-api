<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Event Category Model
 *
 * @property int $id The ID of the event category
 * @property ?string $description The name of the event category
 * @property ?string $calendar_url The URL of the ICS feed used to populate
 *   the event category
 * @property ?bool $include_brief_description If set to True, brief
 *   description is included in events in the category
 * @property ?bool $include_long_description If set to True, long description
 *   is included in events in the category
 * @property ?bool $public_ If set to True, the event category is public. If
 *   set to False, it is secure and only users with the allowed list of roles
 *   can see the events in the category
 * @property ?int[] $roles List of Role IDs that are allowed to see a secure
 *   event category
 *
 * @api
 */
class EventCategory extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "description" => "string",
        "calendar_url" => "string",
        "include_brief_description" => "bool",
        "include_long_description" => "bool",
        "public" => "bool",
        "roles" => "int[]",
    ];
}
