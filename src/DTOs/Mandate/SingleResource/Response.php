<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Mandate\SingleResource;

/**
 * MandateSingleResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Mandate $mandates;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'mandates' => $value instanceof \stdClass ? $this->mandates = new \GoCardlessSDK\DTOs\Mandate($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
