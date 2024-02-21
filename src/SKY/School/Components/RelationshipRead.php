<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * RelationshipRead Model
 *
 * @property ?string $id ID of the relationship
 * @property ?string $comment A comment describing the relationship
 * @property bool $contact Returns True if the user can be contacted. Returns
 *   False if the user is marked as 'No Contact' in the UI.
 * @property ?string $first_name The first name of the user(s) associated with
 *   the queried user
 * @property ?string $last_name The last name of the user(s) associated with
 *   the queried user
 * @property bool $list_as_parent Returns True if List as Parent is enabled in
 *   the UI for a user. If enabled, the user can be listed in directories as the
 *   student's parent
 * @property bool $parental_access Returns True if Parental Access is enabled
 *   in the UI for a relationship type
 * @property bool $primary Returns True if the user in a relationship is the
 *   primary user
 * @property ?int $relationship The enum value that describes the relationship
 *   (ex. Parent_Child = 6)
 * @property bool $resides_with Returns True if Resides With is enabled in the
 *   UI. If enabled, then the user in a relationship resides with the queried
 *   user
 * @property bool $show_parent Returns True if a parent's contact information
 *   is displayable in the directory
 * @property bool $tuition_responsible_signer Returns True if Responsible
 *   Signer is enabled in the UI for a user. If enabled, it indicates the user
 *   signs enrollment contracts in onBoard
 * @property ?int $type_id The ID of the relationship type. The ID corresponds
 *   with static options in the UI
 * @property ?int $user_one_id The ID of the user associated with user_two_id
 * @property ?string $user_one_role The role of the user being queried
 * @property ?int $user_two_id The ID of the user associated with user_one_id
 *
 * @api
 */
class RelationshipRead extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "comment" => "string",
        "contact" => "bool",
        "first_name" => "string",
        "last_name" => "string",
        "list_as_parent" => "bool",
        "parental_access" => "bool",
        "primary" => "bool",
        "relationship" => "int",
        "resides_with" => "bool",
        "show_parent" => "bool",
        "tuition_responsible_signer" => "bool",
        "type_id" => "int",
        "user_one_id" => "int",
        "user_one_role" => "string",
        "user_two_id" => "int",
    ];
}
