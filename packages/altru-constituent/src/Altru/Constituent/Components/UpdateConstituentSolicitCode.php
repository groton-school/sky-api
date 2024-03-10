<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * UpdateConstituentSolicitCode
 *
 * @property string $solicit_code The solicit code. This simple list can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/ea7286bd-d27b-4028-b507-4bdb92580499?parameters=feature\_id,{c5b90f15-b76b-48e3-bf4f-b55c8717d36e}&amp;parameters=feature\_type,{1}.
 * @property string $start_date The start date.Uses the format YYYY-MM-DD. An
 *   example date: *2019-11-21*.
 * @property string $end_date The end date.Uses the format YYYY-MM-DD. An
 *   example date: *2019-11-21*.
 * @property string $comments The comments.
 *
 * @api
 */
class UpdateConstituentSolicitCode extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "solicit_code" => "string",
        "start_date" => "string",
        "end_date" => "string",
        "comments" => "string",
    ];
}
