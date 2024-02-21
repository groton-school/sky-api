<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property string $relationship_type The nature of the relationship; modeled
 *   where left_user 'is a' relationship to this individual. Required.
 * @property ?bool $give_parental_access Toggles 'Give Parental Access'
 *   option.
 * @property ?bool $list_as_parent Toggles 'List as a Parent' option.
 * @property ?bool $tuition_responsible_signer Toggles 'Responsible for
 *   Signing Contract' option.
 * @property int $left_user ID of the other individual in the relationship
 *   with this person
 *
 * @api
 */
class RelationshipCreate extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "relationship_type" => "string",
        "give_parental_access" => "bool",
        "list_as_parent" => "bool",
        "tuition_responsible_signer" => "bool",
        "left_user" => "int",
    ];
}
