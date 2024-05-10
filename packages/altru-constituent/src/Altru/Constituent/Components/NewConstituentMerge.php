<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * CreateMergeTwoConstituents
 *
 * @property string $source_id The the constituent whose data will be merged
 *   into the target constituent..
 * @property string $target_id The the constituent record that will represent
 *   the consolidated view of the constituent's data after the merge has
 *   completed..
 * @property string $config The the merge configuration that will be used to
 *   merge the two constituents.. This simple list can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/c18b465c-c012-4839-952b-4bb8aae7cb3f.
 * @property bool $delete_source Indicates whether if true then the source
 *   constituent will be deleted after the merge operation is complete..
 * @property string $constituent_inactivity_reason_code The inactive reason.
 *   This simple list can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/71b29b04-d70f-4d38-bab1-e44a2528d0e8.
 * @property string $constituent_inactivity_details The inactive details.
 * @property string $delete_source_constituent The delete source constituent.
 *   Available values are *delete source constituent*, *mark source constituent
 *   inactive*
 *
 * @api
 */
class NewConstituentMerge extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "source_id" => "string",
        "target_id" => "string",
        "config" => "string",
        "delete_source" => "bool",
        "constituent_inactivity_reason_code" => "string",
        "constituent_inactivity_details" => "string",
        "delete_source_constituent" => "string",
    ];
}
