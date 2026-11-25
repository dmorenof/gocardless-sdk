<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Payments\Get\Query;

final class ChargeDateDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Limit to records where the payment was or will be collected from the customer's bank account after the specified date.
     * Format: date
     */
    public string $gt;
    /**
     * Limit to records where the payment was or will be collected from the customer's bank account on or after the specified date.
     * Format: date
     */
    public string $gte;
    /**
     * Limit to records where the payment was or will be collected from the customer's bank account before the specified date.
     * Format: date
     */
    public string $lt;
    /**
     * Limit to records where the payment was or will be collected from the customer's bank account on or before the specified date.
     * Format: date
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
