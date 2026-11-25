<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\OutboundPayment;

/**
 * OutboundPaymentImportEntryCounts
 */
final class ImportEntryCounts extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Count of entries that encountered a terminal error during the outbound payment generation process.
     * Example: 0
     */
    public int $failed_to_process;
    /**
     * Count of entries that failed validation checks.
     * Example: 0
     */
    public int $invalid;
    /**
     * Count of entries successfully converted into outbound payments after the import was authorised.
     * Example: 1000
     */
    public int $processed;
    /**
     * The total number of entries included in the import.
     * Example: 1000
     */
    public int $total;
    /**
     * Count of entries that passed validation checks.
     * Example: 1000
     */
    public int $valid;
    /**
     * Total count of entries checked against bank account holder verification services (e.g., CoP).
     * Example: 0
     */
    public int $verified;
    /**
     * Count of entries where the account holder name was a direct match.
     * Example: 0
     */
    public int $verified_with_full_match;
    /**
     * Count of entries where the account holder name did not match the records.
     * Example: 0
     */
    public int $verified_with_no_match;
    /**
     * Count of entries where the account holder name was a close match.
     * Example: 0
     */
    public int $verified_with_partial_match;
    /**
     * Count of entries where the verification service could not return a definitive result.
     * Example: 0
     */
    public int $verified_with_unable_to_match;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'failed_to_process' => is_int($value) ? $this->failed_to_process = $value : parent::assignMember($name, $value),
            'invalid' => is_int($value) ? $this->invalid = $value : parent::assignMember($name, $value),
            'processed' => is_int($value) ? $this->processed = $value : parent::assignMember($name, $value),
            'total' => is_int($value) ? $this->total = $value : parent::assignMember($name, $value),
            'valid' => is_int($value) ? $this->valid = $value : parent::assignMember($name, $value),
            'verified' => is_int($value) ? $this->verified = $value : parent::assignMember($name, $value),
            'verified_with_full_match' => is_int($value) ? $this->verified_with_full_match = $value : parent::assignMember($name, $value),
            'verified_with_no_match' => is_int($value) ? $this->verified_with_no_match = $value : parent::assignMember($name, $value),
            'verified_with_partial_match' => is_int($value) ? $this->verified_with_partial_match = $value : parent::assignMember($name, $value),
            'verified_with_unable_to_match' => is_int($value) ? $this->verified_with_unable_to_match = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
