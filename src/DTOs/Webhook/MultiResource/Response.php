<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Webhook\MultiResource;

/**
 * WebhookMultiResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Webhook\PaginationMeta $meta;
    public \GoCardlessSDK\Collections\Webhook\MultiResource\Response\WebhooksCollection $webhooks;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'meta' => $value instanceof \stdClass ? $this->meta = new \GoCardlessSDK\DTOs\Webhook\PaginationMeta($value) : parent::assignMember($name, $value),
            'webhooks' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->webhooks = new \GoCardlessSDK\Collections\Webhook\MultiResource\Response\WebhooksCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\Webhook::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
