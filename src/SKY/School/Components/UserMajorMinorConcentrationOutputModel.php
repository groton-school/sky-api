<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?int $id The Id of the user for whom this data belongs
 * @property ?int $parent_id
 * @property \Blackbaud\SKY\School\Components\Major $major
 * @property \Blackbaud\SKY\School\Components\Minor $minor
 * @property \Blackbaud\SKY\School\Components\Concentration $concentration
 * @property ?string $cip_prefix
 * @property ?string $cip_suffix
 *
 * @api
 */
class UserMajorMinorConcentrationOutputModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "parent_id" => "int",
        "major" => "\Blackbaud\SKY\School\Components\Major",
        "minor" => "\Blackbaud\SKY\School\Components\Minor",
        "concentration" => "\Blackbaud\SKY\School\Components\Concentration",
        "cip_prefix" => "string",
        "cip_suffix" => "string",
    ];
}
