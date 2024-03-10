<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Candidate Read
 *
 * @property ?int $user_id Unique Identifer for this candidate
 * @property ?string $first_name Candidates first name
 * @property ?string $last_name Candidates last name
 * @property ?string $middle_name Candidates middle name
 * @property ?string $prefix Prefix
 * @property ?string $suffix Suffix
 * @property ?string $nickname Candidates nick name (if available)
 * @property ?string $role Role for this candidate.
 * @property ?int $role_id Identifier for thier role
 * @property ?string $current_status Text representation of their current
 *   enrollment status
 * @property ?int $status_id Identifier for their enrollment status
 * @property ?string $entering_year Text representation of the school year the
 *   candidate will be joining
 * @property ?int $entering_year_id Identifier for the school year the
 *   candidate will be joining
 * @property ?string $entering_grade Text representation of the grade
 *   candidate will be joining
 * @property ?int $entering_grade_id Identifier for the grade candidate will
 *   be joining
 * @property ?string $email Candidates email
 * @property ?string $comment Comments
 * @property ?string $parent1_email 1st Email of candidates parent
 * @property ?string $parent2_email 2nd email of candidates parent
 * @property ?bool $international
 * @property ?string $school_program
 * @property ?string $gender
 * @property ?string $ethnicity
 * @property ?string $boarding_or_day
 * @property ?bool $financial_aid
 * @property ?int $admissions_staff_id
 * @property ?string $admissions_staff
 * @property ?string $inquiry_source
 * @property ?int $inquiry_source_id
 * @property ?string $referral_type
 * @property ?int $referral_type_id
 * @property ?bool $has_iep
 * @property ?bool $has_504
 * @property ?string $created_by
 * @property ?string $created
 * @property ?string $modified_by
 * @property ?string $modified
 * @property ?string $preferred_name
 * @property \Blackbaud\SKY\School\Components\SchoolDecisionModel $decision
 * @property ?int $family_id
 * @property ?string $current_status_date Current status date
 * @property \Blackbaud\SKY\School\Components\ApplicationModel $application
 *
 * @api
 */
class CandidateRead extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "user_id" => "int",
        "first_name" => "string",
        "last_name" => "string",
        "middle_name" => "string",
        "prefix" => "string",
        "suffix" => "string",
        "nickname" => "string",
        "role" => "string",
        "role_id" => "int",
        "current_status" => "string",
        "status_id" => "int",
        "entering_year" => "string",
        "entering_year_id" => "int",
        "entering_grade" => "string",
        "entering_grade_id" => "int",
        "email" => "string",
        "comment" => "string",
        "parent1_email" => "string",
        "parent2_email" => "string",
        "international" => "bool",
        "school_program" => "string",
        "gender" => "string",
        "ethnicity" => "string",
        "boarding_or_day" => "string",
        "financial_aid" => "bool",
        "admissions_staff_id" => "int",
        "admissions_staff" => "string",
        "inquiry_source" => "string",
        "inquiry_source_id" => "int",
        "referral_type" => "string",
        "referral_type_id" => "int",
        "has_iep" => "bool",
        "has_504" => "bool",
        "created_by" => "string",
        "created" => "string",
        "modified_by" => "string",
        "modified" => "string",
        "preferred_name" => "string",
        "decision" => "\Blackbaud\SKY\School\Components\SchoolDecisionModel",
        "family_id" => "int",
        "current_status_date" => "string",
        "application" => "\Blackbaud\SKY\School\Components\ApplicationModel",
    ];
}
