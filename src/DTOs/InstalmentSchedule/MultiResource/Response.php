<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\InstalmentSchedule\MultiResource;

/**
 * InstalmentScheduleMultiResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\Collections\Event\Linked\InstalmentSchedulesCollection $instalment_schedules;
    public \GoCardlessSDK\DTOs\InstalmentSchedule\PaginationMeta $meta;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'instalment_schedules' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->instalment_schedules = new \GoCardlessSDK\Collections\Event\Linked\InstalmentSchedulesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\InstalmentSchedule::class)) : parent::assignMember($name, $value),
            'meta' => $value instanceof \stdClass ? $this->meta = new \GoCardlessSDK\DTOs\InstalmentSchedule\PaginationMeta($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
