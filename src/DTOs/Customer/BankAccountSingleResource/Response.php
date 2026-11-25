<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Customer\BankAccountSingleResource;

/**
 * CustomerBankAccountSingleResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Customer\BankAccount $customer_bank_accounts;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'customer_bank_accounts' => $value instanceof \stdClass ? $this->customer_bank_accounts = new \GoCardlessSDK\DTOs\Customer\BankAccount($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
