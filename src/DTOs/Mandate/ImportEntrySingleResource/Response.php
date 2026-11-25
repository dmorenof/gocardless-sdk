<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Mandate\ImportEntrySingleResource;

/**
 * MandateImportEntrySingleResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Mandate\ImportEntry $mandate_import_entries;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'mandate_import_entries' => $value instanceof \stdClass ? $this->mandate_import_entries = new \GoCardlessSDK\DTOs\Mandate\ImportEntry($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
