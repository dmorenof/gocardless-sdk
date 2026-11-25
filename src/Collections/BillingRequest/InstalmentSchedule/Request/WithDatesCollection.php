<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\BillingRequest\InstalmentSchedule\Request;

final class WithDatesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\BillingRequest\InstalmentSchedule\Request\WithDatesDTO::class;
}
