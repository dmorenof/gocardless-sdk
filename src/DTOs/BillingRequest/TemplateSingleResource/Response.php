<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\BillingRequest\TemplateSingleResource;

/**
 * BillingRequestTemplateSingleResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\BillingRequest\Template $billing_request_templates;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'billing_request_templates' => $value instanceof \stdClass ? $this->billing_request_templates = new \GoCardlessSDK\DTOs\BillingRequest\Template($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
