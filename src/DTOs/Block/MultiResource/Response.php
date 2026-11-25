<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Block\MultiResource;

/**
 * BlockMultiResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\Collections\Block\MultiResource\Response\BlocksCollection $blocks;
    public \GoCardlessSDK\DTOs\Block\PaginationMeta $meta;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'blocks' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->blocks = new \GoCardlessSDK\Collections\Block\MultiResource\Response\BlocksCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\Block::class)) : parent::assignMember($name, $value),
            'meta' => $value instanceof \stdClass ? $this->meta = new \GoCardlessSDK\DTOs\Block\PaginationMeta($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
