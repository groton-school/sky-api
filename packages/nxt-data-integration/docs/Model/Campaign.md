# # Campaign

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**campaignCategory** | **string** | The campaign category. | [optional]
**id** | **int** | The immutable system record ID of the campaign. | [optional]
**campaignId** | **string** | The string identifier for the campaign. |
**description** | **string** | The campaign description. |
**campaignCategoryId** | **int** | The identifier for a campaign category associated with the campaign. | [optional]
**startDate** | **\DateTime** | The start date for the campaign. | [optional]
**endDate** | **\DateTime** | The end date for the campaign. | [optional]
**inactive** | **bool** | The active status of the campaign; a campaign is active if the current date is after the start date and before the end date. | [optional]
**defaultFundId** | **int** | The ID for the default fund associated with the campaign. | [optional]
**goal** | **float** | The target amount to raise through the campaign. | [optional]
**notes** | **string** | The notes associated with the campaign. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
