<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Subscription\MultiResource;

/**
 * SubscriptionMultiResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Subscription\PaginationMeta $meta;
    public \GoCardlessSDK\Collections\Event\Linked\SubscriptionsCollection $subscriptions;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'meta' => $value instanceof \stdClass ? $this->meta = new \GoCardlessSDK\DTOs\Subscription\PaginationMeta($value) : parent::assignMember($name, $value),
            'subscriptions' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->subscriptions = new \GoCardlessSDK\Collections\Event\Linked\SubscriptionsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\Subscription::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
