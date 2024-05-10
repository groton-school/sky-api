<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ListConstituentMemberships
 *
 * @property string $id The ID.
 * @property string $membership_name The membership.
 * @property string $primary_member_name The primary member.
 * @property string $combo_id The combo ID.
 * @property int $status_code The status code.
 *
 * @api
 */
class ConstituentMembershipsListSummary extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "membership_name" => "string",
        "primary_member_name" => "string",
        "combo_id" => "string",
        "status_code" => "int",
    ];
}
