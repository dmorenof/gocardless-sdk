<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\BillingRequest;

/**
 * BillingRequestFlowLinks
 */
final class FlowLinks extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'billing_request',
];

    /**
     * ID of the [billing request](https://docs.gocardless.com/docs/api-reference/billing-request) against which this flow was created.
     * Example: "BRQ123"
     */
    public string $billing_request;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'billing_request' => is_string($value) ? $this->billing_request = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
