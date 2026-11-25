<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Customer\BankAccountMultiResource;

/**
 * CustomerBankAccountMultiResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\Collections\Customer\BankAccountMultiResource\Response\BankAccountsCollection $customer_bank_accounts;
    public \GoCardlessSDK\DTOs\Customer\BankAccountPaginationMeta $meta;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'customer_bank_accounts' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->customer_bank_accounts = new \GoCardlessSDK\Collections\Customer\BankAccountMultiResource\Response\BankAccountsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\Customer\BankAccount::class)) : parent::assignMember($name, $value),
            'meta' => $value instanceof \stdClass ? $this->meta = new \GoCardlessSDK\DTOs\Customer\BankAccountPaginationMeta($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
