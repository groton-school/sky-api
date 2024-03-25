# # UserEnrollment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_id** | **int** | The id of the user | [optional]
**firstname** | **string** | The first name of the user | [optional]
**lastname** | **string** | The last name of the user | [optional]
**preferred_name** | **string** | The preferred name of the user | [optional]
**name** | **string** | The formatted name of the user | [optional]
**school_year** | **string** | The school year the user is enrolled in | [optional]
**school_level** | [**\SKY\School\Model\Level**](Level.md) |  | [optional]
**grade_level** | [**\SKY\School\Model\GradeLevel**](GradeLevel.md) |  | [optional]
**repeated** | **bool** | Returns true if the user repeated this enrollment | [optional]
**graduated** | **bool** | Returns true if the user graduated after completing this enrollment year | [optional]
**enroll_date** | **\DateTime** | The date the enrollment begins | [optional]
**depart_date** | **\DateTime** | The date the user departed the school year, ending the enrollment | [optional]
**depart_reason** | **string** | The reason the user departed the school | [optional]
**session** | **string** | The name of the session, if a session is attached to the enrollment | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
