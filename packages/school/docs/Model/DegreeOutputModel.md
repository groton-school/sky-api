# # DegreeOutputModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The Id of the area of study | [optional]
**declared_on** | **\DateTime** | From User Area of Study Reference | [optional]
**completed_on** | **\DateTime** | From User Area of Study Group | [optional]
**conferred_on** | **\DateTime** | From User Area of Study Group | [optional]
**credits_completed** | **float** | From User Area of Study Reference | [optional]
**credits_in_progress** | **float** | From User Area of Study Reference | [optional]
**credits_remaining** | **float** | From User Area of Study Reference | [optional]
**created_by** | **string** | The BBID of the user who created the area of study | [optional]
**modified_by** | **string** | The BBID of the user who last modified the area of study | [optional]
**created** | **\DateTime** | The date the area of study was created | [optional]
**modified** | **\DateTime** | The date the area of study was last modified | [optional]
**requirement_set** | [**\SKY\School\Model\AreaOfStudyOutputModel[]**](AreaOfStudyOutputModel.md) |  | [optional]
**majors** | [**\SKY\School\Model\UserAreaOfStudyReferenceOutputModel[]**](UserAreaOfStudyReferenceOutputModel.md) |  | [optional]
**minors** | [**\SKY\School\Model\UserAreaOfStudyReferenceOutputModel[]**](UserAreaOfStudyReferenceOutputModel.md) |  | [optional]
**concentrations** | [**\SKY\School\Model\UserAreaOfStudyReferenceOutputModel[]**](UserAreaOfStudyReferenceOutputModel.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
