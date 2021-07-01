# # PaymentProvidersStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabledForMerchant** | **bool** | An indicator of whether the provider is enabled for the Merchant. | [optional]
**currentStatus** | **string** | * __online__ - APIs of payment provider are online. * __offline-planned__ - APIs of payment provider are offline due to a planned outage. * __offline-error__ - (comming soon!) APIs of payment provider are offline due to unknown reasons. | [optional]
**plannedOutages** | [**\Finbricks\Api\Status\Model\PaymentProvidersStatusPlannedOutages[]**](PaymentProvidersStatusPlannedOutages.md) | Planned outages stated by the payment provider typically days before the outage. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
