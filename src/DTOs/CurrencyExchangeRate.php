<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs;

/**
 * Currency Exchange Rates
 *
 * Currency exchange rates from our foreign exchange provider.
 */
final class CurrencyExchangeRate extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'rate',
        'source',
        'target',
        'time',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * The exchange rate from the source to target currencies provided with up to 10 decimal places.
     */
    public string $rate;
    /**
     * Source currency
     */
    public string $source;
    /**
     * Target currency
     */
    public string $target;
    /**
     * Time at which the rate was retrieved from the provider.
     * Format: date-time
     */
    public string $time;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'rate' => is_string($value) ? $this->rate = $value : parent::assignMember($name, $value),
            'source' => is_string($value) ? $this->source = $value : parent::assignMember($name, $value),
            'target' => is_string($value) ? $this->target = $value : parent::assignMember($name, $value),
            'time' => is_string($value) ? $this->time = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
