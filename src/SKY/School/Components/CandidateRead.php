<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Candidate Read
 *
 * @property int $user_id Unique Identifer for this candidate
 * @property string $first_name Candidates first name
 * @property string $last_name Candidates last name
 * @property string $middle_name Candidates middle name
 * @property string $prefix Prefix
 * @property string $suffix Suffix
 * @property string $nickname Candidates nick name (if available)
 * @property string $role Role for this candidate.
 * @property int $role_id Identifier for thier role
 * @property string $current_status Text representation of their current
 *   enrollment status
 * @property int $status_id Identifier for their enrollment status
 * @property string $entering_year Text representation of the school year the
 *   candidate will be joining
 * @property int $entering_year_id Identifier for the school year the
 *   candidate will be joining
 * @property string $entering_grade Text representation of the grade candidate
 *   will be joining
 * @property int $entering_grade_id Identifier for the grade candidate will be
 *   joining
 * @property string $email Candidates email
 * @property string $comment Comments
 * @property string $parent1_email 1st Email of candidates parent
 * @property string $parent2_email 2nd email of candidates parent
 * @property bool $international
 * @property string $school_program
 * @property string $gender
 * @property string $ethnicity
 * @property string $boarding_or_day
 * @property bool $financial_aid
 * @property int $admissions_staff_id
 * @property string $admissions_staff
 * @property string $inquiry_source
 * @property int $inquiry_source_id
 * @property string $referral_type
 * @property int $referral_type_id
 * @property bool $has_iep
 * @property bool $has_504
 * @property string $created_by
 * @property string $created
 * @property string $modified_by
 * @property string $modified
 * @property string $preferred_name
 * @property \Blackbaud\SKY\School\Components\SchoolDecisionModel $decision
 * @property int $family_id
 * @property string $current_status_date Current status date
 * @property \Blackbaud\SKY\School\Components\ApplicationModel $application
 *
 * @api
 */
class CandidateRead extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "user_id",
        "first_name",
        "last_name",
        "middle_name",
        "prefix",
        "suffix",
        "nickname",
        "role",
        "role_id",
        "current_status",
        "status_id",
        "entering_year",
        "entering_year_id",
        "entering_grade",
        "entering_grade_id",
        "email",
        "comment",
        "parent1_email",
        "parent2_email",
        "international",
        "school_program",
        "gender",
        "ethnicity",
        "boarding_or_day",
        "financial_aid",
        "admissions_staff_id",
        "admissions_staff",
        "inquiry_source",
        "inquiry_source_id",
        "referral_type",
        "referral_type_id",
        "has_iep",
        "has_504",
        "created_by",
        "created",
        "modified_by",
        "modified",
        "preferred_name",
        "decision",
        "family_id",
        "current_status_date",
        "application",
    ];
}
