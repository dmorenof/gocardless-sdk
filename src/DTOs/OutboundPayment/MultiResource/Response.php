<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\OutboundPayment\MultiResource;

/**
 * OutboundPaymentMultiResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\OutboundPayment\PaginationMeta $meta;
    public \GoCardlessSDK\Collections\Event\Linked\OutboundPaymentsCollection $outbound_payments;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'meta' => $value instanceof \stdClass ? $this->meta = new \GoCardlessSDK\DTOs\OutboundPayment\PaginationMeta($value) : parent::assignMember($name, $value),
            'outbound_payments' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->outbound_payments = new \GoCardlessSDK\Collections\Event\Linked\OutboundPaymentsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\OutboundPayment::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
