<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\Event\Linked;

final class InstalmentSchedulesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\InstalmentSchedule::class;
}
