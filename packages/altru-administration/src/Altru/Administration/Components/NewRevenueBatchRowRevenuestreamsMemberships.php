<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * NewRevenueBatchRowRevenuestreamsMemberships
 *
 * @property string $membership_program The program. This simple list can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/eb44b0ac-c3b3-4f3f-986e-e5ac8887509a.
 * @property string $membership_level The level. This simple list can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/6ef82fa0-f3d8-4f2b-b47d-872c57dd61d9?parameters=membershipprogramid,{membershipprogramid}.
 * @property string $membership_level_term The term. This simple list can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/0e2e7741-0069-4558-b14c-d2f81aaa41bc?parameters=membershiplevelid,{membershiplevelid}.
 * @property string $membership_type_code The type. This simple list can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/135ac6e3-fd74-4cbe-9529-a2ce43e921f3?parameters=membershiplevelid,{membershiplevelid}.
 * @property int $number_of_children no. of children
 * @property string $comments comments
 * @property bool $gift this membership is a gift
 * @property string $send_renewal The send renewal notice to. Available values
 *   are *giver*, *primary member*, *giver and primary member*
 * @property string $expiration_date expiration date
 * @property string $given_by_id given by
 * @property float $amount amount
 * @property \Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowRevenuestreamsMembershipsMembers[]
 *   $members Members.
 *
 * @api
 */
class NewRevenueBatchRowRevenuestreamsMemberships extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "membership_program" => "string",
        "membership_level" => "string",
        "membership_level_term" => "string",
        "membership_type_code" => "string",
        "number_of_children" => "int",
        "comments" => "string",
        "gift" => "bool",
        "send_renewal" => "string",
        "expiration_date" => "string",
        "given_by_id" => "string",
        "amount" => "float",
        "members" => "\Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowRevenuestreamsMembershipsMembers[]",
    ];
}
