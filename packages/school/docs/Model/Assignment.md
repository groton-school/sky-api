# # Assignment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the assignment | [optional]
**date** | **\DateTime** | The date the assignment was assigned; Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO-8601&lt;/a&gt; (24H) format: 2003-04-21T10:29:43 | [optional]
**description** | **string** | The description of the assignment | [optional]
**discussion** | **bool** | Returns True if Discussion is enabled; Discussion is a user-defined value. | [optional]
**due_date** | **\DateTime** | The date the assignment is due; Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO-8601&lt;/a&gt; (24H) format: 2003-04-21T10:29:43 | [optional]
**enrolled** | **int** | The number of students enrolled in a class. | [optional]
**graded_count** | **int** | Returns the number of assignments that have been graded | [optional]
**index_id** | **int** | The index ID of the assignment | [optional]
**major** | **bool** | Whether the assignment is a major assignment or not; a major assignment is a user-defined value | [optional]
**name** | **string** | The name of the assignment | [optional]
**publish_on_assigned** | **bool** | Returns True if assignment is published when it&#39;s assigned; based on the Date property | [optional]
**published** | **bool** | Returns True if the assignment is published | [optional]
**rank** | **int** | Gets or sets the rank of the assignment | [optional]
**status** | **int** | The status of the assignment | [optional]
**type** | **string** | The assignment type (ex. Homework, Essay) | [optional]
**type_id** | **int** | The Type ID of the assignment; the Type ID is a static system value. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
