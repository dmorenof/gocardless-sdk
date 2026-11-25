<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\MandateImportEntries\Post\MandateImportEntries;

final class EntriesLinksRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'mandate_import',
];

    /**
     * Unique identifier, beginning with "IM".
     */
    public string $mandate_import;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'mandate_import' => is_string($value) ? $this->mandate_import = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
