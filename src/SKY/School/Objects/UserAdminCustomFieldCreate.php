<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Object that describes the custom field to be created
 *
 * @property int $field_id The ID of the custom field to update. This value is
 *   returned from <a
 *   href="https://developer.sky.blackbaud.com/docs/services/school/operations/V1CustomfieldsGet"
 *   target="_blank">Core custom fields</a>.
 * @property int $data_type_id The ID of the data type of the custom field.
 *   This value is returned from <a
 *   href="https://developer.sky.blackbaud.com/docs/services/school/operations/V1CustomfieldsGet"
 *   target="_blank">Core custom fields</a>.
 * @property int | null $int_value If the field format is Number, use this
 *   property for the value of the custom field. Values must be a whole number
 *   (positive or negative).<br />
 * @property string | null $text_value If the field format is Text input or
 *   Text paragraph, use this property for the value of the custom field.
 * @property double | null $decimal_value If the field format is Currency, use
 *   this property for the value of the custom field. Values must be between
 *   0.00 and 99,999,999.99.
 * @property string | null $date_value If field format is Date, use this
 *   property for the value of the custom field. Values must be formatted
 *   YYYY/MM/DD.
 * @property bool | null $bit_value If field format is Yes/No or Checkbox, use
 *   this property for the value of the custom field. Values must be 'true" or
 *   'false'.
 *
 * @api
 */
class UserAdminCustomFieldCreate extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["field_id","data_type_id","int_value","text_value","decimal_value","date_value","bit_value"];
}
