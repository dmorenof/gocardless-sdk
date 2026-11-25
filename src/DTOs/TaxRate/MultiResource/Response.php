<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\TaxRate\MultiResource;

/**
 * TaxRateMultiResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\TaxRate\PaginationMeta $meta;
    public \GoCardlessSDK\Collections\TaxRate\MultiResource\Response\TaxRatesCollection $tax_rates;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'meta' => $value instanceof \stdClass ? $this->meta = new \GoCardlessSDK\DTOs\TaxRate\PaginationMeta($value) : parent::assignMember($name, $value),
            'tax_rates' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->tax_rates = new \GoCardlessSDK\Collections\TaxRate\MultiResource\Response\TaxRatesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\TaxRate::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
