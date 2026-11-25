<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\BankAccountHolderVerifications\Post\BankAccountHolderVerifications;

final class VerificationsLinksRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'bank_account',
];

    /**
     * The ID of the bank account to verify, e.g. "BA123".
     */
    public string $bank_account;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bank_account' => is_string($value) ? $this->bank_account = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
