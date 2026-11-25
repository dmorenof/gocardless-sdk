<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Payment\MultiResource;

/**
 * PaymentMultiResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Payment\PaginationMeta $meta;
    public \GoCardlessSDK\Collections\Event\Linked\PaymentsCollection $payments;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'meta' => $value instanceof \stdClass ? $this->meta = new \GoCardlessSDK\DTOs\Payment\PaginationMeta($value) : parent::assignMember($name, $value),
            'payments' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->payments = new \GoCardlessSDK\Collections\Event\Linked\PaymentsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\Payment::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
