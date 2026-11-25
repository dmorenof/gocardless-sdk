<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\BillingRequest;

/**
 * BillingRequestPaymentRequestLinks
 */
final class PaymentRequestLinks extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * (Optional) ID of the [payment](https://docs.gocardless.com/docs/api-reference/payment) that was created from this payment request.
     */
    public string $payment;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payment' => is_string($value) ? $this->payment = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
