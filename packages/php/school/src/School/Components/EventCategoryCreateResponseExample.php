<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * EventCategoryCreateResponseExample
 *
 * @property int $id Id
 *
 * @api
 */
class EventCategoryCreateResponseExample extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
    ];
}
