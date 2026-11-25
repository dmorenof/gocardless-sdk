<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\CreditorBankAccounts\Post\CreditorBankAccounts;

final class AccountsLinksRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'creditor',
];

    /**
     * ID of the [creditor](https://docs.gocardless.com/docs/api-reference/creditor) that owns this bank account.
     * Example: "CR123"
     */
    public string $creditor;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'creditor' => is_string($value) ? $this->creditor = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
