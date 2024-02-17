<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $id The Id of the user for whom this data belongs
 * @property int $parent_id
 * @property \Blackbaud\SKY\School\Objects\Major $major
 * @property \Blackbaud\SKY\School\Objects\Minor $minor
 * @property \Blackbaud\SKY\School\Objects\Concentration $concentration
 * @property string $cip_prefix
 * @property string $cip_suffix
 *
 * @api
 */
class UserMajorMinorConcentrationOutputModel extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "id",
        "parent_id",
        "major",
        "minor",
        "concentration",
        "cip_prefix",
        "cip_suffix",
    ];
}
