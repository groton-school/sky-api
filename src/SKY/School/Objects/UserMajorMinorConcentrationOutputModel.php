<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int | null $id The Id of the user for whom this data belongs
 * @property int | null $parent_id 
 * @property \GrotonSchool\Blackbaud\SKY\School\Objects\Major $major 
 * @property \GrotonSchool\Blackbaud\SKY\School\Objects\Minor $minor 
 * @property \GrotonSchool\Blackbaud\SKY\School\Objects\Concentration
 *   $concentration 
 * @property string | null $cip_prefix 
 * @property string | null $cip_suffix 
 *
 * @api
 */
class UserMajorMinorConcentrationOutputModel extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","parent_id","major","minor","concentration","cip_prefix","cip_suffix"];
}
