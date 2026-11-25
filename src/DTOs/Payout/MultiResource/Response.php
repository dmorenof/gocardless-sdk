<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Payout\MultiResource;

/**
 * PayoutMultiResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Payout\PaginationMeta $meta;
    public \GoCardlessSDK\Collections\Event\Linked\PayoutsCollection $payouts;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'meta' => $value instanceof \stdClass ? $this->meta = new \GoCardlessSDK\DTOs\Payout\PaginationMeta($value) : parent::assignMember($name, $value),
            'payouts' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->payouts = new \GoCardlessSDK\Collections\Event\Linked\PayoutsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\Payout::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
