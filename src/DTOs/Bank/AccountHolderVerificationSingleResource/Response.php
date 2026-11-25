<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Bank\AccountHolderVerificationSingleResource;

/**
 * BankAccountHolderVerificationSingleResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Bank\AccountHolderVerification $bank_account_holder_verifications;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bank_account_holder_verifications' => $value instanceof \stdClass ? $this->bank_account_holder_verifications = new \GoCardlessSDK\DTOs\Bank\AccountHolderVerification($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
