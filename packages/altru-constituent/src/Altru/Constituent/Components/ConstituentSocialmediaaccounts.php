<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ConstituentSocialMediaAccounts
 *
 * @property string $id id
 * @property string $social_media_service_id socialmediaserviceid
 * @property string $social_media_service_name socialmediaservicename
 * @property string $social_media_service_icon socialmediaserviceicon
 * @property string $user_id userid
 * @property string $url url
 * @property string $social_media_account_type_code_id
 *   socialmediaaccounttypecodeid
 * @property string $social_media_account_type socialmediaaccounttype
 * @property string $info_source_code_id infosourcecodeid
 * @property string $info_source infosource
 * @property bool $do_not_contact donotcontact
 * @property int $sequence sequence
 *
 * @api
 */
class ConstituentSocialMediaAccounts extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "social_media_service_id" => "string",
        "social_media_service_name" => "string",
        "social_media_service_icon" => "string",
        "user_id" => "string",
        "url" => "string",
        "social_media_account_type_code_id" => "string",
        "social_media_account_type" => "string",
        "info_source_code_id" => "string",
        "info_source" => "string",
        "do_not_contact" => "bool",
        "sequence" => "int",
    ];
}
