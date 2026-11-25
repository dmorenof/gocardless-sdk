<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Creditor\BankAccountSingleResource;

/**
 * CreditorBankAccountSingleResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Creditor\BankAccount $creditor_bank_accounts;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'creditor_bank_accounts' => $value instanceof \stdClass ? $this->creditor_bank_accounts = new \GoCardlessSDK\DTOs\Creditor\BankAccount($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
