<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\BillingRequest;

/**
 * Billing Request with Actions
 *
 *  Billing Requests help create resources that require input or action from a customer. An example of required input might be additional customer billing details, while an action would be asking a customer to authorise a payment using their mobile banking app.
 *
 * See [Billing Requests: Overview](https://docs.gocardless.com/docs/collect-payments/setting-up-mandates) for how-to's, explanations and tutorials.
 */
final class WithAction extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'billing_requests',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \GoCardlessSDK\DTOs\BillingRequest\OneOfWithActionNullableBankAuthorisation $bank_authorisations;
    public \GoCardlessSDK\DTOs\BillingRequest $billing_requests;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'billing_requests' => $value instanceof \stdClass ? $this->billing_requests = new \GoCardlessSDK\DTOs\BillingRequest($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
