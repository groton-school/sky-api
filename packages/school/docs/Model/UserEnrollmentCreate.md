# # UserEnrollmentCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**userId** | **int** | ID of the individual to be enrolled | [optional]
**gradeLevelId** | **int** | ID of the grade the individual is enrolling in |
**schoolLevelId** | **int** | ID of the school level | [optional]
**schoolYearLabel** | **string** | School Year individual is enrolling in.  Defaults to the current school year. | [optional]
**enrollDate** | **\DateTime** | Date of the enrollment |
**departDate** | **\DateTime** | Date departed | [optional]
**currentYear** | **bool** | Toggles current year | [optional]
**hasGrades** | **bool** | Toggles has grades | [optional]
**gradeRepeated** | **bool** | Toggles grade repeated | [optional]
**graduated** | **bool** | Toggles graduated | [optional]
**allowEdit** | **bool** | Toggles allow edit | [optional]
**allowDelete** | **bool** | Toggles allow delete | [optional]
**futureEnrollments** | **bool** | Toggles future enrollments | [optional]
**durationId** | **int** | The Id of the duration the user should be enrolled in. Optional for all Education Enrollments. | [optional]
**sessionId** | **int** | The Id of the session the user should be enrolled in. Required for Higher Education Enrollments. | [optional]
**roleIds** | **int[]** | Collection of RoleIds the individual should be associated to |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
