<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Mandate;

/**
 * MandateImportEntryPaginationMeta
 *
 * Cursor pagination information
 */
final class ImportEntryPaginationMeta extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'cursors',
    'limit',
];

    public \GoCardlessSDK\DTOs\Mandate\ImportEntryPaginationMeta\CursorsDTO $cursors;
    /**
     * Example: 50
     */
    public int $limit;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'limit' => is_int($value) ? $this->limit = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
