<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * NewRevenueBatchRowRevenuestreamsMembershipsMembers
 *
 * @property string $id id
 * @property string $constituent_id name
 * @property bool $primary primary
 * @property \Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowRevenuestreamsMembershipsMembersMembershipcards[]
 *   $membershipcards Membershipcards.
 *
 * @api
 */
class NewRevenueBatchRowRevenuestreamsMembershipsMembers extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "constituent_id" => "string",
        "primary" => "bool",
        "membershipcards" => "\Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowRevenuestreamsMembershipsMembersMembershipcards[]",
    ];
}
