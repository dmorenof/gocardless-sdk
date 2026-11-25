<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\OutboundPayment;

/**
 * OutboundPaymentImportEntryLinks
 */
final class ImportEntryLinks extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * ID of the associated outbound payment, once the entry has been processed.
     * Example: "OUT123"
     */
    public ?string $outbound_payment;
    /**
     * ID of the associated import.
     * Example: "IM123"
     */
    public string $outbound_payment_import;
    /**
     * ID of the recipient bank account.
     * Example: "BA123"
     */
    public ?string $recipient_bank_account;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'outbound_payment' => $value === null || is_string($value) ? $this->outbound_payment = $value : parent::assignMember($name, $value),
            'outbound_payment_import' => is_string($value) ? $this->outbound_payment_import = $value : parent::assignMember($name, $value),
            'recipient_bank_account' => $value === null || is_string($value) ? $this->recipient_bank_account = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
