<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Payment;

/**
 * PaymentAccountTransactionLinks
 */
final class AccountTransactionLinks extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * ID of the [outbound_payment](https://docs.gocardless.com/docs/api-reference/outbound-payment) linked to the transaction
     * Example: "OUT123"
     */
    public string $outbound_payment;
    /**
     * ID of the payment bank account.
     * Example: "BA123"
     */
    public string $payment_bank_account;
    /**
     * ID of the [payout](https://docs.gocardless.com/docs/api-reference/payout) linked to the transaction.
     * Example: "PO123"
     */
    public string $payout;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'outbound_payment' => is_string($value) ? $this->outbound_payment = $value : parent::assignMember($name, $value),
            'payment_bank_account' => is_string($value) ? $this->payment_bank_account = $value : parent::assignMember($name, $value),
            'payout' => is_string($value) ? $this->payout = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
