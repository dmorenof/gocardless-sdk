<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Customer\SingleResource;

/**
 * CustomerSingleResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Customer $customers;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'customers' => $value instanceof \stdClass ? $this->customers = new \GoCardlessSDK\DTOs\Customer($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
