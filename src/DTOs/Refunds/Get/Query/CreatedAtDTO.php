<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Refunds\Get\Query;

final class CreatedAtDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Limit to records created after the specified date-time.
     * Format: date-time
     */
    public string $gt;
    /**
     * Limit to records created on or after the specified date-time.
     * Format: date-time
     */
    public string $gte;
    /**
     * Limit to records created before the specified date-time.
     * Format: date-time
     */
    public string $lt;
    /**
     * Limit to records created on or before the specified date-time.
     * Format: date-time
     */
    public string $lte;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'gt' => is_string($value) ? $this->gt = $value : parent::assignMember($name, $value),
            'gte' => is_string($value) ? $this->gte = $value : parent::assignMember($name, $value),
            'lt' => is_string($value) ? $this->lt = $value : parent::assignMember($name, $value),
            'lte' => is_string($value) ? $this->lte = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
