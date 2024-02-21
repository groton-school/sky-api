<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property \Blackbaud\SKY\OneRoster\Components\ClassModel $class
 * @property ?\Blackbaud\SKY\OneRoster\Components\StatusInfoModel[]
 *   $statusInfoSet
 *
 * @api
 */
class ClassOutputModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "class" => "\Blackbaud\SKY\OneRoster\Components\ClassModel",
        "statusInfoSet" => "\Blackbaud\SKY\OneRoster\Components\StatusInfoModel[]",
    ];
}
