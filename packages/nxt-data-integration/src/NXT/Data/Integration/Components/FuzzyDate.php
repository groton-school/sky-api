<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?int $d
 * @property ?int $m
 * @property ?int $y
 *
 * @api
 */
class FuzzyDate extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "d" => "int",
        "m" => "int",
        "y" => "int",
    ];
}
