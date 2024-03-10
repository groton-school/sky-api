<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * CreateConstituentCorrespondenceCode
 *
 * @property string $constituent_id The constituent id.
 * @property string $correspondence_code The the code associated with this
 *   correspondence.. This simple list can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/63305295-220e-43a1-b744-359c7ffb77f5.
 * @property string $date_sent The date when this correspondence was
 *   sent..Uses the format YYYY-MM-DD. An example date: *2019-11-21*.
 * @property string $comments The comments regarding this correspondence..
 *
 * @api
 */
class NewConstituentCorrespondenceCode extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "constituent_id" => "string",
        "correspondence_code" => "string",
        "date_sent" => "string",
        "comments" => "string",
    ];
}
