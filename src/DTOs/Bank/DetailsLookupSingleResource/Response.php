<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Bank\DetailsLookupSingleResource;

/**
 * BankDetailsLookupSingleResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Bank\DetailsLookup $bank_details_lookups;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bank_details_lookups' => $value instanceof \stdClass ? $this->bank_details_lookups = new \GoCardlessSDK\DTOs\Bank\DetailsLookup($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
