<?php

declare(strict_types=1);

namespace GoCardlessSDK\Responses\Errors;

final class Status500Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'error',
    ];

    public \GoCardlessSDK\DTOs\Error $error;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'error' => $value instanceof \stdClass ? $this->error = new \GoCardlessSDK\DTOs\Error($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
