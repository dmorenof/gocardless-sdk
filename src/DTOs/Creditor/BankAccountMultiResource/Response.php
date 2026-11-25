<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Creditor\BankAccountMultiResource;

/**
 * CreditorBankAccountMultiResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\Collections\Creditor\BankAccountMultiResource\Response\BankAccountsCollection $creditor_bank_accounts;
    public \GoCardlessSDK\DTOs\Creditor\BankAccountPaginationMeta $meta;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'creditor_bank_accounts' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->creditor_bank_accounts = new \GoCardlessSDK\Collections\Creditor\BankAccountMultiResource\Response\BankAccountsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\Creditor\BankAccount::class)) : parent::assignMember($name, $value),
            'meta' => $value instanceof \stdClass ? $this->meta = new \GoCardlessSDK\DTOs\Creditor\BankAccountPaginationMeta($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
