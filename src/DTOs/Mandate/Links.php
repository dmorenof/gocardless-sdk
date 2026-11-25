<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Mandate;

/**
 * MandateLinks
 */
final class Links extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * ID of the associated [creditor](https://docs.gocardless.com/docs/api-reference/creditor).
     * Example: "CR123"
     */
    public string $creditor;
    /**
     * ID of the associated [customer](https://docs.gocardless.com/docs/api-reference/customer)
     * Example: "CU123"
     */
    public string $customer;
    /**
     * ID of the associated [customer bank account](https://docs.gocardless.com/docs/api-reference/customer-bank-account) which the mandate is created and submits payments against.
     * Example: "BA123"
     */
    public string $customer_bank_account;
    /**
     * ID of the new mandate if this mandate has been replaced.
     * Example: "MD123"
     */
    public string $new_mandate;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'creditor' => is_string($value) ? $this->creditor = $value : parent::assignMember($name, $value),
            'customer' => is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'customer_bank_account' => is_string($value) ? $this->customer_bank_account = $value : parent::assignMember($name, $value),
            'new_mandate' => is_string($value) ? $this->new_mandate = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
