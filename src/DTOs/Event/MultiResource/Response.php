<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Event\MultiResource;

/**
 * EventMultiResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\Collections\Event\MultiResource\Response\EventsCollection $events;
    public \GoCardlessSDK\DTOs\Event\Linked $linked;
    public \GoCardlessSDK\DTOs\Event\PaginationMeta $meta;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'events' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->events = new \GoCardlessSDK\Collections\Event\MultiResource\Response\EventsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\Event::class)) : parent::assignMember($name, $value),
            'linked' => $value instanceof \stdClass ? $this->linked = new \GoCardlessSDK\DTOs\Event\Linked($value) : parent::assignMember($name, $value),
            'meta' => $value instanceof \stdClass ? $this->meta = new \GoCardlessSDK\DTOs\Event\PaginationMeta($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
