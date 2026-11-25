<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Bank\AccountDetailSingleResource;

/**
 * BankAccountDetailSingleResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Bank\AccountDetail $bank_account_details;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bank_account_details' => $value instanceof \stdClass ? $this->bank_account_details = new \GoCardlessSDK\DTOs\Bank\AccountDetail($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
