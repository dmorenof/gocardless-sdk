<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\OutboundPayment\ImportEntryValidationErrors;

/**
 * Validation errors for the outbound payment fields.
 */
final class OutboundPaymentDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Errors related to the amount field.
     */
    public \GoCardlessSDK\Collections\StringCollection $amount;
    /**
     * Errors related to the recipient bank account.
     */
    public \GoCardlessSDK\Collections\StringCollection $recipient_bank_account;
    /**
     * Errors related to the reference field.
     */
    public \GoCardlessSDK\Collections\StringCollection $reference;
    public \GoCardlessSDK\Enums\OutboundPayment\Scheme $scheme;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->amount = new \GoCardlessSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'recipient_bank_account' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->recipient_bank_account = new \GoCardlessSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'reference' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->reference = new \GoCardlessSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'scheme' => is_string($value) ? $this->scheme = \GoCardlessSDK\Enums\OutboundPayment\Scheme::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
