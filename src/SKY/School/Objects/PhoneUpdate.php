<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * PhoneUpdate Model
 *
 * @property string | null $number The phone number
 * @property int | null $type_id The type ID of a phone number; the type ID
 *   corresponds with the type of phone number (ex. Cell, Work, Home)
 *
 * @api
 */
class PhoneUpdate extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["number","type_id"];
}
