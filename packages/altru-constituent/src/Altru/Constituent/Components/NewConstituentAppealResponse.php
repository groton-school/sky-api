<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * CreateConstituentAppealResponse
 *
 * @property string $constituent_appeal_id The constituent appeal id.
 * @property string $date The the date of the response. Uses the format
 *   YYYY-MM-DDThh:mm:ss. An example date: *1955-11-05T22:04:00*.
 * @property string $response_category The the response category. This simple
 *   list can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/fa5c3e42-aea6-450c-a66f-e79919df98d8. Read-only in the SOAP API.
 * @property string $response The the response. This simple list can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/e48745a4-b8cd-4e31-885a-3173d7374ea6?parameters=responsecategoryid,{responsecategoryid}.
 *
 * @api
 */
class NewConstituentAppealResponse extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "constituent_appeal_id" => "string",
        "date" => "string",
        "response_category" => "string",
        "response" => "string",
    ];
}
