<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ViewConstituentSummaryProfile
 *
 * @property bool $constituent_profile Indicates whether isconstituentprofile.
 * @property bool $organization Indicates whether isorganization.
 * @property string $address The address.
 * @property string $phone_number The phonenumber.
 * @property string $phone_type The phonetype.
 * @property string $email_address The emailaddress.
 * @property bool $do_not_mail Indicates whether donotmail.
 * @property bool $do_not_email Indicates whether donotemail.
 * @property bool $do_not_phone Indicates whether donotphone.
 * @property string $web_address The webaddress.
 * @property string $related_constituent The relatedconstituent.
 * @property string $related_constituent_id The relatedconstituentid.
 * @property string $plannedgiverconstituencytext The
 *   plannedgiverconstituencytext.
 * @property string $bank_constituency_text The bankconstituencytext.
 * @property string $recognition_constituency_text The
 *   recognitionconstituencytext.
 * @property string $student_enrollment_id The studentenrollmentid.
 * @property string $student_constituency_text The studentconstituencytext.
 * @property string $member_constituency_text The memberconstituencytext.
 * @property string $advocate_constituency_text The advocateconstituencytext.
 * @property string $board_member_constituency_text The
 *   boardmemberconstituencytext.
 * @property string $relation_constituency_text The relationconstituencytext.
 * @property string $staff_constituency_text The staffconstituencytext.
 * @property string $donor_constituency_text The donorconstituencytext.
 * @property string $fundraiser_constituency_text The
 *   fundraiserconstituencytext.
 * @property string $prospect_constituency_text The prospectconstituencytext.
 * @property string $volunteer_constituency_text The
 *   volunteerconstituencytext.
 * @property string $patron_constituency_text The patronconstituencytext.
 * @property string $community_member_constituency_text The
 *   communitymemberconstituencytext.
 * @property string $user_defined_constituency_text The
 *   userdefinedconstituencytext.
 * @property string $alumnus_status_text The alumnusstatustext.
 * @property string $alumnus_enrollment_id The alumnusenrollmentid.
 * @property string $alumnus_constituency_text The alumnusconstituencytext.
 * @property string $registrant_status_text The registrantstatustext.
 * @property string $vendor_status_text The vendorstatustext.
 * @property bool $inactive Indicates whether isinactive.
 * @property \Blackbaud\SKY\Altru\Constituent\Components\FuzzyDate
 *   $deceaseddate FuzzyDate
 * @property string $picture The picture.
 * @property string $primary_education_id The primaryeducationid.
 * @property string $primary_education The primary education.
 * @property string $primary_business_id The primarybusinessid.
 * @property string $primary_business The primary business.
 * @property string $lookup_id The lookup ID.
 * @property bool $wealthpoint_update_pending Indicates whether
 *   wealthpointupdatepending.
 * @property bool $education_attribute_defined Indicates whether
 *   educationattributedefined.
 * @property string $matchfinder_constituency_text The
 *   matchfinderconstituencytext.
 * @property int $matchfinder_online_record_id The matchfinderonlinerecordid.
 * @property int $solicit_code_count The solicitcodecount.
 * @property string $household_id The householdid.
 * @property string $household_text The household.
 * @property bool $group Indicates whether isgroup.
 * @property string $group_type The group type.
 * @property int $group_member_count The no. of members.
 * @property bool $household Indicates whether is household.
 * @property bool $gives_anonymously Indicates whether gives anonymously.
 * @property bool $spouse_deceased Indicates whether is spouse deceased.
 * @property bool $dissolved Indicates whether is group dissolved.
 * @property bool $declarations_on_file Indicates whether declarationsonfile.
 * @property string $committee_constituency_text The
 *   committeeconstituencytext.
 * @property bool $committee_member Indicates whether iscommitteemember.
 * @property string $grantor_constituency_text The grantorconstituencytext.
 * @property string $sponsor_constituency_text The sponsorconstituencytext.
 * @property string $nfg_constituency_text The nfgconstituencytext.
 * @property string $constituent_inactivity_reason The inactive reason.
 * @property string $committee_member_constituency_text The
 *   committeememberconstituencytext.
 * @property string $faculty_constituency_text The facultyconstituencytext.
 * @property bool $deceased Indicates whether isdeceased.
 * @property string $current_enrollment_id The currentenrollmentid.
 * @property string $current_school The school.
 * @property string $current_enrollment_id_2 The currentenrollmentid2.
 * @property string $current_school_2 The currentschool2.
 * @property string $current_enrollment_id_3 The currentenrollmentid3.
 * @property string $current_school_3 The currentschool3.
 * @property string $loyal_donor_constituency_text The
 *   loyaldonorconstituencytext.
 * @property string $major_donor_constituency_text The
 *   majordonorconstituencytext.
 * @property string $student_relation_constituency_text The
 *   studentrelationconstituencytext.
 * @property bool $phone_is_confidential Indicates whether
 *   phoneisconfidential.
 * @property bool $address_is_confidential Indicates whether
 *   addressisconfidential.
 * @property \Blackbaud\SKY\Altru\Constituent\Components\ConstituentConstituenciesDisplayOrder[]
 *   $constituencies_display_order Constituencies display order.
 * @property int $sponsor_type_code The sponsortypecode.
 * @property string $lifecycle_stage The donor lifecycle.
 * @property string $lifecycle_stage_as_of The as of. Uses the format
 *   YYYY-MM-DDThh:mm:ss. An example date: *1955-11-05T22:04:00*.
 * @property string $planned_giver_stage The plannedgiverstage.
 * @property string $planned_giver_stage_as_of The as of. Uses the format
 *   YYYY-MM-DDThh:mm:ss. An example date: *1955-11-05T22:04:00*.
 * @property int $donor_state_code The donorstatecode.
 * @property string $donor_state The donor state.
 * @property string $last_revenue_date The lastrevenuedate. Uses the format
 *   YYYY-MM-DDThh:mm:ss. An example date: *1955-11-05T22:04:00*.
 * @property string $address_id The addressid.
 * @property string $phone_number_id The phonenumberid.
 * @property string $email_address_id The emailaddressid.
 * @property string $top_parent_id The topparentid.
 * @property string $top_parent The top parent organization.
 * @property \Blackbaud\SKY\Altru\Constituent\Components\ConstituentUserDefinedConstituencies[]
 *   $user_defined_constituencies User defined constituencies.
 * @property \Blackbaud\SKY\Altru\Constituent\Components\ConstituentStudentRelationConstituencies[]
 *   $student_relation_constituencies Student relation constituencies.
 * @property bool $user_granted_constitpersonalinfo_edit Indicates whether
 *   user\_granted\_constitpersonalinfo\_edit.
 * @property string $name The name.
 * @property string $fundraising_group_constituency_text The
 *   fundraisinggroupconstituencytext.
 * @property \Blackbaud\SKY\Altru\Constituent\Components\ConstituentSocialMediaAccounts[]
 *   $social_media_accounts Social media accounts.
 *
 * @api
 */
