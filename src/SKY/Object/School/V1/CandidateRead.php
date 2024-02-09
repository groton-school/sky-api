<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Candidate Read
 *
 * @property int|null $user_id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $middle_name
 * @property string|null $prefix
 * @property string|null $suffix
 * @property string|null $nickname
 * @property string|null $role
 * @property int|null $role_id
 * @property string|null $current_status
 * @property int|null $status_id
 * @property string|null $entering_year
 * @property int|null $entering_year_id
 * @property string|null $entering_grade
 * @property int|null $entering_grade_id
 * @property string|null $email
 * @property string|null $comment
 * @property string|null $parent1_email
 * @property string|null $parent2_email
 * @property bool|null $international
 * @property string|null $school_program
 * @property string|null $gender
 * @property string|null $ethnicity
 * @property string|null $boarding_or_day
 * @property bool|null $financial_aid
 * @property int|null $admissions_staff_id
 * @property string|null $admissions_staff
 * @property string|null $inquiry_source
 * @property int|null $inquiry_source_id
 * @property string|null $referral_type
 * @property int|null $referral_type_id
 * @property bool|null $has_iep
 * @property bool|null $has_504
 * @property string|null $created_by
 * @property string|null $created
 * @property string|null $modified_by
 * @property string|null $modified
 * @property string|null $preferred_name
 * @property SchoolDecisionModel $decision
 * @property int|null $family_id
 * @property string|null $current_status_date
 * @property ApplicationModel $application
 * @api
 */
class CandidateRead extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["user_id","first_name","last_name","middle_name","prefix","suffix","nickname","role","role_id","current_status","status_id","entering_year","entering_year_id","entering_grade","entering_grade_id","email","comment","parent1_email","parent2_email","international","school_program","gender","ethnicity","boarding_or_day","financial_aid","admissions_staff_id","admissions_staff","inquiry_source","inquiry_source_id","referral_type","referral_type_id","has_iep","has_504","created_by","created","modified_by","modified","preferred_name","decision","family_id","current_status_date","application"];
}
