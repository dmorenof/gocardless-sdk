<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\BillingRequest\SingleResource;

/**
 * BillingRequestSingleResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\BillingRequest $billing_requests;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'billing_requests' => $value instanceof \stdClass ? $this->billing_requests = new \GoCardlessSDK\DTOs\BillingRequest($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
