<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Payout;

/**
 * PayoutLinks
 */
final class Links extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * ID of [creditor](https://docs.gocardless.com/docs/api-reference/creditor) who will receive this payout, i.e. the owner of the `creditor_bank_account`.
     * Example: "CR123"
     */
    public string $creditor;
    /**
     * ID of [bank account](https://docs.gocardless.com/docs/api-reference/creditor-bank-account) which this will be sent to.
     * Example: "BA123"
     */
    public string $creditor_bank_account;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'creditor' => is_string($value) ? $this->creditor = $value : parent::assignMember($name, $value),
            'creditor_bank_account' => is_string($value) ? $this->creditor_bank_account = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
