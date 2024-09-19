<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property "NOT_SET"|"StepParent_StepChild"|"GrGrandParent_GrGrandChild"|"Guardian_Ward"|"AuntUncle_NieceNephew"|"Grandparent_Grandchild"|"Parent_Child"|"Custodian_Student"|"Consultant_Student"|"Caretaker_Charge"|"SpousePartner_SpousePartner"|"StepSibling_StepSibling"|"ExHusband_ExWife"|"Associate_Associate"|"HalfSibling_HalfSibling"|"Husband_Wife"|"Spouse_Spouse"|"Sibling_Sibling"|"Cousin_Cousin"|"Friend_Friend"
 *   $relationship_type The nature of the relationship; modeled where left\_user
 *   'is a' relationship to this individual. Required.
 * @property ?bool $give_parental_access Toggles 'Give Parental Access'
 *   option.
 * @property ?bool $list_as_parent Toggles 'List as a Parent' option.
 * @property ?bool $tuition_responsible_signer Toggles 'Responsible for
 *   Signing Contract' option.
 * @property int $left_user ID of the other individual in the relationship
 *   with this person
 * @property bool $resides_with Set to true if the child user resides with the
 *   parent user.
 * @property bool $do_not_contact Set to true to indicate the relationship
 *   user (specified by left\_user) should not be contacted.
 * @property bool $primary Set to true if the relationship user (specified by
 *   left\_user) is the primary contact.
 * @property ?string $comments Comment for the relationship
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
        "resides_with" => "bool",
        "do_not_contact" => "bool",
        "primary" => "bool",
        "comments" => "string",
    ];
}
