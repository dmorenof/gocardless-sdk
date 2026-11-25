<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Refund;

/**
 * RefundLinks
 */
final class Links extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * ID of the [mandate](https://docs.gocardless.com/docs/api-reference/mandate) against which the refund is being made.
     * Example: "MD123"
     */
    public string $mandate;
    /**
     * ID of the [payment](https://docs.gocardless.com/docs/api-reference/payment) against which the refund is being made.
     * Example: "PM123"
     */
    public string $payment;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'mandate' => is_string($value) ? $this->mandate = $value : parent::assignMember($name, $value),
            'payment' => is_string($value) ? $this->payment = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
