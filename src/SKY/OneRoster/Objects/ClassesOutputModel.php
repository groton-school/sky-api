<?php

namespace Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property \Blackbaud\SKY\OneRoster\Objects\ClassModel[] $classes
 * @property \Blackbaud\SKY\OneRoster\Objects\StatusInfoModel[] $statusInfoSet
 *
 * @api
 */
class ClassesOutputModel extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "classes",
        "statusInfoSet",
    ];
}
