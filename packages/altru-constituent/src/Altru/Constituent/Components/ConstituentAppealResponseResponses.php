<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ConstituentAppealResponseResponses
 *
 * @property string $date date
 * @property string $response_category The category. This simple list can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/fa5c3e42-aea6-450c-a66f-e79919df98d8.
 * @property string $response The response. This simple list can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/e48745a4-b8cd-4e31-885a-3173d7374ea6?parameters=responsecategoryid,{response\_category}.
 * @property string $code code
 *
 * @api
 */
class ConstituentAppealResponseResponses extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "date" => "string",
        "response_category" => "string",
        "response" => "string",
        "code" => "string",
    ];
}
