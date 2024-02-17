<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * An object for visa information
 *
 * @property string $number The visa number of the user.
 * @property string $status The descriptor or ID of the visa status.
 *   Descriptors are not case sensitive, but otherwise must match the table
 *   value exactly.
 * @property string $type The descriptor or ID of the visa type. Descriptors
 *   are not case sensitive, but otherwise must match the table value exactly.
 * @property string $issue_date The visa issue date. Use ISO-8601 date format:
 *   2022-04-21.
 * @property string $expire_date The visa expiry date. Use ISO-8601 date
 *   format: 2022-04-21.
 *
 * @api
 */
class UserVisaAdd extends BaseObject
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
