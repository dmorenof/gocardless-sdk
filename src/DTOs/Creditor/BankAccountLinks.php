<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Creditor;

/**
 * CreditorBankAccountLinks
 */
final class BankAccountLinks extends \Dmorenof\SdkRuntime\DTO
{
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
