<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Customer\MultiResource;

/**
 * CustomerMultiResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\Collections\Customer\MultiResource\Response\CustomersCollection $customers;
    public \GoCardlessSDK\DTOs\Customer\PaginationMeta $meta;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'customers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->customers = new \GoCardlessSDK\Collections\Customer\MultiResource\Response\CustomersCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\Customer::class)) : parent::assignMember($name, $value),
            'meta' => $value instanceof \stdClass ? $this->meta = new \GoCardlessSDK\DTOs\Customer\PaginationMeta($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
