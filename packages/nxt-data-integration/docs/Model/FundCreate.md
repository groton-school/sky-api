# # FundCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fundId** | **string** | The string identifier for the fund. |
**description** | **string** | The fund description. |
**fundCategoryId** | **int** | The table entry ID for the fund category associated with the fund. | [optional]
**fundTypeId** | **int** | The table entry ID for the fund type associated with the fund. | [optional]
**campaignId** | **int** | The system identifier for the campaign associated with the fund. | [optional]
**startDate** | **\DateTime** | The start date for the fund. | [optional]
**endDate** | **\DateTime** | The end date for the fund. | [optional]
**inactive** | **bool** | The active status of the fund; a fund is active if the current date is after the start date and before the end date. | [optional]
**defaultAppealId** | **int** | The ID for the default appeal associated with the fund. | [optional]
**notes** | **string** | The text notes associated with the fund. | [optional]
**goal** | **float** | The target amount to raise for the fund. | [optional]
**restricted** | **bool** | Value used to indicate whether the fund is restricted to specific users. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
