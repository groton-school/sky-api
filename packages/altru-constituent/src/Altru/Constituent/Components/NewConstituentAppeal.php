<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * CreateConstituentAppeal
 *
 * @property string $constituent_id The constituent id.
 * @property string $appeal_id The appeal.
 * @property string $mkt_segmentation The mailing. This simple list can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/664c0aa7-9f88-46f6-ba84-7b412e1131b5?parameters=appeal\_id,{appeal\_id}.
 * @property string $date_sent The date sent.Uses the format YYYY-MM-DD. An
 *   example date: *2019-11-21*.
 * @property string $mkt_package_id The package.
 * @property string $source_code The source code.
 * @property string $comments The comments.
 *
 * @api
 */
class NewConstituentAppeal extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "constituent_id" => "string",
        "appeal_id" => "string",
        "mkt_segmentation" => "string",
        "date_sent" => "string",
        "mkt_package_id" => "string",
        "source_code" => "string",
        "comments" => "string",
    ];
}
