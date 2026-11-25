<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Payment\SingleResource;

/**
 * PaymentSingleResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Payment $payments;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payments' => $value instanceof \stdClass ? $this->payments = new \GoCardlessSDK\DTOs\Payment($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
