<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\OutboundPayment\SingleResource;

/**
 * OutboundPaymentSingleResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\OutboundPayment $outbound_payments;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'outbound_payments' => $value instanceof \stdClass ? $this->outbound_payments = new \GoCardlessSDK\DTOs\OutboundPayment($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
