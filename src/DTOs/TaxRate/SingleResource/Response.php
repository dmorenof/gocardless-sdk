<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\TaxRate\SingleResource;

/**
 * TaxRateSingleResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\TaxRate $tax_rates;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'tax_rates' => $value instanceof \stdClass ? $this->tax_rates = new \GoCardlessSDK\DTOs\TaxRate($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
