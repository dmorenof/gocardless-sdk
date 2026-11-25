<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\CustomerBankAccounts\Post\CustomerBankAccounts;

final class AccountsLinksRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'customer',
];

    /**
     * ID of the [customer](https://docs.gocardless.com/docs/api-reference/customer) that owns this bank account.
     */
    public string $customer;
    /**
     * ID of a [customer bank account token](https://docs.gocardless.com/docs/collect-payments/integration-types/javascript-drop-in-flow) to use in place of bank account parameters.
     */
    public string $customer_bank_account_token;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'customer' => is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'customer_bank_account_token' => is_string($value) ? $this->customer_bank_account_token = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
