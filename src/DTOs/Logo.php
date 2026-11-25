<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs;

/**
 * Logos
 *
 * Logos are image uploads that, when associated with a creditor, are shown on the [billing request flow](https://docs.gocardless.com/docs/api-reference/billing-request-flow) payment pages.
 */
final class Logo extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Unique identifier, beginning with "LO".
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
