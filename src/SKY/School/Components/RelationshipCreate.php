<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

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
class RelationshipCreate extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "relationship_type",
        "give_parental_access",
        "list_as_parent",
        "tuition_responsible_signer",
        "left_user",
    ];
}
