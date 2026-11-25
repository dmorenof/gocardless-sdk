<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs;

/**
 * LogoSingleResourceResponse
 */
final class LogoSingleResourceResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Logo $logos;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'logos' => $value instanceof \stdClass ? $this->logos = new \GoCardlessSDK\DTOs\Logo($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
