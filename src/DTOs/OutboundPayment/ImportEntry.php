<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\OutboundPayment;

/**
 * Outbound Payment Import Entries
 *
 * Import Entries are the individual rows of an outbound payment import, representing each payment to be created.
 */
final class ImportEntry extends \Dmorenof\SdkRuntime\DTO
{
    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Amount, in the lowest denomination for the currency (e.g. pence in GBP, cents in EUR).
     */
    public ?int $amount;
    /**
     * Fixed [timestamp](https://docs.gocardless.com/docs/api-reference/data-conventions#dates-and-times), recording when this resource was created.
     * Format: date-time
     */
    public string $created_at;
    /**
     * Unique identifier, beginning with "IE".
     */
    public string $id;
    public \GoCardlessSDK\DTOs\OutboundPayment\ImportEntryLinks $links;
    public \GoCardlessSDK\DTOs\OutboundPayment\ImportEntryMetadata $metadata;
    /**
     * Fixed [timestamp](https://docs.gocardless.com/docs/api-reference/data-conventions#dates-and-times), recording when this entry was processed.
     * Format: date-time
     */
    public ?string $processed_at;
    /**
     * An optional reference for the outbound payment.
     */
    public ?string $reference;
    public \GoCardlessSDK\Enums\OutboundPayment\Scheme $scheme;
    public \GoCardlessSDK\DTOs\OutboundPayment\ImportEntryValidationErrors $validation_errors;
    public \GoCardlessSDK\Enums\OutboundPayment\ImportEntryVerificationResult $verification_result;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => $value === null || is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'created_at' => is_string($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'links' => $value instanceof \stdClass ? $this->links = new \GoCardlessSDK\DTOs\OutboundPayment\ImportEntryLinks($value) : parent::assignMember($name, $value),
            'processed_at' => $value === null || is_string($value) ? $this->processed_at = $value : parent::assignMember($name, $value),
            'reference' => $value === null || is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'scheme' => is_string($value) ? $this->scheme = \GoCardlessSDK\Enums\OutboundPayment\Scheme::from($value) : parent::assignMember($name, $value),
            'validation_errors' => $value instanceof \stdClass ? $this->validation_errors = new \GoCardlessSDK\DTOs\OutboundPayment\ImportEntryValidationErrors($value) : parent::assignMember($name, $value),
            'verification_result' => is_string($value) ? $this->verification_result = \GoCardlessSDK\Enums\OutboundPayment\ImportEntryVerificationResult::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
