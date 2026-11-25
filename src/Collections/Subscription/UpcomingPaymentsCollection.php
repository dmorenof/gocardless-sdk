<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\Subscription;

final class UpcomingPaymentsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\Subscription\UpcomingPaymentsDTO::class;
}