class ConstituentSummaryProfileView extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "constituent_profile" => "bool",
        "organization" => "bool",
        "address" => "string",
        "phone_number" => "string",
        "phone_type" => "string",
        "email_address" => "string",
        "do_not_mail" => "bool",
        "do_not_email" => "bool",
        "do_not_phone" => "bool",
        "web_address" => "string",
        "related_constituent" => "string",
        "related_constituent_id" => "string",
        "plannedgiverconstituencytext" => "string",
        "bank_constituency_text" => "string",
        "recognition_constituency_text" => "string",
        "student_enrollment_id" => "string",
        "student_constituency_text" => "string",
        "member_constituency_text" => "string",
        "advocate_constituency_text" => "string",
        "board_member_constituency_text" => "string",
        "relation_constituency_text" => "string",
        "staff_constituency_text" => "string",
        "donor_constituency_text" => "string",
        "fundraiser_constituency_text" => "string",
        "prospect_constituency_text" => "string",
        "volunteer_constituency_text" => "string",
        "patron_constituency_text" => "string",
        "community_member_constituency_text" => "string",
        "user_defined_constituency_text" => "string",
        "alumnus_status_text" => "string",
        "alumnus_enrollment_id" => "string",
        "alumnus_constituency_text" => "string",
        "registrant_status_text" => "string",
        "vendor_status_text" => "string",
        "inactive" => "bool",
        "deceaseddate" => "\Blackbaud\SKY\Altru\Constituent\Components\FuzzyDate",
        "picture" => "string",
        "primary_education_id" => "string",
        "primary_education" => "string",
        "primary_business_id" => "string",
        "primary_business" => "string",
        "lookup_id" => "string",
        "wealthpoint_update_pending" => "bool",
        "education_attribute_defined" => "bool",
        "matchfinder_constituency_text" => "string",
        "matchfinder_online_record_id" => "int",
        "solicit_code_count" => "int",
        "household_id" => "string",
        "household_text" => "string",
        "group" => "bool",
        "group_type" => "string",
        "group_member_count" => "int",
        "household" => "bool",
        "gives_anonymously" => "bool",
        "spouse_deceased" => "bool",
        "dissolved" => "bool",
        "declarations_on_file" => "bool",
        "committee_constituency_text" => "string",
        "committee_member" => "bool",
        "grantor_constituency_text" => "string",
        "sponsor_constituency_text" => "string",
        "nfg_constituency_text" => "string",
        "constituent_inactivity_reason" => "string",
        "committee_member_constituency_text" => "string",
        "faculty_constituency_text" => "string",
        "deceased" => "bool",
        "current_enrollment_id" => "string",
        "current_school" => "string",
        "current_enrollment_id_2" => "string",
        "current_school_2" => "string",
        "current_enrollment_id_3" => "string",
        "current_school_3" => "string",
        "loyal_donor_constituency_text" => "string",
        "major_donor_constituency_text" => "string",
        "student_relation_constituency_text" => "string",
        "phone_is_confidential" => "bool",
        "address_is_confidential" => "bool",
        "constituencies_display_order" => "\Blackbaud\SKY\Altru\Constituent\Components\ConstituentConstituenciesDisplayOrder[]",
        "sponsor_type_code" => "int",
        "lifecycle_stage" => "string",
        "lifecycle_stage_as_of" => "string",
        "planned_giver_stage" => "string",
        "planned_giver_stage_as_of" => "string",
        "donor_state_code" => "int",
        "donor_state" => "string",
        "last_revenue_date" => "string",
        "address_id" => "string",
        "phone_number_id" => "string",
        "email_address_id" => "string",
        "top_parent_id" => "string",
        "top_parent" => "string",
        "user_defined_constituencies" => "\Blackbaud\SKY\Altru\Constituent\Components\ConstituentUserDefinedConstituencies[]",
        "student_relation_constituencies" => "\Blackbaud\SKY\Altru\Constituent\Components\ConstituentStudentRelationConstituencies[]",
        "user_granted_constitpersonalinfo_edit" => "bool",
        "name" => "string",
        "fundraising_group_constituency_text" => "string",
        "social_media_accounts" => "\Blackbaud\SKY\Altru\Constituent\Components\ConstituentSocialMediaAccounts[]",
    ];
}
