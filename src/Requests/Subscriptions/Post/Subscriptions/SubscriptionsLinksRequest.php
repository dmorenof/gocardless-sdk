<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\Subscriptions\Post\Subscriptions;

final class SubscriptionsLinksRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'mandate',
    ];

    /**
     * ID of the associated [mandate](https://docs.gocardless.com/docs/api-reference/mandate) which the subscription will create payments against.
     * Example: "MD123"
     */
    public string $mandate;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'mandate' => is_string($value) ? $this->mandate = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
