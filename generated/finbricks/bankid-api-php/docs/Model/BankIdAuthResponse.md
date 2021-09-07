# # BankIdAuthResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**authStatus** | **string** | Authentication status  * __auth_approved__ - The client has already been authenticated before and the merchnat can call Account information APIs. * __need_auth__ - The client has not been authenticated before OR the authentication has expired. The merchant should redirect the client to the &#x60;redirectUrl&#x60;. |
**redirectUrl** | **string** | URL to bank&#39;s auth gateway  The &#x60;redirectUrl&#x60; will be returned in case the client has not been authenticated before or the authentication expired. The merchant should redirect the client to this &#x60;redirectUrl&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
