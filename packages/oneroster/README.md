# OpenAPIClient-php

OneRoster v1.1 API. For details on the OneRoster Version 1.1 Specification, <a href=\"https://www.imsglobal.org/oneroster-v11-final-specification\">click here</a>. The <a href=\"https://developer.blackbaud.com/skyapi/bbem/oneroster/authorization\">Authorization</a> page provides steps to setup and test these endpoints.


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
      "url": "https://github.com/groton-school/sky-api.oneroster.git"
    }
  ],
  "require": {
    "groton-school/sky-api.oneroster": "*@dev"
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




$apiInstance = new SKY\OneRoster\Api\AcademicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | sourcedId for the academic session

try {
    $result = $apiInstance->getAcademicSession($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcademicsApi->getAcademicSession: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AcademicsApi* | [**getAcademicSession**](docs/Api/AcademicsApi.md#getacademicsession) | **GET** /academicSessions/{id} | AcademicSession by id
*AcademicsApi* | [**getAllAcademicSessions**](docs/Api/AcademicsApi.md#getallacademicsessions) | **GET** /academicSessions | AcademicSessions all
*AcademicsApi* | [**getAllGradingPeriods**](docs/Api/AcademicsApi.md#getallgradingperiods) | **GET** /gradingPeriods | GradingPeriods all
*AcademicsApi* | [**getAllTerms**](docs/Api/AcademicsApi.md#getallterms) | **GET** /terms | Terms all
*AcademicsApi* | [**getGradingPeriod**](docs/Api/AcademicsApi.md#getgradingperiod) | **GET** /gradingPeriods/{id} | GradingPeriod by id
*AcademicsApi* | [**getGradingPeriodsForTerm**](docs/Api/AcademicsApi.md#getgradingperiodsforterm) | **GET** /terms/{term_id}/gradingPeriods | GradingPeriods for term
*AcademicsApi* | [**getTerm**](docs/Api/AcademicsApi.md#getterm) | **GET** /terms/{id} | Term by id
*AcademicsApi* | [**getTermsForSchool**](docs/Api/AcademicsApi.md#gettermsforschool) | **GET** /schools/{school_id}/terms | Terms for school
*CategoriesApi* | [**getAllCategories**](docs/Api/CategoriesApi.md#getallcategories) | **GET** /categories | Categories all
*CategoriesApi* | [**getCategoriesForClass**](docs/Api/CategoriesApi.md#getcategoriesforclass) | **GET** /classes/{class_id}/categories | Categories for a class
*CategoriesApi* | [**getCategory**](docs/Api/CategoriesApi.md#getcategory) | **GET** /categories/{id} | Category by id
*CategoriesApi* | [**putCategory**](docs/Api/CategoriesApi.md#putcategory) | **PUT** /categories/{id} | Category create/update
*ClassesApi* | [**getAllClasses**](docs/Api/ClassesApi.md#getallclasses) | **GET** /classes | Classes all
*ClassesApi* | [**getClass**](docs/Api/ClassesApi.md#getclass) | **GET** /classes/{id} | Class by id
*ClassesApi* | [**getClassesForSchool**](docs/Api/ClassesApi.md#getclassesforschool) | **GET** /schools/{school_id}/classes | Classes for a school
*ClassesApi* | [**getClassesForTeacher**](docs/Api/ClassesApi.md#getclassesforteacher) | **GET** /teachers/{teacher_id}/classes | Classes for a teacher
*ClassesApi* | [**getLineItemsForClass**](docs/Api/ClassesApi.md#getlineitemsforclass) | **GET** /classes/{class_id}/lineItems | LineItems for a class
*CoursesApi* | [**getAllCourses**](docs/Api/CoursesApi.md#getallcourses) | **GET** /courses | Courses all
*CoursesApi* | [**getCourse**](docs/Api/CoursesApi.md#getcourse) | **GET** /courses/{id} | Course by id
*CoursesApi* | [**getCoursesForSchool**](docs/Api/CoursesApi.md#getcoursesforschool) | **GET** /schools/{school_id}/courses | Courses for school
*EnrollmentsApi* | [**getAllEnrollments**](docs/Api/EnrollmentsApi.md#getallenrollments) | **GET** /enrollments | Enrollments all
*EnrollmentsApi* | [**getEnrollment**](docs/Api/EnrollmentsApi.md#getenrollment) | **GET** /enrollments/{id} | Enrollment by id
*EnrollmentsApi* | [**getEnrollmentsForClassInSchool**](docs/Api/EnrollmentsApi.md#getenrollmentsforclassinschool) | **GET** /schools/{school_id}/classes/{class_id}/enrollments | Enrollments for a class in a school
*EnrollmentsApi* | [**getEnrollmentsForSchool**](docs/Api/EnrollmentsApi.md#getenrollmentsforschool) | **GET** /schools/{school_id}/enrollments | Enrollments for a school
*LineItemsApi* | [**getAllLineItems**](docs/Api/LineItemsApi.md#getalllineitems) | **GET** /lineItems | LineItems all
*LineItemsApi* | [**getLineItem**](docs/Api/LineItemsApi.md#getlineitem) | **GET** /lineItems/{id} | LineItem by id
*LineItemsApi* | [**putLineItem**](docs/Api/LineItemsApi.md#putlineitem) | **PUT** /lineItems/{id} | LineItem create/update
*OrgsApi* | [**getAllOrgs**](docs/Api/OrgsApi.md#getallorgs) | **GET** /orgs | Orgs all
*OrgsApi* | [**getOrg**](docs/Api/OrgsApi.md#getorg) | **GET** /orgs/{id} | Org by id
*ResultsApi* | [**deleteResult**](docs/Api/ResultsApi.md#deleteresult) | **DELETE** /results/{id} | Result delete
*ResultsApi* | [**getAllResults**](docs/Api/ResultsApi.md#getallresults) | **GET** /results | Results all
*ResultsApi* | [**getResult**](docs/Api/ResultsApi.md#getresult) | **GET** /results/{id} | Result by id
*ResultsApi* | [**getResultsForClass**](docs/Api/ResultsApi.md#getresultsforclass) | **GET** /classes/{class_id}/results | Results for a class
*ResultsApi* | [**getResultsForLineItemForClass**](docs/Api/ResultsApi.md#getresultsforlineitemforclass) | **GET** /classes/{class_id}/lineItems/{li_id}/results | Results for a lineItem for a class
*ResultsApi* | [**getResultsForStudentForClass**](docs/Api/ResultsApi.md#getresultsforstudentforclass) | **GET** /classes/{class_id}/students/{student_id}/results | Results for a student for a class
*ResultsApi* | [**putResult**](docs/Api/ResultsApi.md#putresult) | **PUT** /results/{id} | Result create/update
*SchoolsApi* | [**getAllSchools**](docs/Api/SchoolsApi.md#getallschools) | **GET** /schools | Schools all
*SchoolsApi* | [**getSchool**](docs/Api/SchoolsApi.md#getschool) | **GET** /schools/{id} | School by id
*UsersApi* | [**getAllDemographics**](docs/Api/UsersApi.md#getalldemographics) | **GET** /demographics | Demographics all
*UsersApi* | [**getAllStudents**](docs/Api/UsersApi.md#getallstudents) | **GET** /students | Students all
*UsersApi* | [**getAllTeachers**](docs/Api/UsersApi.md#getallteachers) | **GET** /teachers | Teachers all
*UsersApi* | [**getAllUsers**](docs/Api/UsersApi.md#getallusers) | **GET** /users | Users all
*UsersApi* | [**getDemographics**](docs/Api/UsersApi.md#getdemographics) | **GET** /demographics/{id} | Demographics by id
*UsersApi* | [**getStudent**](docs/Api/UsersApi.md#getstudent) | **GET** /students/{id} | Student by id
*UsersApi* | [**getStudentsForClass**](docs/Api/UsersApi.md#getstudentsforclass) | **GET** /classes/{class_id}/students | Students for class
*UsersApi* | [**getStudentsForSchool**](docs/Api/UsersApi.md#getstudentsforschool) | **GET** /schools/{school_id}/students | Students for school
*UsersApi* | [**getTeacher**](docs/Api/UsersApi.md#getteacher) | **GET** /teachers/{id} | Teacher by id
*UsersApi* | [**getTeachersForClass**](docs/Api/UsersApi.md#getteachersforclass) | **GET** /classes/{class_id}/teachers | Teachers for class
*UsersApi* | [**getTeachersForSchool**](docs/Api/UsersApi.md#getteachersforschool) | **GET** /schools/{school_id}/teachers | Teachers for school
*UsersApi* | [**getUser**](docs/Api/UsersApi.md#getuser) | **GET** /users/{id} | User by id

## Models

- [AcademicSessionModel](docs/Model/AcademicSessionModel.md)
- [AcademicSessionOutputModel](docs/Model/AcademicSessionOutputModel.md)
- [AcademicSessionsOutputModel](docs/Model/AcademicSessionsOutputModel.md)
- [CategoriesOutputModel](docs/Model/CategoriesOutputModel.md)
- [CategoryInputModel](docs/Model/CategoryInputModel.md)
- [CategoryModel](docs/Model/CategoryModel.md)
- [CategoryOutputModel](docs/Model/CategoryOutputModel.md)
- [ClassModel](docs/Model/ClassModel.md)
- [ClassOutputModel](docs/Model/ClassOutputModel.md)
- [ClassesOutputModel](docs/Model/ClassesOutputModel.md)
- [CourseModel](docs/Model/CourseModel.md)
- [CourseOutputModel](docs/Model/CourseOutputModel.md)
- [CoursesOutputModel](docs/Model/CoursesOutputModel.md)
- [DemographicOutputModel](docs/Model/DemographicOutputModel.md)
- [DemographicsOutputModel](docs/Model/DemographicsOutputModel.md)
- [EnrollmentModel](docs/Model/EnrollmentModel.md)
- [EnrollmentOutputModel](docs/Model/EnrollmentOutputModel.md)
- [EnrollmentsOutputModel](docs/Model/EnrollmentsOutputModel.md)
- [GuidRefModel](docs/Model/GuidRefModel.md)
- [LineItemInputModel](docs/Model/LineItemInputModel.md)
- [LineItemModel](docs/Model/LineItemModel.md)
- [LineItemOutputModel](docs/Model/LineItemOutputModel.md)
- [LineItemsOutputModel](docs/Model/LineItemsOutputModel.md)
- [ORDemographicModel](docs/Model/ORDemographicModel.md)
- [ORUserModel](docs/Model/ORUserModel.md)
- [OrgModel](docs/Model/OrgModel.md)
- [OrgOutputModel](docs/Model/OrgOutputModel.md)
- [OrgsOutputModel](docs/Model/OrgsOutputModel.md)
- [ResultInputModelSvc](docs/Model/ResultInputModelSvc.md)
- [ResultModelSvc](docs/Model/ResultModelSvc.md)
- [ResultOutputModelSvc](docs/Model/ResultOutputModelSvc.md)
- [ResultsOutputModelSvc](docs/Model/ResultsOutputModelSvc.md)
- [StatusInfoModel](docs/Model/StatusInfoModel.md)
- [UserIdModel](docs/Model/UserIdModel.md)
- [UserOutputModel](docs/Model/UserOutputModel.md)
- [UsersOutputModel](docs/Model/UsersOutputModel.md)

## Authorization
Endpoints do not require authorization.

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1p1`
    - Generator version: `7.4.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
