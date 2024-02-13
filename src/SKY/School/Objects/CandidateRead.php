<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Candidate Read
 *
 * @property int | null $user_id Unique Identifer for this candidate
 * @property string | null $first_name Candidates first name
 * @property string | null $last_name Candidates last name
 * @property string | null $middle_name Candidates middle name
 * @property string | null $prefix Prefix
 * @property string | null $suffix Suffix
 * @property string | null $nickname Candidates nick name (if available)
 * @property string | null $role Role for this candidate.
 * @property int | null $role_id Identifier for thier role
 * @property string | null $current_status Text representation of their
 *   current enrollment status
 * @property int | null $status_id Identifier for their enrollment status
 * @property string | null $entering_year Text representation of the school
 *   year the candidate will be joining
 * @property int | null $entering_year_id Identifier for the school year the
 *   candidate will be joining
 * @property string | null $entering_grade Text representation of the grade
 *   candidate will be joining
 * @property int | null $entering_grade_id Identifier for the grade candidate
 *   will be joining
 * @property string | null $email Candidates email
 * @property string | null $comment Comments
 * @property string | null $parent1_email 1st Email of candidates parent
 * @property string | null $parent2_email 2nd email of candidates parent
 * @property bool | null $international 
 * @property string | null $school_program 
 * @property string | null $gender 
 * @property string | null $ethnicity 
 * @property string | null $boarding_or_day 
 * @property bool | null $financial_aid 
 * @property int | null $admissions_staff_id 
 * @property string | null $admissions_staff 
 * @property string | null $inquiry_source 
 * @property int | null $inquiry_source_id 
 * @property string | null $referral_type 
 * @property int | null $referral_type_id 
 * @property bool | null $has_iep 
 * @property bool | null $has_504 
 * @property string | null $created_by 
 * @property string | null $created 
 * @property string | null $modified_by 
 * @property string | null $modified 
 * @property string | null $preferred_name 
 * @property \GrotonSchool\Blackbaud\SKY\School\Objects\SchoolDecisionModel
 *   $decision 
 * @property int | null $family_id 
 * @property string | null $current_status_date Current status date
 * @property \GrotonSchool\Blackbaud\SKY\School\Objects\ApplicationModel
 *   $application 
 *
 * @api
 */
class CandidateRead extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["user_id","first_name","last_name","middle_name","prefix","suffix","nickname","role","role_id","current_status","status_id","entering_year","entering_year_id","entering_grade","entering_grade_id","email","comment","parent1_email","parent2_email","international","school_program","gender","ethnicity","boarding_or_day","financial_aid","admissions_staff_id","admissions_staff","inquiry_source","inquiry_source_id","referral_type","referral_type_id","has_iep","has_504","created_by","created","modified_by","modified","preferred_name","decision","family_id","current_status_date","application"];
}
