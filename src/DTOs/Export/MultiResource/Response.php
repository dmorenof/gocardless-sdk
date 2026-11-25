<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Export\MultiResource;

/**
 * ExportMultiResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\Collections\Export\MultiResource\Response\ExportsCollection $exports;
    public \GoCardlessSDK\DTOs\Export\PaginationMeta $meta;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'meta' => $value instanceof \stdClass ? $this->meta = new \GoCardlessSDK\DTOs\Export\PaginationMeta($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
