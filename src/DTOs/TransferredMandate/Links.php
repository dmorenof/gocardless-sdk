<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\TransferredMandate;

/**
 * TransferredMandateLinks
 */
final class Links extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The ID of the updated [customer_bank_account](https://docs.gocardless.com/docs/api-reference/customer-bank-account)
     * Example: "BA123"
     */
    public string $customer_bank_account;
    /**
     * The ID of the transferred mandate
     * Example: "MD123"
     */
    public string $mandate;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'customer_bank_account' => is_string($value) ? $this->customer_bank_account = $value : parent::assignMember($name, $value),
            'mandate' => is_string($value) ? $this->mandate = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
