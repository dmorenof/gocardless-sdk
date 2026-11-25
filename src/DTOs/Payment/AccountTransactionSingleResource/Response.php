<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Payment\AccountTransactionSingleResource;

/**
 * PaymentAccountTransactionSingleResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Payment\AccountTransaction $payment_account_transactions;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payment_account_transactions' => $value instanceof \stdClass ? $this->payment_account_transactions = new \GoCardlessSDK\DTOs\Payment\AccountTransaction($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
