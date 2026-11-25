<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs;

/**
 * Cursor pagination information
 */
final class PaginationMeta extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'cursors',
    'limit',
];

    public \GoCardlessSDK\DTOs\PaginationMeta\CursorsDTO $cursors;
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
