<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Customer\PaginationMeta;

final class CursorsDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'after',
    'before',
];

    /**
     * Cursor pointing to the start of the desired set.
     */
    public ?string $after;
    /**
     * Cursor pointing to the end of the desired set.
     */
    public ?string $before;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'after' => $value === null || is_string($value) ? $this->after = $value : parent::assignMember($name, $value),
            'before' => $value === null || is_string($value) ? $this->before = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
