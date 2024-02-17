<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * An object for visa information
 *
 * @property string $number The number of the user visa.
 * @property \Blackbaud\SKY\School\Objects\IdDescriptorField $status
 * @property \Blackbaud\SKY\School\Objects\IdDescriptorField $type
 * @property string $issue_date The issue date of the user visa.
 * @property string $expire_date The expire date of the user visa.
 *
 * @api
 */
class UserVisa extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "number",
        "status",
        "type",
        "issue_date",
        "expire_date",
    ];
}
