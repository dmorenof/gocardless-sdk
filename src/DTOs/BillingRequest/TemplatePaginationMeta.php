<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\BillingRequest;

/**
 * BillingRequestTemplatePaginationMeta
 *
 * Cursor pagination information
 */
final class TemplatePaginationMeta extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'cursors',
        'limit',
    ];

    public \GoCardlessSDK\DTOs\BillingRequest\TemplatePaginationMeta\CursorsDTO $cursors;
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
