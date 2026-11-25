<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\Subscriptions\BySubscriptionId\Actions\Pause\Post;

final class PauseSubscriptionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Customer\Metadata $metadata;
    /**
     * The number of cycles to pause a subscription for. A cycle is one duration of `interval` and `interval_unit`. This should be a non zero positive value.
     * For AUD subscriptions with `interval_unit: weekly` the minimum value varies between `3` & `4` because of the [mandatory minimum waiting period](https://docs.gocardless.com/docs/api-reference/subscription#resume-a-subscription).
     * For NZD subscriptions with `interval_unit: weekly` the minimum value is `2` because of the [mandatory minimum waiting period](https://docs.gocardless.com/docs/api-reference/subscription#resume-a-subscription).
     */
    public ?int $pause_cycles;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'pause_cycles' => $value === null || is_int($value) ? $this->pause_cycles = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
