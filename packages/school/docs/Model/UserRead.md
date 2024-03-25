# # UserRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID associated with a user | [optional]
**affiliation** | **string** | The affiliation of a user | [optional]
**custom_field_eight** | **string** | A custom field on the user profile (eight of ten) | [optional]
**custom_field_five** | **string** | A custom field on the user profile (five of ten) | [optional]
**custom_field_four** | **string** | A custom field on the user profile (four of ten) | [optional]
**custom_field_nine** | **string** | A custom field on the user profile (nine of ten) | [optional]
**custom_field_one** | **string** | A custom field on the user profile (one of ten) | [optional]
**custom_field_seven** | **string** | A custom field on the user profile (seven of ten) | [optional]
**custom_field_six** | **string** | A custom field on the user profile (six of ten) | [optional]
**custom_field_ten** | **string** | A custom field on the user profile (ten of ten) | [optional]
**custom_field_three** | **string** | A custom field on the user profile (three of ten) | [optional]
**custom_field_two** | **string** | A custom field on the user profile (two of ten) | [optional]
**deceased** | **bool** | Returns true if deceased is selected under sensitive information in a personal profile ex: {last_name} {suffix*}, {first_name} {(maidenname*}) {grad_year*} *If not populated fields will not appear (read only) | [optional]
**display** | **string** | Display name field generated from first name, last name, nickname, and grad year (read only) | [optional]
**email** | **string** | The email address of a user | [optional]
**email_active** | **bool** | Returns true if the users e-mail is ok to send to | [optional]
**first_name** | **string** | The first name of a user | [optional]
**gender** | **string** | The gender of a user | [optional]
**gender_description** | **string** | The gender of a user | [optional]
**greeting** | **string** | The greeting of a user | [optional]
**host_id** | **string** | The HostId of a user | [optional]
**last_name** | **string** | The last name of a user | [optional]
**lost** | **bool** | Returns true if lost is selected under sensitive information in a personal profile (read only) | [optional]
**maiden_name** | **string** | The maiden name of a user | [optional]
**middle_name** | **string** | The middle name of a user | [optional]
**nick_name** | **string** | The nickname of a user  &lt;b&gt;This field will be deprecated after 90 days.&lt;/b&gt; | [optional]
**preferred_name** | **string** | The preferred name of the user | [optional]
**dob** | **\DateTime** | Users date of birth | [optional]
**prefix** | **string** | The prefix of a user | [optional]
**suffix** | **string** | The suffix of a user | [optional]
**profile_pictures** | [**\SKY\School\Model\ProfilePictureUrls**](ProfilePictureUrls.md) |  | [optional]
**home_languages** | [**\SKY\School\Model\HomeLanguageRead[]**](HomeLanguageRead.md) | List of languages spoken at home by the user | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
