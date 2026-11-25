<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\OutboundPayment\ImportEntryMultiResource;

/**
 * OutboundPaymentImportEntryMultiResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Cursor pagination information
     */
    public \GoCardlessSDK\DTOs\OutboundPayment\ImportEntryMultiResource\Response\MetaDTO $meta;
    public \GoCardlessSDK\Collections\OutboundPayment\ImportEntryMultiResource\Response\ImportEntriesCollection $outbound_payment_import_entries;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'outbound_payment_import_entries' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->outbound_payment_import_entries = new \GoCardlessSDK\Collections\OutboundPayment\ImportEntryMultiResource\Response\ImportEntriesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\OutboundPayment\ImportEntry::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
