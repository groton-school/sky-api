<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Event Category Model
 *
 * @property int $id
 * @property string|null $description
 * @property string|null $calendar_url
 * @property bool|null $include_brief_description
 * @property bool|null $include_long_description
 * @property bool|null $public
 * @property _int|null $roles
 * @api
 */
class EventCategory extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","description","calendar_url","include_brief_description","include_long_description","public","roles"];
}
