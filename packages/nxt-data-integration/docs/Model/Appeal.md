# # Appeal

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**appealCategory** | **string** | The category associated with the appeal. | [optional]
**campaign** | **string** | The default campaign associated with the appeal. | [optional]
**id** | **int** | The immutable system record ID of the appeal. | [optional]
**appealId** | **string** | The string identifier for the appeal. |
**campaignId** | **int** | The ID for the default campaign associated with the appeal. | [optional]
**appealCategoryId** | **int** | The unique identifier for an appeal category associated with the appeal. | [optional]
**description** | **string** | The appeal description that appears as the full name at the top of its record. |
**goal** | **float** | The target amount to raise through the appeal. | [optional]
**startDate** | **\DateTime** | The start date for the appeal. | [optional]
**endDate** | **\DateTime** | The end date for the appeal. | [optional]
**inactive** | **bool** | The active status of the appeal; an appeal is active if the current date is after the start date and before the end date. | [optional]
**defaultFundId** | **int** | The ID for the default fund associated with the appeal. | [optional]
**notes** | **string** | The notes associated with the appeal. | [optional]
**numberSolicited** | **int** | The number of constituents solicited in the appeal. | [optional]
**defaultGiftAmount** | **float** | The monetary amount of the default gift. This property defaults to 0.00 if no amount is specified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
