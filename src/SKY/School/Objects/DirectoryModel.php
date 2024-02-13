<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $id The Id of the directory
 * @property string | null $name the name of the directory
 * @property int $sort The sort order that the directory should be displayed
 *
 * @api
 */
class DirectoryModel extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","name","sort"];
}
