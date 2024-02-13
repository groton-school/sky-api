<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * RelationshipRead Model
 *
 * @property string | null $id ID of the relationship
 * @property string | null $comment A comment describing the relationship
 * @property bool $contact Returns True if the user can be contacted. Returns
 *   False if the user is marked as 'No Contact' in the UI.
 * @property string | null $first_name The first name of the user(s)
 *   associated with the queried user
 * @property string | null $last_name The last name of the user(s) associated
 *   with the queried user
 * @property bool $list_as_parent Returns True if List as Parent is enabled in
 *   the UI for a user. If enabled, the user can be listed in directories as
 *   the student's parent
 * @property bool $parental_access Returns True if Parental Access is enabled
 *   in the UI for a relationship type
 * @property bool $primary Returns True if the user in a relationship is the
 *   primary user
 * @property int | null $relationship The enum value that describes the
 *   relationship (ex. Parent_Child = 6)
 * @property bool $resides_with Returns True if Resides With is enabled in the
 *   UI. If enabled, then the user in a relationship resides with the queried
 *   user
 * @property bool $show_parent Returns True if a parent's contact information
 *   is displayable in the directory
 * @property bool $tuition_responsible_signer Returns True if Responsible
 *   Signer is enabled in the UI for a user. If enabled, it indicates the user
 *   signs enrollment contracts in onBoard
 * @property int | null $type_id The ID of the relationship type. The ID
 *   corresponds with static options in the UI
 * @property int | null $user_one_id The ID of the user associated with
 *   user_two_id
 * @property string | null $user_one_role The role of the user being queried
 * @property int | null $user_two_id The ID of the user associated with
 *   user_one_id
 *
 * @api
 */
class RelationshipRead extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","comment","contact","first_name","last_name","list_as_parent","parental_access","primary","relationship","resides_with","show_parent","tuition_responsible_signer","type_id","user_one_id","user_one_role","user_two_id"];
}
