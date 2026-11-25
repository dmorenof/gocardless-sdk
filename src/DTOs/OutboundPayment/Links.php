<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\OutboundPayment;

/**
 * OutboundPaymentLinks
 */
final class Links extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * ID of the creditor who sends the outbound payment.
     * Example: "CR123"
     */
    public string $creditor;
    /**
     * ID of the [customer](https://docs.gocardless.com/docs/api-reference/customer) that receives this outbound payment
     * Example: "CU123"
     */
    public string $customer;
    /**
     * ID of the outbound payment import that created this outbound payment.
     * Example: "IM123"
     */
    public string $outbound_payment_import;
    /**
     * ID of the customer bank account which receives the outbound payment.
     * Example: "BA123"
     */
    public string $recipient_bank_account;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'creditor' => is_string($value) ? $this->creditor = $value : parent::assignMember($name, $value),
            'customer' => is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'outbound_payment_import' => is_string($value) ? $this->outbound_payment_import = $value : parent::assignMember($name, $value),
            'recipient_bank_account' => is_string($value) ? $this->recipient_bank_account = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
