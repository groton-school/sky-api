<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* Player
*
* @property int $id
* @property string|null $accolades
* @property string|null $first_name
* @property string|null $height
* @property string|null $hometown
* @property int|null $jersey
* @property string|null $last_name
* @property string|null $position
* @property bool $returning_letter
* @property bool $team_captain
* @property string|null $weight
* @property string|null $preferred_name
@api
*/
class Player extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","accolades","first_name","height","hometown","jersey","last_name","position","returning_letter","team_captain","weight","preferred_name"];
}
