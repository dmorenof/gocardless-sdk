<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Export\SingleResource;

/**
 * ExportSingleResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Export $exports;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'exports' => $value instanceof \stdClass ? $this->exports = new \GoCardlessSDK\DTOs\Export($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
