<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\PayerAuthorisation;

/**
 * PayerAuthorisationLinks
 *
 * IDs of the created resources. Available after the Payer Authorisation is completed.
 */
final class Links extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Unique identifier, beginning with "BA".
     */
    public string $bank_account;
    /**
     * Unique identifier, beginning with "CU".
     */
    public string $customer;
    /**
     * Unique identifier, beginning with "MD". Note that this prefix may not apply to mandates created before 2016.
     */
    public string $mandate;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bank_account' => is_string($value) ? $this->bank_account = $value : parent::assignMember($name, $value),
            'customer' => is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'mandate' => is_string($value) ? $this->mandate = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
