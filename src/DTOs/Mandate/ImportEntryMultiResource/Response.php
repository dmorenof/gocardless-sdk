<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Mandate\ImportEntryMultiResource;

/**
 * MandateImportEntryMultiResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\Collections\Mandate\ImportEntryMultiResource\Response\ImportEntriesCollection $mandate_import_entries;
    public \GoCardlessSDK\DTOs\Mandate\ImportEntryPaginationMeta $meta;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'mandate_import_entries' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->mandate_import_entries = new \GoCardlessSDK\Collections\Mandate\ImportEntryMultiResource\Response\ImportEntriesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\Mandate\ImportEntry::class)) : parent::assignMember($name, $value),
            'meta' => $value instanceof \stdClass ? $this->meta = new \GoCardlessSDK\DTOs\Mandate\ImportEntryPaginationMeta($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
