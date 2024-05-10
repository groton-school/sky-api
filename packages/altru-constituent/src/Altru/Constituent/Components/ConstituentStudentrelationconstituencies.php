<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ConstituentStudentRelationConstituencies
 *
 * @property string $description description
 * @property int $sequence sequence
 *
 * @api
 */
class ConstituentStudentRelationConstituencies extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "description" => "string",
        "sequence" => "int",
    ];
}
