<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\BillingRequest;

/**
 * BillingRequestSubscriptionRequestLinks
 */
final class SubscriptionRequestLinks extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * (Optional) ID of the [subscription](https://docs.gocardless.com/docs/api-reference/subscription) that was created from this subscription request.
     *
     */
    public string $subscription;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'subscription' => is_string($value) ? $this->subscription = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
