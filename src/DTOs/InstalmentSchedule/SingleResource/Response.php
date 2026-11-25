<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\InstalmentSchedule\SingleResource;

/**
 * InstalmentScheduleSingleResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\InstalmentSchedule $instalment_schedules;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'instalment_schedules' => $value instanceof \stdClass ? $this->instalment_schedules = new \GoCardlessSDK\DTOs\InstalmentSchedule($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
