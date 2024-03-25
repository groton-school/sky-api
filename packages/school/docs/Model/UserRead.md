# # UserRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID associated with a user | [optional]
**affiliation** | **string** | The affiliation of a user | [optional]
**customFieldEight** | **string** | A custom field on the user profile (eight of ten) | [optional]
**customFieldFive** | **string** | A custom field on the user profile (five of ten) | [optional]
**customFieldFour** | **string** | A custom field on the user profile (four of ten) | [optional]
**customFieldNine** | **string** | A custom field on the user profile (nine of ten) | [optional]
**customFieldOne** | **string** | A custom field on the user profile (one of ten) | [optional]
**customFieldSeven** | **string** | A custom field on the user profile (seven of ten) | [optional]
**customFieldSix** | **string** | A custom field on the user profile (six of ten) | [optional]
**customFieldTen** | **string** | A custom field on the user profile (ten of ten) | [optional]
**customFieldThree** | **string** | A custom field on the user profile (three of ten) | [optional]
**customFieldTwo** | **string** | A custom field on the user profile (two of ten) | [optional]
**deceased** | **bool** | Returns true if deceased is selected under sensitive information in a personal profile ex: {last_name} {suffix*}, {first_name} {(maidenname*}) {grad_year*} *If not populated fields will not appear (read only) | [optional]
**display** | **string** | Display name field generated from first name, last name, nickname, and grad year (read only) | [optional]
**email** | **string** | The email address of a user | [optional]
**emailActive** | **bool** | Returns true if the users e-mail is ok to send to | [optional]
**firstName** | **string** | The first name of a user | [optional]
**gender** | **string** | The gender of a user | [optional]
**genderDescription** | **string** | The gender of a user | [optional]
**greeting** | **string** | The greeting of a user | [optional]
**hostId** | **string** | The HostId of a user | [optional]
**lastName** | **string** | The last name of a user | [optional]
**lost** | **bool** | Returns true if lost is selected under sensitive information in a personal profile (read only) | [optional]
**maidenName** | **string** | The maiden name of a user | [optional]
**middleName** | **string** | The middle name of a user | [optional]
**nickName** | **string** | The nickname of a user  &lt;b&gt;This field will be deprecated after 90 days.&lt;/b&gt; | [optional]
**preferredName** | **string** | The preferred name of the user | [optional]
**dob** | **\DateTime** | Users date of birth | [optional]
**prefix** | **string** | The prefix of a user | [optional]
**suffix** | **string** | The suffix of a user | [optional]
**profilePictures** | [**\SKY\School\Model\ProfilePictureUrls**](ProfilePictureUrls.md) |  | [optional]
**homeLanguages** | [**\SKY\School\Model\HomeLanguageRead[]**](HomeLanguageRead.md) | List of languages spoken at home by the user | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
