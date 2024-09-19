<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?bool $give_parental_access Set to true if the parent user should
 *   have parental access for the child user. Defaults to false. Used only for
 *   Parent/Child relationship.
 * @property ?bool $list_as_parent Set to true if the parent user should be
 *   listed as a parent of the child user. Defaults to false. Used only for
 *   Parent/Child relationship.
 * @property ?bool $tuition_responsible_signer Set to true if the parent user
 *   is a responsible signer for the child user. Defaults to false. Used only
 *   for Parent/Child relationship.
 * @property ?bool $resides_with Set to true if the child user resides with
 *   the parent user. Defaults to false. Used only for Parent/Child
 *   relationship.
 * @property ?bool $do_not_contact Set to true to indicate the relationship
 *   user (specified by left\_user) should not be contacted. Defaults to false.

 * @property bool $primary Set to true if the relationship user (specified by
 *   left\_user) is the primary contact. Defaults to false. When set to true,
 *   this will set primary for the current primary relationship to false.
 * @property ?string $comments The comment for the relationship.
 *
 * @api
 */
class RelationshipUpdate extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "give_parental_access" => "bool",
        "list_as_parent" => "bool",
        "tuition_responsible_signer" => "bool",
        "resides_with" => "bool",
        "do_not_contact" => "bool",
        "primary" => "bool",
        "comments" => "string",
    ];
}
