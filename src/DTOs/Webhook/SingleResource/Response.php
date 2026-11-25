<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Webhook\SingleResource;

/**
 * WebhookSingleResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Webhook $webhooks;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'webhooks' => $value instanceof \stdClass ? $this->webhooks = new \GoCardlessSDK\DTOs\Webhook($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
