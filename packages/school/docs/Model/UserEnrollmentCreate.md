# # UserEnrollmentCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_id** | **int** | ID of the individual to be enrolled | [optional]
**grade_level_id** | **int** | ID of the grade the individual is enrolling in |
**school_level_id** | **int** | ID of the school level | [optional]
**school_year_label** | **string** | School Year individual is enrolling in.  Defaults to the current school year. | [optional]
**enroll_date** | **\DateTime** | Date of the enrollment |
**depart_date** | **\DateTime** | Date departed | [optional]
**current_year** | **bool** | Toggles current year | [optional]
**has_grades** | **bool** | Toggles has grades | [optional]
**grade_repeated** | **bool** | Toggles grade repeated | [optional]
**graduated** | **bool** | Toggles graduated | [optional]
**allow_edit** | **bool** | Toggles allow edit | [optional]
**allow_delete** | **bool** | Toggles allow delete | [optional]
**future_enrollments** | **bool** | Toggles future enrollments | [optional]
**duration_id** | **int** | The Id of the duration the user should be enrolled in. Optional for all Education Enrollments. | [optional]
**session_id** | **int** | The Id of the session the user should be enrolled in. Required for Higher Education Enrollments. | [optional]
**role_ids** | **int[]** | Collection of RoleIds the individual should be associated to |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
