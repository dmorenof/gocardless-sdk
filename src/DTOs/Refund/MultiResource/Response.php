<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Refund\MultiResource;

/**
 * RefundMultiResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Refund\PaginationMeta $meta;
    public \GoCardlessSDK\Collections\Event\Linked\RefundsCollection $refunds;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'meta' => $value instanceof \stdClass ? $this->meta = new \GoCardlessSDK\DTOs\Refund\PaginationMeta($value) : parent::assignMember($name, $value),
            'refunds' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->refunds = new \GoCardlessSDK\Collections\Event\Linked\RefundsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\Refund::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
