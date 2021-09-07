# # Profile

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sub** | **string** | Identifier for the End-User at the Issuer. |
**txn** | **string** | The txn Claim as defined in [RFC8417] is used in the context of this extension to build audit trails across the parties involved in an OpenID Connect transaction. |
**verifiedClaims** | [**\Finbricks\Api\BankId\Model\VerifiedClaims**](VerifiedClaims.md) |  | [optional]
**titlePrefix** | **string** | End-User&#39;s title prefix. | [optional]
**titleSuffix** | **string** | End-User&#39;s title suffix. | [optional]
**givenName** | **string** | Given name(s) or first name(s) of the End-User. Note that in some cultures, people can have multiple given names; all can be present, with the names being separated by space characters. | [optional]
**familyName** | **string** | Surname(s) or last name(s) of the End-User. Note that in some cultures, people can have multiple family names or no family name; all can be present, with the names being separated by space characters. | [optional]
**middleName** | **string** | Middle name(s) of the End-User. Note that in some cultures, people can have multiple middle names; all can be present, with the names being separated by space characters. Also note that in some cultures, middle names are not used. | [optional]
**gender** | [**\Finbricks\Api\BankId\Model\Gender**](Gender.md) |  | [optional]
**birthdate** | [**\DateTime**](\DateTime.md) | End-User&#39;s birthday, represented as an ISO 8601:2004 [ISO8601-2004] YYYY-MM-DD format. The year MAY be 0000, indicating that it is omitted. To represent only the year, YYYY format is allowed. Note that depending on the underlying platform&#39;s date related function, providing just year can result in varying month and day, so the implementers need to take this factor into account to correctly process the dates. | [optional]
**birthnumber** | **string** | User&#39;s birth number. Birth number is required if nationality is Czech (\&quot;CZ\&quot;). | [optional]
**age** | **float** | Current age of the client given in years. | [optional]
**majority** | **bool** | An person is over the threshold of adulthood as recognized or declared in law. | [optional]
**dateOfDeath** | **string** | Date of death of the client. Practically still null. Only in the case of updating data (not yet part of the standard definition) is it possible to receive a specific date. | [optional]
**birthplace** | **string** | User&#39;s birth place. | [optional]
**primaryNationality** | **string** | Optional element user&#39;s primary nationality, ISO 3166-1 format, subtype ALPHA-2. This means two letters in uppercase. | [optional]
**nationalities** | **string[]** | All user&#39;s nationalities, ISO 3166-1 format, subtype ALPHA-2. This means two letters in uppercase. | [optional]
**maritalstatus** | [**\Finbricks\Api\BankId\Model\Maritalstatus**](Maritalstatus.md) |  | [optional]
**addresses** | [**\Finbricks\Api\BankId\Model\Address[]**](Address.md) | User&#39;s address | [optional]
**idcards** | [**\Finbricks\Api\BankId\Model\Idcard[]**](Idcard.md) | User&#39;s id cards | [optional]
**email** | **string** | End-User&#39;s preferred e-mail address. Its value MUST conform to the RFC 5322 [RFC5322] addr-spec syntax. The API consumer MUST NOT rely upon this value being unique. | [optional]
**phoneNumber** | **string** | End-User&#39;s preferred telephone number. E.164 [E.164] is RECOMMENDED as the format of this Claim, for example, +1 (425) 555-1212 or +56 (2) 687 2400. If the phone number contains an extension, it is RECOMMENDED that the extension be represented using the RFC 3966 [RFC3966] extension syntax, for example, +1 (604) 555-1234;ext&#x3D;5678. | [optional]
**pep** | **bool** | Flag that the authenticated user is politically exposed person (PEP). In financial regulation, a politically exposed person is one who has been entrusted with a prominent public function. A PEP generally presents a higher risk for potential involvement in bribery and corruption by virtue of their position and the influence that they may hold. | [optional]
**limitedLegalCapacity** | **bool** | An indication of whether this is a person with limited legal capacity. | [optional]
**paymentAccounts** | **string[]** | User&#39;s payment account numbers in CZ IBAN format. | [optional]
**updatedAt** | **float** | Time the End-User&#39;s information was last updated. Its value is a JSON number representing the number of seconds from 1970-01-01T0:0:0Z as measured in UTC until the date/time. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
