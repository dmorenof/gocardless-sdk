<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Customer;

/**
 * CustomerBankAccountLinks
 */
final class BankAccountLinks extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * ID of the [customer](https://docs.gocardless.com/docs/api-reference/customer) that owns this bank account.
     */
    public string $customer;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'customer' => is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
