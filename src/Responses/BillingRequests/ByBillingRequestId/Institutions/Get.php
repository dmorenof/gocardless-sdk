<?php

declare(strict_types=1);

namespace GoCardlessSDK\Responses\BillingRequests\ByBillingRequestId\Institutions;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\Collections\BillingRequests\ByBillingRequestId\Institutions\Get\InstitutionsInstitutionsCollection $institutions;
    public \GoCardlessSDK\DTOs\Institution\PaginationMeta $meta;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'meta' => $value instanceof \stdClass ? $this->meta = new \GoCardlessSDK\DTOs\Institution\PaginationMeta($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
