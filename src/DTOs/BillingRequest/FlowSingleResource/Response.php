<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\BillingRequest\FlowSingleResource;

/**
 * BillingRequestFlowSingleResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\BillingRequest\Flow $billing_request_flows;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'billing_request_flows' => $value instanceof \stdClass ? $this->billing_request_flows = new \GoCardlessSDK\DTOs\BillingRequest\Flow($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
