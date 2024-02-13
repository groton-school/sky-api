<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * List Model
 *
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\Row[] | null $rows The
 *   Rows of the list
 *
 * @api
 */
class _List extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["rows"];
}
