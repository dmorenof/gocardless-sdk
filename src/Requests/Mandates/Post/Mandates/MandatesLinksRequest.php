<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\Mandates\Post\Mandates;

final class MandatesLinksRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'customer_bank_account',
    ];

    /**
     * ID of the associated [creditor](https://docs.gocardless.com/docs/api-reference/creditor). Only required if your account manages multiple creditors.
     * Example: "CR123"
     */
    public string $creditor;
    /**
     * ID of the associated [customer bank account](https://docs.gocardless.com/docs/api-reference/customer-bank-account) which the mandate is created and submits payments against.
     * Example: "BA123"
     */
    public string $customer_bank_account;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'creditor' => is_string($value) ? $this->creditor = $value : parent::assignMember($name, $value),
            'customer_bank_account' => is_string($value) ? $this->customer_bank_account = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
