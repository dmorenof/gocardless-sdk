<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Event\SingleResource;

/**
 * EventSingleResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Event $events;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'events' => $value instanceof \stdClass ? $this->events = new \GoCardlessSDK\DTOs\Event($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
