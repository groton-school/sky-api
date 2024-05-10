<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * CreateConstituentSolicitCode
 *
 * @property string $constituent_id The constituent ID.
 * @property string $solicit_code The solicit code. This simple list can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/ea7286bd-d27b-4028-b507-4bdb92580499?parameters=feature\_id,{b6a5f4eb-adf7-4fa4-a3e0-8cd96e58d8c2}&amp;parameters=feature\_type,{1}.
 * @property string $start_date The start date. Uses the format
 *   YYYY-MM-DDThh:mm:ss. An example date: *1955-11-05T22:04:00*.
 * @property string $end_date The end date. Uses the format
 *   YYYY-MM-DDThh:mm:ss. An example date: *1955-11-05T22:04:00*.
 * @property string $comments The comments.
 *
 * @api
 */
class NewConstituentSolicitCode extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "constituent_id" => "string",
        "solicit_code" => "string",
        "start_date" => "string",
        "end_date" => "string",
        "comments" => "string",
    ];
}
