<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * An object with athletic roster user information
 *
 * @property \Blackbaud\SKY\School\Components\Player $player Player
 * @property \Blackbaud\SKY\School\Components\UserBaseRead $user UserBaseRead
 *   Model
 * @property ?string $enroll_date The date enrolled
 * @property ?string $depart_date The date dropped or left
 * @property \Blackbaud\SKY\School\Components\RosterLeader $leader An object
 *   with leader information
 * @property \Blackbaud\SKY\School\Components\ProfilePictureUrls $photo An
 *   object with profile photo and thumbnail
 *
 * @api
 */
class AthleticRosters extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "player" => "\Blackbaud\SKY\School\Components\Player",
        "user" => "\Blackbaud\SKY\School\Components\UserBaseRead",
        "enroll_date" => "string",
        "depart_date" => "string",
        "leader" => "\Blackbaud\SKY\School\Components\RosterLeader",
        "photo" => "\Blackbaud\SKY\School\Components\ProfilePictureUrls",
    ];
}
