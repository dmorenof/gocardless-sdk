<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs;

/**
 * Funds Availability
 *
 * Checks if the payer's current balance is sufficient to cover the amount the merchant wants to charge within the consent parameters defined on the mandate.
 */
final class FundsAvailability extends \Dmorenof\SdkRuntime\DTO
{
    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Indicates if the amount is available
     */
    public bool $available;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'available' => is_bool($value) ? $this->available = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
