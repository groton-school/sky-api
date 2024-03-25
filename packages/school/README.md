# OpenAPIClient-php

This API is used to provide access to school information such as users, academics, admissions, athletics, content, lists, and general school info.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/groton-school/sky-api.school.git"
    }
  ],
  "require": {
    "groton-school/sky-api.school": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: apiKeyQuery
$config = SKY\School\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\School\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = SKY\School\Configuration::getDefaultConfiguration()->setApiKey('Bb-Api-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SKY\School\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Bb-Api-Subscription-Key', 'Bearer');


$apiInstance = new SKY\School\Api\AcademicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$studentId = 56; // int | Format - int32.
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339).
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339).
$sectionIds = 'sectionIds_example'; // string | 

try {
    $result = $apiInstance->v1AcademicsByStudentIdAssignmentsGet($studentId, $startDate, $endDate, $sectionIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcademicsApi->v1AcademicsByStudentIdAssignmentsGet: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.sky.blackbaud.com/school*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AcademicsApi* | [**v1AcademicsByStudentIdAssignmentsGet**](docs/Api/AcademicsApi.md#v1academicsbystudentidassignmentsget) | **GET** /v1/academics/{student_id}/assignments | Academics assignments for student
*AcademicsApi* | [**v1AcademicsByStudentIdBySectionIdGradedassignmentsGet**](docs/Api/AcademicsApi.md#v1academicsbystudentidbysectionidgradedassignmentsget) | **GET** /v1/academics/{student_id}/{section_id}/gradedassignments | Academics graded assignments for student
*AcademicsApi* | [**v1AcademicsCoursesGet**](docs/Api/AcademicsApi.md#v1academicscoursesget) | **GET** /v1/academics/courses | Academics courses
*AcademicsApi* | [**v1AcademicsDepartmentsGet**](docs/Api/AcademicsApi.md#v1academicsdepartmentsget) | **GET** /v1/academics/departments | Academics departments
*AcademicsApi* | [**v1AcademicsEnrollmentsByUserIdGet**](docs/Api/AcademicsApi.md#v1academicsenrollmentsbyuseridget) | **GET** /v1/academics/enrollments/{user_id} | Academics student enrollment list
*AcademicsApi* | [**v1AcademicsEnrollmentsChangesGet**](docs/Api/AcademicsApi.md#v1academicsenrollmentschangesget) | **GET** /v1/academics/enrollments/changes | Academics Student Enrollments Changes
*AcademicsApi* | [**v1AcademicsSchedulesMasterGet**](docs/Api/AcademicsApi.md#v1academicsschedulesmasterget) | **GET** /v1/academics/schedules/master | Academics master schedule
*AcademicsApi* | [**v1AcademicsSchedulesSetsByScheduleSetIdGet**](docs/Api/AcademicsApi.md#v1academicsschedulessetsbyschedulesetidget) | **GET** /v1/academics/schedules/sets/{schedule_set_id} | Academics schedule set
*AcademicsApi* | [**v1AcademicsSchedulesSetsGet**](docs/Api/AcademicsApi.md#v1academicsschedulessetsget) | **GET** /v1/academics/schedules/sets | Academics schedule sets by level
*AcademicsApi* | [**v1AcademicsSectionsBySectionIdAssignmentsGet**](docs/Api/AcademicsApi.md#v1academicssectionsbysectionidassignmentsget) | **GET** /v1/academics/sections/{section_id}/assignments | Academics assignments by section
*AcademicsApi* | [**v1AcademicsSectionsBySectionIdCyclesGet**](docs/Api/AcademicsApi.md#v1academicssectionsbysectionidcyclesget) | **GET** /v1/academics/sections/{section_id}/cycles | Academics cycles by section
*AcademicsApi* | [**v1AcademicsSectionsBySectionIdStudentsGet**](docs/Api/AcademicsApi.md#v1academicssectionsbysectionidstudentsget) | **GET** /v1/academics/sections/{section_id}/students | Academics students by section
*AcademicsApi* | [**v1AcademicsSectionsGet**](docs/Api/AcademicsApi.md#v1academicssectionsget) | **GET** /v1/academics/sections | Academics sections by school level
*AcademicsApi* | [**v1AcademicsSectionsStudentsPost**](docs/Api/AcademicsApi.md#v1academicssectionsstudentspost) | **POST** /v1/academics/sections/students | Academics enroll students into sections
*AcademicsApi* | [**v1AcademicsSpecialdaysGet**](docs/Api/AcademicsApi.md#v1academicsspecialdaysget) | **GET** /v1/academics/specialdays | Academics special days
*AcademicsApi* | [**v1AcademicsStudentByStudentIdSectionsGet**](docs/Api/AcademicsApi.md#v1academicsstudentbystudentidsectionsget) | **GET** /v1/academics/student/{student_id}/sections | Academics sections for student
*AcademicsApi* | [**v1AcademicsTeachersByTeacherIdSectionsGet**](docs/Api/AcademicsApi.md#v1academicsteachersbyteacheridsectionsget) | **GET** /v1/academics/teachers/{teacher_id}/sections | Academics sections by teacher
*ActivitiesApi* | [**v1ActivitiesSectionsGet**](docs/Api/ActivitiesApi.md#v1activitiessectionsget) | **GET** /v1/activities/sections | Activities sections by school level
*AdmissionsApi* | [**v1AdmissionsCandidatesGet**](docs/Api/AdmissionsApi.md#v1admissionscandidatesget) | **GET** /v1/admissions/candidates | Admissions candidates
*AdmissionsApi* | [**v1AdmissionsCandidatesPost**](docs/Api/AdmissionsApi.md#v1admissionscandidatespost) | **POST** /v1/admissions/candidates | Admissions candidate create
*AdmissionsApi* | [**v1AdmissionsChecklistsGet**](docs/Api/AdmissionsApi.md#v1admissionschecklistsget) | **GET** /v1/admissions/checklists | Admissions checklists
*AdmissionsApi* | [**v1AdmissionsCheckliststatusGet**](docs/Api/AdmissionsApi.md#v1admissionscheckliststatusget) | **GET** /v1/admissions/checkliststatus | Admissions checklist status
*AdmissionsApi* | [**v1AdmissionsStatusGet**](docs/Api/AdmissionsApi.md#v1admissionsstatusget) | **GET** /v1/admissions/status | Admissions statuses
*AdvisoriesApi* | [**v1AdvisoriesSectionsGet**](docs/Api/AdvisoriesApi.md#v1advisoriessectionsget) | **GET** /v1/advisories/sections | Advisories sections by school level
*AthleticsApi* | [**v1AthleticsHighlightsByHighlightIdGet**](docs/Api/AthleticsApi.md#v1athleticshighlightsbyhighlightidget) | **GET** /v1/athletics/highlights/{highlight_id} | Athletics highlights by ID
*AthleticsApi* | [**v1AthleticsLocationsGet**](docs/Api/AthleticsApi.md#v1athleticslocationsget) | **GET** /v1/athletics/locations | Athletics locations
*AthleticsApi* | [**v1AthleticsLocationsPost**](docs/Api/AthleticsApi.md#v1athleticslocationspost) | **POST** /v1/athletics/locations | Athletics location create
*AthleticsApi* | [**v1AthleticsOpponentsGet**](docs/Api/AthleticsApi.md#v1athleticsopponentsget) | **GET** /v1/athletics/opponents | Athletics opponents
*AthleticsApi* | [**v1AthleticsOpponentsPost**](docs/Api/AthleticsApi.md#v1athleticsopponentspost) | **POST** /v1/athletics/opponents | Athletics opponent create
*AthleticsApi* | [**v1AthleticsResultPost**](docs/Api/AthleticsApi.md#v1athleticsresultpost) | **POST** /v1/athletics/result | Athletics game result
*AthleticsApi* | [**v1AthleticsSchedulesGet**](docs/Api/AthleticsApi.md#v1athleticsschedulesget) | **GET** /v1/athletics/schedules | Athletics schedules
*AthleticsApi* | [**v1AthleticsSportsGet**](docs/Api/AthleticsApi.md#v1athleticssportsget) | **GET** /v1/athletics/sports | Athletics sports
*AthleticsApi* | [**v1AthleticsSportslevelsGet**](docs/Api/AthleticsApi.md#v1athleticssportslevelsget) | **GET** /v1/athletics/sportslevels | Athletics sports levels
*AthleticsApi* | [**v1AthleticsTeamsByTeamIdRosterGet**](docs/Api/AthleticsApi.md#v1athleticsteamsbyteamidrosterget) | **GET** /v1/athletics/teams/{team_id}/roster | Athletics team roster
*AthleticsApi* | [**v1AthleticsTeamsByTeamIdScheduleByGameIdDelete**](docs/Api/AthleticsApi.md#v1athleticsteamsbyteamidschedulebygameiddelete) | **DELETE** /v1/athletics/teams/{team_id}/schedule/{game_id} | Athletics game delete
*AthleticsApi* | [**v1AthleticsTeamsByTeamIdSchedulePatch**](docs/Api/AthleticsApi.md#v1athleticsteamsbyteamidschedulepatch) | **PATCH** /v1/athletics/teams/{team_id}/schedule | Athletics game update
*AthleticsApi* | [**v1AthleticsTeamsByTeamIdSchedulePost**](docs/Api/AthleticsApi.md#v1athleticsteamsbyteamidschedulepost) | **POST** /v1/athletics/teams/{team_id}/schedule | Athletics game create
*AthleticsApi* | [**v1AthleticsTeamsByTeamIdSchedulePracticeByPracticeIdDelete**](docs/Api/AthleticsApi.md#v1athleticsteamsbyteamidschedulepracticebypracticeiddelete) | **DELETE** /v1/athletics/teams/{team_id}/schedule/practice/{practice_id} | Athletics practice delete
*AthleticsApi* | [**v1AthleticsTeamsByTeamIdSchedulePracticePatch**](docs/Api/AthleticsApi.md#v1athleticsteamsbyteamidschedulepracticepatch) | **PATCH** /v1/athletics/teams/{team_id}/schedule/practice | Athletics practice update
*AthleticsApi* | [**v1AthleticsTeamsByTeamIdSchedulePracticePost**](docs/Api/AthleticsApi.md#v1athleticsteamsbyteamidschedulepracticepost) | **POST** /v1/athletics/teams/{team_id}/schedule/practice | Athletics practice create
*AthleticsApi* | [**v1AthleticsTeamsGet**](docs/Api/AthleticsApi.md#v1athleticsteamsget) | **GET** /v1/athletics/teams | Athletics teams
*AthleticsApi* | [**v1AthleticsTransportationtypesGet**](docs/Api/AthleticsApi.md#v1athleticstransportationtypesget) | **GET** /v1/athletics/transportationtypes | Athletics transportation types
*AthleticsApi* | [**v1AthleticsVenuesGet**](docs/Api/AthleticsApi.md#v1athleticsvenuesget) | **GET** /v1/athletics/venues | Athletics venues
*AttendanceApi* | [**v1AttendanceGet**](docs/Api/AttendanceApi.md#v1attendanceget) | **GET** /v1/attendance | Attendance record
*AttendanceApi* | [**v1AttendancePost**](docs/Api/AttendanceApi.md#v1attendancepost) | **POST** /v1/attendance | Attendance record create
*ContentApi* | [**v1ContentEventsCategoriesGet**](docs/Api/ContentApi.md#v1contenteventscategoriesget) | **GET** /v1/content/events/categories | Content Events Categories (BETA)
*ContentApi* | [**v1ContentNewsCategoriesGet**](docs/Api/ContentApi.md#v1contentnewscategoriesget) | **GET** /v1/content/news/categories | Content News Categories
*ContentApi* | [**v1ContentNewsItemsGet**](docs/Api/ContentApi.md#v1contentnewsitemsget) | **GET** /v1/content/news/items | Content News Items
*ContentApi* | [**v1ContentResourcesGet**](docs/Api/ContentApi.md#v1contentresourcesget) | **GET** /v1/content/resources | Content Resource Board (BETA)
*CoreApi* | [**v1CustomfieldsGet**](docs/Api/CoreApi.md#v1customfieldsget) | **GET** /v1/customfields | Core custom fields
*CoreApi* | [**v1SessionsGet**](docs/Api/CoreApi.md#v1sessionsget) | **GET** /v1/sessions | Core sessions
*CoreApi* | [**v1TimezoneGet**](docs/Api/CoreApi.md#v1timezoneget) | **GET** /v1/timezone | Core time zone
*CoreApi* | [**v1gradelevelsget**](docs/Api/CoreApi.md#v1gradelevelsget) | **GET** /v1/gradelevels | Core grade levels
*CoreApi* | [**v1levelsget**](docs/Api/CoreApi.md#v1levelsget) | **GET** /v1/levels | Core school levels
*CoreApi* | [**v1offeringtypesget**](docs/Api/CoreApi.md#v1offeringtypesget) | **GET** /v1/offeringtypes | Core offering types
*CoreApi* | [**v1rolesget**](docs/Api/CoreApi.md#v1rolesget) | **GET** /v1/roles | Core roles
*CoreApi* | [**v1termsget**](docs/Api/CoreApi.md#v1termsget) | **GET** /v1/terms | Core terms
*CoreApi* | [**v1yearsget**](docs/Api/CoreApi.md#v1yearsget) | **GET** /v1/years | Core years
*DegreeApi* | [**v1DegreesStudentdegreesByStudentIdGet**](docs/Api/DegreeApi.md#v1degreesstudentdegreesbystudentidget) | **GET** /v1/degrees/studentdegrees/{student_id} | Degrees student degrees by ID
*DirectoryApi* | [**v1DirectoriesByDirectoryIdGet**](docs/Api/DirectoryApi.md#v1directoriesbydirectoryidget) | **GET** /v1/directories/{directory_id} | Directories results
*DirectoryApi* | [**v1DirectoriesGet**](docs/Api/DirectoryApi.md#v1directoriesget) | **GET** /v1/directories | Directories
*DormsApi* | [**v1DormsAllGet**](docs/Api/DormsApi.md#v1dormsallget) | **GET** /v1/dorms/all | Dorms
*EventsApi* | [**v1EventsCalendarGet**](docs/Api/EventsApi.md#v1eventscalendarget) | **GET** /v1/events/calendar | Calendar for User (BETA)
*EventsApi* | [**v1EventsCategoriesGet**](docs/Api/EventsApi.md#v1eventscategoriesget) | **GET** /v1/events/categories | Events categories
*EventsApi* | [**v1EventsCategoriesPost**](docs/Api/EventsApi.md#v1eventscategoriespost) | **POST** /v1/events/categories | Events category create
*ListsApi* | [**v1ListsAdvancedByListIdGet**](docs/Api/ListsApi.md#v1listsadvancedbylistidget) | **GET** /v1/lists/advanced/{list_id} | List Single
*ListsApi* | [**v1ListsGet**](docs/Api/ListsApi.md#v1listsget) | **GET** /v1/lists | List of Lists
*MedicalApi* | [**v1MedicalAllergiesByAllergyIdDelete**](docs/Api/MedicalApi.md#v1medicalallergiesbyallergyiddelete) | **DELETE** /v1/medical/allergies/{allergy_id} | Medical allergies delete (BETA)
*MedicalApi* | [**v1MedicalAllergiesByAllergyIdPatch**](docs/Api/MedicalApi.md#v1medicalallergiesbyallergyidpatch) | **PATCH** /v1/medical/allergies/{allergy_id} | Medical allergies update (BETA)
*MedicalApi* | [**v1MedicalAllergiesPost**](docs/Api/MedicalApi.md#v1medicalallergiespost) | **POST** /v1/medical/allergies | Medical allergies create (BETA)
*MedicalApi* | [**v1MedicalAllergiesconditionsPost**](docs/Api/MedicalApi.md#v1medicalallergiesconditionspost) | **POST** /v1/medical/allergiesconditions | Medical allergies/conditions create (BETA)
*MedicalApi* | [**v1MedicalAthleticclearancePost**](docs/Api/MedicalApi.md#v1medicalathleticclearancepost) | **POST** /v1/medical/athleticclearance | Athletic requirements update (BETA)
*MedicalApi* | [**v1MedicalConditionsByConditionIdDelete**](docs/Api/MedicalApi.md#v1medicalconditionsbyconditioniddelete) | **DELETE** /v1/medical/conditions/{condition_id} | Medical conditions delete (BETA)
*MedicalApi* | [**v1MedicalConditionsByConditionIdPatch**](docs/Api/MedicalApi.md#v1medicalconditionsbyconditionidpatch) | **PATCH** /v1/medical/conditions/{condition_id} | Medical conditions update (BETA)
*MedicalApi* | [**v1MedicalConditionsPost**](docs/Api/MedicalApi.md#v1medicalconditionspost) | **POST** /v1/medical/conditions | Medical conditions create (BETA)
*MedicalApi* | [**v1MedicalImmunizationsPost**](docs/Api/MedicalApi.md#v1medicalimmunizationspost) | **POST** /v1/medical/immunizations | Medical immunizations update (BETA)
*MedicalApi* | [**v1MedicalMedicationsByMedicationIdDelete**](docs/Api/MedicalApi.md#v1medicalmedicationsbymedicationiddelete) | **DELETE** /v1/medical/medications/{medication_id} | Medical medications delete (BETA)
*MedicalApi* | [**v1MedicalMedicationsByMedicationIdPatch**](docs/Api/MedicalApi.md#v1medicalmedicationsbymedicationidpatch) | **PATCH** /v1/medical/medications/{medication_id} | Medical medication update (BETA)
*MedicalApi* | [**v1MedicalMedicationsPost**](docs/Api/MedicalApi.md#v1medicalmedicationspost) | **POST** /v1/medical/medications | Medical medications create (BETA)
*MedicalApi* | [**v1MedicalSecurityrolesGet**](docs/Api/MedicalApi.md#v1medicalsecurityrolesget) | **GET** /v1/medical/securityroles | Medical Security Roles (BETA)
*MedicalApi* | [**v1MedicalUsersByUserIdAllergiesGet**](docs/Api/MedicalApi.md#v1medicalusersbyuseridallergiesget) | **GET** /v1/medical/users/{user_id}/allergies | Medical allergies for a student (BETA)
*MedicalApi* | [**v1MedicalUsersByUserIdAllergiesconditionsGet**](docs/Api/MedicalApi.md#v1medicalusersbyuseridallergiesconditionsget) | **GET** /v1/medical/users/{user_id}/allergiesconditions | Medical allergies/conditions for a student (BETA)
*MedicalApi* | [**v1MedicalUsersByUserIdAthleticrequirementsGet**](docs/Api/MedicalApi.md#v1medicalusersbyuseridathleticrequirementsget) | **GET** /v1/medical/users/{user_id}/athleticrequirements | Medical athletic requirements for a student (BETA)
*MedicalApi* | [**v1MedicalUsersByUserIdConditionsGet**](docs/Api/MedicalApi.md#v1medicalusersbyuseridconditionsget) | **GET** /v1/medical/users/{user_id}/conditions | Medical conditions for a student (BETA)
*MedicalApi* | [**v1MedicalUsersByUserIdImmunizationsGet**](docs/Api/MedicalApi.md#v1medicalusersbyuseridimmunizationsget) | **GET** /v1/medical/users/{user_id}/immunizations | Medical immunizations for a student (BETA)
*MedicalApi* | [**v1MedicalUsersByUserIdMedicationsGet**](docs/Api/MedicalApi.md#v1medicalusersbyuseridmedicationsget) | **GET** /v1/medical/users/{user_id}/medications | Medical medications for a student (BETA)
*ScheduleApi* | [**v1SchedulesByStudentIdMeetingsGet**](docs/Api/ScheduleApi.md#v1schedulesbystudentidmeetingsget) | **GET** /v1/schedules/{student_id}/meetings | Schedules - Meetings for a student
*ScheduleApi* | [**v1SchedulesMeetingsGet**](docs/Api/ScheduleApi.md#v1schedulesmeetingsget) | **GET** /v1/schedules/meetings | Schedules meetings
*TestScoresApi* | [**v1TestscoresByUserIdPost**](docs/Api/TestScoresApi.md#v1testscoresbyuseridpost) | **POST** /v1/testscores/{user_id} | Test Score create
*TestScoresApi* | [**v1TestscoresGet**](docs/Api/TestScoresApi.md#v1testscoresget) | **GET** /v1/testscores | Test scores by user ID
*TestScoresApi* | [**v1TestscoresTesttypesGet**](docs/Api/TestScoresApi.md#v1testscorestesttypesget) | **GET** /v1/testscores/testtypes | Test and Subtest types
*TypesApi* | [**v1TypesAttendancetypesGet**](docs/Api/TypesApi.md#v1typesattendancetypesget) | **GET** /v1/types/attendancetypes | Types attendance types
*TypesApi* | [**v1TypesExcusedtypesGet**](docs/Api/TypesApi.md#v1typesexcusedtypesget) | **GET** /v1/types/excusedtypes | Types excused types
*TypesApi* | [**v1TypesExcusedurationtypesGet**](docs/Api/TypesApi.md#v1typesexcusedurationtypesget) | **GET** /v1/types/excusedurationtypes | Types excuse duration types
*TypesApi* | [**v1TypesTablesGet**](docs/Api/TypesApi.md#v1typestablesget) | **GET** /v1/types/tables | Types table types (BETA)
*TypesApi* | [**v1TypesTablevaluesGet**](docs/Api/TypesApi.md#v1typestablevaluesget) | **GET** /v1/types/tablevalues | Types table values (BETA)
*UserApi* | [**v1UsersAddresstypesGet**](docs/Api/UserApi.md#v1usersaddresstypesget) | **GET** /v1/users/addresstypes | Users address types
*UserApi* | [**v1UsersAuditGet**](docs/Api/UserApi.md#v1usersauditget) | **GET** /v1/users/audit | Users audit by role ID
*UserApi* | [**v1UsersBbidstatusGet**](docs/Api/UserApi.md#v1usersbbidstatusget) | **GET** /v1/users/bbidstatus | Users BBID status by role(s).
*UserApi* | [**v1UsersByParentIdStudentsGet**](docs/Api/UserApi.md#v1usersbyparentidstudentsget) | **GET** /v1/users/{parent_id}/students | Users Children of Parent
*UserApi* | [**v1UsersByUserIdAddressesByAddressIdByAddressTypeIdDelete**](docs/Api/UserApi.md#v1usersbyuseridaddressesbyaddressidbyaddresstypeiddelete) | **DELETE** /v1/users/{user_id}/addresses/{address_id}/{address_type_id} | Users address delete (BETA)
*UserApi* | [**v1UsersByUserIdAddressesByAddressIdPatch**](docs/Api/UserApi.md#v1usersbyuseridaddressesbyaddressidpatch) | **PATCH** /v1/users/{user_id}/addresses/{address_id} | Users address update
*UserApi* | [**v1UsersByUserIdAddressesGet**](docs/Api/UserApi.md#v1usersbyuseridaddressesget) | **GET** /v1/users/{user_id}/addresses | Users addresses by user ID
*UserApi* | [**v1UsersByUserIdAddressesPost**](docs/Api/UserApi.md#v1usersbyuseridaddressespost) | **POST** /v1/users/{user_id}/addresses | Users address create
*UserApi* | [**v1UsersByUserIdAddressesSharePost**](docs/Api/UserApi.md#v1usersbyuseridaddressessharepost) | **POST** /v1/users/{user_id}/addresses/share | Users address create - shared (BETA)
*UserApi* | [**v1UsersByUserIdCustomfieldsGet**](docs/Api/UserApi.md#v1usersbyuseridcustomfieldsget) | **GET** /v1/users/{user_id}/customfields | Users custom fields single
*UserApi* | [**v1UsersByUserIdCustomfieldsListPatch**](docs/Api/UserApi.md#v1usersbyuseridcustomfieldslistpatch) | **PATCH** /v1/users/{user_id}/customfields/list | Users custom fields list update
*UserApi* | [**v1UsersByUserIdCustomfieldsListPost**](docs/Api/UserApi.md#v1usersbyuseridcustomfieldslistpost) | **POST** /v1/users/{user_id}/customfields/list | Users custom fields list create (BETA)
*UserApi* | [**v1UsersByUserIdCustomfieldsPatch**](docs/Api/UserApi.md#v1usersbyuseridcustomfieldspatch) | **PATCH** /v1/users/{user_id}/customfields | Users custom fields update
*UserApi* | [**v1UsersByUserIdCustomfieldsPost**](docs/Api/UserApi.md#v1usersbyuseridcustomfieldspost) | **POST** /v1/users/{user_id}/customfields | Users custom fields create
*UserApi* | [**v1UsersByUserIdEducationByEducationIdDelete**](docs/Api/UserApi.md#v1usersbyuserideducationbyeducationiddelete) | **DELETE** /v1/users/{user_id}/education/{education_id} | User education delete (BETA)
*UserApi* | [**v1UsersByUserIdEducationByEducationIdPatch**](docs/Api/UserApi.md#v1usersbyuserideducationbyeducationidpatch) | **PATCH** /v1/users/{user_id}/education/{education_id} | Users education update (BETA)
*UserApi* | [**v1UsersByUserIdEducationGet**](docs/Api/UserApi.md#v1usersbyuserideducationget) | **GET** /v1/users/{user_id}/education | Users education by user
*UserApi* | [**v1UsersByUserIdEducationPost**](docs/Api/UserApi.md#v1usersbyuserideducationpost) | **POST** /v1/users/{user_id}/education | Users education create (BETA)
*UserApi* | [**v1UsersByUserIdEmergencycontactsGet**](docs/Api/UserApi.md#v1usersbyuseridemergencycontactsget) | **GET** /v1/users/{user_id}/emergencycontacts | Users emergency contacts by user ID
*UserApi* | [**v1UsersByUserIdEmergencycontactsNonuserPost**](docs/Api/UserApi.md#v1usersbyuseridemergencycontactsnonuserpost) | **POST** /v1/users/{user_id}/emergencycontacts/nonuser | Users emergency contact non-user create
*UserApi* | [**v1UsersByUserIdEmergencycontactsUserPost**](docs/Api/UserApi.md#v1usersbyuseridemergencycontactsuserpost) | **POST** /v1/users/{user_id}/emergencycontacts/user | Users emergency contact user create
*UserApi* | [**v1UsersByUserIdEmploymentGet**](docs/Api/UserApi.md#v1usersbyuseridemploymentget) | **GET** /v1/users/{user_id}/employment | Users employment by user ID
*UserApi* | [**v1UsersByUserIdGet**](docs/Api/UserApi.md#v1usersbyuseridget) | **GET** /v1/users/{user_id} | User by ID
*UserApi* | [**v1UsersByUserIdOccupationsByOccupationIdDelete**](docs/Api/UserApi.md#v1usersbyuseridoccupationsbyoccupationiddelete) | **DELETE** /v1/users/{user_id}/occupations/{occupation_id} | Users occupation delete (BETA)
*UserApi* | [**v1UsersByUserIdOccupationsByOccupationIdPatch**](docs/Api/UserApi.md#v1usersbyuseridoccupationsbyoccupationidpatch) | **PATCH** /v1/users/{user_id}/occupations/{occupation_id} | Users occupation update
*UserApi* | [**v1UsersByUserIdOccupationsGet**](docs/Api/UserApi.md#v1usersbyuseridoccupationsget) | **GET** /v1/users/{user_id}/occupations | Users occupations by user ID
*UserApi* | [**v1UsersByUserIdOccupationsPost**](docs/Api/UserApi.md#v1usersbyuseridoccupationspost) | **POST** /v1/users/{user_id}/occupations | Users occupation create
*UserApi* | [**v1UsersByUserIdPhonesByPhoneIdByPhoneTypeIdDelete**](docs/Api/UserApi.md#v1usersbyuseridphonesbyphoneidbyphonetypeiddelete) | **DELETE** /v1/users/{user_id}/phones/{phone_id}/{phone_type_id} | Users phone delete (BETA)
*UserApi* | [**v1UsersByUserIdPhonesByPhoneIdPatch**](docs/Api/UserApi.md#v1usersbyuseridphonesbyphoneidpatch) | **PATCH** /v1/users/{user_id}/phones/{phone_id} | Users phone update
*UserApi* | [**v1UsersByUserIdPhonesGet**](docs/Api/UserApi.md#v1usersbyuseridphonesget) | **GET** /v1/users/{user_id}/phones | Users phones by user
*UserApi* | [**v1UsersByUserIdPhonesPost**](docs/Api/UserApi.md#v1usersbyuseridphonespost) | **POST** /v1/users/{user_id}/phones | Users phone create
*UserApi* | [**v1UsersByUserIdPhonesSharePost**](docs/Api/UserApi.md#v1usersbyuseridphonessharepost) | **POST** /v1/users/{user_id}/phones/share | Users phone create - shared (BETA)
*UserApi* | [**v1UsersByUserIdRelationshipsDelete**](docs/Api/UserApi.md#v1usersbyuseridrelationshipsdelete) | **DELETE** /v1/users/{user_id}/relationships | Users relationship delete
*UserApi* | [**v1UsersByUserIdRelationshipsGet**](docs/Api/UserApi.md#v1usersbyuseridrelationshipsget) | **GET** /v1/users/{user_id}/relationships | Users relationships by user
*UserApi* | [**v1UsersByUserIdRelationshipsPost**](docs/Api/UserApi.md#v1usersbyuseridrelationshipspost) | **POST** /v1/users/{user_id}/relationships | Users relationship create
*UserApi* | [**v1UsersChangedGet**](docs/Api/UserApi.md#v1userschangedget) | **GET** /v1/users/changed | Users changed by base role(s)
*UserApi* | [**v1UsersCustomfieldsGet**](docs/Api/UserApi.md#v1userscustomfieldsget) | **GET** /v1/users/customfields | Users custom fields list by base role(s)
*UserApi* | [**v1UsersEmergencycontactsChangedGet**](docs/Api/UserApi.md#v1usersemergencycontactschangedget) | **GET** /v1/users/emergencycontacts/changed | Users emergency contact changes
*UserApi* | [**v1UsersEnrollPost**](docs/Api/UserApi.md#v1usersenrollpost) | **POST** /v1/users/enroll | Users enrollment create
*UserApi* | [**v1UsersEnrollmentsGet**](docs/Api/UserApi.md#v1usersenrollmentsget) | **GET** /v1/users/enrollments | Users enrollments by year
*UserApi* | [**v1UsersExtendedByUserIdGet**](docs/Api/UserApi.md#v1usersextendedbyuseridget) | **GET** /v1/users/extended/{user_id} | Users extended by user
*UserApi* | [**v1UsersExtendedGet**](docs/Api/UserApi.md#v1usersextendedget) | **GET** /v1/users/extended | Users extended by role(s)
*UserApi* | [**v1UsersGendertypesGet**](docs/Api/UserApi.md#v1usersgendertypesget) | **GET** /v1/users/gendertypes | Users gender types
*UserApi* | [**v1UsersMeGet**](docs/Api/UserApi.md#v1usersmeget) | **GET** /v1/users/me | Users Get Me
*UserApi* | [**v1UsersPatch**](docs/Api/UserApi.md#v1userspatch) | **PATCH** /v1/users | User update
*UserApi* | [**v1UsersPhonetypesGet**](docs/Api/UserApi.md#v1usersphonetypesget) | **GET** /v1/users/phonetypes | Users phone types
*UserApi* | [**v1UsersPost**](docs/Api/UserApi.md#v1userspost) | **POST** /v1/users | User create
*UserApi* | [**v1usersget**](docs/Api/UserApi.md#v1usersget) | **GET** /v1/users | Users by role(s)
*VenuesApi* | [**v1VenuesBuildingsGet**](docs/Api/VenuesApi.md#v1venuesbuildingsget) | **GET** /v1/venues/buildings | Athletics buildings

## Models

- [AcademicsSection](docs/Model/AcademicsSection.md)
- [AcademicsSectionCollection](docs/Model/AcademicsSectionCollection.md)
- [AcademicsSectionStudent](docs/Model/AcademicsSectionStudent.md)
- [AcademicsSectionStudentCollection](docs/Model/AcademicsSectionStudentCollection.md)
- [ActivitiesSection](docs/Model/ActivitiesSection.md)
- [ActivitiesSectionCollection](docs/Model/ActivitiesSectionCollection.md)
- [AddressAdd](docs/Model/AddressAdd.md)
- [AddressEdit](docs/Model/AddressEdit.md)
- [AddressExRead](docs/Model/AddressExRead.md)
- [AddressRead](docs/Model/AddressRead.md)
- [AddressReadCollection](docs/Model/AddressReadCollection.md)
- [AddressShare](docs/Model/AddressShare.md)
- [AddressType](docs/Model/AddressType.md)
- [AddressTypeCollection](docs/Model/AddressTypeCollection.md)
- [AddressTypeLink](docs/Model/AddressTypeLink.md)
- [AdminCustomFields](docs/Model/AdminCustomFields.md)
- [AdminCustomFieldsCollection](docs/Model/AdminCustomFieldsCollection.md)
- [AdmissionsCheckList](docs/Model/AdmissionsCheckList.md)
- [AdmissionsCheckListCollection](docs/Model/AdmissionsCheckListCollection.md)
- [AdmissionsChecklistStatus](docs/Model/AdmissionsChecklistStatus.md)
- [AdmissionsChecklistStatusCollection](docs/Model/AdmissionsChecklistStatusCollection.md)
- [AdmissionsStatuses](docs/Model/AdmissionsStatuses.md)
- [AdmissionsStatusesCollection](docs/Model/AdmissionsStatusesCollection.md)
- [Advisor](docs/Model/Advisor.md)
- [AdvisoriesSection](docs/Model/AdvisoriesSection.md)
- [AdvisoriesSectionCollection](docs/Model/AdvisoriesSectionCollection.md)
- [AllergiesAndConditionsView](docs/Model/AllergiesAndConditionsView.md)
- [AllergyRead](docs/Model/AllergyRead.md)
- [ApplicationModel](docs/Model/ApplicationModel.md)
- [AreaOfStudyOutputModel](docs/Model/AreaOfStudyOutputModel.md)
- [Assignment](docs/Model/Assignment.md)
- [AssignmentCollection](docs/Model/AssignmentCollection.md)
- [AssignmentType](docs/Model/AssignmentType.md)
- [AthleticRequirementType](docs/Model/AthleticRequirementType.md)
- [AthleticVenue](docs/Model/AthleticVenue.md)
- [AthleticVenueCollection](docs/Model/AthleticVenueCollection.md)
- [AttendanceCreate](docs/Model/AttendanceCreate.md)
- [AttendanceGet](docs/Model/AttendanceGet.md)
- [AttendanceGetCollection](docs/Model/AttendanceGetCollection.md)
- [AttendanceTypes](docs/Model/AttendanceTypes.md)
- [BuildingRead](docs/Model/BuildingRead.md)
- [BuildingReadCollection](docs/Model/BuildingReadCollection.md)
- [BuildingRoomRead](docs/Model/BuildingRoomRead.md)
- [BulkEnrollment](docs/Model/BulkEnrollment.md)
- [CalendarItem](docs/Model/CalendarItem.md)
- [CalendarItemCollection](docs/Model/CalendarItemCollection.md)
- [CandidateCreate](docs/Model/CandidateCreate.md)
- [CandidateDecisionModel](docs/Model/CandidateDecisionModel.md)
- [CandidateRead](docs/Model/CandidateRead.md)
- [CandidateReadCollection](docs/Model/CandidateReadCollection.md)
- [Category](docs/Model/Category.md)
- [ChildOfParent](docs/Model/ChildOfParent.md)
- [ChildOfParentCollection](docs/Model/ChildOfParentCollection.md)
- [Coach](docs/Model/Coach.md)
- [CoachCollection](docs/Model/CoachCollection.md)
- [Concentration](docs/Model/Concentration.md)
- [ConditionRead](docs/Model/ConditionRead.md)
- [Course](docs/Model/Course.md)
- [CourseCollection](docs/Model/CourseCollection.md)
- [CustomAdminField](docs/Model/CustomAdminField.md)
- [Cycle](docs/Model/Cycle.md)
- [Days](docs/Model/Days.md)
- [Degree](docs/Model/Degree.md)
- [DegreeOutputModel](docs/Model/DegreeOutputModel.md)
- [Department](docs/Model/Department.md)
- [DepartmentCollection](docs/Model/DepartmentCollection.md)
- [DirectoryModel](docs/Model/DirectoryModel.md)
- [DirectoryModelCollection](docs/Model/DirectoryModelCollection.md)
- [DirectoryResult](docs/Model/DirectoryResult.md)
- [DirectoryResultCollection](docs/Model/DirectoryResultCollection.md)
- [Dorm](docs/Model/Dorm.md)
- [DormCollection](docs/Model/DormCollection.md)
- [DormLeader](docs/Model/DormLeader.md)
- [DormStudentInfo](docs/Model/DormStudentInfo.md)
- [Duration](docs/Model/Duration.md)
- [EducationAdd](docs/Model/EducationAdd.md)
- [EducationRead](docs/Model/EducationRead.md)
- [EducationReadCollection](docs/Model/EducationReadCollection.md)
- [EducationUpdate](docs/Model/EducationUpdate.md)
- [EmergencyContactChange](docs/Model/EmergencyContactChange.md)
- [EmergencyContactChangeCollection](docs/Model/EmergencyContactChangeCollection.md)
- [EmergencyContactChangeEmail](docs/Model/EmergencyContactChangeEmail.md)
- [EmergencyContactChangePhone](docs/Model/EmergencyContactChangePhone.md)
- [EmergencyContactEmail](docs/Model/EmergencyContactEmail.md)
- [EmergencyContactList](docs/Model/EmergencyContactList.md)
- [EmergencyContactNonUserCreate](docs/Model/EmergencyContactNonUserCreate.md)
- [EmergencyContactPhone](docs/Model/EmergencyContactPhone.md)
- [EmergencyContactUserCreate](docs/Model/EmergencyContactUserCreate.md)
- [Enrollment](docs/Model/Enrollment.md)
- [EnrollmentChangeAudit](docs/Model/EnrollmentChangeAudit.md)
- [EnrollmentChanges](docs/Model/EnrollmentChanges.md)
- [EnrollmentChangesCollection](docs/Model/EnrollmentChangesCollection.md)
- [EnrollmentCollection](docs/Model/EnrollmentCollection.md)
- [EventCategory](docs/Model/EventCategory.md)
- [EventCategoryCollection](docs/Model/EventCategoryCollection.md)
- [EventCategoryCreateResponseExample](docs/Model/EventCategoryCreateResponseExample.md)
- [EventsCategory](docs/Model/EventsCategory.md)
- [EventsCategoryCollection](docs/Model/EventsCategoryCollection.md)
- [ExcuseDurationTypes](docs/Model/ExcuseDurationTypes.md)
- [ExcusedTypes](docs/Model/ExcusedTypes.md)
- [ExcusedTypesCollection](docs/Model/ExcusedTypesCollection.md)
- [FacultyEmploymentRead](docs/Model/FacultyEmploymentRead.md)
- [Field](docs/Model/Field.md)
- [GameCreate](docs/Model/GameCreate.md)
- [GameOpponent](docs/Model/GameOpponent.md)
- [GameTime](docs/Model/GameTime.md)
- [GameTransportation](docs/Model/GameTransportation.md)
- [GameUpdate](docs/Model/GameUpdate.md)
- [GenderType](docs/Model/GenderType.md)
- [GenderTypeCollection](docs/Model/GenderTypeCollection.md)
- [GradeLevel](docs/Model/GradeLevel.md)
- [GradeLevelCollection](docs/Model/GradeLevelCollection.md)
- [Highlight](docs/Model/Highlight.md)
- [HighlightPhoto](docs/Model/HighlightPhoto.md)
- [HomeLanguageAdd](docs/Model/HomeLanguageAdd.md)
- [HomeLanguageRead](docs/Model/HomeLanguageRead.md)
- [IdDescriptorField](docs/Model/IdDescriptorField.md)
- [Leader](docs/Model/Leader.md)
- [Level](docs/Model/Level.md)
- [LevelCollection](docs/Model/LevelCollection.md)
- [ListRead](docs/Model/ListRead.md)
- [ListReadCollection](docs/Model/ListReadCollection.md)
- [ListResult](docs/Model/ListResult.md)
- [Location](docs/Model/Location.md)
- [LocationCollection](docs/Model/LocationCollection.md)
- [LocationCreateModel](docs/Model/LocationCreateModel.md)
- [Major](docs/Model/Major.md)
- [MasterScheduleBlock](docs/Model/MasterScheduleBlock.md)
- [MasterScheduleDay](docs/Model/MasterScheduleDay.md)
- [MasterScheduleDayCollection](docs/Model/MasterScheduleDayCollection.md)
- [MasterScheduleSet](docs/Model/MasterScheduleSet.md)
- [MediaItem](docs/Model/MediaItem.md)
- [MedicalSecurityRole](docs/Model/MedicalSecurityRole.md)
- [MedicationDosage](docs/Model/MedicationDosage.md)
- [MedicationDosageCreate](docs/Model/MedicationDosageCreate.md)
- [Meeting](docs/Model/Meeting.md)
- [MeetingCollection](docs/Model/MeetingCollection.md)
- [Minor](docs/Model/Minor.md)
- [ModelList](docs/Model/ModelList.md)
- [NewsCategory](docs/Model/NewsCategory.md)
- [NewsCategoryCollection](docs/Model/NewsCategoryCollection.md)
- [NewsItem](docs/Model/NewsItem.md)
- [NewsItemCollection](docs/Model/NewsItemCollection.md)
- [OccupationCreate](docs/Model/OccupationCreate.md)
- [OccupationRead](docs/Model/OccupationRead.md)
- [OccupationReadCollection](docs/Model/OccupationReadCollection.md)
- [OccupationUpdate](docs/Model/OccupationUpdate.md)
- [OfferingType](docs/Model/OfferingType.md)
- [OfferingTypeCollection](docs/Model/OfferingTypeCollection.md)
- [Opponent](docs/Model/Opponent.md)
- [OpponentFlyweight](docs/Model/OpponentFlyweight.md)
- [OpponentFlyweightCollection](docs/Model/OpponentFlyweightCollection.md)
- [OpponentUpdateModel](docs/Model/OpponentUpdateModel.md)
- [PhoneAdd](docs/Model/PhoneAdd.md)
- [PhoneRead](docs/Model/PhoneRead.md)
- [PhoneReadCollection](docs/Model/PhoneReadCollection.md)
- [PhoneShare](docs/Model/PhoneShare.md)
- [PhoneType](docs/Model/PhoneType.md)
- [PhoneTypeCollection](docs/Model/PhoneTypeCollection.md)
- [PhoneTypeLink](docs/Model/PhoneTypeLink.md)
- [PhoneUpdate](docs/Model/PhoneUpdate.md)
- [Player](docs/Model/Player.md)
- [PlayerCollection](docs/Model/PlayerCollection.md)
- [PostResponse](docs/Model/PostResponse.md)
- [PracticeCreate](docs/Model/PracticeCreate.md)
- [PracticeUpdate](docs/Model/PracticeUpdate.md)
- [ProfilePictureUrls](docs/Model/ProfilePictureUrls.md)
- [RaceRead](docs/Model/RaceRead.md)
- [RelationshipCreate](docs/Model/RelationshipCreate.md)
- [RelationshipRead](docs/Model/RelationshipRead.md)
- [RelationshipReadCollection](docs/Model/RelationshipReadCollection.md)
- [Resident](docs/Model/Resident.md)
- [Resource](docs/Model/Resource.md)
- [ResourceCollection](docs/Model/ResourceCollection.md)
- [ResultCreate](docs/Model/ResultCreate.md)
- [ResultCreateOpponent](docs/Model/ResultCreateOpponent.md)
- [Role](docs/Model/Role.md)
- [RoleCollection](docs/Model/RoleCollection.md)
- [Room](docs/Model/Room.md)
- [Roster](docs/Model/Roster.md)
- [Row](docs/Model/Row.md)
- [ScheduleItem](docs/Model/ScheduleItem.md)
- [ScheduleItemCollection](docs/Model/ScheduleItemCollection.md)
- [ScheduleSet](docs/Model/ScheduleSet.md)
- [ScheduleSetAccess](docs/Model/ScheduleSetAccess.md)
- [ScheduleSetCollection](docs/Model/ScheduleSetCollection.md)
- [ScheduleSetDetails](docs/Model/ScheduleSetDetails.md)
- [ScheduleSetMettingPattern](docs/Model/ScheduleSetMettingPattern.md)
- [ScheduleSetMettingTime](docs/Model/ScheduleSetMettingTime.md)
- [ScheduleSetRotation](docs/Model/ScheduleSetRotation.md)
- [ScheduleSetRotationDay](docs/Model/ScheduleSetRotationDay.md)
- [ScheduleSetRotationDayMeeting](docs/Model/ScheduleSetRotationDayMeeting.md)
- [SchoolBbidStatus](docs/Model/SchoolBbidStatus.md)
- [SchoolBbidStatusCollection](docs/Model/SchoolBbidStatusCollection.md)
- [SchoolDecisionModel](docs/Model/SchoolDecisionModel.md)
- [SchoolSession](docs/Model/SchoolSession.md)
- [SchoolSessionCollection](docs/Model/SchoolSessionCollection.md)
- [Season](docs/Model/Season.md)
- [SectionCycles](docs/Model/SectionCycles.md)
- [SecurityRole](docs/Model/SecurityRole.md)
- [SecurityRoleCollection](docs/Model/SecurityRoleCollection.md)
- [SourceModel](docs/Model/SourceModel.md)
- [SpecialDay](docs/Model/SpecialDay.md)
- [SpecialDayBlock](docs/Model/SpecialDayBlock.md)
- [SpecialDayCollection](docs/Model/SpecialDayCollection.md)
- [Sport](docs/Model/Sport.md)
- [SportCollection](docs/Model/SportCollection.md)
- [SportsLevel](docs/Model/SportsLevel.md)
- [SportsLevelCollection](docs/Model/SportsLevelCollection.md)
- [Student](docs/Model/Student.md)
- [StudentAccessRole](docs/Model/StudentAccessRole.md)
- [StudentAllergiesView](docs/Model/StudentAllergiesView.md)
- [StudentAllergyUpdate](docs/Model/StudentAllergyUpdate.md)
- [StudentAssignment](docs/Model/StudentAssignment.md)
- [StudentAssignmentCollection](docs/Model/StudentAssignmentCollection.md)
- [StudentAthleticRequirement](docs/Model/StudentAthleticRequirement.md)
- [StudentAthleticRequirementRead](docs/Model/StudentAthleticRequirementRead.md)
- [StudentAthleticRequirementUpdate](docs/Model/StudentAthleticRequirementUpdate.md)
- [StudentCollection](docs/Model/StudentCollection.md)
- [StudentConditionUpdate](docs/Model/StudentConditionUpdate.md)
- [StudentConditionView](docs/Model/StudentConditionView.md)
- [StudentGradedAssignment](docs/Model/StudentGradedAssignment.md)
- [StudentGradedAssignmentCollection](docs/Model/StudentGradedAssignmentCollection.md)
- [StudentImmunization](docs/Model/StudentImmunization.md)
- [StudentImmunizationRead](docs/Model/StudentImmunizationRead.md)
- [StudentImmunizationType](docs/Model/StudentImmunizationType.md)
- [StudentImmunizationUpdate](docs/Model/StudentImmunizationUpdate.md)
- [StudentInfo](docs/Model/StudentInfo.md)
- [StudentMedicalAllergy](docs/Model/StudentMedicalAllergy.md)
- [StudentMedicalAllergyCondition](docs/Model/StudentMedicalAllergyCondition.md)
- [StudentMedicalCondition](docs/Model/StudentMedicalCondition.md)
- [StudentMedication](docs/Model/StudentMedication.md)
- [StudentMedicationCreate](docs/Model/StudentMedicationCreate.md)
- [StudentMedicationRead](docs/Model/StudentMedicationRead.md)
- [StudentMedicationUpdate](docs/Model/StudentMedicationUpdate.md)
- [StudentSchedule](docs/Model/StudentSchedule.md)
- [StudentScheduleCollection](docs/Model/StudentScheduleCollection.md)
- [SubTest](docs/Model/SubTest.md)
- [Table](docs/Model/Table.md)
- [TableCollection](docs/Model/TableCollection.md)
- [TableValue](docs/Model/TableValue.md)
- [TableValueCollection](docs/Model/TableValueCollection.md)
- [Teacher](docs/Model/Teacher.md)
- [Team](docs/Model/Team.md)
- [TeamCollection](docs/Model/TeamCollection.md)
- [Term](docs/Model/Term.md)
- [TermCollection](docs/Model/TermCollection.md)
- [TestScore](docs/Model/TestScore.md)
- [TestScoreAdd](docs/Model/TestScoreAdd.md)
- [TestScoreCollection](docs/Model/TestScoreCollection.md)
- [TestType](docs/Model/TestType.md)
- [TestTypeCollection](docs/Model/TestTypeCollection.md)
- [Timezone](docs/Model/Timezone.md)
- [Transportation](docs/Model/Transportation.md)
- [TransportationCollection](docs/Model/TransportationCollection.md)
- [UserAdd](docs/Model/UserAdd.md)
- [UserAddRace](docs/Model/UserAddRace.md)
- [UserAdminCustomField](docs/Model/UserAdminCustomField.md)
- [UserAdminCustomFieldCollection](docs/Model/UserAdminCustomFieldCollection.md)
- [UserAdminCustomFieldCreate](docs/Model/UserAdminCustomFieldCreate.md)
- [UserAdminCustomFieldUpdate](docs/Model/UserAdminCustomFieldUpdate.md)
- [UserAreaOfStudyReferenceOutputModel](docs/Model/UserAreaOfStudyReferenceOutputModel.md)
- [UserAuditRead](docs/Model/UserAuditRead.md)
- [UserAuditReadCollection](docs/Model/UserAuditReadCollection.md)
- [UserDefinedTable](docs/Model/UserDefinedTable.md)
- [UserDefinedTableValue](docs/Model/UserDefinedTableValue.md)
- [UserDegreeOutputModel](docs/Model/UserDegreeOutputModel.md)
- [UserDegreeOutputModelCollection](docs/Model/UserDegreeOutputModelCollection.md)
- [UserEdit](docs/Model/UserEdit.md)
- [UserEnrollment](docs/Model/UserEnrollment.md)
- [UserEnrollmentCollection](docs/Model/UserEnrollmentCollection.md)
- [UserEnrollmentCreate](docs/Model/UserEnrollmentCreate.md)
- [UserEnrollmentResponse](docs/Model/UserEnrollmentResponse.md)
- [UserExtended](docs/Model/UserExtended.md)
- [UserExtendedCollection](docs/Model/UserExtendedCollection.md)
- [UserInState](docs/Model/UserInState.md)
- [UserLocker](docs/Model/UserLocker.md)
- [UserMailbox](docs/Model/UserMailbox.md)
- [UserMajorMinorConcentrationOutputModel](docs/Model/UserMajorMinorConcentrationOutputModel.md)
- [UserMe](docs/Model/UserMe.md)
- [UserPassport](docs/Model/UserPassport.md)
- [UserProfilePhoto](docs/Model/UserProfilePhoto.md)
- [UserRead](docs/Model/UserRead.md)
- [UserReadCollection](docs/Model/UserReadCollection.md)
- [UserVisa](docs/Model/UserVisa.md)
- [UserVisaAdd](docs/Model/UserVisaAdd.md)
- [Year](docs/Model/Year.md)
- [YearCollection](docs/Model/YearCollection.md)

## Authorization

Authentication schemes defined for the API:
### apiKeyHeader

- **Type**: API key
- **API key parameter name**: Bb-Api-Subscription-Key
- **Location**: HTTP header


### apiKeyQuery

- **Type**: API key
- **API key parameter name**: subscription-key
- **Location**: URL query string


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0`
    - Generator version: `7.4.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
