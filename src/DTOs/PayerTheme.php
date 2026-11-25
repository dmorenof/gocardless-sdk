<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs;

/**
 * Payer Theme
 *
 * Custom colour themes for payment pages and customer notifications.
 */
final class PayerTheme extends \Dmorenof\SdkRuntime\DTO
{
    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Unique identifier, beginning with "PTH".
     */
    public string $id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
