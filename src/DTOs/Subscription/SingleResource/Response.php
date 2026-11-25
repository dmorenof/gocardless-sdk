<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Subscription\SingleResource;

/**
 * SubscriptionSingleResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Subscription $subscriptions;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'subscriptions' => $value instanceof \stdClass ? $this->subscriptions = new \GoCardlessSDK\DTOs\Subscription($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
