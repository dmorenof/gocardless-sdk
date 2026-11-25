<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Block\SingleResource;

/**
 * BlockSingleResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Block $blocks;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'blocks' => $value instanceof \stdClass ? $this->blocks = new \GoCardlessSDK\DTOs\Block($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
