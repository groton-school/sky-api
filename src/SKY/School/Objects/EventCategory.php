<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Event Category Model
 *
 * @property int $id The ID of the event category
 * @property string | null $description The name of the event category
 * @property string | null $calendar_url The URL of the ICS feed used to
 *   populate the event category
 * @property bool | null $include_brief_description If set to True, brief
 *   description is included in events in the category
 * @property bool | null $include_long_description If set to True, long
 *   description is included in events in the category
 * @property bool | null $public If set to True, the event category is public.
 *    If set to False, it is secure and only users with the allowed list of
 *   roles can see the events in the category
 * @property int[] | null $roles List of Role IDs that are allowed to see a
 *   secure event category
 *
 * @api
 */
class EventCategory extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","description","calendar_url","include_brief_description","include_long_description","public","roles"];
}
