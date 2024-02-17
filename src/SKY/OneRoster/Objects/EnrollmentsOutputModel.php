<?php

namespace Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property \Blackbaud\SKY\OneRoster\Objects\EnrollmentModel[] $enrollments
 * @property \Blackbaud\SKY\OneRoster\Objects\StatusInfoModel[] $statusInfoSet
 *
 * @api
 */
class EnrollmentsOutputModel extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "enrollments",
        "statusInfoSet",
    ];
}
