<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Payout;

/**
 * PayoutItemLinks
 */
final class ItemLinks extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Unique identifier, beginning with "MD". Note that this prefix may not apply to mandates created before 2016. Present only for the items of type `payment_refunded`, `refund` and `refund_funds_returned`.
     */
    public string $mandate;
    /**
     * Unique identifier, beginning with "PM".
     */
    public string $payment;
    /**
     * Unique identifier, beginning with "RF". Present only for the items of type `payment_refunded`, `refund` and `refund_funds_returned`.
     */
    public string $refund;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'mandate' => is_string($value) ? $this->mandate = $value : parent::assignMember($name, $value),
            'payment' => is_string($value) ? $this->payment = $value : parent::assignMember($name, $value),
            'refund' => is_string($value) ? $this->refund = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
