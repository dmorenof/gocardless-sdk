<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Institution\MultiResource;

/**
 * InstitutionMultiResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\Collections\Institution\MultiResource\Response\InstitutionsCollection $institutions;
    public \GoCardlessSDK\DTOs\Institution\PaginationMeta $meta;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'institutions' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->institutions = new \GoCardlessSDK\Collections\Institution\MultiResource\Response\InstitutionsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\Institution::class)) : parent::assignMember($name, $value),
            'meta' => $value instanceof \stdClass ? $this->meta = new \GoCardlessSDK\DTOs\Institution\PaginationMeta($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
