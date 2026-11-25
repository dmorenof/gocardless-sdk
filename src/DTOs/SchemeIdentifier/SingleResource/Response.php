<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\SchemeIdentifier\SingleResource;

/**
 * SchemeIdentifierSingleResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\SchemeIdentifier $scheme_identifiers;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'scheme_identifiers' => $value instanceof \stdClass ? $this->scheme_identifiers = new \GoCardlessSDK\DTOs\SchemeIdentifier($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
