<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Bank;

/**
 * Bank Account Holder Verification
 *
 * Create a bank account holder verification for a bank account.
 */
final class AccountHolderVerification extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
        'status',
        'type',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * The actual account name returned by the recipient's bank, populated only in the case of a partial match.
     */
    public ?string $actual_account_name;
    /**
     * The unique identifier for the bank account holder verification resource, e.g. "BAHV123".
     */
    public string $id;
    public \GoCardlessSDK\Enums\Bank\AccountHolderVerificationResult $result;
    public \GoCardlessSDK\Enums\Bank\AccountHolderVerificationStatus $status;
    public \GoCardlessSDK\Enums\Bank\AccountHolderVerificationType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'actual_account_name' => $value === null || is_string($value) ? $this->actual_account_name = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'result' => is_string($value) ? $this->result = \GoCardlessSDK\Enums\Bank\AccountHolderVerificationResult::from($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \GoCardlessSDK\Enums\Bank\AccountHolderVerificationStatus::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \GoCardlessSDK\Enums\Bank\AccountHolderVerificationType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
