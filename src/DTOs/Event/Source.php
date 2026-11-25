<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Event;

/**
 * EventSource
 *
 * Audit information about the source of the event.
 */
final class Source extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The name of the event's source.
     * Example: "Joe Bloggs"
     */
    public string $name;
    /**
     * The type of the event's source.
     */
    public \GoCardlessSDK\Enums\Event\Source\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \GoCardlessSDK\Enums\Event\Source\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
