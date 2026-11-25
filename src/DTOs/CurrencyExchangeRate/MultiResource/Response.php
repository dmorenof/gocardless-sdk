<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\CurrencyExchangeRate\MultiResource;

/**
 * CurrencyExchangeRateMultiResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\Collections\CurrencyExchangeRate\MultiResource\Response\ExchangeRatesCollection $currency_exchange_rates;
    public \GoCardlessSDK\DTOs\CurrencyExchangeRate\PaginationMeta $meta;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'currency_exchange_rates' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->currency_exchange_rates = new \GoCardlessSDK\Collections\CurrencyExchangeRate\MultiResource\Response\ExchangeRatesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\CurrencyExchangeRate::class)) : parent::assignMember($name, $value),
            'meta' => $value instanceof \stdClass ? $this->meta = new \GoCardlessSDK\DTOs\CurrencyExchangeRate\PaginationMeta($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
