<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * GetConstituentInteraction
 *
 * @property string $interaction_type The contact method. This codetable can
 *   be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/interactiontypecode/entries
 * @property string $objective The summary.
 * @property string $fundraiser_id The owner.
 * @property string $expected_date The expected date.Uses the format
 *   YYYY-MM-DD. An example date: *2019-11-21*.
 * @property string $actual_date The actual date.Uses the format YYYY-MM-DD.
 *   An example date: *2019-11-21*.
 * @property string $status The status. Available values are *pending*,
 *   *completed*, *canceled*, *declined*
 * @property string $comment The comment.
 * @property bool $step Indicates whether is step. Read-only in the SOAP API.
 * @property string $event_id The event.
 * @property \Blackbaud\SKY\Altru\Constituent\Components\ConstituentInteractionParticipants[]
 *   $participants participants
 * @property string $constituent_id The constituent id. Read-only in the SOAP
 *   API.
 * @property string $constituent_name The constituent name. Read-only in the
 *   SOAP API.
 * @property string $interaction_category The category. This simple list can
 *   be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/cbba7545-b66f-44ac-aa24-d9c2f8cbc4ec.
 * @property string $interaction_subcategory The subcategory. This simple list
 *   can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/0eacc39b-07d1-4641-8774-e319559535a7?parameters=interaction\_category\_id,{interaction\_category\_id}.
 * @property \Blackbaud\SKY\Altru\Constituent\Components\ConstituentInteractionSites[]
 *   $sites sites
 * @property \Blackbaud\SKY\Altru\Constituent\Components\HourMinute
 *   $expected_start_time HourMinute
 * @property \Blackbaud\SKY\Altru\Constituent\Components\HourMinute
 *   $expected_end_time HourMinute
 * @property bool $all_day_event Indicates whether all day event.
 * @property string $time_zone_entry The time zone. This simple list can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/7fba76fa-b1ea-4c01-b841-edb18f03fe8c.
 * @property \Blackbaud\SKY\Altru\Constituent\Components\HourMinute
 *   $actual_start_time HourMinute
 * @property \Blackbaud\SKY\Altru\Constituent\Components\HourMinute
 *   $actual_end_time HourMinute
 *
 * @api
 */
class ConstituentInteraction extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "interaction_type" => "string",
        "objective" => "string",
        "fundraiser_id" => "string",
        "expected_date" => "string",
        "actual_date" => "string",
        "status" => "string",
        "comment" => "string",
        "step" => "bool",
        "event_id" => "string",
        "participants" => "\Blackbaud\SKY\Altru\Constituent\Components\ConstituentInteractionParticipants[]",
        "constituent_id" => "string",
        "constituent_name" => "string",
        "interaction_category" => "string",
        "interaction_subcategory" => "string",
        "sites" => "\Blackbaud\SKY\Altru\Constituent\Components\ConstituentInteractionSites[]",
        "expected_start_time" => "\Blackbaud\SKY\Altru\Constituent\Components\HourMinute",
        "expected_end_time" => "\Blackbaud\SKY\Altru\Constituent\Components\HourMinute",
        "all_day_event" => "bool",
        "time_zone_entry" => "string",
        "actual_start_time" => "\Blackbaud\SKY\Altru\Constituent\Components\HourMinute",
        "actual_end_time" => "\Blackbaud\SKY\Altru\Constituent\Components\HourMinute",
    ];
}
