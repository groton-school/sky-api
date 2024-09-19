<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * An object with section roster information
 *
 * @property \Blackbaud\SKY\School\Components\Section $section An object with
 *   section information
 * @property ?\Blackbaud\SKY\School\Components\AthleticRosters[] $roster An
 *   array of roster users assigned to the section. This includes members and
 *   leaders.
 *
 * @api
 */
class AthleticSectionRoster extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "section" => "\Blackbaud\SKY\School\Components\Section",
        "roster" => "\Blackbaud\SKY\School\Components\AthleticRosters[]",
    ];
}
