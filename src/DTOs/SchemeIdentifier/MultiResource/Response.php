<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\SchemeIdentifier\MultiResource;

/**
 * SchemeIdentifierMultiResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\SchemeIdentifier\PaginationMeta $meta;
    public \GoCardlessSDK\Collections\Event\Linked\SchemeIdentifiersCollection $scheme_identifiers;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'meta' => $value instanceof \stdClass ? $this->meta = new \GoCardlessSDK\DTOs\SchemeIdentifier\PaginationMeta($value) : parent::assignMember($name, $value),
            'scheme_identifiers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->scheme_identifiers = new \GoCardlessSDK\Collections\Event\Linked\SchemeIdentifiersCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\SchemeIdentifier::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
