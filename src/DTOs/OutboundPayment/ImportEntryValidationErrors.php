<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\OutboundPayment;

/**
 * OutboundPaymentImportEntryValidationErrors
 *
 * Per-field validation errors for this entry, keyed by resource type and then by field name.
 */
final class ImportEntryValidationErrors extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Validation errors for the outbound payment fields.
     */
    public \GoCardlessSDK\DTOs\OutboundPayment\ImportEntryValidationErrors\OutboundPaymentDTO $outbound_payment;
}
