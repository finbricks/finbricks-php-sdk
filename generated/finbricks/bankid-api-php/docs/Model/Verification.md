# # Verification

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**trustFramework** | **string** | String determining the trust framework governing the identity verification process and the identity assurance level of the OP. |
**time** | [**\DateTime**](\DateTime.md) | Time stamp in ISO 8601:2004 [ISO8601-2004] YYYY-MM-DDThh:mm:ss±hh format representing the date and time when identity verification took place. Presence of this element might be required for certain trust frameworks. | [optional]
**verificationProcess** | **string** | Reference to the identity verification process as performed by the identity providers. Used for backtracing in case of disputes or audits. Presence of this element might be required for certain trust frameworks. In the case of BankID, the value of this element requires the tax number of the bank (financial institution) that carried out the identification process.  This is the bank&#39;s tax number, which is kept in the list of regulated and registered entities of the CNB JERRS. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
