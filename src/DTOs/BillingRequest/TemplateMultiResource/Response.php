<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\BillingRequest\TemplateMultiResource;

/**
 * BillingRequestTemplateMultiResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\Collections\BillingRequest\TemplateMultiResource\Response\BillingTemplatesCollection $billing_request_templates;
    public \GoCardlessSDK\DTOs\BillingRequest\TemplatePaginationMeta $meta;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'billing_request_templates' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->billing_request_templates = new \GoCardlessSDK\Collections\BillingRequest\TemplateMultiResource\Response\BillingTemplatesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\BillingRequest\Template::class)) : parent::assignMember($name, $value),
            'meta' => $value instanceof \stdClass ? $this->meta = new \GoCardlessSDK\DTOs\BillingRequest\TemplatePaginationMeta($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
