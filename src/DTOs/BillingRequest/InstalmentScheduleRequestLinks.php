<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\BillingRequest;

/**
 * BillingRequestInstalmentScheduleRequestLinks
 */
final class InstalmentScheduleRequestLinks extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * (Optional) ID of the [instalment_schedule](https://docs.gocardless.com/docs/api-reference/instalment-schedule) that was created from this instalment schedule request.
     *
     */
    public string $instalment_schedule;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'instalment_schedule' => is_string($value) ? $this->instalment_schedule = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
