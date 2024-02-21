<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?string $business_name Name of the employing business
 * @property ?string $job_title Employed individuals job title
 * @property ?string $business_url Url of the employing business
 * @property ?string $industry Industry of the employing business
 * @property ?string $organization Maps to the employee's 'Organization' field
 * @property ?string $occupation Maps to the employee's 'Profession' field
 * @property ?bool $matching_gift Indicates if employer matches employee
 *   donations
 * @property ?string $begin_date Employees start date at this business
 * @property ?string $end_date Employees end date at this business
 * @property ?string $specialty Maps to the employee's 'Specialty' field
 * @property ?string $parent_company Parent company of employing business
 * @property ?string $job_function Description of the work done by the
 *   employee
 * @property ?int $years_employed Number of years employee has been at this
 *   business
 * @property ?bool $current Indicates if this is the individuals current
 *   employer
 *
 * @api
 */
class OccupationCreate extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "business_name" => "string",
        "job_title" => "string",
        "business_url" => "string",
        "industry" => "string",
        "organization" => "string",
        "occupation" => "string",
        "matching_gift" => "bool",
        "begin_date" => "string",
        "end_date" => "string",
        "specialty" => "string",
        "parent_company" => "string",
        "job_function" => "string",
        "years_employed" => "int",
        "current" => "bool",
    ];
}
