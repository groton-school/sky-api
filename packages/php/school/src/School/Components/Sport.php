<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Sports Model
 *
 * @property int $id The ID of the sport
 * @property \Blackbaud\SKY\School\Components\Level $level An object with
 *   school level information
 * @property ?string $name The name of the sport
 * @property \Blackbaud\SKY\School\Components\Season $season Season Model
 *
 * @api
 */
class Sport extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "level" => "\Blackbaud\SKY\School\Components\Level",
        "name" => "string",
        "season" => "\Blackbaud\SKY\School\Components\Season",
    ];
}
