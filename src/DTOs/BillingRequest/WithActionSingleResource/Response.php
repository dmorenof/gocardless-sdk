<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\BillingRequest\WithActionSingleResource;

/**
 * BillingRequestWithActionSingleResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\BillingRequest\WithAction $billing_request_with_actions;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'billing_request_with_actions' => $value instanceof \stdClass ? $this->billing_request_with_actions = new \GoCardlessSDK\DTOs\BillingRequest\WithAction($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
