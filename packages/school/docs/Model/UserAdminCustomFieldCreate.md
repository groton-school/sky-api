# # UserAdminCustomFieldCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fieldId** | **int** | The ID of the custom field to update. This value is returned from &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/school/operations/V1CustomfieldsGet\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Core custom fields&lt;/a&gt;. | [optional]
**dataTypeId** | **int** | The ID of the data type of the custom field. This value is returned from &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/school/operations/V1CustomfieldsGet\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Core custom fields&lt;/a&gt;. | [optional]
**intValue** | **int** | If the field format is Number, use this property for the value of the custom field. Values must be a whole number (positive or negative).&lt;br /&gt;  If the field format is Dropdown or Checkbox List, use this property for the value of the custom field. The value is the table value ID returned from &lt;a href&#x3D;\&quot;https://developer.sky.blackbaud.com/docs/services/school/operations/V1CustomfieldsGet\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Core custom fields&lt;/a&gt;. | [optional]
**textValue** | **string** | If the field format is Text input or Text paragraph, use this property for the value of the custom field. | [optional]
**decimalValue** | **float** | If the field format is Currency, use this property for the value of the custom field. Values must be between 0.00 and 99,999,999.99. | [optional]
**dateValue** | **\DateTime** | If field format is Date, use this property for the value of the custom field. Values must be formatted YYYY/MM/DD. | [optional]
**bitValue** | **bool** | If field format is Yes/No or Checkbox, use this property for the value of the custom field. Values must be &#39;true\&quot; or &#39;false&#39;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
