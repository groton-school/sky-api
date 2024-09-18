<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * An object with candidate event information
 *
 * @property ?int $id The ID of the candidate event
 * @property ?string $name The name of the event
 * @property \Blackbaud\SKY\School\Components\SourceModel $type
 * @property ?string $start_time The start time of the event
 * @property ?bool $is_registered True if the candidate is registered
 * @property ?bool $attended True if the candidate attended the event
 * @property ?string $comment The comment on the candidate event
 *
 * @api
 */
class CandidateEventReadModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "name" => "string",
        "type" => "\Blackbaud\SKY\School\Components\SourceModel",
        "start_time" => "string",
        "is_registered" => "bool",
        "attended" => "bool",
        "comment" => "string",
    ];
}
