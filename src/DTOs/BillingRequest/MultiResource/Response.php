<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\BillingRequest\MultiResource;

/**
 * BillingRequestMultiResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\Collections\BillingRequest\MultiResource\Response\BillingRequestsCollection $billing_requests;
    public \GoCardlessSDK\DTOs\BillingRequest\PaginationMeta $meta;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'meta' => $value instanceof \stdClass ? $this->meta = new \GoCardlessSDK\DTOs\BillingRequest\PaginationMeta($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
