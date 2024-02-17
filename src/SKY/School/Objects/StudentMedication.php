<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * An object for student medication information
 *
 * @property int $id The ID of the student’s medication
 * @property \Blackbaud\SKY\School\Objects\IdDescriptorField $medication
 * @property string $date_as_of The start date for the medication.
 * @property string $date_until The end date for the medication.
 *
 * @api
 */
class StudentMedication extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "id",
        "medication",
        "date_as_of",
        "date_until",
    ];
}
