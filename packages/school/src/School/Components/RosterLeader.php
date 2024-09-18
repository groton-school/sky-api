<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * An object with leader information
 *
 * @property ?bool $is_leader True if the roster user is a leader.
 * @property ?bool $is_head True if the leader is the head teacher, head
 *   coach, etc.
 * @property ?bool $is_faculty True if the leader is a faculty user
 * @property ?string $type The type of leader
 *
 * @api
 */
class RosterLeader extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "is_leader" => "bool",
        "is_head" => "bool",
        "is_faculty" => "bool",
        "type" => "string",
    ];
}
