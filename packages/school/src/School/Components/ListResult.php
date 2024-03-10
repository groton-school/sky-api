<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * List Collection
 *
 * @property int $count The number of records in the page
 * @property int $page The number of the page for the current result set
 * @property \Blackbaud\SKY\School\Components\List_ $results List Model
 *
 * @api
 */
class ListResult extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "count" => "int",
        "page" => "int",
        "results" => "\Blackbaud\SKY\School\Components\List_",
    ];
}
