<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Object that describes the custom field to be created
 *
 * @property ?string $id The id of that instance of the custom field for the
 *   specified user. This value is returned from [Users custom fields by
 *   user](https://developer.sky.blackbaud.com/docs/services/school/operations/V1UsersCustomfieldsGet).
 * @property int $field_id The ID of the custom field to update. This value is
 *   returned from [Core custom
 *   fields](https://developer.sky.blackbaud.com/docs/services/school/operations/V1CustomfieldsGet).
 * @property int $data_type_id The ID of the data type of the custom field.
 *   This value is returned from [Core custom
 *   fields](https://developer.sky.blackbaud.com/docs/services/school/operations/V1CustomfieldsGet).
 * @property ?int $int_value If the field format is Number, use this property
 *   for the value of the custom field. Values must be a whole number (positive
 *   or negative).
 * If the field format is Dropdown or Checkbox List, use this property for the
 *   value of the custom field. The value is the table value ID returned from
 *   [Core custom
 *   fields](https://developer.sky.blackbaud.com/docs/services/school/operations/V1CustomfieldsGet).
 * @property ?string $text_value If the field format is Text input or Text
 *   paragraph, use this property for the value of the custom field.
 * @property ?float $decimal_value If the field format is Currency, use this
 *   property for the value of the custom field. Values must be between 0.00 and
 *   99,999,999.99.
 * @property ?string $date_value If field format is Date, use this property
 *   for the value of the custom field. Values must be formatted YYYY/MM/DD.
 * @property ?bool $bit_value If field format is Yes/No or Checkbox, use this
 *   property for the value of the custom field. Values must be 'true" or
 *   'false'.
 *
 * @api
 */
class UserAdminCustomFieldUpdate extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id",
        "field_id",
        "data_type_id",
        "int_value",
        "text_value",
        "decimal_value",
        "date_value",
        "bit_value",
    ];
}
